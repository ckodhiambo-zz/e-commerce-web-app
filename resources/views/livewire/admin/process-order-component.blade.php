<div xmlns:livewire="">
    <h2 class="mb-2 lh-sm">Order #{{$order->id}} courier details</h2>
    <p class="text-700 text-xs text-info lead mb-2">Kindly note the order status will change to processing!</p>
    <div class="row">
        <div class="col-12 col-xxl-6">
            <div class="card shadow-none border border-300 my-4" data-component-card="data-component-card">
                <div class="card-header py-3 px-3 border-bottom border-300 bg-soft">
                    <div class="row g-3 justify-content-between align-items-center">
                        <div class="col-12 col-md">
                            <h4 class="text-900 text-sm mb-0">Courier delivery details</h4>
                        </div>
                    </div>
                </div>

                <div class="card-body p-0">
                    <div class="p-4 code-to-copy">
                        <div class="card theme-wizard mb-5" data-theme-wizard="data-theme-wizard">
                            <div class="card-header bg-100 pt-3 pb-2 border-bottom-0">
                                <ul class="nav justify-content-between nav-wizard">
                                    <li class="nav-item"><a class="nav-link active fw-semi-bold"
                                                            href="#bootstrap-wizard-tab1" data-bs-toggle="tab"
                                                            data-wizard-step="1">
                                            <div class="text-center d-inline-block"><span
                                                    class="nav-item-circle-parent"><span class="nav-item-circle"><span
                                                            class="fas fa-lock"></span></span></span><span
                                                    class="d-none d-md-block mt-1 fs--1">Account</span></div>
                                        </a></li>
                                    <li class="nav-item"><a class="nav-link fw-semi-bold" href="#bootstrap-wizard-tab2"
                                                            data-bs-toggle="tab" data-wizard-step="2">
                                            <div class="text-center d-inline-block"><span
                                                    class="nav-item-circle-parent"><span class="nav-item-circle"><span
                                                            class="fas fa-user"></span></span></span><span
                                                    class="d-none d-md-block mt-1 fs--1">Personal</span></div>
                                        </a></li>
                                    <li class="nav-item"><a class="nav-link fw-semi-bold" href="#bootstrap-wizard-tab4"
                                                            data-bs-toggle="tab" data-wizard-step="4">
                                            <div class="text-center d-inline-block"><span
                                                    class="nav-item-circle-parent"><span class="nav-item-circle"><span
                                                            class="fas fa-check"></span></span></span><span
                                                    class="d-none d-md-block mt-1 fs--1">Done</span></div>
                                        </a></li>
                                </ul>
                            </div>
                            <div class="card-body pt-4 pb-0">
                                <form
                                    action="{{route('admin.processOrder', ['order_id' => $order->id])}}"
                                    method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="tab-content">
                                        <div class="tab-pane active" role="tabpanel"
                                             aria-labelledby="bootstrap-wizard-tab1"
                                             id="bootstrap-wizard-tab1">
                                            <div class="row g-3 mb-3">
                                                <div class="col-sm-6">
                                                    <div class="mb-2 mb-sm-0">
                                                        <label class="form-label text-900"
                                                               for="bootstrap-wizard-wizard-name">Name</label>
                                                        <input class="form-control" type="text" name="name"
                                                               placeholder="John Smith"
                                                               id="bootstrap-wizard-wizard-name"/>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="mb-2 mb-sm-0">
                                                        <label class="form-label text-900"
                                                               for="bootstrap-wizard-wizard-emai">Email</label>
                                                        <input class="form-control" type="email" name="email"
                                                               placeholder="Email address"
                                                               id="bootstrap-wizard-wizard-email"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row g-3 mb-3">
                                                <div class="col-sm-6">
                                                    <div class="mb-2 mb-sm-0">
                                                        <label class="form-label text-900"
                                                               for="bootstrap-wizard-wizard-phone">Phone</label>
                                                        <input class="form-control" type="text" name="phone"
                                                               maxlength="13"
                                                               placeholder="+2547********"
                                                               id="bootstrap-wizard-wizard-phone"/>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="mb-2 mb-sm-0">
                                                        <label class="form-label text-900"
                                                               for="bootstrap-wizard-wizard-address">Address</label>
                                                        <input class="form-control" type="text" name="address"
                                                               placeholder="Nairobi, Kenya"
                                                               id="bootstrap-wizard-wizard-address"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="terms"
                                                       checked="checked" id="bootstrap-wizard-wizard-checkbox"
                                                       required/>
                                                <label class="form-check-label text-900"
                                                       for="bootstrap-wizard-wizard-checkbox">I accept the <a href="#!">terms </a>and
                                                    <a href="#!">privacy policy</a></label>
                                            </div>

                                        </div>
                                        <div class="tab-pane" role="tabpanel" aria-labelledby="bootstrap-wizard-tab2"
                                             id="bootstrap-wizard-tab2">

                                            <div class="row g-4 mb-4" data-dropzone="data-dropzone"
                                                 data-options='{"maxFiles":1,"data":[{"name":"avatar.png","size":"54kb","url":"{{ asset('e-commerce-assets/img/team') }}"}]}'>
                                                <div class="fallback">
                                                    <input type="file" name="profile_picture"/>
                                                </div>
                                                <div class="col-md-auto">
                                                    <div class="dz-preview dz-preview-single">
                                                        <div
                                                            class="dz-preview-cover d-flex align-items-center justify-content-center mb-2 mb-md-0">
                                                            <div class="avatar avatar-4xl"><img
                                                                    class="rounded-circle avatar-placeholder"
                                                                    src="{{ asset('e-commerce-assets/img/team/avatar.png') }}"
                                                                    alt="..."
                                                                    data-dz-thumbnail="data-dz-thumbnail"/></div>
                                                            <div class="dz-progress"><span class="dz-upload"
                                                                                           data-dz-uploadprogress=""></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md">
                                                    <div class="dz-message dropzone-area px-2 py-3"
                                                         data-dz-message="data-dz-message">
                                                        <div class="text-center text-1100">
                                                            <h5 class="mb-2"><span
                                                                    class="fa-solid fa-upload me-2"></span>Upload
                                                                Profile Picture</h5>
                                                            <p class="mb-0 fs--1 text-600 lh-sm">Upload a 300x300 jpg
                                                                image with <br/>a maximum size of 400KB</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-2">
                                                <label class="form-label" for="bootstrap-wizard-gender">Gender</label>
                                                <select class="form-select" name="gender" id="bootstrap-wizard-gender">
                                                    <option value="">Select gender ...</option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                    <option value="Other">Other</option>
                                                </select>
                                            </div>
                                            <div class="mb-2">
                                                <label class="form-label"
                                                       for="bootstrap-wizard-wizard-national_id">National ID No.</label>
                                                <input class="form-control" type="text" name="national_id"
                                                       placeholder="national_id"
                                                       id="bootstrap-wizard-wizard-national_id"/>
                                            </div>
                                            <div class="mb-2">
                                                <label class="form-label"
                                                       for="bootstrap-wizard-wizard-license">Vehicle/Bike License
                                                    no.</label>
                                                <input class="form-control" type="text" name="license_plate"
                                                       placeholder="national_id"
                                                       id="bootstrap-wizard-wizard-license"/>
                                            </div>
                                            <div class="mb-2">
                                                <label class="form-label" for="bootstrap-wizard-wizard-datepicker">Expected
                                                    Delivery Date</label>
                                                <input class="form-control datetimepicker" type="text"
                                                       placeholder="d/m/y"
                                                       name="delivery_date"
                                                       data-options='{"dateFormat":"d/m/y","disableMobile":true}'
                                                       id="bootstrap-wizard-wizard-datepicker"/>
                                            </div>
                                        </div>

                                        <div class="tab-pane" role="tabpanel" aria-labelledby="bootstrap-wizard-tab4"
                                             id="bootstrap-wizard-tab4">
                                            <div class="row flex-center pb-8 pt-4 gx-3 gy-4">
                                                <div class="col-12 col-sm-auto">
                                                    <div class="text-center text-sm-start"><img class="d-dark-none"
                                                                                                src="{{ asset('e-commerce-assets/img/spot-illustrations/34.png') }}"
                                                                                                alt="" width="220"/><img
                                                            class="d-light-none"
                                                            src="{{ asset('e-commerce-assets/img/spot-illustrations/dark_34.png') }}"
                                                            alt=""
                                                            width="220"/></div>
                                                </div>
                                                <div class="col-12 col-sm-auto">
                                                    <div class="text-center text-sm-start">
                                                        <h5 class="mb-3">You are all set!</h5>
                                                        <p class="text-1100 fs--1">You can now submit<br/>the order for
                                                            processing</p>
                                                        <a>
                                                            <button class="btn btn-primary px-6 px-sm-6"
                                                                    data-wizard-next-btn="data-wizard-next-btn">
                                                                Submit<span
                                                                    class="fas fa-chevron-right ms-1"
                                                                    data-fa-transform="shrink-3"> </span>
                                                            </button>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="card-footer border-top-0" data-wizard-footer="data-wizard-footer">
                                <div class="d-flex pager wizard list-inline mb-0">
                                    <button class="d-none btn btn-link ps-0" type="button"
                                            data-wizard-prev-btn="data-wizard-prev-btn"><span
                                            class="fas fa-chevron-left me-1" data-fa-transform="shrink-3"></span>Previous
                                    </button>
                                    <div class="flex-1 text-end">
                                        <button class="btn btn-primary px-6 px-sm-6" type="submit"
                                                data-wizard-next-btn="data-wizard-next-btn">Next<span
                                                class="fas fa-chevron-right ms-1" data-fa-transform="shrink-3"> </span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-xxl-6">
            <div class="card shadow-none border border-300 my-4" data-component-card="data-component-card">
                <div class="card-header py-3 px-3 border-bottom border-300 bg-soft">
                    <div class="row g-3 justify-content-between align-items-center">
                        <div class="col-12 col-md">
                            <h4 class="text-900 text-sm mb-0">Summary of order details</h4>
                        </div>
                    </div>
                </div>

                <div class="card-body p-0">
                    <table class="table">
                        <thead>
                        <tr>
                            <th style="width: 40%"></th>
                            <th style="width: 60%"></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="bg-100 align-middle">
                                <h6 class="mb-0 text-900 text-uppercase fw-bolder px-4 fs--1 lh-sm">Shipping Name</h6>
                            </td>
                            <td class="px-5 mb-0">
                                {{ $order->shipping_name }}
                            </td>
                        </tr>
                        <tr>
                            <td class="bg-100 align-middle">
                                <h6 class="mb-0 text-900 text-uppercase fw-bolder px-4 fs--1 lh-sm">Shipping Email</h6>
                            </td>
                            <td class="px-5 mb-0">
                                {{ $order->shipping_email }}
                            </td>
                        </tr>
                        <tr>
                            <td class="bg-100 align-middle">
                                <h6 class="mb-0 text-900 text-uppercase fw-bolder px-4 fs--1 lh-sm">Shipping Phone</h6>
                            </td>
                            <td class="px-5 mb-0">
                                {{ $order->shipping_phone }}
                            </td>
                        </tr>
                        <tr>
                            <td class="bg-100 align-middle">
                                <h6 class="mb-0 text-900 text-uppercase fw-bolder px-4 fs--1 lh-sm">Shipping
                                    Address</h6>
                            </td>
                            <td class="px-5 mb-0">
                                {{ $order->delivery_address }}
                            </td>
                        </tr>
                        <tr>
                            <td class="bg-100 align-middle">
                                <h6 class="mb-0 text-900 text-uppercase fw-bolder px-4 fs--1 lh-sm">Amount</h6>
                            </td>
                            <td class="px-5 mb-0">
                                KES. {{ number_format($order->orderItems->sum(function($item) { return $item->product_quantity * $item->product->selling_price;}), 2) }}
                            </td>

                        </tr>
                        <tr>
                            <td class="bg-100 align-middle">
                                <h6 class="mb-0 text-900 text-uppercase fw-bolder px-4 fs--1 lh-sm">Quantity of
                                    Items</h6>
                            </td>
                            <td class="px-5 mb-0">
                                {{ $order->orderItems->sum('product_quantity') }}
                            </td>
                        </tr>
                        <tr>
                            <td class="bg-100 align-middle">
                                <h6 class="mb-0 text-900 text-uppercase fw-bolder px-4 fs--1 lh-sm">Order created
                                    on</h6>
                            </td>
                            <td class="px-5 mb-0">
                                {{ $order->created_at->format('d M, Y h:i A') }}
                            </td>
                        </tr>
                        <tr>
                            <td class="bg-100 align-middle">
                                <h6 class="mb-0 text-900 text-uppercase fw-bolder px-4 fs--1 lh-sm">Order Status</h6>
                            </td>
                            <td class="px-5 mb-0">
                                @switch($order->status)
                                    @case(0)
                                        <span class="badge bg-warning text-white text-900">Pending</span>
                                        @break
                                    @case(1)
                                        <span class="badge bg-info text-white text-900">Processing</span>
                                        @break
                                    @case(2)
                                        <span class="badge bg-success text-white text-900">Delivered</span>
                                        @break
                                    @case(3)
                                        <span class="badge bg-danger text-white text-900">Canceled</span>
                                        @break
                                    @default
                                        <span class="badge bg-warning text-white text-900">Pending</span>
                                @endswitch

                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="modal fade" id="error-modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 500px">
                <div class="modal-content position-relative">
                    <div class="modal-header border-100 p-3">
                        <div class="h4 text-800 mb-0">Action Denied!</div>
                        <button class="btn btn-link text-danger position-absolute top-0 end-0 mt-2 me-2"
                                data-bs-dismiss="modal"><span class="fas fa-times"></span></button>
                    </div>
                    <div class="modal-body px-4 py-6">
                        <div class="d-flex align-items-center"><img class="me-4"
                                                                    src="{{ asset('e-commerce-assets/img/icons/stop.png') }}"
                                                                    alt=""/>
                            <div class="flex-1">
                                <p class="mb-0 fw-semi-bold text-700">Please refresh your page to start
                                    <br/>over to get access for the next session.<br/>Thank You!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 5">
        <div class="toast align-items-center text-white bg-dark border-0 light" id="icon-copied-toast" role="alert"
             aria-live="assertive" aria-atomic="true">
            <div class="d-flex">
                <div class="toast-body p-3"></div>
                <button class="btn-close btn-close-white me-2 m-auto" type="button" data-bs-dismiss="toast"
                        aria-label="Close"></button>
            </div>
        </div>
    </div>
</div>
