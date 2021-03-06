@extends('layout')

@section('title', 'Crear proyecto')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-12 col-sm-10 col-lg-6 mx-auto">

			@include('partials.validation-errors')

			<form class="bg-white py-3 px-4 shadow rounded"
				  method="POST"
				  action="{{ route('projects.store') }}">
				<h1 class="dispaly-4">@lang('Create a new project')</h1>
				<hr>
				@include('projects._form', ['btnText' => __('Save')])
			</form>
		</div>
	</div>
</div>


@endsection