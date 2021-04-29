@extends('layout')

@section('title', 'Portfolio | '.$project->title)

@section('content')
<div class="container">
	<div class="bg-white p-5 shadow rounded">
		<h1>{{ $project->title }}</h1>

		<p class="text-secondary">
			{{ $project->description }}
		</p>

		<p class="text-black-50">
			{{ $project->created_at->diffForHumans() }}
		</p>

		<p class="text-secondary">
			URL: <a href="{{ $project->url }}">{{ $project->url }}</a>
		</p>


		<div class="d-flex justify-content-between align-items-center">
			<a href="{{ route('projects.index') }}">@lang('Back')</a>
			@auth
				<div class="btn-group btn-group-sm">
					<a class="btn btn-primary" href="{{ route('projects.edit', $project) }}">@lang('Edit')</a>
					<a class="btn btn-danger" href="#" onclick="document.getElementById('delete-project').submit()">@lang('Delete')</a>

					<form id="delete-project" class="d-none" method="POST" action="{{ route('projects.destroy', $project) }}">
						@csrf @method('DELETE')
					</form>
				</div>
			@endauth
		</div>

	</div>
</div>
@endsection