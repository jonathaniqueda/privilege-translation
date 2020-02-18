@extends('layout.app')

@section('content')
    <!--Page header-->
    <section id="page-banner" class="padding_top">
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

    <div style="background-image: url('{{asset('images/background-contact.jpeg')}}'); background-repeat: no-repeat;
            background-size: cover;">
        <!--Map + Address 01-->
        <section id="map-address" class="padding_top contactwith" style="background: none;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="intro-text center">
                            <h2 class="whitecolor heading_space">@lang('general.contact_first_sec_header')</h2>
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
                                            <h6 class="whitecolor bottom30">Privilège Translations</h6>
                                            <p class="whitecolor">
                                                @lang('general.contact_address'): Av. Rio Branco, 156 - 7 andar
                                                - sala 720 –
                                                Centro - Rio de Janeiro - RJ
                                            </p>
                                            <p class="whitecolor">@lang('general.contact_zipcode'): 20040.003</p>
                                            <p class="whitecolor">@lang('general.contact_phones'): +(55 21) 2717-0801 /
                                                9-6493-4783</p>
                                            <p class="whitecolor">
                                                <a href="mailto:comercial@privilege-ts.com.br">E-mail:
                                                    comercial@privilege-ts.com.br</a>
                                            </p>
                                            <hr/>
                                            <ul class="social top50">
                                                <li>
                                                    <a class="whitecolor"
                                                       href="https://facebook.com/pages/Privilège-Translations/102967433378705"><i
                                                                class="fa fa-facebook"></i> </a></li>
                                                <li>
                                                    <a href="https://www.linkedin.com/in/privilege-translations-0976a9122/"><i
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
        <section id="contact-form" class="padding_bottom" style="background: none;">
            <div class="container">
                <div class="row">
                    <div class="col-md-offset-2 col-md-8">
                        <form class="getin_form" method="POST" action="{{ route('contact') }}">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label for="email" class="whitecolor">@lang('general.contact_name')</label>
                                        <input class="form-control" type="text" name="name" id="name" required>
                                    </div>
                                    @if($errors->has('name'))
                                        <div class="alert alert-danger">
                                            {{ $errors->first('name') }}
                                        </div>
                                    @endif
                                </div>
                                <div class="col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label for="email" class="whitecolor">@lang('general.contact_email')</label>
                                        <input class="form-control" type="email" name="email" id="email" required>
                                    </div>
                                    @if($errors->has('email'))
                                        <div class="alert alert-danger">
                                            {{ $errors->first('email') }}
                                        </div>
                                    @endif
                                </div>
                                <div class="col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label for="phone" class="whitecolor">@lang('general.contact_phone')</label>
                                        <input class="form-control phone_with_ddd" type="tel" name="phone" required
                                               id="phone">
                                    </div>
                                    @if($errors->has('phone'))
                                        <div class="alert alert-danger">
                                            {{ $errors->first('phone') }}
                                        </div>
                                    @endif
                                </div>
                                <div class="col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label for="service" class="whitecolor">@lang('general.contact_service')</label>
                                        <select class="form-control" id="service" name="service" required>
                                            <option value="@lang('general.service_second_sec_header_service1')">@lang('general.service_second_sec_header_service1')</option>
                                            <option value="@lang('general.service_second_sec_header_service2')">@lang('general.service_second_sec_header_service2')</option>
                                            <option value="@lang('general.service_second_sec_header_service3')">@lang('general.service_second_sec_header_service3')</option>
                                            <option value="@lang('general.service_second_sec_header_service4')">@lang('general.service_second_sec_header_service4')</option>
                                            <option value="@lang('general.service_second_sec_header_service5')">@lang('general.service_second_sec_header_service5')</option>
                                            <option value="@lang('general.service_second_sec_header_service6')">@lang('general.service_second_sec_header_service6')</option>
                                            <option value="@lang('general.service_second_sec_header_service7')">@lang('general.service_second_sec_header_service7')</option>
                                        </select>
                                    </div>
                                    @if($errors->has('service'))
                                        <div class="alert alert-danger">
                                            {{ $errors->first('service') }}
                                        </div>
                                    @endif
                                </div>
                                <div class="col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label for="msg" class="whitecolor">@lang('general.contact_msg')</label>
                                        <textarea class="form-control" name="msg" id="msg"></textarea>
                                    </div>
                                    @if($errors->has('msg'))
                                        <div class="alert alert-danger">
                                            {{ $errors->first('msg') }}
                                        </div>
                                    @endif
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
    </div>
@endsection

@section('scripts')
    <script>
      $('.phone_with_ddd').mask('(00) 00000-0000');
    </script>
    @if(!empty(session('status')))
        <script>
          alert("{{ session('status') }}");
        </script>
    @endif
@endsection