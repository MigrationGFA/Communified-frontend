<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use Config\Session;
use PHPMailer\PHPMailer\PHPMailer;
use CodeIgniter\I18n\Time;
use Config\Services;
use CodeIgniter\HTTP\Response;

class Gfa extends BaseController {
    protected $gfa_model;
    protected $admin_model;

    public function __construct() {
        //parent::__construct();
        $this->gfa_model = model('App\Models\GfaModel');
        $this->admin_model = model('App\Models\AdminModel');
    	helper('translate');

        // $emailVerifySession  = session()->get('email') ;

        // if (!empty($emailVerifySession)) {
        //     $user_action = request()->uri->getSegment(2);
        //     $this->saveUserActivity($user_action, $emailVerifySession);
        // }

    }

    // private function saveUserActivity($user_action, $action_email) {
    //     try {
    //         // ...
    //     } catch (\Exception $e) {
    //         logger()->error($e->getMessage());
    //     }
    // }

    public function index_lang()
    {
        echo lang('translation.Welcome');
    }

    public function index() {
        $data['page_title'] = "Login GetFundedAfrica";
        echo view('header_home',$data);
        echo view('login');
        echo view('header_footer');
    }
    
    public function register() {
        $data['page_title'] = "Register GetFundedAfrica";
        echo view('header_home',$data);
        echo view('register');
        echo view('header_footer');
    }
    
    public function register_sub() {
        $data['page_title'] = "Register GetFundedAfrica";
        echo view('header_home',$data);
        echo view('register_sub');
        echo view('header_footer');
    }

public function startup_website($id="")
    {
        //$id = //$this->request->getGet('id');
        if ($id) {
            $data['details'] = $this->gfa_model->getAllStartUpsById($id);
            $data['details_ext'] = $this->gfa_model->getStartUpDetailsExt($this->gfa_model->getAllStartUpsById($id)[0]['Contact_Email']);
            $data['personal_photo'] = $this->gfa_model->getPhotoUploaded($this->gfa_model->getAllStartUpsById($id)[0]['Contact_Email'])[0]['Photo_name'];
            echo view('pages-profile-user', $data);
        }
    }
    
        public function page_view_events()
{
    // CORS headers
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
    header("Access-Control-Allow-Headers: Content-Type, Authorization");

    // Handle preflight
    if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
        http_response_code(200);
        exit;
    }

    // Get raw JSON input
    $json = $this->request->getBody();
    $data = json_decode($json, true);

    if (!$data) {
        echo json_encode([
            "success" => false,
            "message" => "Invalid JSON data."
        ]);
        exit;
    }

    // Sanitize
    $event        = $this->gfa_model->mysqlCheck($data["event"] ?? '');
    $url          = $this->gfa_model->mysqlCheck($data["url"] ?? '');
    $referrer     = $this->gfa_model->mysqlCheck($data["referrer"] ?? '');
    $userAgent    = $this->gfa_model->mysqlCheck($data["userAgent"] ?? '');
    $screen       = $this->gfa_model->mysqlCheck($data["screen"] ?? '');
    $language     = $this->gfa_model->mysqlCheck($data["language"] ?? '');
    $timestamp    = $this->gfa_model->mysqlCheck($data["timestamp"] ?? '');
    $session_id   = $this->gfa_model->mysqlCheck($data["session_id"] ?? '');
    $app_name     = $this->gfa_model->mysqlCheck($data["app_name"] ?? '');

    // Prepare data
    $data_event = [
        "event_type"        => $event,
        "url"               => $url,
        "referrer"          => $referrer,
        "user_agent"        => $userAgent,
        "screen_resolution" => $screen,
        "browser_lang"      => $language,
        "timestamp_event"   => $timestamp,
        "session_id"        => $session_id,
        "app_name"          => $app_name,
    ];

    // Save to DB
    $eventInserted = $this->gfa_model->insertPageViewEvent($data_event);

    // Return JSON response
    echo json_encode([
        "success" => $eventInserted,
        "message" => $eventInserted 
            ? "Page view event recorded successfully." 
            : "Failed to record page view event."
    ]);
    exit;
}



    
    public function getProfilePoints(){
	    
	    $email = session()->get('email') ;
		if($this->gfa_model->getStartUpDetailsExt($email)[0]['Country_Incorporate']!=""){
		    
		   $point_1 = 3;
		   $credit_1 = 1;
		}else{
		    $point_1 = 0;
		    $credit_1 = 0;
		}
        if($this->gfa_model->getStartUpDetails($email)[0]['CountryHQ']!=""){
            
         $point_2 = 5;
         $credit_2 = 1;
		}else{
		    $point_2 = 0;
		    $credit_2 = 0;
		}
        if($this->gfa_model->getStartUpDetails($email)[0]['PrimaryBusinessIndustry']!=""){
		 $point_3 = 5;
		 $credit_3 = 2;
		}else{
		    $credit_3 = 0;
		    $point_3= 0;
		}
		if($this->gfa_model->getStartUpDetails($email)[0]['LinkedIn']!=""){
		 $point_4 = 1; 
		 $credit_4 = 1;
		}else{
		    $credit_4 = 0;
		    $point_4= 0;
		}
		
		if($this->gfa_model->getStartUpDetails($email)[0]['Startup_Company_Name']!=""){
		 $point_5 = 5; 
		 $credit_5 = 2;
		}else{
		    $point_5= 0;
		    $credit_5 = 0;
		}
		
		
		if($this->gfa_model->getStartUpDetails($email)[0]['Address']!=""){
		 $point_6 = 3; 
		 $credit_6 = 1;
		}else{
		    $point_6= 0;
		    $credit_6 = 0;
		}
		
		if($this->gfa_model->getStartUpDetails($email)[0]['NoOfEmployees']!=""){
		 $point_7 = 1; 
		 $credit_7 = 1;
		}else{
		    $point_7= 0;
		    $credit_7 = 0;
		}
		
		if($this->gfa_model->getStartUpDetails($email)[0]['OperatingRegions']!=""){
		 $point_8 = 5; 
		 $credit_8 = 1;
		}else{
		    $point_8= 0;
		    $credit_8 = 0;
		}
		
		if($this->gfa_model->getStartUpDetails($email)[0]['Next_Funding_Round_Target_Sought']!=""){
		 $point_9 = 5; 
		 $credit_9 = 1;
		}else{
		    $point_9= 0;
		    $credit_9 = 0;
		}
		
		
		
		if($this->gfa_model->getStartUpDetails($email)[0]['Date_Founded']!=""){
		 $point_10 = 1; 
		 $credit_10 = 1;
		}else{
		    $point_10= 0;
		    $credit_10 = 0;
		}
		
		if($this->gfa_model->getStartUpDetails($email)[0]['Revenue']!=""){
		 $point_11 = 3; 
		 $credit_11 = 1;
		}else{
		    $point_11= 0;
		    $credit_11 = 0;
		}
		
		if($this->gfa_model->getStartUpDetails($email)[0]['Investment_History']!=""){
		 $point_12 = 5; 
		 $credit_12 = 1;
		}else{
		    $point_12= 0;
		    $credit_12 = 0;
		}
		
			if($this->gfa_model->getLogoUploaded($email)[0]['Photo_name']!=""){
		 $point_13 = 1; 
		 $credit_13 = 1;
		}else{
		    $point_13= 1;
		    $credit_13 = 0;
		}
		
		if($this->gfa_model->getStartUpDetails($email)[0]['Website']!=""){
		 $point_14 = 1; 
		 $credit_14 = 1;
		}else{
		    $point_14= 0;
		    $credit_14 = 0;
		}
		
		if($this->gfa_model->getStartUpDetails($email)[0]['CurrentInvestmentStage']!=""){
		 $point_15 = 5; 
		 $credit_15 = 1;
		}else{
		    $point_15= 0;
		    $credit_15 = 0;
		}
		
		if($this->gfa_model->getStartUpDetails($email)[0]['Startup_Implementation_Stage']!=""){
		 $point_16 = 5; 
		 $credit_16 = 1;
		}else{
		    $point_16= 0;
		    $credit_16 = 0;

		}
		
		if($this->gfa_model->getStartUpDetailsExt($email)[0]['Monthly_Revenue']!=""){
		 $point_17 = 3; 
		 $credit_17 = 1;
		}else{
		    $point_17= 0;
		    $credit_17 = 0;
		}
		if($this->gfa_model->getStartUpDetailsExt($email)[0]['Amount_Raise']!=""){
		 $point_18 = 3; 
		 $credit_18 = 1;
		}else{
		    $point_18= 0;
		    $credit_18 = 0;
		}
		if($this->gfa_model->getStartUpDetailsExt($email)[0]['Minimum_Growth']!=""){
		 $point_19 = 3; 
		 $credit_19 = 1;
		}else{
		    $point_19= 0;
		    $credit_19 = 0;
		}
		if($this->gfa_model->getStartUpDetailsExt($email)[0]['Valuation']!=""){
		 $point_20 = 3; 
		 $credit_20 = 1;
		}else{
		    $point_20= 0;
		    $credit_20 = 0;
		}
		if($this->gfa_model->getStartUpDetailsExt($email)[0]['Product']!=""){
		 $point_21 = 3; 
		 $credit_21 = 1;
		}else{
		    $point_21= 0;
		    $credit_21 = 0;
		}
		if($this->gfa_model->getStartUpDetailsExt($email)[0]['Social_Impact']!=""){
		 $point_22 = 3; 
		 $credit_22 = 1;
		}else{
		    $point_22= 0;
		    $credit_22 = 0;
		}
		if($this->gfa_model->getStartUpDetailsExt($email)[0]['Serial_Entrepreneur']!=""){
		 $point_23 = 3; 
		 $credit_23 = 1;
		}else{
		    $point_23= 0;
		    $credit_23 = 0;
		}
		if($this->gfa_model->getStartUpDetailsExt($email)[0]['Scaling']!=""){
		 $point_24 = 3; 
		 $credit_24 = 1;
		}else{
		    $point_24= 0;
		    $credit_24 = 0;
		}
		if($this->gfa_model->getStartUpDetailsExt($email)[0]['Startup_Core']!=""){
		 $point_25 = 3; 
		 $credit_25 = 1;
		}else{
		    $point_25= 0;
		    $credit_25 = 0;
		}
		if($this->gfa_model->getStartUpDetailsExt($email)[0]['Funding_Type']!=""){
		 $point_26 = 3; 
		 $credit_26 = 1;
		}else{
		    $point_26= 0;
		    $credit_26 = 0;
		}
		if($this->gfa_model->getStartUpDetailsExt($email)[0]['Startup_Level']!=""){
		 $point_27 = 3; 
		 $credit_27 = 1;
		}else{
		    $point_27= 0;
		    $credit_27 = 0;
		}
		if($this->gfa_model->getStartUpDetailsExt($email)[0]['Startup_Accelerator']!=""){
		 $point_28 = 3; 
		 $credit_28 = 1;
		}else{
		    $point_28= 0;
		    $credit_28 = 0;
		}
		if($this->gfa_model->getStartUpDetailsExt($email)[0]['Startup_Partner']!=""){
		 $point_29 = 3; 
		 $credit_29 = 1;
		}else{
		    $point_29= 0;
		    $credit_29 = 0;
		}
		if($this->gfa_model->getStartUpDetailsExt($email)[0]['Startup_Percent']!=""){
		 $point_30 = 3; 
		 $credit_30 = 1;
		}else{
		    $point_30= 0;
		    $credit_30 = 0;
		}
		if($this->gfa_model->getStartUpDetailsExt($email)[0]['Startup_Phone']!=""){
		 $point_31 = 1; 
		 $credit_31 = 1;
		}else{
		    $point_31= 0;
		    $credit_31 = 0;
		}
		if($this->gfa_model->getStartUpDetailsExt($email)[0]['Startup_Model']!=""){
		 $point_32 = 3; 
		 $credit_32 = 1;
		}else{
		    $point_32= 0;
		    $credit_32 = 0;
		}
	
		
		
		//$data['point']= ceil((($point_1 + $point_2 + $point_3 + $point_4 + $point_5+ $point_6 + $point_7 + $point_8 + $point_9 + $point_10 + $point_11 + $point_12 + $point_13)/415)*100) ;
	    return $point_1 + $point_2 + $point_3 + $point_4 + $point_5+ $point_6 + $point_7 + $point_8 + $point_9 + $point_10 + $point_11 + $point_12 + $point_13 
	    + $point_14 + $point_15 + $point_16 + $point_17 + $point_18 + $point_19 + $point_20 + $point_21 + $point_22 + $point_23 + $point_24 + $point_25 + $point_26 +
	    $point_27 + $point_28 + $point_29 + $point_30 + $point_31 + $point_32;
	}

#===================================Resources========================================

public function download_clicked_resource(){

	   $email = session()->get('email') ;
	   $resource_id = $this->request->getPost("getValue");
	  
	}
	
public function commentresourcepro(){
//   $email  = session()->get('email') ;
//   $commentText =   $this->request->getPost("commentText");
//   $resource_id = $this->request->getPost("resource_id");
//   $time_submit = date("Y-m-d H:i:s", time());
$commentText  = $this->gfa_model->mysqlCheck($this->request->getPost("commentText"));
$resource_id  =  $this->request->getPost("resource_id");
$email = session()->get('email') ;
$nameOfPoster = $this->gfa_model->getStartUpDetails($email)[0]['Primary_Contact_Name']; 
$timeDate = time();
 $response = '<div class="card">
    <div class="card-body">
      <div class="d-flex align-items-start">
        <div class="avatar me-75">
          <img src="'.base_url('public/assets-new/img/avatars/default-img.jpg').'" width="38" height="38" alt="Avatar" />
        </div>
        <div class="author-info">
          <h6 class="fw-bolder mb-25">'.$nameOfPoster.'</h6>
          <p class="card-text">'.$this->gfa_model->timeAgo($timeDate).'</p>
          <p class="card-text">
            '.$commentText.'
          </p>
        </div>
      </div>
    </div>
  </div>'; 
  
  $data_comment = array(
                    
                    
                    'comment' => $commentText,
                    'resource_id' => $resource_id,
                    'email' => $email,
                    'status' => 'active',
                    
                    );
                    
                    $this->gfa_model->insertCommentsResource($data_comment); 
  
  echo $response;
  
}

public function download_resource($id) {
        $email  = session()->get('email') ;
		 $resource =  $this->gfa_model->getResouceById($id);
			 $target_dir = "./uploads/files";
	  		$target_file = $target_dir . '/' . basename($resource[0]['file']);
		 
		 $this->gfa_model->getFileType($target_file);
         $data = array(
                   
                    'resource_id' => $id,
                    'email' => $email,
                    
                    );
             
                    $this->gfa_model->insertClickedDownlaodResource($data);
        
    }
    public function learning_external($email="",$platform="",$unique_code=""){

    			$email = urldecode($email);
    			$platform = "labelling";
    			$unique_code = "labelling-01";
    			session()->set('email', $email);   
                
                session()->set('account_type', 'startup');
                return redirect()->to(base_url('gfa/learning'));

    }
    


public function learning_labelling()
{
    // CORS headers
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Methods: POST, OPTIONS");
    header("Access-Control-Allow-Headers: Content-Type, Authorization");

    // Handle preflight request (OPTIONS)
    if ($this->request->getMethod(true) === 'OPTIONS') {
        return $this->response->setStatusCode(Response::HTTP_OK);
    }

    // Ensure it's a POST request
    if ($this->request->getMethod(true) !== 'POST') {
        return $this->response->setJSON([
            'status'  => 'error',
            'message' => 'Only POST requests are allowed.'
        ])->setStatusCode(Response::HTTP_METHOD_NOT_ALLOWED);
    }

    // Enforce JSON Content-Type
    $contentType = $this->request->getHeaderLine('Content-Type');
    if (strpos($contentType, 'application/json') === false) {
        return $this->response->setJSON([
            'status'  => 'error',
            'message' => 'Content-Type must be application/json'
        ])->setStatusCode(Response::HTTP_UNSUPPORTED_MEDIA_TYPE);
    }

    // Decode JSON body into array
    $data = $this->request->getJSON(true);

    $email       = $data['email'] ?? null;
    $unique_code = $data['unique_code'] ?? null;
    $platform    = $data['platform'] ?? null;

    // Validation
    if (!empty($email) && !empty($unique_code) && !empty($platform)) {
        return $this->response->setJSON([
            'status'  => 'success',
            'message' => 'Login successful',
            'url'     => base_url('gfa/learning_external/' . rawurlencode($email) . '/labelling/labelling-01')
        ])->setStatusCode(Response::HTTP_OK);
    }

    return $this->response->setJSON([
        'status'  => 'error',
        'message' => 'Invalid input. All fields are required.'
    ])->setStatusCode(Response::HTTP_BAD_REQUEST);
}

    public function learning_labelling_old()
    {

    	
        // Ensure it's a POST request
        if ($this->request->getMethod() === 'post') {
            // Retrieve form data from POST request
            $email = $this->request->getPost('email');
            $unique_code = $this->request->getPost('unique_code');
            $platform = $this->request->getPost('platform');

            // Basic validation (check if all required fields are filled)
            if (!empty($email) && !empty($unique_code) && !empty($platform)) {
                // Perform login or verification logic here
                
                // If login/verification is successful, redirect to the specified URL
                return $this->response->setJSON([
                    'status' => 'success',
                    'message' => 'Login successful',
                    'url' =>'https://nora.GetFundedAfrica.ci/portal/gfa/learning_external/'.$email.'/labelling/labelling-01'
                ])->setStatusCode(Response::HTTP_OK);
                //return redirect()->to('https://nora.GetFundedAfrica.ci/portal/gfa/learning');
            } else {
                // Validation failed, return error response as JSON
                return $this->response->setJSON([
                    'status' => 'error',
                    'message' => 'Invalid input. All fields are required.'
                ])->setStatusCode(Response::HTTP_BAD_REQUEST);
            }
        } else {
            // Handle invalid request methods
            return $this->response->setJSON([
                'status' => 'error',
                'message' => 'Only POST requests are allowed.'
            ])->setStatusCode(Response::HTTP_METHOD_NOT_ALLOWED);
        }
    }


public function resource()

    {
        
        $email  = session()->get('email') ;
        if(($email == '')){ return redirect()->to(base_url('gfa/login')); }
        $title['page_title'] = "Startup Content ";
        $data['email'] =  $email;
        $data['login_type'] = session()->get('login_type') ;
        $data['account_type'] = session()->get('account_type') ;
        echo view('header_new',$title);
        echo view('nav_new',$data);
        echo view('menu_new',$data);
        echo view('resource', $data);
        echo view('footer_new',$data); 

        

    }
    
public function resource_details($id)

    {
        
        $email  = session()->get('email') ;
        if(($email == '')){ return redirect()->to(base_url('gfa/login')); }
        $title['page_title'] = "Startup Content ";
        $data['email'] =  $email;
        $data['id'] =  $id;
        $data['login_type'] = session()->get('login_type') ;
        $data['account_type'] = session()->get('account_type') ;
        echo view('header_new',$title);
        echo view('nav_new',$data);
        echo view('menu_new',$data);
        echo view('resource_details', $data);
        echo view('footer_new',$data); 

        

    }


#===================================End Resources====================================


// ================== Beginning of Tickets ==========================


    public function manage_ticket()
    {
        $email  = session()->get('email');
        if(($email == '')){ return redirect()->to(base_url('admin/login')); }		
        $title['page_title'] = "Manage Ticket Section";
        $data['email'] =  $email;
        // $account_type = session()->get('account_type');

        echo view('header_new',$title);
        echo view('nav_new',$data);
        echo view('menu_admin',$data);
        echo view('manage_ticket', $data);
        echo view('footer_new');
    
    }

    public function admin_view_ticket($id="")
    {
        if($id == '' || empty($this->gfa_model->getOneTicket($id))){ return redirect()->to(base_url('gfa/manage_ticket')); }
        $email  = session()->get('email') ; if(($email == '')){ return redirect()->to(base_url('admin/login')); }

        $title['page_title'] = "Manage Ticket Section";
        $data['email'] =  $email;
        $data['id'] = $id;
        // $account_type = session()->get('account_type');

        echo view('header_new',$title);
        echo view('nav_new',$data);
        echo view('menu_admin',$data);
        echo view('admin_view_ticket', $data);
        echo view('footer_new');

    }

    public function add_support_ticket(){
        $email  = session()->get('email') ;
            if(($email == '')){ return redirect()->to(base_url('gfa/login')); }

        $random_number = mt_rand(1000, 9999);
            
        $ticket_id = $random_number.time();
        // $ticket_id   = bin2hex(random_bytes(8));
        $subject = $this->gfa_model->mysqlCheck($this->request->getPost("subject"));
        $urgency = $this->gfa_model->mysqlCheck($this->request->getPost("urgency"));
        $message = $this->gfa_model->mysqlCheck($this->request->getPost("message"));
        $role = $this->gfa_model->mysqlCheck($this->request->getPost("role"));

        $data_story1 = array(                    
            'ticket_id' => $ticket_id,
            'subject' => $subject,              
            'urgency' => $urgency,                    
            'created_by' => $email,
            'date_created' => date("Y-m-d H:i:s", time())                 
        );
        
        $data_story2 = array(                    
            'ticket_id' => $ticket_id,
            'message' => $message,                    
            'created_by' => $email,                 
            'role' => $role,              
            'date_updated' => date("Y-m-d H:i:s", time())                 
        );
        
        $this->gfa_model->insertSTicket($data_story1);  
        $this->gfa_model->insertSMTicket($data_story2); 
        echo "Ticket opened successfully";
    }

    // public function add_reply_ticket(){
    //     $email  = session()->get('email') ;
    //     if(($email == '')){ return redirect()->to(base_url('gfa/login')); }

    //     $ticket_id   = $this->gfa_model->mysqlCheck($this->request->getPost("ticket_id"));
    //     $message = $this->gfa_model->mysqlCheck($this->request->getPost("message"));
    //     $role = $this->gfa_model->mysqlCheck($this->request->getPost("role"));
            
    //     $data_story = array(                    
    //         'ticket_id' => $ticket_id,
    //         'message' => $message,  
    //         'created_by' => $email,
    //         'role' => $role,
    //         'date_updated' => date("Y-m-d H:i:s", time())                 
    //     );

    //     if ($role != 'Admin') {        
    //         $this->gfa_model->updateTicketStatus('status', 0, $ticket_id); 
    //     }
        
    //     $this->gfa_model->insertSMTicket($data_story); 
    //     echo "Message sent successfully";
    // }

    public function add_reply_ticket(){
        $email  = session()->get('email') ;
        if(($email == '')){ return redirect()->to(base_url('gfa/login')); }
    
        $ticket_id   = $this->gfa_model->mysqlCheck($this->request->getPost("ticket_id"));
        $message = $this->gfa_model->mysqlCheck($this->request->getPost("message"));
        $role = $this->gfa_model->mysqlCheck($this->request->getPost("role"));
            
        $data_story = array(                    
                'ticket_id' => $ticket_id,
                'message' => $message,  
                'created_by' => $email,
                'role' => 'Admin',
                'date_updated' => date("Y-m-d H:i:s", time())                 
            );
    
        if ($role == 'Guest') {
            $recipient_email = $this->gfa_model->getGuestTicketEmail($ticket_id)[0]['created_by'];
            $name = $this->gfa_model->getGuestTicketEmail($ticket_id)[0]['full_name'];
            $this->gfa_model->updateTicketStatus('status', 1, $ticket_id); 
            $this->gfa_model->insertSMTicket($data_story); 
            $this->sendMail("$recipient_email", "<p>Dear $name, </p> <div style='padding:8px 0px'>$message</div> <p style='padding-bottom:0px; margin-bottom:0px;'>Best regards,</p> GetFundedAfrica Admin.", "Help Desk Response");
            echo "Email sent successfully";
        } else {
        
        if ($role == 'User') {        
            $this->gfa_model->updateTicketStatus('status', 0, $ticket_id); 
        }
        
        $this->gfa_model->insertSMTicket($data_story); 
        echo "Message sent successfully";
        }
    }
    

    public function updateTicketStatus()
    {
        $column = $this->gfa_model->mysqlCheck($this->request->getPost("column"));
        $value = $this->gfa_model->mysqlCheck($this->request->getPost("value"));
        $ticketId = $this->gfa_model->mysqlCheck($this->request->getPost("ticketId"));

        $res = $this->gfa_model->updateTicketStatus($column, $value, $ticketId);
        
        if ($res) {
            echo 1;
        } else {
            echo 0;
        }
        
    }

	public function support_ticket()
    {
        $email  = session()->get('email') ;
        if(($email == '')){ return redirect()->to(base_url('gfa/login')); }
        $title['page_title'] = "Contact Admin";
        $data['email'] =  $email;
        $data['login_type'] = session()->get('login_type') ;
        $data['account_type'] = $account_type = session()->get('account_type') ;
        $data['UserName'] = $this->gfa_model->getStartUpDetails($email)[0]['Primary_Contact_Name'];
        

        echo view('header_new',$title);

        if($account_type=="startup" || $account_type=="individual" || $account_type==""){
            echo view('menu_new',$data);
            echo view('nav_new',$data);
            echo view('support_ticket', $data);
        }
        
        if($account_type=="investor"){ 
            $data['UserName'] = $this->gfa_model->getInvestorDetails($email)[0]['Contact_Name'];
            echo view('investor/menu_new',$data);
            echo view('investor/nav_new',$data);
            echo view('investor/support_ticket',$data);
        }
    
        if($account_type=="mentorship"){ 
            $data['UserName'] = $this->gfa_model->getMentorDetails($email)[0]['Mentor_name'];
            echo view('mentor/menu_new',$data);
            echo view('mentor/nav_new',$data);
            echo view('mentor/support_ticket',$data);
        }
    
        if($account_type=="corperate" || $account_type=="accelerator"){ 
            $data['UserName'] = $this->gfa_model->getCorperateDetails($email)[0]['Corporate_Name'];
            echo view('corperate/menu_new',$data);
            echo view('corperate/nav_new',$data);
            echo view('corperate/support_ticket',$data);
        }
        
        echo view('footer_new',$data); 

    }

	public function all_tickets()
    {
        $email  = session()->get('email') ;
        if(($email == '')){ return redirect()->to(base_url('gfa/login')); }
        $title['page_title'] = "Contact Admin";
        $data['email'] =  $email;
        $data['login_type'] = session()->get('login_type') ;
        $data['account_type'] = $account_type = session()->get('account_type');
        
        echo view('header_new',$title);
        if($account_type=="startup" || $account_type=="individual" || $account_type==""){
            echo view('menu_new',$data);
            echo view('nav_new',$data);
            echo view('all_tickets', $data);
        }
        
        if($account_type=="investor"){ 
            echo view('investor/menu_new',$data);
            echo view('investor/nav_new',$data);
            echo view('investor/all_tickets',$data);
        }
    
        if($account_type=="mentorship"){ 
            echo view('mentor/menu_new',$data);
            echo view('mentor/nav_new',$data);
            echo view('mentor/all_tickets',$data);
        }
    
        if($account_type=="corperate" || $account_type=="accelerator"){ 
            echo view('corperate/menu_new',$data);
            echo view('corperate/nav_new',$data);
            echo view('corperate/all_tickets',$data);
        }
        
        echo view('footer_new',$data); 

    }

	public function view_ticket($id="")
    {
        if($id == '' || empty($this->gfa_model->getOneTicket($id))){ return redirect()->to(base_url('gfa/all_tickets')); }
        $email  = session()->get('email') ;
        if($email == ''){ return redirect()->to(base_url('gfa/login')); }
        $title['page_title'] = "Contact Admin";
        $data['email'] =  $email;
        $data['id'] = $id;
        $data['login_type'] = session()->get('login_type') ;
        $data['account_type'] = $account_type = session()->get('account_type') ;
        
        echo view('header_new',$title);
        if($account_type=="startup" || $account_type=="individual" || $account_type==""){
            echo view('menu_new',$data);
            echo view('nav_new',$data);
            echo view('view_ticket', $data);
        }
        
        if($account_type=="investor"){ 
            echo view('investor/menu_new',$data);
            echo view('investor/nav_new',$data);
            echo view('investor/view_ticket',$data);
        }
    
        if($account_type=="mentorship"){ 
            echo view('mentor/menu_new',$data);
            echo view('mentor/nav_new',$data);
            echo view('mentor/view_ticket',$data);
        }
    
        if($account_type=="corperate" || $account_type=="accelerator"){ 
            echo view('corperate/menu_new',$data);
            echo view('corperate/nav_new',$data);
            echo view('corperate/view_ticket',$data);
        }
       
        echo view('footer_new',$data); 

    }

// ================== End of Tickets ==========================


	
	#=============================Chat App================================================
public function chat($ref_id="")


	{

         $email  = session()->get('email') ; if(($email == '')){ return redirect()->to(base_url('gfa/login')); }	
		$title['page_title'] = "Chat App System";
		$data['email'] =  $email;
		$data['ref_id'] =  $ref_id;
        $data['login_type'] = session()->get('login_type') ;
        $data['account_type'] = session()->get('account_type') ;
		echo view('notify_system/header_notify',$title);
        echo view('notify_system/nav_notify',$data);
        //echo view('menu_new',$title);
		echo view('chat_system/chat',$data);
		echo view('chat_system/footer_chat',$data);
	    
	}


	#=============================App Email ==============================================
public function replymsgpro(){
    $email = session()->get('email');
    $reply_ref_id = $this->request->getPost("getRefReply");
    $message = $this->request->getPost("replyContent");
    $ref_id = time() . rand(1000, 10000);
    $getData = $this->gfa_model->getNotificationBoxRef($reply_ref_id);
    $subject = "Re: ".$getData[0]['subject'];
    $emailResp = $getData[0]['recipient'];
     $emailSender = $getData[0]['sender'];
    $time_submit = $getData[0]['time_submit'];
    //$time_submit = date('F jS Y, h:i A', strtotime($time_submit));
    //$content = $getData[0]['content'];
    $this->gfa_model->allNotification($emailSender, $subject, $ref_id);
    $this->gfa_model->allNotificationBoxReply($subject, $message, $email, $emailSender, $ref_id,$reply_ref_id);   
    echo "Sent successfully!";
}
public function composesavepro() {
    $email = session()->get('email');
    $emailContacts = $this->request->getPost("emailContacts");
    $subject = $this->request->getPost("subject");
    $message = $this->request->getPost("editorContent");
    $ref_id = time() . rand(1000, 10000);
    $emailContactsJson = json_encode($emailContacts);
$this->gfa_model->allNotificationSave($subject, $message, $email, $emailContactsJson, $ref_id);
    // Assuming $email_notifier is defined elsewhere
    // foreach ($emailContacts as $key => $value) {
        // Assuming $this->gfa_model is properly instantiated and accessible
        // $this->gfa_model->allNotification($email_notifier, $subject, $ref_id);
        
   // }
    echo "Saved successfully";
}
public function checkmsgpro() {
    $email = session()->get('email');
    $getRefInbox = $this->request->getPost("getRefInbox");
    $getData = $this->gfa_model->getNotificationBoxRef($getRefInbox);
    $title = $getData[0]['subject'];
    $emailResp = $getData[0]['recipient'];
    $emailSender = $getData[0]['sender'];
    $time_submit = $getData[0]['time_submit'];
    $time_submit = date('F jS Y, h:i A', strtotime($time_submit));
    $content = $getData[0]['content'];
   $searchData = array('<div class="ql-editor" data-gramm="false" contenteditable="true">', '<input type="text" data-formula="e=mc^2" data-link="https://quilljs.com" data-video="Embed URL">','<input type="text" data-formula="e=mc^2" data-link="https://quilljs.com" data-video="Embed URL" placeholder="Embed URL">');
              $replaceData = array("<div>", "<br/>");
              $content = html_entity_decode(str_replace($searchData,$replaceData,stripslashes($content)), ENT_QUOTES); 
    
    if($this->gfa_model->getStartUpDetails($emailResp)[0]["Primary_Contact_Name"] !=""){
        $name = $this->gfa_model->getStartUpDetails($emailResp)[0]["Primary_Contact_Name"];
  }elseif($this->gfa_model->getMentorDetails($emailResp)[0]["Mentor_name"] !=""){
      $name =   $this->gfa_model->getMentorDetails($emailResp)[0]["Mentor_name"];
      
  }elseif($this->gfa_model->getInvestorDetails($emailResp)[0]['contact_person'] !=""){
       $name =   $this->gfa_model->getInvestorDetails($emailResp)[0]["contact_person"];
   }elseif($this->gfa_model->getCorperateDetails($emailResp)[0]['Key_contact_name'] !=""){ 
        $name =   $this->gfa_model->getCorperateDetails($emailResp)[0]["Key_contact_name"];
  }else{
        $name = "";
       
  }
  if($this->gfa_model->getStartUpDetails($emailSender)[0]["Primary_Contact_Name"] !=""){
        $nameSender = $this->gfa_model->getStartUpDetails($emailSender)[0]["Primary_Contact_Name"];
  }elseif($this->gfa_model->getMentorDetails($emailSender)[0]["Mentor_name"] !=""){
      $nameSender =   $this->gfa_model->getMentorDetails($emailSender)[0]["Mentor_name"];
      
  }elseif($this->gfa_model->getInvestorDetails($emailSender)[0]['contact_person'] !=""){
       $nameSender =   $this->gfa_model->getInvestorDetails($emailSender)[0]["contact_person"];
   }elseif($this->gfa_model->getCorperateDetails($emailSender)[0]['Key_contact_name'] !=""){ 
        $nameSender =   $this->gfa_model->getCorperateDetails($emailSender)[0]["Key_contact_name"];
  }else{
        $nameSender = "";
       
  }
    echo $title."|".ucwords($name)."|".$emailResp."|".$time_submit."|".$content."|".$getRefInbox."|".$nameSender;  
    
    
}

public function composepro() {
    $email = session()->get('email');
    $emailContacts = $this->request->getPost("emailContacts");
    $subject = $this->request->getPost("subject");
    $message = $this->request->getPost("editorContent");
    $ref_id = time() . rand(1000, 10000);
  

    // Assuming $email_notifier is defined elsewhere
    foreach ($emailContacts as $key => $value) {
        // Assuming $this->gfa_model is properly instantiated and accessible
        $this->gfa_model->allNotification($value, $subject, $ref_id);
        $this->gfa_model->allNotificationBox($subject, $message, $email, $value, $ref_id);
        
    }
    echo "Sent successfully";
}


public function loadOldNotify(){
        $data['email']  = session()->get('email') ;
    	echo view('notify_system/load_old_notify',$data);
}

public function loadOldNotifyCount(){
    $email  = session()->get('email') ;
    echo $this->gfa_model->countNotifyByEmail($email,'new');	
}

public function userClickedNotify(){
    
        $email = session()->get('email') ;
	   $getRef = $this->request->getPost("getRef");
	   $data = array('status' => 'old');
	   $this->gfa_model->updatedClickedNotify($data,$getRef);
	   //echo $getRef;
}


public function notify_inbox($ref_id="")


	{

         $email  = session()->get('email') ; if(($email == '')){ return redirect()->to(base_url('gfa/login')); }	
		$title['page_title'] = "Notify Inbox";
		$data['email'] =  $email;
		$data['ref_id'] =  $ref_id;
        $data['login_type'] = session()->get('login_type') ;
        $data['account_type'] = session()->get('account_type');
        $data['startupDataLimit'] = $this->gfa_model->getStartUpDetailsCompose();
		echo view('notify_system/header_notify',$title);
        echo view('notify_system/nav_notify',$data);
        //echo view('menu_new',$title);
		echo view('notify_system/notify_inbox',$data);
		echo view('notify_system/footer_notify',$data);
	    
	}
	
#===========================End Notify Inbox==========================================
    
    		public function dealroom($s='',$email_notifier="")

	{
		
	    $email  = session()->get('email'); if(($email == '')){ return redirect()->to(base_url('gfa/login')); }		
		$title['page_title'] = "DealRoom";
		$data['email'] =  $email;
        $data['login_type'] = session()->get('login_type') ;
        $data['account_type'] = $account_type = session()->get('account_type');
         #=================Notification and Inbox ================================
        $email_notifier = urldecode($email_notifier);
	    $subject = "Demande de partenariat (PME à l’investisseur)";
	    $message = "<p>Hello,</p>

    <p>J'espère que ce message vous trouvera bien. Je m'appelle [Votre nom] et je suis le fondateur de [Nom de la startup], une entreprise innovante qui va transformer le [industrie/secteur]. Je vous contacte parce que je crois que votre expertise et votre investissement pourraient jouer un rôle central dans notre parcours alors que nous continuons à croître et à nous développer. Chez [Nom de la startup], nous nous engageons à [brève description de la mission de votre startup et de ce qui la distingue]. Nous avons déjà franchi des étapes clés, notamment [mentionner toute réalisation notable telle que des partenariats, des récompenses ou des acquisitions de clients]. Alors que nous cherchons à étendre nos opérations et à stimuler la croissance, nous recherchons des partenariats stratégiques avec des investisseurs qui partagent notre vision. Votre expérience dans [industrie/secteur concerné] et votre réputation dans l’identification de startups à fort potentiel font de vous un partenaire idéal pour nous. </p>                                                                                                              <p>   Je suis convaincu qu'un investissement dans [Nom de la startup] offre une opportunité passionnante de faire partie d'une entreprise au potentiel important. Nous disposons d'un plan d'affaires solide, d'une équipe talentueuse et d'une feuille de route claire pour atteindre nos objectifs.J’aimerais avoir l’opportunité de discuter de la manière dont nous pouvons collaborer pour un bénéfice mutuel. Veuillez me faire savoir si vous êtes prêt à planifier une réunion ou si vous avez besoin d'informations supplémentaires.                                                                                                              Merci d'avoir envisagé cette opportunité et j'ai hâte d'avoir de vos nouvelles bientôt.</p>

    ";
    
     $ref_id = time().rand(1000,10000);
	 $this->gfa_model->allNotification($email_notifier, $subject, $ref_id);
	 $this->gfa_model->allNotificationBox($subject,$message, $email, $email_notifier,$ref_id);
	  #================= End Notification and Inbox ================================   
	if($account_type == 'startup' || $account_type == 'individual' || $account_type == 'accelerator'){
	   
	   
	    
	if($s==''){	
    //   session()->set('get_investor_id');
      session()->set('get_investor_id', "get_investor_id"); 
      session()->set('get_mentor_id', "get_mentor_id");
	}
		echo view('header_new',$title);
        echo view('nav_new',$data);
        echo view('menu_new',$title);
        
        //if($this->getProfilePoints() >= 50){ 
		echo view('dealroom',$data);
        //}else{
            
        //  echo view('profiledemo',$data);   
        // }
		echo view('footer_new');
	}
	if($account_type == 'investor' ){
		if($s==''){	
		   session()->set('get_investor_id');
		}
			echo view('investor/header_new',$title);
			echo view('investor/nav_new',$data);
			echo view('investor/menu_new',$title);
			
			echo view('investor/dealroom',$data);   
		
			echo view('investor/footer_new');
		}
		
		if($account_type == 'mentorship' ){
		if($s==''){	
		   session()->set('get_mentor_id');
		}
			echo view('mentor/header_new',$title);
			echo view('mentor/nav_new',$data);
			echo view('mentor/menu_new',$title);
			
			echo view('mentor/dealroom',$data);   
		
			echo view('mentor/footer_new');
		}

	}

    public function login()

    {
        
        
        $title['page_title'] = "Login GetFundedAfrica";

        echo view('header_home',$title);

        echo view('login');

        echo view('header_footer');

        

    }

     
    public function forgotpassword() {
        $title['page_title'] = "Forgot Password  ";
        echo view('header_home',$title);
        echo view('forgotpassword');
        echo view('header_footer');
    }

    public function partners()

    {
        
    $email  = session()->get('email') ;
    //if(($email == '')){ return redirect()->to(base_url('gfa/login')); }
        $title['page_title'] = "Corperate Partners ";
        $data['email'] =  $email;
        $data['login_type'] = session()->get('login_type') ;
          $data['account_type'] = session()->get('account_type') ;
        echo view('corperate/header_new',$title);
        echo view('corperate/nav_new',$data);
        echo view('corperate/menu_new',$data);
        echo view('corperate/partner_startup');
        echo view('corperate/footer_new',$data);

        

    }

    public function startup_content()

    {
        
        $email  = session()->get('email') ;
        if(($email == '')){ return redirect()->to(base_url('gfa/login')); }
        $title['page_title'] = "Startup Content ";
        $data['email'] =  $email;
        $data['login_type'] = session()->get('login_type') ;
        $data['account_type'] = session()->get('account_type') ;
        echo view('corperate/header_new',$title);
        echo view('corperate/nav_new',$data);
        echo view('corperate/menu_new',$data);
        echo view('corperate/startup_content', $data);
        echo view('corperate/footer_new',$data); 

        

    }
    
    public function invite_users()

	{
		
	     $email  = session()->get('email') ; if(($email == '')){ return redirect()->to(base_url('gfa/login')); }	
		$title['page_title'] = "Invite Users Registration ";
		$data['email'] =  $email;
        $data['login_type'] = session()->get('login_type') ;
        $data['account_type'] = session()->get('account_type') ;
		echo view('header_new',$title);
        
        echo view('nav_new',$data);
        echo view('menu_new',$title);
		echo view('corperate/invite_user');
		echo view('footer_new');

		

	}
    
    public function startupprofile()

	{
		
	    $email  = session()->get('email') ; if(($email == '')){ return redirect()->to(base_url('gfa/login')); }		
		$title['page_title'] = "Profile ";
		$data['email'] =  $email;
        $data['login_type'] = session()->get('login_type') ;
        $data['account_type'] = session()->get('account_type') ;
		echo view('header_new',$title);
        echo view('nav_new',$data);
        echo view('menu_new',$title);
        if(session()->get('account_type')=="startup" || session()->get('account_type')=="individual" || session()->get('account_type')==""){ 
		echo view('startupprofiledemo');
		
        }
        
        if(session()->get('account_type')=="investor" || session()->get('account_type')=="corperate"){ 
		echo view('investor_profile');
		
        }
		echo view('footer_new');

		

	}

    public function partner_startup()

    {
        
    $email  = session()->get('email') ;
        if(($email == '')){ return redirect()->to(base_url('gfa/login')); }
        $title['page_title'] = "Corperate Startups Connection ";
        $data['email'] =  $email;
        $data['login_type'] = session()->get('login_type') ;
        $data['account_type'] = session()->get('account_type') ;
        echo view('corperate/header_new',$title);
        echo view('corperate/nav_new',$data);
        echo view('corperate/menu_new',$data);
        echo view('corperate/partner_startup');
        echo view('corperate/footer_new',$data);

        

    }

    public function manage_csr()

	{
		
	    $email  = session()->get('email') ; if(($email == '')){ return redirect()->to(base_url('gfa/login')); }		
		$title['page_title'] = "Manage CSR ";
        //$data['id'] = $id; 
        $data['email'] =  $email;
        $data['login_type'] = session()->get('login_type') ;
        $data['account_type'] = session()->get('account_type');
        $data['admin_access'] = session()->get('admin_access');
		echo view('corperate/header_new',$title);
        echo view('corperate/nav_new',$data);
        echo view('corperate/menu_new',$title);
		echo view('corperate/manage_csr',$data);
		echo view('corperate/footer_new');

		

	}
    
    public function corperate_mentor()

    {
        
    $email  = session()->get('email') ;
 if(($email == '')){ return redirect()->to(base_url('gfa/login')); }
        $title['page_title'] = "Corperate Mentor Match ";
        $data['email'] =  $email;
        $data['login_type'] = session()->get('login_type') ;
          $data['account_type'] = session()->get('account_type') ;
        echo view('corperate/header_new',$title);
        echo view('corperate/nav_new',$data);
        echo view('corperate/menu_new',$data);
        echo view('corperate/corperate_mentor');
        echo view('corperate/footer_new',$data);

        

    }

    public function edit_csr($id='')

	{
		
	 $email  = session()->get('email') ;
 if(($email == '')){ return redirect()->to(base_url('gfa/login')); }
		$title['page_title'] = "Update CSR - GetFundedAfrica";
		$data['id'] = $id;

		$data['email'] = $email;
		echo view('corperate/header_new',$title);
        echo view('corperate/nav_new',$title);
        echo view('corperate/menu_new',$title);
		echo view('corperate/edit_csr',$data);
		echo view('corperate/footer_new');

		

	}

    public function corporate_dashboard()

	{
	     $emailVerifySession  = session()->get('email') ;
	    //$checkRegisteredAccount = $this->gfa_model->getCorperateDetails($emailVerifySession) ;
		
	if(empty($emailVerifySession)){  return redirect()->to(base_url('gfa/login')); }	
		
	
	
	
		$title['page_title'] = "Dashboard ";
		
		//Calculate Profile completed  startup name, industry, amount to raise, Hq Address, phone number, Anuual revenue, Employee size, linkined page url
		 $email = session()->get('email') ;
		
	  
	// if(!empty($this->gfa_model->getCurrentSub($email,'Basic Funding','active')) || !empty($this->gfa_model->getCurrentSub($email,'Premium Funding','active')) || !empty($this->gfa_model->getCurrentSub($email,'Business Funding','active'))){
// 	 if($this->admin_model->getCreditRedeemByEmail($email)[0]['Credit']==15){
      
//           echo '';
          
//       }else{
         // Insert credit and Email Request
            //$this->creditRedeemProfile(45); 
    //   $getCreditSub =   $this->admin_model->getCreditAciveSub($email);
         
    // //   }
	// }else{
	//     $paidCredit  = 0;
	//     $realCredit = $credit;
	//     $getCreditSub= 0;
	// }
	
	// $getPoints = $data['point'];
	
	// if($getPoints >=50){
	    
	//     $credit = 15;
	// }
	
	
    // $getBalanceFreeCredit = $credit - $this->admin_model->getCreditRedeemSumByEmailFree($email);    
	// $balanceCreditFree = ($getBalanceFreeCredit) * 700 ;
	// $getBalancePaidCredit = $getBalanceFreeCredit + ($getCreditSub - $this->admin_model->getCreditRedeemSumByEmailPaid($email));
	// $totalCredit = $credit + $paidCredit; 
	// $totalCreditInNaira = $totalCredit * 700 ; 
	//$viewCredit = detectCurrencyAmount($totalCreditInNaira);
	// $balanceCredit = (60 - $this->admin_model->getCreditRedeemSumByEmail($email)) * 700 ;
// 	$realCredit = 63 - ($credit + $paidCredit); 

//$transtotal = intval($this->total_transaction())  + intval($this->gfa_model->get_marketplace_report_total()) + intval($this->gfa_model->get_estore_report_total());
$transtotal = 0;
$data['totalTrans'] = $transtotal;
$data['tax'] = $transtotal * 0.05;
$data['cor_info'] = session()->get('cor_info');
$data['email'] = session()->get('email');
$data['admin_access'] = session()->get('admin_access');
$data['account_type'] = session()->get('account_type');
		echo view('corperate/header_new',$title);
        echo view('corperate/nav_new',$data);
        echo view('corperate/menu_new',$data);
		echo view('corperate/corporate_dashboard',$data);
		//echo view('corperate/analytics',$data); 
		echo view('corperate/footer_new');

		

	}

//=======================Course Management===========================

public function courseActivities()
{
	   $email = session()->get('email') ;
	   $user_action = $this->request->getPost("getValue");
	   $this->saveUserActivity($user_action, $email);
	   echo  $user_action;
	}


public function deleteTask(){
        $id   = $this->request->getPost("id"); 
        
        $this->gfa_model->deleteTask($id);
        
    }
public function deleteQuiz(){
        $id   = $this->request->getPost("id"); 
        
        $this->gfa_model->deleteQuiz($id);
        
    }

 public function editquestaskpro() {
                        
              
        $question =$this->request->getPost("question");                
        
        $ref_id = $this->request->getPost("ref_id");
        $ans_id = $this->request->getPost("ans_id");
        $id = $this->request->getPost("id");
        $time = date("Y-m-d h:i:s A",time());
        
        $income_entries= array();
        $number_of_entries = sizeof($question);  
        
        for ($j = 0; $j < $number_of_entries; $j++)
        {
       
        if(!empty($question)){
        
         if(!empty($id[$j])){
            $data_ques_update  =   array(
                'question'  => $question[$j],                    
                'ans_id'     => $ans_id[$j],                                   
                                   
                                                      
            );
             $this->gfa_model->updateTaskQues($data_ques_update,$id[$j]);
             
           }else{
         if($this->gfa_model->getTaskQuestion($ref_id)[0]['question'] != $question[$j]){
            $data_ques_add  =   array(
                'question'  => $question[$j],                    
                'ans_id'     => $ans_id[$j],                  
                'ref_id'  => $ref_id,                 
                                  
                                                      
            );
         	
            $this->gfa_model->insertTaskQues($data_ques_add);
         }
           
           }   
        
                
           }  
      
       }          

    echo "Task Questions Updated successfully";  
   // print_r($id);

}
    public function editquesquizpro() {
                        
              
        $question =$this->request->getPost("question");                
        $ans_1 = $this->request->getPost("ans_1");      
        $ans_2 = $this->request->getPost("ans_2");        
        $ans_3 = $this->request->getPost("ans_3");
        $ans_4 = $this->request->getPost("ans_4");
        $ref_id = $this->request->getPost("ref_id");
        $ans_id = $this->request->getPost("ans_id");
        $id = $this->request->getPost("id");
        $time = date("Y-m-d h:i:s A",time());
        
        $income_entries= array();
        $number_of_entries = sizeof($question);  
        
        for ($j = 0; $j < $number_of_entries; $j++)
        {
       
        if(!empty($question)){
        $entry_ans = array('ans_1' => $ans_1[$j], 'ans_2' => $ans_2[$j], 'ans_3' => $ans_3[$j], 'ans_4' => $ans_4[$j]);
        // array_push($income_entries, $new_entry);       
         $ans_json   = json_encode($entry_ans);   
         if(!empty($id[$j])){
            $data_ques_update  =   array(
                'question'  => $question[$j],                    
                'ans_id'     => $ans_id[$j],                                   
                'ans_json'     => $ans_json                    
                                                      
            );
             $this->gfa_model->updateQuizQues($data_ques_update,$id[$j]);
             
           }else{
          if($this->gfa_model->getQuizQuestion($ref_id)[0]['question'] != $question[$j]){
            $data_ques_add  =   array(
                'question'  => $question[$j],                    
                'ans_id'     => $ans_id[$j],                  
                'ref_id'  => $ref_id,                 
                'ans_json'     => $ans_json                    
                                                      
            );
            $this->gfa_model->insertQuizQues($data_ques_add);
          }
           
           }   
        
                
           }  
      
       }          

    echo "Quiz Questions Updated successfully";  
   // print_r($id);

}

public function edit_task($id="")

	{
			$email  = session()->get('email') ; if(($email == '')){ return redirect()->to(base_url('admin/login')); }		
		$title['page_title'] = "Update Task - GetFundedAfrica";
        $data['id'] =$id;
		echo view('head_doc',$title);
        echo view('nav_new',$title);
        echo view('menu_admin',$title);
		echo view('edit_task',$data);
		echo view('footer_doc');

	}

    public function edit_quiz($id="")

	{
			$email  = session()->get('email') ; if(($email == '')){ return redirect()->to(base_url('admin/login')); }		
		$title['page_title'] = "Update Quiz - GetFundedAfrica";
        $data['id'] =$id;
		echo view('head_doc',$title);
        echo view('nav_new',$title);
        echo view('menu_admin',$title);
		echo view('edit_quiz',$data);
		echo view('footer_doc');

	}
 public function manage_task()

	{
			$email  = session()->get('email') ; if(($email == '')){ return redirect()->to(base_url('admin/login')); }		
		$title['page_title'] = "Manage Task Section - GetFundedAfrica";

		echo view('header_new',$title);
        echo view('nav_new',$title);
        echo view('menu_admin',$title);
		echo view('manage_task');
		echo view('footer_new');

	}
    public function manage_quiz()

	{
			$email  = session()->get('email') ; if(($email == '')){ return redirect()->to(base_url('admin/login')); }		
		$title['page_title'] = "Manage Quiz Section - GetFundedAfrica";

		echo view('header_new',$title);
        echo view('nav_new',$title);
        echo view('menu_admin',$title);
		echo view('manage_quiz');
		echo view('footer_new');

	}
    public function quiz_result()

    {
        
        $email  = session()->get('email') ;
         $attempted  = session()->get('attempted') ;
          $score  = session()->get('score') ;
           $getRef  = session()->get('getRef') ;
           $total_questions  = session()->get('total_questions') ;

    // Stored our score and attempted question value in session to be used on Result page
    $data['total_ques'] = $total_questions; 
    $data['attempted'] = $attempted; 
    $data['score'] = $score; 
    $data['ref_id'] = $getRef;
    $data['quiz_attempted'] = $this->gfa_model->countQuizAttempted($getRef,$email);
   
   
    
       
        if(($email == '')){ return redirect()->to(base_url('gfa/login')); }
        $title['page_title'] = " Learning Quiz";
        $data['email'] =  $email;
        $data['login_type'] = session()->get('login_type') ;
        $data['account_type'] = session()->get('account_type') ;
        $data['StartupArray'] = $this->gfa_model->getStartUpDetails($email); 
        $data['skillArray'] = $this->gfa_model->getUserAccountExt($email); 
        $uri = $this->request->getUri(); $user_action = $uri->getSegment(2);
	    $this->saveUserActivity($user_action, $email);
        echo view('header-assets-new',$title);
         //echo view('menu-assets-new-page',$data);
         echo view('nav_lesson',$data);
        echo view('quiz_result', $data);
        echo view('footer-assets-new',$data); 


        

    }

		public function taskpro(){
        $email  = session()->get('email') ;
        $ans = $this->request->getPost("ans"); 
        $getRef = $this->request->getPost("ref_id");
        $score = 80;
         $income_entries= array();
        $number_of_entries = sizeof($ans);  
        
       
        $answer = json_encode($ans);
         $data_task = array(
        
        'ref_id' =>$getRef,
        'email' =>$email,
         'answer' =>$answer,
        'score' =>$score
         
        );
        $this->gfa_model->insertTaskAttempted($data_task);
    	
        echo 'Successfully submitted';
        
        }
    public function checkanswers()

    {
        $email  = session()->get('email') ;
        $correctAnswers = 0;
        $selected = $this->request->getPost("answer");
        
        $getRef = $this->request->getPost("ref_id"); 
        $getQuizQuestionData = $this->gfa_model->getQuizQuestion($getRef); 
        foreach($getQuizQuestionData as $getQuizQuestion){
            if ($getQuizQuestion['ans_id'] == $selected[$getQuizQuestion['qid']]) {
                $correctAnswers++;
              }
        }

    // Stored our score and attempted question value in session to be used on Result page
       
    $total_questions = $this->gfa_model->countQuizQuestion($getRef);
    $data['attempted'] = $attempted =  ($selected)?count($selected):0;
    $data['score'] = $score = ceil(($correctAnswers/$total_questions)*100);
    session()->set('attempted', $attempted);
    session()->set('score', $score);
    session()->set('getRef', $getRef);
    session()->set('total_questions', $total_questions);
    
   
    $data_quiz = array(
        
        'ref_id' =>$getRef,
        'email' =>$email,
        'score' =>$score
        );
        $this->gfa_model->insertQuizAttempted($data_quiz);
    
       
       return redirect()->to(base_url('gfa/quiz_result'));


    }
    public function quiz_answers($ref_id="")

    {
        
        $email  = session()->get('email') ;
        if(($email == '')){ return redirect()->to(base_url('gfa/login')); }
        $title['page_title'] = " Learning Quiz";
        $data['email'] =  $email;
        $data['login_type'] = session()->get('login_type') ;
        $data['account_type'] = session()->get('account_type') ;
        $data['StartupArray'] = $this->gfa_model->getStartUpDetails($email); 
        $data['skillArray'] = $this->gfa_model->getUserAccountExt($email); 
        $data['getQuizTitle'] = $this->gfa_model->getQuizTitle($ref_id); 
        $data['quiz_attempted'] = $this->gfa_model->countQuizAttempted($ref_id,$email); 
        $uri = $this->request->getUri(); $user_action = $uri->getSegment(2);
	    $this->saveUserActivity($user_action, $email);
        echo view('header-assets-new',$title);
         echo view('menu-assets-new-page',$data);
        echo view('navbar-assets-new',$data);
        echo view('quiz_answers', $data);
        echo view('footer-assets-new',$data); 

        

    }
 public function task($ref_id="")

    {
        
        $email  = session()->get('email') ;
        if(($email == '')){ return redirect()->to(base_url('gfa/login')); }
        $title['page_title'] = " Learning Task";
        $data['email'] =  $email;
        $data['login_type'] = session()->get('login_type') ;
        $data['account_type'] = session()->get('account_type') ;
        $data['StartupArray'] = $this->gfa_model->getStartUpDetails($email); 
        $data['skillArray'] = $this->gfa_model->getUserAccountExt($email); 
        $data['getTaskTitle'] = $this->gfa_model->getTaskTitle($ref_id); 
        $data['quiz_attempted'] = $this->gfa_model->countTaskAttempted($ref_id,$email); 
        $uri = $this->request->getUri(); $user_action = $uri->getSegment(2);
	    $this->saveUserActivity($user_action, $email);
        echo view('header-assets-new',$title);
         echo view('menu-assets-new-page',$data);
        echo view('navbar-assets-new',$data);
        echo view('task', $data);
        echo view('footer-assets-new',$data); 

        

    }
    public function quiz($ref_id="")

    {
        
        $email  = session()->get('email') ;
        if(($email == '')){ return redirect()->to(base_url('gfa/login')); }
        $title['page_title'] = " Learning Quiz";
        $data['email'] =  $email;
        $data['login_type'] = session()->get('login_type') ;
        $data['account_type'] = session()->get('account_type') ;
        $data['StartupArray'] = $this->gfa_model->getStartUpDetails($email); 
        $data['skillArray'] = $this->gfa_model->getUserAccountExt($email); 
        $data['getQuizTitle'] = $this->gfa_model->getQuizTitle($ref_id); 
        $data['quiz_attempted'] = $this->gfa_model->countQuizAttempted($ref_id,$email); 
        $uri = $this->request->getUri(); $user_action = $uri->getSegment(2);
	    $this->saveUserActivity($user_action, $email);
        echo view('header-assets-new',$title);
         //echo view('menu-assets-new-page',$data);
        echo view('nav_lesson',$data);
        echo view('quiz', $data);
        echo view('footer-assets-new',$data); 

        

    }

	public function edittaskpostpro(){
        $title   = $this->gfa_model->mysqlCheck($this->request->getPost("title"));
        $course_id   = $this->gfa_model->mysqlCheck($this->request->getPost("course_id"));
        $section_id   = $this->gfa_model->mysqlCheck($this->request->getPost("section_id"));
        $id   = $this->gfa_model->mysqlCheck($this->request->getPost("id"));
        $data_story = array(
                        
                        'course_id' => $course_id,
                        'section_id' => $section_id,
                        'title' => $title
                        
                        
                        
                    
                        );
                        
                        $this->gfa_model->updateTaskTitle($data_story,$id); 
                        echo "Update title successfully";
    }


    public function editquizpostpro(){
        $title   = $this->gfa_model->mysqlCheck($this->request->getPost("title"));
        $course_id   = $this->gfa_model->mysqlCheck($this->request->getPost("course_id"));
        $section_id   = $this->gfa_model->mysqlCheck($this->request->getPost("section_id"));
        $id   = $this->gfa_model->mysqlCheck($this->request->getPost("id"));
        $data_story = array(
                        
                        'course_id' => $course_id,
                        'section_id' => $section_id,
                        'title' => $title
                        
                        
                        
                    
                        );
                        
                        $this->gfa_model->updateQuizTitle($data_story,$id); 
                        echo "Update title successfully";
    }

	 public function addquestaskpro() {
                        
              
        $question =$this->request->getPost("question");                
        
        $ref_id = $this->request->getPost("ref_id");
        $ans_id = $this->request->getPost("ans_id");
        $time = date("Y-m-d h:i:s A",time());
        
        $income_entries= array();
        $number_of_entries = sizeof($question);  
        
        for ($j = 0; $j < $number_of_entries; $j++)
        {
       
        if(!empty($question)){
          
         $data_ques  =   array(
                    'question'  => $question[$j],                    
                    'ans_id'     => $ans_id[$j],                  
                    'ref_id'  => $ref_id,                 
                                       
                                                          
                );
                
           }  
       
         $this->gfa_model->insertTaskQues($data_ques);
             
       }          

       echo "Task Question Added successfully";  

}
    
    public function addquesquizpro() {
                        
              
        $question =$this->request->getPost("question");                
        $ans_1 = $this->request->getPost("ans_1");      
        $ans_2 = $this->request->getPost("ans_2");        
        $ans_3 = $this->request->getPost("ans_3");
        $ans_4 = $this->request->getPost("ans_4");
        $ref_id = $this->request->getPost("ref_id");
        $ans_id = $this->request->getPost("ans_id");
        $time = date("Y-m-d h:i:s A",time());
        
        $income_entries= array();
        $number_of_entries = sizeof($question);  
        
        for ($j = 0; $j < $number_of_entries; $j++)
        {
       
        if(!empty($question)){
        $entry_ans = array('ans_1' => $ans_1[$j], 'ans_2' => $ans_2[$j], 'ans_3' => $ans_3[$j], 'ans_4' => $ans_4[$j]);
        // array_push($income_entries, $new_entry);       
         $ans_json   = json_encode($entry_ans);   
         $data_ques  =   array(
                    'question'  => $question[$j],                    
                    'ans_id'     => $ans_id[$j],                  
                    'ref_id'  => $ref_id,                 
                    'ans_json'     => $ans_json                    
                                                          
                );
                
           }  
       
         $this->gfa_model->insertQuizQues($data_ques);
             
       }          

       echo "Quiz Question Added successfully";  

}

public function edit_task_ques($ref_id="")

{
    $email  = session()->get('email') ; if(($email == '')){ return redirect()->to(base_url('admin/login')); }		
    $title['page_title'] = "Update Task Questions - GetFundedAfrica";
    $data['ref_id'] = $ref_id;
	$data['getRef'] = $ref_id;
    $data['getQuizTitle'] = $this->gfa_model->getTaskTitle($ref_id); 
    echo view('header_new',$title);
    echo view('nav_new',$title);
    echo view('menu_admin',$title);
    echo view('edit_task_ques',$data);
    echo view('footer_new'); 

}


public function edit_quiz_ques($ref_id="")

{
    $email  = session()->get('email') ; if(($email == '')){ return redirect()->to(base_url('admin/login')); }		
    $title['page_title'] = "Update Quiz Questions - GetFundedAfrica";
    $data['ref_id'] = $ref_id;
    $data['getQuizTitle'] = $this->gfa_model->getQuizTitle($ref_id); 
    echo view('header_new',$title);
    echo view('nav_new',$title);
    echo view('menu_admin',$title);
    echo view('edit_quiz_ques',$data);
    echo view('footer_new'); 

}

public function add_task_ques($ref_id="")

{
    $email  = session()->get('email') ; if(($email == '')){ return redirect()->to(base_url('admin/login')); }		
    $title['page_title'] = "Add Task Questions - GetFundedAfrica";
    $data['ref_id'] = $ref_id;
    echo view('header_new',$title);
    echo view('nav_new',$title);
    echo view('menu_admin',$title);
    echo view('add_task_ques',$data);
    echo view('footer_new'); 

}

    public function add_quiz_ques($ref_id="")

{
    $email  = session()->get('email') ; if(($email == '')){ return redirect()->to(base_url('admin/login')); }		
    $title['page_title'] = "Add Quiz Questions - GetFundedAfrica";
    $data['ref_id'] = $ref_id;
    echo view('header_new',$title);
    echo view('nav_new',$title);
    echo view('menu_admin',$title);
    echo view('add_quiz_ques',$data);
    echo view('footer_new'); 

}

 public function addquizpostpro(){
        $title   = $this->gfa_model->mysqlCheck($this->request->getPost("title"));
        $course_id   = $this->gfa_model->mysqlCheck($this->request->getPost("course_id"));
        $section_id   = $this->gfa_model->mysqlCheck($this->request->getPost("section_id"));
 		$lesson_id   = $this->gfa_model->mysqlCheck($this->request->getPost("lesson_id"));
        $ref_id   = $this->gfa_model->mysqlCheck($this->request->getPost("ref_id"));
        $data_story = array(
                        
                        'course_id' => $course_id,
                        'section_id' => $section_id,
                        'ref_id' => $ref_id,
        				'lesson_id' => $lesson_id,
                        'title' => $title
                        
                        
                        
                    
                        );
                        
                        $this->gfa_model->insertQuizTitle($data_story); 
                        echo "Quiz Title created successfully";
    }

public function addtaskpostpro(){
        $title   = $this->gfa_model->mysqlCheck($this->request->getPost("title"));
        $course_id   = $this->gfa_model->mysqlCheck($this->request->getPost("course_id"));
        $section_id   = $this->gfa_model->mysqlCheck($this->request->getPost("section_id"));
 		$lesson_id   = $this->gfa_model->mysqlCheck($this->request->getPost("lesson_id"));
        $ref_id   = $this->gfa_model->mysqlCheck($this->request->getPost("ref_id"));
        $data_story = array(
                        
                        'course_id' => $course_id,
                        'section_id' => $section_id,
                        'ref_id' => $ref_id,
        				'lesson_id' => $lesson_id,
                        'title' => $title
                        
                        
                        
                    
                        );
                        
                        $this->gfa_model->insertTaskTitle($data_story); 
                        echo "Task Title created successfully";
    }

public function add_task()

{
    $email  = session()->get('email') ; if(($email == '')){ return redirect()->to(base_url('admin/login')); }		
    $title['page_title'] = "Add Task - GetFundedAfrica";

    echo view('head_doc',$title);
    echo view('nav_new',$title);
    echo view('menu_admin',$title);
    echo view('add_task');
    echo view('footer_doc'); 

}
    
    
 public function add_quiz()

{
    $email  = session()->get('email') ; if(($email == '')){ return redirect()->to(base_url('admin/login')); }		
    $title['page_title'] = "Add Quiz - GetFundedAfrica";

    echo view('head_doc',$title);
    echo view('nav_new',$title);
    echo view('menu_admin',$title);
    echo view('add_quiz');
    echo view('footer_doc'); 

}

public function edit_lessonpostpro_ext(){
    $textData  =  $this->request->getPost("textData");
    $ref_id = $this->gfa_model->mysqlCheck($this->request->getPost("ref_id"));
    $data_story = array(
                    
                    'data' => $textData,
                   
                    
                    
                    
                
                    );
                    
                    $this->gfa_model->updateDataExt($data_story, $ref_id); 
    
}


public function deleteLesson(){
    $id   = $this->request->getPost("id"); 
    
    $this->gfa_model->deleteLesson($id);
    
}
public function deleteCourse(){
    $id   = $this->request->getPost("id"); 
    
    $this->gfa_model->deleteCourse($id);
    
}

public function deleteCourseSection(){
    $id   = $this->request->getPost("id"); 
    
    $this->gfa_model->deleteCourseSection($id);
    
}
public function deleteCourseCategory(){
    $id   = $this->request->getPost("id"); 
    
    $this->gfa_model->deleteCourseCategory($id);
    
}

public function edit_coursesectionpostpro(){
    
    $title   = $this->gfa_model->mysqlCheck($this->request->getPost("title"));
    $course_id   = $this->gfa_model->mysqlCheck($this->request->getPost("course_id"));
    $id   = $this->request->getPost("id");
    $data_story = array(
                    
                    
                    'title' => $title
                    
                    
                
                    );
                    
                    $this->gfa_model->updateCourseSection($data_story, $id); 
                    echo "Course Section updated successfully";  
}

public function edit_coursecategorypostpro(){
    
  $title   = strtolower($this->gfa_model->mysqlCheck($this->request->getPost("title")));
  $id   = $this->request->getPost("id");
    $data_story = array(
                    
                    
                    'title' => $title
                    
                    
                
                    );
                    
                    $this->gfa_model->updateCourseCategory($data_story, $id); 
                    echo "Course Category updated successfully";  
}

public function coursesectionpostpro(){
    $title   = $this->gfa_model->mysqlCheck($this->request->getPost("title"));
    $course_id   = $this->gfa_model->mysqlCheck($this->request->getPost("course_id"));
    $data_story = array(
                    
                    'course_id' => $course_id,
                    'title' => $title
                    
                    
                    
                
                    );
                    
                    $this->gfa_model->insertCourseSection($data_story); 
                    echo "Course Section created successfully";
}

public function coursecategorypostpro(){
    $title   = strtolower($this->gfa_model->mysqlCheck($this->request->getPost("title")));
    $data_story = array(
                    
                    
                    'title' => $title
                    
                    
                
                    );
                    
                    $this->gfa_model->insertCourseCategory($data_story); 
                    echo "Course Category created successfully";
}

public function edit_lessonpostpro(){
    
    $course  =  $this->request->getPost("course");
    $section  = $this->gfa_model->mysqlCheck($this->request->getPost("section"));
    $title   = $this->gfa_model->mysqlCheck($this->request->getPost("title"));
    $media  =  $this->request->getPost("media");
    $duration_value = $this->gfa_model->mysqlCheck($this->request->getPost("duration_value"));
    $duration_time   = $this->gfa_model->mysqlCheck($this->request->getPost("duration_time"));
    $id = $this->gfa_model->mysqlCheck($this->request->getPost("id"));
    $getfile = $this->gfa_model->mysqlCheck($this->request->getPost("getfile"));
  
    //==================Event Url =================================
    // $search_array = array("   ", "  "," ","'");
    // $replace_array = array("-","-","-", "");
    // $event_url = str_replace($search_array, $replace_array, $title);
//================================================================= 
      $files = $this->request->getFiles();
    $dataInfo = array(); 
    // Loop through the files
    foreach ($files['file'] as $file) {
        
        // Check if the file is valid
        if ($file->isValid() && ! $file->hasMoved()) {
            
            // Generate a new filename
            $newName = $file->getRandomName();
            $dataInfo[] = $newName;
            // Move the file to the public/uploads directory
            $file->move('./uploads/files', $newName);
            
           
        }
    }

if($dataInfo[0] ==''){
        
    $coverPics = $getfile;
}else{
    $coverPics  = $dataInfo[0];
}
   
        
   
    $data_story = array(
                    
                    
                    'title' => $title,
                    'file' => $coverPics,
                    'media' => $media,
                    'duration_value' => $duration_value,
                    'duration_time' => $duration_time,
                    'course_id' =>$course,
                    'section_id' =>$section
                    
                
                    );
                    
                    $this->gfa_model->updateLesson($data_story, $id); 
                    echo "Lesson updated successfully";

}
public function updatecoursepostpro(){
    
    $course_category_id  =  $this->request->getPost("course_category");
    $coursetitle  = $this->gfa_model->mysqlCheck($this->request->getPost("coursetitle"));
    $start_date   = $this->gfa_model->mysqlCheck($this->request->getPost("start_date"));
    $end_date   = $this->gfa_model->mysqlCheck($this->request->getPost("end_date"));
    $media  =  $this->gfa_model->mysqlCheck($this->request->getPost("media"));
    $duration = $this->gfa_model->mysqlCheck($this->request->getPost("duration"));
    $duration_time   = $this->gfa_model->mysqlCheck($this->request->getPost("duration_time"));
    $description   = $this->gfa_model->mysqlCheck($this->request->getPost("description"));
    $lmslink = $this->gfa_model->mysqlCheck($this->request->getPost("lmslink"));
    $item_id = 0;
    $course_category_title = $this->gfa_model->getCourseCategory($course_category_id)[0]['title'];
    $getfile = $this->gfa_model->mysqlCheck($this->request->getPost("getfile"));
    $getdoc = $this->gfa_model->mysqlCheck($this->request->getPost("getdoc"));
    $files = $this->request->getFiles();
    $id = $this->gfa_model->mysqlCheck($this->request->getPost("id"));
    //==================Event Url =================================
    // $search_array = array("   ", "  "," ","'");
    // $replace_array = array("-","-","-", "");
    // $event_url = str_replace($search_array, $replace_array, $title);
//================================================================= 
    
    $dataInfo = array(); 
    // Loop through the files
    foreach ($files['file'] as $file) {
        
        // Check if the file is valid
        if ($file->isValid() && ! $file->hasMoved()) {
            
            // Generate a new filename
            $newName = $file->getRandomName();
            $dataInfo[] = $newName;
            // Move the file to the public/uploads directory
            $file->move('./uploads/files', $newName);
            
           
        }
    }
    
if($dataInfo[0] ==''){
        
    $coverPics = $getfile;
	
}else{
    $coverPics  = $dataInfo[0];
}
   if($dataInfo[1] ==''){
        
    $fileDoc = $getdoc;
	
}else{
    $fileDoc  = $dataInfo[1];
}
        
   
    $data_story = array(
                    
                    'item_id' => $item_id,
                    'coursetitle' => $coursetitle,
                    'img' =>$coverPics,
                    'media' => $media,
                    'duration' => $duration,
                    'duration_time' => $duration_time,
                    'course_category_id' =>$course_category_id,
                    'description' =>$description,
                    'learningpath' =>$course_category_title,
                    'start_date' =>$start_date,
                    'end_date' =>$end_date,
   					'file' =>$fileDoc,
                    'lmslink' =>$lmslink,
                    
                
                    );
                    
                    $this->gfa_model->updateCourse($data_story,$id); 
                    echo "Course updated successfully";

}

public function UpdateCsrpostpro(){
    
    $title  =  $this->gfa_model->mysqlCheck($this->request->getPost("title"));
    $event	= $this->gfa_model->mysqlCheck($this->request->getPost("event"));
    $videourl	= $this->gfa_model->mysqlCheck($this->request->getPost("videourl"));
    $venue  =  $this->gfa_model->mysqlCheck($this->request->getPost("venue"));
    $start_date	= $this->gfa_model->mysqlCheck($this->request->getPost("start_date"));
    $end_date	= $this->gfa_model->mysqlCheck($this->request->getPost("end_date"));
    $ticket	= $this->gfa_model->mysqlCheck($this->request->getPost("ticket"));
    $currency	= '';  //$this->request->getPost("currency");
    $amount	= ''; //$this->request->getPost("amount");
    $time 	=  date("Y-m-d h:i:s A",time());
    $email  = session()->get('email') ;
    $company = $this->gfa_model->getCorperateDetails($email)[0]['Event'];	
    $startup_view = $this->request->getPost("startup_view");
    $getFile = $this->request->getPost("getFile");
    $id = $this->request->getPost("id");
    $files = $this->request->getFiles();
   
    $dataInfo = array(); 
    // Loop through the files
    foreach ($files['file'] as $file) {
        
        // Check if the file is valid
        if ($file->isValid() && ! $file->hasMoved()) {
            
            // Generate a new filename
            $newName = $file->getRandomName();
            $dataInfo[] = $newName;
            // Move the file to the public/uploads directory
            $file->move('./uploads/files', $newName);
            
           
        }
    }

if($dataInfo[0] ==''){
        
    $coverPics = $getFile;
	
}else{
    $coverPics  = $dataInfo[0];
}
	
	$data_story = array(
					
					'title' => $title,
					'csr' => $event,
					'videourl' => $videourl,
					'picture' => $coverPics,
					'venue' => $venue,
					'start_date' => $start_date,
					'end_date' => $end_date,
					'ticket' => $ticket,
					'currency' => $currency,
					'amount' => $amount,
					'time_Submit' => $time
				
					);
					
					$this->gfa_model->updateCSR($data_story, $id); 
					echo "CSR Update Successfully";
}


public function Csrpostpro(){
    
    $title  =  $this->gfa_model->mysqlCheck($this->request->getPost("title"));
    $event	= $this->gfa_model->mysqlCheck($this->request->getPost("event"));
    $videourl	= $this->gfa_model->mysqlCheck($this->request->getPost("videourl"));
    $venue  =  $this->gfa_model->mysqlCheck($this->request->getPost("venue"));
    $start_date	= $this->gfa_model->mysqlCheck($this->request->getPost("start_date"));
    $end_date	= $this->gfa_model->mysqlCheck($this->request->getPost("end_date"));
    $ticket	= $this->gfa_model->mysqlCheck($this->request->getPost("ticket"));
    $currency	= '';  //$this->request->getPost("currency");
    $amount	= ''; //$this->request->getPost("amount");
    $time 	=  date("Y-m-d h:i:s A",time());
    $email  = session()->get('email') ;
    $company = $this->gfa_model->getCorperateDetails($email)[0]['Event'];	
    $startup_view = $this->request->getPost("startup_view");
    $files = $this->request->getFiles();
   
    $dataInfo = array(); 
    // Loop through the files
    foreach ($files['file'] as $file) {
        
        // Check if the file is valid
        if ($file->isValid() && ! $file->hasMoved()) {
            
            // Generate a new filename
            $newName = $file->getRandomName();
            $dataInfo[] = $newName;
            // Move the file to the public/uploads directory
            $file->move('./uploads/files', $newName);
            
           
        }
    }


	
	$data_story = array(
					
					'title' => $title,
					'csr' => $event,
					'videourl' => $videourl,
					'picture' => $dataInfo[0],
					'status' => 'pending',
					'email' => $email,
					'venue' => $venue,
					'start_date' => $start_date,
					'end_date' => $end_date,
					'ticket' => $ticket,
					'currency' => $currency,
					'amount' => $amount,
					'time_Submit' => $time
				
					);
					
					$this->gfa_model->insertCSR($data_story); 
					echo "RSE soumise";
}


public function addcoursepostpro(){
    
    $course_category_id  =  $this->request->getPost("course_category");
    $coursetitle  = $this->gfa_model->mysqlCheck($this->request->getPost("coursetitle"));
    $start_date   = $this->gfa_model->mysqlCheck($this->request->getPost("start_date"));
    $end_date   = $this->gfa_model->mysqlCheck($this->request->getPost("end_date"));
    $media  =  $this->gfa_model->mysqlCheck($this->request->getPost("media"));
    $duration = $this->gfa_model->mysqlCheck($this->request->getPost("duration"));
    $duration_time   = $this->gfa_model->mysqlCheck($this->request->getPost("duration_time"));
    $description   = $this->gfa_model->mysqlCheck($this->request->getPost("description"));
    $ref_id = $this->gfa_model->mysqlCheck($this->request->getPost("ref_id"));
    $lmslink = $this->gfa_model->mysqlCheck($this->request->getPost("lmslink"));
    $item_id = 0;
    $course_category_title = $this->gfa_model->getCourseCategory($course_category_id)[0]['title'];
    $files = $this->request->getFiles();
    //==================Event Url =================================
    // $search_array = array("   ", "  "," ","'");
    // $replace_array = array("-","-","-", "");
    // $event_url = str_replace($search_array, $replace_array, $title);
//================================================================= 
    
    $dataInfo = array(); 
    // Loop through the files
    foreach ($files['file'] as $file) {
        
        // Check if the file is valid
        if ($file->isValid() && ! $file->hasMoved()) {
            
            // Generate a new filename
            $newName = $file->getRandomName();
            $dataInfo[] = $newName;
            // Move the file to the public/uploads directory
            $file->move('./uploads/files', $newName);
            
           
        }
    }


   
        
   
    $data_story = array(
                    
                    'item_id' => $item_id,
                    'coursetitle' => $coursetitle,
                    'img' => $dataInfo[0],
                    'media' => $media,
                    'duration' => $duration,
                    'duration_time' => $duration_time,
                    'course_category_id' =>$course_category_id,
                    'description' =>$description,
                    'learningpath' =>$course_category_title,
                    'start_date' =>$start_date,
                    'end_date' =>$end_date,
                    'lmslink' =>$lmslink,
    				'file' =>$dataInfo[1],
                    'ref_id' =>$ref_id,
                
                    );
                    
                    $this->gfa_model->insertCourse($data_story); 
                    echo "Course created successfully";

}

public function lessonpostpro_ext(){
    $textData  =  $this->request->getPost("textData");
    $ref_id = $this->gfa_model->mysqlCheck($this->request->getPost("ref_id"));
    $data_story = array(
                    
                    'data' => $textData,
                    'ref_id' => $ref_id,
                    
                    
                    
                
                    );
                    
                    $this->gfa_model->insertDataExt($data_story); 
    
}

public function commentpro(){

$commentText  = $this->gfa_model->mysqlCheck($this->request->getPost("commentText"));
$lesson_id  =  $this->request->getPost("lesson_id");
$email = session()->get('email') ;
$nameOfPoster = $this->gfa_model->getStartUpDetails($email)[0]['Primary_Contact_Name']; 
$timeDate = time() +3600;
//if(email = email && $commentText =$commentText){
echo '<div class="comment"><div class="user">'.$nameOfPoster.'</div> <p>'.$commentText.'</p><div class="timestamp">'.$this->gfa_model->timeAgo($timeDate).'</div></div>';

		$data_comment = array(
                    
                    
                    'comment' => $commentText,
                    'lesson_id' => $lesson_id,
                    'email' => $email,
                    'status' => 'active',
                    
                    );
                    
                    $this->gfa_model->insertComments($data_comment); 
                
}

public function lessonpostpro(){
    
    
    $section  = $this->gfa_model->mysqlCheck($this->request->getPost("section"));
    $title   = $this->gfa_model->mysqlCheck($this->request->getPost("title"));
    $media  =  $this->request->getPost("media");
    $duration_value = $this->gfa_model->mysqlCheck($this->request->getPost("duration_value"));
    $duration_time   = $this->gfa_model->mysqlCheck($this->request->getPost("duration_time"));
    $ref_id = $this->gfa_model->mysqlCheck($this->request->getPost("ref_id"));
    $files = $this->request->getFiles();
    //==================Event Url =================================
    // $search_array = array("   ", "  "," ","'");
    // $replace_array = array("-","-","-", "");
    // $event_url = str_replace($search_array, $replace_array, $title);
//================================================================= 
    
    $dataInfo = array(); 
    // Loop through the files
    foreach ($files['file'] as $file) {
        
        // Check if the file is valid
        if ($file->isValid() && ! $file->hasMoved()) {
            
            // Generate a new filename
            $newName = $file->getRandomName();
            $dataInfo[] = $newName;
            // Move the file to the public/uploads directory
            $file->move('./uploads/files', $newName);
            
           
        }
    }


   
        
   
    $data_story = array(
                    
                    
                    'title' => $title,
                    'file' => $dataInfo[0],
                    'media' => $media,
                    'duration_value' => $duration_value,
                    'duration_time' => $duration_time,
                    'ref_id' => $ref_id,
                    'course_id' =>$course,
                    'section_id' =>$section
                    
                
                    );
                    
                    $this->gfa_model->insertLesson($data_story); 
                    echo "Lesson created successfully";

}

public function fetchSection()

	{
	   $thisVal =  $this->request->getPost("thisVal"); 
	   $getSectionData = $this->gfa_model->getSectionByCourseId($thisVal); 
	   foreach($getSectionData as $getSection){
	    echo '<option value="'.$getSection['id'].'">'.$getSection['title'].'</option>';
	   }
	}
	
	public function add_quiz_extra($course_id="",$section_id="",$lesson_id="")

	{
			$email  = session()->get('email') ; if(($email == '')){ return redirect()->to(base_url('admin/login')); }		
		$title['page_title'] = "Add Lesson - GetFundedAfrica";
		$data['course_id'] = $course_id;
        $data['section_id'] = $section_id;
    	$data['lesson_id'] = $lesson_id;
		echo view('head_doc',$title);
        echo view('nav_new',$title);
        echo view('menu_admin',$title);
		echo view('add_quiz_extra',$data);
		echo view('footer_doc'); 

	}
	
	public function add_lesson_extra($course_id="",$section_id="")

	{
			$email  = session()->get('email') ; if(($email == '')){ return redirect()->to(base_url('admin/login')); }		
		$title['page_title'] = "Add Lesson - GetFundedAfrica";
		$data['course_id'] = $course_id;
        $data['section_id'] = $section_id;
		echo view('head_doc',$title);
        echo view('nav_new',$title);
        echo view('menu_admin',$title);
		echo view('add_lesson_extra',$data);
		echo view('footer_doc'); 

	}
	
	public function add_course_section_extra($course_id="")

	{
			$email  = session()->get('email') ; if(($email == '')){ return redirect()->to(base_url('admin/login')); }		
		$title['page_title'] = "Add Section - GetFundedAfrica";
        	$data['course_id'] = $course_id;
		echo view('header_new',$title);
        echo view('nav_new',$title);
        echo view('menu_admin',$title);
		echo view('add_course_section_extra',$data);
		echo view('footer_new'); 

	}
	
	public function add_course_section()

	{
			$email  = session()->get('email') ; if(($email == '')){ return redirect()->to(base_url('admin/login')); }		
		$title['page_title'] = "Add Section - GetFundedAfrica";

		echo view('header_new',$title);
        echo view('nav_new',$title);
        echo view('menu_admin',$title);
		echo view('add_course_section');
		echo view('footer_new'); 

	}
	
	public function add_course_category()

	{
			$email  = session()->get('email') ; if(($email == '')){ return redirect()->to(base_url('admin/login')); }		
		$title['page_title'] = "Add Lesson - GetFundedAfrica";

		echo view('header_new',$title);
        echo view('nav_new',$title);
        echo view('menu_admin',$title);
		echo view('add_course_category');
		echo view('footer_new'); 

	}
	public function add_course()

	{
			$email  = session()->get('email') ; if(($email == '')){ return redirect()->to(base_url('admin/login')); }		
		$title['page_title'] = "Add Course - GetFundedAfrica";

		echo view('head_doc',$title);
        echo view('nav_new',$title);
        echo view('menu_admin',$title);
		echo view('add_course');
		echo view('footer_doc'); 

	}

	public function add_lesson()

	{
			$email  = session()->get('email') ; if(($email == '')){ return redirect()->to(base_url('admin/login')); }		
		$title['page_title'] = "Add Lesson - GetFundedAfrica";

		echo view('head_doc',$title);
        echo view('nav_new',$title);
        echo view('menu_admin',$title);
		echo view('add_lesson');
		echo view('footer_doc'); 

	}

public function lesson($id="")

    {
        
        $email  = session()->get('email') ;
        $course_sess_id = session()->get('course_sess_id') ;
        $less_course_sess_id = session()->get('less_course_sess_id') ;
        if(($email == '')){ return redirect()->to(base_url('gfa/login')); }
        $title['page_title'] = " Learning Course";
        $data['email'] =  $email;
        $data['login_type'] = session()->get('login_type') ;
        $data['account_type'] = session()->get('account_type') ;
        $data['StartupArray'] = $this->gfa_model->getStartUpDetails($email); 
        $data['skillArray'] = $this->gfa_model->getUserAccountExt($email);
        $data['id'] = $id;
        if(!empty( $course_sess_id) &&  $course_sess_id !=""){
            $data['course_sess_id'] =  $course_sess_id ;
        }elseif(!empty( $less_course_sess_id) &&  $less_course_sess_id !=""){
          
          $data['course_sess_id'] = $less_course_sess_id ; 
         }else{
            $course_id = $this->gfa_model->getLessonById($id)[0]['course_id'];
            
            $less_course_sess_id = session()->set('less_course_sess_id', $course_id);
            $get_course_sess_id = session()->get('course_sess_id');
            if(!empty( $less_course_sess_id) &&  $less_course_sess_id !=""){
             $data['course_sess_id'] = session()->get('course_sess_id'); 
            }else{
               $data['course_sess_id'] =  $course_id;
            }
         }
         $uri = $this->request->getUri(); $user_action = $uri->getSegment(2);
	     $this->saveUserActivity($user_action, $email);
        echo view('header-assets-new',$title);
         //echo view('menu-assets-new-page',$data);
        echo view('nav_lesson',$data);
        echo view('lesson', $data);
        echo view('footer-assets-new',$data); 

        

    }

public function course($id="")

    {
        
        $email  = session()->get('email') ;
        if(($email == '')){ return redirect()->to(base_url('gfa/login')); }
        $title['page_title'] = " Learning Course";
        $data['email'] =  $email;
        $data['login_type'] = session()->get('login_type') ;
        $data['account_type'] = session()->get('account_type') ;
        $data['StartupArray'] = $this->gfa_model->getStartUpDetails($email); 
        $data['skillArray'] = $this->gfa_model->getUserAccountExt($email);
        $uri = $this->request->getUri(); $user_action = $uri->getSegment(2);
	    $this->saveUserActivity($user_action, $email);
        $data['id'] = $id;
        session()->set('course_sess_id', $id);
        echo view('header-assets-new',$title);
         //echo view('menu-assets-new-page',$data);
         echo view('nav_lesson',$data);
        echo view('course', $data);
        echo view('footer-assets-new',$data); 

        

    }
    public function edit_course($id="")

	{
			$email  = session()->get('email') ; if(($email == '')){ return redirect()->to(base_url('admin/login')); }		
		$title['page_title'] = "Manage Course - GetFundedAfrica";
        $data['id'] =$id;
		echo view('head_doc',$title);
        echo view('nav_new',$title);
        echo view('menu_admin',$title);
		echo view('edit_course',$data);
		echo view('footer_doc');

	}
	
		public function edit_lesson($id="")

	{
			$email  = session()->get('email') ; if(($email == '')){ return redirect()->to(base_url('admin/login')); }		
		$title['page_title'] = "Manage Course - GetFundedAfrica";
        $data['id'] =$id;
		echo view('head_doc',$title);
        echo view('nav_new',$title);
        echo view('menu_admin',$title);
		echo view('edit_lesson',$data);
		echo view('footer_doc');

	}
	
	public function edit_course_section($id="")

	{
			$email  = session()->get('email') ; if(($email == '')){ return redirect()->to(base_url('admin/login')); }		
		$title['page_title'] = "Manage Course - GetFundedAfrica";
        $data['id'] =$id;
		echo view('header_new',$title);
        echo view('nav_new',$title);
        echo view('menu_admin',$title);
		echo view('edit_course_section',$data);
		echo view('footer_new');

	}
    
    	public function edit_course_category($id="")

	{
			$email  = session()->get('email') ; if(($email == '')){ return redirect()->to(base_url('admin/login')); }		
		$title['page_title'] = "Manage Course - GetFundedAfrica";
        $data['id'] =$id;
		echo view('header_new',$title);
        echo view('nav_new',$title);
        echo view('menu_admin',$title);
		echo view('edit_course_category',$data);
		echo view('footer_new');

	}
	
	public function manage_course_section()

	{
			$email  = session()->get('email') ; if(($email == '')){ return redirect()->to(base_url('admin/login')); }		
		$title['page_title'] = "Manage Course Section - GetFundedAfrica";

		echo view('header_new',$title);
        echo view('nav_new',$title);
        echo view('menu_admin',$title);
		echo view('manage_course_section');
		echo view('footer_new');

	}
	
	public function manage_lesson()

	{
			$email  = session()->get('email') ; if(($email == '')){ return redirect()->to(base_url('admin/login')); }		
		$title['page_title'] = "Manage Lesson - GetFundedAfrica";

		echo view('header_new',$title);
        echo view('nav_new',$title);
        echo view('menu_admin',$title);
		echo view('manage_lesson');
		echo view('footer_new');

	}
    
    	public function manage_course_category()

	{
			$email  = session()->get('email') ; if(($email == '')){ return redirect()->to(base_url('admin/login')); }		
		$title['page_title'] = "Manage Course - GetFundedAfrica";

		echo view('header_new',$title);
        echo view('nav_new',$title);
        echo view('menu_admin',$title);
		echo view('manage_course_category');
		echo view('footer_new');

	}
	
	public function manage_course()

	{
			$email  = session()->get('email') ; if(($email == '')){ return redirect()->to(base_url('admin/login')); }		
		$title['page_title'] = "Manage Course - GetFundedAfrica";

		echo view('header_new',$title);
        echo view('nav_new',$title);
        echo view('menu_admin',$title);
		echo view('manage_course');
		echo view('footer_new');

	}
	
//=====================End Course Management===========================	

	public function admin_login($page="")

	{	
		$email	= "admin@cotedivoirepme.com";

		session()->set('email', $email);		

		session()->set('account_type','startup');
	    session()->set('login_type','admin');
		if($page == 'event'){

			$url = 'gfa/add_event';

		}elseif($page == 'perks'){
			
			$url = 'gfa/manage_perks';
		
	}elseif($page == 'course'){
			
			$url = 'gfa/manage_course';
		
	}elseif($page == 'manage_ticket'){
			
        $url = 'gfa/manage_ticket';
    
}
	else{
			$url = 'admin/';

	}
 return redirect()->to(base_url("{$url}"));
	}
	
	
	//==================End Course ===========================

 public function learning()

    {
        
        $email  = session()->get('email') ;
        if(($email == '')){ return redirect()->to(base_url('gfa/login')); }
        $title['page_title'] = "Learning Skills";
        $data['email'] =  $email;
        $data['getPhoto']  =  $this->gfa_model->getPhotoUploaded($email);
    	$learnerDetails = $this->admin_model->getAllStartUpNByEmail($email);
        $learnerExtInfo = $this->gfa_model->getUserAccountExt($email);
    // 	$getSubCatViaCourse = $this->gfa_model->getSubCatViaCourse($learnerExtInfo[0]['profile_extra']);
    //     $skillSubCatArray = $this->gfa_model->skillsBySubCat($getSubCatViaCourse[0]['category']);
   		 # Business Owner, Category and courses 
   	// 	 if($learnerDetails[0]["Interest_Fund_Raise"]=="Business Owner"){
    //       if($getSubCatViaCourse[0]['category'] == "Development"){
           	$main_cat = "sme technical skill training";
           $coursetitle ="";
           $coursetitleArray = [
    // 'Design Thinking',
    // 'Product Development Cycle',
    'Business Model Plan',
    'Pitch Deck Structuring',     
    'Financial Modelling in Decision-Making & Business Planning',
    'Understanding Product Management',
    'Customer Experience Management'
    
   
];
           
        
        
    	// exit;
       //$coursetitleArray = array("Understanding Product Management","Design Thinking");
        //$coursetitleList =  implode(",",$coursetitleArray);
        // $data['courseArrayUpcoming'] = $this->gfa_model->getCoursesByMainCategoryUpcoming($main_cat);
        $data['courseArrayToday'] = $this->gfa_model->getFgnAlatSkills($main_cat,$coursetitle);
        $data['courseArrayRec'] = $this->gfa_model->getAllCourses();
        // $this->gfa_model->getRecFgnAlatSkills($main_cat,$coursetitleArray);
        
    	// print_r($getSubCatViaCourse[0]['category']);
    	// exit;
       	$main_cat_prev = "soft skill";
        // $data['courseArrayUpcoming'] = $this->gfa_model->getCoursesByMainCategoryUpcoming($main_cat);
        //$data['courseArrayToday'] = $this->gfa_model->getFgnAlatSkills($main_cat);
        // $data['courseArrayNext'] = $this->gfa_model->getCoursesByMainCategoryNextDay($main_cat);
    	$main_cat_prev = "soft skill";
        $data['courseArrayPrev'] =$this->gfa_model->getCoursesByMainCategoryPrevious($main_cat_prev);
        $data['StartupArray'] = $learnerDetails; 
        $data['skillArray'] = $learnerExtInfo; 
        $data['login_type'] = session()->get('login_type');
        $data['account_type'] = session()->get('account_type');
        $uri = $this->request->getUri(); $user_action = $uri->getSegment(2);
	    $this->saveUserActivity($user_action, $email);
        echo view('header-assets-new',$title);
        //echo view('menu-assets-new',$data);
        echo view('nav_lesson',$data);
        echo view('course_list', $data);
        echo view('footer-assets-new',$data);  

        

    }   

    public function profile_corperate()

	{
		
	 $email  = session()->get('email') ; if(($email == '')){ return redirect()->to(base_url('gfa/login')); }	
		$title['page_title'] = "Corperate Profile ";
		
        $data['email'] =  $email;
        $data['login_type'] = session()->get('login_type') ;
        $data['account_type'] = session()->get('account_type') ;
		echo view('corperate/header_new',$title);
        echo view('corperate/nav_new',$data);
        echo view('corperate/menu_new',$title);
    
		echo view('profile_corperate',$data);
	
		echo view('corperate/footer_new');

		

	}
    
        public function corperate_investor()

    {
        
    $email  = session()->get('email') ;
 if(($email == '')){ return redirect()->to(base_url('gfa/login')); }
        $title['page_title'] = "Corperate Investor Match ";
        $data['email'] =  $email;
        $data['login_type'] = session()->get('login_type') ;
          $data['account_type'] = session()->get('account_type') ;
        echo view('corperate/header_new',$title);
        echo view('corperate/nav_new',$data);
        echo view('corperate/menu_new',$data);
        echo view('corperate/corperate_investor',$data);
        echo view('corperate/footer_new',$data);



    }

    public function postCSR()
    {
        // Load the upload library if not auto-loaded in the configuration.
        // echo library('upload');

        $title = $this->request->getPost("title");
        $event = $this->request->getPost("event");
        $videourl = $this->request->getPost("videourl");
        $venue = $this->request->getPost("venue");
        $start_date = $this->request->getPost("start_date");
        $end_date = $this->request->getPost("end_date");
        $ticket = $this->request->getPost("ticket");
        $currency = '';  // $this->request->getPost("currency");
        $amount = '';   // $this->request->getPost("amount");
        $time = date("Y-m-d h:i:s A", time());
        $email = $this->session->get('email'); // Assuming email is stored in the session.

        // Example usage of getCorperateDetails method from your model:
        // $company = $this->gfa_model->getCorperateDetails($email)[0]['Event'];

        // Example validation for uploaded files (you may need to customize this):
        $uploadedFiles = $this->request->getFiles();
        $dataInfo = [];

        foreach ($uploadedFiles['file'] as $file) {
            if ($file->isValid() && !$file->hasMoved()) {
                $newName = $file->getRandomName();
                $file->move(ROOTPATH . 'uploads/files', $newName);
                $dataInfo[] = $newName;
            }
        }

        $data_story = [
            'title' => $title,
            'csr' => $event,
            'videourl' => $videourl,
            'picture' => implode(',', $dataInfo), // Store file names as comma-separated values.
            'status' => 'pending',
            'email' => $email,
            'venue' => $venue,
            'start_date' => $start_date,
            'end_date' => $end_date,
            'ticket' => $ticket,
            'currency' => $currency,
            'amount' => $amount,
            'time_submit' => $time,
        ];

        // Example usage of insertCSR method from your model:
        // $this->gfa_model->insertCSR($data_story);

        echo "CSR submitted";
    }
    
    public function corporate_startup_news(){
        $email  = session()->get('email') ;
    if(($email == '')){ return redirect()->to(base_url('gfa/login')); }
        $data['email'] =  $email;
        $data['login_type'] = session()->get('login_type') ;
        $data['account_type'] = session()->get('account_type') ;
        $data['cor_info'] = session()->get('cor_info');
		$title['page_title'] = "Startup News ";
		echo view('corperate/header_new',$title);
        echo view('corperate/nav_new',$data);
        echo view('corperate/menu_new',$title);
		echo view('corperate/corporate_startup_news',$data);
		echo view('corperate/footer_new');
	}
	
	public function startup_cooperate()

	{
		
	$email  = session()->get('email') ; if(($email == '')){ return redirect()->to(base_url('gfa/login')); }		
		$title['page_title'] = "Startup and Corporate Match ";
        $data['email'] =  $email;
        $data['login_type'] = session()->get('login_type') ;
        $data['account_type'] = session()->get('account_type') ;
        $data['cor_info'] = session()->get('cor_info');
        //Calculate Profile completed  startup name, industry, amount to raise, Hq Address, phone number, Anuual revenue, Employee size, linkined page url
		// if($this->gfa_model->getStartUpDetails($email)[0]['Primary_Contact_Name']!=""){
		    
		//    $point_1 = 10;
		//    $credit_1 = 1;
		// }else{
		//     $point_1 = 0;
		//     $credit_1 = 0;
		// }
        // if($this->gfa_model->getStartUpDetails($email)[0]['CountryHQ']!=""){
            
        //  $point_2 = 15;
        //  $credit_2 = 1;
		// }else{
		//     $point_2 = 0;
		//     $credit_2 = 0;
		// }
        // if($this->gfa_model->getStartUpDetails($email)[0]['PrimaryBusinessIndustry']!=""){
		//  $point_3 = 100;
		//  $credit_3 = 1;
		// }else{
		//     $credit_3 = 0;
		//     $point_3= 0;
		// }
		// if($this->gfa_model->getStartUpDetails($email)[0]['LinkedIn']!=""){
		//  $point_4 = 15; 
		//  $credit_4 = 1;
		// }else{
		//     $credit_4 = 0;
		//     $point_4= 0;
		// }
		
		// if($this->gfa_model->getStartUpDetails($email)[0]['Startup_Company_Name']!=""){
		//  $point_5 = 10; 
		//  $credit_5 = 1;
		// }else{
		//     $point_5= 0;
		//     $credit_5 = 0;
		// }
		
		
		// if($this->gfa_model->getStartUpDetails($email)[0]['Address']!=""){
		//  $point_6 = 15; 
		//  $credit_6 = 1;
		// }else{
		//     $point_6= 0;
		//     $credit_6 = 0;
		// }
		
		// if($this->gfa_model->getStartUpDetails($email)[0]['NoOfEmployees']!=""){
		//  $point_7 = 10; 
		//  $credit_7 = 1;
		// }else{
		//     $point_7= 0;
		//     $credit_7 = 0;
		// }
		
		// if($this->gfa_model->getStartUpDetails($email)[0]['OperatingRegions']!=""){
		//  $point_8 = 100; 
		//  $credit_8 = 1;
		// }else{
		//     $point_8= 0;
		//     $credit_8 = 0;
		// }
		
		// if($this->gfa_model->getStartUpDetails($email)[0]['Next_Funding_Round_Target_Sought']!=""){
		//  $point_9 = 100; 
		//  $credit_9 = 1;
		// }else{
		//     $point_9= 0;
		//     $credit_9 = 0;
		// }
		
		
		
		// if($this->gfa_model->getStartUpDetails($email)[0]['Date_Founded']!=""){
		//  $point_10 = 5; 
		//  $credit_10 = 1;
		// }else{
		//     $point_10= 0;
		//     $credit_10 = 0;
		// }
		
		// if($this->gfa_model->getStartUpDetails($email)[0]['Revenue']!=""){
		//  $point_11 = 15; 
		//  $credit_11 = 1;
		// }else{
		//     $point_11= 0;
		//     $credit_11 = 0;
		// }
		
		// if($this->gfa_model->getStartUpDetails($email)[0]['Investment_History']!=""){
		//  $point_12 = 15; 
		//  $credit_12 = 1;
		// }else{
		//     $point_12= 0;
		//     $credit_12 = 0;
		// }
		
		
		
		// 	if($this->gfa_model->getPhotoUploaded($email)[0]['Photo_name']!=""){
		//  $point_13 = 5; 
		//  $credit_13 = 1;
		// }else{
		//     $point_13= 0;
		//     $credit_13 = 0;
		// }
		
		// $data['point']= ceil((($point_1 + $point_2 + $point_3 + $point_4 + $point_5+ $point_6 + $point_7 + $point_8 + $point_9 + $point_10 + $point_11 + $point_12 + $point_13)/415)*100) ;
		// $data['credit']= $credit_1 + $credit_2 + $credit_3 + $credit_4 + $credit_5+ $credit_6 + $credit_7 + $credit_8 + $credit_9 + $credit_10 + $credit_11 + $credit_12 + $credit_13 ;
		echo view('header_new',$title);
        echo view('nav_new',$data);
        echo view('menu_new',$data);
		echo view('startup_cooperate',$data);
		echo view('footer_new');

		

	}

	public function industry_corp()

	{
	    $data['industry'] =  $this->request->getPost("industry");
	   // $data['service'] =  $this->request->getPost("service");
	   	echo view('loadCorperate',$data); 
	}
	
	public function industry_corp_service()

	{
	   // $data['industry'] =  $this->request->getPost("industry");
	   $data['service'] =  $this->request->getPost("service");
	   	echo view('loadCorperateServ',$data); 
	}
    
    public function corperate_add_csr()

    {
        
    $email  = session()->get('email') ;
    if(($email == '')){ return redirect()->to(base_url('gfa/login')); }
        $title['page_title'] = "Add CSR ";
        $data['email'] =  $email;
        $data['login_type'] = session()->get('login_type') ;
          $data['account_type'] = session()->get('account_type') ;
        echo view('corperate/header_new',$title);
        echo view('corperate/nav_new',$data);
        echo view('corperate/menu_new',$title);
        echo view('corperate/add_csr',$data);
        echo view('corperate/footer_new',$data);

        

    }

    
    public function corperate_add_event()

    {
        
        $email  = session()->get('email') ;
        if(($email == '')){ return redirect()->to(base_url('gfa/login')); }
        $title['page_title'] = "Add Event ";
        $data['email'] =  $email;
        $data['login_type'] = session()->get('login_type') ;
        $data['account_type'] = session()->get('account_type');
        echo view('head_doc',$title);
        echo view('corperate/nav_new',$data);
        echo view('corperate/menu_new',$data);
        echo view('corperate/add_event');
        echo view('footer_doc');

        

    }   

    public function add_cohort()

    {
        
    $email  = session()->get('email') ;
 if(($email == '')){ return redirect()->to(base_url('gfa/login')); }
        $title['page_title'] = "Add Cohort ";
        $data['email'] =  $email;
        $data['login_type'] = session()->get('login_type') ;
          $data['account_type'] = session()->get('account_type') ;
        echo view('corperate/header_new',$title);
        echo view('corperate/nav_new',$data);
        echo view('corperate/menu_new',$data);
        echo view('corperate/add_cohort');
        echo view('corperate/footer_new',$data);

        

    }
    
    public function add_event()

    {
        
    $email  = session()->get('email') ;
 if(($email == '')){ return redirect()->to(base_url('gfa/login')); }
        $title['page_title'] = "Add Event ";
        $data['email'] =  $email;
        $data['login_type'] = session()->get('login_type') ;
        $data['account_type'] = session()->get('account_type') ;
        echo view('head_doc',$title);
        echo view('nav_new',$data);
        echo view('menu_new',$data);
        echo view('add_event');
        echo view('footer_doc',$data);

        

    }
    

    public function manage_event()

    {
        
    $email  = session()->get('email') ;
    if(($email == '')){ return redirect()->to(base_url('gfa/login')); }  
        $title['page_title'] = "Manage Event";
        $data['email'] =  $email;
        $data['login_type'] = session()->get('login_type') ;
        $data['account_type'] = $account_type = session()->get('account_type') ;
        $data['admin_access'] = "";
        if($account_type == 'corperate'){
        echo view('corperate/header_new',$title);
        echo view('corperate/nav_new',$data);
        echo view('corperate/menu_new',$data);
        echo view('corperate/manage_event',$data);
        echo view('corperate/footer_new',$data);
        }
        
        if($account_type == 'startup'){
        echo view('header_new',$title);
        echo view('nav_new',$data);
        echo view('menu_new',$data);
        echo view('corperate/manage_event',$data);
        echo view('footer_new',$data);
        }
        

    }

    public function reports()

	{
		
	    $email  = session()->get('email') ; if(($email == '')){ return redirect()->to(base_url('gfa/login')); }		
		$title['page_title'] = "All Weekely Report ";
        $data['email'] =  $email;
        $data['login_type'] = session()->get('login_type') ;
        $data['account_type'] = session()->get('account_type') ;
        $data['cor_info'] = session()->get('cor_info');

		echo view('corperate/header_new',$title);
        echo view('corperate/nav_new',$data);
        echo view('corperate/menu_new',$title);
		echo view('corperate/report',$data);
		echo view('corperate/footer_new');

		

	}

    public function deleteEvent()

	{
	    
	    
	    $ref_id = $this->request->getPost("ref_id"); 
	    	
	   	$this->admin_model->deleteEvent($ref_id); 
	}

    public function corporate_report()

	{
		
	$email  = session()->get('email') ; if(($email == '')){ return redirect()->to(base_url('gfa/login')); }		
		$title['page_title'] = "Revenue Report ";
        
        //Calculate Profile completed  startup name, industry, amount to raise, Hq Address, phone number, Anuual revenue, Employee size, linkined page url
		$data['email'] =  $email;
         $data['login_type'] = session()->get('login_type') ;
         $data['account_type'] = session()->get('account_type') ;
         $data['cor_info'] = session()->get('cor_info');
		echo view('corperate/header_new',$title);
        echo view('corperate/nav_new',$data);
        echo view('corperate/menu_new',$data);
		echo view('corperate/corporate_report',$data);
		echo view('corperate/footer_new');

		

	}
	
	 public function analytics()

	{
		
        $email  = session()->get('email') ;
        if(($email == '')){ return redirect()->to(base_url('gfa/login')); }
		$title['page_title'] = "Analytics Startups Registration ";
		$data['email'] =  $email;
        $data['login_type'] = session()->get('login_type') ;
        $data['account_type'] = $account_type = session()->get('account_type') ;
		echo view('corperate/header_new',$title);
        
        echo view('corperate/nav_new',$data);
        echo view('corperate/menu_new',$title);
		echo view('corperate/analytics');
		echo view('corperate/footer_new');

		

	}

    public function startup_profile_corperate()

	{
		
        $email  = session()->get('email') ;
        if(($email == '')){ return redirect()->to(base_url('gfa/login')); }
		$title['page_title'] = "Add Startups Registration ";
		$data['email'] =  $email;
        $data['login_type'] = session()->get('login_type') ;
        $data['account_type'] = $account_type = session()->get('account_type') ;
		echo view('corperate/header_new',$title);
        
        echo view('corperate/nav_new',$data);
        echo view('corperate/menu_new',$title);
		echo view('corperate/startup_profile_corperate');
		echo view('corperate/footer_new');

		

	}

        public function event_apply($id)

    {
        
        $email  = session()->get('email') ;
        if(($email == '')){ return redirect()->to(base_url('gfa/login')); }  
        $title['page_title'] = "Event Applied ";
        $data['email'] =  $email;
        $data['login_type'] = session()->get('login_type') ;
        $data['account_type'] = $account_type = session()->get('account_type') ;
        $data['admin_access'] = "";
        $data['id'] = $id; 
        if($account_type == 'corperate'){
        echo view('corperate/header_new',$title);
        echo view('corperate/nav_new',$data);
        echo view('corperate/menu_new',$data);
        echo view('corperate/event_apply', $data);
        echo view('corperate/footer_new',$data);

        }
        
        if($account_type == 'startup'){
            echo view('header_new',$title);
            echo view('nav_new',$data);
            echo view('menu_new',$data);
            echo view('corperate/event_apply', $data);
            echo view('footer_new',$data);
        }
        

    }
    
    public function csr_apply($id)

    {
        
        $email  = session()->get('email') ;
        if(($email == '')){ return redirect()->to(base_url('gfa/login')); }  
        $title['page_title'] = "CSR Apply ";
        $data['email'] =  $email;
        $data['login_type'] = session()->get('login_type') ;
        $data['account_type'] = $account_type = session()->get('account_type') ;
        $data['admin_access'] = "";
        $data['id'] = $id; 
        echo view('corperate/header_new',$title);
        echo view('corperate/nav_new',$data);
        echo view('corperate/menu_new',$data);
        echo view('corperate/csr_apply', $data);
        echo view('corperate/footer_new',$data);

        

    }
    
     public function corperate_details($id)

    {
        
        
        $email  = session()->get('email') ;
        if(($email == '')){ return redirect()->to(base_url('gfa/login')); }  
        $title['page_title'] = "CSR Apply ";
        $data['email'] =  $email;
        $data['login_type'] = session()->get('login_type') ;
        $data['account_type'] = $account_type = session()->get('account_type') ;
        $data['admin_access'] = "";
        $data['id'] = $id;
        

        echo view('corperate/header_new',$title);
        echo view('corperate/nav_new',$data);
        echo view('corperate/menu_new',$data);
        echo view('corperate/corperate_details',$data);
        echo view('corperate/footer_new',$data);

        

    }

        public function startup_corperate_details($id)

    {
        
        
        $email  = session()->get('email') ;
        if(($email == '')){ return redirect()->to(base_url('gfa/login')); }  
        $title['page_title'] = "CSR Apply ";
        $data['email'] =  $email;
        $data['login_type'] = session()->get('login_type') ;
        $data['account_type'] = $account_type = session()->get('account_type') ;
        $data['admin_access'] = "";
        $data['id'] = $id;
        

        echo view('header_new',$title);
        echo view('nav_new',$data);
        echo view('menu_new',$data);
        echo view('startup_corperate_details',$data);
        echo view('footer_new',$data);

        

    }

    public function smestatuspro()
{
    $id = $this->request->getPost("id");
    $delete_id = $this->request->getPost("delete_id");
    $file_status = $this->request->getPost("file_status");
    $rowArray = $this->admin_model->getStartupByIdRef($id);
    $personalDetails = $this->gfa_model->getStartUpDetails($rowArray[0]['email']);
    $name= $personalDetails[0]['Primary_Contact_Name'];
    //$name ="";
    $profile_request = $this->gfa_model->getLoginDetails($rowArray[0]['email']);
    $email = $rowArray[0]['email'];
    $cor_info = session()->get('cor_info');
    $bank_name = strtoupper(explode("-", $cor_info)[0]);
    $data = [
        'status' => $file_status
    ];

    if ($file_status == 'approved') {
        // Subscription
        $today = time();
        $ref = $cor_info . '-' . $today;
        $amount = 120;
        $time_submit = date('Y-m-d h:i:s A', time());
        $interval = "yearly"; // Assuming this is initialized correctly

        $duration = 'year';

        $onetime = 1; // Assuming this is initialized correctly
        $gateway = $cor_info . " payment";
        $subscription = "Premium Funding";

        $payment_status = 'paid';
        $credit = 45;

        $time_start = date("Y-m-d h:i:s A", $today);
        $package = 'funding'; // Assuming this is initialized correctly

        $startYr = strtotime($time_start);
        $time_end = strtotime("1" . $duration, $startYr);
        $time_end = date("Y-m-d h:i:s A", $time_end);
        $checkTimeSub = strtotime($time_end);

        $status = 'active';

        // Insert into Subscription table
        $data_subscription = [
            'ref' => $ref,
            'email' => $email,
            'subscription' => $subscription,
            'subtype' => $interval,
            'amount' => $amount,
            'payment_status' => $payment_status,
            'status' => $status,
            'package' => $package,
            'gateway' => $gateway,
            'time_start' => $time_start,
            'time_end' => $time_end,
            'credit' => $credit,
            'time_submit' => $time_submit
        ];

        if (empty($this->gfa_model->checkPaymentSub($email))) {
            //$this->gfa_model->insertSubPackageFlutter($data_subscription);

            $message = "
  <a href='https://fg-skillnovation.alat.ng'><img src='https://nora.GetFundedAfrica.ci/nigeria/wemabank/img/logo/fgn-alat-logo.jpg'></a><br>
    
<p><strong>Dear {$name},</strong></p>
<p>I hope this email finds you in good spirits. We are delighted to inform you that after careful consideration, you have been selected to be a part of the <strong>FGN/ALAT Digital SKillnovation Program For MSMEs</strong>.</p>

    <p>Your application stood out among many impressive submissions, and we are confident that your project holds great promise. We believe that the <strong>FGN/ALAT Digital SKillnovation Program For MSMEs</strong> will provide you with the resources, mentorship, and networking opportunities needed to thrive.</p>

    <p>We are eager to start this journey with you and look forward to seeing your project grow and flourish. Please be on the lookout for further details regarding the program's commencement, including any necessary onboarding steps or documentation.</p>

    <p>Once again, congratulations on this significant achievement! We are excited to have you on board.</p>

    <p>If you have any immediate questions or need further information, please don't hesitate to reach out.</p>
    
    <p><br />=================Your fgnalat account login details===============</p>
        <p><a href='https://fgnalat.GetFundedAfrica.com/portal/'><i>Click here to login with your details</i></a></p>
        <p>Email: " . $email . "</p>
        <p>Password: " . $profile_request[0]['password'] . "</p>

    <p>Warm regards,</p>

    <p><strong>Fatima Chinyere Owolabi<br>

    Program Manager<br>

    The FGN/ALAT Digital SKillnovation Program For MSMEs.</strong></p>




";

            $subject = "Congratulations on Your Acceptance into the FGN/ALAT Digital SKillnovation Program For MSMEs";
            $this->sendMail($email, $message, $subject);
        } else {
            echo '';
        }

        // Update Status
        $this->admin_model->updateStartupRefStatus($data, $rowArray[0]['email']);
        echo $file_status;
    } elseif ($file_status == 'declined') {
        // Delete Subscription
        $idx = $this->gfa_model->checkPaymentSub($email)[0]['id'];
        $this->gfa_model->deleteActiveSub($idx);

        // Update Status
        $this->admin_model->updateStartupRefStatus($data, $rowArray[0]['email']);
        echo $file_status;
    } elseif ($file_status == 'delete') {
      
      
        // Delete Subscription
        $this->gfa_model->deleteActiveSub($email);
        // Delete Registration link
        $this->gfa_model->deleteRegistrationLink($email, $cor_info);
        // Delete Report
        $this->gfa_model->deleteReport($email, $cor_info);

        if (empty($delete_id)) {
            $startupStatus = $this->gfa_model->getStartupDcdtRegByEmailRef($rowArray[0]['email'], $cor_info);
            if ($startupStatus[0]['status'] == "" || $startupStatus[0]['status'] == 'pending') {
                echo 'pending';
            } else {
                echo $startupStatus[0]['status'];
            }
        } else {
            echo $file_status;
        }
    } else {
        echo '';
    }
}

    
       public function corperate_startup_detail($id)

    {
        
        
        $email  = session()->get('email') ;
        if(($email == '')){ return redirect()->to(base_url('gfa/login')); }  
        $title['page_title'] = "CStartup Corporate Details ";
        $data['email'] =  $email;
        $data['login_type'] = session()->get('login_type') ;
        $data['cor_info'] = session()->get('cor_info');
        $data['account_type'] = $account_type = session()->get('account_type') ;
        $data['admin_access'] = "";
        $data['id'] = $id;
        $checkReg = $this->admin_model->getAllStartUpNById($id); 
        

        echo view('corperate/header_new',$title);
        echo view('corperate/nav_new',$data);
        echo view('corperate/menu_new',$data);
        if($checkReg[0]["Interest_Fund_Raise"]=="Business Owner"){
           echo view('corperate/corperate_startup_details',$data); 
        }
        if($checkReg[0]["Interest_Fund_Raise"]=="Aspiring Business Owner"){
           echo view('corperate/corperate_aspirebiz_details',$data); 
        }
        if($checkReg[0]["Interest_Fund_Raise"]=="Professional" || $checkReg[0]["Interest_Fund_Raise"]=="professional"){
           echo view('corperate/corperate_professional_details',$data); 
        }
        if($checkReg[0]["Interest_Fund_Raise"]=="Jobseeker"){
           echo view('corperate/corperate_jobseeker_details',$data); 
        }
        echo view('corperate/footer_new',$data);

        

    }
    
    public function change_password()

	{
		
        $email  = session()->get('email') ;
        if(($email == '')){ return redirect()->to(base_url('gfa/login')); }  
        
        $data['email'] =  $email;
        $data['login_type'] = session()->get('login_type') ;
        $data['account_type'] = $account_type = session()->get('account_type') ;	
		$title['page_title'] = "Change Password";
		
		echo view('header_new',$title);
        
		

		if($account_type=="startup" || $account_type=="individual" || $account_type==""){ 
        echo view('nav_new',$data);
        echo view('menu_new',$data);
		echo view('change_password',$data);
        
        }
        
        if($account_type=="investor"){ 
        echo view('investor/menu_new',$data);
        echo view('investor/nav_new',$data);
        echo view('change_password',$data);
    
        }

        if($account_type=="mentorship"){ 
        echo view('mentor/menu_new',$data);
        echo view('mentor/nav_new',$data);
        echo view('change_password',$data);
    
        }

        if($account_type=="corperate" || $account_type=="accelerator"){ 
        echo view('corperate/menu_new',$data);
        echo view('corperate/nav_new',$data);
        echo view('change_password',$data);
    
        }

		echo view('footer_new',$data);

	}
	
	public function changepasspro()

	{	
		 $email  = session()->get('email') ;
		$id	= $this->request->getPost("id"); 
		$password	= $this->request->getPost("password");
		$time 	=  date("Y-m-d h:i:s A",time());
		$data_bind	= 	array(

			
			'password' => $password,
			
			'time_submit' => 	$time
								
			);
			
			$this->gfa_model->updatePasswordX($data_bind,$id);

			echo $password;
	}
    
    public function corperate_startup_details($id)

    {
        
        
        $email  = session()->get('email') ;
        if(($email == '')){ return redirect()->to(base_url('gfa/login')); }  
        $title['page_title'] = "Startup Corporate Details ";
        $data['email'] =  $email;
        $data['login_type'] = session()->get('login_type') ;
        $data['account_type'] = $account_type = session()->get('account_type') ;
        $data['admin_access'] = "";
        $data['id'] = $id;
        

        // echo view('header_new_corperate',$title);
        // echo view('nav_new_corperate',$data);
        // echo view('menu_new_corperate',$data);
        // echo view('corperate_startup_details',$data);
        // echo view('footer_new_corperate',$data);
        
        echo view('corperate/header_new',$title);
    echo view('corperate/nav_new',$data);
    echo view('corperate/menu_new',$data);
    echo view('corperate/sme_startup_details',$data);
    echo view('corperate/footer_new',$data);

        

    }
    
    public function startup_investor()

	{
		
        $email  = session()->get('email') ;
        if(($email == '')){ return redirect()->to(base_url('gfa/login')); } 	
		$title['page_title'] = "Startup and Investor Match - GetFundedAfrica";
        
        //Calculate Profile completed  startup name, industry, amount to raise, Hq Address, phone number, Anuual revenue, Employee size, linkined page url
// 		 $email = $this->encrypt->decode($this->session->userdata('email')) ;
		// if($this->gfa_model->getStartUpDetails($email)[0]['Primary_Contact_Name']!=""){
		    
		//    $point_1 = 10;
		//    $credit_1 = 1;
		// }else{
		//     $point_1 = 0;
		//     $credit_1 = 0;
		// }
        // if($this->gfa_model->getStartUpDetails($email)[0]['CountryHQ']!=""){
            
        //  $point_2 = 15;
        //  $credit_2 = 1;
		// }else{
		//     $point_2 = 0;
		//     $credit_2 = 0;
		// }
        // if($this->gfa_model->getStartUpDetails($email)[0]['PrimaryBusinessIndustry']!=""){
		//  $point_3 = 100;
		//  $credit_3 = 1;
		// }else{
		//     $credit_3 = 0;
		//     $point_3= 0;
		// }
		// if($this->gfa_model->getStartUpDetails($email)[0]['LinkedIn']!=""){
		//  $point_4 = 15; 
		//  $credit_4 = 1;
		// }else{
		//     $credit_4 = 0;
		//     $point_4= 0;
		// }
		
		// if($this->gfa_model->getStartUpDetails($email)[0]['Startup_Company_Name']!=""){
		//  $point_5 = 10; 
		//  $credit_5 = 1;
		// }else{
		//     $point_5= 0;
		//     $credit_5 = 0;
		// }
		
		
		// if($this->gfa_model->getStartUpDetails($email)[0]['Address']!=""){
		//  $point_6 = 15; 
		//  $credit_6 = 1;
		// }else{
		//     $point_6= 0;
		//     $credit_6 = 0;
		// }
		
		// if($this->gfa_model->getStartUpDetails($email)[0]['NoOfEmployees']!=""){
		//  $point_7 = 10; 
		//  $credit_7 = 1;
		// }else{
		//     $point_7= 0;
		//     $credit_7 = 0;
		// }
		
		// if($this->gfa_model->getStartUpDetails($email)[0]['OperatingRegions']!=""){
		//  $point_8 = 100; 
		//  $credit_8 = 1;
		// }else{
		//     $point_8= 0;
		//     $credit_8 = 0;
		// }
		
		// if($this->gfa_model->getStartUpDetails($email)[0]['Next_Funding_Round_Target_Sought']!=""){
		//  $point_9 = 100; 
		//  $credit_9 = 1;
		// }else{
		//     $point_9= 0;
		//     $credit_9 = 0;
		// }
		
		
		
		// if($this->gfa_model->getStartUpDetails($email)[0]['Date_Founded']!=""){
		//  $point_10 = 5; 
		//  $credit_10 = 1;
		// }else{
		//     $point_10= 0;
		//     $credit_10 = 0;
		// }
		
		// if($this->gfa_model->getStartUpDetails($email)[0]['Revenue']!=""){
		//  $point_11 = 15; 
		//  $credit_11 = 1;
		// }else{
		//     $point_11= 0;
		//     $credit_11 = 0;
		// }
		
		// if($this->gfa_model->getStartUpDetails($email)[0]['Investment_History']!=""){
		//  $point_12 = 15; 
		//  $credit_12 = 1;
		// }else{
		//     $point_12= 0;
		//     $credit_12 = 0;
		// }
		
		
		
		// 	if($this->gfa_model->getPhotoUploaded($email)[0]['Photo_name']!=""){
		//  $point_13 = 5; 
		//  $credit_13 = 1;
		// }else{
		//     $point_13= 0;
		//     $credit_13 = 0;
		// }
		
		// $data['point']= ceil((($point_1 + $point_2 + $point_3 + $point_4 + $point_5+ $point_6 + $point_7 + $point_8 + $point_9 + $point_10 + $point_11 + $point_12 + $point_13)/415)*100) ;
		// $data['credit']= $credit_1 + $credit_2 + $credit_3 + $credit_4 + $credit_5+ $credit_6 + $credit_7 + $credit_8 + $credit_9 + $credit_10 + $credit_11 + $credit_12 + $credit_13 ;
		$data['email'] =  $email;
        $data['login_type'] = session()->get('login_type') ;
        $data['account_type'] = $account_type = session()->get('account_type') ;
        $data['admin_access'] = "";
		echo view('header_new',$title);
        echo view('nav_new',$data);
        echo view('menu_new',$data);
		echo view('startup-investor',$data);
		echo view('footer_new',$data);

		

	}

	public function investOnbSteps(){

		$data['email'] = $this->request->getPost('email');

		$step = $this->request->getPost('step');
		echo view('investor-con/'.$step.'.php', $data);
	}

	public function saveInvConOnb(){

		date_default_timezone_set('Lagos/Nigeria');    
		$DateAndTime = date('Y-m-d H:i:s', time()); 
		$final_date_time = $DateAndTime;

		$data = [
			'Email' => $this->request->getPost('email'),
			'OnbStatus' => $this->request->getPost('OnbStatus'),
			'DateCreated' => $final_date_time
		];

		if(!($this->gfa_model->checkInvConOnbStatus($this->request->getPost('email')))){
			$this->gfa_model->insertInvConOnbStatus($data);
		}

	}
    
    	public function startup_investor_details($id)

	{
		
	    $email  = session()->get('email') ;
        if(($email == '')){ return redirect()->to(base_url('gfa/login')); }  
	
		$title['page_title'] = "Investor - GetFundedAfrica";
		$data['email'] =  $email;
        $data['login_type'] = session()->get('login_type') ;
        $data['account_type'] = $account_type = session()->get('account_type') ;
        $data['admin_access'] = "";
		$data['id'] = $id;
	   //session()->get('get_investor_id', $this->encrypt->encode($id));
	   session()->set('get_investor_id', $id); 

		echo view('header_new',$title);
        echo view('nav_new',$data);
        echo view('menu_new',$title);
		echo view('startup_investor_details',$data);
		echo view('footer_new',$data);

		

	}
    
    public function startup_hire_details($id)

    {
        
        
        $title['page_title'] = "Job Seeker Details  ";$email  = session()->get('email') ;
        if(($email == '')){ return redirect()->to(base_url('gfa/login')); }  
        $title['page_title'] = "Startup Hire Details ";
        $data['email'] =  $email;
        $data['login_type'] = session()->get('login_type') ;
        $data['account_type'] = $account_type = session()->get('account_type') ;
        $data['admin_access'] = "";
        $data['id'] = $id;
        

        echo view('header_new',$title);
        echo view('nav_new',$data);
        echo view('menu_new',$data);
        echo view('startup_hire_details',$data);
        echo view('footer_new',$data);

        

    }
    
        public function startup_mentor_details($id)

    {
        
        
        $email  = session()->get('email') ;
        if(($email == '')){ return redirect()->to(base_url('gfa/login')); }  
        $title['page_title'] = "Startup Mentor Details ";
        $data['email'] =  $email;
        $data['login_type'] = session()->get('login_type') ;
        $data['account_type'] = $account_type = session()->get('account_type') ;
        $data['admin_access'] = "";
        $data['id'] = $id;

        echo view('header_new',$title);
        echo view('nav_new',$data);
        echo view('menu_new',$data);
        echo view('startup_mentor_details',$data);
        echo view('footer_new',$data);

        

    }
    
    public function report()

	{
		

		$title['page_title'] = "Report Details ";
        $email  = session()->get('email') ;
        if(($email == '')){ return redirect()->to(base_url('gfa/login')); }  
        $data['email'] =  $email;
        $data['login_type'] = session()->get('login_type') ;
        $data['account_type'] = $account_type = session()->get('account_type') ;
        $data['admin_access'] = "";
		echo view('header_new',$title);
        echo view('nav_new',$data);
        echo view('menu_new',$data);
		echo view('report',$data);
		echo view('footer_new');

		

	}
	
	public function manage_story()

	{
		

		$title['page_title'] = "Manage Story ";
        $email  = session()->get('email') ;
        if(($email == '')){ return redirect()->to(base_url('gfa/login')); }  
        $data['email'] =  $email;
        $data['login_type'] = session()->get('login_type') ;
        $data['account_type'] = $account_type = session()->get('account_type') ;
        $data['admin_access'] = "";
		echo view('header_new',$title);
        echo view('nav_new',$data);
        echo view('menu_new',$data);
		echo view('manage_story',$data);
		echo view('footer_new');

		

	}

	public function loadCurrentConnection(){

		$data['email'] = $email = session()->get('email');

		#==============Check Connection Status ====================
		$requestdata = $this->gfa_model->getAllRequestConnections($email);

		if(!empty($requestdata)){
		echo view('investor/connection_alert',$data);

	}else{

		echo "";
	}
	}

	public function dashboardConnection(){

		$email = session()->get('email');
		$connectEmail =   $this->request->getPost("getEmail");
		
		$getConType  =  $this->request->getPost("getConType");
		$getId  =  $this->request->getPost("getId");

		$data = array('status'=>$getConType);

		$this->gfa_model->updatedConnection($data, $getId);

		$connectionStatus = ucwords($getConType)."ed";

		echo $connectionStatus;

		$ref_id = time();

		$subject = "Connection ".$connectionStatus;

		if($getConType == "accept"){

			$message = "Thank you for contacting us! I'm excited about the opportunity to explore potential opportunities with you. Let's connect and discuss this in more detail. Looking forward to it!";

		}else{

			$message = "No worries! Thank you for considering the opportunity. If you ever change your mind or have any questions in the future, don’t hesitate to reach out. I wish you all the best with your projects!";
		}

		$this->gfa_model->allNotification($connectEmail, $subject, $ref_id);
	    $this->gfa_model->allNotificationBox($subject,$message, $email, $connectEmail,$ref_id);

	}

	public function matchedConnectionAll(){

		$connectEmail  =  $this->request->getPost("connectEmail");
		$connectType  =  $this->request->getPost("connectType");
		$connectMsg  =  $this->request->getPost("connectMsg");
	   	$email = session()->get('email') ;
		$time = date("Y-m-d h:i:s A",time()); 
		$ref = time();
		$ref_id = time();
		     
		//Connect to  
	$data_connection = array(
					
	'email' => $connectEmail,
	'more_info' => $connectMsg,
	'email_startup' => $email,
	'status' => 'pending',
	'connection' => $connectType,
	'ref' => $ref,
	'ref_id' => $ref_id,
	'time_Submit' => $time

	);

	$this->gfa_model->insertConnection($data_connection); 

	$startupDetail = $this->gfa_model->getStartUpDetails($email);
	

	$subject = "Demande de connexion via Côte d’Ivoire PME";

	$message = "<a href='https://nora.GetFundedAfrica.ci/portal/'><img src='https://nora.GetFundedAfrica.ci/portal/public/assets/images/logo/GFA-Logo.png'></a><br>";
$message .= "<p>Bonjour, ".$startupDetail[0]['Primary_Contact_Name']. "</p>"; 
$message .= "Je souhaiterais me connecter avec vous concernant une opportunité de collaboration potentielle. Veuillez me faire savoir un moment qui vous convient pour en discuter davantage.
Dans l'attente de votre réponse !";

$this->gfa_model->allNotification($connectEmail, $subject, $ref_id);
	 $this->gfa_model->allNotificationBox($subject,$message, $email, $connectEmail,$ref_id);
 
$this->sendMail($connectEmail, $message,$subject);
//print_r($startupDetail);
	}


	public function matchedConnectionInv(){

		$connectEmail  =  $this->request->getPost("connectEmail");
		$connectType  =  $this->request->getPost("connectType");
		$connectMsg  =  $this->request->getPost("connectMsg");
	   	$email = session()->get('email') ;
		$time = date("Y-m-d h:i:s A",time()); 
		$ref = time();
		$ref_id = time();
		     
		//Connect to  
	$data_connection = array(
					
	'email' => $connectEmail,
	'more_info' => $connectMsg,
	'email_startup' => $email,
	'status' => 'pending',
	'connection' => $connectType,
	'ref' => $ref,
	'ref_id' => $ref_id,
	'time_Submit' => $time

	);

	$this->gfa_model->insertConnection($data_connection); 

	$startupDetail = $this->gfa_model->getStartUpDetails($email);
	$investorDetail =  $this->admin_model->getAllInvestorByEmail($connectEmail);

	$subject = "Demande de connexion via Côte d’Ivoire PME";

	$message = "<a href='https://nora.GetFundedAfrica.ci/portal/'><img src='https://nora.GetFundedAfrica.ci/portal/public/assets/images/logo/GFA-Logo.png'></a><br>";
$message .= "<p>Bonjour, ".$investorDetail[0]['Contact_Name']. "</p>"; 
$message .= "Salut! Êtes-vous un investisseur à la recherche de potentiels startups à financer ? Nous sommes une startup dynamique avec une vision révolutionnaire et nous aimerions entrer en contact avec des investisseurs avisés comme vous. Ensemble, nous pouvons alimenter l’innovation et stimuler la croissance. Discutons! Cliquez icipour démarrer une conversation.
. Discutons ! Cliquez <a href='".base_url()."gfa/startup_website/".$startupDetail[0]['STUP_ID']."'>here</a> pour démarrer une conversation. ";

$this->gfa_model->allNotification($connectEmail, $subject, $ref_id);
	 $this->gfa_model->allNotificationBox($subject,$message, $email, $connectEmail,$ref_id);
 
$this->sendMail($connectEmail, $message,$subject);
//print_r($startupDetail);
	}

    public function matchedConnection(){
		$connectEmail  =  $this->request->getPost("connectEmail");
		$connectType  =  $this->request->getPost("connectType");
		$connectMsg  =  $this->request->getPost("connectMsg");
	   	$email = session()->get('email') ;
		$time = date("Y-m-d h:i:s A",time()); 
		$ref_id = time();
		     
		//Connect to  
$data_connection = array(
					
	'email' => $connectEmail,
	'more_info' => $connectMsg,
	'email_startup' => $email,
	'status' => 'pending',
	'connection' => $connectType,
	'ref' => $ref,
	'ref_id' => $ref_id,
	'time_Submit' => $time

	);
	
	$this->gfa_model->insertConnection($data_connection); 

	//Startup Details 
	$startupDetail = $this->gfa_model->getStartUpDetails($email);
	if($connectType =='startup-mentor'){
	$mentorDetail =  $this->admin_model->getAllMentorByEmail($connectEmail);
	
	}else{
	$corperateDetail =  $this->admin_model->getAllCorperateByEmail($connectEmail);
	}
	$startupDetailExt = $this->gfa_model->getStartUpDetailsExt($email);
	
	$message = "<a href=''http://102.133.150.102/portal/'><img src='http://102.133.150.102/portal/public/assets/images/logo/GFA-Logo.png'></a>";

	$subject = $startupDetail[0]['Startup_Company_Name']." Demande de connexion avec vous via NORA";
	if($connectType =='startup-mentor'){
$message .= "<p>Hello, ".$mentorDetail[0]['Mentor_name']. "</p><p></p>"; 
$message .= "<p>".$startupDetail[0]['Startup_Company_Name']." souhaiterait se connecter avec vous en tant que mentoré via la plateforme NORA,</p><p></p>";
	}else{
		$message .= "<p>".$startupDetail[0]['Startup_Company_Name']." souhaiterait se connecter avec vous en tant que fournisseur de solutions pour ".$corperateDetail[0]['Corporate_Name']. " via la plateforme NORA,</p><p></p>";
		$message .= "<p>Hello, ".$corperateDetail[0]['Key_contact_name']. "</p><p></p>";
	}
	

if($connectType =='startup-mentor'){
$message .= "<p>Objet du mentor : ".$startupDetail[0]['Mentorship']."</p>";
}else{
	$message .= "<p>Solution pour les entreprises : ".$startupDetailExt[0]['Solution_Corperate']."</p>";
	$message .= "<p>Intérêt principal pour les entreprises : ".$startupDetailExt[0]['Core_Interest_Corporate']."</p>";
}

if($connectType =='startup-startup'){
$message .= "<p>Objet du mentor : ".$startupDetail[0]['Mentorship']."</p>";
}else{
	$message .= "<p>Solution pour les entreprises : ".$startupDetailExt[0]['Solution_Corperate']."</p>";
	$message .= "<p>Intérêt principal pour les entreprises : ".$startupDetailExt[0]['Core_Interest_Corporate']."</p>";
}
$message .= "<p><strong>====================================<strong></p>";
$message .= "<p></p>";
 $message .= "<a href='".base_url()."gfa/startup_website/".$startupDetail[0]['STUP_ID']."'>Consulter le profil</a>" ;
 // https://fgnalat.GetFundedAfrica.com/testportal/gfa/startup_website?id=303579

	$this->gfa_model->allNotification($connectEmail, $subject, $ref_id);
	 $this->gfa_model->allNotificationBox($subject,$message, $email, $connectEmail,$ref_id);
 
$this->sendMail($connectEmail, $message,$subject);

	}
    public function add_report()

	{
		

		$title['page_title'] = "Add Report ";
        $email  = session()->get('email') ;
        if(($email == '')){ return redirect()->to(base_url('gfa/login')); }  
        $data['email'] =  $email;
        $data['login_type'] = session()->get('login_type') ;
        $data['account_type'] = $account_type = session()->get('account_type') ;
        $data['admin_access'] = "";
		echo view('header_new',$title);
		if($account_type =='startup' || $account_type =='individual'){
        echo view('nav_new',$data);
        echo view('menu_new',$data);
    }else{

    	echo view('corperate/nav_new',$data);
        echo view('corperate/menu_new',$data);
    }
		echo view('add_report',$data);
		echo view('footer_new');

		

	}
	
	public function postreport()
{
    
    
    $email = session()->get('email');
    $total_sale = $this->request->getPost("total_sale");
    $total_exp = $this->request->getPost("total_exp");
    $new_hiring = $this->request->getPost("new_hiring");
    $employ_term = $this->request->getPost("employ_term");
    $tax_paid = $this->request->getPost("tax_paid");
    $tax = $this->request->getPost("tax");
    $other_info = $this->request->getPost("other_info");
    $csr_active = $this->request->getPost("csr_active");
    $amount = $this->request->getPost("amount");
    $start_date = $this->request->getPost("start_date");
    $end_date = $this->request->getPost("end_date");
    $csr_active_details = $this->request->getPost("csr_active_details");
    $videourl = $this->request->getPost("videourl");
    $status = "pending";
    $ref = $this->gfa_model->getStartupWeeklyRefByEmail($email)[0]['ref'];
    
    $time = date("Y-m-d h:i:s A", time());

    $dataInfo = array(); 
    // Loop through the files
    foreach ($files['file'] as $file) {
        
        // Check if the file is valid
        if ($file->isValid() && ! $file->hasMoved()) {
            
            // Generate a new filename
            $newName = $file->getRandomName();
            $dataInfo[] = $newName;
            // Move the file to the public/uploads directory
            $file->move('./uploads/files/', $newName);
            
            // Store the file information in the database or do something else with it
            // $data = [
            //     'filename' => $newName,
            //     'originalname' => $file->getName(),
            //     'size' => $file->getSize(),
            //     'type' => $file->getClientMimeType(),
            //     'created_at' => date('Y-m-d H:i:s')
            // ];
           
        }
    }

    $data = array(
        'total_sale' => $total_sale,
        'total_exp' => $total_exp,
        'new_hiring' => $new_hiring,
        'employ_term' => $employ_term,
        'tax_paid' => $tax_paid,
        'tax' => $tax,
        'other_info' => $other_info,
        'status' => $status,
        'email' => $email,
        'csr_active' => $csr_active,
        'amount' => $amount,
        'start_date' => $start_date,
        'end_date' => $end_date,
        'csr_active_details' => $csr_active_details,
        'ref' => $ref,
        'videourl' => $videourl,
        'file' => $dataInfo[0],
        'time_submit' => $time,
    );

    if ($this->gfa_model->insertReport($data)) {
        echo 'Report posted successfully';
    } else {
        echo 'Report posted unsuccessfully';
    }
}


public function storypostpro()
{
    

    $title = $this->gfa_model->mysqlCheck($this->request->getPost("title"));
    $story = $this->gfa_model->mysqlCheck($this->request->getPost("story"));
    $videourl = $this->gfa_model->mysqlCheck($this->request->getPost("videourl"));
    $time = date("Y-m-d h:i:s A", time());
    $email = session()->get('email');

    $ref = "";
    $user_data = $this->gfa_model->getAllDcdtByEmailRef($email);
    if (!empty($user_data)) {
        $ref = $user_data[0]['ref'];
    }

    $dataInfo = array(); 
    // Loop through the files
    foreach ($files['file'] as $file) {
        
        // Check if the file is valid
        if ($file->isValid() && ! $file->hasMoved()) {
            
            // Generate a new filename
            $newName = $file->getRandomName();
            $dataInfo[] = $newName;
            // Move the file to the public/uploads directory
            $file->move('./uploads/files', $newName);
            
           
        }
    }

    $data_story = array(
        'title' => $title,
        'story' => $story,
        'videourl' => $videourl,
        'picture' => $dataInfo[0], // Store multiple file names as a comma-separated string.
        'status' => 'pending',
        'email' => $email,
        'ref' => $ref,
        'time_submit' => $time
    );

    $this->gfa_model->insertStory($data_story);
    echo "Story Submitted Successfully, Please wait for it to be approved";
}


    public function add_story()

    {
        
        
        $title['page_title'] = "Add Tell your story ";
        $email  = session()->get('email') ;
        if(($email == '')){ return redirect()->to(base_url('gfa/login')); }  
        $data['email'] =  $email;
        $data['login_type'] = session()->get('login_type') ;
        $data['account_type'] = $account_type = session()->get('account_type');
        $data['admin_access'] = "";

        echo view('header_new',$title);
        echo view('nav_new',$data);
        echo view('menu_new',$data);
        echo view('add_story',$data);
        echo view('footer_new',$data);

        

    }
    
    
    public function check_event($ref_id='')

    {
        
//      
        $title['page_title'] = "Event ";
        $email  = session()->get('email') ;
        if(($email == '')){ return redirect()->to(base_url('gfa/login')); }  
        $data['email'] =  $email;
        $data['login_type'] = session()->get('login_type') ;
        $data['account_type'] = $account_type = session()->get('account_type') ;
        $data['admin_access'] = "";
        $data['ref_id'] = $ref_id;

        echo view('header_new',$title);
       
        echo view('corperate/event',$data);
        echo view('footer_new',$data);

        

    }
    
    
    public function event($ref_id="")

    {
        
        
        $title['page_title'] = "Event ";
        $email  = session()->get('email') ;
        if(($email == '')){ return redirect()->to(base_url('gfa/login')); }  
        $data['email'] =  $email;
        $data['login_type'] = session()->get('login_type') ;
        $data['account_type'] = $account_type = session()->get('account_type') ;
        $data['admin_access'] = "";
        $data['ref_id'] = $ref_id;//urldecode($story_title);
      
        if($account_type == 'corperate'){
        echo view('corperate/header_new',$title);
        echo view('corperate/nav_new',$data);
        echo view('corperate/menu_new',$data);
        echo view('event',$data);
        echo view('corperate/footer_new',$data);
        }
        
       
        if($account_type == 'startup'){
        echo view('header_new',$title);
        echo view('nav_new',$data);
        echo view('menu_new',$data);
        echo view('event',$data);
        echo view('footer_new',$data);    
        }

        if($account_type == 'mentorship'){
        echo view('mentor/header_new',$title);
        echo view('mentor/nav_new',$data);
        echo view('mentor/menu_new',$data);
        echo view('event',$data);
        echo view('mentor/footer_new',$data);    
        }
        

    }
    
    
    public function csr($story_title)

    {
        
        
        $title['page_title'] = "CSR ";
        $email  = session()->get('email') ;
        if(($email == '')){ return redirect()->to(base_url('gfa/login')); }  
        $data['email'] =  $email;
        $data['login_type'] = session()->get('login_type') ;
        $data['account_type'] = $account_type = session()->get('account_type') ;
        $data['admin_access'] = "";
        $data['story_title'] = urldecode($story_title);
        if($account_type == 'corperate'){
        echo view('corperate/header_new',$title);
        echo view('corperate/nav_new',$data);
        echo view('corperate/menu_new',$data);
        echo view('corperate/csr',$data);
        echo view('corperate/footer_new',$data);
        }
        
        if($account_type == 'startup'){
        echo view('header_new',$title);
        echo view('nav_new',$data);
        echo view('menu_new',$data);
        echo view('corperate/csr',$data);
        echo view('footer_new',$data);
        }

    }

    public function edit_event($id='')

	{
		
		$email  = session()->get('email') ;
        if(($email == '')){ return redirect()->to(base_url('gfa/login')); }
		$title['page_title'] = "Update Event - GetFundedAfrica";
		$data['id'] = $id;
		$data['email'] = $email;
        $data['account_type'] = $account_type = session()->get('account_type');
        
        if($account_type == 'startup'){
		echo view('head_doc',$title);
        echo view('nav_new',$data);
        echo view('menu_new',$data);
		echo view('edit_event',$data);
		echo view('footer_doc');
        }
        
        
		if($account_type == 'corperate'){
		echo view('head_doc',$title);
        echo view('corperate/nav_new',$data);
        echo view('corperate/menu_new',$data);
		echo view('edit_event',$data);
		echo view('footer_doc');
        }

	}

    
    public function events($ref_id)

    {
        
        $checkYourStory = $this->gfa_model->getEventByTitle($ref_id);
        $title['page_title'] = str_replace("\\","'",$checkYourStory[0]['title'])."";
        $email  = session()->get('email') ;
        if(($email == '')){ return redirect()->to(base_url('gfa/login')); }  
        $data['email'] =  $email;
        $data['login_type'] = session()->get('login_type') ;
        $data['account_type'] = $account_type = session()->get('account_type') ;
        $data['admin_access'] = "";
        $data['ref_id'] = $ref_id;
        if($account_type == 'corperate'){
        echo view('corperate/header_new',$title);
        echo view('corperate/nav_new',$data);
        echo view('corperate/menu_new',$data);
        echo view('corperate/event',$data);
        echo view('corperate/footer_new',$data);
        }

        elseif($account_type == 'startup'){
        echo view('header_new',$title);
        echo view('nav_new',$data);
        echo view('menu_new',$data);
        echo view('corperate/event',$data);
        echo view('footer_new',$data);
        }else{

        echo view('header_new',$data);

        echo view('corperate/event',$data);
        echo view('footer_new',$data);

        }
        

    }
    
    public function check_story($story_title)

    {
        
//      
        $title['page_title'] = "Tell your story ";
        $email  = session()->get('email') ;
        if(($email == '')){ return redirect()->to(base_url('gfa/login')); }  
        $data['email'] =  $email;
        $data['login_type'] = session()->get('login_type') ;
        $data['account_type'] = $account_type = session()->get('account_type') ;
        $data['admin_access'] = "";
        $data['story_title'] = urldecode($story_title);

        echo view('header_new',$title);
        echo view('nav_new',$data);
        echo view('menu_new',$data);
        echo view('tellyourstory',$data);
        echo view('footer_new',$data);

        

    }
    
        public function tellyourstory($story_title)

    {
        
        
        $title['page_title'] = "Tell your story ";
        $email  = session()->get('email') ;
        if(($email == '')){ return redirect()->to(base_url('gfa/login')); }  
        $data['email'] =  $email;
        $data['login_type'] = session()->get('login_type') ;
        $data['account_type'] = $account_type = session()->get('account_type') ;
        $data['admin_access'] = "";
        $data['story_title'] = urldecode($story_title);

        echo view('header_new',$title);
        echo view('nav_new',$data);
        echo view('menu_new',$data);
        echo view('tellyourstory',$data);
        echo view('footer_new',$data);

        

    }
    
        public function data_insight()

    {
        
        
        $title['page_title'] = "Data and Insight ";
        $email  = session()->get('email') ;
        if(($email == '')){ return redirect()->to(base_url('gfa/login')); }  
        $data['email'] =  $email;
        $data['login_type'] = session()->get('login_type') ;
        $data['account_type'] = $account_type = session()->get('account_type') ;
        $data['admin_access'] = "";

        echo view('header_new',$title);
        echo view('nav_new',$data);
        echo view('menu_new',$data);
        echo view('data_insight',$data);
        echo view('footer_new',$data);
    }

    public function corporate_startup_event()

    {
        
        
        $title['page_title'] = "Microsoft Startup and Corporate Match ";
        $email  = session()->get('email') ;
        if(($email == '')){ return redirect()->to(base_url('gfa/login')); }  
        $data['email'] =  $email;
        $data['login_type'] = session()->get('login_type') ;
        $data['account_type'] = $account_type = session()->get('account_type') ;
        $data['admin_access'] = "";

        echo view('corperate/header_new',$title);
        echo view('corperate/nav_new_event',$data);
        //echo view('corperate/menu_new',$title);
        echo view('corperate/corporate_startup_event',$data);
        echo view('corperate/footer_new',$data);
    }

        public function csr_participate()

    {
        
        
        $title['page_title'] = "All Events ";
        $email  = session()->get('email') ;
        if(($email == '')){ return redirect()->to(base_url('gfa/login')); }  
        $data['email'] =  $email;
        $data['login_type'] = session()->get('login_type') ;
        $data['account_type'] = $account_type = session()->get('account_type') ;
        $data['admin_access'] = "";
        
        echo view('header_new',$title);
        echo view('nav_new',$data);
        echo view('menu_new',$data);
        echo view('csr_participate');
        echo view('footer_new',$data);

        

    }
    
    public function all_events()

    {
        
        
        $title['page_title'] = "All Events ";
        $email  = session()->get('email') ;
        if(($email == '')){ return redirect()->to(base_url('gfa/login')); }  
        $data['email'] =  $email;
        $data['login_type'] = session()->get('login_type') ;
        $data['account_type'] = $account_type = session()->get('account_type') ;
        $data['admin_access'] = "";
        
        echo view('header_new',$title);
        echo view('nav_new',$data);
        echo view('menu_new',$data);
        echo view('event_list');
        echo view('footer_new',$data);

        

    }
    
    
    public function jobs()

    {
        
        
        $title['page_title'] = "All Jobs ";
        $email  = session()->get('email') ;
        if(($email == '')){ return redirect()->to(base_url('gfa/login')); }  
        $data['email'] =  $email;
        $data['login_type'] = session()->get('login_type') ;
        $data['account_type'] = $account_type = session()->get('account_type') ;
        $data['admin_access'] = "";
        echo view('header_new',$title);
        echo view('nav_new',$data);
        echo view('menu_new',$data);
        echo view('jobs');
        echo view('footer_new',$data);

        

    }
    
    
        public function all_stories()

    {
        
        
        $title['page_title'] = "All Stories ";
        $email  = session()->get('email') ;
        if(($email == '')){ return redirect()->to(base_url('gfa/login')); }  
        $data['email'] =  $email;
        $data['login_type'] = session()->get('login_type') ;
        $data['account_type'] = $account_type = session()->get('account_type') ;
        $data['admin_access'] = "";
        echo view('header_new',$title);
        echo view('nav_new',$data);
        echo view('menu_new',$data);
        echo view('story_list',$data);
        echo view('footer_new',$data);

        

    }
    
    public function dealroom_files($file_type)

    {
        
        
        $title['page_title'] = "DealRoom";
        $data['file_type']= $file_type;
        $email  = session()->get('email') ;
        if(($email == '')){ return redirect()->to(base_url('gfa/login')); }  
        $data['email'] =  $email;
        $data['login_type'] = session()->get('login_type') ;
        $data['account_type'] = $account_type = session()->get('account_type') ;
        $data['admin_access'] = "";
        $data['get_investor_id'] = session()->get('get_investor_id') ;
        if($account_type == 'startup' || $account_type == 'individual' || $account_type == 'accelerator'){
        echo view('header_new',$title);
        echo view('nav_new',$data);
        echo view('menu_new',$data);
        echo view('all_files',$data);
        echo view('footer_new',$data);
        }

        
    if($account_type == 'investor'){
        echo view('investor/header_new',$title);
        echo view('investor/nav_new',$title);
        echo view('investor/menu_new',$title);
        echo view('investor/all_files',$data);
        echo view('investor/footer_new');
    }
    
    if($account_type == 'mentorship'){
        echo view('mentor/header_new',$title);
        echo view('mentor/nav_new',$title);
        echo view('mentor/menu_new',$title);
        echo view('mentor/all_files',$data);
        echo view('mentor/footer_new');
    }

    }
    
    
    public function dealroom_folder($folder_name)

    {
        
        
        $title['page_title'] = "DealRoom ";
        $data['folder_name']= $folder_name;
        $email  = session()->get('email') ;
        if(($email == '')){ return redirect()->to(base_url('gfa/login')); }  
        $data['email'] =  $email;
        $data['login_type'] = session()->get('login_type') ;
        $data['account_type'] = $account_type = session()->get('account_type') ;
        $data['admin_access'] = "";
        $data['get_investor_id'] = session()->get('get_investor_id') ;
        if($account_type == 'startup' || $account_type == 'individual' || $account_type == 'accelerator'){
        echo view('header_new',$title);
        echo view('nav_new',$data);
        echo view('menu_new',$data);
        echo view('file',$data);
        echo view('footer_new',$data);
        }
        
        if($account_type == 'investor'){
            echo view('investor/header_new',$title);
            echo view('investor/nav_new',$title);
            echo view('investor/menu_new',$title);
            echo view('investor/file',$data);
            echo view('investor/footer_new');
        }
    if($account_type == 'mentorship'){
            echo view('mentor/header_new',$title);
            echo view('mentor/nav_new',$title);
            echo view('mentor/menu_new',$title);
            echo view('mentor/file',$data);
            echo view('mentor/footer_new');
        }

    }
    
   public function dealroom_file_upload(){
   
    
    $File_Desc  =  $this->request->getPost("File_Desc");
    $File_Type	= $this->request->getPost("File_Type");
    $Title	= $this->request->getPost("Title");
    $time 	=  date("Y-m-d h:i:s A",time());
    $email  = session()->get('email');
    $dataInfo = array();
    $files = $this->request->getFiles();
    $dataInfo = array(); 
    // Loop through the files
    foreach ($files['file'] as $file) {
        
        // Check if the file is valid
        if ($file->isValid() && ! $file->hasMoved()) {
            
            // Generate a new filename
            $newName = $file->getRandomName();
            $dataInfo[] = $newName;
            // Move the file to the public/uploads directory
            $file->move('./uploads/files/', $newName);
            
            // Store the file information in the database or do something else with it
            // $data = [
            //     'filename' => $newName,
            //     'originalname' => $file->getName(),
            //     'size' => $file->getSize(),
            //     'type' => $file->getClientMimeType(),
            //     'created_at' => date('Y-m-d H:i:s')
            // ];
           
        }
    }

	
	$data_file = array(
					
					'Email' => $email,
					'File_Desc' => $File_Desc,
					'File_Type' => $File_Type,
					'Title' => $Title,
					'File' => $dataInfo[0],
					'Time_Submit' => $time
				
					);
					
					$this->gfa_model->insertProfileFile($data_file); 
					echo "File uploaded";
					
$name = $this->gfa_model->getStartUpDetails($email)[0]['Primary_Contact_Name'];	
$companyName = $this->gfa_model->getStartUpDetails($email)[0]['Startup_Company_Name'];	
//$name = $this->gfa_model->getStartUpDetails($email)[0]['Primary_Contact_Name'];	
$country = $this->gfa_model->getStartUpDetails($email)[0]['CountryHQ'];
$industry = $this->gfa_model->getStartUpDetails($email)[0]['PrimaryBusinessIndustry'];   
	    
	    $subject = $companyName." Uploaded ".$Title." File";
$message = "<a href='https://nora.GetFundedAfrica.ci'><img src='https://nora.GetFundedAfrica.ci/images/logo-1.png'></a><br>";

$message .= "<p>Email: ".$email."</p>";
$message .= "<p>Name: ".$name."</p>";
$message .= "<p>Company Name: ".$companyName."</p>";
$message .= "<p>Country: ".$country."</p>";
$message .= "<p>Industry: ".$industry."</p>";
$message .= "<p><strong>=============File Description====================<strong></p><br>";
$message .= "<p>Title: ".$Title."</p>";
$message .= "<p>File_Desc: ".$File_Desc."</p>";
$message .= "<p>File_Type: ".$File_Type."</p>";
$message .= "<p>Date: ".$time."</p>";

$this->sendMail("info@getfundedafrica.com", $message,$subject);

} 
    
    
    public function sendToThirdParty(){
	    $id  =  $this->request->getPost("checkFile");
	    
	   //echo end($id);
	   //exit;
	    $InvestorEmail  =  preg_replace('/\s+/', '',end($id));
	    $data = array();
	   $email  = session()->get('email') ;
	   $InvestorName = $this->gfa_model->getAllInvestorByEmail($InvestorEmail)[0]['Contact_Name'] ;
 
$name = $this->gfa_model->getStartUpDetails($email)[0]['Primary_Contact_Name'];	
$companyName = $this->gfa_model->getStartUpDetails($email)[0]['Startup_Company_Name'];	
$country = $this->gfa_model->getStartUpDetails($email)[0]['CountryHQ'];
$industry = $this->gfa_model->getStartUpDetails($email)[0]['PrimaryBusinessIndustry'];
$startupModel = $this->gfa_model->getStartUpDetailsExt($email)[0]['Startup_Model'];	
$aboutCompany = $this->gfa_model->getStartUpDetails($email)[0]['Investment_History'];  
$Next_Funding_Round_Target_Sought = $this->gfa_model->getStartUpDetails($email)[0]['Next_Funding_Round_Target_Sought'];
$Startup_Implementation_Stage = $this->gfa_model->getStartUpDetails($email)[0]['Startup_Implementation_Stage'];
$time = date("Y-m-d h:i:s A",time()); 
if(!empty($this->gfa_model->getAllDcdtByEmailRef($email)))
{ 
	$ref = $this->gfa_model->getAllDcdtByEmailRef($email)[0]['ref']; 
}else{  
	$ref = "";
}	     
	    
	    $subject = $companyName." :Startups for Investment";

$message = "<a href='https://nora.GetFundedAfrica.ci'><img src='https://nora.GetFundedAfrica.ci/images/logo-1.png'></a><br>";

$message .= '<h4>Dear '.$InvestorName.',</h4>

<p>I hope this email finds you well. I would like to introduce you to an exciting investment opportunity in the African market.</p>

<p><strong>'.$companyName.'</strong> is a '.$startupModel.' startup model in Africa.'.$aboutCompany.'</p>

<p><strong>Founder:</strong> '.$name.'<br>
<strong>Country:</strong> '.$country.'<br>
<strong>Industry:</strong> '.$industry.'</p>

<p>We are currently in the process of raising <strong>$'.$Next_Funding_Round_Target_Sought.'</strong> in <strong>'.$Startup_Implementation_Stage.'</strong> funding to support our growth and expansion plans. Our website, <a href="'.$Website.'">'.$Website.'</a>, provides more information about our business and vision.</p>

<p>To get a comprehensive understanding of our investment opportunity, I invite you to review our completed profile below:</p>';

$message .= "<br><p><strong>============================================================<strong></p>";
foreach($id  as $key => $n ) {
        
     
		   $message .= '<p><a href="https://nora.GetFundedAfrica.ci/portal/uploads/files/'.$this->gfa_model->getFileUploadedById($n)[0]['File'].'">'.$this->gfa_model->getFileUploadedById($n)[0]['Title'].'</a></p>';
		}

$message .= "<br><p><strong>============================================================<strong></p>";
$message .= '<p>If you would like to discuss this opportunity further, please feel free to reach out to our team at <a href="mailto:info@getfundedafrica.com">info@getfundedafrica.com</a>. Additionally, you can log in to your investor account on GetFundedAfrica'.'s platform <a href="http://GetFundedAfrica.com/portal/">here</a> to explore more startup opportunities.</p>

	<p>We appreciate your time and consideration, and we look forward to the possibility of working together.</p>
	
	<p>Best regards,</p>
	
	<p>GetFundedAfrica<br>
	['.$name.']<br>
	['.$companyName.']<br>
	GetFundedAfrica Investment App</p>
	
	';

 $this->sendMail($InvestorEmail, $message,$subject);
//$this->sendMail("info@GetFundedAfrica.com", $message,$subject);
$ref_id = time();
$data_connection = array(
					
	'email' => $InvestorEmail,
	'more_info' => 'Sent business pitch deck',
	'email_startup' => $email,
	'status' => 'pending',
	'connection' => 'startup-investor',
  'extra_status' => 'Sent Pitch Deck',
	'ref' => $ref,
	'ref_id' => $ref_id,
	'time_Submit' => $time

	);
	
	$this->gfa_model->insertConnection($data_connection);




	//echo $message;    
	}
	
	public function sendToInvestor(){
	    $id  =  $this->request->getPost("checkFile");
	    $data = array();
	    $email  = session()->get('email') ;
	   $InvestorId = session()->get('get_investor_id');
	   $InvestorEmail = $this->gfa_model->getAllInvestorById($InvestorId)[0]['Contact_Email'] ;
	   $InvestorName = $this->getAllInvestorByEmail->getAllInvestorByEmail($InvestorEmail)[0]['Contact_Name'] ;
$name = $this->gfa_model->getStartUpDetails($email)[0]['Primary_Contact_Name'];	
$companyName = $this->gfa_model->getStartUpDetails($email)[0]['Startup_Company_Name'];	
//$name = $this->gfa_model->getStartUpDetails($email)[0]['Primary_Contact_Name'];	
$country = $this->gfa_model->getStartUpDetails($email)[0]['CountryHQ'];
$industry = $this->gfa_model->getStartUpDetails($email)[0]['PrimaryBusinessIndustry'];
$startupModel = $this->gfa_model->getStartUpDetailsExt($email)[0]['Startup_Model'];	
$aboutCompany = $this->gfa_model->getStartUpDetails($email)[0]['Investment_History'];  
$Next_Funding_Round_Target_Sought = $this->gfa_model->getStartUpDetails($email)[0]['Next_Funding_Round_Target_Sought'];
$Startup_Implementation_Stage = $this->gfa_model->getStartUpDetails($email)[0]['Startup_Implementation_Stage'];
$time = date("Y-m-d h:i:s A",time()); 
$ref_id = time();
if(!empty($this->gfa_model->getAllDcdtByEmailRef($email)))
{ 
	$ref = $this->gfa_model->getAllDcdtByEmailRef($email)[0]['ref']; 
}else{  
	$ref = "";
}	    
	    $subject = $companyName.": Startups for Investment";

$message = "<a href='https://nora.GetFundedAfrica.ci'><img src='https://investorsfinder.GetFundedAfrica.com/images/logo-1.png'></a><br>";

$message .= '<h4>Dear '.$InvestorName.',</h4>

<p>I hope this email finds you well. I would like to introduce you to an exciting investment opportunity in the African market.</p>

<p><strong>'.$companyName.'</strong> is a '.$startupModel.' startup model in Africa.'.$aboutCompany.'</p>

<p><strong>Founder:</strong> '.$name.'<br>
<strong>Country:</strong> '.$country.'<br>
<strong>Industry:</strong> '.$industry.'</p>

<p>We are currently in the process of raising <strong>$'.$Next_Funding_Round_Target_Sought.'</strong> in <strong>'.$Startup_Implementation_Stage.'</strong> funding to support our growth and expansion plans. Our website, <a href="'.$Website.'">'.$Website.'</a>, provides more information about our business and vision.</p>

<p>To get a comprehensive understanding of our investment opportunity, I invite you to review our completed profile below:</p>';

foreach($id  as $key => $n ) {
        
     
	$message .= '<p><a href="https://nora.GetFundedAfrica.ci/portal/uploads/files/'.$this->gfa_model->getFileUploadedById($n)[0]['File'].'">'.$this->gfa_model->getFileUploadedById($n)[0]['Title'].'</a></p>';
 }

$message .= "<br><p><strong>============================================================<strong></p>";
$message .= '<p>If you would like to discuss this opportunity further, please feel free to reach out to our team at <a href="mailto:info@getfundedafrica.com">info@getfundedafrica.com</a>. Additionally, you can log in to your investor account on GetFundedAfrica'.'s platform <a href="http://GetFundedAfrica.com/portal/">here</a> to explore more startup opportunities.</p>

	<p>We appreciate your time and consideration, and we look forward to the possibility of working together.</p>
	
	<p>Best regards,</p>
	
	<p>GetFundedAfrica<br>
	['.$name.']<br>
	['.$companyName.']<br>
	GetFundedAfrica Investment App</p>
	
	';
if( $InvestorId !=''){
 $this->sendMail($this->gfa_model->getAllInvestorById($InvestorId)[0]['Contact_Email'], $message,$subject);
//$this->sendMail("info@GetFundedAfrica.com", $message,$subject);
}else{
foreach($id  as $key => $s ) {
   
$needle   = '|';

if (strpos($s, $needle) !== false) {
$investId = str_replace('|',"",$s);

 //$message .= "<br>Investor Email: ".$this->gfa_model->getAllInvestorById($investId)[0]['Contact_Email'];
 //$this->sendMail($this->gfa_model->getAllInvestorById($investId)[0]['Contact_Email'], $message,$subject);
//$this->sendMail("info@GetFundedAfrica.com", $message,$subject);

//Connect to investor 
$data_connection = array(
					
	'email' => $this->gfa_model->getAllInvestorById($investId)[0]['Contact_Email'],
	'more_info' => 'Sent business pitch deck',
	'email_startup' => $email,
	'status' => 'pending',
	'connection' => 'startup-investor',
  'extra_status' => 'Sent Pitch Deck',
	'ref' => $ref,
	'ref_id' => $ref_id,
	'time_Submit' => $time

	);
	
	$this->gfa_model->insertConnection($data_connection); 
}

}
}

	  
	}
    
    public function deleteFile()

	{
	    
	    
	    $id = $this->request->getPost("id"); 
	    	
	   	$this->gfa_model->deleteFile($id); 
	}
    
    public function signinAction() {

        $email  = $this->request->getPost("email");

        $password = trim($this->request->getPost("password")); 

        $profile_request = $this->gfa_model->getLoginDetails($email);
        $profile_requestx = $this->gfa_model->getUser($email);
        // $check_subscription = $this->gfa_model->getSubsription($email);
        // $check_subscription_status = $this->gfa_model->getSubsriptionstatus("active");
        $account_type = $profile_request[0]['account_type'];
        $invite_email = $profile_request[0]['invite_email'];
        // if(!empty($this->gfa_model->invited_admin_access($email,$invite_email)[0]['Admin'])){
        //   $admin_access = $this->gfa_model->invited_admin_access($email,$invite_email)[0]['Admin'];  
        
        // }else{
            $admin_access =''; 
        // }
        
        // if(!empty($this->gfa_model->getCorperateDetails($email)[0]['Event'])){
        //   $corInfo = $this->gfa_model->getCorperateDetails($email)[0]['Event'];  
        
        // }else{
            $corInfo =''; 
        // }
            // && ($profile_request[0]['status'] =='' || $profile_request[0]['status']=='active')
        if(($password == $profile_request[0]['password']) && ($email == $profile_request[0]['email']) ) 
// && $profile_request[0]['verify'] == '1'
            {                       



                //session()->set('ref_id', $profile_request[0]['ref_id']);
                if(!empty($invite_email)){
                session()->set('email', $invite_email);   
                session()->set('guest_email', $profile_request[0]['email']);
                }else{
                 session()->set('email', $profile_request[0]['email']);   
                }
                session()->set('account_type', $profile_request[0]['account_type']);
                session()->set('subscription_status', $check_subscription_status[0]['status']);
                session()->set('username', $profile_request[0]['username']);
                session()->set('invite_email', $invite_email);
                session()->set('admin_access', $admin_access);

                
                if($profile_request[0]['account_type'] == 'startup' || $profile_request[0]['account_type'] == 'individual' ){
                    $startup_detail = $this->gfa_model->getStartUpDetails($email);
                        
        
                    $profileUsername = $email;
       
                        $user_detail = [
                            'email' => $this->request->getPost("email"),
                            'password' => $this->request->getPost("password"),
                            'username'=> $profileUsername,
                            'firstname'=> $startup_detail[0]['Primary_Contact_Name'],
                            'lastname'=> $startup_detail[0]['Primary_Contact_Name'],
                        ];
                        
                        $websites = ['remsana', 'estore', 'gfamax', 'marketplace', 'estoretest'];

                        // foreach($websites as $website) {
                        //     if(!empty($this->admin_model->check_sso_email($user_detail['email'], $website))) {
                                //$this->createWpUser($user_detail, $website);
                        //     }
                        // }

                        //$this->enrollRemsanaCourse($user_detail);
                        //return 'test'.$this->enrollRemsanaCourse($user_detail);

                        $this->gfa_model->set_last_login($user_detail['email']);

                        //$this->saveUserActivity('signin', $user_detail['email']);
                    //Event for microsoft 
                    //getAllStartUpNByEmailMicrosoft
                    
                  //   if(!empty($this->gfa_model->getAllDcdtByEmail($profile_request[0]['email']))){
                  //   return redirect()->to(base_url('gfa/dashboard'));
                  // }
                  // if(!empty($this->admin_model->getAllStartUpNByEmailMicrosoft($profile_request[0]['email']))){
                  //   //redirect(base_url().'gfa/startup_cooperate');  
                  //    return redirect()->to(base_url('gfa/startup_cooperate'));
                  // }
                    return redirect()->to(base_url('gfa/dashboard'));
                } else {
                    
                    if($profile_request[0]['account_type'] == 'corperate' || $profile_request[0]['account_type'] == 'accelerator' ){
                        // $cor_detail = $this->gfa_model->getSortedUserData($email);
                        // $user_detail = [
                        //     'email' => $this->request->getPost("email"),
                        //     'password' => $this->request->getPost("password"),
                        //     'username'=> $profileUsername,
                        //     'firstname'=> $cor_detail[0]['Name'],
                        //     'lastname'=> $cor_detail[0]['Name'],
                        // ];
                        
                        // $websites = ['remsana'];
                        
                        // for($i = 0; $i < count($websites); $i++){
                        //     if(!($this->admin_model->check_sso_email($user_detail['email'], $websites[i]))){
                               //$this->createWpUser($user_detail, $websites[$i]);
                        //     }
                            
                        // }
                        session()->set('cor_info', $corInfo);
                        $this->gfa_model->set_last_login($user_detail['email']);

                        //$this->saveUserActivity('signin', $user_detail['email']);

                    // if($this->gfa_model->getCorperateDetails($email)[0]['Event']=='Kenya_Microsoft'){
                    //     return redirect()->to(base_url('gfa/corperate_startup'));
                    // }else{
                    //     return redirect()->to(base_url('gfa/corporate_dashboard')); //  corperate_startup
                    // }
                    return redirect()->to(base_url('gfa/corporate_dashboard')); //  corperate_startup
                    
                    }elseif($profile_request[0]['account_type'] == 'investor'){
                       return redirect()->to(base_url('gfa/investor_mentor'));  
                    }elseif($profile_request[0]['account_type'] == 'mentorship'){
                       return redirect()->to(base_url('gfa/mentor'));  
                    }
                    
                    else{
                       return redirect()->to(base_url('gfa/dashboard')); 
                    }
                }

                
            }

            else

            {
                
//                     if($profile_request[0]['status'] =='de-active'){
//                         $response_data['message'] = "<center><font size=2 color=red>Votre compte a été désactivé. Veuillez contacter l’administrateur de la plateforme par courriel: nora@GetFundedAfrica.ci.
// </font></center>";
//                     }
                    // else{
                      $response_data['message'] = "<center><font size=2 color=red>Invalid email or password, try again. The email or password provided is incorrect. Please try again or select the Forgot password option.
</font></center>";  
                    // }
                    

                    
                    $title['page_title'] = "User Login | GetFundedAfrica";

                    echo view('header_home',$title);

                    echo view('login', $response_data);

                    echo view('header_footer');

                                                

            }

       
    }

        public function dashboard_sub()
    {
        
        $emailVerifySession  = session()->get('email') ;

        
        //$checkRegisteredAccount = $this->gfa_model->getStartUpDetails($emailVerifySession) ;
        
        if(empty($emailVerifySession)){ return redirect()->to(base_url('gfa/login')); } 
        
        
            $title['page_title'] = "Dashboard ";
            
            //Calculate Profile completed  startup name, industry, amount to raise, Hq Address, phone number, Anuual revenue, Employee size, linkined page url
            $email = $emailVerifySession ;
            // if(!empty($this->gfa_model->getStartUpDetailsExt($email)[0]['Country_Incorporate'])){
                
            // $point_1 = 3;
            // $credit_1 = 1;
            // }else{
            //     $point_1 = 0;
            //     $credit_1 = 0;
            // }
            // if(!empty($this->gfa_model->getStartUpDetails($email)[0]['CountryHQ'])){
                
            // $point_2 = 5;
            // $credit_2 = 1;
            // }else{
            //     $point_2 = 0;
            //     $credit_2 = 0;
            // }
            // if(!empty($this->gfa_model->getStartUpDetails($email)[0]['PrimaryBusinessIndustry'])){
            // $point_3 = 5;
            // $credit_3 = 2;
            // }else{
            //     $credit_3 = 0;
            //     $point_3= 0;
            // }
            // if(!empty($this->gfa_model->getStartUpDetails($email)[0]['LinkedIn'])){
            // $point_4 = 1; 
            // $credit_4 = 1;
            // }else{
            //     $credit_4 = 0;
            //     $point_4= 0;
            // }
            
            // if(!empty($this->gfa_model->getStartUpDetails($email)[0]['Startup_Company_Name'])){
            // $point_5 = 5; 
            // $credit_5 = 2;
            // }else{
            //     $point_5= 0;
            //     $credit_5 = 0;
            // }
            
            
            // if(!empty($this->gfa_model->getStartUpDetails($email)[0]['Address'])){
            // $point_6 = 3; 
            // $credit_6 = 1;
            // }else{
            //     $point_6= 0;
            //     $credit_6 = 0;
            // }
            
            // if(!empty($this->gfa_model->getStartUpDetails($email)[0]['NoOfEmployees'])){
            // $point_7 = 1; 
            // $credit_7 = 1;
            // }else{
            //     $point_7= 0;
            //     $credit_7 = 0;
            // }
            
            // if(!empty($this->gfa_model->getStartUpDetails($email)[0]['OperatingRegions'])){
            // $point_8 = 5; 
            // $credit_8 = 1;
            // }else{
            //     $point_8= 0;
            //     $credit_8 = 0;
            // }
            
            // if(!empty($this->gfa_model->getStartUpDetails($email)[0]['Next_Funding_Round_Target_Sought'])){
            // $point_9 = 5; 
            // $credit_9 = 1;
            // }else{
            //     $point_9= 0;
            //     $credit_9 = 0;
            // }
            
            
            
            // if(!empty($this->gfa_model->getStartUpDetails($email)[0]['Date_Founded'])){
            // $point_10 = 1; 
            // $credit_10 = 1;
            // }else{
            //     $point_10= 0;
            //     $credit_10 = 0;
            // }
            
            // if(!empty($this->gfa_model->getStartUpDetails($email)[0]['Revenue'])){
            // $point_11 = 3; 
            // $credit_11 = 1;
            // }else{
            //     $point_11= 0;
            //     $credit_11 = 0;
            // }
            
            // if(!empty($this->gfa_model->getStartUpDetails($email)[0]['Investment_History'])){
            // $point_12 = 5; 
            // $credit_12 = 1;
            // }else{
            //     $point_12= 0;
            //     $credit_12 = 0;
            // }
            
            //     if(!empty($this->gfa_model->getLogoUploaded($email)[0]['Photo_name'])){
            // $point_13 = 1; 
            // $credit_13 = 1;
            // }else{
            //     $point_13= 1;
            //     $credit_13 = 0;
            // }
            
            // if(!empty($this->gfa_model->getStartUpDetails($email)[0]['Website'])){
            // $point_14 = 1; 
            // $credit_14 = 1;
            // }else{
            //     $point_14= 0;
            //     $credit_14 = 0;
            // }
            
            // if(!empty($this->gfa_model->getStartUpDetails($email)[0]['CurrentInvestmentStage'])){
            // $point_15 = 5; 
            // $credit_15 = 1;
            // }else{
            //     $point_15= 0;
            //     $credit_15 = 0;
            // }
            
            // if(!empty($this->gfa_model->getStartUpDetails($email)[0]['Startup_Implementation_Stage'])){
            // $point_16 = 5; 
            // $credit_16 = 1;
            // }else{
            //     $point_16= 0;
            //     $credit_16 = 0;
            // }
            
            // if(!empty($this->gfa_model->getStartUpDetailsExt($email)[0]['Monthly_Revenue'])){
            // $point_17 = 3; 
            // $credit_17 = 1;
            // }else{
            //     $point_17= 0;
            //     $credit_17 = 0;
            // }
            // if(!empty($this->gfa_model->getStartUpDetailsExt($email)[0]['Amount_Raise'])){
            // $point_18 = 3; 
            // $credit_18 = 1;
            // }else{
            //     $point_18= 0;
            //     $credit_18 = 0;
            // }
            // if(!empty($this->gfa_model->getStartUpDetailsExt($email)[0]['Minimum_Growth'])){
            // $point_19 = 3; 
            // $credit_19 = 1;
            // }else{
            //     $point_19= 0;
            //     $credit_19 = 0;
            // }
            // if(!empty($this->gfa_model->getStartUpDetailsExt($email)[0]['Valuation'])){
            // $point_20 = 3; 
            // $credit_20 = 1;
            // }else{
            //     $point_20= 0;
            //     $credit_20 = 0;
            // }
            // if(!empty($this->gfa_model->getStartUpDetailsExt($email)[0]['Product'])){
            // $point_21 = 3; 
            // $credit_21 = 1;
            // }else{
            //     $point_21= 0;
            //     $credit_21 = 0;
            // }
            // if(!empty($this->gfa_model->getStartUpDetailsExt($email)[0]['Social_Impact'])){
            // $point_22 = 3; 
            // $credit_22 = 1;
            // }else{
            //     $point_22= 0;
            //     $credit_22 = 0;
            // }
            // if(!empty($this->gfa_model->getStartUpDetailsExt($email)[0]['Serial_Entrepreneur'])){
            // $point_23 = 3; 
            // $credit_23 = 1;
            // }else{
            //     $point_23= 0;
            //     $credit_23 = 0;
            // }
            // if(!empty($this->gfa_model->getStartUpDetailsExt($email)[0]['Scaling'])){
            // $point_24 = 3; 
            // $credit_24 = 1;
            // }else{
            //     $point_24= 0;
            //     $credit_24 = 0;
            // }
            // if(!empty($this->gfa_model->getStartUpDetailsExt($email)[0]['Startup_Core'])){
            // $point_25 = 3; 
            // $credit_25 = 1;
            // }else{
            //     $point_25= 0;
            //     $credit_25 = 0;
            // }
            // if(!empty($this->gfa_model->getStartUpDetailsExt($email)[0]['Funding_Type'])){
            // $point_26 = 3; 
            // $credit_26 = 1;
            // }else{
            //     $point_26= 0;
            //     $credit_26 = 0;
            // }
            // if(!empty($this->gfa_model->getStartUpDetailsExt($email)[0]['Startup_Level'])){
            // $point_27 = 3; 
            // $credit_27 = 1;
            // }else{
            //     $point_27= 0;
            //     $credit_27 = 0;
            // }
            // if(!empty($this->gfa_model->getStartUpDetailsExt($email)[0]['Startup_Accelerator'])){
            // $point_28 = 3; 
            // $credit_28 = 1;
            // }else{
            //     $point_28= 0;
            //     $credit_28 = 0;
            // }
            // if(!empty($this->gfa_model->getStartUpDetailsExt($email)[0]['Startup_Partner'])){
            // $point_29 = 3; 
            // $credit_29 = 1;
            // }else{
            //     $point_29= 0;
            //     $credit_29 = 0;
            // }
            // if(!empty($this->gfa_model->getStartUpDetailsExt($email)[0]['Startup_Percent'])){
            // $point_30 = 3; 
            // $credit_30 = 1;
            // }else{
            //     $point_30= 0;
            //     $credit_30 = 0;
            // }
            // if(!empty($this->gfa_model->getStartUpDetailsExt($email)[0]['Startup_Phone'])){
            // $point_31 = 1; 
            // $credit_31 = 1;
            // }else{
            //     $point_31= 0;
            //     $credit_31 = 0;
            // }
            // if(!empty($this->gfa_model->getStartUpDetailsExt($email)[0]['Startup_Model'])){
            // $point_32 = 3; 
            // $credit_32 = 1;
            // }else{
            //     $point_32= 0;
            //     $credit_32 = 0;
            // }
        
            
            
            //$data['point']= ceil((($point_1 + $point_2 + $point_3 + $point_4 + $point_5+ $point_6 + $point_7 + $point_8 + $point_9 + $point_10 + $point_11 + $point_12 + $point_13)/415)*100) ;
            
            // $creditPointScore = $point_1 + $point_2 + $point_3 + $point_4 + $point_5+ $point_6 + $point_7 + $point_8 + $point_9 + $point_10 + $point_11 + $point_12 + $point_13 
            // + $point_14 + $point_15 + $point_16 + $point_17 + $point_18 + $point_19 + $point_20 + $point_21 + $point_22 + $point_23 + $point_24 + $point_25 + $point_26 +
            // $point_27 + $point_28 + $point_29 + $point_30 + $point_31 + $point_32;
            // $credit = ceil((($credit_1 + $credit_2 + $credit_3 + $credit_4 + $credit_5+ $credit_6 + $credit_7 + $credit_8 + $credit_9 + $credit_10 + $credit_11 + $credit_12 + $credit_13 
            // + $credit_14 + $credit_15 + $credit_16 + $credit_17 + $credit_18 + $credit_19 + $credit_20 + $credit_21 + $credit_22 + $credit_23 + $credit_24 + $credit_25 + $credit_26 +
            // $credit_27 + $credit_28 + $credit_29 + $credit_30 + $credit_31 + $credit_32)/32)*15);
            // $data['point'] = $creditPointScore; 
        
        // if(!empty($this->gfa_model->getCurrentSub($email,'Basic Funding','active')) || !empty($this->gfa_model->getCurrentSub($email,'Premium Funding','active')) || !empty($this->gfa_model->getCurrentSub($email,'Business Funding','active'))){
        //   if($this->admin_model->getCreditRedeemByEmail($email)[0]['Credit']==15){
            
        //           echo '';
                
        //       }else{
            // Insert credit and Email Request 
                //$this->creditRedeemProfile(45); 
        // $getCreditSub =   $this->admin_model->getCreditAciveSub($email);
            
        //   }
        // }else{
        //     $paidCredit  = 0;
        //     $realCredit = $credit;
        //     $getCreditSub= 0;
        // }
    
        // $getPoints = $data['point'];
        
        // if($getPoints >=50){
            
        //     $credit = 15;
        // }
    
        // $getBalanceFreeCredit = $credit - $this->admin_model->getCreditRedeemSumByEmailFree($email);    
        // $balanceCreditFree = ($getBalanceFreeCredit) * 460 ;
        // $getBalancePaidCredit = $getBalanceFreeCredit + ($getCreditSub - $this->admin_model->getCreditRedeemSumByEmailPaid($email));
        // $totalCredit = $credit + $paidCredit; 
        // $totalCreditInNaira = $totalCredit * 460 ; 
        //$viewCredit = detectCurrencyAmount($totalCreditInNaira);
        // $balanceCredit = (60 - $this->admin_model->getCreditRedeemSumByEmail($email)) * 460 ;
        //  $realCredit = 63 - ($credit + $paidCredit); 
        // $getActualBalance = ($getBalancePaidCredit) * 460 ;
        // $data['credit'] =   $credit;
        // $data['viewcredit'] = $getActualBalance;   //$totalCreditInNaira;
        // $data['paidCredit'] = $paidCredit;
        // $data['balanceCredit'] = $getActualBalance; //$balanceCredit;
        // $data['balanceCreditFree'] =  $getActualBalance;    //$balanceCreditFree;
        // $data['showCredit'] = $getBalancePaidCredit;

       $data['account_type']= session()->get('account_type');
          $data['getCurrentSubBasic']= $getCurrentSubBasic = $this->gfa_model->getCurrentSub($email,'Basic Funding','active');
          $data['getCurrentSubPremium']= $getCurrentSubPremium = $this->gfa_model->getCurrentSub($email,'Premium Funding','active');
          $data['getCurrentSubBusiness']= $getCurrentSubBusiness = $this->gfa_model->getCurrentSub($email,'Business Funding','active');
        //Get Subscription 
        if(!empty($getCurrentSubBasic)){
            $data['subscription'] = 'monthly';
        }elseif(!empty($getCurrentSubPremium)){
            $data['subscription'] = 'yearly';
        }else{
            $data['subscription'] = 'free';
        } 

        
        	
         $data['email'] = $email;
          $data['login_type'] = session()->get('login_type') ;
          
        //Startup DB Details Array 
        // $data['getStartUpDetails'] = $this->gfa_model->getStartUpDetails($email);
         // $data['getInvestorDetails'] = $this->gfa_model->getInvestorDetails($email);
         //$data['getPhoto']  =  $this->gfa_model->getPhotoUploaded($email);
         // $data['creditPointScore']  = $creditPointScore; 
        // $data['loginkey'] = $this->gfa_model->getWpCred($email);
         // $data['rowArrayStartup'] = $this->admin_model->getAllStartUpNByEmail($email);
         $uri = $this->request->getUri(); $user_action = $uri->getSegment(2);
	        $this->saveUserActivity($user_action, $email);
          // $data['getAllDcdtByEmail'] = $this->gfa_model->getAllDcdtByEmail($email);
          
           $data['startupPaid'] = $this->gfa_model->getPaidSubscriber($email); 

           //echo view('header_new',$title);
           echo view('dashboard_sub',$data);
           //echo view('footer_new',$data);
        

        

    }
    
    public function dashboard()
    {
        
        $email  = session()->get('email') ;

        
        //$checkRegisteredAccount = $this->gfa_model->getStartUpDetails($emailVerifySession) ;
        
        if(empty($email)){ return redirect()->to(base_url('gfa/login')); } 
        
        
            $title['page_title'] = "Dashboard ";
            
            //Calculate Profile completed  startup name, industry, amount to raise, Hq Address, phone number, Anuual revenue, Employee size, linkined page url
            $email = $emailVerifySession ;
            
       
      
         
        $resp = "";
       

       
        	$data['eventResp'] = json_decode($resp,true);
         $data['email'] = $email;
          $data['login_type'] = session()->get('login_type') ;
          $data['account_type'] = session()->get('account_type') ;
        //Startup DB Details Array 
        $data['getStartUpDetails'] = $rowArrayStartup =  $this->gfa_model->getStartUpDetails($email);
         $data['GetCounts'] = $this->gfa_model->GetCounts();
         //$data['getPhoto']  =  $this->gfa_model->getPhotoUploaded($email);
        
        // $data['loginkey'] = $this->gfa_model->getWpCred($email);
         $data['rowArrayStartup'] = $rowArrayStartup; //$this->admin_model->getAllStartUpNByEmail($email);
         $uri = $this->request->getUri(); $user_action = $uri->getSegment(2);
	        $this->saveUserActivity($user_action, $email);
          // $data['getAllDcdtByEmail'] = $this->gfa_model->getAllDcdtByEmail($email);
                   
          
        echo view('header_new',$title);
        echo view('nav_new',$data);
        echo view('menu_new',$data);
        echo view('dashboard2',$data);
        echo view('footer_new',$data);

        

    }

    public function edit_cohort($id='')

{
    
$email  = session()->get('email'); if(($email == '')){ return redirect()->to(base_url('gfa/login')); }		
    $title['page_title'] = "Update Cohort ";
    $data['id'] = $id;
    $data['email'] =  $email;
    $data['loginkey'] = $this->gfa_model->getWpCred($email);
        $data['login_type'] = session()->get('login_type') ;
        $data['account_type'] = $account_type = session()->get('account_type') ;
        $data['admin_access'] =  session()->get('admin_access');
    echo view('corperate/header_new',$title);
    // echo view('corperate/nav_new',$data);
    // echo view('corperate/menu_new',$title);
    echo view('corperate/edit_cohort',$data);
    echo view('corperate/footer_new');

 
}
    public function cohort()

	{
		
	$email  = session()->get('email') ; if(($email == '')){ return redirect()->to(base_url('gfa/login')); }		
		$title['page_title'] = "Manage Cohort ";
        $data['email'] =  $email;
        $data['login_type'] = session()->get('login_type') ;
        $data['account_type'] = $account_type = session()->get('account_type') ;
        $data['admin_access'] =  session()->get('admin_access');
		echo view('corperate/header_new',$title);
        echo view('corperate/nav_new',$data);
        echo view('corperate/menu_new',$title);
		echo view('corperate/cohort');
		echo view('corperate/footer_new');

		

	}
    public function manage_cohort()

	{
		
	$email  = session()->get('email') ; if(($email == '')){ return redirect()->to(base_url('gfa/login')); }		
		$title['page_title'] = "Manage Cohort ";
        $data['email'] =  $email;
        $data['login_type'] = session()->get('login_type') ;
        $data['account_type'] = $account_type = session()->get('account_type') ;
        $data['admin_access'] =  session()->get('admin_access');
		echo view('corperate/header_new',$title);
        echo view('corperate/nav_new',$data);
        echo view('corperate/menu_new',$title);
		echo view('corperate/manage_cohort');
		echo view('corperate/footer_new');

		

	}

    public function manage_user()

	{
		
	$email  = session()->get('email') ; if(($email == '')){ return redirect()->to(base_url('gfa/login')); }	
		$title['page_title'] = "Manage Admin/Users";
        //$data['id'] = $id; 
        $data['email'] =  $email;
        $data['login_type'] = session()->get('login_type') ;
        $data['account_type'] = $account_type = session()->get('account_type') ;
        if($account_type == 'corperate'){
		echo view('corperate/header_new',$title);
        echo view('corperate/nav_new',$data);
        echo view('corperate/menu_new',$title);
		echo view('corperate/manage_user',$data);
		echo view('corperate/footer_new');
        }
        
        if($account_type == 'startup'){
		echo view('header_new',$title);
        echo view('nav_new',$data);
        echo view('menu_new',$title);
		echo view('corperate/manage_user',$data);
		echo view('footer_new');
        }
		

	}


    public function invite_user()

    {
        
        $emailVerifySession  = session()->get('email') ;
        $account_type    = session()->get('account_type') ;   
        if(empty($emailVerifySession)){ return redirect()->to(base_url('gfa/login')); }  
    
        $title['page_title'] = "Invite Users Registration ";
        $data['email'] =  $emailVerifySession;
        $data['login_type'] = session()->get('login_type') ;
        $data['account_type'] = session()->get('account_type') ;
        
        echo view('header_new',$title);
        if($account_type == "corperate"){
        echo view('corperate/nav_new',$data);
        echo view('corperate/menu_new',$data);
        echo view('corperate/invite_user',$data);
        }else{
            echo view('nav_new',$data);
            echo view('menu_new',$data);
            echo view('corperate/invite_user',$data);
        }
        echo view('footer_new',$data);

        

    }

    public function forgotPasswordPro()

    {   

        $email  = strtolower($this->request->getPost("email"));

//      $randPass = sha1($ref_id);  

//      $passwordxc = "gfa".substr($randPass,0,5);

        



        $profile_request = $this->gfa_model->getLoginDetails($email);

        $profile_requestx = $this->gfa_model->getUser($email);

        if($email == $profile_request[0]['email'])  

// && $profile_request[0]['verify'] == '1'

            {                       



                                $subject = 'Recover Access to Your Account';

                                $message = "
                                <div style='font-family: Arial, sans-serif; color: #333; line-height: 1.6;'>
                                    <a href='https://getfundedafrica.com/' style='display: inline-block; margin-bottom: 20px;'>
                                        <img src='https://getfundedafrica.com/assets/images/get-funded-africa-logo.png' alt='GetFundedAfrica Logo' style='width: 150px; height: auto;'>
                                    </a>
                                    
                                    <p><strong>You’ve requested to recover access to your account. Your login details are below:</strong></p>
                                    
                                    <p>
                                        <a href='" . base_url() . "' style='color: #007bff; text-decoration: none;'>
                                            <i>Click here to log in to your account</i>
                                        </a>
                                    </p>
                                
                                    <p><strong>Email:</strong> {$email}<br>
                                    <strong>Temporary Password:</strong> {$profile_request[0]['password']}</p>
                                
                                    <p>If you did not request this recovery or have any concerns, please contact us at:<br>
                                    <strong>info@getfundedafrica.com</strong></p>
                                
                                    <p>Kind regards,<br>
                                    <strong>The GetFundedAfrica Team</strong></p>
                                </div>
                                ";
                                
                                $this->sendMail($email, $message, $subject);



//              $data_bind  =   array(

                    

//                  'password' => $password,

//                  );

//          $this->app_model->updateAccount( $email, $data_bind); 



                echo "Vérifiez votre courrier pour votre mot de passe.";

            
            }else{


                echo "L'email n'existe pas.";

            }



    }

    public function cohortUpload()
{
    $email = $emailCorperate = session()->get('email') ;
    $Title = $this->request->getPost("Title");
    $Title_Extra = strtolower(str_replace(" ", "-", $this->request->getPost("Title")));
    $Short_Desc = $this->request->getPost("Short_Desc");
    $Main_Desc = html_entity_decode($this->request->getPost("Main_Desc"));
    $Date = $this->request->getPost("Date");
    $Fee = $this->request->getPost("Fee");
    $Cohort_Program = $this->request->getPost("Cohort_Program");
    $Cohort_Duration = $this->request->getPost("Cohort_Duration");
    $Cohort_Type = $this->request->getPost("Cohort_Type");
    $Demo_Date = $this->request->getPost("Demo_Date");
    $Url = "https://nora.GetFundedAfrica.ci/cohort/corporate/?org=" . str_replace(" ", "-", $Title_Extra);
    $Status = "active";
    $Time_submit = date("Y-m-d h:i:s A", time());
    $Ticket = $this->request->getPost("Ticket");
    $Currency = $this->request->getPost("Currency");
    $Videourl = $this->request->getPost("Videourl");

    $Company = $this->gfa_model->getCorperateDetails($email)[0]['Event'];

    $dataInfo = array();
    $files = $this->request->getFiles();

    foreach ($files['file'] as $file) {
        if ($file->isValid() && !$file->hasMoved()) {
            $newName = $file->getRandomName();
            $file->move(ROOTPATH . 'uploads/files', $newName);
            $dataInfo[] = $newName;
        }
    }

    $data_file = array(
        'Title' => $Title,
        'Short_Desc' => $Short_Desc,
        'Main_Desc' => $Main_Desc,
        'Date' => $Date,
        'Logo' => !empty($dataInfo[0]) ? $dataInfo[0] : '',
        'Fee' => $Fee,
        'Url' => $Url,
        'Demo_Date' => $Demo_Date,
        'Cohort_Program' => $Cohort_Program,
        'Cohort_Duration' => $Cohort_Duration,
        'Cohort_Type' => $Cohort_Type,
        'Status' => $Status,
        'Ticket' => $Ticket,
        'Videourl' => $Videourl,
        'Currency' => $Currency,
        'Company' => $Company,
        'Banner' => !empty($dataInfo[1]) ? $dataInfo[1] : '',
        'Partner_logo' => !empty($dataInfo[2]) ? $dataInfo[2] : '',
        'Time_Submit' => $Time_submit
    );

    $this->admin_model->insertCohort($data_file);
    echo "Cohort Info uploaded";
}


    public function updateCohortUpload()
{
    $id = $this->request->getPost("id");
    $Title = $this->request->getPost("Title");
    $Title_Extra = strtolower(str_replace(" ", "-", $this->request->getPost("Title")));
    $Short_Desc = $this->request->getPost("Short_Desc");
    $Main_Desc = $this->request->getPost("Main_Desc");
    $Date = $this->request->getPost("Date");
    $Fee = $this->request->getPost("Fee");
    $Cohort_Program = $this->request->getPost("Cohort_Program");
    $Cohort_Duration = $this->request->getPost("Cohort_Duration");
    $Cohort_Type = $this->request->getPost("Cohort_Type");
    $Demo_Date = $this->request->getPost("Demo_Date");

    $Url = "https://nora.GetFundedAfrica.ci/cohort/corporate/?org=" . str_replace(" ", "-", $Title_Extra);
    $Status = "active";
    $Time_submit = date("Y-m-d h:i:s A", time());
    $Ticket = $this->request->getPost("Ticket");
    $Currency = $this->request->getPost("Currency");
    $Videourl = $this->request->getPost("Videourl");
    $Company = $this->gfa_model->getCorperateDetails($email)[0]['Event'];

    $dataInfo = array();
    $files = $this->request->getFiles();

    foreach ($files['file'] as $file) {
        if ($file->isValid() && !$file->hasMoved()) {
            $newName = $file->getRandomName();
            $file->move(ROOTPATH . 'uploads/files', $newName);
            $dataInfo[] = $newName;
        }
    }

    $Logo = !empty($dataInfo[0]) ? $dataInfo[0] : $this->request->getPost("Logo");
    $Banner = !empty($dataInfo[1]) ? $dataInfo[1] : $this->request->getPost("Banner");
    $Partner_logo = !empty($dataInfo[2]) ? $dataInfo[2] : $this->request->getPost("Partner_logo");

    $data_file = array(
        'Title' => $Title,
        'Short_Desc' => $Short_Desc,
        'Main_Desc' => $Main_Desc,
        'Date' => $Date,
        'Logo' => $Logo,
        'Fee' => $Fee,
        'Url' => $Url,
        'Demo_Date' => $Demo_Date,
        'Cohort_Program' => $Cohort_Program,
        'Cohort_Duration' => $Cohort_Duration,
        'Cohort_Type' => $Cohort_Type,
        'Status' => $Status,
        'Title' => $Title,
        'Banner' => $Banner,
        'Partner_logo' => $Partner_logo,
        'Ticket' => $Ticket,
        'Videourl' => $Videourl,
        'Currency' => $Currency,
        'Company' => $Company,
        'Time_Submit' => $Time_submit
    );

    $this->admin_model->updateCohort($data_file, $id);
    echo "Cohort Info updated";
}

public function corperate_startups($reg_type="")

{
    
$email  = session()->get('email') ; if(($email == '')){ return redirect()->to(base_url('gfa/login')); }		
    $title['page_title'] = "Startup and Corperate Match ";
    
    //Calculate Profile completed  startup name, industry, amount to raise, Hq Address, phone number, Anuual revenue, Employee size, linkined page url
     $data['email'] =  $email;
     $data['login_type'] = session()->get('login_type') ;
     $data['account_type'] = session()->get('account_type') ;
     $data['cor_info'] = session()->get('cor_info');
     $data['admin_access'] = session()->get('admin_access');
    $data['reg_type'] = str_replace("-"," ",$reg_type);
    echo view('corperate/header_new',$title);
    echo view('corperate/nav_new',$data);
    echo view('corperate/menu_new',$title);
    echo view('corperate/corperate_startup',$data);
    echo view('corperate/footer_new');

    

}


public function xcorperate_startups()

{
    
$email  = session()->get('email') ; if(($email == '')){ return redirect()->to(base_url('gfa/login')); }		
    $title['page_title'] = "Startup and Corperate Match ";
    
    //Calculate Profile completed  startup name, industry, amount to raise, Hq Address, phone number, Anuual revenue, Employee size, linkined page url
     $data['email'] =  $email;
     $data['login_type'] = session()->get('login_type') ;
     $data['account_type'] = session()->get('account_type') ;
     $data['cor_info'] = session()->get('cor_info');
     $data['admin_access'] = session()->get('admin_access');
    
    echo view('corperate/header_new',$title);
    echo view('corperate/nav_new',$data);
    echo view('corperate/menu_new',$title);
    echo view('corperate/corperate_dashboard',$data);
    echo view('corperate/footer_new');

    

}





 public function unleashified_newsletter()
{
    // Allow requests from any origin (or specify the allowed domain)
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
    header("Access-Control-Allow-Headers: Content-Type, Authorization");

    // If the request is an OPTIONS request, stop here
    if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
        http_response_code(200);
        exit;
    }

    $email = $this->gfa_model->mysqlCheck($this->request->getPost("email"));
    

    if (!$email ) {
        echo json_encode(["success" => false, "message" => "Email is required"]);
        exit;
    }

    $data_startup = [
        "email" => $email,
        
       
    ];

    $inserted = $this->gfa_model->insertNewsletter($data_startup);

    if ($inserted) {
        echo json_encode(["success" => true, "message" => "Subscribed successfully."]);
    } else {
        echo json_encode(["success" => false, "message" => "Database error."]);
    }
    exit;
}

        public function unleash_stripe_ext()

    {                  
                        $email = session()->get('email');
                        $subtype = session()->get('type');
                        $sub = session()->get('sub');
                        $amount = session()->get('amt');
                        $name = session()->get('name');
                        $phone = session()->get('phone');
                        $trans_ref = session()->get('trans_ref');
                        $ref_id = time();
                        $time_submit =  date("Y-m-d h:i:s A",time());
                         
                            $data   =   array(

                                'name'  =>  $name,
                                'email'     =>  $email,
                                'phone'     =>$phone,
                                'subtype'   =>  $subtype,
                                'amount'    =>  $amount,
                                'ref_id'    =>  $ref_id,
                                'trans_ref'     =>  $trans_ref,
                                'time_submit'   =>  $time_submit
                                        
                                );

                    
                    //===================================Message Content ===================================
                    //$message = "";
                    //$subject = "GFA Onboarding Welcome";
                    //======================= End Message =============================================
                                    


                $title['page_title'] = "Stripe Payment | Unleashified";
                $data['email'] = $email;
                    // echo view('header_form',$title);

                    echo view('stripe_unleashified', $data);

                    // echo view('header_form');

                                    


}

     public function unleashified_stripe($ref="")
    {
        // $status =
        $getSubDetails = $this->gfa_model->getUnleashifiedSub($ref,'pending');
        $profileDetails     = $this->gfa_model->getUnleashifiedProfile($getSubDetails[0]['email']);
        
                            $name = $profileDetails[0]['name'];
                            $email = $profileDetails[0]['email'];
                            $phone = $profileDetails[0]['phone'];
                            $sub = $getSubDetails[0]['plan'];
                            $amount = (int)$getSubDetails[0]['total_amount'];
                            $industry = 'Accounting';
                            $country = $profileDetails[0]['country'];
                            
                            if($getSubDetails[0]['period'] =='monthly'){
                                $period = "monthly";
                                
                            }elseif($getSubDetails[0]['period'] =='yearly'){
                                 $period = "yearly";
                            }else{
                                $period = "bi-annually";
                                
                            }
                            
                            

                            //'onetime' => $this->request->getPost('onetime'),
                            $newdata = array( 
                            'type'  => $period,
                            'sub'  => $sub, 
                            'amt'     => $amount, 
                            'package' => "Accounting Package",
                            'payment_plan' => 'stripePlan',
                            'account_type' => 'startup',
                            'email' => $email,
                            'name' => $name,
                            'phone' => $phone,
                            'industry' => $industry,
                            'country' => $country,
                            'trans_ref' => $ref
                            );  
                            //$email  = session()->get('email');
                            session()->set($newdata);
                            session()->set('email', $email);
                            session()->set('account_type', "startup");
        
         return redirect()->to(base_url('gfa/unleash_stripe_ext'));  
    }

   public function unleashified_bookkeeping()
{
    // Set CORS and JSON headers
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
    header("Access-Control-Allow-Headers: Content-Type, Authorization");
    header("Content-Type: application/json; charset=utf-8");

    // Handle preflight request
    if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
        http_response_code(200);
        exit;
    }

    // Clean any previous output
    while (ob_get_level()) {
        ob_end_clean();
    }

    // Get input values safely
    $email        = $this->gfa_model->mysqlCheck(strtolower($this->request->getPost("email")));
    $name         = $this->gfa_model->mysqlCheck($this->request->getPost("name"));
    $plan         = $this->gfa_model->mysqlCheck($this->request->getPost("plan"));
    $period       = $this->gfa_model->mysqlCheck($this->request->getPost("period"));
    $totalAmount  = $this->gfa_model->mysqlCheck($this->request->getPost("totalAmount"));
    $phone        = $this->gfa_model->mysqlCheck($this->request->getPost("phone"));
    $password     = $this->gfa_model->mysqlCheck($this->request->getPost("password"));
    $currency     = $this->gfa_model->mysqlCheck($this->request->getPost("currency"));
    $sub_ref      = time() . rand(1000, 10000);

    // Prepare profile data
    $data_profile = [
        "email"   => $email,
        "name"    => $name,
        "password"=> $password,
        "phone"   => $phone,
        "verify"  => '0',
        "status"  => 'pending',
    ];

    // Prepare subscription data
    $data_sub = [
        "ref"          => $sub_ref,
        "email"        => $email,
        "plan"         => $plan,
        "period"       => $period,
        "total_amount" => $totalAmount,
        "currency"     => $currency,
        "status"       => 'pending',
    ];

    // Insert into DB using model
    $profileInserted = $this->gfa_model->insertProfileSub($data_profile);
    $subInserted     = $this->gfa_model->insertUnleahSub($data_sub);

    // If both insertions succeed, send the email
    if ($profileInserted && $subInserted) {
        $subject = "Activate Your Unleashified Booking";
        $firstName = explode(' ', $name)[0]; // Get first name from full name

        $activationLink = "https://unleashified.com/activate/?ref=" . $sub_ref;

        $messages = "
<!DOCTYPE html>
<html lang='en'>
<head>
  <meta charset='UTF-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1.0'>
  <title>Unleashified | Activate Your Account</title>
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #f4f8fc;
      margin: 0;
      padding: 0;
      color: #333;
    }
    .email-wrapper {
      max-width: 600px;
      margin: 40px auto;
      background-color: #ffffff;
      border-radius: 12px;
      overflow: hidden;
      box-shadow: 0 0 10px rgba(0, 67, 116, 0.1);
    }
    .header {
      background-color: #0077c8;
      padding: 20px;
      text-align: center;
    }
    .content {
      padding: 30px;
    }
    .content h2 {
      color: #004374;
    }
    .btn {
      display: inline-block;
      margin: 30px 0;
      padding: 14px 28px;
      background-color: #0077c8;
      font-weight: bold;
      border-radius: 8px;
    }
    .btn a {
      color: #ffffff;
      
    }
    .footer {
      text-align: center;
      padding: 20px;
      font-size: 14px;
      background-color: #f1f5f9;
      color: #666;
    }
    .footer a {
      color: #0077c8;
      text-decoration: none;
    }
  </style>
</head>
<body>
  <div class='email-wrapper'>
    <div class='header'>
      <!-- Optional: add logo here -->
    </div>
    <div class='content'>
      <h2>Hi {$firstName},</h2>
      <p>Thanks for choosing <strong>Unleashified</strong>!</p>
      <p>Please click the button below to activate your account and proceed to payment:</p>
      <p><a href='{$activationLink}' class='btn'>Activate Account</a></p>
      <p>We can’t wait to get started with you!</p>
      <p>— The Unleashified Team</p>
    </div>
    <div class='footer'>
      <p>
        <a href='https://www.unleashified.com'>www.unleashified.com</a><br>
        For support, contact us at <a href='mailto:hello@unleashified.com'>hello@unleashified.com</a>
      </p>
    </div>
  </div>
</body>
</html>
";


        $this->sendMail($email, $messages, $subject);
    }

    // Return JSON response
    echo json_encode([
        "success" => $profileInserted && $subInserted,
        "message" => ($profileInserted && $subInserted)
            ? "Subscription successful. Please check your email to activate your account."
            : "Failed to save subscription."
    ]);

    exit;
}





    public function unleashified_contact()
{
    // Allow requests from any origin (or specify the allowed domain)
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
    header("Access-Control-Allow-Headers: Content-Type, Authorization");

    // If the request is an OPTIONS request, stop here
    if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
        http_response_code(200);
        exit;
    }

    $email = $this->gfa_model->mysqlCheck($this->request->getPost("email"));
    $name = $this->request->getPost("name");
    $topic = $this->request->getPost("topic");
    $phone = $this->request->getPost("phone");
    $message = $this->request->getPost("message");

    if (!$email || !$name || !$message) {
        echo json_encode(["success" => false, "message" => "Please fill all required fields."]);
        exit;
    }

    $data_startup = [
        "email" => $email,
        "name" => $name,
        "topic" => $topic,
        "phone" => $phone,
        "message" => $message,
       
    ];

    $inserted = $this->gfa_model->insertCustomerContact($data_startup);

    if ($inserted) {
        echo json_encode(["success" => true, "message" => "Data inserted successfully."]);
    } else {
        echo json_encode(["success" => false, "message" => "Database error."]);
    }
    exit;
}

public function unleashified_consultation_request()
{
    // Allow CORS
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
    header("Access-Control-Allow-Headers: Content-Type, Authorization");

    if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
        http_response_code(200);
        exit;
    }

    // Retrieve POST data
    $fullName = $this->request->getPost("fullName");
    $businessName = $this->request->getPost("businessName");
    $email = $this->request->getPost("email");
    $phone = $this->request->getPost("phone");
    $industry = $this->request->getPost("industry");
    $businessSize = $this->request->getPost("businessSize");
    $services = $this->request->getPost("services"); // array
    $details = $this->request->getPost("details");
    $consultationMethod = $this->request->getPost("consultationMethod");
    $bestTime = $this->request->getPost("bestTime");

    // Validation
    if (!$fullName || !$email || !$industry || !$businessSize || !$details || !$consultationMethod || !$bestTime) {
        echo json_encode(["success" => false, "message" => "Please fill all required fields."]);
        exit;
    }

    // Format services array
    $servicesFormatted = is_array($services) ? implode(', ', $services) : '';

    // Save data to database
    $data_consultation = [
        "full_name" => $fullName,
        "business_name" => $businessName,
        "email" => $email,
        "phone" => $phone,
        "industry" => $industry,
        "business_size" => $businessSize,
        "services" => $servicesFormatted,
        "details" => $details,
        "consultation_method" => $consultationMethod,
        "best_time" => $bestTime,
    ];

    // Insert into DB using your model (create this method in your model if it doesn't exist yet)
    $inserted = $this->gfa_model->insertConsultationRequest($data_consultation);

    if ($inserted) {
        // Prepare admin email
        $subject = "New Bookkeeping Consultation Request from $fullName";
        $message = "
            <h3>New Consultation Request</h3>
            <p><strong>Full Name:</strong> $fullName</p>
            <p><strong>Business Name:</strong> $businessName</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Phone:</strong> $phone</p>
            <p><strong>Industry:</strong> $industry</p>
            <p><strong>Business Size:</strong> $businessSize</p>
            <p><strong>Services Interested In:</strong> $servicesFormatted</p>
            <p><strong>Challenges:</strong><br />" . nl2br($details) . "</p>
            <p><strong>Preferred Consultation Method:</strong> $consultationMethod</p>
            <p><strong>Best Time to Reach:</strong> $bestTime</p>
        ";

        $admin_emails = ["bookkeeping@unleashified.com", "hello@unleashified.com"];
        foreach ($admin_emails as $admin_email) {
            $this->sendMail($admin_email, $message, $subject);
        }

        echo json_encode(["success" => true, "message" => "Consultation request submitted successfully."]);
    } else {
        echo json_encode(["success" => false, "message" => "Database error."]);
    }

    exit;
}
public function mva_pay(){
    
    // CORS headers
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
    header("Access-Control-Allow-Headers: Content-Type, Authorization");

    // Handle preflight request
    if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
        http_response_code(200);
        exit;
    }
    
    
    echo json_encode(["success" => true, "message" => "Payment submitted and admin notified."]);

    exit;
}


public function mva_register(){
    
    // CORS headers
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
    header("Access-Control-Allow-Headers: Content-Type, Authorization");

    // Handle preflight request
    if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
        http_response_code(200);
        exit;
    }
    
    
    echo json_encode(["success" => true, "message" => "Form submitted and admin notified."]);

    exit;
}

public function unleashified_getquote()
{
    // CORS headers
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
    header("Access-Control-Allow-Headers: Content-Type, Authorization");

    // Handle preflight request
    if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
        http_response_code(200);
        exit;
    }

    // Get POST data
    $email = $this->gfa_model->mysqlCheck($this->request->getPost("email"));
    $name = $this->request->getPost("name");
    $company = $this->request->getPost("company");
    $budget = $this->request->getPost("budget");
    $details = $this->request->getPost("details");

    // Validate
    if (!$email || !$name) {
        echo json_encode(["success" => false, "message" => "Please fill all required fields."]);
        exit;
    }

    // Save data
    $data_startup = [
        "email" => $email,
        "name" => $name,
        "company" => $company,
        "budget" => $budget,
        "details" => $details,
    ];

    $inserted = $this->gfa_model->insertCustomerQuote($data_startup);

    if ($inserted) {
        // Prepare message to admin
        $subject = "New Website Quote Request from $name";
        $message = "
            <h3>New Quote Request Received</h3>
            <p><strong>Name:</strong> {$name}</p>
            <p><strong>Email:</strong> {$email}</p>
            <p><strong>Company:</strong> {$company}</p>
            <p><strong>Budget:</strong> {$budget}</p>
            <p><strong>Project Details:</strong><br />" . nl2br($details) . "</p>
        ";

        // Send email to admins
        $admin_emails = ["hello@unleashified.com", "samson.agbaje@gfa-tech.com", "temitope@gfa-tech.com"];
        foreach ($admin_emails as $admin_email) {
            $this->sendMail($admin_email, $message, $subject);
        }

        echo json_encode(["success" => true, "message" => "Quote submitted and admin notified."]);
    } else {
        echo json_encode(["success" => false, "message" => "Database error."]);
    }

    exit;
}



    public function startupProfileCorperatePro(){
	    
        $emailCorperate = session()->get('email') ;
	    $corperateDetails = $this->gfa_model->getCorperateDetails($emailCorperate);
	    $corperateName = $corperateDetails[0]['Corporate_Name'];
	    $nameCorperate = $corperateDetails[0]['Key_contact_name'];
	    $email = $this->gfa_model->mysqlCheck($this->request->getPost("email")); 
		$name = $this->gfa_model->mysqlCheck($this->request->getPost("firstName")." ".$this->request->getPost("lastName"));
		$organization = $this->gfa_model->mysqlCheck($this->request->getPost("organization"));
		$phoneNumber = $this->gfa_model->mysqlCheck($this->request->getPost("phoneNumber"));
		$address = $this->gfa_model->mysqlCheck($this->request->getPost("Business_address"));
	    $gender = $this->gfa_model->mysqlCheck($this->request->getPost("gender"));
		$City = $this->gfa_model->mysqlCheck($this->request->getPost("City"));
		$Business_address = $this->gfa_model->mysqlCheck($this->request->getPost("Business_address"));
		$Website = $this->gfa_model->mysqlCheck($this->request->getPost("Website"));
		$Facebook = $this->gfa_model->mysqlCheck($this->request->getPost("Facebook"));
		$LinkedIn = $this->gfa_model->mysqlCheck($this->request->getPost("LinkedIn"));
		$Corporate_Name = $this->gfa_model->mysqlCheck($this->request->getPost("Corporate_Name"));
		$industryArray = $this->request->getPost("industry");
		$Solution_Corperate = $this->gfa_model->mysqlCheck($this->request->getPost("Solution_Corperate"));
		$Startup_Model = $this->gfa_model->mysqlCheck($this->request->getPost("Startup_Model"));
		$Core_Interest_Corporate = $this->gfa_model->mysqlCheck($this->request->getPost("Core_Interest_Corporate"));
		$Corporate_Solution_Prox = $this->gfa_model->mysqlCheck($this->request->getPost("Corporate_Solution_Prox"));
		$Solution_Ownership = $this->gfa_model->mysqlCheck($this->request->getPost("Solution_Ownership"));
	    $Hq_country = $this->gfa_model->mysqlCheck($this->request->getPost("country"));
	    $Attendance = $this->gfa_model->mysqlCheck($this->request->getPost("Attendance"));
	    $NoOfEmployees = $this->gfa_model->mysqlCheck($this->request->getPost("NoOfEmployees"));
	    $Event = $corperateDetails[0]['Event'];
	    $industry = implode(",", $industryArray);
	    $randPass = sha1(time());
        $Password = "gfa".substr($randPass,0,5);
        $time = date("Y-m-d h:i:s A",time());
        
                 $data_ref	= 	array(

					'ref' 	=> $Event,
					'reg_type' 	=> 'startup',
					'email' 	=> $email,
					'time_submit' 	=> $time,
					'status' 	=> 'pending'
				
					);
					
		        $data_startup	= 	array(

					'Startup_Company_Name' 	=> $Corporate_Name,
					'Primary_Contact_Name' 	=> $name,
					'Contact_Email' 	=> $email,
					'Phones' 	=> $phoneNumber,
					'Website' 	=> $Website,
					'Address' 	=> $Business_address,
					'CountryHQ' 	=> $Hq_country,
					'NoOfEmployees' 	=> $NoOfEmployees,
					'PrimaryBusinessIndustry' 	=> $industry,
					'Facebook' 	=> $Facebook,
					'LinkedIn' 	=> $LinkedIn,
					'State' 	=> $City,
				    'Event' 	=> $Event
				
					
				
					);
				$data_startup_update	= 	array(

					'Startup_Company_Name' 	=> $Corporate_Name,
					'Primary_Contact_Name' 	=> $name,
					'Phones' 	=> $phoneNumber,
					'Website' 	=> $Website,
					'Address' 	=> $Business_address,
					'CountryHQ' 	=> $Hq_country,
					'NoOfEmployees' 	=> $NoOfEmployees,
					'PrimaryBusinessIndustry' 	=> $industry,
					'Facebook' 	=> $Facebook,
					'LinkedIn' 	=> $LinkedIn,
					'State' 	=> $City,
				    'Event' 	=> $Event
				
				
					);
				
				if($this->gfa_model->getStartUpDetails($email)[0]['Contact_Email']==""){
				   $this->gfa_model->insertStartupProfile($data_startup); 
				   $this->gfa_model->insertStartupByCorperate($data_ref);
				}else{
				   $this->gfa_model->saveStartupProfile($email,$data_startup_update); 
				}
				
		$data_startup_ext	= 	array(
		            'Email' 	=> $email,
					'Startup_Model' 	=> $Startup_Model,
					'Solution_Corperate' 	=> $Solution_Corperate,
					'Core_Interest_Corporate' 	=> $Core_Interest_Corporate,
					'Corporate_Solution_Prox' 	=> $Corporate_Solution_Prox,
					'Solution_Ownership' 	=> $Solution_Ownership,
					'Event' 	=> $Event
				
					
				
					);
					
					$data_startup_update_ext	= 	array(
						
					'Startup_Model' 	=> $Startup_Model,
					'Solution_Corperate' 	=> $Solution_Corperate,
					'Core_Interest_Corporate' 	=> $Core_Interest_Corporate,
					'Corporate_Solution_Prox' 	=> $Corporate_Solution_Prox,
					'Solution_Ownership' 	=> $Solution_Ownership,
					'Event' 	=> $Event
				
					);
					
					 $data_login	= 	array(
		            
		            'email' => $email,
		            'password' => $Password,
		            'account_type' => 'startup',
					     
					    ); 
					
				$message = "
  <a href='https://nora.GetFundedAfrica.ci'><img src='https://nora.GetFundedAfrica.ci/images/logo-1.png'></a>
    
<p><strong>Dear ".$name.",</strong></p>

<p> ".$nameCorperate." from ".$corperateName."
has invited you to join GetFundedAfrica as a Startup/SME.</p>
 



<p><br />=================Below is your GetFundedAfrica account login details===============</p>
<p><a href='https://nora.GetFundedAfrica.ci/portal/'><i>Click here to login with your details</i></a></p>
<p>Email: ".$email."</p>
<p>Password: ".$Password."</p>

 

<br>
Thank you

 
<br>
GetFundedAfrica Team
 
            ";	
          
				
$subject = $corperateName." registration success";
					
					if($this->gfa_model->getStartUpDetailsExt($email)[0]['Email']==""){
				   $this->gfa_model->insertStartupProfileExt($data_startup_ext); 
				   $this->gfa_model->insertLogin($data_login);
				   $this->sendMail($email, $message,$subject);	
				}else{
				   $this->gfa_model->saveStartupProfileExt($email,$data_startup_update_ext);
				    $this->sendMail($email, $messages,$subject);
				}
	}

    
    public function profile()

    {
        
   
        $emailVerifySession  = session()->get('email') ;
        $account_type    = session()->get('account_type') ;   
        if(empty($emailVerifySession)){ return redirect()->to(base_url('gfa/login')); }  
        $title['page_title'] = lang('translation.Profile');
        $data['email'] =  $emailVerifySession;
          $data['login_type'] = session()->get('login_type') ;
          $data['account_type'] = session()->get('account_type');

          
         echo view('header_new',$title);
        
       
        if($account_type=="startup" || $account_type=="individual" || $account_type==""){ 
        echo view('menu_new',$data);
        echo view('nav_new',$data);
        echo view('profiledemo',$data);
        
        }
        
        if($account_type =="investor"){ 
        echo view('investor/menu_new',$data);
        echo view('investor/nav_new',$data);
        echo view('investor/profile',$data);
    
        }

        if($account_type=="mentorship"){ 
        echo view('mentor/menu_new',$data);
        echo view('mentor/nav_new',$data);
        echo view('mentor/profile',$data);
    
        }

        if($account_type=="corperate" || $account_type=="accelerator"){ 
        echo view('corperate/menu_new',$data);
        echo view('corperate/nav_new',$data);
        echo view('corperate/profile',$data);
    
        }
         
        echo view('footer_new',$data);

        

    }

    public function attendEventExt()

    {
        
        
        $Email = $this->gfa_model->mysqlCheck($this->request->getPost("attend_email") );
        $title = $this->gfa_model->mysqlCheck($this->request->getPost("attend_title"));
        $eventId = $this->gfa_model->mysqlCheck($this->request->getPost("attend_eventId"));
        $attend_name = $this->gfa_model->mysqlCheck($this->request->getPost("attend_first_name")).' '.$this->gfa_model->mysqlCheck($this->request->getPost("attend_last_name"));
        $attend_phone = $this->gfa_model->mysqlCheck($this->request->getPost("attend_phone"));
        $attend_gender = $this->gfa_model->mysqlCheck($this->request->getPost("attend_gender"));
        $status = 'active';
        $time_submit = date("Y-m-d h:i:s A",time());
        $data_credit    =   array(

                    'email'     => $Email,
                    'title'     => $title,
                    'wp_id'     => $eventId,
                    'attend_name'   => $attend_name,
                    'status'    => $status,
                    'attend_phone'  => $attend_phone,
                    'attend_gender'     => $attend_gender,
                    'time_submit'   => $time_submit
                    
                    );
            $this->gfa_model->insertWpEvent($data_credit); 
        $getEventDetails = $this->gfa_model->getEventByIdAttend($eventId);
        $profile = $this->gfa_model->getStartUpDetails($Email); 
            $message = "<a href='https://nora.GetFundedAfrica.ci'><img src='https://nora.GetFundedAfrica.ci/images/logo-1.png'></a> <br><br>";

$message .= "<p>Congratulation you have been confirmed to attend this event with following details:</p>";
$message .= "<p>Name: ".$attend_name."</p>";
$message .= "<p>Email: ".$Email."</p>";
$message .= "<p>Title of Event: ".$title."</p>";
$message .= "<p>Venue: ".$getEventDetails[0]['venue']."</p>";
$message .= "<p>Meeting Link: ".$getEventDetails[0]['meeting_link']."</p>";
$message .= "<p>Start Date: ".$getEventDetails[0]['start_date']."</p>";
$message .= "<p>End Date: ".$getEventDetails[0]['end_date']."</p>";
$message .= "<p>Date of Request: ".$time_submit."</p>";
$message .= "<p></p>";
$message .= "<p>See you there!</p>";

$subject = $title. " Enquiry";
    
//nichole@GetFundedAfricafrica.com                
$this->sendMail($Email, $message,$subject);                 
    
    }

        public function attendEvent()

    {
        
        
        $Email = session()->get('email') ;
        $eventId = $this->request->getPost("eventId");
        $status = 'active';
        $time_submit = date("Y-m-d h:i:s A",time());
        $getEventDetails = $this->gfa_model->getEventByIdAttend($eventId);
        $profile = $this->gfa_model->getStartUpDetails($Email); 
        $data_credit    =   array(

                    'email'     => $Email,
                    'title'     => $title,
                    'wp_id'     => $eventId,
                    'attend_name'   => $profile[0]['Primary_Contact_Name'],
                    'status'    => $status,
                    'attend_phone'  => $profile[0]['Phones'],
                    'attend_gender'     => $profile[0]['Gender'],
                    'time_submit'   => $time_submit
                    
                    );
            $this->gfa_model->insertWpEvent($data_credit); 
            
                $message = "<a href='https://nora.GetFundedAfrica.ci'><img src='https://nora.GetFundedAfrica.ci/images/logo-1.png'></a> <br><br>";
    
    $message .= "<p>Congratulation you have been confirmed to attend this event with following details:</p>";
    $message .= "<p>Name: ".$profile[0]['Primary_Contact_Name']."</p>";
    $message .= "<p>Email: ".$Email."</p>";
    $message .= "<p>Title of Event: ".$title."</p>";
    $message .= "<p>Venue: ".$getEventDetails[0]['venue']."</p>";
    $message .= "<p>Meeting Link: ".$getEventDetails[0]['meeting_link']."</p>";
    $message .= "<p>Start Date: ".$getEventDetails[0]['start_date']."</p>";
    $message .= "<p>End Date: ".$getEventDetails[0]['end_date']."</p>";
    $message .= "<p>Date of Request: ".$time_submit."</p>";
    $message .= "<p></p>";
    $message .= "<p>See you there!</p>";
    
    $subject = $title. " Enquiry";
//nichole@GetFundedAfricafrica.com                
$this->sendMail($Email, $message,$subject);                 
    
    }

    public function creditRedeem()

    {
        
        
        $Email = session()->get('email') ;
        $Credit = $this->request->getPost("credit");
        $Status = 'pending';
        $Time_submit = date("Y-m-d h:i:s A",time());
        $data_credit    =   array(

                    'Email'     => $Email,
                    'Credit'    => $Credit,
                    'Status'    => $Status,
                    'Time_submit'   => $Time_submit
                    
                    );
            $this->gfa_model->insertCredit($data_credit); 
            $profile = $this->gfa_model->getStartUpDetails($Email); 
            $message = "<a href='https://nora.GetFundedAfrica.ci'><img src='https://nora.GetFundedAfrica.ci/images/logo-1.png'></a> <br><br>";
            
            $message .= "<p>Name: ".$profile[0]['Primary_Contact_Name']."</p>";
            $message .= "<p>Email: ".$Email."</p>";
            $message .= "<p>Credit: $".$Credit."</p>";

            $message .= "<p>Date of Request: ".$Time_submit."</p>";

            $subject = "Onboarding Credit Request"; 
                            
            $this->sendMail('info@getfundedafrica.com', $message,$subject);                    
                    
    }

    public function profile_photo()
{
    $time = date("Y-m-d h:i:s A", time());
    $email = session()->get('email') ;
    $account_type = session()->get('account_type');
    $upload_type = $this->request->getPost('upload_type');
    $dataInfo = array();
    $files = $this->request->getFiles();
    $dataInfo = array(); 
    // Loop through the files
    foreach ($files['file'] as $file) {
        
        // Check if the file is valid
        if ($file->isValid() && ! $file->hasMoved()) {
            
            // Generate a new filename
            $newName = $file->getRandomName();
            $dataInfo[] = $newName;
            // Move the file to the public/uploads directory
            $file->move('./uploads/onboarding/', $newName);
            
            // Store the file information in the database or do something else with it
            // $data = [
            //     'filename' => $newName,
            //     'originalname' => $file->getName(),
            //     'size' => $file->getSize(),
            //     'type' => $file->getClientMimeType(),
            //     'created_at' => date('Y-m-d H:i:s')
            // ];
           
        }
    }

    $data_photo = array(
        'Email' => $email,
        'Account_type' => $account_type,
        'Photo_name' => $dataInfo[0],
        'Upload_Type' => $upload_type,
        'Time_Submit' => $time
    );

    $this->gfa_model->insertProfilePhoto($data_photo);
    echo lang("translation.Uploaded image saved");
}

public function signoutAction()
{
    $user_data = session()->get();
    foreach ($user_data as $key => $value) {
        if ($key != 'session_id' && $key != 'ip_address' && $key != 'user_agent' && $key != 'last_activity') {
             session()->remove($key);
        }
    }
    session()->destroy(); 

    return redirect()->to(base_url('gfa/login'));
}

public function checkProfileErrorDemo()

    {
         $email = session()->get('email');
        if($email == ''){ return redirect()->to(base_url('gfa/login')); }
        
        $firstName = $this->gfa_model->mysqlCheck($this->request->getPost("firstName"));
        $lastName = $this->gfa_model->mysqlCheck($this->request->getPost("lastName"));
        $phoneNumber = $this->gfa_model->mysqlCheck($this->request->getPost("phoneNumber"));
        $address = $this->gfa_model->mysqlCheck($this->request->getPost("address"));
        $gender = $this->gfa_model->mysqlCheck($this->request->getPost("gender"));
        $facebook = $this->gfa_model->mysqlCheck($this->request->getPost("facebook"));
        $personal_linkedIn = $this->gfa_model->mysqlCheck($this->request->getPost("personal_linkedIn"));
        $country = $this->gfa_model->mysqlCheck($this->request->getPost("country"));
        $state = $this->gfa_model->mysqlCheck($this->request->getPost("state"));
        $zipCode = $this->gfa_model->mysqlCheck($this->request->getPost("zipCode"));
        $about_me = $this->gfa_model->mysqlCheck($this->request->getPost("about_me"));
        $Hear_Us = $this->gfa_model->mysqlCheck($this->request->getPost("Hear_Us"));
    
        echo 'Required field updates are marked with an asterisk (*) and coloured red. <br>'; 
          if($firstName==""){ 
     echo '<div style="color:#ff0000;">* First Name</div>';
     $point_1 = 0;
     
          }else{
             $point_1 = 5;  
              
          }
          if($lastName==""){ 
     echo '<div style="color:#ff0000;">* Last Name</div>'; 
     $point_100 = 0;
      }else{
          
        $point_100 = 5;  
      }  
      if($phoneNumber==""){ 
      echo '<div style="color:#ff0000;">* Phone Number</div>'; 
       } 
      if($country==""){ 
      echo '<div style="color:#ff0000;">* Your Country</div>'; 
       } 
      if($state==""){ 
      echo '<div style="color:#ff0000;">* State</div>'; 
       } 
      
      if($zipCode==""){ 
      echo '<div style="color:#ff0000;">* Zip Code</div>'; 
       } 
     
     if($personal_linkedIn==""){ 
      echo '<div style="color:#ff0000;">* Personal LinkedIn Profile</div>';
      $point_4 = 0; 
       }else{
        $point_4 = 15; 
    }
     
      if($Hear_Us==""){ 
      echo '<div style="color:#ff0000;">* How did you hear about us?</div>';
       }
       if($gender==""){ 
      echo '<div style="color:#ff0000;">* Gender</div>';
       }
       if($about_me==""){ 
      echo '<div style="color:#ff0000;">* About yourself</div>';
       }
    
      
      $point_13 = 2;
      
    
    }

    public function inviteformpro() {
                        
        $email  = session()->get('email') ;
        $account_type    = session()->get('account_type') ;       
        $founderName =$this->request->getPost("founderName");                
        $founderGender = $this->request->getPost("founderGender");      
        $founderDesignation = $this->request->getPost("founderDesignation");        
        $founderLinkedin = $this->request->getPost("founderLinkedin");
        $admin = $this->request->getPost("admin");                      
        $time = date("Y-m-d h:i:s A",time());
        $randPass = sha1(time());
        $Password = "gfa".substr($randPass,0,5);
        $income_entries= array();
        $number_of_entries = sizeof($founderName);  
        $corperateDetails = $this->gfa_model->getCorperateDetails($emailCorperate);
        $corperateName = $corperateDetails[0]['Corporate_Name'];
        $nameCorperate = $corperateDetails[0]['Key_contact_name'];
        for ($j = 0; $j < $number_of_entries; $j++)
        {
        $randPass = sha1(time());
        $Password = "gfa".substr($randPass,0,5);
        //if(!empty($founderName)){//$new_entry = array('coFounderName' => $founderName[$j], 'coGender' => $founderGender[$j], 'coDesignation' => $founderDesignation[$j], 'coLinkedin' => $founderLinkedin[$j], 'coAbout' => $founderAbout[$j], 'coPhoto' => $dataInfo[$j]['file_name']//, 'coStartupExp' => $startup_exp[$j], 'coExitExp' => $exit_exp[$j], 'coWorkExp' => $work_exp[$j]);//array_push($income_entries, $new_entry);//        
            //}//}//$coFounderInfo   = json_encode($income_entries);   
         $data_startup  =   array(
                    'Name'  => $founderName[$j],                    
                    'Email'     => $founderGender[$j],                  
                    'Position'  => $founderDesignation[$j],                 
                    'Phone'     => $founderLinkedin[$j],                    
                    'Status'    => 'active',                    
                    'Invite_Email'  => $email,
                    'Admin'     => $admin[$j],                      
                    'Time_Submit'   => $time                                        
                );
                
                $data_login =   array(
                    
                    'email' => $founderGender[$j],
                    'password' => $Password,
                    'account_type' => $account_type,
                    'invite_email' => $email
                         
                        ); 
                
        if($founderGender[$j] != $this->gfa_model->getInviteDetails($email)[$j]['Email']){
            $this->gfa_model->insertInviteProfile($data_startup);
             $this->gfa_model->insertLogin($data_login);
             
              $message = "
  <a href='https://nora.GetFundedAfrica.ci'><img src='https://nora.GetFundedAfrica.ci/images/logo-1.png'></a>
    
<p><strong>Dear ".$founderName[$j].",</strong></p>

<p> ".$nameCorperate." from ".$corperateName."
has invited you to join the GetFundedAfrica Platform and manage the account.</p>
 



<p><br />=================Below is your GetFundedAfrica account login details===============</p>
<p><a href='https://fgnalat.GetFundedAfrica.com/portal/'><i>Click here to login with your details</i></a></p>
<p>Email: ".$founderGender[$j]."</p>
<p>Password: ".$Password."</p>

 

<br>
Thank you

 
<br>
GetFundedAfrica Team
 
            ";  
$subject = $corperateName." Invite you";
$this->sendMail($founderGender[$j], $message,$subject);
                        
        }else{
            echo '';
        }
        
       
                
        }          


}

public function startup_mentor()

	{
	
	    $email  = session()->get('email');
         if(($email == '')){ return redirect()->to(base_url('gfa/login')) ; }	
		$title['page_title'] = "Startup and Mentor Match - GetFundedAfrica";
        
        //Calculate Profile completed  startup name, industry, amount to raise, Hq Address, phone number, Anuual revenue, Employee size, linkined page url
// 		 $email = $this->encrypt->decode($this->session->userdata('email')) ;
		// if($this->gfa_model->getStartUpDetails($email)[0]['Primary_Contact_Name']!=""){
		    
		//    $point_1 = 10;
		//    $credit_1 = 1;
		// }else{
		//     $point_1 = 0;
		//     $credit_1 = 0;
		// }
        // if($this->gfa_model->getStartUpDetails($email)[0]['CountryHQ']!=""){
            
        //  $point_2 = 15;
        //  $credit_2 = 1;
		// }else{
		//     $point_2 = 0;
		//     $credit_2 = 0;
		// }
        // if($this->gfa_model->getStartUpDetails($email)[0]['PrimaryBusinessIndustry']!=""){
		//  $point_3 = 100;
		//  $credit_3 = 1;
		// }else{
		//     $credit_3 = 0;
		//     $point_3= 0;
		// }
		// if($this->gfa_model->getStartUpDetails($email)[0]['LinkedIn']!=""){
		//  $point_4 = 15; 
		//  $credit_4 = 1;
		// }else{
		//     $credit_4 = 0;
		//     $point_4= 0;
		// }
		
		// if($this->gfa_model->getStartUpDetails($email)[0]['Startup_Company_Name']!=""){
		//  $point_5 = 10; 
		//  $credit_5 = 1;
		// }else{
		//     $point_5= 0;
		//     $credit_5 = 0;
		// }
		
		
		// if($this->gfa_model->getStartUpDetails($email)[0]['Address']!=""){
		//  $point_6 = 15; 
		//  $credit_6 = 1;
		// }else{
		//     $point_6= 0;
		//     $credit_6 = 0;
		// }
		
		// if($this->gfa_model->getStartUpDetails($email)[0]['NoOfEmployees']!=""){
		//  $point_7 = 10; 
		//  $credit_7 = 1;
		// }else{
		//     $point_7= 0;
		//     $credit_7 = 0;
		// }
		
		// if($this->gfa_model->getStartUpDetails($email)[0]['OperatingRegions']!=""){
		//  $point_8 = 100; 
		//  $credit_8 = 1;
		// }else{
		//     $point_8= 0;
		//     $credit_8 = 0;
		// }
		
		// if($this->gfa_model->getStartUpDetails($email)[0]['Next_Funding_Round_Target_Sought']!=""){
		//  $point_9 = 100; 
		//  $credit_9 = 1;
		// }else{
		//     $point_9= 0;
		//     $credit_9 = 0;
		// }
		
		
		
		// if($this->gfa_model->getStartUpDetails($email)[0]['Date_Founded']!=""){
		//  $point_10 = 5; 
		//  $credit_10 = 1;
		// }else{
		//     $point_10= 0;
		//     $credit_10 = 0;
		// }
		
		// if($this->gfa_model->getStartUpDetails($email)[0]['Revenue']!=""){
		//  $point_11 = 15; 
		//  $credit_11 = 1;
		// }else{
		//     $point_11= 0;
		//     $credit_11 = 0;
		// }
		
		// if($this->gfa_model->getStartUpDetails($email)[0]['Investment_History']!=""){
		//  $point_12 = 15; 
		//  $credit_12 = 1;
		// }else{
		//     $point_12= 0;
		//     $credit_12 = 0;
		// }
		
		
		
		// 	if($this->gfa_model->getPhotoUploaded($email)[0]['Photo_name']!=""){
		//  $point_13 = 5; 
		//  $credit_13 = 1;
		// }else{
		//     $point_13= 0;
		//     $credit_13 = 0;
		// }
		
		// $data['point']= ceil((($point_1 + $point_2 + $point_3 + $point_4 + $point_5+ $point_6 + $point_7 + $point_8 + $point_9 + $point_10 + $point_11 + $point_12 + $point_13)/415)*100) ;
		// $data['credit']= $credit_1 + $credit_2 + $credit_3 + $credit_4 + $credit_5+ $credit_6 + $credit_7 + $credit_8 + $credit_9 + $credit_10 + $credit_11 + $credit_12 + $credit_13 ;
		$data['email'] =  $email;
          $data['login_type'] = session()->get('login_type') ;
          $data['account_type'] = session()->get('account_type') ;
		echo view('header_new',$title);
        echo view('nav_new',$data);
        echo view('menu_new',$data);
		echo view('startup_mentor',$data);
		echo view('footer_new',$data);

		

	}
	
	public function founderformpro()

	{
		$email  = session()->get('email');
         if(($email == '')){ return redirect()->to(base_url('gfa/login')) ; }
	
		
	
		$founderName =$this->gfa_model->mysqlCheck($this->request->getPost("founderName"));
		
		$founderGender = $this->gfa_model->mysqlCheck($this->request->getPost("founderGender"));
		$founderDesignation = $this->gfa_model->mysqlCheck($this->request->getPost("founderDesignation"));
		$founderLinkedin = $this->gfa_model->mysqlCheck($this->request->getPost("founderLinkedin"));
		$founderAbout = $this->gfa_model->mysqlCheck($this->request->getPost("founderAbout"));
		$startup_exp   = $this->gfa_model->mysqlCheck($this->request->getPost("startup_exp"));
		$exit_exp  = $this->gfa_model->mysqlCheck($this->request->getPost("exit_exp"));
		$work_exp = $this->gfa_model->mysqlCheck($this->request->getPost("work_exp"));
	
		$time = date("Y-m-d h:i:s A",time());
		 
		
        $income_entries        = array();
        $number_of_entries          = sizeof($founderName);
        
        
        $dataInfo = array(); 
    // Loop through the files
    foreach ($files['file'] as $file) {
        
        // Check if the file is valid
        if ($file->isValid() && ! $file->hasMoved()) {
            
            // Generate a new filename
            $newName = $file->getRandomName();
            $dataInfo[] = $newName;
            // Move the file to the public/uploads directory
            $file->move('./uploads/files', $newName);
            
           
        }
    }
    
    for ($j = 0; $j < $number_of_entries; $j++)
        {
            if(!empty($founderName)){
                $new_entry          = array('coFounderName' => $this->gfa_model->mysqlCheck($founderName[$j]), 'coGender' => $this->gfa_model->mysqlCheck($founderGender[$j]), 'coDesignation' => $this->gfa_model->mysqlCheck($founderDesignation[$j]), 'coLinkedin' => $this->gfa_model->mysqlCheck($founderLinkedin[$j]), 'coAbout' => $this->gfa_model->mysqlCheck($founderAbout[$j]), 'coPhoto' => $dataInfo[$j]['file_name']
                , 'coStartupExp' => $startup_exp[$j], 'coExitExp' => $exit_exp[$j], 'coWorkExp' => $work_exp[$j]);
                array_push($income_entries, $new_entry);
			}
        }
        $coFounderInfo 	   = json_encode($income_entries);
        
        
        
       
     
     $data_startup	= 	array(

					'Contact_Email' 	=> $email,
					'Co_Founder_Info' 	=> $coFounderInfo
				
					
					);
					
					
	$data_startup_update	= 	array(

				
					'Co_Founder_Info' 	=> $coFounderInfo,
				
					
					);
    
    
                if($this->gfa_model->getStartUpDetails($email)[0]['Contact_Email']==""){
                    // if(empty($founderName)){
				   $this->gfa_model->insertStartupProfile($data_startup); 
                    // }else{
                        
                    //     echo '';
                    // }
				}else{
				    // if(empty($founderName)){
				   $this->gfa_model->saveStartupProfile($email,$data_startup_update); 
				    // }else{
                        
        //                 echo '';
        //             }
				}
		
			echo 'Founder/Cofounder Profile Saved!';	
				

	
	}

	public function investorProfilepro()

	{
		
		
		
		$email  = session()->get('email');
		$name = $this->gfa_model->mysqlCheck($this->request->getPost("firstName"))." ".$this->gfa_model->mysqlCheck($this->request->getPost("lastName"));
		$organization = $this->gfa_model->mysqlCheck($this->request->getPost("organization"));
		$phoneNumber = $this->gfa_model->mysqlCheck($this->request->getPost("phoneNumber"));
		$address = $this->gfa_model->mysqlCheck($this->request->getPost("address"));
		$website = $this->gfa_model->mysqlCheck($this->request->getPost("website"));
		$startup_country = $this->gfa_model->mysqlCheck($this->request->getPost("startup_country"));
		$industryArray = $this->gfa_model->mysqlCheck($this->request->getPost("industry"));
		$current_stage = $this->gfa_model->mysqlCheck($this->request->getPost("current_stage"));
		$Implementation_stage = $this->gfa_model->mysqlCheck($this->request->getPost("Implementation_stage"));
		$facebook = $this->gfa_model->mysqlCheck($this->request->getPost("facebook"));
		$linkedIn = $this->gfa_model->mysqlCheck($this->request->getPost("linkedIn"));
		$country = $this->gfa_model->mysqlCheck($this->request->getPost("country"));
		$state = $this->gfa_model->mysqlCheck($this->request->getPost("state"));
		$zipCode = $this->gfa_model->mysqlCheck($this->request->getPost("zipCode"));
		$year_founded = $this->gfa_model->mysqlCheck($this->request->getPost("year_founded"));
		$Hear_Us = $this->gfa_model->mysqlCheck($this->request->getPost("Hear_Us"));
		$OperatingRegions = $this->gfa_model->mysqlCheck($this->request->getPost("OperatingRegions"));
		$Min_Cheque =  $this->gfa_model->mysqlCheck($this->request->getPost("Min_Cheque"));
		$Max_Cheque =  $this->gfa_model->mysqlCheck($this->request->getPost("Max_Cheque"));
		$Networth =  $this->gfa_model->mysqlCheck($this->request->getPost("Networth"));
		$No_Startup =  $this->gfa_model->mysqlCheck($this->request->getPost("No_Startup"));
		$time = date("Y-m-d h:i:s A",time());
		$mentorshipArray = $this->request->getPost("mentorship");
        $mentorship = !empty($mentorshipArray) ? implode(",", $mentorshipArray) : null;
		$industry = !empty($industryArray) ? implode(",", $industryArray) : null;
        
        $investorFile = $this->admin_model->getInvestorsFileUploadedByEmail($email);
        
        $files = $this->request->getFiles();
   $dataInfo = array(); 
    // Loop through the files
    foreach ($files['file'] as $file) {
        
        // Check if the file is valid
        if ($file->isValid() && ! $file->hasMoved()) {
            
            // Generate a new filename
            $newName = $file->getRandomName();
            $dataInfo[] = $newName;
            // Move the file to the public/uploads directory
            $file->move('./uploads/files', $newName);
            
           
        }
    }
		
		if(empty($investorFile)){
		if(!empty($dataInfo[0]) || !empty($dataInfo[1]) || !empty($dataInfo[2])){
		  
		 $investorPhoto =  $dataInfo[0];
		 $investorIds =  $dataInfo[1];
		 $investorAddress =  $dataInfo[2];
		 
		 $data_file = array(
					
					'email' => $email,
					'photo' => $investorPhoto,
					'ids' => $investorIds,
					'address' => $investorAddress,
					'status' => 'pending',
					'time_Submit' => $time
				
					);
		 $this->gfa_model->insertInvestorFiles($data_file);	    
	
		}else{
		   echo '';
		}
		
		}else{
		   
		   if(!empty($dataInfo[0])){
		   $investorPhotoS =  $dataInfo[0]; 
		   }else{
		       
		      $investorPhotoS = $investorFile[0]['photo'];
		   }
		   
		   if(!empty($dataInfo[1])){
		   $investorIdsS =  $dataInfo[1]; 
		   }else{
		       
		      $investorIdsS = $investorFile[0]['ids'];
		   }
		   
		   if(!empty($dataInfo[2])){
		   $investorAddressS =  $dataInfo[2]; 
		   }else{
		       
		      $investorAddressS = $investorFile[0]['address'];
		   }
		   
		   $data_file_update = array(
					
					
					'photo' => $investorPhotoS,
					'ids' => $investorIdsS,
					'address' => $investorAddressS,
					'time_Submit' => $time
				
					);
		 
		   
		    $this->gfa_model->saveInvestorFile($email,$data_file_update);
		}
		
		
		
		            
					
				   
		        $data_investor	= 	array(

					'Investor_Name' 	=> $organization,
					'Contact_Name' 	=> $name,
					'Contact_Email' 	=> $email,
					'Phone' 	=> $phoneNumber,
					'Website' 	=> $website,
					'Address' 	=> $address,
					'Industry_Focus' 	=> $industry,
					'Investment_Stage_Focus' 	=> $current_stage,
					'Implementation_Stage_Focus' 	=> $Implementation_stage,
					'Facebook' 	=> $facebook,
					'LinkedIn' 	=> $linkedIn,
					'Country' 	=> $country,
					'City' 	=> $state,
					'Date_Founded' 	=> $year_founded,
					'Min_Cheque' 	=> $Min_Cheque,
					'Max_Cheque' 	=>   $Max_Cheque,
					'Networth' 	=>      $Networth,
					'No_Startup' 	=>   $No_Startup,
				    'Regional_focus' 	=> $OperatingRegions,
					'Hear_Us' 	=> $Hear_Us,
					'Mentorship' 	=> $mentorship
					
				
					);
				$data_investor_update	= 	array(

					'Investor_Name' 	=> $organization,
					'Contact_Name' 	=> $name,
					'Phone' 	=> $phoneNumber,
					'Website' 	=> $website,
					'Address' 	=> $address,
					'Industry_Focus' 	=> $industry,
					'Investment_Stage_Focus' 	=> $current_stage,
					'Implementation_Stage_Focus' 	=> $Implementation_stage,
					'Facebook' 	=> $facebook,
					'LinkedIn' 	=> $linkedIn,
					'Country' 	=> $country,
					'City' 	=> $state,
					'Date_Founded' 	=> $year_founded,
					'Min_Cheque' 	=> $Min_Cheque,
					'Max_Cheque' 	=>   $Max_Cheque,
					'Networth' 	=>      $Networth,
					'No_Startup' 	=>   $No_Startup,
				    'Regional_focus' 	=> $OperatingRegions,
					'Hear_Us' 	=> $Hear_Us,
					'Mentorship' 	=> $mentorship
				
					);
				
				if($this->gfa_model->getInvestorDetails($email)[0]['Contact_Email']==""){
				   $this->gfa_model->insertInvestorProfile($data_investor); 
				    
				}else{
				   $this->gfa_model->saveInvestorProfile($email,$data_investor_update); 
				}
				
				
				
			
  
	
	}

public function startupProfileproExt()

	{
	    	$email  = session()->get('email');
         if(($email == '')){ return redirect()->to(base_url('gfa/login')) ; }
		$organization = $this->gfa_model->mysqlCheck($this->request->getPost("organization"));
		$website = $this->gfa_model->mysqlCheck($this->request->getPost("website"));
		$startup_country = $this->gfa_model->mysqlCheck($this->request->getPost("startup_country"));
		$industryArray = $this->request->getPost("industry") ?? [];
		$current_stage = $this->gfa_model->mysqlCheck($this->request->getPost("current_stage"));
		$Implementation_stage = $this->gfa_model->mysqlCheck($this->request->getPost("Implementation_stage"));
		$fund_to_raise = $this->gfa_model->mysqlCheck($this->request->getPost("fund_to_raise"));
		$about = $this->gfa_model->mysqlCheck($this->request->getPost("about"));
		$year_founded = $this->gfa_model->mysqlCheck($this->request->getPost("year_founded"));
		$Revenue = $this->gfa_model->mysqlCheck($this->request->getPost("revenue"));
		$NoOfEmployees = $this->gfa_model->mysqlCheck($this->request->getPost("NoOfEmployees"));
		$linkedIn = $this->gfa_model->mysqlCheck($this->request->getPost("linkedIn"));
		$Trade_No = $this->gfa_model->mysqlCheck($this->request->getPost("Trade_No"));
		$Tax_No = $this->gfa_model->mysqlCheck($this->request->getPost("Tax_No"));
		$CNPS_No = $this->gfa_model->mysqlCheck($this->request->getPost("CNPS_No"));
		$youtube = $this->gfa_model->mysqlCheck($this->request->getPost("youtube"));
		$OperatingRegions = $this->gfa_model->mysqlCheck($this->request->getPost("OperatingRegions"));
		$time = date("Y-m-d h:i:s A",time());
		$mentorshipArray = $this->request->getPost("mentorship") ?? [];
        $mentorship = implode(",",$mentorshipArray);
        $industry = implode(",", $industryArray);

        $getfile = $this->gfa_model->mysqlCheck($this->request->getPost("getfile"));
		$files = $this->request->getFiles();
		$dataInfo = array(); 
		    // Loop through the files
    	foreach ($files['file'] as $file) {
        
        // Check if the file is valid
        if ($file->isValid() && ! $file->hasMoved()) {
            
            // Generate a new filename
            $newName = $file->getRandomName();
            $dataInfo[] = $newName;
            // Move the file to the public/uploads directory
            $file->move('./uploads/files', $newName);
            
           
        }
    }
    
		if($dataInfo[0] ==''){
		        
		    $Trade_File = $getfile[0];
		    
		}else{
		    $Trade_File  = $dataInfo[0];
		}
		if($dataInfo[1] ==''){
		        
		    $Tax_File = $getfile[1];
		    
		}else{
		    $Tax_File  = $dataInfo[1];
		}
		if($dataInfo[2] ==''){
		        
		    $CNPS_File = $getfile[2];
		    
		}else{
		    $CNPS_File  = $dataInfo[2];
		}
		        $data_startup	= 	array(

					'Startup_Company_Name' 	=> $organization,
					'Contact_Email' 	=> $email,
					'Website' 	=> $website,
					'CountryHQ' 	=> $startup_country,
					'PrimaryBusinessIndustry' 	=> $industry,
					'CurrentInvestmentStage' 	=> $current_stage,
					'Startup_Implementation_Stage' 	=> $Implementation_stage,
					'Next_Funding_Round_Target_Sought' 	=> $fund_to_raise,
					'Investment_History' 	=> $about,
					'Date_Founded' 	=> $year_founded,
					'NoOfEmployees' 	=> $NoOfEmployees,
					'Revenue' 	=> $Revenue,
					'mentorship' 	=> $mentorship,
					'LinkedIn' 	=> $linkedIn,
					'Youtube_Url' 	=> $youtube,
					'Trade_No' 	=> $Trade_No,
					'Trade_File' 	=> $Trade_File,
					'Tax_No' 	=> $Tax_No,
					'Tax_File' 	=> $Tax_File,
					'CNPS_No' 	=> $CNPS_No,
					'CNPS_File' 	=> $CNPS_File,
					'OperatingRegions' 	=> $OperatingRegions
					
				
					);
				$data_startup_update	= 	array(

					'Startup_Company_Name' 	=> $organization,
					'Website' 	=> $website,
					'CountryHQ' 	=> $startup_country,
					'PrimaryBusinessIndustry' 	=> $industry,
					'CurrentInvestmentStage' 	=> $current_stage,
					'Startup_Implementation_Stage' 	=> $Implementation_stage,
					'Next_Funding_Round_Target_Sought' 	=> $fund_to_raise,
					'Investment_History' 	=> $about,
					'Date_Founded' 	=> $year_founded,
					'NoOfEmployees' 	=> $NoOfEmployees,
					'Revenue' 	=> $Revenue,
					'mentorship' 	=> $mentorship,
					'LinkedIn' 	=> $linkedIn,
					'Youtube_Url' 	=> $youtube,
					'Trade_No' 	=> $Trade_No,
					'Trade_File' 	=> $Trade_File,
					'Tax_No' 	=> $Tax_No,
					'Tax_File' 	=> $Tax_File,
					'CNPS_No' 	=> $CNPS_No,
					'CNPS_File' 	=> $CNPS_File,
					'OperatingRegions' 	=> $OperatingRegions
				
					);
				
				if($this->gfa_model->getStartUpDetails($email)[0]['Contact_Email']==""){
				   $this->gfa_model->insertStartupProfile($data_startup); 
				}else{
				   $this->gfa_model->saveStartupProfile($email,$data_startup_update); 
				}
				
		
		$Startup_State = $this->gfa_model->mysqlCheck($this->request->getPost("Startup_State"));
		$Startup_Address = $this->gfa_model->mysqlCheck($this->request->getPost("Startup_Address"));
		$Amount_Raise  = $this->gfa_model->mysqlCheck($this->request->getPost("Amount_Raise"));
		$Monthly_Revenue  = $this->gfa_model->mysqlCheck($this->request->getPost("Monthly_Revenue"));
		$Minimum_Growth = $this->gfa_model->mysqlCheck($this->request->getPost("Minimum_Growth"));
		$Product = $this->gfa_model->mysqlCheck($this->request->getPost("Product"));
		$ScalingArray = $this->request->getPost("Scaling");
		if(!empty($ScalingArray)){
		$Scaling = implode(",",$ScalingArray);
		}else{
		 $Scaling ='';   
		}
		$Startup_Phone  = $this->gfa_model->mysqlCheck($this->request->getPost("Startup_Phone"));
		$Country_Incorporate = $this->gfa_model->mysqlCheck($this->request->getPost("Country_Incorporate"));
		$Valuation = $this->gfa_model->mysqlCheck($this->request->getPost("Valuation"));
		$Burn_Rate = $this->gfa_model->mysqlCheck($this->request->getPost("Burn_Rate"));
		$Unit_Econs = $this->gfa_model->mysqlCheck($this->request->getPost("Unit_Econs"));
		$Gross_Profit = $this->gfa_model->mysqlCheck($this->request->getPost("Gross_Profit"));
		$Social_Impact = $this->gfa_model->mysqlCheck($this->request->getPost("Social_Impact"));
		$Serial_Entrepreneur = $this->gfa_model->mysqlCheck($this->request->getPost("Serial_Entrepreneur"));
		$Funding_Type = $this->gfa_model->mysqlCheck($this->request->getPost("Funding_Type"));
		$Startup_Percent = $this->gfa_model->mysqlCheck($this->request->getPost("Startup_Percent"));
		$Startup_Type = $this->gfa_model->mysqlCheck($this->request->getPost("Startup_Type"));
		$Startup_Model = $this->gfa_model->mysqlCheck($this->request->getPost("Startup_Model"));
		$Startup_Core = $this->gfa_model->mysqlCheck($this->request->getPost("Startup_Core"));	
		$Startup_Level = $this->gfa_model->mysqlCheck($this->request->getPost("Startup_Level"));
		$Startup_Accelerator = $this->gfa_model->mysqlCheck($this->request->getPost("Startup_Accelerator"));
		$Startup_Partner = $this->gfa_model->mysqlCheck($this->request->getPost("Startup_Partner"));
		$Closest_Competitor = $this->gfa_model->mysqlCheck($this->request->getPost("Closest_Competitor"));
		$Solution_Corperate = $this->gfa_model->mysqlCheck($this->request->getPost("Solution_Corperate"));
		$Core_Interest_Corporate = $this->gfa_model->mysqlCheck($this->request->getPost("Core_Interest_Corporate"));
		$Corporate_Solution_Prox = $this->gfa_model->mysqlCheck($this->request->getPost("Corporate_Solution_Prox"));
		$Solution_Ownership = $this->gfa_model->mysqlCheck($this->request->getPost("Solution_Ownership"));
		$Level_Exp = $this->gfa_model->mysqlCheck($this->request->getPost("Level_Exp"));
		$Technical = $this->gfa_model->mysqlCheck($this->request->getPost("Technical"));
		$About_Company = $this->gfa_model->mysqlCheck($this->request->getPost("About_Company"));
		$Have_Pitchdeck = $this->gfa_model->mysqlCheck($this->request->getPost("Have_Pitchdeck"));
		$Incorporated = $this->gfa_model->mysqlCheck($this->request->getPost("Incorporated"));
		$Company_Aspire = $this->gfa_model->mysqlCheck($this->request->getPost("Company_Aspire"));
		
		$data_startup_ext	= 	array(
		            'Email' 	=> $email,
					'Startup_State' 	=> $Startup_State,
					'Startup_Address' 	=> $Startup_Address,
        			'Amount_Raise' 	=> $Amount_Raise,
					'Monthly_Revenue' 	=> $Monthly_Revenue,
					'Minimum_Growth' 	=> $Minimum_Growth,
					'Product' 	=> $Product,
					'Scaling' 	=> $Scaling,
					'Startup_Type' 	=> $Startup_Type,
					'Startup_Model' 	=> $Startup_Model,
					'Startup_Core' 	=> $Startup_Core,
					'Startup_Level' 	=> $Startup_Level,
					'Startup_Accelerator' 	=> $Startup_Accelerator,
					'Startup_Partner' 	=> $Startup_Partner,
					'Closest_Competitor' 	=> $Closest_Competitor,
					'Solution_Corperate' 	=> $Solution_Corperate,
					'Core_Interest_Corporate' 	=> $Core_Interest_Corporate,
					'Corporate_Solution_Prox' 	=> $Corporate_Solution_Prox,
					'Solution_Ownership' 	=> $Solution_Ownership,
					'Level_Exp' 	=> $Level_Exp,
					'Technical' 	=> $Technical,
					'Incorporated' 	=> $Incorporated,
					'About_Company' 	=> $About_Company,
					'Have_Pitchdeck' 	=> $Have_Pitchdeck,
					'Company_Aspire' 	=> $Company_Aspire,
					'Startup_Phone'  => $Startup_Phone,
            		'Country_Incorporate' => $Country_Incorporate,
            		'Valuation' => $Valuation,
            		'Burn_Rate' => $Burn_Rate,
            		'Unit_Econs' => $Unit_Econs,
            		'Gross_Profit' => $Gross_Profit,
            		'Social_Impact' => $Social_Impact,
            		'Serial_Entrepreneur' => $Serial_Entrepreneur,
            		'Funding_Type' => $Funding_Type,
            		'Startup_Percent' =>$Startup_Percent
					
					
				
					);
					
					$data_startup_update_ext	= 	array(
					'Startup_State' 	=> $Startup_State,
					'Startup_Address' 	=> $Startup_Address,
        			'Amount_Raise' 	=> $Amount_Raise,
					'Monthly_Revenue' 	=> $Monthly_Revenue,
					'Minimum_Growth' 	=> $Minimum_Growth,
					'Product' 	=> $Product,
					'Scaling' 	=> $Scaling,
					'Startup_Type' 	=> $Startup_Type,
					'Startup_Model' 	=> $Startup_Model,
					'Startup_Core' 	=> $Startup_Core,
					'Startup_Level' 	=> $Startup_Level,
					'Startup_Accelerator' 	=> $Startup_Accelerator,
					'Startup_Partner' 	=> $Startup_Partner,
					'Closest_Competitor' 	=> $Closest_Competitor,
					'Solution_Corperate' 	=> $Solution_Corperate,
					'Core_Interest_Corporate' 	=> $Core_Interest_Corporate,
					'Corporate_Solution_Prox' 	=> $Corporate_Solution_Prox,
					'Solution_Ownership' 	=> $Solution_Ownership,
					'Level_Exp' 	=> $Level_Exp,
					'Technical' 	=> $Technical,
					'Incorporated' 	=> $Incorporated,
					'About_Company' 	=> $About_Company,
					'Have_Pitchdeck' 	=> $Have_Pitchdeck,
					'Company_Aspire' 	=> $Company_Aspire,
					'Startup_Phone'  => $Startup_Phone,
            		'Country_Incorporate' => $Country_Incorporate,
            		'Valuation' => $Valuation,
            		'Burn_Rate' => $Burn_Rate,
            		'Unit_Econs' => $Unit_Econs,
            		'Gross_Profit' => $Gross_Profit,
            		'Social_Impact' => $Social_Impact,
            		'Serial_Entrepreneur' => $Serial_Entrepreneur,
            		'Funding_Type' => $Funding_Type,
            		'Startup_Percent' =>$Startup_Percent
					
				
					);
					
					if($this->gfa_model->getStartUpDetailsExt($email)[0]['Email']==""){
				   $this->gfa_model->insertStartupProfileExt($data_startup_ext); 
				}else{
				   $this->gfa_model->saveStartupProfileExt($email,$data_startup_update_ext); 
				}
		
			
  
	
	}

public function startupProfilepro()

    {
        $email  = session()->get('email') ;
        if(($email == '')){ return redirect()->to(base_url('gfa/login')); }

        //$email = $this->encrypt->decode($this->session->userdata('email')) ;
        $name = $this->gfa_model->mysqlCheck($this->request->getPost("firstName"))." ".$this->gfa_model->mysqlCheck($this->request->getPost("lastName"));
        $organization = $this->gfa_model->mysqlCheck($this->request->getPost("organization"));
        $phoneNumber = $this->gfa_model->mysqlCheck($this->request->getPost("phoneNumber"));
        $address = $this->gfa_model->mysqlCheck($this->request->getPost("address"));
        $website = $this->gfa_model->mysqlCheck($this->request->getPost("website"));
        $startup_country = $this->gfa_model->mysqlCheck($this->request->getPost("startup_country"));
        $industryArray = $this->request->getPost("industry");
        $current_stage = $this->gfa_model->mysqlCheck($this->request->getPost("current_stage"));
        $Implementation_stage = $this->gfa_model->mysqlCheck($this->request->getPost("Implementation_stage"));
        $fund_to_raise = $this->gfa_model->mysqlCheck($this->request->getPost("fund_to_raise"));
        $about = $this->gfa_model->mysqlCheck($this->request->getPost("about"));
        $facebook = $this->gfa_model->mysqlCheck($this->request->getPost("facebook"));
        $linkedIn = $this->gfa_model->mysqlCheck($this->request->getPost("linkedIn"));
        $country = $this->gfa_model->mysqlCheck($this->request->getPost("country"));
        $state = $this->gfa_model->mysqlCheck($this->request->getPost("state"));
        $zipCode = $this->gfa_model->mysqlCheck($this->request->getPost("zipCode"));
        $year_founded = $this->gfa_model->mysqlCheck($this->request->getPost("year_founded"));
        $Revenue = $this->gfa_model->mysqlCheck($this->request->getPost("revenue"));
        $NoOfEmployees = $this->gfa_model->mysqlCheck($this->request->getPost("NoOfEmployees"));
        $Hear_Us = $this->gfa_model->mysqlCheck($this->request->getPost("Hear_Us"));
        $OperatingRegions = $this->gfa_model->mysqlCheck($this->request->getPost("OperatingRegions"));
        $time = date("Y-m-d h:i:s A",time());
        $mentorshipArray = $this->request->getPost("mentorship");
        $mentorship = implode(",",$mentorshipArray);
        $industry = implode(",", $industryArray);
        
                $data_startup   =   array(

                    'Startup_Company_Name'  => $organization,
                    'Primary_Contact_Name'  => $name,
                    'Contact_Email'     => $email,
                    'Phones'    => $phoneNumber,
                    'Website'   => $website,
                    'Address'   => $address,
                    'CountryHQ'     => $startup_country,
                    'PrimaryBusinessIndustry'   => $industry,
                    'CurrentInvestmentStage'    => $current_stage,
                    'Startup_Implementation_Stage'  => $Implementation_stage,
                    'Next_Funding_Round_Target_Sought'  => $fund_to_raise,
                    'Investment_History'    => $about,
                    'Facebook'  => $facebook,
                    'LinkedIn'  => $linkedIn,
                    'Country'   => $country,
                    'State'     => $state,
                    'ZipCode'   => $zipCode,
                    'Date_Founded'  => $year_founded,
                    'NoOfEmployees'     => $NoOfEmployees,
                    'OperatingRegions'  => $OperatingRegions,
                    'Revenue'   => $Revenue,
                    'Hear_Us'   => $Hear_Us,
                    'mentorship'    => $mentorship
                    
                
                    );
                $data_startup_update    =   array(

                    'Startup_Company_Name'  => $organization,
                    'Primary_Contact_Name'  => $name,
                    'Phones'    => $phoneNumber,
                    'Website'   => $website,
                    'Address'   => $address,
                    'CountryHQ'     => $startup_country,
                    'PrimaryBusinessIndustry'   => $industry,
                    'CurrentInvestmentStage'    => $current_stage,
                    'Startup_Implementation_Stage'  => $Implementation_stage,
                    'Next_Funding_Round_Target_Sought'  => $fund_to_raise,
                    'Investment_History'    => $about,
                    'Facebook'  => $facebook,
                    'LinkedIn'  => $linkedIn,
                    'Country'   => $country,
                    'State'     => $state,
                    'ZipCode'   => $zipCode,
                    'Date_Founded'  => $year_founded,
                    'NoOfEmployees'     => $NoOfEmployees,
                    'OperatingRegions'  => $OperatingRegions,
                    'Revenue'   => $Revenue,
                    'Hear_Us'   => $Hear_Us,
                    'mentorship'    => $mentorship
                
                    );
                
                if($this->gfa_model->getStartUpDetails($email)[0]['Contact_Email']==""){
                   $this->gfa_model->insertStartupProfile($data_startup); 
                }else{
                   $this->gfa_model->saveStartupProfile($email,$data_startup_update); 
                }
                
                
                
            
  
    
    }

        public function startupProfileproDemo()

    {
        
        $email  = session()->get('email') ;
        if(($email == '')){ return redirect()->to(base_url('gfa/login')); }
        $name = $this->gfa_model->mysqlCheck($this->request->getPost("firstName"))." ".$this->gfa_model->mysqlCheck($this->request->getPost("lastName"));
        // $organization = $this->gfa_model->mysqlCheck($this->request->getPost("organization"));
        $phoneNumber = $this->gfa_model->mysqlCheck($this->request->getPost("phoneNumber"));
        $gender = $this->gfa_model->mysqlCheck($this->request->getPost("gender"));
        $personal_linkedIn = $this->gfa_model->mysqlCheck($this->request->getPost("personal_linkedIn"));
        $about_me = $this->gfa_model->mysqlCheck($this->request->getPost("about_me"));
        $facebook = $this->gfa_model->mysqlCheck($this->request->getPost("facebook"));
        //$linkedIn = $this->gfa_model->mysqlCheck($this->request->getPost("personal_linkedIn"));
        $country = $this->gfa_model->mysqlCheck($this->request->getPost("country"));
        $state = $this->gfa_model->mysqlCheck($this->request->getPost("state"));
        $zipCode = $this->gfa_model->mysqlCheck($this->request->getPost("zipCode"));
        $personal_address = $this->gfa_model->mysqlCheck($this->request->getPost("personal_address"));
        $Hear_Us = $this->gfa_model->mysqlCheck($this->request->getPost("Hear_Us"));
    
        $time = date("Y-m-d h:i:s A",time());
        
        
                $data_startup   =   array(

                    
                    'Primary_Contact_Name'  => $name,
                    'Contact_Email'     => $email,
                    'Phones'    => $phoneNumber,
                    'Address'   => $personal_address,
                    'Facebook'  => $facebook,
                    'Personal_Linkedin'     => $personal_linkedIn,
                    'Country'   => $country,
                    'State'     => $state,
                    'ZipCode'   => $zipCode,
                    'Gender'    => $gender,
                    'About_Me'  => $about_me,
                    'Personal_Address'  => $personal_address,
                    'Hear_Us'   => $Hear_Us,
                    
            
                    );
                $data_startup_update = [
                'Primary_Contact_Name' => $name,
                'Phones' => $phoneNumber,
                'Address' => $personal_address,
                'Facebook' => $facebook,
                'Personal_Linkedin' => $personal_linkedIn,
                'Country' => $country,
                'State' => $state,
                'ZipCode' => $zipCode,
                'Gender' => $gender,
                'About_Me' => $about_me,
                'Personal_Address' => $personal_address,
                'Hear_Us' => $Hear_Us,
            ];

            $startupDetails = $this->gfa_model->getStartUpDetails($email);
            if (empty($startupDetails[0]['Contact_Email'])) {
                $this->gfa_model->insertStartupProfile($data_startup);
            } else {
                $this->gfa_model->saveStartupProfile($email, $data_startup_update);
            }


    }

    public function updatePerksRedeempro(){
	$id = $this->gfa_model->mysqlCheck($this->request->getPost("id"));
	$more_info = $this->request->getPost("textData");
	$status = $this->request->getPost("status");
	$time 	=  date("Y-m-d h:i:s A",time());
	$data = array(
		
		'status' => $status,
		'more_info' => $more_info,
		'time_submit' => $time
	
		);
		
		$this->gfa_model->updatePerksRedeem($data,$id); 

}

public function updateEventpostpro_ext(){
	$ref_id = $this->gfa_model->mysqlCheck($this->request->getPost("ref_id"));
	$textData = $this->request->getPost("textData");
	$time 	=  date("Y-m-d h:i:s A",time());
	$data = array(
					
		'textData' => $textData,
		'time_submit' => $time
	
		);
		
		$this->gfa_model->updatePostData($data,$ref_id); 

}
public function Eventpostpro_ext(){
	$ref_id = $this->gfa_model->mysqlCheck($this->request->getPost("ref_id"));
	$textData = $this->request->getPost("textData");
	$time 	=  date("Y-m-d h:i:s A",time());
	$data = array(
					
		'ref_id' => $ref_id,
		'textData' => $textData,
		'time_submit' => $time
	
		);
		
		$this->gfa_model->insertPostData($data); 

}


public function Perkspostpro_ext(){
	$ref_id = $this->gfa_model->mysqlCheck($this->request->getPost("ref_id"));
	$textData = $this->request->getPost("textData");
	$time 	=  date("Y-m-d h:i:s A",time());
	$data = array(
					
		'ref_id' => $ref_id,
		'textData' => $textData,
		'time_submit' => $time
	
		);
		
		$this->gfa_model->insertPerksData($data); 

}

public function updatePerkspostpro(){

	//echo library('upload');
   
   $sub_type  =  $this->request->getPost("sub_type");
   $company_name	= $this->gfa_model->mysqlCheck($this->request->getPost("company_name"));
   $categoryArray	= $this->gfa_model->mysqlCheck($this->request->getPost("category"));
   $id  =  $this->request->getPost("id");
   $title  =  str_replace("\\","'",$this->gfa_model->mysqlCheck($this->request->getPost("title")));
   $tags	= $this->gfa_model->mysqlCheck($this->request->getPost("tags"));
   $note	= $this->gfa_model->mysqlCheck($this->request->getPost("note"));
   $perks_type	= $this->gfa_model->mysqlCheck($this->request->getPost("perks_type"));
   $value_1	= $this->gfa_model->mysqlCheck($this->request->getPost("value_1"));
   $value_2	= $this->gfa_model->mysqlCheck($this->request->getPost("value_2"));
   $getfile	= $this->gfa_model->mysqlCheck($this->request->getPost("getfile"));
   $qty	= $this->gfa_model->mysqlCheck($this->request->getPost("qty"));
   $time 	=  date("Y-m-d h:i:s A",time());
   $email = session()->get('email') ;
   $status=$this->gfa_model->mysqlCheck($this->request->getPost("status"));
   $rating=$this->gfa_model->mysqlCheck($this->request->getPost("rating"));	
   $aff_link=$this->gfa_model->mysqlCheck($this->request->getPost("aff_link"));
   $start_date	= $this->gfa_model->mysqlCheck($this->request->getPost("start_date"));
   $category = !empty($categoryArray) ? implode(",", $categoryArray) : null;	
   
   $ref_id = $this->gfa_model->mysqlCheck($this->request->getPost("ref_id"));
   $files = $this->request->getFiles();
   $dataInfo = array(); 
    // Loop through the files
    foreach ($files['file'] as $file) {
        
        // Check if the file is valid
        if ($file->isValid() && ! $file->hasMoved()) {
            
            // Generate a new filename
            $newName = $file->getRandomName();
            $dataInfo[] = $newName;
            // Move the file to the public/uploads directory
            $file->move('./uploads/files', $newName);
            
           
        }
    }

   if($dataInfo[0] ==''){
        
	$coverPics = $getfile[0];
}else{
	$coverPics  = $dataInfo[0];
}

   $data_story = array(
				   
				   'sub_type' => $sub_type,
				   'company_name' => $company_name,
				   'title' => $title,
				   'logo' => $coverPics,
				   'status' => $status,
				   'tags' => $tags,
				   'start_date' => $start_date,
				   'note' => $note,
				   'value_1' => $value_1,
				   'qty' => $qty,
				   'rating' => $rating,
				   'aff_link' => $aff_link,
				   'category' => $category,
				   'ref_id' => $ref_id,
				   'value_2' => $value_2,
				   'perks_type' => $perks_type, 
				   'time_submit' => $time
			   
				   );
				   
				   $this->gfa_model->updatePerks($data_story,$id); 
				   echo "Perks Update Successfully";

}


public function Perkspostpro(){
    
    //echo library('upload');
   $sub_type  =  $this->request->getPost("sub_type");
   $company_name	= $this->gfa_model->mysqlCheck($this->request->getPost("company_name"));
   $categoryArray	= $this->gfa_model->mysqlCheck($this->request->getPost("category"));
   $title  =  $this->gfa_model->mysqlCheck($this->request->getPost("title"));
   $tags	= $this->gfa_model->mysqlCheck($this->request->getPost("tags"));
   $note	= $this->gfa_model->mysqlCheck($this->request->getPost("note"));
   $value_1	= $this->gfa_model->mysqlCheck($this->request->getPost("value_1"));
   $value_2	= $this->gfa_model->mysqlCheck($this->request->getPost("value_2"));
   $perks_type	= $this->gfa_model->mysqlCheck($this->request->getPost("perks_type"));
   $qty	= $this->gfa_model->mysqlCheck($this->request->getPost("qty"));
   $time 	=  date("Y-m-d h:i:s A",time());
   $email = session()->get('email') ;
   $status=$this->gfa_model->mysqlCheck($this->request->getPost("status"));
   $rating=$this->gfa_model->mysqlCheck($this->request->getPost("rating"));	
   $aff_link=$this->gfa_model->mysqlCheck($this->request->getPost("aff_link"));
   $start_date	= $this->gfa_model->mysqlCheck($this->request->getPost("start_date"));
   $category = !empty($categoryArray) ? implode(",", $categoryArray) : null;	
   
   $ref_id = $this->gfa_model->mysqlCheck($this->request->getPost("ref_id"));
   $files = $this->request->getFiles();
   $dataInfo = array(); 
    // Loop through the files
    foreach ($files['file'] as $file) {
        
        // Check if the file is valid
        if ($file->isValid() && ! $file->hasMoved()) {
            
            // Generate a new filename
            $newName = $file->getRandomName();
            $dataInfo[] = $newName;
            // Move the file to the public/uploads directory
            $file->move('./uploads/files', $newName);
            
           
        }
    }

   $data_story = array(
				   
				   'sub_type' => $sub_type,
				   'company_name' => $company_name,
				   'title' => $title,
				   'logo' => $dataInfo[0],
				   'status' => $status,
				   'email' => $email,
				   'tags' => $tags,
				   'start_date' => $start_date,
				   'note' => $note,
				   'value_1' => $value_1,
				   'qty' => $qty,
				   'rating' => $rating,
				   'aff_link' => $aff_link,
				   'category' => $category,
				   'ref_id' => $ref_id, 
				   'value_2' => $value_2,
				   'perks_type' => $perks_type,
				   'time_submit' => $time
			   
				   );
				   
				   $this->gfa_model->insertPerks($data_story); 
				   echo "Perks Submitted Successfully";

}
    
    public function updateEventpostpro(){
    
    
    $id  =  $this->request->getPost("id");
   $title  =  str_replace("\\","'",$this->gfa_model->mysqlCheck($this->request->getPost("title")));
   $event   = $this->gfa_model->mysqlCheck($this->request->getPost("event"));
   $videourl    = $this->gfa_model->mysqlCheck($this->request->getPost("videourl"));
   $venue  =  $this->gfa_model->mysqlCheck($this->request->getPost("venue"));
   $start_date  = $this->gfa_model->mysqlCheck($this->request->getPost("start_date"));
   $end_date    = $this->gfa_model->mysqlCheck($this->request->getPost("end_date"));
   $ticket  = $this->gfa_model->mysqlCheck($this->request->getPost("ticket"));
   $currency    = $this->gfa_model->mysqlCheck($this->request->getPost("currency"));
   $time    =  date("Y-m-d h:i:s A",time());
   $email = session()->get('email') ;
   $event_type=$this->gfa_model->mysqlCheck($this->request->getPost("event_type"));
   $paymentCat=$this->gfa_model->mysqlCheck($this->request->getPost("paymentCat")); 
   $paymentTag=$this->gfa_model->mysqlCheck($this->request->getPost("paymentTag"));
   $amount  = $this->gfa_model->mysqlCheck($this->request->getPost("amount"));
   $paymentInfo=$this->gfa_model->mysqlCheck($this->request->getPost("paymentInfo"));   
   $speakerName=$this->gfa_model->mysqlCheck($this->request->getPost("speakerName"));   
   $speakerDesignation=$this->gfa_model->mysqlCheck($this->request->getPost("speakerDesignation")); 
   $speakerLinkedin=$this->gfa_model->mysqlCheck($this->request->getPost("speakerLinkedin"));   
   $speakerAbout=$this->gfa_model->mysqlCheck($this->request->getPost("speakerAbout")); 
   $meeting_link=$this->gfa_model->mysqlCheck($this->request->getPost("meeting_link"));
   $ref_id = $this->gfa_model->mysqlCheck($this->request->getPost("ref_id"));
    //==================Event Url =================================
    $search_array = array("   ", "  "," ","'");
    $replace_array = array("-","-","-", "");
    $event_url = str_replace($search_array, $replace_array, $title);
//================================================================= 
   $getfile  =  $this->request->getPost("getfile");
   $files = $this->request->getFiles();
   $dataInfo = array(); 
    // Loop through the files
    foreach ($files['file'] as $file) {
        
        // Check if the file is valid
        if ($file->isValid() && ! $file->hasMoved()) {
            
            // Generate a new filename
            $newName = $file->getRandomName();
            $dataInfo[] = $newName;
            // Move the file to the public/uploads directory
            $file->move('./uploads/files', $newName);
            
           
        }
    }


   if($dataInfo[0] ==''){
        
    $coverPics = $getfile[0];
}else{
    $coverPics  = $dataInfo[0];
}

$speckerPics = sizeof($getfile);
$speakerPhoto  = array();
for ($p = 1; $p < $speckerPics; $p++){
    if($getfile[$p] !=''){
        
        $speakerPhoto[$p]  = $getfile[$p];
    }else{
        $speakerPhoto[$p]  = $dataInfo[$p];
    }
    
}

   $payment_entries        = array();
       $payment_of_entries          = sizeof($paymentCat);
       
   for ($j = 0; $j < $payment_of_entries; $j++)
       {
           if(!empty($paymentCat)){
               $payment_entry          = array('paymentCat' => $this->gfa_model->mysqlCheck($paymentCat[$j]), 'paymentTag' => $this->gfa_model->mysqlCheck($paymentTag[$j]), 'amount' => $this->gfa_model->mysqlCheck($amount[$j]) , 'paymentInfo' => $paymentInfo[$j]);
               array_push($payment_entries, $payment_entry);
           }
       }
       $payment_cat    = json_encode($payment_entries);
   
       $speaker_entries        = array();
       $speaker_of_entries          = sizeof($speakerName);
       $k = 1;
   for ($i = 0; $i < $speaker_of_entries; $i++)
       {
           if(!empty($speakerName)){
               $speaker_entry          = array('speakerName' => $this->gfa_model->mysqlCheck($speakerName[$i]), 'speakerDesignation' => $this->gfa_model->mysqlCheck($speakerDesignation[$i]), 'speakerLinkedin' => $this->gfa_model->mysqlCheck($speakerLinkedin[$i]) , 'speakerAbout' => $speakerAbout[$i], 'speakerPhoto' => $speakerPhoto[$k++]);
               array_push($speaker_entries, $speaker_entry);
           }
       }
       $speakers       = json_encode($speaker_entries);
   $data_story = array(
                   
                   'title' => $title,
                   'event' => $event,
                   'videourl' => $videourl,
                   'picture' => $coverPics,
                   'email' => $email,
                   'venue' => $venue,
                   'start_date' => $start_date,
                   'end_date' => $end_date,
                   'ticket' => $ticket,
                   'currency' => $currency,
                   'event_type' => $event_type,
                   'speakers' => $speakers,
                   'payment_cat' => $payment_cat,
                   'meeting_link' => $meeting_link,
                   'event_url' => $event_url,
                   'time_Submit' => $time
               
                   );
                   
                   $this->gfa_model->updateEvent($data_story,$id); 
                   echo lang("translation.Event Updated Successfully");

}
public function Eventpostpro(){
    

    $title  =  $this->request->getPost("title");
    $event  = $this->gfa_model->mysqlCheck($this->request->getPost("event"));
    $videourl   = $this->gfa_model->mysqlCheck($this->request->getPost("videourl"));
    $venue  =  $this->gfa_model->mysqlCheck($this->request->getPost("venue"));
    $start_date = $this->gfa_model->mysqlCheck($this->request->getPost("start_date"));
    $end_date   = $this->gfa_model->mysqlCheck($this->request->getPost("end_date"));
    $ticket = $this->gfa_model->mysqlCheck($this->request->getPost("ticket"));
    $currency   = $this->gfa_model->mysqlCheck($this->request->getPost("currency"));
    $time   =  date("Y-m-d h:i:s A",time());
    $email = session()->get('email') ;
    $event_type=$this->gfa_model->mysqlCheck($this->request->getPost("event_type"));
    $paymentCat=$this->gfa_model->mysqlCheck($this->request->getPost("paymentCat"));    
    $paymentTag=$this->gfa_model->mysqlCheck($this->request->getPost("paymentTag"));
    $amount = $this->gfa_model->mysqlCheck($this->request->getPost("amount"));
    $paymentInfo=$this->gfa_model->mysqlCheck($this->request->getPost("paymentInfo"));  
    $speakerName=$this->gfa_model->mysqlCheck($this->request->getPost("speakerName"));  
    $speakerDesignation=$this->gfa_model->mysqlCheck($this->request->getPost("speakerDesignation"));    
    $speakerLinkedin=$this->gfa_model->mysqlCheck($this->request->getPost("speakerLinkedin"));  
    $speakerAbout=$this->gfa_model->mysqlCheck($this->request->getPost("speakerAbout"));    
    $meeting_link=$this->gfa_model->mysqlCheck($this->request->getPost("meeting_link"));
    $ref_id = $this->gfa_model->mysqlCheck($this->request->getPost("ref_id"));
    //==================Event Url =================================
    $search_array = array("   ", "  "," ","'");
    $replace_array = array("-","-","-", "");
    $event_url = str_replace($search_array, $replace_array, $title);
//================================================================= 
    $files = $this->request->getFiles();
    $dataInfo = array(); 
    // Loop through the files
    foreach ($files['file'] as $file) {
        
        // Check if the file is valid
        if ($file->isValid() && ! $file->hasMoved()) {
            
            // Generate a new filename
            $newName = $file->getRandomName();
            $dataInfo[] = $newName;
            // Move the file to the public/uploads directory
            $file->move('./uploads/files', $newName);
            
           
        }
    }


    $payment_entries        = array();
        $payment_of_entries          = sizeof($paymentCat);
        
    for ($j = 0; $j < $payment_of_entries; $j++)
        {
            if(!empty($paymentCat)){
                $payment_entry          = array('paymentCat' => $this->gfa_model->mysqlCheck($paymentCat[$j]), 'paymentTag' => $this->gfa_model->mysqlCheck($paymentTag[$j]), 'amount' => $this->gfa_model->mysqlCheck($amount[$j]) , 'paymentInfo' => $paymentInfo[$j]);
                array_push($payment_entries, $payment_entry);
            }
        }
        $payment_cat       = json_encode($payment_entries);
    
        $speaker_entries        = array();
        $speaker_of_entries          = sizeof($speakerName);
        $k = 1;
    for ($i = 0; $i < $speaker_of_entries; $i++)
        {
            if(!empty($speakerName)){
                $speaker_entry          = array('speakerName' => $this->gfa_model->mysqlCheck($speakerName[$i]), 'speakerDesignation' => $this->gfa_model->mysqlCheck($speakerDesignation[$i]), 'speakerLinkedin' => $this->gfa_model->mysqlCheck($speakerLinkedin[$i]) , 'speakerAbout' => $speakerAbout[$i], 'speakerPhoto' => $dataInfo[$k++]);
                array_push($speaker_entries, $speaker_entry);
            }
        }
        $speakers      = json_encode($speaker_entries);
    $data_story = array(
                    
                    'title' => $title,
                    'event' => $event,
                    'videourl' => $videourl,
                    'picture' => $dataInfo[0],
                    'status' => 'pending',
                    'email' => $email,
                    'venue' => $venue,
                    'start_date' => $start_date,
                    'end_date' => $end_date,
                    'ticket' => $ticket,
                    'currency' => $currency,
                    'event_type' => $event_type,
                    'speakers' => $speakers,
                    'payment_cat' => $payment_cat,
                    'meeting_link' => $meeting_link,
                    'ref_id' => $ref_id, 
                    'event_url' => $event_url,
                    'time_submit' => $time
                
                    );
                    
                    $this->gfa_model->insertEvent($data_story); 
                    echo lang("translation.Event Submitted Successfully, Please wait for it to be approved");

}

public function sendMail($recipient_email, $message, $subject)
{
       

$url = 'https://getfundedafrica.com/email/gfajson.php';

		$data = [
		    "recipient_email" => "{$recipient_email}",
		    "message" => "{$message}",
		    "subject" => "{$subject}",
		    "fromName" => "GFA TECH"
		];

		$ch = curl_init($url);

		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
		curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));

		$response = curl_exec($ch);
		$http_status = curl_getinfo($ch, CURLINFO_HTTP_CODE);

		curl_close($ch);
}

public function sendMailUnleash($recipient_email, $message, $subject)
{
       

$url = 'https://getfundedafrica.com/email/sender.php';



// Data to be sent in the POST request
// $recipient_email, $message,$subject,$fromName
$postData = array(
'recipient_email' => "{$recipient_email}",
'message' => "{$message}",
'subject' => "{$subject}",
'fromName' => 'Unleashified Bookkepping'
);

// Initialize cURL session
$ch = curl_init($url);

// Set cURL options
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // Return the response as a string
curl_setopt($ch, CURLOPT_POST, true); // Set as POST request
curl_setopt($ch, CURLOPT_POSTFIELDS, $postData); // Set POST data

// Include SSL options
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true); // Verify the peer's SSL certificate
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2); // Check that the common name exists and matches the hostname

// Execute cURL session and fetch the result
$response = curl_exec($ch);

// Check for cURL errors
if (curl_errno($ch)) {
echo 'cURL error: ' . curl_error($ch);
}

// Close cURL session
curl_close($ch);

// // Display the response
echo "";
}
    public function subscribe()

    {
        
      
        $title['page_title'] = "Subscribe ";
        $email  = session()->get('email') ;
        if(($email == '')){ return redirect()->to(base_url('gfa/login')); }  
        $data['email'] =  $email;
        $data['login_type'] = session()->get('login_type') ;
        $data['account_type'] = $account_type = session()->get('account_type') ;
        $data['admin_access'] = "";


        echo view('header_new',$title);
        echo view('nav_new',$data);
        echo view('menu_new',$data);
        echo view('pricing');
        echo view('footer_new',$data);

        

    }
    
        public function subscribedemo()

    {
        
      
        $title['page_title'] = "Subscribe ";
        
        $email  = session()->get('email') ;
        if(($email == '')){ return redirect()->to(base_url('gfa/login')); }  
        $data['email'] =  $email;
        $data['login_type'] = session()->get('login_type') ;
        $data['account_type'] = $account_type = session()->get('account_type') ;
        $data['admin_access'] = "";

        echo view('header_new',$title);
        echo view('nav_new',$data);
        echo view('menu_new',$data);
        echo view('pricingdemo');
        echo view('footer_new',$data);

        

    }
    
        public function billing()

    {
        
      
        $title['page_title'] = "Billing ";
        
        $email  = session()->get('email') ;
        if(($email == '')){ return redirect()->to(base_url('gfa/login')); }  
        $data['email'] =  $email;
        $data['login_type'] = session()->get('login_type') ;
        $data['account_type'] = $account_type = session()->get('account_type') ;
        $data['admin_access'] = "";

        echo view('header_new',$title);
        echo view('nav_new',$data);
        echo view('menu_new',$data);
        echo view('billing',$data);
        echo view('footer_new',$data);

        

    }

    public function perksRedeem()

    {
    
        $email  = session()->get('email') ;
        $perks_id = $this->request->getPost("id"); 
        $perks_no = $this->request->getPost("getCounter");
        $perks_info = $this->gfa_model->getPerksByIdDetails($perks_id );
        $Status = 'pending';
        $Time_submit = date("Y-m-d h:i:s A",time());
        $data_credit    =   array(

                    'email'     => $Email,
                    'perks_id'  => $perks_id,
                    'perks_no'  => $perks_no,
                    'status'    => $Status,
                    'time_submit'   => $Time_submit
                    
                    );
                    $this->gfa_model->insertPerkRedeem($data_credit); 
            $profile = $this->gfa_model->getStartUpDetails($Email); 
            $message = "<a href='https://nora.GetFundedAfrica.ci'><img src='https://nora.GetFundedAfrica.ci/images/logo-1.png'></a> <br><br>";
            
            $message .= "<p>Name: ".$profile[0]['Primary_Contact_Name']."</p>";
            $message .= "<p>Email: ".$Email."</p>";
            $message .= "<p>Perks: ".$perks_info[0]['title']."</p>";
            $message .= "<p>Qty: ".$perks_no."</p>";
            $message .= "<p>Date of Request: ".$Time_submit."</p>";

            $subject = "Onboarding Perks Request";  
                            
            $this->sendMail('info@getfundedafrica.com', $message,$subject);    
            //$this->sendMail('dashotemitope@gmail.com', $message,$subject);    
            if($perks_info[0]['aff_link'] !=''){
                echo $perks_info[0]['aff_link'] ;
            }else{
                echo 1;
            }
    }
    

    public function promo_checkout()

    {
        
      
        $title['page_title'] = "Promo Checkout ";
        
        $email  = session()->get('email') ;
        if(($email == '')){ return redirect()->to(base_url('gfa/login')); }  
        $data['email'] =  $email;
        $data['login_type'] = session()->get('login_type') ;
        $data['account_type'] = $account_type = session()->get('account_type') ;
        $data['admin_access'] = "";

        echo view('header_new',$title);
        // echo view('nav_new',$data);
        // echo view('menu_new',$data);
        echo view('promo_checkout');
        echo view('footer_new',$data);

        

    }
    
    public function checkout()

    {
        
      
        $title['page_title'] = "Checkout ";
        
        $email  = session()->get('email') ;
        
        
        
        if(($email == '')){ return redirect()->to(base_url('gfa/login')); }  
        $data['email'] =  $email;
        $data['login_type'] = session()->get('login_type') ;
        $data['account_type'] = $account_type = session()->get('account_type') ;
        $data['admin_access'] = "";

        echo view('header_new',$title);
        echo view('nav_new',$data);
        echo view('menu_new',$data);
        echo view('checkout');
        echo view('footer_new',$data);

        

    }
    
        public function checkoutdemo()

    {
        
      
        $title['page_title'] = "Checkout ";
        $title['page_title'] = "Subscribe ";
        $email  = session()->get('email') ;
        if(($email == '')){ return redirect()->to(base_url('gfa/login')); }  
        $data['email'] =  $email;
        $data['login_type'] = session()->get('login_type') ;
        $data['account_type'] = $account_type = session()->get('account_type') ;
        $data['admin_access'] = "";

        echo view('header_new',$title);
        echo view('nav_new',$data);
        echo view('menu_new',$data);
        echo view('checkoutdemo');
        echo view('footer_new',$data);

        

    }

    public function edit_perks_category($id='')

	{
		$title['page_title'] = "Update Perks - GetFundedAfrica";
		$data['id'] = $id;
		$data['login_type'] = session()->get('login_type');
		echo view('head_doc',$title);
        echo view('nav_new',$title);
        echo view('menu_new',$data);
		echo view('edit_perks_category',$data);
		echo view('footer_doc');

	}

	public function edit_perks($id='')

	{
		$title['page_title'] = "Update Perks - GetFundedAfrica";
		$data['id'] = $id;
		$data['login_type'] = session()->get('login_type');
		echo view('head_doc',$title);
        echo view('nav_new',$title);
        echo view('menu_new',$data);
		echo view('edit_perks',$data);
		echo view('footer_doc');

	}

	public function manage_perks_category()

	{
		$email  = session()->get('email') ;
        if(($email == '')){ return redirect()->to(base_url('admin/login')); }	
		$title['page_title'] = "Manage Perks Category- GetFundedAfrica";
		$data['login_type'] = session()->get('login_type');
		echo view('header_new',$title);
        echo view('nav_new',$title);
        echo view('menu_new',$data);
		echo view('manage_perks_category');
		echo view('footer_new');

	}

	public function perks_details($id='')

	{
		$email  = session()->get('email') ;
        if(($email == '')){ return redirect()->to(base_url('admin/login')); }	
		$title['page_title'] = "Perks Redeemed - GetFundedAfrica";
		$data['id'] = $id;
		$data['login_type'] = session()->get('login_type');
		echo view('head_doc',$title);
        echo view('nav_new',$title);
        echo view('menu_new',$data);
		echo view('perks_details',$data);
		echo view('footer_doc');

	}
	public function perks_redeemed()

	{
		$email  = session()->get('email') ;
        if(($email == '')){ return redirect()->to(base_url('admin/login')); }	
		$title['page_title'] = "Perks Redeem- GetFundedAfrica";
		$data['login_type'] = session()->get('login_type');
		echo view('header_new',$title);
        echo view('nav_new',$title);
        echo view('menu_new',$data);
		echo view('perks_redeemed');
		echo view('footer_new');

	}


    public function manage_perks()

	{
		$email  = session()->get('email') ;
        if(($email == '')){ return redirect()->to(base_url('admin/login')); } 	
		$title['page_title'] = "Manage Perks- GetFundedAfrica";
	    $data['login_type'] = session()->get('login_type');
		echo view('header_new',$title);
        echo view('nav_new',$title);
        echo view('menu_new',$data);
		echo view('manage_perks',$data);
		echo view('footer_new',$data);

	}

	public function add_perks_category()

	{
		
		
		$title['page_title'] = "Add Perks - GetFundedAfrica ";
		$data['login_type'] = session()->get('login_type');
		echo view('head_doc',$title);
        echo view('nav_new',$title);
		echo view('menu_new',$data);
		echo view('add_perks_category');

		echo view('footer_doc');

	}


	public function add_perks()

	{
		
		
		$title['page_title'] = "Add Perks - GetFundedAfrica ";
		$data['login_type'] = session()->get('login_type');
		echo view('head_doc',$title);
        echo view('nav_new',$title);
		echo view('menu_new',$data);
		echo view('add_perks');

		echo view('footer_doc');

	}

	public function posted_events()

	{

		$title['page_title'] = "All Events - GetFundedAfrica";

		echo view('header_new',$title);

		echo view('about-3.php',$data);
// 		echo view('posted_event',$data);
		echo view('footer_new');


	}

    public function loadperksbyid()

    {
        
        $data['id'] = $this->request->getPost("id");
        
        echo view('load_perks_details',$data);
        

    }

    public function loadperkscategory()

    {
        $title['page_title'] = "Add Perks - GetFundedAfrica ";
        $data['category'] = $this->request->getPost("category");
        echo view('header_home2',$title);
        echo view('load_perks_category',$data);
        echo view('header_footer2');

    }
    

    public function loadperks()

    {
        
        $title['page_title'] = "Add Perks - GetFundedAfrica ";
        echo view('header_home2',$title);
        echo view('load_perks');
        echo view('header_footer2');

    }
    

    public function perks()

    {
        
        
        $title['page_title'] = "Perks  ";
        $email  = session()->get('email') ;
        if(($email == '')){ return redirect()->to(base_url('gfa/login')); }  
        $data['email'] =  $email;
        $data['login_type'] = session()->get('login_type') ;
        $data['account_type'] = $account_type = session()->get('account_type') ;
        $data['admin_access'] = "";
        echo view('header_home2',$title);
        echo view('nav_new',$data);
         echo view('menu_new',$data);
        echo view('perks',$data);
        echo view('header_footer2');

    }
    
    
    public function all_perks()

    {
        
        // 
        $title['page_title'] = "Perks  ";
        
        echo view('header_home2',$title);
        // echo view('nav_new',$title);
        // echo view('menu_new',$title);
        echo view('all_perks',$data);
        echo view('header_footer2');

    }

    public function register_as_mentor()

    {
        
          
        $title['page_title'] = "Mentor Profile ";
        $email  = session()->get('email') ;
        if(($email == '')){ return redirect()->to(base_url('gfa/login')); }  
        $data['email'] =  $email;
        $data['login_type'] = session()->get('login_type') ;
        $data['account_type'] = $account_type = session()->get('account_type') ;
        $data['admin_access'] = "";
        
        echo view('header_new',$title);
        echo view('menu_new',$data);
        echo view('nav_new',$data);
        echo view('register_as_mentor',$data);
        echo view('footer_new',$data);

    }
    
    public function register_as_corporate()

    {
        
          
        $title['page_title'] = "Corporate Profile ";
        $email  = session()->get('email') ;
        if(($email == '')){ return redirect()->to(base_url('gfa/login')); }  
        $data['email'] =  $email;
        $data['login_type'] = session()->get('login_type') ;
        $data['account_type'] = $account_type = session()->get('account_type') ;
        $data['admin_access'] = "";
        
        echo view('header_new',$title);
        echo view('menu_new',$data);
        echo view('nav_new',$data);
        echo view('profile_corperate',$data);
        echo view('footer_new',$data);
   
    }
    
        public function register_as_investor()

    {
        
          
        $title['page_title'] = "Investor Profile ";
        $email  = session()->get('email') ;
        if(($email == '')){ return redirect()->to(base_url('gfa/login')); }  
        $data['email'] =  $email;
        $data['login_type'] = session()->get('login_type') ;
        $data['account_type'] = $account_type = session()->get('account_type') ;
        $data['admin_access'] = "";
        
        echo view('header_new',$title);
        echo view('menu_new',$data);
        echo view('nav_new',$data);
        echo view('investor/profile',$data);
        echo view('footer_new',$data);
   
    }
#========================================SME=======================================
public function find_sme()

	{
		
	$email  = session()->get('email') ; if(($email == '')){ return redirect()->to(base_url('gfa/login')); }	
	
		$title['page_title'] = "SME - GetFundedAfrica";
		 $data['email'] =  $email;
        $data['login_type'] = session()->get('login_type') ;
        $data['account_type'] = session()->get('account_type') ;
	    session()->set('get_investor_id', $id);

		echo view('header_new',$title);
         echo view('nav_new',$data);
        echo view('menu_new',$data);
		echo view('find_sme');
		echo view('footer_new');

		

	}
	

#===============================End SME=============================================

#==================================================mentor-app-update===============================================
public function dashboardNotification(){

$email  = session()->get('email') ;
$notifyDetails = $this->gfa_model->getCurrentNotification($email);

if(!empty($notifyDetails )){
echo $notifyDetails[0]['subject'];
echo " | <a href='".base_url('gfa/notify_inbox_ref/'.$notifyDetails[0]['ref_id'].'')."' class='userClickedNotify' ls=''>Click here to view the message.</a>";
}else{

	echo "";
}
}

public function notify_inbox_ref($ref_id=""){

	$email = session()->get('email') ;
	   // $getRef = $this->request->getPost("getRef");
	   $data = array('status' => 'old');
	   $this->gfa_model->updatedClickedNotify($data,$ref_id);
	   return redirect()->to(base_url('gfa/notify_inbox/'.$ref_id.'')); 

}
public function mentor()

    {
        
       
        $title['page_title'] = "Mentor Dashboard by GetFundedAfrica";
        $email  = session()->get('email') ;
        if(($email == '')){ return redirect()->to(base_url('gfa/login')); }  
        $data['email'] =  $email;
        $data['login_type'] = session()->get('login_type') ;
        $data['account_type'] = $account_type = session()->get('account_type') ;
        $data['admin_access'] = "";
        //===================== API EVENT REQUEST ===========================       
        // $resp = "";
        // $data['eventResp'] = json_decode($resp,true);
        $data['rowArray'] = $rowArray = $this->admin_model->getAllMentorByEmail($email);
        $data['totalMatched'] = $this->admin_model->countMentorStartup($rowArray[0]['Industry'],$rowArray[0]['Mentors_focus'],$rowArray[0]['Investment_stage']);
        $data['totalConnect'] = $this->admin_model->countMentorConnect($email,'mentor-startup');
        echo view('mentor/header_new',$title);
        echo view('mentor/nav_new',$data);
        echo view('mentor/menu_new',$data);
        echo view('mentor/mentor',$data);
        echo view('mentor/footer_new',$data);
        

    }
    
    public function mentor_startups()

	{
		
	$email  = session()->get('email') ; if(($email == '')){ return redirect()->to(base_url('gfa/login')); }	
	
		$title['page_title'] = "Investor - GetFundedAfrica";
		$data['email'] =  $email;
        $data['login_type'] = session()->get('login_type') ;
        $data['account_type'] = session()->get('account_type') ;
	    session()->set('get_mentor_id', $id);

		echo view('mentor/header_new',$title);
        echo view('mentor/nav_new',$data);
        echo view('mentor/menu_new',$data);
		echo view('mentor/startups');
		echo view('mentor/footer_new');

		

	}

	public function fetchCorporate()

	{
		
	
       
		$data['Need_service'] = $this->request->getPost("engage_startup");
		$data['Solution_Corperate'] = $this->request->getPost("solution_needed");
		
		echo view('search_corporate', $data);
		
		

	}

	public function fetchInvestor()

	{
		
	
       
		$data['Industry_Focus'] = $this->request->getPost("industry");
		$data['Investor_Name'] = $this->request->getPost("company");
		$data['Min_Cheque'] = $this->request->getPost("min_cheque"); 
		echo view('search_investor', $data);
		
		

	}

	public function fetchStartupsMentor()

	{
		
	
       
		$data['Industry'] = $this->request->getPost("industry");
		$data['Mentor_name'] = $this->request->getPost("name_sme");
		$data['Mentor_focus'] = $this->request->getPost("mentor_focus"); 
	
		echo view('search_mentor', $data);
		
		

	}

public function fetchSME()

	{
		
	// if((session()->get('email'); == '')){ redirect(base_url().'gfa/login'); }	
	// $PrimaryBusinessIndustry,$CurrentInvestmentStage,$Startup_Implementation_Stage,$CountryHQ
       
		$data['PrimaryBusinessIndustry'] = $this->request->getPost("industry");
		$data['Primary_Contact_Name'] = $this->request->getPost("name_sme");
		$data['Startup_Implementation_Stage'] = $this->request->getPost("Implementation_stage"); 
	
		echo view('search_sme', $data);
		
		

	}
	
	public function fetchMentorStartups()

	{
		
	// if((session()->get('email'); == '')){ redirect(base_url().'gfa/login'); }	
	// $PrimaryBusinessIndustry,$CurrentInvestmentStage,$Startup_Implementation_Stage,$CountryHQ
       
		$data['PrimaryBusinessIndustry'] = $this->request->getPost("industry");
		$data['Mentorship'] = $this->request->getPost("mentor_focus");
		$data['Startup_Implementation_Stage'] = $this->request->getPost("Implementation_stage"); 
	
		echo view('mentor/startup_search', $data);
		
		

	}

	public function sme_startup_details($id)

	{
		
		$email  = session()->get('email'); if(($email == '')){ return redirect()->to(base_url('gfa/login')); }	
	
		$title['page_title'] = "Sme - GetFundedAfrica";
		$data['id'] = $id;
	    session()->set('get_investor_id', $id);
        $data['email'] =  $email;
        $data['login_type'] = session()->get('login_type') ;
        $data['account_type'] = $account_type = session()->get('account_type') ;

		echo view('header_new',$title);
		if($account_type == 'startup' || $account_type == 'individual' ){
	   
        echo view('nav_new',$data);
        echo view('menu_new',$data);
    }else{

    		echo view('corperate/nav_new',$data);
        	echo view('corperate/menu_new',$data);

    }
		//echo view('investor/investor_startup_details',$data);
		echo view('sme_profile',$data);
		echo view('footer_new');

		

	}


	public function mentor_startup_details($id)

	{
		
		$email  = session()->get('email'); if(($email == '')){ return redirect()->to(base_url('gfa/login')); }	
	
		$title['page_title'] = "Mentor - GetFundedAfrica";
		$data['id'] = $id;
	    session()->set('get_investor_id', $id);
        $data['email'] =  $email;
        $data['login_type'] = session()->get('login_type') ;
        $data['account_type'] = session()->get('account_type') ;
		echo view('mentor/header_new',$title);
        echo view('mentor/nav_new',$data);
        echo view('mentor/menu_new',$data);
		//echo view('investor/investor_startup_details',$data);
		echo view('mentor/startup_profile',$data);
		echo view('mentor/footer_new');

		

	}

public function checkSmeConnection(){
	$investor_email = session()->get('email');
	$startup_id  =  $this->gfa_model->mysqlCheck($this->request->getPost("id"));
	$startup_email = $this->admin_model->getAllStartUpNById($startup_id)[0]['Contact_Email'];
	$time 	=  date("Y-m-d h:i:s A",time());
	$data_connection = array(
					
		'email' => $investor_email,
		'email_startup' => $startup_email,
		'status' => 'profile reviewed',
		'connection' => 'startup-startup',
		'extra_status' => '',
		'time_Submit' => $time
	
		);
$subject = lang("translation.Sme Connection");
$ref_id = time();
$message = lang("translation.Trying to Connect with you");
		$this->gfa_model->insertConnection($data_connection);
		 $this->gfa_model->allNotification($startup_email, $subject, $ref_id);
	 $this->gfa_model->allNotificationBox($subject,$message, $investor_email, $startup_email,$ref_id);

		echo $startup_id;
}
	
	public function checkMentorConnection(){
	$investor_email = session()->get('email');
	$startup_id  =  $this->gfa_model->mysqlCheck($this->request->getPost("id"));
	$startup_email = $this->admin_model->getAllStartUpNById($startup_id)[0]['Contact_Email'];
	$time 	=  date("Y-m-d h:i:s A",time());
	$data_connection = array(
					
		'email' => $investor_email,
		'email_startup' => $startup_email,
		'status' => 'profile reviewed',
		'connection' => 'mentor-startup',
		'extra_status' => '',
		'time_Submit' => $time
	
		);
$subject = "Connection";
$ref_id = time();
$message = "Connection";
		$this->gfa_model->insertConnection($data_connection);
		 $this->gfa_model->allNotification($startup_email, $subject, $ref_id);
	 $this->gfa_model->allNotificationBox($subject,$message, $investor_email, $startup_email,$ref_id);

		echo $startup_id;
}

public function checkMentorConnection_url($id=''){
	$mentor_email = session()->get('email');
	$startup_id  =  $id;
	$startup_email = $this->admin_model->getAllStartUpNById($startup_id)[0]['Contact_Email'];
	$time 	=  date("Y-m-d h:i:s A",time());
	$data_connection = array(
					
		'email' => $mentor_email,
		'email_startup' => $startup_email,
		'status' => 'profile reviewed',
		'connection' => 'investor-startup',
		'extra_status' => '',
		'time_Submit' => $time
	
		);
		
		$this->gfa_model->insertConnection($data_connection);

		//redirect to startup profile
		
		return redirect()->to(base_url().'gfa/mentor_startup_details/'.$id);
}

	
public function checkConnection_url($id=''){
	$investor_email = session()->get('email');
	$startup_id  =  $id;
	$startup_email = $this->admin_model->getAllStartUpNById($startup_id)[0]['Contact_Email'];
	$time 	=  date("Y-m-d h:i:s A",time());
	$data_connection = array(
					
		'email' => $investor_email,
		'email_startup' => $startup_email,
		'status' => 'profile reviewed',
		'connection' => 'investor-startup',
		'extra_status' => '',
		'time_Submit' => $time
	
		);
		
		$this->gfa_model->insertConnection($data_connection);

		//redirect to startup profile
		
		return redirect()->to(base_url().'gfa/investor_startup_details/'.$id);
}

public function callconnection(){
    $startup_id  =  $this->gfa_model->mysqlCheck($this->request->getPost("id"));
    $subject_info  =  $this->gfa_model->mysqlCheck($this->request->getPost("subject"));
	$subject_ext  =  $this->gfa_model->mysqlCheck($this->request->getPost("subject_ext"));
	$time_zone	= $this->gfa_model->mysqlCheck($this->request->getPost("time_zone"));
    $date_time	= $this->gfa_model->mysqlCheck($this->request->getPost("date_time"));
	$meeting_link	= $this->gfa_model->mysqlCheck($this->request->getPost("meeting_link"));
    $more_info	= $this->gfa_model->mysqlCheck($this->request->getPost("more_info"));
    $conn_email = $this->request->getPost("conn_email");
    $conn_name = $this->request->getPost("conn_name");
    $conn_type = $this->request->getPost("conn_type");
	$amount = 0;
	$startup_email = $this->admin_model->getAllStartUpNById($startup_id)[0]['Contact_Email'];
    $startup_name =  $this->admin_model->getAllStartUpNById($startup_id)[0]['Primary_Contact_Name'];
	
    $time 	=  date("Y-m-d h:i:s A",time());
    
    $data_story = array(
	
					'subject' => $subject_info,
					'date_time' => $date_time,
					'more_info' => $more_info,
					'amount' => $amount,
					'investor_email' => $conn_email,
					'startup_email' => $startup_email,
					'status' => 'pending',
					'time_submit' => $time
				
					);
					$data_connection = array(
					
						'email' => $conn_email,
						'more_info' => $more_info,
						'email_startup' => $startup_email,
						'amount' => $amount,
						'status' => 'pending',
						'connection' => $conn_type,
						'extra_status' => 'call',
						'time_Submit' => $time
					
						);
						
						$this->gfa_model->insertConnection($data_connection);
					
					//$this->gfa_model->insertStartupInvite($data_story); 
					echo "Appel programmé avec succès soumis..";
					
// "Hello Startup Name, An investor is interested to invest in your company and have scheduled a call for 16th Jan 2023 by 11am" Click here to Accept.  Then a notification that says "Schedule confirmed to investor" (Notification at the Investor end after Clicking Schduel a call - Fill the schudule form with date and time, message to call startup - After submiting the respone will be "Your scheduled with Startup name have be sent successfully- Contact details of startups have been sent to your email.")

					
					
$subject = "Demande de connexion avec vous.";
$ref_id = time();
$message = $more_info;
$message .="<p><strong>Objet :</strong> {$subject_info}; {$subject_ext}</p>
<p>Date : {$date_time}</p>
<p>Heure : {$time_zone}</p>
<p>Plateforme : {$meeting_link}</p>";
	 $this->gfa_model->allNotification($startup_email, $subject, $ref_id);
	 $this->gfa_model->allNotificationBox($subject,$message, $conn_email, $startup_email,$ref_id);
//$this->sendMail($investor_email, $messages,$subjects);
    
}


public function callSmeToSme(){
    $startup_id  =  $this->gfa_model->mysqlCheck($this->request->getPost("id"));
    $subject_info  =  $this->gfa_model->mysqlCheck($this->request->getPost("subject"));
	$subject_ext  =  $this->gfa_model->mysqlCheck($this->request->getPost("subject_ext"));
	$time_zone	= $this->gfa_model->mysqlCheck($this->request->getPost("time_zone"));
    $date_time	= $this->gfa_model->mysqlCheck($this->request->getPost("date_time"));
	$meeting_link	= $this->gfa_model->mysqlCheck($this->request->getPost("meeting_link"));
    $more_info	= $this->gfa_model->mysqlCheck($this->request->getPost("more_info"));
	$amount	= 0;
    $mentor_email = session()->get('email');
    $startup_email = $this->admin_model->getAllStartUpNById($startup_id)[0]['Contact_Email'];
    $startup_name =  $this->admin_model->getAllStartUpNById($startup_id)[0]['Primary_Contact_Name'];
    $investor_name  = $this->admin_model->getAllStartUpNByEmail($mentor_email)[0]['Primary_Contact_Name'];
    $investor_id = $this->admin_model->getAllStartUpNByEmail($mentor_email)[0]['STUP_ID'];
	$Startup_Company_Name= $this->admin_model->getAllStartUpNById($startup_id)[0]['Startup_Company_Name'];
	
    $time 	=  date("Y-m-d h:i:s A",time());
   
    $data_story = array(
	
					'subject' => $subject_info,
					'date_time' => $date_time,
					'more_info' => $more_info,
					'amount' => $amount,
					'investor_email' => $mentor_email,
					'startup_email' => $startup_email,
					'status' => 'connection-business',
					'time_submit' => $time
				
					);
					$data_connection = array(
					
						'email' => $mentor_email,
						'more_info' => $more_info,
						'email_startup' => $startup_email,
						'amount' => $amount,
						'status' => 'connection-business',
						'connection' => 'sme-startup',
						'extra_status' => 'call',
						'time_Submit' => $time
					
						);
						
						$this->gfa_model->insertConnection($data_connection);
					
					//$this->gfa_model->insertStartupInvite($data_story); 
					echo "Appel programmé avec succès soumis..";
					
// "Hello Startup Name, An investor is interested to invest in your company and have scheduled a call for 16th Jan 2023 by 11am" Click here to Accept.  Then a notification that says "Schedule confirmed to investor" (Notification at the Investor end after Clicking Schduel a call - Fill the schudule form with date and time, message to call startup - After submiting the respone will be "Your scheduled with Startup name have be sent successfully- Contact details of startups have been sent to your email.")

					
					
$subject = "Demande de connexion avec vous.";
$ref_id = time();
$message = $more_info;
$message .="<p><strong>Objet :</strong> {$subject_info}; {$subject_ext}</p>
<p>Date : {$date_time}</p>
<p>Heure : {$time_zone}</p>
<p>Plateforme : {$meeting_link}</p>";
	 $this->gfa_model->insertConnection($data_connection);
	 $this->gfa_model->allNotification($startup_email, $subject, $ref_id);
	 $this->gfa_model->allNotificationBox($subject,$message, $mentor_email, $startup_email,$ref_id);
//$this->sendMail($investor_email, $messages,$subjects);
    
}

public function callstartupMentor(){
    $startup_id  =  $this->gfa_model->mysqlCheck($this->request->getPost("id"));
    $subject_info  =  $this->gfa_model->mysqlCheck($this->request->getPost("subject"));
	$subject_ext  =  $this->gfa_model->mysqlCheck($this->request->getPost("subject_ext"));
	$time_zone	= $this->gfa_model->mysqlCheck($this->request->getPost("time_zone"));
    $date_time	= $this->gfa_model->mysqlCheck($this->request->getPost("date_time"));
	$meeting_link	= $this->gfa_model->mysqlCheck($this->request->getPost("meeting_link"));
    $more_info	= $this->gfa_model->mysqlCheck($this->request->getPost("more_info"));
	$amount	= 0;
    $mentor_email = session()->get('email');
    $startup_email = $this->admin_model->getAllStartUpNById($startup_id)[0]['Contact_Email'];	
    $startup_name =  $this->admin_model->getAllStartUpNById($startup_id)[0]['Primary_Contact_Name'];
    $mentor_name  = $this->admin_model->getAllMentorByEmail($mentor_email)[0]['Mentor_name'];
    // $mentor_id = $this->admin_model->getAllMentorByEmail($mentor_email)[0]['Mentor_ID'];
	$Startup_Company_Name= $this->admin_model->getAllStartUpNById($startup_id)[0]['Startup_Company_Name'];
	
    $time 	=  date("Y-m-d h:i:s A",time());

	$data_connection = array(
					
        'email' => $mentor_email,
        'more_info' => $more_info,
        'status' => 'prospective deals',
        'time_Submit' => $time,
        'email_startup' => $startup_email,
        'connection' => 'mentor-startup',
        'extra_status' => 'call',
        'amount' => $amount

        );

	$this->gfa_model->insertConnection($data_connection);

	echo "Merci d'avoir choisi de planifier un appel avec nous. Nous apprécions votre intérêt pour notre produit/service et nous avons hâte de discuter avec vous. Si vous avez des sujets spécifiques que vous aimeriez aborder lors de l'appel, merci de les partager ici afin que nous puissions nous préparer avant la réunion";

					
	$subject = "RE: {$mentor_name} Schedule a Call Request";
$message = "<a href='https://nora.GetFundedAfrica.ci'><img src='https://nora.GetFundedAfrica.ci/images/logo-1.png'></a><br><br>";
$message .= "<p>Bonjour {$startup_name},</p>

<p>Ceci est un e-mail automatisé pour vous informer qu'un mentor de la plateforme GetFundedAfrica a exprimé son intérêt pour une session approfondie avec vous. Veuillez trouver ci-dessous les détails de l'appel programmé :</p>

<p><strong>Objet :</strong> {$subject_info}; {$subject_ext}</p>
<p>Date : {$date_time}</p>
<p>Heure : {$time_zone}</p>
<p>Plateforme : {$meeting_link}</p>
<p>Message court : {$more_info}</p>

<p>Veuillez vous connecter à votre compte GetFundedAfrica pour consulter les détails du mentor.</p>

<p>Si vous avez des questions ou des préoccupations que notre équipe GFA peut vous aider à résoudre, n'hésitez pas à nous contacter à <a href='mailto:info@GetFundedAfrica.com'>info@GetFundedAfrica.com</a>.</p>

<p>Cordialement,<br>L'équipe GetFundedAfrica !</p>";

// $this->sendMail("investor@GetFundedAfrica.com", $message,$subject);
$this->sendMail($startup_email, $message,$subject);

$subjects = "RE: {$mentor_name} Schedule a Call Request";
$messages = "<a href='https://nora.GetFundedAfrica.ci'><img src='https://nora.GetFundedAfrica.ci/images/logo-1.png'></a><br><br>";
$messages .= "<p>Bonjour {$mentor_name},</p>

<p>Merci d'avoir choisi de planifier un appel avec {$Startup_Company_Name}. Cet e-mail automatique vous informe que le fondateur a été notifié de l'appel programmé et se réjouit de cet échange.</p>

<p>Nous vous remercions de l'intérêt que vous portez à {$Startup_Company_Name}, et si d'autres moyens peuvent vous être utiles, n'hésitez pas à nous contacter à <a href='mailto:info@GetFundedAfrica.com'>info@GetFundedAfrica.com</a>.</p>

<p>Cordialement,<br>L'équipe GetFundedAfrica !</p>";

    // $subject = "Connection";
    $ref_id = time();
    // $message = "Connection";
        $this->gfa_model->allNotification($startup_email, $subject, $ref_id);
        $this->gfa_model->allNotificationBox($subject,$message, $mentor_email, $startup_email,$ref_id);
    $this->sendMail($mentor_email, $messages,$subjects);    
}

// public function callstartupMentor(){
//     $startup_id  =  $this->gfa_model->mysqlCheck($this->request->getPost("id"));
//     $subject_info  =  $this->gfa_model->mysqlCheck($this->request->getPost("subject"));
// 	$subject_ext  =  $this->gfa_model->mysqlCheck($this->request->getPost("subject_ext"));
// 	$time_zone	= $this->gfa_model->mysqlCheck($this->request->getPost("time_zone"));
//     $date_time	= $this->gfa_model->mysqlCheck($this->request->getPost("date_time"));
// 	$meeting_link	= $this->gfa_model->mysqlCheck($this->request->getPost("meeting_link"));
//     $more_info	= $this->gfa_model->mysqlCheck($this->request->getPost("more_info"));
// 	$amount	= 0;
//     $mentor_email = session()->get('email');
//     $startup_email = $this->admin_model->getAllStartUpNById($startup_id)[0]['Contact_Email'];	
//     $startup_name =  $this->admin_model->getAllStartUpNById($startup_id)[0]['Primary_Contact_Name'];
//     $mentor_name  = $this->admin_model->getAllMentorByEmail($mentor_email)[0]['Mentor_name'];
//     $investor_id = $this->admin_model->getAllMentorByEmail($mentor_email)[0]['Mentor_ID'];
// 	$Startup_Company_Name= $this->admin_model->getAllStartUpNById($startup_id)[0]['Startup_Company_Name'];
	
//     $time 	=  date("Y-m-d h:i:s A",time());
    
//     $data_story = array(
					
// 					'subject' => $subject_info,
// 					'date_time' => $date_time,
// 					'more_info' => $more_info,
// 					'amount' => $amount,
// 					'investor_email' => $mentor_email,
// 					'startup_email' => $startup_email,
// 					'status' => 'prospective deals',
// 					'time_submit' => $time
				
// 					);
// 	$data_connection = array(
					
// 						'email' => $mentor_email,
// 						'more_info' => $more_info,
//                         'status' => 'prospective deals',
//                         'time_Submit' => $time,
// 						'email_startup' => $startup_email,
//                         'connection' => 'mentor-startup',
//                         'extra_status' => 'call',
// 						'amount' => $amount
					
// 						);

// 						$this->gfa_model->insertConnection($data_connection);
// 						echo "Thank you for choosing to schedule a call with us. We appreciate your interest in our product/service and look forward to speaking with you. If there are specific topics that you would like us to cover at the call, please share them here in order for us to prepare prior to the meeting";
					
					
// 					//$this->gfa_model->insertStartupInvite($data_story); 
					
					
//     // "Hello Startup Name, An investor is interested to invest in your company and have scheduled a call for 16th Jan 2023 by 11am" Click here to Accept.  Then a notification that says "Schedule confirmed to investor" (Notification at the Investor end after Clicking Schduel a call - Fill the schudule form with date and time, message to call startup - After submiting the respone will be "Your scheduled with Startup name have be sent successfully- Contact details of startups have been sent to your email.")

					
// 	$subject = "RE: {$mentor_name} Schedule a Call Request";
// 	$message = "<a href='https://nora.GetFundedAfrica.ci'><img src='https://nora.GetFundedAfrica.ci/images/logo-1.png'></a><br><br>";
//     $message.="<p>Dear {$startup_name},</p>

//     <p>This is an automated email to notify you that an investor from GetFundedAfrica platform has shown interest in having a deep dive session with you. Please see below for scheduled call details:</p>

//     <p><strong>Subject:</strong>{$subject_info}; {$subject_ext}</p>
//     <p>Date: {$date_time}</p>
//     <p>Time: {$time_zone}</p>
//     <p>Platform: {$meeting_link}</p>
//     <p>Short Message: {$more_info}</p>

//     <p>Please login to your GetFundedAfrica account to view the investor details. We suggest to conduct preliminary research about the investor to understand who they are and their investment criteria before the call to bring you one step closer to your fundraising success.</p>

//     <p>Should you have any questions or concerns that our GFA team can support you, please do not hesitate to contact us at <a href='mailto:info@GetFundedAfrica.com'>info@GetFundedAfrica.com</a>.</p>

//     <p>Cheerios,<br>GetFundedAfrica Team!</p>";
//     //$this->sendMail("investor@GetFundedAfrica.com", $message,$subject);
//     //$this->sendMail($startup_email, $message,$subject);
//     $subjects = "RE: {$mentor_name} Schedule a Call Request";
//     $messages = "<a href='https://nora.GetFundedAfrica.ci'><img src='https://nora.GetFundedAfrica.ci/images/logo-1.png'></a><br><br>";
//     $messages .="<p>Dear {$mentor_name},</p>

//     <p>Thank you for choosing to schedule a call with {$Startup_Company_Name}. This auto-reply is to inform you that the Founder has been notified about the scheduled call and is looking forward to the call.</p>

//     <p>We appreciate your interest in {$Startup_Company_Name}, and if there are other possible ways that GetFundedAfrica can support you, please do not hesitate to contact us at <a href='mailto:info@GetFundedAfrica.com'>info@GetFundedAfrica.com</a>.</p>

//     <p>Cheerios!<br>GetFundedAfrica Team!</p>";
//     $subject = "Connection";
//     $ref_id = time();
//     $message = "Connection";
//         // $this->gfa_model->insertConnection($data_connection);
//         $this->gfa_model->allNotification($startup_email, $subject, $ref_id);
//         $this->gfa_model->allNotificationBox($subject,$message, $mentor_email, $startup_email,$ref_id);
//     //$this->sendMail($investor_email, $messages,$subjects);    
// }

#================================================== End ============================================================

	#==================================================investor-app-update===============================================
public function startups()

	{
		
	$email  = session()->get('email') ; if(($email == '')){ return redirect()->to(base_url('gfa/login')); }	
	
		$title['page_title'] = "Investor - GetFundedAfrica";
		 $data['email'] =  $email;
        $data['login_type'] = session()->get('login_type') ;
        $data['account_type'] = session()->get('account_type') ;
	    session()->set('get_investor_id', $id);

		echo view('investor/header_new',$title);
        echo view('investor/nav_new',$data);
        echo view('investor/menu_new',$data);
		echo view('investor/startups');
		echo view('investor/footer_new');

		

	}
	
	public function fetchstartups()

	{
		
	// if((session()->get('email'); == '')){ redirect(base_url().'gfa/login'); }	
	// $PrimaryBusinessIndustry,$CurrentInvestmentStage,$Startup_Implementation_Stage,$CountryHQ
        $data['CountryHQ'] = $this->request->getPost("startup_country");
		$data['PrimaryBusinessIndustry'] = $this->request->getPost("industry");
		$data['CurrentInvestmentStage'] = $this->request->getPost("current_stage");
		$data['Startup_Implementation_Stage'] = $this->request->getPost("Implementation_stage"); 
		$data['Next_Funding_Round_Target_Sought'] = $this->request->getPost("fund_to_raise");
		echo view('investor/startup_search', $data);
		
		

	}
	
	public function checkConnection(){
	$investor_email = session()->get('email');
	$startup_id  =  $this->gfa_model->mysqlCheck($this->request->getPost("id"));
	$startup_email = $this->admin_model->getAllStartUpNById($startup_id)[0]['Contact_Email'];
	$time 	=  date("Y-m-d h:i:s A",time());
	$data_connection = array(
					
		'email' => $investor_email,
		'email_startup' => $startup_email,
		'status' => 'profile reviewed',
		'connection' => 'investor-startup',
		'extra_status' => '',
		'time_Submit' => $time
	
		);
		
		$this->gfa_model->insertConnection($data_connection);

		echo $startup_id;
}

public function investor_startup_details($id="")

	{
		
		$email  = session()->get('email'); if(($email == '')){ return redirect()->to(base_url('gfa/login')); }	
	
		$title['page_title'] = "Investor - GetFundedAfrica";
		$data['id'] = $id;
	    session()->set('get_investor_id', $id);
        $data['email'] =  $email;
        $data['login_type'] = session()->get('login_type') ;
        $data['account_type'] = session()->get('account_type') ;
		echo view('investor/header_new',$title);
        echo view('investor/nav_new',$data);
        echo view('investor/menu_new',$data);
		//echo view('investor/investor_startup_details',$data);
		echo view('investor/startup_profile',$data);
		echo view('investor/footer_new');

		

	}
	
	public function verifyInvestor(){
    
    
    
    $startup_id  =  $this->gfa_model->mysqlCheck($this->request->getPost("id"));
    $more_info	= $this->gfa_model->mysqlCheck($this->request->getPost("more_info"));
    $invest_type	= $this->gfa_model->mysqlCheck($this->request->getPost("invest_type"));
    $investor_email = session()->get('email');
    $startup_email = $this->admin_model->getAllStartUpNById($startup_id)[0]['Contact_Email'];
    $startup_name =  $this->admin_model->getAllStartUpNById($startup_id)[0]['Primary_Contact_Name'];
    $investor_name  = $this->gfa_model->getInvestorDetails($investor_email)[0]['Contact_Name'];
    $investor_id = $this->gfa_model->getInvestorDetails($investor_email)[0]['Investor_ID'];
	$amount	= $this->gfa_model->mysqlCheck($this->request->getPost("amount"));
	$gfa_investor = $this->request->getPost("gfa_investor");
	$other_investor = $this->request->getPost("other_investor");
	$fund = $this->request->getPost("fund");
    $time 	=  date("Y-m-d h:i:s A",time());
   	$investorFile = $this->admin_model->getInvestorsFileUploadedByEmail($investor_email);
   	$files = $this->request->getFiles();
    $dataInfo = array();
    //$files = $_FILES;
    

	$income_entries        = array();
        $number_of_entries          = sizeof($fund);
        
     foreach ($files['file'] as $file) {
        
        // Check if the file is valid
        if ($file->isValid() && ! $file->hasMoved()) {
            
            // Generate a new filename
            $newName = $file->getRandomName();
            $dataInfo[] = $newName;
            // Move the file to the public/uploads directory
            $file->move('./uploads/files', $newName);
            
           
        }
    }   
        
    
    for ($j = 0; $j < $number_of_entries; $j++)
        {
            if(!empty($fund)){
                $new_entry          = array('gfa_investor' => $this->gfa_model->mysqlCheck($gfa_investor[$j]), 'other_investor' => $this->gfa_model->mysqlCheck($other_investor[$j]), 'fund' => $this->gfa_model->mysqlCheck($fund[$j]));
                array_push($income_entries, $new_entry);
			}
        }
        $co_invest	   = json_encode($income_entries);
    
                    $data_connection = array(
					
					'email' => $investor_email,
                    'more_info' => $more_info,
                    'invest_type' => $invest_type,
                    'email_startup' => $startup_email,
					'amount' => $amount,
                    'co_invest' => $co_invest,
                    'status' => 'prospective deals',
                    'connection' => 'investor-startup',
                    'time_Submit' => $time
				
					);
					
					$this->gfa_model->insertConnection($data_connection); 
    
    if(empty($investorFile)){
    if(!empty($dataInfo[0]) || !empty($dataInfo[1]) || !empty($dataInfo[2])){
      
     $investorPhoto =  $dataInfo[0];
     $investorIds =  $dataInfo[1];
     $investorAddress =  $dataInfo[2];
     
     $data_file = array(
					
					'email' => $investor_email,
                    'photo' => $investorPhoto,
                    'ids' => $investorIds,
                    'address' => $investorAddress,
                    'status' => 'pending',
                    'time_Submit' => $time
				
					);
					
					$this->gfa_model->insertInvestorFiles($data_file); 
					echo "Successfully submitted! Your Interest is under review, our investment team will get back to you soon";    

    }else{
       echo '';
    }
    
    }else{
       
       if(!empty($dataInfo[0])){
       $investorPhotoS =  $dataInfo[0]; 
       }else{
           
          $investorPhotoS = $investorFile[0]['photo'];
       }
       
       if(!empty($dataInfo[1])){
       $investorIdsS =  $dataInfo[1]; 
       }else{
           
          $investorIdsS = $investorFile[0]['ids'];
       }
       
       if(!empty($dataInfo[2])){
       $investorAddressS =  $dataInfo[2]; 
       }else{
           
          $investorAddressS = $investorFile[0]['address'];
       }
       
       $data_file_update = array(
                
                
                
					'photo' => $investorPhotoS,
                    'ids' => $investorIdsS,
                    'address' => $investorAddressS,
                    'time_Submit' => $time
				
				
            
                );
     
       
        $this->gfa_model->saveInvestorFile($investor_email,$data_file_update);
        echo "Successfully submitted! Your Interest is under review, our investment team will get back to you soon";

		if(!empty($dataInfo[0]) || !empty($dataInfo[1]) || !empty($dataInfo[2])){
			$message = "<a href='https://nora.GetFundedAfrica.ci'><img src='https://nora.GetFundedAfrica.ci/images/logo-1.png'></a>
	   
			<p>
			Dear  ".$investor_name.",
			</p>
	   
			<p>
			This auto-reply is to inform you that we received your e-KYC documentation and our team will conduct necessary verification and approval process and will get back to you with a (human) response as soon as possible within [3 business days]. Evenings and weekends may take us a little bit longer.
			</p><br>
			
			<p>
			If you have general questions about our [products], check out our [knowledge_base] for walkthroughs and answers to FAQs. (if we don't have this part ready, we can skip it for now and just direct them to info@GetFundedAfrica.com)
	   
			</p><br>
	   
			
			<p>
			If you have any additional information that you think will help us to assist you, please feel free to reply to this email [<a href='mailto:investors@GetFundedAfrica.com'>investors@GetFundedAfrica.com</a>]</p>
			<p>
			
			We look forward to chatting soon! 
			<p>
			Cheerios!<br>
	   
			GetFundedAfrica Team!
			</p>
			<br>
			<p>P/S: let us know when the suggested changes has been made and when can we do a test of the end to end process.</p><br>
			Many thanks<br>
			Diana";
	   
	   $subject = 'We got it — RE: [Your e-KYC documentation]';
	   $this->sendMail($investor_name, $message,$subject);
				 
			 }
    }
	
	
}

public function startupinvite($investor_id='',$startup_id=''){
    // startupinvite/282/502
    
    $startup_email = $this->admin_model->getAllStartUpNById($startup_id)[0]['Contact_Email'];
    $investor_email = $this->admin_model->getAllInvestorById($investor_id)[0]['Contact_Email'];
    $startup_name =  $this->admin_model->getAllStartUpNById($startup_id)[0]['Primary_Contact_Name'];
    $startup_company_name =  $this->admin_model->getAllStartUpNById($startup_id)[0]['Startup_Company_Name'];
    
    $data_invite = array(
					
					
					'status' => 'active',
					'time_submit' => $time
				
					);
					
					if($this->gfa_model->updateStartupInvite($data_invite,$investor_email,$startup_email)){
					    
					    $subject = $startup_name." confirmed Invite";
$message = "<a href='https://nora.GetFundedAfrica.ci'><img src='https://nora.GetFundedAfrica.ci/images/logo-1.png'></a><br><br>";

$message .="Your scheduled  with {$startup_company_name} have been successfully confirmed." ;

//$message .= '<br> <br>  <a href="https://nora.GetFundedAfrica.ci/portal/gfa/startupinvite/'.$investor_id.'/'.$startup_id.'">Click here to Accept</a>';

$this->sendMail("investor@GetFundedAfrica.com", $message,$subject);
$this->sendMail("info@getfundedafrica.com", $message,$subject);
$this->sendMail($investor_email, $message,$subject);

                        $url = 'gfa/invite_confirm';
					}else{
					    $url = 'gfa/login';
					}
					
					 redirect(base_url().$url);
}

public function investor_deals()

	{
		
	$email  = session()->get('email'); if(($email == '')){ return redirect()->to(base_url('gfa/login')); }	
		

		$title['page_title'] = "Investor and Mentor Dashboard by GetFundedAfrica";
		$data['email'] =  $email;
        $data['login_type'] = session()->get('login_type') ;
        $data['account_type'] = session()->get('account_type') ;

		echo view('investor/header_new',$title);
        echo view('investor/nav_new',$data);
        echo view('investor/menu_new',$data);
		echo view('investor/investor_deals',$data);
		echo view('investor/footer_new',$data);
		

	}

	public function fetchdeals()

	{
		
	
        $data['email'] = session()->get('email');
		$data['deals'] = $this->request->getPost("deals");
		
		echo view('investor/search_deals', $data);
		
		

	}
	
public function requestdealroom(){
    $startup_id  =  $this->gfa_model->mysqlCheck($this->request->getPost("id"));
    $subject_info  =  $this->gfa_model->mysqlCheck($this->request->getPost("subject"));
    $date_time	= $this->gfa_model->mysqlCheck($this->request->getPost("date_time"));
    $more_info	= $this->gfa_model->mysqlCheck($this->request->getPost("more_info"));
	$amount	= $this->gfa_model->mysqlCheck($this->request->getPost("amount"));
    $investor_email = session()->get('email');
    $startup_email = $this->admin_model->getAllStartUpNById($startup_id)[0]['Contact_Email'];
    $startup_name =  $this->admin_model->getAllStartUpNById($startup_id)[0]['Primary_Contact_Name'];
    $investor_name  = $this->gfa_model->getInvestorDetails($investor_email)[0]['Contact_Name'];
    $investor_id = $this->gfa_model->getInvestorDetails($investor_email)[0]['Investor_ID'];
	$Startup_Company_Name= $this->admin_model->getAllStartUpNById($startup_id)[0]['Startup_Company_Name'];
    $time 	=  date("Y-m-d h:i:s A",time());
    
    $data_story = array(
					
					'subject' => $subject,
					'date_time' => $date_time,
					'more_info' => $more_info,
					'amount' => $amount,
					'investor_email' => $investor_email,
					'startup_email' => $startup_email,
					'status' => 'prospective deals',
					'time_submit' => $time
				
					);
					$data_connection = array(
					
						'email' => $investor_email,
						'more_info' => $more_info,
						'email_startup' => $startup_email,
						'amount' => $amount,
						'status' => 'prospective deals',
						'connection' => 'investor-startup',
						'extra_status' => 'Dealroom Request',
						'time_Submit' => $time
					
						);
						
						$this->gfa_model->insertConnection($data_connection);
					
					$this->gfa_model->insertStartupInvite($data_story); 
					echo "La demande de Dealroom de  {$startup_name} a été envoyée avec succès";
					
// "Hello Startup Name, An investor is interested to invest in your company and have scheduled a call for 16th Jan 2023 by 11am" Click here to Accept.  Then a notification that says "Schedule confirmed to investor" (Notification at the Investor end after Clicking Schduel a call - Fill the schudule form with date and time, message to call startup - After submiting the respone will be "Your scheduled with Startup name have be sent successfully- Contact details of startups have been sent to your email.")

					
					$subject = "RE: {$Startup_Company_Name} dealroom access request";
$message = "<a href='https://nora.GetFundedAfrica.ci'><img src='https://nora.GetFundedAfrica.ci/images/logo-1.png'></a><br><br>";

$message .="<p>Dear {$investor_name},</p>

<p>Thank you for your interest in {$Startup_Company_Name} and for reaching out to request access to {$Startup_Company_Name} dealroom.</p>

<p><strong>Subject:</strong>{$subject_info}</p>
<p>Short Message: {$more_info}</p>

<p>Our team will attend to your request and approve within 24 hours.</p>

<p>Please note that the information provided in our dealroom is confidential and intended solely for the 
purpose of facilitating due diligence. By accessing the dealroom, you agree to 
maintain the confidentiality of all information contained therein and to use it only 
for the purpose of evaluating your investment of {$Startup_Company_Name}.</p>

<p>Thank you again for your interest. If you have any questions or concerns, please do not hesitate to contact us at <a href='mailto:info@GetFundedAfrica.com'>info@GetFundedAfrica.com</a>.</p>

<p>Cheerios,<br>GetFundedAfrica Team!</p>" ;

$this->sendMail($investor_email, $message,$subject);

    
}

public function callstartup(){
    $startup_id  =  $this->gfa_model->mysqlCheck($this->request->getPost("id"));
    $subject_info  =  $this->gfa_model->mysqlCheck($this->request->getPost("subject"));
	$subject_ext  =  $this->gfa_model->mysqlCheck($this->request->getPost("subject_ext"));
	$time_zone	= $this->gfa_model->mysqlCheck($this->request->getPost("time_zone"));
    $date_time	= $this->gfa_model->mysqlCheck($this->request->getPost("date_time"));
	$meeting_link	= $this->gfa_model->mysqlCheck($this->request->getPost("meeting_link"));
    $more_info	= $this->gfa_model->mysqlCheck($this->request->getPost("more_info"));
	$amount	= 0;
    $investor_email = session()->get('email');
    $startup_email = $this->admin_model->getAllStartUpNById($startup_id)[0]['Contact_Email'];
    $startup_name =  $this->admin_model->getAllStartUpNById($startup_id)[0]['Primary_Contact_Name'];
    $investor_name  = $this->gfa_model->getInvestorDetails($investor_email)[0]['Contact_Name'];
    $investor_id = $this->gfa_model->getInvestorDetails($investor_email)[0]['Investor_ID'];
	$Startup_Company_Name= $this->admin_model->getAllStartUpNById($startup_id)[0]['Startup_Company_Name'];
	
    $time 	=  date("Y-m-d h:i:s A",time());
    
    $data_story = array(
					
					'subject' => $subject_info,
					'date_time' => $date_time,
					'more_info' => $more_info,
					'amount' => $amount,
					'investor_email' => $investor_email,
					'startup_email' => $startup_email,
					'status' => 'prospective deals',
					'time_submit' => $time
				
					);
					$data_connection = array(
					
						'email' => $investor_email,
						'more_info' => $more_info,
						'email_startup' => $startup_email,
						'amount' => $amount,
						'status' => 'prospective deals',
						'connection' => 'investor-startup',
						'extra_status' => 'call',
						'time_Submit' => $time
					
						);
						
						$this->gfa_model->insertConnection($data_connection);
					
					$this->gfa_model->insertStartupInvite($data_story); 
					echo "Merci d'avoir programmé un appel avec nous !";
					
// "Hello Startup Name, An investor is interested to invest in your company and have scheduled a call for 16th Jan 2023 by 11am" Click here to Accept.  Then a notification that says "Schedule confirmed to investor" (Notification at the Investor end after Clicking Schduel a call - Fill the schudule form with date and time, message to call startup - After submiting the respone will be "Your scheduled with Startup name have be sent successfully- Contact details of startups have been sent to your email.")

					
					$subject = "RE: {$investor_name} Schedule a Call Request";
					$message = "<a href='https://nora.GetFundedAfrica.ci'><img src='https://nora.GetFundedAfrica.ci/images/logo-1.png'></a><br><br>";
$message.="<p>Dear {$startup_name},</p>

<p>This is an automated email to notify you that an investor from GetFundedAfrica platform has shown interest in having a deep dive session with you. Please see below for scheduled call details:</p>

<p><strong>Subject:</strong>{$subject_info}; {$subject_ext}</p>
<p>Date: {$date_time}</p>
<p>Time: {$time_zone}</p>
<p>Platform: {$meeting_link}</p>
<p>Short Message: {$more_info}</p>

<p>Please login to your GetFundedAfrica account to view the investor details. We suggest to conduct preliminary research about the investor to understand who they are and their investment criteria before the call to bring you one step closer to your fundraising success.</p>

<p>Should you have any questions or concerns that our GFA team can support you, please do not hesitate to contact us at <a href='mailto:info@GetFundedAfrica.com'>info@GetFundedAfrica.com</a>.</p>

<p>Cheerios,<br>GetFundedAfrica Team!</p>";
//$this->sendMail("investor@GetFundedAfrica.com", $message,$subject);
$this->sendMail($startup_email, $message,$subject);
$subjects = "RE: {$investor_name} Schedule a Call Request";
$messages = "<a href='https://nora.GetFundedAfrica.ci'><img src='https://nora.GetFundedAfrica.ci/images/logo-1.png'></a><br><br>";
$messages .="<p>Dear {$investor_name},</p>

<p>Thank you for choosing to schedule a call with {$Startup_Company_Name}. This auto-reply is to inform you that the Founder has been notified about the scheduled call and is looking forward to the call.</p>

<p>We appreciate your interest in {$Startup_Company_Name}, and if there are other possible ways that GetFundedAfrica can support you, please do not hesitate to contact us at <a href='mailto:info@GetFundedAfrica.com'>info@GetFundedAfrica.com</a>.</p>

<p>Cheerios!<br>GetFundedAfrica Team!</p>";
$subject = "Connection";
$ref_id = time();
$message = "Connection";
		$this->gfa_model->insertConnection($data_connection);
		 $this->gfa_model->allNotification($startup_email, $subject, $ref_id);
	 $this->gfa_model->allNotificationBox($subject,$message, $investor_email, $startup_email,$ref_id);
//$this->sendMail($investor_email, $messages,$subjects);
    
}

	public function syndicate_info()

	{
		
	$email  = session()->get('email'); if(($email == '')){ return redirect()->to(base_url('gfa/login')); }	
		$title['page_title'] = "Syndicate Information - GetFundedAfrica";
			$data['email'] =  $email;
        $data['login_type'] = session()->get('login_type') ;
        $data['account_type'] = session()->get('account_type') ;
		echo view('investor/header_new',$title);
        echo view('investor/nav_new',$data);
        echo view('investor/menu_new',$data);
		echo view('investor/syndicate_info');
		echo view('investor/footer_new');

		

	}
	
	public function syndicate($startup_id='')

	{
		
	$email  = session()->get('email'); if(($email == '')){ return redirect()->to(base_url('gfa/login')); }
		$title['page_title'] = "Syndicate a deals, fund - GetFundedAfrica";
		$data['startup_id'] = $startup_id;
		$data['email'] =  $email;
        $data['login_type'] = session()->get('login_type') ;
        $data['account_type'] = session()->get('account_type') ;
		echo view('investor/header_new',$title);
        echo view('investor/nav_new',$data);
        echo view('investor/menu_new',$data);
		echo view('investor/syndicate',$data);
		echo view('investor/footer_new');

		

	}
	
	public function invitelpspro() {
		//$this->load->library('upload');				
	   $investor_email = session()->get('email');
	   $account_type = session()->get('account_type') ;		
	   $founderName = $this->request->getPost("founderName");				
	   $founderGender = $this->request->getPost("founderGender");		
	   $founderDesignation = $this->request->getPost("founderDesignation");		
	   $founderLinkedin = $this->request->getPost("founderLinkedin");
	   $accredited_investor = $this->request->getPost("accredited_investor");
	   $expected_deal = $this->request->getPost("expected_deal");
	   $fund_exp = $this->request->getPost("fund_exp");
	   $lp_network = $this->request->getPost("lp_network");
	   $syn_name = $this->request->getPost("syn_name");
	   $syn_tag = $this->request->getPost("syn_tag");
	   $set_access = $this->request->getPost("set_access");
	   $syn_desc = $this->request->getPost("syn_desc");
	   $syn_type = $this->request->getPost("syn_type");
	   $startup_id  =  $this->gfa_model->mysqlCheck($this->request->getPost("startup_id"));
       $startup_email = $this->admin_model->getAllStartUpNById($startup_id)[0]['Contact_Email'];
	   $admin = '';						
	   $time = date("Y-m-d h:i:s A",time());
	   $randPass = sha1(time());
	   $Password = "gfa".substr($randPass,0,5);
	   $status = 'pending';
	   $income_entries= array();
	   $number_of_entries = sizeof($founderName); 
	    $files = $this->request->getFiles(); 
		$dataInfo = array();
		 foreach ($files['file'] as $file) {
        
        // Check if the file is valid
        if ($file->isValid() && ! $file->hasMoved()) {
            
            // Generate a new filename
            $newName = $file->getRandomName();
            $dataInfo[] = $newName;
            // Move the file to the public/uploads directory
            $file->move('./uploads/files', $newName);
            
           
        }
    }   
	   for ($j = 0; $j < $number_of_entries; $j++)
	   {
	   $randPass = sha1(time());
	   $Password = "gfa".substr($randPass,0,5);
	   if(!empty($founderName)){
		$new_entry = array('name' => $founderName[$j], 'email' => $founderGender[$j], 'designation' => $founderDesignation[$j], 'phone' => $founderLinkedin[$j]);
		array_push($income_entries, $new_entry);		
		   }
		}
		$lps_details 	 = json_encode($income_entries);   
		$data_lps	= 	array(
				   'startup_email' 	=> $startup_email,					
				   'investor_email' 	=> $investor_email,					
				   'accredited_investor' 	=> $accredited_investor,					
				   'expected_deal' 	=> $expected_deal,					
				   'fund_exp' 	=> $fund_exp,					
				   'lp_network' 	=> $lp_network,
				   'syn_tag' 	=> $syn_tag,						
				   'syn_logo' 	=>$dataInfo[0],
				   'lps_details' 	=> $lps_details,					
				   'set_access' 	=> $set_access,					
				   'syn_desc' 	=> $syn_desc,
				   'syn_type' 	=> $syn_type,
				   'status' 	=> $status,					
				   'extra_status' 	=> '',
				   'time_submit' 	=> $time											
			   );
			   
			//    $data_login	= 	array(
				   
			// 	   'email' => $founderGender[$j],
			// 	   'password' => $Password,
			// 	   'account_type' => $account_type,
			// 	   'invite_email' => $email
						
			// 		   ); 
			   
	   //if($founderGender[$j] != $this->gfa_model->getInviteDetails($email)[$j]['Email']){
		   $this->gfa_model->insertInviteLps($data_lps);
			//$this->gfa_model->insertLogin($data_login);
			
			 $message = "
 <a href='https://nora.GetFundedAfrica.ci'><img src='https://nora.GetFundedAfrica.ci/images/logo-1.png'></a>
   
<p><strong>Dear ".$expected_deal.",</strong></p>

<p> ".$expected_deal." from ".$expected_deal."
has invited you to join the GetFundedAfrica Platform monitor and invest in adeal.</p>



<br>
Thank you


<br>
GetFundedAfrica Team

		   ";	
//subject = $corperateName."Invite you for a deal";
//$this->sendMail($founderGender[$j], $message,$subject);
					   
	//    }else{
	// 	   echo '';
	//    }
	   
	  
			   
	       


}
		
#==================================================End investor-app-update===============================================

    public function investor_mentor()

    {
        
       
        $title['page_title'] = "Investor and Mentor Dashboard by GetFundedAfrica";
        $email  = session()->get('email') ;
        if(($email == '')){ return redirect()->to(base_url('gfa/login')); }  
        $data['email'] =  $email;
        $data['login_type'] = session()->get('login_type') ;
        $data['account_type'] = $account_type = session()->get('account_type') ;
        $data['admin_access'] = "";
        //===================== API EVENT REQUEST ===========================       
// $resp = "";
// $data['eventResp'] = json_decode($resp,true);
        echo view('investor/header_new',$title);
        echo view('investor/nav_new',$data);
        echo view('investor/menu_new',$data);
        echo view('investor/investor_mentor',$data);
        echo view('investor/footer_new',$data);
        

    }

    public function saveUserActivity($user_action = '', $email = '')
    {
        // If $user_action or $email is empty, retrieve them from POST data
        if (empty($user_action) || empty($email)) {
            $user_action = $this->request->getPost('user_action');
            $email = $this->request->getPost('email');
        }

        $timeZone = 'Africa/Lagos'; // Set the appropriate time zone
        $now = Time::now($timeZone);
        $final_date_time = $now->toDateTimeString();

        $ip_address = request()->getIPAddress();

        $all_action = [
            'UserAction' => $user_action,
            'UserIp' => $ip_address,
            'UserId' => '', // Assuming you get the user ID from somewhere else
            'UserEmail' => $email,
            'DateCreated' => $final_date_time,
        ];

        $action_list = ['verifyexpire', 'checkpaystack', 'verifypayment', 'saveUserActivity'];
        if (!in_array($user_action, $action_list)) {
            $this->gfa_model->insertUserActivity($all_action);
        }
    }
    
    public function registerPro(){
       $firstname  = $this->gfa_model->mysqlCheck($this->request->getPost("firstname"));
        $lastname = $this->gfa_model->mysqlCheck($this->request->getPost("lastname"));
        $name = $lastname." ".$firstname;
        $account_type = $this->gfa_model->mysqlCheck($this->request->getPost("account_type"));
        $email = strtolower($this->gfa_model->mysqlCheck($this->request->getPost("email")));
         $phone = $this->gfa_model->mysqlCheck($this->request->getPost("phone"));
          $gender = $this->gfa_model->mysqlCheck($this->request->getPost("gender"));
           $company = $this->gfa_model->mysqlCheck($this->request->getPost("company"));
            $country = $this->gfa_model->mysqlCheck($this->request->getPost("country"));
             //$password = $this->gfa_model->mysqlCheck($this->request->getPost("password"));
             
            $randPass = sha1(time());
             $password = "gfa".substr($randPass,0,5);
               $status = 'active';
                $time_submit = date("Y-m-d h:i:s A",time());
                  $app_type = "GFA_app";
                  
                   session()->set('account_type', $account_type);
               
                    session()->set('email',  $email) ;
                   
                
                  $data_login	= 	array(
		            
		            'email' => $email,
		            'password' => $password,
		            'account_type' => $account_type,
					     
					    ); 
					    
				// $data_startup	= 	array(
	
				// 	'Startup_Company_Name'  => $company,
    //                 'Primary_Contact_Name'  => $name,
    //                 'Contact_Email'  => $email,
    //                 'Phones'    => $phone,
    //                 'Country'   => $country,
    //                 'Gender'     => $gender
               
				// 	);
					
					$data_app_reg	= 	array(

					'firstname' 	=> $firstname,
					'lastname' 	=> $lastname,
					'email' 	=> $email,
					'phone' 	=> $phone,
					'gender' 	=> $gender,
					'company' 	=> $company,
					'country' 	=> $country,
					'account_type' 	=> $account_type,
					'status' 	=> $status,
					'time_submit' => $time_submit,
					'app_type' => $app_type
					
					
				
				
					);
					$data_app_log	= 	array(

					
					'email' 	=> $email,
					
					'time_submit' => $time_submit,
					'app_type' => $app_type
		
					);
				$profile_request = $this->gfa_model->getLoginDetails($email);
				if(empty($profile_request)){
				  $this->gfa_model->insertLogin($data_login);
				  $this->gfa_model->insertAppReg($data_app_reg);
				  $this->gfa_model->insertAppLog($data_app_log);
				//$this->gfa_model->insertStartupProfile($data_startup); 
				   echo "Successfully registered. Please check your email for login details to continue!";
				 $subject = 'Welcome to GetFundedAfrica – Your Account Details Inside';

                    $message = "
                    <div style='font-family: Arial, sans-serif; color: #333; line-height: 1.6;'>
                        <a href='https://getfundedafrica.com/' style='display: inline-block; margin-bottom: 20px;'>
                            <img src='https://getfundedafrica.com/assets/images/get-funded-africa-logo.png' alt='GetFundedAfrica Logo' style='width: 150px; height: auto;'>
                        </a>
                        
                        <p><strong>Welcome to GetFundedAfrica!</strong></p>
                    
                        <p>Your account has been successfully created. You can now log in using the details below:</p>
                        
                        <p>
                            <a href='" . base_url() . "' style='color: #007bff; text-decoration: none;'>
                                <i>Click here to access your dashboard</i>
                            </a>
                        </p>
                    
                        <p><strong>Email:</strong> {$email}<br>
                        <strong>Temporary Password:</strong> {$password}</p>
                    
                        <p>We recommend that you change your password after logging in.</p>
                    
                        <p>If you have any questions or need assistance, feel free to contact us at:<br>
                        <strong>info@getfundedafrica.com</strong></p>
                    
                        <p>Best regards,<br>
                        <strong>The GetFundedAfrica Team</strong></p>
                    </div>
                    ";

                $this->sendMail($email, $message, $subject);
	
				}else{
				 echo "1";
				 $passwordLogin = $profile_request[0]['password'];
				
				//     $message = $this->emailMessage($firstname,$email,$passwordLogin) ;
				  
				//   $this->sendMail($email, $message,$subject);
				
			
                 }
				// if($this->gfa_model->getStartUpDetails($email)[0]['Contact_Email']==""){
				//   $this->gfa_model->insertStartupProfile($data_startup); 
				// }else{
				//   $this->gfa_model->saveStartupProfile($email,$data_startup_update); 
				// }
				
				
				
				
					    
					   
			
    }
    
    public function registerProSub(){
       $firstname  = $this->gfa_model->mysqlCheck($this->request->getPost("firstname"));
        $lastname = $this->gfa_model->mysqlCheck($this->request->getPost("lastname"));
        $name = $lastname." ".$firstname;
        $email = $this->gfa_model->mysqlCheck($this->request->getPost("email"));
         $phone = $this->gfa_model->mysqlCheck($this->request->getPost("phone"));
          $gender = $this->gfa_model->mysqlCheck($this->request->getPost("gender"));
           $company = $this->gfa_model->mysqlCheck($this->request->getPost("company"));
            $country = $this->gfa_model->mysqlCheck($this->request->getPost("country"));
             //$password = $this->gfa_model->mysqlCheck($this->request->getPost("password"));
             
            $randPass = sha1(time());
             $password = "gfa".substr($randPass,0,5);
               $status = 'active';
                $time_submit = date("Y-m-d h:i:s A",time());
                  $app_type = "GFA_app";
                  
                   session()->set('account_type', 'startup');
               
                    session()->set('email',  $email) ;
                   
                
                  $data_login	= 	array(
		            
		            'email' => $email,
		            'password' => $password,
		            'account_type' => 'startup',
					     
					    ); 
					    
					    $data_startup	= 	array(

					
					'Startup_Company_Name'  => $company,
                    'Primary_Contact_Name'  => $name,
                    'Contact_Email'  => $email,
                    'Phones'    => $phone,
                    'Country'   => $country,
                    'Gender'     => $gender
                    
					
				
				
					);
					
					$data_app_reg	= 	array(

					'firstname' 	=> $firstname,
					'lastname' 	=> $lastname,
					'email' 	=> $email,
					'phone' 	=> $phone,
					'gender' 	=> $gender,
					'company' 	=> $company,
					'country' 	=> $country,
					'status' 	=> $status,
					'time_submit' => $time_submit,
					'app_type' => $app_type
					
					
				
				
					);
					$data_app_log	= 	array(

					
					'email' 	=> $email,
					
					'time_submit' => $time_submit,
					'app_type' => $app_type
					
					
				
				
					);
				$profile_request = $this->gfa_model->getLoginDetails($email);
				if(empty($profile_request)){
				  $this->gfa_model->insertLogin($data_login);
				  $this->gfa_model->insertAppReg($data_app_reg);
				  $this->gfa_model->insertAppLog($data_app_log);
				$this->gfa_model->insertStartupProfile($data_startup); 
				   echo "Successfully registered. Please check your email for login details to continue!";
			
				 $subject = 'Welcome to GetFundedAfrica – Your Account Details Inside';

                    $message = "
                    <div style='font-family: Arial, sans-serif; color: #333; line-height: 1.6;'>
                        <a href='https://getfundedafrica.com/' style='display: inline-block; margin-bottom: 20px;'>
                            <img src='https://getfundedafrica.com/assets/images/get-funded-africa-logo.png' alt='GetFundedAfrica Logo' style='width: 150px; height: auto;'>
                        </a>
                        
                        <p><strong>Welcome to GetFundedAfrica!</strong></p>
                    
                        <p>Your account has been successfully created. You can now log in using the details below:</p>
                        
                        <p>
                            <a href='" . base_url() . "' style='color: #007bff; text-decoration: none;'>
                                <i>Click here to access your dashboard</i>
                            </a>
                        </p>
                    
                        <p><strong>Email:</strong> {$email}<br>
                        <strong>Temporary Password:</strong> {$password}</p>
                    
                        <p>We recommend that you change your password after logging in.</p>
                    
                        <p>If you have any questions or need assistance, feel free to contact us at:<br>
                        <strong>info@getfundedafrica.com</strong></p>
                    
                        <p>Best regards,<br>
                        <strong>The GetFundedAfrica Team</strong></p>
                    </div>
                    ";
				  
				   $this->sendMail($email, $message,$subject);	
				}else{
				 echo "1";
				 $passwordLogin = $profile_request[0]['password'];
				
				//     $message = $this->emailMessage($firstname,$email,$passwordLogin) ;
				  
				//   $this->sendMail($email, $message,$subject);
				
			
                 }
				// if($this->gfa_model->getStartUpDetails($email)[0]['Contact_Email']==""){
				//   $this->gfa_model->insertStartupProfile($data_startup); 
				// }else{
				//   $this->gfa_model->saveStartupProfile($email,$data_startup_update); 
				// }
				
				
				
				
					    
					   
			
    }
    
    public function pricingsuburl(){
        
                    $sub  = session()->get('sub') ;
                    $subType = session()->get('type') ;
                    $amt     = session()->get('amt') ;
                    $gatewayPay= session()->get('gatewayPay') ; 
                    
                    //echo $sub; 
        
        return redirect()->to(base_url("gfa/paypro?onetime=0&package=funding&type={$subType}&sub={$sub}&amt={$amt}"));
        
    }
    
    public function pricingsub($subscription="",$subType="", $amount="", $gatewayPay="" )

    {  
                            $newdata = array( 
                            
                            'sub'  => urldecode($subscription),
                            'type' => $subType,
                            'amt'     => urldecode($amount), 
                            'gatewayPay'=>$gatewayPay
                                                      
                            );  
                           
                             session()->set($newdata);
                            
                            //print_r($arraySub);
                            
                            return redirect()->to(base_url('gfa/register_sub'));    


                
                            
    }

    public function stripepost_ext()

    {  
                            $newdata = array( 
                            
                            'sub'  => $this->request->getGet('subscription'), 
                            'amt'     => $this->request->getGet('amount'), 
                            'payment_plan' => 'stripePlan',
                            'account_type' => 'startup',                            
                            );  
                           
                            session()->set($newdata);
                            


                
                            
    }

    public function stripe()

    {                  
                        $email = session()->get('email');
                        $subtype = session()->get('type');
                        $sub = session()->get('sub');
                        $amount = session()->get('amt');
                        $name = session()->get('name');
                        $phone = session()->get('phone');
                        $trans_ref = session()->get('trans_ref');
                        $ref_id = time();
                        $time_submit =  date("Y-m-d h:i:s A",time());
                         
                            $data   =   array(

                                'name'  =>  $name,
                                'email'     =>  $email,
                                'phone'     =>$phone,
                                'subtype'   =>  $subtype,
                                'amount'    =>  $amount,
                                'ref_id'    =>  $ref_id,
                                'trans_ref'     =>  $trans_ref,
                                'time_submit'   =>  $time_submit
                                        
                                );

                    //$this->gfa_model->insertPromoSub($data);
                    $randPass = sha1(time());
                                        $Password = "gfa".substr($randPass,0,5);
                                        $data_login =   array(
                                        
                                        'email' => $email,
                                        'password' => $Password,
                                        'account_type' => 'startup',
                                             
                                            ); 
                                            
                                        $data_startup   =   array(

                                        
                                        'Primary_Contact_Name'  => $name,
                                        'Contact_Email'     => $email,
                                        'Phones'    => $phone,
                                        
                                        );
                    //===================================Message Content ===================================
                    $message = "<a href='https://fundraisercrm.io/portal/'><img src='https://fundraisercrm.io/images/logo-1.png'></a>
                            <br>
                            <h4>Hello ".$name.",</h4>
                            <p>I would like to personally welcome you and congratulate you on being a member of the GFA Tech Family! GFA Tech helps companies grow, and we make it easier to attract funding.</p>
                            <p>As a user, you have access to many of our awesome products including:</p>
                            <ul>
                                <li>GFA Investors Finder,</li>
                                <li>GFA Business Journey,</li>
                                <li>GFA Marketplaces (service marketplace and digital product marketplace),</li>
                                <li>GFA Perks,</li>
                                <li>So much more.</li>
                            </ul>
                            <p>To grow your business even faster, and for unlimited access to all our features, consider taking on a paid subscription.</p>
                            <p>If you have any questions, please reach out to our Customer Support Team via email on <a href='mailto:info@gfa-tech.com'>info@gfa-tech.com</a></p>
                            <p>Once again, thank you for joining the GFA Family. I am excited to have you</p><br>
                            <a href='https://fundraisercrm.io/portal/'>Sign-in to your user dashboard</a> 
                            <p>
                            <strong>Login details below:</strong>
                            </p>
                            <p>
                            Email: ".$email."<br>"."Password: ".$Password."<br><br> 
                            </p>
                            
                            <p>Regards,</p>
                            <p>Adebola (Debo) Omololu</p>
                            <p>Co-Founder &amp; CEO</p>
                            <p>GFA TECH</p>
                                ";
                    $subject = "GFA Onboarding Welcome";
                    //======================= End Message =============================================
                                    if($this->gfa_model->getStartUpDetails($email)[0]['Contact_Email']==""){
                                       $this->gfa_model->insertStartupProfile($data_startup); 
                                    }
                                    $previous_check = $this->gfa_model->checkEmail($email);
                                    if($previous_check == 0){
                                    $this->gfa_model->insertLogin($data_login);
                                    //$this->sendMail($email, $message,$subject); 
                                    }


                $title['page_title'] = "Stripe Payment | GFA-TECH TECH";
                $data['email'] = $email;
                    // echo view('header_form',$title);

                    echo view('stripe', $data);

                    // echo view('header_form');

                                    


}



    public function stripepost()

    {  

                            $name = $this->request->getGet('name');
                            $email = $this->request->getGet('email');
                            $phone = $this->request->getGet('phone');
                            $subtype = $this->request->getGet('subType');
                            $amount = $this->request->getGet('amount');
                            $trans_ref = $this->request->getGet('trans_ref');
                            $industry = $this->request->getGet('industry');
                            $country = $this->request->getGet('country');
                            

                            //'onetime' => $this->request->getPost('onetime'),
                            $newdata = array( 
                            'type'  => $this->request->getGet('subType'),
                            'sub'  => $this->request->getGet('subscription'), 
                            'amt'     => $this->request->getGet('amount'), 
                            'package' => $this->request->getGet('subpackage'),
                            'payment_plan' => 'stripePlan',
                            'account_type' => 'startup',
                            'email' => $email,
                            'name' => $name,
                            'phone' => $phone,
                            'industry' => $industry,
                            'country' => $country,
                            'trans_ref' => $this->request->getGet('trans_ref')
                            );  
                            //$email  = session()->get('email');
                            session()->set($newdata);
                            session()->set('email', $email);
                            session()->set('account_type', "startup");


                
                            
    }
    
    public function create_subscription_ext()
{
    $input = json_decode(file_get_contents('php://input'), true);

    if (!isset($input['email']) || !isset($input['paymentMethodId'])) {
        return $this->response->setStatusCode(400)->setJSON([
            'error' => ['message' => 'Invalid input']
        ]);
    }

    $email = $input['email'];
    $paymentMethodId = $input['paymentMethodId'];
    $customerName = session()->get('name') ?? 'Anonymous';
    $amount = session()->get('amt') ?? 599; // fallback

    // Price mapping
    $priceMap = [
        599 => "price_1REkeeG1A6yEwxeIqnBqGJe2",
        300 => "price_1RbhutG1A6yEwxeIhHkW7lpc",
        400 => "price_1RbhygG1A6yEwxeITB1uQPDG",
        475 => "price_1Rbi0eG1A6yEwxeIcs225Slq",
        799 => "price_1REkghG1A6yEwxeIJtxCzTTP",
        949 => "price_1REkiNG1A6yEwxeIpnKkO7qa",
        3234 => "price_1REkuZG1A6yEwxeInxjeoUbY",
        4314 => "price_1REkvrG1A6yEwxeIIw58tpJX",
        5124 => "price_1REkxJG1A6yEwxeIOo9kAtkl",
        5750 => "price_1REkzSG1A6yEwxeI9AxTFhOp",
        7670 => "price_1REl0lG1A6yEwxeIFAaEmteM",
        9110 => "price_1REl3IG1A6yEwxeIBGCsUsbu",
        1    => "price_1RJB4eG1A6yEwxeIr2tHsyCs",
        12386 => "price_1RI9lEG1A6yEwxeIxPbQT0YJ",
        6852  => "price_1RI9hDG1A6yEwxeIiiwzqnII",
        1291  => "price_1RI9bxG1A6yEwxeINOlLpQej",
        10465 => "price_1RI9WtG1A6yEwxeIENLeAXTj",
        5868  => "price_1RI9K8G1A6yEwxeI1d28r3S5",
        1086  => "price_1RI9G2G1A6yEwxeIaLWAMlnU",
        7920  => "price_1RI9BTG1A6yEwxeIO7rW4ifp",
        4398  => "price_1RI98yG1A6yEwxeIWEwDzKWZ",
        814   => "price_1RI97eG1A6yEwxeIvK4tLUvu",
        7288  => "price_1RI90eG1A6yEwxeIFKlIMWWv",
        4098  => "price_1RI8ziG1A6yEwxeI7h5P6Gvw",
        759   => "price_1RI8yGG1A6yEwxeIPI3hGKDs",
        6136  => "price_1RI8wZG1A6yEwxeImyjiSU5U",
        3451  => "price_1RI8uiG1A6yEwxeI27DPNqee",
        639   => "price_1RI8tdG1A6yEwxeIeLbn2PTQ",
        4600  => "price_1RI8rAG1A6yEwxeIPPwbf9fh",
        2587  => "price_1RI8mzG1A6yEwxeI5w706C2M",
        479   => "price_1RI8k1G1A6yEwxeIk0vZDeh4",
    ];

    $price_id = $priceMap[$amount] ?? "price_1REkeeG1A6yEwxeIqnBqGJe2";

    \Stripe\Stripe::setApiKey(env('STRIPE_SECRET_KEY'));

    try {
        // Create Stripe customer
        $customer = \Stripe\Customer::create([
            'email' => $email,
            'name' => $customerName,
            'payment_method' => $paymentMethodId,
            'invoice_settings' => ['default_payment_method' => $paymentMethodId],
        ]);

        // Create subscription and charge immediately
        $subscription = \Stripe\Subscription::create([
            'customer' => $customer->id,
            'items' => [['price' => $price_id]],
            'payment_behavior' => 'default_incomplete',
            'expand' => ['latest_invoice'],
        ]);

        // Check if subscription ID exists
        if (!empty($subscription->id)) {
            return $this->response->setJSON([
                'status' => 'success',
                'message' => 'Subscription created successfully',
                'subscriptionId' => $subscription->id,
            ]);
        } else {
            return $this->response->setStatusCode(500)->setJSON([
                'status' => 'error',
                'message' => 'Subscription creation failed',
            ]);
        }

    } catch (\Stripe\Exception\ApiErrorException $e) {
        return $this->response->setStatusCode(400)->setJSON([
            'status' => 'error',
            'message' => $e->getMessage(),
        ]);
    }
}

    
    public function create_subscription_ext_XY()
{
    $input = json_decode(file_get_contents('php://input'), true);

    if (!isset($input['email']) || !isset($input['paymentMethodId'])) {
        return $this->response->setStatusCode(400)->setJSON(['error' => ['message' => 'Invalid input']]);
    }

    $email = $input['email'];
    $paymentMethodId = $input['paymentMethodId'];
    $customerName = session()->get('name') ?? 'Anonymous';
    $amount = session()->get('amt') ?? 599;
    $customerDescription = "Unleashified Subscription";

    $priceMap = [
        599 => "price_1REkeeG1A6yEwxeIqnBqGJe2",
        300 => "price_1RbhutG1A6yEwxeIhHkW7lpc",
        400 => "price_1RbhygG1A6yEwxeITB1uQPDG",
        475 => "price_1Rbi0eG1A6yEwxeIcs225Slq",
        799 => "price_1REkghG1A6yEwxeIJtxCzTTP",
        949 => "price_1REkiNG1A6yEwxeIpnKkO7qa",
        3234 => "price_1REkuZG1A6yEwxeInxjeoUbY",
        4314 => "price_1REkvrG1A6yEwxeIIw58tpJX",
        5124 => "price_1REkxJG1A6yEwxeIOo9kAtkl",
        5750 => "price_1REkzSG1A6yEwxeI9AxTFhOp",
        7670 => "price_1REl0lG1A6yEwxeIFAaEmteM",
        9110 => "price_1REl3IG1A6yEwxeIBGCsUsbu",
        1    => "price_1RJB4eG1A6yEwxeIr2tHsyCs",
        12386 => "price_1RI9lEG1A6yEwxeIxPbQT0YJ",
        6852  => "price_1RI9hDG1A6yEwxeIiiwzqnII",
        1291  => "price_1RI9bxG1A6yEwxeINOlLpQej",
        10465 => "price_1RI9WtG1A6yEwxeIENLeAXTj",
        5868  => "price_1RI9K8G1A6yEwxeI1d28r3S5",
        1086  => "price_1RI9G2G1A6yEwxeIaLWAMlnU",
        7920  => "price_1RI9BTG1A6yEwxeIO7rW4ifp",
        4398  => "price_1RI98yG1A6yEwxeIWEwDzKWZ",
        814   => "price_1RI97eG1A6yEwxeIvK4tLUvu",
        7288  => "price_1RI90eG1A6yEwxeIFKlIMWWv",
        4098  => "price_1RI8ziG1A6yEwxeI7h5P6Gvw",
        759   => "price_1RI8yGG1A6yEwxeIPI3hGKDs",
        6136  => "price_1RI8wZG1A6yEwxeImyjiSU5U",
        3451  => "price_1RI8uiG1A6yEwxeI27DPNqee",
        639   => "price_1RI8tdG1A6yEwxeIeLbn2PTQ",
        4600  => "price_1RI8rAG1A6yEwxeIPPwbf9fh",
        2587  => "price_1RI8mzG1A6yEwxeI5w706C2M",
        479   => "price_1RI8k1G1A6yEwxeIk0vZDeh4",
    ];

    $price_id = $priceMap[$amount] ?? "price_1REkeeG1A6yEwxeIqnBqGJe2";

    \Stripe\Stripe::setApiKey(env('STRIPE_SECRET_KEY'));

    try {
        $customer = \Stripe\Customer::create([
            'email' => $email,
            'name' => $customerName,
            'description' => $customerDescription,
            'payment_method' => $paymentMethodId,
            'invoice_settings' => ['default_payment_method' => $paymentMethodId],
        ]);

        $subscription = \Stripe\Subscription::create([
            'customer' => $customer->id,
            'items' => [['price' => $price_id]],
            'payment_behavior' => 'default_incomplete',
            'expand' => ['latest_invoice'],
        ]);

        $payment_intent = $subscription->latest_invoice->payment_intent ?? null;
        $client_secret = $payment_intent ? $payment_intent->client_secret : null;

        return $this->response->setJSON([
            'subscriptionId' => $subscription->id,
            'clientSecret' => $client_secret,
        ]);
    } catch (\Stripe\Exception\ApiErrorException $e) {
        return $this->response->setStatusCode(400)->setJSON(['error' => ['message' => $e->getMessage()]]);
    }
}



public function create_subscription_ext_X()
{
    // Set headers for CORS and JSON content
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
    header("Access-Control-Allow-Headers: Content-Type, Authorization");
    header("Content-Type: application/json; charset=utf-8");

    // Handle preflight CORS request
    if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
        http_response_code(200);
        exit;
    }

    // Get and decode incoming JSON body
    $input = json_decode(file_get_contents('php://input'), true);
    $email = $input['email'] ?? null;
    $paymentMethodId = $input['paymentMethodId'] ?? null;

    // Validate required fields
    if (!$email || !$paymentMethodId) {
        return $this->response->setStatusCode(400)->setJSON([
            'error' => ['message' => 'Invalid input: email and paymentMethodId are required.']
        ]);
    }

    // Retrieve amount and user name from session
    $amount = session()->get('amt');
    $customerName = session()->get('name');
    $customerDescription = "Unleashified Subscription";

    // Define a mapping of amount to Stripe price IDs
    //price_1RJB4eG1A6yEwxeIr2tHsyCs
    //price_1REo7uG1A6yEwxeIAjoBn3sM
    $priceMap = [
        599 => "price_1REkeeG1A6yEwxeIqnBqGJe2",
        799 => "price_1REkghG1A6yEwxeIJtxCzTTP",
        949 => "price_1REkiNG1A6yEwxeIpnKkO7qa",
        3234 => "price_1REkuZG1A6yEwxeInxjeoUbY",
        4314 => "price_1REkvrG1A6yEwxeIIw58tpJX",
        5124 => "price_1REkxJG1A6yEwxeIOo9kAtkl",
        5750 => "price_1REkzSG1A6yEwxeI9AxTFhOp",
        7670 => "price_1REl0lG1A6yEwxeIFAaEmteM",
        9110 => "price_1REl3IG1A6yEwxeIBGCsUsbu",
        1    => "price_1RJB4eG1A6yEwxeIr2tHsyCs",
        12386 => "price_1RI9lEG1A6yEwxeIxPbQT0YJ",
        6852 => "price_1RI9hDG1A6yEwxeIiiwzqnII",
        1291 => "price_1RI9bxG1A6yEwxeINOlLpQej",
        10465 => "price_1RI9WtG1A6yEwxeIENLeAXTj",
        5868 => "price_1RI9K8G1A6yEwxeI1d28r3S5",
        1086 => "price_1RI9G2G1A6yEwxeIaLWAMlnU",
        7920 => "price_1RI9BTG1A6yEwxeIO7rW4ifp",
        4398 => "price_1RI98yG1A6yEwxeIWEwDzKWZ",
        814  => "price_1RI97eG1A6yEwxeIvK4tLUvu",
        7288 => "price_1RI90eG1A6yEwxeIFKlIMWWv",
        4098 => "price_1RI8ziG1A6yEwxeI7h5P6Gvw",
        759  => "price_1RI8yGG1A6yEwxeIPI3hGKDs",
        6136 => "price_1RI8wZG1A6yEwxeImyjiSU5U",
        3451 => "price_1RI8uiG1A6yEwxeI27DPNqee",
        639  => "price_1RI8tdG1A6yEwxeIeLbn2PTQ",
        4600 => "price_1RI8rAG1A6yEwxeIPPwbf9fh",
        2587 => "price_1RI8mzG1A6yEwxeI5w706C2M",
        479  => "price_1RI8k1G1A6yEwxeIk0vZDeh4",
    ];

    // Fallback price if not found
    $price_id = $priceMap[$amount] ?? "price_1REkeeG1A6yEwxeIqnBqGJe2";

    // Set Stripe secret key
    \Stripe\Stripe::setApiKey(env('STRIPE_SECRET_KEY'));

    try {
        // Create a new Stripe customer
        $customer = \Stripe\Customer::create([
            'email' => $email,
            'name' => $customerName,
            'description' => $customerDescription,
            'payment_method' => $paymentMethodId,
            'invoice_settings' => [
                'default_payment_method' => $paymentMethodId
            ],
        ]);

        // Create a Stripe subscription for the customer
        $subscription = \Stripe\Subscription::create([
            'customer' => $customer->id,
            'items' => [['price' => $price_id]],
            'expand' => ['latest_invoice.payment_intent'],
        ]);

        // Optional: log or perform additional logic
        // $this->stripepay_ext($paymentMethodId);

        // Return successful JSON response
        return $this->response->setJSON($subscription);

    } catch (\Stripe\Exception\ApiErrorException $e) {
        return $this->response->setStatusCode(400)->setJSON([
            'error' => ['message' => $e->getMessage()]
        ]);
    }
}


public function stripepay_ext($paymentMethodId="")

    {
        //data:{ref:ref,amount:totalAmount,subscription:subscription,subType:subType,startup:startup,name:name,phone:phone,email:email,industry:industry,country:country},      
                $ref = $paymentMethodId;
                $startup = "Startup";
                $name= session()->get('name');
                $phone = session()->get('phone');
                $email = session()->get('email');
                $industry= session()->get('industry');
                $country = session()->get('country');
                $time   =  date("Y-m-d h:i:s A",time());
                $subscription = session()->get('sub');
                $interval = session()->get('type');
                $time_start     =  date("Y-m-d h:i:s A",time());
                

                if($interval =='monthly'){
                    $duration = 'month';
                    $credit = 45;
                    
                }
                if($interval =="bi-annually"){
                  $interval = 'bi-annually';  //annually
                  $duration = 'month';
                  $duration_ext= 'month';
                  
                  $credit = 45;
                }
                if($interval =="yearly"){
                  $interval = 'annually';  //annually
                  $duration = 'year';
                  
                  $credit = 45;
                }

                if($interval =="daily"){
                  $interval = 'daily';  //annually
                  $duration = 'day';
                  $credit = 45;
                  
                }

                if($interval =="quarterly"){
                  $interval = 'quarterly';  //quarterly
                  $duration = 'quarter';
                  $duration_ext= 'month';
                  
                  $credit = 45;
                  
                }
                $amount = session()->get('amt');
                $amountx = session()->get('amt');
                $onetime = 1;//$this->session->userdata('onetime') ;
                $gateway = "stripe pay";
                $time_submit    =  date("Y-m-d h:i:s A",time());
                $package = 'funding';//$this->session->userdata('package');  
                $status  =  'active';
                $payment_status  = 'paid';
                $single_app = "Unleahified";
                $extra_apps = "";
                $startYr  =  strtotime($time_start );

                        // if($interval == 'bi-annually'){
                        //     $time_end   = strtotime("6". $duration_ext, $startYr);
                        //     }else{
                        //      $time_end   = strtotime("6". $duration, $startYr);   
                        //     }
                        if($interval == 'quarterly'){
                            $time_end   = strtotime("4". $duration_ext, $startYr);
                            }elseif($interval == 'bi-annually'){

                              // Add 6 months to the starting date for bi-annual intervals
                                $time_end = strtotime("+6 months", $startYr); 
                            }
                            else{
                             $time_end   = strtotime("1". $duration, $startYr);   
                            }
                            $time_end   = date("Y-m-d h:i:s A",$time_end);
                            
                    
                // insert to Subscription table
                            
                            $data_subscription  =   array(

                                    'ref'   => $ref,
                                    'email'     => $email,
                                    'subscription'  => $subscription,
                                    'subtype'   => $interval,
                                    'amount'    => $amountx,
                                    'payment_status'    => $payment_status,
                                    'status'    => $status,
                                    'package'   => $package,
                                    'gateway'   => $gateway,
                                    'time_start'    => $time_start,
                                    'time_end'  => $time_end,
                                    'credit' => $credit,
                                    'single_app' => $single_app,
                                    'extra_apps' => $extra_apps,
                                    'country_pay'=>$country,
                                    'time_submit'   => $time_submit
                                    
                                
                                    );
                            
                            $this->gfa_model->insertSubPackageUnleashified($data_subscription);

                            $emailx  = "seun@gfa-tech.com";   
                            //"tunji@fundraisercrm.io";
                            
                            
                            $subject = $name." Subscription Package";
                            //$amount = $amount /100;
                            
                            $message = "<p>Name: ".$name."</p>";
                            $message .= "<p>Phone: ".$phone."</p>";
                            $message .= "<p>Email: ".$email."</p>";
                            $message .= "<p>Startup: ".$startup."</p>";
                            $message .= "<p>Industry: ".$industry."</p>";
                            $message .= "<p>Country: ".$country."</p>";
                            $message .= "<p>===========Subscription=================</p>";
                            $message .= "<p>Payment Status: ".$payment_status."</p>";
                            $message .= "<p>Subscription: ".$subscription."</p>";
                            $message .= "<p>Interval: ".$interval."</p>";
                            $message .= "<p>Amount: #".$amount."</p>";
                            $message .= "<p>Time: ".$time."</p>";
                            $message .= "<p>Ref: ".$ref."</p>";
                            $message .= "<p>Payment Gateway: ".$gateway."</p>";
                            $message .= "<p>Country: ".getCountry()."</p>";
                            
                            $this->sendMail("seun@gfa-tech.com", $message,$subject);
                           #=======================Send Subscribing Message=========================
                           

        
    }

    public function create_subscription()
{
    $input = json_decode(file_get_contents('php://input'), true);

    if (!isset($input['email']) || !isset($input['paymentMethodId'])) {
        return $this->response->setStatusCode(400)->setJSON(['error' => ['message' => 'Invalid input']]);
    }

    $email = $input['email'];
    $paymentMethodId = $input['paymentMethodId'];
    $customerName = session()->get('name') ;
    $amount = session()->get('amt');
    if($amount == 200){

        $price_id = "price_1QwlQ7G1A6yEwxeI6D5I0SnX";
    }elseif($amount == 50){

        $price_id = "price_1Rbdj8G1A6yEwxeIzsMoDTtP";

    }elseif($amount == 75){

        $price_id = "price_1RbdZLG1A6yEwxeIIhilJ21J"; 

    }

    elseif ($amount == 300) {
        $price_id = "price_1QwlSJG1A6yEwxeI0eYMHcVH";
    } elseif($amount == 1){

        $price_id = "price_1Qx9FFG1A6yEwxeIqeP1p1rH";
    }
    else {
        $price_id = "price_1QwlQ7G1A6yEwxeI6D5I0SnX";
    }
    $customerDescription = "GFA Subscription";
     
    \Stripe\Stripe::setApiKey(env('STRIPE_SECRET_KEY'));
 // Replace with your Stripe secret key

    try {
        // Create customer
        $customer = \Stripe\Customer::create([
            'email' => $email,
            'name' => $customerName,
            'description' => $customerDescription,
            'payment_method' => $paymentMethodId,
            'invoice_settings' => ['default_payment_method' => $paymentMethodId],
        ]);

        // Create subscription
        $subscription = \Stripe\Subscription::create([
            'customer' => $customer->id,
            'items' => [['price' => ''.$price_id.'']], // Replace with your Stripe Price ID
            'expand' => ['latest_invoice.payment_intent'],
        ]);

       $this->stripepay($paymentMethodId);

        return $this->response->setJSON($subscription);

    } catch (\Stripe\Exception\ApiErrorException $e) {
        return $this->response->setStatusCode(400)->setJSON(['error' => ['message' => $e->getMessage()]]);
    }
}

public function stripepay($paymentMethodId="")

    {
        //data:{ref:ref,amount:totalAmount,subscription:subscription,subType:subType,startup:startup,name:name,phone:phone,email:email,industry:industry,country:country},      
                $ref = $paymentMethodId;
                $startup = "Startup";
                $name= session()->get('name');
                $phone = session()->get('phone');
                $email = session()->get('email');
                $industry= session()->get('industry');
                $country = session()->get('country');
                $time   =  date("Y-m-d h:i:s A",time());
                $subscription = session()->get('sub');
                $interval = session()->get('type');
                $time_start     =  date("Y-m-d h:i:s A",time());
                

                if($interval =='monthly'){
                    $duration = 'month';
                    $credit = 45;
                    
                }
                if($interval =="bi-annually"){
                  $interval = 'bi-annually';  //annually
                  $duration = 'month';
                  $duration_ext= 'month';
                  
                  $credit = 45;
                }
                if($interval =="yearly"){
                  $interval = 'annually';  //annually
                  $duration = 'year';
                  
                  $credit = 45;
                }

                if($interval =="daily"){
                  $interval = 'daily';  //annually
                  $duration = 'day';
                  $credit = 45;
                  
                }

                if($interval =="quarterly"){
                  $interval = 'quarterly';  //quarterly
                  $duration = 'quarter';
                  $duration_ext= 'month';
                  
                  $credit = 45;
                  
                }
                $amount = session()->get('amt');
                $amountx = session()->get('amt');
                $onetime = 1;//$this->session->userdata('onetime') ;
                $gateway = "stripe pay";
                $time_submit    =  date("Y-m-d h:i:s A",time());
                $package = 'funding';//$this->session->userdata('package');  
                $status  =  'active';
                $payment_status  = 'paid';
                $single_app = "Investor Finder";
                $extra_apps = "";
                $startYr  =  strtotime($time_start );

                        // if($interval == 'bi-annually'){
                        //     $time_end   = strtotime("6". $duration_ext, $startYr);
                        //     }else{
                        //      $time_end   = strtotime("6". $duration, $startYr);   
                        //     }
                        if($interval == 'quarterly'){
                            $time_end   = strtotime("4". $duration_ext, $startYr);
                            }elseif($interval == 'bi-annually'){

                              // Add 6 months to the starting date for bi-annual intervals
                                $time_end = strtotime("+6 months", $startYr); 
                            }
                            else{
                             $time_end   = strtotime("1". $duration, $startYr);   
                            }
                            $time_end   = date("Y-m-d h:i:s A",$time_end);
                            
                    
                // insert to Subscription table
                            
                            $data_subscription  =   array(

                                    'ref'   => $ref,
                                    'email'     => $email,
                                    'subscription'  => $subscription,
                                    'subtype'   => $interval,
                                    'amount'    => $amountx,
                                    'payment_status'    => $payment_status,
                                    'status'    => $status,
                                    'package'   => $package,
                                    'gateway'   => $gateway,
                                    'time_start'    => $time_start,
                                    'time_end'  => $time_end,
                                    'credit' => $credit,
                                    'single_app' => $single_app,
                                    'extra_apps' => $extra_apps,
                                    'country_pay'=>$country,
                                    'time_submit'   => $time_submit
                                    
                                
                                    );
                            
                            $this->gfa_model->insertSubPackageFlutter($data_subscription);

                            $emailx  = "seun@gfa-tech.com";   
                            //"tunji@fundraisercrm.io";
                            
                            
                            $subject = $name." Subscription Package";
                            //$amount = $amount /100;
                            
                            $message = "<p>Name: ".$name."</p>";
                            $message .= "<p>Phone: ".$phone."</p>";
                            $message .= "<p>Email: ".$email."</p>";
                            $message .= "<p>Startup: ".$startup."</p>";
                            $message .= "<p>Industry: ".$industry."</p>";
                            $message .= "<p>Country: ".$country."</p>";
                            $message .= "<p>===========Subscription=================</p>";
                            $message .= "<p>Payment Status: ".$payment_status."</p>";
                            $message .= "<p>Subscription: ".$subscription."</p>";
                            $message .= "<p>Interval: ".$interval."</p>";
                            $message .= "<p>Amount: #".$amount."</p>";
                            $message .= "<p>Time: ".$time."</p>";
                            $message .= "<p>Ref: ".$ref."</p>";
                            $message .= "<p>Payment Gateway: ".$gateway."</p>";
                            $message .= "<p>Country: ".getCountry()."</p>";
                            
                            $this->sendMail("seun@gfa-tech.com", $message,$subject);
                           #=======================Send Subscribing Message=========================
                           $subjectSub = "Welcome to GFA's AI-Powered GFA APP Solution";
                           $messageSub = "<a href='https://fundraisercrm.io/portal/'><img src='https://fundraisercrm.io/portal/public/assets/img/gfa-logo.png'></a>
                        <br>";
                        $messageSub .= "
                        <p>Hello {$name},</p>
                        <p>Wow! Thank you for subscribing to GFA’s AI-Powered GFA APP Solution!</p>
                        <p>My name is Tunji and I am a Co-Founder and Chief Commercial Officer at GFA Tech. On behalf of GFA, I say a big thank you for coming on board.</p>
                        <p>I thought to connect and tell you how you can benefit from your subscription fully; we intend to provide adequate support post-subscription.</p>
                        <p>What Next?</p>
                        <p>Your subscription to the GFA APP represents much more than a transaction to GFA. It has become an entry point for you/your business into the GFA Tech Investor Readiness & Fund Raising Community.</p>
                        <p>To ensure you get the results you expect from the Investor Finder, we intend to:</p>
                        <ul>
                            <li>Hold webinars on how to navigate the Investor Finder & Dos/Don’t’s when connecting with investors.</li>
                            <li>Hold monthly webinars with a guest investor/mentor for advice, insights into positioning your business to become investor ready.</li>
                            <li>Provide a follow-up call before your next subscription.</li>
                            <li>Other initiatives as communicated in our Investor Finder App CRM for Fundraising and revolutionizing investor engagement email sent earlier in the month.</li>
                        </ul>
                        
                        <p>Our Customer Support team would love to hear from you. Don’t hesitate to reach out with questions or feedback via email at <a href='mailto:info@gfa-tech.com'>info@gfa-tech.com</a>.</p>
                        <p>Once again, thank you for joining the GFA Family!</p>
                        <p><a href='https://fundraisercrm.io/portal/'>Sign in to your user dashboard</a>.</p>
                        <p>Regards,</p>
                        <p>Tunji Oke</p>
                        <p>Co-Founder & CCO</p>
                        <p>GFA Tech</p>";
                           $this->sendMail($email, $messageSub,$subjectSub);

        
    }
    
    public function subpayflutter()

	{
            //data:{ref:ref,amount:totalAmount,subscription:subscription,subType:subType,startup:startup,name:name,phone:phone,email:email,industry:industry,country:country},	    
            $ref = $this->request->getPost('ref');
            $startup = $this->request->getPost('startup');
            $name= $this->request->getPost('name');
            $phone = $this->request->getPost('phone');
            $email = $this->request->getPost('email');
            $industry= $this->request->getPost('industry');
            $country = $this->request->getPost('country');
            $time 	=  date("Y-m-d h:i:s A",time());
            $subscription = $this->request->getPost('subscription');
            $interval = $this->request->getPost('subType');

            if($interval =='monthly'){
                $duration = 'month';
                $credit = 45;
                
            }
            if($interval =="yearly"){
              $interval = 'annually';  //annually
              $duration = 'year';
              
              $credit = 45;
            }

            if($interval =="daily"){
              $interval = 'daily';  //annually
              $duration = 'day';
              $credit = 45;
              
            }

            if($interval =="quarterly"){
              $interval = 'quarterly';  //quarterly
              $duration = 'quarter';
              $duration_ext= 'month';
              
              $credit = 45;
              
            }
            $amount = $this->request->getPost('amount');
            $amountx = $this->request->getPost('amount');
            $onetime = 1;//$this->session->userdata('onetime') ;
            $gateway = "flutter pay";
            $time_submit 	=  date("Y-m-d h:i:s A",time());
            $time_start 	=  date("Y-m-d h:i:s A",time());
            $package = 'funding';//$this->session->userdata('package');  
            $status  =  'active';
            $payment_status  = 'paid';
            $single_app = "Investor Finder";
            $extra_apps = "";
            $startYr  =  strtotime($time_start );
                if($duration == 'quarter'){
                  $time_end   = strtotime("4". $duration_ext, $startYr);
                        }else{
                        $time_end   = strtotime("1". $duration, $startYr);   
                        }
                  $time_end   = date("Y-m-d h:i:s A",$time_end);
                  
              
            // insert to Subscription table
                  
                  $data_subscription	= 	array(

                      'ref' 	=> $ref,
                      'email' 	=> $email,
                      'subscription' 	=> $subscription,
                      'subtype' 	=> $interval,
                      'amount' 	=> $amountx,
                      'payment_status' 	=> $payment_status,
                      'status' 	=> $status,
                      'package' 	=> $package,
                      'gateway' 	=> $gateway,
                      'time_start' 	=> $time_start,
                      'time_end' 	=> $time_end,
                      'credit' => $credit,
                      'single_app' => $single_app,
                      'extra_apps' => $extra_apps,
                      'country_pay'=>getCountry(),
                      'time_submit' 	=> $time_submit
                      
                    
                      );
                  
                  $this->gfa_model->insertSubPackageFlutter($data_subscription);

                  $emailx  = "ugochi@getfundedafrica.com";   
                  //"tunji@getfundedafrica.com";
                  
                  
                  $subject = $name." Subscription Package";
                  //$amount = $amount /100;
                  
                  $message = "<p>Name: ".$name."</p>";
                  $message .= "<p>Phone: ".$phone."</p>";
                  $message .= "<p>Email: ".$email."</p>";
                  $message .= "<p>Startup: ".$startup."</p>";
                  $message .= "<p>Industry: ".$industry."</p>";
                  $message .= "<p>Country: ".$country."</p>";
                  $message .= "<p>===========Subscription=================</p>";
                  $message .= "<p>Payment Status: ".$payment_status."</p>";
                  $message .= "<p>Subscription: ".$subscription."</p>";
                  $message .= "<p>Interval: ".$interval."</p>";
                  $message .= "<p>Amount: #".$amount."</p>";
                  $message .= "<p>Time: ".$time."</p>";
                  $message .= "<p>Ref: ".$ref."</p>";
                  $message .= "<p>Payment Gateway: ".$gateway."</p>";
                  $message .= "<p>Country: ".getCountry()."</p>";
                  
                  $this->sendMail("dashotemitope@gmail.com", $message,$subject);
                      #=======================Send Subscribing Message=========================
                      $subjectSub = "Welcome to GFA's AI-Powered Investor Finder CRM Solution";
                      $messageSub = "<a href='https://getfundedafrica.com'><img src='https://getfundedafrica.com/images/logo-1.png'></a>
                    <br>";
                    $messageSub .= "
                    <p>Hello {$name},</p>
                    <p>Wow! Thank you for subscribing to GFA’s AI-Powered Investor Finder CRM Solution!</p>
                    <p>My name is Tunji and I am a Co-Founder and Chief Commercial Officer at GetFundedAfrica. On behalf of GFA, I say a big thank you for coming on board.</p>
                    <p>I thought to connect and tell you how you can benefit from your subscription fully; we intend to provide adequate support post-subscription.</p>
                    <p>What Next?</p>
                    <p>Your subscription to the Investor Finder CRM represents much more than a transaction to GFA. It has become an entry point for you/your business into the GetFundedAfrica Investor Readiness & Fund Raising Community.</p>
                    <p>To ensure you get the results you expect from the Investor Finder, we intend to:</p>
                    <ul>
                        <li>Hold webinars on how to navigate the Investor Finder & Dos/Don’t’s when connecting with investors.</li>
                        <li>Hold monthly webinars with a guest investor/mentor for advice, insights into positioning your business to become investor ready.</li>
                        <li>Provide a follow-up call before your next subscription.</li>
                        <li>Other initiatives as communicated in our Investor Finder App CRM for Fundraising and revolutionizing investor engagement email sent earlier in the month.</li>
                    </ul>
                    
                    <p>Our Customer Support team would love to hear from you. Don’t hesitate to reach out with questions or feedback via email at <a href='mailto:info@getfundedafrica.com'>info@getfundedafrica.com</a>.</p>
                    <p>Once again, thank you for joining the GFA Family!</p>
                    <p><a href='https://investorsfinder.getfundedafrica.com/gfa/login'>Sign in to your user dashboard</a>.</p>
                    <p>Regards,</p>
                    <p>Tunji Oke</p>
                    <p>Co-Founder & CCO</p>
                    <p>GetFundedAfrica</p>";
                      $this->sendMail($email, $messageSub,$subjectSub);

	    
	}

public function paypro()

	{	
	   $request = service('request'); 
	   
	    $plan_token = $request->getGet('type');
	    
	   
		if($plan_token == 'daily'){
			$payment_plan = '92966'  ;
		}
		if($plan_token == 'monthly'){
			if(getCountry()=='Nigeria'){ $payment_plan = '98801'; }  //  93207 98801
			 elseif(getCountry()=='Ghana'){ $payment_plan = '95204'; }
			 elseif(getCountry()=='Kenya'){ $payment_plan = '95208'; }
			 elseif(getCountry()=='South Africa'){ $payment_plan = '95209'; }
			 elseif(getCountry()=='Cameroon' || getCountry()=='Central African Republic' || getCountry()=='Chad' || getCountry()=='DR Congo' 
 || getCountry()=='Equatorial Guinea' || getCountry()=='Gabon'){ $payment_plan = '95430'; }
			 elseif(getCountry()=='Senegal' || getCountry()=='Mali' 
 || getCountry()=='Niger' || getCountry()=='Ivory Coast' || getCountry()=='Benin' || getCountry()=='Burkina Faso' || getCountry()=='Guinea-Bissau'){ echo '95435'; }
 elseif(getCountry()=='Morocco') {
   $payment_plan = "95478";
 }
 elseif(getCountry()=='Egypt') {
   $payment_plan = "95456";
 }elseif(getCountry()=='Guinea') {
   $payment_plan = "95459";
 }elseif(getCountry()=='Malawi') {
   $payment_plan = "95462";
 }elseif(getCountry()=='Rwanda') {
   $payment_plan = "95465";
 }elseif(getCountry()=='Sierra Leone') {
   $payment_plan = "95481";
 }elseif(getCountry()=='São Tomé and Príncipe') {
   $payment_plan = "95482";
 }elseif(getCountry()=='Tanzania') {
   $payment_plan = "95485";
 }elseif(getCountry()=='Uganda') {
   $payment_plan = "95486";
 }elseif(getCountry()=='Zambia') {
   $payment_plan = "95489";
 }
			 else{ $payment_plan = '';}
		   // $payment_plan = '92959';
	   }
	   if($plan_token == 'quarterly'){
		   $payment_plan = '92968' ;
	   }
	   if($plan_token == 'bi-annually'){
            if(getCountry()=='Nigeria'){ $payment_plan = '136856'; } // fcmb - 134748 
        }
	   if($plan_token == 'yearly'){
			if(getCountry()=='Nigeria'){ $payment_plan = '136857'; }  //92964
			 elseif(getCountry()=='Kenya'){ $payment_plan = '95207'; }
			 elseif(getCountry()=='South Africa'){ $payment_plan = '95210'; }
			 elseif(getCountry()=='Cameroon' || getCountry()=='Central African Republic' || getCountry()=='Chad' || getCountry()=='DR Congo' 
			 || getCountry()=='Equatorial Guinea' || getCountry()=='Gabon'){ $payment_plan = '95431'; }
						 elseif(getCountry()=='Senegal' || getCountry()=='Mali' 
			 || getCountry()=='Niger' || getCountry()=='Ivory Coast' || getCountry()=='Benin' || getCountry()=='Burkina Faso' || getCountry()=='Guinea-Bissau'){ echo '95434'; }
			 elseif(getCountry()=='Morocco') {
			   $payment_plan = "95479";
			 }
			 elseif(getCountry()=='Egypt') {
			   $payment_plan = "95457";
			 }elseif(getCountry()=='Guinea') {
			   $payment_plan = "95458";
			 }elseif(getCountry()=='Malawi') {
			   $payment_plan = "95463";
			 }elseif(getCountry()=='Rwanda') {
			   $payment_plan = "95464";
			 }elseif(getCountry()=='Sierra Leone') {
			   $payment_plan = "95480";
			 }elseif(getCountry()=='São Tomé and Príncipe') {
			   $payment_plan = "95483";
			 }elseif(getCountry()=='Tanzania') {
			   $payment_plan = "95484";
			 }elseif(getCountry()=='Uganda') {
			   $payment_plan = "95487";
			 }elseif(getCountry()=='Zambia') {
			   $payment_plan = "95488";
			 }
			 else{ $payment_plan = '';} 
		   // $payment_plan = '92964' ;
	   }
	    


return redirect()->to(base_url('gfa/checkout'));

}

    public function corperateProfileproDemo()
    {
        $email = session()->get('email');
        $name = $this->request->getPost("firstName") . " " . $this->request->getPost("lastName");
        // $organization = $this->request->getPost("organization");
        $phoneNumber = $this->gfa_model->mysqlCheck($this->request->getPost("phoneNumber"));
        $address = $this->request->getPost("Business_address");
        $gender = $this->request->getPost("gender");
        $facebook = $this->gfa_model->mysqlCheck($this->request->getPost("Facebook"));
        $linkedIn = $this->gfa_model->mysqlCheck($this->request->getPost("LinkedIn"));
        $city = $this->gfa_model->mysqlCheck($this->request->getPost("City"));
        $businessAddress = $this->request->getPost("Business_address");
        $website = $this->gfa_model->mysqlCheck($this->request->getPost("Website"));

        $hearUs = $this->request->getPost("Hear_Us");
        $corporateName = $this->request->getPost("Corporate_Name");
        $industryArray = $this->request->getPost("industry");
        $solutionCorperate = $this->request->getPost("Solution_Corperate");
        $engageStartup = $this->request->getPost("Engage_Startup");
        $startupModel = $this->request->getPost("Startup_Model");
        $coreInterestCorporate = $this->request->getPost("Core_Interest_Corporate");
        $corporateSolutionProx = $this->request->getPost("Corporate_Solution_Prox");
        $solutionOwnership = $this->request->getPost("Solution_Ownership");
        $hqCountry = $this->request->getPost("country");
        $industryArray = $this->request->getPost("industry");
        $industryArray = $this->request->getPost("industry");
        if($hearUs == 'Others'){

        	$hearUs = $this->gfa_model->mysqlCheck($this->request->getPost("Hear_Us_Others"));

        }else{

        	$hearUs = $hearUs;

        }

		if (is_array($industryArray)) {
		    $industry = implode(",", $industryArray);
		} else {
		    // Handle the case where $industryArray is not an array
		    $industry = '';
		}
        $partnerStartupStage = $this->request->getPost("Partner_startup_stage");
        $gfaEvent = $this->request->getPost("Gfa_Event");
        $gfaMedia = $this->request->getPost("GFa_Media");

        $time = date("Y-m-d h:i:s A", time());

        $dataCorporate = [
            'Corporate_Name' => $corporateName,
            'Corporate_industry' => $industry,
            'Need_contact_email' => $email,
            'Hq_country' => $hqCountry,
            'Business_address' => $address,
            'Website' => $website,
            'Key_contact_name' => $name,
            'Phone' => $phoneNumber,
            'Facebook' => $facebook,
            'LinkedIn' => $linkedIn,
            'City' => $city,
            'Hear_Us' => $hearUs,
            'Solution_Corperate' => $solutionCorperate,
            'Engage_Startup' => $engageStartup,
            'Startup_Model' => $startupModel,
            'Core_Interest_Corporate' => $coreInterestCorporate,
            'Corporate_Solution_Prox' => $corporateSolutionProx,
            'Gender' => $gender,
            'Partner_startup_stage' => $partnerStartupStage,
            'Gfa_Event' => $gfaEvent,
            'GFa_Media' => $gfaMedia,
            'Solution_Ownership' => $solutionOwnership
        ];

        $dataCorporateUpdate = [
            'Corporate_Name' => $corporateName,
            'Corporate_industry' => $industry,
            'Hq_country' => $hqCountry,
            'Business_address' => $address,
            'Website' => $website,
            'Key_contact_name' => $name,
            'Phone' => $phoneNumber,
            'Facebook' => $facebook,
            'LinkedIn' => $linkedIn,
            'City' => $city,
            'Hear_Us' => $hearUs,
            'Solution_Corperate' => $solutionCorperate,
            'Engage_Startup' => $engageStartup,
            'Startup_Model' => $startupModel,
            'Core_Interest_Corporate' => $coreInterestCorporate,
            'Corporate_Solution_Prox' => $corporateSolutionProx,
            'Gender' => $gender,
            'Partner_startup_stage' => $partnerStartupStage,
            'Gfa_Event' => $gfaEvent,
            'GFa_Media' => $gfaMedia,
            'Solution_Ownership' => $solutionOwnership
        ];

        $corporateDetails = $this->gfa_model->getCorperateDetails($email);

        if (empty($corporateDetails[0]['Need_contact_email'])) {
            $this->gfa_model->insertCorperateProfile($dataCorporate);
        } else {
            $this->gfa_model->saveCorperateProfile($email, $dataCorporateUpdate);
        }
    }

    public function mentorProfilepro()
    {
        $email = session('email');
        $name = $this->gfa_model->mysqlCheck($this->request->getPost("firstName")) . " " . $this->gfa_model->mysqlCheck($this->request->getPost("lastName"));
        $organization = $this->gfa_model->mysqlCheck($this->request->getPost("organization"));
        $phoneNumber = $this->gfa_model->mysqlCheck($this->request->getPost("phoneNumber"));
        $address = $this->gfa_model->mysqlCheck($this->request->getPost("address"));
        $website = $this->gfa_model->mysqlCheck($this->request->getPost("website"));
        $startupCountry = $this->gfa_model->mysqlCheck($this->request->getPost("startup_country"));
        $industryArray = $this->gfa_model->mysqlCheck($this->request->getPost("industry"));
        $currentStage = $this->gfa_model->mysqlCheck($this->request->getPost("current_stage"));
        $implementationStage = $this->gfa_model->mysqlCheck($this->request->getPost("Implementation_stage"));
        $facebook = $this->gfa_model->mysqlCheck($this->request->getPost("facebook"));
        $linkedIn = $this->gfa_model->mysqlCheck($this->request->getPost("linkedIn"));
        $country = $this->gfa_model->mysqlCheck($this->request->getPost("country"));
        $state = $this->gfa_model->mysqlCheck($this->request->getPost("state"));
        $zipCode = $this->gfa_model->mysqlCheck($this->request->getPost("zipCode"));
        $yearFounded = $this->gfa_model->mysqlCheck($this->request->getPost("year_founded"));
        $hearUs = $this->gfa_model->mysqlCheck($this->request->getPost("Hear_Us"));
        $minCheque =  $this->gfa_model->mysqlCheck($this->request->getPost("Min_Cheque"));
        $maxCheque =  $this->gfa_model->mysqlCheck($this->request->getPost("Max_Cheque"));
        $networth =  $this->gfa_model->mysqlCheck($this->request->getPost("Networth"));
        $noStartup =  $this->gfa_model->mysqlCheck($this->request->getPost("No_Startup"));
        $bioData =  $this->gfa_model->mysqlCheck($this->request->getPost("Bio_data"));
        $mentorsHistory =  $this->gfa_model->mysqlCheck($this->request->getPost("Mentors_history"));
        $meetingFrequency =  $this->gfa_model->mysqlCheck($this->request->getPost("Meeting_Frequency"));
        $hoursReq =  $this->gfa_model->mysqlCheck($this->request->getPost("Hours_Req"));
        $qualification =  $this->gfa_model->mysqlCheck($this->request->getPost("Qualification"));
        $gender =  $this->gfa_model->mysqlCheck($this->request->getPost("Gender"));
        $time = date("Y-m-d h:i:s A", time());
        $mentorshipArray = $this->request->getPost("mentorship");
        // print_r($mentorshipArray);
        // die();
        $mentorshipArray = array_filter($mentorshipArray, 'trim'); // Remove empty values
        $mentorshipArray = array_map('strval', $mentorshipArray); // Convert values to strings
        $mentorship = implode(",", $mentorshipArray);
        // $mentorship = implode(",", $mentorshipArray);
        $industryArray = array_filter($industryArray, 'trim'); // Remove empty values
        $industryArray = array_map('strval', $industryArray); // Convert values to strings
        $industry = implode(",", $industryArray);
        // $industry = implode(",", $industryArray);
        
        $dataMentor = [
            'Company' => $organization,
            'Mentor_name' => $name,
            'Email' => $email,
            'Phone' => $phoneNumber,
            'Website' => $website,
            'Industry' => $industry,
            'Investment_stage' => $currentStage,
            'Investment_Interest' => $implementationStage,
            'Facebook' => $facebook,
            'LinkedIn' => $linkedIn,
            'Nationality' => $country,
            'City' => $state,
            'Min_Cheque' => $minCheque,
            'Max_Cheque' => $maxCheque,
            'Hear_Us' => $hearUs,
            'Mentors_focus' => $mentorship,
            'Gender' => $gender,
            'Role' => $address,
            'Meeting_Frequency' => $meetingFrequency,
            'Mentee_No' => $zipCode,
            'Bio_data' => $bioData,
            'Mentors_history' => $mentorsHistory,
            'WhatsApp_Id' => $networth,
            'Exp' => $noStartup,
            'Hours_Req' => $hoursReq,
            'Qualification' => $qualification,
        ];
    
        $dataMentorUpdate = [
            'Company' => $organization,
            'Mentor_name' => $name,
            'Phone' => $phoneNumber,
            'Website' => $website,
            'Industry' => $industry,
            'Investment_stage' => $currentStage,
            'Investment_Interest' => $implementationStage,
            'Facebook' => $facebook,
            'LinkedIn' => $linkedIn,
            'Nationality' => $country,
            'City' => $state,
            'Min_Cheque' => $minCheque,
            'Max_Cheque' => $maxCheque,
            'Hear_Us' => $hearUs,
            'Mentors_focus' => $mentorship,
            'Gender' => $gender,
            'Role' => $address,
            'Meeting_Frequency' => $meetingFrequency,
            'Mentee_No' => $startupCountry,
            'Bio_data' => $bioData,
            'Mentors_history' => $mentorsHistory,
            'WhatsApp_Id' => $networth,
            'Exp' => $noStartup,
            'Hours_Req' => $hoursReq,
            'Qualification' => $qualification,
        ];
    
        $mentorDetails = $this->gfa_model->getMentorDetails($email);
    
        if (empty($mentorDetails[0]['Email'])) {
            $this->gfa_model->insertMentorProfile($dataMentor);
        } else {
            $this->gfa_model->saveMentorProfile($email, $dataMentorUpdate);
        }
    
        // ...
    }

    public function mentorProfileUpdate()
    {
        $email = session('email');
        $name = $this->gfa_model->mysqlCheck($this->request->getPost("firstName")) . " " . $this->gfa_model->mysqlCheck($this->request->getPost("lastName"));
                
        $Phone = $this->gfa_model->mysqlCheck($this->request->getPost("Phone"));
        $Country = $this->gfa_model->mysqlCheck($this->request->getPost("Country"));
        $State = $this->gfa_model->mysqlCheck($this->request->getPost("State"));
        $Role = $this->gfa_model->mysqlCheck($this->request->getPost("Role"));
        $Mentee_No = $this->gfa_model->mysqlCheck($this->request->getPost("Mentee_No"));
        $Company = $this->gfa_model->mysqlCheck($this->request->getPost("Company"));
        $Industry = $this->gfa_model->mysqlCheck($this->request->getPost("Industry"));
        $Investment_stage = $this->gfa_model->mysqlCheck($this->request->getPost("Investment_stage"));
        $Investment_Interest = $this->gfa_model->mysqlCheck($this->request->getPost("Investment_Interest"));
        $Min_Cheque = $this->gfa_model->mysqlCheck($this->request->getPost("Min_Cheque"));
        $Max_Cheque = $this->gfa_model->mysqlCheck($this->request->getPost("Max_Cheque"));
        $Meeting_Frequency = $this->gfa_model->mysqlCheck($this->request->getPost("Meeting_Frequency"));
        $Hours_Req = $this->gfa_model->mysqlCheck($this->request->getPost("Hours_Req"));
        $Qualification = $this->gfa_model->mysqlCheck($this->request->getPost("Qualification"));
        $WhatsApp_Id = $this->gfa_model->mysqlCheck($this->request->getPost("WhatsApp_Id"));
        $Exp = $this->gfa_model->mysqlCheck($this->request->getPost("Exp"));
        $Website = $this->gfa_model->mysqlCheck($this->request->getPost("Website"));
        $LinkedIn = $this->gfa_model->mysqlCheck($this->request->getPost("LinkedIn"));
        $Facebook = $this->gfa_model->mysqlCheck($this->request->getPost("Facebook"));
        $Hear_Us = $this->gfa_model->mysqlCheck($this->request->getPost("Hear_Us"));
        $mentorshipArray = $this->request->getPost("Mentors_focus");
        $Bio_data = $this->gfa_model->mysqlCheck($this->request->getPost("Bio_data"));
        $Mentors_history = $this->gfa_model->mysqlCheck($this->request->getPost("Mentors_history"));

        $mentorshipArray = array_filter($mentorshipArray, 'trim'); // Remove empty values
        $mentorshipArray = array_map('strval', $mentorshipArray); // Convert values to strings
        $mentorship = implode(",", $mentorshipArray);


        $dataMentorUpdate = [
            'Company' => $Company,
            'Mentor_name' => $name,  
            'Phone' => $Phone,
            'Website' => $Website,
            'Industry' => $Industry,
            'Investment_stage' => $Investment_stage,
            'Investment_Interest' => $Investment_Interest,
            'Facebook' => $Facebook,
            'LinkedIn' => $LinkedIn,
            'Nationality' => $Country,
            'City' => $State,
            'Min_Cheque' => $Min_Cheque,
            'Max_Cheque' => $Max_Cheque,
            'Hear_Us' => $Hear_Us,
            'Mentors_focus' => $mentorship,
            'Role' => $Role,
            'Meeting_Frequency' => $Meeting_Frequency,
            'Mentee_No' => $Mentee_No,
            'Bio_data' => $Bio_data,
            'Mentors_history' => $Mentors_history,
            'WhatsApp_Id' => $WhatsApp_Id,
            'Exp' => $Exp,
            'Hours_Req' => $Hours_Req,
            'Qualification' => $Qualification
        ];

        
        $this->gfa_model->saveMentorProfile($email, $dataMentorUpdate);
    
    }

    

//------------END---------------------------
    
}