@csrf
<div class="form-group">
	<input class="form-control"
		   type="text"
		   name="title"
		   placeholder="Titulo del proyecto"
		   value="{{ old('title', $project->title) }}">
</div>

<div class="form-group">
	<textarea class="form-control" name="description" placeholder="Descripción">{{ old('description', $project->description) }}</textarea>
</div>

<div class="form-group">
	<input class="form-control"
		   type="text"
	       name="url"
	       placeholder="URL"
	       value="{{ old('url', $project->url) }}">
</div>

<button class="btn btn-primary btn-lg btn-block">{{ $btnText }}</button>
<a class="btn btn-link btn-block" href="{{ route('projects.index') }}">@lang('Cancel')</a>
