
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
                  <h2 class="card-title fw-bold mb-1">Welcome to GFA</h2>
                  <p class="card-text mb-2"> <?php if(!empty($message)){ echo $message; }else{ echo "Please sign-in to your account and start the adventure";} ?></p>
                  <form class="auth-login-form mt-2" action="<?php echo base_url(); ?>gfa/signinActionM" method="POST">
                    <div class="mb-1">
                      <label class="form-label" for="login-email">Email</label>
                      <input class="form-control" id="login-email" type="text" name="email" placeholder="name@gmail.com" aria-describedby="login-email" autofocus="" tabindex="1"/>
                    </div>
                    <!--<div class="mb-1">-->
                    <!--  <div class="form-check">-->
                        
                    <!--    <label class="form-check-label" for="remember-me"><a href="<?php echo base_url(); ?>gfa/forgotpassword"><span>Forgot Password</span></a></label>-->
                        
                    <!--  </div>-->
                    <!--</div>-->
                    <button class="btn btn-primary w-100" tabindex="4">Sign in</button>
                  </form>
                   <p class="text-center mt-2"><a href="https://getfundedafrica.com/microsoft/home-5-onepage/index.html"><span>New on our platform? Open an Account</span></a></p>
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

