<?php

namespace App\Controllers;

class Home extends BaseController
{


    protected $admin_model;
    protected $session;

    public function __construct() {
        //parent::__construct();
       
        $this->admin_model = model('App\Models\AdminModel');

        
        $this->session = \Config\Services::session();

        

    }

    

    public function index()
    {
        $data['page_title'] = 'NISM - Elevate your professional journey.';
        $data['sliders'] = $this->admin_model->getAllSliders();
        $data['abouts'] = $this->admin_model->getAllAbouts();
        $data['vsi_section'] = $this->admin_model->getAllVSIs();
        $data['events'] = $this->admin_model->getAllEvents();
    	$data['core_values'] = $this->admin_model->getAllCoreValues();
        $data['faqs'] = $this->admin_model->getAllFAQs();
    	$data['blogLimitArray'] = $this->admin_model->getLimitBlog();
        
        echo view('header', $data);
        echo view('home', $data);
        echo view('footer');
    }
    
    public function about()
    {
        $data['page_title'] = '';
        $data['abouts'] = $this->admin_model->getAllAbouts();
        $data['vsi_section'] = $this->admin_model->getAllVSIs();
        $data['missionItems'] = $this->admin_model->getAllMissionItems();
        $data['aboutpage'] = $this->admin_model->getAllAboutPage();
		$data['core_values'] = $this->admin_model->getAllCoreValues();
    	$data['about_details'] = $this->admin_model->getAllAboutDetails();
    	$data['partners'] = $this->admin_model->getAllPartners();
    
        echo view('header', $data);
        echo view('about', $data);
        echo view('footer');
    }

    
    public function blog_details($id="")
    {
        $data['page_title'] = '';
		$data['updateBlog'] = $this->admin_model->get_blog_post($id);
    	$data['blogLimitArray'] = $this->admin_model->getLimitBlogExt();
        echo view('header', $data);
        echo view('blog-details', $data);
        echo view('footer');
    }

    public function blog_posts()
    {
        $data['page_title'] = '';
		$data['blogLimitArray'] = $this->admin_model->blog_post();
        echo view('header', $data);
        echo view('blog-posts', $data);
        echo view('footer');
    }

    public function contact()
    {
        $data['page_title'] = '';
        $id = 295029;
        $data['updateContact'] = $this->admin_model->update_contact($id);
        echo view('header', $data);
        echo view('contact', $data);
        echo view('footer');
    }

    public function events()
    {
        $data['page_title'] = '';
        $data['events'] = $this->admin_model->getAllEvents();

        echo view('header', $data);
        echo view('events', $data);
        echo view('footer');
    }

    public function legal()
    {
        $data['page_title'] = '';

        echo view('header', $data);
        echo view('legal', $data);
        echo view('footer');
    }

    public function membership()
    {
        $data['page_title'] = '';
		$data['faqs'] = $this->admin_model->getAllFAQs();
    
        echo view('header', $data);
        echo view('membership', $data);
        echo view('footer');
    }

    public function privacy()
    {
        $data['page_title'] = '';

        echo view('header', $data);
        echo view('privacy', $data);
        echo view('footer');
    }


}
