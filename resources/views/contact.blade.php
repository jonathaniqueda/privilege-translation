@extends('layout.app')

@section('content')
    <!--Page header-->
    <section id="page-banner" class="padding_top parallaxie">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="intro-text center padding_half">
                        <span class="heading-title bottom20">@lang('general.header_intro') </span>
                        <h2 class="whitecolor text-capitalize bottom45">@lang('general.contact') </h2>
                        <ul class="breadcrumbs">
                            <li><a href="{{ route('index') }}">@lang('general.home')</a></li>
                            <li>@lang('general.contact')</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Page header ends-->

    <!--Map + Address 01-->
    <section id="map-address" class="padding_top contactwith">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="intro-text center">
                        <h2 class="darkcolor heading_space">@lang('general.contact_first_sec_header')</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-7 col-sm-7 margin_bottom">
                    <div class="equalheight">
                        <div id="googleMap"></div>
                    </div>
                </div>
                <div class="col-md-5 col-sm-5 margin_bottom">
                    <div class="address-bg equalheight">
                        <div class="our-address">
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-container">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <h6 class="darkcolor bottom30">Privilège Translation</h6>
                                        <p>
                                            @lang('general.contact_address'): Rua da Conceição, 125 sala 906 – Niterói –
                                            RJ
                                        </p>
                                        <p>@lang('general.contact_zipcode'): 24020.085</p>
                                        <p>@lang('general.contact_phones'): +(55 21) 2717-0801 / 9-6493-4783</p>
                                        <p>
                                            <a href="mailto:comercial@privilege-ts.com.br">comercial@privilege-ts.com.br</a>
                                        </p>
                                        <ul class="social top50">
                                            <li>
                                                <a href="https://facebook.com/pages/Privilège-Translations/102967433378705"><i
                                                            class="fa fa-facebook"></i> </a></li>
                                            <li><a href="https://www.linkedin.com/in/privilege-translations-0976a9122/"><i
                                                            class="fa fa-linkedin"></i> </a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Map + Address ends-->


    <!--Contact form-->
    <section id="contact-form" class="padding_bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-offset-2 col-md-8">
                    <form class="getin_form">
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group bottom45">
                                    <input class="form-control" type="text" placeholder="@lang('general.contact_name')"
                                           name="name"
                                           required>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group bottom45">
                                    <input class="form-control" type="email" name="email"
                                           placeholder="@lang('general.contact_email')" required>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group bottom45">
                                    <input class="form-control" type="tel" name="phone"
                                           placeholder="@lang('general.contact_phone')" required>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group bottom45">
                                    <select class="form-control" required name="service">
                                        <option>@lang('general.contact_service')</option>
                                        <option value="@lang('general.service_second_sec_header_service1')">@lang('general.service_second_sec_header_service1')</option>
                                        <option value="@lang('general.service_second_sec_header_service2')">@lang('general.service_second_sec_header_service2')</option>
                                        <option value="@lang('general.service_second_sec_header_service3')">@lang('general.service_second_sec_header_service3')</option>
                                        <option value="@lang('general.service_second_sec_header_service4')">@lang('general.service_second_sec_header_service4')</option>
                                        <option value="@lang('general.service_second_sec_header_service5')">@lang('general.service_second_sec_header_service5')</option>
                                        <option value="@lang('general.service_second_sec_header_service6')">@lang('general.service_second_sec_header_service6')</option>
                                        <option value="@lang('general.service_second_sec_header_service7')">@lang('general.service_second_sec_header_service7')</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group bottom45">
                                    <textarea class="form-control" name="msg"
                                              placeholder="@lang('general.contact_msg')" required></textarea>
                                </div>
                            </div>
                            <div class="col-sm-12 text-center">
                                <button type="submit"
                                        class="button defaulthole">@lang('general.contact_send_request')</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!--Contact form ends-->
@endsection