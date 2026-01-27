<?php 
namespace App\Controllers;
use \CodeIgniter\Encryption\Encryption;
use Config\Services;

// use CodeIgniter\Session\Session;
use CodeIgniter\Controller;
// use Config\Session;

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

		$this->encryption = \Config\Services::encrypter();

		// $this->session = new Session(config('App'));
		// $helper = helper('url');

		// $this->encryption = \Config\Services::encrypter(); 
        $this->session = \Config\Services::session();

		

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
public function matchInvestor()

	{
	    $data['id'] =  $this->input->post("id");
	   	echo view('admin/loadInvestor',$data); 
	}
	
	public function matchStartup()

	{
	    $data['id'] =  $this->input->post("id");
	   	echo view('admin/loadStartup',$data); 
	}
public function payment()

	{
		// if($this->encryption->decode($this->session->userdata('login_type')) == '' ){ redirect(base_url().'admin/login'); }

		$title['page_title'] = "Payment - Get Funded Africa";
        $data["product"] = $this->encryption->decrypt($this->session->get('product'));
		echo view('admin/header_home',$title);
		echo view('admin/navbar',$title);

		echo view('admin/payment',$data);

		echo view('admin/header_footer');



	}
	
	public function active_subscribers()

	{
		// if($this->encryption->decode($this->session->userdata('login_type')) == '' ){ redirect(base_url().'admin/login'); }
		
		$title['page_title'] = "Active Subscribers - Get Funded Africa";
        $data["product"] = $this->encryption->decrypt($this->session->get('product'));
		echo view('admin/header_home',$title);
		echo view('admin/navbar',$title);

		echo view('admin/activesub',$data);

		echo view('admin/header_footer');

		

	}
	
		public function paid_cohort()

	{
		// if($this->encryption->decode($this->session->userdata('login_type')) == '' ){ redirect(base_url().'admin/login'); }
		
		$title['page_title'] = "Paid Cohort Participants - Get Funded Africa";
        $data["product"] = $this->encryption->decrypt($this->session->get('product'));
		echo view('admin/header_home',$title);
		echo view('admin/navbar',$title);

		echo view('admin/paid_cohort',$data);

		echo view('admin/header_footer');

		

	}
	
	
	public function package()

	{
		// if($this->encryption->decode($this->session->userdata('login_type')) == '' ){ redirect(base_url().'admin/login'); }
		
		$title['page_title'] = "Payment - Email Newsletter Application";

		echo view('admin/header_home',$title);
		

		echo view('admin/package');

		echo view('admin/header_footer');

		

	}
	public function early_stage()

	{
		// if($this->encryption->decode($this->session->userdata('login_type')) == '' ){ redirect(base_url().'admin/login'); }
		
		$title['page_title'] = "Subscription - Email Newsletter Application";

		echo view('admin/header_home',$title);
		echo view('admin/navbar',$title);

		echo view('admin/early_stage');

		echo view('admin/header_footer');

		

	}
	
	public function later_stage()

	{
		// if($this->encryption->decode($this->session->userdata('login_type')) == '' ){ redirect(base_url().'admin/login'); }
		
		$title['page_title'] = "Subscription - Email Newsletter Application";

		echo view('admin/header_home',$title);
		echo view('admin/navbar',$title);

		echo view('admin/later_stage');

		echo view('admin/header_footer');

		

	}
	public function free_subscribers()

	{
		// if($this->encryption->decode($this->session->userdata('login_type')) == '' ){ redirect(base_url().'admin/login'); }
		
		$title['page_title'] = "Subscription - Email Newsletter Application";

		echo view('admin/header_home',$title);
		echo view('admin/navbar',$title);

		echo view('admin/free_subscription');

		echo view('admin/header_footer');

		

	}
	public function subscribersx()

	{
		// if($this->encryption->decode($this->session->userdata('login_type')) == '' ){ redirect(base_url().'admin/login'); }
		
		$title['page_title'] = "Subscription - Email Newsletter Application";

		echo view('admin/header_home',$title);
		echo view('admin/navbar',$title);

		echo view('admin/subscription');

		echo view('admin/header_footer');

		

	}
	
	public function prev_startups()

	{
		// if($this->encryption->decode($this->session->userdata('login_type')) == '' ){ redirect(base_url().'admin/login'); }
		
		$title['page_title'] = "Subscription - Get Funded Africa";
        $data["product"] = $this->encryption->decrypt($this->session->get('product'));
		echo view('admin/header_home',$title);
		echo view('admin/navbar',$title);

		echo view('admin/subpage',$data);

		echo view('admin/header_footer');

		

	}
	
	public function subscribers()

	{
		// if($this->encryption->decode($this->session->userdata('login_type')) == '' ){ redirect(base_url().'admin/login'); }
		
		$title['page_title'] = "Subscription - Get Funded Africa";
        $data["product"] = $this->encryption->decrypt($this->session->get('product'));
		echo view('admin/header_home',$title);
		echo view('admin/navbar',$title);

		echo view('admin/subpage',$data);

		echo view('admin/header_footer');

		

	}
	
	
		public function news()

	{
		// if($this->encryption->decode($this->session->userdata('login_type')) == '' ){ redirect(base_url().'admin/login'); }
		
		$title['page_title'] = "GFA Media News - Get Funded Africa";
        //data["ref"] = $ref;
		echo view('admin/header_home',$title);
		echo view('admin/navbar',$title);

		echo view('admin/news');

		echo view('admin/header_footer');

		

	}
	
		public function files()

	{
		// if($this->encryption->decode($this->session->userdata('login_type')) == '' ){ redirect(base_url().'admin/login'); }
		
		$title['page_title'] = "Data Room Files  - Get Funded Africa";
        //data["ref"] = $ref;
		echo view('admin/header_home',$title);
		echo view('admin/navbar',$title);

		echo view('admin/files');

		echo view('admin/header_footer');

		

	}
		public function investor_deals()

	{
		// if($this->encryption->decode($this->session->userdata('login_type')) == '' ){ redirect(base_url().'admin/login'); }
		
		$title['page_title'] = "Investor Deals  - Get Funded Africa";
        //data["ref"] = $ref;
		echo view('admin/header_home',$title);
		echo view('admin/navbar',$title);

		echo view('admin/investor_deals');

		echo view('admin/header_footer');

		

	}
	
	
	
	public function gfa_max()

	{
		// if($this->encryption->decode($this->session->userdata('login_type')) == '' ){ redirect(base_url().'admin/login'); }
		
		$title['page_title'] = "GFA Max - Get Funded Africa";
        //data["ref"] = $ref;
		echo view('admin/header_home',$title);
		echo view('admin/navbar',$title);

		echo view('admin/gfa-max');

		echo view('admin/header_footer');

		

	}
	
	public function insight()

	{
		// if($this->encryption->decode($this->session->userdata('login_type')) == '' ){ redirect(base_url().'admin/login'); }
		
		$title['page_title'] = "Insight - Get Funded Africa";
        //data["ref"] = $ref;
		echo view('admin/header_home',$title);
		echo view('admin/navbar',$title);

		echo view('admin/insight');

		echo view('admin/header_footer');

		

	}
	
	public function learning()

	{
		// if($this->encryption->decode($this->session->userdata('login_type')) == '' ){ redirect(base_url().'admin/login'); }
		
		$title['page_title'] = "Learning - Get Funded Africa";
        //data["ref"] = $ref;
		echo view('admin/header_home',$title);
		echo view('admin/navbar',$title);

		echo view('admin/learning');

		echo view('admin/header_footer');

		

	}
	
	public function venture_building()

	{
		// if($this->encryption->decode($this->session->userdata('login_type')) == '' ){ redirect(base_url().'admin/login'); }
		
		$title['page_title'] = "Venture Building - Get Funded Africa";
        //data["ref"] = $ref;
		echo view('admin/header_home',$title);
		echo view('admin/navbar',$title);

		echo view('admin/venture_building');

		echo view('admin/header_footer');

		

	}
	
	public function referral($ref)

	{
		// if($this->encryption->decode($this->session->userdata('login_type')) == '' ){ redirect(base_url().'admin/login'); }
		
		$title['page_title'] = "PMs Referrals - Get Funded Africa";
        $data["ref"] = $ref;
		echo view('admin/header_home',$title);
		echo view('admin/navbar',$title);

		echo view('admin/referral',$data);

		echo view('admin/header_footer');

		

	}

		public function microsoft_corperate($Event="")

	{
		// if($this->encryption->decode($this->session->userdata('login_type')) == '' ){ redirect(base_url().'admin/login'); }
		
		$title['page_title'] = "GFA microsoft corperate - Get Funded Africa";
        $data["product"] = $this->encryption->decrypt($this->session->get('product'));
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
		
		
		$title['page_title'] = "GFA Freshworks Startups - Get Funded Africa";
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
		// if($this->encryption->decode($this->session->userdata('login_type')) == '' ){ redirect(base_url().'admin/login'); }
		
		$title['page_title'] = "GFA Freshworks Startups - Get Funded Africa";
        $data["product"] = $this->encryption->decrypt($this->session->get('product'));
		echo view('admin/header_home',$title);
		echo view('admin/navbar',$title);

		echo view('admin/freshworks_startup',$data);

		echo view('admin/header_footer');

		

	}
	
	public function microsoft_startup($Event="")


	{
		// if($this->encryption->decode($this->session->userdata('login_type')) == '' ){ redirect(base_url().'admin/login'); }
		
		$title['page_title'] = "GFA microsoft corperate - Get Funded Africa";
        $data["product"] = $this->encryption->decrypt($this->session->get('product'));
		$data['Event'] = $Event;
		echo view('admin/header_home',$title);
		echo view('admin/navbar',$title);

		echo view('admin/microsoft_startup',$data);

		echo view('admin/header_footer');

		

	}
	
		public function gfa_all_users()

	{
		// if($this->encryption->decode($this->session->userdata('login_type')) == '' ){ redirect(base_url().'admin/login'); }
		
		$title['page_title'] = "GFA All Users - Get Funded Africa";
        $data["product"] = $this->encryption->decrypt($this->session->get('product'));
		echo view('admin/header_home',$title);
		echo view('admin/navbar',$title);

		echo view('admin/gfausers',$data);

		echo view('admin/header_footer');

		
	}


	public function gfa_all_individual_users()

	{
		// if($this->encryption->decode($this->session->userdata('login_type')) == '' ){ redirect(base_url().'admin/login'); }
		
		$title['page_title'] = "GFA All Users - Get Funded Africa";
        $data["product"] = $this->encryption->decrypt($this->session->get('product'));
		echo view('admin/header_home',$title);
		echo view('admin/navbar',$title);

		echo view('admin/individual_users',$data);

		echo view('admin/header_footer');

		
	}


	
	public function cohort_list()

	{
		// if($this->encryption->decode($this->session->userdata('login_type')) == '' ){ redirect(base_url().'admin/login'); }
		
		$title['page_title'] = "Cohort - Get Funded Africa";
        $data["product"] = $this->encryption->decrypt($this->session->get('product'));
		echo view('admin/header_home',$title);
		echo view('admin/navbar',$title);

		echo view('admin/cohort_list',$data);

		echo view('admin/header_footer');

		

	}
	
	public function commission($ref="")

	{
		// if($this->encryption->decode($this->session->userdata('login_type')) == '' ){ redirect(base_url().'admin/login'); }
		
		$title['page_title'] = "Commission- Get Funded Africa";
        $data["product"] = $this->encryption->decrypt($this->session->get('product'));
        $data["ref"] = $ref;
		echo view('admin/header_home',$title);
		echo view('admin/navbar',$title);

		echo view('admin/commission',$data);

		echo view('admin/header_footer');

		

	}
	
	
		public function affiliate_pay()

	{
		
		// if($this->encryption->decode($this->session->userdata('login_type')) == '' ){ redirect(base_url().'admin/login'); }
		
		$title['page_title'] = "Affiliate Payment- Get Funded Africa";
        $data["product"] = $this->encryption->decrypt($this->session->get('product'));
		echo view('admin/header_home',$title);
		echo view('admin/navbar',$title);

		echo view('admin/affiliate_pay',$data);

		echo view('admin/header_footer');

		

	}
	public function affiliate()

	{
		// if($this->encryption->decode($this->session->userdata('login_type')) == '' ){ redirect(base_url().'admin/login'); }
		
		$title['page_title'] = "Affiliate- Get Funded Africa";
        $data["product"] = $this->encryption->decrypt($this->session->get('product'));
		echo view('admin/header_home',$title);
		echo view('admin/navbar',$title);

		echo view('admin/affiliate',$data);

		echo view('admin/header_footer');

		

	}
	
		public function story()

	{
		// if($this->encryption->decode($this->session->userdata('login_type')) == '' ){ redirect(base_url().'admin/login'); }
		
		$title['page_title'] = "Story  - Get Funded Africa";
        //data["ref"] = $ref;
		echo view('admin/header_home',$title);
		echo view('admin/navbar',$title);

		echo view('admin/story');

		echo view('admin/header_footer');

		

	}

	public function events($id='')

	{
		// if($this->encryption->decode($this->session->userdata('login_type')) == '' ){ redirect(base_url().'admin/login'); }
		
		$title['page_title'] = "Event  - Get Funded Africa";
        $data["id"] = $id;
		echo view('admin/header_home',$title);
		echo view('admin/navbar',$title);

		echo view('admin/event_attendees',$data);

		echo view('admin/header_footer');

		

	}
	
	public function event($event_type='')

	{
		// if($this->encryption->decode($this->session->userdata('login_type')) == '' ){ redirect(base_url().'admin/login'); }
		
		$title['page_title'] = "Event  - Get Funded Africa";
        $data["event_type"] = $event_type;
		echo view('admin/header_home',$title);
		echo view('admin/navbar',$title);

		echo view('admin/event',$data);

		echo view('admin/header_footer');

		

	}
	
	public function event_list()

	{
		// if($this->encryption->decode($this->session->userdata('login_type')) == '' ){ redirect(base_url().'admin/login'); }
		
		$title['page_title'] = "Event - Get Funded Africa";
        $data["product"] = $this->encryption->decrypt($this->session->get('product'));
		echo view('admin/header_home',$title);
		echo view('admin/navbar',$title);

		echo view('admin/event_list',$data);

		echo view('admin/header_footer');

		

	}
	
		public function credit_list()

	{
		// if($this->encryption->decode($this->session->userdata('login_type')) == '' ){ redirect(base_url().'admin/login'); }
		
		$title['page_title'] = "Credit Score - Get Funded Africa";
        $data["product"] = $this->encryption->decrypt($this->session->get('product'));
		echo view('admin/header_home',$title);
		echo view('admin/navbar',$title);

		echo view('admin/credit_list',$data);

		echo view('admin/header_footer');

		

	}
	
		public function cohort()

	{
		// if($this->encryption->decode($this->session->userdata('login_type')) == '' ){ redirect(base_url().'admin/login'); }
		
		$title['page_title'] = "Cohort Participant - Get Funded Africa";

		$data['segmentValue'] = $this->request->uri->getSegment(3);

        $data["product"] = $this->encryption->decrypt($this->session->get('product'));
		echo view('admin/header_home',$title);
		echo view('admin/navbar',$title);

		echo view('admin/cohort',$data);

		echo view('admin/header_footer');

		

	}
	
	public function post_cohort()

	{
		// if($this->encryption->decode($this->session->userdata('login_type')) == '' ){ redirect(base_url().'admin/login'); }
		
		$title['page_title'] = "Add Cohort - Get Funded Africa";
       
		echo view('admin/header_home',$title);
		echo view('admin/navbar',$title);

		echo view('admin/post_cohort',$data);

		echo view('admin/header_footer');

		

	}
	
	public function add_cohort_participant($Cohort)

	{
		// if($this->encryption->decode($this->session->userdata('login_type')) == '' ){ redirect(base_url().'admin/login'); }
		
		$title['page_title'] = "Add Cohort Particpant - Get Funded Africa";
		$data['Cohort'] = urldecode($Cohort);
       
		echo view('admin/header_home',$title);
		echo view('admin/navbar',$title);

		echo view('admin/add_cohort_participant',$data);

		echo view('admin/header_footer');

		

	}
	public function funding()

	{
		// if($this->encryption->decode($this->session->userdata('login_type')) == '' ){ redirect(base_url().'admin/login'); }
		
		$title['page_title'] = "Funding For Startups - Get Funded Africa";
        $data["product"] = $this->encryption->decrypt($this->session->get('product'));
		echo view('admin/header_home',$title);
		echo view('admin/navbar',$title);

		echo view('admin/funding',$data);

		echo view('admin/header_footer');

		

	}
	public function startups()

	{
		// if($this->encryption->decode($this->session->userdata('login_type')) == '' ){ redirect(base_url().'admin/login'); }
		
		$title['page_title'] = "Startups  - Get Funded Africa";
        $data["product"] = $this->encryption->decrypt($this->session->get('product'));
		echo view('admin/header_home',$title);
		echo view('admin/navbar',$title);

		echo view('admin/startups',$data);

		echo view('admin/header_footer');

		

	}


	public function individual()

	{
		// if($this->encryption->decode($this->session->userdata('login_type')) == '' ){ redirect(base_url().'admin/login'); }
		
		$title['page_title'] = "Startups  - Get Funded Africa";
        $data["product"] = $this->encryption->decrypt($this->session->get('product'));
		echo view('admin/header_home',$title);
		echo view('admin/navbar',$title);

		echo view('admin/individual',$data);

		echo view('admin/header_footer');

		

	}
	
		public function onboard()

	{
		// if($this->encryption->decode($this->session->userdata('login_type')) == '' ){ redirect(base_url().'admin/login'); }
		
		$title['page_title'] = "Onboarding  - Get Funded Africa";
        $data["product"] = $this->encryption->decrypt($this->session->get('product'));
		echo view('admin/header_home',$title);
		echo view('admin/navbar',$title);

		echo view('admin/onboard',$data);

		echo view('admin/header_footer');
	}
	
	public function startupsinfo($id)
	{
		// if($this->encryption->decode($this->session->userdata('login_type')) == '' ){ redirect(base_url().'admin/login'); }
		
		$title['page_title'] = "Subscription - Email Newsletter Application";
		$data['id'] = $id;
		echo view('admin/header_home',[ 'title' => $title, 'data' => $data]);
		echo view('admin/navbar');

		echo view('admin/onboardstartups',$data);

		echo view('admin/header_footer');
	}
	
		public function investorsinfo($id)

	{
		// if($this->encryption->decode($this->session->userdata('login_type')) == '' ){ redirect(base_url().'admin/login'); }
		
		$title['page_title'] = "Investor GfA - Information";
		$data['id'] = $id;
		echo view('admin/header_home',$title);
		echo view('admin/navbar');

		echo view('admin/investorsinfo',$data);

		echo view('admin/header_footer');

		

	}
	
		public function mentorsinfo($id)

	{
		// if($this->encryption->decode($this->session->userdata('login_type')) == '' ){ redirect(base_url().'admin/login'); }
		
		$title['page_title'] = "Mentor GfA - Information";
		$data['id'] = $id;
		echo view('admin/header_home',$title);
		echo view('admin/navbar');

		echo view('admin/mentorsinfo',$data);

		echo view('admin/header_footer');

		

	} 
// 	corperate_info


	public function corperate_info($id)

	{
		// if($this->encryption->decode($this->session->userdata('login_type')) == '' ){ redirect(base_url().'admin/login'); }
		
		$title['page_title'] = "Corperate Info - GFA";
		$data['id'] = $id;
		echo view('admin/header_home',$title);
		echo view('admin/navbar');

		echo view('admin/corperate_info',$data);

		echo view('admin/header_footer');

		

	}
	
	public function startupinfo($id)

	{
		// if($this->encryption->decode($this->session->userdata('login_type')) == '' ){ redirect(base_url().'admin/login'); }
		
		$title['page_title'] = "Subscription - Email Newsletter Application";
		$data['id'] = $id;
		echo view('admin/header_home',$title);
		echo view('admin/navbar');

		echo view('admin/startupinfo',$data);

		echo view('admin/header_footer');

		

	}
	
	public function checksubscriber($id)

	{
		// if($this->encryption->decode($this->session->userdata('login_type')) == '' ){ redirect(base_url().'admin/login'); }
		
		$title['page_title'] = "Subscription - Email Newsletter Application";
		$data['id'] = $id;
		echo view('admin/header_home',$title);
		echo view('admin/navbar');

		echo view('admin/checksubscriber',$data);

		echo view('admin/header_footer');

		

	}
	public function sendeventrequest($id)

	{
		// if($this->encryption->decode($this->session->userdata('login_type')) == '' ){ redirect(base_url().'admin/login'); }
		
		$title['page_title'] = "Event Info - GFA";
		$data['id'] = $id;
		echo view('admin/header_home',$title);
		echo view('admin/navbar');

		echo view('admin/sendevent',$data);

		echo view('admin/header_footer');

		

	}
	
	public function sendinvestordoc($id)

	{
		// if($this->encryption->decode($this->session->userdata('login_type')) == '' ){ redirect(base_url().'admin/login'); }
		
		$title['page_title'] = "Investor Agreement - GFA";
		$data['id'] = $id;
		echo view('admin/header_home',$title);
		echo view('admin/navbar');

		echo view('admin/sendinvestordoc',$data);

		echo view('admin/header_footer');

		

	}
	public function sendcreditrequest($id)

	{
		// if($this->encryption->decode($this->session->userdata('login_type')) == '' ){ redirect(base_url().'admin/login'); }
		
		$title['page_title'] = "Credit Info - GFA";
		$data['id'] = $id;
		echo view('admin/header_home',$title);
		echo view('admin/navbar');

		echo view('admin/sendcredit',$data);

		echo view('admin/header_footer');

		

	}
	public function editcohortevent($id)

	{
		// if($this->encryption->decode($this->session->userdata('login_type')) == '' ){ redirect(base_url().'admin/login'); }
		
		$title['page_title'] = "UPDATE COHORT - GFA";
		$data['id'] = $id;
		echo view('admin/header_home',$title);
		echo view('admin/navbar');

		echo view('admin/editcohortevent',$data);

		echo view('admin/header_footer');

		

	}
	public function checkcohortevent($id)

	{
		// if($this->encryption->decode($this->session->userdata('login_type')) == '' ){ redirect(base_url().'admin/login'); }
		
		$title['page_title'] = "COHORT - GFA";
		$data['id'] = $id;
		echo view('admin/header_home',$title);
		echo view('admin/navbar');

		echo view('admin/checkcohortevent',$data);

		echo view('admin/header_footer');

		

	}
		public function checkcohort($id)

	{
		// if($this->encryption->decode($this->session->userdata('login_type')) == '' ){ redirect(base_url().'admin/login'); }
		
		$title['page_title'] = "COHORT PARTICIPANT - GFA";
		$data['id'] = $id;
		echo view('admin/header_home',$title);
		echo view('admin/navbar');

		echo view('admin/checkcohort',$data);

		echo view('admin/header_footer');

		

	}
	public function matchdata()

	{
		//// if($this->encryption->decode($this->session->userdata('login_type')) == '' ){ redirect(base_url().'admin/login'); }
		
		$title['page_title'] = "GFA - Match Startup and investor";
		//$data['id'] = $id;
		echo view('admin/header_home',$title);
		//echo view('admin/navbar');

		echo view('admin/matchdata',$data);

		echo view('admin/header_footer');

		

	}
	
	public function postdata()

	{
		//// if($this->encryption->decode($this->session->userdata('login_type')) == '' ){ redirect(base_url().'admin/login'); }
		
		$title['page_title'] = "GFA Post Data for Startup and Investor ";
		//$data['id'] = $id;
		echo view('admin/header_home',$title);
		echo view('admin/navbar2');

		echo view('admin/postdata',$data);

		echo view('admin/header_footer');

		

	}
	
	public function startupinv()

	{
		//// if($this->encryption->decode($this->session->userdata('login_type')) == '' ){ redirect(base_url().'admin/login'); }
		
		$title['page_title'] = "GFA - Startup and investor Match Data";
		//$data['id'] = $id;
		echo view('admin/header_home',$title);
		echo view('admin/navbar2');

		echo view('admin/startupinv',$data);

		echo view('admin/header_footer');

		

	}
	
	
	public function startup()

	{
		//// if($this->encryption->decode($this->session->userdata('login_type')) == '' ){ redirect(base_url().'admin/login'); }
		
		$title['page_title'] = "Startup GFA - Startup and investor Match Data";
		//$data['id'] = $id;
		echo view('admin/header_home',$title);
		echo view('admin/navbar2');

		echo view('admin/startup',$data);

		echo view('admin/header_footer');

		

	}
	
		public function corporate()

	{
		//// if($this->encryption->decode($this->session->userdata('login_type')) == '' ){ redirect(base_url().'admin/login'); }
		
		$title['page_title'] = "Corporate GFA - Startup and investor Match Data";
		$data["product"] = $this->encryption->decrypt($this->session->get('product'));
		//$data['id'] = $id;
		echo view('admin/header_home',$title);
		echo view('admin/navbar');

		echo view('admin/corporate',$data);

		echo view('admin/header_footer');

		

	}
	
	
		public function accelerators()

	{
		//// if($this->encryption->decode($this->session->userdata('login_type')) == '' ){ redirect(base_url().'admin/login'); }
		
		$title['page_title'] = "Accelerators GFA - Startup and investor Match Data";
		$data["product"] = $this->encryption->decrypt($this->session->get('product'));
		//$data['id'] = $id;
		echo view('admin/header_home',$title);
		echo view('admin/navbar');

		echo view('admin/accelerators',$data);

		echo view('admin/header_footer');

		

	}
	
	public function mentors()

	{
		//// if($this->encryption->decode($this->session->userdata('login_type')) == '' ){ redirect(base_url().'admin/login'); }
		
		$title['page_title'] = "Mentors GFA - Startup and investor Match Data";
		$data["product"] = $this->encryption->decrypt($this->session->get('product'));
		//$data['id'] = $id;
		echo view('admin/header_home',$title);
		echo view('admin/navbar');

		echo view('admin/mentors',$data);

		echo view('admin/header_footer');

		

	}
	
		public function investors()

	{
		//// if($this->encryption->decode($this->session->userdata('login_type')) == '' ){ redirect(base_url().'admin/login'); }
		
		$title['page_title'] = "Investor GFA - Startup and investor Match Data";

		$data['segmentValue'] = $this->request->uri->getSegment(3);

        $data["product"] = $this->encryption->decrypt($this->session->get('product'));
		//$data['id'] = $id;
		echo view('admin/header_home',$title);
		echo view('admin/navbar');

		echo view('admin/investors', $data);

		echo view('admin/header_footer');

		

	}

	public function all_connections()

	{
		//// if($this->encryption->decode($this->session->userdata('login_type')) == '' ){ redirect(base_url().'admin/login'); }
		
		$title['page_title'] = "All GFA connections  - Startup and investor Match Data";
		// $data['id'] = $this->admin_model->getAllGFAConnections();
		echo view('admin/header_home',$title);
		echo view('admin/navbar');

		echo view('admin/all_connections');

		echo view('admin/header_footer');

		

	}
	
	public function investor()

	{
		//// if($this->encryption->decode($this->session->userdata('login_type')) == '' ){ redirect(base_url().'admin/login'); }
		
		$title['page_title'] = "Investor GFA - Startup and investor Match Data";
		//$data['id'] = $id;
		echo view('admin/header_home',$title);
		echo view('admin/navbar2');

		echo view('admin/investor',$data);

		echo view('admin/header_footer');

		

	}
	
	public function addsub()

	{
		// if($this->encryption->decode($this->session->userdata('login_type')) == '' ){ redirect(base_url().'admin/login'); }
		
		$title['page_title'] = "Add Subscription - Email Newsletter Application";

		echo view('admin/header_home',$title);


		echo view('admin/addsub');

		echo view('admin/header_footer');

		

	}
	public function editsub($id)

	{
		// if($this->encryption->decode($this->session->userdata('login_type')) == '' ){ redirect(base_url().'admin/login'); }
		
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
	
	public function commissionpro()

	{	
	    
        $time 	=  date("Y-m-d h:i:s A",time());
	    $commission	= $this->input->post("commission");
	    $ref	= $this->input->post("ref");
	    
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
	    $id = $this->input->post("id"); 
	    $More_Info = $this->input->post("More_Info"); 
	    $Email = $this->input->post("Email"); 
	    $Credit = $this->input->post("Credit"); 
	    $Status = 'active';
	    $Time_submit	 	=  date("Y-m-d h:i:s A",time());
	    $data_credit = array(
	    
					'more_Info' => $More_Info,
					'status' => $Status,
					'time_submit' => $Time_submit
				
					);
	   	$this->admin_model->updateEvent($data_credit,$id);
	   	
	   		$message = "<a href='https://getfundedafrica.com'><img src='https://getfundedafrica.com/images/logo-1.png'></a> <br><br>";
			
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
	    $connect_id = $this->input->post("connect_id"); 
	    $edit_id = $this->input->post("edit_id");
	    $email = $this->input->post("email"); 
	    $admin = $this->input->post("admin"); 
	    //$content = utf8_decode(html_entity_decode(htmlentities($this->input->post("content"), ENT_QUOTES))); 
	    $content = $this->input->post("content");
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
	   	
	   		$message = "<a href='https://getfundedafrica.com'><img src='https://getfundedafrica.com/images/logo-1.png'></a> <br><br>";
			


$subject = "Onboarding Credit Activated";	
				
//$this->sendMail($Email, $message,$subject);	
	}
	public function sendcreditpro()

	{
	    $id = $this->input->post("id"); 
	    $More_Info = $this->input->post("More_Info"); 
	    $Email = $this->input->post("Email"); 
	    $Credit = $this->input->post("Credit"); 
	    $Status = 'active';
	    $Time_submit	 	=  date("Y-m-d h:i:s A",time());
	    $data_credit = array(
	    
					'More_Info' => $More_Info,
					'Status' => $Status,
					'Time_submit' => $Time_submit
				
					);
	   	$this->admin_model->updateCredit($data_credit,$id);
	   	
	   		$message = "<a href='https://getfundedafrica.com'><img src='https://getfundedafrica.com/images/logo-1.png'></a> <br><br>";
			
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
	    
	    
	    $id = $this->input->post("id"); 
	    	
	   	$this->admin_model->deleteFile($id); 
	}
	public function deleteUser()

	{
	    
	    
	    $id = $this->input->post("id"); 
		$email = $this->gfa_model->getInviteUser($id);
	    $this->admin_model->deleteLoginUser($email[0]['Email']);	
	   	$this->admin_model->deleteInviteUser($id);
		  
	}
	
		public function deleteCohortEvent()

	{
	    
	    
	    $id = $this->input->post("id"); 
	    	
	   	$this->admin_model->deleteCohort($id); 
	}
	public function deleteEventAttendee()

	{
	    
	    
	    $id = $this->input->post("id"); 
	    	
	   	$this->admin_model->deleteEventAttendee($id); 
	}	
public function deleteCredit()

	{
	    
	    
	    $id = $this->input->post("id"); 
	    	
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
    
    $id  =  $this->input->post("id");
    $Title  =  $this->input->post("Title");
    $Short_Desc	= $this->input->post("Short_Desc");
    $Main_Desc	= $_POST['Main_Desc']; //$this->input->post("Main_Desc");
    $Date	= $this->input->post("Date");
    $Fee	= $this->input->post("Fee");
    $Cohort_Program	= $this->input->post("Cohort_Program");
    $Cohort_Duration	= $this->input->post("Cohort_Duration");
    $Cohort_Type	= $this->input->post("Cohort_Type");
    $Demo_Date	= $this->input->post("Demo_Date");
    
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
        $Logo	= $this->input->post("Logo"); 
    }
     if(!empty($dataInfo[1]['file_name'])){
       $Banner = $dataInfo[1]['file_name'] ;  
    }else{
         $Banner	= $this->input->post("Banner");
    }
     if(!empty($dataInfo[2]['file_name'])){
       $Partner_logo = $dataInfo[2]['file_name'] ;  
    }else{
      $Partner_logo	= $this->input->post("Partner_logo");  
        
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
    
    $Title  =  $this->input->post("Title");
    $Short_Desc	= $this->input->post("Short_Desc");
    $Main_Desc	= html_entity_decode($this->input->post("Main_Desc"));
    $Date	= $this->input->post("Date");
    $Fee	= $this->input->post("Fee");
    $Cohort_Program	= $this->input->post("Cohort_Program");
    $Cohort_Duration	= $this->input->post("Cohort_Duration");
    $Cohort_Type	= $this->input->post("Cohort_Type");
    $Demo_Date	= $this->input->post("Demo_Date");
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
	    $name = $this->input->post("name");
	    $company_name = $this->input->post("company_name");
	    $company_description = $this->input->post("company_description");
	    $company_type = $this->input->post("company_type");
	    $industry = $this->input->post("industry");
	    $company_headquarters = $this->input->post("company_headquarters");
	    $date_founded = $this->input->post("date_founded");
	    $number_of_employees = $this->input->post("number_of_employees");
	    $website = $this->input->post("website");
	    $company_phone = $this->input->post("company_phone");
	    $email = $this->input->post("email");
	    $facebook = $this->input->post("facebook");
	    $linkedin = $this->input->post("linkedin");
	    $twitter = $this->input->post("twitter");
	    $funding = $this->input->post("funding");
	
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
	
	public function investor_form(){
	    $countryArray = $this->input->post("country");
	    $regional_focus_industriesArray = $this->input->post("regional_focus_industries");
        $regional_focus_industries = implode(",",$regional_focus_industriesArray); 
	    $country = implode(",",$countryArray);

	    
	    
	    $name = $this->input->post("name");
	    $company_name = $this->input->post("company_name");
	    $preference = $this->input->post("preference");
	    $title = $this->input->post("title");
	    $gender = $this->input->post("gender");
	    $position = $this->input->post("position");
	    $date_founded = $this->input->post("date_founded");
	    $investor_type = $this->input->post("investor_type");
	    $website = $this->input->post("website");
	    $email = $this->input->post("email");
	    $phone = $this->input->post("phone");
	    $facebook= $this->input->post("facebook");
	    $linkedin = $this->input->post("linkedin");
	    $twitter = $this->input->post("twitter");
	    $instagram = $this->input->post("instagram");
	     $investment_stage_focus = $this->input->post("investment_stage_focus");
	       $address = $this->input->post("address");
	        $industry_focus = $this->input->post("industry_focus");
	         $min_cheque = $this->input->post("min_cheque");
	          $max_cheque = $this->input->post("max_cheque");
	          $experience = $this->input->post("experience");
	        $education = $this->input->post("education");
	         $degree = $this->input->post("degree");
	           $course = $this->input->post("course");
	        $invested_companies = $this->input->post("invested_companies");
	        $stage = $this->input->post("stage");
	         $stage_invested_in_africa = $this->input->post("stage_invested_in_africa");
	          $investment_level = $this->input->post("investment_level");
	           $additional_information = $this->input->post("additional_information");
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
	    	
	  $regional_focus_industriesArray = $this->input->post("id");
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
	    $industryArray = $this->input->post("industry");
	
		foreach($industryArray  as $key => $n ) {
		    
		  
		     $row = $this->admin_model->searchStartup($industryArray[$key]);  foreach($row as $rowArray){   
					
                    echo '<option value=" '.$rowArray["id"].' "> '.$rowArray['company_name'].'  </option>';
                    }
		    
		}
		
		

	}
	
	public function fetchStartupsData()

	{
	    $industryArray = $this->input->post("industry");
	
		
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

		
		$id	= $this->input->post("id");
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
            $id	= $this->input->post("id");
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
	     $Min_Cheque = $this->input->post("Min_Cheque");
	   //   $Max_Cheque = $this->input->post("Max_Cheque");
	   
	  
          
         
        
       
          
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
	     $Min_Cheque = $this->input->post("Min_Cheque");
	      $Max_Cheque = $this->input->post("Max_Cheque");
	   
	  
          
         
        
       
          
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
	     
	      $implementStage = $this->input->post("implementStage");
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
	     $regional_focus_industriesArray = $this->input->post("regional_focus_industries");
	      $countryArray = $this->input->post("country");
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
	     $implementStage = $this->input->post("implementStage");
          
         
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
	     $regional_focus_industriesArray = $this->input->post("regional_focus_industries");
	      $countryArray = $this->input->post("country");
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
	     $industryArray = $this->input->post("industry");
	      $StagesArray = $this->input->post("Stages");
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
	     $industryArray = $this->input->post("industry");
	      $StagesArray = $this->input->post("Stages");
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
	     $industryArray = $this->input->post("industry");
	      $StagesArray = $this->input->post("Stages");
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
	     $industryArray = $this->input->post("industry");
	      $StagesArray = $this->input->post("Stages");
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
	    
	   
          $industryArray = $this->input->post("industry");
          
          
	
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
	   
	  $id = $this->input->post("id");
	  $file_status = $this->input->post("file_status");
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
	 $message = "<a href='https://getfundedafrica.com'><img src='https://getfundedafrica.com/images/logo-1.png'></a>

<p>
Congratulations ".$personalDetails[0]['Primary_Contact_Name'].",
</p>

<p>
Your story has been approved.  
</p>



<p>
Thank you
</p>";

$subject = 'Story Approved';
// $rowArray[0]['Email']
 $this->sendMail($rowArray[0]['email'], $message,$subject);
	      
	  }elseif($file_status =='declined'){
	      
	   $message = "<a href='https://getfundedafrica.com'><img src='https://getfundedafrica.com/images/logo-1.png'></a>

<p>
Noops ".$personalDetails[0]['Primary_Contact_Name'].",
</p>

<p>
Your story has been declined. 
</p>



<p>
Thank you
</p>"; 
$subject = 'Story Declined';

 $this->sendMail($rowArray[0]['email'], $message,$subject);
	  }else{
	      
	    echo '';  
	  }
	 
    
	   //echo ''; 
	    
	}
	
		public function eventstatuspro(){
	   
	  $id = $this->input->post("id");
	  $file_status = $this->input->post("file_status");
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
	 $message = "<a href='https://getfundedafrica.com'><img src='https://getfundedafrica.com/images/logo-1.png'></a>

<p>
Dear ".$personalDetails[0]['Primary_Contact_Name'].",
</p>

<p>Congratulations!</p>
<p>We are pleased to inform you that your event has been approved. Please find below the link to your event for you to review, share and promote:</p>
<a href='".base_url()."gfa/events/".$rowArray[0]['ref_id']."'>".base_url()."gfa/events/".$rowArray[0]['ref_id']."</a>
<p>Log in to your GFA account and click <a href='".base_url()."gfa/manage_event"."'>here</a> to manage your events and attendance.</p>
<p>We wish you the best of luck with your event.</p>
<p>Best regards,</p>
<p>GetFundedAfrica Team</p>";

$subject = 'Event Approved';
// $rowArray[0]['Email']
 $this->sendMail($rowArray[0]['email'], $message,$subject);
	      
	  }elseif($file_status =='declined'){
	      
	   $message = "<a href='https://getfundedafrica.com'><img src='https://getfundedafrica.com/images/logo-1.png'></a>

<p>Dear ".$personalDetails[0]['Primary_Contact_Name'].",</p>
<p>Greetings from the GetFundedAfrica Team.</p>
<p>We thank you for posting your event on the GetFundedAfrica platform</p>
<p>However, after reviewing your post based on the criteria below:</p>
<ul>
<li>Must not promote tribal, ethnic or religious divisiveness at any level</li>
<li>Must not be seen to contravene applicable laws of the country of origin</li>
<li>Must have updated your GFA profile to at least 50% completion.</li>
</ul>
<p>Unfortunately, your event has been declined. Please feel free to edit your event to specification &amp; resubmit for approval</p>
<p>We look forward to working with you to make your event a success.</p>
<p>Best Regards</p>
<p>The GFA Events Team</p>"; 
$subject = 'Event Declined';

 $this->sendMail($rowArray[0]['email'], $message,$subject);
	  }else{
	      
	    echo '';  
	  }
	 
    
	   //echo ''; 
	    
	}
	
	public function filestatusproX(){
	   
	  $id = $this->input->post("id");
	  $file_status = $this->input->post("file_status");
	  $rowArray = $this->admin_model->getInvestorsFileUploadedById($id);
	  $personalDetails =  $this->gfa_model->getInvestorDetails($rowArray['email']);;
	  
	  $data	= 	array(

					'status' => $file_status
					
					
					);
	  
	  $this->admin_model->updateFileInvestorStatus($data, $id);
	  
	  if($file_status =='approved'){
	 $message = "<a href='https://getfundedafrica.com'><img src='https://getfundedafrica.com/images/logo-1.png'></a>

	 <p>
	 Dear  ".$personalDetails[0]['Contact_Name'].",
	 </p>

	 <p>
	 This is to inform you that we have approved your e-KYC documentation.

	 </p><br>
	 
	 <p>
	 If you have general questions about our [products], check out our [knowledge_base] for walkthroughs and answers to FAQs. (if we don't have this part ready, we can skip it for now and just direct them to info@getfundedafrica.com)

	 </p><br>

	 
	 <p>
	 If you have any additional information that you think will help us to assist you, please feel free to reply to this email [<a href='mailto:investors@getfundedafrica.com'>investors@getfundedafrica.com</a>]</p>
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

$subject = 'Approved — RE: [Your e-KYC documentation]

';
// $rowArray[0]['Email']
 //$this->sendMail($rowArray[0]['Contact_Email'], $message,$subject);
	      
	  }elseif($file_status =='declined'){
	      
	    $message = "<a href='https://getfundedafrica.com'><img src='https://getfundedafrica.com/images/logo-1.png'></a>

        <p>
        Dear  ".$personalDetails[0]['Contact_Name'].",
        </p>

        <p>
        I hope this email finds you well. I am writing to inform you that we have received your ID for our Know Your Customer (KYC) verification process, but unfortunately, it has been rejected.

        </p><br>
        
        <p>
        I understand that this news may be disappointing and frustrating for you. Please know that we take our KYC process very seriously, and it is essential that we have accurate and valid identification information on file for all our customers.


        </p><br>

        <p>
       There could be several reasons why your ID has been rejected, such as blurry or unclear images, incorrect or incomplete information, or an expired ID. Whatever the reason may be, please be assured that our team has thoroughly reviewed your submission and found it to be invalid.


        </p><br>
        <p>
        We kindly request you to resubmit your ID as soon as possible. Please make sure that the images are clear and all the information is accurate and up-to-date. If you have any questions or concerns about the process, please do not hesitate to contact our team by replying to this email [<a href='mailto:investors@getfundedafrica.com'>investors@getfundedafrica.com</a>], and they will be happy to assist you.        </p>
        <p>
        
        Thank you for your cooperation and understanding. We apologize for any inconvenience this may have caused and appreciate your patience in resolving this matter.        </p><br>

        <p>
        Cheerios!<br>

        GetFundedAfrica Team!
        </p>
        <br>
        <p>P/S: let us know when the suggested changes has been made and when can we do a test of the end to end process.</p><br>
        Many thanks<br>
        Diana
        ";
$subject = 'Action Required — RE: [Your e-KYC application has been Denied]';

 $this->sendMail($rowArray[0]['Contact_Email'], $message,$subject); 
	  }else{
	      
	    echo '';  
	  }
	 
    
	   //echo ''; 
	    
	}
	
		public function filestatuspro(){
	   
	  $id = $this->input->post("id");
	  $file_status = $this->input->post("file_status");
	  $rowArray = $this->admin_model->getRecentFileUploadedXById($id);
	  $personalDetails =  $this->admin_model->getAllStartUpNByEmail($rowArray[0]['Email']);
	  
	  $data	= 	array(

					'Status' => $file_status
					
					
					);
	  
	  $this->admin_model->updateFileStatus($data, $id);
	  
	  if($file_status =='approved'){
	 $message = "<a href='https://getfundedafrica.com'><img src='https://getfundedafrica.com/images/logo-1.png'></a>

<p>
Congratulations ".$personalDetails[0]['Primary_Contact_Name'].",
</p>

<p>
Your file has been approved. Login to your GFA Account and click Dealroom to share with investors. 
</p>

<p>
For further assistance, go to https://estore.getfundedafrica.com/product/pitchdeck-development to place order for help to develop your pitch deck or contact media@getfundedafrica for your start-up bio video.  
</p>

<p>
Thank you
</p>";

$subject = 'File Approved';
// $rowArray[0]['Email']
 $this->sendMail($rowArray[0]['Email'], $message,$subject);
	      
	  }elseif($file_status =='declined'){
	      
	   $message = "<a href='https://getfundedafrica.com'><img src='https://getfundedafrica.com/images/logo-1.png'></a>

<p>
Noops ".$personalDetails[0]['Primary_Contact_Name'].",
</p>

<p>
Your file has been declined. 
</p>

<p>
For further assistance, go to https://estore.getfundedafrica.com/product/pitchdeck-development to place order for help to develop your pitch deck or contact media@getfundedafrica for your start-up bio video.  
</p>

<p>
Thank you
</p>"; 
$subject = 'File Declined';

 $this->sendMail($rowArray[0]['Email'], $message,$subject);
	  }else{
	      
	    echo '';  
	  }
	 
    
	   //echo ''; 
	    
	}

	public function startupProfilepro()

	{
		 $this->load->library('upload');
		
		$email = $this->input->post("email") ;
		$name = $this->input->post("founderName");
		$organization = $this->input->post("organization");
		$phoneNumber = $this->input->post("phoneNumber");
		$address = $this->input->post("address");
		$website = $this->input->post("website");
		$startup_country = $this->input->post("startup_country");
		$industry = $this->input->post("industry");
		$current_stage = $this->input->post("current_stage");
		$Implementation_stage = $this->input->post("Implementation_stage");
		$fund_to_raise = $this->input->post("fund_to_raise");
		$about = $this->input->post("about");
		$facebook = $this->input->post("facebook");
		$linkedIn = $this->input->post("linkedIn");
		$country = $this->input->post("country");
		$state = $this->input->post("state");
		$zipCode = $this->input->post("zipCode");
		$year_founded = $this->input->post("year_founded");
		$Revenue = $this->input->post("revenue");
		$NoOfEmployees = $this->input->post("NoOfEmployees");
		$Hear_Us = $this->input->post("Hear_Us");
		$OperatingRegions = $this->input->post("OperatingRegions");
		$Designation = $this->input->post("designation");
		$coFounderName = $this->input->post("coFounderName");
		$coDesignation = $this->input->post("coDesignation");
		$Event_Name = $this->input->post("Event_Name");
		$Youtube_Url = $this->input->post("Youtube_Url");
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
				
				$message = "<a href='https://getfundedafrica.com'><img src='https://getfundedafrica.com/images/logo-1.png'></a>

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

$subject = "GFA Onboarding Welcome";

if(empty($this->admin_model->checkLoginReg($email))){
				$this->admin_model->insertLogin($data_login);
		$this->sendMail($email, $message,$subject);
			}

	
	}	
 
 public function addSubAction()

	{	
	
	

		$ref_id = rand(1,10).time();	
		$package	= $this->input->post("package");
		$subscription	= $this->input->post("subscription");
		

		$subscription_type = $this->input->post("subscription_type");		

		$pricing_desc = $this->input->post("pricing_desc");
		$amount = $this->input->post("amount");
		$details = $this->input->post("details");
		$per_campaign = $this->input->post("per_campaign");
		$per_month = $this->input->post("per_month");
		$maximum_contacts = $this->input->post("maximum_contacts");
		
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
	
	

		$id	= $this->input->post("id");	
		$package	= $this->input->post("package");
		$subscription	= $this->input->post("subscription");
		

		$subscription_type = $this->input->post("subscription_type");		

		$pricing_desc = $this->input->post("pricing_desc");
		$amount = $this->input->post("amount");
		$details = $this->input->post("details");
		$per_campaign = $this->input->post("per_campaign");
		$per_month = $this->input->post("per_month");
		$maximum_contacts = $this->input->post("maximum_contacts");
		
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

$mail->isSMTP();                            // Set mailer to use SMTP
$mail->Host = "mail.getfundedafrica.com";//"smtp.googlemail.com"; //'smtp.gmail.com';//'smtp.gmail.com';             // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                     // Enable SMTP authentication
$mail->Username = "app@getfundedafrica.com";//"info@thenigerdeltasummit.org"; //'nmobilecomms@gmail.com';          // SMTP usernameff
$mail->Password ="XQirbJ2wGqLG"; //"4321assP$";//'nmobile1234'; // SMTP password  4321assP$1234
$mail->SMTPSecure = 'ssl';                  // Enable TLS encryption, `ssl` also accepted
$mail->Port =465;                          // TCP port to connect to

//$mail->setFrom('info@totalcpfa-ng.com');
$mail->From ="app@getfundedafrica.com";
$mail->FromName ="GetFunded Africa";
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

				

				$this->session->set('login_type', $this->encryption->encrypt($profile_requestx[0]['login_type']));


				$encryptedEmail = $this->encryption->encrypt($profile_requestx[0]['email']);
				$this->session->set('email', $encryptedEmail);
				$this->session->set('product',  $this->encryption->encrypt($profile_requestx[0]['product']));


                
                    
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
		// if($this->encryption->decode($this->session->userdata('login_type')) == '' ){ redirect(base_url().'admin/login'); }
		
		$title['page_title'] = "Cohort - Get Funded Africa";
        $data["product"] = $this->encryption->decrypt($this->session->get('product'));
		echo view('admin/header_home',$title);
		echo view('admin/navbar',$title);

		echo view('admin/cohort_harmattan',$data);

		echo view('admin/header_footer');

		

	}

	public function poe_investment()

	{
		// if($this->encryption->decode($this->session->userdata('login_type')) == '' ){ redirect(base_url().'admin/login'); }
		$title['page_title'] = "Cohort - Get Funded Africa";
        $data["product"] = $this->encryption->decrypt($this->session->get('product'));
		$data['segmentValue'] = $this->request->uri->getSegment(3);


		echo view('admin/header_home',$title);
		echo view('admin/navbar',$title);

		echo view('admin/poe_investment',$data);

		echo view('admin/header_footer');

	
	}

	public function all_active_user()

	{
		// if($this->encryption->decode($this->session->userdata('login_type')) == '' ){ redirect(base_url().'admin/login'); }
		$title['page_title'] = "Active User - Get Funded Africa";
		echo view('admin/header_home',$title);
		echo view('admin/navbar',$title);

		echo view('admin/user_activity/all_active_user');

		echo view('admin/header_footer');

	
	}

	public function all_activity()

	{
		// if($this->encryption->decode($this->session->userdata('login_type')) == '' ){ redirect(base_url().'admin/login'); }
		$title['page_title'] = "Active User - Get Funded Africa";
		$data["product"] = $this->encryption->decrypt($this->session->get('product'));
		echo view('admin/header_home',$title);
		echo view('admin/navbar',$title);

		echo view('admin/user_activity/all_activity', $data);

		echo view('admin/header_footer');

	
	}

	

	// public function getfgnalat(){
	// 	$fetchResult = $this->admin_model->getfgnalat();

    //     $this->download_logic('fgnalatactive', $fetchResult);
	// 	// print_r($this->admin_model->getfgnalat());
	// }

	// public function download_logic($filename, $fetchResults){
    //     $filename = "$filename.xls";
    //     header("Content-Type: application/vnd.ms-excel");
    //     header("Content-Disposition: attachment; filename=\"$filename\"");
    //     $isPrintHeader = false;
    //     if (! empty($fetchResults)) {
    //         foreach ($fetchResults as $row) {
    //             if (! $isPrintHeader) {
    //                 echo implode("\t", array_keys($row)) . "\n";
    //                 $isPrintHeader = true;
    //             }
    //             echo implode("\t", array_values($row)) . "\n";
    //         }
    //     }
    //     exit();
    // }

	public function getfgnalat() {

		
		$fetchResult = $this->admin_model->getfgnalat();
		// print_r($fetchResult);
		$this->download_logic('fgnalatactive', $fetchResult);
	}
	
	// public function download_logic($filename, $fetchResults) {

		
	// 	$filename = urlencode("$filename.xls"); // Use XLSX format
	// 	header("Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet");
	// 	header("Content-Disposition: attachment; filename=\"" . rawurlencode($filename) . "\"");
	// 	$isPrintHeader = false;
		
	
	// 	$batchSize = 1000; // Adjust the batch size based on your needs

	// 	for ($i = 0; $i < count($fetchResults); $i += $batchSize) {
	// 		$batch = array_slice($fetchResults, $i, $batchSize);
	// 		print_r($batch);
	// 		// ... your existing code for echoing the batch ...
	// 		ob_flush();
	// 		flush();
	// 	}
	
	// 	exit();
	// }

	public function download_logic($filename, $fetchResults) {
		$filename = urlencode("$filename.xls");
		header("Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet");
		header("Content-Disposition: attachment; filename=\"" . rawurlencode($filename) . "\"");
	
		// Print Excel headers
		echo implode("\t", array_keys((array) $fetchResults[0])) . "\n";
	
		foreach ($fetchResults as $row) {
			// Convert stdClass object to array
			$rowArray = (array) $row;
	
			// Print row values
			echo implode(array_values($rowArray));
			ob_flush();
			flush();
		}
	
		exit();
	}
	

	// public function download_logic($filename, $fetchResults) {
	// 	ob_start(); // Start output buffering
	
	// 	$filename = urlencode("$filename.xlsx"); // Use XLSX format
	// 	header("Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet");
	// 	header("Content-Disposition: attachment; filename=\"$filename\"");
	// 	$isPrintHeader = false;
	
	// 	if (!empty($fetchResults)) {
	// 		foreach ($fetchResults as $row) {
	// 			if (!$isPrintHeader) {
	// 				echo implode("\t", array_keys($row)) . "\n";
	// 				$isPrintHeader = true;
	// 			}
	// 			echo implode("\t", array_values($row)) . "\n";
	// 		}
	// 	}
	
	// 	ob_end_flush(); // End output buffering and flush
	// }
	

		

		

	}
	