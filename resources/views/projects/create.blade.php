@extends('layout')
@section('title', 'Add Project')
@section('content')
	<form method="POST" action="/projects">
		@if($errors->any())
			<div class="notification is-danger">
				@foreach($errors->all() as $error)
					<li>
						{{ $error }}
					</li>
				@endforeach			
			</div>
		@endif
		{{ csrf_field() }}

		<div class="field">
	  		<label class="label">Title</label>
			<div class="control">
				<input class="input {{ $errors->has('title') ? 'is-danger' : '' }}" type="text" name="title" placeholder="Title of project" value="{{ old('title') }}">
			</div>
		</div>
		<div class="field">
	  		<label class="label">Description</label>
			<div class="control">
				<textarea class="textarea {{ $errors->has('title') ? 'is-danger' : '' }}" name="description" placeholder="Description for your project" > {{ old('description') }} </textarea>
			</div>
		</div>
		<div class="field">
			<div class="control">
				<button class="button is-link">Add Project</button>
			</div>
		</div>
	</form>
@endsection