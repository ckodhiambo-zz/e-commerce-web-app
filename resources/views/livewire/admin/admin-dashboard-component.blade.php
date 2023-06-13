<div>
    <nav class="mb-2" aria-label="breadcrumb">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Easy Fix</a></li>
            <li class="breadcrumb-item active">Admin Dashboard</li>
        </ol>
    </nav>
    <div class="mb-9">
        <div class="row align-items-center justify-content-between g-3 mb-4">
            <div class="col-auto">
                <h2 class="mb-0">Admin Dashboard</h2>
            </div>
            <div class="col-auto">
                <div class="row g-2 g-sm-3">
                    <div class="col-auto">
                        <a href="https://api.whatsapp.com/send?phone=254740822347&amp;text=Hi%20there.%20My%20name%20is%20{{auth()->user()->name}}?"
                           target="_blank">
                            <button class="btn btn-outline-success"><span
                                    class="fab fa-whatsapp me-2"
                                ></span>WhatsApp Our Contact Center
                            </button>
                        </a>

                    </div>
                </div>
            </div>
        </div>
        <div class="row g-5">
            <div class="col-12 col-xxl-4">
                <div class="row g-3 g-xxl-0 h-100">
                    <div class="col-12 col-md-7 col-xxl-12 mb-xxl-3">
                        <div class="card h-100">
                            <div class="card-body d-flex flex-column justify-content-between pb-3">
                                <div class="row align-items-center g-5 mb-3 text-center text-sm-start">
                                    <div class="col-12 col-sm-auto mb-sm-2">
                                        <div class="avatar avatar-5xl"><img class="rounded-circle"
                                                                            src="{{ asset('e-commerce-assets/img/team/15.png') }}"
                                                                            alt=""/></div>
                                    </div>
                                    <div class="col-12 col-sm-auto flex-1">
                                        <h3>
                                            {{ auth()->user()->name }}
                                        </h3>
                                        <p class="text-800">
                                            Joined {{ auth()->user()->created_at->diffForHumans() }}
                                        </p>
                                        <div><a class="me-2" href="#!"><span
                                                    class="fab fa-linkedin-in text-400 hover-primary"></span></a><a
                                                class="me-2" href="#!"><span
                                                    class="fab fa-facebook text-400 hover-primary"></span></a><a
                                                href="#!"><span
                                                    class="fab fa-twitter text-400 hover-primary"></span></a></div>
                                    </div>
                                </div>
                                <div class="d-flex flex-between-center border-top border-dashed border-300 pt-4">
                                    <div class="position-relative">
                                        <h6>Generated Revenue</h6>
                                        <div class="position-relative">
                                            <p class="fs-1 text-800 mb-0">
                                                <span class="revenue-amount">KES. {{ number_format($total_price, 2) }}</span>
                                                <span class="revenue-visibility-icon" data-feather="eye-off"></span>
                                            </p>
                                            <div class="position-absolute top-0 bottom-0 start-0 end-0 bg-gray-300 opacity-50"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-5 col-xxl-12 mb-xxl-3">
                        <div class="card h-100">
                            <div class="card-body pb-3">
                                <div class="d-flex align-items-center mb-3">
                                    <h3 class="me-1">Default Address</h3>
                                    <a href="{{ route('my-profile') }}">
                                        <button class="btn btn-link p-0">
                                            <span class="fas fa-pen fs-0 ms-3 text-500"></span>
                                        </button>
                                    </a>
                                </div>
                                <h5 class="text-800">Address</h5>
                                <p class="text-800">
                                    {{ auth()->user()->address }}
                                </p>
                                <div class="mb-3">
                                    <h5 class="text-800">Email</h5><a href="mailto:shatinon@jeemail.com">
                                        {{ auth()->user()->email }}
                                    </a>
                                </div>
                                <h5 class="text-800">Phone</h5><a class="text-800" href="tel:+1234567890">
                                    {{ auth()->user()->phone }}
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card h-100">
                            <div class="card-body">
                                <h3 class="mb-4">Notes on Customer</h3>
                                <textarea class="form-control mb-3" rows="4"></textarea>
                                <button class="btn btn-phoenix-primary w-100 mb-4">Add Note</button>
                                <div class="fs--1 fw-semi-bold pb-3 mb-4 border-bottom border-dashed border-300">
                                    <p class="text-1000 mb-1">Gave us a nice feedback</p>
                                    <div class="text-end">
                                        <p class="text-600 mb-0">12 Nov, 2020</p>
                                    </div>
                                </div>
                                <div class="fs--1 fw-semi-bold pb-3 mb-4 border-bottom border-dashed border-300">
                                    <p class="text-1000 mb-1">Customer added product to cart and then forgot to
                                        checkout. Later knocked the customer support to ask about update on shipping.
                                        Later, settled on “One day Shipping” though “Free delivery” was preferred.
                                        Overall good behavior.</p>
                                    <div class="text-end">
                                        <p class="text-600 mb-0">23 Dec, 2019</p>
                                    </div>
                                </div>
                                <div class="fs--1 fw-semi-bold pb-3 mb-4 border-bottom border-dashed border-300">
                                    <p class="text-1000 mb-1">User of this support ticket won a 100% off coupon and
                                        received top-notch service from the technical support engineer. Along with
                                        providing a good review, user highly appreciated the team.</p>
                                    <div class="text-end">
                                        <p class="text-600 mb-0">2 Oct, 2019</p>
                                    </div>
                                </div>
                                <div class="fs--1 fw-semi-bold">
                                    <p class="text-1000 mb-1">Customer returned and bought 2 related items, which is
                                        currently being shipped. Customer chose “One day Shipping”. Additional notes
                                        were added regarding customised wrapping. Customer submitted positive
                                        review.</p>
                                    <div class="text-end">
                                        <p class="text-600 mb-0">26 Apr, 2019</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-xxl-8">
                <div class="mb-6">
                    <h3 class="mb-4">Latest 5 Orders</h3>
                    <div class="border-top border-bottom border-200" id="customerOrdersTable"
                         data-list='{"valueNames":["order","total","payment_status","fulfilment_status","delivery_type","date"],"page":6,"pagination":true}'>
                        <div class="table-responsive scrollbar">
                            <table class="table table-sm fs--1 mb-0">
                                <thead>
                                <tr>
                                    <th class="sort white-space-nowrap align-middle ps-0 pe-3" scope="col"
                                        data-sort="order" style="width:10%;">ORDER
                                    </th>
                                    <th class="sort align-middle text-end pe-7" scope="col" data-sort="total"
                                        style="width:10%;">TOTAL PRICE (KES)
                                    </th>
                                    <th class="sort align-middle white-space-nowrap pe-3" scope="col"
                                        data-sort="order_status" style="width:25%;">STATUS
                                    </th>
                                    <th class="sort align-middle white-space-nowrap text-start" scope="col"
                                        data-sort="shipped_to" style="width:30%;">DELIVERY TO
                                    </th>
                                    <th class="sort align-middle text-end pe-0" scope="col" data-sort="date">DATE</th>
                                    <th class="sort text-end align-middle pe-0 ps-5" scope="col"></th>
                                </tr>
                                </thead>
                                <tbody class="list" id="customer-order-table-body">

                                @foreach($orders as $order)
                                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                        <td class="order align-middle white-space-nowrap ps-0"><a class="fw-semi-bold"
                                                                                                  href="#!">
                                                #{{ $order->id }}
                                            </a></td>
                                        <td class="total align-middle text-end fw-semi-bold pe-7 text-1000">
                                            {{ number_format($order->total_price, 2) }}
                                        </td>
                                        <td class="order_status align-middle white-space-nowrap text-start fw-bold text-700">
                                            @switch($order->status)
                                                @case(0)
                                                    <span class="badge badge-phoenix fs--2 badge-phoenix-warning">

                                            @break
                                                        @case(1)
                                                            <span class="badge badge-phoenix fs--2 badge-phoenix-info">
                                                    @break
                                                                @case(2)
                                                                    <span
                                                                        class="badge badge-phoenix fs--2 badge-phoenix-success">
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

                                        </td>
                                        <td class="shipped_to align-middle white-space-nowrap text-900 fs--1 text-start">
                                            {{ $order->shipping_name }}
                                        </td>
                                        <td class="date align-middle white-space-nowrap text-700 fs--1 ps-4 text-end">
                                            {{ $order->created_at->format('d M, Y, h:i A') }}
                                        </td>
                                        <td class="align-middle white-space-nowrap text-end pe-0 ps-5">
                                            <div class="font-sans-serif btn-reveal-trigger position-static">
                                                <button
                                                    class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs--2"
                                                    type="button" data-bs-toggle="dropdown" data-boundary="window"
                                                    aria-haspopup="true" aria-expanded="false"
                                                    data-bs-reference="parent">
                                                    <span class="fas fa-ellipsis-h fs--2"></span></button>
                                                <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                        class="dropdown-item"
                                                        href="#!">View</a><a
                                                        class="dropdown-item" href="#!">Export</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item text-danger" href="#!">Remove</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
                        </div>
                        <div class="row align-items-center justify-content-between py-2 pe-0 fs--1">
                            <div class="col-auto d-flex">
                                <p class="mb-0 d-none d-sm-block me-3 fw-semi-bold text-900"
                                   data-list-info="data-list-info"></p><a class="fw-semi-bold" href="#!"
                                                                          data-list-view="*">View all<span
                                        class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a><a
                                    class="fw-semi-bold d-none" href="#!" data-list-view="less">View Less<span
                                        class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a>
                            </div>
                            <div class="col-auto d-flex">
                                <button class="page-link" data-list-pagination="prev"><span
                                        class="fas fa-chevron-left"></span></button>
                                <ul class="mb-0 pagination"></ul>
                                <button class="page-link pe-0" data-list-pagination="next"><span
                                        class="fas fa-chevron-right"></span></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <h3 class="mb-4">Ratings & reviews <span class="text-700 fw-normal">(43)</span></h3>
                    <div class="border-top border-bottom border-200" id="customerRatingsTable"
                         data-list='{"valueNames":["product","rating","review","status","date"],"page":5,"pagination":true}'>
                        <div class="table-responsive scrollbar">
                            <table class="table fs--1 mb-0">
                                <thead>
                                <tr>
                                    <th class="sort white-space-nowrap align-middle" scope="col" style="width:20%;"
                                        data-sort="product">PRODUCT
                                    </th>
                                    <th class="sort align-middle" scope="col" data-sort="rating" style="width:10%;">
                                        RATING
                                    </th>
                                    <th class="sort align-middle" scope="col" style="width:50%;" data-sort="review">
                                        REVIEW
                                    </th>
                                    <th class="sort text-end align-middle" scope="col" style="width:10%;"
                                        data-sort="status">STATUS
                                    </th>
                                    <th class="sort text-end align-middle" scope="col" style="width:10%;"
                                        data-sort="date">DATE
                                    </th>
                                    <th class="sort text-end pe-0 align-middle" scope="col"></th>
                                </tr>
                                </thead>
                                <tbody class="list" id="customer-rating-table-body">
                                <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                    <td class="align-middle product white-space-nowrap"><a class="fw-semi-bold"
                                                                                           href="#!">Apple Magic Mouse
                                            (Wireless, Rech...</a></td>
                                    <td class="align-middle rating white-space-nowrap fs--2"><span
                                            class="fa fa-star text-warning"></span><span
                                            class="fa fa-star text-warning"></span><span
                                            class="fa fa-star text-warning"></span><span
                                            class="fa fa-star text-warning"></span><span
                                            class="fa-regular fa-star text-warning-300"></span>
                                    </td>
                                    <td class="align-middle review" style="min-width:350px;">
                                        <p class="fw-semi-bold text-1000 mb-0">It's lovely, works right out of the box
                                            (as you'd expect from an Apple device), and has a number of useful
                                            functions.</p>
                                    </td>
                                    <td class="align-middle text-end status"><span
                                            class="badge badge-phoenix fs--2 badge-phoenix-success"><span
                                                class="badge-label">Success</span><span class="ms-1"
                                                                                        data-feather="check"
                                                                                        style="height:12.8px;width:12.8px;"></span></span>
                                    </td>
                                    <td class="align-middle text-end date white-space-nowrap">
                                        <p class="text-700 mb-0">Just now</p>
                                    </td>
                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                        <div class="font-sans-serif btn-reveal-trigger position-static">
                                            <button
                                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs--2"
                                                type="button" data-bs-toggle="dropdown" data-boundary="window"
                                                aria-haspopup="true" aria-expanded="false" data-bs-reference="parent">
                                                <span class="fas fa-ellipsis-h fs--2"></span></button>
                                            <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item"
                                                                                                 href="#!">View</a><a
                                                    class="dropdown-item" href="#!">Export</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item text-danger" href="#!">Remove</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                    <td class="align-middle product white-space-nowrap"><a class="fw-semi-bold"
                                                                                           href="#!">Fitbit Sense
                                            Advanced Smartwatch ...</a></td>
                                    <td class="align-middle rating white-space-nowrap fs--2"><span
                                            class="fa fa-star text-warning"></span><span
                                            class="fa fa-star text-warning"></span><span
                                            class="fa fa-star text-warning"></span><span
                                            class="fa fa-star text-warning"></span><span
                                            class="fa fa-star text-warning"></span>
                                    </td>
                                    <td class="align-middle review" style="min-width:350px;">
                                        <p class="fw-semi-bold text-1000 mb-0">This is an exceptional smartwatch,
                                            featuring a wealth of useful functions at an affordable price. The watch is
                                            small ...<a href='#!'>See more</a></p>
                                    </td>
                                    <td class="align-middle text-end status"><span
                                            class="badge badge-phoenix fs--2 badge-phoenix-success"><span
                                                class="badge-label">Success</span><span class="ms-1"
                                                                                        data-feather="check"
                                                                                        style="height:12.8px;width:12.8px;"></span></span>
                                    </td>
                                    <td class="align-middle text-end date white-space-nowrap">
                                        <p class="text-700 mb-0">Dec 9, 2:28PM</p>
                                    </td>
                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                        <div class="font-sans-serif btn-reveal-trigger position-static">
                                            <button
                                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs--2"
                                                type="button" data-bs-toggle="dropdown" data-boundary="window"
                                                aria-haspopup="true" aria-expanded="false" data-bs-reference="parent">
                                                <span class="fas fa-ellipsis-h fs--2"></span></button>
                                            <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item"
                                                                                                 href="#!">View</a><a
                                                    class="dropdown-item" href="#!">Export</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item text-danger" href="#!">Remove</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                    <td class="align-middle product white-space-nowrap"><a class="fw-semi-bold"
                                                                                           href="#!">HORI Racing Wheel
                                            Apex for PlaySt...</a></td>
                                    <td class="align-middle rating white-space-nowrap fs--2"><span
                                            class="fa fa-star text-warning"></span><span
                                            class="fa fa-star text-warning"></span><span
                                            class="fa fa-star text-warning"></span><span
                                            class="fa fa-star text-warning"></span><span
                                            class="fa-regular fa-star text-warning-300"></span>
                                    </td>
                                    <td class="align-middle review" style="min-width:350px;">
                                        <p class="fw-semi-bold text-1000 mb-0">This steering wheel is a great buy! It
                                            works well and feels good, however I wish it had a wider diameter like a
                                            real ...<a href='#!'>See more</a></p>
                                    </td>
                                    <td class="align-middle text-end status"><span
                                            class="badge badge-phoenix fs--2 badge-phoenix-warning"><span
                                                class="badge-label">Pending</span><span class="ms-1"
                                                                                        data-feather="alert-octagon"
                                                                                        style="height:12.8px;width:12.8px;"></span></span>
                                    </td>
                                    <td class="align-middle text-end date white-space-nowrap">
                                        <p class="text-700 mb-0">Dec 4, 12:56 PM</p>
                                    </td>
                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                        <div class="font-sans-serif btn-reveal-trigger position-static">
                                            <button
                                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs--2"
                                                type="button" data-bs-toggle="dropdown" data-boundary="window"
                                                aria-haspopup="true" aria-expanded="false" data-bs-reference="parent">
                                                <span class="fas fa-ellipsis-h fs--2"></span></button>
                                            <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item"
                                                                                                 href="#!">View</a><a
                                                    class="dropdown-item" href="#!">Export</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item text-danger" href="#!">Remove</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                    <td class="align-middle product white-space-nowrap"><a class="fw-semi-bold"
                                                                                           href="#!">Razer Kraken v3 x
                                            Wired 7.1 Surro...</a></td>
                                    <td class="align-middle rating white-space-nowrap fs--2"><span
                                            class="fa fa-star text-warning"></span><span
                                            class="fa fa-star text-warning"></span><span
                                            class="fa fa-star text-warning"></span><span
                                            class="fa-regular fa-star text-warning-300"></span><span
                                            class="fa-regular fa-star text-warning-300"></span>
                                    </td>
                                    <td class="align-middle review" style="min-width:350px;">
                                        <p class="fw-semi-bold text-1000 mb-0">My son says these are the greatest he's
                                            ever tasted.</p>
                                    </td>
                                    <td class="align-middle text-end status"><span
                                            class="badge badge-phoenix fs--2 badge-phoenix-secondary"><span
                                                class="badge-label">Cancelled</span><span class="ms-1" data-feather="x"
                                                                                          style="height:12.8px;width:12.8px;"></span></span>
                                    </td>
                                    <td class="align-middle text-end date white-space-nowrap">
                                        <p class="text-700 mb-0">Nov 28, 7:28 PM</p>
                                    </td>
                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                        <div class="font-sans-serif btn-reveal-trigger position-static">
                                            <button
                                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs--2"
                                                type="button" data-bs-toggle="dropdown" data-boundary="window"
                                                aria-haspopup="true" aria-expanded="false" data-bs-reference="parent">
                                                <span class="fas fa-ellipsis-h fs--2"></span></button>
                                            <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item"
                                                                                                 href="#!">View</a><a
                                                    class="dropdown-item" href="#!">Export</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item text-danger" href="#!">Remove</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                    <td class="align-middle product white-space-nowrap"><a class="fw-semi-bold"
                                                                                           href="#!">iPhone 13 pro
                                            max-Pacific Blue-12...</a></td>
                                    <td class="align-middle rating white-space-nowrap fs--2"><span
                                            class="fa fa-star text-warning"></span><span
                                            class="fa fa-star text-warning"></span><span
                                            class="fa fa-star text-warning"></span><span
                                            class="fa-regular fa-star text-warning-300"></span><span
                                            class="fa-regular fa-star text-warning-300"></span>
                                    </td>
                                    <td class="align-middle review" style="min-width:350px;">
                                        <p class="fw-semi-bold text-1000 mb-0">I chose wisely. The phone is in excellent
                                            condition, with no scratches or dents, excellent battery life, and
                                            flawless...<a href='#!'>See more</a></p>
                                    </td>
                                    <td class="align-middle text-end status"><span
                                            class="badge badge-phoenix fs--2 badge-phoenix-success"><span
                                                class="badge-label">Success</span><span class="ms-1"
                                                                                        data-feather="check"
                                                                                        style="height:12.8px;width:12.8px;"></span></span>
                                    </td>
                                    <td class="align-middle text-end date white-space-nowrap">
                                        <p class="text-700 mb-0">Nov 24, 10:16 AM</p>
                                    </td>
                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                        <div class="font-sans-serif btn-reveal-trigger position-static">
                                            <button
                                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs--2"
                                                type="button" data-bs-toggle="dropdown" data-boundary="window"
                                                aria-haspopup="true" aria-expanded="false" data-bs-reference="parent">
                                                <span class="fas fa-ellipsis-h fs--2"></span></button>
                                            <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item"
                                                                                                 href="#!">View</a><a
                                                    class="dropdown-item" href="#!">Export</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item text-danger" href="#!">Remove</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                    <td class="align-middle product white-space-nowrap"><a class="fw-semi-bold"
                                                                                           href="#!">Apple MacBook Pro
                                            13 inch-M1-8/25...</a></td>
                                    <td class="align-middle rating white-space-nowrap fs--2"><span
                                            class="fa fa-star text-warning"></span><span
                                            class="fa fa-star text-warning"></span><span
                                            class="fa fa-star text-warning"></span><span
                                            class="fa fa-star text-warning"></span><span
                                            class="fa fa-star-half-alt star-icon text-warning"></span>
                                    </td>
                                    <td class="align-middle review" style="min-width:350px;">
                                        <p class="fw-semi-bold text-1000 mb-0">It's lovely, works right out of the box
                                            (as you'd expect from an Apple device), and has a number of useful
                                            functions.</p>
                                    </td>
                                    <td class="align-middle text-end status"><span
                                            class="badge badge-phoenix fs--2 badge-phoenix-warning"><span
                                                class="badge-label">Pending</span><span class="ms-1"
                                                                                        data-feather="alert-octagon"
                                                                                        style="height:12.8px;width:12.8px;"></span></span>
                                    </td>
                                    <td class="align-middle text-end date white-space-nowrap">
                                        <p class="text-700 mb-0">Just now</p>
                                    </td>
                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                        <div class="font-sans-serif btn-reveal-trigger position-static">
                                            <button
                                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs--2"
                                                type="button" data-bs-toggle="dropdown" data-boundary="window"
                                                aria-haspopup="true" aria-expanded="false" data-bs-reference="parent">
                                                <span class="fas fa-ellipsis-h fs--2"></span></button>
                                            <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item"
                                                                                                 href="#!">View</a><a
                                                    class="dropdown-item" href="#!">Export</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item text-danger" href="#!">Remove</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                    <td class="align-middle product white-space-nowrap"><a class="fw-semi-bold"
                                                                                           href="#!">Apple iMac 24&quot;
                                            4K Retina Display ...</a></td>
                                    <td class="align-middle rating white-space-nowrap fs--2"><span
                                            class="fa fa-star text-warning"></span><span
                                            class="fa fa-star text-warning"></span><span
                                            class="fa fa-star text-warning"></span><span
                                            class="fa-regular fa-star text-warning-300"></span><span
                                            class="fa-regular fa-star text-warning-300"></span>
                                    </td>
                                    <td class="align-middle review" style="min-width:350px;">
                                        <p class="fw-semi-bold text-1000 mb-0">The best experience we could hope for.
                                            Customer service team is amazing and the quality of their products is
                                            unsurpas...<a href='#!'>See more</a></p>
                                    </td>
                                    <td class="align-middle text-end status"><span
                                            class="badge badge-phoenix fs--2 badge-phoenix-warning"><span
                                                class="badge-label">Pending</span><span class="ms-1"
                                                                                        data-feather="alert-octagon"
                                                                                        style="height:12.8px;width:12.8px;"></span></span>
                                    </td>
                                    <td class="align-middle text-end date white-space-nowrap">
                                        <p class="text-700 mb-0">Nov 09, 3:23 AM</p>
                                    </td>
                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                        <div class="font-sans-serif btn-reveal-trigger position-static">
                                            <button
                                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs--2"
                                                type="button" data-bs-toggle="dropdown" data-boundary="window"
                                                aria-haspopup="true" aria-expanded="false" data-bs-reference="parent">
                                                <span class="fas fa-ellipsis-h fs--2"></span></button>
                                            <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item"
                                                                                                 href="#!">View</a><a
                                                    class="dropdown-item" href="#!">Export</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item text-danger" href="#!">Remove</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                    <td class="align-middle product white-space-nowrap"><a class="fw-semi-bold"
                                                                                           href="#!">PlayStation 5
                                            DualSense Wireless ...</a></td>
                                    <td class="align-middle rating white-space-nowrap fs--2"><span
                                            class="fa fa-star text-warning"></span><span
                                            class="fa fa-star text-warning"></span><span
                                            class="fa fa-star text-warning"></span><span
                                            class="fa fa-star text-warning"></span><span
                                            class="fa-regular fa-star text-warning-300"></span>
                                    </td>
                                    <td class="align-middle review" style="min-width:350px;">
                                        <p class="fw-semi-bold text-1000 mb-0">My son says these are the greatest he's
                                            ever tasted.</p>
                                    </td>
                                    <td class="align-middle text-end status"><span
                                            class="badge badge-phoenix fs--2 badge-phoenix-success"><span
                                                class="badge-label">Success</span><span class="ms-1"
                                                                                        data-feather="check"
                                                                                        style="height:12.8px;width:12.8px;"></span></span>
                                    </td>
                                    <td class="align-middle text-end date white-space-nowrap">
                                        <p class="text-700 mb-0">Nov 08, 8:53 AM</p>
                                    </td>
                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                        <div class="font-sans-serif btn-reveal-trigger position-static">
                                            <button
                                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs--2"
                                                type="button" data-bs-toggle="dropdown" data-boundary="window"
                                                aria-haspopup="true" aria-expanded="false" data-bs-reference="parent">
                                                <span class="fas fa-ellipsis-h fs--2"></span></button>
                                            <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item"
                                                                                                 href="#!">View</a><a
                                                    class="dropdown-item" href="#!">Export</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item text-danger" href="#!">Remove</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                    <td class="align-middle product white-space-nowrap"><a class="fw-semi-bold"
                                                                                           href="#!">2021 Apple
                                            12.9-inch iPad Pro (Wi...</a></td>
                                    <td class="align-middle rating white-space-nowrap fs--2"><span
                                            class="fa fa-star text-warning"></span><span
                                            class="fa fa-star text-warning"></span><span
                                            class="fa fa-star text-warning"></span><span
                                            class="fa fa-star text-warning"></span><span
                                            class="fa fa-star-half-alt star-icon text-warning"></span>
                                    </td>
                                    <td class="align-middle review" style="min-width:350px;">
                                        <p class="fw-semi-bold text-1000 mb-0">The response time and service I received
                                            when contacted the designers were Phenomenal!</p>
                                    </td>
                                    <td class="align-middle text-end status"><span
                                            class="badge badge-phoenix fs--2 badge-phoenix-warning"><span
                                                class="badge-label">Pending</span><span class="ms-1"
                                                                                        data-feather="alert-octagon"
                                                                                        style="height:12.8px;width:12.8px;"></span></span>
                                    </td>
                                    <td class="align-middle text-end date white-space-nowrap">
                                        <p class="text-700 mb-0">Nov 07, 9:00 PM</p>
                                    </td>
                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                        <div class="font-sans-serif btn-reveal-trigger position-static">
                                            <button
                                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs--2"
                                                type="button" data-bs-toggle="dropdown" data-boundary="window"
                                                aria-haspopup="true" aria-expanded="false" data-bs-reference="parent">
                                                <span class="fas fa-ellipsis-h fs--2"></span></button>
                                            <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item"
                                                                                                 href="#!">View</a><a
                                                    class="dropdown-item" href="#!">Export</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item text-danger" href="#!">Remove</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                    <td class="align-middle product white-space-nowrap"><a class="fw-semi-bold"
                                                                                           href="#!">Amazon Basics Matte
                                            Black Wired K...</a></td>
                                    <td class="align-middle rating white-space-nowrap fs--2"><span
                                            class="fa fa-star text-warning"></span><span
                                            class="fa fa-star text-warning"></span><span
                                            class="fa fa-star text-warning"></span><span
                                            class="fa-regular fa-star text-warning-300"></span><span
                                            class="fa-regular fa-star text-warning-300"></span>
                                    </td>
                                    <td class="align-middle review" style="min-width:350px;">
                                        <p class="fw-semi-bold text-1000 mb-0">I chose wisely. The phone is in excellent
                                            condition, with no scratches or dents, excellent battery life, and
                                            flawless...<a href='#!'>See more</a></p>
                                    </td>
                                    <td class="align-middle text-end status"><span
                                            class="badge badge-phoenix fs--2 badge-phoenix-warning"><span
                                                class="badge-label">Pending</span><span class="ms-1"
                                                                                        data-feather="alert-octagon"
                                                                                        style="height:12.8px;width:12.8px;"></span></span>
                                    </td>
                                    <td class="align-middle text-end date white-space-nowrap">
                                        <p class="text-700 mb-0">Nov 07, 11:20 AM</p>
                                    </td>
                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                        <div class="font-sans-serif btn-reveal-trigger position-static">
                                            <button
                                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs--2"
                                                type="button" data-bs-toggle="dropdown" data-boundary="window"
                                                aria-haspopup="true" aria-expanded="false" data-bs-reference="parent">
                                                <span class="fas fa-ellipsis-h fs--2"></span></button>
                                            <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item"
                                                                                                 href="#!">View</a><a
                                                    class="dropdown-item" href="#!">Export</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item text-danger" href="#!">Remove</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="row align-items-center justify-content-between py-2 pe-0 fs--1">
                            <div class="col-auto d-flex">
                                <p class="mb-0 d-none d-sm-block me-3 fw-semi-bold text-900"
                                   data-list-info="data-list-info"></p><a class="fw-semi-bold" href="#!"
                                                                          data-list-view="*">View all<span
                                        class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a><a
                                    class="fw-semi-bold d-none" href="#!" data-list-view="less">View Less<span
                                        class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a>
                            </div>
                            <div class="col-auto d-flex">
                                <button class="page-link" data-list-pagination="prev"><span
                                        class="fas fa-chevron-left"></span></button>
                                <ul class="mb-0 pagination"></ul>
                                <button class="page-link pe-0" data-list-pagination="next"><span
                                        class="fas fa-chevron-right"></span></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
