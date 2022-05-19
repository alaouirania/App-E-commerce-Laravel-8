@extends('layouts.app')
@section('content')
<style>

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
    .btnshow{
        box-shadow:inset 0 -0.6em 0 -0.35em rgba(0,0,0,0.17);
        background-color: #21574a;
        padding: 7px 10px 8px 10px;
        text-align: center;
        border-radius: 5px;
        text-decoration: none;
        border: 1px solid #21574a;
    }
    .btnshow:hover{
        background-color: #628272;
        border: 1px solid #628272;
    }

    .btnedit{
        box-shadow:inset 0 -0.6em 0 -0.35em rgba(0,0,0,0.17);
        background-color: #628272;
        padding: 7px 10px 8px 10px;
        text-align: center;
        text-decoration: none;
        border-radius: 5px;
        border: 1px solid #628272;
    }
    .btnedit:hover{
        background-color: #9ca18d;
        border: 1px solid #9ca18d;
    }
    .btndel{
        box-shadow:inset 0 -0.6em 0 -0.35em rgba(0,0,0,0.17);
        background-color: #DC3545;
        padding: 7px 10px 8px 10px;
        text-align: center;
        text-decoration: none;
        border-radius: 5px;
        border: 1px solid #DC3545;
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
            <div class="card-header">Users
                <span class="float-right">
                    <a class="btn btn-primary" href="{{ route('users.create') }}">New User</a>
                </span>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Roles</th>
                            <th>Verified</th>
                            <th width="280px">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $key => $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                
                                <td>
                                    @if(!empty($user->getRoleNames()))
                                        @foreach($user->getRoleNames() as $val)
                                            <label class="badge badge-dark">{{ $val }}</label>
                                        @endforeach
                                    @endif
                                </td>
                                <td>
                                    {{ $user->email_verified_at }}
                                </td>
                                <td>
                                    <a class="btnshow btn-success" href="{{ route('users.show',$user->id) }}">Show</a>
                                    @can('user-edit')
                                        <a class="btnedit btn-primary" href="{{ route('users.edit',$user->id) }}">Edit</a>
                                    @endcan
                                    @can('user-delete')
                                        {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}
                                        {!! Form::submit('Delete', ['class' => 'btndel btn-danger']) !!}
                                        {!! Form::close() !!}
                                    @endcan
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $data->render() }}
            </div>
        </div>
    </div>
</div>
@endsection