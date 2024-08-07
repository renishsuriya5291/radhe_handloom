@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="slider-area section-padding-1">
    <div class="slider-active owl-carousel nav-style-1">
        <div class="single-slider slider-height-1 bg-paleturquoise">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-12 col-sm-6">
                        <div class="slider-content slider-animated-1">
                            <h1 class="animated">Wooden Craft</h1>
                            <p class="animated">Lorem Ipsum is simply dummy text of the printing and typesetting
                                industry. It is a long established fact that a reader.</p>
                            <div class="slider-btn btn-hover">
                                <a class="animated" href="shop.html">Shop Now <i class="sli sli-basket-loaded"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-12 col-sm-6">
                        <div class="slider-single-img slider-animated-1">
                            <img class="animated" src="assets/img/slider/slider-hm1-1.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single-slider slider-height-1 bg-paleturquoise">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-12 col-sm-6">
                        <div class="slider-content slider-animated-1">
                            <h1 class="animated">Wooden Craft</h1>
                            <p class="animated">Lorem Ipsum is simply dummy text of the printing and typesetting
                                industry. It is a long established fact that a reader.</p>
                            <div class="slider-btn btn-hover">
                                <a class="animated" href="shop.html">Shop Now <i class="sli sli-basket-loaded"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-12 col-sm-6">
                        <div class="slider-single-img slider-animated-1">
                            <img class="animated" src="assets/img/slider/slider-hm1-2.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="banner-area pt-100 pb-65">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="single-banner mb-30 scroll-zoom">
                    <a href="product-details.html"><img class="animated" src="assets/img/banner/banner-1.png"
                            alt=""></a>
                    <div class="banner-content banner-position-1">
                        <h3>35% off <br>Black Monday</h3>
                        <h2>Lighting For <br> Home.</h2>
                        <a href="product-details.html">Shop Now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="single-banner mb-30 scroll-zoom">
                    <a href="product-details.html"><img class="animated" src="assets/img/banner/banner-2.png"
                            alt=""></a>
                    <div class="banner-content banner-position-2">
                        <h3>15% off</h3>
                        <h2>Table Shiner <br>Moving.</h2>
                        <a href="product-details.html">Shop Now</a>
                    </div>
                </div>
                <div class="single-banner mb-30 scroll-zoom">
                    <a href="product-details.html"><img class="animated" src="assets/img/banner/banner-3.png"
                            alt=""></a>
                    <div class="banner-content banner-position-2">
                        <h3>Black Friday</h3>
                        <h2>Wall Lighting <br>Black.</h2>
                        <a href="product-details.html">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>






<div class="testimonial-area pt-80 pb-95 section-margin-1" style="background-image: url(assets/img/bg/bg-1.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 ms-auto me-auto">
                <div class="testimonial-active owl-carousel nav-style-1">
                    <div class="single-testimonial text-center">
                        <img src="assets/img/testimonial/testi-1.png" alt="">
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                            suffered alteration in some form, by injected humour, or randomised words which
                            don't look even slightly believable. Lorem ipsum dolor sit amet, consectetur
                            adipiscing elit, didunt.</p>
                        <div class="client-info">
                            <img src="assets/img/icon-img/testi.png" alt="">
                            <h5>Nikolas Dehlli</h5>
                        </div>
                    </div>
                    <div class="single-testimonial text-center">
                        <img src="assets/img/testimonial/testi-2.png" alt="">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                            exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat Duis aute irure
                            dolor in reprehenderit.</p>
                        <div class="client-info">
                            <img src="assets/img/icon-img/testi.png" alt="">
                            <h5>Grace Alvarado</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>







<div class="product-area pb-70 pt-10">
    <div class="container">
        <div class="section-title text-center pb-40">
            <h2>All Products</h2>
            <p> Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of
                classical</p>
        </div>
        <div class="product-tab-list nav pb-60 text-center">
            <a class="active" href="#product-1" data-bs-toggle="tab">
                <h4>Home appliance </h4>
            </a>
            <a href="#product-2" data-bs-toggle="tab">
                <h4>Kitchen appliance </h4>
            </a>
            <a href="#product-3" data-bs-toggle="tab">
                <h4>Lamps</h4>
            </a>
        </div>
        <div class="tab-content jump-2">
            <div id="product-1" class="tab-pane active">
                <div class="ht-products product-slider-active owl-carousel">
                    <!--Product Start-->
                    <div class="ht-product ht-product-action-on-hover ht-product-category-right-bottom mb-30">
                        <div class="ht-product-inner">
                            <div class="ht-product-image-wrap">
                                <a href="product-details.html" class="ht-product-image"> <img
                                        src="assets/img/product/product-1.jpg" alt="Universal Product Style">
                                </a>
                                <div class="ht-product-action">
                                    <ul>
                                        <li><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                                    class="sli sli-magnifier"></i><span
                                                    class="ht-product-action-tooltip">Quick View</span></a></li>
                                        <li><a href="#"><i class="sli sli-heart"></i><span
                                                    class="ht-product-action-tooltip">Add to Wishlist</span></a>
                                        </li>
                                        <li><a href="#"><i class="sli sli-refresh"></i><span
                                                    class="ht-product-action-tooltip">Add to Compare</span></a>
                                        </li>
                                        <li><a href="#"><i class="sli sli-bag"></i><span
                                                    class="ht-product-action-tooltip">Add to Cart</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="ht-product-content">
                                <div class="ht-product-content-inner">
                                    <div class="ht-product-categories"><a href="#">Chair</a></div>
                                    <h4 class="ht-product-title"><a href="product-details.html">Demo Product
                                            Name</a></h4>
                                    <div class="ht-product-price">
                                        <span class="new">$60.00</span>
                                        <span class="old">$80.00</span>
                                    </div>
                                    <div class="ht-product-ratting-wrap">
                                        <span class="ht-product-ratting">
                                            <span class="ht-product-user-ratting" style="width: 100%;">
                                                <i class="sli sli-star"></i>
                                                <i class="sli sli-star"></i>
                                                <i class="sli sli-star"></i>
                                                <i class="sli sli-star"></i>
                                                <i class="sli sli-star"></i>
                                            </span>
                                            <i class="sli sli-star"></i>
                                            <i class="sli sli-star"></i>
                                            <i class="sli sli-star"></i>
                                            <i class="sli sli-star"></i>
                                            <i class="sli sli-star"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="ht-product-action">
                                    <ul>
                                        <li><a href="#"><i class="sli sli-magnifier"></i><span
                                                    class="ht-product-action-tooltip">Quick View</span></a></li>
                                        <li><a href="#"><i class="sli sli-heart"></i><span
                                                    class="ht-product-action-tooltip">Add to Wishlist</span></a>
                                        </li>
                                        <li><a href="#"><i class="sli sli-refresh"></i><span
                                                    class="ht-product-action-tooltip">Add to Compare</span></a>
                                        </li>
                                        <li><a href="#"><i class="sli sli-bag"></i><span
                                                    class="ht-product-action-tooltip">Add to Cart</span></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="ht-product-countdown-wrap">
                                    <div class="ht-product-countdown" data-countdown="2020/01/01"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Product End-->
                    <!--Product Start-->
                    <div class="ht-product ht-product-action-on-hover ht-product-category-right-bottom mb-30">
                        <div class="ht-product-inner">
                            <div class="ht-product-image-wrap">
                                <a href="product-details.html" class="ht-product-image"> <img
                                        src="assets/img/product/product-2.jpg" alt="Universal Product Style">
                                </a>
                                <div class="ht-product-action">
                                    <ul>
                                        <li><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                                    class="sli sli-magnifier"></i><span
                                                    class="ht-product-action-tooltip">Quick View</span></a></li>
                                        <li><a href="#"><i class="sli sli-heart"></i><span
                                                    class="ht-product-action-tooltip">Add to Wishlist</span></a>
                                        </li>
                                        <li><a href="#"><i class="sli sli-refresh"></i><span
                                                    class="ht-product-action-tooltip">Add to Compare</span></a>
                                        </li>
                                        <li><a href="#"><i class="sli sli-bag"></i><span
                                                    class="ht-product-action-tooltip">Add to Cart</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="ht-product-content">
                                <div class="ht-product-content-inner">
                                    <div class="ht-product-categories"><a href="#">Lamp </a></div>
                                    <h4 class="ht-product-title"><a href="product-details.html">Demo Product
                                            Name</a></h4>
                                    <div class="ht-product-price">
                                        <span class="new">$90.00</span>
                                    </div>
                                    <div class="ht-product-ratting-wrap">
                                        <span class="ht-product-ratting">
                                            <span class="ht-product-user-ratting" style="width: 100%;">
                                                <i class="sli sli-star"></i>
                                                <i class="sli sli-star"></i>
                                                <i class="sli sli-star"></i>
                                                <i class="sli sli-star"></i>
                                                <i class="sli sli-star"></i>
                                            </span>
                                            <i class="sli sli-star"></i>
                                            <i class="sli sli-star"></i>
                                            <i class="sli sli-star"></i>
                                            <i class="sli sli-star"></i>
                                            <i class="sli sli-star"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="ht-product-action">
                                    <ul>
                                        <li><a href="#"><i class="sli sli-magnifier"></i><span
                                                    class="ht-product-action-tooltip">Quick View</span></a></li>
                                        <li><a href="#"><i class="sli sli-heart"></i><span
                                                    class="ht-product-action-tooltip">Add to Wishlist</span></a>
                                        </li>
                                        <li><a href="#"><i class="sli sli-refresh"></i><span
                                                    class="ht-product-action-tooltip">Add to Compare</span></a>
                                        </li>
                                        <li><a href="#"><i class="sli sli-bag"></i><span
                                                    class="ht-product-action-tooltip">Add to Cart</span></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="ht-product-countdown-wrap">
                                    <div class="ht-product-countdown" data-countdown="2020/01/01"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Product End-->
                    <!--Product Start-->
                    <div class="ht-product ht-product-action-on-hover ht-product-category-right-bottom mb-30">
                        <div class="ht-product-inner">
                            <div class="ht-product-image-wrap">
                                <a href="product-details.html" class="ht-product-image"> <img
                                        src="assets/img/product/product-3.jpg" alt="Universal Product Style">
                                </a>
                                <div class="ht-product-action">
                                    <ul>
                                        <li><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                                    class="sli sli-magnifier"></i><span
                                                    class="ht-product-action-tooltip">Quick View</span></a></li>
                                        <li><a href="#"><i class="sli sli-heart"></i><span
                                                    class="ht-product-action-tooltip">Add to Wishlist</span></a>
                                        </li>
                                        <li><a href="#"><i class="sli sli-refresh"></i><span
                                                    class="ht-product-action-tooltip">Add to Compare</span></a>
                                        </li>
                                        <li><a href="#"><i class="sli sli-bag"></i><span
                                                    class="ht-product-action-tooltip">Add to Cart</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="ht-product-content">
                                <div class="ht-product-content-inner">
                                    <div class="ht-product-categories"><a href="#">Chair</a></div>
                                    <h4 class="ht-product-title"><a href="product-details.html">Demo Product
                                            Name</a></h4>
                                    <div class="ht-product-price">
                                        <span class="new">$40.00</span>
                                        <span class="old">$70.00</span>
                                    </div>
                                    <div class="ht-product-ratting-wrap">
                                        <span class="ht-product-ratting">
                                            <span class="ht-product-user-ratting" style="width: 100%;">
                                                <i class="sli sli-star"></i>
                                                <i class="sli sli-star"></i>
                                                <i class="sli sli-star"></i>
                                                <i class="sli sli-star"></i>
                                                <i class="sli sli-star"></i>
                                            </span>
                                            <i class="sli sli-star"></i>
                                            <i class="sli sli-star"></i>
                                            <i class="sli sli-star"></i>
                                            <i class="sli sli-star"></i>
                                            <i class="sli sli-star"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="ht-product-action">
                                    <ul>
                                        <li><a href="#"><i class="sli sli-magnifier"></i><span
                                                    class="ht-product-action-tooltip">Quick View</span></a></li>
                                        <li><a href="#"><i class="sli sli-heart"></i><span
                                                    class="ht-product-action-tooltip">Add to Wishlist</span></a>
                                        </li>
                                        <li><a href="#"><i class="sli sli-refresh"></i><span
                                                    class="ht-product-action-tooltip">Add to Compare</span></a>
                                        </li>
                                        <li><a href="#"><i class="sli sli-bag"></i><span
                                                    class="ht-product-action-tooltip">Add to Cart</span></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="ht-product-countdown-wrap">
                                    <div class="ht-product-countdown" data-countdown="2020/01/01"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Product End-->
                    <!--Product Start-->
                    <div class="ht-product ht-product-action-on-hover ht-product-category-right-bottom mb-30">
                        <div class="ht-product-inner">
                            <div class="ht-product-image-wrap">
                                <a href="product-details.html" class="ht-product-image"> <img
                                        src="assets/img/product/product-4.jpg" alt="Universal Product Style">
                                </a>
                                <div class="ht-product-action">
                                    <ul>
                                        <li><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                                    class="sli sli-magnifier"></i><span
                                                    class="ht-product-action-tooltip">Quick View</span></a></li>
                                        <li><a href="#"><i class="sli sli-heart"></i><span
                                                    class="ht-product-action-tooltip">Add to Wishlist</span></a>
                                        </li>
                                        <li><a href="#"><i class="sli sli-refresh"></i><span
                                                    class="ht-product-action-tooltip">Add to Compare</span></a>
                                        </li>
                                        <li><a href="#"><i class="sli sli-bag"></i><span
                                                    class="ht-product-action-tooltip">Add to Cart</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="ht-product-content">
                                <div class="ht-product-content-inner">
                                    <div class="ht-product-categories"><a href="#">Clock</a></div>
                                    <h4 class="ht-product-title"><a href="product-details.html">Demo Product
                                            Name</a></h4>
                                    <div class="ht-product-price">
                                        <span class="new">$50.00</span>
                                    </div>
                                    <div class="ht-product-ratting-wrap">
                                        <span class="ht-product-ratting">
                                            <span class="ht-product-user-ratting" style="width: 100%;">
                                                <i class="sli sli-star"></i>
                                                <i class="sli sli-star"></i>
                                                <i class="sli sli-star"></i>
                                                <i class="sli sli-star"></i>
                                                <i class="sli sli-star"></i>
                                            </span>
                                            <i class="sli sli-star"></i>
                                            <i class="sli sli-star"></i>
                                            <i class="sli sli-star"></i>
                                            <i class="sli sli-star"></i>
                                            <i class="sli sli-star"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="ht-product-action">
                                    <ul>
                                        <li><a href="#"><i class="sli sli-magnifier"></i><span
                                                    class="ht-product-action-tooltip">Quick View</span></a></li>
                                        <li><a href="#"><i class="sli sli-heart"></i><span
                                                    class="ht-product-action-tooltip">Add to Wishlist</span></a>
                                        </li>
                                        <li><a href="#"><i class="sli sli-refresh"></i><span
                                                    class="ht-product-action-tooltip">Add to Compare</span></a>
                                        </li>
                                        <li><a href="#"><i class="sli sli-bag"></i><span
                                                    class="ht-product-action-tooltip">Add to Cart</span></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="ht-product-countdown-wrap">
                                    <div class="ht-product-countdown" data-countdown="2020/01/01"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Product End-->
                    <!--Product Start-->
                    <div class="ht-product ht-product-action-on-hover ht-product-category-right-bottom mb-30">
                        <div class="ht-product-inner">
                            <div class="ht-product-image-wrap">
                                <a href="product-details.html" class="ht-product-image"> <img
                                        src="assets/img/product/product-2.jpg" alt="Universal Product Style">
                                </a>
                                <div class="ht-product-action">
                                    <ul>
                                        <li><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                                    class="sli sli-magnifier"></i><span
                                                    class="ht-product-action-tooltip">Quick View</span></a></li>
                                        <li><a href="#"><i class="sli sli-heart"></i><span
                                                    class="ht-product-action-tooltip">Add to Wishlist</span></a>
                                        </li>
                                        <li><a href="#"><i class="sli sli-refresh"></i><span
                                                    class="ht-product-action-tooltip">Add to Compare</span></a>
                                        </li>
                                        <li><a href="#"><i class="sli sli-bag"></i><span
                                                    class="ht-product-action-tooltip">Add to Cart</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="ht-product-content">
                                <div class="ht-product-content-inner">
                                    <div class="ht-product-categories"><a href="#">Lamp </a></div>
                                    <h4 class="ht-product-title"><a href="product-details.html">Demo Product
                                            Name</a></h4>
                                    <div class="ht-product-price">
                                        <span class="new">$90.00</span>
                                    </div>
                                    <div class="ht-product-ratting-wrap">
                                        <span class="ht-product-ratting">
                                            <span class="ht-product-user-ratting" style="width: 100%;">
                                                <i class="sli sli-star"></i>
                                                <i class="sli sli-star"></i>
                                                <i class="sli sli-star"></i>
                                                <i class="sli sli-star"></i>
                                                <i class="sli sli-star"></i>
                                            </span>
                                            <i class="sli sli-star"></i>
                                            <i class="sli sli-star"></i>
                                            <i class="sli sli-star"></i>
                                            <i class="sli sli-star"></i>
                                            <i class="sli sli-star"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="ht-product-action">
                                    <ul>
                                        <li><a href="#"><i class="sli sli-magnifier"></i><span
                                                    class="ht-product-action-tooltip">Quick View</span></a></li>
                                        <li><a href="#"><i class="sli sli-heart"></i><span
                                                    class="ht-product-action-tooltip">Add to Wishlist</span></a>
                                        </li>
                                        <li><a href="#"><i class="sli sli-refresh"></i><span
                                                    class="ht-product-action-tooltip">Add to Compare</span></a>
                                        </li>
                                        <li><a href="#"><i class="sli sli-bag"></i><span
                                                    class="ht-product-action-tooltip">Add to Cart</span></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="ht-product-countdown-wrap">
                                    <div class="ht-product-countdown" data-countdown="2020/01/01"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Product End-->
                </div>
            </div>
            <div id="product-2" class="tab-pane">
                <div class="ht-products product-slider-active owl-carousel">
                    <!--Product Start-->
                    <div class="ht-product ht-product-action-on-hover ht-product-category-right-bottom mb-30">
                        <div class="ht-product-inner">
                            <div class="ht-product-image-wrap">
                                <a href="product-details.html" class="ht-product-image"> <img
                                        src="assets/img/product/product-5.jpg" alt="Universal Product Style">
                                </a>
                                <div class="ht-product-action">
                                    <ul>
                                        <li><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                                    class="sli sli-magnifier"></i><span
                                                    class="ht-product-action-tooltip">Quick View</span></a></li>
                                        <li><a href="#"><i class="sli sli-heart"></i><span
                                                    class="ht-product-action-tooltip">Add to Wishlist</span></a>
                                        </li>
                                        <li><a href="#"><i class="sli sli-refresh"></i><span
                                                    class="ht-product-action-tooltip">Add to Compare</span></a>
                                        </li>
                                        <li><a href="#"><i class="sli sli-bag"></i><span
                                                    class="ht-product-action-tooltip">Add to Cart</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="ht-product-content">
                                <div class="ht-product-content-inner">
                                    <div class="ht-product-categories"><a href="#">Clock</a></div>
                                    <h4 class="ht-product-title"><a href="product-details.html">Demo Product
                                            Name</a></h4>
                                    <div class="ht-product-price">
                                        <span class="new">$60.00</span>
                                    </div>
                                    <div class="ht-product-ratting-wrap">
                                        <span class="ht-product-ratting">
                                            <span class="ht-product-user-ratting" style="width: 100%;">
                                                <i class="sli sli-star"></i>
                                                <i class="sli sli-star"></i>
                                                <i class="sli sli-star"></i>
                                                <i class="sli sli-star"></i>
                                                <i class="sli sli-star"></i>
                                            </span>
                                            <i class="sli sli-star"></i>
                                            <i class="sli sli-star"></i>
                                            <i class="sli sli-star"></i>
                                            <i class="sli sli-star"></i>
                                            <i class="sli sli-star"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="ht-product-action">
                                    <ul>
                                        <li><a href="#"><i class="sli sli-magnifier"></i><span
                                                    class="ht-product-action-tooltip">Quick View</span></a></li>
                                        <li><a href="#"><i class="sli sli-heart"></i><span
                                                    class="ht-product-action-tooltip">Add to Wishlist</span></a>
                                        </li>
                                        <li><a href="#"><i class="sli sli-refresh"></i><span
                                                    class="ht-product-action-tooltip">Add to Compare</span></a>
                                        </li>
                                        <li><a href="#"><i class="sli sli-bag"></i><span
                                                    class="ht-product-action-tooltip">Add to Cart</span></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="ht-product-countdown-wrap">
                                    <div class="ht-product-countdown" data-countdown="2020/01/01"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Product End-->
                    <!--Product Start-->
                    <div class="ht-product ht-product-action-on-hover ht-product-category-right-bottom mb-30">
                        <div class="ht-product-inner">
                            <div class="ht-product-image-wrap">
                                <a href="product-details.html" class="ht-product-image"> <img
                                        src="assets/img/product/product-6.jpg" alt="Universal Product Style">
                                </a>
                                <div class="ht-product-action">
                                    <ul>
                                        <li><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                                    class="sli sli-magnifier"></i><span
                                                    class="ht-product-action-tooltip">Quick View</span></a></li>
                                        <li><a href="#"><i class="sli sli-heart"></i><span
                                                    class="ht-product-action-tooltip">Add to Wishlist</span></a>
                                        </li>
                                        <li><a href="#"><i class="sli sli-refresh"></i><span
                                                    class="ht-product-action-tooltip">Add to Compare</span></a>
                                        </li>
                                        <li><a href="#"><i class="sli sli-bag"></i><span
                                                    class="ht-product-action-tooltip">Add to Cart</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="ht-product-content">
                                <div class="ht-product-content-inner">
                                    <div class="ht-product-categories"><a href="#">Lamp </a></div>
                                    <h4 class="ht-product-title"><a href="product-details.html">Demo Product
                                            Name</a></h4>
                                    <div class="ht-product-price">
                                        <span class="new">$50.00</span>
                                        <span class="old">$80.00</span>
                                    </div>
                                    <div class="ht-product-ratting-wrap">
                                        <span class="ht-product-ratting">
                                            <span class="ht-product-user-ratting" style="width: 100%;">
                                                <i class="sli sli-star"></i>
                                                <i class="sli sli-star"></i>
                                                <i class="sli sli-star"></i>
                                                <i class="sli sli-star"></i>
                                                <i class="sli sli-star"></i>
                                            </span>
                                            <i class="sli sli-star"></i>
                                            <i class="sli sli-star"></i>
                                            <i class="sli sli-star"></i>
                                            <i class="sli sli-star"></i>
                                            <i class="sli sli-star"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="ht-product-action">
                                    <ul>
                                        <li><a href="#"><i class="sli sli-magnifier"></i><span
                                                    class="ht-product-action-tooltip">Quick View</span></a></li>
                                        <li><a href="#"><i class="sli sli-heart"></i><span
                                                    class="ht-product-action-tooltip">Add to Wishlist</span></a>
                                        </li>
                                        <li><a href="#"><i class="sli sli-refresh"></i><span
                                                    class="ht-product-action-tooltip">Add to Compare</span></a>
                                        </li>
                                        <li><a href="#"><i class="sli sli-bag"></i><span
                                                    class="ht-product-action-tooltip">Add to Cart</span></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="ht-product-countdown-wrap">
                                    <div class="ht-product-countdown" data-countdown="2020/01/01"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Product End-->
                    <!--Product Start-->
                    <div class="ht-product ht-product-action-on-hover ht-product-category-right-bottom mb-30">
                        <div class="ht-product-inner">
                            <div class="ht-product-image-wrap">
                                <a href="product-details.html" class="ht-product-image"> <img
                                        src="assets/img/product/product-7.jpg" alt="Universal Product Style">
                                </a>
                                <div class="ht-product-action">
                                    <ul>
                                        <li><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                                    class="sli sli-magnifier"></i><span
                                                    class="ht-product-action-tooltip">Quick View</span></a></li>
                                        <li><a href="#"><i class="sli sli-heart"></i><span
                                                    class="ht-product-action-tooltip">Add to Wishlist</span></a>
                                        </li>
                                        <li><a href="#"><i class="sli sli-refresh"></i><span
                                                    class="ht-product-action-tooltip">Add to Compare</span></a>
                                        </li>
                                        <li><a href="#"><i class="sli sli-bag"></i><span
                                                    class="ht-product-action-tooltip">Add to Cart</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="ht-product-content">
                                <div class="ht-product-content-inner">
                                    <div class="ht-product-categories"><a href="#">Chair</a></div>
                                    <h4 class="ht-product-title"><a href="product-details.html">Demo Product
                                            Name</a></h4>
                                    <div class="ht-product-price">
                                        <span class="new">$30.00</span>
                                    </div>
                                    <div class="ht-product-ratting-wrap">
                                        <span class="ht-product-ratting">
                                            <span class="ht-product-user-ratting" style="width: 100%;">
                                                <i class="sli sli-star"></i>
                                                <i class="sli sli-star"></i>
                                                <i class="sli sli-star"></i>
                                                <i class="sli sli-star"></i>
                                                <i class="sli sli-star"></i>
                                            </span>
                                            <i class="sli sli-star"></i>
                                            <i class="sli sli-star"></i>
                                            <i class="sli sli-star"></i>
                                            <i class="sli sli-star"></i>
                                            <i class="sli sli-star"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="ht-product-action">
                                    <ul>
                                        <li><a href="#"><i class="sli sli-magnifier"></i><span
                                                    class="ht-product-action-tooltip">Quick View</span></a></li>
                                        <li><a href="#"><i class="sli sli-heart"></i><span
                                                    class="ht-product-action-tooltip">Add to Wishlist</span></a>
                                        </li>
                                        <li><a href="#"><i class="sli sli-refresh"></i><span
                                                    class="ht-product-action-tooltip">Add to Compare</span></a>
                                        </li>
                                        <li><a href="#"><i class="sli sli-bag"></i><span
                                                    class="ht-product-action-tooltip">Add to Cart</span></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="ht-product-countdown-wrap">
                                    <div class="ht-product-countdown" data-countdown="2020/01/01"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Product End-->
                    <!--Product Start-->
                    <div class="ht-product ht-product-action-on-hover ht-product-category-right-bottom mb-30">
                        <div class="ht-product-inner">
                            <div class="ht-product-image-wrap">
                                <a href="product-details.html" class="ht-product-image"> <img
                                        src="assets/img/product/product-8.jpg" alt="Universal Product Style">
                                </a>
                                <div class="ht-product-action">
                                    <ul>
                                        <li><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                                    class="sli sli-magnifier"></i><span
                                                    class="ht-product-action-tooltip">Quick View</span></a></li>
                                        <li><a href="#"><i class="sli sli-heart"></i><span
                                                    class="ht-product-action-tooltip">Add to Wishlist</span></a>
                                        </li>
                                        <li><a href="#"><i class="sli sli-refresh"></i><span
                                                    class="ht-product-action-tooltip">Add to Compare</span></a>
                                        </li>
                                        <li><a href="#"><i class="sli sli-bag"></i><span
                                                    class="ht-product-action-tooltip">Add to Cart</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="ht-product-content">
                                <div class="ht-product-content-inner">
                                    <div class="ht-product-categories"><a href="#">Chair</a></div>
                                    <h4 class="ht-product-title"><a href="product-details.html">Demo Product
                                            Name</a></h4>
                                    <div class="ht-product-price">
                                        <span class="new">$60.00</span>
                                        <span class="old">$90.00</span>
                                    </div>
                                    <div class="ht-product-ratting-wrap">
                                        <span class="ht-product-ratting">
                                            <span class="ht-product-user-ratting" style="width: 100%;">
                                                <i class="sli sli-star"></i>
                                                <i class="sli sli-star"></i>
                                                <i class="sli sli-star"></i>
                                                <i class="sli sli-star"></i>
                                                <i class="sli sli-star"></i>
                                            </span>
                                            <i class="sli sli-star"></i>
                                            <i class="sli sli-star"></i>
                                            <i class="sli sli-star"></i>
                                            <i class="sli sli-star"></i>
                                            <i class="sli sli-star"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="ht-product-action">
                                    <ul>
                                        <li><a href="#"><i class="sli sli-magnifier"></i><span
                                                    class="ht-product-action-tooltip">Quick View</span></a></li>
                                        <li><a href="#"><i class="sli sli-heart"></i><span
                                                    class="ht-product-action-tooltip">Add to Wishlist</span></a>
                                        </li>
                                        <li><a href="#"><i class="sli sli-refresh"></i><span
                                                    class="ht-product-action-tooltip">Add to Compare</span></a>
                                        </li>
                                        <li><a href="#"><i class="sli sli-bag"></i><span
                                                    class="ht-product-action-tooltip">Add to Cart</span></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="ht-product-countdown-wrap">
                                    <div class="ht-product-countdown" data-countdown="2020/01/01"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Product End-->
                    <!--Product Start-->
                    <div class="ht-product ht-product-action-on-hover ht-product-category-right-bottom mb-30">
                        <div class="ht-product-inner">
                            <div class="ht-product-image-wrap">
                                <a href="product-details.html" class="ht-product-image"> <img
                                        src="assets/img/product/product-5.jpg" alt="Universal Product Style">
                                </a>
                                <div class="ht-product-action">
                                    <ul>
                                        <li><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                                    class="sli sli-magnifier"></i><span
                                                    class="ht-product-action-tooltip">Quick View</span></a></li>
                                        <li><a href="#"><i class="sli sli-heart"></i><span
                                                    class="ht-product-action-tooltip">Add to Wishlist</span></a>
                                        </li>
                                        <li><a href="#"><i class="sli sli-refresh"></i><span
                                                    class="ht-product-action-tooltip">Add to Compare</span></a>
                                        </li>
                                        <li><a href="#"><i class="sli sli-bag"></i><span
                                                    class="ht-product-action-tooltip">Add to Cart</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="ht-product-content">
                                <div class="ht-product-content-inner">
                                    <div class="ht-product-categories"><a href="#">Clock</a></div>
                                    <h4 class="ht-product-title"><a href="product-details.html">Demo Product
                                            Name</a></h4>
                                    <div class="ht-product-price">
                                        <span class="new">$60.00</span>
                                    </div>
                                    <div class="ht-product-ratting-wrap">
                                        <span class="ht-product-ratting">
                                            <span class="ht-product-user-ratting" style="width: 100%;">
                                                <i class="sli sli-star"></i>
                                                <i class="sli sli-star"></i>
                                                <i class="sli sli-star"></i>
                                                <i class="sli sli-star"></i>
                                                <i class="sli sli-star"></i>
                                            </span>
                                            <i class="sli sli-star"></i>
                                            <i class="sli sli-star"></i>
                                            <i class="sli sli-star"></i>
                                            <i class="sli sli-star"></i>
                                            <i class="sli sli-star"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="ht-product-action">
                                    <ul>
                                        <li><a href="#"><i class="sli sli-magnifier"></i><span
                                                    class="ht-product-action-tooltip">Quick View</span></a></li>
                                        <li><a href="#"><i class="sli sli-heart"></i><span
                                                    class="ht-product-action-tooltip">Add to Wishlist</span></a>
                                        </li>
                                        <li><a href="#"><i class="sli sli-refresh"></i><span
                                                    class="ht-product-action-tooltip">Add to Compare</span></a>
                                        </li>
                                        <li><a href="#"><i class="sli sli-bag"></i><span
                                                    class="ht-product-action-tooltip">Add to Cart</span></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="ht-product-countdown-wrap">
                                    <div class="ht-product-countdown" data-countdown="2020/01/01"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Product End-->
                </div>
            </div>
            <div id="product-3" class="tab-pane">
                <div class="ht-products product-slider-active owl-carousel">
                    <!--Product Start-->
                    <div class="ht-product ht-product-action-on-hover ht-product-category-right-bottom mb-30">
                        <div class="ht-product-inner">
                            <div class="ht-product-image-wrap">
                                <a href="product-details.html" class="ht-product-image"> <img
                                        src="assets/img/product/product-4.jpg" alt="Universal Product Style">
                                </a>
                                <div class="ht-product-action">
                                    <ul>
                                        <li><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                                    class="sli sli-magnifier"></i><span
                                                    class="ht-product-action-tooltip">Quick View</span></a></li>
                                        <li><a href="#"><i class="sli sli-heart"></i><span
                                                    class="ht-product-action-tooltip">Add to Wishlist</span></a>
                                        </li>
                                        <li><a href="#"><i class="sli sli-refresh"></i><span
                                                    class="ht-product-action-tooltip">Add to Compare</span></a>
                                        </li>
                                        <li><a href="#"><i class="sli sli-bag"></i><span
                                                    class="ht-product-action-tooltip">Add to Cart</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="ht-product-content">
                                <div class="ht-product-content-inner">
                                    <div class="ht-product-categories"><a href="#">Clock</a></div>
                                    <h4 class="ht-product-title"><a href="#">Demo Product Name</a></h4>
                                    <div class="ht-product-price">
                                        <span class="new">$60.00</span>
                                        <span class="old">$80.00</span>
                                    </div>
                                    <div class="ht-product-ratting-wrap">
                                        <span class="ht-product-ratting">
                                            <span class="ht-product-user-ratting" style="width: 100%;">
                                                <i class="sli sli-star"></i>
                                                <i class="sli sli-star"></i>
                                                <i class="sli sli-star"></i>
                                                <i class="sli sli-star"></i>
                                                <i class="sli sli-star"></i>
                                            </span>
                                            <i class="sli sli-star"></i>
                                            <i class="sli sli-star"></i>
                                            <i class="sli sli-star"></i>
                                            <i class="sli sli-star"></i>
                                            <i class="sli sli-star"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="ht-product-action">
                                    <ul>
                                        <li><a href="#"><i class="sli sli-magnifier"></i><span
                                                    class="ht-product-action-tooltip">Quick View</span></a></li>
                                        <li><a href="#"><i class="sli sli-heart"></i><span
                                                    class="ht-product-action-tooltip">Add to Wishlist</span></a>
                                        </li>
                                        <li><a href="#"><i class="sli sli-refresh"></i><span
                                                    class="ht-product-action-tooltip">Add to Compare</span></a>
                                        </li>
                                        <li><a href="#"><i class="sli sli-bag"></i><span
                                                    class="ht-product-action-tooltip">Add to Cart</span></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="ht-product-countdown-wrap">
                                    <div class="ht-product-countdown" data-countdown="2020/01/01"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Product End-->
                    <!--Product Start-->
                    <div class="ht-product ht-product-action-on-hover ht-product-category-right-bottom mb-30">
                        <div class="ht-product-inner">
                            <div class="ht-product-image-wrap">
                                <a href="product-details.html" class="ht-product-image"> <img
                                        src="assets/img/product/product-8.jpg" alt="Universal Product Style">
                                </a>
                                <div class="ht-product-action">
                                    <ul>
                                        <li><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                                    class="sli sli-magnifier"></i><span
                                                    class="ht-product-action-tooltip">Quick View</span></a></li>
                                        <li><a href="#"><i class="sli sli-heart"></i><span
                                                    class="ht-product-action-tooltip">Add to Wishlist</span></a>
                                        </li>
                                        <li><a href="#"><i class="sli sli-refresh"></i><span
                                                    class="ht-product-action-tooltip">Add to Compare</span></a>
                                        </li>
                                        <li><a href="#"><i class="sli sli-bag"></i><span
                                                    class="ht-product-action-tooltip">Add to Cart</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="ht-product-content">
                                <div class="ht-product-content-inner">
                                    <div class="ht-product-categories"><a href="#">Chair </a></div>
                                    <h4 class="ht-product-title"><a href="#">Demo Product Name</a></h4>
                                    <div class="ht-product-price">
                                        <span class="new">$90.00</span>
                                    </div>
                                    <div class="ht-product-ratting-wrap">
                                        <span class="ht-product-ratting">
                                            <span class="ht-product-user-ratting" style="width: 100%;">
                                                <i class="sli sli-star"></i>
                                                <i class="sli sli-star"></i>
                                                <i class="sli sli-star"></i>
                                                <i class="sli sli-star"></i>
                                                <i class="sli sli-star"></i>
                                            </span>
                                            <i class="sli sli-star"></i>
                                            <i class="sli sli-star"></i>
                                            <i class="sli sli-star"></i>
                                            <i class="sli sli-star"></i>
                                            <i class="sli sli-star"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="ht-product-action">
                                    <ul>
                                        <li><a href="#"><i class="sli sli-magnifier"></i><span
                                                    class="ht-product-action-tooltip">Quick View</span></a></li>
                                        <li><a href="#"><i class="sli sli-heart"></i><span
                                                    class="ht-product-action-tooltip">Add to Wishlist</span></a>
                                        </li>
                                        <li><a href="#"><i class="sli sli-refresh"></i><span
                                                    class="ht-product-action-tooltip">Add to Compare</span></a>
                                        </li>
                                        <li><a href="#"><i class="sli sli-bag"></i><span
                                                    class="ht-product-action-tooltip">Add to Cart</span></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="ht-product-countdown-wrap">
                                    <div class="ht-product-countdown" data-countdown="2020/01/01"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Product End-->
                    <!--Product Start-->
                    <div class="ht-product ht-product-action-on-hover ht-product-category-right-bottom mb-30">
                        <div class="ht-product-inner">
                            <div class="ht-product-image-wrap">
                                <a href="product-details.html" class="ht-product-image"> <img
                                        src="assets/img/product/product-2.jpg" alt="Universal Product Style">
                                </a>
                                <div class="ht-product-action">
                                    <ul>
                                        <li><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                                    class="sli sli-magnifier"></i><span
                                                    class="ht-product-action-tooltip">Quick View</span></a></li>
                                        <li><a href="#"><i class="sli sli-heart"></i><span
                                                    class="ht-product-action-tooltip">Add to Wishlist</span></a>
                                        </li>
                                        <li><a href="#"><i class="sli sli-refresh"></i><span
                                                    class="ht-product-action-tooltip">Add to Compare</span></a>
                                        </li>
                                        <li><a href="#"><i class="sli sli-bag"></i><span
                                                    class="ht-product-action-tooltip">Add to Cart</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="ht-product-content">
                                <div class="ht-product-content-inner">
                                    <div class="ht-product-categories"><a href="#">Lamp</a></div>
                                    <h4 class="ht-product-title"><a href="#">Demo Product Name</a></h4>
                                    <div class="ht-product-price">
                                        <span class="new">$40.00</span>
                                        <span class="old">$70.00</span>
                                    </div>
                                    <div class="ht-product-ratting-wrap">
                                        <span class="ht-product-ratting">
                                            <span class="ht-product-user-ratting" style="width: 100%;">
                                                <i class="sli sli-star"></i>
                                                <i class="sli sli-star"></i>
                                                <i class="sli sli-star"></i>
                                                <i class="sli sli-star"></i>
                                                <i class="sli sli-star"></i>
                                            </span>
                                            <i class="sli sli-star"></i>
                                            <i class="sli sli-star"></i>
                                            <i class="sli sli-star"></i>
                                            <i class="sli sli-star"></i>
                                            <i class="sli sli-star"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="ht-product-action">
                                    <ul>
                                        <li><a href="#"><i class="sli sli-magnifier"></i><span
                                                    class="ht-product-action-tooltip">Quick View</span></a></li>
                                        <li><a href="#"><i class="sli sli-heart"></i><span
                                                    class="ht-product-action-tooltip">Add to Wishlist</span></a>
                                        </li>
                                        <li><a href="#"><i class="sli sli-refresh"></i><span
                                                    class="ht-product-action-tooltip">Add to Compare</span></a>
                                        </li>
                                        <li><a href="#"><i class="sli sli-bag"></i><span
                                                    class="ht-product-action-tooltip">Add to Cart</span></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="ht-product-countdown-wrap">
                                    <div class="ht-product-countdown" data-countdown="2020/01/01"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Product End-->
                    <!--Product Start-->
                    <div class="ht-product ht-product-action-on-hover ht-product-category-right-bottom mb-30">
                        <div class="ht-product-inner">
                            <div class="ht-product-image-wrap">
                                <a href="product-details.html" class="ht-product-image"> <img
                                        src="assets/img/product/product-5.jpg" alt="Universal Product Style">
                                </a>
                                <div class="ht-product-action">
                                    <ul>
                                        <li><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                                    class="sli sli-magnifier"></i><span
                                                    class="ht-product-action-tooltip">Quick View</span></a></li>
                                        <li><a href="#"><i class="sli sli-heart"></i><span
                                                    class="ht-product-action-tooltip">Add to Wishlist</span></a>
                                        </li>
                                        <li><a href="#"><i class="sli sli-refresh"></i><span
                                                    class="ht-product-action-tooltip">Add to Compare</span></a>
                                        </li>
                                        <li><a href="#"><i class="sli sli-bag"></i><span
                                                    class="ht-product-action-tooltip">Add to Cart</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="ht-product-content">
                                <div class="ht-product-content-inner">
                                    <div class="ht-product-categories"><a href="#">Clock</a></div>
                                    <h4 class="ht-product-title"><a href="#">Demo Product Name</a></h4>
                                    <div class="ht-product-price">
                                        <span class="new">$50.00</span>
                                    </div>
                                    <div class="ht-product-ratting-wrap">
                                        <span class="ht-product-ratting">
                                            <span class="ht-product-user-ratting" style="width: 100%;">
                                                <i class="sli sli-star"></i>
                                                <i class="sli sli-star"></i>
                                                <i class="sli sli-star"></i>
                                                <i class="sli sli-star"></i>
                                                <i class="sli sli-star"></i>
                                            </span>
                                            <i class="sli sli-star"></i>
                                            <i class="sli sli-star"></i>
                                            <i class="sli sli-star"></i>
                                            <i class="sli sli-star"></i>
                                            <i class="sli sli-star"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="ht-product-action">
                                    <ul>
                                        <li><a href="#"><i class="sli sli-magnifier"></i><span
                                                    class="ht-product-action-tooltip">Quick View</span></a></li>
                                        <li><a href="#"><i class="sli sli-heart"></i><span
                                                    class="ht-product-action-tooltip">Add to Wishlist</span></a>
                                        </li>
                                        <li><a href="#"><i class="sli sli-refresh"></i><span
                                                    class="ht-product-action-tooltip">Add to Compare</span></a>
                                        </li>
                                        <li><a href="#"><i class="sli sli-bag"></i><span
                                                    class="ht-product-action-tooltip">Add to Cart</span></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="ht-product-countdown-wrap">
                                    <div class="ht-product-countdown" data-countdown="2020/01/01"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Product End-->
                    <!--Product Start-->
                    <div class="ht-product ht-product-action-on-hover ht-product-category-right-bottom mb-30">
                        <div class="ht-product-inner">
                            <div class="ht-product-image-wrap">
                                <a href="product-details.html" class="ht-product-image"> <img
                                        src="assets/img/product/product-4.jpg" alt="Universal Product Style">
                                </a>
                                <div class="ht-product-action">
                                    <ul>
                                        <li><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                                    class="sli sli-magnifier"></i><span
                                                    class="ht-product-action-tooltip">Quick View</span></a></li>
                                        <li><a href="#"><i class="sli sli-heart"></i><span
                                                    class="ht-product-action-tooltip">Add to Wishlist</span></a>
                                        </li>
                                        <li><a href="#"><i class="sli sli-refresh"></i><span
                                                    class="ht-product-action-tooltip">Add to Compare</span></a>
                                        </li>
                                        <li><a href="#"><i class="sli sli-bag"></i><span
                                                    class="ht-product-action-tooltip">Add to Cart</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="ht-product-content">
                                <div class="ht-product-content-inner">
                                    <div class="ht-product-categories"><a href="#">Clock</a></div>
                                    <h4 class="ht-product-title"><a href="#">Demo Product Name</a></h4>
                                    <div class="ht-product-price">
                                        <span class="new">$60.00</span>
                                        <span class="old">$80.00</span>
                                    </div>
                                    <div class="ht-product-ratting-wrap">
                                        <span class="ht-product-ratting">
                                            <span class="ht-product-user-ratting" style="width: 100%;">
                                                <i class="sli sli-star"></i>
                                                <i class="sli sli-star"></i>
                                                <i class="sli sli-star"></i>
                                                <i class="sli sli-star"></i>
                                                <i class="sli sli-star"></i>
                                            </span>
                                            <i class="sli sli-star"></i>
                                            <i class="sli sli-star"></i>
                                            <i class="sli sli-star"></i>
                                            <i class="sli sli-star"></i>
                                            <i class="sli sli-star"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="ht-product-action">
                                    <ul>
                                        <li><a href="#"><i class="sli sli-magnifier"></i><span
                                                    class="ht-product-action-tooltip">Quick View</span></a></li>
                                        <li><a href="#"><i class="sli sli-heart"></i><span
                                                    class="ht-product-action-tooltip">Add to Wishlist</span></a>
                                        </li>
                                        <li><a href="#"><i class="sli sli-refresh"></i><span
                                                    class="ht-product-action-tooltip">Add to Compare</span></a>
                                        </li>
                                        <li><a href="#"><i class="sli sli-bag"></i><span
                                                    class="ht-product-action-tooltip">Add to Cart</span></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="ht-product-countdown-wrap">
                                    <div class="ht-product-countdown" data-countdown="2020/01/01"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Product End-->
                </div>
            </div>
        </div>
    </div>
</div>










@endsection