<?php 
// ob_start();
// if ( ! defined('BASEPATH')) exit('No direct script access allowed');
// date_default_timezone_set('Africa/Lagos');
// error_reporting(0);
// ini_set('display_errors', 0);
// header("Access-Control-Allow-Origin: *");

namespace App\Controllers;

use CodeIgniter\Controller;
use Config\Session;
use PHPMailer\PHPMailer\PHPMailer;
use CodeIgniter\I18n\Time;
use Config\Services;



class ChatController extends BaseController {
    protected $gfa_model;
    protected $admin_model;
    protected $chat_model;

	function __construct()
	{
  		//parent::__construct();

        $this->gfa_model = model('App\Models\GfaModel');
        $this->admin_model = model('App\Models\AdminModel');
        $this->chat_model = model('App\Models\ChatModel');
 		// $this->load->model('gfa_model');
		// $this->load->model('admin_model');
        // $this->load->model('chat_model');
	}

    public function sendMessage(){

        //print_r(session()->get('email'));
		if(isset($_POST['data']) && session()->get('email') !== ''){
            $jsonDecode = json_decode($_POST['data'],true);
            $uniq = $logged_in_email = session()->get('email');
            $arr = array(
                'SenderEmail' => $uniq,
                'ReceiverEmail' => $jsonDecode['uniq'],
                'Message' => $jsonDecode['message'],
                'TimeSent' => $jsonDecode['datetime'],
            );
            
            $isSent = $this->chat_model->sentMessage($arr);
            //print_r($arr);
		}
	}
	public function getMessage(){
		// if(isset($_POST['data']) && session()->get('email') !== ''){
        
        if(isset($_POST['data']) && session()->get('email') !== ''){
            $logged_in_email = session()->get('email');
            // $receiver_email = $_POST['data'];
            $receiver_email = $_POST['data'];
			$data['data'] = $this->chat_model->getmessage($logged_in_email, $receiver_email);
            $user = $this->gfa_model->getStartUpDetails($logged_in_email);
            //print_r($data);
            $result = [
                'user_details' => [
                    'name' => $user['Primary_Contact_Name'],
                    'email' => $logged_in_email,
                    // 'about' => $user['Interest'], // Uncomment this line if necessary
                ],
                'message' => view('message/show_message', $data), 
            ];

            print_r($result['message']);
		}
	}

    public function new_message() {
        $title['page_title'] = "EventChat - GetFundedAfrica";

        echo view('header_new',$title);
        echo view('new_message');
        echo view('footer_new');

		// $this->load->view('header_new',$title);
		// $this->load->view('new_message');
        // $this->load->view('footer_new');
	}

    // public function sendMessage(){

    //     if ($this->request->getPost('data') && $this->encrypt->decode($this->session->get('email')) !== '') {
    //         $jsonDecode = json_decode($this->request->getPost('data'), true);
    //         $uniq = $logged_in_email = $this->encrypt->decode($this->session->get('email'));
    //         $arr = [
    //             'SenderEmail' => $uniq,
    //             'ReceiverEmail' => $jsonDecode['uniq'],
    //             'Message' => $jsonDecode['message'],
    //             'TimeSent' => $jsonDecode['datetime'],
    //         ];
    //         $this->chat_model->sentMessage($arr);
    //         print_r($arr);
    //     }
    // }

    public function suggestedContacts(){
        $startups = $this->chat_model->getSuggestedContacts();

        if (!empty($startups)) {
            $randomContacts = array_rand($startups, 10); // Get 10 random keys from the startups array

            $suggestedContacts = array();
            foreach ($randomContacts as $key) {
                $suggestedContacts[] = $startups[$key];
            }

            header('Content-Type: application/json');
            echo json_encode( $suggestedContacts );
        } else {
            // Handle the case when startups array is empty
            return array();
        }
    }

    // public function contactSearch(){
    //     if(isset($_POST['data']) && session()->get('email') !== ''){
    //         $jsonDecode = json_decode($_POST['data'],true);

    //         $data['data'] = $this->chat_model->getSearchedContact($jsonDecode['query']);

    //         $data['gfa_model'] = $this->gfa_model;

    //         $result = [
    //             'contacts' => view('message/show_searched_contact', $data), 
    //         ];
    //     }

    //     print_r($result['contacts']);

    // }

    public function contactSearch(){
        if(isset($_POST['data']) && session()->get('email') !== ''){
            $jsonDecode = json_decode($_POST['data'], true);
    
            $page = isset($_POST['page']) ? $_POST['page'] : 1;
            $limit = 10; // Adjust the limit as needed
            $offset = ($page - 1) * $limit;
    
            $data['data'] = $this->chat_model->getSearchedContact($jsonDecode['query'], $limit, $offset);
    
            $data['gfa_model'] = $this->gfa_model;
    
            $result = [
                'contacts' => view('message/show_searched_contact', $data),
                'page' => $page,
            ];
    
            print_r($result['contacts']);
        }
    }

    

}