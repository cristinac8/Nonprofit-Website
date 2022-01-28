@extends('admin.template')

@section('content')

    <div class="container-fluid py-4">

        <div class="row">
            <div class="col-md-4">
                <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                            <h6 class="text-white text-capitalize ps-3">Campaigns</h6>
                        </div>
                    </div>
                    <div class="card-body">
                        <h3>{{ $campaign->title }}</h3>
                        <div class="image">
                            <img src="{{ asset('campaign/'.$campaign->photo) }}" alt=""
                                 style="width: 100%; object-fit: cover; height: 300px">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                            <h6 class="text-white text-capitalize ps-3">Donation Log</h6>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table">
                            <table class="table align-items-center mb-0">
                                <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Donate By
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Amount
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Message
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($donations as $k => $donation)
                                    <tr>
                                        <td>{{ $donation->user->name }}</td>
                                        <td>{{ '$ '.number_format($donation->amount,2) }}</td>
                                        <td>{{ substr($donation->text, 0, 50) }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer">
                        {!! $donations->links() !!}
                    </div>
                </div>
            </div>
        </div>


    </div>

@endsection
