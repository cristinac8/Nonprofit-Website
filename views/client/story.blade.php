@extends('client.template')

@section('content')

    <section id="banner-stories" class="arrow-down-section">
        <h3 class="header--section">
            @if(App::currentLocale() == 'en')
                {{ $story->title }}
            @else
                {{ $story->titleRO }}
            @endif
        </h3>
    </section>

    <section id="campaign-item" class="pt-5 mt-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="main">
                        <div class="image">
                            <img src="{{ asset('stories/'.$story->photo) }}" alt="">
                        </div>
                        <div class="description article my-4">
                            @if(App::currentLocale() == 'en')
                                {{ $story->entry }}
                            @else
                                {{ $story->entryRO }}
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
