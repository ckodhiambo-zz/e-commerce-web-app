<div>
    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section class="pt-5 pb-9">

        <div class="container-small cart">
            <nav class="mb-2" aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="#!">Easy Fix</a></li>
                    <li class="breadcrumb-item active" aria-current="page">My wishlist</li>
                </ol>
            </nav>
            <h2 class="mb-5">Wishlist<span class="text-700 fw-normal ms-2">
                    <span class="text-900">
                        <span class="wishlist-count">{{ count($wishlist) }}</span>
                    </span>
                    <span class="text-900">
                        <span class="wishlist-count">{{ count($wishlist) > 1 ? 'items' : 'item' }}</span>
                </span></h2>
            <div class="border-y" id="productWishlistTable"
                 data-list='{"valueNames":["products","color","size","price","quantity","total"],"page":5,"pagination":true}'>
                <div class="table-responsive scrollbar">
                    <table class="table fs--1 mb-0">
                        <thead>
                        <tr>
                            <th class="sort white-space-nowrap align-middle fs--2" scope="col" style="width:7%;"></th>
                            <th class="sort white-space-nowrap align-middle" scope="col"
                                style="width:20%; min-width:250px;" data-sort="products">PRODUCTS
                            </th>
                            <th class="sort align-middle" scope="col" data-sort="color" style="width:23%;">DESCRIPTION
                            </th>
                            <th class="sort align-middle" scope="col" data-sort="size" style="width:15%;">CATEGORY</th>
                            <th class="sort align-middle text-end" scope="col" data-sort="price" style="width:10%;">
                                PRICE in KES
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
                                            width="53"/>
                                    </div>
                                </td>
                                <td class="products align-middle pe-11"><a class="fw-semi-bold mb-0 line-clamp-1"
                                                                           href="#!">
                                    <span class="d-block text-900 fs--1 mb-1">
                                        {{ $item->name }}
                                    </span>
                                    </a></td>
                                <td class="color align-middle white-space-nowrap fs--1 text-900">
                                    {{ Str::limit(html_entity_decode(strip_tags($item->description)), 30) }}
                                </td>
                                <td class="size align-middle white-space-nowrap text-700 fs--1 fw-semi-bold">
                                    {{ $item->category_name }}
                                </td>
                                <td class="price align-middle text-900 fs--1 fw-semi-bold text-end">
                                <span class="text-900 fs--1 fw-semi-bold">
                                    {{ number_format($item->selling_price,2) }}
                                </span>
                                </td>
                                <td class="total align-middle fw-bold text-1000 text-end text-nowrap pe-0">
                                    <button class="btn btn-sm text-500 hover-text-600 me-2"><span
                                            class="fas fa-trash"></span></button>
                                    @if(in_array($item->product_id, $cartItems->pluck('product_id')->toArray()))
                                        <button disabled class="btn btn-info fs--2"><span
                                                class="fas fa-shopping-cart me-1 fs--2"></span>Already in cart
                                        </button>
                                    @else
                                        <button wire:click="addToCart({{ $item->id }})" class="btn btn-dark fs--2"><span
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
        <!-- end of .container-->

    </section>
    <!-- <section> close ============================-->
    <!-- ============================================-->
</div>
