<?php include_once("../pages/ip.php");  ?>

<!DOCTYPE html>
<html class="no-js skrollr skrollr-desktop" lang="en">
  <head>
    <!-- Meta Tags -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta
      name="description"
      content="Powering innovation through connection."
    />
<title>Pricing - Communified</title>
    <!-- Favicon -->
<link rel="shortcut icon" href="../assets/images/communified-logo.png" />
    <!-- Google Fonts -->
    <link
      rel="preconnect"
      href="https://fonts.googleapis.com/"
      crossorigin=""
    />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="" />

    <!-- Core Stylesheets -->
    <link rel="stylesheet" href="../css/vendors.min.css" />
    <link rel="stylesheet" href="../css/icon.min.css" />
    <link rel="stylesheet" href="../css/style.min.css" />
    <link rel="stylesheet" href="../css/responsive.min.css" />

    <!-- Custom Stylesheets -->
<link rel="stylesheet" href="../assets/css/communified.css" />
    <link rel="stylesheet" href="../css/feather.css" />
    <link rel="stylesheet" href="../css/custom-styles.css" />
    <link rel="stylesheet" href="../css/branding-agency.css" />

    <!-- Third-party Stylesheets -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
  </head>

  <body
    data-mobile-nav-trigger-alignment="right"
    data-mobile-nav-style="modern"
    data-mobile-nav-bg-color="#1d1d1d"
  >
   <!-- Preloader Start -->
    <div class="preloader">
      <div class="loader"></div>
      <!-- Page Loader -->
    <div class="page-loader"></div>

    </div>
    <!-- Preloader End -->
    
    <!-- Header Navigation -->
    <header class="sticky sticky-active">
      <nav
        class="navbar navbar-expand-lg header-light bg-white header-reverse glass-effect"
      >
        <div class="container-fluid">
          <!-- Logo Section -->
          <div class="col-auto col-lg-2 me-lg-0 me-auto logos">
            <a class="navbar-brand" href="../index.html">
  <img
    src="../assets/images/communified-logo.png"
    data-at2x="../assets/images/communified-logo.png"
    alt=""
    class="default-logo"
  />
  <!-- <img
    src="../assets/images/communified-logo.png"
    data-at2x="../assets/images/communified-logo.png"
    alt=""
    class="alt-logo"
  /> -->
</a>
          </div>

          <!-- Mobile Menu Toggle -->
          <div class="col-auto ms-auto md-ms-0 menu-order position-static">
            <button
              class="navbar-toggler float-start"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#navbarNav"
            >
              <span class="navbar-toggler-line"></span>
              <span class="navbar-toggler-line"></span>
              <span class="navbar-toggler-line"></span>
              <span class="navbar-toggler-line"></span>
            </button>

            <!-- Main Navigation Menu -->
            <div
              class="collapse navbar-collapse justify-content-center"
              id="navbarNav"
            >
              <ul class="navbar-nav alt-font">
                <li class="nav-item">
                  <a href="../index.html" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                  <a href="../index.html#entrepreneurs" class="nav-link"
                    >Entrepreneurs</a
                  >
                </li>
                <li class="nav-item dropdown dropdown-with-icon-style02">
                  <a href="../index.html#mentors" class="nav-link">Mentors</a>
                  <i
                    class="fa-solid fa-angle-down dropdown-toggle"
                    id="navbarDropdownMenuLink"
                    role="button"
                    data-bs-toggle="dropdown"
                    aria-expanded="false"
                  ></i>
                </li>
                <li class="nav-item">
                  <a href="../index.html#investors" class="nav-link"
                    >Investors</a
                  >
                </li>
                <li class="nav-item">
                  <a href="../index.html#organizations" class="nav-link"
                    >Organizations</a
                  >
                </li>
              </ul>
            </div>
          </div>

          <!-- Contact Button -->
          <div class="col-auto text-end d-none d-sm-flex">
            <div class="header-icon">
              <div class="header-button">
                <a
                  href="https://getfundedafrica.com/portal/"
                  class="btn border-1 btn-transparent-light-gray btn-medium left-icon btn-switch-text"
                >
                  <span>
                    <span
                      ><i
                        class="fa-solid fa-hand-point-right"
                        aria-hidden="true"
                      ></i
                    ></span>
                    <span class="btn-double-text" data-text="Get Started Now"
                      >Get Started Now
                    </span>
                  </span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </nav>
    </header>

    <!-- Main Content -->
    <div class="page-layout">
      <!-- Pricing Cards Section -->
      <section
        class="card-section bg-light-gray py-5"
        style="margin-top: 100px"
      >
        <div class="container">
          <!-- Section Header -->
          <div class="row justify-content-center mb-5">
            <div class="col-lg-7 text-center">
              <h2 class="text-dark-gray alt-font fw-600 ls-minus-2px mb-2">
                Join GetFundedAfrica Today
              </h2>
              <p class="lead mb-0">
                Get 75% Off All Packages – Unlock Unlimited Access to Entrepreneurs, Investors, and Organizations to Accelerate Your Business Growth.
              </p>
            </div>
          </div>

          <!-- Pricing Cards Container -->
          <div
            class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 justify-content-center"
          >
            <!-- Free Plan -->
            <div class="col">
              <div
                class="pricing-card"
                data-plan="free"
                onclick="selectPlan(this)"
              >
                <div class="pricing-header">
                  <h3 class="plan-name">Free</h3>
                  <div class="price-container">
                    <span class="price"><?php detectCurrency(); ?> 0</span>
                    <span class="period">/forever</span>
                  </div>
                  <p class="plan-description">
                    For entrepreneurs who want access to resources and the
                    ability to sell their products.
                  </p>
                </div>
                <div class="pricing-features">
                  <ul>
                    <li><i class="fas fa-check"></i> User account</li>
                    <li>
                      <i class="fas fa-check"></i> Limited number of mentors,
                      investors, and organizations
                    </li>
                    <li>
                      <i class="fas fa-check"></i> Access to the Getfundedafrica
                      Marketplace
                    </li>
                    <li>
                      <i class="fas fa-check"></i> Invitations to leading events
                      and webinars
                    </li>
                    <li>
                      <i class="fas fa-check"></i> Limited access to 230
                      fundraising course videos
                    </li>
                  </ul>
                </div>
                <div class="pricing-action">
                  <button class="btn btn-outline-primary w-100 select-plan-btn freePlan">
                    Get Started Free
                  </button>
                </div>
              </div>
            </div>

            <!-- Premium Bi-Annual Plan -->
            <div class="col">
              <div
                class="pricing-card popular"
                data-plan="premium-biannual"
                onclick="selectPlan(this)"
              >
                <div class="popular-badge">Most Popular</div>
                <div class="pricing-header">
                  <h3 class="plan-name">Premium Bi-Annual</h3>
                  <div class="price-container">
                    <span class="price"><?php detectCurrency(); ?><?php detectCurrencyAmount(75000); ?></span>
                    <span class="period">/ 6 months</span>
                  </div>
                  <p class="plan-description">
                    For entrepreneurs seeking unlimited access to contacts and
                    resources.
                  </p>
                </div>
                <div class="pricing-features">
                  <ul>
                      <li><i class="fas fa-check"></i> Save <?php detectCurrency(); ?><?php detectCurrencyAmount(125000); ?></li>
                    <li>
                      <i class="fas fa-check"></i> All Free features, plus:
                    </li>
                    <li>
                      <i class="fas fa-check"></i> Unlimited access to mentors
                    </li>
                    <li>
                      <i class="fas fa-check"></i> Unlimited access to
                      organizations and investors
                    </li>
                    <li>
                      <i class="fas fa-check"></i> Lead generation tools to
                      boost revenue
                    </li>
                    <li>
                      <i class="fas fa-check"></i> Individual call with a Getfundedafrica
                      growth representative
                    </li>
                  </ul>
                </div>
                <?php if(getCountry()=='Nigeria'){ $gateway = "flutter";  }else{ $gateway = "stripe"; }
                
                $subscription = "Premium Funding";
                $subType = "bi-annually"; 
                //$amount = totalAmount; 
                
                
                
                ?>
                <div class="pricing-action">
                  <a href="https://getfundedafrica.com/portal/gfa/pricingsub/<?php echo $subscription; ?>/<?php echo $subType ?>/<?php detectCurrencyAmountGFA(75000); ?>/<?php echo $gateway ?>" class="btn btn-primary w-100 select-plan-btn standardPlan">
                    Choose Plan
                  </a>
                </div>
              </div>
            </div>

            <!-- Premium Annual Plan -->
            <div class="col">
              <div
                class="pricing-card"
                data-plan="premium-annual"
                onclick="selectPlan(this)"
              >
                <div class="pricing-header">
                  <h3 class="plan-name">Premium Annual</h3>
                  <div class="price-container">
                    <span class="price"><?php detectCurrency(); ?><?php detectCurrencyAmount(112500); ?></span>
                    <span class="period">/ year</span>
                  </div>
                  <p class="plan-description">
                    Best value for long-term growth and success.
                  </p>
                </div>
                <div class="pricing-features">
                  <ul>
                      <li><i class="fas fa-check"></i> Save <?php detectCurrency(); ?><?php detectCurrencyAmount(187500); ?></li>
                    <li><i class="fas fa-check"></i> Priority support</li>
                    
                    <li>
                      <i class="fas fa-check"></i> Plus all Bi-Annual Premium
                      features
                    </li>
                  </ul>
                </div>
               
                <?php if(getCountry()=='Nigeria'){ $gateway = "flutter";  }else{ $gateway = "stripe"; }
                
                $subscription = "Business Funding";
                $subType = "yearly"; 
                //$amount = totalAmount; 
                
                
                
                ?>
               
               
                <div class="pricing-action">
                  <a href="https://getfundedafrica.com/portal/gfa/pricingsub/<?php echo $subscription; ?>/<?php echo $subType ?>/<?php detectCurrencyAmountGFA(112500); ?>/<?php echo $gateway ?>" class="btn btn-outline-primary w-100 select-plan-btn businessPlan">
                    Choose Plan
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Footer Section -->
      <footer class="bg-charcoal-blue pb-1 sm-pb-50px footer-background">
        <div class="container">
          <div class="row mb-6">
            <!-- About Column -->
            <div class="col-lg-5 col-md-6 sm-mb-30px order-2 order-md-1">
              <h3
                class="text-white fw-500 alt-font mb-50px ls-minus-1px sm-mb-30px"
              >
                Connect with like-minded achievers and take your business to the
                next level with GetFundedAfrica.
              </h3>
              <div class="row">
                <div class="col-lg-5 col-6">
                  <span
                    class="alt-font fs-14 text-uppercase d-block text-white ls-1px lh-24"
                    >Call our office</span
                  >
                  <a href="tel:12345678910">+1 234 567 8910</a>
                </div>
                <div class="col-lg-5 col-6">
                  <span
                    class="alt-font fs-14 text-uppercase d-block text-white ls-1px lh-24"
                    >Send a message</span
                  >
                  <a href="mailto:info@getfundedafrica.com">info@getfundedafrica.com</a>
                </div>
              </div>
            </div>

            <!-- Quick Links -->
            <div class="col-md-2 offset-lg-1 col-6 order-3 order-md-2">
              <span
                class="alt-font fs-14 text-uppercase mb-5px d-block text-white ls-1px"
                >Company</span
              >
              <ul>
                <li><a href="../index.html">Home</a></li>
                <li><a href="../index.html#entrepreneurs">Entrepreneurs</a></li>
                <li><a href="../index.html#mentors">Mentors</a></li>
                <li><a href="../index.html#investors">Investors</a></li>
                <li><a href="../index.html#organizations">Organizations</a></li>
              </ul>
            </div>

            <!-- Social Links -->
            <div class="col-md-2 col-6 order-3 order-md-3">
              <span
                class="alt-font fs-14 text-uppercase mb-5px d-block text-white ls-1px"
                >Follow Us</span
              >
              <ul>
                <li>
                  <a href="https://www.twitter.com/" target="_blank">Twitter</a>
                </li>
                <li>
                  <a href="http://www.linkedin.com/" target="_blank"
                    >LinkedIn</a
                  >
                </li>
              </ul>
            </div>

            <!-- Footer Logo -->
            <div class="col-md-2 order-1 order-md-4 sm-mb-30px">
              <a href="../index.html" class="footer-logo"
                ><img
                  src="../images/get-funded-africa-logo.png"
                  data-at2x="../images/get-funded-africa-logo.png"
                  alt="GetFundedAfrica Logo"
              /></a>
            </div>
          </div>
        </div>
      </footer>
    </div>

    <!-- Core Scripts -->
    <script type="text/javascript" src="../js/jquery.js"></script>
    <script type="text/javascript" src="../js/vendors.min.js"></script>
    <script type="text/javascript" src="../js/main.js"></script>
    <script type="text/javascript" src="../js/custom-js.js"></script>

    <!-- Bootstrap Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <script>
  $(document).ready(function(){
    $('.freePlan').click(function(){
      // Redirect to the URL
      window.location.href = "https://getfundedafrica.com/portal/gfa/register";
    });
  });
</script>
  </body>
</html>
