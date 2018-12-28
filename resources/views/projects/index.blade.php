@extends('layout')

@section('title','Projects')

@section('content')
	<div class="columns is-multiline">
		@foreach($projects as $project)
			<div class="column is-4 is-inline-block is-info">
				<div class="card">
					<h1 class="title is-4">{{ $project->title }}</h1>
					<div class="content">
						<p>
							{{ $project->description }}
						</p>	
					</div>
					
					@if($project->tasks->count())
						<div class="content">
							<h1 class="title is-5">Tasks</h1>
							<ol>
								@foreach($project->tasks as $task)
									<li> 
										<form method="POST" action="/tasks/{{ $task->id }}">
											@method('PATCH')
											{{ csrf_field() }}
											<label class="checkbox {{ $task->completed ? 'is-complete' : '' }}" for="completed">	
												<input type="checkbox" name="completed" onclick="this.form.submit()" {{ $task->completed ? 'checked' : '' }} > 
												{{ $task->description }} 
											</label>
										</form>
									</li>
								@endforeach
							</ol>
						</div>
					@endif
					<form method="POST" action="/projects/{{ $project->id }}" style="margin-top: 1rem;">
						{{ method_field('DELETE') }}
						{{ csrf_field() }}
						<div class="field is-grouped">
							<p class="control">
								<a href="/projects/{{ $project->id }}/edit" class="button is-primary">
									Edit Project
								</a>
							</p>
							<p class="control">
								<button class="button is-link">Delete Project</button>
							</p>
						</div>
					</form>
				</div>
			</div>
		@endforeach
	</div>
	{{-- <div class="tile is-ancestor">
		@foreach($projects as $project)
			<div class="tile is-parent is-4 is-vertical">
				<div class="tile is-child box">
					<p class="title is-4">{{ $project->title }}</p>
					<div class="content">
			          	<p>	
							{{ $project->description }}
						</p>
			        </div>
			        <a href="/projects/{{ $project->id }}/edit" class="button is-success" style="margin-top: 1rem;">Edit Project</a>
					<form method="POST" action="/projects/{{ $project->id }}" style="margin-top: 1rem;">
						{{ method_field('DELETE') }}
						{{ csrf_field() }}
						<div class="field">
							<div class="control">
								<button class="button is-danger">Delete Project</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		@endforeach
	</div> --}}
@endsection