<div>
    @if (session()->has('message'))
        <div id="success-alert" class="alert alert-outline-success d-flex align-items-center" role="alert">
            <span class="fas fa-check-circle text-success fs-3 me-3"></span>
            <p class="mb-0 flex-1">{{ session('message') }}!</p>

            <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @if (session()->has('error'))
        <div id="error-alert" class="alert alert-outline-danger d-flex align-items-center" role="alert">
            <span class="fas fa-times-circle text-danger fs-3 me-3"></span>
            <p class="mb-0 flex-1">{{ session('error') }}!</p>

            <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif


    <nav class="mb-2" aria-label="breadcrumb">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Easy Fix</a></li>
            <li class="breadcrumb-item"><a href="{{ route('orders.dashboard') }}">Orders</a></li>
            <li class="breadcrumb-item active">
                Order#{{ $order->id }}
            </li>
        </ol>
    </nav>
    <div class="mb-9">
        <h2 class="mb-0">Order <span>#{{ $order->id }}</span></h2>
        <div class="d-flex flex-wrap flex-between-center mb-1">
            <p class="text-800 lh-sm mb-0">Customer ID : <a class="fw-bold" href="#!">
                    #CID-{{ $order->user->id }}
                </a></p>

            <div class="d-flex">
                <div class="col-auto">
                    <div class="row g-3">
                        {{--                        If statement to disable the button if the order is already delivered or canceled--}}
                        @if($order->status == 1 || $order->status == 0)
                            <div class="col-auto">
                                <button class="btn btn-phoenix-danger"><span class="fa-solid fa-trash-can me-2"></span>Cancel
                                    Order
                                </button>
                            </div>
                            <div class="col-auto">
                                <a href="{{ route('assign-courier.dashboard', $order->id) }}">
                                    <button class="btn btn-phoenix-info" type="button"><span
                                            class="fas fa-check me-2"></span>Start processing
                                    </button>
                                </a>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="row g-5 gy-7">
            <div class="col-12 col-xl-8 col-xxl-9">
                <div id="orderTable"
                     data-list='{"valueNames":["products","color","size","price","quantity","total"],"page":10}'>
                    <div class="table-responsive scrollbar">
                        <table class="table fs--1 mb-0 border-top border-200">
                            <thead>
                            <tr>
                                <th class="sort white-space-nowrap align-middle fs--2" scope="col">P-NO</th>
                                <th class="sort white-space-nowrap align-middle fs--2" scope="col"></th>
                                <th class="sort white-space-nowrap align-middle" scope="col" style="min-width:400px;"
                                    data-sort="products">PRODUCT
                                </th>
                                <th class="sort align-middle text-end ps-4" scope="col" data-sort="price"
                                    style="width:150px;">PRICE in KES
                                </th>
                                <th class="sort align-middle text-end ps-4" scope="col" data-sort="quantity"
                                    style="width:200px;">QUANTITY
                                </th>
                                <th class="sort align-middle text-end ps-4" scope="col" data-sort="total"
                                    style="width:250px;">TOTAL in KES
                                </th>
                            </tr>
                            </thead>
                            <tbody class="list" id="order-table-body">
                            @foreach ($order->orderItems as $item)
                                <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                    <td class="align-middle white-space-nowrap py-2">
                                        <div class="border rounded-2">
                                            <div class="d-flex align-items-center justify-content-center h-100">
                                                <div class="text-900">
                                                    P-{{ $item->product->id }}
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="align-middle white-space-nowrap py-2">
                                        <div class="border rounded-2"><img
                                                src="{{ asset('e-commerce-assets/img/products/1.png') }}"
                                                alt=""
                                                width="53"/></div>
                                    </td>
                                    <td class="products align-middle py-0"><a class="fw-semi-bold line-clamp-2 mb-0"
                                                                              href="#!">
                                            {{ $item->product->name }}
                                        </a></td>

                                    <td class="price align-middle text-900 fw-semi-bold text-end py-0 ps-4">
                                        {{ number_format($item->product->selling_price, 2) }}
                                    </td>
                                    <td class="quantity align-middle text-end py-0 ps-4 text-700">
                                        {{ $item->product_quantity }}
                                    </td>
                                    <td class="total align-middle fw-bold text-1000 text-end py-0 ps-4">
                                        {{ number_format($item->product_quantity * $item->product->selling_price, 2) }}
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="d-flex flex-between-center py-3 border-bottom mb-7">
                    <p class="text-1100 fw-semi-bold lh-sm mb-0">Items subtotal :</p>
                    <p class="text-1100 fw-bold lh-sm mb-0">
                        {{ number_format($order->orderItems->sum('product_quantity') * $item->product->selling_price, 2) }}
                    </p>
                </div>
                <div class="row gx-4 gy-6 g-xl-7 justify-content-sm-center justify-content-xl-start">
                    <div class="col-12 col-sm-auto">
                        <h4 class="mb-5">Billing details</h4>
                        <div class="row g-4 flex-sm-column">
                            <div class="col-6 col-sm-12">
                                <div class="d-flex align-items-center mb-1"><span class="me-2" data-feather="user"
                                                                                  style="stroke-width:2.5;"></span>
                                    <h6 class="mb-0">Customer</h6>
                                </div>
                                <a class="fs--1 ms-4" href="#!">
                                    {{ $order->user->name }}
                                </a>
                            </div>
                            <div class="col-6 col-sm-12">
                                <div class="d-flex align-items-center mb-1"><span class="me-2" data-feather="mail"
                                                                                  style="stroke-width:2.5;"></span>
                                    <h6 class="mb-0">Email</h6>
                                </div>
                                <a class="fs--1 ms-4" href="mailto:shatinon@jeemail.com:">
                                    {{ $order->user->email }}
                                </a>
                            </div>
                            <div class="col-6 col-sm-12 order-sm-1">
                                <div class="d-flex align-items-center mb-1"><span class="me-2" data-feather="home"
                                                                                  style="stroke-width:2.5;"></span>
                                    <h6 class="mb-0">Address</h6>
                                </div>
                                <div class="ms-4">
                                    <p class="text-800 mb-0 fs--1">
                                        {{ $order->user->address }}
                                    </p>
                                </div>
                            </div>
                            <div class="col-6 col-sm-12">
                                <div class="d-flex align-items-center mb-1"><span class="me-2" data-feather="phone"
                                                                                  style="stroke-width:2.5;">  </span>
                                    <h6 class="mb-0">Phone</h6>
                                </div>
                                <a class="fs--1 ms-4" href="tel:{{ $order->user->phone }}">
                                    {{ $order->user->phone }}
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-auto">
                        <h4 class="mb-5">Shipping details</h4>
                        <div class="row g-4 flex-sm-column">
                            <div class="col-6 col-sm-12">
                                <div class="d-flex align-items-center mb-1"><span class="me-2" data-feather="mail"
                                                                                  style="stroke-width:2.5;">  </span>
                                    <h6 class="mb-0">Email</h6>
                                </div>
                                <a class="fs--1 ms-4" href="mailto:{{ $order->shipping_email }}:">
                                    {{ $order->shipping_email }}
                                </a>
                            </div>
                            <div class="col-6 col-sm-12">
                                <div class="d-flex align-items-center mb-1"><span class="me-2" data-feather="phone"
                                                                                  style="stroke-width:2.5;">  </span>
                                    <h6 class="mb-0">Phone</h6>
                                </div>
                                <a class="fs--1 ms-4" href="tel:+1234567890">
                                    {{ $order->shipping_phone }}
                                </a>
                            </div>
                            <div class="col-6 col-sm-12 order-sm-1">
                                <div class="d-flex align-items-center mb-1"><span class="me-2" data-feather="home"
                                                                                  style="stroke-width:2.5;">  </span>
                                    <h6 class="mb-0">Address</h6>
                                </div>
                                <div class="ms-4">
                                    <p class="text-800 mb-0 fs--1">
                                        {{ $order->delivery_address }}
                                    </p>
                                </div>
                            </div>
                            <div class="col-6 col-sm-12">
                                <div class="d-flex align-items-center mb-1"><span class="me-2" data-feather="calendar"
                                                                                  style="stroke-width:2.5;"></span>
                                    <h6 class="mb-0">Shipping Date</h6>
                                </div>
                                <p class="mb-0 text-800 fs--1 ms-4">12 Nov, 2021</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-auto">
                        <h4 class="mb-5">Courier/Messenger details</h4>
                        <div class="row g-4 flex-sm-column">
                            <div class="col-6 col-sm-12">
                                <div class="d-flex align-items-center mb-1"><span class="me-2" data-feather="mail"
                                                                                  style="stroke-width:2.5;">  </span>
                                    <h6 class="mb-0">Messenger Email</h6>
                                </div>
                                <a class="fs--1 ms-4" href="mailto::">
                                    {{ $order->courier->email ?? 'No email provided' }}
                                </a>
                            </div>
                            <div class="col-6 col-sm-12">
                                <div class="d-flex align-items-center mb-1"><span class="me-2" data-feather="phone"
                                                                                  style="stroke-width:2.5;">  </span>
                                    <h6 class="mb-0">Phone</h6>
                                </div>
                                <a class="fs--1 ms-4" href="tel:+1234567890">
                                    {{ $order->courier->phone ?? 'Phone no. not provided' }}
                                </a>
                            </div>
                            <div class="col-6 col-sm-12 order-sm-1">
                                <div class="d-flex align-items-center mb-1"><span class="me-2" data-feather="user"
                                                                                  style="stroke-width:2.5;">  </span>
                                    <h6 class="mb-0">Address</h6>
                                </div>
                                <div class="ms-4">
                                    <p class="text-800 mb-0 fs--1">
                                        {{ $order->courier->address ?? 'No Address Provided' }}
                                    </p>
                                </div>
                            </div>
                            <div class="col-6 col-sm-12">
                                <div class="d-flex align-items-center mb-1"><span class="me-2" data-feather="calendar"
                                                                                  style="stroke-width:2.5;"></span>
                                    <h6 class="mb-0">Assigned Date</h6>
                                </div>
                                @if($order->courier)
                                    <p class="mb-0 text-800 fs--1 ms-4">
                                        {{ $order->courier->created_at->format('d M, Y h:i A') }}
                                    </p>
                                @else
                                    <p class="mb-0 text-800 fs--1 ms-4">
                                        Not Yet Assigned
                                    </p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-xl-4 col-xxl-3">
                <div class="row">
                    <div class="col-12">
                        <div class="card mb-3">
                            <div class="card-body">
                                <h3 class="card-title mb-4">Summary</h3>
                                <div>
                                    <div class="d-flex justify-content-between">
                                        <p class="text-900 fw-semi-bold">Total quantity of Items ordered :</p>
                                        <p class="text-1100 fw-semi-bold">
                                            {{ $order->orderItems->sum('product_quantity') }}
                                        </p>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between border-top border-dashed pt-4">
                                    <h4 class="mb-0">Total :</h4>
                                    <h4 class="mb-0">
                                        KES. {{ number_format($order->orderItems->sum('product_quantity') * $item->product->selling_price, 2) }}
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title mb-4">Order Status</h3>
                                <h6 class="mb-2">Order Status</h6>
                                @switch($order->status)
                                    @case(0)
                                        <span class="badge badge-phoenix fs--2 badge-phoenix-warning">
                                            @break
                                            @case(1)
                                                <span class="badge badge-phoenix fs--2 badge-phoenix-info">
                                                    @break
                                                    @case(2)
                                                        <span class="badge badge-phoenix fs--2 badge-phoenix-success">
                                                            @break
                                                            @case(3)
                                                                <span
                                                                    class="badge badge-phoenix fs--2 badge-phoenix-cancelled">
                                                                    @break
                                                                    @endswitch
                                                                    <span class="badge-label">
                                                                        {{ $statusLabels[$order->status] }}
                                                                    </span>
                                                                    <span class="ms-1" data-feather="check"
                                                                          style="height:12.8px;width:12.8px;"></span>
                                                                </span>
                                                        </span>
                                                </span>
                                        </span>
                            </div>
                        </div>
                        <br>
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title mb-4">Notes on the Order</h3>
                                <form
                                    action="{{route('admin.saveNotes', ['order_id' => $order->id])}}"
                                    method="post" enctype="multipart/form-data">
                                    @csrf
                                    <textarea name="message" class="form-control mb-3" rows="4"></textarea>
                                    <button class="btn btn-phoenix-primary w-100 mb-4"
                                            wire:click="saveNotes($event.target.value)"
                                            wire:loading.attr="disabled">Add Note
                                    </button>
                                    @foreach($order->orderMessages as $message)
                                        <div
                                            class="fs--1 fw-semi-bold pb-3 mb-4 border-bottom border-dashed border-300">
                                            <p class="text-1000 mb-1">
                                                {{ $message->message }}
                                            </p>
                                            <div class="text-end">
                                                <p class="text-600 mb-0">
                                                    {{ $message->user->name }}
                                                </p>
                                                <p class="text-600 mb-0">
                                                    {{ $message->created_at->diffForHumans() }}
                                                </p>
                                            </div>
                                        </div>
                                    @endforeach

                                </form>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
            <hr class="my-4"/>
            <div>

            </div>
        </div>
    </div>
</div>


