@include('header')

<div class="col-lg-12 row">
    <div class="col-lg-3 pe-lg-0 pt-3">

        <div class="card">
            <div class="tab-content">
                <div class="tab-pane preview-tab-pane active" role="tabpanel"
                    aria-labelledby="tab-dom-982cdc58-496a-4d4a-b8ff-5049feeaa54b"
                    id="dom-982cdc58-496a-4d4a-b8ff-5049feeaa54b">
                    <div class="list-group"><a class="list-group-item list-group-item-action active"
                            href="#">Setting</a>
                        <a class="list-group-item list-group-item-action" href="profile">Profile</a>
                        <a class="list-group-item list-group-item-action" href="employee">Manage
                            Employee</a>
                        <a class="list-group-item list-group-item-action" href="driver">Manage
                            Driver</a>
                        <a class="list-group-item list-group-item-action" href="branch">Manage
                            Branches</a>
                        <a class="list-group-item list-group-item-action" href="invoice">Invoices</a>
                        <a class="list-group-item list-group-item-action" href="subscription">Subscription Plan</a>
                        <a class="list-group-item list-group-item-action" href="wallet">Wallet</a>
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
                                            class="d-none d-sm-inline-block">| </span><br class="d-sm-none"> 2024 &copy;
                                        <a class="text-white opacity-85" href="#">Delivery
                                            Solution Portal</a>
                                    </p>
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
    @include('footer')
