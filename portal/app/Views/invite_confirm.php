
  <!-- END: Head-->

  <!-- BEGIN: Body-->
  
    <div class="app-content content ">
      <div class="content-overlay"></div>
      <div class="header-navbar-shadow"></div>
      <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
          <div class="auth-wrapper auth-cover">
            <div class="auth-inner row m-0">
              <!-- Brand logo--><a class="brand-logo" href="#">
                <img src="<?php echo base_url(); ?>assets/images/logo/GFA-Logo.png">
               </a>
              <!-- /Brand logo-->
              <!-- Left Text-->
              <div class="d-none d-lg-flex col-lg-8 align-items-center p-5">
                <div class="w-100 d-lg-flex align-items-center justify-content-center px-5"><img class="img-fluid" src="<?php echo base_url(); ?>assets/images/banner/lagos.jpg" alt="Login V2"/></div>
              </div>
              <!-- /Left Text-->
              <!-- Login-->
              <div class="d-flex col-lg-4 align-items-center auth-bg px-2 p-lg-5">
                <div class="col-12 col-sm-8 col-md-6 col-lg-12 px-xl-2 mx-auto">
                  <h3 class="card-title fw-bold mb-1"><span class="avatar-content">
              <i data-feather="user-check" class="font-medium-4"></i>
            </span>   Invite Confrmed</h3>
                  <p class="card-text mb-2"> <?php if(!empty($message)){ echo $message; }else{ echo "Please sign-in to your account and continue...";} ?></p>
             
                   <p class="text-center mt-2"><a href="<?php echo base_url(); ?>gfa/login"><span>Login</span></a> | <a href="https://getfundedafrica.com/customer/register/index"><span>Register</span></a></p>
                  <!--<div class="divider my-2">
                    <div class="divider-text">or</div>
                  </div>
                  <div class="auth-footer-btn d-flex justify-content-center"><a class="btn btn-facebook" href="#"><i data-feather="facebook"></i></a><a class="btn btn-twitter white" href="#"><i data-feather="twitter"></i></a><a class="btn btn-google" href="#"><i data-feather="mail"></i></a><a class="btn btn-github" href="#"><i data-feather="github"></i></a></div>-->
                </div>
              </div>
              <!-- /Login-->
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- END: Content-->

