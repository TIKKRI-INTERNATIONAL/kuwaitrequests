@include('header')
<div class="col-lg-6 col-xl-12 col-xxl-8 h-100 pt-5">
    <div class="d-flex mb-4"><span class="fa-stack me-2 ms-n1"><i class="fas fa-circle fa-stack-2x text-300"></i><i
                class="fa-inverse fa-stack-1x text-primary fas fa-spinner"></i></span>
        <div class="col">
            <h5 class="mb-0 text-primary position-relative"><span class="bg-200 dark__bg-1100 pe-3">New Order</span><span
                    class="border position-absolute top-50 translate-middle-y w-100 start-0 z-n1"></span>
            </h5>

        </div>
    </div>
    <div class="card theme-wizard mb-5">
        <div class="card-header bg-body-tertiary pt-3 pb-2">
            <ul class="nav justify-content-between nav-wizard">
                <li class="nav-item"><a class="nav-link active fw-semi-bold" href="#bootstrap-wizard-tab1"
                        data-bs-toggle="tab" data-wizard-step="1"><span class="nav-item-circle-parent"><span
                                class="nav-item-circle"><span class="fas fa-lock"></span></span></span><span
                            class="d-none d-md-block mt-1 fs-10">Customer Infomation</span></a>
                </li>
                <li class="nav-item"><a class="nav-link fw-semi-bold" href="#bootstrap-wizard-tab2" data-bs-toggle="tab"
                        data-wizard-step="2"><span class="nav-item-circle-parent"><span class="nav-item-circle"><span
                                    class="fas fa-user"></span></span></span><span
                            class="d-none d-md-block mt-1 fs-10">Address Details</span></a></li>
                <li class="nav-item"><a class="nav-link fw-semi-bold" href="#bootstrap-wizard-tab4" data-bs-toggle="tab"
                        data-wizard-step="4"><span class="nav-item-circle-parent"><span class="nav-item-circle"><span
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
                    <div class="tab-pane active px-sm-3 px-md-5" role="tabpanel" aria-labelledby="bootstrap-wizard-tab1"
                        id="bootstrap-wizard-tab1">
                        <div class="row gx-2">
                            <div class="mb-3 col-sm-6">
                                <label for="Customer Phone" class="text-primary fs-10 fw-bold">Customer Phone</label>
                                <input class="form-control rounded-2 py-3" type="text" name="mobile" required
                                    placeholder="+965 1234 5678">
                            </div>
                            <div class="mb-3 col-sm-6">
                                <label for="Customer Name" class="text-primary fs-10 fw-bold">Customer Name</label>
                                <input class="form-control rounded-2 py-3" type="text" name="name" required
                                    placeholder="Customer Name">
                            </div>
                        </div>

                        <div class="row gx-2">
                            <div class="mb-3 col-sm-8">
                                <label for="Customer Name" class="text-primary fs-10 fw-bold">Payment Type</label>
                                <ul class="nav nav-pills mb-3">
                                    @foreach ($pays as $pay)
                                        <li class="nav-item border" role="presentation">
                                            <button class="nav-link pay-select{{ $loop->first ? ' active' : '' }}"
                                                data-bs-toggle="pill" type="button" role="tab"
                                                aria-selected="{{ $loop->first ? 'true' : 'false' }}"
                                                data-pay-id="{{ $pay->id }}">
                                                <span class="d-md-inline-block py-2">{{ $pay->name }}</span>
                                            </button>
                                        </li>
                                    @endforeach
                                </ul>
                                <input type="hidden" name="pays" id="selectedPay">
                            </div>
                            <div class="mb-3 col-sm-4">
                                <label for="Customer Name" class="text-primary fs-10 fw-bold">Amount</label>
                                <input class="form-control rounded-2 py-3" type="number" name="amount" required
                                    placeholder="0.0000">
                            </div>
                        </div>

                        <div class="mb-3"><label class="form-label text-primary fs-10 fw-bold"
                                for="bootstrap-wizard-gender">Vehicle Type</label>
                            <select class="form-select rounded-2 py-3" name="type" id="bootstrap-wizard-gender">
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
                            <input class="form-control rounded-2 py-3" type="text" name="order_no"
                                placeholder="Order Number" required>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="terms" required="required"
                                checked="checked" id="bootstrap-wizard-wizard-checkbox">
                            <label class="form-check-label" for="bootstrap-wizard-wizard-checkbox">I accept the <a
                                    href="#!">terms </a>and <a href="#!">privacy
                                    policy</a></label>
                        </div>
                        <!-- First form fields -->
                        <div class="card-footer bg-body-tertiary">
                            <div class="px-sm-3 px-md-5">
                                <ul class="pager wizard list-inline mb-0">
                                    <li class="previous"><button class="btn btn-link ps-0" type="button"><span
                                                class="fas fa-chevron-left me-2"
                                                data-fa-transform="shrink-3"></span>Prev</button>
                                    </li>
                                    <li class="next">
                                        <button id="submitAndSwitchBtn"
                                            class="btn btn-primary px-2 px-sm-4 py-2 rounded-5 fs-8"
                                            type="button">Next Step
                                            <span class="fas fa-chevron-right ms-2" data-fa-transform="shrink-3">
                                            </span>
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                    <div class="tab-pane px-sm-3 px-md-5" role="tabpanel" aria-labelledby="bootstrap-wizard-tab2"
                        id="bootstrap-wizard-tab2">
                        <div class="row">
                            <!-- Left Side: Form -->
                            <div class="col-md-6">
                                <div class="row gx-2">
                                    <div class="mb-3 col-sm-6">
                                        <label class="form-label" for="bootstrap-wizard-gender">Area</label>
                                        <select class="form-select rounded-2 py-3" name="area"
                                            id="bootstrap-wizard-gender">
                                            <option value="">Select your Area ...</option>
                                            <option value="Salmiya">Salmiya</option>
                                            <option value="Kuwait City">Kuwait City</option>
                                            <option value="Hawally">Hawally</option>
                                        </select>
                                    </div>

                                    <div class="mb-3 col-sm-6">
                                        <label class="form-label" for="bootstrap-wizard-gender">Block</label>
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
                                    <label class="form-label" for="bootstrap-wizard-wizard-phone">Street</label>
                                    <input class="form-control rounded-2 py-3" type="text" name="street"
                                        placeholder="Street" id="bootstrap-wizard-wizard-phone">
                                </div>

                                <div class="row gx-2">
                                    <div class="mb-3 col-sm-6">
                                        <label class="form-label" for="building">Building Number
                                            or
                                            Name</label>
                                        <input class="form-control rounded-2 py-3" type="text" name="building"
                                            placeholder="Building Number or Name" id="building">
                                    </div>

                                    <div class="mb-3 col-sm-6">
                                        <label class="form-label" for="jedda">Jedda</label>
                                        <input class="form-control rounded-2 py-3" type="text" name="jedda"
                                            placeholder="Jedda" id="jedda">
                                    </div>

                                    <div class="mb-3 col-sm-6">
                                        <label class="form-label" for="apartment">Apartment /
                                            Office</label>
                                        <input class="form-control rounded-2 py-3" type="text" name="apartment"
                                            placeholder="Apartment or Office" id="apartment">
                                    </div>

                                    <div class="mb-3 col-sm-6">
                                        <label class="form-label" for="floor">Floor</label>
                                        <input class="form-control rounded-2 py-3" type="text" name="floor"
                                            placeholder="Floor" id="floor">
                                    </div>

                                    <div class="mb-3 col-sm-6">
                                        <label class="form-label" for="distance">Distance </label>
                                        <input class="form-control rounded-2 py-3" type="text" name="distance"
                                            placeholder="Distance" id="distance">
                                    </div>

                                    <div class="mb-3 col-sm-6">
                                        <label class="form-label" for="delivery">Delivery
                                            Charges</label>
                                        <input class="form-control rounded-2 py-3" type="text" name="delivery"
                                            placeholder="Delivery Charges" id="delivery">
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label"
                                            for="bootstrap-wizard-wizard-datepicker">Notes</label>
                                        <input class="form-control rounded-2 py-3 datetimepicker" type="text"
                                            name="notes" placeholder="Note / Instruction"
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
                                        <button class="btn btn-primary px-2 px-sm-4 py-2 rounded-5 fs-8"
                                            type="submit">Next Step
                                            <span class="fas fa-chevron-right ms-2"
                                                data-fa-transform="shrink-3"></span>
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </div>
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
                    <p class="mb-0 text-600 opacity-85">All Rights Reserved. <span class="d-none d-sm-inline-block">|
                        </span><br class="d-sm-none">
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

        // Get all 'previous' buttons
        var previousButtons = document.querySelectorAll('.previous');

        // Add click event listener to each 'previous' button
        previousButtons.forEach(function(button) {
            button.addEventListener('click', function() {
                // Find the parent tab-pane element and get its ID
                var currentTabPane = button.closest('.tab-pane');
                var currentTabPaneId = currentTabPane.id;

                // Find the previous tab-pane
                var previousTabPaneId = 'bootstrap-wizard-tab1'; // ID of the first tab-pane

                // If the current tab-pane is not the first one
                if (currentTabPaneId !== 'bootstrap-wizard-tab1') {
                    // Find the previous tab-pane's ID dynamically
                    var currentTabPaneIndex = currentTabPaneId.split('bootstrap-wizard-tab')[1];
                    previousTabPaneId = 'bootstrap-wizard-tab' + (parseInt(
                        currentTabPaneIndex) - 1);
                }

                // Activate the previous tab-pane
                var previousTabPane = document.getElementById(previousTabPaneId);
                var tabLink = document.querySelector('a[href="#' + previousTabPaneId + '"]');
                tabLink.click();
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
@include('footer')
