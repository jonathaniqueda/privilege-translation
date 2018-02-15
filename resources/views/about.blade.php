@extends('layout.app')

@section('content')
    <!--Page header-->
    <section id="page-banner" class="padding_top">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="intro-text center padding_half">
                        <span class="heading-title bottom20">@lang('general.header_intro') </span>
                        <h2 class="whitecolor text-capitalize bottom45">@lang('general.about_us') </h2>
                        <ul class="breadcrumbs">
                            <li><a href="{{ route('index') }}">@lang('general.home')</a></li>
                            <li>@lang('general.about_us')</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Page header ends-->

    <section id="about">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 container-padding">
                    <div class="half-block padding_half equalheight center-block">
                        <div class="intro-text">
                            <span class="heading-title bottom25">
                                 @lang('general.about_first_sec')
                            </span>

                            <h2 class="darkcolor bottom45">@lang('general.about_first_sec_header')</h2>

                            <p>
                                @lang('general.about_first_sec_text')
                            </p>
                            <p>
                                @lang('general.about_first_sec_vision')
                            </p>
                            <p>
                                @lang('general.about_first_sec_mission')
                            </p>
                            <a href="{{ route('contact') }}" class="button default top50">
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
             style="background: url('{{asset('images/portugal-img.jpg')}}')"></section>
    <!--Counter Style 03 ends-->

    <section id="services" class="padding">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
                    <div class="intro-text center">
                        <span class="heading-title bottom25"> @lang('general.about_second_sec') </span>
                        <h2 class="darkcolor bottom45">@lang('general.about_second_sec_header')</h2>
                    </div>
                </div>
                <div class="col-md-2 col-sm-2"></div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h3 class="text-center">
                        @lang('general.about_second_sec_text')
                    </h3>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="icon_box equalheight top30">
                        <i class="fa fa-comment"></i>
                        <h4 class="text-capitalize darkcolor bottom10"><a
                                    href="javascript:void(0)">@lang('general.about_second_sec_diff1_header')</a></h4>
                        <hr>
                        <p class="no_bottom">
                            @lang('general.about_second_sec_diff1')
                        </p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="icon_box equalheight top30">
                        <i class="fa fa-lock"></i>
                        <h4 class="text-capitalize darkcolor bottom10"><a
                                    href="javascript:void(0)">@lang('general.about_second_sec_diff2_header')</a></h4>
                        <hr>
                        <p class="no_bottom">
                            @lang('general.about_second_sec_diff2')
                        </p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="icon_box equalheight top30">
                        <i class="fa fa-bar-chart"></i>
                        <h4 class="text-capitalize darkcolor bottom10"><a
                                    href="javascript:void(0)">@lang('general.about_second_sec_diff3_header')</a>
                        </h4>
                        <hr>
                        <p class="no_bottom">
                            @lang('general.about_second_sec_diff3')
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection