<?php
namespace App\Controllers;
use App\Models\ChatModel;
use CodeIgniter\API\ResponseTrait;

class ChatController extends BaseController
{
    use ResponseTrait;
    
    protected $ChatModel;
    protected $gfa_model;
    
    public function __construct() { 
        $this->ChatModel = new ChatModel();
        $this->gfa_model = model('App\Models\GfaModel');
    }

    public function index()
    {
        $email  = session()->get('email');
        $account_type  = session()->get('account_type');
        
        if(!$email){ return redirect()->to(base_url('gfa/login')); }
        

        if ($account_type == 'mentorship') {
            $name = $this->gfa_model->db->table('mentor_info')->select("Mentor_name AS ReceiverName")
                ->where('Email', $email)
                ->get()->getResultArray()[0]['ReceiverName'];
        	
        } elseif ($account_type == 'startup' || $account_type == 'individual') {
            $name = $this->gfa_model->db->table('startups_inv')->select("Primary_Contact_Name AS ReceiverName")
                ->where('Contact_Email', $email)
                ->get()->getResultArray()[0]['ReceiverName'];
        	
        } elseif ($account_type == 'investor') {
            $name = $this->gfa_model->db->table('investor')->select("Contact_Name AS ReceiverName")
                ->where('Contact_Email', $email)
                ->get()->getResultArray()[0]['ReceiverName'];
        	
        } elseif ($account_type == 'corperate') {
            $name = $this->gfa_model->db->table('cooperate_info')->select("Corporate_Name AS ReceiverName")
                ->where('Need_contact_email', $email)
                ->get()->getResultArray()[0]['ReceiverName'];
        } elseif ($account_type == 'accelerator') {
            $name = $this->gfa_model->db->table('accelerator')->select("Contact_Name AS ReceiverName")
                ->where('Contact_Email', $email)
                ->get()->getResultArray()[0]['ReceiverName'];
        }
       
        $data['email'] =  $email;
        $data['name'] =  $name;
    	// $data['company'] =  $company;
        return view('chat', $data);
    }


    public function fetchContacts()
    {
        $email = session()->get('email');
        if (!$email) {
            return redirect()->to(base_url('gfa/login'));
        }
    
        // Fetch data from all tables and add table-specific information

        // startups_inv
        $startUpResults = $this->gfa_model->db->table('startups_inv')
        ->select("Primary_Contact_Name AS ReceiverName, Contact_Email AS ReceiverEmail")
        ->where('Contact_Email !=', $email)
        ->get()
        ->getResultArray();
        foreach ($startUpResults as &$result) {
        $result['ReceiverAcct'] = 'Startup';
        }

        // Accelerator
        $acceleratorResults = $this->gfa_model->db->table('accelerator')
        ->select("Contact_Name AS ReceiverName, Contact_Email AS ReceiverEmail")
        ->where('Contact_Email !=', $email)
        ->get()
        ->getResultArray();
        foreach ($acceleratorResults as &$result) {
        $result['ReceiverAcct'] = 'Accelerator';
        }

        // Mentor_info
        $mentorResults = $this->gfa_model->db->table('mentor_info')
        ->select("Mentor_name AS ReceiverName, Email AS ReceiverEmail")
        ->where('Email !=', $email)
        ->get()
        ->getResultArray();
        foreach ($mentorResults as &$result) {
        $result['ReceiverAcct'] = 'Mentor';
        }

        // Investor
        $investorResults = $this->gfa_model->db->table('investor')
        ->select("Contact_Name AS ReceiverName, Contact_Email AS ReceiverEmail")
        ->where('Contact_Email !=', $email)
        ->get()
        ->getResultArray();
        foreach ($investorResults as &$result) {
        $result['ReceiverAcct'] = 'Investor';
        }

        // Corporate_info
        $corporateResults = $this->gfa_model->db->table('cooperate_info')
        ->select("Corporate_Name AS ReceiverName, Need_contact_email AS ReceiverEmail")
        ->where('Need_contact_email !=', $email)
        ->get()
        ->getResultArray();
        foreach ($corporateResults as &$result) {
        $result['ReceiverAcct'] = 'Corporate';
        }

        // Merge all results into a single array
        $allResults = array_merge($startUpResults, $acceleratorResults, $mentorResults, $investorResults, $corporateResults);

        // Filter unique entries
        $uniqueResults = [];
        $seen = [];

        foreach ($allResults as $result) {
        $key = $result['ReceiverName'] . $result['ReceiverEmail'];
        if (!isset($seen[$key])) {
            $seen[$key] = true;
            $uniqueResults[] = $result;
        }
        }

    
        // Return unique results as JSON
        return $this->response->setJSON($uniqueResults);
    }
    

    public function fetchRecentChats()
    {
        $email  = session()->get('email');    
        if(!$email){ return redirect()->to(base_url('gfa/login')); }
        $data = $this->ChatModel->getChatContacts($email);
    	return $this->response->setJSON($data);
        // return $this->respond($data);
    }

    
    public function fetchFirstChat()
    {
        $email  = session()->get('email');
        if(!$email){ return redirect()->to(base_url('gfa/login')); }
        $receiverEmail = $this->request->getPost('ReceiverEmail');
        $data = $this->ChatModel->fetchFirstChat($email, $receiverEmail);
        
        return $this->respond($data);
    }

    
    public function fetchData()
    {
        $email  = session()->get('email');
    	if(!$email){ return redirect()->to(base_url('gfa/login')); }
    
        $receiverEmail = $this->request->getPost('receiverEmail');
        $data = $this->ChatModel->getData($email, $receiverEmail);
        
        return $this->respond($data);
    }
    
    
	public function updateIsRead()
	{
    	$email  = session()->get('email');
    	if(!$email){ return redirect()->to(base_url('gfa/login')); }
    
    	$receiverEmail = $this->request->getPost('ReceiverEmail');
    	$data = $this->ChatModel->markMessageAsRead($email, $receiverEmail);
    	return $this->response->setJSON(['status' => $data]);
	}
    

    public function search()
    {
        $email = session()->get('email');
        if (!$email) {
            return redirect()->to(base_url('gfa/login'));
        }
    
        $name = $this->request->getPost('name');
    
        // Query startups_inv
        $startUpResults = $this->gfa_model->db->table('startups_inv')
            ->select("Primary_Contact_Name AS ReceiverName, Contact_Email AS ReceiverEmail")
            ->where('Contact_Email !=', $email)
            ->groupStart()
                ->orLike('Primary_Contact_Name', $name, 'both')
                ->orLike('PrimaryBusinessIndustry', $name, 'both')
                ->orLike('Startup_Implementation_Stage', $name, 'both')
                ->orLike('Name_Main_Product', $name, 'both')
            ->groupEnd()
            ->get()
            ->getResultArray();
    
        // Query accelerator
        $acceleratorResults = $this->gfa_model->db->table('accelerator')
            ->select("Contact_Name AS ReceiverName, Contact_Email AS ReceiverEmail")
            ->where('Contact_Email !=', $email)
            ->like('Contact_Name', $name, 'both')
            ->get()
            ->getResultArray();
    
        // Query mentor_info
        $mentorResults = $this->gfa_model->db->table('mentor_info')
            ->select("Mentor_name AS ReceiverName, Email AS ReceiverEmail")
            ->where('Email !=', $email)
            ->like('Mentor_name', $name, 'both')
            ->get()
            ->getResultArray();
    
        // Query investor
        $investorResults = $this->gfa_model->db->table('investor')
            ->select("Contact_Name AS ReceiverName, Contact_Email AS ReceiverEmail")
            ->where('Contact_Email !=', $email)
            ->like('Contact_Name', $name, 'both')
            ->get()
            ->getResultArray();
    
        // Query cooperate_info
        $corporateResults = $this->gfa_model->db->table('cooperate_info')
            ->select("Corporate_Name AS ReceiverName, Need_contact_email AS ReceiverEmail")
            ->where('Need_contact_email !=', $email)
            ->like('Corporate_Name', $name, 'both')
            ->get()
            ->getResultArray();
    
        // Merge all results
        $allResults = array_merge($startUpResults, $acceleratorResults, $mentorResults, $investorResults, $corporateResults);
    
        // Filter unique results
        $uniqueResults = [];
        $seen = [];
    
        foreach ($allResults as $result) {
            $key = $result['ReceiverName'] . $result['ReceiverEmail'];
            if (!isset($seen[$key])) {
                $seen[$key] = true;
                $uniqueResults[] = $result;
            }
        }
    
        return $this->response->setJSON($uniqueResults);
    }
    

    
    public function create()
    {
            $email  = session()->get('email');
    		if(!$email){ return redirect()->to(base_url('gfa/login')); }
        
            $ReceiverEmail = $this->request->getPost('ReceiverEmail');
            $Message = $this->request->getPost('Message');
            $SenderName = $this->request->getPost('SenderName');
            $ReceiverName = $this->request->getPost('ReceiverName');
            $SenderAcct = $this->request->getPost('SenderAcct');
        	$TimeCreated = date("Y-m-d H:i:s", time());
    
        // Check if it's the first message to the receiver
        $firstMessage = $this->ChatModel->isFirstMessage($email, $ReceiverEmail);

             $result = $this->ChatModel->insertChat([
                'SenderEmail' => $email,
                'ReceiverEmail' => $ReceiverEmail,
                'Message' => $Message,
                'SenderName' => $SenderName,
                'ReceiverName' => $ReceiverName,
                'SenderAcct' => $SenderAcct,
             	'TimeCreated' => $TimeCreated,
            ]);

         if ($result) {
         // && !$this->isLoggedIn($receiverEmail)
            if ($firstMessage) {
            	$ref_id = bin2hex(random_bytes(32));
                $subject = "Notification de nouveau message";
                $messageBody = "Bonjour $ReceiverName,<br><br>  Vous avez reçu un nouveau message depuis votre application de chat NORA. Veuillez-vous connecter pour consulter le message.";
            	
            	$message = "Bonjour $ReceiverName, Vous avez reçu un nouveau message depuis votre application de chat NORA. Veuillez-vous connecter pour consulter le message.";
            	$this->gfa_model->allNotification($ReceiverEmail, $subject, $ref_id);
    	    	$this->gfa_model->allNotificationBox($subject,$message, $email, $ReceiverEmail,$ref_id);
            
            	$email = \Config\Services::email();
            	$email->setTo('oluwatoyin@gfa-tech.com');
            	$email->setSubject($subject);
            	$email->setMessage($messageBody);
            
            	$email->send();
                // altalime@awgarstone.com
                // Carl.abusah@transnumerik.com: gfab7b2a
            	// if ($email->send()) {
            	// return $this->response->setJSON(['status' => 'success']);
            	// } else {
            	// return $this->response->setJSON(['status' => 'error']);
            	// }
                return $this->response->setJSON(['status' => 'success', 'mesage' => $firstMessage]);  
            	}
         	return $this->response->setJSON(['status' => 'success',  'mesage' => $firstMessage]);  
            } else {
                return $this->response->setJSON(['status' => 'error']);
            }

    }
    
}
