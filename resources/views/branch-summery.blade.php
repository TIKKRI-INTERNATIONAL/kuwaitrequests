<!DOCTYPE html>
<html data-bs-theme="light" lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ===============================================--><!--    Document Title--><!-- ===============================================-->
    <title>Form Page | Delivery Solution Portal</title>


    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicons/favicon.ico">
    <link rel="manifest" href="assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">
    <script src="assets/js/config.js"></script>
    <script src="vendors/simplebar/simplebar.min.js"></script>

    <!-- ===============================================--><!--    Stylesheets--><!-- ===============================================-->
    <link href="vendors/prism/prism-okaidia.css" rel="stylesheet">

 <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Alexandria:wght@100..900&display=swap" rel="stylesheet">

    <link href="vendors/simplebar/simplebar.min.css" rel="stylesheet">
    <link href="assets/css/theme-rtl.min.css" rel="stylesheet" id="style-rtl">
    <link href="assets/css/theme.min.css" rel="stylesheet" id="style-default">
    <link href="assets/css/user-rtl.min.css" rel="stylesheet" id="user-style-rtl">
    <link href="assets/css/user.min.css" rel="stylesheet" id="user-style-default">
    <script>
      var isRTL = JSON.parse(localStorage.getItem('isRTL'));
      if (isRTL) {
        var linkDefault = document.getElementById('style-default');
        var userLinkDefault = document.getElementById('user-style-default');
        linkDefault.setAttribute('disabled', true);
        userLinkDefault.setAttribute('disabled', true);
        document.querySelector('html').setAttribute('dir', 'rtl');
      } else {
        var linkRTL = document.getElementById('style-rtl');
        var userLinkRTL = document.getElementById('user-style-rtl');
        linkRTL.setAttribute('disabled', true);
        userLinkRTL.setAttribute('disabled', true);
      }
    </script>
  </head>

  <body>
    <!-- ===============================================--><!--    Main Content--><!-- ===============================================-->
    <main class="main" id="top">
      <div class="container-fluid " data-layout="container">
        <script>
          var isFluid = JSON.parse(localStorage.getItem('isFluid'));
          if (isFluid) {
            var container = document.querySelector('[data-layout]');
            container.classList.remove('container');
            container.classList.add('container-fluid');
          }
        </script>



        <nav class="navbar  navbar-card navbar-vertical navbar-expand-xl">
          <script>
            var navbarStyle = localStorage.getItem("navbarStyle");
            if (navbarStyle && navbarStyle !== 'transparent') {
              document.querySelector('.navbar-vertical').classList.add(`navbar-${navbarStyle}`);
            }
          </script>
          <div class="d-flex align-items-center bg-white">
            <div class="toggle-icon-wrapper">
              <button class="btn navbar-toggler-humburger-icon navbar-vertical-toggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
            </div><a class="navbar-brand" href="wallet">
              <div class="d-flex align-items-center py-3">
                <span class="fas fa-money-check text-secondary"  style="font-size: 30px; padding-right: 10px;"></span><span class="text-secondary dark__text-white "> 20KWD</span>
              </div>
            </a>
          </div>


          <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
            <div class="navbar-vertical-content scrollbar">

              <ul class="navbar-nav flex-column mb-3" id="navbarVerticalNav">
                <!--<li class="nav-item">
                  <a class="nav-link dropdown-indicator" href="#dashboard" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="dashboard">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-chart-pie"></span></span><span class="nav-link-text ps-1">Dashboard</span></div>
                  </a>
                  <ul class="nav collapse" id="dashboard">
                    <li class="nav-item">
                      <a class="nav-link" href="home">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Default</span></div>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="dashboard/analytics.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Default 02</span></div>
                      </a>
                    </li>

                  </ul>
                </li>-->

                <li class="nav-item"><!-- label-->
                  <!--<div class="row navbar-vertical-label-wrapper mt-3 mb-2">
                    <div class="col-auto navbar-vertical-label">Section Title 01</div>
                    <div class="col ps-0">
                      <hr class="mb-0 navbar-vertical-divider">
                    </div>
                  </div>-->
                  <a class="nav-link" href="home" role="button">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-flag"></span></span><span class="nav-link-text ps-1">Dashboard</span></div>
                  </a>
				  <a class="nav-link" href="order-history" role="button">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-flag"></span></span><span class="nav-link-text ps-1">Order History</span></div>
                  </a>
				  <a class="nav-link" href="branch-summery" role="button">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-flag"></span></span><span class="nav-link-text ps-1">Branches Summary</span></div>
                  </a>
				  <a class="nav-link" href="setting" role="button">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-flag"></span></span><span class="nav-link-text ps-1">Setting</span></div>
                  </a>


                 <!-- <a class="nav-link dropdown-indicator" href="#faq" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="faq">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-question-circle"></span></span><span class="nav-link-text ps-1">Sample 02</span></div>
                  </a>
                  <ul class="nav collapse" id="faq">
                    <li class="nav-item"><a class="nav-link" href="$">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">FSample 03</span></div>
                      </a>
                    </li>
                  </ul>

                </li>-->

                <li class="nav-item"><!-- label-->
                  <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
                    <div class="col-auto navbar-vertical-label">Language Switcher</div>
                    <div class="col ps-0">
                      <hr class="mb-0 navbar-vertical-divider">
                    </div>
                  </div>
                  <a class="nav-link" href="#" role="button">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-rocket"></span></span><span class="nav-link-text ps-1">Arabic</span></div>
                  </a>
                  <!--<a class="nav-link dropdown-indicator" href="#customization" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="customization">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-wrench"></span></span><span class="nav-link-text ps-1">Sample 05</span></div>
                  </a>
                  <ul class="nav collapse" id="customization">
                    <li class="nav-item"><a class="nav-link" href="#">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Sample 06</span><span class="badge rounded-pill ms-2 badge-subtle-success">Updated</span></div>
                      </a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="#">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Sample 07</span></div>
                      </a>
                    </li>
                  </ul>-->
                </li>
              </ul>

            </div>
          </div>
        </nav>










        <div class="content">

          <nav class="navbar navbar-light navbar-glass navbar-top navbar-expand bg-primary">
            <button class="btn navbar-toggler-humburger-icon navbar-toggler me-1 me-sm-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse" aria-controls="navbarVerticalCollapse" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
            <a class="navbar-brand me-1 me-sm-3" href="home">
            </a>

            <ul class="navbar-nav navbar-nav-icons ms-auto flex-row align-items-center">
              <li class="nav-item dropdown vertical-line vertical-line-400 px-4">
                <a class="nav-link dropdown-toggle pe-0 ps-2 text-white px-4 fs-8" id="navbarDropdownUser" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Kuwait Request

              </a>
              <div class="dropdown-menu dropdown-caret dropdown-caret dropdown-menu-end py-0" aria-labelledby="navbarDropdownUser">
                <div class="bg-white dark__bg-1000 rounded-2 py-2">
                  <a class="dropdown-item link-600 fw-medium" href="#">Salmiya</a>
                    <a class="dropdown-item link-600 fw-medium" href="#">Hawally</a>
                    <a class="dropdown-item link-600 fw-medium" href="$">Kuwait City<span class="badge rounded-pill ms-2 badge-subtle-success">New</span></a>
                    <a class="dropdown-item link-600 fw-medium" href="#">Jahra</a>
                    <a class="dropdown-item link-600 fw-medium" href="#">Magaf</a>

                </div>
              </div>
            </li>

            <li class="nav-item dropdown vertical-line vertical-line-400 px-3 ">
              <a class="nav-link notification-indicator notification-indicator-primary px-0 fa-icon-wait text-white" id="navbarDropdownNotification" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-hide-on-body-scroll="data-hide-on-body-scroll"><span class="fas fa-bell" data-fa-transform="shrink-6" style="font-size: 30px;"></span></a>
              <div class="dropdown-menu dropdown-caret dropdown-caret dropdown-menu-end dropdown-menu-card dropdown-menu-notification dropdown-caret-bg" aria-labelledby="navbarDropdownNotification">
                <div class="card card-notification shadow-none">
                  <div class="card-header">
                    <div class="row justify-content-between align-items-center">
                      <div class="col-auto">
                        <h6 class="card-header-title mb-0">Notifications</h6>
                      </div>
                      <div class="col-auto ps-0 ps-sm-3"><a class="card-link fw-normal" href="#">Mark all as read</a></div>
                    </div>
                  </div>
                  <div class="scrollbar-overlay" style="max-height:19rem">
                  </div>
                  <div class="card-footer text-center border-top"><a class="card-link d-block" href="#">View all</a></div>
                </div>
              </div>
            </li>


              <li class="nav-item dropdown hidden d-xl-block" >
                  <div class="avatar avatar-xl">
                    <img class="me-2 ms-2" src=" assets/img/icons/spot-illustrations/logo.png" alt="" width="100">
                  </div>

              </li>
            </ul>
          </nav>

          <div class="row  rounded-2">
            <section class="text-center py-0 px-0">
              <div class="container-fluid">
                <div class="row justify-content-center">
                  <div class="bg-yellow py-3">
                    <h5>our working hours are from 7.00 am to 12.00 midnight</h5>
                  </div>

                </div>
              </div>
            </section>

            <!--<div class="col-xxl-12 col-md-12 pt-3">
              <div class="card shopping-cart-bar-min-height h-100">
                <div class="card-header d-flex flex-between-center">
                  <h3 class="mb-0 text-primary fw-bold">Wallet</h3>
                  <div class="dropdown font-sans-serif btn-reveal-trigger">
                    <a class="btn btn-falcon-default btn-sm text-600" href="wallet"><span class="fas fa-pencil-alt"></span></a>
                  </div>
                </div>

              </div>
            </div>-->





            <!--<div class=" mx-auto row flex-center pt-4 px-0">
                <div class="col-sm-10 col-md-8 col-lg-6 col-xl-12">
                  <div class="card rounded-2">



                    <div class="card-body p-4 p-sm-5">
                      <h5 class="text-center pb-3 text-primary fw-bold fs-6">Customer Information</h5>
                      <form>
                        <div class="row gx-2">
                            <div class="mb-3 col-sm-6">
                                <label for="Customer Name" class="text-primary fs-10 fw-bold">Customer Name</label>
                                <input class="form-control rounded-2 py-3" type="name" placeholder="Email address"></div>
                            <div class="mb-3 col-sm-6">
                                <label for="Customer Phone" class="text-primary fs-10 fw-bold">Customer Phone</label>
                                <input class="form-control rounded-2 py-3" type="phone" placeholder="Customer Phone"></div>
                          </div>
                        <div class="mb-3">
                          <label for="Email address" class="text-primary fs-10 fw-bold">Email Address</label>
                          <input class="form-control rounded-2" type="email" placeholder="Email address"></div>
                        <div class="mb-3">
                          <label for="Order Number" class="text-primary fs-10 fw-bold">Order Number/ Details</label>
                          <input class="form-control rounded-2 py-3" type="number" placeholder="Order Number"></div>
                        <div class="row flex-between-center">
                          <div class="col-auto">
                            <div class="form-check mb-0"><input class="form-check-input" type="checkbox" id="basic-checkbox" checked="checked"><label class="form-check-label mb-0" for="basic-checkbox">Remember me</label></div>
                          </div>
                          <div class="col-auto"><a class="fs-9 text-primary fw-semi-bold" href="forgot-password.html">Forgot Your Password?</a></div>
                        </div>
                        <div class="mb-3"><button class="btn btn-primary d-block py-3 px-5 mt-3 rounded-5 fs-8" type="submit" name="submit">Next Step: Customer address</button></div>
                       </form>
                    </div>


                  </div>
                </div>
              </div>-->




            <!-- <section> close ============================--><!-- ============================================-->

              <section class="py-0 bg-dark bottom-bar" data-bs-theme="light">
                <div>
                  <hr class="my-0 text-600 opacity-25">
                  <div class="container py-3">
                    <div class="row justify-content-between fs-10">
                      <div class="col-12 col-sm-auto text-center">
                        <p class="mb-0 text-600 opacity-85">All Rights Reserved. <span class="d-none d-sm-inline-block">| </span><br class="d-sm-none"> 2024 &copy; <a class="text-white opacity-85" href="#">Delivery Solution Portal</a></p>
                      </div>

                    </div>
                  </div>
                </div><!-- end of .container-->
              </section>
            </div>




        </div>

      </div>
    </main><!-- ===============================================--><!--    End of Main Content--><!-- ===============================================-->


    <!-- ===============================================--><!--    JavaScripts--><!-- ===============================================-->
    <script src="vendors/popper/popper.min.js"></script>
    <script src="vendors/bootstrap/bootstrap.min.js"></script>
    <script src="vendors/anchorjs/anchor.min.js"></script>
    <script src="vendors/is/is.min.js"></script>
    <script src="vendors/echarts/echarts.min.js"></script>
    <script src="vendors/prism/prism.js"></script>
    <script src="vendors/fontawesome/all.min.js"></script>
    <script src="vendors/lodash/lodash.min.js"></script>
    <script src="v3/polyfill.min.js?features=window.scroll"></script>
    <script src="vendors/list.js/list.min.js"></script>
    <script src="assets/js/theme.js"></script>
  </body>

</html>
