<!DOCTYPE html>
<html class="navbar-vertical-collapsed" data-bs-theme="light" lang="en-US" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Home | Delivery Solution Portal</title>

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
    <link href="vendors/glightbox/glightbox.min.css" rel="stylesheet">
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
        <div class="container-fluid" data-layout="container-fluid">
            <script>
                var isFluid = JSON.parse(localStorage.getItem('isFluid'));
                if (isFluid) {
                    var container = document.querySelector('[data-layout]');
                    container.classList.remove('container');
                    container.classList.add('container-fluid');
                }
            </script>


            <!-- Side Nav  -->
            <nav class="navbar navbar-light navbar-vertical navbar-expand-xl" style="display: none;">
                <script>
                    var navbarStyle = localStorage.getItem("navbarStyle");
                    if (navbarStyle && navbarStyle !== 'transparent') {
                        document.querySelector('.navbar-vertical').classList.add(`navbar-${navbarStyle}`);
                    }
                </script>
                <div class="d-flex align-items-center">
                    <div class="toggle-icon-wrapper">
                        <button class="btn navbar-toggler-humburger-icon navbar-vertical-toggle"
                            data-bs-toggle="tooltip" data-bs-placement="left" title="Toggle Navigation"><span
                                class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
                    </div><a class="navbar-brand" href="index.html">
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

                                <a class="nav-link" href="order-history" role="button">
                                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                                class="fas fa-flag"></span></span><span class="nav-link-text ps-1">Order
                                            History</span></div>
                                </a>
                                @if (Auth::user()->roles_id != 5)
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

            <nav class="navbar navbar-light navbar-glass navbar-top navbar-expand-lg" style="display: none;">

            </nav>


            <div class="content">

                <!-- mobile  -->
                <nav class="navbar navbar-light navbar-glass navbar-top navbar-expand bg-primary terms-sidebar"
                    style="display: none;">
                    <button class="btn navbar-toggler-humburger-icon navbar-toggler me-1 me-sm-3" type="button"
                        data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse"
                        aria-controls="navbarVerticalCollapse" aria-expanded="false"
                        aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span
                                class="toggle-line"></span></span></button>
                    <a class="navbar-brand me-1 me-sm-3" href="index.html">
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
                            <a class="nav-link notification-indicator notification-indicator-primary px-0 fa-icon-wait"
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
                                            href="../app/social/notifications.html">View all</a></div>
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

                <script>
                    var navbarPosition = localStorage.getItem('navbarPosition');
                    var navbarVertical = document.querySelector('.navbar-vertical');
                    var navbarTopVertical = document.querySelector('.content .navbar-top');
                    var navbarTop = document.querySelector('[data-layout] .navbar-top:not([data-double-top-nav');
                    var navbarDoubleTop = document.querySelector('[data-double-top-nav]');
                    var navbarTopCombo = document.querySelector('.content [data-navbar-top="combo"]');

                    if (localStorage.getItem('navbarPosition') === 'double-top') {
                        document.documentElement.classList.toggle('double-top-nav-layout');
                    }

                    if (navbarPosition === 'top') {
                        navbarTop.removeAttribute('style');
                        navbarTopVertical.remove(navbarTopVertical);
                        navbarVertical.remove(navbarVertical);
                        navbarTopCombo.remove(navbarTopCombo);
                        navbarDoubleTop.remove(navbarDoubleTop);
                    } else if (navbarPosition === 'combo') {
                        navbarVertical.removeAttribute('style');
                        navbarTopCombo.removeAttribute('style');
                        navbarTop.remove(navbarTop);
                        navbarTopVertical.remove(navbarTopVertical);
                        navbarDoubleTop.remove(navbarDoubleTop);
                    } else if (navbarPosition === 'double-top') {
                        navbarDoubleTop.removeAttribute('style');
                        navbarTopVertical.remove(navbarTopVertical);
                        navbarVertical.remove(navbarVertical);
                        navbarTop.remove(navbarTop);
                        navbarTopCombo.remove(navbarTopCombo);
                    } else {
                        navbarVertical.removeAttribute('style');
                        navbarTopVertical.removeAttribute('style');
                        navbarTop.remove(navbarTop);
                        navbarDoubleTop.remove(navbarDoubleTop);
                        navbarTopCombo.remove(navbarTopCombo);
                    }
                </script>

                <div class="row kanban-header rounded-2">
                    <section class="text-center py-0 px-0">
                        <div class="container-fluid">
                            <div class="row justify-content-center">
                                <div class="bg-yellow py-3">
                                    <h5>our working hours are from 7.00 am to 12.00 midnight</h5>
                                </div>
                                <iframe class="px-0"
                                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d317893.9737282887!2d-0.11951900000000001!3d51.503186!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487604b900d26973%3A0x4291f3172409ea92!2slastminute.com%20London%20Eye!5e0!3m2!1sen!2sus!4v1708672561327!5m2!1sen!2sus"
                                    width="1920" height="600" style="border:0;" allowfullscreen=""
                                    loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </section>


                    <section class="bg-body-tertiary dark__bg-opacity-50 text-center pt-2">
                        <div class="container-fluid">

                            <div class="row g-3 mb-3 py-5">
                                <div class="col-sm-6 col-md-3">
                                    <div class="card overflow-hidden rounded-4" style="min-width: 12rem">
                                        <div class="card-body position-relative">
                                            <div class="row flex-center mb-2">
                                                @if (Auth::user()->roles_id != 5)
                                                    <div class="col-auto bg-success rounded-3">
                                                        <a href="{{ url('order') }}">
                                                            <h5 class="py-2 text-white fs-7">New Order</h5>
                                                        </a>
                                                    </div>
                                                @endif
                                                <div class="col-auto bg-secondary rounded-3 ms-2">
                                                    <h5 class="py-2 text-white fs-7">{{ $pendingCount }}</h5>
                                                </div>
                                                <div class="col-auto fs-10 text-600"><span
                                                        class="mb-0 undefined fs-6">Pending</span> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-2">
                                    <div class="card overflow-hidden rounded-4" style="min-width: 12rem">
                                        <div class="card-body position-relative">
                                            <div class="row flex-center mb-2">
                                                <div class="col-auto bg-primary rounded-3 ms-2">
                                                    <h5 class="py-2 text-white fs-7">{{ $deliveryCount }}</h5>
                                                </div>
                                                <div class="col-auto fs-10 text-600"><span
                                                        class="mb-0 undefined fs-6">Delivery</span> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-2">
                                    <div class="card overflow-hidden rounded-4" style="min-width: 12rem">
                                        <div class="card-body position-relative">
                                            <div class="row flex-center mb-2">
                                                <div class="col-auto bg-info rounded-3 ms-2">
                                                    <h5 class="py-2 text-white fs-7">{{ $enroutesCount }}</h5>
                                                </div>
                                                <div class="col-auto fs-10 text-600"><span
                                                        class="mb-0 undefined fs-6">En Route</span> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card overflow-hidden rounded-4" style="min-width: 12rem">
                                        <div class="card-body position-relative">
                                            <div class="row flex-center mb-2">
                                                <div class="col-auto bg-success rounded-3 ms-2">
                                                    <h5 class="py-2 text-white fs-7">{{ $completeCount }}</h5>
                                                </div>
                                                <div class="col-auto fs-10 text-600"><span
                                                        class="mb-0 undefined fs-6">Complete</span> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="card overflow-hidden rounded-4" style="min-width: 12rem">
                                        <div class="card-body position-relative">
                                            <div class="row flex-center mb-2">
                                                <div class="col-auto bg-danger rounded-3 ms-2">
                                                    <h5 class="py-2 text-white fs-7">{{ $cancelCount }}</h5>
                                                </div>
                                                <div class="col-auto fs-10 text-600"><span
                                                        class="mb-0 undefined fs-6">Failure</span> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-6">
                                <div class="col-lg-3">
                                    <div class="card card-span h-100 rounded-4">
                                        <div class="card-span-img">
                                            <h5 class="py-2 text-black fs-7">{{ $pendingCount }}</h5>
                                        </div>
                                        <div class="card-body pt-6 pb-4">
                                            @if ($pendings->isEmpty())
                                                <p>No record found.</p>
                                            @endif
                                            @foreach ($pendings as $pending)
                                                <div class="card">
                                                    <div
                                                        class="card-header bg-secondary d-flex flex-between-center text-start">
                                                        <table class="table table-borderless fs-10 mb-0 text-start">
                                                            <tr>
                                                                <th class="ps-0 py-0 text-white">
                                                                    <div class="fw-normal fs-11"></div>
                                                                    <h5 class="mb-0 text-white">{{ $pending->status }}
                                                                    </h5>
                                                                </th>
                                                                <th class="pe-0 text-end py-0 text-white">
                                                                    <a class="btn-sm text-white"
                                                                        href="{{ url('order-history') }}">
                                                                        <span
                                                                            class="fas fa-pencil-alt text-white text-end"></span>
                                                                        Edit
                                                                    </a>
                                                                    <a class="btn-sm text-white"
                                                                        href="{{ url('order-history') }}">
                                                                        <span
                                                                            class="far fa-address-book text-white text-end"></span>
                                                                        Details
                                                                    </a>
                                                                </th>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                    <div class="card-body">
                                                        <table class="table table-borderless fs-10 mb-0 text-start">
                                                            <tr class="border-bottom">
                                                                <th class="ps-0 pt-0">
                                                                    <div class="text-400 fw-normal fs-11">
                                                                        {{ $pending->created_at->format('Y-m-d H::m') }}
                                                                    </div>
                                                                    <div class="bold"> Customer
                                                                        -{{ $pending->customer->name }}
                                                                    </div>
                                                                    <div class="text-800 fw-normal fs-11">
                                                                        <span
                                                                            class="fas fa-phone-alt text-success"></span>
                                                                        {{ $pending->customer->mobile }}
                                                                    </div>
                                                                </th>
                                                                <th class="pe-0 text-end pt-0">
                                                                    <div class="text-black bold">
                                                                        {{ $pending->order_no }}
                                                                    </div>
                                                                    <div></div>
                                                                </th>
                                                            </tr>
                                                            <tr>
                                                                <th class="ps-0 pb-0">
                                                                    <div class="text-400 fw-normal fs-11">
                                                                        @if (Auth::user()->roles_id == 5)
                                                                            <form
                                                                                action="{{ route('assign.driver', ['orderId' => $pending->id]) }}"
                                                                                method="POST">
                                                                                @csrf
                                                                                <button type="submit"
                                                                                    class="btn btn-primary">Assign</button>
                                                                            </form>
                                                                        @endif
                                                                    </div>
                                                                </th>
                                                                <th class="pe-0 text-end pb-0">
                                                                    <div class="text-400 fw-normal fs-11">
                                                                        {{ $pending->status }}</div>
                                                                    <div class="bold text-black">
                                                                        {{ $pending->amount }}
                                                                        <span class="fw-normal">KWD</span>
                                                                    </div>
                                                                </th>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 mt-6 mt-lg-0">
                                    <div class="card card-span h-100 rounded-4">
                                        <div class="card-span-img">
                                            <h5 class="py-2 text-black fs-7">{{ $deliveryCount }}</h5>
                                        </div>
                                        <div class="card-body pt-6 pb-4">
                                            @if ($deliverys->isEmpty())
                                                <p>No record found.</p>
                                            @endif
                                            @foreach ($deliverys as $delivery)
                                                <div class="card">
                                                    <div
                                                        class="card-header bg-primary d-flex flex-between-center text-start">
                                                        <table class="table table-borderless fs-10 mb-0 text-start">
                                                            <tr>
                                                                <th class="ps-0 py-0 text-white">
                                                                    <div class="fw-normal fs-11"></div>
                                                                    <h5 class="mb-0 text-white">
                                                                        {{ $delivery->status }}
                                                                    </h5>
                                                                </th>
                                                                <th class="pe-0 text-end py-0 text-white">
                                                                    <a class="btn-sm text-white"
                                                                        href="{{ url('order-history') }}">
                                                                        <span
                                                                            class="fas fa-pencil-alt text-white text-end"></span>
                                                                        Edit
                                                                    </a>
                                                                    <a class="btn-sm text-white"
                                                                        href="{{ url('order-history') }}">
                                                                        <span
                                                                            class="far fa-address-book text-white text-end"></span>
                                                                        Details
                                                                    </a>
                                                                </th>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                    <div class="card-body">
                                                        <table class="table table-borderless fs-10 mb-0 text-start">
                                                            <tr class="border-bottom">
                                                                <th class="ps-0 pt-0">
                                                                    <div class="text-400 fw-normal fs-11">
                                                                        {{ $delivery->created_at->format('Y-m-d H::m') }}
                                                                    </div>
                                                                    <div class="bold">
                                                                        Customer - {{ $delivery->customer->name }}
                                                                    </div>
                                                                    <div class="text-800 fw-normal fs-11">
                                                                        <span
                                                                            class="fas fa-phone-alt text-success"></span>
                                                                        {{ $delivery->customer->mobile }}
                                                                    </div>
                                                                </th>
                                                                <th class="pe-0 text-end pt-0">
                                                                    <div class="text-black bold">
                                                                        {{ $delivery->order_no }}
                                                                    </div>
                                                                    <div></div>
                                                                </th>
                                                            </tr>
                                                            <tr>
                                                                <th class="ps-0 pb-0">
                                                                    <div class="text-400 fw-normal fs-11">
                                                                        Driver -
                                                                        {{ $delivery->driverOrder ? $delivery->driverOrder->driver->name : '-' }}
                                                                    </div>
                                                                </th>
                                                                <th class="pe-0 text-end pb-0">
                                                                    <div class="text-400 fw-normal fs-11">
                                                                        {{ $delivery->status }}</div>
                                                                    <div class="bold text-black">
                                                                        {{ $delivery->amount }}
                                                                        <span class="fw-normal">KWD</span>
                                                                    </div>
                                                                </th>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-3 mt-6 mt-lg-0">
                                    <div class="card card-span h-100 rounded-4">
                                        <div class="card-span-img">
                                            <h5 class="py-2 text-black fs-7">{{ $completeCount }}</h5>
                                        </div>
                                        <div class="card-body pt-6 pb-4">
                                            @if ($completes->isEmpty())
                                                <p>No record found.</p>
                                            @endif
                                            @foreach ($completes as $complete)
                                                <div class="card">
                                                    <div
                                                        class="card-header bg-success d-flex flex-between-center text-start">
                                                        <table class="table table-borderless fs-10 mb-0 text-start">
                                                            <tr>
                                                                <th class="ps-0 py-0 text-white">
                                                                    <div class="fw-normal fs-11"></div>
                                                                    <h5 class="mb-0 text-white">
                                                                        {{ $complete->status }}
                                                                    </h5>
                                                                </th>
                                                                <th class="pe-0 text-end py-0 text-white">
                                                                    <a class="btn-sm text-white"
                                                                        href="{{ url('order-history') }}">
                                                                        <span
                                                                            class="fas fa-pencil-alt text-white text-end"></span>
                                                                        Edit
                                                                    </a>
                                                                    <a class="btn-sm text-white"
                                                                        href="{{ url('order-history') }}">
                                                                        <span
                                                                            class="far fa-address-book text-white text-end"></span>
                                                                        Details
                                                                    </a>
                                                                </th>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                    <div class="card-body">
                                                        <table class="table table-borderless fs-10 mb-0 text-start">
                                                            <tr class="border-bottom">
                                                                <th class="ps-0 pt-0">
                                                                    <div class="text-400 fw-normal fs-11">
                                                                        {{ $complete->created_at->format('Y-m-d H::m') }}
                                                                    </div>
                                                                    <div class="bold">
                                                                        Customer - {{ $complete->customer->name }}
                                                                    </div>
                                                                    <div class="text-800 fw-normal fs-11">
                                                                        <span
                                                                            class="fas fa-phone-alt text-success"></span>
                                                                        {{ $complete->customer->mobile }}
                                                                    </div>
                                                                </th>
                                                                <th class="pe-0 text-end pt-0">
                                                                    <div class="text-black bold">
                                                                        {{ $complete->order_no }}
                                                                    </div>
                                                                    <div></div>
                                                                </th>
                                                            </tr>
                                                            <tr>
                                                                <th class="ps-0 pb-0">
                                                                    <div class="text-400 fw-normal fs-11">
                                                                    </div>
                                                                </th>
                                                                <th class="pe-0 text-end pb-0">
                                                                    <div class="text-400 fw-normal fs-11">
                                                                        {{ $complete->status }}</div>
                                                                    <div class="bold text-black">
                                                                        {{ $complete->amount }}
                                                                        <span class="fw-normal">KWD</span>
                                                                    </div>
                                                                </th>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 mt-6 mt-lg-0">
                                    <div class="card card-span h-100 rounded-4">
                                        <div class="card-span-img">
                                            <h5 class="py-2 text-black fs-7">{{ $cancelCount }}</h5>
                                        </div>
                                        <div class="card-body pt-6 pb-4">
                                            @if ($cancels->isEmpty())
                                                <p>No record found.</p>
                                            @endif
                                            @foreach ($cancels as $cancel)
                                                <div class="card">
                                                    <div
                                                        class="card-header bg-danger d-flex flex-between-center text-start">
                                                        <table class="table table-borderless fs-10 mb-0 text-start">
                                                            <tr>
                                                                <th class="ps-0 py-0 text-white">
                                                                    <div class="fw-normal fs-11"></div>
                                                                    <h5 class="mb-0 text-white">{{ $cancel->status }}
                                                                    </h5>
                                                                </th>
                                                                <th class="pe-0 text-end py-0 text-white">
                                                                    <a class="btn-sm text-white"
                                                                        href="{{ url('order-history') }}">
                                                                        <span
                                                                            class="fas fa-pencil-alt text-white text-end"></span>
                                                                        Edit
                                                                    </a>
                                                                    <a class="btn-sm text-white"
                                                                        href="{{ url('order-history') }}">
                                                                        <span
                                                                            class="far fa-address-book text-white text-end"></span>
                                                                        Details
                                                                    </a>
                                                                </th>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                    <div class="card-body">
                                                        <table class="table table-borderless fs-10 mb-0 text-start">
                                                            <tr class="border-bottom">
                                                                <th class="ps-0 pt-0">
                                                                    <div class="text-400 fw-normal fs-11">
                                                                        {{ $cancel->created_at->format('Y-m-d H::m') }}
                                                                    </div>
                                                                    <div class="bold">Customer -
                                                                        {{ $cancel->customer->name }}
                                                                    </div>
                                                                    <div class="text-800 fw-normal fs-11">
                                                                        <span
                                                                            class="fas fa-phone-alt text-success"></span>
                                                                        {{ $cancel->customer->mobile }}
                                                                    </div>
                                                                </th>
                                                                <th class="pe-0 text-end pt-0">
                                                                    <div class="text-black bold">
                                                                        {{ $cancel->order_no }}
                                                                    </div>
                                                                    <div></div>
                                                                </th>
                                                            </tr>
                                                            <tr>
                                                                <th class="ps-0 pb-0">
                                                                    <div class="text-400 fw-normal fs-11">
                                                                    </div>
                                                                </th>
                                                                <th class="pe-0 text-end pb-0">
                                                                    <div class="text-400 fw-normal fs-11">
                                                                        {{ $cancel->status }}</div>
                                                                    <div class="bold text-black">
                                                                        {{ $cancel->amount }}
                                                                        <span class="fw-normal">KWD</span>
                                                                    </div>
                                                                </th>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- end of .container-->
                    </section>
                    <!-- <section> close ============================--><!-- ============================================-->

                    <section class="py-0 bg-dark bottom-bar" data-bs-theme="light">
                        <div>
                            <hr class="my-0 text-600 opacity-25">
                            <div class="container py-3">
                                <div class="row justify-content-between fs-10">
                                    <div class="col-12 col-sm-auto text-center">
                                        <p class="mb-0 text-600 opacity-85">All Rights Reserved. <span
                                                class="d-none d-sm-inline-block">| </span><br class="d-sm-none"> 2024
                                            &copy; <a class="text-white opacity-85" href="#">Delivery Solution
                                                Portal</a></p>
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
    <script src="vendors/glightbox/glightbox.min.js"></script>
    <script src="vendors/draggable/draggable.bundle.legacy.js"></script>
    <script src="vendors/fontawesome/all.min.js"></script>
    <script src="vendors/lodash/lodash.min.js"></script>
    <script src="v3/polyfill.min.js?features=window.scroll"></script>
    <script src="vendors/list.js/list.min.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>
