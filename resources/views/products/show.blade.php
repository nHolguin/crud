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
		<div class="text-right"><a class="btn btn-info" href="{{ route('products.index') }}">View Products</a></div>
	</div>
	<div class="card-body">
		<div class="row">
			<div class="col-xs-12 col-md-12 col-sm-12">
				<div class="form-group">
					<strong>Name:</strong>
					{{ $product->name }}
				</div>
			</div>
			<div class="col-xs-12 col-md-12 col-sm-12">
				<div class="form-group">
					<strong>Price:</strong>
					{{ $product->price }}
				</div>
			</div>
			<div class="col-xs-12 col-md-12 col-sm-12">
				<div class="form-group">
					<strong>Description:</strong>
					{{ $product->description }}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection