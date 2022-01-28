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
                        <form action="{{ url('admin/blogs/'.$blog->id.'/update') }}" method="post" enctype="multipart/form-data">

                            <div class="d-flex justify-content-center my-3">
                                <img src="{{ asset('stories/'.$blog->photo) }}" width="250" alt="">
                            </div>

                            <div class="form">
                                <div class="form-group input-group input-group-static mb-3">
                                    <label for="" class="">Title En</label>
                                    <input type="text" class="form-control" name="titleEN" required value="{{ $blog->title }}">
                                </div>
                                <div class="form-group input-group input-group-static mb-3">
                                    <label for="" class="">Description En</label>
                                    <textarea name="descriptionEN" class="form-control" id="" cols="30"
                                              rows="10">{{ $blog->entry }}</textarea>
                                </div>

                                <div class="form-group input-group-static input-group mb-3">
                                    <label for="">Image</label>
                                    <input type="file" class="form-control" name="image" >
                                </div>

                                <div class="form-group input-group input-group-static mb-3">
                                    <label for="" class="">Titlu RO</label>
                                    <input type="text" class="form-control" name="titleRO" value="{{ $blog->titleRO }}">
                                </div>
                                <div class="form-group input-group input-group-static mb-3">
                                    <label for="" class="">Descriere RO</label>
                                    <textarea name="descriptionRO" class="form-control" id="" cols="30"
                                              rows="10">{{ $blog->entryRO }}</textarea>
                                </div>

                                {!! csrf_field() !!}

                                <button class="btn btn-primary">Update</button>
                                <a href="{{ url('admin/blogs') }}" class="btn btn-secondary">Back</a>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


    </div>

@endsection
