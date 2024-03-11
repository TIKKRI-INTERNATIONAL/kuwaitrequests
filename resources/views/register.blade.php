<!DOCTYPE html>
<html data-bs-theme="light" lang="en-US" dir="ltr">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Delivery Solution Portal</title>


        <link rel="apple-touch-icon" sizes="180x180" href=" assets/img/favicons/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href=" assets/img/favicons/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href=" assets/img/favicons/favicon-16x16.png">
        <link rel="shortcut icon" type="image/x-icon" href=" assets/img/favicons/favicon.ico">
        <link rel="manifest" href=" assets/img/favicons/manifest.json">
        <meta name="msapplication-TileImage" content=" assets/img/favicons/mstile-150x150.png">
        <meta name="theme-color" content="#ffffff">
        <script src=" assets/js/config.js"></script>
        <script src=" vendors/simplebar/simplebar.min.js"></script>


        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="../../css?family=Open+Sans:300,400,500,600,700%7cPoppins:300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">
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

        <style>
            .background-split{
                background-image: linear-gradient(
                    to bottom,
                    #163F8C 0%,
                    #163F8C 50%,
                    #F9D747 50%,
                    #F9D747 100%
                    );
                height: 100vh;
            }
        </style>
    </head>

    <body>

        <main class="main" id="top">
            <div class="container-fluid background-split" data-layout="container">
                <script>
                    var isFluid = JSON.parse(localStorage.getItem('isFluid'));
                    if (isFluid) {
                        var container = document.querySelector('[data-layout]');
                        container.classList.remove('container');
                        container.classList.add('container-fluid');
                    }
                </script>
                <div class=" mx-auto row flex-center min-vh-100 py-6">
                    <div class="col-sm-10 col-md-8 col-lg-6 col-xl-5 col-xxl-4">
                        <div class="card card rounded-5">

                            <div class="card-body p-4 p-sm-5">
                                <a class="d-flex flex-center mb-1" href=" index.html"><img class="me-2" src=" assets/img/icons/spot-illustrations/logo.png" alt="" width="100"></a>
                                <h5 class="text-center pb-3 text-primary fw-bold fs-6">Delivery Solution Portal</h5>

                                <form>
                                    <div class="mb-2">
                                        <label for="Email address"  class="text-primary fs-10 fw-bold">Name</label>
                                        <input class="form-control" type="text" autocomplete="on" placeholder="Name"></div>
                                    <div class="mb-2">
                                        <label for="Email address" class="text-primary fs-10 fw-bold">Email address</label>
                                        <input class="form-control" type="email" placeholder="Email address"></div>
                                    <div class="row gx-2">
                                        <div class="mb-3 col-sm-6">
                                            <label for="Password" class="text-primary fs-10 fw-bold">Password</label>
                                            <input class="form-control" type="password" autocomplete="on" placeholder="Password"></div>
                                        <div class="mb-3 col-sm-6">
                                            <label for="Password" class="text-primary fs-10 fw-bold">Confirm Password</label>
                                            <input class="form-control" type="password" autocomplete="on" placeholder="Confirm Password"></div>
                                    </div>
                                    <div class="form-check"><input class="form-check-input" type="checkbox" id="basic-register-checkbox"><label class="form-label" for="basic-register-checkbox">I accept the <a href="#!">terms </a>and <a class="white-space-nowrap" href="#!">privacy policy</a></label></div>

                                    <div class="mb-3"><button class="btn btn-primary d-block w-100 mt-3 rounded-5 fs-8" type="submit" name="submit">SIGN UP</button></div>
                                    <div class="col-auto fs-10 text-600"><span class="mb-0 undefined">Have an account?</span> <span><a href="login.html">Login</a></span></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>




        <!-- ===============================================--><!--    JavaScripts--><!-- ===============================================-->
        <script src=" vendors/popper/popper.min.js"></script>
        <script src=" vendors/bootstrap/bootstrap.min.js"></script>
        <script src=" vendors/anchorjs/anchor.min.js"></script>
        <script src=" vendors/is/is.min.js"></script>
        <script src=" vendors/fontawesome/all.min.js"></script>
        <script src=" vendors/lodash/lodash.min.js"></script>
        <script src=" ../../v3/polyfill.min.js?features=window.scroll"></script>
        <script src=" vendors/list.js/list.min.js"></script>
        <script src=" assets/js/theme.js"></script>
    </body>

</html>
