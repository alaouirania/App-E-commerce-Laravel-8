@extends('layouts.app')
@section('content')
<style>
	.table{
		margin-top: 10px;
	}
	button{
		background-color:#d39b75;
		color:#fff;
		padding: 5px 50px 5px 50px;
		font-weight: 600;
		border-radius: 10px;
		border: 1px solid #21574a;
		margin-left:20px;	}
</style>
<button>IT and electrics</button>
<button>Vehicles</button>
<button>Real Estate</button>
<button>Clothing and well-being</button>
<button>Hobbies and entertainment</button>
<div class="row m-3">
	<table class="table table-bordered table-hover">
		<!--<thead>
			<tr>
				<th scope="col">Image</th>
				<th scope="col">Title</th>
				<th scope="col">Descipription</th>
                <th scope="col">Price</th>
				<th scope="col">Category</th>
				<th scope="col">Location</th>
                <th scope="col">State</th>
				<th scope="col">Action</th>
			</tr>
		</thead>-->
		<tbody>
			@forelse ($posts as $post)
				<tr>
					<td><image style="width:70px;" src="{{ URL::to('/public/Image/') }}"/></td>
					<td>{{ $post->title }}</td>
					<td>{{ $post->description }}</td>
                    <td>{{ $post->price }}</td>
					<td>{{ $post->category }}</td>
					<td>{{ $post->location }}</td>
					<td>{{ $post->state }}</td>
					<td>
						<a href="{{ route('posts.show', $post->id) }}" class="btn btn-primary m-1">Show</a>
                        <a href="#" class="btn btn-primary m-1">Buy Now</a>

					</td>
				</tr>
			@empty
			    <tr>
			    	<td colspan="4" class="text-center">No posts found.</td>
			    </tr>
			@endforelse
		</tbody>
	</table>
</div>
@endsection