<nav class="navbar navbar-light navbar-expand-lg bg-white shadow-sm">
	<div class="container">
		<a class="navbar-brand" href="{{ route('home') }}">
			{{ config('app.name') }}
		</a>

	<button class="navbar-toggler"
		type="button"
		data-toggle="collapse"
		data-target="#navbarSupportedContent"
		aria-controls="navbarSupportedContent"
		aria-expanded="false"
		aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
   </button>

	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="nav nav-tabs">
			<li class="nav-item">
				<a class="nav-link {{ setActive('home')}}" href="{{ route('home') }}">
					@lang('Home')
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link {{request()->routeIs('about') ? 'active': ''}}" href="{{ route('about') }}">
					@lang('About')
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link {{request()->routeIs('projects.*') ? 'active': ''}}" href="{{ route('projects.index') }}">
					@lang('Projects')
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link {{request()->routeIs('contact') ? 'active': ''}}" href="{{ route('contact') }}">
					@lang('Contact')
				</a>
			</li>
			@guest
				<li class="nav-item">
					<a class="nav-link {{ setActive('login') }}" href="{{ route('login') }}">
						@lang('Login')
					</a>
				</li>
			@else
				<li class="nav-item">
					<a class="nav-link" href="#" onclick="event.preventDefault();
				document.getElementById('logout-form').submit();">
						@lang('Logout')
					</a>
				</li>
			@endguest

		</ul>
	</div>
	</div>

</nav>
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
   @csrf
</form>