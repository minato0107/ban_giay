@extends('frontend.layout')
@section('title', 'Liên Hệ')
@section('content')
<!-- breadcrumb-area start -->
<div class="breadcrumb-area bg-gray">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <ul class="breadcrumb-list">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Trang chủ</a></li>
                    <li class="breadcrumb-item active">Liên hệ</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb-area end -->

<!-- content-wraper start -->
<div class="content-wraper">
    <div class="container p-0">
        <div class="row no-gutters">
            <div class="col-sm-12 col-md-12 col-lg-6 col-xs-12">
                <div class="contact-form-inner">
                    <h2>TELL US YOUR PROJECT</h2>
                    <form id="contact-form" method="POST" action="https://demo.hasthemes.com/juta-preview/juta-v1/email.php">
                        <div class="row">
                            <div class="col-md-6 col-lg-6">
                                <input type="text" placeholder="First name*" name="name">
                            </div>
                            <div class="col-md-6 col-lg-6">
                                <input type="text"  placeholder="Last name*" name="lastname">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-lg-6">
                                <input type="email"  placeholder="Email*" name="email">
                            </div>
                            <div class="col-md-6 col-lg-6">
                                <input type="text" placeholder="Subject*" name="subject">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <textarea placeholder="Message *" name="message"></textarea>
                            </div>
                        </div>
                        <div class="contact-submit-btn">
                            <button class="submit-btn" type="submit">Send Email</button>
                            <p class="form-messege"></p>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-6 col-xs-12 plr-0">
                <div class="contact-address-area">
                    <h2>Liên hệ với chúng tôi</h2>
                    <ul>
                        <li>
                            <i class="fa fa-fax">&nbsp;</i> Địa chỉ : {{$address->value}}</li>
                            <li>
                                <i class="fa fa-phone">&nbsp; {{$phone->value}}</i> </li>
                                <li>
                                    <i class="fa fa-envelope-o"></i>&nbsp; {{$email->value}}</li>
                                </ul>
                                <h3>
                                    Thời gian làm việc
                                </h3>
                                <p class="m-0"><strong>{{$worktime->value}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-6 col-xs-12">
                <div class="contact-page-map">
                    <!-- Google Map Start -->
                    <div class="container p-0">
                        <div class="row mb-95">
                            <div class="col-md-4 "></div>
                            <div class="col-md-8">
                                <div id="map">
                                    {!!$map->value!!}
                                </div>
                            </div>
                            <div class="col-md-2"></div>
                        </div>

                    </div>
                    <!-- Google Map End -->
                </div>
            </div>
            <!-- content-wraper end -->
            @endsection
