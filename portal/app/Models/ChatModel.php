<?php

namespace App\Models;

use CodeIgniter\Model;

class ChatModel extends Model {
    protected $table = 'user_messages';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $returnType = 'array';
    
    public function __construct()
    {
        parent::__construct();
        $this->db = db_connect();
    }
    protected $allowedFields = ['SenderEmail', 'ReceiverEmail', 'Message', 'time'];

    // public function sentMessage($data)
    // {
    //     $this->insert($data);
    // }

    // public function getmessage($data)
    // {
    //     $logged_in_email = session()->get('email');
    //     $builder_message = $this->db->table('user_messages');
    //     $builder_message->where("SenderEmail = '$logged_in_email' AND ReceiverEmail = '$data'")->orWhere("SenderEmail = '$data' AND ReceiverEmail = '$logged_in_email'");
    //     $message_query = $builder_message->get();
    //     if ($message_query->getNumRows() > 0) {
    //         $result = $message_query->getResultArray()[0];
    //     } else{
    //         $result = '';
    //     }
    //     return $result;
        
    // }

    public function getmessage($logged_in_email, $receiver_email)
    {
        $builder = $this->db->table('user_messages');
        $builder->where("SenderEmail = '$logged_in_email' AND ReceiverEmail = '$receiver_email'")
        ->orwhere("SenderEmail = '$receiver_email' AND ReceiverEmail = '$logged_in_email'");
        $query = $builder->get(); 
        if($query->getNumRows() > 0 )
        {
            return $query->getResultArray();
        }
        else
        {
            return 0;
        }
    }


    public function getLastMessage($data)
    {
        $session = session();
        $logged_in_email = $session->get('email');
        $session_email = $this->encrypt->decode($logged_in_email);

        $where = "SenderEmail = '$session_email' AND ReceiverEmail = '$data' OR SenderEmail = '$data' AND ReceiverEmail = '$session_email'";
        $this->where($where);
        $this->orderBy('time', 'DESC');
        $result = $this->findAll(1);
        return $result;
    }
     
	 
    public function sentMessage($data){

        $builder = $this->db->table('user_messages');
        $query = $builder->insert($data);
        
        if ($builder->resultID->num_rows > 0) {
            return true; // Or you can return $builder->insertID() if you need the inserted ID
        } else {
            return false;
        }

        // $this->db->insert('user_messages',$data);

        // if($this->db->affectedRows() > 0 )
        // {
        //     return $this->db->affectedRows();
        // }
        // else
        // {
        //     return 0;
        // }
    }

    // public function getmessage($data){
    //   $logged_in_email = $this->encrypt->decode($this->session->userdata('email'));
    //   $this->db->select('*');
    //   $session_email = $logged_in_email;
    //   $where = "SenderEmail = '$session_email' AND ReceiverEmail = '$data' OR 
	// 	  SenderEmail = '$data' AND ReceiverEmail = '$session_email'";
    //   $this->db->where($where);
    //   // $this->db->order_by('time', 'ASC');
    //   $result = $this->db->get('user_messages')->result_array();
    //   return $result;
    // }
    // public function getLastMessage($data){
    //   $logged_in_email = $this->encrypt->decode($this->session->userdata('email'));
    //   $this->db->select('*');
    //   $session_email = $logged_in_email;
    //   $where = "sender_message_email = '$session_email' AND receiver_message_email = '$data' OR 
    //   sender_message_email = '$data' AND receiver_message_email = '$session_email'";
    //   $this->db->where($where);
    //   $this->db->order_by('time', 'DESC');
    //   $result = $this->db->get('user_messages', 1)->result_array();
    //   return $result;
    // }

    public function getSuggestedContacts(){
        $builder = $this->db->table('login');
        $builder->select('email');
        $builder->where('account_type', 'startup');
        //$builder->where('email', 'daddymmg0002@gmail.com');
        
        $query = $builder->get();

        if ($query->getNumRows() > 0) {
            $startups = $query->getResultArray();
        } else {
            $startups = [];
        }

        if (!empty($startups)) {
            $randomContacts = array_rand($startups, 10);

            $suggestedContacts = array();
            foreach ($randomContacts as $key) {
                $suggestedContacts[] = $startups[$key];
            }

            return $suggestedContacts;
        } else {
            return [];
        }
    }

    public function getRecentChats($currentUserEmail)
    {
        return $this->select("
                CASE 
                    WHEN SenderEmail = '$currentUserEmail' THEN ReceiverEmail
                    WHEN ReceiverEmail = '$currentUserEmail' THEN SenderEmail
                END AS other_user_email,
                MAX(STR_TO_DATE(TimeSent, '%Y-%m-%d %H:%i:%s')) AS last_message_timestamp,
                MAX(Message) AS last_message_content
            ")
            ->where("SenderEmail = '$currentUserEmail' OR ReceiverEmail = '$currentUserEmail'")
            ->groupBy('other_user_email')
            ->orderBy('last_message_timestamp', 'DESC')
            ->findAll();
    }

    // public function getSearchedContact($searchQuery = ''){
    //     $builder = $this->db->table('Startups_Inv');
    //     $builder->select('Contact_Email');
        
    //     if (!empty($searchQuery)) {
    //         // Add conditions to search by email or name
    //         $builder->groupStart();
    //         $builder->like('Startup_Company_Name', $searchQuery);
    //         $builder->orLike('Primary_Contact_Name', $searchQuery);
    //         $builder->groupEnd();
    //     }

    //     $query = $builder->get();
    
    //     if ($query->getNumRows() > 0) {
    //         $startups = $query->getResultArray();
    
    //         $suggestedContacts = array();
    //         foreach ($startups as $value) {
    //             $suggestedContacts[] = $value['Contact_Email'];
    //         }
    
    //         return $suggestedContacts;
    //     }
    
    //     return [];
    // }

    public function getSearchedContact($searchQuery = '', $limit = 10, $offset = 0) {
        $builder = $this->db->table('Startups_Inv');
        $builder->select('Contact_Email');
    
        if (!empty($searchQuery)) {
            // Add conditions to search by email or name
            $builder->groupStart();
            $builder->like('Startup_Company_Name', $searchQuery);
            $builder->orLike('Primary_Contact_Name', $searchQuery);
            $builder->groupEnd();
        }
    
        // Add limit and offset for pagination
        $builder->limit($limit, $offset);
    
        $query = $builder->get();
    
        if ($query->getNumRows() > 0) {
            $startups = $query->getResultArray();
    
            $suggestedContacts = array();
            foreach ($startups as $value) {
                $suggestedContacts[] = $value['Contact_Email'];
            }
    
            return $suggestedContacts;
        }
    
        return [];
    }

	
   }