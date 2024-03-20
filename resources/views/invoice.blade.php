<!DOCTYPE html>
<html data-bs-theme="light" lang="en-US" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ===============================================--><!--    Document Title--><!-- ===============================================-->
    <title>Wallet | Delivery Solution Portal</title>

    <!-- ===============================================--><!--    Favicons--><!-- ===============================================-->
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
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="css?family=Open+Sans:300,400,500,600,700%7cPoppins:300,400,500,600,700,800,900&amp;display=swap"
        rel="stylesheet">
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
                        <button class="btn navbar-toggler-humburger-icon navbar-vertical-toggle"
                            data-bs-toggle="tooltip" data-bs-placement="left" title="Toggle Navigation"><span
                                class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
                    </div><a class="navbar-brand" href="wallet">
                        <div class="d-flex align-items-center py-3">
                            <span class="fas fa-money-check text-secondary"
                                style="font-size: 30px; padding-right: 10px;"></span><span
                                class="text-secondary dark__text-white "> 20KWD</span>
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
                                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                                class="fas fa-flag"></span></span><span
                                            class="nav-link-text ps-1">Dashboard</span></div>
                                </a>
                                @if (Auth::user()->roles_id != 5)
                                    <a class="nav-link" href="order-history" role="button">
                                        <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                                    class="fas fa-flag"></span></span><span
                                                class="nav-link-text ps-1">Order History</span></div>
                                    </a>
                                    <a class="nav-link" href="branch-summery" role="button">
                                        <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                                    class="fas fa-flag"></span></span><span
                                                class="nav-link-text ps-1">Branches Summary</span></div>
                                    </a>

                                    <a class="nav-link" href="profile" role="button">
                                        <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                                    class="fas fa-flag"></span></span><span
                                                class="nav-link-text ps-1">Setting</span></div>
                                    </a>
                                @endif

                            <li class="nav-item"><!-- label-->
                                <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
                                    <div class="col-auto navbar-vertical-label">Language Switcher</div>
                                    <div class="col ps-0">
                                        <hr class="mb-0 navbar-vertical-divider">
                                    </div>
                                </div>
                                <a class="nav-link" href="#" role="button">
                                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                                class="fas fa-rocket"></span></span><span
                                            class="nav-link-text ps-1">Arabic</span></div>
                                </a>

                            </li>
                        </ul>

                    </div>
                </div>
            </nav>

            <div class="content">

                <nav class="navbar navbar-light navbar-glass navbar-top navbar-expand bg-primary">
                    <button class="btn navbar-toggler-humburger-icon navbar-toggler me-1 me-sm-3" type="button"
                        data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse"
                        aria-controls="navbarVerticalCollapse" aria-expanded="false"
                        aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span
                                class="toggle-line"></span></span></button>
                    <a class="navbar-brand me-1 me-sm-3" href="home">
                    </a>

                    <ul class="navbar-nav navbar-nav-icons ms-auto flex-row align-items-center">
                        <li class="nav-item dropdown vertical-line vertical-line-400 px-4">
                            <a class="nav-link dropdown-toggle pe-0 ps-2 text-white px-4 fs-8" id="navbarDropdownUser"
                                role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">Kuwait Request

                            </a>
                            <div class="dropdown-menu dropdown-caret dropdown-caret dropdown-menu-end py-0"
                                aria-labelledby="navbarDropdownUser">
                                <div class="bg-white dark__bg-1000 rounded-2 py-2">
                                    <a class="dropdown-item link-600 fw-medium" href="#">Salmiya</a>
                                    <a class="dropdown-item link-600 fw-medium" href="#">Hawally</a>
                                    <a class="dropdown-item link-600 fw-medium" href="$">Kuwait City<span
                                            class="badge rounded-pill ms-2 badge-subtle-success">New</span></a>
                                    <a class="dropdown-item link-600 fw-medium" href="#">Jahra</a>
                                    <a class="dropdown-item link-600 fw-medium" href="#">Magaf</a>

                                </div>
                            </div>
                        </li>

                        <li class="nav-item dropdown vertical-line vertical-line-400 px-3 ">
                            <a class="nav-link notification-indicator notification-indicator-primary px-0 fa-icon-wait text-white"
                                id="navbarDropdownNotification" role="button" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false"
                                data-hide-on-body-scroll="data-hide-on-body-scroll"><span class="fas fa-bell"
                                    data-fa-transform="shrink-6" style="font-size: 30px;"></span></a>
                            <div class="dropdown-menu dropdown-caret dropdown-caret dropdown-menu-end dropdown-menu-card dropdown-menu-notification dropdown-caret-bg"
                                aria-labelledby="navbarDropdownNotification">
                                <div class="card card-notification shadow-none">
                                    <div class="card-header">
                                        <div class="row justify-content-between align-items-center">
                                            <div class="col-auto">
                                                <h6 class="card-header-title mb-0">Notifications</h6>
                                            </div>
                                            <div class="col-auto ps-0 ps-sm-3"><a class="card-link fw-normal"
                                                    href="#">Mark all as read</a></div>
                                        </div>
                                    </div>
                                    <div class="scrollbar-overlay" style="max-height:19rem">
                                    </div>
                                    <div class="card-footer text-center border-top"><a class="card-link d-block"
                                            href="#">View all</a></div>
                                </div>
                            </div>
                        </li>



                        <li>
                            <a class="nav-link dropdown-toggle pe-0 ps-2 text-white px-4 fs-8" id="navbarDropdownUser"
                                role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <div class="avatar avatar-xl">
                                    <img class="me-2 ms-2" src=" assets/img/icons/spot-illustrations/logo.png"
                                        alt="" width="100">
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-caret dropdown-caret dropdown-menu-end py-0"
                                aria-labelledby="navbarDropdownUser">
                                <div class="bg-white dark__bg-1000 rounded-2 py-2">
                                    <a class="dropdown-item link-600 fw-medium" href="#">Change Password</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                        @csrf
                                        <button type="submit"
                                            class="dropdown-item link-600 fw-medium">Logout</button>
                                    </form>


                                </div>
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

                    <div class="col-lg-12 row">
                        <div class="col-lg-3 pe-lg-0 pt-3">

                            <div class="card">
                                <div class="tab-content">
                                    <div class="tab-pane preview-tab-pane active" role="tabpanel"
                                        aria-labelledby="tab-dom-982cdc58-496a-4d4a-b8ff-5049feeaa54b"
                                        id="dom-982cdc58-496a-4d4a-b8ff-5049feeaa54b">
                                        <div class="list-group"><a
                                                class="list-group-item list-group-item-action active"
                                                href="#">Setting</a>
                                            <a class="list-group-item list-group-item-action"
                                                href="profile">Profile</a>
                                            <a class="list-group-item list-group-item-action" href="employee">Manage
                                                Employee</a>
                                            <a class="list-group-item list-group-item-action" href="driver">Manage
                                                Driver</a>
                                            <a class="list-group-item list-group-item-action" href="branch">Manage
                                                Branches</a>
                                            <a class="list-group-item list-group-item-action"
                                                href="invoice">Invoices</a>
                                            <a class="list-group-item list-group-item-action"
                                                href="subscription">Subscription Plan</a>
                                            <a class="list-group-item list-group-item-action"
                                                href="wallet">Wallet</a>
                                            <a class="list-group-item list-group-item-action" href="#">API
                                                Setting</a>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="col-lg-9 px-lg-0">
                            <div class="row ms-lg-0 pe-lg-2">



                                <div class="col-xxl-12 col-md-12 pt-3">
                                    <div class="card shopping-cart-bar-min-height h-100">
                                        <div class="card-header d-flex flex-between-center">
                                            <h3 class="mb-0 text-primary fw-bold">Invoices List</h3>

                                        </div>

                                    </div>

                                </div>
                                <div class="col-lg-12 col-md-6 pt-3 pb-3">
                                    <div class="card h-100">
                                        <div class="card-header">
                                            <h5 class="mb-0">Paid</h5>
                                        </div>

                                        <div class="card-body bg-body-tertiary">





                                            <div class="card mt-3">
                                                <div class="card-body pb-0 pt-2">
                                                    <table class="table table-borderless fs-10 mb-0 text-start">
                                                        <tr class="border-bottom">

                                                            <th class="ps-0 pt-0">
                                                                <div class="text-black fw-bold fs-9 ">100000001</div>
                                                                <div class="bold">Merchant top up</div>
                                                                <div class="text-800 fw-normal fs-11"> 01/02/2024
                                                                    02:25:53</div>
                                                            </th>
                                                            <th class="pe-0 text-end ">
                                                                <div class="text-success bold fs-6"> +5.000KWD</div>
                                                            </th>
                                                        </tr>

                                                        <tr class="border-bottom">

                                                            <th class="ps-0 pt-0">
                                                                <div class="text-black fw-bold fs-9 ">100000001</div>
                                                                <div class="bold">Merchant top up</div>
                                                                <div class="text-800 fw-normal fs-11"> 01/02/2024
                                                                    02:25:53</div>
                                                            </th>
                                                            <th class="pe-0 text-end ">
                                                                <div class="text-success bold fs-6"> +5.000KWD</div>
                                                            </th>
                                                        </tr>
                                                    </table>
                                                </div>
                                            </div>


                                        </div>

                                    </div>
                                </div>


                                <nav aria-label="Page navigation example">
                                    <ul class="pagination justify-content-end">
                                        <li class="page-item"><a class="page-link" href="#" tabindex="-1"
                                                aria-disabled="true">Previous</a></li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>




                        <div class="col-lg-12 col-md-6 pt-3 pb-3">
                            <div class="card h-100">
                                <div class="card-header">
                                    <h5 class="mb-0">Documents </h5>
                                </div>
                                <div class="card-body bg-body-tertiary">








                                    <!-- <section> close ============================--><!-- ============================================-->

                                    <section class="py-0 bg-dark bottom-bar" data-bs-theme="light">
                                        <div>
                                            <hr class="my-0 text-600 opacity-25">
                                            <div class="container py-3">
                                                <div class="row justify-content-between fs-10">
                                                    <div class="col-12 col-sm-auto text-center">
                                                        <p class="mb-0 text-600 opacity-85">All Rights Reserved. <span
                                                                class="d-none d-sm-inline-block">| </span><br
                                                                class="d-sm-none"> 2024 &copy; <a
                                                                class="text-white opacity-85" href="#">Delivery
                                                                Solution Portal</a></p>
                                                    </div>

                                                </div>
                                            </div>
                                        </div><!-- end of .container-->
                                    </section>
                                </div>


                            </div>


                        </div>
    </main>
    <!-- ===============================================--><!--    End of Main Content--><!-- ===============================================-->



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
