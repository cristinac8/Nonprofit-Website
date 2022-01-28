@extends('admin.template')

@section('content')

    <div class="container-fluid py-4">

        <div class="row">
            <div class="col-md-4">
                <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                            <h6 class="text-white text-capitalize ps-3">Add New</h6>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('admin/campaign') }}" method="post" enctype="multipart/form-data">
                            <div class="form">
                                <div class="form-group input-group input-group-static mb-3">
                                    <label for="" class="form-label">Title En</label>
                                    <input type="text" class="form-control" name="titleEN" required>
                                </div>
                                <div class="form-group input-group input-group-static mb-3">
                                    <label for="" class="">Description En</label>
                                    <textarea name="descriptionEN" class="form-control" id="" cols="30"
                                              rows="10"></textarea>
                                </div>

                                <div class="form-group input-group-static input-group mb-3">
                                    <label for="">Image</label>
                                    <input type="file" class="form-control" name="image" required>
                                </div>

                                <div class="form-group input-group input-group-static mb-3">
                                    <label for="" class="form-label">Titlu RO</label>
                                    <input type="text" class="form-control" name="titleRO">
                                </div>
                                <div class="form-group input-group input-group-static mb-3">
                                    <label for="" class="">Descriere RO</label>
                                    <textarea name="descriptionRO" class="form-control" id="" cols="30"
                                              rows="10"></textarea>
                                </div>

                                {!! csrf_field() !!}

                                <button class="btn btn-primary">Submit</button>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                            <h6 class="text-white text-capitalize ps-3">Data Master Campaign</h6>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table">
                            <table class="table align-items-center mb-0">
                                <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        #
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Title
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bold opacity-7">
                                        Action
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($campaigns as $campaign)
                                    <tr>
                                        <td>
                                            <img src="{{ asset('campaign/'.$campaign->photo) }}" width="150" alt="">
                                        </td>
                                        <td>{{ $campaign->title }}</td>
                                        <td>
                                            <a href="{{ url('admin/campaign/'.$campaign->id.'/delete') }}"
                                               class="btn btn-warning btn-icon-only" title="Delete">
                                                <i class="material-icons">delete</i>
                                            </a>
                                            <a href="{{ url('admin/campaign/'.$campaign->id.'/update') }}"
                                               class="btn btn-info btn-icon-only" title="Edit">
                                                <i class="material-icons">edit</i>
                                            </a>
                                            <a href="{{ url('admin/campaign/'.$campaign->id.'/donation') }}"
                                               class="btn btn-success btn-icon-only" title="Log Donation">
                                                <i class="material-icons">monetization_on</i>
                                            </a>
                                            <a target="_blank" href="{{ url('campaigns/'.$campaign->id.'') }}"
                                               class="btn btn-secondary btn-icon-only" title="View">
                                                <i class="material-icons">circle</i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>

@endsection
