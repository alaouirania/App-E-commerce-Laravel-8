@extends('layouts.app')
@section('content')
<div class="container">
    <div class="justify-content-center">
        @if (\Session::has('success'))
            <div class="alert alert-success">
                <p>{{ \Session::get('success') }}</p>
            </div>
        @endif
        <div class="card">
            <div class="card-header">Profile
                @can('role-create')
                    <span class="float-right">
                        <a class="btn btn-primary" href="{{ route('profile.index') }}">Back</a>
                    </span>
                @endcan
            </div>
            <div class="card-body">
                <div class="lead">
                    <strong>Title:</strong>
                    {{ $profile->title }}
                </div>
                <div class="lead">
                    <strong>Body:</strong>
                    {{ $profile->body }}
                </div>
                <div class="lead">
                    <strong>Description:</strong>
                    {{ $profile->description }}
                </div>
                <div class="lead">
                    <strong>Price:</strong>
                    {{ $profile->price }}
                </div>
                <div class="lead">
                    <strong>Category:</strong>
                    {{ $profile->category }}
                </div>
                <div class="lead">
                    <strong>Image:</strong>
                    {{ $profile->image }}
                </div>
                <div class="lead">
                    <strong>Location:</strong>
                    {{ $profile->location }}
                </div>
                <div class="lead">
                    <strong>Brand:</strong>
                    {{ $profile->brand }}
                </div>
                <div class="lead">
                    <strong>State:</strong>
                    {{ $profile->state }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection