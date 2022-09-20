@include('layout.header')

<body>
		<div id="loader" class="loader-container">
				<img src="{{ asset('img/portal.png') }}" alt="loader" class="portal-img h-44 w-44">
				<p class="text-center text-lg text-black">loading ...</p>
		</div>

		<div class="mx-auto max-w-7xl">
				@include('layout.nav')

				@yield('content')

				@include('layout.footer')
