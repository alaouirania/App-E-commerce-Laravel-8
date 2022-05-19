@extends('layouts.app')
@section('content')
<style>
    .card-header{
        text-align: left;
        font-weight: bold;
        color: #21574a;
        font-size: 25px;
    }
    .float-right a{
        background-color: #21574a;
        color: #fff;
        font-weight: 300;
        border: 1px solid #21574a;
        float: right;
        padding: 5px 10px 5px 10px;
    }
    .float-right a:hover{
        background-color: #628272;
        border: 1px solid #628272;
    }
    .lead strong{
        color: #21574a;
        font-weight: 600;
    }</style>
<div class="container">
    <div class="justify-content-center">
        @if (\Session::has('success'))
            <div class="alert alert-success">
                <p>{{ \Session::get('success') }}</p>
            </div>
        @endif
        <div class="card">
            <div class="card-header">Permission
                @can('role-create')
                    <span class="float-right">
                        <a class="btn btn-primary" href="{{ route('permissions.index') }}">Back</a>
                    </span>
                @endcan
            </div>
            <div class="card-body">
                <div class="lead">
                    <strong>Name:</strong>
                    {{ $permission->name }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection