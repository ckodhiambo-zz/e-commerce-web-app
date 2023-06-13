<div>

    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section class="pt-5 pb-9">

        <div class="container-small">
            <nav class="mb-2" aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="#!">Easy Fix</a></li>
                    <li class="breadcrumb-item active" aria-current="page">My Profile</li>
                </ol>
            </nav>
            <div class="row align-items-center justify-content-between g-3 mb-4">
                <div class="col-auto">
                    <h2 class="mb-0">Profile</h2>
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

            <div class="row g-3 mb-6">
                <div class="col-12 col-lg-8">
                    <div class="card h-100">
                        <div class="card-body">
                            <div class="border-bottom border-dashed border-300 pb-4">
                                <div class="row align-items-center g-3 g-sm-5 text-center text-sm-start">
                                    <div class="col-12 col-sm-auto">
                                        <input class="d-none" id="avatarFile" type="file"/>
                                        <label class="cursor-pointer avatar avatar-5xl" for="avatarFile"><img
                                                class="rounded-circle"
                                                src="{{ asset('e-commerce-assets/img/team/15.png') }}"
                                                alt=""/></label>
                                    </div>
                                    <div class="col-12 col-sm-auto flex-1">
                                        <h3>{{ auth()->user()->name }}</h3>
                                        <p class="text-800">Joined 3 months ago</p>
                                        <div><a class="me-2" href="{{ auth()->user()->linkedin }}" target="_blank"><span
                                                    class="fab fa-linkedin-in text-400 hover-primary"></span></a><a
                                                class="me-2" href="{{ auth()->user()->facebook }}" target="_blank"><span
                                                    class="fab fa-facebook text-400 hover-primary"></span></a><a
                                                href="{{ auth()->user()->twitter }}" target="_blank"><span
                                                    class="fab fa-twitter text-400 hover-primary"></span></a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex flex-between-center pt-4">
                                <div>
                                    <h6 class="mb-2 text-800">Total Spent</h6>
                                    <h4 class="fs-1 text-1000 mb-0">
                                        KES. {{ number_format($totalAmount, 2) }}
                                    </h4>
                                </div>
                                <div class="text-end">
                                    <h6 class="mb-2 text-800">Last Order</h6>
                                    <h4 class="fs-1 text-1000 mb-0">
                                        {{ $timeElapsed }}
                                    </h4>
                                </div>
                                <div class="text-end">
                                    <h6 class="mb-2 text-800">Total Orders</h6>
                                    <h4 class="fs-1 text-1000 mb-0">
                                        {{ $totalOrders }}
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <div class="border-bottom border-dashed border-300">
                                <h4 class="mb-3 lh-sm lh-xl-1">Default Address
                                    <button class="btn btn-link p-0" type="button"><span
                                            class="fas fa-edit fs--1 ms-3 text-500"></span></button>
                                </h4>
                            </div>
                            <div class="pt-4 mb-7 mb-lg-4 mb-xl-7">
                                <div class="row justify-content-between">
                                    <div class="col-auto">
                                        <h5 class="text-1000">Address</h5>
                                    </div>
                                    <div class="col-auto">
                                        <p class="text-800">
                                            {{ auth()->user()->address ?? 'No Address Provided' }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="border-top border-dashed border-300 pt-4">
                                <div class="row flex-between-center mb-2">
                                    <div class="col-auto">
                                        <h5 class="text-1000 mb-0">Email</h5>
                                    </div>
                                    <div class="col-auto"><a class="lh-1" href="mailto:{{auth()->user()->email}}">
                                            {{ auth()->user()->email }}
                                        </a>
                                    </div>
                                </div>
                                <div class="row flex-between-center">
                                    <div class="col-auto">
                                        <h5 class="text-1000 mb-0">Phone</h5>
                                    </div>
                                    <div class="col-auto"><a class="text-800">
                                            {{ auth()->user()->phone ?? 'No Phone no. Provided' }}
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="scrollbar">
                    <ul class="nav nav-underline flex-nowrap mb-3 pb-1" id="myTab" role="tablist">
                        <li class="nav-item me-3"><a class="nav-link text-nowrap active" id="orders-tab"
                                                     data-bs-toggle="tab" href="#tab-orders" role="tab"
                                                     aria-controls="tab-orders" aria-selected="true"><span
                                    class="fas fa-shopping-cart me-2"></span>Orders <span class="text-700 fw-normal"> ({{ $orders->count() }})</span></a>
                        </li>
                        <li class="nav-item me-3"><a class="nav-link text-nowrap" id="reviews-tab" data-bs-toggle="tab"
                                                     href="#tab-reviews" role="tab" aria-controls="tab-orders"
                                                     aria-selected="true"><span
                                    class="fas fa-star me-2"></span>Reviews<span class="text-700 fw-normal"> (24)</span></a>
                        </li>
                        <li class="nav-item me-3"><a class="nav-link text-nowrap" id="wishlist-tab" data-bs-toggle="tab"
                                                     href="#tab-wishlist" role="tab" aria-controls="tab-orders"
                                                     aria-selected="true"><span class="fas fa-heart me-2"></span>Wishlist</a>
                        </li>
                        <li class="nav-item"><a class="nav-link text-nowrap" id="personal-info-tab" data-bs-toggle="tab"
                                                href="#tab-personal-info" role="tab" aria-controls="tab-personal-info"
                                                aria-selected="true"><span class="fas fa-user me-2"></span>Personal info</a>
                        </li>
                    </ul>
                </div>
                <div class="tab-content" id="profileTabContent">
                    <div class="tab-pane fade show active" id="tab-orders" role="tabpanel" aria-labelledby="orders-tab">
                        <div class="border-top border-bottom border-200" id="profileOrdersTable"
                             data-list='{"valueNames":["order","status","delivery","date","total"],"page":6,"pagination":true}'>
                            <div class="table-responsive scrollbar">
                                <table class="table fs--1 mb-0">
                                    <thead>
                                    <tr>
                                        <th class="sort white-space-nowrap align-middle pe-3 ps-0" scope="col"
                                            data-sort="order" style="width:15%; min-width:140px">ORDER
                                        </th>
                                        <th class="sort align-middle pe-3" scope="col" data-sort="status"
                                            style="width:15%; min-width:180px">ORDER STATUS
                                        </th>
                                        <th class="sort align-middle pe-0 text-end" scope="col" data-sort="date"
                                            style="width:15%; min-width:160px">DATE & TIME
                                        </th>
                                        <th class="sort align-middle text-end" scope="col" data-sort="total"
                                            style="width:15%; min-width:160px">TOTAL IN KES
                                        </th>
                                        <th class="align-middle pe-0 text-end" scope="col" style="width:15%;"></th>
                                    </tr>
                                    </thead>
                                    <tbody class="list" id="profile-order-table-body">
                                    {{-- Create a loop here to display all the orders--}}
                                    @foreach( $orders as $order)
                                        <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                            <td class="order align-middle white-space-nowrap py-2 ps-0"><a
                                                    class="fw-semi-bold text-primary"
                                                    href="{{ route('my-order-details', ['order_id' => $order->id]) }}">#{{ $order->id }}</a>
                                            </td>
                                            <td class="status align-middle white-space-nowrap text-start fw-bold text-700 py-2">

                                                @if($order->status == 0)
                                                    <span
                                                        class="badge rounded-pill bg-warning text-white-600">Pending</span>
                                                @elseif($order->status == 1)
                                                    <span
                                                        class="badge rounded-pill bg-info text-white-600">Processing</span>
                                                @elseif($order->status == 2)
                                                    <span
                                                        class="badge rounded-pill bg-success text-white-600">Delivered</span>
                                                @elseif($order->status == 3)
                                                    <span
                                                        class="badge rounded-pill bg-danger text-white-600">Cancelled</span>
                                                @endif
                                            </td>
                                            <td class="total align-middle text-700 text-end py-2">
                                                {{ $order->created_at->format('d M, Y, h:i A') }}
                                            </td>
                                            <td class="date align-middle fw-semi-bold text-end py-2 text-1000">
                                                {{ number_format($order->total_price, 2)}}
                                            </td>
                                            <td class="align-middle text-end white-space-nowrap pe-0 action py-2">
                                                <div class="font-sans-serif btn-reveal-trigger position-static">
                                                    <button
                                                        class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal"
                                                        type="button" data-bs-toggle="dropdown" data-boundary="window"
                                                        aria-haspopup="true" aria-expanded="false"
                                                        data-bs-reference="parent"><span
                                                            class="fas fa-ellipsis-h fs--2"></span></button>
                                                    <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                            class="dropdown-item" href="#!">View</a><a
                                                            class="dropdown-item"
                                                            href="#!">Export</a>
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
                    <div class="tab-pane fade" id="tab-reviews" role="tabpanel" aria-labelledby="reviews-tab">
                        <div class="border-y" id="profileRatingTable"
                             data-list='{"valueNames":["product","rating","review","status","date"],"page":6,"pagination":true}'>
                            <div class="table-responsive scrollbar">
                                <table class="table fs--1 mb-0">
                                    <thead>
                                    <tr>
                                        <th class="sort white-space-nowrap align-middle" scope="col"
                                            style="min-width:220px;" data-sort="product">PRODUCT
                                        </th>
                                        <th class="sort align-middle" scope="col" data-sort="rating"
                                            style="max-width:10%;">RATING
                                        </th>
                                        <th class="sort align-middle" scope="col" style="min-width:480px"
                                            data-sort="review">REVIEW
                                        </th>
                                        <th class="sort align-middle" scope="col" style="max-width:12%;"
                                            data-sort="status">STATUS
                                        </th>
                                        <th class="sort text-end align-middle" scope="col" style="max-width:10%;"
                                            data-sort="date">DATE
                                        </th>
                                        <th class="sort text-end pe-0 align-middle" scope="col" style="width: 7%"></th>
                                    </tr>
                                    </thead>
                                    <tbody class="list" id="profile-review-table-body">
                                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                        <td class="align-middle product pe-3"><a class="fw-semi-bold line-clamp-1"
                                                                                 href="#!">Fitbit Sense Advanced
                                                Smartwatch with Tools for Heart Health, Stress Management &amp; Skin
                                                Temperature Trends, Carbon/Graphite, One Size (S &amp; L Bands)</a></td>
                                        <td class="align-middle rating white-space-nowrap fs--2"><span
                                                class="fa fa-star text-warning"></span><span
                                                class="fa fa-star text-warning"></span><span
                                                class="fa fa-star text-warning"></span><span
                                                class="fa fa-star text-warning"></span><span
                                                class="fa-regular fa-star text-warning-300"></span>
                                        </td>
                                        <td class="align-middle review pe-7">
                                            <p class="fw-semi-bold text-1000 mb-0 line-clamp-2">This Fitbit is
                                                fantastic! I was trying to be in better shape and needed some
                                                motivation, so I decided to treat myself to a new Fitbit.</p>
                                        </td>
                                        <td class="align-middle status pe-9"><span
                                                class="badge badge-phoenix fs--2 badge-phoenix-success">Approaved<span
                                                    class="ms-1" data-feather="check"
                                                    style="height:12.8px;width:12.8px;"></span></span></td>
                                        <td class="align-middle text-end date white-space-nowrap">
                                            <p class="text-700 mb-0">Just now</p>
                                        </td>
                                        <td class="align-middle white-space-nowrap text-end pe-0">
                                            <div class="font-sans-serif btn-reveal-trigger position-static">
                                                <button
                                                    class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal"
                                                    type="button" data-bs-toggle="dropdown" data-boundary="window"
                                                    aria-haspopup="true" aria-expanded="false"
                                                    data-bs-reference="parent"><span
                                                        class="fas fa-ellipsis-h fs--2"></span></button>
                                                <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                        class="dropdown-item" href="#!">View</a><a class="dropdown-item"
                                                                                                   href="#!">Export</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item text-danger" href="#!">Remove</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                        <td class="align-middle product pe-3"><a class="fw-semi-bold line-clamp-1"
                                                                                 href="#!">iPhone 13 pro max-Pacific
                                                Blue-128GB storage</a></td>
                                        <td class="align-middle rating white-space-nowrap fs--2"><span
                                                class="fa fa-star text-warning"></span><span
                                                class="fa fa-star text-warning"></span><span
                                                class="fa fa-star text-warning"></span><span
                                                class="fa fa-star text-warning"></span><span
                                                class="fa-regular fa-star text-warning-300"></span>
                                        </td>
                                        <td class="align-middle review pe-7">
                                            <p class="fw-semi-bold text-1000 mb-0 line-clamp-2">The order was delivered
                                                ahead of schedule. To give us additional time, you should leave the
                                                packaging sealed with plastic.</p>
                                        </td>
                                        <td class="align-middle status pe-9"><span
                                                class="badge badge-phoenix fs--2 badge-phoenix-warning">Pending<span
                                                    class="ms-1" data-feather="clock"
                                                    style="height:12.8px;width:12.8px;"></span></span></td>
                                        <td class="align-middle text-end date white-space-nowrap">
                                            <p class="text-700 mb-0">Dec 9, 2:28 PM</p>
                                        </td>
                                        <td class="align-middle white-space-nowrap text-end pe-0">
                                            <div class="font-sans-serif btn-reveal-trigger position-static">
                                                <button
                                                    class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal"
                                                    type="button" data-bs-toggle="dropdown" data-boundary="window"
                                                    aria-haspopup="true" aria-expanded="false"
                                                    data-bs-reference="parent"><span
                                                        class="fas fa-ellipsis-h fs--2"></span></button>
                                                <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                        class="dropdown-item" href="#!">View</a><a class="dropdown-item"
                                                                                                   href="#!">Export</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item text-danger" href="#!">Remove</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                        <td class="align-middle product pe-3"><a class="fw-semi-bold line-clamp-1"
                                                                                 href="#!">Apple MacBook Pro 13
                                                inch-M1-8/256GB-space</a></td>
                                        <td class="align-middle rating white-space-nowrap fs--2"><span
                                                class="fa fa-star text-warning"></span><span
                                                class="fa fa-star text-warning"></span><span
                                                class="fa fa-star text-warning"></span><span
                                                class="fa fa-star text-warning"></span><span
                                                class="fa fa-star-half-alt star-icon text-warning"></span>
                                        </td>
                                        <td class="align-middle review pe-7">
                                            <p class="fw-semi-bold text-1000 mb-0 line-clamp-2">It's a Mac, after all.
                                                Once you've gone Mac, there's no going back. My first Mac lasted over
                                                nine years, and this is my second.</p>
                                        </td>
                                        <td class="align-middle status pe-9"><span
                                                class="badge badge-phoenix fs--2 badge-phoenix-success">Approaved<span
                                                    class="ms-1" data-feather="check"
                                                    style="height:12.8px;width:12.8px;"></span></span></td>
                                        <td class="align-middle text-end date white-space-nowrap">
                                            <p class="text-700 mb-0">Dec 4, 12:56 PM</p>
                                        </td>
                                        <td class="align-middle white-space-nowrap text-end pe-0">
                                            <div class="font-sans-serif btn-reveal-trigger position-static">
                                                <button
                                                    class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal"
                                                    type="button" data-bs-toggle="dropdown" data-boundary="window"
                                                    aria-haspopup="true" aria-expanded="false"
                                                    data-bs-reference="parent"><span
                                                        class="fas fa-ellipsis-h fs--2"></span></button>
                                                <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                        class="dropdown-item" href="#!">View</a><a class="dropdown-item"
                                                                                                   href="#!">Export</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item text-danger" href="#!">Remove</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                        <td class="align-middle product pe-3"><a class="fw-semi-bold line-clamp-1"
                                                                                 href="#!">Apple iMac 24&quot; 4K Retina
                                                Display M1 8 Core CPU, 7 Core GPU, 256GB SSD, Green (MJV83ZP/A) 2021</a>
                                        </td>
                                        <td class="align-middle rating white-space-nowrap fs--2"><span
                                                class="fa fa-star text-warning"></span><span
                                                class="fa fa-star text-warning"></span><span
                                                class="fa fa-star text-warning"></span><span
                                                class="fa-regular fa-star text-warning-300"></span><span
                                                class="fa-regular fa-star text-warning-300"></span>
                                        </td>
                                        <td class="align-middle review pe-7">
                                            <p class="fw-semi-bold text-1000 mb-0 line-clamp-2">Personally, I like the
                                                minimalist style, but I wouldn't choose it if I were searching for a
                                                computer that I would use frequently. It's not horrible in terms of
                                                speed and power</p>
                                        </td>
                                        <td class="align-middle status pe-9"><span
                                                class="badge badge-phoenix fs--2 badge-phoenix-success">Approaved<span
                                                    class="ms-1" data-feather="check"
                                                    style="height:12.8px;width:12.8px;"></span></span></td>
                                        <td class="align-middle text-end date white-space-nowrap">
                                            <p class="text-700 mb-0">Nov 28, 7:28 PM</p>
                                        </td>
                                        <td class="align-middle white-space-nowrap text-end pe-0">
                                            <div class="font-sans-serif btn-reveal-trigger position-static">
                                                <button
                                                    class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal"
                                                    type="button" data-bs-toggle="dropdown" data-boundary="window"
                                                    aria-haspopup="true" aria-expanded="false"
                                                    data-bs-reference="parent"><span
                                                        class="fas fa-ellipsis-h fs--2"></span></button>
                                                <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                        class="dropdown-item" href="#!">View</a><a class="dropdown-item"
                                                                                                   href="#!">Export</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item text-danger" href="#!">Remove</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                        <td class="align-middle product pe-3"><a class="fw-semi-bold line-clamp-1"
                                                                                 href="#!">Razer Kraken v3 x Wired 7.1
                                                Surroung Sound Gaming headset</a></td>
                                        <td class="align-middle rating white-space-nowrap fs--2"><span
                                                class="fa fa-star text-warning"></span><span
                                                class="fa fa-star text-warning"></span><span
                                                class="fa fa-star text-warning"></span><span
                                                class="fa fa-star text-warning"></span><span
                                                class="fa fa-star text-warning"></span>
                                        </td>
                                        <td class="align-middle review pe-7">
                                            <p class="fw-semi-bold text-1000 mb-0 line-clamp-2">It performs exactly as
                                                expected. There are three of these in the family.</p>
                                        </td>
                                        <td class="align-middle status pe-9"><span
                                                class="badge badge-phoenix fs--2 badge-phoenix-secondary">Cancelled<span
                                                    class="ms-1" data-feather="x"
                                                    style="height:12.8px;width:12.8px;"></span></span></td>
                                        <td class="align-middle text-end date white-space-nowrap">
                                            <p class="text-700 mb-0">Nov 24, 10:16 AM</p>
                                        </td>
                                        <td class="align-middle white-space-nowrap text-end pe-0">
                                            <div class="font-sans-serif btn-reveal-trigger position-static">
                                                <button
                                                    class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal"
                                                    type="button" data-bs-toggle="dropdown" data-boundary="window"
                                                    aria-haspopup="true" aria-expanded="false"
                                                    data-bs-reference="parent"><span
                                                        class="fas fa-ellipsis-h fs--2"></span></button>
                                                <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                        class="dropdown-item" href="#!">View</a><a class="dropdown-item"
                                                                                                   href="#!">Export</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item text-danger" href="#!">Remove</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                        <td class="align-middle product pe-3"><a class="fw-semi-bold line-clamp-1"
                                                                                 href="#!">PlayStation 5 DualSense
                                                Wireless Controller</a></td>
                                        <td class="align-middle rating white-space-nowrap fs--2"><span
                                                class="fa fa-star text-warning"></span><span
                                                class="fa fa-star text-warning"></span><span
                                                class="fa fa-star text-warning"></span><span
                                                class="fa fa-star text-warning"></span><span
                                                class="fa fa-star text-warning"></span>
                                        </td>
                                        <td class="align-middle review pe-7">
                                            <p class="fw-semi-bold text-1000 mb-0 line-clamp-2">The controller is quite
                                                comfy for me. Despite its increased size, the controller still fits well
                                                in my hands.</p>
                                        </td>
                                        <td class="align-middle status pe-9"><span
                                                class="badge badge-phoenix fs--2 badge-phoenix-success">Success<span
                                                    class="ms-1" data-feather="fas fa-check"
                                                    style="height:12.8px;width:12.8px;"></span></span></td>
                                        <td class="align-middle text-end date white-space-nowrap">
                                            <p class="text-700 mb-0">Just now</p>
                                        </td>
                                        <td class="align-middle white-space-nowrap text-end pe-0">
                                            <div class="font-sans-serif btn-reveal-trigger position-static">
                                                <button
                                                    class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal"
                                                    type="button" data-bs-toggle="dropdown" data-boundary="window"
                                                    aria-haspopup="true" aria-expanded="false"
                                                    data-bs-reference="parent"><span
                                                        class="fas fa-ellipsis-h fs--2"></span></button>
                                                <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                        class="dropdown-item" href="#!">View</a><a class="dropdown-item"
                                                                                                   href="#!">Export</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item text-danger" href="#!">Remove</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                        <td class="align-middle product pe-3"><a class="fw-semi-bold line-clamp-1"
                                                                                 href="#!">2021 Apple 12.9-inch iPad Pro
                                                (Wi‑Fi, 128GB) - Space Gray</a></td>
                                        <td class="align-middle rating white-space-nowrap fs--2"><span
                                                class="fa fa-star text-warning"></span><span
                                                class="fa fa-star text-warning"></span><span
                                                class="fa fa-star text-warning"></span><span
                                                class="fa fa-star text-warning"></span><span
                                                class="fa-regular fa-star text-warning-300"></span>
                                        </td>
                                        <td class="align-middle review pe-7">
                                            <p class="fw-semi-bold text-1000 mb-0 line-clamp-2">The response time and
                                                service I received when contacted the designers were Phenomenal!</p>
                                        </td>
                                        <td class="align-middle status pe-9"><span
                                                class="badge badge-phoenix fs--2 badge-phoenix-warning">Pending<span
                                                    class="ms-1" data-feather="fas fa-stopwatch"
                                                    style="height:12.8px;width:12.8px;"></span></span></td>
                                        <td class="align-middle text-end date white-space-nowrap">
                                            <p class="text-700 mb-0">Nov 07, 9:00 PM</p>
                                        </td>
                                        <td class="align-middle white-space-nowrap text-end pe-0">
                                            <div class="font-sans-serif btn-reveal-trigger position-static">
                                                <button
                                                    class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal"
                                                    type="button" data-bs-toggle="dropdown" data-boundary="window"
                                                    aria-haspopup="true" aria-expanded="false"
                                                    data-bs-reference="parent"><span
                                                        class="fas fa-ellipsis-h fs--2"></span></button>
                                                <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                        class="dropdown-item" href="#!">View</a><a class="dropdown-item"
                                                                                                   href="#!">Export</a>
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
                    <div class="tab-pane fade" id="tab-wishlist" role="tabpanel" aria-labelledby="wishlist-tab">
                        <div class="border-y" id="productWishlistTable"
                             data-list='{"valueNames":["products","color","size","price","quantity","total"],"page":5,"pagination":true}'>
                            <div class="table-responsive scrollbar">
                                <table class="table fs--1 mb-0">
                                    <thead>
                                    <tr>
                                        <th class="sort white-space-nowrap align-middle fs--2" scope="col"
                                            style="width:7%;"></th>
                                        <th class="sort white-space-nowrap align-middle" scope="col"
                                            style="width:20%; min-width:250px;" data-sort="products">PRODUCTS
                                        </th>
                                        <th class="sort align-middle" scope="col" data-sort="color" style="width:20%;">
                                            DESCRIPTION
                                        </th>
                                        <th class="sort align-middle" scope="col" data-sort="size" style="width:10%;">
                                            CATEGORY
                                        </th>
                                        <th class="sort align-middle text-end" scope="col" data-sort="price"
                                            style="width:15%;">PRICE
                                        </th>
                                        <th class="sort align-middle text-end pe-0" scope="col" style="width:35%;"></th>
                                    </tr>
                                    </thead>
                                    <tbody class="list" id="profile-wishlist-table-body">
                                    @foreach($wishlist as $item)
                                        <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                            <td class="align-middle white-space-nowrap ps-0 py-0">
                                                <div class="border rounded-2 d-inline-block"><img
                                                        src="{{ asset('e-commerce-assets/img/products/1.png') }}" alt=""
                                                        width="53"/></div>
                                            </td>
                                            <td class="products align-middle pe-11"><a
                                                    class="fw-semi-bold mb-0 line-clamp-1" href="#!">{{ $item->name }}</a>
                                            </td>
                                            <td class="color align-middle white-space-nowrap fs--1 text-900">
                                                {{ Str::limit(html_entity_decode(strip_tags($item->description)), 30) }}
                                            </td>
                                            <td class="size align-middle white-space-nowrap text-700 fs--1 fw-semi-bold">
                                                {{ $item->category_name }}
                                            </td>
                                            <td class="price align-middle text-900 fs--1 fw-semi-bold text-end">
                                                {{ number_format($item->selling_price,2) }}
                                            </td>
                                            <td class="total align-middle fw-bold text-1000 text-end text-nowrap pe-0">
                                                <button class="btn btn-sm text-500 hover-text-600 me-2"><span
                                                        class="fas fa-trash"></span></button>
                                                @if(in_array($item->product_id, $cartItems->pluck('product_id')->toArray()))
                                                    <span class="badge bg-300 bg-info" style="font-size: 12px; padding: 8px;">Already in Cart</span>
                                                @else
                                                    <button wire:click="addToCartFromProfile({{ $item->id }})" style="font-size: 12px;" class="btn btn-primary fs--2"><span
                                                            class="fas fa-shopping-cart me-1 fs--2"></span>Add to cart
                                                    </button>
                                                @endif
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
                    <div class="tab-pane fade" id="tab-personal-info" role="tabpanel"
                         aria-labelledby="personal-info-tab">
                        <form action="{{route('update-profile')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row g-3 mb-5">
                                <div class="col-12 col-lg-6">
                                    <label class="form-label text-1000 fs-0 ps-0 text-capitalize lh-sm" for="fullName">Full
                                        name</label>
                                    <input class="form-control" id="fullName" name="name" type="text"
                                           value="{{ auth()->user()->name }}" placeholder="Full name"/>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <label class="form-label text-1000 fs-0 ps-0 text-capitalize lh-sm"
                                           for="gender">Gender: ({{ auth()->user()->gender ?? 'Status unknown'}}
                                        )</label>
                                    <select class="form-select" id="gender" name="gender">
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                        <option value="non-binary">Non-binary</option>
                                        <option value="not-to-say">Prefer not to say</option>
                                    </select>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <label class="form-label text-1000 fs-0 ps-0 text-capitalize lh-sm"
                                           for="email">Email</label>
                                    <input class="form-control" id="email" name="email" type="text"
                                           value="{{ auth()->user()->email }}" placeholder="Email"/>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <div class="row g-2 gy-lg-0">
                                        <label class="form-label text-1000 fs-0 ps-1 text-capitalize lh-sm">Date of
                                            birth</label>
                                        <div class="flatpickr-input-container">
                                            <div class="form-floating">
                                                <input class="form-control datetimepicker" id="startDatepicker"
                                                       type="text" name="date_of_birth" placeholder="start date"
                                                       value="{{ auth()->user()->date_of_birth ?? 'Date of birth unknown'}}"
                                                       data-options='{"disableMobile":true}'/><span
                                                    class="uil uil-calendar-alt flatpickr-icon text-700"></span>
                                                <label class="ps-6" for="startDatepicker">Start date</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <label class="form-label text-1000 fw-bold fs-0 ps-0 text-capitalize lh-sm"
                                           for="phone">Phone</label>
                                    <input class="form-control" id="phone" name="phone"
                                           value="{{ auth()->user()->phone }}" type="text" placeholder="+1234567890"/>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <label class="form-label text-1000 fw-bold fs-0 ps-0 text-capitalize lh-sm"
                                           for="alternative_phone">Physical Address</label>
                                    <input class="form-control" id="alternative_phone"
                                           value="{{ auth()->user()->address ?? 'Not Provided' }}" name="address"
                                           type="text"
                                           placeholder="+1234567890"/>
                                </div>
                                <div class="col-12 col-lg-4">
                                    <label class="form-label text-1000 fw-bold fs-0 ps-0 text-capitalize lh-sm"
                                           for="facebook">Facebook</label>
                                    <input class="form-control" id="facebook" name="facebook" type="text"
                                           value="{{ auth()->user()->facebook ?? 'No Profile Link' }}"
                                           placeholder="Facebook"/>
                                </div>
                                <div class="col-12 col-lg-4">
                                    <label class="form-label text-1000 fw-bold fs-0 ps-0 text-capitalize lh-sm"
                                           for="instagram">Instagram</label>
                                    <input class="form-control" id="instagram" name="instagram" type="text"
                                           value="{{ auth()->user()->instagram ?? 'No Profile Link'  }}"
                                           placeholder="Instagram"/>
                                </div>
                                <div class="col-12 col-lg-4">
                                    <label class="form-label text-1000 fw-bold fs-0 ps-0 text-capitalize lh-sm"
                                           for="twitter">Twitter</label>
                                    <input class="form-control" id="twitter" type="text" name="twitter"
                                           value="{{ auth()->user()->twitter ?? 'No Profile Link'  }}"
                                           placeholder="Twitter"/>
                                </div>
                            </div>
                            <div class="text-end">
                                <button class="btn btn-primary px-7" type="submit">Save changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- end of .container-->

    </section>
    <!-- <section> close ============================-->
    <!-- ============================================-->

</div>



