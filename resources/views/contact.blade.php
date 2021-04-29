@extends('layout')

@section('title', 'Contact')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-12 col-sm-10 col-lg-6 mx-auto">
			<h1>@lang('Contact')</h1>
			<hr>
					<form method="POST" action="{{ route('messages.store') }}" class="bg-white shadow rounded py-3 px-4">
					@csrf
						<div class="form-group">
							<input class="form-control bg-light shadow-sm @error('name') is-invalid @enderror"
							type="name"
							name="name"
							value="{{ old('name') }}"
							placeholder="Nombre ...">
							@error('name')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
							@enderror
						</div>

						<div class="form-group">
							<input class="form-control bg-light shadow-sm @error('email') is-invalid @enderror"
							type="email"
							name="email"
							value="{{ old('email') }}"
							placeholder="E-mail ...">
							@error('email')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
							@enderror
						</div>

						<div class="form-group">
							<input class="form-control bg-light shadow-sm @error('subject') is-invalid @enderror"
							type="text"
							name="subject"
							value="{{ old('subject') }}"
							placeholder="Asunto ...">
							@error('subject')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
							@enderror
						</div>

						<div class="form-group">
							<textarea class="form-control bg-light shadow-sm @error('content') is-invalid @enderror"
							type="text"
							name="content"
							placeholder="Mensaje ...">{{ old('content') }}</textarea>
							@error('content')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
							@enderror
						</div>

				<button class="btn btn-primary btn-lg btn-block">@lang('Send')</button>

			</form>
		</div>
	</div>

</div>


@endsection