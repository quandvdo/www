@extends('layouts.app')

@section('main-content')
    @include('backend.partials.breadcrumbs',[
        'title' => 'Add New User',
        'prelink' => route('users.index'),
        'prepage' => 'All Users',
        'page' => 'Add new user form'
    ])

    <div class="row mb-4">
        <div class="col-md-12">
            <h4>Add User </h4>
        </div>
    </div>
    <!-- end of row -->
    <form action="{{route('users.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-4">
            <div class="col-md-8 mb-4">
                <div class="card text-left">
                    <div class="card-body">
                        <div class="card-title mb-3">User Information</div>
                        <div class="row">
                            <div class="col-md-12 form-group mb-3">
                                <label for="name">Name</label>
                                <input type="text"
                                       class="form-control{{$errors->has('name') ? ' is-invalid' : ''}}"
                                       id="name" name="name"
                                       placeholder="Enter your first name" required autofocus value="{{ old('name') }}">
                                @if($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{$errors->first('name')}}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="col-md-12 form-group mb-3">
                                <label for="email">Email address</label>
                                <input type="email"
                                       class="form-control{{$errors->has('email') ? ' is-invalid' : ''}}"
                                       id="email" name="email"
                                       placeholder="Enter email" required value="{{ old('email') }}">
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="col-md-12 form-group mb-3">
                                <label for="password">Password</label>
                                <input type="password"
                                       class="form-control{{$errors->has('password') ? ' is-invalid' : ''}}"
                                       id="password" name="password"
                                       placeholder="Enter Password" required>
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="col-md-6 form-group mb-3">
                                <label for="role_id">Default Role</label>
                                <select class="form-control select2" name="role_id" required>
                                    @foreach($roles as $role)
                                        <option value="{{$role->id}}">{{strtoupper($role->name)}}
                                            - {{$role->display_name}}</option>
                                    @endforeach
                                </select>
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
                                <span class="input-group-text" id="uploadBtn">Upload</span>
                            </div>
                            <div class="custom-file">
                                {{--    <input type="file" class="custom-file-input" id="avatar" name="avatar"
                                           aria-describedby="uploadBtn" value="{{old('avatar')}}"  >
                                    <label class="custom-file-label" for="avatar">Choose file</label>--}}
                                <label for="avatar">Example file input</label>
                                <input type="file" class="form-control-file" id="avatar" name="avatar">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end of col -->
            <div class="col-md-12">
                <div class="card text-left">
                    <div class="card-body">
                        <div class="input-group mb-3">
                            <button class="btn btn-primary mr-2" type="submit">Create</button>
                            <button class="btn btn-warning" type="reset">Reset</button>
                        </div>
                    </div>

                </div>
            </div>
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