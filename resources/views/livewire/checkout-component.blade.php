<div>
    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section class="pt-5 pb-9">

        <div class="container-small">
            <nav class="mb-2" aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="#!">Easy Fix</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Checkout</li>
                </ol>
            </nav>
            <h2 class="mb-5">Check out</h2>
                <form action="{{ route('place-order') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row justify-content-between">
                        <div class="col-lg-6 col-xl-7">

                            <div class="d-flex align-items-end">
                                <h3 class="mb-0 me-3">Account Details</h3>
                                {{--                            <button class="btn btn-link p-0" type="button">Edit</button>--}}
                            </div>
                            <table class="table table-borderless mt-4">
                                <tbody>
                                <tr>
                                    <td class="py-2 ps-0">
                                        <div class="d-flex"><span class="fs-5 me-2" data-feather="user"
                                                                  style="height:16px; width:16px;"> </span>
                                            <h5 class="lh-sm me-4">Name</h5>
                                        </div>
                                    </td>
                                    <td class="py-2 fw-bold lh-sm">:</td>
                                    <td class="py-2 px-3">
                                        <h5 class="lh-sm fw-normal text-800">{{ auth()->user()->name }}</h5>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="py-2 ps-0">
                                        <div class="d-flex"><span class="fs-5 me-2" data-feather="mail"
                                                                  style="height:16px; width:16px;"> </span>
                                            <h5 class="lh-sm me-4">Email</h5>
                                        </div>
                                    </td>
                                    <td class="py-2 fw-bold lh-sm">:</td>
                                    <td class="py-2 px-3">
                                        <h5 class="lh-lg fw-normal text-800">{{ auth()->user()->email }}</h5>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="py-2 ps-0">
                                        <div class="d-flex"><span class="fs-5 me-2" data-feather="phone"
                                                                  style="height:16px; width:16px;"> </span>
                                            <h5 class="lh-sm me-4">Phone</h5>
                                        </div>
                                    </td>
                                    <td class="py-2 fw-bold lh-sm">:</td>
                                    <td class="py-2 px-3">
                                        <h5 class="lh-sm fw-normal text-800">{{ auth()->user()->phone ?? 'No phone number' }}</h5>
                                    </td>
                                </tr>
                                </tbody>
                            </table>

                            <hr class="my-6">

                            <div class="d-flex align-items-end">
                                <h3 class="mb-0 me-3">Shipping Details</h3>
                                {{--                            <button class="btn btn-link p-0" type="button">Edit</button>--}}
                            </div>
                            <table class="table table-borderless mt-4">
                                <tbody>
                                <tr>
                                    <td class="py-2 ps-0">
                                        <div class="d-flex"><span class="fs-5 me-2" data-feather="user"
                                                                  style="height:16px; width:16px;"> </span>
                                            <h5 class="lh-sm me-4">Name</h5>
                                        </div>
                                    </td>
                                    <td class="py-2 fw-bold lh-sm">:</td>
                                    <td class="py-2 px-2">
                                        <input class="form-control" id="name" name="shipping_name" type="text"
                                               placeholder="Enter Full Name" aria-label="Enter Full Name" required>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="py-2 ps-0">
                                        <div class="d-flex"><span class="fs-5 me-2" data-feather="mail"
                                                                  style="height:16px; width:16px;"> </span>
                                            <h5 class="lh-sm me-4">Email</h5>
                                        </div>
                                    </td>
                                    <td class="py-2 fw-bold lh-sm">:</td>
                                    <td class="py-2 px-2">
                                        <input class="form-control" id="email" name="shipping_email" type="email"
                                               placeholder="Enter Email" aria-label="Enter Email" required>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="py-2 ps-0">
                                        <div class="d-flex"><span class="fs-5 me-2" data-feather="phone"
                                                                  style="height:16px; width:16px;"> </span>
                                            <h5 class="lh-sm me-4">Phone</h5>
                                        </div>
                                    </td>
                                    <td class="py-2 fw-bold lh-sm">:</td>
                                    <td class="py-2 px-2">
                                        <input class="form-control" id="phone" name="shipping_phone" type="text"
                                               maxlength="13"
                                               placeholder="Enter Phone Number" aria-label="Enter Phone Number" required>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="py-2 ps-0">
                                        <div class="d-flex"><span class="fs-5 me-2" data-feather="map-pin"
                                                                  style="height:16px; width:16px;"> </span>
                                            <h5 class="lh-sm me-4">Delivery Address</h5>
                                        </div>
                                    </td>
                                    <td class="py-2 fw-bold lh-sm">:</td>
                                    <td class="py-2 px-2">
                                        <input class="form-control" id="delivery_address" name="delivery_address"
                                               type="text"
                                               placeholder="Enter Delivery Address" aria-label="Enter Delivery Address"
                                               required>
                                    </td>
                                </tr>
                                </tbody>
                            </table>

                        </div>

                        <div class="col-lg-6 col-xl-5">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <h3 class="mb-0">Summary</h3>
                                        <a href="{{ route('product.cart') }}">
                                            <button class="btn btn-link pe-0" type="button">Edit cart</button>
                                        </a>
                                    </div>
                                    <div class="border-dashed border-bottom mt-4">
                                        <div class="mx-n2">
                                            @php
                                                $totalPrice = 0;
                                            @endphp
                                            @foreach($cartItems as $item)
                                                @if($item->products->quantity > $item->product_quantity)
                                                    <div class="row align-items-center mb-2 g-3">
                                                        <div class="col-8 col-md-7 col-lg-8">
                                                            <div class="d-flex align-items-center">
                                                                <img class="me-2 ms-1"
                                                                     src="{{ asset('e-commerce-assets/img/products/1.png') }}"
                                                                     width="40" alt=""/>
                                                                <h6 class="fw-semi-bold text-1000 lh-base">
                                                                    {{ $item->products->name }}
                                                                </h6>
                                                            </div>
                                                        </div>
                                                        <div class="col-2 col-md-3 col-lg-2">
                                                            <h6 class="fs--4 mb-0">
                                                                x{{ $item->product_quantity }}</h6>
                                                        </div>
                                                        <div class="col-2 ps-0">
                                                            <h5 class="mb-0 fw-semi-bold text-end text-lg-start">

                                                                KES. {{ number_format($totals[$item->id], 2) }}

                                                            </h5>
                                                        </div>
                                                    </div>
                                                    @php
                                                        $totalPrice += $item->product_quantity * $item->products->selling_price;
                                                    @endphp
                                                @endif
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="border-dashed border-bottom mt-4">
                                        <div class="d-flex justify-content-between mb-2">
                                            <h5 class="text-900 fw-semi-bold">Items subtotal: </h5>
                                            <h5 class="text-900 fw-semi-bold">
                                                KES. {{ number_format($totalPrice, 2) }}
                                            </h5>
                                        </div>
                                    </div>
                                    <div class="border-dashed border-bottom mt-4">
                                        <div class="d-flex justify-content-between mb-2">
                                            <img class="h-100 me-2 ms-4 ms-md-0"
                                                 src="{{ asset('e-commerce-assets/img/logos/mpesa-logo.png') }}"
                                                 style="width:20%" alt=""/>
                                        </div>
                                        <div class="d-flex justify-content-between mb-2">
                                            <select class="form-control" id="countryCode" name="countryCode"
                                                    style="width: 120px; font-size: 14px;">
                                                <option value="+254">+254 (Kenya)</option>
                                                <!-- Add more country codes and names as needed -->
                                            </select>
                                            &nbsp;
                                            <input class="form-control" id="inputName" type="text" maxlength="9"
                                                   placeholder="7XXXXXX" aria-label="Enter Mobile Number"
                                                   />
                                        </div>


                                    </div>
                                    <div class="d-flex justify-content-between border-dashed-y pt-3">
                                        <button class="btn btn-primary" type="submit">Proceed and Pay
                                            KES. {{ number_format($totalPrice, 2) }}</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
        </div>
        <!-- end of .container-->

    </section>
    <!-- <section> close ============================-->
    <!-- ============================================-->
</div>
