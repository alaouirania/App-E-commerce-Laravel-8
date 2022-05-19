@extends('layouts.app')
@section('content')
<style>
    .justify-content-center{
        margin-top: 30px;
        box-shadow: 5px 7px #628272 ;
        border-radius: 5px;
    }
    .card-body{
        color: #21574a;
    }
    .card-header{
        text-align: left;
        font-weight: bold;
        color: #21574a;
        font-size: 25px;
    }
    .float-right a{
        box-shadow:inset 0 -0.6em 0 -0.35em rgba(0,0,0,0.17);
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
    button{
        margin-top: 20px;
        margin-left: 535px;  
    }
    
    .btn{
        box-shadow:inset 0 -0.6em 0 -0.35em rgba(0,0,0,0.17);
        background-color: #21574a;
        border: 1px solid #21574a;
        padding: 5px 50px 5px 50px;
       
    }
    .btn:hover{
        background-color: #628272;
        border: 1px solid #628272;
    }</style>
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
            <div class="card-header">Create post
                <span class="float-right">
                    <a class="btn btn-primary" href="{{ route('posts.index') }}">Posts</a>
                </span>
            </div>
            <div class="card-body">
                {!! Form::model($post, ['route' => ['posts.update', $post->id], 'method'=>'PATCH']) !!}
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