@extends('client.template')

@section('content')

    <section id="banner-stories" class="arrow-down-section">
        <h3 class="header--section">
            {{ __('post.list_of_campaign') }}
        </h3>
    </section>

    <section class="stories all--campaign mt-5 pt-3" id="post">
        <div class="container">
            <div class="row">
                @foreach($campaigns as $campaign)

                    <div class="col-md-4">
                        <div class="box--stories">
                            <div class="image">
                                <img src="{{ asset("campaign/".$campaign->photo) }}" alt="">
                            </div>
                            <div class="entry">
                                <h3>
                                    @if(App::currentLocale() == 'en')
                                        {{ $campaign->title }}
                                    @else
                                        {{ $campaign->titleRO }}
                                    @endif
                                </h3>
                                <p>
                                    @if(App::currentLocale() == 'en')
                                        {{ substr($campaign->description, 0, 50) }}...
                                    @else
                                        {{ substr($campaign->descriptionRO, 0, 50) }}...
                                    @endif
                                </p>
                                <a href="{{ url('campaign/'.$campaign->id) }}" class="btn btn--donate">{{ __('home.donate') }} </a>
                            </div>
                        </div>
                    </div>
                @endforeach

                <div class="center d-flex justify-content-center my-5">
                    {!! $campaigns->links() !!}
                </div>
            </div>
        </div>
    </section>

@endsection
