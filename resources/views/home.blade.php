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
                            <h1 class="animated">Luxurious Bedsheets & Towels</h1>
                            <p class="animated">Transform your bedroom into a haven of comfort with our premium
                                bedsheets and plush towels. Crafted with the finest materials, they offer a perfect
                                blend of style and softness for a truly relaxing experience.</p>

                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-12 col-sm-6">
                        <div class="slider-single-img slider-animated-1">
                            <img class="animated" src="assets/img/slider/slider1.jpg" alt="Bedsheet and Towel">
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
                            <h1 class="animated">Soft & Absorbent Towels</h1>
                            <p class="animated">Wrap yourself in luxury with our ultra-soft towels, designed to absorb
                                moisture quickly and provide a gentle touch to your skin. Perfect for everyday use,
                                these towels bring a spa-like experience to your home.</p>

                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-12 col-sm-6">
                        <div class="slider-single-img slider-animated-1">
                            <img class="animated" src="assets/img/slider/slider2.jpg" alt="Towel">
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
                    <a href="#"><img class="animated" src="assets/img/banner/banner-1.jpg"
                            alt=""></a>
                    <div class="banner-content banner-position-1">
                        <h3>35% off <br>Black Monday</h3>
                        <h2>Lighting For <br> Home.</h2>
                        <a href="#">Shop Now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="single-banner mb-30 scroll-zoom">
                    <a href="#"><img class="animated" src="assets/img/banner/banner-2.jpg"
                            alt=""></a>
                    <div class="banner-content banner-position-2">
                        <h3>15% off</h3>
                        <h2>Table Shiner <br>Moving.</h2>
                        <a href="#">Shop Now</a>
                    </div>
                </div>
                <div class="single-banner mb-30 scroll-zoom">
                    <a href="#"><img class="animated" src="assets/img/banner/banner-3.jpg"
                            alt=""></a>
                    <div class="banner-content banner-position-2">
                        <h3>Black Friday</h3>
                        <h2>Wall Lighting <br>Black.</h2>
                        <a href="#">Shop Now</a>
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
                        <p>"Radhe Handloom Shop offers an exquisite collection of handcrafted fabrics that truly reflect
                            the rich cultural heritage of India. The attention to detail and quality of their products
                            is unmatched. I purchased a handwoven saree, and it has quickly become one of my favorite
                            pieces. The staff is knowledgeable and provides excellent customer service, ensuring that
                            you find exactly what you’re looking for."</p>
                        <div class="client-info">
                            <img src="assets/img/icon-img/testi.png" alt="">
                            <h5>Nikolas Dehlli</h5>
                        </div>
                    </div>
                    <div class="single-testimonial text-center">
                        <img src="assets/img/testimonial/testi-2.png" alt="">
                        <p>"Radhe Handloom Shop is a gem for anyone who appreciates authentic, high-quality handloom
                            products. The range of fabrics is extensive, and each piece is a testament to skilled
                            craftsmanship. I was particularly impressed by their customer-centric approach, making the
                            shopping experience seamless and enjoyable. I highly recommend this shop to anyone seeking
                            unique and beautiful textiles."</p>
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
            <p> Discover the timeless elegance of handcrafted fabrics at our Handloom Shop, where tradition meets
                contemporary style in every weave.</p>
        </div>
        <div class="tab-content jump-2">
            <div id="product-1" class="tab-pane active">
                <div class="ht-products product-slider-active owl-carousel">
                    <!--Product Start-->
                    <div class="ht-product ht-product-action-on-hover ht-product-category-right-bottom mb-30">
                        <div class="ht-product-inner">
                            <div class="ht-product-image-wrap">
                                <a href="#" class="ht-product-image"> <img
                                        src="assets/img/product/p1.jpg" alt="Universal Product Style">
                                </a>
                            </div>
                            <div class="ht-product-content">
                                <div class="ht-product-content-inner">
                                    <h4 class="ht-product-title"><a href="#">Sofa</a></h4>

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
                                <a href="#" class="ht-product-image"> <img
                                        src="assets/img/product/p2.jpg" alt="Universal Product Style">
                                </a>

                            </div>
                            <div class="ht-product-content">
                                <div class="ht-product-content-inner">
                                    <h4 class="ht-product-title"><a href="#">Pillow</a></h4>

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
                                <a href="#" class="ht-product-image"> <img
                                        src="assets/img/product/p3.jpg" alt="Universal Product Style">
                                </a>

                            </div>
                            <div class="ht-product-content">
                                <div class="ht-product-content-inner">
                                    <h4 class="ht-product-title"><a href="#">Sofa with Cover and
                                            pillow</a></h4>

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
                                <a href="#" class="ht-product-image"> <img
                                        src="assets/img/product/p4.jpg" alt="Universal Product Style">
                                </a>

                            </div>
                            <div class="ht-product-content">
                                <div class="ht-product-content-inner">
                                    <h4 class="ht-product-title"><a href="#">Modern Looking
                                            Drapes</a></h4>


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
                                <a href="#" class="ht-product-image"> <img
                                        src="assets/img/product/product-2.jpg" alt="Universal Product Style">
                                </a>

                            </div>
                            <div class="ht-product-content">
                                <div class="ht-product-content-inner">
                                    <div class="ht-product-categories"><a href="#">Lamp </a></div>
                                    <h4 class="ht-product-title"><a href="#">Demo Product
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
                                <a href="#" class="ht-product-image"> <img
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
                                    <h4 class="ht-product-title"><a href="#">Demo Product
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
                                <a href="#" class="ht-product-image"> <img
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
                                    <h4 class="ht-product-title"><a href="#">Demo Product
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
                                <a href="#" class="ht-product-image"> <img
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
                                    <h4 class="ht-product-title"><a href="#">Demo Product
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
                                <a href="#" class="ht-product-image"> <img
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
                                    <h4 class="ht-product-title"><a href="#">Demo Product
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
                                <a href="#" class="ht-product-image"> <img
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
                                    <h4 class="ht-product-title"><a href="#">Demo Product
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
                                <a href="#" class="ht-product-image"> <img
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
                                <a href="#" class="ht-product-image"> <img
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
                                <a href="#" class="ht-product-image"> <img
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
                                <a href="#" class="ht-product-image"> <img
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
                                <a href="#" class="ht-product-image"> <img
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