@extends('layout')
@section('title', 'Edit Project')
@section('content')
	<form method="POST" action="/projects/{{ $project->id }}">
		@if($errors->any())
			<div class="notification is-danger">
				@foreach($errors->all() as $error)
					<li>
						{{ $error }}
					</li>
				@endforeach			
			</div>
		@endif
		{{ method_field('PATCH') }}
		{{ csrf_field() }}

		<div class="field">
	  		<label class="label">Title</label>
			<div class="control">
				<input class="input {{ $errors->has('title') ? 'is-danger' : '' }}" type="text" name="title" placeholder="Project's tile" required value="{{ $project->title }}">
			</div>
		</div>
		<div class="field">
	  		<label class="label">Description</label>
			<div class="control">
				<textarea class="textarea {{ $errors->has('title') ? 'is-danger' : '' }}" name="description" placeholder="Description for your project" required > {{ $project->description}} </textarea>
			</div>
		</div>
		<div class="field">
			<div class="control">
				<button class="button is-link">Update Project</button>
			</div>
		</div>
	</form>
@endsection