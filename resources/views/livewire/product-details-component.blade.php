<div class="ecommerce-homepage pt-5 mb-9">
    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section class="py-0">

        <div class="container-small product_data">
            <nav class="mb-3" aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Easy Fix</a></li>
                    <li class="breadcrumb-item"><a href="#">{{$product->category->name}}</a></li>
                    <li class="breadcrumb-item text-uppercase"><a href="#">{{$product->name}}</a></li>
                </ol>
            </nav>

            @csrf
            @if($product->quantity > 0)
                <input type="hidden" name="product_id" value="{{$product->id}}">
                <div class="row g-5 mb-5 mb-lg-8" data-product-details="data-product-details">
                    <div class="col-12 col-lg-6">
                        <div class="row g-3 mb-3">
                            <div class="col-12 col-md-2 col-lg-12 col-xl-2">
                                <div
                                    class="swiper-products-thumb swiper swiper-container theme-slider overflow-visible"
                                    id="swiper-products-thumb"></div>
                            </div>
                            <div class="col-12 col-md-10 col-lg-12 col-xl-10">
                                <div class="d-flex align-items-center border rounded-3 text-center p-5 h-100">
                                    <div class="swiper swiper-container theme-slider"
                                         data-thumb-target="swiper-products-thumb"
                                         data-products-swiper='{"slidesPerView":1,"spaceBetween":16,"thumbsEl":".swiper-products-thumb"}'></div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex">
                            <form action="{{ route('add-to-wishlist') }}" method="POST">
                                @csrf
                                <input type="hidden" name="product_id" value="{{ $product->id }}">
                                <button
                                    class="btn btn-lg btn-outline-warning rounded-pill w-100 me-3 px-2 px-sm-4 fs--1 fs-sm-0">
                                    <span class="me-2 far fa-heart"></span>Add to wishlist
                                </button>
                            </form>

                            @if($product->quantity > 0)
                                <form action="{{ route('add-to-cart') }}" method="post" enctype="multipart/form-data">
                                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                                    <button
                                        class="btn btn-lg btn-warning addToCartBtn rounded-pill w-100 fs--1 fs-sm-0"
                                        type="submit"><span
                                            class="fas fa-shopping-cart me-2"></span>Add to cart
                                    </button>
                                </form>
                            @endif
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="d-flex flex-column justify-content-between h-100">
                            <div>
                                <h3 class="mb-3 lh-sm text-uppercase">{{$product->name}}</h3>
                                <div class="d-flex flex-wrap align-items-start mb-3"><span
                                        class="badge bg-success fs--1 rounded-pill me-2 fw-semi-bold">#1 Best seller</span><a
                                        class="fw-semi-bold" href="#!">in Easy Fix's</a></div>
                                <div class="d-flex flex-wrap align-items-center">
                                    <h1 class="me-3">KES. {{$product->selling_price}}</h1>
                                    <p class="text-500 text-decoration-line-through fs-2 mb-0 me-3">
                                        KES. {{$product->original_price}}</p>
                                    @if($product->quantity > 0)
                                        <p class="text-success fw-bolder fs-2 mb-0">In stock</p>
                                    @else
                                        <p class="text-danger fw-bolder fs-2 mb-0">Out of stock</p>
                                    @endif
                                </div>
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
                                            <h6 class="mb-0 text-900 text-uppercase fw-bolder px-4 fs--1 lh-sm">
                                                Product
                                                name</h6>
                                        </td>
                                        <td class="px-5 mb-0">{{$product->name}}</td>
                                    </tr>
                                    <tr>
                                        <td class="bg-100">
                                            <h6 class="mb-0 mt-1 text-900 text-uppercase fw-bolder px-4 fs--1 lh-sm">
                                                Description</h6>
                                        </td>
                                        <td class="px-5 mb-0">{{$product->description}}</td>
                                        </td>
                                    </tr>

                                    </tbody>
                                </table>

                            </div>
                            <div>
                                <div class="row g-3 g-sm-5 align-items-end">
                                    <div class="col-12 col-sm">
                                        <p class="fw-semi-bold mb-2 text-900">Quantity : </p>
                                        <div class="d-flex justify-content-between align-items-end">
                                            <div class="d-flex flex-between-center"
                                                 data-quantity="data-quantity">
                                                <button class="btn btn-phoenix-primary px-3"
                                                        data-type="minus"><span
                                                        class="fas fa-minus"></span></button>
                                                <input
                                                    class="form-control text-center input-spin-none bg-transparent border-0 outline-none qty-input"
                                                    style="width:50px;" name="product_quantity" type="number"
                                                    min="1" value="1"/>
                                                <button class="btn btn-phoenix-primary px-3"
                                                        data-type="plus"><span
                                                        class="fas fa-plus"></span></button>
                                            </div>
                                            <button class="btn btn-phoenix-primary px-3 border-0"><span
                                                    class="fas fa-share-alt fs-1"></span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- rest of the code -->
            @else
                <p>No product found.</p>
            @endif

        </div>
        <!-- end of .container-->

    </section>
    <!-- <section> close ============================-->
    <!-- ============================================-->


</div>


<!-- ============================================-->
<!-- <section> begin ============================-->
<section class="py-0 mb-9">

    <div class="container">
        <div class="d-flex flex-between-center mb-3">
            <div>
                <h3>Similar Products</h3>
                <p class="mb-0 text-700 fw-semi-bold">Essential for a better life</p>
            </div>
            <button class="btn btn-sm btn-phoenix-primary">View all</button>
        </div>
        <div class="swiper-theme-container products-slider">
            <div class="swiper swiper-container theme-slider"
                 data-swiper='{"slidesPerView":1,"spaceBetween":16,"breakpoints":{"450":{"slidesPerView":2,"spaceBetween":16},"768":{"slidesPerView":3,"spaceBetween":16},"992":{"slidesPerView":4,"spaceBetween":16},"1200":{"slidesPerView":5,"spaceBetween":16},"1540":{"slidesPerView":6,"spaceBetween":16}}}'>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="position-relative text-decoration-none product-card h-100">
                            <div class="d-flex flex-column justify-content-between h-100">
                                <div>
                                    <div class="border border-1 rounded-3 position-relative mb-3">
                                        <button
                                            class="btn rounded-circle p-0 d-flex flex-center btn-wish z-index-2 d-toggle-container btn-outline-primary"
                                            data-bs-toggle="tooltip" data-bs-placement="top" title="Add to wishlist">
                                            <span class="fas fa-heart d-block-hover"></span><span
                                                class="far fa-heart d-none-hover"></span>
                                        </button>
                                        <img class="img-fluid" src="../../../assets/img/products/1.png" alt=""/>
                                    </div>
                                    <a class="stretched-link text-decoration-none"
                                       href="../../../apps/e-commerce/landing/product-details.html">
                                        <h6 class="mb-2 lh-sm line-clamp-3">Fitbit Sense Advanced Smartwatch with Tools
                                            for Heart Health, Stress Management &amp;amp; Skin Temperature Trends
                                            Carbon/Graphite, One Size (S &amp; L Bands)</h6>
                                    </a>
                                    <p class="fs--1"><span class="fa fa-star text-warning"></span><span
                                            class="fa fa-star text-warning"></span><span
                                            class="fa fa-star text-warning"></span><span
                                            class="fa fa-star text-warning"></span><span
                                            class="fa fa-star text-warning"></span><span
                                            class="text-500 fw-semi-bold ms-1">(59 people rated)</span>
                                    </p>
                                </div>
                                <div>
                                    <div class="d-flex align-items-center mb-1">
                                        <p class="me-2 text-900 text-decoration-line-through mb-0">$49.99</p>
                                        <h3 class="text-1100 mb-0">$34.99</h3>
                                    </div>
                                    <p class="text-700 fw-semi-bold fs--1 lh-1 mb-0">2 colors</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="position-relative text-decoration-none product-card h-100">
                            <div class="d-flex flex-column justify-content-between h-100">
                                <div>
                                    <div class="border border-1 rounded-3 position-relative mb-3">
                                        <button
                                            class="btn rounded-circle p-0 d-flex flex-center btn-wish z-index-2 d-toggle-container btn-outline-primary"
                                            data-bs-toggle="tooltip" data-bs-placement="top" title="Add to wishlist">
                                            <span class="fas fa-heart d-block-hover"></span><span
                                                class="far fa-heart d-none-hover"></span>
                                        </button>
                                        <img class="img-fluid" src="../../../assets/img/products/3.png" alt=""/>
                                    </div>
                                    <a class="stretched-link text-decoration-none"
                                       href="../../../apps/e-commerce/landing/product-details.html">
                                        <h6 class="mb-2 lh-sm line-clamp-3">Apple MacBook Pro 13 inch-M1-8/256GB-Space
                                            Gray</h6>
                                    </a>
                                    <p class="fs--1"><span class="fa fa-star text-warning"></span><span
                                            class="fa fa-star text-warning"></span><span
                                            class="fa fa-star text-warning"></span><span
                                            class="fa fa-star text-warning"></span><span
                                            class="fa fa-star text-warning"></span><span
                                            class="text-500 fw-semi-bold ms-1">(13 people rated)</span>
                                    </p>
                                </div>
                                <div>
                                    <p class="fs--1 text-1000 fw-bold mb-2">Apple care included</p>
                                    <div class="d-flex align-items-center mb-1">
                                        <p class="me-2 text-900 text-decoration-line-through mb-0">$1299.00</p>
                                        <h3 class="text-1100 mb-0">$1149.00</h3>
                                    </div>
                                    <p class="text-700 fw-semi-bold fs--1 lh-1 mb-0">2 colors</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="position-relative text-decoration-none product-card h-100">
                            <div class="d-flex flex-column justify-content-between h-100">
                                <div>
                                    <div class="border border-1 rounded-3 position-relative mb-3">
                                        <button
                                            class="btn rounded-circle p-0 d-flex flex-center btn-wish z-index-2 d-toggle-container btn-outline-primary"
                                            data-bs-toggle="tooltip" data-bs-placement="top" title="Add to wishlist">
                                            <span class="fas fa-heart d-block-hover"></span><span
                                                class="far fa-heart d-none-hover"></span>
                                        </button>
                                        <img class="img-fluid" src="../../../assets/img/products/5.png" alt=""/>
                                    </div>
                                    <a class="stretched-link text-decoration-none"
                                       href="../../../apps/e-commerce/landing/product-details.html">
                                        <h6 class="mb-2 lh-sm line-clamp-3">Razer Kraken v3 x Wired 7.1 Surroung Sound
                                            Gaming headset</h6>
                                    </a>
                                    <p class="fs--1"><span class="fa fa-star text-warning"></span><span
                                            class="fa fa-star text-warning"></span><span
                                            class="fa fa-star text-warning"></span><span
                                            class="fa fa-star text-warning"></span><span
                                            class="fa fa-star text-warning"></span><span
                                            class="text-500 fw-semi-bold ms-1">(64 people rated)</span>
                                    </p>
                                </div>
                                <div>
                                    <h3 class="text-1100">$59.00</h3>
                                    <p class="text-700 fw-semi-bold fs--1 lh-1 mb-0">1 colors</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="position-relative text-decoration-none product-card h-100">
                            <div class="d-flex flex-column justify-content-between h-100">
                                <div>
                                    <div class="border border-1 rounded-3 position-relative mb-3">
                                        <button
                                            class="btn rounded-circle p-0 d-flex flex-center btn-wish z-index-2 d-toggle-container btn-outline-primary"
                                            data-bs-toggle="tooltip" data-bs-placement="top" title="Add to wishlist">
                                            <span class="fas fa-heart d-block-hover"></span><span
                                                class="far fa-heart d-none-hover"></span>
                                        </button>
                                        <img class="img-fluid" src="../../../assets/img/products/2.png" alt=""/><span
                                            class="badge bg-success fs--2 product-verified-badge">Verified<span
                                                class="fas fa-check ms-1"></span></span>
                                    </div>
                                    <a class="stretched-link text-decoration-none"
                                       href="../../../apps/e-commerce/landing/product-details.html">
                                        <h6 class="mb-2 lh-sm line-clamp-3">iPhone 13 pro max-Pacific Blue, 128GB
                                            storage</h6>
                                    </a>
                                    <p class="fs--1"><span class="fa fa-star text-warning"></span><span
                                            class="fa fa-star text-warning"></span><span
                                            class="fa fa-star text-warning"></span><span
                                            class="fa fa-star text-warning"></span><span
                                            class="fa fa-star text-warning"></span><span
                                            class="text-500 fw-semi-bold ms-1">(32 people rated)</span>
                                    </p>
                                </div>
                                <div>
                                    <p class="fs--1 text-1000 fw-bold mb-2">Stock limited</p>
                                    <div class="d-flex align-items-center mb-1">
                                        <p class="me-2 text-900 text-decoration-line-through mb-0">$899.99</p>
                                        <h3 class="text-1100 mb-0">$855.00</h3>
                                    </div>
                                    <p class="text-700 fw-semi-bold fs--1 lh-1 mb-0">5 colors</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="position-relative text-decoration-none product-card h-100">
                            <div class="d-flex flex-column justify-content-between h-100">
                                <div>
                                    <div class="border border-1 rounded-3 position-relative mb-3">
                                        <button
                                            class="btn rounded-circle p-0 d-flex flex-center btn-wish z-index-2 d-toggle-container btn-outline-primary"
                                            data-bs-toggle="tooltip" data-bs-placement="top" title="Add to wishlist">
                                            <span class="fas fa-heart d-block-hover"></span><span
                                                class="far fa-heart d-none-hover"></span>
                                        </button>
                                        <img class="img-fluid" src="../../../assets/img/products/16.png" alt=""/>
                                    </div>
                                    <a class="stretched-link text-decoration-none"
                                       href="../../../apps/e-commerce/landing/product-details.html">
                                        <h6 class="mb-2 lh-sm line-clamp-3">Apple AirPods Pro</h6>
                                    </a>
                                    <p class="fs--1"><span class="fa fa-star text-warning"></span><span
                                            class="fa fa-star text-warning"></span><span
                                            class="fa fa-star text-warning"></span><span
                                            class="fa fa-star text-warning"></span><span
                                            class="fa fa-star text-warning"></span><span
                                            class="text-500 fw-semi-bold ms-1">(39 people rated)</span>
                                    </p>
                                </div>
                                <div>
                                    <p class="fs--1 text-1000 fw-bold mb-1">free with iPhone 5s</p>
                                    <p class="fs--1 text-700 mb-2">Ships to Canada</p>
                                    <h3 class="text-1100">$59.00</h3>
                                    <p class="text-700 fw-semi-bold fs--1 lh-1 mb-0">3 colors</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="position-relative text-decoration-none product-card h-100">
                            <div class="d-flex flex-column justify-content-between h-100">
                                <div>
                                    <div class="border border-1 rounded-3 position-relative mb-3">
                                        <button
                                            class="btn rounded-circle p-0 d-flex flex-center btn-wish z-index-2 d-toggle-container btn-outline-primary"
                                            data-bs-toggle="tooltip" data-bs-placement="top" title="Add to wishlist">
                                            <span class="fas fa-heart d-block-hover"></span><span
                                                class="far fa-heart d-none-hover"></span>
                                        </button>
                                        <img class="img-fluid" src="../../../assets/img/products/10.png" alt=""/>
                                    </div>
                                    <a class="stretched-link text-decoration-none"
                                       href="../../../apps/e-commerce/landing/product-details.html">
                                        <h6 class="mb-2 lh-sm line-clamp-3">Apple Magic Mouse (Wireless, Rechargable) -
                                            Silver</h6>
                                    </a>
                                    <p class="fs--1"><span class="fa fa-star text-warning"></span><span
                                            class="fa fa-star text-warning"></span><span
                                            class="fa fa-star text-warning"></span><span
                                            class="fa fa-star text-warning"></span><span
                                            class="fa fa-star text-warning"></span><span
                                            class="text-500 fw-semi-bold ms-1">(6 people rated)</span>
                                    </p>
                                </div>
                                <div>
                                    <p class="fs--1 text-1000 fw-bold mb-1">Bundle availabe</p>
                                    <p class="fs--1 text-700 mb-2">Charger not included</p>
                                    <h3 class="text-1100">$89.00</h3>
                                    <p class="text-700 fw-semi-bold fs--1 lh-1 mb-0">2 colors</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="position-relative text-decoration-none product-card h-100">
                            <div class="d-flex flex-column justify-content-between h-100">
                                <div>
                                    <div class="border border-1 rounded-3 position-relative mb-3">
                                        <button
                                            class="btn rounded-circle p-0 d-flex flex-center btn-wish z-index-2 d-toggle-container btn-outline-primary"
                                            data-bs-toggle="tooltip" data-bs-placement="top" title="Add to wishlist">
                                            <span class="fas fa-heart d-block-hover"></span><span
                                                class="far fa-heart d-none-hover"></span>
                                        </button>
                                        <img class="img-fluid" src="../../../assets/img/products/6.png" alt=""/>
                                    </div>
                                    <a class="stretched-link text-decoration-none"
                                       href="../../../apps/e-commerce/landing/product-details.html">
                                        <h6 class="mb-2 lh-sm line-clamp-3">PlayStation 5 DualSense Wireless
                                            Controller</h6>
                                    </a>
                                    <p class="fs--1"><span class="fa fa-star text-warning"></span><span
                                            class="fa fa-star text-warning"></span><span
                                            class="fa fa-star text-warning"></span><span
                                            class="fa fa-star text-warning"></span><span
                                            class="fa fa-star text-warning"></span><span
                                            class="text-500 fw-semi-bold ms-1">(67 people rated)</span>
                                    </p>
                                </div>
                                <div>
                                    <div class="d-flex align-items-center mb-1">
                                        <p class="me-2 text-900 text-decoration-line-through mb-0">$125.00</p>
                                        <h3 class="text-1100 mb-0">$89.00</h3>
                                    </div>
                                    <p class="text-700 fw-semi-bold fs--1 lh-1 mb-0">2 colors</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-nav">
                <div class="swiper-button-next"><span class="fas fa-chevron-right nav-icon"></span></div>
                <div class="swiper-button-prev"><span class="fas fa-chevron-left nav-icon"></span></div>
            </div>
        </div>
    </div>
    <!-- end of .container-->

</section>
<!-- <section> close ============================-->
<!-- ============================================-->
</div>
