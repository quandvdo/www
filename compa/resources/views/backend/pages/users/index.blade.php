@extends('layouts.app')

@section('main-content')
    <div class="breadcrumb">
        <h1>All Users</h1>
        <ul>
            <li><a href="{{route('dashboard.index')}}">Dashboard</a></li>
            <li>List of all User</li>
        </ul>

    </div>

    <div class="separator-breadcrumb border-top"></div>
    {{-- end of breadcrumb --}}

    <div class="row mb-4">
        <div class="col-md-12">
            <h4>List all users </h4>
            <a href="{{route('users.create')}}" class="btn btn-success"><i
                        class="fas fa-plus"></i> Add New User</a>
        </div>
    </div>
    <!-- end of row -->

    <div class="row mb-4">
        <div class="col-md-12 mb-4">
            <div class="card text-left">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="users-table">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Avatar</th>
                                <th>Created At</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- end of col -->
    </div>
@endsection

@push('page-css')
    <link rel="stylesheet" href="{{asset('assets/css/vendor/datatables.min.css')}}">
@endpush

@push('page-js')
@endpush

@push('bottom-js')
    <script>
        let host = location.hostname;
        $(document).ready(function () {
            $('#users-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: '{!! route('dt.users.data') !!}',
                    method: 'post',
                },
                columns: [
                    {data: 'id', name: 'id'},
                    {data: 'name', name: 'name'},
                    {
                        data: 'email',
                        name: 'email',
                        render: function (data, type, row, meta) {
                            return '<a href="mailto:' + data + '">' + data + '</a>';
                        }
                    },
                    {
                        data: 'roles[1].name',
                        name: 'roles[1].name',
                        render: function (data, type, row, meta) {
                            switch (data) {
                                case 'admin':
                                    return '<span class="badge badge-danger">' + data.toUpperCase() + '</span>';
                                    break;
                                case 'manager':
                                    return '<span class="badge badge-warning">' + data.toUpperCase() + '</span>';
                                    break;
                                case 'user':
                                    return '<span class="badge badge-info">' + data.toUpperCase() + '</span>';
                                    break;
                                default:
                                    return data.toUpperCase();
                            }
                        }
                    },
                    {
                        data: 'avatar',
                        name: 'avatar',
                        render: function (data, type, row, meta) {
                            return '<img src="http://' + host + ':3000/assets/images/' + data + '"/>';
                        }
                    },
                    {data: 'created_at', name: 'created_at'},
                    {data: 'action', name: 'action', orderable: false, searchable: false},
                ]
            });
        });
    </script>
@endpush