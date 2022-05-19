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
            <div class="card-header">Post
                @can('role-create')
                    <span class="float-right">
                        <a class="btn btn-primary" href="{{ route('welcome') }}">Back</a>
                    </span>
                @endcan
            </div>
            <div class="card-body">
                <div class="lead">
                    <strong>Title:</strong>
                    {{ $post->title }}
                </div>
                <div class="lead">
                    <strong>Body:</strong>
                    {{ $post->body }}
                </div>
                <div class="lead">
                    <strong>Description:</strong>
                    {{ $post->description }}
                </div>
                <div class="lead">
                    <strong>Price:</strong>
                    {{ $post->price }}
                </div>
                <div class="lead">
                    <strong>Category:</strong>
                    {{ $post->category }}
                </div>
                <div class="lead">
                    <strong>Image:</strong>
                    {{ $post->image }}
                </div>
                <div class="lead">
                    <strong>Location:</strong>
                    {{ $post->location }}
                </div>
                <div class="lead">
                    <strong>Brand:</strong>
                    {{ $post->brand }}
                </div>
                <div class="lead">
                    <strong>State:</strong>
                    {{ $post->state }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection