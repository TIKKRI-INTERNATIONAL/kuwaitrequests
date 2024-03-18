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
    <!-- Google Maps API -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap" async defer></script>
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

                            <li class="nav-item"><!-- label-->

                                <a class="nav-link" href="home" role="button">
                                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                                class="fas fa-flag"></span></span><span
                                            class="nav-link-text ps-1">Dashboard</span></div>
                                </a>
                                <a class="nav-link" href="order-history" role="button">
                                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                                class="fas fa-flag"></span></span><span class="nav-link-text ps-1">Order
                                            History</span></div>
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
                    <div class="col-lg-6 col-xl-12 col-xxl-8 h-100 pt-5">
                        <div class="d-flex mb-4"><span class="fa-stack me-2 ms-n1"><i
                                    class="fas fa-circle fa-stack-2x text-300"></i><i
                                    class="fa-inverse fa-stack-1x text-primary fas fa-spinner"></i></span>
                            <div class="col">
                                <h5 class="mb-0 text-primary position-relative"><span
                                        class="bg-200 dark__bg-1100 pe-3">New Order</span><span
                                        class="border position-absolute top-50 translate-middle-y w-100 start-0 z-n1"></span>
                                </h5>

                            </div>
                        </div>
                        <div class="card theme-wizard mb-5">
                            <div class="card-header bg-body-tertiary pt-3 pb-2">
                                <ul class="nav justify-content-between nav-wizard">
                                    <li class="nav-item"><a class="nav-link active fw-semi-bold"
                                            href="#bootstrap-wizard-tab1" data-bs-toggle="tab"
                                            data-wizard-step="1"><span class="nav-item-circle-parent"><span
                                                    class="nav-item-circle"><span
                                                        class="fas fa-lock"></span></span></span><span
                                                class="d-none d-md-block mt-1 fs-10">Customer Infomation</span></a>
                                    </li>
                                    <li class="nav-item"><a class="nav-link fw-semi-bold"
                                            href="#bootstrap-wizard-tab2" data-bs-toggle="tab"
                                            data-wizard-step="2"><span class="nav-item-circle-parent"><span
                                                    class="nav-item-circle"><span
                                                        class="fas fa-user"></span></span></span><span
                                                class="d-none d-md-block mt-1 fs-10">Address Details</span></a></li>
                                    <li class="nav-item"><a class="nav-link fw-semi-bold"
                                            href="#bootstrap-wizard-tab4" data-bs-toggle="tab"
                                            data-wizard-step="4"><span class="nav-item-circle-parent"><span
                                                    class="nav-item-circle"><span
                                                        class="fas fa-thumbs-up"></span></span></span><span
                                                class="d-none d-md-block mt-1 fs-10">Order Done</span></a></li>
                                </ul>
                            </div>
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <div class="card-body py-4">
                                <form method="POST" action="{{ route('order.store') }}">
                                    @csrf

                                    <div class="tab-content">
                                        <div class="tab-pane active px-sm-3 px-md-5" role="tabpanel"
                                            aria-labelledby="bootstrap-wizard-tab1" id="bootstrap-wizard-tab1">
                                            <div class="row gx-2">
                                                <div class="mb-3 col-sm-6">
                                                    <label for="Customer Phone"
                                                        class="text-primary fs-10 fw-bold">Customer Phone</label>
                                                    <input class="form-control rounded-2 py-3" type="text"
                                                        name="mobile" required placeholder="+965 1234 5678">
                                                </div>
                                                <div class="mb-3 col-sm-6">
                                                    <label for="Customer Name"
                                                        class="text-primary fs-10 fw-bold">Customer Name</label>
                                                    <input class="form-control rounded-2 py-3" type="text"
                                                        name="name" required placeholder="Customer Name">
                                                </div>
                                            </div>

                                            <div class="row gx-2">
                                                <div class="mb-3 col-sm-8">
                                                    <label for="Customer Name"
                                                        class="text-primary fs-10 fw-bold">Payment Type</label>
                                                    <ul class="nav nav-pills mb-3">
                                                        @foreach ($pays as $pay)
                                                            <li class="nav-item border" role="presentation">
                                                                <button
                                                                    class="nav-link pay-select{{ $loop->first ? ' active' : '' }}"
                                                                    data-bs-toggle="pill" type="button"
                                                                    role="tab"
                                                                    aria-selected="{{ $loop->first ? 'true' : 'false' }}"
                                                                    data-pay-id="{{ $pay->id }}">
                                                                    <span
                                                                        class="d-md-inline-block py-2">{{ $pay->name }}</span>
                                                                </button>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                    <input type="hidden" name="pays" id="selectedPay">
                                                </div>
                                                <div class="mb-3 col-sm-4">
                                                    <label for="Customer Name"
                                                        class="text-primary fs-10 fw-bold">Amount</label>
                                                    <input class="form-control rounded-2 py-3" type="number"
                                                        name="amount" required placeholder="0.0000">
                                                </div>
                                            </div>

                                            <div class="mb-3"><label class="form-label text-primary fs-10 fw-bold"
                                                    for="bootstrap-wizard-gender">Vehicle Type</label>
                                                <select class="form-select rounded-2 py-3" name="type"
                                                    id="bootstrap-wizard-gender">
                                                    <option value="">Select your vehicle</option>
                                                    @foreach ($types as $type)
                                                        <option value="{{ $type->id }}">{{ $type->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="mb-3">
                                                <label for="Order Number" class="text-primary fs-10 fw-bold">Order
                                                    Number/ Details</label>
                                                <input class="form-control rounded-2 py-3" type="text"
                                                    name="order_no" placeholder="Order Number" required>
                                            </div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="terms"
                                                    required="required" checked="checked"
                                                    id="bootstrap-wizard-wizard-checkbox">
                                                <label class="form-check-label"
                                                    for="bootstrap-wizard-wizard-checkbox">I accept the <a
                                                        href="#!">terms </a>and <a href="#!">privacy
                                                        policy</a></label>
                                            </div>
                                            <!-- First form fields -->
                                            <div class="card-footer bg-body-tertiary">
                                                <div class="px-sm-3 px-md-5">
                                                    <ul class="pager wizard list-inline mb-0">
                                                        <li class="previous"><button class="btn btn-link ps-0"
                                                                type="button"><span class="fas fa-chevron-left me-2"
                                                                    data-fa-transform="shrink-3"></span>Prev</button>
                                                        </li>
                                                        <li class="next">
                                                            <button id="submitAndSwitchBtn"
                                                                class="btn btn-primary px-2 px-sm-4 py-2 rounded-5 fs-8"
                                                                type="button">Next Step
                                                                <span class="fas fa-chevron-right ms-2"
                                                                    data-fa-transform="shrink-3"> </span>
                                                            </button>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="tab-pane px-sm-3 px-md-5" role="tabpanel"
                                            aria-labelledby="bootstrap-wizard-tab2" id="bootstrap-wizard-tab2">
                                            <div class="row">
                                                <!-- Left Side: Form -->
                                                <div class="col-md-6">
                                                    <div class="row gx-2">
                                                        <div class="mb-3 col-sm-6">
                                                            <label class="form-label"
                                                                for="bootstrap-wizard-gender">Area</label>
                                                            <select class="form-select rounded-2 py-3" name="area"
                                                                id="bootstrap-wizard-gender">
                                                                <option value="">Select your Area ...</option>
                                                                <option value="Salmiya">Salmiya</option>
                                                                <option value="Kuwait City">Kuwait City</option>
                                                                <option value="Hawally">Hawally</option>
                                                            </select>
                                                        </div>

                                                        <div class="mb-3 col-sm-6">
                                                            <label class="form-label"
                                                                for="bootstrap-wizard-gender">Block</label>
                                                            <select class="form-select rounded-2 py-3" name="block"
                                                                id="bootstrap-wizard-gender">
                                                                <option value="">Select your Block ...</option>
                                                                <option value="Block 1">Block 1</option>
                                                                <option value="Block 2">Block 2</option>
                                                                <option value="Block 3">Block 3</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="form-label"
                                                            for="bootstrap-wizard-wizard-phone">Street</label>
                                                        <input class="form-control rounded-2 py-3" type="text"
                                                            name="street" placeholder="Street"
                                                            id="bootstrap-wizard-wizard-phone">
                                                    </div>

                                                    <div class="row gx-2">
                                                        <div class="mb-3 col-sm-6">
                                                            <label class="form-label" for="building">Building Number
                                                                or
                                                                Name</label>
                                                            <input class="form-control rounded-2 py-3" type="text"
                                                                name="building" placeholder="Building Number or Name"
                                                                id="building">
                                                        </div>

                                                        <div class="mb-3 col-sm-6">
                                                            <label class="form-label" for="jedda">Jedda</label>
                                                            <input class="form-control rounded-2 py-3" type="text"
                                                                name="jedda" placeholder="Jedda" id="jedda">
                                                        </div>

                                                        <div class="mb-3 col-sm-6">
                                                            <label class="form-label" for="apartment">Apartment /
                                                                Office</label>
                                                            <input class="form-control rounded-2 py-3" type="text"
                                                                name="apartment" placeholder="Apartment or Office"
                                                                id="apartment">
                                                        </div>

                                                        <div class="mb-3 col-sm-6">
                                                            <label class="form-label" for="floor">Floor</label>
                                                            <input class="form-control rounded-2 py-3" type="text"
                                                                name="floor" placeholder="Floor" id="floor">
                                                        </div>

                                                        <div class="mb-3 col-sm-6">
                                                            <label class="form-label" for="distance">Distance </label>
                                                            <input class="form-control rounded-2 py-3" type="text"
                                                                name="distance" placeholder="Distance"
                                                                id="distance">
                                                        </div>

                                                        <div class="mb-3 col-sm-6">
                                                            <label class="form-label" for="delivery">Delivery Charges</label>
                                                            <input class="form-control rounded-2 py-3" type="text"
                                                                name="delivery" placeholder="Delivery Charges" id="delivery">
                                                        </div>

                                                        <div class="mb-3">
                                                            <label class="form-label"
                                                                for="bootstrap-wizard-wizard-datepicker">Notes</label>
                                                            <input class="form-control rounded-2 py-3 datetimepicker"
                                                                type="text" name="notes"
                                                                placeholder="Note / Instruction"
                                                                id="bootstrap-wizard-wizard-datepicker">
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Right Side: Google Maps -->
                                                <div class="col-md-6">
                                                    <div id="map" style="height: 600px;"></div>
                                                </div>
                                            </div>
                                            <!-- Second form fields -->
                                            <div class="card-footer bg-body-tertiary">
                                                <div class="px-sm-3 px-md-5">
                                                    <ul class="pager wizard list-inline mb-0">
                                                        <li class="previous">
                                                            <button class="btn btn-link ps-0" type="button">
                                                                <span class="fas fa-chevron-left me-2"
                                                                    data-fa-transform="shrink-3"></span>Prev
                                                            </button>
                                                        </li>
                                                        <li class="next">
                                                            <button
                                                                class="btn btn-primary px-2 px-sm-4 py-2 rounded-5 fs-8"
                                                                type="submit">Next Step
                                                                <span class="fas fa-chevron-right ms-2"
                                                                    data-fa-transform="shrink-3"></span>
                                                            </button>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane text-center px-sm-3 px-md-5" role="tabpanel"
                                            aria-labelledby="bootstrap-wizard-tab4" id="bootstrap-wizard-tab4">
                                            <h4 class="mb-1">Your all data correct ?</h4>
                                            <p>Now you can create order</p><a class="btn btn-primary px-5 my-3"
                                                href="#">Create Order</a>
                                        </div>

                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>


                    <!-- <section> close ============================--><!-- ============================================-->

                    <section class="py-0 bg-dark bottom-bar" data-bs-theme="light">
                        <div>
                            <hr class="my-0 text-600 opacity-25">
                            <div class="container py-3">
                                <div class="row justify-content-between fs-10">
                                    <div class="col-12 col-sm-auto text-center">
                                        <p class="mb-0 text-600 opacity-85">All Rights Reserved. <span
                                                class="d-none d-sm-inline-block">| </span><br class="d-sm-none">
                                            2024 &copy; <a class="text-white opacity-85" href="#">Delivery
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
    <script>
        // JavaScript to handle role selection and update the hidden input field
        document.addEventListener('DOMContentLoaded', function() {
            const payButtons = document.querySelectorAll('.pay-select');
            const selectedPayInput = document.getElementById('selectedPay');

            payButtons.forEach(function(button) {
                button.addEventListener('click', function() {
                    const payId = this.getAttribute('data-pay-id');
                    selectedPayInput.value = payId;
                });
            });
        });
    </script>
    <!-- Bootstrap Bundle with Popper -->

    <script>
        function initMap() {
            var kuwait = {
                lat: 29.3759,
                lng: 47.9774
            };
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 10,
                center: kuwait
            });
            var marker = new google.maps.Marker({
                position: kuwait,
                map: map,
                title: 'Kuwait'
            });
        }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?callback=initMap" async defer></script>
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
