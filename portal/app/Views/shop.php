<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
      <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
          <li class="nav-item me-auto"><a class="navbar-brand" href="index.html"><span class="brand-logo">
		   <img src="<?php echo base_url(); ?>assets/images/logo/GFA-Logo.png">
                </span>
            </li>
          <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pe-0" data-bs-toggle="collapse"><i class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i><i class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary" data-feather="disc" data-ticon="disc"></i></a></li>
        </ul>
      </div>
      <div class="shadow-bottom"></div>
      <div class="main-menu-content">
      <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
	  <li class=" nav-item"><a class="d-flex align-items-center" href="index.html"><i data-feather="home"></i><span class="menu-title text-truncate" data-i18n="Dashboards">Business Template</span></a></li>
          <li class=" nav-item"><a class="d-flex align-items-center" href="index.html"><i data-feather="home"></i><span class="menu-title text-truncate" data-i18n="Dashboards">Mentorship</span></a></li>
		   <li class=" nav-item"><a class="d-flex align-items-center" href="index.html"><i data-feather="home"></i><span class="menu-title text-truncate" data-i18n="Dashboards">Courses</span></a></li>
		    
		 </ul> 
		  </div>
    </div>
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <div class="app-content content ecommerce-application">
      <div class="content-overlay"></div>
      <div class="header-navbar-shadow"></div>
      <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
          <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
              <div class="col-12">
                <h2 class="content-header-title float-start mb-0">Business Template</h2>
                <div class="breadcrumb-wrapper">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a>
                    </li>
                    <li class="breadcrumb-item"><a href="#">Startup Application</a>
                    </li>
                    <li class="breadcrumb-item active">Business Template
                  </ol>
                </div>
              </div>
            </div>
          </div>
          <div class="content-header-right text-md-end col-md-3 col-12 d-md-block d-none">
            <div class="mb-1 breadcrumb-right">
              <div class="dropdown">
                <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-feather="grid"></i></button>
                <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="app-todo.html"><i class="me-1" data-feather="check-square"></i><span class="align-middle">Todo</span></a><a class="dropdown-item" href="app-chat.html"><i class="me-1" data-feather="message-square"></i><span class="align-middle">Chat</span></a><a class="dropdown-item" href="app-email.html"><i class="me-1" data-feather="mail"></i><span class="align-middle">Email</span></a><a class="dropdown-item" href="app-calendar.html"><i class="me-1" data-feather="calendar"></i><span class="align-middle">Calendar</span></a></div>
              </div>
            </div>
          </div>
        </div>
        <div class="content-detached content-right">
          <div class="content-body"><!-- E-commerce Content Section Starts -->
<section id="ecommerce-header">
  <div class="row">
    <div class="col-sm-12">
      <div class="ecommerce-header-items">
        <div class="result-toggler">
          <button class="navbar-toggler shop-sidebar-toggler" type="button" data-bs-toggle="collapse">
            <span class="navbar-toggler-icon d-block d-lg-none"><i data-feather="menu"></i></span>
          </button>
          <div class="search-results">85 results found</div>
        </div>
        <div class="view-options d-flex">
          <div class="btn-group dropdown-sort">
            <button
              type="button"
              class="btn btn-outline-primary dropdown-toggle me-1"
              data-bs-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false"
            >
              <span class="active-sorting">Featured</span>
            </button>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="#">Featured</a>
              <a class="dropdown-item" href="#">Lowest</a>
              <a class="dropdown-item" href="#">Highest</a>
            </div>
          </div>
          <div class="btn-group" role="group">
            <input type="radio" class="btn-check" name="radio_options" id="radio_option1" autocomplete="off" checked />
            <label class="btn btn-icon btn-outline-primary view-btn grid-view-btn" for="radio_option1"
              ><i data-feather="grid" class="font-medium-3"></i
            ></label>
            <input type="radio" class="btn-check" name="radio_options" id="radio_option2" autocomplete="off" />
            <label class="btn btn-icon btn-outline-primary view-btn list-view-btn" for="radio_option2"
              ><i data-feather="list" class="font-medium-3"></i
            ></label>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- E-commerce Content Section Starts -->

<!-- background Overlay when sidebar is shown  starts-->
<div class="body-content-overlay"></div>
<!-- background Overlay when sidebar is shown  ends-->

<!-- E-commerce Search Bar Starts -->
<section id="ecommerce-searchbar" class="ecommerce-searchbar">
  <div class="row mt-1">
    <div class="col-sm-12">
      <div class="input-group input-group-merge">
        <input
          type="text"
          class="form-control search-product"
          id="shop-search"
          placeholder="Search Product"
          aria-label="Search..."
          aria-describedby="shop-search"
        />
        <span class="input-group-text"><i data-feather="search" class="text-muted"></i></span>
      </div>
    </div>
  </div>
</section>
<!-- E-commerce Search Bar Ends -->

<!-- E-commerce Products Starts -->
<section id="ecommerce-products" class="grid-view">
  <div class="card ecommerce-card">
    <div class="item-img text-center">
      <a href="app-ecommerce-details.html">
        <img
          class="img-fluid card-img-top"
          src="<?php echo base_url(); ?>assets/app-assets/images/pages/eCommerce/1.png"
          alt="img-placeholder"
      /></a>
    </div>
    <div class="card-body">
      <div class="item-wrapper">
        <div class="item-rating">
          <ul class="unstyled-list list-inline">
            <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
            <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
            <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
            <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
            <li class="ratings-list-item"><i data-feather="star" class="unfilled-star"></i></li>
          </ul>
        </div>
        <div>
          <h6 class="item-price">$9.99</h6>
        </div>
      </div>
      <h6 class="item-name">
        <a class="text-body" href="app-ecommerce-details.html">Starting a Business</a>
        <span class="card-text item-company">By <a href="#" class="company-name">Apple</a></span>
      </h6>
      <p class="card-text item-description">
       It all start with a business idea, then the incubation
      </p>
    </div>
    <div class="item-options text-center">
      <div class="item-wrapper">
        <div class="item-cost">
          <h4 class="item-price">$339.99</h4>
        </div>
      </div>
      <a href="#" class="btn btn-light btn-wishlist">
        <i data-feather="heart"></i>
        <span>Wishlist</span>
      </a>
      <a href="#" class="btn btn-primary btn-cart">
        <i data-feather="shopping-cart"></i>
        <span class="add-to-cart">Add to cart</span>
      </a>
    </div>
  </div>
  <div class="card ecommerce-card">
    <div class="item-img text-center">
      <a href="app-ecommerce-details.html">
        <img
          class="img-fluid card-img-top"
          src="<?php echo base_url(); ?>assets/app-assets/images/pages/eCommerce/2.png"
          alt="img-placeholder"
        />
      </a>
    </div>
    <div class="card-body">
      <div class="item-wrapper">
        <div class="item-rating">
          <ul class="unstyled-list list-inline">
            <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
            <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
            <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
            <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
            <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
          </ul>
        </div>
        <div>
          <h6 class="item-price">$9.99</h6>
        </div>
      </div>
      <h6 class="item-name">
        <a class="text-body" href="app-ecommerce-details.html">Register a Business</a>
        <span class="card-text item-company">By <a href="#" class="company-name">Apple</a></span>
      </h6>
      <p class="card-text item-description">
        Step by steps guide on how to register your own company
      </p>
    </div>
    <div class="item-options text-center">
      <div class="item-wrapper">
        <div class="item-cost">
          <h4 class="item-price">$9.99</h4>
        </div>
      </div>
      <a href="#" class="btn btn-light btn-wishlist">
        <i data-feather="heart" class="text-danger"></i>
        <span>Wishlist</span>
      </a>
      <a href="#" class="btn btn-primary btn-cart">
        <i data-feather="shopping-cart"></i>
        <span class="add-to-cart">Add to cart</span>
      </a>
    </div>
  </div>
  <div class="card ecommerce-card">
    <div class="item-img text-center">
      <a href="app-ecommerce-details.html"
        ><img
          class="img-fluid card-img-top"
          src="<?php echo base_url(); ?>assets/app-assets/images/pages/eCommerce/3.png"
          alt="img-placeholder"
      /></a>
    </div>
    <div class="card-body">
      <div class="item-wrapper">
        <div class="item-rating">
          <ul class="unstyled-list list-inline">
            <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
            <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
            <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
            <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
            <li class="ratings-list-item"><i data-feather="star" class="unfilled-star"></i></li>
          </ul>
        </div>
        <div>
          <div class="item-cost">
            <h6 class="item-price">$9.99</h6>
          </div>
        </div>
      </div>
      <h6 class="item-name">
        <a class="text-body" href="app-ecommerce-details.html">Marketing</a>
        <span class="card-text item-company">By <a href="#" class="company-name">Apple</a></span>
      </h6>
      <p class="card-text item-description">
        Increase sales through our strategical marketing
      </p>
    </div>
    <div class="item-options text-center">
      <div class="item-wrapper">
        <div class="item-cost">
          <h4 class="item-price">$9.99</h4>
          <p class="card-text shipping"><span class="badge rounded-pill badge-light-success">Free Shipping</span></p>
        </div>
      </div>
      <a href="#" class="btn btn-light btn-wishlist">
        <i data-feather="heart"></i>
        <span>Wishlist</span>
      </a>
      <a href="#" class="btn btn-primary btn-cart">
        <i data-feather="shopping-cart"></i>
        <span class="add-to-cart">Add to cart</span>
      </a>
    </div>
  </div>
  <div class="card ecommerce-card">
    <div class="item-img text-center">
      <a href="app-ecommerce-details.html">
        <img
          class="img-fluid card-img-top"
          src="<?php echo base_url(); ?>assets/app-assets/images/pages/eCommerce/4.png"
          alt="img-placeholder"
      /></a>
    </div>
    <div class="card-body">
      <div class="item-wrapper">
        <div class="item-rating">
          <ul class="unstyled-list list-inline">
            <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
            <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
            <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
            <li class="ratings-list-item"><i data-feather="star" class="unfilled-star"></i></li>
            <li class="ratings-list-item"><i data-feather="star" class="unfilled-star"></i></li>
          </ul>
        </div>
        <div class="item-cost">
          <h6 class="item-price">$9.99</h6>
        </div>
      </div>
      <h6 class="item-name">
        <a class="text-body" href="app-ecommerce-details.html">Presentation</a>
        <span class="card-text item-company">By <a href="#" class="company-name">OneOdio</a></span>
      </h6>
      <p class="card-text item-description">
        Make amazing presentations, show your audience
      </p>
    </div>
    <div class="item-options text-center">
      <div class="item-wrapper">
        <div class="item-cost">
          <h4 class="item-price">$9.99</h4>
        </div>
      </div>
      <a href="#" class="btn btn-light btn-wishlist">
        <i data-feather="heart"></i>
        <span>Wishlist</span>
      </a>
      <a href="#" class="btn btn-primary btn-cart">
        <i data-feather="shopping-cart"></i>
        <span class="add-to-cart">Add to cart</span>
      </a>
    </div>
  </div>
  <div class="card ecommerce-card">
    <div class="item-img text-center">
      <a href="app-ecommerce-details.html">
        <img
          class="img-fluid card-img-top"
          src="<?php echo base_url(); ?>assets/app-assets/images/pages/eCommerce/5.png"
          alt="img-placeholder"
        />
      </a>
    </div>
    <div class="card-body">
      <div class="item-wrapper">
        <div class="item-rating">
          <ul class="unstyled-list list-inline">
            <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
            <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
            <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
            <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
            <li class="ratings-list-item"><i data-feather="star" class="unfilled-star"></i></li>
          </ul>
        </div>
        <div class="item-cost">
          <h6 class="item-price">$999.99</h6>
        </div>
      </div>
      <h6 class="item-name">
        <a class="text-body" href="app-ecommerce-details.html">
         Social Media
        </a>
        <span class="card-text item-company">By <a href="#" class="company-name">Apple</a></span>
      </h6>
      <p class="card-text item-description">
       Get the various tools you need to get aheard of your 
      </p>
    </div>
    <div class="item-options text-center">
      <div class="item-wrapper">
        <div class="item-cost">
          <h4 class="item-price">$9.99</h4>
        </div>
      </div>
      <a href="#" class="btn btn-light btn-wishlist">
        <i data-feather="heart" class="text-danger"></i>
        <span>Wishlist</span>
      </a>
      <a href="#" class="btn btn-primary btn-cart">
        <i data-feather="shopping-cart"></i>
        <span class="add-to-cart">Add to cart</span>
      </a>
    </div>
  </div>
  <div class="card ecommerce-card">
    <div class="item-img text-center">
      <a href="app-ecommerce-details.html">
        <img
          class="img-fluid card-img-top"
          src="<?php echo base_url(); ?>assets/app-assets/images/pages/eCommerce/6.png"
          alt="img-placeholder"
        />
      </a>
    </div>
    <div class="card-body">
      <div class="item-wrapper">
        <div class="item-rating">
          <ul class="unstyled-list list-inline">
            <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
            <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
            <li class="ratings-list-item"><i data-feather="star" class="unfilled-star"></i></li>
            <li class="ratings-list-item"><i data-feather="star" class="unfilled-star"></i></li>
            <li class="ratings-list-item"><i data-feather="star" class="unfilled-star"></i></li>
          </ul>
        </div>
        <div class="item-cost">
          <h6 class="item-price">$9.99</h6>
        </div>
      </div>
      <h6 class="item-name">
        <a class="text-body" href="app-ecommerce-details.html"> Competition </a>
        <span class="card-text item-company">By <a href="#" class="company-name">Sharp</a></span>
      </h6>
      <p class="card-text item-description">
      Know your competitor, learn how to relate with your 
      </p>
    </div>
    <div class="item-options text-center">
      <div class="item-wrapper">
        <div class="item-cost">
          <h4 class="item-price">$9.99</h4>
          <p class="card-text shipping"><span class="badge rounded-pill badge-light-success">Free Shipping</span></p>
        </div>
      </div>
      <a href="#" class="btn btn-light btn-wishlist">
        <i data-feather="heart"></i>
        <span>Wishlist</span>
      </a>
      <a href="#" class="btn btn-primary btn-cart">
        <i data-feather="shopping-cart"></i>
        <span class="add-to-cart">Add to cart</span>
      </a>
    </div>
  </div>
 
</div>
</section>
<!-- E-commerce Products Ends -->

<!-- E-commerce Pagination Starts -->
<section id="ecommerce-pagination">
  <div class="row">
    <div class="col-sm-12">
      <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center mt-2">
          <li class="page-item prev-item"><a class="page-link" href="#"></a></li>
          <li class="page-item active"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item" aria-current="page"><a class="page-link" href="#">4</a></li>
          <li class="page-item"><a class="page-link" href="#">5</a></li>
          <li class="page-item"><a class="page-link" href="#">6</a></li>
          <li class="page-item"><a class="page-link" href="#">7</a></li>
          <li class="page-item next-item"><a class="page-link" href="#"></a></li>
        </ul>
      </nav>
    </div>
  </div>
</section>
<!-- E-commerce Pagination Ends -->

          </div>
        </div>
        <div class="sidebar-detached sidebar-left">
          <div class="sidebar"><!-- Ecommerce Sidebar Starts -->
<div class="sidebar-shop">
  <div class="row">
    <div class="col-sm-12">
      <h6 class="filter-heading d-none d-lg-block">Filters</h6>
    </div>
  </div>
  <div class="card">
    <div class="card-body">

      

      <!-- Categories Starts -->
      <div id="product-categories">
        <h6 class="filter-title">Categories</h6>
        <ul class="list-unstyled categories-list">
          <li>
            <div class="form-check">
              <input type="radio" id="category1" name="category-filter" class="form-check-input" checked />
              <label class="form-check-label" for="category1">Starting a Business</label>
            </div>
          </li>
          <li>
            <div class="form-check">
              <input type="radio" id="category2" name="category-filter" class="form-check-input" />
              <label class="form-check-label" for="category2">Registering a business</label>
            </div>
          </li>
          <li>
            <div class="form-check">
              <input type="radio" id="category3" name="category-filter" class="form-check-input" />
              <label class="form-check-label" for="category3">Creating Products</label>
            </div>
          </li>
          <li>
            <div class="form-check">
              <input type="radio" id="category4" name="category-filter" class="form-check-input" />
              <label class="form-check-label" for="category4">Marketing</label>
            </div>
          </li>
          <li>
            <div class="form-check">
              <input type="radio" id="category5" name="category-filter" class="form-check-input" />
              <label class="form-check-label" for="category5">Pricing</label>
            </div>
          </li>
          <li>
            <div class="form-check">
              <input type="radio" id="category6" name="category-filter" class="form-check-input" />
              <label class="form-check-label" for="category6">Human Resources</label>
            </div>
          </li>
          <li>
            <div class="form-check">
              <input type="radio" id="category7" name="category-filter" class="form-check-input" />
              <label class="form-check-label" for="category7">Social Media</label>
            </div>
          </li>
          <li>
            <div class="form-check">
              <input type="radio" id="category8" name="category-filter" class="form-check-input" />
              <label class="form-check-label" for="category8">Presentation</label>
            </div>
          </li>
          <li>
            <div class="form-check">
              <input type="radio" id="category9" name="category-filter" class="form-check-input" />
              <label class="form-check-label" for="category9">Negociating</label>
            </div>
          </li>
          <li>
            <div class="form-check">
              <input type="radio" id="category10" name="category-filter" class="form-check-input" />
              <label class="form-check-label" for="category10">Competition</label>
            </div>
          </li>
        </ul>
      </div>
      <!-- Categories Ends -->

      <!-- Clear Filters Starts -->
      <div id="clear-filters">
        <button type="button" class="btn w-100 btn-primary">Search																																																																																																																																																															</button>
      </div>
      <!-- Clear Filters Ends -->
    </div>
  </div>
</div>
<!-- Ecommerce Sidebar Ends -->

          </div>
        </div>
      </div>
    </div>
    <!-- END: Content-->


    <!-- BEGIN: Customizer-->
    <div class="customizer d-none d-md-block"><a class="customizer-toggle d-flex align-items-center justify-content-center" href="#"><i class="spinner" data-feather="settings"></i></a><div class="customizer-content">
  <!-- Customizer header -->
  <div class="customizer-header px-2 pt-1 pb-0 position-relative">
    <h4 class="mb-0">Theme Customizer</h4>
    <p class="m-0">Customize & Preview in Real Time</p>

    <a class="customizer-close" href="#"><i data-feather="x"></i></a>
  </div>

  <hr />

  <!-- Styling & Text Direction -->
  <div class="customizer-styling-direction px-2">
    <p class="fw-bold">Skin</p>
    <div class="d-flex">
      <div class="form-check me-1">
        <input
          type="radio"
          id="skinlight"
          name="skinradio"
          class="form-check-input layout-name"
          checked
          data-layout=""
        />
        <label class="form-check-label" for="skinlight">Light</label>
      </div>
      <div class="form-check me-1">
        <input
          type="radio"
          id="skinbordered"
          name="skinradio"
          class="form-check-input layout-name"
          data-layout="bordered-layout"
        />
        <label class="form-check-label" for="skinbordered">Bordered</label>
      </div>
      <div class="form-check me-1">
        <input
          type="radio"
          id="skindark"
          name="skinradio"
          class="form-check-input layout-name"
          data-layout="dark-layout"
        />
        <label class="form-check-label" for="skindark">Dark</label>
      </div>
      <div class="form-check">
        <input
          type="radio"
          id="skinsemidark"
          name="skinradio"
          class="form-check-input layout-name"
          data-layout="semi-dark-layout"
        />
        <label class="form-check-label" for="skinsemidark">Semi Dark</label>
      </div>
    </div>
  </div>

  <hr />

  <!-- Menu -->
  <div class="customizer-menu px-2">
    <div id="customizer-menu-collapsible" class="d-flex">
      <p class="fw-bold me-auto m-0">Menu Collapsed</p>
      <div class="form-check form-check-primary form-switch">
        <input type="checkbox" class="form-check-input" id="collapse-sidebar-switch" />
        <label class="form-check-label" for="collapse-sidebar-switch"></label>
      </div>
    </div>
  </div>
  <hr />

  <!-- Layout Width -->
  <div class="customizer-footer px-2">
    <p class="fw-bold">Layout Width</p>
    <div class="d-flex">
      <div class="form-check me-1">
        <input type="radio" id="layout-width-full" name="layoutWidth" class="form-check-input" checked />
        <label class="form-check-label" for="layout-width-full">Full Width</label>
      </div>
      <div class="form-check me-1">
        <input type="radio" id="layout-width-boxed" name="layoutWidth" class="form-check-input" />
        <label class="form-check-label" for="layout-width-boxed">Boxed</label>
      </div>
    </div>
  </div>
  <hr />

  <!-- Navbar -->
  <div class="customizer-navbar px-2">
    <div id="customizer-navbar-colors">
      <p class="fw-bold">Navbar Color</p>
      <ul class="list-inline unstyled-list">
        <li class="color-box bg-white border selected" data-navbar-default=""></li>
        <li class="color-box bg-primary" data-navbar-color="bg-primary"></li>
        <li class="color-box bg-secondary" data-navbar-color="bg-secondary"></li>
        <li class="color-box bg-success" data-navbar-color="bg-success"></li>
        <li class="color-box bg-danger" data-navbar-color="bg-danger"></li>
        <li class="color-box bg-info" data-navbar-color="bg-info"></li>
        <li class="color-box bg-warning" data-navbar-color="bg-warning"></li>
        <li class="color-box bg-dark" data-navbar-color="bg-dark"></li>
      </ul>
    </div>

    <p class="navbar-type-text fw-bold">Navbar Type</p>
    <div class="d-flex">
      <div class="form-check me-1">
        <input type="radio" id="nav-type-floating" name="navType" class="form-check-input" checked />
        <label class="form-check-label" for="nav-type-floating">Floating</label>
      </div>
      <div class="form-check me-1">
        <input type="radio" id="nav-type-sticky" name="navType" class="form-check-input" />
        <label class="form-check-label" for="nav-type-sticky">Sticky</label>
      </div>
      <div class="form-check me-1">
        <input type="radio" id="nav-type-static" name="navType" class="form-check-input" />
        <label class="form-check-label" for="nav-type-static">Static</label>
      </div>
      <div class="form-check">
        <input type="radio" id="nav-type-hidden" name="navType" class="form-check-input" />
        <label class="form-check-label" for="nav-type-hidden">Hidden</label>
      </div>
    </div>
  </div>
  <hr />

  <!-- Footer -->
  <div class="customizer-footer px-2">
    <p class="fw-bold">Footer Type</p>
    <div class="d-flex">
      <div class="form-check me-1">
        <input type="radio" id="footer-type-sticky" name="footerType" class="form-check-input" />
        <label class="form-check-label" for="footer-type-sticky">Sticky</label>
      </div>
      <div class="form-check me-1">
        <input type="radio" id="footer-type-static" name="footerType" class="form-check-input" checked />
        <label class="form-check-label" for="footer-type-static">Static</label>
      </div>
      <div class="form-check me-1">
        <input type="radio" id="footer-type-hidden" name="footerType" class="form-check-input" />
        <label class="form-check-label" for="footer-type-hidden">Hidden</label>
      </div>
    </div>
  </div>
</div>

    </div>
    <!-- End: Customizer-->

    

    </div>
    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>