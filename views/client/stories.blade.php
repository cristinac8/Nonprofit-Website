@extends('client.template')

@section('content')

    <section id="banner-stories" class="arrow-down-section">
        <h3 class="header--section">
            {{ __('post.list_of_stories') }}
        </h3>
    </section>

    <section class="stories all--campaign mt-5 pt-3" id="post">
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
                                <div class="">
                                    @if(App::currentLocale() == 'en')
                                        {{ substr($story->entry, 0, 150) }}...
                                    @else
                                        {{ substr($story->entryRO, 0, 150) }}...
                                    @endif
                                </div>
                                <a href="{{ url('stories/'.$story->url) }}" class="read--more">{{ __('home.read_more') }} &raquo;</a>
                            </div>
                        </div>
                    </div>
                @endforeach

                <div class="center d-flex justify-content-center my-5">
                    {!! $stories->links() !!}
                </div>
            </div>
        </div>
    </section>

@endsection
