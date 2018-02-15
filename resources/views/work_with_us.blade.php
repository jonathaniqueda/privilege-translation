@extends('layout.app')

@section('content')
    <section id="page-banner" class="padding_top">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="intro-text center padding_half">
                        <span class="heading-title bottom20">@lang('general.header_intro') </span>
                        <h2 class="whitecolor text-capitalize bottom45">@lang('general.work_with_us') </h2>
                        <ul class="breadcrumbs">
                            <li><a href="{{ route('index') }}">@lang('general.home')</a></li>
                            <li>@lang('general.work_with_us')</li>
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
                    <div class="half-block padding_half equalheight center-block">
                        <div class="intro-text">
                            <span class="heading-title bottom25">
                                 @lang('general.work_with_us_first_sec')
                            </span>

                            <h2 class="darkcolor bottom45">@lang('general.work_with_us_first_sec_header')</h2>

                            <h3 class="bottom20">
                                <img src="{{ asset('images/people_shaking_hands.jpg') }}">
                            </h3>

                            <h3 class="bottom20 text-center">
                                @lang('general.work_with_us_first_sec_text')
                            </h3>
                            <h3 class="text-center">
                                @lang('general.work_with_us_first_sec_text2')
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection