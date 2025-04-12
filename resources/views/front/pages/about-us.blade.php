@extends('front.layouts.app')
@section('content')
 <!-- breadcrumb area start here  -->
 <div class="breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-wrap text-center">
            <h2 class="page-title">About Us</h2>
            <ul class="breadcrumb-pages">
                <li class="page-item"><a class="page-item-link" href="http://127.0.0.1:8000">Home</a></li>
                <li class="page-item">About Us</li>
            </ul>
        </div>
    </div>
</div>
<!-- breadcrumb area end here  -->

<!-- about us area start here  -->
<div class="about-us-area section">
    <div class="container">
        <div class="row align-items-lg-center">
            <div class="col-lg-5 offset-lg-1 col-md-6">
                <div class="about-us-image">
                    <img src="{{ asset('front/assets/images/about_us_page/aboutus-image.jpg') }}" alt="about us image" />
                </div>
            </div>
            <div class="col-lg-5 col-md-6">
                <div class="about-us-content">
                    <div class="section-header-area">
                        <h3 class="sub-title">
                            About Us
                        </h3>
                        <h2 class="section-title">Innovative solutions <br /> to boost your projects</h2>
                    </div>
                    <p class="about-us-text">Vestibulum ante ipsum primis in faucibus orci luctus et ultrices
                        posuere consectetur sed, convallis at tellus. Donec rutrum congue leo eget malesuada.
                        Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Vestibulum ac diam sit amet
                        quam vehicula elementum sed sit amet </p>
                    <p class="about-us-text">Praesent sapien massa, convallis a pellentesque nec, egestas non nisi.
                        Vivamus suscipit tortor eget felis porttitor volutpat. Sed porttitor lectus nibh. Nulla
                        porttitor accumsan tincidunt. Pellentesque in ipsum id orci porta dapibus. Praesent sapien
                        massa, convallis a pellentesque nec, </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- about us area end here  -->

<!-- Our Features area start here  -->
<div class="our-features-area section-top pb-100">
    <div class="container">
        <div class="section-header-area text-center">
            <h3 class="sub-title">
                Our Features
            </h3>
            <h2 class="section-title">
                Why Choose Us
            </h2>
        </div>
        <div class="row our-features-area-wrap">
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="single-features text-center">
                    <div class="features-icon">
                        <img src="{{ asset('front/assets/images/about_us_page/features-icon-1.png') }}" alt="features-icon" />
                    </div>
                    <h3 class="features-title">
                        Why Choose Us
                    </h3>
                    <p class="features-content">
                        We believe getting dressed should be the easiest part of your day.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="single-features text-center">
                    <div class="features-icon">
                        <img src="{{ asset('front/assets/images/about_us_page/features-icon-2.png') }}" alt="features-icon" />
                    </div>
                    <h3 class="features-title">
                        Men's Collection
                    </h3>
                    <p class="features-content">
                        We believe getting dressed should be the easiest part of your day.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="single-features text-center">
                    <div class="features-icon">
                        <img src="{{ asset('front/assets/images/about_us_page/features-icon-3.png') }}" alt="features-icon" />
                    </div>
                    <h3 class="features-title">
                        Innovative Solutions
                    </h3>
                    <p class="features-content">
                        We believe getting dressed should be the easiest part of your day.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Our Features area end here  -->


@endsection
