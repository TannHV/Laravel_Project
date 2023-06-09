@extends('layout.master')

@section('body')
<!-- Carousel Start -->
<div class="container-fluid mb-3">
    <div class="row px-xl-5">
        <div class="col-lg-8">
            <div id="header-carousel" class="carousel slide carousel-fade mb-30 mb-lg-0" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#header-carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#header-carousel" data-slide-to="1"></li>
                    <li data-target="#header-carousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item position-relative active" style="height: 430px;">
                        <img class="position-absolute w-100 h-100" src="https://lh3.googleusercontent.com/QNMEeFBvYsD0jw33v_YiQqxLOWgJYESb0KL_4cIgMbIxwi7pVl_g81HzUGJlVUozT40HQoRJS0CyOlkyb5uK7Yc7DrwQxUYhFg=w1920-rw" style="object-fit: cover;">
                    </div>
                    <div class="carousel-item position-relative" style="height: 430px;">
                        <img class="position-absolute w-100 h-100" src="https://lh3.googleusercontent.com/w0v2cLKKzuaXTmYYuZfAfpMfH6_cHOtTO6cYZsjyOCfdZNz7NcyAGR962FteHA5Ob35H53mHNc9eqiNMT5aHAY5G90qOeKxz=w1920-rw" style="object-fit: cover;">
                    </div>
                    <div class="carousel-item position-relative" style="height: 430px;">
                        <img class="position-absolute w-100 h-100" src="https://lh3.googleusercontent.com/NEyGqAS4HkBmVGWbdLxRCJ7v4n7Xz-Xcfs6ffoxCNZMHBg0txwJk7L0FVyBvjZ9mwdFsV915-uAWlcX_JPHD1yJSq2EYfeV6=w1920-rw" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="product-offer mb-30" style="height: 200px;">
                <img class="img-fluid" src="https://lh3.googleusercontent.com/Z4sT1D5h2xiBgKU6Buh4F2v1yAklt76w9D6o2Glzmnabe8aMX3sHEYvwV-21_FPffclZcd0EFwrLXndFEgdkBxbnbNZdY3Vu=w308-rw" alt="">
                <div class="offer-text">
                    <h6 class="text-white text-uppercase">Save 20%</h6>
                    <h3 class="text-white mb-3">Special Offer</h3>
                    <a href="" class="btn btn-primary">Shop Now</a>
                </div>
            </div>
            <div class="product-offer mb-30" style="height: 200px;">
                <img class="img-fluid" src="https://lh3.googleusercontent.com/mACLn7gvURPvpnBi8UMNxTnVxEJ11M03HNFD3FYfxwfBiRmp27-mVhlS9VOFpBq8pfbYSqKV32bq_0Am7uwPqwP6I8LqSWfWqw=w308-rw" alt="">
                <div class="offer-text">
                    <h6 class="text-white text-uppercase">Save 20%</h6>
                    <h3 class="text-white mb-3">Special Offer</h3>
                    <a href="" class="btn btn-primary">Shop Now</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Carousel End -->
<!-- Featured Start -->
<div class="container-fluid pt-5">
    <div class="row px-xl-5 pb-3">
        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
            <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                <h1 class="fa fa-check text-primary m-0 mr-3"></h1>
                <h5 class="font-weight-semi-bold m-0">Quality Product</h5>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
            <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                <h1 class="fa fa-shipping-fast text-primary m-0 mr-2"></h1>
                <h5 class="font-weight-semi-bold m-0">Free Shipping</h5>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
            <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                <h1 class="fas fa-exchange-alt text-primary m-0 mr-3"></h1>
                <h5 class="font-weight-semi-bold m-0">14-Day Return</h5>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
            <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                <h1 class="fa fa-phone-volume text-primary m-0 mr-3"></h1>
                <h5 class="font-weight-semi-bold m-0">24/7 Support</h5>
            </div>
        </div>
    </div>
</div>
<!-- Featured End -->
<!-- Categories Start -->
<div class="container-fluid pt-5">
    <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Categories</span></h2>
    <div class="row px-xl-5 pb-3">
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
            <a class="text-decoration-none" href="/category/asus">
                <div class="cat-item d-flex align-items-center mb-4">
                    <div class="overflow-hidden" style="width: 100px; height: 100px;">
                        <img class="img-fluid" src="https://www.freepnglogos.com/uploads/logo-asus-png/logo-asustek-computer-vector-0.png" alt="">
                    </div>
                    <div class="flex-fill pl-3">
                        <h6>Asus</h6>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
            <a class="text-decoration-none" href="/category/apple">
                <div class="cat-item img-zoom d-flex align-items-center mb-4">
                    <div class="overflow-hidden" style="width: 100px; height: 100px;">
                        <img class="img-fluid" src="https://www.freepnglogos.com/uploads/apple-logo-png/file-apple-logo-black-svg-wikimedia-commons-1.png" alt="">
                    </div>
                    <div class="flex-fill pl-3">
                        <h6>Apple</h6>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
            <a class="text-decoration-none" href="/category/acer">
                <div class="cat-item img-zoom d-flex align-items-center mb-4">
                    <div class="overflow-hidden" style="width: 100px; height: 100px;">
                        <img class="img-fluid" src="https://www.shareicon.net/data/512x512/2016/06/24/614402_acer_512x512.png" alt="">
                    </div>
                    <div class="flex-fill pl-3">
                        <h6>Acer</h6>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
            <a class="text-decoration-none" href="/category/hp">
                <div class="cat-item img-zoom d-flex align-items-center mb-4">
                    <div class="overflow-hidden" style="width: 100px; height: 100px;">
                        <img class="img-fluid" src="https://upload.wikimedia.org/wikipedia/commons/6/6f/HP_logo_630x630.png" alt="">
                    </div>
                    <div class="flex-fill pl-3">
                        <h6>HP</h6>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>
<!-- Categories End -->
<!-- Products Start -->
<div class="container-fluid pt-5 pb-3">
    <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Featured
            Products</span></h2>
    <div class="row px-xl-5">
        @if ($data)
        @foreach ($data as $key => $value)
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
            <div class="product-item bg-light mb-4">
                <div class="product-img position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="{{ $value->image}}" alt="">
                    <div class="product-action">
                        <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-shopping-cart"></i></a>
                        <a class="btn btn-outline-dark btn-square" href=""><i class="far fa-heart"></i></a>
                        <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-sync-alt"></i></a>
                        <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-search"></i></a>
                    </div>
                </div>
                <div class="text-center py-4">
                    <a class="h6 text-decoration-none text-truncate" href="/product/{{ $value->slug }}">{{ $value->name }}</a>
                    <div class="d-flex align-items-center justify-content-center mt-2">
                        <h5>${{number_format( $value->price,2)}}</h5>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        @endif
    </div>
</div>
<!-- Products End -->
<!-- Offer Start -->
<div class="container-fluid pt-5 pb-3">
    <div class="row px-xl-5">
        <div class="col-md-6">
            <div class="product-offer mb-30" style="height: 300px;">
                <img class="img-fluid" src="https://lh3.googleusercontent.com/QNxpSZ_c4tV1D8fXa7_4Ut12l3Jpjd6NO5Ptfik9qhy2GsE66ZIlyTPFXl4xXunUV_sIeAWQKpzxkYe0W01K9Gc83AlN5Ok=w411-rw" alt="">
                <div class="offer-text">
                    <h6 class="text-white text-uppercase">Save 20%</h6>
                    <h3 class="text-white mb-3">Special Offer</h3>
                    <a href="" class="btn btn-primary">Shop Now</a>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="product-offer mb-30" style="height: 300px;">
                <img class="img-fluid" src="https://lh3.googleusercontent.com/BMj_yO8RGUU6hWrCNzr1mAX_EuCPeBUNopKvJgjpZwp9yQbaDHeF2NsRdEYi-IDt-AyRi1FtDyjjlMRkpQckKzowbEc6iYIwhQ=w411-rw" alt="">
                <div class="offer-text">
                    <h6 class="text-white text-uppercase">Save 20%</h6>
                    <h3 class="text-white mb-3">Special Offer</h3>
                    <a href="" class="btn btn-primary">Shop Now</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Vendor Start -->
<div class="container-fluid py-5">
    <div class="row px-xl-5">
        <div class="col">
            <div class="owl-carousel vendor-carousel">
                <div class="bg-light p-4">
                    <img src="/assets/img/vendor-1.jpg" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="/assets/img/vendor-2.jpg" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="/assets/img/vendor-3.jpg" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="/assets/img/vendor-4.jpg" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="/assets/img/vendor-5.jpg" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="/assets/img/vendor-6.jpg" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="/assets/img/vendor-7.jpg" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="/assets/img/vendor-8.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Vendor End -->
@endsection
