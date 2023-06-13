<div>
    <nav class="mb-2" aria-label="breadcrumb">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">E-Commerce</a></li>
            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Admin</a></li>
            <li class="breadcrumb-item active">Add Products</li>
        </ol>
    </nav>
    <form class="mb-9" method="post" action="{{route('post-product.dashboard')}}" enctype="multipart/form-data">
        @csrf
        <div class="row g-3 flex-between-end mb-5">
            <div class="col-auto">
                <h2 class="mb-2">Add a Product</h2>
                <h5 class="text-700 fw-semi-bold">Products are classified under categories</h5>
            </div>
            <div class="col-auto">
                <button class="btn btn-primary mb-2 mb-sm-0" type="submit">Publish product</button>
            </div>
        </div>
        <div class="row g-5">
            <div class="col-12 col-xl-8">
                <div class="row">
                    @if(Session::has('status'))
                        <div class="alert alert-outline-success d-flex align-items-center" role="alert">
                            <span class="fas fa-check-circle text-success fs-3 me-3"></span>
                            <p class="mb-0 flex-1">{{ Session::get('status') }}!</p>
                            <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>

                    @endif
                    <div class="col-md-6">
                        <h4 class="mb-3">Product name</h4>
                        <input class="form-control mb-5" type="text" name="name"
                               placeholder="Write product name here..." required/>

                    </div>
                    <div class="col-md-6">
                        <h4 class="mb-3">Product slug</h4>
                        <input class="form-control mb-5" type="text" name="slug" placeholder="Slug..." required
                               wire:model="slug"/>
                    </div>

                </div>
                <hr class="m-1"/>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        <h4 class="mb-3">Select Category</h4>
                        <select class="form-select" id="organizerSingle" data-choices="data-choices"
                                data-options='{"removeItemButton":true,"placeholder":true}' name="category_id">
                            @foreach(App\Models\Category::all() as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>

                    </div>
                    <div class="col-md-6">
                        <h4 class="mb-3">Select Brand</h4>
                        <select class="form-select" id="organizerSingle" data-choices="data-choices"
                                data-options='{"removeItemButton":true,"placeholder":true}' name="brand_id">
                            @foreach(App\Models\Brand::all() as $brand)
                                <option value="{{$brand->id}}">{{$brand->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <br>
                <hr class="m-1"/>
                <br>
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <h4 class="mb-3">Quantity</h4>
                        <input class="form-control" type="number" name="quantity"
                               min="1"
                               placeholder="Quantity" required/>

                    </div>
                    <div class="col-md-4 col-sm-4">
                        <h4 class="mb-3">Original Price</h4>
                        <input class="form-control" type="number" name="original_price" min="0"
                               placeholder="Original price" required/>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <h4 class="mb-3">Selling Price</h4>
                        <input class="form-control" type="number" name="selling_price" min="0"
                               placeholder="Selling price" required/>
                    </div>
                </div>
                <br>

                <hr class="m-1"/>
                <br>
                <div class="row">
                    <div class="mb-6">
                        <h4 class="mb-3">Product Description</h4>
                        <textarea class="form-control mb-3" rows="4" name="description"
                                  placeholder="Write the product description here..."></textarea>
                    </div>
                </div>
                <hr class="m-1"/>
                <div class="row">
                    <h4 class="mb-3">Display images</h4>
                    <div class="mb-3">
                        <label for="formFileMultiple" class="form-label">Multiple files input example</label>
                        <input class="form-control" name="attachments[]" type="file" id="formFileMultiple" multiple>
                    </div>
                </div>

                <h4 class="mb-3">Additional Attributes/Status</h4>
                <div class="row g-0 border-top border-bottom border-300">
                    <div class="col-sm-4">
                        <div
                            class="nav flex-sm-column border-bottom border-bottom-sm-0 border-end-sm border-300 fs--1 vertical-tab h-100 justify-content-between"
                            role="tablist" aria-orientation="vertical">
                            <a class="nav-link border-end border-end-sm-0 border-bottom-sm border-300 text-center text-sm-start cursor-pointer outline-none d-sm-flex align-items-sm-center click"
                               id="attributesTab" data-bs-toggle="tab" data-bs-target="#attributesTabContent"
                               role="tab" aria-controls="attributesTabContent" aria-selected="false">
                                <span class="me-sm-2 fs-4 nav-icons" data-feather="sliders"></span>
                                <span class="d-none d-sm-inline">Status</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="tab-content py-3 ps-sm-4 h-100">
                            <div class="tab-pane fade show active" id="attributesTabContent" role="tabpanel"
                                 aria-labelledby="attributesTab">
                                @foreach([0 => 'featured', 1 => 'trending', 2 => 'limited_edition', 3 => 'best_seller'] as $key => $value)
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="status" id="{{ $value }}"
                                               value="{{ $key }}" {{ $key == 0 ? 'checked' : '' }}>
                                        <label class="form-check-label" for="{{ $value }}">
                                            {{ ucwords(str_replace('_', ' ', $value)) }}
                                        </label>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-12 col-xl-4">
                <div class="row g-2">
                    <div class="col-12 col-xl-12">
                        <div class="card mb-3">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Recently Added Products</h4>
                                <div class="row g-3">
                                    <div class="col-12 col-sm-6 col-xl-12">
                                        <div class="table-responsive scrollbar">
                                            <table class="table">
                                                <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Category</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                                </thead>
                                                <tbody>

                                                @foreach($products as $product)
                                                    <tr>
                                                        <th scope="row">{{$product->id}}</th>
                                                        <td>{{$product->name}}</td>
                                                        <td>{{$product->category->name}}</td>
                                                        <td class="align-middle white-space-nowrap text-end pe-0">
                                                            <div
                                                                class="font-sans-serif btn-reveal-trigger position-static">
                                                                <button
                                                                    class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs--2"
                                                                    type="button" data-bs-toggle="dropdown"
                                                                    data-boundary="window" aria-haspopup="true"
                                                                    aria-expanded="false"
                                                                    data-bs-reference="parent">
                                                                    <span class="fas fa-ellipsis-h fs--2"></span>
                                                                </button>
                                                                <div class="dropdown-menu dropdown-menu-end py-2">
                                                                    <a class="dropdown-item"
                                                                       href="{{ route('edit-product.dashboard', $product) }}">Edit
                                                                        product</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                            <button class="btn btn-phoenix-primary w-100" type="button">View more
                                                products
                                            </button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </form>
</div>
