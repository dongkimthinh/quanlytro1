@extends('masterpage')
@section('title')
    Type Room
@endsection
@section('content')
<!-- Breadcrumb Section Begin -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <h2>{{ $loai->ten_loai_phong }}</h2>
                        <div class="bt-option">
                            <a href="{{ route('index') }}">Trang Chủ</a>
                            <span>{{ $loai->ten_loai_phong }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End -->
 <!-- Rooms Section Begin -->
    <section class="rooms-section spad" id="ajax">
        <div class="container">
            <div class="row">
                @foreach($phong as $ph)
                    @php
                        $values = explode(",",$ph->hinh_phong);
                    @endphp
                    @php
                        $trangthietbitrongloai = explode(",",$loai->trangthietbi);
                    @endphp
                    <div class="col-lg-12">
                        <div class="text-center room-item" style="border: 1px solid #ebebeb">
                            <div class="ri-text">
                                <form>
                                    @csrf
                                    <input type="hidden" class="cart_product_id_{{ $ph->id_phong }}" value="{{ $ph->id_phong }}">
                                    <input type="hidden" class="cart_product_ten_loai_phong_{{ $ph->id_phong }}" value="{{ $loai->ten_loai_phong }}">
                                    <input type="hidden" class="cart_product_gia_{{ $ph->id_phong }}" value="{{ $ph->gia }}">
                                    <input type="hidden" class="cart_product_image_{{ $ph->id_phong }}" value="{{ $values[0] }}">
                                    <input type="hidden" class="cart_product_qty_{{ $ph->id_phong }}" value="1">
                                <h4>{{ $loai->ten_loai_phong }}</h4>
                                {{-- <h3>{{ number_format($ph->gia,0,',','.') }}<span>/Tháng</span></h3> --}}
                                <div>
                                    <table  style="margin-left: auto; margin-right: auto;">
                                        <tbody>
                                            <tr>
                                                <td class="r-o">Diện tích:</td>
                                                <td>{{ $ph->dientich }} m²</td>
                                            </tr>
                                            <tr>
                                                <td class="r-o">Số người:</td>
                                                <td>{{ $ph->songuoi }}</td>
                                            </tr>
                                            <tr>
                                                <td class="r-o">Bed:</td>
                                                <td>King Beds</td>
                                            </tr>
                                            <tr>
                                                <td class="r-o">Trang thiết bị:</td>
                                            </tr>
                                        </tbody>

                                    </table>
                                    <table  style="margin-left: auto; margin-right: auto;">
                                        <tbody>
                                            <tr>
                                                @for($i = 0; $i < count($trangthietbitrongloai); $i++)
                                                    @for($j = 0; $j < count($ttb); $j++)
                                                        @if($ttb[$j]['ten_ttb']==$trangthietbitrongloai[$i])
                                                            <td style="padding: 0px 10px 10px 10px">
                                                                <img src="{{ asset('public/ttb/'.$ttb[$i]['hinh_ttb']) }}" alt="" style="height:60px;width:60px;"/>
                                                            </td>
                                                                {{--  <td>{{ $trangthietbitrongloai[$i] }}</td>  --}}
                                                        @endif
                                                    @endfor
                                                @endfor
                                            </tr>
                                            <tr>
                                                @for($i = 0; $i < count($trangthietbitrongloai); $i++)
                                                    @for($j = 0; $j < count($ttb); $j++)
                                                        @if($ttb[$j]['ten_ttb']==$trangthietbitrongloai[$i])
                                                            <td class="text-center" style="padding: 0px 10px 10px 10px;vertical-align:middle">{{ $trangthietbitrongloai[$i] }}</td>
                                                        @endif
                                                    @endfor
                                                @endfor
                                            </tr>
                                        </tbody>
                                    </table>

                                    {{--  <style>
                                        .ttb-content .ttb-s{
                                            margin-right:30px;
                                            float: left;
                                        }
                                        .ttb-title{
                                            font-size: 16px;
                                            color: #707079;
                                            line-height: 36px;
                                            margin-right: 150px;
                                            margin-top: -20px;
                                        }
                                        .ttb-content{
                                            margin-left:400px;
                                            margin-top:20px;
                                        }
                                        .ttb-des{
                                            margin-left:405px;
                                        }
                                        .ttb-des .ttb-des-s{
                                            margin-right:58px;
                                            float: left;
                                        }
                                    </style>  --}}
                                    <div class="clearfix"></div>
                                    <a type="button" class="btn primary-btn" id="add" data-id="{{ $ph->id_phong }}">Đặt ngay</a>
                                </form>
                                </div>

                            </div>
                        </div>
                    </div>



                    @for ($i = 0; $i < count($values); $i++)
                        @if($values[$i])
                        <div class="col-lg-4 col-md-6">
                            <div class="room-item">
                                <img src="{{ asset('public/hinhtro/'.$values[$i]) }}" alt="" style="height: 500.5px;width: 359.98px;">
                                {{-- <div class="ri-text">
                                    <h4>Premium King Room</h4>
                                    <h3>159$<span>/Pernight</span></h3>
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td class="r-o">Size:</td>
                                                <td>30 ft</td>
                                            </tr>
                                            <tr>
                                                <td class="r-o">Capacity:</td>
                                                <td>Max persion 3</td>
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
                            </div>
                        </div>
                        @endif
                    @endfor

                @endforeach

                {{-- <div class="col-lg-4 col-md-6">
                    <div class="room-item">
                        <img src="{{ asset('public/img/room/room-2.jpg') }}" alt="">
                        <div class="ri-text">
                            <h4>Deluxe Room</h4>
                            <h3>159$<span>/Pernight</span></h3>
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
                <div class="col-lg-4 col-md-6">
                    <div class="room-item">
                        <img src="{{ asset('public/img/room/room-3.jpg') }}" alt="">
                        <div class="ri-text">
                            <h4>Double Room</h4>
                            <h3>159$<span>/Pernight</span></h3>
                            <table>
                                <tbody>
                                    <tr>
                                        <td class="r-o">Size:</td>
                                        <td>30 ft</td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">Capacity:</td>
                                        <td>Max persion 2</td>
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
                <div class="col-lg-4 col-md-6">
                    <div class="room-item">
                        <img src="{{ asset('public/img/room/room-4.jpg') }}" alt="">
                        <div class="ri-text">
                            <h4>Luxury Room</h4>
                            <h3>159$<span>/Pernight</span></h3>
                            <table>
                                <tbody>
                                    <tr>
                                        <td class="r-o">Size:</td>
                                        <td>30 ft</td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">Capacity:</td>
                                        <td>Max persion 1</td>
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
                <div class="col-lg-4 col-md-6">
                    <div class="room-item">
                        <img src="{{ asset('public/img/room/room-5.jpg') }}" alt="">
                        <div class="ri-text">
                            <h4>Room With View</h4>
                            <h3>159$<span>/Pernight</span></h3>
                            <table>
                                <tbody>
                                    <tr>
                                        <td class="r-o">Size:</td>
                                        <td>30 ft</td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">Capacity:</td>
                                        <td>Max persion 1</td>
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
                <div class="col-lg-4 col-md-6">
                    <div class="room-item">
                        <img src="{{ asset('public/img/room/room-6.jpg') }}" alt="">
                        <div class="ri-text">
                            <h4>Small View</h4>
                            <h3>159$<span>/Pernight</span></h3>
                            <table>
                                <tbody>
                                    <tr>
                                        <td class="r-o">Size:</td>
                                        <td>30 ft</td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">Capacity:</td>
                                        <td>Max persion 2</td>
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
                </div> --}}
                <div class="col-lg-12">
                    <div class="room-pagination">
                        <a href="#">1</a>
                        <a href="#">2</a>
                        <a href="#">Next <i class="fa fa-long-arrow-right"></i></a>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Rooms Section End -->
@endsection
