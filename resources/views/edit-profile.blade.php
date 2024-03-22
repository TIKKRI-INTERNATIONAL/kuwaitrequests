@include('header')

<div class="col-lg-6 col-xl-12 col-xxl-8 h-100 pt-5">
    <div class="d-flex mb-4"><span class="fa-stack me-2 ms-n1"><i class="fas fa-circle fa-stack-2x text-300"></i><i
                class="fa-inverse fa-stack-1x text-primary fas fa-spinner"></i></span>
        <div class="col">
            <h5 class="mb-0 text-primary position-relative"><span class="bg-200 dark__bg-1100 pe-3">Edit
                    Profile</span><span
                    class="border position-absolute top-50 translate-middle-y w-100 start-0 z-n1"></span>
            </h5>

        </div>
    </div>
    <div class="card theme-wizard mb-5">
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
            <div class="tab-content">
                <div class="tab-pane active px-sm-3 px-md-5" role="tabpanel" aria-labelledby="bootstrap-wizard-tab1"
                    id="bootstrap-wizard-tab1">

                    <form method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="row gx-2">
                            <div class="mb-3 col-sm-6">
                                <label for="merchant_name" class="text-primary fs-10 fw-bold">MERCHANT NAME</label>
                                <input class="form-control rounded-2 py-3" type="text" name="merchant_name"
                                    placeholder="Merchant Name" required>
                            </div>
                            <div class="mb-3 col-sm-6">
                                <label for="legal_name" class="text-primary fs-10 fw-bold">LEGAL
                                    NAME</label>
                                <input class="form-control rounded-2 py-3" type="text" name="legal_name"
                                    placeholder="Legal Name" required>
                            </div>
                        </div>
                        <div class="row gx-2">
                            <div class="mb-3 col-sm-6">
                                <label for="Customer Phone" class="text-primary fs-10 fw-bold">Billing Address</label>
                                <button class="btn btn-primary d-block w-100" type="button">Address</button>
                            </div>

                            <div class="mb-3 col-sm-6">
                                <label for="Customer Phone" class="text-primary fs-10 fw-bold">Legal Address</label>
                                <button class="btn btn-primary d-block w-100" type="button">Address</button>
                            </div>
                        </div>

                        <div class="row gx-2">
                            <div class="mb-3 col-sm-6">
                                <label for="contract_photo" class="text-primary fs-10 fw-bold">CONTRACT PHOTO</label>
                                <input type="file" id="contract_photo" name="contract_photo"
                                    class="form-control rounded-2 py-3 @error('contract_photo') is-invalid @enderror">
                                @error('contract_photo')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3 col-sm-6">
                                <label for="signatory_document" class="text-primary fs-10 fw-bold">SIGNATORY
                                    DOCUMENT</label>
                                <input type="file" id="signatory_document" name="signatory_document"
                                    class="form-control rounded-2 py-3 @error('signatory_document') is-invalid @enderror">
                                @error('signatory_document')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="row gx-2">
                            <div class="mb-3 col-sm-6">
                                <label for="articles_of_association" class="text-primary fs-10 fw-bold">ARTICLES OF
                                    ASSOCIATION</label>
                                <input type="file" id="articles_of_association" name="articles_of_association"
                                    class="form-control rounded-2 py-3 @error('articles_of_association') is-invalid @enderror">
                                @error('articles_of_association')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3 col-sm-6">
                                <label for="licence_photo" class="text-primary fs-10 fw-bold">LICENCE PHOTO</label>
                                <input type="file" id="licence_photo" name="licence_photo"
                                    class="form-control rounded-2 py-3 @error('licence_photo') is-invalid @enderror">
                                @error('licence_photo')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="note_details" class="text-primary fs-10 fw-bold">Note/
                                Details</label>
                            <input class="form-control rounded-2 py-3" type="text" name="note_details"
                                placeholder="Note/ Details">
                        </div>
                        <div class="px-sm-3 px-md-5">
                            <button class="btn btn-primary px-2 px-sm-4 py-2 rounded-5 fs-8" type="submit">Edit <span
                                    class="fas fa-chevron-right ms-2"></span></button>
                        </div>
                    </form>

                    <div class="card-footer bg-body-tertiary">
                        <div class="px-sm-3 px-md-5">
                            <ul class="pager wizard list-inline mb-0">
                                <li class="next">

                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- <section> close ============================--><!-- ============================================-->

                    <section class="py-0 bg-dark bottom-bar" data-bs-theme="light">
                        <div>
                            <hr class="my-0 text-600 opacity-25">
                            <div class="container py-3">
                                <div class="row justify-content-between fs-10">
                                    <div class="col-12 col-sm-auto text-center">
                                        <p class="mb-0 text-600 opacity-85">All Rights Reserved.
                                            <span class="d-none d-sm-inline-block">| </span><br class="d-sm-none">
                                            2024
                                            &copy; <a class="text-white opacity-85" href="#">Delivery Solution
                                                Portal</a>
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
