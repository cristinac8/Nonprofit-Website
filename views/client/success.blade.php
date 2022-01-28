@extends('client.template')

@section('content')

    <section class="mb-5" id="thanks">
        <div class="container">
            <h3 class="text-center mb-3">Thanks</h3>
            <div class="image mb-3">
                <img src="{{ asset('images/society_02.jpg') }}" alt="">
            </div>
            <div class="d-flex justify-content-center ">
                <p class="alert alert-primary ">
                    Congratulation your payment donation is success. And thanks for help each other.
                </p>
            </div>
        </div>
    </section>

@endsection
