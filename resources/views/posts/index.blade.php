@extends('layouts.app')
@section('content')
<style>
	.btncreate{
		box-shadow:inset 0 -0.6em 0 -0.35em rgba(0,0,0,0.17);
        background-color: #21574a;
        color: #fff;
        font-weight: 300;
        border: 1px solid #21574a;
        float: left;
		border-radius: 5px;
		text-decoration: none;
        padding: 5px 10px 5px 10px;
	}
	.btncreate:hover{
		background-color: #628272;
        border: 1px solid #628272;
	}
	.btnshow{
		box-shadow:inset 0 -0.6em 0 -0.35em rgba(0,0,0,0.17);
        background-color: #21574a;
        color: #fff;
        font-weight: 300;
        border: 1px solid #21574a;
        float: left;
		border-radius: 5px;
		text-decoration: none;
        padding: 5px 10px 5px 10px;
	}
	.btnshow:hover{
		background-color: #628272;
        border: 1px solid #628272;
	}
	.btnedit{
		box-shadow:inset 0 -0.6em 0 -0.35em rgba(0,0,0,0.17);
        background-color: #628272;
        color: #fff;
        font-weight: 300;
        border: 1px solid #628272;
        float: left;
		border-radius: 5px;
		text-decoration: none;
        padding: 5px 10px 5px 10px;
	}
	.btnedit:hover{
		background-color: #9ca18d;
        border: 1px solid #9ca18d;
	}
	.btndel{
		box-shadow:inset 0 -0.6em 0 -0.35em rgba(0,0,0,0.17);
        background-color: #DC3545;
        color: #fff;
        font-weight: 300;
        border: 1px solid #DC3545;
        float: left;
		border-radius: 5px;
		text-decoration: none;
        padding: 5px 10px 5px 10px;
	}
	.btndel:hover{
		background-color: #DC3545;
        border: 1px solid #DC3545;
	}
	.btnconf{
		box-shadow:inset 0 -0.6em 0 -0.35em rgba(0,0,0,0.17);
        background-color: #21574a;
        color: #fff;
        font-weight: 300;
        border: 1px solid #21574a;
        float: left;
		border-radius: 5px;
		text-decoration: none;
        padding: 5px 10px 5px 10px;
	}
	.btnconf:hover{
		background-color: #628272;
        border: 1px solid #628272;
	}
</style>
<div class="row m-3">
	<div class="mb-3">
		<a href="{{ route('posts.create') }}" class="btncreate btn-success">Create new post</a>
	</div>
	<table class="table table-bordered table-hover">
		<thead>
			<tr>
				<th scope="col">#</th>
				<th scope="col">Title</th>
				<th scope="col">Image</th>
				<th scope="col">Action</th>
				

			</tr>
		</thead>
		<tbody>
			@forelse ($data as $key)
				<tr>
					<th scope="row">{{ $loop->index + 1 }}</th>
					<td>{{ $key->title }}</td>
					<td><image name="image" id="image" style="width:70px;" src="{{ asset('public/Image/'.$key->image) }}"/></td>
						</td>
						<td>
						<a href="{{ route('posts.show', $key->id) }}" class="btnshow btn-primary m-1">Show</a>
						<a href="{{ route('posts.edit', $key->id) }}" class="btnedit btn-primary m-1">Edit</a>
						<a href="#" class="btndel btn-danger m-1" onclick="document.getElementById('delete-post-{{ $key->id }}').submit();">Delete</a>
                        <a href="#" class="btnconf btn-primary m-1">Confirm</a>
						<form method="post" action="{{ route('posts.destroy', $key->id) }}" id="delete-post-{{ $key->id }}" style="display: none;">
							@csrf
							@method('DELETE')
						</form>
					</td>
				</tr>
			@empty
			    <tr>
			    	<td colspan="4" class="text-center">No post found.</td>
			    </tr>
			@endforelse
		</tbody>
	</table>
</div>
@endsection