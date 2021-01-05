@extends('masterpage')
@section('title')
    Home
@endsection
@section('content')

    <!-- Hero Section Begin -->
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            @php
                $stt = 0
            @endphp
            @for($i = count($slide)-1; $i >= 0; $i--)
                @for($j = count($slide)-1; $j >= 0;$j--)
                        <li data-target="#carouselExampleCaptions" data-slide-to="{{ $stt++ }}" class="{{ $i == count($slide)-1 ? 'active' : '' }}"></li>
                    @break
                @endfor

            @endfor
            {{-- <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li> --}}
        </ol>
        <div class="carousel-inner">
            @for($i = count($slide)-1; $i >= 0; $i--)
            <div class="carousel-item {{ $i == count($slide)-1 ? 'active' : '' }}">
                <img src="{{ asset('public/slide/'.$slide[$i]['anh']) }}" style="height: 1300px" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <div class="hero-text">
                    <h3 style="color: #ffffff;">{{ $slide[$i]['tieude'] }}</h3>
                    <p>{{ $slide[$i]['noidung'] }}</p>
                    </div>
                </div>

            </div>
            @endfor

        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!-- Hero Section End -->


    <!-- Home Room Section Begin -->
    <section class="aboutus-section spad">
        <ul class="nav nav-tabs" role="tablist" style="padding:0px 0px 10px 0px">
            @for($j=0;$j<count($loaiphong);$j++)
                <li role="presentation" class="{{ $j == 0 ? 'active' : '' }}"><a
                        href="#home{{ $loaiphong[$j]['id_loai_phong'] }}" aria-controls="home" role="tab"
                        data-toggle="tab">{{ $loaiphong[$j]['ten_loai_phong'] }}</a></li>
            @endfor
            {{-- <li role="presentation"><a href="#profile" aria-controls="profile" role="tab"
                    data-toggle="tab">Profile</a></li>
            <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Messages</a>
            </li>
            <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Settings</a>
            </li> --}}
        </ul>
        <div class="tab-content">
            @for($g=0;$g<count($loaiphong);$g++)
                <div role="tabpanel" class="tab-pane {{ $g == 0 ? 'active' : '' }}"
                    id="home{{ $loaiphong[$g]['id_loai_phong'] }}">
                    <section class="hp-room-section">
                        <div class="container-fluid">
                            <div class="hp-room-items">
                                <div class="row">
                                    @foreach ($phong as $ph)
                                        @if ($loaiphong[$g]['id_loai_phong'] == $ph->id_loai_phong)
                                            @php
                                            $values = explode(",",$ph->hinh_phong);
                                            @endphp
                                            @for ($i = 0; $i < count($values); $i++)
                                                <div class="col-lg-3 col-md-6">
                                                    <div class="hp-room-item set-bg" data-setbg="{{ asset('public/hinhtro/'.$values[$i]) }}">
                                                        {{-- <div class="hr-text">
                                                            <h3>Double Room</h3>
                                                            <h2>199$<span>/Pernight</span></h2>
                                                            <table>
                                                                <tbody>
                                                                    <tr>
                                                                        <td class="r-o">Size:</td>
                                                                        <td>30 ft</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="r-o">Capacity:</td>
                                                                        <td>Max persion 5</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="r-o">Bed:</td>
                                                                        <td>King Beds</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="r-o">Services:</td>
                                                                        <td>Wifi, Television, Bathroom,...</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <a href="#" class="primary-btn">More Details</a>
                                                        </div> --}}
                                                        {{-- <div class="blog-item small-size set-bg" data-setbg="{{ asset('public/img/blog/blog-10.jpg') }}">
                                                            <div class="bi-text">
                                                                <span class="b-tag">Travel</span>
                                                                <h4><a href="#">Traveling To Barcelona</a></h4>
                                                                <div class="b-time"><i class="icon_clock_alt"></i> 12th April, 2019</div>
                                                            </div>
                                                        </div> --}}
                                                        {{-- <img src="{{ asset('public/hinhtro/'.$values[$i]) }}" style="height: 600px;"> --}}
                                                    </div>
                                                    </br>
                                                </div>
                                                @break($i==7)
                                            @endfor
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                {{-- <div role="tabpanel" class="tab-pane"
                    id="{{ $loaiphong[$j]['id_loai_phong'] }}">
                    <section class="hp-room-section">
                        <div class="container-fluid">
                            <div class="hp-room-items">
                                <div class="row">
                                    <div class="col-lg-3 col-md-6">
                                        <div class="hp-room-item set-bg"
                                            data-setbg="{{ asset('public/img/room/room-b1.jpg') }}">
                                            <div class="hr-text">
                                                <h3>Double Room</h3>
                                                <h2>199$<span>/Pernight</span></h2>
                                                <table>
                                                    <tbody>
                                                        <tr>
                                                            <td class="r-o">Size:</td>
                                                            <td>30 ft</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="r-o">Capacity:</td>
                                                            <td>Max persion 5</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="r-o">Bed:</td>
                                                            <td>King Beds</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="r-o">Services:</td>
                                                            <td>Wifi, Television, Bathroom,...</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <a href="#" class="primary-btn">More Details</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <div class="hp-room-item set-bg"
                                            data-setbg="{{ asset('public/img/room/room-b2.jpg') }}">
                                            <div class="hr-text">
                                                <h3>Premium King Room</h3>
                                                <h2>159$<span>/Pernight</span></h2>
                                                <table>
                                                    <tbody>
                                                        <tr>
                                                            <td class="r-o">Size:</td>
                                                            <td>30 ft</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="r-o">Capacity:</td>
                                                            <td>Max persion 5</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="r-o">Bed:</td>
                                                            <td>King Beds</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="r-o">Services:</td>
                                                            <td>Wifi, Television, Bathroom,...</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <a href="#" class="primary-btn">More Details</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <div class="hp-room-item set-bg"
                                            data-setbg="{{ asset('public/img/room/room-b3.jpg') }}">
                                            <div class="hr-text">
                                                <h3>Deluxe Room</h3>
                                                <h2>198$<span>/Pernight</span></h2>
                                                <table>
                                                    <tbody>
                                                        <tr>
                                                            <td class="r-o">Size:</td>
                                                            <td>30 ft</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="r-o">Capacity:</td>
                                                            <td>Max persion 5</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="r-o">Bed:</td>
                                                            <td>King Beds</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="r-o">Services:</td>
                                                            <td>Wifi, Television, Bathroom,...</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <a href="#" class="primary-btn">More Details</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <div class="hp-room-item set-bg"
                                            data-setbg="{{ asset('public/img/room/room-b4.jpg') }}">
                                            <div class="hr-text">
                                                <h3>Family Room</h3>
                                                <h2>299$<span>/Pernight</span></h2>
                                                <table>
                                                    <tbody>
                                                        <tr>
                                                            <td class="r-o">Size:</td>
                                                            <td>30 ft</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="r-o">Capacity:</td>
                                                            <td>Max persion 5</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="r-o">Bed:</td>
                                                            <td>King Beds</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="r-o">Services:</td>
                                                            <td>Wifi, Television, Bathroom,...</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <a href="#" class="primary-btn">More Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div> --}}
            @endfor
            {{-- <div role="tabpanel" class="tab-pane active" id="home">...</div>

            <div role="tabpanel" class="tab-pane" id="messages">...</div>
            <div role="tabpanel" class="tab-pane" id="settings">...</div> --}}
        </div>
    </section>
    <!-- Home Room Section End -->

    <!-- About Us Section Begin -->
    <section class="aboutus-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-text">
                        <div class="section-title">
                            <span>Về Chúng Tôi</span>
                            <h2>Giới Thiệu</br>Phongtro.com</h2>
                        </div>
                        <p class="f-para">Chúng tôi biết bạn có rất nhiều lựa chọn,nhưng Phongtro.com tự hào là trang web đứng top google về các từ khóa:cho thuê phòng trọ,nhà trọ,...Chúng tôi rất vui được cung cấp cho bạn những loại phòng phù hợp với nhu cầu và giá cả.</p>
                        <p class="s-para">Đến đây bạn sẽ được cung cấp các dịch vụ và tiền nghi tốt nhất.Bạn có thể dễ dàng lựa chọn và đặt phòng với những bước đơn giản.</p>
                        <a href="{{ URL::to('/about-us') }}" class="primary-btn about-btn">Xem Thêm</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-pic">
                        <div class="row">
                            <div class="col-sm-6">
                                <img src="{{ asset('public/img/about/about-1.jpg') }}" alt="">
                            </div>
                            <div class="col-sm-6">
                                <img src="{{ asset('public/img/about/about-2.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Us Section End -->



    <!-- Services Section End -->
    <section class="services-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>Chúng ta làm gì ?</span>
                        <h2>Khám phá các dịch vụ của chúng tôi</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($dichvu as $dv)
                    <div class="col-lg-4 col-sm-6">
                        <div class="service-item">
                            {{-- <i class="flaticon-036-parking"></i>
                            --}}
                            <h4>{{ $dv->tendichvu }}</h4>
                            <p>{{ $dv->mota }}.</p>
                            @php
                            $values = explode(",",$dv->hinh);
                            @endphp
                            <div id="carouselExampleControls{{ $dv->id }}" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    @for ($i = 0; $i < count($values); $i++)
                                        <div class="carousel-item {{ $i == 0 ? 'active' : '' }}">
                                            <img class="d-block w-100" src="{{ asset('public/dichvu/'. $values[$i]) }}"
                                                style="height:600px;">
                                        </div>
                                    @endfor
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleControls{{ $dv->id }}" role="button"
                                    data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleControls{{ $dv->id }}" role="button"
                                    data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>

                        </div>
                    </div>
                   {{-- @break($i<7) --}}
                @endforeach

                {{-- <div class="col-lg-4 col-sm-6">
                    <div class="service-item">
                        <i class="flaticon-033-dinner"></i>
                        <h4>Catering Service</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="service-item">
                        <i class="flaticon-026-bed"></i>
                        <h4>Babysitting</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="service-item">
                        <i class="flaticon-024-towel"></i>
                        <h4>Laundry</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="service-item">
                        <i class="flaticon-044-clock-1"></i>
                        <h4>Hire Driver</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="service-item">
                        <i class="flaticon-012-cocktail"></i>
                        <h4>Bar & Drink</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna.</p>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>
    <!-- Services Section End -->

    <!-- Testimonial Section Begin -->
    <section class="testimonial-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>Testimonials</span>
                        <h2>What Customers Say?</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="testimonial-slider owl-carousel">
                        <div class="ts-item">
                            <p>After a construction project took longer than expected, my husband, my daughter and I
                                needed a place to stay for a few nights. As a Chicago resident, we know a lot about our
                                city, neighborhood and the types of housing options available and absolutely love our
                                vacation at Sona Hotel.</p>
                            <div class="ti-author">
                                <div class="rating">
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star-half_alt"></i>
                                </div>
                                <h5> - Alexander Vasquez</h5>
                            </div>
                            <img src="{{ asset('public/img/testimonial-logo.png') }}" alt="">
                        </div>
                        <div class="ts-item">
                            <p>After a construction project took longer than expected, my husband, my daughter and I
                                needed a place to stay for a few nights. As a Chicago resident, we know a lot about our
                                city, neighborhood and the types of housing options available and absolutely love our
                                vacation at Sona Hotel.</p>
                            <div class="ti-author">
                                <div class="rating">
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star-half_alt"></i>
                                </div>
                                <h5> - Alexander Vasquez</h5>
                            </div>
                            <img src="{{ asset('public/img/testimonial-logo.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonial Section End -->

    <!-- Blog Section Begin -->
    <section class="blog-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>Hotel News</span>
                        <h2>Our Blog & Event</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="blog-item set-bg" data-setbg="{{ asset('public/img/blog/blog-1.jpg') }}">
                        <div class="bi-text">
                            <span class="b-tag">Travel Trip</span>
                            <h4><a href="#">Tremblant In Canada</a></h4>
                            <div class="b-time"><i class="icon_clock_alt"></i> 15th April, 2019</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog-item set-bg" data-setbg="{{ asset('public/img/blog/blog-2.jpg') }}">
                        <div class="bi-text">
                            <span class="b-tag">Camping</span>
                            <h4><a href="#">Choosing A Static Caravan</a></h4>
                            <div class="b-time"><i class="icon_clock_alt"></i> 15th April, 2019</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog-item set-bg" data-setbg="{{ asset('public/img/blog/blog-3.jpg') }}">
                        <div class="bi-text">
                            <span class="b-tag">Event</span>
                            <h4><a href="#">Copper Canyon</a></h4>
                            <div class="b-time"><i class="icon_clock_alt"></i> 21th April, 2019</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="blog-item small-size set-bg" data-setbg="{{ asset('public/img/blog/blog-wide.jpg') }}">
                        <div class="bi-text">
                            <span class="b-tag">Event</span>
                            <h4><a href="#">Trip To Iqaluit In Nunavut A Canadian Arctic City</a></h4>
                            <div class="b-time"><i class="icon_clock_alt"></i> 08th April, 2019</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog-item small-size set-bg" data-setbg="{{ asset('public/img/blog/blog-10.jpg') }}">
                        <div class="bi-text">
                            <span class="b-tag">Travel</span>
                            <h4><a href="#">Traveling To Barcelona</a></h4>
                            <div class="b-time"><i class="icon_clock_alt"></i> 12th April, 2019</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Blog Section End -->
@endsection
