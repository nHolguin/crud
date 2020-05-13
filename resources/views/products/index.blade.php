@extends('layouts.layout')

@section('content')
<style type="text/css">
	.uper {
		margin-top: 40px;
	}
	.uper table thead {
		font-weight: bold;
	}
</style>
<div class="card uper">
	<div class="card-header">
		<div class="text-right"><a class="btn btn-info" href="{{ route('products.create') }}">Create New Product</a></div>
	</div>
	<div class="card-body">
		@if(session()->get('success'))
		    <div class="alert alert-success mb-4">
		    	{{ session()->get('success') }}
		    	<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
		    </div>
		@endif
		<table class="table table-striped">
			<thead>
				<tr>
					<td>Name</td>
					<td>Price</td>
					<td>Description</td>
					<td colspan="3">Action</td>
				</tr>
			</thead>
			<tbody>
				@foreach($products as $product)
				    <tr>
				    	<td>{{ $product->name }}</td>
				    	<td>{{ $product->price }}</td>
				    	<td>{{ $product->description }}</td>
				    	<td><a href="{{ route('products.edit',$product->id) }}" class="btn btn-primary">Edit</a></td>
				    	<td><a href="{{ route('products.show',$product->id) }}" class="btn btn-success">Show</a></td>
				    	<td colspan="3">
				    		<form action="{{ route('products.destroy',$product->id) }}" method="post">
				    			{{ csrf_field() }}
				    			@method('DELETE')
				    			<button type="submit" class="btn btn-danger">Delete</button>
				    	    </form>
				    	</td>
				    </tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>
@endsection