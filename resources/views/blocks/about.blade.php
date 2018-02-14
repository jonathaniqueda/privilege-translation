<!--About us-->
<section id="about">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 container-padding">
                <div class="half-block padding_half equalheight center-block">
                    <div class="intro-text">
                        <span class="heading-title bottom25">
                            @lang('general.home_about')
                        </span>
                        <h2 class="darkcolor bottom45">@lang('general.home_about_text')</h2>

                        <p>
                            @lang('general.about_first_sec_text')
                        </p>
                        <div class="bars-custom top50">
                            <div class="barwrapper">
                                <span class="progressText">@lang('general.home_about_percentage1')</span>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0"
                                         aria-valuemax="100">
                                        <span class="popOver" data-toggle="tooltip" data-placement="top"
                                              title="100%"> </span>
                                    </div>
                                </div>
                            </div>
                            <div class="barwrapper">
                                <span class="progressText">@lang('general.home_about_percentage2')</span>
                                <div class="progress ">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="10"
                                         aria-valuemax="100" style="">
                                        <span class="popOver" data-toggle="tooltip" data-placement="top"
                                              title="100%"> </span>
                                    </div>
                                </div>
                            </div>
                            <div class="barwrapper">
                                <span class="progressText">@lang('general.home_about_percentage3')</span>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0"
                                         aria-valuemax="100">
                                        <span class="popOver" data-toggle="tooltip" data-placement="top"
                                              title="100%"> </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="{{ route('about') }}" class="button default top50">@lang('general.home_about_btn')</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 nopadding">
                <div class="image">
                    <img alt="image" src="{{ asset('images/ny_image.jpg') }}" class="equalheight">
                </div>
            </div>
        </div>
    </div>
</section>
<!--About us ends-->