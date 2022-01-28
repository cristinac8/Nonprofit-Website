@extends('client.template')

@section('content')

    <section class="mb-5" id="thanks">
        <div class="container">
            <h3 class="text-center mb-3">Ups Something Wrong</h3>
            <div class="image mb-3">
                <img src="{{ asset('images/society_02.jpg') }}" alt="">
            </div>
            <div class="d-flex justify-content-center ">
                <p class="alert alert-primary ">
                    Your payment is not success please try again.
                </p>
            </div>
        </div>
    </section>

@endsection
