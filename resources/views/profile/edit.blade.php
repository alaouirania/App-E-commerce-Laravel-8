@extends('layouts.app')
@section('content')
<div class="container">
    <div class="justify-content-center">
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Opps!</strong> Something went wrong, please check below errors.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="card">
            <div class="card-header">Create profile
                <span class="float-right">
                    <a class="btn btn-primary" href="{{ route('profile.index') }}">profile</a>
                </span>
            </div>
            <div class="card-body">
                {!! Form::model($profile, ['route' => ['profile.update', $profile->id], 'method'=>'PATCH']) !!}
                    <div class="form-group">
                        <strong>Title:</strong>
                        {!! Form::text('title', null, array('placeholder' => 'Title','class' => 'form-control')) !!}
                    </div>
                    <div class="form-group">
                        <strong>Body:</strong>
                        {!! Form::textarea('body', null, array('placeholder' => 'Body','class' => 'form-control')) !!}
                    </div>
                    <div class="form-group">
                        <strong>Description:</strong>
                        {!! Form::text('description', null, array('placeholder' => 'Description','class' => 'form-control')) !!}
                    </div>
                    <div class="form-group">
                        <strong>Price:</strong>
                        {!! Form::text('price', null, array('placeholder' => 'Price','class' => 'form-control')) !!}
                    </div>
                    <div class="form-group">
                        <strong>Category:</strong><br>   
                        <?php
                        $options = array('IT and electrics', 'Vehicles', 'Real Estate', 'Clothing and well-being', 'Hobbies and entertainment');                     
                    ?>
                        {!! Form::select('options[]', $options,[], array('class' =>'Category', 'form-control','multiple')) !!}

                    </div>
                    <div class="form-group">
                        <strong>Image:</strong>
                        {!! Form::text('image', null, array('placeholder' => 'Image','class' => 'form-control')) !!}
                    </div>
                    <div class="form-group">
                        <strong>Location:</strong>
                        {!! Form::text('location', null, array('placeholder' => 'Location','class' => 'form-control')) !!}
                    </div>
                    <div class="form-group">
                        <strong>Brand:</strong>
                        {!! Form::text('brand', null, array('placeholder' => 'Brand','class' => 'form-control')) !!}
                    </div>
                    <div class="form-group">
                        <strong>State:</strong>
                        {!! Form::text('state', null, array('placeholder' => 'State','class' => 'form-control')) !!}
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection