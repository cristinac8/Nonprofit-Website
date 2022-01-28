@extends('client.template')

@section('content')
    <section id="banner-stories" class="arrow-down-section">
        <h3 class="header--section">
            {{ __('profile.history_page') }}
        </h3>
    </section>

    <section id="profile" class="mt-5 p-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 history">
                    <h4>{{ __('profile.history_donation') }}</h4>
                    <div class="row">
                        @foreach($donations  as $donation)
                            <div class="col-md-4">
                                <div class="box--stories">
                                    <div class="image">
                                        <img src="{{ asset("campaign/".$donation->campaign->photo) }}" alt="">
                                    </div>
                                    <div class="entry">
                                        <h3>
                                            @if(App::currentLocale() == 'en')
                                                {{ $donation->campaign->title }}
                                            @else
                                                {{ $donation->campaign->titleRO }}
                                            @endif
                                        </h3>
                                        <p>{{__('profile.you_donate')}}: {{ '$'.number_format($donation->amount,2) }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="pagination d-flex justify-content-center mt-5">
                        {!! $donations->links() !!}
                    </div>
                </div>
                <div class="col-md-4">
                    <h4 class="text-center">{{ __('profile.account') }}</h4>
                    <div class="profile-box p-3">
                        <table class="table table-bordered">
                            <tr>
                                <th>{{ __('profile.name') }}</th>
                                <td>{{ $user->name }}</td>
                            </tr>
                            <tr>
                                <th>{{ __('profile.email') }}</th>
                                <td>{{ $user->email }}</td>
                            </tr>
                            <tr>
                                <th>{{ __('profile.phone') }}</th>
                                <td>{{ $user->phone }}</td>
                            </tr>
                            <tr>
                                <th>{{ __('profile.birth_day') }}</th>
                                <td>{{ date('d F Y', strtotime($user->dateOfBirth)) }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
