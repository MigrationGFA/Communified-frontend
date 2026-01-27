 <body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="">

    <!-- BEGIN: Header-->
    <nav class="header-navbar navbar navbar-expand-lg align-items-center floating-nav navbar-light navbar-shadow container-xxl">
      <div class="navbar-container d-flex content">
        <div class="bookmark-wrapper d-flex align-items-center">
          <ul class="nav navbar-nav d-xl-none">
          <a href="https://testnet.getfundedafrica.com/portal/">
            <button class="btn btn-primary w-100">
              <span class="align-middle">Access Dashboard</span>
            </button>
          </a>
            
          </ul>
          <ul class="nav navbar-nav bookmark-icons">
            <li class="nav-item d-lg-block"><a class="nav-link" href="mailto:info@getfundedafrica.com" data-bs-toggle="tooltip" data-bs-placement="bottom" target="_blank"  title="info@getfundedafrica.com"><i class="ficon" data-feather="mail"></i></a></li>
            
            <!--<li class="nav-item d-none d-lg-block"><a class="nav-link" href="gfa-chat.html" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Chat"><i class="ficon" data-feather="message-square"></i></a></li>
            <li class="nav-item d-none d-lg-block"><a class="nav-link" href="gfa-todo.html" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Todo"><i class="ficon" data-feather="check-square"></i></a></li>
          --></ul>
          
        </div>
        <ul class="nav navbar-nav align-items-center ms-auto">


          <!--<li class="nav-item nav-search"><a class="nav-link nav-link-search"><i class="ficon" data-feather="search"></i></a>
            <div class="search-input">
              <div class="search-input-icon"><i data-feather="search"></i></div>
              <input class="form-control input" type="text" placeholder="Explore GFA..." tabindex="-1" data-search="search">
              <div class="search-input-close"><i data-feather="x"></i></div>
              <ul class="search-list search-list-main"></ul>
            </div>
          </li>-->
         
          <li class="nav-item dropdown dropdown-user"><a class="nav-link dropdown-toggle dropdown-user-link" id="dropdown-user" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <div class="user-nav d-sm-flex d-none"><span class="user-name fw-bolder">
                <strong>
                  
                  <?php 
                  
                  $email = $user_email;

                  echo strtoupper($user_name);
                ?>  
              </strong>
                
              </span><span class="user-status">
                  
                  <?php  echo $user_name_contact; ?>
              <?php  
                $showPhoto = "assets/images/uploads/default-avatar.jpg";
              ?>
              </span></div><span class="avatar"><img class="round" src="<?php echo base_url().$showPhoto ?>" alt="avatar" height="40" width="40"><span class="avatar-status-online"></span></span></a>
          </li>
        </ul>
      </div>
    </nav>