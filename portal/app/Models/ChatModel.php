<?php
namespace App\Models;
use CodeIgniter\Model;

class ChatModel extends Model
{
    protected $table = 'chat_app';
    protected $primaryKey = 'id';
    protected $allowedFields = ['SenderEmail', 'ReceiverEmail', 'Message', 'SenderName', 'ReceiverName', 'SenderAcct', 'ReceiverAcct', 'ReadChat', 'TimeCreated'];
    
    
    public function getChatContacts($senderEmail)
    {
        return $this->distinct()
                ->select("(CASE 
                            WHEN SenderEmail = '$senderEmail' THEN ReceiverName
                            WHEN ReceiverEmail = '$senderEmail' THEN SenderName
                            ELSE ReceiverName END) AS ReceiverName", FALSE)
                ->select("(CASE 
                            WHEN SenderEmail = '$senderEmail' THEN ReceiverEmail
                            WHEN ReceiverEmail = '$senderEmail' THEN SenderEmail
                            ELSE ReceiverEmail END) AS ReceiverEmail", FALSE)
        		->select('ANY_VALUE(TimeCreated) AS TimeCreated')
    ->where("SenderEmail", $senderEmail)
    ->orWhere("ReceiverEmail", $senderEmail)
    ->groupBy("ReceiverEmail, SenderEmail, ReceiverName, SenderName")
    ->orderBy('TimeCreated', 'DESC')
    ->findAll();
    }
    
    public function getLatestChatMessage($senderEmail)
    {
       return $this->distinct()
                ->select("(CASE 
                            WHEN SenderEmail = '$senderEmail' THEN ReceiverName
                            WHEN ReceiverEmail = '$senderEmail' THEN SenderName
                            ELSE ReceiverName END) AS ReceiverName", FALSE)
                ->select("(CASE 
                            WHEN SenderEmail = '$senderEmail' THEN ReceiverEmail
                            WHEN ReceiverEmail = '$senderEmail' THEN SenderEmail
                            ELSE ReceiverEmail END) AS ReceiverEmail", FALSE)
                ->select('Message')
                ->select('TimeCreated')
                ->where("SenderEmail", $senderEmail)
                ->orWhere("ReceiverEmail", $senderEmail)
                ->orderBy('TimeCreated', 'DESC')
                ->findAll();
                
    }
    
    public function fetchFirstChat($senderEmail, $receiverEmail)
    {
        return $this->select('Message, TimeCreated')
               ->where("SenderEmail = '$senderEmail' AND ReceiverEmail = '$receiverEmail'")
                ->orWhere("SenderEmail = '$receiverEmail' AND ReceiverEmail = '$senderEmail'")
               ->orderBy('TimeCreated', 'DESC')
               ->first();
    }
    
    public function getData($senderEmail, $receiverEmail)
    {
        $query = $this->select('Message, TimeCreated')
                      ->select("CASE 
                                    WHEN SenderEmail = '$senderEmail' THEN 'receiver'
                                    WHEN SenderEmail = '$receiverEmail' THEN 'sender' 
                                  END AS MessageOwner")
                      ->where("(SenderEmail = '$senderEmail' AND ReceiverEmail = '$receiverEmail') 
                                OR (SenderEmail = '$receiverEmail' AND ReceiverEmail = '$senderEmail')")
                      ->orderBy('TimeCreated', 'ASC')
                      ->findAll();
        
        return $query;
    }
    
    public function updateReadChat($senderEmail, $receiverEmail)
    {
        $this->set('ReadChat', '1');
        $this->where('SenderEmail', $senderEmail);
        $this->where('ReceiverEmail', $receiverEmail);
        $this->orWhere('SenderEmail', $receiverEmail);
        $this->where('ReceiverEmail', $senderEmail);
        return $this->update();

    }

	public function markMessageAsRead($sender, $receiver)
	{
    	$this->set('ReadChat', 1);
        $this->where('SenderEmail', $receiver);
        $this->where('ReceiverEmail', $sender);
        return $this->update();
    // $this->db->table('messages')
    //          ->where('id', $messageId)
    //          ->update(['isRead' => true]);
	}
    
public function isFirstMessage($senderEmail, $receiverEmail)
{
	// If there are no messages from the sender to the receiver, it's the first message
    $sentCount = $this->where('SenderEmail', $senderEmail)
                      ->where('ReceiverEmail', $receiverEmail)
                      ->countAllResults();

	if ($sentCount === 0) {
		return 1;
	}
    // Check if there are any unread messages from the sender to the receiver
    $unreadCount = $this->where('SenderEmail', $senderEmail)
                        ->where('ReceiverEmail', $receiverEmail)
                        ->where('ReadChat', 0)
                        ->countAllResults();

	if ($unreadCount === 0) {
    	return 1;
    } else {
    	return 0;
    }

}

    public function insertChat($data)
    {
        $this->insert($data);
        return $this->db->insertID();
    }

}
