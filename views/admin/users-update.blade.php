@extends('admin.template')

@section('content')

    <div class="container-fluid py-4">

        <div class="row">
            <div class="col-md-6">
                <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                            <h6 class="text-white text-capitalize ps-3">Update User</h6>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('admin/users/'.$user->id.'/update') }}" method="post">
                            <div class="form">
                                <div class="form-group input-group input-group-static mb-3">
                                    <label for="" class="">Name</label>
                                    <input type="text" class="form-control" name="name" required value="{{ $user->name }}">
                                </div>

                                <div class="form-group input-group input-group-static mb-3">
                                    <label for="" class="">Email</label>
                                    <input type="email" class="form-control" name="email" required value="{{ $user->email }}">
                                </div>

                                <div class="form-group input-group input-group-static mb-3">
                                    <label for="" class="">DATE OF BIRTH</label>
                                    <input type="date" class="form-control" name="date" required value="{{ $user->dateOfBirth }}">
                                </div>

                                <div class="form-group input-group input-group-static  mb-3">
                                    <label for="" class="ms-0">Gender</label>
                                    <select name="gender" id="" class="form-control ">
                                        <option value="1" @if($user->gender == 1) selected @endif>Male</option>
                                        <option value="0" @if($user->gender == 0) selected @endif>Female</option>
                                    </select>
                                </div>

                                <div class="form-group input-group input-group-static  mb-3">
                                    <label for="" class="ms-0">Role</label>
                                    <select name="role" id="" class="form-control ">
                                        <option value="0" @if($user->role == 0) selected @endif>Client</option>
                                        <option value="1" @if($user->role == 1) selected @endif>Admin</option>
                                    </select>
                                </div>

                                <div class="alert alert-info text-center text-sm text-white">
                                    Leave empty password if you do not want to change it.
                                </div>

                                <div class="form-group input-group input-group-static mb-3">
                                    <label for="" class="">Password</label>
                                    <input type="password" class="form-control" name="password">
                                </div>

                                {!! csrf_field() !!}

                                <button class="btn btn-primary">Update</button>
                                <a href="{{ url('admin/users') }}" class="btn btn-secondary">Back</a>

                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>


    </div>

@endsection
