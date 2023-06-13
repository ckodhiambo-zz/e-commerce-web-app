<div>
    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section class="pt-5 pb-9">

        <div class="container-small cart">
            <nav class="mb-2" aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="#!">EasyFix</a></li>
                    <li class="breadcrumb-item active" aria-current="page"> Cart</li>
                </ol>
            </nav>
            <h2 class="mb-6">{{ auth()->user()->name }}'s Cart</h2>
            <div class="row g-5">
                <div class="col-12 col-lg-8">
                    <div id="cartTable"
                         data-list='{"valueNames":["products","color","size","price","quantity","total"],"page":10}'>
                        <div class="table-responsive scrollbar mx-n1 px-1">
                            <table class="table fs--1 mb-0 border-top border-200">
                                <thead>
                                <tr>
                                    <th class="sort white-space-nowrap align-middle fs--2" scope="col"></th>
                                    <th class="sort white-space-nowrap align-middle" scope="col"
                                        style="min-width:250px;">PRODUCTS
                                    </th>
                                    <th class="sort align-middle text-end" scope="col" style="width:300px;">UNIT
                                        PRICE
                                    </th>
                                    <th class="sort align-middle ps-5" scope="col" style="width:200px;">QUANTITY</th>
                                    <th class="sort align-middle text-end" scope="col" style="width:250px;">TOTAL</th>
                                    <th class="sort text-end align-middle pe-0" scope="col"></th>
                                </tr>
                                </thead>
                                <tbody class="list" id="cart-table-body">
                                @php
                                    $totalPrice = 0;
                                @endphp
                                @foreach($cartItems as $item)
                                    {{-- Check if the item in the cart still has a quantity greater than 0. If not do not display the item --}}
                                    @if($item->product_quantity <= 0)
                                        @continue
                                    @endif
                                    <tr class="cart-table-row btn-reveal-trigger">
                                        <td class="align-middle white-space-nowrap py-0">
                                            <div class="border rounded-2"><img
                                                    src="{{ asset('e-commerce-assets/img/products/1.png') }}"
                                                    alt="" width="53"/></div>
                                        </td>
                                        <td class="products align-middle"><a class="fw-semi-bold mb-0 line-clamp-2"
                                                                             href="#!">{{ $item->products->name }}</a>
                                        </td>
                                        <td class="price align-middle text-900 fs--1 fw-semi-bold text-end">
                                            KES. {{ $item->products->selling_price }}</td>
                                        <td class="quantity align-middle fs-0 ps-5">
                                            <div class="input-group input-group-sm flex-nowrap"
                                                 data-quantity="data-quantity">
                                                <button class="btn btn-sm px-2" data-type="minus"
                                                        wire:click="$emit('quantityDecreased', {{ $item->id }})">-
                                                </button>
                                                <input
                                                    class="form-control text-center input-spin-none bg-transparent border-0 px-0"
                                                    type="number" min="1" wire:model="quantity.{{ $item->id }}"
                                                    aria-label="Amount (to the nearest dollar)"/>
                                                <button class="btn btn-sm px-2" data-type="plus"
                                                        wire:click="$emit('quantityIncreased', {{ $item->id }})">+
                                                </button>
                                            </div>
                                        </td>
                                        <td class="total align-middle fw-bold text-1000 text-end">
                                            KES. {{ number_format($totals[$item->id], 2) }}
                                        </td>
                                        <td class="align-middle white-space-nowrap text-end pe-0 ps-3">
                                            <button class="btn btn-sm text-500 hover-text-600 me-2"
                                                    wire:click="removeFromCart({{ $item->id }})"><span
                                                    class="fas fa-trash"></span></button>
                                        </td>
                                    </tr>

                                    @php
                                        $totalPrice += $item->product_quantity * $item->products->selling_price;
                                    @endphp

                                @endforeach

                                <!-- items subtotal -->
                                <tr class="cart-table-row btn-reveal-trigger">
                                    <td class="text-1100 fw-semi-bold ps-0 fs-0" colspan="4">Items subtotal :</td>
                                    <td class="text-1100 fw-bold text-end fs-0">
                                        <div wire:click="updateTotalPrice">
                                            KES. {{ number_format($totalPrice, 2) }}
                                        </div>
                                    </td>
                                    <td></td>
                                </tr>
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-between-center mb-3">
                                <h3 class="card-title mb-0">Summary</h3>
                            </div>
                            <div>
                                <div class="d-flex justify-content-between">
                                    <p class="text-900 fw-semi-bold">Items subtotal :</p>
                                    <p class="text-1100 fw-semi-bold">KES. {{ number_format($totalPrice, 2) }}</p>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between border-y border-dashed py-3 mb-4">
                                <h4 class="mb-0">Total :</h4>
                                <h4 class="mb-">KES. {{ number_format($totalPrice, 2) }}</h4>
                            </div>
                            <a href="{{ route('checkout') }}">
                                <button class="btn btn-primary w-100">Proceed to check out
                                    <span class="fas fa-chevron-right ms-1 fs--2"></span>
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end of .container-->

    </section>
    <!-- <section> close ============================-->
    <!-- ============================================-->
</div>
