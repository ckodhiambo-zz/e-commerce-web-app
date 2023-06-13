<div>

    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section class="pt-5 pb-9 bg-white border-top border-300">

        <div class="container-small">
            <nav class="mb-2" aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="#!">Easy Fix</a></li>
                    <li class="breadcrumb-item"><a href="#!">My Orders</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                        Order #{{ $order->id }}
                    </li>
                </ol>
            </nav>
            <div class="d-flex justify-content-between align-items-end mb-4">
                <h2 class="mb-0">Order #{{ $order->id }} </h2>
                <div>
                    <button class="btn btn-phoenix-primary me-2"><span
                            class="fa-solid fa-bag-shopping me-sm-2"></span><span class="d-none d-sm-inline-block">Browse more Items</span>
                        <button class="btn btn-phoenix-secondary me-2" wire:click="exportPdf">
                            <span class="fa-solid fa-download me-sm-2"></span>
                            <span class="d-none d-sm-inline-block">Download Invoice</span>
                        </button>
                        <button class="btn btn-phoenix-secondary"><span class="fa-solid fa-print me-sm-2"></span><span
                                class="d-none d-sm-inline-block">Print</span>
                        </button>
                </div>
            </div>

            <div class="bg-soft dark__bg-1100 p-4 mb-4 rounded-2">
                <div class="row g-4">
                    <div class="col-12 col-sm-6 col-lg-5">
                        <div class="row g-4 gy-lg-5">
                            <div class="col-12 col-lg-8">
                                <h6 class="mb-2 me-3">Sold by :</h6>
                                <p class="fs--1 text-800 fw-semi-bold mb-0">EasyFix<br/>The bazaar moi avenue 12th
                                    floor, Nairobi</p>
                            </div>
                            <div class="col-12 col-lg-4">
                                <h6 class="mb-2">Status</h6>
                                <p class="fs--1 text-800 fw-semi-bold mb-0">
                                    @switch($order->status)
                                        @case(2)
                                            <span class="badge rounded-pill bg-success">Delivered</span>
                                            @break
                                        @case(3)
                                            <span class="badge rounded-pill bg-danger">Canceled</span>
                                            @break
                                            @case(1)
                                            <span class="badge rounded-pill bg-info">Processing</span>
                                            @break
                                        @default
                                            <span class="badge rounded-pill bg-warning">Pending</span>
                                    @endswitch

                                </p>
                            </div>

                            <div class="col-12 col-lg-4">
                                <h6 class="mb-2"> Order Date :</h6>
                                <p class="fs--1 text-800 fw-semi-bold mb-0">{{ $order->created_at->format('d M Y') }}</p>
                            </div>
                            <div class="col-12 col-lg-4">
                                <h6 class="mb-2"> Order Time :</h6>
                                <p class="fs--1 text-800 fw-semi-bold mb-0">{{ $order->created_at->format('h:i A') }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-4">
                        <div class="row g-4">
                            <div class="col-12 col-lg-6">
                                <h6 class="mb-2"> Account Details :</h6>
                                <div class="fs--1 text-800 fw-semi-bold mb-0">
                                    <p class="mb-2">{{ auth()->user()->name }},</p>
                                    <p class="mb-2">
                                        {{ auth()->user()->email }},</p>
                                    <p class="mb-2">{{ auth()->user()->phone }}</p>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <h6 class="mb-2"> Billing Address :</h6>
                                <div class="fs--1 text-800 fw-semi-bold mb-0">
                                    <p class="mb-2">{{ $order->shipping_name }},</p>
                                    <p class="mb-2">
                                        {{ $order->delivery_address }},</p>
                                    <p class="mb-2">{{$order->shipping_email }}</p>
                                    <p class="mb-0">{{$order->shipping_phone }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="px-0">
                <div class="table-responsive scrollbar">
                    <table class="table fs--1 text-900 mb-0">
                        <thead class="bg-200">
                        <tr>
                            <th scope="col" style="width: 24px;"></th>
                            <th scope="col" style="min-width: 70px;">P-NO.</th>
                            <th scope="col" style="min-width: 360px;">Products</th>
                            <th class="text-end" scope="col" style="width: 80px;">Quantity</th>
                            <th class="text-end" scope="col" style="width: 100px;">Price in KES</th>
                            <th class="text-end" scope="col" style="min-width: 60px;">Total in KES</th>
                            <th scope="col" style="width: 24px;"></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($order->orderItems as $item)
                            <tr>
                                <td class="border-0"></td>
                                <td class="align-middle">
                                    <p class="mb-0 fw-semi-bold">
                                        P-{{ $item->product->id }}
                                    </p>
                                </td>
                                <td class="align-middle">
                                    <p class="line-clamp-1 mb-0 fw-semi-bold">
                                        {{ $item->product->name }}
                                    </p>
                                </td>
                                <td class="align-middle text-end text-1000 fw-semi-bold">
                                    {{ $item->product_quantity }}
                                </td>
                                <td class="align-middle text-end fw-semi-bold">
                                    {{ number_format($item->product->selling_price, 2) }}
                                </td>
                                <td class="align-middle text-end fw-semi-bold">
                                    {{ number_format($item->product_quantity * $item->product->selling_price, 2) }}
                                </td>
                                <td class="border-0"></td>
                            </tr>
                            <tr class="bg-200">
                                <td class="align-middle ps-4 fw-bold text-1000" colspan="3">Grand Total</td>
                                <td class="align-middle text-end fw-bold text-1000">
                                    {{ $order->orderItems->sum('product_quantity') }}
                                </td>
                                <td class="align-middle text-end fw-bold text-1000"></td>
                                <td class="align-middle text-end fw-bold text-1000">
                                    {{ number_format($order->orderItems->sum('product_quantity') * $item->product->selling_price, 2) }}
                                </td>
                                <td class="align-middle fw-bold text-1000"></td>
                                <td></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="text-end py-9 border-bottom border-300"><img class="mb-3"
                                                                         src="../../../assets/img/logos/phoenix-mart.png"
                                                                         alt=""/>
                    <h4>Authorized Signatory</h4>
                </div>
                <div class="text-center py-4 mb-9">
                    <p class="mb-0">Thank you for buying with Phoenix |
                        &copy; {{ date('Y') }}

                        © <a href="https://themewagon.com/">Easy Fix</a>
                    </p>
                </div>
            </div>
        </div>
        <!-- end of .container-->

    </section>
    <!-- <section> close ============================-->
    <!-- ============================================-->

</div>

