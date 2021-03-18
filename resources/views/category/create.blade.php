@extends('layouts.app')

@section('main')


	<div class="wrap ">
	<a class="btn btn-primary" href="{{ route('category.index') }}">All Categories</a>

		<div class="card shadow">
			<div class="card-body">
				<h2>Add New Category</h2>
				<form action="{{route('category.store')}}" method="POST">
					@csrf
					<div class="form-group">
						<label for="">Category Name</label>
						<input name="name" class="form-control" type="text">
					</div>
					
			
					<div class="form-group">
						<input name="add" class="btn btn-primary" type="submit" value="Add">
					</div>
				</form>
			</div>
		</div>
	</div>
	

@endsection

