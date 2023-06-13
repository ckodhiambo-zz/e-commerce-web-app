<div>
    <nav class="mb-2" aria-label="breadcrumb">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="{{route('home')}}">E-commerce</a></li>
            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Admin</a></li>
            <li class="breadcrumb-item active">List of Products</li>
        </ol>
    </nav>
    <div class="mb-9">
        <div class="row g-3 mb-4">
            <div class="col-auto">
                <h2 class="mb-0">Products</h2>
            </div>
        </div>
        <ul class="nav nav-links mb-3 mb-lg-2 mx-n3">
            <li class="nav-item"><a class="nav-link active" aria-current="page" href="#">All <span class="text-700 fw-semi-bold">({{App\Models\Products::all()->count()}})</span></a></li>
{{--            <li class="nav-item"><a class="nav-link" href="#">Published <span class="text-700 fw-semi-bold">(70348)</span></a></li>--}}
{{--            <li class="nav-item"><a class="nav-link" href="#">Drafts <span class="text-700 fw-semi-bold">(17)</span></a></li>--}}
{{--            <li class="nav-item"><a class="nav-link" href="#">On discount <span class="text-700 fw-semi-bold">(810)</span></a></li>--}}
        </ul>
        <div id="products" data-list='{"valueNames":["product","price","category","tags","vendor","time"],"page":10,"pagination":true}'>
            <div class="mb-4">
                <div class="row g-3">
                    <div class="col-auto">
                        <div class="search-box">
                            <form class="position-relative" data-bs-toggle="search" data-bs-display="static">
                                <input class="form-control search-input search" type="search" placeholder="Search products" aria-label="Search" />
                                <span class="fas fa-search search-box-icon"></span>

                            </form>
                        </div>
                    </div>
                    <div class="col-auto scrollbar overflow-hidden-y flex-grow-1">
                        <div class="btn-group position-static" role="group">
                            <div class="btn-group position-static text-nowrap">
                                <button class="btn btn-phoenix-secondary px-7 flex-shrink-0" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent">
                                    Category<span class="fas fa-angle-down ms-2"></span></button>
                                <ul class="dropdown-menu">
                                    @foreach(App\Models\Category::all() as $category)
                                    <li><a class="dropdown-item" href="#">{{$category->name}}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto">
                        <button class="btn btn-link text-900 me-4 px-0"><span class="fa-solid fa-file-export fs--1 me-2"></span>Export</button>
                        <a href="{{route('add-product.dashboard')}}"><button class="btn btn-primary" id="addBtn"><span class="fas fa-plus me-2"></span>Add product</button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="mx-n4 px-4 mx-lg-n6 px-lg-6 bg-white border-top border-bottom border-200 position-relative top-1">
                <div class="table-responsive scrollbar mx-n1 px-1">
                    <table class="table fs--1 mb-0">
                        <thead>
                        <tr>
                            <th class="white-space-nowrap fs--1 align-middle ps-0" style="max-width:20px; width:18px;">
                                <div class="form-check mb-0 fs-0">
                                    <input class="form-check-input" type="checkbox" />
                                </div>
                            </th>
                            <th class="sort white-space-nowrap align-middle fs--2" scope="col" style="width:70px;"></th>
                            <th class="sort white-space-nowrap align-middle ps-4" scope="col" style="width:350px;" data-sort="product">PRODUCT NAME</th>
                            <th class="sort align-middle text-end ps-4" scope="col" data-sort="price" style="width:150px;">ORIGINAL PRICE</th>
                            <th class="sort align-middle text-end ps-4" scope="col" data-sort="price" style="width:150px;">SELLING PRICE</th>
                            <th class="sort align-middle text-end ps-4" scope="col" data-sort="price" style="width:150px;">QUANTITY</th>
                            <th class="sort align-middle ps-4" scope="col" data-sort="category" style="width:150px;">CATEGORY</th>
                            <th class="sort align-middle ps-4" scope="col" data-sort="time" style="width:50px;">PUBLISHED ON</th>
                            <th class="sort text-end align-middle pe-0 ps-4" scope="col">ACTION</th>
                        </tr>
                        </thead>
                        <tbody class="list" id="products-table-body">
                        @foreach(App\Models\Products::all() as $product)
                            <tr class="position-static">
                            <td class="fs--1 align-middle">
                                <div class="form-check mb-0 fs-0">
                                    <input class="form-check-input" type="checkbox" />
                                </div>
                            </td>
                            <td class="align-middle white-space-nowrap py-0">
                                <div class="border rounded-2"><img src="{{ asset('e-commerce-assets/img/products/1.png') }}" alt="" width="53" /></div>
                            </td>
                            <td class="product align-middle ps-4"><a class="fw-semi-bold line-clamp-3 mb-0" href="#!">{{$product->name}}</a></td>
                            <td class="price align-middle white-space-nowrap text-end fw-bold text-700 ps-4">{{$product->original_price}}</td>
                            <td class="price align-middle white-space-nowrap text-end fw-bold text-700 ps-4">{{$product->selling_price}}</td>
                            <td class="price align-middle white-space-nowrap text-end fw-bold text-700 ps-4">{{$product->quantity}}</td>
                            <td class="vendor align-middle text-start fw-semi-bold ps-4"><a href="#!">{{$product->category->name}}</a></td>
                            <td class="time align-middle white-space-nowrap text-600 ps-4">{{$product->created_at}}</td>
                            <td class="align-middle white-space-nowrap text-end pe-0 ps-4 btn-reveal-trigger">
                                <div class="font-sans-serif btn-reveal-trigger position-static">
                                    <button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs--2" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2"></span></button>
                                    <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Edit product</a><a class="dropdown-item" href="#!">View product</a>
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
                        <p class="mb-0 d-none d-sm-block me-3 fw-semi-bold text-900" data-list-info="data-list-info"></p><a class="fw-semi-bold" href="#!" data-list-view="*">View all<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a><a class="fw-semi-bold d-none" href="#!" data-list-view="less">View Less<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a>
                    </div>
                    <div class="col-auto d-flex">
                        <button class="page-link" data-list-pagination="prev"><span class="fas fa-chevron-left"></span></button>
                        <ul class="mb-0 pagination"></ul>
                        <button class="page-link pe-0" data-list-pagination="next"><span class="fas fa-chevron-right"></span></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
