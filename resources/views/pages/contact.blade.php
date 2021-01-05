@extends('masterpage')
@section('title')
    Contact
@endsection
@section('content')
<!-- Contact Section Begin -->
    <section class="contact-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="contact-text">
                        <h2>Thông tin liên lạc</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua.</p>
                        <table>
                            <tbody>
                                <tr>
                                    <td class="c-o">Address:</td>
                                    <td>18 Nguyễn Sáng,Tây Thạnh,Tân Phú</td>
                                </tr>
                                <tr>
                                    <td class="c-o">Phone:</td>
                                    <td>0703 150 380</td>
                                </tr>
                                <tr>
                                    <td class="c-o">Email:</td>
                                    <td>dongkimthinh123@gmail.com</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-lg-7 offset-lg-1">
                    <form action="#" class="contact-form">
                        <div class="row">
                            <div class="col-lg-6">
                                <input class="form-control" type="text" placeholder="Tên">
                            </div>
                            <div class="col-lg-6">
                                <input class="form-control" type="text" placeholder="Email">
                            </div>
                            <div class="col-lg-12">
                                <textarea placeholder="Nội dung"></textarea>
                                <button class="btn btn-primary" type="submit">Gửi</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.063756558014!2d106.62815801526047!3d10.806428961593074!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752958610bf1e9%3A0x7f5c1379aaabb441!2zMTggTmd1eeG7hW4gU8OhbmcsIFTDonkgVGjhuqFuaCwgVMOibiBQaMO6LCBUaMOgbmggcGjhu5EgSOG7kyBDaMOtIE1pbmgsIFZpZXRuYW0!5e0!3m2!1sen!2sbd!4v1604373012788!5m2!1sen!2sbd" height="470" style="border:0;" allowfullscreen=""></iframe>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->
@endsection
