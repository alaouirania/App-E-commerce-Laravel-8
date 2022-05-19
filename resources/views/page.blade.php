@extends('layouts.app')
@section('content')
<style>
	.table{
		margin-top: 10px;
	}
	.btnpage {
		background-color:#fff;
		text-decoration: none;
		color:#21574a;
		padding: 5px 50px 5px 50px;
		font-weight: bold;
		border-radius: 10px;
		border: 2px solid #21574a;
		margin-left:35px;	}
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
	.btnbuy{
        box-shadow:inset 0 -0.6em 0 -0.35em rgba(0,0,0,0.17);
        background-color: #21574a;
        padding: 7px 10px 8px 10px;
        text-align: center;
        border-radius: 5px;
        text-decoration: none;
        border: 1px solid #21574a;
    }
    .btnbuy:hover{
        background-color: #628272;
        border: 1px solid #628272;
    }

	td{
		text-align: center;
        vertical-align: middle;
	 }


</style>
<span class="float-right">
	<a class="btnpage" href="">IT and electrics</a>
</span>
<span class="float-right">
	<a class="btnpage" href="">Vehicles</a>
</span>
<span class="float-right">
	<a class="btnpage" href="">Real Estate</a>
</span>
<span class="float-right">
	<a class="btnpage" href="">Clothing and well-being</a>
</span>
<span class="float-right">
	<a class="btnpage" href="">Hobbies and entertainment</a>
</span>

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
					<td><image name="image" id="image" style="width:70px;" src="{{ asset('public/Image/'.$post->image) }}"/></td>
					</td>					
					<td>{{ $post->title }}</td>
					<td>{{ $post->description }}</td>
                    <td>{{ $post->price }}</td>
					<td>{{ $post->category }}</td>
					<td>{{ $post->location }}</td>
					<td>{{ $post->state }}</td>
					<td>
						<a href="{{ route('posts.show', $post->id) }}" class="btnshow btn-primary m-1">Show</a>
                        <a href="#" class="btnbuy btn-primary m-1">Buy Now</a>

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