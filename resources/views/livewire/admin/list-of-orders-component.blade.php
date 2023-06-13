<div>
    <nav class="mb-2" aria-label="breadcrumb">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="#!">Page 1</a></li>
            <li class="breadcrumb-item"><a href="#!">Page 2</a></li>
            <li class="breadcrumb-item active">Default</li>
        </ol>
    </nav>
    <div class="mb-9">
        <div class="row g-3 mb-4">
            <div class="col-auto">
                <h2 class="mb-0">Orders</h2>
            </div>
        </div>
        <ul class="nav nav-links mb-3 mb-lg-2 mx-n3">
            <li class="nav-item"><a class="nav-link active" aria-current="page" href="#">All <span
                        class="text-700 fw-semi-bold">
                        ({{ $orders->count()}})
                    </span></a></li>
            <li class="nav-item">
                <a class="text-700 nav-link fw-bold text-warning" href="#">Pending<span class="text-700 fw-black">
                        ({{ $orders->where('status', 0)->count()}})</span>
                </a>
            </li>

            <li class="nav-item"><a class="text-700 nav-link fw-bold text-info" href="#">Processing <span
                        class="text-700 fw-black">
                        ({{ $orders->where('status', 1)->count()}})
                    </span></a></li>
            <li class="nav-item"><a class="text-700 nav-link fw-bold text-success" href="#">Delivered<span
                        class="text-700 fw-black">
                        ({{ $orders->where('status', 2)->count()}})
                    </span></a></li>
            <li class="nav-item"><a class="text-700 nav-link fw-bold text-danger" href="#">Cancelled<span
                        class="text-700 fw-black">
                        ({{ $orders->where('status', 3)->count()}})
                    </span></a>
            </li>
        </ul>
        <div id="orderTable"
             data-list='{"valueNames":["order","total","customer","payment_status","fulfilment_status","delivery_type","date"],"page":10,"pagination":true}'>
            <div class="mb-4">
                <div class="row g-3">
                    <div class="col-auto">
                        <div class="search-box">
                            <form class="position-relative" data-bs-toggle="search" data-bs-display="static">
                                <input class="form-control search-input search" type="search"
                                       placeholder="Search orders" aria-label="Search"/>
                                <span class="fas fa-search search-box-icon"></span>

                            </form>
                        </div>
                    </div>
                    <div class="col-auto scrollbar overflow-hidden-y flex-grow-1">
                        <div class="btn-group position-static" role="group">
                            <div class="btn-group position-static text-nowrap" role="group">
                                <button class="btn btn-phoenix-secondary px-7 flex-shrink-0" type="button"
                                        data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true"
                                        aria-expanded="false" data-bs-reference="parent">
                                    Payment status<span class="fas fa-angle-down ms-2"></span></button>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    <li>
                                        <hr class="dropdown-divider"/>
                                    </li>
                                    <li><a class="dropdown-item" href="#">Separated link</a></li>
                                </ul>
                            </div>
                            <div class="btn-group position-static text-nowrap" role="group">
                                <button class="btn btn-sm btn-phoenix-secondary px-7 flex-shrink-0" type="button"
                                        data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true"
                                        aria-expanded="false" data-bs-reference="parent">
                                    Fulfilment status<span class="fas fa-angle-down ms-2"></span></button>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    <li>
                                        <hr class="dropdown-divider"/>
                                    </li>
                                    <li><a class="dropdown-item" href="#">Separated link</a></li>
                                </ul>
                            </div>
                            <button class="btn btn-sm btn-phoenix-secondary px-7 flex-shrink-0">More filters</button>
                        </div>
                    </div>
                </div>
            </div>
            <div
                class="mx-n4 px-4 mx-lg-n6 px-lg-6 bg-white border-top border-bottom border-200 position-relative top-1">
                <div class="table-responsive scrollbar mx-n1 px-1">
                    <table class="table table-sm fs--1 mb-0">
                        <thead>
                        <tr>
                            <th class="white-space-nowrap fs--1 align-middle ps-0" style="width:26px;">
                                <div class="form-check mb-0 fs-0">
                                    <input class="form-check-input" type="checkbox"/>
                                </div>
                            </th>
                            <th class="sort white-space-nowrap align-middle pe-3" scope="col" data-sort="order"
                                style="width:10%;">ORDER
                            </th>
                            <th class="sort align-middle text-end" scope="col" data-sort="total" style="width:10%;">
                                TOTAL IN KES
                            </th>
                            <th class="sort align-middle ps-8" scope="col" data-sort="customer"
                                style="width:25%; min-width: 250px;">CUSTOMER
                            </th>
                            <th class="sort align-middle ps-8" scope="col" data-sort="customer_email"
                                style="width:25%; min-width: 250px;">EMAIL
                            </th>
                            <th class="sort align-middle pe-3" scope="col" data-sort="delivery_status"
                                style="width:10%;">ORDER STATUS
                            </th>
                            <th class="sort align-middle text-end pe-0" scope="col" data-sort="date">DATE</th>
                        </tr>
                        </thead>
                        <tbody class="list" id="order-table-body">
                        @foreach($orders as $order)
                            <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                <td class="fs--1 align-middle px-0 py-3">
                                    <div class="form-check mb-0 fs-0">
                                        <input class="form-check-input" type="checkbox"/>
                                    </div>
                                </td>
                                <td class="order align-middle white-space-nowrap py-0">
                                    <a class="fw-semi-bold" href="{{ route('order-details.dashboard', $order->id) }}">
                                        {{ $order->id }}
                                    </a>
                                </td>
                                <td class="total align-middle text-end fw-semi-bold text-1000">
                                    {{ number_format($order->total_price, 2) }}
                                </td>
                                <td class="customer align-middle white-space-nowrap ps-8"><a
                                        class="d-flex align-items-center" href="#!">
                                        <h6 class="mb-0 ms-0 text-900">
                                            {{ $order->user->name }}
                                        </h6>
                                    </a></td>
                                <td class="customer_email align-middle white-space-nowrap ps-8"><a
                                        class="d-flex align-items-center" href="#!">
                                        <h6 class="mb-0 ms-0 text-900">
                                            {{ $order->user->email }}
                                        </h6>
                                    </a></td>
                                <td class="delivery_status align-middle white-space-nowrap text-start fw-bold text-700">
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
                                <td class="date align-middle white-space-nowrap text-700 fs--1 ps-4 text-end">
                                    {{ $order->created_at->format('d M, Y, h:i A') }}
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="row align-items-center justify-content-between py-2 pe-0 fs--1">
                    <div class="col-auto d-flex">
                        <p class="mb-0 d-none d-sm-block me-3 fw-semi-bold text-900"
                           data-list-info="data-list-info"></p><a class="fw-semi-bold" href="#!" data-list-view="*">View
                            all<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a><a
                            class="fw-semi-bold d-none" href="#!" data-list-view="less">View Less<span
                                class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a>
                    </div>
                    <div class="col-auto d-flex">
                        <button class="page-link" data-list-pagination="prev"><span class="fas fa-chevron-left"></span>
                        </button>
                        <ul class="mb-0 pagination"></ul>
                        <button class="page-link pe-0" data-list-pagination="next"><span
                                class="fas fa-chevron-right"></span></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
