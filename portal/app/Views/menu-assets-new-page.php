<body>
<?php 
  $this->gfa_model = model('App\Models\GfaModel');
   ?>
  
  <!-- ?PROD Only: Google Tag Manager (noscript) (Default ThemeSelection: GTM-5DDHKGP, PixInvent: GTM-5J3LMKC) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5DDHKGP" height="0" width="0" style="display: none; visibility: hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
  
  <!-- Layout wrapper -->
<div class="layout-wrapper layout-content-navbar  ">
  <div class="layout-container">

<!-- Menu -->

<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">

  
  <div class="app-brand demo ">
      <a href="gfa/" class="app-brand-link">      
     <img src="<?php echo base_url('public/assets/images/logo/GFA-Logo.png'); ?>" width="100%">
    </a>
  </div>

  <div class="menu-inner-shadow"></div>

  
  
  <ul class="menu-inner py-1">
    <!-- Dashboards -->
    <!--<li class="menu-item">-->
    <!--  <a href="javascript:void(0);" class="menu-link menu-toggle">-->
    <!--    <i class="menu-icon tf-icons ti ti-smart-home"></i>-->
    <!--    <div data-i18n="Dashboards">Dashboards</div>-->
    <!--    <div class="badge bg-primary rounded-pill ms-auto">5</div>-->
    <!--  </a>-->
    <!--  <ul class="menu-sub">-->
    <!--    <li class="menu-item">-->
    <!--      <a href="index.html" class="menu-link">-->
    <!--        <div data-i18n="Analytics">Analytics</div>-->
    <!--      </a>-->
    <!--    </li>-->
    <!--    <li class="menu-item">-->
    <!--      <a href="dashboards-crm.html" class="menu-link">-->
    <!--        <div data-i18n="CRM">CRM</div>-->
    <!--      </a>-->
    <!--    </li>-->
    <!--    <li class="menu-item">-->
    <!--      <a href="app-ecommerce-dashboard.html" class="menu-link">-->
    <!--        <div data-i18n="eCommerce">eCommerce</div>-->
    <!--      </a>-->
    <!--    </li>-->
    <!--    <li class="menu-item">-->
    <!--      <a href="app-logistics-dashboard.html" class="menu-link">-->
    <!--        <div data-i18n="Logistics">Logistics</div>-->
    <!--      </a>-->
    <!--    </li>-->
    <!--    <li class="menu-item active">-->
    <!--      <a href="app-academy-dashboard.html" class="menu-link">-->
    <!--        <div data-i18n="Academy">Academy</div>-->
    <!--      </a>-->
    <!--    </li>-->
    <!--  </ul>-->
    <!--</li>-->

    <!-- Layouts -->
    <!--<li class="menu-item">-->
    <!--  <a href="javascript:void(0);" class="menu-link menu-toggle">-->
    <!--    <i class="menu-icon tf-icons ti ti-layout-sidebar"></i>-->
    <!--    <div data-i18n="Layouts">Layouts</div>-->
    <!--  </a>-->

    <!--  <ul class="menu-sub">-->

    <!--    <li class="menu-item">-->
    <!--      <a href="layouts-collapsed-menu.html" class="menu-link">-->
    <!--        <div data-i18n="Collapsed menu">Collapsed menu</div>-->
    <!--      </a>-->
    <!--    </li>-->
    <!--    <li class="menu-item">-->
    <!--      <a href="layouts-content-navbar.html" class="menu-link">-->
    <!--        <div data-i18n="Content navbar">Content navbar</div>-->
    <!--      </a>-->
    <!--    </li>-->
    <!--    <li class="menu-item">-->
    <!--      <a href="layouts-content-navbar-with-sidebar.html" class="menu-link">-->
    <!--        <div data-i18n="Content nav + Sidebar">Content nav + Sidebar</div>-->
    <!--      </a>-->
    <!--    </li>-->
    <!--    <li class="menu-item">-->
    <!--      <a href="https://demos.pixinvent.com/vuexy-html-admin-template/html/horizontal-menu-template" class="menu-link" target="_blank">-->
    <!--        <div data-i18n="Horizontal">Horizontal</div>-->
    <!--      </a>-->
    <!--    </li>-->
    <!--    <li class="menu-item">-->
    <!--      <a href="layouts-without-menu.html" class="menu-link">-->
    <!--        <div data-i18n="Without menu">Without menu</div>-->
    <!--      </a>-->
    <!--    </li>-->
    <!--    <li class="menu-item">-->
    <!--      <a href="layouts-without-navbar.html" class="menu-link">-->
    <!--        <div data-i18n="Without navbar">Without navbar</div>-->
    <!--      </a>-->
    <!--    </li>-->
    <!--    <li class="menu-item">-->
    <!--      <a href="layouts-fluid.html" class="menu-link">-->
    <!--        <div data-i18n="Fluid">Fluid</div>-->
    <!--      </a>-->
    <!--    </li>-->
    <!--    <li class="menu-item">-->
    <!--      <a href="layouts-container.html" class="menu-link">-->
    <!--        <div data-i18n="Container">Container</div>-->
    <!--      </a>-->
    <!--    </li>-->
    <!--    <li class="menu-item">-->
    <!--      <a href="layouts-blank.html" class="menu-link">-->
    <!--        <div data-i18n="Blank">Blank</div>-->
    <!--      </a>-->
    <!--    </li>-->
    <!--  </ul>-->
    <!--</li>-->

    <!-- Front Pages -->
    <!--<li class="menu-item">-->
    <!--  <a href="javascript:void(0);" class="menu-link menu-toggle">-->
    <!--    <i class='menu-icon tf-icons ti ti-files'></i>-->
    <!--    <div data-i18n="Front Pages">Front Pages</div>-->
    <!--  </a>-->
    <!--  <ul class="menu-sub">-->
    <!--    <li class="menu-item">-->
    <!--      <a href="https://demos.pixinvent.com/vuexy-html-admin-template/html/front-pages/landing-page.html" class="menu-link" target="_blank">-->
    <!--        <div data-i18n="Landing">Landing</div>-->
    <!--      </a>-->
    <!--    </li>-->
    <!--    <li class="menu-item">-->
    <!--      <a href="https://demos.pixinvent.com/vuexy-html-admin-template/html/front-pages/pricing-page.html" class="menu-link" target="_blank">-->
    <!--        <div data-i18n="Pricing">Pricing</div>-->
    <!--      </a>-->
    <!--    </li>-->
    <!--    <li class="menu-item">-->
    <!--      <a href="https://demos.pixinvent.com/vuexy-html-admin-template/html/front-pages/payment-page.html" class="menu-link" target="_blank">-->
    <!--        <div data-i18n="Payment">Payment</div>-->
    <!--      </a>-->
    <!--    </li>-->
    <!--    <li class="menu-item">-->
    <!--      <a href="https://demos.pixinvent.com/vuexy-html-admin-template/html/front-pages/checkout-page.html" class="menu-link" target="_blank">-->
    <!--        <div data-i18n="Checkout">Checkout</div>-->
    <!--      </a>-->
    <!--    </li>-->
    <!--    <li class="menu-item">-->
    <!--      <a href="https://demos.pixinvent.com/vuexy-html-admin-template/html/front-pages/help-center-landing.html" class="menu-link" target="_blank">-->
    <!--        <div data-i18n="Help Center">Help Center</div>-->
    <!--      </a>-->
    <!--    </li>-->
    <!--  </ul>-->
    <!--</li>-->


    <!-- Apps & Pages -->
    <li class="menu-header small text-uppercase">
      <span class="menu-header-text" data-i18n="Apps & Pages">Apps &amp; Pages</span>
    </li>
    <li class="menu-item">
      <a href="<?php echo base_url("gfa/dashboard") ?>" class="menu-link">
        <i class="menu-icon tf-icons ti ti-smart-home"></i>
        <div data-i18n="Dashboard">Dashboard</div>
      </a>
    </li>
     <!--Group Members -->
     <?php
        $stateRd = $StartupArray[0]['State'];
        $thisSkill = $skillArray[0]['profile_extra'];
        // echo $this->gfa_model->displayTotalCourseMember($thisSkill,$stateRd);
        $EmailByCourse = $this->gfa_model->getEmailByCourse($thisSkill);
        $sumMembers = 0;
        // foreach($EmailByCourse as $courseArray){
        //  $sumMembers += $this->gfa_model->displayTotalCourseMember($courseArray['email'],$stateRd);   
        // }
      
     ?>
    <li class="menu-item">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons ti ti-users"></i>
        <div data-i18n="Group Members">Group Members</div>
        <!--<div class="badge bg-primary rounded-pill ms-auto"></div>-->
      </a>
      <ul class="menu-sub">
     <li class="menu-item">
          <a href="<?php echo base_url("gfa/group_members") ?>" class="menu-link">
            <div data-i18n="All">All</div>
          </a>
        </li>
    <?php  $count = 1;      foreach($EmailByCourse as $courseArray){
         $groupDetails = $this->gfa_model->displayCourseGroupMemberLimit($courseArray['email'],$stateRd);
         if($groupDetails[0]['Primary_Contact_Name']!=""){
         ?>
        <li class="menu-item">
          <a href="<?php echo base_url("gfa/profile_details/{$groupDetails[0]['STUP_ID']}") ?>" class="menu-link">
            <div data-i18n="<?php echo ucwords($groupDetails[0]['Primary_Contact_Name']) ?>"><?php echo ucwords($groupDetails[0]['Primary_Contact_Name']) ?></div> 
          </a>
        </li>
    <?php  if($count++ == 5){ break; } }  }  ?>    
        
        
      </ul>
    </li>
    <li class="menu-item">
      <a href="<?php echo base_url('gfa/signoutAction'); ?>" class="menu-link">
        <i class="menu-icon tf-icons ti ti-logout"></i>
        <div data-i18n="Logout">Logout</div>
      </a>
    </li>
    <!--<li class="menu-item">-->
    <!--  <a href="app-calendar.html" class="menu-link">-->
    <!--    <i class="menu-icon tf-icons ti ti-calendar"></i>-->
    <!--    <div data-i18n="Calendar">Calendar</div>-->
    <!--  </a>-->
    <!--</li>-->
    <!--<li class="menu-item">-->
    <!--  <a href="app-kanban.html" class="menu-link">-->
    <!--    <i class="menu-icon tf-icons ti ti-layout-kanban"></i>-->
    <!--    <div data-i18n="Kanban">Kanban</div>-->
    <!--  </a>-->
    <!--</li>-->
    <!-- e-commerce-app menu start -->
    <!--<li class="menu-item">-->
    <!--  <a href="javascript:void(0);" class="menu-link menu-toggle">-->
    <!--    <i class='menu-icon tf-icons ti ti-shopping-cart'></i>-->
    <!--    <div data-i18n="eCommerce">eCommerce</div>-->
    <!--  </a>-->
    <!--  <ul class="menu-sub">-->
    <!--    <li class="menu-item">-->
    <!--      <a href="app-ecommerce-dashboard.html" class="menu-link">-->
    <!--        <div data-i18n="Dashboard">Dashboard</div>-->
    <!--      </a>-->
    <!--    </li>-->
    <!--    <li class="menu-item">-->
    <!--      <a href="javascript:void(0);" class="menu-link menu-toggle">-->
    <!--        <div data-i18n="Products">Products</div>-->
    <!--      </a>-->
    <!--      <ul class="menu-sub">-->
    <!--        <li class="menu-item">-->
    <!--          <a href="app-ecommerce-product-list.html" class="menu-link">-->
    <!--            <div data-i18n="Product List">Product List</div>-->
    <!--          </a>-->
    <!--        </li>-->
    <!--        <li class="menu-item">-->
    <!--          <a href="app-ecommerce-product-add.html" class="menu-link">-->
    <!--            <div data-i18n="Add Product">Add Product</div>-->
    <!--          </a>-->
    <!--        </li>-->
    <!--        <li class="menu-item">-->
    <!--          <a href="app-ecommerce-category-list.html" class="menu-link">-->
    <!--            <div data-i18n="Category List">Category List</div>-->
    <!--          </a>-->
    <!--        </li>-->
    <!--      </ul>-->
    <!--    </li>-->
    <!--    <li class="menu-item">-->
    <!--      <a href="javascript:void(0);" class="menu-link menu-toggle">-->
    <!--        <div data-i18n="Order">Order</div>-->
    <!--      </a>-->
    <!--      <ul class="menu-sub">-->
    <!--        <li class="menu-item">-->
    <!--          <a href="app-ecommerce-order-list.html" class="menu-link">-->
    <!--            <div data-i18n="Order List">Order List</div>-->
    <!--          </a>-->
    <!--        </li>-->
    <!--        <li class="menu-item">-->
    <!--          <a href="app-ecommerce-order-details.html" class="menu-link">-->
    <!--            <div data-i18n="Order Details">Order Details</div>-->
    <!--          </a>-->
    <!--        </li>-->
    <!--      </ul>-->
    <!--    </li>-->
    <!--    <li class="menu-item">-->
    <!--      <a href="javascript:void(0);" class="menu-link menu-toggle">-->
    <!--        <div data-i18n="Customer">Customer</div>-->
    <!--      </a>-->
    <!--      <ul class="menu-sub">-->
    <!--        <li class="menu-item">-->
    <!--          <a href="app-ecommerce-customer-all.html" class="menu-link">-->
    <!--            <div data-i18n="All Customers">All Customers</div>-->
    <!--          </a>-->
    <!--        </li>-->
    <!--        <li class="menu-item">-->
    <!--          <a href="javascript:void(0);" class="menu-link menu-toggle">-->
    <!--            <div data-i18n="Customer Details">Customer Details</div>-->
    <!--          </a>-->
    <!--          <ul class="menu-sub">-->
    <!--            <li class="menu-item">-->
    <!--              <a href="app-ecommerce-customer-details-overview.html" class="menu-link">-->
    <!--                <div data-i18n="Overview">Overview</div>-->
    <!--              </a>-->
    <!--            </li>-->
    <!--            <li class="menu-item">-->
    <!--              <a href="app-ecommerce-customer-details-security.html" class="menu-link">-->
    <!--                <div data-i18n="Security">Security</div>-->
    <!--              </a>-->
    <!--            </li>-->
    <!--            <li class="menu-item">-->
    <!--              <a href="app-ecommerce-customer-details-billing.html" class="menu-link">-->
    <!--                <div data-i18n="Address & Billing">Address & Billing</div>-->
    <!--              </a>-->
    <!--            </li>-->
    <!--            <li class="menu-item">-->
    <!--              <a href="app-ecommerce-customer-details-notifications.html" class="menu-link">-->
    <!--                <div data-i18n="Notifications">Notifications</div>-->
    <!--              </a>-->
    <!--            </li>-->

    <!--          </ul>-->
    <!--        </li>-->
    <!--      </ul>-->
    <!--    </li>-->
    <!--    <li class="menu-item">-->
    <!--      <a href="app-ecommerce-manage-reviews.html" class="menu-link">-->
    <!--        <div data-i18n="Manage Reviews">Manage Reviews</div>-->
    <!--      </a>-->
    <!--    </li>-->
    <!--    <li class="menu-item">-->
    <!--      <a href="app-ecommerce-referral.html" class="menu-link">-->
    <!--        <div data-i18n="Referrals">Referrals</div>-->
    <!--      </a>-->
    <!--    </li>-->
    <!--    <li class="menu-item">-->
    <!--      <a href="javascript:void(0);" class="menu-link menu-toggle">-->
    <!--        <div data-i18n="Settings">Settings</div>-->
    <!--      </a>-->
    <!--      <ul class="menu-sub">-->
    <!--        <li class="menu-item">-->
    <!--          <a href="app-ecommerce-settings-detail.html" class="menu-link">-->
    <!--            <div data-i18n="Store details">Store details</div>-->
    <!--          </a>-->
    <!--        </li>-->
    <!--        <li class="menu-item">-->
    <!--          <a href="app-ecommerce-settings-payments.html" class="menu-link">-->
    <!--            <div data-i18n="Payments">Payments</div>-->
    <!--          </a>-->
    <!--        </li>-->
    <!--        <li class="menu-item">-->
    <!--          <a href="app-ecommerce-settings-checkout.html" class="menu-link">-->
    <!--            <div data-i18n="Checkout">Checkout</div>-->
    <!--          </a>-->
    <!--        </li>-->
    <!--        <li class="menu-item">-->
    <!--          <a href="app-ecommerce-settings-shipping.html" class="menu-link">-->
    <!--            <div data-i18n="Shipping & Delivery">Shipping & Delivery</div>-->
    <!--          </a>-->
    <!--        </li>-->
    <!--        <li class="menu-item">-->
    <!--          <a href="app-ecommerce-settings-locations.html" class="menu-link">-->
    <!--            <div data-i18n="Locations">Locations</div>-->
    <!--          </a>-->
    <!--        </li>-->
    <!--        <li class="menu-item">-->
    <!--          <a href="app-ecommerce-settings-notifications.html" class="menu-link">-->
    <!--            <div data-i18n="Notifications">Notifications</div>-->
    <!--          </a>-->
    <!--        </li>-->
    <!--      </ul>-->
    <!--    </li>-->
    <!--  </ul>-->
    <!--</li>-->
    <!-- e-commerce-app menu end -->
    <!-- Academy menu start -->
    <!--<li class="menu-item active open">-->
    <!--  <a href="javascript:void(0);" class="menu-link menu-toggle">-->
    <!--    <i class='menu-icon tf-icons ti ti-book'></i>-->
    <!--    <div data-i18n="Academy">Academy</div>-->
    <!--  </a>-->
    <!--  <ul class="menu-sub">-->
    <!--    <li class="menu-item active">-->
    <!--      <a href="app-academy-dashboard.html" class="menu-link">-->
    <!--        <div data-i18n="Dashboard">Dashboard</div>-->
    <!--      </a>-->
    <!--    </li>-->
    <!--    <li class="menu-item">-->
    <!--      <a href="app-academy-course.html" class="menu-link">-->
    <!--        <div data-i18n="My Course">My Course</div>-->
    <!--      </a>-->
    <!--    </li>-->
    <!--    <li class="menu-item">-->
    <!--      <a href="app-academy-course-details.html" class="menu-link">-->
    <!--        <div data-i18n="Course Details">Course Details</div>-->
    <!--      </a>-->
    <!--    </li>-->
    <!--  </ul>-->
    <!--</li>-->
    <!-- Academy menu end -->
    <!--<li class="menu-item">-->
    <!--  <a href="javascript:void(0);" class="menu-link menu-toggle">-->
    <!--    <i class='menu-icon tf-icons ti ti-truck'></i>-->
    <!--    <div data-i18n="Logistics">Logistics</div>-->
    <!--  </a>-->
    <!--  <ul class="menu-sub">-->
    <!--    <li class="menu-item">-->
    <!--      <a href="app-logistics-dashboard.html" class="menu-link">-->
    <!--        <div data-i18n="Dashboard">Dashboard</div>-->
    <!--      </a>-->
    <!--    </li>-->
    <!--    <li class="menu-item">-->
    <!--      <a href="app-logistics-fleet.html" class="menu-link">-->
    <!--        <div data-i18n="Fleet">Fleet</div>-->
    <!--      </a>-->
    <!--    </li>-->
    <!--  </ul>-->
    <!--</li>-->
    <!--<li class="menu-item">-->
    <!--  <a href="javascript:void(0);" class="menu-link menu-toggle">-->
    <!--    <i class='menu-icon tf-icons ti ti-file-dollar'></i>-->
    <!--    <div data-i18n="Invoice">Invoice</div>-->
    <!--    <div class="badge bg-danger rounded-pill ms-auto">4</div>-->
    <!--  </a>-->
    <!--  <ul class="menu-sub">-->
    <!--    <li class="menu-item">-->
    <!--      <a href="app-invoice-list.html" class="menu-link">-->
    <!--        <div data-i18n="List">List</div>-->
    <!--      </a>-->
    <!--    </li>-->
    <!--    <li class="menu-item">-->
    <!--      <a href="app-invoice-preview.html" class="menu-link">-->
    <!--        <div data-i18n="Preview">Preview</div>-->
    <!--      </a>-->
    <!--    </li>-->
    <!--    <li class="menu-item">-->
    <!--      <a href="app-invoice-edit.html" class="menu-link">-->
    <!--        <div data-i18n="Edit">Edit</div>-->
    <!--      </a>-->
    <!--    </li>-->
    <!--    <li class="menu-item">-->
    <!--      <a href="app-invoice-add.html" class="menu-link">-->
    <!--        <div data-i18n="Add">Add</div>-->
    <!--      </a>-->
    <!--    </li>-->
    <!--  </ul>-->
    <!--</li>-->
    <!--<li class="menu-item">-->
    <!--  <a href="javascript:void(0);" class="menu-link menu-toggle">-->
    <!--    <i class="menu-icon tf-icons ti ti-users"></i>-->
    <!--    <div data-i18n="Users">Users</div>-->
    <!--  </a>-->
    <!--  <ul class="menu-sub">-->
    <!--    <li class="menu-item">-->
    <!--      <a href="app-user-list.html" class="menu-link">-->
    <!--        <div data-i18n="List">List</div>-->
    <!--      </a>-->
    <!--    </li>-->

    <!--    <li class="menu-item">-->
    <!--      <a href="javascript:void(0);" class="menu-link menu-toggle">-->
    <!--        <div data-i18n="View">View</div>-->
    <!--      </a>-->
    <!--      <ul class="menu-sub">-->
    <!--        <li class="menu-item">-->
    <!--          <a href="app-user-view-account.html" class="menu-link">-->
    <!--            <div data-i18n="Account">Account</div>-->
    <!--          </a>-->
    <!--        </li>-->
    <!--        <li class="menu-item">-->
    <!--          <a href="app-user-view-security.html" class="menu-link">-->
    <!--            <div data-i18n="Security">Security</div>-->
    <!--          </a>-->
    <!--        </li>-->
    <!--        <li class="menu-item">-->
    <!--          <a href="app-user-view-billing.html" class="menu-link">-->
    <!--            <div data-i18n="Billing & Plans">Billing & Plans</div>-->
    <!--          </a>-->
    <!--        </li>-->
    <!--        <li class="menu-item">-->
    <!--          <a href="app-user-view-notifications.html" class="menu-link">-->
    <!--            <div data-i18n="Notifications">Notifications</div>-->
    <!--          </a>-->
    <!--        </li>-->
    <!--        <li class="menu-item">-->
    <!--          <a href="app-user-view-connections.html" class="menu-link">-->
    <!--            <div data-i18n="Connections">Connections</div>-->
    <!--          </a>-->
    <!--        </li>-->
    <!--      </ul>-->
    <!--    </li>-->
    <!--  </ul>-->
    <!--</li>-->
    <!--<li class="menu-item">-->
    <!--  <a href="javascript:void(0);" class="menu-link menu-toggle">-->
    <!--    <i class='menu-icon tf-icons ti ti-settings'></i>-->
    <!--    <div data-i18n="Roles & Permissions">Roles & Permissions</div>-->
    <!--  </a>-->
    <!--  <ul class="menu-sub">-->
    <!--    <li class="menu-item">-->
    <!--      <a href="app-access-roles.html" class="menu-link">-->
    <!--        <div data-i18n="Roles">Roles</div>-->
    <!--      </a>-->
    <!--    </li>-->
    <!--    <li class="menu-item">-->
    <!--      <a href="app-access-permission.html" class="menu-link">-->
    <!--        <div data-i18n="Permission">Permission</div>-->
    <!--      </a>-->
    <!--    </li>-->
    <!--  </ul>-->
    <!--</li>-->
    <!--<li class="menu-item">-->
    <!--  <a href="javascript:void(0);" class="menu-link menu-toggle">-->
    <!--    <i class="menu-icon tf-icons ti ti-file"></i>-->
    <!--    <div data-i18n="Pages">Pages</div>-->
    <!--  </a>-->
    <!--  <ul class="menu-sub">-->
    <!--    <li class="menu-item">-->
    <!--      <a href="javascript:void(0);" class="menu-link menu-toggle">-->
    <!--        <div data-i18n="User Profile">User Profile</div>-->
    <!--      </a>-->
    <!--      <ul class="menu-sub">-->
    <!--        <li class="menu-item">-->
    <!--          <a href="pages-profile-user.html" class="menu-link">-->
    <!--            <div data-i18n="Profile">Profile</div>-->
    <!--          </a>-->
    <!--        </li>-->
    <!--        <li class="menu-item">-->
    <!--          <a href="pages-profile-teams.html" class="menu-link">-->
    <!--            <div data-i18n="Teams">Teams</div>-->
    <!--          </a>-->
    <!--        </li>-->
    <!--        <li class="menu-item">-->
    <!--          <a href="pages-profile-projects.html" class="menu-link">-->
    <!--            <div data-i18n="Projects">Projects</div>-->
    <!--          </a>-->
    <!--        </li>-->
    <!--        <li class="menu-item">-->
    <!--          <a href="pages-profile-connections.html" class="menu-link">-->
    <!--            <div data-i18n="Connections">Connections</div>-->
    <!--          </a>-->
    <!--        </li>-->
    <!--      </ul>-->
    <!--    </li>-->
    <!--    <li class="menu-item">-->
    <!--      <a href="javascript:void(0);" class="menu-link menu-toggle">-->
    <!--        <div data-i18n="Account Settings">Account Settings</div>-->
    <!--      </a>-->
    <!--      <ul class="menu-sub">-->
    <!--        <li class="menu-item">-->
    <!--          <a href="pages-account-settings-account.html" class="menu-link">-->
    <!--            <div data-i18n="Account">Account</div>-->
    <!--          </a>-->
    <!--        </li>-->
    <!--        <li class="menu-item">-->
    <!--          <a href="pages-account-settings-security.html" class="menu-link">-->
    <!--            <div data-i18n="Security">Security</div>-->
    <!--          </a>-->
    <!--        </li>-->
    <!--        <li class="menu-item">-->
    <!--          <a href="pages-account-settings-billing.html" class="menu-link">-->
    <!--            <div data-i18n="Billing & Plans">Billing & Plans</div>-->
    <!--          </a>-->
    <!--        </li>-->
    <!--        <li class="menu-item">-->
    <!--          <a href="pages-account-settings-notifications.html" class="menu-link">-->
    <!--            <div data-i18n="Notifications">Notifications</div>-->
    <!--          </a>-->
    <!--        </li>-->
    <!--        <li class="menu-item">-->
    <!--          <a href="pages-account-settings-connections.html" class="menu-link">-->
    <!--            <div data-i18n="Connections">Connections</div>-->
    <!--          </a>-->
    <!--        </li>-->
    <!--      </ul>-->
    <!--    </li>-->
    <!--    <li class="menu-item">-->
    <!--      <a href="pages-faq.html" class="menu-link">-->
    <!--        <div data-i18n="FAQ">FAQ</div>-->
    <!--      </a>-->
    <!--    </li>-->
    <!--    <li class="menu-item">-->
    <!--      <a href="pages-pricing.html" class="menu-link">-->
    <!--        <div data-i18n="Pricing">Pricing</div>-->
    <!--      </a>-->
    <!--    </li>-->
    <!--    <li class="menu-item">-->
    <!--      <a href="javascript:void(0);" class="menu-link menu-toggle">-->
    <!--        <div data-i18n="Misc">Misc</div>-->
    <!--      </a>-->
    <!--      <ul class="menu-sub">-->
    <!--        <li class="menu-item">-->
    <!--          <a href="pages-misc-error.html" class="menu-link" target="_blank">-->
    <!--            <div data-i18n="Error">Error</div>-->
    <!--          </a>-->
    <!--        </li>-->
    <!--        <li class="menu-item">-->
    <!--          <a href="pages-misc-under-maintenance.html" class="menu-link" target="_blank">-->
    <!--            <div data-i18n="Under Maintenance">Under Maintenance</div>-->
    <!--          </a>-->
    <!--        </li>-->
    <!--        <li class="menu-item">-->
    <!--          <a href="pages-misc-comingsoon.html" class="menu-link" target="_blank">-->
    <!--            <div data-i18n="Coming Soon">Coming Soon</div>-->
    <!--          </a>-->
    <!--        </li>-->
    <!--        <li class="menu-item">-->
    <!--          <a href="pages-misc-not-authorized.html" class="menu-link" target="_blank">-->
    <!--            <div data-i18n="Not Authorized">Not Authorized</div>-->
    <!--          </a>-->
    <!--        </li>-->
    <!--      </ul>-->
    <!--    </li>-->
    <!--  </ul>-->
    <!--</li>-->
    <!--<li class="menu-item">-->
    <!--  <a href="javascript:void(0);" class="menu-link menu-toggle">-->
    <!--    <i class="menu-icon tf-icons ti ti-lock"></i>-->
    <!--    <div data-i18n="Authentications">Authentications</div>-->
    <!--  </a>-->
    <!--  <ul class="menu-sub">-->
    <!--    <li class="menu-item">-->
    <!--      <a href="javascript:void(0);" class="menu-link menu-toggle">-->
    <!--        <div data-i18n="Login">Login</div>-->
    <!--      </a>-->
    <!--      <ul class="menu-sub">-->
    <!--        <li class="menu-item">-->
    <!--          <a href="auth-login-basic.html" class="menu-link" target="_blank">-->
    <!--            <div data-i18n="Basic">Basic</div>-->
    <!--          </a>-->
    <!--        </li>-->
    <!--        <li class="menu-item">-->
    <!--          <a href="auth-login-cover.html" class="menu-link" target="_blank">-->
    <!--            <div data-i18n="Cover">Cover</div>-->
    <!--          </a>-->
    <!--        </li>-->
    <!--      </ul>-->
    <!--    </li>-->
    <!--    <li class="menu-item">-->
    <!--      <a href="javascript:void(0);" class="menu-link menu-toggle">-->
    <!--        <div data-i18n="Register">Register</div>-->
    <!--      </a>-->
    <!--      <ul class="menu-sub">-->
    <!--        <li class="menu-item">-->
    <!--          <a href="auth-register-basic.html" class="menu-link" target="_blank">-->
    <!--            <div data-i18n="Basic">Basic</div>-->
    <!--          </a>-->
    <!--        </li>-->
    <!--        <li class="menu-item">-->
    <!--          <a href="auth-register-cover.html" class="menu-link" target="_blank">-->
    <!--            <div data-i18n="Cover">Cover</div>-->
    <!--          </a>-->
    <!--        </li>-->
    <!--        <li class="menu-item">-->
    <!--          <a href="auth-register-multisteps.html" class="menu-link" target="_blank">-->
    <!--            <div data-i18n="Multi-steps">Multi-steps</div>-->
    <!--          </a>-->
    <!--        </li>-->
    <!--      </ul>-->
    <!--    </li>-->
    <!--    <li class="menu-item">-->
    <!--      <a href="javascript:void(0);" class="menu-link menu-toggle">-->
    <!--        <div data-i18n="Verify Email">Verify Email</div>-->
    <!--      </a>-->
    <!--      <ul class="menu-sub">-->
    <!--        <li class="menu-item">-->
    <!--          <a href="auth-verify-email-basic.html" class="menu-link" target="_blank">-->
    <!--            <div data-i18n="Basic">Basic</div>-->
    <!--          </a>-->
    <!--        </li>-->
    <!--        <li class="menu-item">-->
    <!--          <a href="auth-verify-email-cover.html" class="menu-link" target="_blank">-->
    <!--            <div data-i18n="Cover">Cover</div>-->
    <!--          </a>-->
    <!--        </li>-->
    <!--      </ul>-->
    <!--    </li>-->
    <!--    <li class="menu-item">-->
    <!--      <a href="javascript:void(0);" class="menu-link menu-toggle">-->
    <!--        <div data-i18n="Reset Password">Reset Password</div>-->
    <!--      </a>-->
    <!--      <ul class="menu-sub">-->
    <!--        <li class="menu-item">-->
    <!--          <a href="auth-reset-password-basic.html" class="menu-link" target="_blank">-->
    <!--            <div data-i18n="Basic">Basic</div>-->
    <!--          </a>-->
    <!--        </li>-->
    <!--        <li class="menu-item">-->
    <!--          <a href="auth-reset-password-cover.html" class="menu-link" target="_blank">-->
    <!--            <div data-i18n="Cover">Cover</div>-->
    <!--          </a>-->
    <!--        </li>-->
    <!--      </ul>-->
    <!--    </li>-->
    <!--    <li class="menu-item">-->
    <!--      <a href="javascript:void(0);" class="menu-link menu-toggle">-->
    <!--        <div data-i18n="Forgot Password">Forgot Password</div>-->
    <!--      </a>-->
    <!--      <ul class="menu-sub">-->
    <!--        <li class="menu-item">-->
    <!--          <a href="auth-forgot-password-basic.html" class="menu-link" target="_blank">-->
    <!--            <div data-i18n="Basic">Basic</div>-->
    <!--          </a>-->
    <!--        </li>-->
    <!--        <li class="menu-item">-->
    <!--          <a href="auth-forgot-password-cover.html" class="menu-link" target="_blank">-->
    <!--            <div data-i18n="Cover">Cover</div>-->
    <!--          </a>-->
    <!--        </li>-->
    <!--      </ul>-->
    <!--    </li>-->
    <!--    <li class="menu-item">-->
    <!--      <a href="javascript:void(0);" class="menu-link menu-toggle">-->
    <!--        <div data-i18n="Two Steps">Two Steps</div>-->
    <!--      </a>-->
    <!--      <ul class="menu-sub">-->
    <!--        <li class="menu-item">-->
    <!--          <a href="auth-two-steps-basic.html" class="menu-link" target="_blank">-->
    <!--            <div data-i18n="Basic">Basic</div>-->
    <!--          </a>-->
    <!--        </li>-->
    <!--        <li class="menu-item">-->
    <!--          <a href="auth-two-steps-cover.html" class="menu-link" target="_blank">-->
    <!--            <div data-i18n="Cover">Cover</div>-->
    <!--          </a>-->
    <!--        </li>-->
    <!--      </ul>-->
    <!--    </li>-->
    <!--  </ul>-->
    <!--</li>-->
    <!--<li class="menu-item">-->
    <!--  <a href="javascript:void(0);" class="menu-link menu-toggle">-->
    <!--    <i class="menu-icon tf-icons ti ti-forms"></i>-->
    <!--    <div data-i18n="Wizard Examples">Wizard Examples</div>-->
    <!--  </a>-->
    <!--  <ul class="menu-sub">-->
    <!--    <li class="menu-item">-->
    <!--      <a href="wizard-ex-checkout.html" class="menu-link">-->
    <!--        <div data-i18n="Checkout">Checkout</div>-->
    <!--      </a>-->
    <!--    </li>-->
    <!--    <li class="menu-item">-->
    <!--      <a href="wizard-ex-property-listing.html" class="menu-link">-->
    <!--        <div data-i18n="Property Listing">Property Listing</div>-->
    <!--      </a>-->
    <!--    </li>-->
    <!--    <li class="menu-item">-->
    <!--      <a href="wizard-ex-create-deal.html" class="menu-link">-->
    <!--        <div data-i18n="Create Deal">Create Deal</div>-->
    <!--      </a>-->
    <!--    </li>-->
    <!--  </ul>-->
    <!--</li>-->
    <!--<li class="menu-item">-->
    <!--  <a href="modal-examples.html" class="menu-link">-->
    <!--    <i class="menu-icon tf-icons ti ti-square"></i>-->
    <!--    <div data-i18n="Modal Examples">Modal Examples</div>-->
    <!--  </a>-->
    <!--</li>-->

    <!-- Components -->
    <!--<li class="menu-header small text-uppercase">-->
    <!--  <span class="menu-header-text" data-i18n="Components">Components</span>-->
    <!--</li>-->
    <!-- Cards -->
    <!--<li class="menu-item">-->
    <!--  <a href="javascript:void(0);" class="menu-link menu-toggle">-->
    <!--    <i class="menu-icon tf-icons ti ti-id"></i>-->
    <!--    <div data-i18n="Cards">Cards</div>-->
    <!--    <div class="badge bg-primary rounded-pill ms-auto">6</div>-->
    <!--  </a>-->
    <!--  <ul class="menu-sub">-->
    <!--    <li class="menu-item">-->
    <!--      <a href="cards-basic.html" class="menu-link">-->
    <!--        <div data-i18n="Basic">Basic</div>-->
    <!--      </a>-->
    <!--    </li>-->
    <!--    <li class="menu-item">-->
    <!--      <a href="cards-advance.html" class="menu-link">-->
    <!--        <div data-i18n="Advance">Advance</div>-->
    <!--      </a>-->
    <!--    </li>-->
    <!--    <li class="menu-item">-->
    <!--      <a href="cards-statistics.html" class="menu-link">-->
    <!--        <div data-i18n="Statistics">Statistics</div>-->
    <!--      </a>-->
    <!--    </li>-->
    <!--    <li class="menu-item">-->
    <!--      <a href="cards-analytics.html" class="menu-link">-->
    <!--        <div data-i18n="Analytics">Analytics</div>-->
    <!--      </a>-->
    <!--    </li>-->
    <!--    <li class="menu-item">-->
    <!--      <a href="cards-actions.html" class="menu-link">-->
    <!--        <div data-i18n="Actions">Actions</div>-->
    <!--      </a>-->
    <!--    </li>-->
    <!--  </ul>-->
    <!--</li>-->
    <!-- User interface -->
    <!--<li class="menu-item">-->
    <!--  <a href="javascript:void(0)" class="menu-link menu-toggle">-->
    <!--    <i class="menu-icon tf-icons ti ti-color-swatch"></i>-->
    <!--    <div data-i18n="User interface">User interface</div>-->
    <!--  </a>-->
    <!--  <ul class="menu-sub">-->
    <!--    <li class="menu-item">-->
    <!--      <a href="ui-accordion.html" class="menu-link">-->
    <!--        <div data-i18n="Accordion">Accordion</div>-->
    <!--      </a>-->
    <!--    </li>-->
    <!--    <li class="menu-item">-->
    <!--      <a href="ui-alerts.html" class="menu-link">-->
    <!--        <div data-i18n="Alerts">Alerts</div>-->
    <!--      </a>-->
    <!--    </li>-->
    <!--    <li class="menu-item">-->
    <!--      <a href="ui-badges.html" class="menu-link">-->
    <!--        <div data-i18n="Badges">Badges</div>-->
    <!--      </a>-->
    <!--    </li>-->
    <!--    <li class="menu-item">-->
    <!--      <a href="ui-buttons.html" class="menu-link">-->
    <!--        <div data-i18n="Buttons">Buttons</div>-->
    <!--      </a>-->
    <!--    </li>-->
    <!--    <li class="menu-item">-->
    <!--      <a href="ui-carousel.html" class="menu-link">-->
    <!--        <div data-i18n="Carousel">Carousel</div>-->
    <!--      </a>-->
    <!--    </li>-->
    <!--    <li class="menu-item">-->
    <!--      <a href="ui-collapse.html" class="menu-link">-->
    <!--        <div data-i18n="Collapse">Collapse</div>-->
    <!--      </a>-->
    <!--    </li>-->
    <!--    <li class="menu-item">-->
    <!--      <a href="ui-dropdowns.html" class="menu-link">-->
    <!--        <div data-i18n="Dropdowns">Dropdowns</div>-->
    <!--      </a>-->
    <!--    </li>-->
    <!--    <li class="menu-item">-->
    <!--      <a href="ui-footer.html" class="menu-link">-->
    <!--        <div data-i18n="Footer">Footer</div>-->
    <!--      </a>-->
    <!--    </li>-->
    <!--    <li class="menu-item">-->
    <!--      <a href="ui-list-groups.html" class="menu-link">-->
    <!--        <div data-i18n="List Groups">List groups</div>-->
    <!--      </a>-->
    <!--    </li>-->
    <!--    <li class="menu-item">-->
    <!--      <a href="ui-modals.html" class="menu-link">-->
    <!--        <div data-i18n="Modals">Modals</div>-->
    <!--      </a>-->
    <!--    </li>-->
    <!--    <li class="menu-item">-->
    <!--      <a href="ui-navbar.html" class="menu-link">-->
    <!--        <div data-i18n="Navbar">Navbar</div>-->
    <!--      </a>-->
    <!--    </li>-->
    <!--    <li class="menu-item">-->
    <!--      <a href="ui-offcanvas.html" class="menu-link">-->
    <!--        <div data-i18n="Offcanvas">Offcanvas</div>-->
    <!--      </a>-->
    <!--    </li>-->
    <!--    <li class="menu-item">-->
    <!--      <a href="ui-pagination-breadcrumbs.html" class="menu-link">-->
    <!--        <div data-i18n="Pagination & Breadcrumbs">Pagination &amp; Breadcrumbs</div>-->
    <!--      </a>-->
    <!--    </li>-->
    <!--    <li class="menu-item">-->
    <!--      <a href="ui-progress.html" class="menu-link">-->
    <!--        <div data-i18n="Progress">Progress</div>-->
    <!--      </a>-->
    <!--    </li>-->
    <!--    <li class="menu-item">-->
    <!--      <a href="ui-spinners.html" class="menu-link">-->
    <!--        <div data-i18n="Spinners">Spinners</div>-->
    <!--      </a>-->
    <!--    </li>-->
    <!--    <li class="menu-item">-->
    <!--      <a href="ui-tabs-pills.html" class="menu-link">-->
    <!--        <div data-i18n="Tabs & Pills">Tabs &amp; Pills</div>-->
    <!--      </a>-->
    <!--    </li>-->
    <!--    <li class="menu-item">-->
    <!--      <a href="ui-toasts.html" class="menu-link">-->
    <!--        <div data-i18n="Toasts">Toasts</div>-->
    <!--      </a>-->
    <!--    </li>-->
    <!--    <li class="menu-item">-->
    <!--      <a href="ui-tooltips-popovers.html" class="menu-link">-->
    <!--        <div data-i18n="Tooltips & Popovers">Tooltips &amp; Popovers</div>-->
    <!--      </a>-->
    <!--    </li>-->
    <!--    <li class="menu-item">-->
    <!--      <a href="ui-typography.html" class="menu-link">-->
    <!--        <div data-i18n="Typography">Typography</div>-->
    <!--      </a>-->
    <!--    </li>-->
    <!--  </ul>-->
    <!--</li>-->

    <!-- Extended components -->
    <!--<li class="menu-item">-->
    <!--  <a href="javascript:void(0)" class="menu-link menu-toggle">-->
    <!--    <i class="menu-icon tf-icons ti ti-components"></i>-->
    <!--    <div data-i18n="Extended UI">Extended UI</div>-->
    <!--  </a>-->
    <!--  <ul class="menu-sub">-->
    <!--    <li class="menu-item">-->
    <!--      <a href="extended-ui-avatar.html" class="menu-link">-->
    <!--        <div data-i18n="Avatar">Avatar</div>-->
    <!--      </a>-->
    <!--    </li>-->
    <!--    <li class="menu-item">-->
    <!--      <a href="extended-ui-blockui.html" class="menu-link">-->
    <!--        <div data-i18n="BlockUI">BlockUI</div>-->
    <!--      </a>-->
    <!--    </li>-->
    <!--    <li class="menu-item">-->
    <!--      <a href="extended-ui-drag-and-drop.html" class="menu-link">-->
    <!--        <div data-i18n="Drag & Drop">Drag &amp; Drop</div>-->
    <!--      </a>-->
    <!--    </li>-->
    <!--    <li class="menu-item">-->
    <!--      <a href="extended-ui-media-player.html" class="menu-link">-->
    <!--        <div data-i18n="Media Player">Media Player</div>-->
    <!--      </a>-->
    <!--    </li>-->
    <!--    <li class="menu-item">-->
    <!--      <a href="extended-ui-perfect-scrollbar.html" class="menu-link">-->
    <!--        <div data-i18n="Perfect Scrollbar">Perfect Scrollbar</div>-->
    <!--      </a>-->
    <!--    </li>-->
    <!--    <li class="menu-item">-->
    <!--      <a href="extended-ui-star-ratings.html" class="menu-link">-->
    <!--        <div data-i18n="Star Ratings">Star Ratings</div>-->
    <!--      </a>-->
    <!--    </li>-->
    <!--    <li class="menu-item">-->
    <!--      <a href="extended-ui-sweetalert2.html" class="menu-link">-->
    <!--        <div data-i18n="SweetAlert2">SweetAlert2</div>-->
    <!--      </a>-->
    <!--    </li>-->
    <!--    <li class="menu-item">-->
    <!--      <a href="extended-ui-text-divider.html" class="menu-link">-->
    <!--        <div data-i18n="Text Divider">Text Divider</div>-->
    <!--      </a>-->
    <!--    </li>-->
    <!--    <li class="menu-item">-->
    <!--      <a href="javascript:void(0);" class="menu-link menu-toggle">-->
    <!--        <div data-i18n="Timeline">Timeline</div>-->
    <!--      </a>-->
    <!--      <ul class="menu-sub">-->
    <!--        <li class="menu-item">-->
    <!--          <a href="extended-ui-timeline-basic.html" class="menu-link">-->
    <!--            <div data-i18n="Basic">Basic</div>-->
    <!--          </a>-->
    <!--        </li>-->
    <!--        <li class="menu-item">-->
    <!--          <a href="extended-ui-timeline-fullscreen.html" class="menu-link">-->
    <!--            <div data-i18n="Fullscreen">Fullscreen</div>-->
    <!--          </a>-->
    <!--        </li>-->
    <!--      </ul>-->
    <!--    </li>-->
    <!--    <li class="menu-item">-->
    <!--      <a href="extended-ui-tour.html" class="menu-link">-->
    <!--        <div data-i18n="Tour">Tour</div>-->
    <!--      </a>-->
    <!--    </li>-->
    <!--    <li class="menu-item">-->
    <!--      <a href="extended-ui-treeview.html" class="menu-link">-->
    <!--        <div data-i18n="Treeview">Treeview</div>-->
    <!--      </a>-->
    <!--    </li>-->
    <!--    <li class="menu-item">-->
    <!--      <a href="extended-ui-misc.html" class="menu-link">-->
    <!--        <div data-i18n="Miscellaneous">Miscellaneous</div>-->
    <!--      </a>-->
    <!--    </li>-->
    <!--  </ul>-->
    <!--</li>-->

    <!-- Icons -->
    <!--<li class="menu-item">-->
    <!--  <a href="javascript:void(0)" class="menu-link menu-toggle">-->
    <!--    <i class="menu-icon tf-icons ti ti-brand-tabler"></i>-->
    <!--    <div data-i18n="Icons">Icons</div>-->
    <!--  </a>-->
    <!--  <ul class="menu-sub">-->
    <!--    <li class="menu-item">-->
    <!--      <a href="icons-tabler.html" class="menu-link">-->
    <!--        <div data-i18n="Tabler">Tabler</div>-->
    <!--      </a>-->
    <!--    </li>-->
    <!--    <li class="menu-item">-->
    <!--      <a href="icons-font-awesome.html" class="menu-link">-->
    <!--        <div data-i18n="Fontawesome">Fontawesome</div>-->
    <!--      </a>-->
    <!--    </li>-->
    <!--  </ul>-->
    <!--</li>-->

   
  </ul>
  
  

</aside>
<!-- / Menu -->



    <!-- Layout container -->
    <div class="layout-page">