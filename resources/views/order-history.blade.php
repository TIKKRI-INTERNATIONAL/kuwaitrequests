@include('header')
<div class="col-lg-6 col-xl-12 col-xxl-8 h-100 pt-5">
    <div class="d-flex mb-4"><span class="fa-stack me-2 ms-n1"><i class="fas fa-circle fa-stack-2x text-300"></i><i
                class="fa-inverse fa-stack-1x text-primary fas fa-spinner"></i></span>
        <div class="col">
            <h5 class="mb-0 text-primary position-relative"><span class="bg-200 dark__bg-1100 pe-3"> Order
                    History</span><span
                    class="border position-absolute top-50 translate-middle-y w-100 start-0 z-n1"></span>
            </h5>

        </div>
    </div>
</div>
<div class="col-lg-12 col-md-6 pt-3 pb-3">
    <div class="card h-100">
        <div class="card-body">
            <ul class="list-group">
                @foreach ($orders as $order)
                    <li class="list-group-item">
                        <div class="list-group">
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="col-md-3">
                                        <strong>Code:</strong> {{ $order->order_no }}
                                    </div>
                                    <div class="col-md-3">
                                        <strong>Customer:</strong> {{ $order->customer->name }}
                                    </div>
                                    <div class="col-md-3">
                                        <strong>External Number :</strong>
                                        -
                                    </div>
                                    <div class="col-md-3">
                                        <strong>Amount :</strong> {{ $order->amount }}
                                        KWD ({{ $order->status }})
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <strong>Area:</strong>
                                        {{ $order->customer->address ? $order->customer->address->area : '-' }}
                                    </div>
                                    <div class="col-md-3">
                                        <strong>Distance:</strong> {{ $order->distance }}
                                    </div>
                                    <div class="col-md-3">
                                        <strong>Rank in trip:</strong>
                                        {{ $order->rank_in_trip ?? '-' }}
                                    </div>
                                    <div class="col-md-3">
                                        <strong>Delivery time:</strong>
                                        {{ $order->delivery_time ?? '-' }}
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <strong>Delivery fee:</strong> {{ $order->delivery }}
                                        KWD
                                    </div>
                                    <div class="col-md-3">
                                        <strong>Penalty fee:</strong>
                                        {{ $order->penalty_fee ?? '-' }}
                                        KWD
                                    </div>
                                    <div class="col-md-6">
                                        <strong>Extra Notes:</strong>
                                        {{ $order->customer->address ? $order->customer->address->notes : '-' }}
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <strong>Driver:</strong>
                                        {{ $order->driverOrder ? $order->driverOrder->driver->name : '-' }}
                                    </div>
                                    <div class="col-md-3">
                                        <strong>Picked Up At:</strong>
                                        {{ $order->created_at->format('Y-m-d H:m') }}
                                    </div>
                                    <div class="col-md-3">
                                        <strong>Completed At:</strong>
                                        {{ $order->status == 'Completed' ? $order->updated_at->format('Y-m-d H:m') : '-' }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>

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
