@extends('client.template')

@section('content')

    <section id="carousel">
        <div class="">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('images/society_01.jpg') }}" class="d-block w-100" alt="Slider 1">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/society_02.jpg') }}" class="d-block w-100" alt="slider 2">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/society_03.jpg') }}" class="d-block w-100" alt="slider 2">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                        data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                        data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>
    <section id="quote">
        <div class="container">
            <div class="row">
                <div class="col-md-9 d-flex flex-rows">
                    <div class="ico">
                        <i class="fas fa-quote-left"></i>
                    </div>
                    <div class="text">
                        {{ __('home.banner_quote') }}
                    </div>
                </div>
                <div class="col-md-3 d-flex align-self-center justify-content-center">
                    <a href="" class="btn btn--quote">{{ __('home.read_our_stories') }}</a>
                </div>
            </div>
        </div>
    </section>

    <section id="new-campaign">
        <div class="container">
            <h3 class="header--section">{{ __('home.new_campaign') }}</h3>
            <div class="row">
                @foreach($campaigns as $campaign)
                    <div class="col-md-3">
                        <div class="box--campaign">
                            <div class="image">
                                <a href="{{ url('campaigns/'.$campaign->id) }}">
                                    <img src="{{ asset('campaign/'.$campaign->photo) }}" alt="">
                                </a>
                            </div>
                            <div class="text">
                                <a href="{{ url('campaigns/'.$campaign->id) }}" class="title-box--campaign">
                                    @if(App::currentLocale() == 'en')
                                        {{ $campaign->title }}
                                    @else
                                        {{ $campaign->titleRO }}
                                    @endif
                                </a>
                                <a href="{{ url('campaigns/'.$campaign->id) }}"
                                   class="btn btn-donate--campaign">{{ __('home.donate') }}</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="wrap-center mt-5 d-flex justify-content-center">
                <a href="{{ url('campaigns') }}" class="btn btn--campaign">{{ __('home.load_more_campaigns') }}</a>
            </div>
        </div>
    </section>

    <section id="get-involved" class="arrow-down-section">
        <h3 class="header--section">{{ __('home.how_can_get_involved') }}</h3>
        <p class="sub-header--section">{{ __('home.learn_how_you_can_get_involved') }}</p>
    </section>

    <section id="involved-content">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="image img-main">
                        <img src="{{ asset('images/society_02.jpg') }}" alt="">
                    </div>
                </div>
                <div class="col-md-8">
                    <h3 class="header--section">{{ __('home.send_provisions') }}</h3>
                    <p>
                        @lang('home.send_package_quote')
                    </p>
                </div>
            </div>

            <div class="features mt-4">
                <div class="row">
                    <div class="col-md-3">
                        <div class="box--feature">
                            <div class="image"
                                 style="background: url('{{ asset("images/donations/donation_01.jpg") }}')">
                                <div class="text">
                                    {{ __('home.income_caption') }}
                                </div>
                                <h3 class="title--feature">{{ __('home.income_tax') }}</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="box--feature">
                            <div class="image"
                                 style="background: url('{{ asset("images/donations/donation_01.jpg") }}')">
                                <div class="text">
                                    {{ __('home.volunteer_caption') }}
                                </div>
                                <h3 class="title--feature">{{ __('home.volunteer')  }}</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="box--feature">
                            <div class="image"
                                 style="background: url('{{ asset("images/donations/donation_01.jpg") }}')">
                                <div class="text">
                                    {{ __('home.be_a_partner_caption') }}
                                </div>
                                <h3 class="title--feature">{{ __('home.be_a_partner') }}</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="box--feature">
                            <div class="image"
                                 style="background: url('{{ asset("images/donations/donation_01.jpg") }}')">
                                <div class="text">
                                    {{ __('home.donate_caption') }}
                                </div>
                                <h3 class="title--feature">{{ __('home.donate') }}</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="support mt-4">
                <h3 class="text-center header--section">@lang('home.something_everyone')</h3>
                <div class="row">
                    <div class="col-md-4">
                        <div class="box--support d-flex">
                            <img src="{{ asset('images/home.svg') }}" alt="">
                            <h3 class="text">{{ __('home.Church_Religion')  }}</h3>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box--support d-flex">
                            <img src="{{ asset('images/school.svg') }}" alt="">
                            <h3 class="text">{{ __('home.School_Education') }}</h3>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box--support d-flex">
                            <img src="{{ asset('images/home2.svg') }}" alt="">
                            <h3 class="text">{{ __('home.Animals_Wildlife') }}</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="banner-stories" class="arrow-down-section">
        <h3 class="header--section">{{ __('home.stories') }}</h3>
        <p class="sub-header--section">{{ __('home.stories_info_caption') }}</p>
    </section>

    <section id="stories">
        <div class="container">
            <div class="row">
                @foreach($stories as $story)
                    <div class="col-md-4">
                        <div class="box--stories">
                            <div class="image">
                                <img src="{{ asset("stories/".$story->photo) }}" alt="">
                            </div>
                            <div class="entry">
                                <h3>
                                    @if(App::currentLocale() == 'en')
                                        {{ $story->title }}
                                    @else
                                        {{ $story->titleRO }}
                                    @endif
                                </h3>
                                <span class="date">{{ date('F d, Y', strtotime($story->created_at)) }}</span>
                                <p>
                                    @if(App::currentLocale() == 'en')
                                        {{ substr($story->entry, 0, 120) }}...
                                    @else
                                        {{ substr($story->entryRO, 0, 120) }}...
                                    @endif
                                </p>
                                <a href="{{ url('stories/'.$story->url) }}" class="read--more">{{ __('home.read_more') }} &raquo;</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="wrap-center">
                <a href="{{ url('post-stories') }}" class="btn btn--stories">{{ __('home.read_our_stories') }}</a>
            </div>
        </div>
    </section>

@endsection
