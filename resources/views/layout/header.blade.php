<!-- Main-Navigation -->
<header id="main-navigation">
    <div id="navigation" class="boxednav">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar-default">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                    data-target="#fixed-collapse-navbar" aria-expanded="true">
                                <span class="icon-bar top-bar"></span>
                                <span class="icon-bar middle-bar"></span>
                                <span class="icon-bar bottom-bar"></span>
                            </button>
                            <a class="navbar-brand" href="{{ route('index') }}">
                                {{--<img src="images/logo_priv.png" alt="logo">--}}
                                <img src="images/logo_priv_small_2.png" alt="logo">
                            </a>
                        </div>
                        <div id="fixed-collapse-navbar" class="navbar-collapse collapse navbar-right">
                            <ul class="nav navbar-nav">
                                <li><a href="{{ route('index') }}">@lang('general.home')</a></li>
                                <li class="dropdown">
                                    <a href="{{ route('about') }}" class="dropdown-toggle"
                                       data-toggle="dropdown">@lang('general.about')</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="{{ route('about') }}#mission">@lang('general.mission')</a></li>
                                        <li><a href="{{ route('about') }}#vision">@lang('general.vision')</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="{{ route('services') }}" class="dropdown-toggle"
                                       data-toggle="dropdown">@lang('general.services')</a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="{{ route('services') }}#simul_inter">@lang('general.simul_inter')</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('services') }}#simul_consec">@lang('general.simul_consec')</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('services') }}#translate_tec">@lang('general.translate_tec')</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('services') }}#translate_jur">@lang('general.translate_jur')</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('services') }}#apostil">@lang('general.apostil')</a>
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
        </ul>
    </div>
</div>
<!--Main Slider ends -->