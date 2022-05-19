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
        }
        
    
    </style>
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
            <div class="card-header">Edit permission
                <span class="float-right">
                    <a class="btn btn-primary" href="{{ route('permissions.index') }}">Permissions</a>
                </span>
            </div>
            <div class="card-body">
                {!! Form::model($permission, ['route' => ['permissions.update', $permission->id], 'method'=>'PATCH']) !!}
                    <div class="form-group">
                        <strong>Name:</strong>
                        {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection