@extends('layouts.layout')

@section('content')
<style type="text/css">
	.uper {
		margin-top: 40px;
	}
	.uper h2 {
		text-transform: uppercase;
	}
</style>
<div class="card uper">
	<div class="card-header">
		<h2>Edit Product</h2>
	</div>
	<div class="card-body">
		@if($errors->any())
		    <div class="alert alert-danger mb-4">
		    	<ul>
		    		@foreach ($errors->all() as $error)
		    		    <li>{{ $error }}</li>
		    		@endforeach
		    	</ul>
		    </div>
		@endif
		<form method="post" action="{{ route('products.update',$product->id) }}">
			{{csrf_field()}}
			@method('PUT')
			<div class="form-group">
				<label for="name">Name:</label>
				<input type="text" name="name" id="name" value="{{ $product->name }}" class="form-control" />
			</div>
			<div class="form-group">
				<label for="price">Price:</label>
				<input type="number" step="0.1" name="price" id="price" value="{{ $product->price }}" class="form-control" />
			</div>
			<div class="form-group">
				<label for="description">Description:</label>
				<textarea name="description" id="description" class="form-control">{{ $product->description }}</textarea>
			</div>
			<div class="text-center"><button type="submit" class="btn btn-success">Submit</button><a class="btn btn-dark ml-4" href="{{ route('products.index') }}">Cancel</a></div>
		</form>
	</div>
</div>
@endsection