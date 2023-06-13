<!-- ============================================-->
<!-- <section> begin ============================-->
<section class="pt-5 pb-9">

    <div class="container-small cart">
        <nav class="mb-2" aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="#!">Easy Fix</a></li>
                <li class="breadcrumb-item active" aria-current="page">My Orders</li>
            </ol>
        </nav>
        <h2 class="mb-5">My Orders<span class="text-700 fw-normal ms-2">({{ $orders->count() }})
            </span></h2>
        <div class="border-y" id="productWishlistTable"
             data-list='{"valueNames":["products","color","size","price","quantity","total"],"page":5,"pagination":true}'>
            <div class="table-responsive scrollbar">
                <table class="table fs--1 mb-0">
                    <thead>
                    <tr>
                        <th class="sort white-space-nowrap align-middle pe-3" scope="col" data-sort="order"
                            style="width:5%;">ORDER
                        </th>
                        <th class="sort white-space-nowrap align-middle" scope="col" style="width:30%; min-width:250px;"
                            data-sort="products">SHIPPED TO
                        </th>
                        <th class="sort align-middle" scope="col" data-sort="order_status" style="width:20%;">ORDER
                            STATUS
                        </th>
                        <th class="sort align-middle" scope="col" data-sort="date" style="width:5%;">DATE & TIME</th>
                        <th class="sort align-middle text-end" scope="col" data-sort="price" style="width:20%;">TOTAL
                            PRICE
                        </th>
                        <th class="sort align-middle text-end pe-0" scope="col" style="width:5%;"></th>
                    </tr>
                    </thead>
                    <tbody class="list" id="profile-wishlist-table-body">
                    {{--                    Create a loop here to display all the orders--}}
                    @foreach( $orders as $order)
                        <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                            <td class="order align-middle white-space-nowrap py-0"><a class="fw-semi-bold"
                                                                                      href="#!">
                                    #
                                    <a href="{{ route('my-order-details', ['order_id' => $order->id]) }}">
                                        #{{ $order->id }}
                                    </a>
                                </a>
                            </td>
                            <td class="products align-middle pe-11"><a class="fw-semi-bold mb-0 line-clamp-1" href="#!">
                                    {{ $order->shipping_name }}
                                </a></td>
                            <td class="order_status align-middle white-space-nowrap text-start fw-bold text-700">
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

                            </td>
                            <td class="date align-middle white-space-nowrap text-700 fs--1 fw-semi-bold">
                                {{ $order->created_at->format('d M Y') }} <br>
                                {{ $order->created_at->format('h:i A') }}
                            </td>
                            <td class="price align-middle text-900 fs--1 fw-semi-bold text-end">
                                KES. {{ number_format($order->total_price, 2) }}
                            </td>
                            <td class="total align-middle fw-bold text-1000 text-end text-nowrap pe-0">
                                @if ($order->status == 0 || $order->status == 1)
                                    <button class="btn btn-danger fs--2"><span
                                            class="fas fa-solid fa-xmark me-1 fs--2"></span>Cancel Order
                                    </button>
                                @endif
                                <button class="btn btn-sm text-500 hover-text-600 me-2"><span
                                        class="fas fa-trash"></span></button>
                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
            <div class="row align-items-center justify-content-between py-2 pe-0 fs--1">
                <div class="col-auto d-flex">
                    <p class="mb-0 d-none d-sm-block me-3 fw-semi-bold text-900" data-list-info="data-list-info"></p><a
                        class="fw-semi-bold" href="#!" data-list-view="*">View all<span class="fas fa-angle-right ms-1"
                                                                                        data-fa-transform="down-1"></span></a><a
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
    <!-- end of .container-->

</section>
<!-- <section> close ============================-->
<!-- ============================================-->
