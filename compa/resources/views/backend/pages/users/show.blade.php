@extends('layouts.app')

@section('main-content')
    @include('backend.partials.breadcrumbs',[
         'title' => 'User Detail',
         'prelink' => route('users.index'),
         'prepage' => 'All User List',
         'page' => $user->name . ' - <span class="badge badge-success>' . strtoupper($user->roles[0]->name) . '</span>'
        ])

@endsection;