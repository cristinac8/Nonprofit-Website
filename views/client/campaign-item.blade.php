@extends('client.template')

@section('content')

    <section id="campaign-item">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="main">
                        <div class="image">
                            <img src="{{ asset('campaign/'.$campaign->photo) }}" alt="">
                        </div>
                        <h3 class="title my-3">
                            @if(App::currentLocale() == 'en')
                                {{ $campaign->title }}
                            @else
                                {{ $campaign->titleRO }}
                            @endif
                        </h3>
                        <div class="description article">
                            @if(App::currentLocale() == 'en')
                                {{ $campaign->description }}
                            @else
                                {{ $campaign->descriptionRO }}
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="donation">
                        <h3 class="mb-3">Donația ta contează!</h3>

                        @if(session()->has('client'))
                            <form action="{{ route('donation.make') }}" id="form-donation"
                                  method="post"
                                  class="require-validation"
                                  data-cc-on-file="false"
                                  data-stripe-publishable-key="{{ env('STRIPE_KEY') }}">
                                @csrf
                                <input type="hidden" name="title_donation" value="{{ $campaign->title }}">
                                <div class="form-row wrap--amount d-flex flex-row row">
                                    <div class="col-md-6">
                                        <label for="amount-5" class="amount active">
                                            <input id="amount-5" checked name="donation_amount" type="radio" value="5">
                                            <label for="amount-5">5 USD</label>
                                        </label>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="amount" for="amount-10">
                                            <input id="amount-10" name="donation_amount" type="radio" value="15">
                                            <label for="amount-10">15 USD</label>
                                        </label>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="amount" for="amount-15">
                                            <input id="amount-15" name="donation_amount" type="radio" value="35">
                                            <label for="amount-15">35 USD</label>
                                        </label>
                                    </div>
                                    <div class="col-md-6 d-flex">
                                        <label class="amount cst-lab" for="amount-cst">
                                            <input id="amount-cst" name="donation_amount" type="radio" value="10">
                                            <input id="amount-cst" name="donation_amount_cst" type="number" min="1"
                                                   value="" class="w-50">
                                            <label for="amount-cst">USD</label>
                                        </label>
                                    </div>
                                    <input type="hidden" id="cst" name="cstOrNo" value="0">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="" class="mb-1">Mulțumim că ai ales să te implici!</label>
                                    <textarea name="text" class="form-control" id="" cols="30" rows="5" placeholder="Poți lăsa un gând bun ce va aduce un zâmbet :)"></textarea>
                                </div>
                                <input type="hidden" name="campaign_id" value="{{ $campaign->id }}">
                                <input type="hidden" name="user_id" value="{{ session('client')['id'] }}">
                                <script>
                                    $(document).ready(function () {
                                        let iterCst = false;

                                        $('#form-donation').on('change', 'input[name=donation-amount]:checked', function () {

                                            let value = $(this).val();
                                            $('#amount-cst').val('')
                                            if (value > 0) {
                                                $('#cst').val('0')
                                            } else {
                                                $('#cst').val('1')
                                            }
                                        });

                                        $('.amount').click(function () {
                                            $('.amount').removeClass('active');
                                            $(this).addClass('active');
                                        })


                                    });
                                </script>
                                <div class='form-row row'>
                                    <div class='col-md-12 error form-group hide'>
                                        <div class='alert-danger alert'>Te rugăm să verifici datele introduse și să reîncerci.
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-warning w-100 mt-3">Trimite</button>
                            </form>
                        @else
                            <div class="alert alert-primary text-center">
                                Trebuie să te <a href="{{ url('login') }}" class="">Loghezi</a> pentru a putea face o donație. <br>Dacă nu ai deja un cont poți crea unul.
                            </div>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
