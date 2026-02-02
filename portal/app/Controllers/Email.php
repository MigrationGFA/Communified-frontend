<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use Config\Session;
use PHPMailer\PHPMailer\PHPMailer;
use CodeIgniter\I18n\Time;
use Config\Services;
use App\Libraries\Pdf;

class Email extends BaseController {
    protected $gfa_model;
    protected $admin_model;
    protected $chat_model;

    public function __construct() {
        //parent::__construct();
        $this->gfa_model = model('App\Models\GfaModel');
        $this->admin_model = model('App\Models\AdminModel');
       

        // $emailVerifySession  = session()->get('email') ;

        // if (!empty($emailVerifySession)) {
        //     $user_action = request()->uri->getSegment(2);
        //     $this->saveUserActivity($user_action, $emailVerifySession);
        // }

    }

public function index()

    {
            $email  = session()->get('email') ; 
            //if(($email == '')){ return redirect()->to(base_url('admin/login')); }       
            $title['page_title'] = "Send Message - GFA-TECH Email Marketing App";

        echo view('email/header',$title);
        echo view('email/navbar',$title);
        //echo view('menu_admin',$title);
        echo view('email/index');
        echo view('email/footer'); 

    }

    public function add_contact()

    {
            $email  = session()->get('email') ; 
            //if(($email == '')){ return redirect()->to(base_url('admin/login')); }       
            $title['page_title'] = "Add Contact - GFA-TECH Email Marketing App";

        echo view('email/header',$title);
        echo view('email/navbar',$title);
        //echo view('menu_admin',$title);
        echo view('email/add_contact');
        echo view('email/footer'); 

    }

}