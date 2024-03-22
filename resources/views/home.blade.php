@include('header')

<iframe class="px-0"
    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d317893.9737282887!2d-0.11951900000000001!3d51.503186!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487604b900d26973%3A0x4291f3172409ea92!2slastminute.com%20London%20Eye!5e0!3m2!1sen!2sus!4v1708672561327!5m2!1sen!2sus"
    width="1920" height="600" style="border:0;" allowfullscreen="" loading="lazy"
    referrerpolicy="no-referrer-when-downgrade"></iframe>

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
                            <div class="col-auto fs-10 text-600"><span class="mb-0 undefined fs-6">Pending</span> </div>
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
                            @if (Auth::user()->roles_id == 5)
                                <div class="col-auto fs-10">
                                    <form action="{{ route('enroute.driver') }}" method="POST">
                                        @csrf
                                        <button type="submit" class="btn btn-info">En-Route</button>
                                </div>
                            @endif
                            <div class="col-auto fs-10 text-600"><span class="mb-0 undefined fs-6">Delivery</span>
                            </div>
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
                            <div class="col-auto fs-10 text-600"><span class="mb-0 undefined fs-6">En Route</span>
                            </div>
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
                            <div class="col-auto fs-10 text-600"><span class="mb-0 undefined fs-6">Complete</span>
                            </div>
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
                            <div class="col-auto fs-10 text-600"><span class="mb-0 undefined fs-6">Failure</span> </div>
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
                                <div class="card-header bg-secondary d-flex flex-between-center text-start">
                                    <table class="table table-borderless fs-10 mb-0 text-start">
                                        <tr>
                                            <th class="ps-0 py-0 text-white">
                                                <div class="fw-normal fs-11"></div>
                                                <h5 class="mb-0 text-white">{{ $pending->status }}
                                                </h5>
                                            </th>
                                            <th class="pe-0 text-end py-0 text-white">
                                                <a class="btn-sm text-white" href="{{ url('order-history') }}">
                                                    <span class="fas fa-pencil-alt text-white text-end"></span>
                                                    Edit
                                                </a>
                                                <a class="btn-sm text-white" href="{{ url('order-history') }}">
                                                    <span class="far fa-address-book text-white text-end"></span>
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
                                                    <span class="fas fa-phone-alt text-success"></span>
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
                        <h5 class="py-2 text-black fs-7">{{ $deliveryCount }} / {{ $enroutesCount }}</h5>
                    </div>
                    <div class="card-body pt-6 pb-4">
                        @if ($deliverys->isEmpty() && $enroutes->isEmpty())
                            <p>No record found.</p>
                        @endif

                        @foreach ($enroutes as $enroute)
                            <div class="card">
                                <div class="card-header bg-info d-flex flex-between-center text-start">
                                    <table class="table table-borderless fs-10 mb-0 text-start">
                                        <tr>
                                            <th class="ps-0 py-0 text-white">
                                                <div class="fw-normal fs-11"></div>
                                                <h5 class="mb-0 text-white">
                                                    {{ $enroute->status }}
                                                </h5>
                                            </th>
                                            <th class="pe-0 text-end py-0 text-white">
                                                <a class="btn-sm text-white" href="{{ url('order-history') }}">
                                                    <span class="fas fa-pencil-alt text-white text-end"></span>
                                                    Edit
                                                </a>
                                                <a class="btn-sm text-white" href="{{ url('order-history') }}">
                                                    <span class="far fa-address-book text-white text-end"></span>
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
                                                    {{ $enroute->created_at->format('Y-m-d H::m') }}
                                                </div>
                                                <div class="bold">
                                                    Customer - {{ $enroute->customer->name }}
                                                </div>
                                                <div class="text-800 fw-normal fs-11">
                                                    <span class="fas fa-phone-alt text-success"></span>
                                                    {{ $enroute->customer->mobile }}
                                                </div>
                                            </th>
                                            <th class="pe-0 text-end pt-0">
                                                <div class="text-black bold">
                                                    {{ $enroute->order_no }}
                                                </div>
                                            </th>
                                        </tr>
                                        <tr>
                                            <th class="ps-0 pb-0">
                                                <div class="text-400 fw-normal fs-11">
                                                    Driver -
                                                    {{ $enroute->driverOrder ? $enroute->driverOrder->driver->name : '-' }}
                                                </div>
                                            </th>
                                            <th class="pe-0 text-end pb-0">
                                                <div class="text-400 fw-normal fs-11">
                                                    {{ $enroute->status }}</div>
                                                <div class="bold text-black">
                                                    {{ $enroute->amount }}
                                                    <span class="fw-normal">KWD</span>
                                                </div>
                                            </th>
                                        </tr>
                                        @if (Auth::user()->roles_id == 5)
                                            @if (Auth::user()->id == $enroute->driverOrder->driver->users_id)
                                                <tr>
                                                    <th class="ps-0 pb-0">
                                                        <form
                                                            action="{{ route('complete.driver', ['orderId' => $enroute->id]) }}"
                                                            method="POST">
                                                            @csrf
                                                            <button type="submit"
                                                                class="btn btn-primary">Complete</button>
                                                        </form>
                                                    </th>
                                                    <th class="pe-0 text-end pb-0">
                                                        <form
                                                            action="{{ route('cancel.driver', ['orderId' => $enroute->id]) }}"
                                                            method="POST">
                                                            @csrf
                                                            <button type="submit"
                                                                class="btn btn-danger">Cancel</button>
                                                        </form>
                                                    </th>
                                                </tr>
                                            @endif
                                        @endif
                                    </table>
                                </div>
                            </div>
                        @endforeach
                        @foreach ($deliverys as $delivery)
                            <div class="card">
                                <div class="card-header bg-primary d-flex flex-between-center text-start">
                                    <table class="table table-borderless fs-10 mb-0 text-start">
                                        <tr>
                                            <th class="ps-0 py-0 text-white">
                                                <div class="fw-normal fs-11"></div>
                                                <h5 class="mb-0 text-white">
                                                    {{ $delivery->status }}
                                                </h5>
                                            </th>
                                            <th class="pe-0 text-end py-0 text-white">
                                                <a class="btn-sm text-white" href="{{ url('order-history') }}">
                                                    <span class="fas fa-pencil-alt text-white text-end"></span>
                                                    Edit
                                                </a>
                                                <a class="btn-sm text-white" href="{{ url('order-history') }}">
                                                    <span class="far fa-address-book text-white text-end"></span>
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
                                                    <span class="fas fa-phone-alt text-success"></span>
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
                                <div class="card-header bg-success d-flex flex-between-center text-start">
                                    <table class="table table-borderless fs-10 mb-0 text-start">
                                        <tr>
                                            <th class="ps-0 py-0 text-white">
                                                <div class="fw-normal fs-11"></div>
                                                <h5 class="mb-0 text-white">
                                                    {{ $complete->status }}
                                                </h5>
                                            </th>
                                            <th class="pe-0 text-end py-0 text-white">
                                                <a class="btn-sm text-white" href="{{ url('order-history') }}">
                                                    <span class="fas fa-pencil-alt text-white text-end"></span>
                                                    Edit
                                                </a>
                                                <a class="btn-sm text-white" href="{{ url('order-history') }}">
                                                    <span class="far fa-address-book text-white text-end"></span>
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
                                                    <span class="fas fa-phone-alt text-success"></span>
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
                                                    Driver -
                                                    {{ $complete->driverOrder ? $complete->driverOrder->driver->name : '-' }}
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
                                <div class="card-header bg-danger d-flex flex-between-center text-start">
                                    <table class="table table-borderless fs-10 mb-0 text-start">
                                        <tr>
                                            <th class="ps-0 py-0 text-white">
                                                <div class="fw-normal fs-11"></div>
                                                <h5 class="mb-0 text-white">{{ $cancel->status }}
                                                </h5>
                                            </th>
                                            <th class="pe-0 text-end py-0 text-white">
                                                <a class="btn-sm text-white" href="{{ url('order-history') }}">
                                                    <span class="fas fa-pencil-alt text-white text-end"></span>
                                                    Edit
                                                </a>
                                                <a class="btn-sm text-white" href="{{ url('order-history') }}">
                                                    <span class="far fa-address-book text-white text-end"></span>
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
                                                    <span class="fas fa-phone-alt text-success"></span>
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
                                                    Driver -
                                                    {{ $cancel->driverOrder ? $cancel->driverOrder->driver->name : '-' }}
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
                    <p class="mb-0 text-600 opacity-85">All Rights Reserved. <span class="d-none d-sm-inline-block">|
                        </span><br class="d-sm-none"> 2024
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
@include('footer')
