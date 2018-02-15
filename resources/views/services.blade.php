@extends('layout.app')

@section('content')
    <section id="page-banner" class="padding_top parallaxie">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="intro-text center padding_half">
                        <span class="heading-title bottom20">@lang('general.header_intro') </span>
                        <h2 class="whitecolor text-capitalize bottom45">@lang('general.services') </h2>
                        <ul class="breadcrumbs">
                            <li><a href="{{ route('index') }}">@lang('general.home')</a></li>
                            <li>@lang('general.services')</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="about">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 container-padding">
                    <div class="half-block padding_half equalheight">
                        <div class="intro-text">
                            <span class="heading-title bottom25">
                                 @lang('general.service_first_sec')
                            </span>

                            <h2 class="darkcolor bottom45">@lang('general.service_first_sec_header')</h2>

                            <p>
                                @lang('general.service_first_sec_text')
                            </p>
                            <p>
                                @lang('general.service_first_sec_text2')
                            </p>
                            <a href="{{ route('contact') }}" class="button default top30">
                                @lang('general.get_in_touch')
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Counter Style 03-->
    <section id="image-about" class="padding_top padding_bottom_half parallaxie"
             style="background: url('{{asset('images/services/image3.jpg')}}')"></section>
    <!--Counter Style 03 ends-->

    <section id="services" class="padding">
        <div class="container" id="show_services">
            <div class="row">
                <div class="col-md-3 col-sm-2"></div>
                <div class="col-md-6 col-sm-8">
                    <div class="intro-text center">
                        <h2 class="darkcolor heading_space">@lang('general.service_second_sec_header')</h2>
                    </div>
                </div>
                <div class="col-md-3 col-sm-2"></div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
                                <div class="intro-text center">
                                    <h2 class="darkcolor h2-service">@lang('general.service_second_sec_header_service1') </h2>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-2"></div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 container-padding">
                                <div class="half-block padding_half_service equalheight">
                                    <div class="intro-text">
                                        <p>
                                            @lang('general.service_second_sec_service1')
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
                                <div class="intro-text center">
                                    <h2 class="darkcolor h2-service">@lang('general.service_second_sec_header_service2') </h2>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-2"></div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 container-padding">
                                <div class="half-block padding_half_service equalheight">
                                    <div class="intro-text">
                                        <p>
                                            @lang('general.service_second_sec_service2')
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
                                <div class="intro-text center">
                                    <h2 class="darkcolor h2-service">@lang('general.service_second_sec_header_service3') </h2>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-2"></div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 container-padding">
                                <div class="half-block padding_half_service equalheight">
                                    <div class="intro-text">
                                        <p>
                                            @lang('general.service_second_sec_service3')
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
                                <div class="intro-text center">
                                    <h2 class="darkcolor h2-service">@lang('general.service_second_sec_header_service4') </h2>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-2"></div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 container-padding">
                                <div class="half-block padding_half_service equalheight">
                                    <div class="intro-text">
                                        <p>
                                            @lang('general.service_second_sec_service4')
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
                                <div class="intro-text center">
                                    <h2 class="darkcolor h2-service">@lang('general.service_second_sec_header_service5') </h2>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-2"></div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 container-padding">
                                <div class="half-block padding_half_service equalheight">
                                    <div class="intro-text">
                                        <p>
                                            @lang('general.service_second_sec_service5')
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
                                <div class="intro-text center">
                                    <h2 class="darkcolor h2-service">@lang('general.service_second_sec_header_service6') </h2>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-2"></div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 container-padding">
                                <div class="half-block padding_half_service equalheight">
                                    <div class="intro-text">
                                        <p>
                                            @lang('general.service_second_sec_service6')
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="ourportfolio" class="padding">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-2"></div>
                <div class="col-md-6 col-sm-8">
                    <div class="intro-text center">
                        <h2 class="darkcolor heading_space">@lang('general.service_third_header')</h2>
                    </div>
                </div>
                <div class="col-md-3 col-sm-2"></div>
            </div>
            <div class="row bottom20">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <div class="intro-text center">
                        <p class="darkcolor heading_space">
                            @lang('general.service_event_text')
                        </p>
                        <p>
                            <a href="{{ route('contact') }}" class="button default">
                                @lang('general.big_get_in_touch')
                            </a>
                        </p>
                    </div>
                </div>
                <div class="col-md-1"></div>
            </div>
            <div id="masonry-light" class="cbp bottom30">
                <div class="cbp-item print logo">
                    <div class="image">
                        <img alt="image" src="{{ asset('images/services/image1.jpeg') }}">
                    </div>
                </div>
                <div class="cbp-item web">
                    <div class="image">
                        <img alt="image" src="{{ asset('images/services/image2.jpg') }}">
                    </div>
                </div>
                <div class="cbp-item print logo">
                    <div class="image">
                        <img alt="image" src="{{ asset('images/services/image3.jpg') }}">
                    </div>
                </div>
                <div class="cbp-item web print">
                    <div class="image">
                        <img alt="image" src="{{ asset('images/services/image4.jpg') }}">
                    </div>
                </div>
                <div class="cbp-item web log print">
                    <div class="image">
                        <img alt="image" src="{{ asset('images/services/image5.jpg') }}">
                    </div>
                </div>
                <div class="cbp-item logo">
                    <div class="image">
                        <img alt="image" src="{{ asset('images/services/image6.png') }}">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="get_in_touch" class="padding">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-2"></div>
                <div class="col-md-6 col-sm-8">
                    <div class="intro-text center">
                    </div>
                </div>
                <div class="col-md-3 col-sm-2"></div>
            </div>
        </div>
    </section>
@endsection