@extends('masterpage')
@section('title')
    About-Us
@endsection
@section('content')
<!-- Breadcrumb Section Begin -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <h2>Về Chúng Tôi</h2>
                        <div class="bt-option">
                            <a href="{{ URL::to('/index') }}">Trang Chủ</a>
                            <span>Về Chúng Tôi</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End -->

    <!-- About Us Page Section Begin -->
    <section class="aboutus-page-section spad">
        <div class="container">
            <div class="about-page-text">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="ap-title">
                            <h2>{{ $gioithieu->tieude }}.</h2>
                            <p>{{ $gioithieu->noidung }}.</p>
                        </div>
                    </div>
                    <div class="col-lg-5 offset-lg-1">
                        <ul class="ap-services">Mã giảm giá
                            <li><i class="icon_check"></i> {{ $gioithieu->magiamgia }}</li>
                        </ul>
                    </div>
                </div>
            </div>
            @php
                $values = explode(",",$gioithieu->anh)
            @endphp
            <div class="about-page-services">
                <div class="row">
                    @foreach($values as $key)
                        <div class="col-md-4">
                            <div class="ap-service-item set-bg" data-setbg="{{ asset('public/img/about/'.$key) }}">
                                <div class="api-text">
                                    <h3>{{ $gioithieu->ten }}</h3>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    {{-- <div class="col-md-4">
                        <div class="ap-service-item set-bg" data-setbg="{{ asset('public/img/about/about-p2.jpg') }}">
                            <div class="api-text">
                                <h3>Travel & Camping</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="ap-service-item set-bg" data-setbg="{{ asset('public/img/about/about-p3.jpg') }}">
                            <div class="api-text">
                                <h3>Event & Party</h3>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </section>
    <!-- About Us Page Section End -->
    <!-- Video Section Begin -->
    <section class="video-section set-bg" data-setbg="{{ asset('public/img/video-bg.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="video-text">
                        <h2>Khám phá Khách sạn & Dịch vụ của Chúng tôi.</h2>
                        <p>It S Hurricane Season But We Are Visiting Hilton Head Island</p>
                        <a href="https://www.youtube.com/watch?v=EzKkl64rRbM" class="play-btn video-popup"><img
                                src="{{ asset('public/img/play.png') }}" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Video Section End -->

    <!-- Gallery Section Begin -->
    <section class="gallery-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>Our Gallery</span>
                        <h2>Discover Our Work</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="gallery-item set-bg" data-setbg="{{ asset('public/img/gallery/gallery-1.jpg') }}">
                        <div class="gi-text">
                            <h3>Room Luxury</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="gallery-item set-bg" data-setbg="{{ asset('public/img/gallery/gallery-3.jpg') }}">
                                <div class="gi-text">
                                    <h3>Room Luxury</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="gallery-item set-bg" data-setbg="{{ asset('public/img/gallery/gallery-4.jpg') }}">
                                <div class="gi-text">
                                    <h3>Room Luxury</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="gallery-item large-item set-bg" data-setbg="{{ asset('public/img/gallery/gallery-2.jpg') }}">
                        <div class="gi-text">
                            <h3>Room Luxury</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Gallery Section End -->
@endsection
