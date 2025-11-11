<?php 
namespace App\Controllers;
//use \CodeIgniter\Encryption\Encryption;
use Config\Services;

// use CodeIgniter\Session\Session;
use CodeIgniter\Controller;
// use Config\Session;
use PHPMailer\PHPMailer\PHPMailer;
use App\Models\AdminModel;
use App\Models\GfaModel;



use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\URI\URI;

class Admin extends BaseController {
    protected $gfa_model;
    protected $admin_model;
	protected $encryption;
	protected $session;

	// protected $uri;

    public function __construct() {
        //parent::__construct();
        $this->gfa_model = model('App\Models\GfaModel');
        $this->admin_model = model('App\Models\AdminModel');

		//$this->encryption = \Config\Services::encrypter();

		// $this->session = new Session(config('App'));
		// $helper = helper('url');

		// $this->encryption = \Config\Services::encrypter(); 
        $this->session = \Config\Services::session();

		helper('translate');

    }

    private function saveUserActivity($user_action, $action_email) {
        try {
            // ...
        } catch (\Exception $e) {
            logger()->error($e->getMessage());
        }
    }

public function index()

	{
		if ($this->session->get('login_type') == '') {
			return redirect()->to(base_url('admin/login'));
		}
		
		$title['page_title'] = "Admin - ";

		echo view('admin/header_home',$title);

		

		echo view('admin/navbar',$title);
		echo view('admin/index');

		echo view('admin/header_footer');

		

	}

	public function userauthext()

	{

$id =$this->request->getPost("id"); 
$status = $this->request->getPost("file_status"); 
$data = array('status'=>$status);
$this->admin_model->updateLoginStatus($data, $id);


$loginDetails = $this->admin_model->getSub($id);
$email = $loginDetails[0]['email'];
$password = $loginDetails[0]['password'];

$loginDetails = $this->admin_model->getSub($id);
$email = $loginDetails[0]['email'];
$password = $loginDetails[0]['password'];
if($status =='de-active'){
echo 'x Declined';
$message ="<a href='https://GetFundedAfrica.GetFundedAfrica.ci/portal/'><img src='https://GetFundedAfrica.GetFundedAfrica.ci/portal/public/assets/images/logo/GFA-Logo.png'></a><br><br>
<pHello,</p>
<p>Nous avons le regret de vous informer que votre compte a été désactivé. Cette action peut avoir été entreprise en raison de certaines violations ou incohérences détectées conformément à nos politiques.</p>
<p>Pour plus de clarification et d'assistance, nous vous demandons aimablement de contacter l'administrateur à l'adresse admin@cotedivoirepme.com L'administrateur vous fournira les détails et les conseils nécessaires pour résoudre ce problème.</p>
<p>N'hésitez pas à nous contacter si vous avez des questions ou des préoccupations.</p>
<p>Nous vous remercions pour votre compréhension.</p>
<p>Cordialement,<br>Admin<br>Cote D'Ivoire Pme</p>";

$subject = "Désactivation de votre compte";
 $this->sendMail($email, $message,$subject);

}

if($status =='active'){
echo '✔Approved';
$message ="<a href='https://GetFundedAfrica.GetFundedAfrica.ci/portal/'><img src='https://GetFundedAfrica.GetFundedAfrica.ci/portal/public/assets/images/logo/GFA-Logo.png'></a><br><br>

	<p>Bonjour,</p>

    <p>Votre compte utilisateur sur la plateforme de mise en réseau 'GetFundedAfrica' a été approuvé avec succès !</p>
    
    <p>Vous trouverez ci-dessous vos informations de connexion :</p>

    <p><strong>Email : </strong>{$email}</p>
    <p><strong>Mot de passe : </strong>{$password}</p>

    <p>Veuillez cliquer sur le lien ci-dessous pour vous connecter :</p>
    <p><a href='https://GetFundedAfrica.GetFundedAfrica.ci/portal/'>https://GetFundedAfrica.GetFundedAfrica.ci/portal/</a></p>

    <p>Pour toute question ou suggestion, n'hésitez pas à nous contacter à l'adresse suivante : 
    <a href='mailto:GetFundedAfrica@GetFundedAfrica.ci'>GetFundedAfrica@GetFundedAfrica.ci</a>.</p>

    <p>Cordialement,<br>
    L'équipe GetFundedAfrica</p>";

$subject = "Notification d'approbation de compte";
 $this->sendMail($email, $message,$subject);

}
}
public function userauth()

	{

$id =$this->request->getPost("id"); 
$status = $this->request->getPost("file_status"); 
$data = array('status'=>$status);
$this->admin_model->updateLoginStatus($data, $id);

echo $status;
$loginDetails = $this->admin_model->getSub($id);
$email = $loginDetails[0]['email'];
$password = $loginDetails[0]['password'];

$loginDetails = $this->admin_model->getSub($id);
$email = $loginDetails[0]['email'];
$password = $loginDetails[0]['password'];
if($status =='de-active'){

$message ="<a href='https://GetFundedAfrica.GetFundedAfrica.ci/portal/'><img src='https://GetFundedAfrica.GetFundedAfrica.ci/portal/public/assets/images/logo/GFA-Logo.png'></a><br><br>
<pHello,</p>
<p>Nous avons le regret de vous informer que votre compte a été désactivé. Cette action peut avoir été entreprise en raison de certaines violations ou incohérences détectées conformément à nos politiques.</p>
<p>Pour plus de clarification et d'assistance, nous vous demandons aimablement de contacter l'administrateur à l'adresse admin@cotedivoirepme.com L'administrateur vous fournira les détails et les conseils nécessaires pour résoudre ce problème.</p>
<p>N'hésitez pas à nous contacter si vous avez des questions ou des préoccupations.</p>
<p>Nous vous remercions pour votre compréhension.</p>
<p>Cordialement,<br>Admin<br>Cote D'Ivoire Pme</p>";

$subject = "Désactivation de votre compte";
 $this->sendMail($email, $message,$subject);

}

if($status =='active'){

$message ="<a href='https://GetFundedAfrica.GetFundedAfrica.ci/portal/'><img src='https://GetFundedAfrica.GetFundedAfrica.ci/portal/public/assets/images/logo/GFA-Logo.png'></a><br><br>

	<p>Bonjour,</p>

    <p>Votre compte utilisateur sur la plateforme de mise en réseau 'GetFundedAfrica' a été approuvé avec succès !</p>
    
    <p>Vous trouverez ci-dessous vos informations de connexion :</p>

    <p><strong>Email : </strong>{$email}</p>
    <p><strong>Mot de passe : </strong>{$password}</p>

    <p>Veuillez cliquer sur le lien ci-dessous pour vous connecter :</p>
    <p><a href='https://GetFundedAfrica.GetFundedAfrica.ci/portal/'>https://GetFundedAfrica.GetFundedAfrica.ci/portal/</a></p>

    <p>Pour toute question ou suggestion, n'hésitez pas à nous contacter à l'adresse suivante : 
    <a href='mailto:GetFundedAfrica@GetFundedAfrica.ci'>GetFundedAfrica@GetFundedAfrica.ci</a>.</p>

    <p>Cordialement,<br>
    L'équipe GetFundedAfrica</p>";

$subject = "Notification d'approbation de compte";
 $this->sendMail($email, $message,$subject);

}
}
#===========================Admin Update==============================================
public function unleashified_blog_by_id()
{
    // Proper CORS headers
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
    header("Access-Control-Allow-Headers: Content-Type, Authorization");
    header("Content-Type: application/json; charset=utf-8");

    if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
        http_response_code(200);
        exit;
    }

    // Disable output buffering and clear any previous content
    ob_clean();
    ob_start();
    $id = $this->request->getPost("id");
    $row = $this->admin_model->get_blog_post($id);
    //$data = [];
     
    
        $blog_photo = "https://getfundedafrica.com/portal/uploads/files/{$row[0]['blog_photo']}";
        $data[] = [
            'id' => $row[0]['id'],
            'ref' => $row[0]['ref'],
            'title' => $row[0]['title'],
            'category' => $row[0]['category'],
            'content' => $row[0]['content'],
            'source' => $row[0]['source'],
            'blog_url' => $row[0]['blog_url'],
            'status' => $row[0]['status'],
            'date' => $row[0]['date'],
            'blog_photo' => $blog_photo
        ];
    //}

    $response = [
        'status' => 'success',
        'data' => $data
    ];

    // Output clean JSON
    echo json_encode($response, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
    exit;
}

public function unleashified_blog()
{
    // Proper CORS headers
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
    header("Access-Control-Allow-Headers: Content-Type, Authorization");
    header("Content-Type: application/json; charset=utf-8");

    if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
        http_response_code(200);
        exit;
    }

    // Disable output buffering and clear any previous content
    ob_clean();
    ob_start();

    $rows = $this->admin_model->blog_post();
    $data = [];
    
    foreach ($rows as $row) {
        $blog_photo = "https://getfundedafrica.com/portal/uploads/files/{$row['blog_photo']}";
        $data[] = [
            'id' => $row['id'],
            'ref' => $row['ref'],
            'title' => $row['title'],
            'category' => $row['category'],
            'content' => $row['content'],
            'source' => $row['source'],
            'blog_url' => $row['blog_url'],
            'status' => $row['status'],
            'date' => $row['date'],
            'blog_photo' => $blog_photo
        ];
    }

    $response = [
        'status' => 'success',
        'data' => $data
    ];

    // Output clean JSON
    echo json_encode($response, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
    exit;
}




    public function blog()

	{
	    $login_type  = session()->get('login_type') ;
        if(($login_type == '')){ return redirect()->to(base_url('admin/login')); }
		
		$title['page_title'] = "Manage Blog - GetFundedAfrica";
        $data["product"] = session()->get('product') ;
		echo view('admin/header_home',$title);
		echo view('admin/navbar',$title);

		echo view('admin/blog',$data);

		echo view('admin/header_footer');

		

	}
	public function resource()

	{
	    $login_type  = session()->get('login_type') ;
        if(($login_type == '')){ return redirect()->to(base_url('admin/login')); }
		
		$title['page_title'] = "Manage Resource - GetFundedAfrica";
        $data["product"] = session()->get('product') ;
		echo view('admin/header_home',$title);
		echo view('admin/navbar',$title);

		echo view('admin/resource',$data);

		echo view('admin/header_footer');

		

	}
	public function resource_category()

	{
	     $login_type  = session()->get('login_type') ;
	   if(($login_type == '')){ return redirect()->to(base_url('admin/login')); }
		
		$title['page_title'] = "Manage Resource Category - GetFundedAfrica";
        $data["product"] = session()->get('product') ;
		echo view('admin/header_home',$title);
		echo view('admin/navbar',$title);

		echo view('admin/resource_category',$data);

		echo view('admin/header_footer');

	   $login_type  = session()->get('login_type') ;
      	

	}
	
	public function add_resource_category()

	{
	    $login_type  = session()->get('login_type') ;
	   if(($login_type == '')){ return redirect()->to(base_url('admin/login')); }
		
		$title['page_title'] = "Manage Resource Category - GetFundedAfrica";
        $data["product"] = session()->get('product') ;
		echo view('admin/header_home',$title);
		echo view('admin/navbar',$title);

		echo view('admin/add_resource_category',$data);

		echo view('admin/header_footer');

	   
      	

	}

	public function update_profile($id='')

	{
	      $login_type  = session()->get('login_type') ;
	   if(($login_type == '')){ return redirect()->to(base_url('admin/login')); }
		
		$title['page_title'] = "Update Profile Users - GetFundedAfrica";
        $data["product"] = session()->get('product') ;
        $data["row"] = $this->gfa_model->getLoginDetailsById($id);
		echo view('admin/header_home',$title);
		echo view('admin/navbar',$data);

		echo view('admin/event/update_profile',$data);

		echo view('admin/header_footer');
	

	}

	public function edit_admin_profile($id='')

	{
	      $login_type  = session()->get('login_type') ;
	   if(($login_type == '')){ return redirect()->to(base_url('admin/login')); }
		
		$title['page_title'] = "Update Profile Admin - GetFundedAfrica";
        $data["product"] = session()->get('product') ;
        $data["row"] = $this->admin_model->getSubAdminId($id);
		echo view('admin/header_home',$title);
		echo view('admin/navbar',$data);

		echo view('admin/edit_admin_profile',$data);

		echo view('admin/header_footer');
	

	}

	public function edit_sub_admin($id='')

	{
	      $login_type  = session()->get('login_type') ;
	   if(($login_type == '')){ return redirect()->to(base_url('admin/login')); }
		
		$title['page_title'] = "Update Sub Admin - GetFundedAfrica";
        $data["product"] = session()->get('product') ;
        $data["row"] = $this->admin_model->getSubAdminId($id);
		echo view('admin/header_home',$title);
		echo view('admin/navbar',$data);

		echo view('admin/edit_sub_admin',$data);

		echo view('admin/header_footer');
	

	}

	public function manage_admin()

	{
	      $login_type  = session()->get('login_type') ;
	   if(($login_type == '')){ return redirect()->to(base_url('admin/login')); }
		
		$title['page_title'] = "Manage Sub Admin - GetFundedAfrica";
        $data["product"] = session()->get('product') ;
        $data["row"] = $this->admin_model->getAllSubAdmin(2);
		echo view('admin/header_home',$title);
		echo view('admin/navbar',$data);

		echo view('admin/manage_admin',$data);

		echo view('admin/header_footer');
	

	}
	
	public function add_sub_admin()

	{
	      $login_type  = session()->get('login_type') ;
	   if(($login_type == '')){ return redirect()->to(base_url('admin/login')); }
		
		$title['page_title'] = "Add Sub Admin - GetFundedAfrica";
        $data["product"] = session()->get('product') ;
		echo view('admin/header_home',$title);
		echo view('admin/navbar',$data);

		echo view('admin/add_sub_admin',$data);

		echo view('admin/header_footer');

	 
      	

	}
	
	public function add_blog()

	{
	      $login_type  = session()->get('login_type') ;
	   if(($login_type == '')){ return redirect()->to(base_url('admin/login')); }
		
		$title['page_title'] = "Add Blog - GetFundedAfrica";
        $data["product"] = session()->get('product') ;
		echo view('admin/header_home',$title);
		echo view('admin/navbar',$title);

		echo view('admin/add_blog',$data);

		echo view('admin/header_footer');

	 
      	

	}
	
	public function add_resource()

	{
	      $login_type  = session()->get('login_type') ;
	   if(($login_type == '')){ return redirect()->to(base_url('admin/login')); }
		
		$title['page_title'] = "Manage Resource Category - GetFundedAfrica";
        $data["product"] = session()->get('product') ;
		echo view('admin/header_home',$title);
		echo view('admin/navbar',$title);

		echo view('admin/add_resource',$data);

		echo view('admin/header_footer');

	 
      	

	}
	
	
	public function edit_resource_category($id="")

	{
	      $login_type  = session()->get('login_type') ;
	   if(($login_type == '')){ return redirect()->to(base_url('admin/login')); }
		
		$title['page_title'] = "Manage Resource Category - GetFundedAfrica";
        $data["product"] = session()->get('product') ;
        $data['id'] = $id;
		echo view('admin/header_home',$title);
		echo view('admin/navbar',$data);

		echo view('admin/edit_resource_category',$data);

		echo view('admin/header_footer');

	 
      	

	}
	
	public function edit_blog($id="")

	{
	      $login_type  = session()->get('login_type') ;
	   if(($login_type == '')){ return redirect()->to(base_url('admin/login')); }
		
		$title['page_title'] = "Blog Post - GetFundedAfrica";
        $data["product"] = session()->get('product') ;
        $data['id'] = $id;
		echo view('admin/header_home',$title);
		echo view('admin/navbar',$data);

		echo view('admin/edit_blog',$data);

		echo view('admin/header_footer');

	 
      	

	}
	
	public function edit_resource($id="")

	{
	      $login_type  = session()->get('login_type') ;
	   if(($login_type == '')){ return redirect()->to(base_url('admin/login')); }
		
		$title['page_title'] = "Manage Resource Category - GetFundedAfrica";
        $data["product"] = session()->get('product') ;
        $data['id'] = $id;
		echo view('admin/header_home',$title);
		echo view('admin/navbar',$data);

		echo view('admin/edit_resource',$data);

		echo view('admin/header_footer');

	 
      	

	}

	public function updateUserProfile(){
	  
	   
	    $email = $this->request->getPost("email"); 
	    $password = $this->request->getPost("password");
	   	$id = $this->request->getPost("id"); 
	   
	    $time_submit	 =  date("Y-m-d H:i:s",time());
	    $data = array(
	    
					
					'email' => $email,
					'password' => $password,
					
					
				
					);
					

	   		// $checkSubAdmin = $this->admin_model->checkSubAdmin($email);
	        // if(empty($checkSubAdmin)){
	        $this->admin_model->updateUserProfile($data, $id);
	        echo "Profil mis à jour avec succès et envoyé à l'utilisateur.";
	       $message = "<a href='https://GetFundedAfrica.GetFundedAfrica.ci/portal/'><img src='https://GetFundedAfrica.GetFundedAfrica.ci/portal/public/assets/images/logo/GFA-Logo.png'></a><br><br>

	<p>Bonjour,</p>

	<p>Ceci est pour vous informer que les détails de votre compte ont été récupérés/mis à jour avec succès.</p>

	<p>Le changement a été initié par l'administrateur à votre demande.</p>

	<p>Vous trouverez ci-dessous vos informations de connexion :</p>

    <p><strong>Email : </strong>{$email}</p>
    <p><strong>Mot de passe : </strong>{$password}</p>

	<p>Pour toute assistance supplémentaire, n'hésitez pas à contacter notre équipe de support.</p>

	<p>Cordialement,<br>
	L'équipe GetFundedAfrica</p>";

$subject = "Détails du compte récupérés/mis à jour";
$this->sendMail($email, $message, $subject);
	    
	}
	

	public function editsubadmin(){
	  
	    $name = $this->request->getPost("name"); 
	    $email = $this->request->getPost("email"); 
	    $password = $this->request->getPost("password");
	    $status = $this->request->getPost("status"); 
	   	$id = $this->request->getPost("id"); 
	   
	    $time_submit	 =  date("Y-m-d H:i:s",time());
	    $data = array(
	    
					'name' => $name,
					'email' => $email,
					'password' => $password,
					'status' => $status,
					
				
					);
					

	   		// $checkSubAdmin = $this->admin_model->checkSubAdmin($email);
	        // if(empty($checkSubAdmin)){
	        $this->admin_model->updateSubAdmin($data, $id);
	        echo "Profile Updated Successfully";
	       // }else{
	         
	       //   echo "exist";
	       // }
	   	   // echo "Added Successfully";
	    
	}
	

	public function addsubadmin(){
	  
	    $name = $this->request->getPost("name"); 
	    $email = $this->request->getPost("email"); 
	    $password = $this->request->getPost("password");
	    $status = $this->request->getPost("status"); 
	    $login_type = 2;
	    $role = 'SubAdmin';
	    $time_submit	 =  date("Y-m-d H:i:s",time());
	    $data = array(
	    
					'name' => $name,
					'email' => $email,
					'password' => $password,
					'product' => $role,
					'status' => $status,
					'login_type' => $login_type,
				
					);
					

	   		$checkSubAdmin = $this->admin_model->checkSubAdmin($email);
	        if(empty($checkSubAdmin)){
	        $this->admin_model->insertSubAdmin($data);
	        echo "Sub Admin Created Successfully";
	       }else{
	         
	         echo "exist";
	       }
	   	   // echo "Added Successfully";
	    
	}
	
	
	public function update_resource_category_pro(){
	  
	    $title = $this->request->getPost("title"); 
	    $time_submit	 =  date("Y-m-d H:i:s",time());
	    $id = $this->request->getPost("id"); 
	    $data = array(
	    
					'title' => $title,
					'time_submit' => $time_submit
				
					);
					

	   //	$this->admin_model->updateCredit($data_credit,$id);
	       // if(empty($edit_id)){
	        $this->admin_model->updateReourceCategory($data, $id);
	       // }else{
	       //   $this->admin_model->updateInvestorAgreement($data_agreement_update,$edit_id);  
	       // }
	   	  echo "Updated Successfully";
	    
	}
	
	public function add_resource_category_pro(){
	  
	    $title = $this->request->getPost("title"); 
	    $time_submit	 =  date("Y-m-d H:i:s",time());
	    $data = array(
	    
					'title' => $title,
					'time_submit' => $time_submit
				
					);
					

	   //	$this->admin_model->updateCredit($data_credit,$id);
	       // if(empty($edit_id)){
	        $this->admin_model->insertReourceCategory($data);
	       // }else{
	       //   $this->admin_model->updateInvestorAgreement($data_agreement_update,$edit_id);  
	       // }
	   	   echo "Added Successfully";
	    
	}
	
	public function add_blog_pro(){
		    
	    $category = $this->request->getPost("category"); 
	    $title = $this->request->getPost("title");
	    $source = $this->request->getPost("source"); 
	    $blog_url = $this->request->getPost("blog_url"); 
	    $status = $this->request->getPost("status");
	    $content = $this->request->getPost("content");
	    $files = $this->request->getFiles();
	    $uploadedFiles = $this->request->getFiles();
        $dataInfo = [];

        foreach ($uploadedFiles['file'] as $file) {
            if ($file->isValid() && !$file->hasMoved()) {
                $newName = $file->getRandomName();
                $file->move(ROOTPATH . 'uploads/files', $newName);
                $dataInfo[] = $newName;
            }
        }
	    $time_submit	 	=  date("Y-m-d h:i:s A",time());
	    $ref = time();
	    $data = array(
	                'ref' => $ref,
					'category' => $category,
					'title' => $title,
					'source' => $source,
					'blog_url' => $blog_url,
					'status' => $status,
					'content' => $content,
					'blog_photo' => $dataInfo[0],
					'date' => $time_submit
				
					);
					
				
	        $this->admin_model->insertBlogPost($data);
	       
	   	   echo "Added Successfully";
	   	  
	    
	}
	
	 public function updateblogpro()

    {


         //$ref = time();
         $title = $this->request->getPost('title');
         $category = $this->request->getPost('category');
         $content = $this->request->getPost('content');
         $source = $this->request->getPost('source');
         $blog_url = $this->request->getPost('blog_url');
         $status = $this->request->getPost('status');
         $getFile = $this->request->getPost('getFile');
         $id = $this->request->getPost('id');
         $date = date("Y-m-d h:i:s", time());

            $uploadedFiles = $this->request->getFiles();
        $dataInfo = [];

        foreach ($uploadedFiles['file'] as $file) {
            if ($file->isValid() && !$file->hasMoved()) {
                $newName = $file->getRandomName();
                $file->move(ROOTPATH . 'uploads/files', $newName);
                $dataInfo[] = $newName;
            }
        }

                               if($dataInfo[0] ==''){
                                
                            $getFile = $getFile;
                        }else{
                            $getFile  = $dataInfo[0];
                        }
                        $data = array(
                        
                        'title' =>$title,
                        'category' =>$category , 
                        'content' =>$content,
                        'source' =>$source , 
                        'blog_url' =>$blog_url,
                        'status' =>$status , 
                        'date' =>$date,
                        'blog_photo' =>$getFile, 
                     );
             
         $this->admin_model->updateBlogPost($data, $id);
        

    }

		public function add_resource_pro(){
		    
	    $category_id = $this->request->getPost("category_id"); 
	    $title = $this->request->getPost("title");
	    $caption = $this->request->getPost("caption"); 
	    $description = $this->request->getPost("editorContent"); 
	    $status = $this->request->getPost("status"); 
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
	    $time_submit	 	=  date("Y-m-d h:i:s A",time());
	    $data = array(
	    
					'category_id' => $category_id,
					'title' => $title,
					'caption' => $caption,
					'description' => $description,
					'status' => $status,
					'file' => implode(',', $dataInfo),
					'time_submit' => $time_submit
				
					);
					
				
	        $this->admin_model->insertReource($data);
	       
	   	   echo "Added Successfully";
	   	  
	    
	}
	
		public function update_resource_pro(){
		    
	    $category_id = $this->request->getPost("category_id"); 
	    $id = $this->request->getPost("id");
	    $title = $this->request->getPost("title");
	    $caption = $this->request->getPost("caption"); 
	     $description = $this->request->getPost("editorContent");  
	    $status = $this->request->getPost("status"); 
	    $getfile = $this->request->getPost("getfile");
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
        
    $resourceFile = $getfile;
}else{
    $resourceFile  = $dataInfo[0];
}
	    $time_submit	 	=  date("Y-m-d h:i:s A",time()); 
	    $data = array(
	    
					'category_id' => $category_id,
					'title' => $title,
					'caption' => $caption,
					'description' => $description,
					'status' => $status,
					'file' => $resourceFile,
					'time_submit' => $time_submit
				
					);
					
				
	       
	        $this->admin_model->updateReource($data, $id);
	       
	   	  echo "Updated Successfully";
	   	  
	    
	}
	
	public function deleteResourceCategory()

	{
	    
	    
	    $id = $this->request->getPost("id"); 
	    	
	   	$this->admin_model->deleteResourceCategory($id); 
	}
	
	public function deleteResource()

	{
	    
	    
	    $id = $this->request->getPost("id"); 
	    	
	   	$this->admin_model->deleteResource($id); 
	}
	
	public function deleteBlog()

	{
	    
	    
	    $id = $this->request->getPost("id"); 
	    	
	   	$this->admin_model->deleteBlog($id); 
	}




#==========================End Admin Update===========================================
public function matchInvestor()

	{
	    $data['id'] =  $this->request->getPost("id");
	   	echo view('admin/loadInvestor',$data); 
	}
	
	public function matchStartup()

	{
	    $data['id'] =  $this->request->getPost("id");
	   	echo view('admin/loadStartup',$data); 
	}
public function payment()

	{
		$login_type  = session()->get('login_type') ; if(($login_type == "")){ return redirect()->to(base_url('admin/login')); }

		$title['page_title'] = "Payment - GetFundedAfrica";
        
		echo view('admin/header_home',$title);
		echo view('admin/navbar',$title);

		echo view('admin/payment',$data);

		echo view('admin/header_footer');



	}
	
	public function active_subscribers()

	{
		$login_type  = session()->get('login_type') ; if(($login_type == "")){ return redirect()->to(base_url('admin/login')); }
		
		$title['page_title'] = "Active Subscribers - GetFundedAfrica";
        
		echo view('admin/header_home',$title);
		echo view('admin/navbar',$title);

		echo view('admin/activesub',$data);

		echo view('admin/header_footer');

		

	}
	
		public function paid_cohort()

	{
		$login_type  = session()->get('login_type') ; if(($login_type == "")){ return redirect()->to(base_url('admin/login')); }
		
		$title['page_title'] = "Paid Cohort Participants - GetFundedAfrica";
        
		echo view('admin/header_home',$title);
		echo view('admin/navbar',$title);

		echo view('admin/paid_cohort',$data);

		echo view('admin/header_footer');

		

	}
	
	
	public function package()

	{
		$login_type  = session()->get('login_type') ; if(($login_type == "")){ return redirect()->to(base_url('admin/login')); }
		
		$title['page_title'] = "Payment - Email Newsletter Application";

		echo view('admin/header_home',$title);
		

		echo view('admin/package');

		echo view('admin/header_footer');

		

	}
	public function early_stage()

	{
		$login_type  = session()->get('login_type') ; if(($login_type == "")){ return redirect()->to(base_url('admin/login')); }
		
		$title['page_title'] = "Subscription - Email Newsletter Application";

		echo view('admin/header_home',$title);
		echo view('admin/navbar',$title);

		echo view('admin/early_stage');

		echo view('admin/header_footer');

		

	}
	
	public function later_stage()

	{
		$login_type  = session()->get('login_type') ; if(($login_type == "")){ return redirect()->to(base_url('admin/login')); }
		
		$title['page_title'] = "Subscription - Email Newsletter Application";

		echo view('admin/header_home',$title);
		echo view('admin/navbar',$title);

		echo view('admin/later_stage');

		echo view('admin/header_footer');

		

	}
	public function free_subscribers()

	{
		$login_type  = session()->get('login_type') ; if(($login_type == "")){ return redirect()->to(base_url('admin/login')); }
		
		$title['page_title'] = "Subscription - Email Newsletter Application";

		echo view('admin/header_home',$title);
		echo view('admin/navbar',$title);

		echo view('admin/free_subscription');

		echo view('admin/header_footer');

		

	}
	public function subscribersx()

	{
		$login_type  = session()->get('login_type') ; if(($login_type == "")){ return redirect()->to(base_url('admin/login')); }
		
		$title['page_title'] = "Subscription - Email Newsletter Application";

		echo view('admin/header_home',$title);
		echo view('admin/navbar',$title);

		echo view('admin/subscription');

		echo view('admin/header_footer');

		

	}
	
	public function prev_startups()

	{
		$login_type  = session()->get('login_type') ; if(($login_type == "")){ return redirect()->to(base_url('admin/login')); }
		
		$title['page_title'] = "Subscription - GetFundedAfrica";
        
		echo view('admin/header_home',$title);
		echo view('admin/navbar',$title);

		echo view('admin/subpage',$data);

		echo view('admin/header_footer');

		

	}
	
	public function subscribers()

	{
		$login_type  = session()->get('login_type') ; if(($login_type == "")){ return redirect()->to(base_url('admin/login')); }
		
		$title['page_title'] = "Subscription - GetFundedAfrica";
        
		echo view('admin/header_home',$title);
		echo view('admin/navbar',$title);

		echo view('admin/subpage',$data);

		echo view('admin/header_footer');

		

	}
	
	
		public function news()

	{
		$login_type  = session()->get('login_type') ; if(($login_type == "")){ return redirect()->to(base_url('admin/login')); }
		
		$title['page_title'] = "GetFundedAfricaMedia News - GetFundedAfrica";
        //data["ref"] = $ref;
		echo view('admin/header_home',$title);
		echo view('admin/navbar',$title);

		echo view('admin/news');

		echo view('admin/header_footer');

		

	}
	
		public function files()

	{
		$login_type  = session()->get('login_type') ; if(($login_type == "")){ return redirect()->to(base_url('admin/login')); }
		
		$title['page_title'] = "Data Room Files  - GetFundedAfrica";
        //data["ref"] = $ref;
		echo view('admin/header_home',$title);
		echo view('admin/navbar',$title);

		echo view('admin/files');

		echo view('admin/header_footer');

		

	}
		public function investor_deals()

	{
		$login_type  = session()->get('login_type') ; if(($login_type == "")){ return redirect()->to(base_url('admin/login')); }
		
		$title['page_title'] = "Investor Deals  - GetFundedAfrica";
        //data["ref"] = $ref;
		echo view('admin/header_home',$title);
		echo view('admin/navbar',$title);

		echo view('admin/investor_deals');

		echo view('admin/header_footer');

		

	}
	
	
	
	public function gfa_max()

	{
		$login_type  = session()->get('login_type') ; if(($login_type == "")){ return redirect()->to(base_url('admin/login')); }
		
		$title['page_title'] = "GetFundedAfricaMax - GetFundedAfrica";
        //data["ref"] = $ref;
		echo view('admin/header_home',$title);
		echo view('admin/navbar',$title);

		echo view('admin/gfa-max');

		echo view('admin/header_footer');

		

	}
	
	public function insight()

	{
		$login_type  = session()->get('login_type') ; if(($login_type == "")){ return redirect()->to(base_url('admin/login')); }
		
		$title['page_title'] = "Insight - GetFundedAfrica";
        //data["ref"] = $ref;
		echo view('admin/header_home',$title);
		echo view('admin/navbar',$title);

		echo view('admin/insight');

		echo view('admin/header_footer');

		

	}
	
	public function learning()

	{
		$login_type  = session()->get('login_type') ; if(($login_type == "")){ return redirect()->to(base_url('admin/login')); }
		
		$title['page_title'] = "Learning - GetFundedAfrica";
        //data["ref"] = $ref;
		echo view('admin/header_home',$title);
		echo view('admin/navbar',$title);

		echo view('admin/learning');

		echo view('admin/header_footer');

		

	}
	
	public function venture_building()

	{
		$login_type  = session()->get('login_type') ; if(($login_type == "")){ return redirect()->to(base_url('admin/login')); }
		
		$title['page_title'] = "Venture Building - GetFundedAfrica";
        //data["ref"] = $ref;
		echo view('admin/header_home',$title);
		echo view('admin/navbar',$title);

		echo view('admin/venture_building');

		echo view('admin/header_footer');

		

	}
	
	public function referral($ref)

	{
		$login_type  = session()->get('login_type') ; if(($login_type == "")){ return redirect()->to(base_url('admin/login')); }
		
		$title['page_title'] = "PMs Referrals - GetFundedAfrica";
        $data["ref"] = $ref;
		echo view('admin/header_home',$title);
		echo view('admin/navbar',$title);

		echo view('admin/referral',$data);

		echo view('admin/header_footer');

		

	}

		public function microsoft_corperate($Event="")

	{
		$login_type  = session()->get('login_type') ; if(($login_type == "")){ return redirect()->to(base_url('admin/login')); }
		
		$title['page_title'] = "GetFundedAfricamicrosoft corperate - GetFundedAfrica";
        
		$data['Event'] = $Event;
		echo view('admin/header_home',$title);
		echo view('admin/navbar',$title);

		echo view('admin/microsoft_corperate',$data);

		echo view('admin/header_footer');

		

	}
	
	public function webinars($event)

	{
		// if ($this->session->userdata('login_type') === null) {
		// 	redirect(base_url('admin/login'));
		// }
		
		// $loginType = $this->encryption->decrypt($this->session->userdata('login_type'));
		// if ($loginType === '') {
		// 	redirect(base_url('admin/login'));
		// }
		
		
		$title['page_title'] = "GetFundedAfricaFreshworks Startups - GetFundedAfrica";
         $encryptedProduct = $this->session->get('product'); // Get the encrypted product from the session
		 $data["product"] = $this->encryption->decrypt($encryptedProduct);
        $data["event"] = $event;

		// $uri = new URI($event);
		$data['segmentValue'] = $this->request->uri->getSegment(3);


		echo view('admin/header_home',$title);
		echo view('admin/navbar',$title);

		echo view('admin/webinars',$data);

		echo view('admin/header_footer');

		

	}
	
	
		public function freshworks_startup()

	{
		$login_type  = session()->get('login_type') ; if(($login_type == "")){ return redirect()->to(base_url('admin/login')); }
		
		$title['page_title'] = "GetFundedAfricaFreshworks Startups - GetFundedAfrica";
        
		echo view('admin/header_home',$title);
		echo view('admin/navbar',$title);

		echo view('admin/freshworks_startup',$data);

		echo view('admin/header_footer');

		

	}
	
	public function microsoft_startup($Event="")


	{
		$login_type  = session()->get('login_type') ; if(($login_type == "")){ return redirect()->to(base_url('admin/login')); }
		
		$title['page_title'] = "GetFundedAfrica microsoft corperate - GetFundedAfrica";
        
		$data['Event'] = $Event;
		echo view('admin/header_home',$title);
		echo view('admin/navbar',$title);

		echo view('admin/microsoft_startup',$data);

		echo view('admin/header_footer');

		

	}
	public function unleash_quote()

	{
		$login_type  = session()->get('login_type') ; if(($login_type == "")){ return redirect()->to(base_url('admin/login')); }
		
		$title['page_title'] = "Unleashified Quote - GetFundedAfrica";
        
		echo view('admin/header_home',$title);
		echo view('admin/navbar',$title);

		echo view('admin/unleash_quote');

		echo view('admin/header_footer');

		
	}
	public function unleash_contact()

	{
		$login_type  = session()->get('login_type') ; if(($login_type == "")){ return redirect()->to(base_url('admin/login')); }
		
		$title['page_title'] = "Unleashified Contact - GetFundedAfrica";
        
		echo view('admin/header_home',$title);
		echo view('admin/navbar',$title);

		echo view('admin/unleash_contact');

		echo view('admin/header_footer');

		
	}
	
	public function unleash_newsletter()

	{
		$login_type  = session()->get('login_type') ; if(($login_type == "")){ return redirect()->to(base_url('admin/login')); }
		
		$title['page_title'] = "GetFundedAfrica Newsletter - GetFundedAfrica";
        
		echo view('admin/header_home',$title);
		echo view('admin/navbar',$title);

		echo view('admin/unleash_newsletter');

		echo view('admin/header_footer');

		
	}

	public function all_users()

	{
		$login_type  = session()->get('login_type') ; if(($login_type == "")){ return redirect()->to(base_url('admin/login')); }
		
		$title['page_title'] = "GetFundedAfrica All Users - GetFundedAfrica";
        
		echo view('admin/header_home',$title);
		echo view('admin/navbar',$title);

		echo view('admin/all_users',$data);

		echo view('admin/header_footer');

		
	}
	
		public function gfa_all_users()

	{
		$login_type  = session()->get('login_type') ; if(($login_type == "")){ return redirect()->to(base_url('admin/login')); }
		
		$title['page_title'] = "GetFundedAfrica All Users - GetFundedAfrica";
        
		echo view('admin/header_home',$title);
		echo view('admin/navbar',$title);

		echo view('admin/gfausers',$data);

		echo view('admin/header_footer');

		
	}


	public function gfa_all_individual_users()

	{
		$login_type  = session()->get('login_type') ; if(($login_type == "")){ return redirect()->to(base_url('admin/login')); }
		
		$title['page_title'] = "GetFundedAfrica All Users - GetFundedAfrica";
        
		echo view('admin/header_home',$title);
		echo view('admin/navbar',$title);

		echo view('admin/individual_users',$data);

		echo view('admin/header_footer');

		
	}


	
	public function cohort_list()

	{
		$login_type  = session()->get('login_type') ; if(($login_type == "")){ return redirect()->to(base_url('admin/login')); }
		
		$title['page_title'] = "Cohort - GetFundedAfrica";
        
		echo view('admin/header_home',$title);
		echo view('admin/navbar',$title);

		echo view('admin/cohort_list',$data);

		echo view('admin/header_footer');

		

	}
	
	public function commission($ref="")

	{
		$login_type  = session()->get('login_type') ; if(($login_type == "")){ return redirect()->to(base_url('admin/login')); }
		
		$title['page_title'] = "Commission- GetFundedAfrica";
        
        $data["ref"] = $ref;
		echo view('admin/header_home',$title);
		echo view('admin/navbar',$title);

		echo view('admin/commission',$data);

		echo view('admin/header_footer');

		

	}
	
	
		public function affiliate_pay()

	{
		
		$login_type  = session()->get('login_type') ; if(($login_type == "")){ return redirect()->to(base_url('admin/login')); }
		
		$title['page_title'] = "Affiliate Payment- GetFundedAfrica";
        
		echo view('admin/header_home',$title);
		echo view('admin/navbar',$title);

		echo view('admin/affiliate_pay',$data);

		echo view('admin/header_footer');

		

	}
	public function affiliate()

	{
		$login_type  = session()->get('login_type') ; if(($login_type == "")){ return redirect()->to(base_url('admin/login')); }
		
		$title['page_title'] = "Affiliate- GetFundedAfrica";
        
		echo view('admin/header_home',$title);
		echo view('admin/navbar',$title);

		echo view('admin/affiliate',$data);

		echo view('admin/header_footer');

		

	}
	
		public function story()

	{
		$login_type  = session()->get('login_type') ; if(($login_type == "")){ return redirect()->to(base_url('admin/login')); }
		
		$title['page_title'] = "Story  - GetFundedAfrica";
        //data["ref"] = $ref;
		echo view('admin/header_home',$title);
		echo view('admin/navbar',$title);

		echo view('admin/story');

		echo view('admin/header_footer');

		

	}

	public function events($id='')

	{
		$login_type  = session()->get('login_type') ; if(($login_type == "")){ return redirect()->to(base_url('admin/login')); }
		
		$title['page_title'] = "Event  - GetFundedAfrica";
        $data["id"] = $id;
		echo view('admin/header_home',$title);
		echo view('admin/navbar',$title);

		echo view('admin/event_attendees',$data);

		echo view('admin/header_footer');

		

	}
	
	public function event($event_type='')

	{
		$login_type  = session()->get('login_type') ; if(($login_type == "")){ return redirect()->to(base_url('admin/login')); }
		
		$title['page_title'] = "Event  - GetFundedAfrica";
        $data["event_type"] = $event_type;
		echo view('admin/header_home',$title);
		echo view('admin/navbar',$title);

		echo view('admin/event',$data);

		echo view('admin/header_footer');

		

	}
	
	public function event_list()

	{
		$login_type  = session()->get('login_type') ; if(($login_type == "")){ return redirect()->to(base_url('admin/login')); }
		
		$title['page_title'] = "Event - GetFundedAfrica";
        
		echo view('admin/header_home',$title);
		echo view('admin/navbar',$title);

		echo view('admin/event_list',$data);

		echo view('admin/header_footer');

		

	}
	
		public function credit_list()

	{
		$login_type  = session()->get('login_type') ; if(($login_type == "")){ return redirect()->to(base_url('admin/login')); }
		
		$title['page_title'] = "Credit Score - GetFundedAfrica";
        
		echo view('admin/header_home',$title);
		echo view('admin/navbar',$title);

		echo view('admin/credit_list',$data);

		echo view('admin/header_footer');

		

	}
	
		public function cohort()

	{
		$login_type  = session()->get('login_type') ; if(($login_type == "")){ return redirect()->to(base_url('admin/login')); }
		
		$title['page_title'] = "Cohort Participant - GetFundedAfrica";

		$data['segmentValue'] = $this->request->uri->getSegment(3);

        
		echo view('admin/header_home',$title);
		echo view('admin/navbar',$title);

		echo view('admin/cohort',$data);

		echo view('admin/header_footer');

		

	}
	
	public function post_cohort()

	{
		$login_type  = session()->get('login_type') ; if(($login_type == "")){ return redirect()->to(base_url('admin/login')); }
		
		$title['page_title'] = "Add Cohort - GetFundedAfrica";
       
		echo view('admin/header_home',$title);
		echo view('admin/navbar',$title);

		echo view('admin/post_cohort',$data);

		echo view('admin/header_footer');

		

	}
	
	public function add_cohort_participant($Cohort)

	{
		$login_type  = session()->get('login_type') ; if(($login_type == "")){ return redirect()->to(base_url('admin/login')); }
		
		$title['page_title'] = "Add Cohort Particpant - GetFundedAfrica";
		$data['Cohort'] = urldecode($Cohort);
       
		echo view('admin/header_home',$title);
		echo view('admin/navbar',$title);

		echo view('admin/add_cohort_participant',$data);

		echo view('admin/header_footer');

		

	}
	public function funding()

	{
		$login_type  = session()->get('login_type') ; if(($login_type == "")){ return redirect()->to(base_url('admin/login')); }
		
		$title['page_title'] = "Funding For Startups - GetFundedAfrica";
        
		echo view('admin/header_home',$title);
		echo view('admin/navbar',$title);

		echo view('admin/funding',$data);

		echo view('admin/header_footer');

		

	}
	public function startups()

	{
		$login_type  = session()->get('login_type') ; if(($login_type == "")){ return redirect()->to(base_url('admin/login')); }
		
		$title['page_title'] = "Startups  - GetFundedAfrica";
        
		echo view('admin/header_home',$title);
		echo view('admin/navbar',$title);

		echo view('admin/startups',$data);

		echo view('admin/header_footer');

		

	}


	public function individual()

	{
		$login_type  = session()->get('login_type') ; if(($login_type == "")){ return redirect()->to(base_url('admin/login')); }
		
		$title['page_title'] = "Startups  - GetFundedAfrica";
        
		echo view('admin/header_home',$title);
		echo view('admin/navbar',$title);

		echo view('admin/individual',$data);

		echo view('admin/header_footer');

		

	}
	
		public function onboard()

	{
		$login_type  = session()->get('login_type') ; if(($login_type == "")){ return redirect()->to(base_url('admin/login')); }
		
		$title['page_title'] = "Onboarding  - GetFundedAfrica";
        
		echo view('admin/header_home',$title);
		echo view('admin/navbar',$title);

		echo view('admin/onboard',$data);

		echo view('admin/header_footer');
	}
	public function onboardindividuals($id="")
	{
		$login_type  = session()->get('login_type') ; if(($login_type == "")){ return redirect()->to(base_url('admin/login')); }
		
		$title['page_title'] = "Admin - Individual Sme Details";
		$data['id'] =  $id;
		echo view('admin/header_home',[ 'title' => $title, 'data' => $data]);
		echo view('admin/navbar');

		echo view('admin/onboardindividuals',$data);

		echo view('admin/header_footer');
	}
	
	public function startupsinfo($id="", $extra_id ="")
	{
		$login_type  = session()->get('login_type') ; if(($login_type == "")){ return redirect()->to(base_url('admin/login')); }
		
		$title['page_title'] = "Admin - General Sme Details";
		$data['id'] = $id;
		$data['extra_id'] = $extra_id;
		echo view('admin/header_home',[ 'title' => $title, 'data' => $data]);
		echo view('admin/navbar');

		if(empty($extra_id)){

		echo view('admin/onboardstartups',$data);

	}else{

		echo view('admin/onboardindividuals',$data);

	}

		echo view('admin/header_footer');
	}
	
		public function investorsinfo($id="")

	{
		$login_type  = session()->get('login_type') ; if(($login_type == "")){ return redirect()->to(base_url('admin/login')); }
		
		$title['page_title'] = "Investor GetFundedAfrica- Information";
		$data['id'] = $id;
		echo view('admin/header_home',$title);
		echo view('admin/navbar');

		echo view('admin/investorsinfo',$data);

		echo view('admin/header_footer');

		

	}
	
		public function mentorsinfo($id="")

	{
		$login_type  = session()->get('login_type') ; if(($login_type == "")){ return redirect()->to(base_url('admin/login')); }
		
		$title['page_title'] = "Mentor GetFundedAfrica- Information";
		$data['id'] = $id;
		echo view('admin/header_home',$title);
		echo view('admin/navbar');

		echo view('admin/mentorsinfo',$data);

		echo view('admin/header_footer');

		

	} 
// 	corperate_info


	public function corperate_info($id="")

	{
		$login_type  = session()->get('login_type') ; if(($login_type == "")){ return redirect()->to(base_url('admin/login')); }
		
		$title['page_title'] = "Corperate Info - GFA";
		$data['id'] = $id;
		echo view('admin/header_home',$title);
		echo view('admin/navbar');

		echo view('admin/corperate_info',$data);

		echo view('admin/header_footer');

		

	}
	
	public function startupinfo($id)

	{
		$login_type  = session()->get('login_type') ; if(($login_type == "")){ return redirect()->to(base_url('admin/login')); }
		
		$title['page_title'] = "Subscription - Email Newsletter Application";
		$data['id'] = $id;
		echo view('admin/header_home',$title);
		echo view('admin/navbar');

		echo view('admin/startupinfo',$data);

		echo view('admin/header_footer');

		

	}
	
	public function checksubscriber($id)

	{
		$login_type  = session()->get('login_type') ; if(($login_type == "")){ return redirect()->to(base_url('admin/login')); }
		
		$title['page_title'] = "Subscription - Email Newsletter Application";
		$data['id'] = $id;
		echo view('admin/header_home',$title);
		echo view('admin/navbar');

		echo view('admin/checksubscriber',$data);

		echo view('admin/header_footer');

		

	}
	public function sendeventrequest($id)

	{
		$login_type  = session()->get('login_type') ; if(($login_type == "")){ return redirect()->to(base_url('admin/login')); }
		
		$title['page_title'] = "Event Info - GFA";
		$data['id'] = $id;
		echo view('admin/header_home',$title);
		echo view('admin/navbar');

		echo view('admin/sendevent',$data);

		echo view('admin/header_footer');

		

	}
	
	public function sendinvestordoc($id)

	{
		$login_type  = session()->get('login_type') ; if(($login_type == "")){ return redirect()->to(base_url('admin/login')); }
		
		$title['page_title'] = "Investor Agreement - GFA";
		$data['id'] = $id;
		echo view('admin/header_home',$title);
		echo view('admin/navbar');

		echo view('admin/sendinvestordoc',$data);

		echo view('admin/header_footer');

		

	}
	public function sendcreditrequest($id)

	{
		$login_type  = session()->get('login_type') ; if(($login_type == "")){ return redirect()->to(base_url('admin/login')); }
		
		$title['page_title'] = "Credit Info - GFA";
		$data['id'] = $id;
		echo view('admin/header_home',$title);
		echo view('admin/navbar');

		echo view('admin/sendcredit',$data);

		echo view('admin/header_footer');

		

	}
	public function editcohortevent($id)

	{
		$login_type  = session()->get('login_type') ; if(($login_type == "")){ return redirect()->to(base_url('admin/login')); }
		
		$title['page_title'] = "UPDATE COHORT - GFA";
		$data['id'] = $id;
		echo view('admin/header_home',$title);
		echo view('admin/navbar');

		echo view('admin/editcohortevent',$data);

		echo view('admin/header_footer');

		

	}
	public function checkcohortevent($id)

	{
		$login_type  = session()->get('login_type') ; if(($login_type == "")){ return redirect()->to(base_url('admin/login')); }
		
		$title['page_title'] = "COHORT - GFA";
		$data['id'] = $id;
		echo view('admin/header_home',$title);
		echo view('admin/navbar');

		echo view('admin/checkcohortevent',$data);

		echo view('admin/header_footer');

		

	}
		public function checkcohort($id)

	{
		$login_type  = session()->get('login_type') ; if(($login_type == "")){ return redirect()->to(base_url('admin/login')); }
		
		$title['page_title'] = "COHORT PARTICIPANT - GFA";
		$data['id'] = $id;
		echo view('admin/header_home',$title);
		echo view('admin/navbar');

		echo view('admin/checkcohort',$data);

		echo view('admin/header_footer');

		

	}
	public function matchdata()

	{
		//$login_type  = session()->get('login_type') ; if(($login_type == "")){ return redirect()->to(base_url('admin/login')); }
		
		$title['page_title'] = "GetFundedAfrica- Match Startup and investor";
		//$data['id'] = $id;
		echo view('admin/header_home',$title);
		//echo view('admin/navbar');

		echo view('admin/matchdata',$data);

		echo view('admin/header_footer');

		

	}
	
	public function postdata()

	{
		//$login_type  = session()->get('login_type') ; if(($login_type == "")){ return redirect()->to(base_url('admin/login')); }
		
		$title['page_title'] = "GetFundedAfricaPost Data for Startup and Investor ";
		//$data['id'] = $id;
		echo view('admin/header_home',$title);
		echo view('admin/navbar2');

		echo view('admin/postdata',$data);

		echo view('admin/header_footer');

		

	}
	
	public function startupinv()

	{
		//$login_type  = session()->get('login_type') ; if(($login_type == "")){ return redirect()->to(base_url('admin/login')); }
		
		$title['page_title'] = "GetFundedAfrica- Startup and investor Match Data";
		//$data['id'] = $id;
		echo view('admin/header_home',$title);
		echo view('admin/navbar2');

		echo view('admin/startupinv',$data);

		echo view('admin/header_footer');

		

	}
	
	
	public function startup()

	{
		//$login_type  = session()->get('login_type') ; if(($login_type == "")){ return redirect()->to(base_url('admin/login')); }
		
		$title['page_title'] = "Startup GetFundedAfrica- Startup and investor Match Data";
		//$data['id'] = $id;
		echo view('admin/header_home',$title);
		echo view('admin/navbar2');

		echo view('admin/startup',$data);

		echo view('admin/header_footer');

		

	}
	
		public function corporate()

	{
		//$login_type  = session()->get('login_type') ; if(($login_type == "")){ return redirect()->to(base_url('admin/login')); }
		
		$title['page_title'] = "Corporate GetFundedAfrica- Startup and investor Match Data";
		
		//$data['id'] = $id;
		echo view('admin/header_home',$title);
		echo view('admin/navbar');

		echo view('admin/corporate',$data);

		echo view('admin/header_footer');

		

	}
	
	
		public function accelerators()

	{
		//$login_type  = session()->get('login_type') ; if(($login_type == "")){ return redirect()->to(base_url('admin/login')); }
		
		$title['page_title'] = "Accelerators GetFundedAfrica- Startup and investor Match Data";
		
		//$data['id'] = $id;
		echo view('admin/header_home',$title);
		echo view('admin/navbar');

		echo view('admin/accelerators',$data);

		echo view('admin/header_footer');

		

	}
	
	public function mentors()

	{
		//$login_type  = session()->get('login_type') ; if(($login_type == "")){ return redirect()->to(base_url('admin/login')); }
		
		$title['page_title'] = "Mentors GetFundedAfrica- Startup and investor Match Data";
		
		//$data['id'] = $id;
		echo view('admin/header_home',$title);
		echo view('admin/navbar');

		echo view('admin/mentors',$data);

		echo view('admin/header_footer');

		

	}
	
		public function investors()

	{
		//$login_type  = session()->get('login_type') ; if(($login_type == "")){ return redirect()->to(base_url('admin/login')); }
		
		$title['page_title'] = "Investor GetFundedAfrica- Startup and investor Match Data";

		$data['segmentValue'] = $this->request->uri->getSegment(3);

        
		//$data['id'] = $id;
		echo view('admin/header_home',$title);
		echo view('admin/navbar');

		echo view('admin/investors', $data);

		echo view('admin/header_footer');

		

	}

	public function all_connections()

	{
		//$login_type  = session()->get('login_type') ; if(($login_type == "")){ return redirect()->to(base_url('admin/login')); }
		
		$title['page_title'] = "All GetFundedAfricaconnections  - Startup and investor Match Data";
		// $data['id'] = $this->admin_model->getAllGFAConnections();
		echo view('admin/header_home',$title);
		echo view('admin/navbar');

		echo view('admin/all_connections');

		echo view('admin/header_footer');

		

	}
	
	public function investor()

	{
		//$login_type  = session()->get('login_type') ; if(($login_type == "")){ return redirect()->to(base_url('admin/login')); }
		
		$title['page_title'] = "Investor GetFundedAfrica- Startup and investor Match Data";
		//$data['id'] = $id;
		echo view('admin/header_home',$title);
		echo view('admin/navbar2');

		echo view('admin/investor',$data);

		echo view('admin/header_footer');

		

	}
	
	public function addsub()

	{
		$login_type  = session()->get('login_type') ; if(($login_type == "")){ return redirect()->to(base_url('admin/login')); }
		
		$title['page_title'] = "Add Subscription - Email Newsletter Application";

		echo view('admin/header_home',$title);


		echo view('admin/addsub');

		echo view('admin/header_footer');

		

	}
	public function editsub($id)

	{
		$login_type  = session()->get('login_type') ; if(($login_type == "")){ return redirect()->to(base_url('admin/login')); }
		
		$title['page_title'] = "Add Subscription - Email Newsletter Application";
		$data['id'] = $id;

		echo view('admin/header_home',$title);


		echo view('admin/editsub',$data);

		echo view('admin/header_footer');

		

	}
	public function register()

	{
		
		
		$title['page_title'] = "Register - Email Newsletter Application";

		echo view('admin/header',$title);


		echo view('admin/register');

		echo view('admin/footer');

		

	}
	
	public function login()

	{
		
		
		$title['page_title'] = "Admin - GetFunded Africa";

		echo view('admin/header',$title);


		echo view('admin/login');

		echo view('admin/footer');

		

	}

	public function checkusers($account_type='',$email='')

	{
		
		$email = trim(urldecode($email));
		$account_type=trim(urldecode($account_type));


		if($account_type =='startup'){

			$id = $this->admin_model->getAllStartUpNByEmail($email)[0]['STUP_ID'];
			return redirect()->to(base_url("admin/startupsinfo/{$id}"));

		}elseif($account_type =='corperate'){
			$id = $this->gfa_model->getCorperateDetails($email)[0]['Corporate_ID'];
			return redirect()->to(base_url("admin/corperate_info/{$id}"));
		}elseif($account_type =='accelerator'){

			$id = $this->gfa_model->getAcceleratorDetails($email)[0]['Accelerator_ID'];
				return redirect()->to(base_url("admin/acceleratorinfo/{$id}"));
			
		}elseif($account_type =='mentorship'){
			
			$id = $this->gfa_model->getMentorDetails($email)[0]['Mentor_ID'];
				return redirect()->to(base_url("admin/mentorsinfo/{$id}"));
			
			
		}elseif($account_type =='investor'){
			$id = $this->gfa_model->getInvestorDetails($email)[0]['Investor_ID'];
			return redirect()->to(base_url("admin/investorsinfo/{$id}"));
		}else{
			$id = $this->admin_model->getAllStartUpNByEmail($email)[0]['STUP_ID'];
			$extra_id = $this->admin_model->getOnboardIndividual($email)[0]['id'];
			return redirect()->to(base_url("admin/startupsinfo/{$id}/{$extra_id}"));
		}
		

		

	}
	
	public function commissionpro()

	{	
	    
        $time 	=  date("Y-m-d h:i:s A",time());
	    $commission	= $this->request->getPost("commission");
	    $ref	= $this->request->getPost("ref");
	    
	    $data	= 	array(

					'commission' 	=>$commission,
					'log' 	=>$email,
					'ref' 	=>$ref,
					'time_submit' 	=> 	$time			
					);
		
	    $this->admin_model->insertCommission($data);


	}
	
		public function sendeventpro()

	{
	    $id = $this->request->getPost("id"); 
	    $More_Info = $this->request->getPost("More_Info"); 
	    $Email = $this->request->getPost("Email"); 
	    $Credit = $this->request->getPost("Credit"); 
	    $Status = 'active';
	    $Time_submit	 	=  date("Y-m-d h:i:s A",time());
	    $data_credit = array(
	    
					'more_Info' => $More_Info,
					'status' => $Status,
					'time_submit' => $Time_submit
				
					);
	   	$this->admin_model->updateEvent($data_credit,$id);
	   	
	   		$message = "<a href='https://GetFundedAfrica.GetFundedAfrica.ci/portal/public/assets/images/logo/GFA-Logo.png'><img src='https://GetFundedAfrica.GetFundedAfrica.ci/portal/public/assets/images/logo/GFA-Logo.png'></a> <br><br>";
			
$message .= "<p>====================================================================</p>";
$message .= "<p>Event Status: ".$Status."</p>";
$message .= "<p>Event : ".$Credit."</p>";
$message .= "<p> ================= More Info on Event =================</p>";
$message .= "<p>".$More_Info."</p>";

$subject = "Event Approved";	
				
$this->sendMail($Email, $message,$subject);	
	}
	public function sendinvagreementpro()

	{
	    $connect_id = $this->request->getPost("connect_id"); 
	    $edit_id = $this->request->getPost("edit_id");
	    $email = $this->request->getPost("email"); 
	    $admin = $this->request->getPost("admin"); 
	    //$content = utf8_decode(html_entity_decode(htmlentities($this->request->getPost("content"), ENT_QUOTES))); 
	    $content = $this->request->getPost("content");
	    $status = 'pending';
	    $time_submit	 	=  date("Y-m-d h:i:s A",time());
	    $data_agreement = array(
	    
					'connect_id' => $connect_id,
					'email' => $email,
					'content' => $content,
					'status' => $status,
					'admin' => $admin,
					'time_submit' => $time_submit
				
					);
					
					$data_agreement_update = array(
	    
					'content' => $content,
					'time_submit' => $time_submit
				
					);
	   //	$this->admin_model->updateCredit($data_credit,$id);
	        if(empty($edit_id)){
	        $this->admin_model->insertInvestorAgreement($data_agreement);
	        }else{
	          $this->admin_model->updateInvestorAgreement($data_agreement_update,$edit_id);  
	        }
	   	
	   		$message = "<a href='https://GetFundedAfrica.GetFundedAfrica.ci/portal/public/assets/images/logo/GFA-Logo.png'><img src='https://GetFundedAfrica.GetFundedAfrica.ci/portal/public/assets/images/logo/GFA-Logo.png'></a> <br><br>";
			


$subject = "Onboarding Credit Activated";	
				
//$this->sendMail($Email, $message,$subject);	
	}
	public function sendcreditpro()

	{
	    $id = $this->request->getPost("id"); 
	    $More_Info = $this->request->getPost("More_Info"); 
	    $Email = $this->request->getPost("Email"); 
	    $Credit = $this->request->getPost("Credit"); 
	    $Status = 'active';
	    $Time_submit	 	=  date("Y-m-d h:i:s A",time());
	    $data_credit = array(
	    
					'More_Info' => $More_Info,
					'Status' => $Status,
					'Time_submit' => $Time_submit
				
					);
	   	$this->admin_model->updateCredit($data_credit,$id);
	   	
	   		$message = "<a href='https://GetFundedAfrica.GetFundedAfrica.ci/portal/public/assets/images/logo/GFA-Logo.png'><img src='https://GetFundedAfrica.GetFundedAfrica.ci/portal/public/assets/images/logo/GFA-Logo.png'></a> <br><br>";
			
$message .= "<p>====================================================================</p>";
$message .= "<p>Credit Status: ".$Status."</p>";
$message .= "<p>Credit: $".$Credit."</p>";
$message .= "<p> ================= More Info on Credit Redemption =================</p>";
$message .= "<p>".$More_Info."</p>";

$subject = "Onboarding Credit Activated";	
				
$this->sendMail($Email, $message,$subject);	
	}
	
	 public function deleteFile()

	{
	    
	    
	    $id = $this->request->getPost("id"); 
	    	
	   	$this->admin_model->deleteFile($id); 
	}
	public function deleteUser()

	{
	    
	    
	    $id = $this->request->getPost("id"); 
		$email = $this->gfa_model->getInviteUser($id);
	    $this->admin_model->deleteLoginUser($email[0]['Email']);	
	   	$this->admin_model->deleteInviteUser($id);
		  
	}
	
		public function deleteCohortEvent()

	{
	    
	    
	    $id = $this->request->getPost("id"); 
	    	
	   	$this->admin_model->deleteCohort($id); 
	}
	public function deleteEventAttendee()

	{
	    
	    
	    $id = $this->request->getPost("id"); 
	    	
	   	$this->admin_model->deleteEventAttendee($id); 
	}	
public function deleteCredit()

	{
	    
	    
	    $id = $this->request->getPost("id"); 
	    	
	   	$this->admin_model->deleteCredit($id); 
	}
	
	private function set_upload_File()

{   

    //upload an image options

    $config = array();

    $config['upload_path'] = './uploads/';

    $config['allowed_types'] = 'text/plain|text/csv|csv|xls|xlsx|pdf|png|jpeg|jpg|docx|doc|ppt|pptx';

    $config['max_size']      = '0';

    $config['overwrite']     = FALSE;

    $config['encrypt_name'] = TRUE;



    return $config;

}
		public function update_cohort_upload(){
    $this->load->library('upload');
    
    $id  =  $this->request->getPost("id");
    $Title  =  $this->request->getPost("Title");
    $Short_Desc	= $this->request->getPost("Short_Desc");
    $Main_Desc	= $_POST['Main_Desc']; //$this->request->getPost("Main_Desc");
    $Date	= $this->request->getPost("Date");
    $Fee	= $this->request->getPost("Fee");
    $Cohort_Program	= $this->request->getPost("Cohort_Program");
    $Cohort_Duration	= $this->request->getPost("Cohort_Duration");
    $Cohort_Type	= $this->request->getPost("Cohort_Type");
    $Demo_Date	= $this->request->getPost("Demo_Date");
    
    $Url	= "https://getfundedafrica.com/cohort/startup/?org=".str_replace(" ","-",$Title);
    $Status	= "active";
    $Time_submit	 	=  date("Y-m-d h:i:s A",time());
   
    
    $dataInfo = array();
    $files = $_FILES;
    $cpt = count($_FILES['file']['name']);
    for($i=0; $i<$cpt; $i++)
    {           
        $_FILES['file']['name']= $files['file']['name'][$i];
        $_FILES['file']['type']= $files['file']['type'][$i];
        $_FILES['file']['tmp_name']= $files['file']['tmp_name'][$i];
        $_FILES['file']['error']= $files['file']['error'][$i];
        $_FILES['file']['size']= $files['file']['size'][$i];    

        $this->upload->initialize($this->set_upload_File());
        $this->upload->do_upload('file');
        $dataInfo[] = $this->upload->data();
    }
    
   
   
    
    if(!empty($dataInfo[0]['file_name'])){
       $Logo = $dataInfo[0]['file_name'] ;  
    }else{
        $Logo	= $this->request->getPost("Logo"); 
    }
     if(!empty($dataInfo[1]['file_name'])){
       $Banner = $dataInfo[1]['file_name'] ;  
    }else{
         $Banner	= $this->request->getPost("Banner");
    }
     if(!empty($dataInfo[2]['file_name'])){
       $Partner_logo = $dataInfo[2]['file_name'] ;  
    }else{
      $Partner_logo	= $this->request->getPost("Partner_logo");  
        
    }
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
					'Time_Submit' => $Time_submit
				
					);
					
					$this->admin_model->updatecohort($data_file,$id); 
					echo "Cohort Info updated";
}
	public function cohort_upload(){
    $this->load->library('upload');
    
    $Title  =  $this->request->getPost("Title");
    $Short_Desc	= $this->request->getPost("Short_Desc");
    $Main_Desc	= html_entity_decode($this->request->getPost("Main_Desc"));
    $Date	= $this->request->getPost("Date");
    $Fee	= $this->request->getPost("Fee");
    $Cohort_Program	= $this->request->getPost("Cohort_Program");
    $Cohort_Duration	= $this->request->getPost("Cohort_Duration");
    $Cohort_Type	= $this->request->getPost("Cohort_Type");
    $Demo_Date	= $this->request->getPost("Demo_Date");
    $Url	= "https://getfundedafrica.com/cohort/startup/?org=".str_replace(" ","-",$Title);
    $Status	= "active";
    $Time_submit	 	=  date("Y-m-d h:i:s A",time());
   
    	
    $dataInfo = array();
    $files = $_FILES;
    $cpt = count($_FILES['file']['name']);
    for($i=0; $i<$cpt; $i++)
    {           
        $_FILES['file']['name']= $files['file']['name'][$i];
        $_FILES['file']['type']= $files['file']['type'][$i];
        $_FILES['file']['tmp_name']= $files['file']['tmp_name'][$i];
        $_FILES['file']['error']= $files['file']['error'][$i];
        $_FILES['file']['size']= $files['file']['size'][$i];    

        $this->upload->initialize($this->set_upload_File());
        $this->upload->do_upload('file');
        $dataInfo[] = $this->upload->data();
    }
	
	$data_file = array(
	    
	   
					
					'Title' => $Title,
					'Short_Desc' => $Short_Desc,
					'Main_Desc' => $Main_Desc,
					'Date' => $Date,
					'Logo' => $dataInfo[0]['file_name'],
					'Fee' => $Fee,
					'Url' => $Url,
					'Demo_Date' => $Demo_Date,
					'Cohort_Program' => $Cohort_Program,
					'Cohort_Duration' => $Cohort_Duration,
					'Cohort_Type' => $Cohort_Type,
					'Status' => $Status,				
					'Banner' => $dataInfo[1]['file_name'],
					'Partner_logo' => $dataInfo[2]['file_name'],
					'Time_Submit' => $Time_submit
				
					);
					
					$this->admin_model->insertCohort($data_file); 
					echo "Cohort Info uploaded";
}
	
	private function set_upload_options()
{   
    //upload an image options
    $config = array();
    $config['upload_path'] = './uploads/';
    $config['allowed_types'] = 'text/plain|text/csv|csv';
    $config['max_size']      = '0';
    $config['overwrite']     = FALSE;

    return $config;
}



	
	public function startup_upload(){
	$this->load->library('upload');   
	$fileName	= time()+ rand(1,200).'.'.strtolower(end(explode('.',$_FILES['file']['name'])));  
	if(!$this->upload->do_upload('file')){echo $this->upload->display_errors();}
	else{
    $dataInfo = array();
    $files = $_FILES;
    $cpt = count($_FILES['file']['name']);
    for($i=0; $i<$cpt; $i++)
    {           
        $_FILES['file']['name']= $files['file']['name'][$i];
        $_FILES['file']['type']= $files['file']['type'][$i];
        $_FILES['file']['tmp_name']= $files['file']['tmp_name'][$i];
        $_FILES['file']['error']= $files['file']['error'][$i];
        $_FILES['file']['size']= $files['file']['size'][$i];    

        $this->upload->initialize($this->set_upload_options());
        $this->upload->do_upload('file');
        $dataInfo[] = $this->upload->data();
    }
    
   $handle = fopen($_FILES['file']['tmp_name'], "r");
		$headers = fgetcsv($handle, 1000, ",");
		while (($cellsd = fgetcsv($handle, 1000, ",")) !== FALSE) 
		{
		//$row = $data[0];    // We need to get the actual row (it is the first element in a 1-element array)
        $cell = explode(";",$cellsd[0]);
        // foreach ($cells as $cell) {
		$dataRow	= 	array(

					'company_name' 	=> 	 $cell[0],
					'company_description' => $cell[1],
					'company_type' => $cell[2],
					'industry' 	=> 	$cell[3],	
					'company_headquarters' 	=>$cell[4],
					'date_founded' 	=>$cell[5],
					'number_of_employees' 	=>$cell[6],
					'website' 	=>$cell[7],
					'company_phone' 	=>$cell[8],
					'email' 	=>$cell[9],
					'facebook' 	=> 	$cell[10],
					'linkedin' 	=> 	$cell[11],
					'twitter' 	=> 	$cell[12],
					'funding' 	=> $cell[13],
					'name' 	=> $cell[14]
					
					
					);
$this->admin_model->insertStartups($dataRow);
		}
	//	}
    fclose($handle);
    
    echo "Startups File Upload Successfully";
	}
	}
	
	public function investor_upload(){
	$this->load->library('upload');  
	 $dataInfo = array();
    $files = $_FILES;
	$fileName	= time()+ rand(1,200).'.'.strtolower(end(explode('.',$_FILES['file']['name'])));  
	//if(empty($_FILES['file']['name'])){echo $this->upload->display_errors();}
	//else{
   
    $cpt = count($_FILES['file']['name']);
    for($i=0; $i<$cpt; $i++)
    {           
        $_FILES['file']['name']= $files['file']['name'][$i];
        $_FILES['file']['type']= $files['file']['type'][$i];
        $_FILES['file']['tmp_name']= $files['file']['tmp_name'][$i];
        $_FILES['file']['error']= $files['file']['error'][$i];
        $_FILES['file']['size']= $files['file']['size'][$i];    

        $this->upload->initialize($this->set_upload_options());
        $this->upload->do_upload('file');
        $dataInfo[] = $this->upload->data();
    }
    
        $handle = fopen($_FILES['file']['tmp_name'], "r");
		$headers = fgetcsv($handle, 1000, ",");
		while (($cellsd = fgetcsv($handle, 1000, ",")) !== FALSE) 
		{
		//$row = $data[0];    // We need to get the actual row (it is the first element in a 1-element array)
        $cell = explode(";",$cellsd[0]);
        foreach ($cells as $cell) {
		$dataRow	= 	array(

					'company_name' 	=> 	 $cell[0],
					'name' => $cell[1],
					'preference' => $cell[2],
					'title' 	=> 	$cell[3],	
					'email' 	=>$cell[4],
					'phone' 	=>$cell[5],
					'gender' 	=>$cell[6],
					'position' 	=>$cell[7],
					'website' 	=>$cell[8],
					'date_founded' 	=>$cell[9],
					'investor_type' 	=> 	$cell[10],
					'investment_stage_focus' 	=> 	$cell[11],
				 	'regional_focus_industries' 	=> 	$cell[12],
				 	'address' 	=> $cell[13],
				 	'industry_focus' 	=> $cell[14],
				 	'min_cheque' 	=> $cell[15],
				 	'max_cheque' 	=> $cell[16],
				 	'facebook' 	=> $cell[17],
				 	'linkedin' 	=> $cell[18],
				 	'twitter' 	=> $cell[19],
				 	'instagram' 	=> $cell[20],
				 	'experience' 	=> $cell[21],
				 	'education' 	=> $cell[22],
				 	'degree' 	=> $cell[23],
				 	'course' 	=> $cell[24],
				 	'invested_companies' 	=> $cell[25],
				 	'stage' 	=> $cell[26],
				 	'stage_invested_in_africa' 	=> $cell[27],
				 	'investment_level' 	=> $cell[28],
				 	'additional_information' 	=> $cell[29],
				 	'aaic' 	=> $cell[30]
					);
        $this->admin_model->insertInvestors($dataRow);
		}
	}
    fclose($handle);
	
	echo "Investors CSV File Upload Successfully";
	
	}
	
	public function startup_form(){
	    $name = $this->request->getPost("name");
	    $company_name = $this->request->getPost("company_name");
	    $company_description = $this->request->getPost("company_description");
	    $company_type = $this->request->getPost("company_type");
	    $industry = $this->request->getPost("industry");
	    $company_headquarters = $this->request->getPost("company_headquarters");
	    $date_founded = $this->request->getPost("date_founded");
	    $number_of_employees = $this->request->getPost("number_of_employees");
	    $website = $this->request->getPost("website");
	    $company_phone = $this->request->getPost("company_phone");
	    $email = $this->request->getPost("email");
	    $facebook = $this->request->getPost("facebook");
	    $linkedin = $this->request->getPost("linkedin");
	    $twitter = $this->request->getPost("twitter");
	    $funding = $this->request->getPost("funding");
	
		$dataRow	= 	array(

					'company_name' 	=> 	 $company_name,
					'company_description' => $company_description,
					'company_type' => $company_type,
					'industry' 	=> 	$industry,	
					'company_headquarters' 	=>$company_headquarters,
					'date_founded' 	=>$date_founded,
					'number_of_employees' 	=>$number_of_employees,
					'website' 	=>$website,
					'company_phone' 	=>$company_phone,
					'email' 	=>$email,
					'facebook' 	=> 	$facebook,
					'linkedin' 	=> 	$linkedin,
					'twitter' 	=> 	$twitter,
					'funding' 	=> $funding,
					'name' 	=> $name
					
					
					);
$this->admin_model->insertStartups($dataRow);
		
	 echo "Startups Form Submitted Successfully";
	}

	public function export_login($table_name = null){

	$results =	$this->admin_model->getDownloadsLogin($table_name);

		$csvData = $this->arrayToCSV($results);

    // Set the filename for the download
    $filename = $table_name . '_download_' . date('Y-m-d') . '.csv';

    // Send the file for download
    return $this->response->setHeader('Content-Type', 'text/csv')
                          ->setHeader('Content-Disposition', 'attachment; filename="' . $filename . '"')
                          ->setBody($csvData);
	}


	public function export($table_name = null){

		if($table_name != 'login'){
	$results =	$this->admin_model->getDownloads($table_name);
}else{

	$results =	$this->admin_model->getDownloadsLogin($table_name);
}
		$csvData = $this->arrayToCSV($results);

    // Set the filename for the download
    $filename = $table_name . '_download_' . date('Y-m-d') . '.csv';

    // Send the file for download
    return $this->response->setHeader('Content-Type', 'text/csv')
                          ->setHeader('Content-Disposition', 'attachment; filename="' . $filename . '"')
                          ->setBody($csvData);
	}

	private function arrayToCSV(array $array)
{
    // Open a memory stream for writing CSV data
    $output = fopen('php://memory', 'w');
    
    // Get the keys of the first array element to use as headers
    if (!empty($array)) {
        fputcsv($output, array_keys($array[0]));
    }

    // Write each array element as a CSV row
    foreach ($array as $row) {
        fputcsv($output, $row);
    }

    // Rewind the stream and capture the output
    rewind($output);
    $csvData = stream_get_contents($output);
    
    // Close the stream
    fclose($output);
    
    return $csvData;
}
	
	public function investor_form(){
	    $countryArray = $this->request->getPost("country");
	    $regional_focus_industriesArray = $this->request->getPost("regional_focus_industries");
        $regional_focus_industries = implode(",",$regional_focus_industriesArray); 
	    $country = implode(",",$countryArray);

	    
	    
	    $name = $this->request->getPost("name");
	    $company_name = $this->request->getPost("company_name");
	    $preference = $this->request->getPost("preference");
	    $title = $this->request->getPost("title");
	    $gender = $this->request->getPost("gender");
	    $position = $this->request->getPost("position");
	    $date_founded = $this->request->getPost("date_founded");
	    $investor_type = $this->request->getPost("investor_type");
	    $website = $this->request->getPost("website");
	    $email = $this->request->getPost("email");
	    $phone = $this->request->getPost("phone");
	    $facebook= $this->request->getPost("facebook");
	    $linkedin = $this->request->getPost("linkedin");
	    $twitter = $this->request->getPost("twitter");
	    $instagram = $this->request->getPost("instagram");
	     $investment_stage_focus = $this->request->getPost("investment_stage_focus");
	       $address = $this->request->getPost("address");
	        $industry_focus = $this->request->getPost("industry_focus");
	         $min_cheque = $this->request->getPost("min_cheque");
	          $max_cheque = $this->request->getPost("max_cheque");
	          $experience = $this->request->getPost("experience");
	        $education = $this->request->getPost("education");
	         $degree = $this->request->getPost("degree");
	           $course = $this->request->getPost("course");
	        $invested_companies = $this->request->getPost("invested_companies");
	        $stage = $this->request->getPost("stage");
	         $stage_invested_in_africa = $this->request->getPost("stage_invested_in_africa");
	          $investment_level = $this->request->getPost("investment_level");
	           $additional_information = $this->request->getPost("additional_information");
		$dataRow	= 	array(

					'name' 	=> 	 $name,
					'company_name' => $company_name,
					'preference' => $preference,
					'title' 	=> 	$title,	
					'gender' 	=>$gender,
					'position' 	=>$position,
					'date_founded' 	=>$date_founded,
					'investor_type' 	=>$investor_type,
					'website' 	=>$website,
					'email' 	=>$email,
					'phone' 	=>$phone,
					'facebook' 	=> 	$facebook,
					'linkedin' 	=> 	$linkedin,
					'twitter' 	=> 	$twitter,
					'instagram' 	=> $instagram,
					'investment_stage_focus' 	=> $investment_stage_focus,
					'address' 	=> 	 $address,
					'industry_focus' => $industry_focus,
					'min_cheque' => $min_cheque,
					'max_cheque' 	=> 	$max_cheque,	
					'experience' 	=>$experience,
					'education' 	=>$education,
					'degree' 	=>$degree,
					'course' 	=>$course,
					'invested_companies' 	=>$invested_companies,
					'stage' 	=>$stage,
					'stage_invested_in_africa' 	=> 	$stage_invested_in_africa,
					'investment_level' 	=> 	$investment_level,
					'additional_information' 	=> 	$additional_information,
					'regional_focus_industries' 	=> 	$regional_focus_industries,
					'country' 	=> 	$country
					
					
					
					);
$this->admin_model->insertInvestors($dataRow);
		
	echo "Investors Form Submitted Successfully";
	}
	
	public function fetchCountryByRegion()

	{
	    	
	  $regional_focus_industriesArray = $this->request->getPost("id");
// 	 echo print_r($regional_focus_industriesArray);
// 	 exit;
	 
		foreach($regional_focus_industriesArray  as $key => $n ) {
		    
		  
		     $row = $this->admin_model->getCountryByRegion($regional_focus_industriesArray[$key]);  foreach($row as $rowArray){   
					
                    echo '<option value="'.$rowArray['country'].'"> '.$rowArray['country'].'  </option>';
                    }
		    
		}
		
		

	}
	
	public function fetchStartups()

	{
	    $industryArray = $this->request->getPost("industry");
	
		foreach($industryArray  as $key => $n ) {
		    
		  
		     $row = $this->admin_model->searchStartup($industryArray[$key]);  foreach($row as $rowArray){   
					
                    echo '<option value=" '.$rowArray["id"].' "> '.$rowArray['company_name'].'  </option>';
                    }
		    
		}
		
		

	}
	
	public function fetchStartupsData()

	{
	    $industryArray = $this->request->getPost("industry");
	
		
		    if($industryArray[0] !=''){
		  
		     $row = $this->admin_model->searchStartupLimit($industryArray[0]);  foreach($row as $rowArray){   
					
               
                echo '<div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Industry:</label>

                  <div class="col-sm-10">
                    <span class="form-controlx"> '.$rowArray['industry'].'  </span>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Website:</label>

                  <div class="col-sm-10">
                    <span class="form-controlx"> '.$rowArray['website'].'  </span>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Founder:</label>

                  <div class="col-sm-10">
                    <span class="form-controlx"> '.$rowArray['name'].'  </span>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Country:</label>

                  <div class="col-sm-10">
                  <span class="form-controlx"> '.$rowArray['company_headquarters'].'  </span>  
                  </div>
                </div>
                 <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Email:</label>

                  <div class="col-sm-10">
                    <span class="form-controlx"> '.$rowArray['email'].'  </span>
                  </div>
                </div>
                 <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Phone number:</label>

                  <div class="col-sm-10">
                    <span class="form-controlx"> '.$rowArray['company_phone'].'  </span>
                  </div>
                </div>
                 <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Funding Demand(USD):</label>

                  <div class="col-sm-10">
                    <span class="form-controlx"> '.$rowArray['funding'].'  </span>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Description:</label>

                  <div class="col-sm-10">
                    <span class="form-controlx"> '.$rowArray['company_description'].'  </span>
                  </div>
                </div>';
		
				
		    
		}

		    }else{
				    
				    echo 'Search not found';
				}    
    	

	}
	
	public function fetchStartup()

	{

		
		$id	= $this->request->getPost("id");
    	$startId = $this->admin_model->getAllStartUpsId($id);
                echo '<div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Industry:</label>

                  <div class="col-sm-10">
                    <span class="form-controlx"> '.$startId[0]['industry'].'  </span>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Website:</label>

                  <div class="col-sm-10">
                    <span class="form-controlx"> '.$startId[0]['website'].'  </span>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Founder:</label>

                  <div class="col-sm-10">
                    <span class="form-controlx"> '.$startId[0]['name'].'  </span>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Country:</label>

                  <div class="col-sm-10">
                  <span class="form-controlx"> '.$startId[0]['company_headquarters'].'  </span>  
                  </div>
                </div>
                 <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Email:</label>

                  <div class="col-sm-10">
                    <span class="form-controlx"> '.$startId[0]['email'].'  </span>
                  </div>
                </div>
                 <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Phone number:</label>

                  <div class="col-sm-10">
                    <span class="form-controlx"> '.$startId[0]['company_phone'].'  </span>
                  </div>
                </div>
                 <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Funding Demand(USD):</label>

                  <div class="col-sm-10">
                    <span class="form-controlx"> '.$startId[0]['funding'].'  </span>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Description:</label>

                  <div class="col-sm-10">
                    <span class="form-controlx"> '.$startId[0]['company_description'].'  </span>
                  </div>
                </div>';
		

	}
	
	public function fetchIndustry()

	{
            $industry = $_POST['industry'];
			$rowIndustry = $this->admin_model->searchIndustry($industry);  foreach($rowIndustry as $rowArrayIndustry){ 	
	$industry= 	$rowArrayIndustry["industry"];	    
			   

echo '<div class=" col-12 col-md-12" style="margin-top:5px;">
 
<input type="checkbox" name="industry[]" value="'.$industry.'">   '.$industry.' 
</div>';

}

                
		

	}
	
	public function fetchInvestor()

	{
            $id	= $this->request->getPost("id");
    	    $startId = $this->admin_model->getAllStartUpsId($id);
    	   
    	    $startFunding= $this->admin_model->getAllStartUpsFund($startId[0]['industry']);
			$rowIndustry = $this->admin_model->searchInvestor($startId[0]['industry'],$startFunding[0]["funding"]);  foreach($rowIndustry as $rowArray){ 	//,$startFunding[0]["funding"]
		   
			   

echo '<tr>
				  
                    <td> '.$rowArray['name'].' </td>
                    <td> '.$rowArray['position'].'   </td>
                    <td>
                     '.$rowArray['investor_type'].' 
                    </td>
                    
                    <td> '.$rowArray['industry_focus'].' </td>
					
                    <td>
                     '.$rowArray['investment_stage_focus'].' 
                    </td>
                    <td>
                     '.$rowArray['min_cheque'].' 
                    </td>
                    <td>
                     '.$rowArray['max_cheque'].'
                    </td>
                    <td>
                     '.$rowArray['website'].' 
                    </td>
                  </tr>';

}

                
		

	}
	
		public function fetchStartupsNNN()

	{
	     $Min_Cheque = $this->request->getPost("Min_Cheque");
	   //   $Max_Cheque = $this->request->getPost("Max_Cheque");
	   
	  
          
         
        
       
          
	//print_r($Max_Cheque);
// 		foreach($industryArray  as $key => $n ) {  
// 		 foreach($industryStages  as $keyx => $nx ) {     
		     
		     
		    //,$Max_Cheque
    	   
			$rowIndustry = $this->admin_model->searchStartupsNNN($Min_Cheque);  foreach($rowIndustry as $rowArray){ 	
		    
			   

echo '<tr>
				  
                    <td> <strong>'.$rowArray['Primary_Contact_Name'].'</strong><br>'.$rowArray['Startup_Company_Name'].' </td>
                    <td> '.str_replace("?","",$rowArray['PrimaryBusinessIndustry']).'   </td>
                     <td>
                     '.$rowArray['CurrentInvestmentStage'].' 
                    </td>
                    
                    
					
                   
                     <td>
                    '.$rowArray['Startup_Implementation_Stage'].' 
                     </td>
                     <td>
                       '.$rowArray['CountryHQ'].'
                     </td>
                    <td>
                      
                      <strong>$ </strong>'. $rowArray['Next_Funding_Round_Target_Sought'].'
                     </td>
/                  </tr>';

// }

		}          
		

// 	}
	}
	
	
		public function fetchInvestorsNNN()

	{
	     $Min_Cheque = $this->request->getPost("Min_Cheque");
	      $Max_Cheque = $this->request->getPost("Max_Cheque");
	   
	  
          
         
        
       
          
	//print_r($Max_Cheque);
// 		foreach($industryArray  as $key => $n ) {  
// 		 foreach($industryStages  as $keyx => $nx ) {     
		     
		     
		   //,$Max_Cheque
    	   
			$rowIndustry = $this->admin_model->searchInvestorNNN($Min_Cheque);  foreach($rowIndustry as $rowArray){ 	
		    
			   

echo '<tr>
				  
                    <td> '.$rowArray['Contact_Name'].'<br>'.$rowArray['Investor_Name'].' </td>
                    <td> '.str_replace("?","",$rowArray['Industry_Focus']).'   </td>
                     <td>
                     '.$rowArray['Investment_Stage_Focus'].' 
                    </td>
                    
                    <td> '.$rowArray['Regional_focus'].' </td>
					
                   
                     <td>
                    '.$rowArray['Min_Cheque'].' 
                     </td>
                     <td>
                      '.$rowArray['max_cheque'].'
                     </td>
                    <td>
                      '.$rowArray['Max_Cheque'].' 
                     </td>
/                  </tr>';

// }

		}          
		

// 	}
	}
	
	
		public function fetchStartupsNNIS()

	{
	     
	      $implementStage = $this->request->getPost("implementStage");
        $position = $this->admin_model->implementationStageByCode($implementStage)[0]['code_id'];
	  
    
$arrayImpletement=array("Discovery/Problem Research","Idea/Solution Creation","Development (Initial Build out)","MVP (Pre_Launch)","Launch","Growth (Expansion)");

// //foreach($array as $key=>$value){
// if($key > $position){
   
//     echo $array[$key];
// }

// //}    
         
        
       
          
	//print_r($country);
	foreach($arrayImpletement  as $key => $n ) {  
// 		 foreach($industryStages  as $keyx => $nx ) {     
		     
		     
		    if($key >= $position){
   
    
    	   
			$rowIndustry = $this->admin_model->searchStartupsNNIS($arrayImpletement[$key]);  foreach($rowIndustry as $rowArray){ 	
		    
			   

echo '<tr>
				  
                    <td> <strong>'.$rowArray['Primary_Contact_Name'].'</strong><br>'.$rowArray['Startup_Company_Name'].' </td>
                    <td> '.str_replace("?","",$rowArray['PrimaryBusinessIndustry']).'   </td>
                     <td>
                     '.$rowArray['CurrentInvestmentStage'].' 
                    </td>
                    
                    
					
                   
                     <td>
                    '.$rowArray['Startup_Implementation_Stage'].' 
                     </td>
                     <td>
                      '.$rowArray['CountryHQ'].'
                     </td>
                    <td>
                      
                      <strong>$ </strong>'. $rowArray['Next_Funding_Round_Target_Sought'].'
                     </td>
/                  </tr>';

}

		}          
		

	}
	}
	
		public function fetchStartupsNN()

	{
	     $regional_focus_industriesArray = $this->request->getPost("regional_focus_industries");
	      $countryArray = $this->request->getPost("country");
	   //if(!empty($regional_focus_industriesArray)){
	       

	   //   $region = implode(",",$regional_focus_industriesArray);
	   //}else{
	       
	   //    $region = ' ';
	   //}
	   // if(!empty($countryArray)){
	       

	   //    $country = implode(",",$countryArray);
	   //}else{
	       
	   //    $country = ' ';
	   //}
	  
          
         
        
       
          
	//print_r($country);
		foreach($countryArray  as $key => $n ) {  
// 		 foreach($industryStages  as $keyx => $nx ) {     
		     
		     
		    
    	   
			$rowIndustry = $this->admin_model->searchStartupsNN($countryArray[$key]);  foreach($rowIndustry as $rowArray){ 	
		    
			   

echo '<tr>
				  
                    <td> <strong>'.$rowArray['Primary_Contact_Name'].'</strong><br>'.$rowArray['Startup_Company_Name'].' </td>
                    <td> '.str_replace("?","",$rowArray['PrimaryBusinessIndustry']).'   </td>
                     <td>
                     '.$rowArray['CurrentInvestmentStage'].' 
                    </td>
                    
                    
					
                   
                     <td>
                    '.$rowArray['Startup_Implementation_Stage'].' 
                     </td>
                     <td>
                      '.$rowArray['CountryHQ'].'
                     </td>
                    <td>
                      
                      <strong>$ </strong>'. $rowArray['Next_Funding_Round_Target_Sought'].'
                     </td>
/                  </tr>';

// }

		}          
		

	}
	}
		public function fetchInvestorsNNIS()

	{
	     $implementStage = $this->request->getPost("implementStage");
          
         
         $position = $this->admin_model->implementationStageByCode($implementStage)[0]['code_id'];
	  
    
$arrayImpletement=array("Discovery/Problem Research","Idea/Solution Creation","Development (Initial Build out)","MVP (Pre_Launch)","Launch","Growth (Expansion)");
       
  foreach($arrayImpletement  as $key => $n ) {  
// 		 foreach($industryStages  as $keyx => $nx ) {     
		     
		     
		    if($key <= $position){
    	   
			$rowIndustry = $this->admin_model->searchInvestorNNIS($arrayImpletement[$key]);  foreach($rowIndustry as $rowArray){ 	
		    
			   

echo '<tr>
				  
                    <td> '.$rowArray['Contact_Name'].'<br>'.$rowArray['Investor_Name'].' </td>
                    <td> '.str_replace("?","",$rowArray['Industry_Focus']).'   </td>
                     <td>
                     '.$rowArray['Investment_Stage_Focus'].' 
                    </td>
                    
                    <td> '.$rowArray['Regional_focus'].' </td>
					
                   
                     <td>
                    '.$rowArray['Min_Cheque'].' 
                     </td>
                     <td>
                      '.$rowArray['max_cheque'].'
                     </td>
                    <td>
                      '.$rowArray['Max_Cheque'].' 
                     </td>
/                  </tr>';

}

		}          
		

	}
	}
	

	public function fetchInvestorsNN()

	{
	     $regional_focus_industriesArray = $this->request->getPost("regional_focus_industries");
	      $countryArray = $this->request->getPost("country");
	   if(!empty($regional_focus_industriesArray)){
	       

	      $region = implode(",",$regional_focus_industriesArray);
	   }else{
	       
	       $region = ' ';
	   }
	    if(!empty($countryArray)){
	       

	       $country = implode(",",$countryArray);
	   }else{
	       
	       $country = ' ';
	   }
	  
          
         
        
       
          
	//print_r($country);
// 		foreach($industryArray  as $key => $n ) {  
// 		 foreach($industryStages  as $keyx => $nx ) {     
		     
		     
		    
    	   
			$rowIndustry = $this->admin_model->searchInvestorNN($region);  foreach($rowIndustry as $rowArray){ 	
		    
			   

echo '<tr>
				  
                    <td> '.$rowArray['Contact_Name'].'<br>'.$rowArray['Investor_Name'].' </td>
                    <td> '.str_replace("?","",$rowArray['Industry_Focus']).'   </td>
                     <td>
                     '.$rowArray['Investment_Stage_Focus'].' 
                    </td>
                    
                    <td> '.$rowArray['Regional_focus'].' </td>
					
                   
                     <td>
                    '.$rowArray['Min_Cheque'].' 
                     </td>
                     <td>
                      '.$rowArray['max_cheque'].'
                     </td>
                    <td>
                      '.$rowArray['Max_Cheque'].' 
                     </td>
/                  </tr>';

// }

		}          
		

// 	}
	}
	
	
		public function fetchStartupsNS()

	{
	     $industryArray = $this->request->getPost("industry");
	      $StagesArray = $this->request->getPost("Stages");
	   //if(!empty($industryArray)){
	       

	   //   $industry = implode(",",$industryArray);
	   //   	$rowIndustry = $this->admin_model->searchStartupsN($industry,$StagesArray); 
	   //}else{
	       
	   //    $industry = ' ';
	   //}
	   // if(!empty($StagesArray)){
	       

	   //    $Stages = implode(",",$StagesArray);
	   //    	$rowIndustry = $this->admin_model->searchStartupsN($industry,$StagesArray); 
	       
	   //}else{
	       
	   //    $Stages = ' ';
	   //}
	  
          
         
        
       
          
	//print_r($Stages);
		foreach($StagesArray  as $key => $n ) {  
// 		 foreach($industryStages  as $keyx => $nx ) {     
		     
		     
		    
    	   
		$rowIndustry = $this->admin_model->searchStartupsNS($StagesArray[$key]); 
        foreach($rowIndustry as $rowArray){ 	
		    
			   

echo '<tr>
				  
                    <td> <strong>'.$rowArray['Primary_Contact_Name'].'</strong><br>'.$rowArray['Startup_Company_Name'].' </td>
                    <td> '.str_replace("?","",$rowArray['PrimaryBusinessIndustry']).'   </td>
                     <td>
                     '.$rowArray['CurrentInvestmentStage'].' 
                    </td>
                    
                    
					
                   
                     <td>
                    '.$rowArray['Startup_Implementation_Stage'].' 
                     </td>
                     <td>
                      '.$rowArray['CountryHQ'].'
                     </td>
                    <td>
                      
                      
                    <strong>$ </strong>'. $rowArray['Next_Funding_Round_Target_Sought'].'
                    
                     </td>
/                  </tr>';

// }

		}          
		

	}
	}
	
		public function fetchStartupsN()

	{
	     $industryArray = $this->request->getPost("industry");
	      $StagesArray = $this->request->getPost("Stages");
	   //if(!empty($industryArray)){
	       

	   //   $industry = implode(",",$industryArray);
	   //   	$rowIndustry = $this->admin_model->searchStartupsN($industry,$StagesArray); 
	   //}else{
	       
	   //    $industry = ' ';
	   //}
	   // if(!empty($StagesArray)){
	       

	   //    $Stages = implode(",",$StagesArray);
	   //    	$rowIndustry = $this->admin_model->searchStartupsN($industry,$StagesArray); 
	       
	   //}else{
	       
	   //    $Stages = ' ';
	   //}
	  
          
         
        
       
          
	//print_r($Stages);
		foreach($industryArray  as $key => $n ) {  
// 		 foreach($industryStages  as $keyx => $nx ) {     
		     
		     
		    
    	   
		$rowIndustry = $this->admin_model->searchStartupsN($industryArray[$key]); 
        foreach($rowIndustry as $rowArray){ 	
		    
			   

echo '<tr>
				  
                    <td> <strong>'.$rowArray['Primary_Contact_Name'].'</strong><br>'.$rowArray['Startup_Company_Name'].' </td>
                    <td> '.str_replace("?","",$rowArray['PrimaryBusinessIndustry']).'   </td>
                     <td>
                     '.$rowArray['CurrentInvestmentStage'].' 
                    </td>
                    
                    
					
                   
                     <td>
                    '.$rowArray['Startup_Implementation_Stage'].' 
                     </td>
                     <td>
                      '.$rowArray['CountryHQ'].'
                     </td>
                    <td>
                      
                      
                    <strong>$ </strong>'. $rowArray['Next_Funding_Round_Target_Sought'].'
                    
                     </td>
/                  </tr>';

// }

		}          
		

	}
	}
	
	public function fetchInvestorsNS()

	{
	     $industryArray = $this->request->getPost("industry");
	      $StagesArray = $this->request->getPost("Stages");
	   //if(!empty($industryArray)){
	       

	   //   $industry = implode(",",$industryArray);
	   //}else{
	       
	   //    $industry = ' ';
	   //}
	   // if(!empty($StagesArray)){
	       

	   //    $Stages = implode(",",$StagesArray);
	   //}else{
	       
	   //    $Stages = ' ';
	   //}
	  
          
         
        
       
          
	//print_r($Stages);
		foreach($StagesArray  as $key => $n ) {  
// 		 foreach($industryStages  as $keyx => $nx ) {     
		     
		     
		    
    	   
			$rowIndustry = $this->admin_model->searchInvestorNS($StagesArray[$key]);  foreach($rowIndustry as $rowArray){ 	
		    
			   

echo '<tr>
				  
                    <td> '.$rowArray['Contact_Name'].'<br>'.$rowArray['Investor_Name'].' </td>
                    <td> '.str_replace("?","",$rowArray['Industry_Focus']).'   </td>
                     <td>
                     '.$rowArray['Investment_Stage_Focus'].' 
                    </td>
                    
                    <td> '.$rowArray['Regional_focus'].' </td>
					
                   
                     <td>
                    '.$rowArray['Min_Cheque'].' 
                     </td>
                     <td>
                      '.$rowArray['max_cheque'].'
                     </td>
                    <td>
                      '.$rowArray['Max_Cheque'].' 
                     </td>
/                  </tr>';

// }

		}          
		

	}
	}
	
	
		public function fetchInvestorsN()

	{
	     $industryArray = $this->request->getPost("industry");
	      $StagesArray = $this->request->getPost("Stages");
	   //if(!empty($industryArray)){
	       

	   //   $industry = implode(",",$industryArray);
	   //}else{
	       
	   //    $industry = ' ';
	   //}
	   // if(!empty($StagesArray)){
	       

	   //    $Stages = implode(",",$StagesArray);
	   //}else{
	       
	   //    $Stages = ' ';
	   //}
	  
          
         
        
       
          
	//print_r($Stages);
		foreach($industryArray  as $key => $n ) {  
// 		 foreach($industryStages  as $keyx => $nx ) {     
		     
		     
		    
    	   
			$rowIndustry = $this->admin_model->searchInvestorN($industryArray[$key]);  foreach($rowIndustry as $rowArray){ 	
		    
			   

echo '<tr>
				  
                    <td> '.$rowArray['Contact_Name'].'<br>'.$rowArray['Investor_Name'].' </td>
                    <td> '.str_replace("?","",$rowArray['Industry_Focus']).'   </td>
                     <td>
                     '.$rowArray['Investment_Stage_Focus'].' 
                    </td>
                    
                    <td> '.$rowArray['Regional_focus'].' </td>
					
                   
                     <td>
                    '.$rowArray['Min_Cheque'].' 
                     </td>
                     <td>
                      '.$rowArray['max_cheque'].'
                     </td>
                    <td>
                      '.$rowArray['Max_Cheque'].' 
                     </td>
/                  </tr>';

// }

		}          
		

	}
	}
	
		public function fetchInvestors()

	{
	    
	   
          $industryArray = $this->request->getPost("industry");
          
          
	
		foreach($industryArray  as $key => $n ) {  
		    
		     $startFunding= $this->admin_model->getAllStartUpsFund($industryArray[$key]);
		     
		    
    	   
			$rowIndustry = $this->admin_model->searchInvestor($industryArray[$key],$startFunding[0]["funding"]);  foreach($rowIndustry as $rowArray){ 	
		    
			   

echo '<tr>
				  
                    <td> '.$rowArray['name'].' </td>
                    <td> '.$rowArray['position'].'   </td>
                    <td>
                     '.$rowArray['investor_type'].' 
                    </td>
                    
                    <td> '.$rowArray['industry_focus'].' </td>
					
                    <td>
                     '.$rowArray['investment_stage_focus'].' 
                    </td>
                    <td>
                     '.$rowArray['min_cheque'].' 
                    </td>
                    <td>
                     '.$rowArray['max_cheque'].'
                    </td>
                    <td>
                     '.$rowArray['website'].' 
                    </td>
                  </tr>';

}

		}          
		

	}
	
	
	public function storystatuspro(){
	   
	  $id = $this->request->getPost("id");
	  $file_status = $this->request->getPost("file_status");
	  $rowArray = $this->admin_model->getStoryPostById($id);
	  $personalDetails =  $this->admin_model->getAllStartUpNByEmail($rowArray[0]['email']);
	  
	  if($file_status=='approved'){
$event_status = 'active';
	      
	  }else{
	      
	   $event_status =$file_status;    
	  }
	  
	  $data	= 	array(

					'status_ext' => $file_status,
					'status' => $event_status,
					
					
					);
	  
	  $this->admin_model->updateStoryStatus($data, $id);
	  
	  if($file_status =='approved'){
	 $message = "<a href='https://GetFundedAfrica.GetFundedAfrica.ci/portal/public/assets/images/logo/GFA-Logo.png'><img src='https://GetFundedAfrica.GetFundedAfrica.ci/portal/public/assets/images/logo/GFA-Logo.png'></a>

<p>
Félicitations ".$personalDetails[0]['Primary_Contact_Name'].",
</p>

<p>
Votre histoire a été approuvée.  
</p>

<p>
Merci
</p>";

$subject = 'Histoire Approuvée';

// $rowArray[0]['Email']
 $this->sendMail($rowArray[0]['email'], $message,$subject);
	      
	  }elseif($file_status =='declined'){
	      
	   $message = "<a href='https://GetFundedAfrica.GetFundedAfrica.ci/portal/public/assets/images/logo/GFA-Logo.png'><img src='https://GetFundedAfrica.GetFundedAfrica.ci/portal/public/assets/images/logo/GFA-Logo.png'></a>

<p>
Désolé ".$personalDetails[0]['Primary_Contact_Name'].",
</p>

<p>
Votre histoire a été refusée. 
</p>

<p>
Merci
</p>"; 
$subject = 'Histoire Refusée';


 $this->sendMail($rowArray[0]['email'], $message,$subject);
	  }else{
	      
	    echo '';  
	  }
	 
    
	   //echo ''; 
	    
	}
	
		public function eventstatuspro(){
	   
	  $id = $this->request->getPost("id");
	  $file_status = $this->request->getPost("file_status");
	  $rowArray = $this->admin_model->getEventsPostById($id);
	  $personalDetails =  $this->admin_model->getAllStartUpNByEmail($rowArray[0]['email']);
	  
	  if($file_status=='approved'){
$event_status = 'active';
	      
	  }else{
	      
	   $event_status =$file_status;    
	  }
	  
	  $data	= 	array(

					'status_ext' => $file_status,
					'status' => $event_status,
					
					
					);
	  
	  $this->admin_model->updateEventStatus($data, $id);
	  
	  if($file_status =='approved'){
$message = "<a href='https://GetFundedAfrica.GetFundedAfrica.ci/portal/public/assets/images/logo/GFA-Logo.png'><img src='https://GetFundedAfrica.GetFundedAfrica.ci/portal/public/assets/images/logo/GFA-Logo.png'></a>

<p>
Cher(e) ".$personalDetails[0]['Primary_Contact_Name'].",
</p>

<p>Félicitations !</p>
<p>Nous avons le plaisir de vous informer que votre événement a été approuvé. Veuillez trouver ci-dessous le lien vers votre événement afin de le consulter, le partager et le promouvoir :</p>
<a href='".base_url()."gfa/events/".$rowArray[0]['ref_id']."'>".base_url()."gfa/events/".$rowArray[0]['ref_id']."</a>
<p>Connectez-vous à votre compte GetFundedAfrica et cliquez <a href='".base_url()."gfa/manage_event"."'>ici</a> pour gérer vos événements et vos participations.</p>
<p>Nous vous souhaitons beaucoup de succès pour votre événement.</p>
<p>Meilleures salutations,</p>
<p>L'Équipe GetFundedAfrica ADMIN</p>";

$subject = 'Événement Approuvé';
// $rowArray[0]['Email']
$this->sendMail($rowArray[0]['email'], $message, $subject);
      
} elseif ($file_status == 'declined') {
      
$message = "<a href='https://GetFundedAfrica.GetFundedAfrica.ci/portal/public/assets/images/logo/GFA-Logo.png'><img src='https://GetFundedAfrica.GetFundedAfrica.ci/portal/public/assets/images/logo/GFA-Logo.png'></a>

<p>Cher(e) ".$personalDetails[0]['Primary_Contact_Name'].",</p>
<p>Salutations de l'équipe GetFundedAfrica.</p>
<p>Nous vous remercions d'avoir publié votre événement sur la plateforme GetFundedAfrica.</p>
<p>Cependant, après avoir examiné votre publication en fonction des critères ci-dessous :</p>
<ul>
<li>Ne doit pas promouvoir des divisions tribales, ethniques ou religieuses à quelque niveau que ce soit</li>
<li>Ne doit pas contrevenir aux lois applicables du pays d'origine</li>
<li>Doit avoir mis à jour votre profil GetFundedAfrica à au moins 50 % de complétion.</li>
</ul>
<p>Malheureusement, votre événement a été refusé. N'hésitez pas à modifier votre événement conformément aux spécifications et à le soumettre à nouveau pour approbation.</p>
<p>Nous sommes impatients de travailler avec vous pour faire de votre événement un succès.</p>
<p>Meilleures salutations,</p>
<p>L'Équipe GetFundedAfrica Events</p>";

$subject = 'Événement Refusé';


 $this->sendMail($rowArray[0]['email'], $message,$subject);
	  }else{
	      
	    echo '';  
	  }
	 
    
	   //echo ''; 
	    
	}
	
	public function filestatusproX(){
	   
	  $id = $this->request->getPost("id");
	  $file_status = $this->request->getPost("file_status");
	  $rowArray = $this->admin_model->getInvestorsFileUploadedById($id);
	  $personalDetails =  $this->gfa_model->getInvestorDetails($rowArray['email']);;
	  
	  $data	= 	array(

					'status' => $file_status
					
					
					);
	  
	  $this->admin_model->updateFileInvestorStatus($data, $id);
	  
	  if($file_status =='approved'){
	 $message = "<a href='https://GetFundedAfrica.GetFundedAfrica.ci/portal/public/assets/images/logo/GFA-Logo.png'><img src='https://GetFundedAfrica.GetFundedAfrica.ci/portal/public/assets/images/logo/GFA-Logo.png'></a>

	 <p>
	 Cher(e) ".$personalDetails[0]['Contact_Name'].",
	 </p>

	 <p>
	 Nous vous informons que nous avons approuvé votre documentation e-KYC.
	 </p><br>
	 
	 <p>
	 Si vous avez des questions générales sur nos [produits], consultez notre [base_de_connaissances] pour des guides pratiques et des réponses aux questions fréquentes. (si cette partie n'est pas encore prête, nous pouvons l'omettre pour l'instant et les diriger simplement vers info@getfundedafrica.com)
	 </p><br>
	 
	 <p>
	 Si vous avez des informations supplémentaires qui, selon vous, pourraient nous aider à mieux vous assister, n'hésitez pas à répondre à cet email [<a href='mailto:investors@getfundedafrica.com'>investors@getfundedafrica.com</a>]</p>
	 <p>
	 
	 Nous avons hâte d'échanger bientôt ! 
	 <p>
	 Cordialement !<br>

	 Équipe GetFundedAfrica !
	 </p>
	 <br>
	 <p>P/S : faites-nous savoir quand les modifications suggérées ont été apportées et quand nous pourrons tester le processus de bout en bout.</p><br>
	 Merci beaucoup<br>
	 Équipe GetFundedAfrica";

$subject = 'Approuvé — RE: [Votre documentation e-KYC]';

// $rowArray[0]['Email']
 $this->sendMail($rowArray[0]['Contact_Email'], $message,$subject);
	      
	  }elseif($file_status =='declined'){
	      
	    $message = "<a href='https://GetFundedAfrica.GetFundedAfrica.ci/portal/public/assets/images/logo/GFA-Logo.png'><img src='https://GetFundedAfrica.GetFundedAfrica.ci/portal/public/assets/images/logo/GFA-Logo.png'></a>

        <p>
        Cher(e) ".$personalDetails[0]['Contact_Name'].",
        </p>

        <p>
        J'espère que cet email vous trouve en bonne santé. Je vous écris pour vous informer que nous avons reçu votre pièce d'identité pour notre processus de vérification Know Your Customer (KYC), mais malheureusement, elle a été refusée.
        </p><br>
        
        <p>
        Je comprends que cette nouvelle puisse être décevante et frustrante pour vous. Sachez que nous prenons très au sérieux notre processus KYC, et il est essentiel que nous disposions d'informations d'identification précises et valides pour tous nos clients.
        </p><br>

        <p>
        Plusieurs raisons peuvent expliquer le rejet de votre pièce d'identité, telles que des images floues ou peu claires, des informations incorrectes ou incomplètes, ou encore une pièce d'identité expirée. Quelle que soit la raison, soyez assuré(e) que notre équipe a examiné attentivement votre soumission et l'a jugée invalide.
        </p><br>

        <p>
        Nous vous demandons de bien vouloir soumettre à nouveau votre pièce d'identité dès que possible. Veuillez vous assurer que les images sont claires et que toutes les informations sont exactes et à jour. Si vous avez des questions ou des préoccupations concernant le processus, n'hésitez pas à contacter notre équipe en répondant à cet email [<a href='mailto:investors@getfundedafrica.com'>investors@getfundedafrica.com</a>], qui se fera un plaisir de vous aider.
        </p>

        <p>
        Nous vous remercions de votre coopération et de votre compréhension. Nous nous excusons pour tout désagrément que cela aurait pu causer et apprécions votre patience pour résoudre ce problème.
        </p><br>

        <p>
        Cordialement !<br>
        Équipe GetFundedAfrica !
        </p>
        <br>
        <p>P/S : faites-nous savoir quand les modifications suggérées ont été apportées et quand nous pourrons tester le processus de bout en bout.</p><br>
        Merci beaucoup<br>
        Diana
        ";
$subject = 'Action Requise — RE: [Votre demande e-KYC a été Refusée]';


 $this->sendMail($rowArray[0]['Contact_Email'], $message,$subject); 
	  }else{
	      
	    echo '';  
	  }
	 
    
	   //echo ''; 
	    
	}
	
		public function filestatuspro(){
	   
	  $id = $this->request->getPost("id");
	  $file_status = $this->request->getPost("file_status");
	  $rowArray = $this->admin_model->getRecentFileUploadedXById($id);
	  $personalDetails =  $this->admin_model->getAllStartUpNByEmail($rowArray[0]['Email']);
	  
	  $data	= 	array(

					'Status' => $file_status
					
					
					);
	  
	  $this->admin_model->updateFileStatus($data, $id);
	  
	  if($file_status =='approved'){
	 $message = "<a href='https://GetFundedAfrica.GetFundedAfrica.ci/portal/public/assets/images/logo/GFA-Logo.png'><img src='https://GetFundedAfrica.GetFundedAfrica.ci/portal/public/assets/images/logo/GFA-Logo.png'></a>

<p>
Félicitations ".$personalDetails[0]['Primary_Contact_Name'].",
</p>

<p>
Votre dossier a été approuvé. Connectez-vous à votre compte CPMI et cliquez sur Dealroom pour partager avec les investisseurs.
</p>

<p>
Merci
</p>";

$subject = 'Dossier Approuvé';

// $rowArray[0]['Email']
 //$this->sendMail($rowArray[0]['Email'], $message,$subject);
	      
	  }elseif($file_status =='declined'){
	      
	   $message = "<a href='https://GetFundedAfrica.GetFundedAfrica.ci/portal/public/assets/images/logo/GFA-Logo.png'><img src='https://GetFundedAfrica.GetFundedAfrica.ci/portal/public/assets/images/logo/GFA-Logo.png'></a>

<p>
Bonjour ".$personalDetails[0]['Primary_Contact_Name'].",
</p>

<p>
Votre dossier a été refusé.
</p>

<p>
Pour obtenir de l'aide, rendez-vous sur https://estore.getfundedafrica.com/product/pitchdeck-development pour passer une commande afin de développer votre pitch deck ou contactez media@getfundedafrica pour votre vidéo biographique de start-up.
</p>

<p>
Merci
</p>";

$subject = 'Dossier Refusé';


 //$this->sendMail($rowArray[0]['Email'], $message,$subject);
	  }else{
	      
	    echo '';  
	  }
	 
    
	   //echo ''; 
	    
	}

	public function startupProfilepro()

	{
		 $this->load->library('upload');
		
		$email = $this->request->getPost("email") ;
		$name = $this->request->getPost("founderName");
		$organization = $this->request->getPost("organization");
		$phoneNumber = $this->request->getPost("phoneNumber");
		$address = $this->request->getPost("address");
		$website = $this->request->getPost("website");
		$startup_country = $this->request->getPost("startup_country");
		$industry = $this->request->getPost("industry");
		$current_stage = $this->request->getPost("current_stage");
		$Implementation_stage = $this->request->getPost("Implementation_stage");
		$fund_to_raise = $this->request->getPost("fund_to_raise");
		$about = $this->request->getPost("about");
		$facebook = $this->request->getPost("facebook");
		$linkedIn = $this->request->getPost("linkedIn");
		$country = $this->request->getPost("country");
		$state = $this->request->getPost("state");
		$zipCode = $this->request->getPost("zipCode");
		$year_founded = $this->request->getPost("year_founded");
		$Revenue = $this->request->getPost("revenue");
		$NoOfEmployees = $this->request->getPost("NoOfEmployees");
		$Hear_Us = $this->request->getPost("Hear_Us");
		$OperatingRegions = $this->request->getPost("OperatingRegions");
		$Designation = $this->request->getPost("designation");
		$coFounderName = $this->request->getPost("coFounderName");
		$coDesignation = $this->request->getPost("coDesignation");
		$Event_Name = $this->request->getPost("Event_Name");
		$Youtube_Url = $this->request->getPost("Youtube_Url");
		$time = date("Y-m-d h:i:s A",time());
		 $randPass = sha1(time());
		 $password = "gfa".substr($randPass,0,5);
		
        $income_entries        = array();
        $number_of_entries          = sizeof($coFounderName);
        for ($i = 0; $i < $number_of_entries; $i++)
        {
            if($coFounderName !=''){
                $new_entry          = array('coFounderName' => $coFounderName[$i], 'coDesignation' => $coDesignation[$i]);
                array_push($income_entries, $new_entry);
			}
        }
        $coFounderInfo 	   = json_encode($income_entries);
        
        $dataInfo = array();
    $files = $_FILES;
    $cpt = count($_FILES['file']['name']);
    for($i=0; $i<$cpt; $i++)
    {           
        $_FILES['file']['name']= $files['file']['name'][$i];
        $_FILES['file']['type']= $files['file']['type'][$i];
        $_FILES['file']['tmp_name']= $files['file']['tmp_name'][$i];
        $_FILES['file']['error']= $files['file']['error'][$i];
        $_FILES['file']['size']= $files['file']['size'][$i];    

        $this->upload->initialize($this->set_upload_File());
        $this->upload->do_upload('file');
        $dataInfo[] = $this->upload->data();
    }
    
     $data_login	= 	array(

					'email' 	=> $email,
					'password' 	=> $password,
					'account_type' 	=> 'startup',
					'status' 	=> "active",
					
					);
    
    $data_Cohort	= 	array(

					'company_name' 	=> $organization,
					'current_stage' 	=> $Implementation_stage,
					'industry' 	=> $industry,
					'date_founded' 	=> $year_founded,
					'funding_to_raise' 	=> $fund_to_raise,
					'annual_revenue' 	=> $Revenue,
					'website' 	=> $website,
					'name' 	=> $name,
					'email' 	=> $email,
					'password' 	=> $password,
					'phone' 	=> $phoneNumber,
					'country' 	=> $country,
					'city' 	=> $state,
					'about' 	=> $about,
					'package' 	=> "funding",
					'time_submit' 	=> $time
					
					
					);
                $data_Event	= 	array(

					'Event_Name' 	=> $Event_Name,
					'Event_Attendance_Email' 	=> $email,
					'Event_Type' 	=> 'Cohort',
					'Status' 	=> 1,
					
					);
		
		        $data_startup	= 	array(

					'Startup_Company_Name' 	=> $organization,
					'Primary_Contact_Name' 	=> $name,
					'Contact_Email' 	=> $email,
					'Phones' 	=> $phoneNumber,
					'Website' 	=> $website,
					'Address' 	=> $address,
					'CountryHQ' 	=> $startup_country,
					'PrimaryBusinessIndustry' 	=> $industry,
					'CurrentInvestmentStage' 	=> $current_stage,
					'Startup_Implementation_Stage' 	=> $Implementation_stage,
					'Next_Funding_Round_Target_Sought' 	=> $fund_to_raise,
					'Investment_History' 	=> $about,
					'Facebook' 	=> $facebook,
					'LinkedIn' 	=> $linkedIn,
					'Country' 	=> $country,
					'State' 	=> $state,
					'ZipCode' 	=> $zipCode,
					'Date_Founded' 	=> $year_founded,
					'NoOfEmployees' 	=> $NoOfEmployees,
					'OperatingRegions' 	=> $OperatingRegions,
					'Revenue' 	=> $Revenue,
					'Hear_Us' 	=> $Hear_Us,
					'Designation' 	=> $Designation,
					'Co_Founder_Info' 	=> $coFounderInfo,
					'Company_logo' => $dataInfo[0]['file_name'],
					'Youtube_Url' => $Youtube_Url
					
					
				
					);
					
					if(empty($this->admin_model->checkCohortReg($email))){
				$this->admin_model->insertCohortEvent($data_Cohort);
			}
			
			if(empty($this->admin_model->checkEventReg($Event_Name,$email))){
				$this->admin_model->insertEvent($data_Event);
			}
				
				if($this->gfa_model->getStartUpDetails($email)[0]['Contact_Email']==""){
				   $this->gfa_model->insertStartupProfile($data_startup); 
				    echo "Successfully Submited!";
				}else{
				   echo "Account already exist!";
				}
				
				$message = "<a href='https://GetFundedAfrica.GetFundedAfrica.ci/portal/public/assets/images/logo/GFA-Logo.png'><img src='https://GetFundedAfrica.GetFundedAfrica.ci/portal/public/assets/images/logo/GFA-Logo.png'></a>

<p>
Hi  ".$name.",
</p>

<p>
My name is Debo, CEO and Co-founder of GetFundedAfrica. Thank you for signing up we are delighted to have you on board!
</p>

<p>
=============<strong>Login details</strong>=====================
</p>
<p>
 <a href='https://getfundedafrica.com/portal/'><i>Click here to login with your details</i></a><br><br>"."Email: ".$email."<br>"."Password: ".$password."<br><br> 
</p>
<p>
<b>
We genuinely care about enabling the start-up ecosystem so if there is anything at all we can do to help, please reach out to our fantastic Team by sending an email to info@getfundedafrica.com 
</p>

<p>
Thank you
</p>

Debo Omololu,<br>
CEO, GetFundedAfrica
";

$subject = "GetFundedAfricaOnboarding Welcome";

if(empty($this->admin_model->checkLoginReg($email))){
				$this->admin_model->insertLogin($data_login);
		$this->sendMail($email, $message,$subject);
			}

	
	}	
 
 public function addSubAction()

	{	
	
	

		$ref_id = rand(1,10).time();	
		$package	= $this->request->getPost("package");
		$subscription	= $this->request->getPost("subscription");
		

		$subscription_type = $this->request->getPost("subscription_type");		

		$pricing_desc = $this->request->getPost("pricing_desc");
		$amount = $this->request->getPost("amount");
		$details = $this->request->getPost("details");
		$per_campaign = $this->request->getPost("per_campaign");
		$per_month = $this->request->getPost("per_month");
		$maximum_contacts = $this->request->getPost("maximum_contacts");
		
		$status = "pending";
		$time 	=  date("Y-m-d h:i:s A",time());
		
		

		
		 $new_entry_key          = array();
		foreach($details as $key => $n ) {
		//echo $details[$key]."<br/>";
		if($details[$key] !=''){
		array_push($new_entry_key  ,$details[$key]);
		
 
}
else{


} }
$details = json_encode($new_entry_key, true);
$data	= 	array(

					'package' 	=> 	$package,
					'subscription' => $subscription,
					'subscription_type' => $subscription_type,
					'amount' 	=> 	$amount,	
					'pricing_desc' 	=>$pricing_desc,
					'per_campaign' 	=>$per_campaign,
					'per_month' 	=>$per_month,
					'maximum_contacts' 	=>$maximum_contacts,
					'details' 	=>$details,	
					'status' 	=> 	$status,
					'time_submit' 	=> 	$time			
					);
$this->admin_model->insertSub($data);

	redirect(base_url().'admin/subscription');
			
			

	
		

 }
 
 public function editSubAction()

	{	
	
	

		$id	= $this->request->getPost("id");	
		$package	= $this->request->getPost("package");
		$subscription	= $this->request->getPost("subscription");
		

		$subscription_type = $this->request->getPost("subscription_type");		

		$pricing_desc = $this->request->getPost("pricing_desc");
		$amount = $this->request->getPost("amount");
		$details = $this->request->getPost("details");
		$per_campaign = $this->request->getPost("per_campaign");
		$per_month = $this->request->getPost("per_month");
		$maximum_contacts = $this->request->getPost("maximum_contacts");
		
 		$new_entry_key          = array();
		foreach($details as $key => $n ) {
		//echo $details[$key]."<br/>";
		if($details[$key] !=''){
		array_push($new_entry_key  ,$details[$key]);
		
 
}
else{


} }
$details = json_encode($new_entry_key, true);	
		
		
		$data	= 	array(

					'package' 	=> 	$package,
					'subscription' => $subscription,
					'subscription_type' => $subscription_type,
					'amount' 	=> 	$amount,	
					'pricing_desc' 	=>$pricing_desc,
					'per_campaign' 	=>$per_campaign,
					'per_month' 	=>$per_month,
					'maximum_contacts' 	=>$maximum_contacts,	
					'details' 	=>$details	
					);

		$this->admin_model->editSub($data, $id);
		

	redirect(base_url().'admin/subscription');
			
			

	
		

 }
 
 public function verify($user_id)

	{	
	
	

	//$user	= $this->input->get("id");


		$data_bind_user	= 	array(

					'status' 	=> "approved"

					);

			
		$check = $this->admin_model-> approveForm($data_bind_user, $user_id);
		
		$subject	= 'Verification successful';
		
		 $message = "Congratulation your details have been verified, Click here https://calendly.com/getfundedafrica/30min to book your session with our team. Thank you. Getfunded Africa Team";
		$this->sendMail($email, $message,$subject);
		redirect(base_url().'admin/subscribers');

			
		
			

		

	}
	
	 public function sendMail($recipient_email, $message,$subject)
	{	
	

		$mail = new PHPMailer;

		$mail->isSMTP();                           
        $mail->Host = "mail.smtp2go.com";
        $mail->SMTPAuth = true;              
        $mail->Username = "GetFundedAfrica.ci";
        $mail->Password ="R4Qz93FHdRIL2FvN"; 
        $mail->SMTPSecure = 'ssl';                 
        $mail->Port =465;                          
        $mail->From ="info@GetFundedAfrica.ci";
        $mail->FromName ="GetFundedAfrica";
		$mail->addAddress($recipient_email);
		//$mail->addBCC('bcc@example.com');
		// Set character encoding and HTML format
		$mail->CharSet = 'UTF-8';
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
	
	public function signinAction()

	{		
		
		$email = $this->request->getPost('email');


		$password = $this->request->getPost('password');


		// $profile_request = $this->admin_model->getAdminDetails($email);
		// $profile_requestx = $this->admin_model->getAdmin($email);
		$profile_requestx = $this->admin_model->getAdminDetails($email); // Call the updated method

		
		
		
		 

		
			if( $password == $profile_requestx['password'] && $email == $profile_requestx['email'] )	
// && $profile_request[0]['verify'] == '1'
			{						

				

				$this->session->set('login_type', $profile_requestx['login_type']);
				

				$encryptedEmail = $profile_requestx[0]['email'];
				$this->session->set('email', $encryptedEmail);
				$this->session->set('product',  $profile_requestx['product']);
				$this->session->set('name', $profile_requestx['name']);
				$this->session->set('login_type_ext', $profile_requestx['login_type']);
                
                    
				if($profile_requestx[0]['product']=='career'){
				   	

				   	// redirect('https://getfundedafrica.com/career/admin/'); 
					   redirect()->to('https://getfundedafrica.com/career/admin');
				    
				}else{

					// redirect(base_url('admin'));
					return redirect()->to('admin');
					
				}

				

			}

			else

			{

					$response_data['message'] = "<center><font size=4 color=red>Invalid email or password, try again.</font></center>";

					
					$title['page_title'] = "Admin Login ";

					echo view('admin/header',$title);

					echo view('admin/login', $response_data);

					echo view('admin/footer');

												

			}

		}
		
		
		public function signoutAction()
{
    $user_data = $this->session->get();
    
    foreach ($user_data as $key => $value) {
        if (!in_array($key, ['session_id', 'ip_address', 'user_agent', 'last_activity'])) {
            $this->session->remove($key);
        }
    }
    
    $this->session->destroy();

    return redirect()->to(base_url('admin/login'));
}
	
	public function cohort_harmattan()

	{
		$login_type  = session()->get('login_type') ; if(($login_type == "")){ return redirect()->to(base_url('admin/login')); }
		
		$title['page_title'] = "Cohort - GetFundedAfrica";
        
		echo view('admin/header_home',$title);
		echo view('admin/navbar',$title);

		echo view('admin/cohort_harmattan',$data);

		echo view('admin/header_footer');

		

	}

	public function poe_investment()

	{
		$login_type  = session()->get('login_type') ; if(($login_type == "")){ return redirect()->to(base_url('admin/login')); }
		$title['page_title'] = "Cohort - GetFundedAfrica";
        
		$data['segmentValue'] = $this->request->uri->getSegment(3);


		echo view('admin/header_home',$title);
		echo view('admin/navbar',$title);

		echo view('admin/poe_investment',$data);

		echo view('admin/header_footer');

	
	}

	public function all_active_user()

	{
		$login_type  = session()->get('login_type') ; if(($login_type == "")){ return redirect()->to(base_url('admin/login')); }
		$title['page_title'] = "Active User - GetFundedAfrica";
		echo view('admin/header_home',$title);
		echo view('admin/navbar',$title);

		echo view('admin/user_activity/all_active_user');

		echo view('admin/header_footer');

	
	}

	public function all_activity()

	{
		$login_type  = session()->get('login_type') ; if(($login_type == "")){ return redirect()->to(base_url('admin/login')); }
		$title['page_title'] = "Active User - GetFundedAfrica";
		
		echo view('admin/header_home',$title);
		echo view('admin/navbar',$title);

		echo view('admin/user_activity/all_activity', $data);

		echo view('admin/header_footer');

	
	}

		

		

	}
	