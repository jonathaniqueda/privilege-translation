<!-- Main-Navigation -->
<header id="main-navigation">
    <div id="navigation" class="boxednav">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar-default @if(request()->route()->getName() !== 'index') navbar-white @endif">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                    data-target="#fixed-collapse-navbar" aria-expanded="true">
                                <span class="icon-bar top-bar"></span>
                                <span class="icon-bar middle-bar"></span>
                                <span class="icon-bar bottom-bar"></span>
                            </button>
                            <a class="navbar-brand" href="{{ route('index') }}">
                                <img src="images/logo_priv_small_2.png" alt="logo">
                            </a>
                        </div>
                        <div id="fixed-collapse-navbar" class="navbar-collapse collapse navbar-right">
                            <ul class="nav navbar-nav">
                                <li class="dropdown flags-select">
                                    <a href="javascript:void(0)" class="dropdown-toggle remove-cursor"
                                       data-toggle="dropdown">
                                        <img class="flag"
                                             src="{{ asset('images/' . app()->getLocale() . '.svg') }}">
                                    </a>
                                    <ul class="dropdown-menu">
                                        @if(app()->getLocale() != 'pt-BR')
                                            <li>
                                                <a href="{{ route('change_locale', ['locale' => 'pt-BR']) }}">
                                                    <img class="flag" src="{{ asset('images/pt-BR.svg') }}"> - Português
                                                    do Brasil
                                                </a>
                                            </li>
                                        @endif
                                        @if(app()->getLocale() != 'en')
                                            <li>
                                                <a href="{{ route('change_locale', ['locale' => 'en']) }}">
                                                    <img class="flag" src="{{ asset('images/en.svg') }}"> - English
                                                </a>
                                            </li>
                                        @endif
                                        @if(app()->getLocale() != 'es')
                                            <li>
                                                <a href="{{ route('change_locale', ['locale' => 'es']) }}">
                                                    <img class="flag" src="{{ asset('images/es.svg') }}"> - Español
                                                </a>
                                            </li>
                                        @endif
                                        @if(app()->getLocale() != 'fr')
                                            <li>
                                                <a href="{{ route('change_locale', ['locale' => 'fr']) }}">
                                                    <img class="flag" src="{{ asset('images/fr.svg') }}"> - Français
                                                </a>
                                            </li>
                                        @endif
                                        @if(app()->getLocale() != 'it')
                                            <li>
                                                <a href="{{ route('change_locale', ['locale' => 'it']) }}">
                                                    <img class="flag" src="{{ asset('images/it.svg') }}"> - Italiano
                                                </a>
                                            </li>
                                        @endif
                                    </ul>
                                </li>
                                <li><a href="{{ route('index') }}">@lang('general.home')</a></li>
                                <li><a href="{{ route('about') }}">@lang('general.about')</a></li>
                                <li class="dropdown">
                                    <a href="javascript:void(0)" class="dropdown-toggle remove-cursor"
                                       data-toggle="dropdown">@lang('general.services')</a>
                                    <ul class="dropdown-menu">
                                        </li>
                                        <li>
                                            <a href="{{ route('services') }}#show_services">@lang('general.translate_tec')</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('services') }}#show_services">@lang('general.translate_jur')</a>
                                        <li>
                                            <a href="{{ route('services') }}#show_services">@lang('general.simul_inter')</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('services') }}#show_services">@lang('general.simul_consec')</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('services') }}#show_services">@lang('general.apostil')</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('services') }}#show_services">@lang('general.website_translate')</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="{{ route('work_with_us') }}">@lang('general.work_with_us')</a></li>
                                <li><a href="{{ route('contact') }}">@lang('general.contact')</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Main-Navigation ends -->

@if(request()->route()->getName() === 'index')
    <!--Main Slider-->
    <div id="revo_main_wrapper" class="rev_slider_wrapper fullwidthbanner-container">
        <div id="banner-main" class="rev_slider fullwidthabanner no-arrows" style="display:none;" data-version="5.0.7">
            <ul>
                <!-- SLIDE  -->
                <li data-index="rs-17" data-transition="fade" data-slotamount="default" data-easein="Power3.easeInOut"
                    data-easeout="Power3.easeInOut" data-masterspeed="1500">
                    <!-- MAIN IMAGE -->
                    <img src="images/slide1.jpg" alt="" data-bgposition="center center" data-bgfit="cover"
                         data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="10" data-no-retina>
                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption tp-resizeme"
                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['-80','-80','-80','-80']"
                         data-whitespace="nowrap" data-responsive_offset="on"
                         data-width="['none','none','none','360']" data-type="text"
                         data-textalign="['center','center','center','center']"
                         data-transform_idle="o:1;"
                         data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;"
                         data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                         data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1000" data-splitin="none"
                         data-splitout="none">
                        <h2 class="whitecolor">
                            @lang('general.header_slider_1')
                        </h2>
                    </div>

                    <div class="tp-caption tp-resizeme"
                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['140','140','140','140']"
                         data-whitespace="nowrap" data-transform_idle="o:1;"
                         data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power4.easeInOut;"
                         data-transform_out="s:900;e:Power2.easeInOut;s:900;e:Power2.easeInOut;" data-start="2000"
                         data-splitin="none" data-splitout="none" data-responsive_offset="on">
                        <a href="{{ route('contact') }}" class="button default scroll">
                            @lang('general.contact_us_cta')
                        </a>
                    </div>
                </li>
                <!-- SLIDE 2  -->
                <li data-index="rs-18" data-transition="fade" data-slotamount="default" data-easein="Power3.easeInOut"
                    data-easeout="Power3.easeInOut" data-masterspeed="1500">
                    <!-- MAIN IMAGE -->
                    <img src="images/slide2.jpg" alt="" data-bgposition="center center" data-bgfit="cover"
                         data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="10" data-no-retina>
                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption tp-resizeme"
                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['-80','-80','-80','-80']"
                         data-whitespace="nowrap" data-responsive_offset="on"
                         data-width="['none','none','none','360']" data-type="text"
                         data-textalign="['center','center','center','center']"
                         data-transform_idle="o:1;"
                         data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;"
                         data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                         data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1000" data-splitin="none"
                         data-splitout="none">
                        <h2 class="whitecolor">
                            @lang('general.header_slider_2')
                        </h2>
                    </div>

                    <div class="tp-caption tp-resizeme"
                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['140','140','140','140']"
                         data-whitespace="nowrap" data-transform_idle="o:1;"
                         data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power4.easeInOut;"
                         data-transform_out="s:900;e:Power2.easeInOut;s:900;e:Power2.easeInOut;" data-start="2000"
                         data-splitin="none" data-splitout="none" data-responsive_offset="on">
                        <a href="{{ route('services') }}" class="button default scroll">
                            @lang('general.show_our_services')
                        </a>
                    </div>
                </li>
                <!-- SLIDE 3  -->
                <li data-index="rs-19" data-transition="fade" data-slotamount="default" data-easein="Power3.easeInOut"
                    data-easeout="Power3.easeInOut" data-masterspeed="1500" class="text-right">
                    <!-- MAIN IMAGE -->
                    <img src="images/slide3.jpg" alt="" data-bgposition="center center" data-bgfit="cover"
                         data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="10" data-no-retina>
                    <!-- LAYER NR. 1 -->

                    <div class="tp-caption tp-resizeme"
                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['-80','-80','-80','-80']"
                         data-whitespace="nowrap" data-responsive_offset="on"
                         data-width="['none','none','none','360']" data-type="text"
                         data-textalign="['center','center','center','center']"
                         data-transform_idle="o:1;"
                         data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;"
                         data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                         data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1000" data-splitin="none"
                         data-splitout="none">
                        @lang('general.header_slider_3')
                    </div>
                    <div class="tp-caption tp-resizeme"
                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['140','140','140','140']"
                         data-whitespace="nowrap" data-transform_idle="o:1;"
                         data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power4.easeInOut;"
                         data-transform_out="s:900;e:Power2.easeInOut;s:900;e:Power2.easeInOut;" data-start="2000"
                         data-splitin="none" data-splitout="none" data-responsive_offset="on">
                        <a href="{{ route('about') }}" class="button default scroll">
                            @lang('general.show_about_us')
                        </a>
                    </div>
                </li>
                <!-- SLIDE 4  -->
                <li data-index="rs-20" data-transition="fade" data-slotamount="default" data-easein="Power3.easeInOut"
                    data-easeout="Power3.easeInOut" data-masterspeed="1500" class="text-right">
                    <!-- MAIN IMAGE -->
                    <img src="images/slide4.jpg" alt="" data-bgposition="center center" data-bgfit="cover"
                         data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="10" data-no-retina>
                    <!-- LAYER NR. 1 -->

                    <div class="tp-caption tp-resizeme"
                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['-80','-80','-80','-80']"
                         data-whitespace="nowrap" data-responsive_offset="on"
                         data-width="['none','none','none','360']" data-type="text"
                         data-textalign="['center','center','center','center']"
                         data-transform_idle="o:1;"
                         data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;"
                         data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                         data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1000" data-splitin="none"
                         data-splitout="none">
                        @lang('general.header_slider_4')
                    </div>
                    <div class="tp-caption tp-resizeme"
                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['140','140','140','140']"
                         data-whitespace="nowrap" data-transform_idle="o:1;"
                         data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power4.easeInOut;"
                         data-transform_out="s:900;e:Power2.easeInOut;s:900;e:Power2.easeInOut;" data-start="2000"
                         data-splitin="none" data-splitout="none" data-responsive_offset="on">
                        <a href="{{ route('contact') }}" class="button default scroll">
                            @lang('general.contact_us_cta')
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <!--Main Slider ends -->
@endif