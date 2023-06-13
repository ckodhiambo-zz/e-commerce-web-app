<div>
    <nav class="mb-2" aria-label="breadcrumb">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="{{route('home')}}">E-Commerce</a></li>
            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Admin</a></li>
            <li class="breadcrumb-item active">Add Category</li>
        </ol>
    </nav>
    <form class="mb-9" method="post" action="{{route('post-category.dashboard')}}" enctype="multipart/form-data">
        @csrf
        <div class="row g-3 flex-between-end mb-5">
            <div class="col-auto">
                <h2 class="mb-2">Add a category</h2>
                <h5 class="text-700 fw-semi-bold">Products are classified under categories</h5>
            </div>
            <div class="col-auto">
                <button class="btn btn-phoenix-secondary me-2 mb-2 mb-sm-0" type="button">Discard</button>
                <button class="btn btn-phoenix-primary me-2 mb-2 mb-sm-0" type="button">Save draft</button>
                <button class="btn btn-primary mb-2 mb-sm-0" type="submit">Publish category</button>
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
                    <div class="col-md-4">
                        <h4 class="mb-3">Category Name</h4>
                        <input class="form-control mb-5" type="text" name="name"
                               placeholder="Write category name here..."/>

                    </div>
                    <div class="col-md-4">
                        <h4 class="mb-3">Category Slug</h4>
                        <input class="form-control mb-5" type="text" name="slug"
                               placeholder="Write slug here..."/>

                    </div>
                    <div class="col-md-4">
                        <h4 class="mb-3">Meta Title</h4>
                        <input class="form-control mb-5" type="text" name="meta_title"
                               placeholder="Write meta title here..."/>

                    </div>
                </div>

                <div class="mb-6">
                    <h4 class="mb-3">Category Description</h4>
                    <textarea class="form-control mb-3" rows="4" name="description"></textarea>

                </div>
                <h4 class="mb-3">Display images</h4>
                <div class="dropzone dropzone-multiple p-0 mb-5" id="my-awesome-dropzone" data-dropzone="data-dropzone">
                    <div class="fallback">
                        <input name="attachment" type="file" />
                    </div>
                    <div class="dz-preview d-flex flex-wrap">
                        <div class="border bg-white rounded-3 d-flex flex-center position-relative me-2 mb-2"
                             style="height:80px;width:80px;">
                            <img class="dz-image" src="{{asset('e-commerce-assets/img/products/23.png')}}" alt="..."
                                 data-dz-thumbnail="data-dz-thumbnail"/>
                            <a class="dz-remove text-400" href="#!" data-dz-remove="data-dz-remove">
                                <span data-feather="x"></span>
                            </a>
                        </div>
                    </div>
                    <div class="dz-message text-600" data-dz-message="data-dz-message">
                        Drag your photo here <span class="text-800">or </span>
                        <button class="btn btn-link p-0" type="button">Browse from device</button>
                        <br/>
                        <img class="mt-3 me-2" src="{{asset('e-commerce-assets/img/icons/image-icon.png')}}"
                             width="40"
                             alt=""/>
                    </div>
                </div>
                <h4 class="mb-3">Additional Attributes</h4>
                <div class="row g-0 border-top border-bottom border-300">
                    <div class="col-sm-4">
                        <div
                            class="nav flex-sm-column border-bottom border-bottom-sm-0 border-end-sm border-300 fs--1 vertical-tab h-100 justify-content-between"
                            role="tablist" aria-orientation="vertical">
                            <a class="nav-link border-end border-end-sm-0 border-bottom-sm border-300 text-center text-sm-start cursor-pointer outline-none d-sm-flex align-items-sm-center click"
                               id="attributesTab" data-bs-toggle="tab" data-bs-target="#attributesTabContent"
                               role="tab" aria-controls="attributesTabContent" aria-selected="false">
                                <span class="me-sm-2 fs-4 nav-icons" data-feather="sliders"></span>
                                <span class="d-none d-sm-inline">Additional Attributes</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="tab-content py-3 ps-sm-4 h-100">
                            <div class="tab-pane fade show active" id="attributesTabContent" role="tabpanel"
                                 aria-labelledby="attributesTab">
                                <div class="form-check">
                                    <input class="form-check-input" id="fragileCheck" name="status" type="checkbox"/>
                                    <label class="form-check-label text-900 fs-0" for="fragileCheck">Status</label>
                                </div>
                                <hr>
                                <div class="form-check">
                                    <input class="form-check-input" id="biodegradableCheck" name="popular"
                                           type="checkbox"/>
                                    <label class="form-check-label text-900 fs-0"
                                           for="biodegradableCheck">Popular</label>
                                </div>

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
                                <h4 class="card-title mb-4">Recently Added Categories</h4>
                                <div class="row g-3">
                                    <div class="col-12 col-sm-6 col-xl-12">
                                        <div class="table-responsive scrollbar">
                                            <table class="table">
                                                <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Slug</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach(App\Models\Category::all() as $category)
                                                    <tr>
                                                        <th scope="row">{{$category->id}}</th>
                                                        <td>{{$category->name}}</td>
                                                        <td>{{$category->slug}}</td>
                                                        <td class="align-middle white-space-nowrap text-end pe-0">
                                                            <div class="font-sans-serif btn-reveal-trigger position-static">
                                                                <button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs--2" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2"></span></button>
                                                                <div class="dropdown-menu dropdown-menu-end py-2">
                                                                    <a class="dropdown-item" href="{{ route('edit-category.dashboard', $category) }}">Edit</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach


                                                </tbody>
                                            </table>
                                            <button class="btn btn-phoenix-primary w-100" type="button">View more
                                                categories
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
