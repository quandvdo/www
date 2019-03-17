@extends('layouts.app')

@section('main-content')
    <div class="breadcrumb">
        <h1>User Create</h1>
        <ul>
            <li><a href="{{route('dashboard.index')}}">Admin</a></li>
            <li>Dashboard</li>
        </ul>

    </div>

    <div class="separator-breadcrumb border-top"></div>
    {{-- end of breadcrumb --}}
    <div class="row mb-4">
        <div class="col-md-12">
            <h4>Add User </h4>
        </div>
    </div>
    <!-- end of row -->
    <form action="{{route('users.store')}}" method="POST">
        @csrf
        <div class="row mb-4">
            <div class="col-md-8 mb-4">
                <div class="card text-left">
                    <div class="card-body">
                        <div class="card-title mb-3">User Information</div>
                        <div class="row">
                            <div class="col-md-12 form-group mb-3">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name"
                                       placeholder="Enter your first name">
                            </div>
                            <div class="col-md-12 form-group mb-3">
                                <label for="email">Email address</label>
                                <input type="email" class="form-control" id="email" name="email"
                                       placeholder="Enter email">
                            </div>
                            <div class="col-md-12 form-group mb-3">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" name="password"
                                       placeholder="Enter Password">
                            </div>
                            <div class="col-md-6 form-group mb-3">
                                <label for="role_id">Default Role</label>
                                <select class="form-control select2" name="role_id">
                                    @foreach($roles as $role)
                                        <option value="{{$role->id}}">{{strtoupper($role->name)}}
                                            - {{$role->display_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-12">
                                <button class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end of col -->

            <div class="col-md-4 mb-4">
                <div class="card text-left">

                    <div class="card-body">
                        <div class="card-title">Avatar</div>
                        <img src="http://final.test/storage/users/default.png"
                             style="width:200px; height:auto; clear:both; display:block; padding:2px; border:1px solid #ddd; margin-bottom:10px;">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                            </div>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="inputGroupFile01"
                                       aria-describedby="inputGroupFileAddon01">
                                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end of col -->
        </div>
    </form>
@endsection

@push('page-css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet"/>
@endpush

@push('page-js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    <script>
        $(document).ready(function () {
            $('.select2').select2();
        });
    </script>
@endpush