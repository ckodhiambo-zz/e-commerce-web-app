<div class="ecommerce-homepage pt-5 mb-9">

    <section class="py-0">

        <div class="container">
            <div class="row g-4 mb-6">
                <div class="col-12 col-lg-9 col-xxl-10">
                    <div class="d-flex flex-between-center mb-3">
                        <div class="d-flex"><span class="fas fa-bolt text-warning fs-2"></span>
                            <h3 class="mx-2">{{$category->name}} Category</h3><span
                                class="fas fa-bolt text-warning fs-2"></span>
                        </div>
                        <a class="btn btn-link btn-lg p-0 d-none d-md-block" href="#!">Explore more<span
                                class="fas fa-chevron-right fs--1 ms-1"></span></a>
                    </div>
                    <div class="swiper-theme-container products-slider">
                        <div class="swiper swiper-container theme-slider"
                             data-swiper='{"slidesPerView":1,"spaceBetween":16,"breakpoints":{"450":{"slidesPerView":2,"spaceBetween":16},"768":{"slidesPerView":3,"spaceBetween":20},"1200":{"slidesPerView":4,"spaceBetween":16},"1540":{"slidesPerView":5,"spaceBetween":16}}}'>
                            <div class="swiper-wrapper">
                                @foreach($products as $product)
                                    <div class="swiper-slide">
                                        <a href="{{ url('category/'.$category->slug.'/'.$product->slug) }}"
                                           class="stretched-link text-decoration-none">
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
                                                                 src="{{asset('e-commerce-assets/img/products/6.png')}}"
                                                                 alt=""/>
                                                        </div>
{{--                                                        <a class="stretched-link text-decoration-none"--}}
{{--                                                           href="{{ url('category/'.$category->slug.'/'.$product->slug) }}">--}}
                                                            <a class="stretched-link text-decoration-none"
                                                               href="{{ route('product.details', ['category_slug' => $category->slug, 'product_slug' => $product->slug]) }}">

                                                                <h5 class="mb-2 text-uppercase lh-sm line-clamp-3">{{$product->name}}</h5>
                                                            </a>
                                                            <p class="fs--1"><span
                                                                    class="fa fa-star text-warning"></span><span
                                                                    class="fa fa-star text-warning"></span><span
                                                                    class="fa fa-star text-warning"></span><span
                                                                    class="fa fa-star text-warning"></span><span
                                                                    class="fa fa-star text-warning"></span>
                                                            </p>
                                                    </div>
                                                    <div>
                                                        <p class="fs--1 text-1000 fw-bold mb-2">{{$product->quantity}}
                                                            left</p>
                                                        <div class="d-flex align-items-center mb-1">
                                                            <p class="me-2 text-900 text-decoration-line-through mb-0">
                                                                KES.{{$product->original_price}}</p>
                                                            <h3 class="text-1100 mb-0">
                                                                KES.{{$product->selling_price}}</h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </a>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                        <div class="swiper-nav swiper-product-nav">
                            <div class="swiper-button-next"><span class="fas fa-chevron-right nav-icon"></span>
                            </div>
                            <div class="swiper-button-prev"><span class="fas fa-chevron-left nav-icon"></span></div>
                        </div>
                    </div>
                    <a class="fw-bold d-md-none px-0" href="#!">Explore more<span
                            class="fas fa-chevron-right fs--1 ms-1"></span></a>
                </div>
            </div>
        </div>

    </section>

</div>
