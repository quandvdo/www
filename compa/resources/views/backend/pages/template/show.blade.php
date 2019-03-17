@extends('layouts.app')

@section('main-content')
    <div class="breadcrumb">
        <h1>Compass Travel</h1>
        <ul>
            <li><a href="{{route('dashboard.index')}}">Admin</a></li>
            <li>Dashboard</li>
        </ul>

    </div>

    <div class="separator-breadcrumb border-top"></div>
    {{-- end of breadcrumb --}}

@endsection;