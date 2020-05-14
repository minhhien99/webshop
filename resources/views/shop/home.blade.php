@extends('shop.layouts.main')

@section('content')
<style>
    h2.left-title {border: 0px}
    .single-product-item .product-image {
        margin-bottom: 15px;
    }
    .price-box span.price {
        display: inline-block !important;
        vertical-align: middle !important;
        overflow: hidden !important;
        font-size: 14px !important;
        color: #e10c00 !important;
        line-height: 15px !important;
    }
    .p-price {
        display: inline-block;
        vertical-align: middle;
        font-size: 12px;
        text-decoration: line-through;
        margin-left: 5px;
        color: #222;
    }
</style>
    <!-- HEADER-BOTTOM-AREA START -->
    <section class="header-bottom-area">
        <div class="container">
            <div class="row">
                {{-- <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                    <!-- MAIN-SLIDER-AREA START -->
                    <div class="main-slider-area">
                        <div class="slider-area">
                            <div id="wrapper">
                                @if (!empty($banners))
                                <div class="slider-wrapper">
                                    <div id="mainSlider" class="nivoSlider">
                                        @foreach ($banners as $banner)
                                    <a href=""><img src="{{ asset($banner->image) }}" alt="{{ $banner->title }}"/></a>
                                        @endforeach

                                    </div>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    <!-- MAIN-SLIDER-AREA END -->
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <!-- LEFT-CATEGORY-MENU START -->
                    <section class="">
                        <a href="">
                            <div>
                                <h2 class=""><b>Tin Công Nghệ</b></h3>
                            <div class="">
                            <div>
                                <p class="">Employee Feedback</p>
                            <div>
                                <img src="https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=500&amp;q=60" class="grid__item__img">
                            </div>
                                <p class="">Tác giả</p>
                            </div>
                        </a>
                    </section>
                    <!-- LEFT-CATEGORY-MENU END -->
                </div> --}}
            </div>
        </div>
    </section>
    <!-- HEADER-BOTTOM-AREA END -->
    <!-- MAIN-CONTENT-SECTION START -->
    <section class="main-content-section">
        <div class="container">
            <div class="row">
                <!-- LEFT-SIDEBAR START -->

                <!-- LEFT-SIDEBAR END -->

            </div>
        </div>
    </section>
    <!-- MAIN-CONTENT-SECTION END -->
    <!-- MAIN-CONTENT-SECTION START -->
    <section class="main-content-section-full-column">
        <div class="container">
            @foreach ($list as $item)
            <div class="row">
                <div class="col-xs-12">
                    <!-- FEATURED-PRODUCTS-AREA START -->
                    <div class="featured-products-area">
                        <div class="left-title-area">
                        <h2 class="left-title">{{ $item['category']->name }}</h2>
                        </div>
                        <div class="row">
                            <!-- FEARTURED-CAROUSEL START -->
                            <div class="feartured-carousel">
                                <!-- SINGLE ITEM START -->
                                @foreach ($item['products'] as $product)
                                <div class="item">
                                    <!-- SINGLE-PRODUCT-ITEM START -->
                                    <div class="single-product-item">
                                        <div class="product-image">
                                            <a href="{{ route('shop.product', ['category' => $product->category->slug , 'slug' => $product->slug , 'id' => $product->id]) }}" title="{{ $product->name }}" >
                                                <img width="180" height="180" src="{{ asset($product->image)  }}" alt="product-image" />
                                            </a>
                                            <a href="#" class="new-mark-box">HOT</a>
                                            <div class="overlay-content">
                                                <ul>
                                                    <li><a href="#" title="Quick view"><i class="fa fa-search"></i></a></li>
                                                    <li><a href="#" title="Quick view"><i class="fa fa-shopping-cart"></i></a></li>
                                                    <li><a href="#" title="Quick view"><i class="fa fa-retweet"></i></a></li>
                                                    <li><a href="#" title="Quick view"><i class="fa fa-heart-o"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <div class="customar-comments-box">
                                                <div class="rating-box">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-empty"></i>
                                                </div>
                                                <div class="review-box">
                                                    <span>1 Review(s)</span>
                                                </div>
                                            </div>
                                            <a href="single-product.html"> {{$product->name }} </a>
                                            <div class="price-box">
                                                <span class="price"> {{  number_format($product->sale,0,",",".") }}đ<span class="p-price">{{ number_format($product->price,0,",",".") }}đ</span></span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- SINGLE-PRODUCT-ITEM END -->
                                </div>
                                @endforeach
                                <!-- SINGLE ITEM END -->
                            </div>
                            <!-- FEARTURED-CAROUSEL END -->
                        </div>
                    </div>
                    <!-- FEATURED-PRODUCTS-AREA END -->
                </div>
            </div>
            @endforeach
            <div class="row">
                <!-- IMAGE-ADD-AREA START -->
                <div class="image-add-area">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <!-- SINGLE ADD START -->
                        <div class="onehalf-add-shope zoom-img">
                            <a href="#"><img alt="shope-add" src="shop/img/product/one-helf1.jpg"></a>
                        </div>
                        <!-- SINGLE ADD END -->
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <!-- SINGLE ADD START -->
                        <div class="onehalf-add-shope zoom-img">
                            <a href="#"><img alt="shope-add" src="shop/img/product/one-helf2.jpg"></a>
                        </div>
                        <!-- SINGLE ADD END -->
                    </div>
                </div>
                <!-- IMAGE-ADD-AREA END -->
            </div>
        </div>
    </section>
    <!-- MAIN-CONTENT-SECTION END -->
    <!-- LATEST-NEWS-AREA START -->
    <section class="latest-news-area">
        <div class="container">
            <div class="row">
                <div class="latest-news-row">
                    <div class="center-title-area">
                        <h2 class="center-title"><a href="#">latest news</a></h2>
                    </div>
                    <div class="col-xs-12">
                        <div class="row">
                            <!-- LATEST-NEWS-CAROUSEL START -->
                            <div class="latest-news-carousel">
                                <!-- LATEST-NEWS-SINGLE-POST START -->
                                <div class="item">
                                    <div class="latest-news-post">
                                        <div class="single-latest-post">
                                            <a href="#"><img src="shop/img/latest-news/1.jpg" alt="latest-post" /></a>
                                            <h2><a href="#">What is Lorem Ipsum?</a></h2>
                                            <p>Lorem Ipsum is simply dummy text of the printing and Type setting industry. Lorem Ipsum has been...</p>
                                            <div class="latest-post-info">
                                                <i class="fa fa-calendar"></i><span>2015-06-20 04:51:43</span>
                                            </div>
                                            <div class="read-more">
                                                <a href="#">Read More <i class="fa fa-long-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- LATEST-NEWS-SINGLE-POST END -->
                                <!-- LATEST-NEWS-SINGLE-POST START -->
                                <div class="item">
                                    <div class="latest-news-post">
                                        <div class="single-latest-post">
                                            <a href="#"><img src="shop/img/latest-news/2.jpg" alt="latest-post" /></a>
                                            <h2><a href="#">Share the Love for printing</a></h2>
                                            <p>Lorem Ipsum is simply dummy text of the printing and Type setting industry. Lorem Ipsum has been...</p>
                                            <div class="latest-post-info">
                                                <i class="fa fa-calendar"></i><span>2015-06-20 04:51:43</span>
                                            </div>
                                            <div class="read-more">
                                                <a href="#">Read More <i class="fa fa-long-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- LATEST-NEWS-SINGLE-POST END -->
                                <!-- LATEST-NEWS-SINGLE-POST START -->
                                <div class="item">
                                    <div class="latest-news-post">
                                        <div class="single-latest-post">
                                            <a href="#"><img src="shop/img/latest-news/3.jpg" alt="latest-post" /></a>
                                            <h2><a href="#">Answers your Questions P..</a></h2>
                                            <p>Lorem Ipsum is simply dummy text of the printing and Type setting industry. Lorem Ipsum has been...</p>
                                            <div class="latest-post-info">
                                                <i class="fa fa-calendar"></i><span>2015-06-20 04:51:43</span>
                                            </div>
                                            <div class="read-more">
                                                <a href="#">Read More <i class="fa fa-long-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- LATEST-NEWS-SINGLE-POST END -->
                                <!-- LATEST-NEWS-SINGLE-POST START -->
                                <div class="item">
                                    <div class="latest-news-post">
                                        <div class="single-latest-post">
                                            <a href="#"><img src="shop/img/latest-news/4.jpg" alt="latest-post" /></a>
                                            <h2><a href="#">What is Bootstrap? – History</a></h2>
                                            <p>Lorem Ipsum is simply dummy text of the printing and Type setting industry. Lorem Ipsum has been...</p>
                                            <div class="latest-post-info">
                                                <i class="fa fa-calendar"></i><span>2015-06-20 04:51:43</span>
                                            </div>
                                            <div class="read-more">
                                                <a href="#">Read More <i class="fa fa-long-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- LATEST-NEWS-SINGLE-POST END -->
                                <!-- LATEST-NEWS-SINGLE-POST START -->
                                <div class="item">
                                    <div class="latest-news-post">
                                        <div class="single-latest-post">
                                            <a href="#"><img src="shop/img/latest-news/5.jpg" alt="latest-post" /></a>
                                            <h2><a href="#">Share the Love for..</a></h2>
                                            <p>Lorem Ipsum is simply dummy text of the printing and Type setting industry. Lorem Ipsum has been...</p>
                                            <div class="latest-post-info">
                                                <i class="fa fa-calendar"></i><span>2015-06-20 04:51:43</span>
                                            </div>
                                            <div class="read-more">
                                                <a href="#">Read More <i class="fa fa-long-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- LATEST-NEWS-SINGLE-POST END -->
                                <!-- LATEST-NEWS-SINGLE-POST START -->
                                <div class="item">
                                    <div class="latest-news-post">
                                        <div class="single-latest-post">
                                            <a href="#"><img src="shop/img/latest-news/6.jpg" alt="latest-post" /></a>
                                            <h2><a href="#">What is Bootstrap? – The History a..</a></h2>
                                            <p>Lorem Ipsum is simply dummy text of the printing and Type setting industry. Lorem Ipsum has been...</p>
                                            <div class="latest-post-info">
                                                <i class="fa fa-calendar"></i><span>2015-06-20 04:51:43</span>
                                            </div>
                                            <div class="read-more">
                                                <a href="#">Read More <i class="fa fa-long-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- LATEST-NEWS-SINGLE-POST END -->
                                <!-- LATEST-NEWS-SINGLE-POST START -->
                                <div class="item">
                                    <div class="latest-news-post">
                                        <div class="single-latest-post">
                                            <a href="#"><img src="shop/img/latest-news/3.jpg" alt="latest-post" /></a>
                                            <h2><a href="#">Answers your Questions P..</a></h2>
                                            <p>Lorem Ipsum is simply dummy text of the printing and Type setting industry. Lorem Ipsum has been...</p>
                                            <div class="latest-post-info">
                                                <i class="fa fa-calendar"></i><span>2015-06-20 04:51:43</span>
                                            </div>
                                            <div class="read-more">
                                                <a href="#">Read More <i class="fa fa-long-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- LATEST-NEWS-SINGLE-POST END -->
                                <!-- LATEST-NEWS-SINGLE-POST START -->
                                <div class="item">
                                    <div class="latest-news-post">
                                        <div class="single-latest-post">
                                            <a href="#"><img src="shop/img/latest-news/4.jpg" alt="latest-post" /></a>
                                            <h2><a href="#">What is Bootstrap? – History</a></h2>
                                            <p>Lorem Ipsum is simply dummy text of the printing and Type setting industry. Lorem Ipsum has been...</p>
                                            <div class="latest-post-info">
                                                <i class="fa fa-calendar"></i><span>2015-06-20 04:51:43</span>
                                            </div>
                                            <div class="read-more">
                                                <a href="#">Read More <i class="fa fa-long-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- LATEST-NEWS-SINGLE-POST END -->
                            </div>
                            <!-- LATEST-NEWS-CAROUSEL START -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- LATEST-NEWS-AREA END -->
@endsection
