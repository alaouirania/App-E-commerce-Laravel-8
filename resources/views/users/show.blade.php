@extends('layouts.app')
@section('content')
<style>
    .justify-content-center{
        margin-top: 30px;
        box-shadow: 5px 7px #628272 ;
        border-radius: 5px;
        
    }
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
    }
</style>
<div class="container">
    <div class="justify-content-center">
        @if (\Session::has('success'))
            <div class="alert alert-success">
                <p>{{ \Session::get('success') }}</p>
            </div>
        @endif
        <div class="card">
            <div class="card-header">User
                @can('role-create')
                    <span class="float-right">
                        <a class="btn btn-primary" href="{{ route('users.index') }}">Back</a>
                    </span>
                @endcan
            </div>
            <div class="card-body">
                <div class="lead">
                    <strong>Name:</strong>
                    {{ $user->name }}
                </div>
                <div class="lead">
                    <strong>Email:</strong>
                    {{ $user->email }}
                </div>
                <div class="lead">
                    <strong>Password:</strong>
                    ********
                </div>
                <div class="lead">
                    <strong>City:</strong>
                    {{ $user->city }}
                </div>
                <div class="lead">
                    <strong>Phone Number:</strong>
                    {{ $user->phone_number }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection