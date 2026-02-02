<?php
namespace App\Controllers;
use App\Models\ChatModel2;
use CodeIgniter\API\ResponseTrait;

class ChatController2 extends BaseController
{
    use ResponseTrait;
    
    protected $chatModel2;
    protected $gfa_model;
    
    public function __construct() { 
        $this->chatModel2 = new ChatModel2();
        $this->gfa_model = model('App\Models\GfaModel');
    }

    public function index($id="")
    {
        $email  = session()->get('email');
        $account_type  = session()->get('account_type');
        
        if(!$email){ return redirect()->to(base_url('gfa/login')); }
        
        if ($account_type == 'mentorship') {
            $name = $this->gfa_model->db->table('mentor_info')->select("Mentor_name AS ReceiverName")
                ->where('Email', $email)
                ->get()->getResultArray()[0]['ReceiverName'];
        } 
    	elseif ($account_type == 'startup' || $account_type == 'individual') {
            $name = $this->gfa_model->db->table('Startups_Inv')->select("Primary_Contact_Name AS ReceiverName")
                ->where('Contact_Email', $email)
                ->get()->getResultArray()[0]['ReceiverName'];
        }    	
        elseif ($account_type == 'investor' || $account_type == 'corperate') {
            $name = $this->gfa_model->db->table('investor')->select("Contact_Name AS ReceiverName")
                ->where('Contact_Email', $email)
                ->get()->getResultArray()[0]['ReceiverName'];
        }
    	else {
        	return redirect()->to(base_url());
        }
        
        
        $data['email'] =  $email;
        $data['name'] =  $name;
        $data['id'] =  $id;
        return view('chat2', $data);
    }

    public function fetchContacts()
    {
        $email  = session()->get('email');
        $account_type  = session()->get('account_type');
        $queryId = $this->request->getPost('queryId');
        
        
        if(!$email){ return redirect()->to(base_url('gfa/login')); }
        
        if ($account_type == 'mentorship') {
             $results = $this->gfa_model->db->table('startups_inv')
                    ->select("Primary_Contact_Name AS ReceiverName, Contact_Email AS ReceiverEmail")
                	->whereIn('Batch', ['A'])
                	->whereIn('Interest_Fund_Raise', ['Aspiring Business Owner', 'Business Owner'])
                    ->orderBy('STUP_ID', "desc")
                    ->limit(1000)
                    ->get();
                       
        	if ($results->getNumRows() > 0) {
           		return $this->response->setJSON($results->getResultArray());
        	} else {
            	return $this->response->setJSON([]);
        	}
        }
    	elseif ($account_type == 'startup' || $account_type == 'individual') {
        	$state = $this->gfa_model->db->table('Startups_Inv')->select("State")
                		->where('Contact_Email', $email)
                		->get()->getResultArray()[0]['State'];
        	$course = $this->gfa_model->db->table('user_ext_info')->select("profile_extra")
                		->where('email', $email)
                		->get()->getResultArray()[0]['profile_extra'];

            $query = $this->gfa_model->db->query("CALL GetStartupsByCriteria(?, ?, ?, ?)", [$state, $email, $course, $queryId]);
       
            // var_dump([$state, $email, $course, $queryId]);exit;

            if ($query->getNumRows() > 0) {
                return $this->response->setJSON($query->getResultArray());
            } else {
                return $this->response->setJSON([]);
            }

            // $query = $this->gfa_model->db->table('Startups_Inv')
            //             ->select("Startups_Inv.Primary_Contact_Name AS ReceiverName, Startups_Inv.Contact_Email AS ReceiverEmail")
            //             ->join('user_ext_info', 'user_ext_info.email = Startups_Inv.Contact_Email', 'left')
            //             ->where('Startups_Inv.State', $state)
            //             ->where('Startups_Inv.Contact_Email !=', $email)
            //             ->where('user_ext_info.profile_extra', $course)
            //             ->orderBy("CASE WHEN Startups_Inv.STUP_ID = $queryId THEN 0 ELSE 1 END, Startups_Inv.STUP_ID DESC")
            //             ->get();

                        // ->orderBy("CASE WHEN Startups_Inv.STUP_ID = $queryId THEN 0 ELSE 1 END", "ASC")
                        // ->orderBy("Startups_Inv.STUP_ID", "desc")
                        // ->get();
                
            // if ($query->getNumRows() > 0) {
            //     return $this->response->setJSON($query->getResultArray());
            // } else {
            //     return $this->response->setJSON([]);
            // }
            
        }
        
    }
    
    public function fetchRecentChats()
    {
        $email  = session()->get('email');
        if(!$email){ return redirect()->to(base_url('gfa/login')); }
        $data = $this->chatModel2->getChatContacts($email);
        $results = [];
        $uniqueReceivers = [];
        foreach ($data as $row) {
            $receiverKey = $row['ReceiverEmail'];
            if (!in_array($receiverKey, $uniqueReceivers)) {
                $uniqueReceivers[] = $receiverKey;
                $results[] = $row;
            }
        }

        if (count($results) > 0) {
            return $this->response->setJSON($results);
        } else {
            return $this->response->setJSON([]);
        }
    }
    
    public function fetchFirstChat()
    {
        $email  = session()->get('email');
        if(!$email){ return redirect()->to(base_url('gfa/login')); }
        $receiverEmail = $this->request->getPost('ReceiverEmail');
        $data = $this->chatModel2->fetchFirstChat($email, $receiverEmail);
        
        return $this->respond($data);
    }
    
    public function fetchData()
    {
        $email  = session()->get('email');
    if(!$email){ return redirect()->to(base_url('gfa/login')); }
    
        $receiverEmail = $this->request->getPost('receiverEmail');
        $data = $this->chatModel2->getData($email, $receiverEmail);
        
        return $this->respond($data);
    }
    
    public function updateReadChat()
    {
        $email  = session()->get('email');
    if(!$email){ return redirect()->to(base_url('gfa/login')); }
    
        $receiverEmail = $this->request->getPost('receiverEmail');
        
        $data = $this->chatModel2->updateReadChat($email, $receiverEmail);
        return $data;
        // return $this->response->setJSON(['data' => $data]);
        // return $this->respond($data);
    }
    
    public function search()
    {
        // $name = $this->request->getPost('name');
        // $results = $this->gfa_model->db->table('Startups_Inv')
        //               ->select("Primary_Contact_Name AS ReceiverName, Contact_Email AS ReceiverEmail")
        //               ->like('Primary_Contact_Name', $name, 'both')
        //               ->limit(20)
        //               ->get();
                      
        // if ($results->getNumRows() > 0) {
        //    return $this->response->setJSON($results->getResultArray());
        // } else {
        //     return $this->response->setJSON([]);
        // }
    
    	$name = $this->request->getPost('name');
    	$email  = session()->get('email');
        $account_type  = session()->get('account_type');
    
        if(!$email){ return redirect()->to(base_url('gfa/login')); }        
        if ($account_type == 'mentorship') {
             $results = $this->gfa_model->db->table('startups_inv')
                    ->select("Primary_Contact_Name AS ReceiverName, Contact_Email AS ReceiverEmail")
             		->like('Primary_Contact_Name', $name, 'both')
                	->whereIn('Batch', ['A'])
                	->whereIn('Interest_Fund_Raise', ['Aspiring Business Owner', 'Business Owner'])
                    ->orderBy('STUP_ID', "desc")
                    ->limit(1000)
                    ->get();
                       
        	if ($results->getNumRows() > 0) {
           		return $this->response->setJSON($results->getResultArray());
        	} else {
            	return $this->response->setJSON([]);
        	}
        } 
    	elseif ($account_type == 'startup' || $account_type == 'individual') {
        	$state = $this->gfa_model->db->table('Startups_Inv')->select("State")
                		->where('Contact_Email', $email)
                		->get()->getResultArray()[0]['State'];
            $course = $this->gfa_model->db->table('user_ext_info')->select("profile_extra")
                		->where('email', $email)
                		->get()->getResultArray()[0]['profile_extra'];


            $query = $this->gfa_model->db->table('Startups_Inv')
                        ->select("Startups_Inv.Primary_Contact_Name AS ReceiverName, Startups_Inv.Contact_Email AS ReceiverEmail")
                        ->join('user_ext_info', 'user_ext_info.email = Startups_Inv.Contact_Email', 'left')
                        ->like('Startups_Inv.Primary_Contact_Name', $name, 'both')
                        ->where('Startups_Inv.State', $state)
                        ->where('user_ext_info.profile_extra', $course)
                        ->orderBy("Startups_Inv.STUP_ID", "desc")
                        ->get();
                
                    if ($query->getNumRows() > 0) {
                        return $this->response->setJSON($query->getResultArray());
                    } else {
                        return $this->response->setJSON([]);
                    }

    }
}

    public function create()
    {
        if ($this->request->isAJAX()) {
            $email  = session()->get('email');
            // $SenderEmail = $this->request->getPost('SenderEmail');
            $ReceiverEmail = $this->request->getPost('ReceiverEmail');
            $Message = $this->request->getPost('Message');
            $SenderName = $this->request->getPost('SenderName');
            $ReceiverName = $this->request->getPost('ReceiverName');
			$TimeCreated = date("Y-m-d H:i:s",time());
            
        	$result = $this->chatModel2->insertChat([
                'SenderEmail' => $email,
                'ReceiverEmail' => $ReceiverEmail,
                'Message' => $Message,
                'SenderName' => $SenderName,
                'ReceiverName' => $ReceiverName,
             	'TimeCreated' => $TimeCreated
            ]);

            if ($result) {
                return $this->response->setJSON(['status' => 'success', 'message' => 'Message sent successfully']);
            } else {
                return $this->response->setJSON(['status' => 'error', 'message' => 'Error creating event']);
            }
        } else {
            // Return an error response if it's not an AJAX request
            return $this->response->setStatusCode(403)->setJSON(['status' => 'error', 'message' => 'Forbidden']);
        }

    }
    
}
