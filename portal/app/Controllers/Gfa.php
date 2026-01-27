<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use Config\Session;
use PHPMailer\PHPMailer\PHPMailer;
use CodeIgniter\I18n\Time;
use Config\Services;
use App\Libraries\Pdf;

class Gfa extends BaseController {
    protected $gfa_model;
    protected $admin_model;
    protected $chat_model;

    public function __construct() {
        //parent::__construct();
        $this->gfa_model = model('App\Models\GfaModel');
        $this->admin_model = model('App\Models\AdminModel');
        $this->chat_model = model('App\Models\ChatModel');

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

    public function index() {
        $data['page_title'] = "Login ";
        echo view('header_home',$data);
        echo view('login');
        echo view('header_footer');
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



	//=======================Course Management===========================
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
        $title['page_title'] = "GFA TECH Learning Quiz";
        $data['email'] =  $email;
        $data['login_type'] = session()->get('login_type') ;
        $data['account_type'] = session()->get('account_type') ;
        $data['StartupArray'] = $this->gfa_model->getStartUpDetails($email); 
        $data['skillArray'] = $this->gfa_model->getUserAccountExt($email); 
        $user_action = $this->request->uri->getSegment(2);
	    $this->saveUserActivity($user_action, $email);
        echo view('header-assets-new',$title);
         echo view('menu-assets-new-page',$data);
        echo view('navbar-assets-new',$data);
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
        $title['page_title'] = "GFA TECH Learning Quiz";
        $data['email'] =  $email;
        $data['login_type'] = session()->get('login_type') ;
        $data['account_type'] = session()->get('account_type') ;
        $data['StartupArray'] = $this->gfa_model->getStartUpDetails($email); 
        $data['skillArray'] = $this->gfa_model->getUserAccountExt($email); 
        $data['getQuizTitle'] = $this->gfa_model->getQuizTitle($ref_id); 
        $data['quiz_attempted'] = $this->gfa_model->countQuizAttempted($ref_id,$email); 
        $user_action = $this->request->uri->getSegment(2);
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
        $title['page_title'] = "GFA TECH Learning Task";
        $data['email'] =  $email;
        $data['login_type'] = session()->get('login_type') ;
        $data['account_type'] = session()->get('account_type') ;
        $data['StartupArray'] = $this->gfa_model->getStartUpDetails($email); 
        $data['skillArray'] = $this->gfa_model->getUserAccountExt($email); 
        $data['getTaskTitle'] = $this->gfa_model->getTaskTitle($ref_id); 
        $data['quiz_attempted'] = $this->gfa_model->countTaskAttempted($ref_id,$email); 
        $user_action = $this->request->uri->getSegment(2);
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
        $title['page_title'] = "GFA TECH Learning Quiz";
        $data['email'] =  $email;
        $data['login_type'] = session()->get('login_type') ;
        $data['account_type'] = session()->get('account_type') ;
        $data['StartupArray'] = $this->gfa_model->getStartUpDetails($email); 
        $data['skillArray'] = $this->gfa_model->getUserAccountExt($email); 
        $data['getQuizTitle'] = $this->gfa_model->getQuizTitle($ref_id); 
        $data['quiz_attempted'] = $this->gfa_model->countQuizAttempted($ref_id,$email); 
        $user_action = $this->request->uri->getSegment(2);
	    $this->saveUserActivity($user_action, $email);
        echo view('header-assets-new',$title);
         echo view('menu-assets-new-page',$data);
        echo view('navbar-assets-new',$data);
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




// ================== Beginning of Tickets ==========================


public function manage_ticket()

{
    $email  = session()->get('email') ; if(($email == '')){ return redirect()->to(base_url('admin/login')); }		
    $title['page_title'] = "Manage Ticket Section - GetFundedAfrica";
    $data['email'] =  $email;
    // $data['login_type'] = session()->get('login_type') ;
    // $data['account_type'] = $account_type = session()->get('account_type');

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

    $title['page_title'] = "Manage Ticket Section - GetFundedAfrica";
    $data['email'] =  $email;
    $data['id'] =$id;
    // $data['login_type'] = session()->get('login_type') ;
    // $data['account_type'] = $account_type = session()->get('account_type');

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
    // $maxid = $this->gfa_model->getTicketMaxId();
    // $maxid_length = strlen($maxid);
    // // echo $maxid_length; exit;
    // $prefix = '';
    // if ($maxid_length == 0) {
    //     $prefix = '001';
    //     $ticket_id   = $random_number.$prefix;
    // } elseif ($maxid_length == 1) {
    //     $prefix = '00';
    //     $ticket_id   = $random_number.$prefix.$maxid+1;
    // } elseif ($maxid_length == 2) {
    //     $prefix = '0';
    //     $ticket_id   = $random_number.$prefix.$maxid+1;
    // }

	$ticket_id = 'skill_gateway_'.$random_number.time();
    // $ticket_id   = bin2hex(random_bytes(16));
    $subject = $this->gfa_model->mysqlCheck($this->request->getPost("subject"));
    $urgency = $this->gfa_model->mysqlCheck($this->request->getPost("urgency"));
    $message = $this->gfa_model->mysqlCheck($this->request->getPost("message"));
    // $role = $this->gfa_model->mysqlCheck($this->request->getPost("role"));

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
            'role' => 'User',              
            'date_updated' => date("Y-m-d H:i:s", time())                 
        );
        
        $this->gfa_model->insertSTicket($data_story1);  
        $this->gfa_model->insertSMTicket($data_story2); 
        echo "Ticket opened successfully";
    }
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
            'role' => $role,
            'date_updated' => date("Y-m-d H:i:s", time())                 
        );


    if ($role == 'User') {        
        $this->gfa_model->updateTicketStatus('status', 0, $ticket_id); 
    }
    
    $this->gfa_model->insertSMTicket($data_story); 
    echo "Message sent successfully";
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

public function loadCourseAnalytics(){
        $email   = $this->request->getPost("email"); 
        
        echo view('loadCourseAnalytics');
        
    }

public function loadSoftsKillsAnalytics(){
        $email   = $this->request->getPost("email"); 
        
        echo view('loadSoftsKillsAnalytics');
        
    }

public function lesson_progress($course="")

    {
        
        $email  = session()->get('email') ;
        if(($email == '')){ return redirect()->to(base_url('gfa/login')); }
        $title['page_title'] = "Lesson Progress Gateway";
        $data['email'] =  $email;
        $data['login_type'] = session()->get('login_type') ;
        $data['account_type'] = session()->get('account_type') ;
        
        $data['course'] = urldecode($course);
        echo view('header-assets-new',$title);
        echo view('menu-assets-new',$data);
        echo view('navbar-assets-new',$data);
        echo view('lesson_progress', $data);
        echo view('footer-assets-new',$data); 

    }


	public function support_ticket()

    {
        
        $email  = session()->get('email') ;
        if(($email == '')){ return redirect()->to(base_url('gfa/login')); }
        $title['page_title'] = "Gateway Contact Admin";
        $data['email'] =  $email;
        $data['login_type'] = session()->get('login_type') ;
        $data['account_type'] = session()->get('account_type') ;
        $data['StartupArray'] = $this->gfa_model->getStartUpDetails($email); 
        $data['skillArray'] = $this->gfa_model->getUserAccountExt($email);
        
        echo view('header-assets-new',$title);
        echo view('menu-assets-new',$data);
        echo view('navbar-assets-new',$data);
        echo view('support_ticket', $data);
        echo view('footer-assets-new',$data); 

    }

	public function all_tickets()

    {
        
        $email  = session()->get('email') ;
        if(($email == '')){ return redirect()->to(base_url('gfa/login')); }
        $title['page_title'] = "Gateway Contact Admin";
        $data['email'] =  $email;
        $data['login_type'] = session()->get('login_type') ;
        $data['account_type'] = session()->get('account_type') ;
        $data['StartupArray'] = $this->gfa_model->getStartUpDetails($email); 
        $data['skillArray'] = $this->gfa_model->getUserAccountExt($email);
        
        echo view('header-assets-new',$title);
        echo view('menu-assets-new',$data);
        echo view('navbar-assets-new',$data);
        echo view('all_tickets', $data);
        echo view('footer-assets-new',$data); 

    }

	public function view_ticket($id="")

    {
        if($id == '' || empty($this->gfa_model->getOneTicket($id))){ return redirect()->to(base_url('gfa/all_tickets')); }
        $email  = session()->get('email') ;
        if($email == ''){ return redirect()->to(base_url('gfa/login')); }
        $title['page_title'] = "Gateway Contact Admin";
        $data['email'] =  $email;
        $data['id'] = $id;
        $data['login_type'] = session()->get('login_type') ;
        $data['account_type'] = session()->get('account_type') ;
        $data['StartupArray'] = $this->gfa_model->getStartUpDetails($email); 
        $data['skillArray'] = $this->gfa_model->getUserAccountExt($email);
        
        echo view('header-assets-new',$title);
        echo view('menu-assets-new',$data);
        echo view('navbar-assets-new',$data);
        echo view('view_ticket', $data);
        echo view('footer-assets-new',$data); 

    }

// ================== End of Tickets ==========================








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
    $media  =  $this->gfa_model->mysqlCheck($this->request->getPost("media"));
    $duration_value = $this->gfa_model->mysqlCheck($this->request->getPost("duration_value"));
    $duration_time   = $this->gfa_model->mysqlCheck($this->request->getPost("duration_time"));
    $id = $this->gfa_model->mysqlCheck($this->request->getPost("id"));
    $getfile = $this->gfa_model->mysqlCheck($this->request->getPost("getfile"));
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
                    'lmslink' =>$lmslink,
                    
                
                    );
                    
                    $this->gfa_model->updateCourse($data_story,$id); 
                    echo "Course updated successfully";

}

public function uploadContacts()
{
    try {

        $file     = $this->request->getFile('file');
        $listName = trim($this->request->getPost('contact_list_name'));
        $refId    = $this->request->getPost('ref_id');

        if (!$file || !$file->isValid()) {
            return $this->response->setJSON([
                'status' => 'error',
                'message' => 'Invalid file upload'
            ]);
        }

        if (empty($listName)) {
            return $this->response->setJSON([
                'status' => 'error',
                'message' => 'Contact list name is required'
            ]);
        }

        $ext = strtolower($file->getClientExtension());
        if (!in_array($ext, ['csv','xlsx','xls'])) {
            return $this->response->setJSON([
                'status' => 'error',
                'message' => 'Only CSV or Excel files are allowed'
            ]);
        }

        $path = WRITEPATH.'uploads/';
        if (!is_dir($path)) {
            mkdir($path, 0777, true);
        }

        $file->move($path);
        $filePath = $path.$file->getName();

        $reader = ($ext === 'csv')
            ? new \PhpOffice\PhpSpreadsheet\Reader\Csv()
            : new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();

        $spreadsheet = $reader->load($filePath);
        $rows = $spreadsheet->getActiveSheet()->toArray();

        if (count($rows) < 2) {
            return $this->response->setJSON([
                'status' => 'error',
                'message' => 'Uploaded file is empty'
            ]);
        }

        // INSERT CONTACT LIST
        $listId = $this->gfa_model->insertContactList([
            'contact_name'   => $listName,
            'ref_id' => $refId
        ]);

        if (!$listId) {
            return $this->response->setJSON([
                'status' => 'error',
                'message' => 'Failed to create contact list'
            ]);
        }

        $inserted = 0;

        foreach (array_slice($rows, 1) as $row) {

            if (empty($row[0])) continue;

            $this->gfa_model->insertContact([
                'ref_id'   => $refId,
                'email'     => trim($row[0]),
                'firstname' => $row[1] ?? '',
                'lastname'  => $row[2] ?? '',
                'phone'     => $row[3] ?? ''
            ]);

            $inserted++;
        }

        return $this->response->setJSON([
            'status' => 'success',
            'message' => "$inserted contacts uploaded successfully"
        ]);

    } catch (\Throwable $e) {

        return $this->response->setJSON([
            'status' => 'error',
            'message' => $e->getMessage()
        ]);
    }
}

public function sendMailPro()
{
    try{
        $emails = $this->request->getPost('email');
        $subject = $this->request->getPost('title');
        $salute = $this->request->getPost('salute');
        $fromCompany = $this->request->getPost('from_company_name');
        $message = $this->request->getPost('message');
        $searchData = array('<div class="ql-editor" data-gramm="false" contenteditable="true">', '<input type="text" data-formula="e=mc^2" data-link="https://quilljs.com" data-video="Embed URL">');
                $replaceData = array("<div>", "<br/>");
          $message = str_replace($searchData,$replaceData,stripslashes($message));

        if(empty($emails)) {
            return $this->response->setJSON([
                'status'=>'error','message'=>'Select at least one email'
            ]);
        }

        foreach($emails as $email){
            // Example: send via email library
            $fullmessage = "{$salute} {$this->gfa_model->getContactByEmail($email)[0]['firstname']}, <p>{$message}</p>";
            $this->sendMailClient($email, $fullmessage, $subject, $fromCompany);
        }

        return $this->response->setJSON([
            'status'=>'success','message'=>'Emails sent successfully'
        ]);

    } catch (\Throwable $e){
        return $this->response->setJSON([
            'status'=>'error','message'=>$e->getMessage()
        ]);
    }
}


public function sendMailClient($recipient_email, $message, $subject, $from)
{	
    $url = 'https://getfundedafrica.com/email/email-m-sender.php';

    $data = [
        "recipient_email" => "{$recipient_email}",
        "message" => "{$message}",
        "subject" => "{$subject}",
        "fromName" => "{$from}"
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
    
     $course =  $this->gfa_model->mysqlCheck($this->request->getPost("course"));
    $section  = $this->gfa_model->mysqlCheck($this->request->getPost("section"));
    $title   = $this->gfa_model->mysqlCheck($this->request->getPost("title"));
    $media  =  $this->gfa_model->mysqlCheck($this->request->getPost("media"));
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

public function fetchSectionProX()

	{
	   
	   $getSectionData = $this->gfa_model->getContactByRefId('1766507342'); 
	   foreach($getSectionData as $getSection){
	    echo '<option value="'.$getSection['email'].'">'.$getSection['email'].'</option>';
	   }
	}


public function fetchSectionPro()

	{
	   $thisVal =  $this->request->getPost("thisVal"); 
	   $getSectionData = $this->gfa_model->getContactByRefId($thisVal); 
	   foreach($getSectionData as $getSection){
	    echo '<option value="'.$getSection['email'].'">'.$getSection['email'].'</option>';
	   }
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
        $title['page_title'] = "Gateway Skill Program Ogun State";
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
        echo view('header-assets-new',$title);
         //echo view('menu-assets-new-page',$data);
        echo view('nav_lesson',$data);
        echo view('lesson', $data);
        echo view('footer-assets-new',$data); 

        

    }
    
    public function referral($id="")

    {
        
        $email  = session()->get('email') ;
        if(($email == '')){ return redirect()->to(base_url('gfa/login')); }
        $title['page_title'] = "Gateway Skill Program Ogun State";
        $data['email'] =  $email;
        $data['login_type'] = session()->get('login_type') ;
        $data['account_type'] = session()->get('account_type') ;
        $data['StartupArray'] = $this->gfa_model->getStartUpDetails($email); 
        $data['skillArray'] = $userAccountExt = $this->gfa_model->getUserAccountExt($email);
        $data['referralArray'] = $ref = $this->gfa_model->getMyReferral($userAccountExt[0]['ref']); 
       
        $data['id'] = $id;
        session()->set('course_sess_id', $id);
        echo view('header-assets-new',$title);
         echo view('menu-assets-new',$data);
        echo view('navbar-assets-new',$data);
        echo view('referral', $data);
        echo view('footer-assets-new',$data); 

        

    }

public function course($id="")

    {
        
        $email  = session()->get('email') ;
        if(($email == '')){ return redirect()->to(base_url('gfa/login')); }
        $title['page_title'] = "Gateway Skill Program Ogun State";
        $data['email'] =  $email;
        $data['login_type'] = session()->get('login_type') ;
        $data['account_type'] = session()->get('account_type') ;
        $data['StartupArray'] = $this->gfa_model->getStartUpDetails($email); 
        $data['skillArray'] = $this->gfa_model->getUserAccountExt($email);
        $data['id'] = $id;
        session()->set('course_sess_id', $id);
        echo view('header-assets-new',$title);
         echo view('menu-assets-new-page',$data);
        echo view('navbar-assets-new',$data);
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
		$email	= "admin@getfundedafrica.com";

		session()->set('email', $email);		

		session()->set('account_type','startup');
	    session()->set('login_type','admin');
		if($page == 'event'){

			$url = 'gfa/add_event';

		}elseif($page == 'perks'){
			
			$url = 'gfa/manage_perks';
		
	}elseif($page == 'course'){
			
			$url = 'gfa/manage_course';
		
	}
	else{
			$url = 'admin/';

	}
 return redirect()->to(base_url("{$url}"));
	}
	
	
	//==================End Course ===========================
    
    	public function dealroom($s='')

	{
		
	$email  = session()->get('email') ; if(($email == '')){ return redirect()->to(base_url('gfa/login')); }		
		$title['page_title'] = "Subscribe ";
		$data['email'] =  $email;
        $data['login_type'] = session()->get('login_type') ;
          $data['account_type'] = $account_type = session()->get('account_type') ;
	if($account_type == 'startup' || $account_type == 'individual' || $account_type == 'accelerator'){
	if($s==''){	
    //   session()->set('get_investor_id');
      session()->set('get_investor_id', "get_investor_id"); 
	}
		echo view('header_new',$title);
        echo view('nav_new',$data);
        echo view('menu_new',$title);
        
        if($this->getProfilePoints() >= 50){ 
		echo view('dealroom',$data);
        }else{
            
         echo view('profile');   
        }
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

	}

public function notify($notify_id = "")

    {
        
        $email  = session()->get('email') ;
        if(($email == '')){ return redirect()->to(base_url('gfa/login')); }
        $title['page_title'] = "GFA TECH Notification";
        $data['email'] =  $email;
		$data['notify_id'] =  $notify_id;
        $data['login_type'] = session()->get('login_type') ;
        $data['getPhoto']  =  $this->gfa_model->getPhotoUploaded($email);
        $data['account_type'] = session()->get('account_type') ;
        echo view('header-assets-new',$title);
         echo view('menu-assets-new-page',$data);
        echo view('navbar-assets-new',$data);
        echo view('notify', $data);
        echo view('footer-assets-new',$data); 

        

    }
    
	
	public function saturday()

    {
        
        $email  = session()->get('email') ;
        if(($email == '')){ return redirect()->to(base_url('gfa/login')); }
        $title['page_title'] = "Gateway Skill Program Ogun State Saturday: Reflect and Share";
        $data['email'] =  $email;
        $data['login_type'] = session()->get('login_type') ;
        $data['getPhoto']  =  $this->gfa_model->getPhotoUploaded($email);
        $data['account_type'] = session()->get('account_type') ;
        echo view('header-assets-new',$title);
         echo view('menu-assets-new-page',$data);
        echo view('navbar-assets-new',$data);
        echo view('saturday', $data); 
        echo view('footer-assets-new',$data); 

        

    }
    
    public function sunday()

    {
        
        $email  = session()->get('email') ;
        if(($email == '')){ return redirect()->to(base_url('gfa/login')); }
        $title['page_title'] = "Gateway Skill Program Ogun State Sunday: Reflect and Share";
        $data['email'] =  $email;
        $data['login_type'] = session()->get('login_type') ;
        $data['getPhoto']  =  $this->gfa_model->getPhotoUploaded($email);
        $data['account_type'] = session()->get('account_type') ;
        echo view('header-assets-new',$title);
         echo view('menu-assets-new-page',$data);
        echo view('navbar-assets-new',$data);
        echo view('sunday', $data);
        echo view('footer-assets-new',$data); 

        

    }

	public function profile_details($id =""){
        
         $email  = session()->get('email') ;
        if(($email == '')){ return redirect()->to(base_url('gfa/login')); }
        $title['page_title'] = "GFA TECH Learning Group Members";
        $data['email'] =  $email;
        $data['login_type'] = session()->get('login_type') ;
        $data['account_type'] = session()->get('account_type') ;
        $data['StartupArray'] = $this->gfa_model->getStartUpDetails($email); 
        $data['skillArray'] = $this->gfa_model->getUserAccountExt($email); 
        $data['id'] = $id;
        $user_action = $this->request->uri->getSegment(2);
	    $this->saveUserActivity($user_action, $email);
        echo view('header-assets-new',$title);
        echo view('menu-assets-new-page',$data);
        echo view('navbar-assets-new',$data);
        echo view('profile_details', $data);  
        echo view('footer-assets-new',$data);  
    }
    
    public function load_group_members()
{
    $email  = session()->get('email');
    $data['StartupArray'] = $this->gfa_model->getStartUpDetails($email); 
    $data['skillArray'] = $this->gfa_model->getUserAccountExt($email); 
    $data['offset'] = ($this->request->getPost('offset'))? (int)$this->request->getPost('offset') : 0;
    $data['limit'] = ($this->request->getPost('limit'))? (int)$this->request->getPost('limit') : 6;
    $data['checkHead'] = $this->request->getPost('checkHead');
    echo view('load_group_members',$data);
}
	

public function group_members_api()
{
    // Post Data
    $stateRd = $this->request->getPost("state"); // get state of applicant
    $thisSkill = $this->request->getPost("course"); // get course of applicant
    $EmailByCourse = $this->gfa_model->getEmailByCourse($thisSkill);
    $verifyGroupHead = $this->gfa_model->verifyGroupHead("Yes", $stateRd, $thisSkill);
    $groupHeadDetails = $this->gfa_model->getStartUpDetails($verifyGroupHead[0]['email']);

    $data['groupHeadName'] = $groupHeadDetails[0]['Primary_Contact_Name'];
    $data['groupHeadEmail'] = $verifyGroupHead[0]['email'];
    $data['groupHeadGender'] = $groupHeadDetails[0]['Gender'];
    $data['groupHeadCity'] = $getEmailByCourse[0]['city'];

    $EmailByCourseData = $this->gfa_model->displayCourseGroupMemberAPI($thisSkill, $stateRd);

    // Initialize an array to store member details
    $data['members'] = [];

    foreach ($EmailByCourseData as $courseArray) {
        // Skip the group head if their email matches
        if ($data['groupHeadEmail'] == $courseArray['Contact_Email']) {
            continue; 
        }

        // Add member details to the array
        $memberDetails = [
            'memberName' => ucwords($courseArray['Primary_Contact_Name']),
            'memberEmail' => $courseArray['Contact_Email'],
            'memberGender' => $courseArray['Gender'],
            'memberCity' => $courseArray['city'],
        ];

        $data['members'][] = $memberDetails;
    }

    $jsonResponse = json_encode($data);

    // Set the appropriate headers for a JSON response
    $this->response->setHeader('Content-Type', 'application/json');

    // Output the JSON response
    echo $jsonResponse;
}
	
	public function group_members()

    {
        
        $email  = session()->get('email') ;
        if(($email == '')){ return redirect()->to(base_url('gfa/login')); }
        $title['page_title'] = "GFA TECH Learning Group Members";
        $data['email'] =  $email;
        $data['login_type'] = session()->get('login_type') ;
        $data['account_type'] = session()->get('account_type') ;
        $data['StartupArray'] = $this->gfa_model->getStartUpDetails($email); 
        $data['skillArray'] = $this->gfa_model->getUserAccountExt($email); 
        $user_action = $this->request->uri->getSegment(2);
	    $this->saveUserActivity($user_action, $email);
        echo view('header-assets-new',$title);
         echo view('menu-assets-new-page',$data);
        echo view('navbar-assets-new',$data);
        echo view('group_members', $data);
        echo view('footer-assets-new',$data); 

        

    }
	
	public function newdash()

    {
        
        $email  = session()->get('email') ;
        if(($email == '')){ return redirect()->to(base_url('gfa/login')); }
        $title['page_title'] = "GFA TECH Learning Dashboard";
        $data['email'] =  $email;
        $data['login_type'] = session()->get('login_type') ;
        $data['account_type'] = session()->get('account_type') ;
        echo view('header-assets-new',$title);
         echo view('menu-assets-new',$data);
        echo view('navbar-assets-new',$data);
        echo view('new-dash', $data);
        echo view('footer-assets-new',$data); 

        

    }
    
    public function soft_skills_test()

    {
        
        $email  = session()->get('email') ;
        if(($email == '')){ return redirect()->to(base_url('gfa/login')); }
        $title['page_title'] = "GFA TECH Soft Skills Learning";
        $data['email'] =  $email;
        $data['getPhoto']  =  $this->gfa_model->getPhotoUploaded($email);
        $main_cat = "soft skill";
        $data['courseArrayUpcoming'] = $this->gfa_model->getCoursesByMainCategoryUpcoming($main_cat);
        $data['courseArrayToday'] = $this->gfa_model->getCoursesByMainCategoryToday($main_cat);
        $data['courseArrayNext'] = $this->gfa_model->getCoursesByMainCategoryNextDay($main_cat);
        $data['courseArrayPrev'] =$this->gfa_model->getCoursesByMainCategoryPrevious($main_cat);
        $data['StartupArray'] = $this->gfa_model->getStartUpDetails($email); 
        $data['skillArray'] = $this->gfa_model->getUserAccountExt($email); 
        $data['login_type'] = session()->get('login_type');
        $data['account_type'] = session()->get('account_type');
        echo view('header-assets-new',$title);
        echo view('menu-assets-new',$data);
        echo view('navbar-assets-new',$data);
        echo view('soft_skills_test', $data);
        echo view('footer-assets-new',$data);  

        

    }
	
	public function learning_path()

    {
        
        $email  = session()->get('email') ;
        if(($email == '')){ return redirect()->to(base_url('gfa/login')); }
        $title['page_title'] = "GATEWAY Learning Skills";
        $data['email'] =  $email;
        $data['getPhoto']  =  $this->gfa_model->getPhotoUploaded($email);
    	$learnerDetails = $this->admin_model->getAllStartUpNByEmail($email);
        $learnerExtInfo = $this->gfa_model->getUserAccountExt($email);
    	$getSubCatViaCourse = $this->gfa_model->getSubCatViaCourse($learnerExtInfo[0]['profile_extra']);
        $skillSubCatArray = $this->gfa_model->skillsBySubCat($getSubCatViaCourse[0]['category']);
   		 if($learnerDetails[0]["Interest_Fund_Raise"]=="Business Owner" || $learnerDetails[0]["Interest_Fund_Raise"]=="Aspiring Business Owner"){
           //if($getSubCatViaCourse[0]['category'] == "Development"){
           	$main_cat = "sme technical skill training";
           $coursetitle ="";
           $coursetitleArray = [
    'Product Development Cycle',
    'Design Thinking',
    'Business Model Plan',
    'Pitch Deck Structuring',     
    'Financial Modelling in Decision-Making & Business Planning',
    'Understanding Product Management',
    'Customer Experience Management',
    'Functional Accountability Chart'
   
];
           //Design Thinking
           //Financial Modelling in Decision-Making & Business Planning
           //Understanding Product Management
           //Functional Accountability Chart
           //}
       
        }
        
       
       
        if($learnerDetails[0]["Interest_Fund_Raise"]=="Professional" || $learnerDetails[0]["Interest_Fund_Raise"]=="professional" || $learnerDetails[0]["Interest_Fund_Raise"]=="jobseeker" || $learnerDetails[0]["Interest_Fund_Raise"]=="Jobseeker"){
           //if($getSubCatViaCourse[0]['category'] == "Technology Enabled"){
           	$main_cat = "technology enabled skills";
           $coursetitle ="";
           $coursetitleArray = [
"Accounting Software",
"Cloud Platforms Navigation",
"CRM Management",
"Digital Marketing",
"Hardware Assembly",
"Infrastructure Management",
"Quality Assurance",
"System Analysis",
"Technology Community Management",
"Technical Support & Troubleshooting",
"Technical Writing",
"Animation",
"Cloud Computing",
"Database Management",
"Embedded Systems",
"Firmware Development",
"Front-end Development",
"Full-stack Software Development",
"Hardware components Engineering",
"Mobile App Development",
"Network Administration",
"Web Design",
"Machine Learning and AI",
"Bioinformatics",
"Cybersecurity",
"Blockchain Development",
"Quantum Computing",
"Robotics and Automation",
"Virtual and Augmented Reality Development",
"Advanced Hardware",
"DevOps",
"Internet of Things (IoT)"
];
           }
        	
        	
       // }
    	// print_r($getSubCatViaCourse[0]['category']);
    	// exit;
       //$coursetitleArray = array("Understanding Product Management","Design Thinking");
        //$coursetitleList =  implode(",",$coursetitleArray);
        // $data['courseArrayUpcoming'] = $this->gfa_model->getCoursesByMainCategoryUpcoming($main_cat);
        $data['courseArrayToday'] = $this->gfa_model->getFgnAlatSkills($main_cat,$coursetitle);
        $data['courseArrayRec'] = $this->gfa_model->getRecFgnAlatSkills($coursetitleArray);
        
    	// print_r($getSubCatViaCourse[0]['category']);
    	// exit;
       	$main_cat_prev = "soft skill";
        // $data['courseArrayUpcoming'] = $this->gfa_model->getCoursesByMainCategoryUpcoming($main_cat);
        //$data['courseArrayToday'] = $this->gfa_model->getFgnAlatSkills($main_cat);
        // $data['courseArrayNext'] = $this->gfa_model->getCoursesByMainCategoryNextDay($main_cat);
    	$main_cat_prev = "soft skill";
        $data['courseArrayPrev'] = $this->gfa_model->getCoursesByMainCategoryPrevious($main_cat_prev);
        $data['StartupArray'] = $learnerDetails; 
        $data['skillArray'] = $learnerExtInfo; 
        $data['login_type'] = session()->get('login_type');
        $data['account_type'] = session()->get('account_type');
        echo view('header-assets-new',$title);
        echo view('menu-assets-new',$data);
        echo view('navbar-assets-new',$data);
        echo view('course_list', $data);
        echo view('footer-assets-new',$data);  

        

    }
    
    public function soft_skills()

    {
        
        $email  = session()->get('email') ;
        if(($email == '')){ return redirect()->to(base_url('gfa/login')); }
        $title['page_title'] = "GFA TECH Soft Skills Learning";
        $data['email'] =  $email;
        $data['getPhoto']  =  $this->gfa_model->getPhotoUploaded($email);
        $main_cat = "soft skill";
        $data['courseArrayUpcoming'] = $this->gfa_model->getCoursesByMainCategoryUpcoming($main_cat);
        $data['courseArrayToday'] = $this->gfa_model->getCoursesByMainCategoryToday($main_cat);
        $data['courseArrayNext'] = $this->gfa_model->getCoursesByMainCategoryNextDay($main_cat);
        $data['courseArrayPrev'] =$this->gfa_model->getCoursesByMainCategoryPrevious($main_cat);
        $data['StartupArray'] = $this->gfa_model->getStartUpDetails($email); 
        $data['skillArray'] = $this->gfa_model->getUserAccountExt($email); 
        $data['login_type'] = session()->get('login_type');
        $data['account_type'] = session()->get('account_type');
        echo view('header-assets-new',$title);
        echo view('menu-assets-new',$data);
        echo view('navbar-assets-new',$data);
        echo view('soft_skills', $data);
        echo view('footer-assets-new',$data);  

        

    }


    public function login()

    {
        
        
        $title['page_title'] = "Login  ";

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
    
    public function course_corp()

	{
	     $emailVerifySession  = session()->get('email') ;
	    //$checkRegisteredAccount = $this->gfa_model->getCorperateDetails($emailVerifySession) ;
		
	if(empty($emailVerifySession)){  return redirect()->to(base_url('gfa/login')); }	
		
	
	
	
		$title['page_title'] = "Course Analysis";
		
		//Calculate Profile completed  startup name, industry, amount to raise, Hq Address, phone number, Anuual revenue, Employee size, linkined page url
		 $email = session()->get('email') ;
		

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
		//echo view('corperate/corporate_dashboard',$data);
		echo view('corperate/course',$data); 
		echo view('corperate/footer_new');

		

	}

public function corperate_startups_consented($batch ="", $state=""){
 		$emailVerifySession  = session()->get('email') ;
	    //$checkRegisteredAccount = $this->gfa_model->getCorperateDetails($emailVerifySession) ;
		
	if(empty($emailVerifySession)){  return redirect()->to(base_url('gfa/login')); }	
		
	
	
	
		$title['page_title'] = "Consented to open Account ";
		
		//Calculate Profile completed  startup name, industry, amount to raise, Hq Address, phone number, Anuual revenue, Employee size, linkined page url
		 $email = session()->get('email') ;
			$data['batch'] = $batch;
			$data['state'] = $state;

		echo view('corperate/header_new',$title);
        echo view('corperate/nav_new',$data);
        echo view('corperate/menu_new',$data);
		echo view('corperate/corperate_startups_consented',$data); 
		echo view('corperate/footer_new');

}

    public function corporate_dashboard($batch ="")

	{
	     $emailVerifySession  = session()->get('email') ;
	    //$checkRegisteredAccount = $this->gfa_model->getCorperateDetails($emailVerifySession) ;
		
	if(empty($emailVerifySession)){  return redirect()->to(base_url('gfa/login')); }	
	
    
	
	
	
		$title['page_title'] = "Dashboard ";
		
		//Calculate Profile completed  startup name, industry, amount to raise, Hq Address, phone number, Anuual revenue, Employee size, linkined page url
		 $email = session()->get('email') ;
		
	  
	// ====		
$resp = "";
$data['eventResp'] = json_decode($resp,true);
//$transtotal = intval($this->total_transaction())  + intval($this->gfa_model->get_marketplace_report_total()) + intval($this->gfa_model->get_estore_report_total());
$transtotal = 0;
$data['totalTrans'] = $transtotal;
$data['tax'] = $transtotal * 0.05;
$data['cor_info'] = session()->get('cor_info');
$data['email'] = session()->get('email');
$data['admin_access'] = session()->get('admin_access');
$data['account_type'] = session()->get('account_type');
if($batch ==""){
$data['batchSet'] = $batchSet = $this->gfa_model->getRegBatch()[0]['Batch'];
$data['batchData'] = $this->gfa_model->getRegBatchSet($batchSet);
}else{
$data['batchSet'] = $batch;
$data['batchData'] = $this->gfa_model->getRegBatchSet($batch);
}
		echo view('corperate/header_new',$title);
        echo view('corperate/nav_new',$data);
        echo view('corperate/menu_new',$data);
		//echo view('corperate/corporate_dashboard',$data);
		echo view('corperate/analytics',$data); 
		echo view('corperate/footer_new');

		

	}

    
public function profilestartup()
	{
	    $email  = session()->get('email') ; if(($email == '')){ return redirect()->to(base_url('gfa/login')); }		
		$title['page_title'] = "Profile ";
		$data['email'] =  $email;
        $data['login_type'] = session()->get('login_type') ;
        $data['account_type'] = session()->get('account_type') ;
		$data['StartupArray'] = $this->gfa_model->getStartUpDetails($email);

		echo view('header-assets-new',$title);
        echo view('menu-assets-new',$title);
        echo view('navbar-assets-new',$data);
		echo view('profilestartup');
        echo view('footer-assets-new');

	}

public function profilestartuppro()
    {
        $email  = session()->get('email') ;
        if(($email == '')){ return redirect()->to(base_url('gfa/login')); }

        $name = $this->gfa_model->mysqlCheck($this->request->getPost("firstName"))." ".$this->gfa_model->mysqlCheck($this->request->getPost("lastName"));
        $gender = $this->gfa_model->mysqlCheck($this->request->getPost("gender"));
        // $phoneNumber = $this->gfa_model->mysqlCheck($this->request->getPost("phoneNumber"));
        $state = $this->gfa_model->mysqlCheck($this->request->getPost("state"));
        $personal_address = $this->gfa_model->mysqlCheck($this->request->getPost("personal_address"));
        $Startup_Implementation_Stage = $this->gfa_model->mysqlCheck($this->request->getPost("Startup_Implementation_Stage"));
        $Interest_Fund_Raise = $this->gfa_model->mysqlCheck($this->request->getPost("Interest_Fund_Raise"));
        $profile_extra = $this->gfa_model->mysqlCheck($this->request->getPost("profile_extra"));
        
if ($name != '' && $gender != '' && $state != '' && $personal_address != '' && $Startup_Implementation_Stage != '' && $Interest_Fund_Raise != '' && $profile_extra != '') {
        // print_r($this->request->getPost());exit;
                $data_startup_update   =   array(
                    'Primary_Contact_Name'  => $name,
                    // 'Phones'    => $phoneNumber,
                    'Address'   => $personal_address,
                    'State'     => $state,
                    'Gender'    => $gender,
                    'Personal_Address'  => $personal_address,
                    'Startup_Implementation_Stage'  => $Startup_Implementation_Stage,
                    'Interest_Fund_Raise'  => $Interest_Fund_Raise
                    );

 				$data_startup_update_ext   =   array('profile_extra'  => $profile_extra);
                    
                $u1 = $this->gfa_model->saveStartupProfile($email, $data_startup_update);
				$u2 = $this->gfa_model->saveParticipantsProfile($email, $data_startup_update_ext);

} else {
echo 'All fields are required, please fill all fields';
}
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
		if($this->gfa_model->getStartUpDetails($email)[0]['Primary_Contact_Name']!=""){
		    
		   $point_1 = 10;
		   $credit_1 = 1;
		}else{
		    $point_1 = 0;
		    $credit_1 = 0;
		}
        if($this->gfa_model->getStartUpDetails($email)[0]['CountryHQ']!=""){
            
         $point_2 = 15;
         $credit_2 = 1;
		}else{
		    $point_2 = 0;
		    $credit_2 = 0;
		}
        if($this->gfa_model->getStartUpDetails($email)[0]['PrimaryBusinessIndustry']!=""){
		 $point_3 = 100;
		 $credit_3 = 1;
		}else{
		    $credit_3 = 0;
		    $point_3= 0;
		}
		if($this->gfa_model->getStartUpDetails($email)[0]['LinkedIn']!=""){
		 $point_4 = 15; 
		 $credit_4 = 1;
		}else{
		    $credit_4 = 0;
		    $point_4= 0;
		}
		
		if($this->gfa_model->getStartUpDetails($email)[0]['Startup_Company_Name']!=""){
		 $point_5 = 10; 
		 $credit_5 = 1;
		}else{
		    $point_5= 0;
		    $credit_5 = 0;
		}
		
		
		if($this->gfa_model->getStartUpDetails($email)[0]['Address']!=""){
		 $point_6 = 15; 
		 $credit_6 = 1;
		}else{
		    $point_6= 0;
		    $credit_6 = 0;
		}
		
		if($this->gfa_model->getStartUpDetails($email)[0]['NoOfEmployees']!=""){
		 $point_7 = 10; 
		 $credit_7 = 1;
		}else{
		    $point_7= 0;
		    $credit_7 = 0;
		}
		
		if($this->gfa_model->getStartUpDetails($email)[0]['OperatingRegions']!=""){
		 $point_8 = 100; 
		 $credit_8 = 1;
		}else{
		    $point_8= 0;
		    $credit_8 = 0;
		}
		
		if($this->gfa_model->getStartUpDetails($email)[0]['Next_Funding_Round_Target_Sought']!=""){
		 $point_9 = 100; 
		 $credit_9 = 1;
		}else{
		    $point_9= 0;
		    $credit_9 = 0;
		}
		
		
		
		if($this->gfa_model->getStartUpDetails($email)[0]['Date_Founded']!=""){
		 $point_10 = 5; 
		 $credit_10 = 1;
		}else{
		    $point_10= 0;
		    $credit_10 = 0;
		}
		
		if($this->gfa_model->getStartUpDetails($email)[0]['Revenue']!=""){
		 $point_11 = 15; 
		 $credit_11 = 1;
		}else{
		    $point_11= 0;
		    $credit_11 = 0;
		}
		
		if($this->gfa_model->getStartUpDetails($email)[0]['Investment_History']!=""){
		 $point_12 = 15; 
		 $credit_12 = 1;
		}else{
		    $point_12= 0;
		    $credit_12 = 0;
		}
		
		
		
			if($this->gfa_model->getPhotoUploaded($email)[0]['Photo_name']!=""){
		 $point_13 = 5; 
		 $credit_13 = 1;
		}else{
		    $point_13= 0;
		    $credit_13 = 0;
		}
		
		$data['point']= ceil((($point_1 + $point_2 + $point_3 + $point_4 + $point_5+ $point_6 + $point_7 + $point_8 + $point_9 + $point_10 + $point_11 + $point_12 + $point_13)/415)*100) ;
		$data['credit']= $credit_1 + $credit_2 + $credit_3 + $credit_4 + $credit_5+ $credit_6 + $credit_7 + $credit_8 + $credit_9 + $credit_10 + $credit_11 + $credit_12 + $credit_13 ;
		echo view('header_new',$title);
        echo view('nav_new',$data);
        echo view('menu_new',$data);
		echo view('startup_cooperate',$data);
		echo view('footer_new');

		

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


	public function loadModule1()

    {
    $data['batch'] = $this->request->getPost("batch");
    echo view('corperate/loadModule1',$data);
    }
    
	public function loadModule2()

    {
    $data['batch'] = $this->request->getPost("batch");
    echo view('corperate/loadModule2',$data);
    }
	public function loadModule3()

    {
    $data['batch'] = $this->request->getPost("batch");
    $data['state'] = $this->request->getPost("state");
     echo view('corperate/loadModule3',$data);
    }
	public function loadModule4()

    {
   	$data['batch'] = $this->request->getPost("batch");
    $data['state'] = $this->request->getPost("state");
    echo view('corperate/loadModule4',$data);
   //echo view('corperate/footer_new');
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



	public function users_comments()

	{
		
        $email  = session()->get('email') ;
        if(($email == '')){ return redirect()->to(base_url('gfa/login')); }
		$title['page_title'] = "Comments Startups Activities ";
		$data['email'] =  $email;
        $data['login_type'] = session()->get('login_type') ;
        $data['account_type'] = $account_type = session()->get('account_type') ;
		echo view('corperate/header_new',$title);
        
        echo view('corperate/nav_new',$data);
        echo view('corperate/menu_new',$title);
		echo view('corperate/comments');
		echo view('corperate/footer_new');

		

	}


	public function users_analytics($batch="")

	{
		
        $email  = session()->get('email') ;
        if(($email == '')){ return redirect()->to(base_url('gfa/login')); }
		$title['page_title'] = "Analytics Startups Activities ";
		$data['email'] =  $email;
        $data['login_type'] = session()->get('login_type') ;
        $data['account_type'] = $account_type = session()->get('account_type') ;
    	$data['batch'] = $batch;
		echo view('corperate/header_new',$title);
        
        echo view('corperate/nav_new',$data);
        echo view('corperate/menu_new',$data);
		echo view('corperate/users_analytics',$data);
		echo view('corperate/footer_new',$data);

		

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
  <a href='https://fg-skillnovation.alat.ng'><img src='https://getfundedafrica.com/nigeria/wemabank/img/logo/GFA TECH-logo.jpg'></a><br>
    
<p><strong>Dear {$name},</strong></p>
<p>I hope this email finds you in good spirits. We are delighted to inform you that after careful consideration, you have been selected to be a part of the <strong>FGN/ALAT Digital SKillnovation Program For MSMEs</strong>.</p>

    <p>Your application stood out among many impressive submissions, and we are confident that your project holds great promise. We believe that the <strong>FGN/ALAT Digital SKillnovation Program For MSMEs</strong> will provide you with the resources, mentorship, and networking opportunities needed to thrive.</p>

    <p>We are eager to start this journey with you and look forward to seeing your project grow and flourish. Please be on the lookout for further details regarding the program's commencement, including any necessary onboarding steps or documentation.</p>

    <p>Once again, congratulations on this significant achievement! We are excited to have you on board.</p>

    <p>If you have any immediate questions or need further information, please don't hesitate to reach out.</p>
    
    <p><br />=================Your fgnalat account login details===============</p>
        <p><a href='https://fgnalat.getfundedafrica.com/portal/'><i>Click here to login with your details</i></a></p>
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

    
       public function corperate_startups_details($id)

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
        if($checkReg[0]["Interest_Fund_Raise"]=="jobseeker"){
           echo view('corperate/corperate_jobseeker_details',$data); 
        }
        echo view('corperate/footer_new',$data);

        

    }
    
    public function login_verify()

	{
		
        $email  = session()->get('email') ;
        if(($email == '')){ return redirect()->to(base_url('gfa/login')); }  
        
        $data['email'] =  $email;
        $data['login_type'] = session()->get('login_type') ;
        $data['account_type'] = $account_type = session()->get('account_type') ;	
		$title['page_title'] = "Final Profile Verification";
		
		echo view('header_new',$title);
        echo view('nav_new_verify',$data);
        // echo view('menu_new',$title);
		echo view('login_verify',$data);
		echo view('footer_new');

		

	}
    
    public function changePassword()

	{
		
        $email  = session()->get('email') ;
        if(($email == '')){ return redirect()->to(base_url('gfa/login')); }  
        
        $data['email'] =  $email;
        $data['login_type'] = session()->get('login_type') ;
        $data['account_type'] = $account_type = session()->get('account_type') ;	
		$title['page_title'] = "Change Password";
		
		echo view('header_new',$title);
        // echo view('nav_new',$data);
        // echo view('menu_new',$title);
		echo view('changePassword',$data);
		echo view('footer_new');

		

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
        echo view('nav_new',$data);
        echo view('menu_new',$title);
		echo view('change_password',$data);
		echo view('footer_new');

		

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
        

        echo view('header_new_corperate',$title);
        echo view('nav_new_corperate',$data);
        echo view('menu_new_corperate',$data);
        echo view('corperate_startup_details',$data);
        echo view('footer_new_corperate',$data);

        

    }
    
    public function startup_investor()

	{
		
        $email  = session()->get('email') ;
        if(($email == '')){ return redirect()->to(base_url('gfa/login')); } 	
		$title['page_title'] = "Startup and Investor Match - GetFundedAfrica";
        
        //Calculate Profile completed  startup name, industry, amount to raise, Hq Address, phone number, Anuual revenue, Employee size, linkined page url
// 		 $email = $this->encrypt->decode($this->session->userdata('email')) ;
		if($this->gfa_model->getStartUpDetails($email)[0]['Primary_Contact_Name']!=""){
		    
		   $point_1 = 10;
		   $credit_1 = 1;
		}else{
		    $point_1 = 0;
		    $credit_1 = 0;
		}
        if($this->gfa_model->getStartUpDetails($email)[0]['CountryHQ']!=""){
            
         $point_2 = 15;
         $credit_2 = 1;
		}else{
		    $point_2 = 0;
		    $credit_2 = 0;
		}
        if($this->gfa_model->getStartUpDetails($email)[0]['PrimaryBusinessIndustry']!=""){
		 $point_3 = 100;
		 $credit_3 = 1;
		}else{
		    $credit_3 = 0;
		    $point_3= 0;
		}
		if($this->gfa_model->getStartUpDetails($email)[0]['LinkedIn']!=""){
		 $point_4 = 15; 
		 $credit_4 = 1;
		}else{
		    $credit_4 = 0;
		    $point_4= 0;
		}
		
		if($this->gfa_model->getStartUpDetails($email)[0]['Startup_Company_Name']!=""){
		 $point_5 = 10; 
		 $credit_5 = 1;
		}else{
		    $point_5= 0;
		    $credit_5 = 0;
		}
		
		
		if($this->gfa_model->getStartUpDetails($email)[0]['Address']!=""){
		 $point_6 = 15; 
		 $credit_6 = 1;
		}else{
		    $point_6= 0;
		    $credit_6 = 0;
		}
		
		if($this->gfa_model->getStartUpDetails($email)[0]['NoOfEmployees']!=""){
		 $point_7 = 10; 
		 $credit_7 = 1;
		}else{
		    $point_7= 0;
		    $credit_7 = 0;
		}
		
		if($this->gfa_model->getStartUpDetails($email)[0]['OperatingRegions']!=""){
		 $point_8 = 100; 
		 $credit_8 = 1;
		}else{
		    $point_8= 0;
		    $credit_8 = 0;
		}
		
		if($this->gfa_model->getStartUpDetails($email)[0]['Next_Funding_Round_Target_Sought']!=""){
		 $point_9 = 100; 
		 $credit_9 = 1;
		}else{
		    $point_9= 0;
		    $credit_9 = 0;
		}
		
		
		
		if($this->gfa_model->getStartUpDetails($email)[0]['Date_Founded']!=""){
		 $point_10 = 5; 
		 $credit_10 = 1;
		}else{
		    $point_10= 0;
		    $credit_10 = 0;
		}
		
		if($this->gfa_model->getStartUpDetails($email)[0]['Revenue']!=""){
		 $point_11 = 15; 
		 $credit_11 = 1;
		}else{
		    $point_11= 0;
		    $credit_11 = 0;
		}
		
		if($this->gfa_model->getStartUpDetails($email)[0]['Investment_History']!=""){
		 $point_12 = 15; 
		 $credit_12 = 1;
		}else{
		    $point_12= 0;
		    $credit_12 = 0;
		}
		
		
		
			if($this->gfa_model->getPhotoUploaded($email)[0]['Photo_name']!=""){
		 $point_13 = 5; 
		 $credit_13 = 1;
		}else{
		    $point_13= 0;
		    $credit_13 = 0;
		}
		
		$data['point']= ceil((($point_1 + $point_2 + $point_3 + $point_4 + $point_5+ $point_6 + $point_7 + $point_8 + $point_9 + $point_10 + $point_11 + $point_12 + $point_13)/415)*100) ;
		$data['credit']= $credit_1 + $credit_2 + $credit_3 + $credit_4 + $credit_5+ $credit_6 + $credit_7 + $credit_8 + $credit_9 + $credit_10 + $credit_11 + $credit_12 + $credit_13 ;
		$data['email'] =  $email;
        $data['login_type'] = session()->get('login_type') ;
        $data['account_type'] = $account_type = session()->get('account_type') ;
        $data['admin_access'] = "";
		echo view('header_new',$title);
        echo view('nav_new',$data);
        echo view('menu_new',$title);
		echo view('startup-investor',$data);
		echo view('footer_new',$data);

		

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
        echo view('nav_new',$data);
        echo view('menu_new',$data);
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
    $files = $this->request->getFiles();
    foreach ($files['file'] as $file) {
        if ($file->isValid() && !$file->hasMoved()) {
            $file->move(WRITEPATH . 'uploads/files/'); // Assuming you want to store the files in the "uploads" folder.
            $dataInfo[] = $file->getName();
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
        'file' => implode(',', $dataInfo),
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
    $files = $this->request->getFiles();
    foreach ($files['file'] as $file) {
        if ($file->isValid() && !$file->hasMoved()) {
            $file->move(WRITEPATH . 'uploads/files/'); // Assuming you want to store the files in the "uploads" folder.
            $dataInfo[] = $file->getName();
        }
    }

    $data_story = array(
        'title' => $title,
        'story' => $story,
        'videourl' => $videourl,
        'picture' => implode(',', $dataInfo), // Store multiple file names as a comma-separated string.
        'status' => 'pending',
        'email' => $email,
        'ref' => $ref,
        'time_Submit' => $time
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
        // echo view('nav_new',$data);
        // echo view('menu_new',$data);
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
        
        
        $title['page_title'] = "Subscribe ";
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
$message = "<a href='https://getfundedafrica.com'><img src='https://getfundedafrica.com/images/logo-1.png'></a><br>";

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

$this->sendMail("diana@getfundedafrica.com", $message,$subject);
$this->sendMail("adekunle@getfundedafrica.com", $message,$subject);
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

$message = "<a href='https://getfundedafrica.com'><img src='https://getfundedafrica.com/images/logo-1.png'></a><br>";

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
        
     
		   $message .= '<p><a href="https://getfundedafrica.com/portal/uploads/files/'.$this->gfa_model->getFileUploadedById($n)[0]['File'].'">'.$this->gfa_model->getFileUploadedById($n)[0]['Title'].'</a></p>';
		}

$message .= "<br><p><strong>============================================================<strong></p>";
$message .= '<p>If you would like to discuss this opportunity further, please feel free to reach out to our team at <a href="mailto:diana@getfundedafrica.com">diana@getfundedafrica.com</a>. Additionally, you can log in to your investor account on GetFundedAfrica'.'s platform <a href="http://getfundedafrica.com/portal/">here</a> to explore more startup opportunities.</p>

	<p>We appreciate your time and consideration, and we look forward to the possibility of working together.</p>
	
	<p>Best regards,</p>
	
	<p>GetFundedAfrica<br>
	['.$name.']<br>
	['.$companyName.']<br>
	GetFundedAfrica Investment App</p>
	
	';

 $this->sendMail($InvestorEmail, $message,$subject);
//$this->sendMail("info@getfundedafrica.com", $message,$subject);
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

$message = "<a href='https://getfundedafrica.com'><img src='https://investorsfinder.getfundedafrica.com/images/logo-1.png'></a><br>";

$message .= '<h4>Dear '.$InvestorName.',</h4>

<p>I hope this email finds you well. I would like to introduce you to an exciting investment opportunity in the African market.</p>

<p><strong>'.$companyName.'</strong> is a '.$startupModel.' startup model in Africa.'.$aboutCompany.'</p>

<p><strong>Founder:</strong> '.$name.'<br>
<strong>Country:</strong> '.$country.'<br>
<strong>Industry:</strong> '.$industry.'</p>

<p>We are currently in the process of raising <strong>$'.$Next_Funding_Round_Target_Sought.'</strong> in <strong>'.$Startup_Implementation_Stage.'</strong> funding to support our growth and expansion plans. Our website, <a href="'.$Website.'">'.$Website.'</a>, provides more information about our business and vision.</p>

<p>To get a comprehensive understanding of our investment opportunity, I invite you to review our completed profile below:</p>';

foreach($id  as $key => $n ) {
        
     
	$message .= '<p><a href="https://getfundedafrica.com/portal/uploads/files/'.$this->gfa_model->getFileUploadedById($n)[0]['File'].'">'.$this->gfa_model->getFileUploadedById($n)[0]['Title'].'</a></p>';
 }

$message .= "<br><p><strong>============================================================<strong></p>";
$message .= '<p>If you would like to discuss this opportunity further, please feel free to reach out to our team at <a href="mailto:diana@getfundedafrica.com">diana@getfundedafrica.com</a>. Additionally, you can log in to your investor account on GetFundedAfrica'.'s platform <a href="http://getfundedafrica.com/portal/">here</a> to explore more startup opportunities.</p>

	<p>We appreciate your time and consideration, and we look forward to the possibility of working together.</p>
	
	<p>Best regards,</p>
	
	<p>GetFundedAfrica<br>
	['.$name.']<br>
	['.$companyName.']<br>
	GetFundedAfrica Investment App</p>
	
	';
if( $InvestorId !=''){
 $this->sendMail($this->gfa_model->getAllInvestorById($InvestorId)[0]['Contact_Email'], $message,$subject);
//$this->sendMail("info@getfundedafrica.com", $message,$subject);
}else{
foreach($id  as $key => $s ) {
   
$needle   = '|';

if (strpos($s, $needle) !== false) {
$investId = str_replace('|',"",$s);

 //$message .= "<br>Investor Email: ".$this->gfa_model->getAllInvestorById($investId)[0]['Contact_Email'];
 //$this->sendMail($this->gfa_model->getAllInvestorById($investId)[0]['Contact_Email'], $message,$subject);
//$this->sendMail("info@getfundedafrica.com", $message,$subject);

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
	
	public function courseActivities(){
	   $email = session()->get('email') ;
	   $user_action = $this->request->getPost("getValue");
	   $this->saveUserActivity($user_action, $email);
	   echo  $user_action;
	}
    
    public function signinAction() {

        $email  = strtolower($this->request->getPost("email"));

        $password = $this->request->getPost("password"); 

        $profile_request = $this->gfa_model->getLoginDetails($email);
        $profile_requestx = $this->gfa_model->getUser($email);
        $check_subscription = $this->gfa_model->getSubsription($email);
        $check_subscription_status = $this->gfa_model->getSubsriptionstatus("active");
        $account_type = $profile_request[0]['account_type'];
        $invite_email = $profile_request[0]['invite_email'];
        $userAccountExt = $this->gfa_model->getUserAccountExt($email);
        $ref =$userAccountExt[0]['ref'];
         if($ref ==null || $ref ==''){
             
            $refcode = rand(1000,10000).''.time(); 
            $data = array('ref' => $refcode) ;
           $this->gfa_model->saveParticipantsProfile($email, $data);  
             
         }else{
                session()->set('referral', $ref);
         }
        
        if(!empty($this->gfa_model->invited_admin_access($email,$invite_email)[0]['Admin'])){
          $admin_access = $this->gfa_model->invited_admin_access($email,$invite_email)[0]['Admin'];  
        
        }else{
           $admin_access =''; 
        }
        
        if(!empty($this->gfa_model->getCorperateDetails($email)[0]['Event'])){
          $corInfo = $this->gfa_model->getCorperateDetails($email)[0]['Event'];  
        
        }else{
            $corInfo =''; 
        }
    
    
        // Generate a random number between 1000 and 10000
$random_1 = time();
$random_2 = time() . rand(100, 999);

// Extract first 3 digits of random_1
$first_3_digits = substr($random_1, 0, 3);

// Extract last 4 digits of random_2
$last_4_digits = substr($random_2, -4);

// Combine both to generate $random
$randomNumber = $first_3_digits . $last_4_digits;

// Get the current year, month, and day
$currentYear = date('Y');
$currentMonth = date('m');
$currentDay = date('d');
$time_submit = date("Y-m-d H:i:s", time());
//$cert_type = array("gateway-course","gateway-soft");
// Combine the parts to form the reference code
$refCodeGateway = "GATEWAY/{$currentYear}/{$currentMonth}/{$currentDay}/{$randomNumber}";
$getCertificateCourse = $this->gfa_model->getCertificateEmailCourse($email); 
$getCertificateSoft = $this->gfa_model->getCertificateEmailSoft($email); 

        if(empty($getCertificateCourse)){
        // $getCerticateData = $this->gfa_model->GetCertificateEligibleAssignedCourse($email);
        // if($getCerticateData[0]['Score'] >=60){

           
        //     $data = array(
        //         'email' => $email,
        //         'ref' => $random_2,
        //         'prog' => $refCodeGateway,
        //         'cert_type' => "gateway-course",
        //         'time_submit' => $time_submit,
        //         'status' => "active",
        //         'course' => $getCerticateData[0]['Course'],
        //         'score' => $getCerticateData[0]['Score'],
        //         'name'=>$getCerticateData[0]['Fullname']
        //         ) ;
        //    $this->gfa_model->insertCertificate($data); 
        //    session()->set('cert_course_ref', $random_2); 
           
         //}
        
        }else{
            session()->set('cert_course_ref', $getCertificateCourse[0]['ref']); 
           
        }

        if(($password == $profile_request[0]['password'] || $password =="Password") && ($email == $profile_request[0]['email']) ) 
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
				session()->set('cert_soft_ref', $getCertificateSoft[0]['ref']);
                
                if($profile_request[0]['account_type'] == 'startup' || $profile_request[0]['account_type'] == 'individual' ){
                    $startup_detail = $this->gfa_model->getStartUpDetails($email);
                        // if ($startup_detail[0]['Batch'] == 'skill_gateway') {
                        
        
                    $profileUsername = $email;
       
                        $user_detail = [
                            'email' => $this->request->getPost("email"),
                            'password' => $this->request->getPost("password"),
                            'username'=> $profileUsername,
                            'firstname'=> $startup_detail[0]['Primary_Contact_Name'],
                            'lastname'=> $startup_detail[0]['Primary_Contact_Name'],
                        ];
                        
                        $websites = ['remsana'];
                        // $websites = ['remsana', 'estore', 'marketplace'];

                        foreach($websites as $website) {
                            if(empty($this->admin_model->check_sso_email($user_detail['email'], $website))) {
                                $this->createWpUser($user_detail, $website);
                            }
                        }

                        //$this->enrollRemsanaCourse($user_detail);
                        //return 'test'.$this->enrollRemsanaCourse($user_detail);

                        $this->gfa_model->set_last_login($user_detail['email']);

                        $user_action = $this->request->uri->getSegment(2);
	        	        $this->saveUserActivity($user_action, $email);
                		$this->gfa_model->updateIsOline($email, ['Is_Online' => 1]);
                    //Event for microsoft 
                    //getAllStartUpNByEmailMicrosoft
                    
                    if(!empty($this->gfa_model->getAllDcdtByEmail($profile_request[0]['email']))){
                    return redirect()->to(base_url('gfa/dashboard'));
                  }
                  if(!empty($this->admin_model->getAllStartUpNByEmailMicrosoft($profile_request[0]['email']))){
                    //redirect(base_url().'gfa/startup_cooperate');  
                     return redirect()->to(base_url('gfa/startup_cooperate'));
                  }
                    return redirect()->to(base_url('gfa/dashboard'));
                
//                   } else {
//                         $response_data['message'] = "<center><font size=2 color=red>You have not registered on this platform.</font></center>";

                    
//                         $title['page_title'] = "User Login ";
    
//                         echo view('header_home',$title);
    
//                         echo view('login', $response_data);
    
//                         echo view('header_footer');
    
//                     }
                } else {
                    
                    if($profile_request[0]['account_type'] == 'corperate' ){
                        $cor_detail = $this->gfa_model->getSortedUserData($email);
                        $user_detail = [
                            'email' => $this->request->getPost("email"),
                            'password' => $this->request->getPost("password"),
                            'username'=> $profileUsername,
                            'firstname'=> $cor_detail[0]['Name'],
                            'lastname'=> $cor_detail[0]['Name'],
                        ];
                        
//                         $websites = ['remsana'];
                        
//                         for($i = 0; $i < count($websites); $i++){
//                             if(!($this->admin_model->check_sso_email($user_detail['email'], $websites[i]))){
//                                $this->createWpUser($user_detail, $websites[$i]);
//                             }
//                         }
                        
                        session()->set('cor_info', $corInfo);
                        $this->gfa_model->set_last_login($user_detail['email']);

                        //$this->saveUserActivity('signin', $user_detail['email']);

                    if($this->gfa_model->getCorperateDetails($email)[0]['Event']=='Kenya_Microsoft'){
                        return redirect()->to(base_url('gfa/corperate_startup'));
                    }else{
                        return redirect()->to(base_url('gfa/corporate_dashboard')); //  corperate_startup
                    }
                    return redirect()->to(base_url('gfa/corporate_dashboard')); //  corperate_startup
                    
                    }elseif($profile_request[0]['account_type'] == 'investor'){
                       return redirect()->to(base_url('gfa/investor_mentor'));  
                    }
                    
                    else{
                       return redirect()->to(base_url('gfa/dashboard')); 
                    }
                }

                
            }

            else

            {

                    $response_data['message'] = "<center><font size=2 color=red>Invalid email or password, try again.</font></center>";

                    
                    $title['page_title'] = "User Login | GetFunded Africa";

                    echo view('header_home',$title);

                    echo view('login', $response_data);

                    echo view('header_footer');

                                                

            }

       
    }

        public function dashboard()
    {
        
        $emailVerifySession  = session()->get('email') ;

        
        //$checkRegisteredAccount = $this->gfa_model->getStartUpDetails($emailVerifySession) ;
        
        if(!empty($emailVerifySession)){
        	if($this->gfa_model->getCohortDetails($emailVerifySession)){
         		return redirect()->to(base_url('gfa/referral')); 
        	} else {
        		return redirect()->to(base_url('gfa/learning_path')); 
            }
        } else{
         return redirect()->to(base_url('gfa/login'));
        }

    }

    public function certificate_gen_course(){
        // Generate a random number between 1000 and 10000
        $email  = session()->get('email') ;
        $random_1 = time();
        $random_2 = time() . rand(100, 999);

        // Extract first 3 digits of random_1
        $first_3_digits = substr($random_1, 0, 3);

        // Extract last 4 digits of random_2
        $last_4_digits = substr($random_2, -4);

        // Combine both to generate $random
        $randomNumber = $first_3_digits . $last_4_digits;

        // Get the current year, month, and day
        $currentYear = date('Y');
        $currentMonth = date('m');
        $currentDay = date('d');
        $time_submit = date("Y-m-d H:i:s", time());
        //$cert_type = array("gateway-course","gateway-soft");
        // Combine the parts to form the reference code
        $refCodeGateway = "GATEWAY/{$currentYear}/{$currentMonth}/{$currentDay}/{$randomNumber}";
        $getCertificateCourse = $this->gfa_model->getCertificateEmailCourse($email); 


        if(empty($getCertificateCourse)){
        $getCerticateData = $this->gfa_model->GetCertificateEligibleAssignedCourse($email);
        $courseTrack = $this->gfa_model->GetUserProgressAssignedCourses($email);
        $courseTrackProgress  =trim(str_replace("%","",$courseTrack[0]['Progress']));
        if($courseTrackProgress >=60){

            
            $data = array(
                'email' => $email,
                'ref' => $random_2,
                'prog' => $refCodeGateway,
                'cert_type' => "gateway-course",
                'time_submit' => $time_submit,
                'status' => "active",
                'course' => $getCerticateData[0]['Course'],
                'score' => $courseTrackProgress,
                'name'=>$getCerticateData[0]['Fullname']
                ) ;
            $this->gfa_model->insertCertificate($data); 
            session()->set('cert_course_ref', $random_2); 
            return redirect()->to(base_url("gfa/certificate/{$random_2}"));
        }else{
            return redirect()->to(base_url("gfa/certificate_not_eligible/course"));
        }
        
        }else{
            $cert_ref = $getCertificateCourse[0]['ref'];
            session()->set('cert_course_ref', $cert_ref);
                
            return redirect()->to(base_url("gfa/certificate/{$cert_ref}")); 
            
        }

    }


    public function certificate_gen(){
        $email  = session()->get('email') ;
        // $getCerticateData = $this->gfa_model->GetCertificateEligibleSoftSkills($email);
        // print_r($getCerticateData);
        // exit;
        // Generate a random number between 1000 and 10000
        $random_1 = time();
        $random_2 = time() . rand(1000, 9999);

        // Extract first 3 digits of random_1
        $first_34_digits = substr($random_1, 0, 4);

        // Extract last 4 digits of random_2
        $last_4_digits = substr($random_2, -4);

        // Combine both to generate $random
        $randomNumber = $first_34_digits . $last_4_digits;

        // Get the current year, month, and day
        $currentYear = date('Y');
        $currentMonth = date('m');
        $currentDay = date('d');
        $time_submit = date("Y-m-d H:i:s", time());
        //$cert_type = array("gateway-course","gateway-soft");
        // Combine the parts to form the reference code
        $refCodeGateway = "GATEWAY/{$currentYear}/{$currentMonth}/{$currentDay}/{$randomNumber}";
        $getCertificateCourse = $this->gfa_model->getCertificateEmailSoft($email); 

        if(empty($getCertificateCourse)){
        $getCerticateData = $this->gfa_model->GetCertificateEligibleSoftSkills($email);
        if(trim($getCerticateData[0]['Score']) >=60){

            
            $data = array(
                'email' => $email,
                'ref' => $random_2,
                'prog' => $refCodeGateway,
                'cert_type' => "gateway-soft",
                'time_submit' => $time_submit,
                'status' => "active",
                'course' => $getCerticateData[0]['courses'],
                'score' => $getCerticateData[0]['Score'],
                'name'=>$getCerticateData[0]['FullName']
                ) ;
            $this->gfa_model->insertCertificate($data); 
            session()->set('cert_soft_ref', $random_2); 
            return redirect()->to(base_url("gfa/certificate_soft_skills/{$random_2}"));
        }else{
        return redirect()->to(base_url("gfa/certificate_not_eligible/soft"));
        }
        
        }else{
            $cert_ref = $getCertificateCourse[0]['ref']; 
            return redirect()->to(base_url("gfa/certificate_soft_skills/{$cert_ref}"));
        }

    }

public function certificate_center()

	{
        $email  = session()->get('email') ;
        if(($email == '')){ return redirect()->to(base_url('gfa/login')); }		
		$title['page_title'] = "Certificate Center - Gateway Program";
       	$data['getStartUpDetails'] = $this->gfa_model->getStartUpDetails($email);
        $data['email'] =$email;

		echo view('header-assets-new',$title);
        echo view('menu-assets-new',$data);
        echo view('navbar-assets-new',$data);
        echo view('certificate_center', $data);
        echo view('footer-assets-new',$data);
	}

    public function certificate_not_eligible($course_type="")

	{
        $email  = session()->get('email') ;
        if(($email == '')){ return redirect()->to(base_url('gfa/login')); }		
		$title['page_title'] = "Certificate not eligible - Gateway Program";
        $data['course_type'] =$course_type;
        $data['email'] =$email;

		echo view('header-assets-new',$title);
        echo view('menu-assets-new',$data);
        echo view('navbar-assets-new',$data);
        echo view('certificate_not_eligible', $data);
        echo view('footer-assets-new',$data);
	}

    public function certificate_soft()

	{
        $email  = session()->get('email') ;
        if(($email == '')){ return redirect()->to(base_url('gfa/login')); }		
		$title['page_title'] = "Certificate soft - Gateway Program";
        $data['certData'] =$this->gfa_model->getCertificateEmailCourseRef($ref);

		echo view('header-assets-new',$title);
        echo view('menu_menu',$data);
        // echo view('navbar-assets-new',$data);
        echo view('certificate_soft', $data);
        echo view('footer-assets-new',$data);
	}

public function certificate_soft_skills($ref="")

	{
       if(($ref == '')){ return redirect()->to(base_url('gfa/login')); }		
		$data['page_title'] = "Certificate of Completion Soft Skills - GATEWAY Program";
        $data['certData'] =$this->gfa_model->getCertificateEmailCourseRef($ref);
		
		$html = view('certificate_soft',$data);
        // Create an instance of the Pdf library
        $pdf = new Pdf();
        $certificate_name = 'gateway-certificate-soft'.time().'.pdf';

        // Generate the PDF and display it in the browser
        $pdf->generate($html, $certificate_name);
	}

    public function certificate($ref="")
	{
       if(($ref == '')){ return redirect()->to(base_url('gfa/login')); }		
		$data['page_title'] = "Certificate of Completion - GATEWAY Program";
        $data['certData'] =$this->gfa_model->getCertificateEmailCourseRef($ref);

		// Load your view file
        $html = view('certificate',$data);
        // Create an instance of the Pdf library
        $pdf = new Pdf();
        $certificate_name = 'gateway-certificate'.time().'.pdf';
        // Generate the PDF and display it in the browser
        $pdf->generate($html, $certificate_name);
	}
    
    public function submitLoginVerify(){
        //$this->gfa_model->mysqlCheck($this->request->getPost("email")); 
        $email  = session()->get('email');
        $course = $this->request->getPost("course");
        $group_head = $this->request->getPost("groupLeader");
        $state = $this->gfa_model->mysqlCheck($this->request->getPost("state")); 
        $time_submit = date("Y-m-d h:i:s A", time());
        $ref_id = time();
        $fname = $this->request->getPost("fname");
        $mname = $this->request->getPost("mname");
        $lname = $this->request->getPost("lname");
        $phone = $this->request->getPost("phone");
        $bvn = $this->request->getPost("bvn");
        $nin = $this->request->getPost("nin");
        $Startup_Company_Name = $fname." ".$lname;
        
        $data = array(
            
                        'ref_id' => $ref_id,
                        'email' => $email,
                        'course' => $course,
                        'state' => $state,
                        'course' => $course,
                        'group_head' => $group_head,
                        'time_submit' => $time_submit
                  );
     $verifyFirstLogin = $this->gfa_model->verifyFirstLogin($email); 
     if(empty($verifyFirstLogin))
        {
        $this->gfa_model->insertCourseGroup($data);
        }else{
            echo "";
        }
        
        //Update Profile Records 
        $data_startup = array(
            
                        'Primary_Contact_Name' => $Startup_Company_Name,
                        'Phones' => $phone,
                        
                  );
        $this->gfa_model->saveStartupProfile($email, $data_startup);
        $data_startup_extra_info = array(
            
                        'middlename' => $mname,
                        'bvn' => $bvn,
                        'nin' => $nin,
                        
                        
                  );
        $this->gfa_model->saveParticipantsProfile($email, $data_startup_extra_info);
    }
    
    public function displayTotalCourseMember(){
        
        $stateRd = $this->request->getPost("stateRd");
        $thisSkill = $this->request->getPost("thisSkill");
        // echo $this->gfa_model->displayTotalCourseMember($thisSkill,$stateRd);
        $sumMembers = 0;
        foreach($this->gfa_model->getEmailByCourse($thisSkill) as $courseArray){
         $sumMembers += $this->gfa_model->displayTotalCourseMember($courseArray['email'],$stateRd);   
        }
        echo $sumMembers;
    }

    public function edit_cohort($id='')

{
    
$email  = session()->get('email'); if(($email == '')){ return redirect()->to(base_url('gfa/login')); }		
    $title['page_title'] = "Update Cohort ";
    $data['id'] = $id;
    $data['email'] =  $email;
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
		$title['page_title'] = "Manage Admin/Users ";
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



                $subject    = 'Your GFA Forgot Password';

        
        $message = "<a href='https://gfa-tech.com'><img src='https://gfa-tech.com/portal/public/assets/images/logo/gateway-logo.png'></a><br>";   
         $message .= "<strong>Your password has been successfully retreived <br></strong> <a href= ".base_url()." ><i>Click here to login with your details</i></a><br><br>"."Email: ".$email."<br>"."Password: ".$profile_request[0]['password']."<br><br> GetFunded Africa ";

        $this->gfa_model->sendMailApi($email, $message,$subject);



//              $data_bind  =   array(

                    

//                  'password' => $password,

//                  );

//          $this->app_model->updateAccount( $email, $data_bind); 



                echo "Check your mail for your password";

            
            }else{


                echo "Email does not exist";

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
    $Url = "https://getfundedafrica.com/cohort/corporate/?org=" . str_replace(" ", "-", $Title_Extra);
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

    $Url = "https://getfundedafrica.com/cohort/corporate/?org=" . str_replace(" ", "-", $Title_Extra);
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

public function export_reg_state()
{
  

	
    $filename 	=  date("Y-m-d",time()); 
    $filename  = rand(1,100)."_".$filename.'_'."all_participants";
     
header("Content-Type: text/csv");
header("Content-Disposition: attachment; filename={$filename}.csv");

// Create a file pointer for output
$output = fopen("php://output", "w");

// Define the CSV header row
$csvHeader = array(
    "S/No",
    "Full Names",
    "Genders",
    "Dates of birth",
    "States of origin",
    "States of residence",
    "Residential addresses",
    "City/town of Residence",
    "Marital status",
    "NIN",
    "BVN",
    "Telephone numbers",
    "Email addresses",
    "Highest Level of Education",
    "Course Category",
    "Course Applied for",
    
    
    
    
);

// Write the CSV header
fputcsv($output, $csvHeader);
        $n =1 ;
        $row  = $this->gfa_model->getStartUpDetailsRegByState('Ekiti');
        foreach ($row as $startupDetails) {
        // $startupDetails = $this->gfa_model->($rowArray['email']);
       $startupDetailsExt = $this->admin_model->getAllStartUpNByEmailExtX($startupDetails['Contact_Email']);
        $rowArray = $this->gfa_model->getUserAccountExt($startupDetails['Contact_Email']); 
        //if($rowArray[0]['assist_wema']==1){ $wema_need = "Yes";  }else{ $wema_need = "No" ; }
            $csvRow = array(
                $n++,
                $startupDetails['Primary_Contact_Name']." ".$rowArray[0]['middlename'],
                $startupDetails['Gender'],
                $rowArray[0]['dob'],
                ucwords($rowArray[0]['state_of_origin']),
                $startupDetails['State'],
                $startupDetails['Personal_Address'],
                $startupDetails['City'],
                $rowArray[0]['marital_status'],
                $rowArray[0]['nin'],
                $rowArray[0]['bvn'],
                $startupDetails['Phones'],
                $rowArray[0]['email'],
                $startupDetails['Level_Edu'],
                $startupDetails['Interest_Fund_Raise'],
                $rowArray[0]['profile_extra'],
                
                
               
                
                
            );

            fputcsv($output, $csvRow);
        }
   

// Close the output file pointer
fclose($output);

exit();
   
    
}

public function export_all_reg_by_date()
{
  

	
    $filename 	=  date("Y-m-d",time()); 
    $filename  = rand(1,100)."_".$filename.'_'."all_participants";
     
header("Content-Type: text/csv");
header("Content-Disposition: attachment; filename={$filename}.csv");

// Create a file pointer for output
$output = fopen("php://output", "w");

// Define the CSV header row
$csvHeader = array(
    "S/No",
    "Full Names",
    "Genders",
    "Dates of birth",
    "States of origin",
    "States of residence",
    "Residential addresses",
    "City/town of Residence",
    "Marital status",
    "NIN",
    "BVN",
    "Telephone numbers",
    "Email addresses",
    "Highest Level of Education",
    "Course Applied for",
    "Do you have a Wema Bank account?",
    "Do you need assistance in setting up Wema Account after the program?",
    "Business Name",
    "Business Address",
    "Number of Years in Operation",
    "Is your business registered with the Corporate Affairs Commission (CAC)?",
    "Business Registration Number",
    "Line of Business/Sector",
    "Digital Tool Proficiency",
    "Business Description",
    
    
);

// Write the CSV header
fputcsv($output, $csvHeader);
        $n =1 ;
        $startDateTime = '2023-11-06 15:09:15';
        $startupLogin = $this->gfa_model->getStartUpDetailsByDate($startDateTime);
        
        foreach ($startupLogin as $startupLoginArray) {
        $startupDetails  = $this->gfa_model->getStartUpDetails($startupLoginArray['email']);
       $startupDetailsExt = $this->admin_model->getAllStartUpNByEmailExtX($startupLoginArray['email']);
        $rowArray = $this->gfa_model->getUserAccountExt($startupLoginArray['email']); 
        if($rowArray[0]['assist_wema']==1){ $wema_need = "Yes";  }else{ $wema_need = "No" ; }
            $csvRow = array(
                $n++,
                $startupDetails[0]['Primary_Contact_Name']." ".$rowArray[0]['middlename'],
                $startupDetails[0]['Gender'],
                $rowArray[0]['dob'],
                ucwords($rowArray[0]['state_of_origin']),
                $startupDetails[0]['State'],
                $startupDetails[0]['Personal_Address'],
                $startupDetails[0]['City'],
                $rowArray[0]['marital_status'],
                $rowArray[0]['nin'],
                $rowArray[0]['bvn'],
                $startupDetails[0]['Phones'],
                $rowArray[0]['email'],
                $startupDetails[0]['Level_Edu'],
                $rowArray[0]['profile_extra'],
                $rowArray[0]['wema_account_que'],
                $wema_need,
                $startupDetails[0]['Startup_Company_Name'],
                $startupDetails[0]['Personal_Address'],
                str_replace('â€“','and',$startupDetailsExt[0]['Year_Operation']),
                $startupDetailsExt[0]['Incorporated'],
                $startupDetailsExt[0]['Registration_Number'],
                $startupDetails[0]['PrimaryBusinessIndustry'],
                $rowArray[0]['digital_tool_proficiency'],
                $startupDetailsExt[0]['About_Company'] 
               
                
                
            );

            fputcsv($output, $csvRow);
        }
   

// Close the output file pointer
fclose($output);

exit();
   
    
}

public function export_all_reg_password()
{
  

	
    $filename 	=  date("Y-m-d",time()); 
    $filename  = rand(1,100)."_".$filename.'_'."all_participants_with_passwords";
     
header("Content-Type: text/csv");
header("Content-Disposition: attachment; filename={$filename}.csv");

// Create a file pointer for output
$output = fopen("php://output", "w");

// Define the CSV header row
$csvHeader = array(
    "S/No",
    "Full Names",
    "Email addresses",
    "Password",
    "Genders",
    "Dates of birth",
    "States of origin",
    "States of residence",
    "Residential addresses",
    "City/town of Residence",
    "Marital status",
    "NIN",
    "BVN",
    "Telephone numbers",
    "Course Applied for",
   
    
    
);

// Write the CSV header
fputcsv($output, $csvHeader);
        $n =1 ;
        $row  = $this->gfa_model->getStartUpDetailsRegAll();
        foreach ($row as $startupDetails) {
        // $startupDetails = $this->gfa_model->($rowArray['email']);
       $startupDetailsExt = $this->admin_model->getAllStartUpNByEmailExtX($startupDetails['Contact_Email']); 
        $rowArray = $this->gfa_model->getUserAccountExt($startupDetails['Contact_Email']); 
        $loginDetails = $this->gfa_model->getLoginDetails($startupDetails['Contact_Email']);
        if($rowArray[0]['assist_wema']==1){ $wema_need = "Yes";  }else{ $wema_need = "No" ; }
            $csvRow = array(
                $n++,
                $startupDetails['Primary_Contact_Name']." ".$rowArray[0]['middlename'],
                $rowArray[0]['email'],
                $loginDetails[0]['password'],
                $startupDetails['Gender'],
                $rowArray[0]['dob'],
                ucwords($rowArray[0]['state_of_origin']),
                $startupDetails['State'],
                $startupDetails['Personal_Address'],
                $startupDetails['City'],
                $rowArray[0]['marital_status'],
                $rowArray[0]['nin'],
                $rowArray[0]['bvn'],
                $startupDetails['Phones'],
                $rowArray[0]['profile_extra'],
               
                
                
            );

            fputcsv($output, $csvRow);
        }
   

// Close the output file pointer
fclose($output);

exit();
   
    
}

public function export_all_reg_consented($batch)
{
  

	
    $filename 	=  date("Y-m-d",time()); 
    $filename  = rand(1,100)."_".$filename.'_'."{$batch}_program";
     
header("Content-Type: text/csv");
header("Content-Disposition: attachment; filename={$filename}.csv");

// Create a file pointer for output
$output = fopen("php://output", "w");

// Define the CSV header row
$csvHeader = array(
    "S/No",
    "Full Names",
    "Genders",
    "Dates of birth",
    "States of origin",
	"LGA",
    "States of residence",
    "Residential addresses",
    "Marital status",
    "NIN",
    "BVN",
    "Telephone numbers",
    "Email addresses",
    "Highest Level of Education",
    "Category",
    "Do you need assistance in setting up Wema Account",
    "Date Reg",
    
    
    
);

// Write the CSV header
fputcsv($output, $csvHeader);
        $n =1 ;
        $row  = $this->gfa_model->UsersWhoConsentedToAccountOpening($batch);
        foreach ($row as $startupDetails) {
        // $startupDetails = $this->gfa_model->($rowArray['email']);
       
            $csvRow = array(
                $n++,
                $startupDetails['Name'],
                $startupDetails['Gender'],
                 $startupDetails['DateOfBirth'],
                ucwords( $startupDetails['state_of_origin']),
                $startupDetails['lga_of_origin'],
            	$startupDetails['state_of_residence'],
                $startupDetails['Address'],
                 $startupDetails['MaritalStatus'],
                 $startupDetails['nin'],
                 $startupDetails['bvn'],
                $startupDetails['Phones'],
                $startupDetails['Email'],
                $startupDetails['Highest_Form_of_Education'],
                 $startupDetails['Category'],
                 $startupDetails['assist_wema'],
            	 $startupDetails['RegistrationDate']
                
               
                
                
            );

            fputcsv($output, $csvRow);
        }
   

// Close the output file pointer
fclose($output);

exit();
   
    
}

public function export_all_reg()
{
  

	
    $filename 	=  date("Y-m-d",time()); 
    $filename  = rand(1,100)."_".$filename.'_'."all_participants";
     
header("Content-Type: text/csv");
header("Content-Disposition: attachment; filename={$filename}.csv");

// Create a file pointer for output
$output = fopen("php://output", "w");

// Define the CSV header row
$csvHeader = array(
    "S/No",
    "Full Names",
    "Genders",
    "Dates of birth",
    "States of origin",
    "States of residence",
    "Residential addresses",
    "City/town of Residence",
    "Marital status",
    "NIN",
    "BVN",
    "Telephone numbers",
    "Email addresses",
    "Highest Level of Education",
    "Course Applied for",
    "Do you have a Wema Bank account?",
    "Do you need assistance in setting up Wema Account after the program?",
    "Business Name",
    "Business Address",
    "Number of Years in Operation",
    "Is your business registered with the Corporate Affairs Commission (CAC)?",
    "Business Registration Number",
    "Line of Business/Sector",
    "Digital Tool Proficiency",
    "Business Description",
    
    
);

// Write the CSV header
fputcsv($output, $csvHeader);
        $n =1 ;
        $row  = $this->gfa_model->getStartUpDetailsRegAll();
        foreach ($row as $startupDetails) {
        // $startupDetails = $this->gfa_model->($rowArray['email']);
       $startupDetailsExt = $this->admin_model->getAllStartUpNByEmailExtX($startupDetails['Contact_Email']);
        $rowArray = $this->gfa_model->getUserAccountExt($startupDetails['Contact_Email']); 
        if($rowArray[0]['assist_wema']==1){ $wema_need = "Yes";  }else{ $wema_need = "No" ; }
            $csvRow = array(
                $n++,
                $startupDetails['Primary_Contact_Name']." ".$rowArray[0]['middlename'],
                $startupDetails['Gender'],
                $rowArray[0]['dob'],
                ucwords($rowArray[0]['state_of_origin']),
                $startupDetails['State'],
                $startupDetails['Personal_Address'],
                $startupDetails['City'],
                $rowArray[0]['marital_status'],
                $rowArray[0]['nin'],
                $rowArray[0]['bvn'],
                $startupDetails['Phones'],
                $rowArray[0]['email'],
                $startupDetails['Level_Edu'],
                $rowArray[0]['profile_extra'],
                $rowArray[0]['wema_account_que'],
                $wema_need,
                $startupDetails['Startup_Company_Name'],
                $startupDetails['Personal_Address'],
                str_replace('â€“','and',$startupDetailsExt[0]['Year_Operation']),
                $startupDetailsExt[0]['Incorporated'],
                $startupDetailsExt[0]['Registration_Number'],
                $startupDetails[0]['PrimaryBusinessIndustry'],
                $rowArray[0]['digital_tool_proficiency'],
                $startupDetailsExt[0]['About_Company'] 
               
                
                
            );

            fputcsv($output, $csvRow);
        }
   

// Close the output file pointer
fclose($output);

exit();
   
    
}

public function export_need_wema_acct_no_bvn_nin()
{
    //echo $this->gfa_model->get_need_wema_acct_no_bvn_nin();
    $filename 	=  date("Y-m-d",time()); 
    $filename  = rand(1,100)."_".$filename.'_'."need_wema_acct_with_bvn_nin";
     
header("Content-Type: text/csv");
header("Content-Disposition: attachment; filename={$filename}.csv");

// Create a file pointer for output
$output = fopen("php://output", "w");

// Define the CSV header row
$csvHeader = array(
    "S/No",
    "Full Names",
    "Genders",
    "Dates of birth",
    "States of origin",
    "States of residence",
    "Residential addresses",
    "City/town of Residence",
    "Marital status",
    "NIN",
    "BVN",
    "Telephone numbers",
    "Email addresses",
    "Highest Level of Education",
    
);

// Write the CSV header
fputcsv($output, $csvHeader);
        $n =1 ;
        $row  = $this->gfa_model->get_need_wema_acct_no_bvn_nin();
        foreach ($row as $rowArray) {
        $startupDetails = $this->gfa_model->getStartUpDetails($rowArray['email']);
            $csvRow = array(
                $n++,
                $startupDetails[0]['Primary_Contact_Name']." ".$rowArray['middlename'],
                $startupDetails[0]['Gender'],
                $rowArray['dob'],
                ucwords($rowArray['state_of_origin']),
                $startupDetails[0]['State'],
                $startupDetails[0]['Personal_Address'],
                $startupDetails[0]['City'],
                $rowArray['marital_status'],
                $rowArray['nin'],
                $rowArray['bvn'],
                $startupDetails[0]['Phones'],
                $rowArray['email'],
                $startupDetails[0]['Level_Edu']
                
                
            );

            fputcsv($output, $csvRow);
        }
}

public function export_need_wema_acct_with_bvn_nin()
{
  

	
    $filename 	=  date("Y-m-d",time()); 
    $filename  = rand(1,100)."_".$filename.'_'."need_wema_acct_with_bvn_nin";
     
header("Content-Type: text/csv");
header("Content-Disposition: attachment; filename={$filename}.csv");

// Create a file pointer for output
$output = fopen("php://output", "w");

// Define the CSV header row
$csvHeader = array(
    "S/No",
    "Full Names",
    "Genders",
    "Dates of birth",
    "States of origin",
    "States of residence",
    "Residential addresses",
    "City/town of Residence",
    "Marital status",
    "NIN",
    "BVN",
    "Telephone numbers",
    "Email addresses",
    "Highest Level of Education",
    
);

// Write the CSV header
fputcsv($output, $csvHeader);
        $n =1 ;
        $row  = $this->gfa_model->get_need_wema_acct_with_bvn_nin();
        foreach ($row as $rowArray) {
        $startupDetails = $this->gfa_model->getStartUpDetails($rowArray['email']);
            $csvRow = array(
                $n++,
                $startupDetails[0]['Primary_Contact_Name']." ".$rowArray['middlename'],
                $startupDetails[0]['Gender'],
                $rowArray['dob'],
                ucwords($rowArray['state_of_origin']),
                $startupDetails[0]['State'],
                $startupDetails[0]['Personal_Address'],
                $startupDetails[0]['City'],
                $rowArray['marital_status'],
                $rowArray['nin'],
                $rowArray['bvn'],
                $startupDetails[0]['Phones'],
                $rowArray['email'],
                $startupDetails[0]['Level_Edu']
                
                
            );

            fputcsv($output, $csvRow);
        }
   

// Close the output file pointer
fclose($output);

exit();
   
    
}

public function need_wema_acct_with_bvn_nin($reg_type="")

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
    echo view('corperate/need_wema_acct_with_bvn_nin',$data);
    echo view('corperate/footer_new');

    

}

public function reg_by_state($reg_type="")

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
    echo view('corperate/reg_by_state',$data);
    echo view('corperate/footer_new');

    

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
    echo view('corperate/xcorperate_startup',$data);
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
  <a href='https://getfundedafrica.com'><img src='https://getfundedafrica.com/images/logo-1.png'></a>
    
<p><strong>Dear ".$name.",</strong></p>

<p> ".$nameCorperate." from ".$corperateName."
has invited you to join GetFundedAfrica as a Startup/SME.</p>
 



<p><br />=================Below is your GetFundedAfrica account login details===============</p>
<p><a href='https://getfundedafrica.com/portal/'><i>Click here to login with your details</i></a></p>
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
        $title['page_title'] = "Profile ";
        $data['email'] =  $emailVerifySession;
          $data['login_type'] = session()->get('login_type') ;
          $data['account_type'] = session()->get('account_type') ;
            echo view('header_new',$title);
        
       
        if($account_type=="startup" || $account_type=="individual" || $account_type==""){ 
        echo view('menu_new',$data);
        echo view('nav_new',$data);
        echo view('profiledemo',$data);
        
        }
        
        if($account_type=="investor"){ 
        echo view('investor/menu_new',$data);
        echo view('investor/nav_new',$data);
        echo view('investor/profile',$data);
    
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
            $message = "<a href='https://getfundedafrica.com'><img src='https://getfundedafrica.com/images/logo-1.png'></a> <br><br>";

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
    
//nichole@getfundedfrica.com                
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
            
                $message = "<a href='https://getfundedafrica.com'><img src='https://getfundedafrica.com/images/logo-1.png'></a> <br><br>";
    
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
//nichole@getfundedfrica.com                
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
            $message = "<a href='https://getfundedafrica.com'><img src='https://getfundedafrica.com/images/logo-1.png'></a> <br><br>";
            
            $message .= "<p>Name: ".$profile[0]['Primary_Contact_Name']."</p>";
            $message .= "<p>Email: ".$Email."</p>";
            $message .= "<p>Credit: $".$Credit."</p>";

            $message .= "<p>Date of Request: ".$Time_submit."</p>";

            $subject = "Onboarding Credit Request"; 
                            
            $this->sendMail('felix@getfundedafrica.com', $message,$subject);                    
                    
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
    echo "Uploaded image saved";
}

public function signoutAction()
{
    $email = session()->get('email') ;

    $user_action = $this->request->uri->getSegment(2);
	$this->saveUserActivity($user_action, $email);
	$this->gfa_model->updateIsOline($email, ['Is_Online' => 0]);
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
        $founderName =$_POST["founderName"];                
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
  <a href='https://getfundedafrica.com'><img src='https://getfundedafrica.com/images/logo-1.png'></a>
    
<p><strong>Dear ".$founderName[$j].",</strong></p>

<p> ".$nameCorperate." from ".$corperateName."
has invited you to join the GetFundedAfrica Platform and manage the account.</p>
 



<p><br />=================Below is your GetFundedAfrica account login details===============</p>
<p><a href='https://fgnalat.getfundedafrica.com/portal/'><i>Click here to login with your details</i></a></p>
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
		if($this->gfa_model->getStartUpDetails($email)[0]['Primary_Contact_Name']!=""){
		    
		   $point_1 = 10;
		   $credit_1 = 1;
		}else{
		    $point_1 = 0;
		    $credit_1 = 0;
		}
        if($this->gfa_model->getStartUpDetails($email)[0]['CountryHQ']!=""){
            
         $point_2 = 15;
         $credit_2 = 1;
		}else{
		    $point_2 = 0;
		    $credit_2 = 0;
		}
        if($this->gfa_model->getStartUpDetails($email)[0]['PrimaryBusinessIndustry']!=""){
		 $point_3 = 100;
		 $credit_3 = 1;
		}else{
		    $credit_3 = 0;
		    $point_3= 0;
		}
		if($this->gfa_model->getStartUpDetails($email)[0]['LinkedIn']!=""){
		 $point_4 = 15; 
		 $credit_4 = 1;
		}else{
		    $credit_4 = 0;
		    $point_4= 0;
		}
		
		if($this->gfa_model->getStartUpDetails($email)[0]['Startup_Company_Name']!=""){
		 $point_5 = 10; 
		 $credit_5 = 1;
		}else{
		    $point_5= 0;
		    $credit_5 = 0;
		}
		
		
		if($this->gfa_model->getStartUpDetails($email)[0]['Address']!=""){
		 $point_6 = 15; 
		 $credit_6 = 1;
		}else{
		    $point_6= 0;
		    $credit_6 = 0;
		}
		
		if($this->gfa_model->getStartUpDetails($email)[0]['NoOfEmployees']!=""){
		 $point_7 = 10; 
		 $credit_7 = 1;
		}else{
		    $point_7= 0;
		    $credit_7 = 0;
		}
		
		if($this->gfa_model->getStartUpDetails($email)[0]['OperatingRegions']!=""){
		 $point_8 = 100; 
		 $credit_8 = 1;
		}else{
		    $point_8= 0;
		    $credit_8 = 0;
		}
		
		if($this->gfa_model->getStartUpDetails($email)[0]['Next_Funding_Round_Target_Sought']!=""){
		 $point_9 = 100; 
		 $credit_9 = 1;
		}else{
		    $point_9= 0;
		    $credit_9 = 0;
		}
		
		
		
		if($this->gfa_model->getStartUpDetails($email)[0]['Date_Founded']!=""){
		 $point_10 = 5; 
		 $credit_10 = 1;
		}else{
		    $point_10= 0;
		    $credit_10 = 0;
		}
		
		if($this->gfa_model->getStartUpDetails($email)[0]['Revenue']!=""){
		 $point_11 = 15; 
		 $credit_11 = 1;
		}else{
		    $point_11= 0;
		    $credit_11 = 0;
		}
		
		if($this->gfa_model->getStartUpDetails($email)[0]['Investment_History']!=""){
		 $point_12 = 15; 
		 $credit_12 = 1;
		}else{
		    $point_12= 0;
		    $credit_12 = 0;
		}
		
		
		
			if($this->gfa_model->getPhotoUploaded($email)[0]['Photo_name']!=""){
		 $point_13 = 5; 
		 $credit_13 = 1;
		}else{
		    $point_13= 0;
		    $credit_13 = 0;
		}
		
		$data['point']= ceil((($point_1 + $point_2 + $point_3 + $point_4 + $point_5+ $point_6 + $point_7 + $point_8 + $point_9 + $point_10 + $point_11 + $point_12 + $point_13)/415)*100) ;
		$data['credit']= $credit_1 + $credit_2 + $credit_3 + $credit_4 + $credit_5+ $credit_6 + $credit_7 + $credit_8 + $credit_9 + $credit_10 + $credit_11 + $credit_12 + $credit_13 ;
		$data['email'] =  $email;
          $data['login_type'] = session()->get('login_type') ;
          $data['account_type'] = session()->get('account_type') ;
		echo view('header_new',$title);
        echo view('nav_new',$data);
        echo view('menu_new',$data);
		echo view('startup_mentor',$data);
		echo view('footer_new',$data);

		

	}

public function startupProfileproExt()

	{
	    	$email  = session()->get('email');
         if(($email == '')){ return redirect()->to(base_url('gfa/login')) ; }
		$organization = $this->gfa_model->mysqlCheck($this->request->getPost("organization"));
		$website = $this->gfa_model->mysqlCheck($this->request->getPost("website"));
		$startup_country = $this->gfa_model->mysqlCheck($this->request->getPost("startup_country"));
		$industryArray = $this->request->getPost("industry");
		$current_stage = $this->gfa_model->mysqlCheck($this->request->getPost("current_stage"));
		$Implementation_stage = $this->gfa_model->mysqlCheck($this->request->getPost("Implementation_stage"));
		$fund_to_raise = $this->gfa_model->mysqlCheck($this->request->getPost("fund_to_raise"));
		$about = $this->gfa_model->mysqlCheck($this->request->getPost("about"));
		$year_founded = $this->gfa_model->mysqlCheck($this->request->getPost("year_founded"));
		$Revenue = $this->gfa_model->mysqlCheck($this->request->getPost("revenue"));
		$NoOfEmployees = $this->gfa_model->mysqlCheck($this->request->getPost("NoOfEmployees"));
		$time = date("Y-m-d h:i:s A",time());
		$mentorshipArray = $this->request->getPost("mentorship");
        $mentorship = implode(",",$mentorshipArray);
        $industry = implode(",", $industryArray);
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
					'mentorship' 	=> $mentorship
					
				
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
					'mentorship' 	=> $mentorship
				
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
					'Company_Aspire' 	=> $Company_Aspire
					
					
				
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
					'Company_Aspire' 	=> $Company_Aspire
					
				
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

        $email = $this->encrypt->decode($this->session->userdata('email')) ;
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
    
    public function updateEventpostpro(){
    
    echo library('upload');
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
   $email = $this->encrypt->decode($this->session->userdata('email'));
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
                   echo "Event Updated Successfully";

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
    $email = $this->encrypt->decode($this->session->userdata('email'));
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
                    'time_Submit' => $time
                
                    );
                    
                    $this->gfa_model->insertEvent($data_story); 
                    echo "Event Submitted Successfully, Please wait for it to be approved";

}


public function sendMail($recipient_email, $message,$subject)
    {   
    

        $mail = new PHPMailer;
        
        $mail->isSMTP();                            // Set mailer to use SMTP
        $mail->Host = "mail.getfundedafrica.com";//"smtp.googlemail.com"; //'smtp.gmail.com';//'smtp.gmail.com';             // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                     // Enable SMTP authentication
        $mail->Username = "app@getfundedafrica.com";//"info@thenigerdeltasummit.org"; //'nmobilecomms@gmail.com';          // SMTP usernameff
        $mail->Password ="XQirbJ2wGqLG"; //"4321assP$";//'nmobile1234'; // SMTP password  4321assP$1234
        $mail->SMTPSecure = 'ssl';                  // Enable TLS encryption, `ssl` also accepted
        $mail->Port =465;                          // TCP port to connect to
        
        //$mail->setFrom('info@totalcpfa-ng.com');
        $mail->From ="GFA TECH@wemabank.com";
        $mail->FromName ="FGN/ALAT Digital Skillnovation Program For MSMEs";
        //$mail->addReplyTo('info@trixpmedia.com');
        $mail->addAddress($recipient_email);
        //$mail->addBCC('bcc@example.com');
        
        $mail->isHTML(true);  // Set email format to HTML
        
        $bodyContent = $message;
        
        
        $mail->Subject =$subject;
        $mail->Body    = $message;
        
        if(!$mail->send()) {
           // echo '1';
            return '1';
        } else {
           return '2';
        }
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
            $message = "<a href='https://getfundedafrica.com'><img src='https://getfundedafrica.com/images/logo-1.png'></a> <br><br>";
            
            $message .= "<p>Name: ".$profile[0]['Primary_Contact_Name']."</p>";
            $message .= "<p>Email: ".$Email."</p>";
            $message .= "<p>Perks: ".$perks_info[0]['title']."</p>";
            $message .= "<p>Qty: ".$perks_no."</p>";
            $message .= "<p>Date of Request: ".$Time_submit."</p>";

            $subject = "Onboarding Perks Request";  
                            
            $this->sendMail('felix@getfundedafrica.com', $message,$subject);    
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

    public function loadperksbyid()

    {
        
        $data['id'] = $this->request->getPost("id");
        
        echo view('load_perks_details',$data);
        

    }

    public function loadperkscategory()

    {
        
        $data['category'] = $this->request->getPost("category");
        echo view('header_home2',$title);
        echo view('load_perks_category',$data);
        echo view('header_footer2');

    }
    

    public function loadperks()

    {
        
        
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
$curl = curl_init();
// Set some options - we are passing in a useragent too here
curl_setopt_array($curl, array(
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => 'https://getfundedafrica.com/wp_api/wp_event.php',
    CURLOPT_USERAGENT => 'GFA EVENTS API'
));
// Send the request & save response to $resp
$resp = curl_exec($curl);
// Close request to clear up some resources

curl_close($curl);
$data['eventResp'] = json_decode($resp,true);
        echo view('investor/header_new',$title);
        // echo view('investor/nav_new',$data);
        // echo view('investor/menu_new',$data);
        echo view('investor/investor_mentor',$data);
        echo view('investor/footer_new',$data);
        

    }
	
	public function saveUserActivity($user_action = '', $email = ''){

		if($user_action == '' || $email == ''){
			$user_action =$this->request->getPost("user_action"); 
			$email = $this->request->getPost('email');
		}

		date_default_timezone_set('Lagos/Nigeria');    
		$DateAndTime = date('Y-m-d H:i:s', time()); 
		$final_date_time = $DateAndTime;

		$ip_address = $_SERVER['REMOTE_ADDR'];

		$all_action = [
			'UserAction' => $user_action,
			'UserIp' => $ip_address,
			'UserId' => '',
			'UserEmail' => $email,
			'AppType' => "Fgnalat App",
			'DateCreated' => $final_date_time
		];

		$action_list = ['verifyexpire', 'checkpaystack', 'verifypayment', 'saveUserActivity'];
		if (!(in_array($user_action, $action_list))) {
			$this->gfa_model->insertUserActivity($all_action);
		}

	}
    
    public function corperateProfileproDemo()
    {
        $email = session()->get('email');
        $name = $this->request->getPost("firstName") . " " . $this->request->getPost("lastName");
        $organization = $this->request->getPost("organization");
        $phoneNumber = $this->request->getPost("phoneNumber");
        $address = $this->request->getPost("Business_address");
        $gender = $this->request->getPost("gender");
        $facebook = $this->request->getPost("Facebook");
        $linkedIn = $this->request->getPost("LinkedIn");
        $city = $this->request->getPost("City");
        $businessAddress = $this->request->getPost("Business_address");
        $website = $this->request->getPost("Website");
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
        $industry = implode(",", $industryArray);
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

    // public function chat(){


    //     $emailVerifySession  = session()->get('email');
        
    //     if(empty($emailVerifySession)){ return redirect()->to(base_url('gfa/login')); } 


    //     $title['page_title'] = "Chat - GetFundedAfrica";

    //     $email  = session()->get('email') ;
    //     if(($email == '')){ return redirect()->to(base_url('gfa/login')); }  
    //     $data['email'] =  $email;
    //     $data['login_type'] = session()->get('login_type') ;
    //     $data['account_type'] = $account_type = session()->get('account_type');
    //     $data['admin_access'] = "";
    //     $data['suggested_contacts'] = $this->chat_model->getSuggestedContacts();
    //     $data['recent_chats'] = $this->chat_model->getRecentChats($email);
    //     $user_action = $this->request->uri->getSegment(2);
	//     $this->saveUserActivity($user_action, $email);

    //     echo view('header_new',$title);
    //     echo view('nav_new',$data);
    //     echo view('menu_new',$data);
    //     echo view('chat', $data);
    //     echo view('footer_new', $data);
    // }

    function createWpUser($user_detail, $website){

		$data = $user_detail;
		$result = [
			'Name'=> $data->firstname,
			'Email' => $data->email,
			'Username'=> $data->username,
		];

		$wpcred = $this->gfa_model->getWpCred($data['email']);
		$cred_web = $wpcred[0]['Website'];
		
		if($cred_web != $website){
		    $wpcred = 0;
		}
		
		if((!$wpcred) && $website !== 'gfamax'){
			$data_string = json_encode($data);
	
			$ch = curl_init('https://'.$website.'.getfundedafrica.com/wp-json/api/gfareg');
			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
			curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
			curl_setopt($ch, CURLOPT_HTTPHEADER, array(
				'Authorization: Basic Z2ZhdGVzdDp5ekVYIGJvUHMgZ09adSBkcTl5IGZSTlggSlVlYQ==',
				'Content-Type: application/json',
			));
			// I would suggest you to add the timeout
			//curl_setopt($ch, CURLOPT_TIMEOUT, 30);
			// curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY); // or set it to CURLAUTH_BASIC
			// curl_setopt($ch, CURLOPT_USERPWD, sprintf('%s:%s', $data['username'],$data['password']));
			$status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);   //get status code
		
			$result = curl_exec($ch);

			$resjson = json_decode($result);
			$cred = [
				'Website' => $website,
				'Email' => $resjson->Email,
				'LoginKey'=> rtrim(strtr(base64_encode($resjson->Email), '+/', '-_'), '='),
			];
			
 			// if(!($this->gfa_model->checkifwpcredexists($resjson->Email))){
 			//     $this->gfa_model->createWpCred($cred);
 			// }

            //  log_message('debug', print_r($cred, true));
            //  exit;

            if(!($this->admin_model->check_sso_email($resjson->Email, $website))){
               $this->gfa_model->createWpCred($cred); 
            }
			

			
		} elseif($website == 'gfamax'){
		    $data_string = json_encode($data);
	
			$ch = curl_init('https://gfamax.com/wp-json/api/gfareg');
			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
			curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
			curl_setopt($ch, CURLOPT_HTTPHEADER, array(
				'Authorization: Basic Z2ZhdGVzdDp5ekVYIGJvUHMgZ09adSBkcTl5IGZSTlggSlVlYQ==',
				'Content-Type: application/json',
			));
			// I would suggest you to add the timeout
			//curl_setopt($ch, CURLOPT_TIMEOUT, 30);
			// curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY); // or set it to CURLAUTH_BASIC
			// curl_setopt($ch, CURLOPT_USERPWD, sprintf('%s:%s', $data['username'],$data['password']));
			$status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);   //get status code
		
			$result = curl_exec($ch);

			$resjson = json_decode($result);
			$cred = [
				'Website' => $website,
				'Email' => $resjson->Email,
				'LoginKey'=> rtrim(strtr(base64_encode($resjson->Email), '+/', '-_'), '='),
			];

 			// if(!($this->gfa_model->checkifwpcredexists($resjson->Email))){
 			//     $this->gfa_model->createWpCred($cred);
 			// }
			if(!($this->admin_model->check_sso_email($resjson->Email, $website))){
               $this->gfa_model->createWpCred($cred); 
            }
		}

		return $result;
	}

    // public function enrollRemsanaCourse($data){
		
	// 	$email_data = [
	// 		"email" => $data['email'],
	// 	];



	// 		$data_string = json_encode($email_data);
	
	// 		$ch = curl_init('https://remsana.getfundedafrica.com/wp-json/api/gfafundraisingenroll');
	// 		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
	// 		curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
	// 		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	// 		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
	// 		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
	// 		curl_setopt($ch, CURLOPT_HTTPHEADER, array(
	// 			'Authorization: Basic Z2ZhdGVzdDp5ekVYIGJvUHMgZ09adSBkcTl5IGZSTlggSlVlYQ==',
	// 			'Content-Type: application/json',
	// 		));
	// 		// I would suggest you to add the timeout
	// 		//curl_setopt($ch, CURLOPT_TIMEOUT, 30);
	// 		// curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY); // or set it to CURLAUTH_BASIC
	// 		// curl_setopt($ch, CURLOPT_USERPWD, sprintf('%s:%s', $data['username'],$data['password']));
	// 		$status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);   //get status code
		
	// 		$result = curl_exec($ch);

	// 		$resjson = json_decode($result);

	// 		$title = "Fundraising Program Course for GFA Account";

	// 		$course_data = [
	// 			"Email" => $data['email'],
	// 			"CourseTitle" => $title,
	// 			"CourseStatus" => $resjson,
	// 		];

	// 		if(!($this->gfa_model->check_enrolled_course($data['email'], $title))){
	// 			$this->gfa_model->insertRoleStatus($course_data);
	// 		}

			

			

	// 		return $course_data;

		
	// }

    public function enrollRemsanaCourse(){
		if($_SERVER['REQUEST_METHOD'] == 'POST' || !empty($_POST)){

            // $data = json_decode($_POST['data'], true);

            // $data = json_decode($json_data, true);

            // Receive the JSON data from the POST request
            $json_data = file_get_contents("php://input");

            $data = json_decode($json_data, true);

            // Check if the required fields are present in the JSON data
            if (!isset($data['email'])) {
                // Return an error response or perform any other necessary action
                $response = ['status' => 'error', 'message' => 'Missing required fields in JSON data'];
                echo json_encode($response);
                exit();
            }

            // $response = ['status' => 'success'];
            // return json_encode($response);

            // print_r($data);
            // exit();

            $email = $data['email'];
            $item_id = $data['item_id'];
            $course_id = $data['course_id'];

            

            $email_data = [
                "email" => $email,
                "item_id" => $item_id
            ];

            // print_r($email_data);
            // exit();

			$data_string = json_encode($email_data);
	
			$ch = curl_init('https://remsana.getfundedafrica.com/wp-json/api/gfafundraisingenroll');
			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
			curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
			curl_setopt($ch, CURLOPT_HTTPHEADER, array(
				'Authorization: Basic Z2ZhdGVzdDp5ekVYIGJvUHMgZ09adSBkcTl5IGZSTlggSlVlYQ==',
				'Content-Type: application/json',
			));
			// I would suggest you to add the timeout
			//curl_setopt($ch, CURLOPT_TIMEOUT, 30);
			// curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY); // or set it to CURLAUTH_BASIC
			// curl_setopt($ch, CURLOPT_USERPWD, sprintf('%s:%s', $data['username'],$data['password']));
			$status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);   //get status code
		
			$result = curl_exec($ch);

			$resjson = json_decode($result);

			$course_data = [
				"Email" => $email,
				// "CourseTitle" => $title,
				"CourseStatus" => $resjson,
                "CourseID" => $course_id,
			];

            // print_r($course_data);
            // exit();

			if(!($this->gfa_model->check_enrolled_course($email, $course_id))){
				$this->gfa_model->insertRoleStatus($course_data);
			}

			return $course_data;
        }

		
	}

    

//------------END---------------------------
    
}