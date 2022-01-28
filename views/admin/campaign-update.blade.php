@extends('admin.template')

@section('content')

    <div class="container-fluid py-4">

        <div class="row">
            <div class="col-md-6">
                <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                            <h6 class="text-white text-capitalize ps-3">Update Campaign</h6>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('admin/campaign/'.$campaign->id.'/update') }}" method="post"
                              enctype="multipart/form-data">
                            <div class="form">

                                <div class="image mb-3 d-flex justify-content-center">
                                    <img src="{{ asset('campaign/'.$campaign->photo) }}" alt="" width="250">
                                </div>

                                <div class="form-group input-group input-group-static mb-3">
                                    <label for="" class="">Title En</label>
                                    <input type="text" class="form-control" name="titleEN" required
                                           value="{{ $campaign->title }}">
                                </div>
                                <div class="form-group input-group input-group-static mb-3">
                                    <label for="" class="">Description En</label>
                                    <textarea name="descriptionEN" class="form-control" id="" cols="30"
                                              rows="10">{{ $campaign->description }}</textarea>
                                </div>

                                <div class="form-group input-group-static input-group mb-3">
                                    <label for="">Image</label>
                                    <input type="file" class="form-control" name="image" >
                                </div>

                                <div class="form-group input-group input-group-static mb-3">
                                    <label for="" class="">Titlu RO</label>
                                    <input type="text" class="form-control" name="titleRO" value="{{ $campaign->titleRO }}">
                                </div>
                                <div class="form-group input-group input-group-static mb-3">
                                    <label for="" class="">Descriere RO</label>
                                    <textarea name="descriptionRO" class="form-control" id="" cols="30"
                                              rows="10">{{ $campaign->descriptionRO }}</textarea>
                                </div>

                                {!! csrf_field() !!}

                                <button class="btn btn-primary">Update</button>
                                <a href="{{ url('admin/campaign') }}" class="btn btn-secondary">Back</a>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


    </div>

@endsection
