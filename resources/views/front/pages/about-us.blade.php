@extends('front.layouts.app')
@section('title', $data->mete_title)
@section('meta_description', $data->meta_description)
@section('meta_keywords', $data->meta_keywords)
@section('content')
 <!-- breadcrumb area start here  -->
 <div class="breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-wrap text-center">
            <h2 class="page-title">{{ $data->title ?? " " }}</h2>
            <ul class="breadcrumb-pages">
                <li class="page-item"><a class="page-item-link" href="http://127.0.0.1:8000">Home</a></li>
                <li class="page-item">{{ $data->title ?? " " }}</li>
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
                    <img src="{{ asset('front/assets/images/about_us_page/'.$data->image) }}" alt="about us image" />
                </div>
            </div>
            <div class="col-lg-5 col-md-6">
                <div class="about-us-content">
                    <div class="section-header-area"> 
                        <h3 class="sub-title">
                            {{ $data->title ?? " " }}
                        </h3>
                        <h2 class="section-title">Innovative solutions <br /> to boost your projects</h2>
                    </div>
                    <p class="about-us-text">{{ $data->description ?? " " }}</p>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<!-- about us area end here  -->

@endsection
