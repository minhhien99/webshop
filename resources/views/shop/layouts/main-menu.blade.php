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
<section class="header-bottom-area ">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
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
                <section class="page-title contant-page-title " style="margin-top: 15px " >
                    @foreach ($blogs as $blog)
                <a href="">
                        <div class="bg-secondary">
                            <h1 class="">Tin Tức</h1>
                        <div class="">
                        <div >
                            <h4 class="my-2"><b class="text-dark ">{{$blog->title}}</b></h4>
                        <div>
                            <img class="img-fluid" style="height: 230px;" src="{{ asset($blog->image) }}" alt="{{$blog->title}}">
                        </div>
                    <p class="">By: {{$blog->user_id}}</p>
                        </div>
                    </a>
                    @endforeach
                </section>
                <!-- LEFT-CATEGORY-MENU END -->
            </div>
        </div>
    </div>
</section>
