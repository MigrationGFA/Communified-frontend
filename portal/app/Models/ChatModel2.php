<?php
namespace App\Models;
use CodeIgniter\Model;

class ChatModel2 extends Model
{
    protected $table = 'chat_app';
    protected $primaryKey = 'id';
    protected $allowedFields = ['SenderEmail', 'ReceiverEmail', 'Message', 'SenderName', 'ReceiverName', 'TimeCreated'];
    
    
    public function getChatContacts($senderEmail)
    {
         $query = $this->db->query("CALL GetRecentChatsForGateway(?)", [$senderEmail]);
    
        return $query->getResultArray();
    }
    
    public function getLatestChatMessage($senderEmail)
    {
      $query = $this->db->query("CALL GetLatestChatMessageForGateway(?)", [$senderEmail]);
    
        return $query->getResultArray();
    }
    
    public function fetchFirstChat($senderEmail, $receiverEmail)
    {
       $query = $this->db->query("CALL FetchFirstChatForGateway(?, ?)", [$senderEmail, $receiverEmail]);
    
        return $query->getRowArray(); 
       
    }
    
    public function getData($senderEmail, $receiverEmail)
    {
        $query = $this->db->query("CALL GetChatMessagesForGateway(?, ?)", [$senderEmail, $receiverEmail]);
    
        return $query->getResultArray();
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
    
    public function insertChat($data)
    {
        $this->insert($data);
        return $this->db->insertID();
    }
    
   
}
