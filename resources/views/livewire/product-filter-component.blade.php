<div>
    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section class="pt-5 pb-9">

        <div class="container">
            <button class="btn btn-sm btn-phoenix-secondary text-700 mb-5 d-lg-none" data-phoenix-toggle="offcanvas"
                    data-phoenix-target="#productFilterColumn"><span class="fa-solid fa-filter me-2"></span>Filter
            </button>
            <div class="row">
                <div class="col-lg-3 col-xxl-2">
                    <div class="product-filter-offcanvas bg-soft scrollbar phoenix-offcanvas phoenix-offcanvas-fixed"
                         id="productFilterColumn">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h3 class="mb-0">Filters</h3>
                            <button class="btn d-lg-none p-0" data-phoenix-dismiss="offcanvas"><span
                                    class="uil uil-times fs-0"></span></button>
                        </div>
                        <a class="btn px-0 d-block collapse-indicator" data-bs-toggle="collapse"
                           href="#collapseAvailability" role="button" aria-expanded="true"
                           aria-controls="collapseAvailability">
                            <div class="d-flex align-items-center justify-content-between w-100">
                                <div class="fs-0 text-1000">Category</div>
                                <span class="fa-solid fa-angle-down toggle-icon text-500"></span>
                            </div>
                        </a>
                        <div class="collapse show" id="collapseAvailability">
                            <div class="mb-2">

                                @foreach(\App\Models\Category::all() as $category)
                                    <div class="form-check mb-0">
                                        <input class="form-check-input mt-0" id="inStockInput" type="checkbox"
                                               name="category">
                                        <label class="form-check-label d-block lh-sm fs-0 text-900 fw-normal mb-0"
                                               for="inStockInput">
                                            {{$category->name}}
                                        </label>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <a class="btn px-0 d-block collapse-indicator" data-bs-toggle="collapse"
                           href="#collapseColorFamily" role="button" aria-expanded="true"
                           aria-controls="collapseColorFamily">
                            <div class="d-flex align-items-center justify-content-between w-100">
                                <div class="fs-0 text-1000">Products</div>
                                <span class="fa-solid fa-angle-down toggle-icon text-500"></span>
                            </div>
                        </a>
                        <div class="collapse show" id="collapseColorFamily">
                            <div class="mb-2">
                                @foreach(\App\Models\Products::all() as $product)
                                    <div class="form-check mb-0">
                                        <input class="form-check-input mt-0" id="flexCheckBlack" type="checkbox"
                                               name="product">
                                        <label class="form-check-label d-block lh-sm fs-0 text-900 fw-normal mb-0"
                                               for="flexCheckBlack">
                                            {{$product->name}}
                                        </label>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <a class="btn px-0 d-block collapse-indicator" data-bs-toggle="collapse" href="#collapseBrands"
                           role="button" aria-expanded="true" aria-controls="collapseBrands">
                            <div class="d-flex align-items-center justify-content-between w-100">
                                <div class="fs-0 text-1000">Brands</div>
                                <span class="fa-solid fa-angle-down toggle-icon text-500"></span>
                            </div>
                        </a>
                        <div class="collapse show" id="collapseBrands">
                            <div class="mb-2">
                                <div class="form-check mb-0">
                                    <input class="form-check-input mt-0" id="flexCheckBlackberry" type="checkbox"
                                           name="brands" checked>
                                    <label class="form-check-label d-block lh-sm fs-0 text-900 fw-normal mb-0"
                                           for="flexCheckBlackberry">
                                        Blackberry

                                    </label>
                                </div>
                                <div class="form-check mb-0">
                                    <input class="form-check-input mt-0" id="flexCheckApple" type="checkbox"
                                           name="brands">
                                    <label class="form-check-label d-block lh-sm fs-0 text-900 fw-normal mb-0"
                                           for="flexCheckApple">
                                        Apple

                                    </label>
                                </div>
                                <div class="form-check mb-0">
                                    <input class="form-check-input mt-0" id="flexCheckNokia" type="checkbox"
                                           name="brands">
                                    <label class="form-check-label d-block lh-sm fs-0 text-900 fw-normal mb-0"
                                           for="flexCheckNokia">
                                        Nokia

                                    </label>
                                </div>
                                <div class="form-check mb-0">
                                    <input class="form-check-input mt-0" id="flexCheckSony" type="checkbox"
                                           name="brands">
                                    <label class="form-check-label d-block lh-sm fs-0 text-900 fw-normal mb-0"
                                           for="flexCheckSony">
                                        Sony

                                    </label>
                                </div>
                                <div class="form-check mb-0">
                                    <input class="form-check-input mt-0" id="flexCheckLG" type="checkbox" name="brands">
                                    <label class="form-check-label d-block lh-sm fs-0 text-900 mb-0 fw-normal"
                                           for="flexCheckLG">
                                        LG

                                    </label>
                                </div>
                            </div>
                        </div>
                        <a class="btn px-0 d-block collapse-indicator" data-bs-toggle="collapse"
                           href="#collapsePriceRange" role="button" aria-expanded="true"
                           aria-controls="collapsePriceRange">
                            <div class="d-flex align-items-center justify-content-between w-100">
                                <div class="fs-0 text-1000">Price range</div>
                                <span class="fa-solid fa-angle-down toggle-icon text-500"></span>
                            </div>
                        </a>
                        <div class="collapse show" id="collapsePriceRange">
                            <div class="d-flex justify-content-between mb-3">
                                <div class="input-group me-2">
                                    <input class="form-control" type="text" aria-label="First name" placeholder="Min">
                                    <input class="form-control" type="text" aria-label="Last name" placeholder="Max">
                                </div>
                                <button class="btn btn-phoenix-primary border-300 px-3" type="button">Go</button>
                            </div>
                        </div>
                        <a class="btn px-0 d-block collapse-indicator" data-bs-toggle="collapse"
                           href="#collapseCondition" role="button" aria-expanded="true"
                           aria-controls="collapseCondition">
                            <div class="d-flex align-items-center justify-content-between w-100">
                                <div class="fs-0 text-1000">Condition</div>
                                <span class="fa-solid fa-angle-down toggle-icon text-500"></span>
                            </div>
                        </a>
                        <div class="collapse show" id="collapseCondition">
                            <div class="mb-2">
                                <div class="form-check mb-0">
                                    <input class="form-check-input mt-0" id="newInput" type="checkbox" name="condition"
                                           checked>
                                    <label class="form-check-label d-block lh-sm fs-0 text-900 fw-normal mb-0"
                                           for="newInput">New</label>
                                </div>
                                <div class="form-check mb-0">
                                    <input class="form-check-input mt-0" id="usedInput" type="checkbox"
                                           name="condition">
                                    <label class="form-check-label d-block lh-sm fs-0 text-900 fw-normal mb-0"
                                           for="usedInput">Used</label>
                                </div>
                                <div class="form-check mb-0">
                                    <input class="form-check-input mt-0" id="refurbrishedInput" type="checkbox"
                                           name="condition">
                                    <label class="form-check-label d-block lh-sm fs-0 text-900 fw-normal mb-0"
                                           for="refurbrishedInput">Refurbrished</label>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="phoenix-offcanvas-backdrop d-lg-none" data-phoenix-backdrop></div>
                </div>
                <div class="col-lg-9 col-xxl-10">
                    <div class="row gx-3 gy-6 mb-8">
                        <div class="row flex-center mb-15 mt-11 gy-6">
                            <div class="col-auto"><img class="d-dark-none"
                                                       src="{{asset('e-commerce-assets/img/spot-illustrations/light_30.png')}}"
                                                       alt=""
                                                       width="305"/><img class="d-light-none"
                                                                         src="{{asset('e-commerce-assets/img/spot-illustrations/dark_30.png')}}"
                                                                         alt="" width="305"/></div>
                            <div class="col-auto">
                                <div class="text-center text-lg-start">
                                    <h3 class="text-1000 mb-2"><span class="fw-semi-bold">Want to have the </span>ultimate Easy
                                        Fix
                                        customer experience?</h3>
                                    <h1 class="display-3 fw-semi-bold mb-4">Become a <span
                                            class="text-primary fw-bolder">member </span>today!</h1><a
                                        class="btn btn-lg btn-primary px-7"
                                        href="../../../pages/authentication/simple/sign-up.html">Sign up<span
                                            class="fas fa-chevron-right ms-2 fs--1"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex flex-between-center mb-3">
                            <div class="d-flex"><span class="fas fa-bolt text-warning fs-2"></span>
                                <h3 class="mx-2">Top Trending Products</h3><span
                                    class="fas fa-bolt text-warning fs-2"></span>
                            </div>
                        </div>
                        <div class="swiper-theme-container products-slider">
                            <div class="swiper swiper-container theme-slider"
                                 data-swiper='{"slidesPerView":1,"spaceBetween":16,"breakpoints":{"450":{"slidesPerView":2,"spaceBetween":16},"576":{"slidesPerView":3,"spaceBetween":20},"768":{"slidesPerView":4,"spaceBetween":20},"992":{"slidesPerView":5,"spaceBetween":20},"1200":{"slidesPerView":6,"spaceBetween":16}}}'>
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="position-relative text-decoration-none product-card h-100">
                                            <div class="d-flex flex-column justify-content-between h-100">
                                                <div>
                                                    <div class="border border-1 rounded-3 position-relative mb-3">
                                                        <button
                                                            class="btn rounded-circle p-0 d-flex flex-center btn-wish z-index-2 d-toggle-container btn-outline-primary"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Add to wishlist"><span
                                                                class="fas fa-heart d-block-hover"></span><span
                                                                class="far fa-heart d-none-hover"></span>
                                                        </button>
                                                        <img class="img-fluid"
                                                             src="{{asset('e-commerce-assets/img/products/25.png')}}"
                                                             alt=""/>
                                                    </div>
                                                    <a class="stretched-link text-decoration-none"
                                                       href="../../../apps/e-commerce/landing/product-details.html">
                                                        <h6 class="mb-2 lh-sm line-clamp-3">RESPAWN 200 Racing Style
                                                            Gaming
                                                            Chair, in Gray RSP 200 GRY</h6>
                                                    </a>
                                                    <p class="fs--1"><span class="fa fa-star text-warning"></span><span
                                                            class="fa fa-star text-warning"></span><span
                                                            class="fa fa-star text-warning"></span><span
                                                            class="fa fa-star text-warning"></span><span
                                                            class="fa fa-star text-warning"></span>
                                                    </p>
                                                </div>
                                                <div>
                                                    <h6 class="text-success lh-1 mb-0">35% off</h6>
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
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Add to wishlist"><span
                                                                class="fas fa-heart d-block-hover"></span><span
                                                                class="far fa-heart d-none-hover"></span>
                                                        </button>
                                                        <img class="img-fluid"
                                                             src="{{asset('e-commerce-assets/img/products/27.png')}}"
                                                             alt=""/>
                                                    </div>
                                                    <a class="stretched-link text-decoration-none"
                                                       href="../../../apps/e-commerce/landing/product-details.html">
                                                        <h6 class="mb-2 lh-sm line-clamp-3">LEVOIT Humidifiers for
                                                            Bedroom
                                                            Large Room 6L Warm and Cool Mist for...</h6>
                                                    </a>
                                                    <p class="fs--1"><span class="fa fa-star text-warning"></span><span
                                                            class="fa fa-star text-warning"></span><span
                                                            class="fa fa-star text-warning"></span><span
                                                            class="fa fa-star text-warning"></span><span
                                                            class="fa-regular fa-star text-warning-300"></span>
                                                    </p>
                                                </div>
                                                <div>
                                                    <h6 class="text-success lh-1 mb-0">18% off</h6>
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
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Add to wishlist"><span
                                                                class="fas fa-heart d-block-hover"></span><span
                                                                class="far fa-heart d-none-hover"></span>
                                                        </button>
                                                        <img class="img-fluid"
                                                             src="{{asset('e-commerce-assets/img/products/26.png')}}"
                                                             alt=""/>
                                                    </div>
                                                    <a class="stretched-link text-decoration-none"
                                                       href="../../../apps/e-commerce/landing/product-details.html">
                                                        <h6 class="mb-2 lh-sm line-clamp-3">NETGEAR Nighthawk Pro Gaming
                                                            XR500 Wi-Fi Router with 4 Ethernet Ports...</h6>
                                                    </a>
                                                    <p class="fs--1"><span class="fa fa-star text-warning"></span><span
                                                            class="fa fa-star text-warning"></span><span
                                                            class="fa fa-star text-warning"></span><span
                                                            class="fa fa-star text-warning"></span><span
                                                            class="fa fa-star text-warning"></span>
                                                    </p>
                                                </div>
                                                <div>
                                                    <h6 class="text-success lh-1 mb-0">15% off</h6>
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
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Add to wishlist"><span
                                                                class="fas fa-heart d-block-hover"></span><span
                                                                class="far fa-heart d-none-hover"></span>
                                                        </button>
                                                        <img class="img-fluid"
                                                             src="{{asset('e-commerce-assets/img/products/18.png')}}"
                                                             alt=""/>
                                                    </div>
                                                    <a class="stretched-link text-decoration-none"
                                                       href="../../../apps/e-commerce/landing/product-details.html">
                                                        <h6 class="mb-2 lh-sm line-clamp-3">Rachael Ray Cucina Bakeware
                                                            Set
                                                            Includes Nonstick Bread Baking Cookie Sheet...</h6>
                                                    </a>
                                                    <p class="fs--1"><span class="fa fa-star text-warning"></span><span
                                                            class="fa fa-star text-warning"></span><span
                                                            class="fa fa-star text-warning"></span><span
                                                            class="fa fa-star-half-alt star-icon text-warning"></span><span
                                                            class="fa-regular fa-star text-warning-300"></span>
                                                    </p>
                                                </div>
                                                <div>
                                                    <h6 class="text-success lh-1 mb-0">20% off</h6>
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
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Add to wishlist"><span
                                                                class="fas fa-heart d-block-hover"></span><span
                                                                class="far fa-heart d-none-hover"></span>
                                                        </button>
                                                        <img class="img-fluid"
                                                             src="{{asset('e-commerce-assets/img/products/17.png')}}"
                                                             alt=""/>
                                                    </div>
                                                    <a class="stretched-link text-decoration-none"
                                                       href="../../../apps/e-commerce/landing/product-details.html">
                                                        <h6 class="mb-2 lh-sm line-clamp-3">Xbox Series S</h6>
                                                    </a>
                                                    <p class="fs--1"><span class="fa fa-star text-warning"></span><span
                                                            class="fa fa-star text-warning"></span><span
                                                            class="fa fa-star text-warning"></span><span
                                                            class="fa fa-star text-warning"></span><span
                                                            class="fa fa-star text-warning"></span>
                                                    </p>
                                                </div>
                                                <div>
                                                    <h6 class="text-success lh-1 mb-0">12% off</h6>
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
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Add to wishlist"><span
                                                                class="fas fa-heart d-block-hover"></span><span
                                                                class="far fa-heart d-none-hover"></span>
                                                        </button>
                                                        <img class="img-fluid"
                                                             src="{{asset('e-commerce-assets/img/products/24.png')}}"
                                                             alt=""/>
                                                    </div>
                                                    <a class="stretched-link text-decoration-none"
                                                       href="../../../apps/e-commerce/landing/product-details.html">
                                                        <h6 class="mb-2 lh-sm line-clamp-3">FURINNO Computer Writing
                                                            Desk,
                                                            Walnut</h6>
                                                    </a>
                                                    <p class="fs--1"><span class="fa fa-star text-warning"></span><span
                                                            class="fa fa-star text-warning"></span><span
                                                            class="fa fa-star text-warning"></span><span
                                                            class="fa fa-star text-warning"></span><span
                                                            class="fa fa-star text-warning"></span>
                                                    </p>
                                                </div>
                                                <div>
                                                    <h6 class="text-success lh-1 mb-0">16% off</h6>
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
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Add to wishlist"><span
                                                                class="fas fa-heart d-block-hover"></span><span
                                                                class="far fa-heart d-none-hover"></span>
                                                        </button>
                                                        <img class="img-fluid"
                                                             src="{{asset('e-commerce-assets/img/products/18.png')}}"
                                                             alt=""/>
                                                    </div>
                                                    <a class="stretched-link text-decoration-none"
                                                       href="../../../apps/e-commerce/landing/product-details.html">
                                                        <h6 class="mb-2 lh-sm line-clamp-3">Seagate Portable 2TB
                                                            External
                                                            Hard Drive Portable HDD</h6>
                                                    </a>
                                                    <p class="fs--1"><span class="fa fa-star text-warning"></span><span
                                                            class="fa fa-star text-warning"></span><span
                                                            class="fa fa-star text-warning"></span><span
                                                            class="fa fa-star text-warning"></span><span
                                                            class="fa-regular fa-star text-warning-300"></span>
                                                    </p>
                                                </div>
                                                <div>
                                                    <h6 class="text-success lh-1 mb-0">15% off</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-nav">
                                <div class="swiper-button-next"><span class="fas fa-chevron-right nav-icon"></span>
                                </div>
                                <div class="swiper-button-prev"><span class="fas fa-chevron-left nav-icon"></span></div>
                            </div>
                        </div>

                        <hr class="my-4"/>

                        <div class="d-flex flex-between-center mb-3">
                            <div class="d-flex"><span class="fas fa-bolt text-warning fs-2"></span>
                                <h3 class="mx-2">Top Trends today</h3><span
                                    class="fas fa-bolt text-warning fs-2"></span>
                            </div>
                        </div>
                        <div class="swiper-theme-container products-slider">
                            <div class="swiper swiper-container theme-slider"
                                 data-swiper='{"slidesPerView":1,"spaceBetween":16,"breakpoints":{"450":{"slidesPerView":2,"spaceBetween":16},"576":{"slidesPerView":3,"spaceBetween":20},"768":{"slidesPerView":4,"spaceBetween":20},"992":{"slidesPerView":5,"spaceBetween":20},"1200":{"slidesPerView":6,"spaceBetween":16}}}'>
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="position-relative text-decoration-none product-card h-100">
                                            <div class="d-flex flex-column justify-content-between h-100">
                                                <div>
                                                    <div class="border border-1 rounded-3 position-relative mb-3">
                                                        <button
                                                            class="btn rounded-circle p-0 d-flex flex-center btn-wish z-index-2 d-toggle-container btn-outline-primary"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Add to wishlist"><span
                                                                class="fas fa-heart d-block-hover"></span><span
                                                                class="far fa-heart d-none-hover"></span>
                                                        </button>
                                                        <img class="img-fluid"
                                                             src="{{asset('e-commerce-assets/img/products/25.png')}}"
                                                             alt=""/>
                                                    </div>
                                                    <a class="stretched-link text-decoration-none"
                                                       href="../../../apps/e-commerce/landing/product-details.html">
                                                        <h6 class="mb-2 lh-sm line-clamp-3">RESPAWN 200 Racing Style
                                                            Gaming
                                                            Chair, in Gray RSP 200 GRY</h6>
                                                    </a>
                                                    <p class="fs--1"><span class="fa fa-star text-warning"></span><span
                                                            class="fa fa-star text-warning"></span><span
                                                            class="fa fa-star text-warning"></span><span
                                                            class="fa fa-star text-warning"></span><span
                                                            class="fa fa-star text-warning"></span>
                                                    </p>
                                                </div>
                                                <div>
                                                    <h6 class="text-success lh-1 mb-0">35% off</h6>
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
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Add to wishlist"><span
                                                                class="fas fa-heart d-block-hover"></span><span
                                                                class="far fa-heart d-none-hover"></span>
                                                        </button>
                                                        <img class="img-fluid"
                                                             src="{{asset('e-commerce-assets/img/products/27.png')}}"
                                                             alt=""/>
                                                    </div>
                                                    <a class="stretched-link text-decoration-none"
                                                       href="../../../apps/e-commerce/landing/product-details.html">
                                                        <h6 class="mb-2 lh-sm line-clamp-3">LEVOIT Humidifiers for
                                                            Bedroom
                                                            Large Room 6L Warm and Cool Mist for...</h6>
                                                    </a>
                                                    <p class="fs--1"><span class="fa fa-star text-warning"></span><span
                                                            class="fa fa-star text-warning"></span><span
                                                            class="fa fa-star text-warning"></span><span
                                                            class="fa fa-star text-warning"></span><span
                                                            class="fa-regular fa-star text-warning-300"></span>
                                                    </p>
                                                </div>
                                                <div>
                                                    <h6 class="text-success lh-1 mb-0">18% off</h6>
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
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Add to wishlist"><span
                                                                class="fas fa-heart d-block-hover"></span><span
                                                                class="far fa-heart d-none-hover"></span>
                                                        </button>
                                                        <img class="img-fluid"
                                                             src="{{asset('e-commerce-assets/img/products/26.png')}}"
                                                             alt=""/>
                                                    </div>
                                                    <a class="stretched-link text-decoration-none"
                                                       href="../../../apps/e-commerce/landing/product-details.html">
                                                        <h6 class="mb-2 lh-sm line-clamp-3">NETGEAR Nighthawk Pro Gaming
                                                            XR500 Wi-Fi Router with 4 Ethernet Ports...</h6>
                                                    </a>
                                                    <p class="fs--1"><span class="fa fa-star text-warning"></span><span
                                                            class="fa fa-star text-warning"></span><span
                                                            class="fa fa-star text-warning"></span><span
                                                            class="fa fa-star text-warning"></span><span
                                                            class="fa fa-star text-warning"></span>
                                                    </p>
                                                </div>
                                                <div>
                                                    <h6 class="text-success lh-1 mb-0">15% off</h6>
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
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Add to wishlist"><span
                                                                class="fas fa-heart d-block-hover"></span><span
                                                                class="far fa-heart d-none-hover"></span>
                                                        </button>
                                                        <img class="img-fluid"
                                                             src="{{asset('e-commerce-assets/img/products/18.png')}}"
                                                             alt=""/>
                                                    </div>
                                                    <a class="stretched-link text-decoration-none"
                                                       href="../../../apps/e-commerce/landing/product-details.html">
                                                        <h6 class="mb-2 lh-sm line-clamp-3">Rachael Ray Cucina Bakeware
                                                            Set
                                                            Includes Nonstick Bread Baking Cookie Sheet...</h6>
                                                    </a>
                                                    <p class="fs--1"><span class="fa fa-star text-warning"></span><span
                                                            class="fa fa-star text-warning"></span><span
                                                            class="fa fa-star text-warning"></span><span
                                                            class="fa fa-star-half-alt star-icon text-warning"></span><span
                                                            class="fa-regular fa-star text-warning-300"></span>
                                                    </p>
                                                </div>
                                                <div>
                                                    <h6 class="text-success lh-1 mb-0">20% off</h6>
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
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Add to wishlist"><span
                                                                class="fas fa-heart d-block-hover"></span><span
                                                                class="far fa-heart d-none-hover"></span>
                                                        </button>
                                                        <img class="img-fluid"
                                                             src="{{asset('e-commerce-assets/img/products/17.png')}}"
                                                             alt=""/>
                                                    </div>
                                                    <a class="stretched-link text-decoration-none"
                                                       href="../../../apps/e-commerce/landing/product-details.html">
                                                        <h6 class="mb-2 lh-sm line-clamp-3">Xbox Series S</h6>
                                                    </a>
                                                    <p class="fs--1"><span class="fa fa-star text-warning"></span><span
                                                            class="fa fa-star text-warning"></span><span
                                                            class="fa fa-star text-warning"></span><span
                                                            class="fa fa-star text-warning"></span><span
                                                            class="fa fa-star text-warning"></span>
                                                    </p>
                                                </div>
                                                <div>
                                                    <h6 class="text-success lh-1 mb-0">12% off</h6>
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
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Add to wishlist"><span
                                                                class="fas fa-heart d-block-hover"></span><span
                                                                class="far fa-heart d-none-hover"></span>
                                                        </button>
                                                        <img class="img-fluid"
                                                             src="{{asset('e-commerce-assets/img/products/24.png')}}"
                                                             alt=""/>
                                                    </div>
                                                    <a class="stretched-link text-decoration-none"
                                                       href="../../../apps/e-commerce/landing/product-details.html">
                                                        <h6 class="mb-2 lh-sm line-clamp-3">FURINNO Computer Writing
                                                            Desk,
                                                            Walnut</h6>
                                                    </a>
                                                    <p class="fs--1"><span class="fa fa-star text-warning"></span><span
                                                            class="fa fa-star text-warning"></span><span
                                                            class="fa fa-star text-warning"></span><span
                                                            class="fa fa-star text-warning"></span><span
                                                            class="fa fa-star text-warning"></span>
                                                    </p>
                                                </div>
                                                <div>
                                                    <h6 class="text-success lh-1 mb-0">16% off</h6>
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
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Add to wishlist"><span
                                                                class="fas fa-heart d-block-hover"></span><span
                                                                class="far fa-heart d-none-hover"></span>
                                                        </button>
                                                        <img class="img-fluid"
                                                             src="{{asset('e-commerce-assets/img/products/18.png')}}"
                                                             alt=""/>
                                                    </div>
                                                    <a class="stretched-link text-decoration-none"
                                                       href="../../../apps/e-commerce/landing/product-details.html">
                                                        <h6 class="mb-2 lh-sm line-clamp-3">Seagate Portable 2TB
                                                            External
                                                            Hard Drive Portable HDD</h6>
                                                    </a>
                                                    <p class="fs--1"><span class="fa fa-star text-warning"></span><span
                                                            class="fa fa-star text-warning"></span><span
                                                            class="fa fa-star text-warning"></span><span
                                                            class="fa fa-star text-warning"></span><span
                                                            class="fa-regular fa-star text-warning-300"></span>
                                                    </p>
                                                </div>
                                                <div>
                                                    <h6 class="text-success lh-1 mb-0">15% off</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-nav">
                                <div class="swiper-button-next"><span class="fas fa-chevron-right nav-icon"></span>
                                </div>
                                <div class="swiper-button-prev"><span class="fas fa-chevron-left nav-icon"></span></div>
                            </div>
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
