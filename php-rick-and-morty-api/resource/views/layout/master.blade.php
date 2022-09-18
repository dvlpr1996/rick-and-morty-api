<!DOCTYPE html>
<html lang="en">

<head>
		<title>Rick and Morty - @yield('title')</title>
		<meta charset="UTF-8">
		<meta name="language" content="en">
		<meta name="robots" content="index, follow">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="owner" content="Nima jahan bakhshian | dvlpr1996">
		<meta name="author" content="Nima jahan bakhshian | dvlpr1996">
		<meta name="designer" content="Nima jahan bakhshian | dvlpr1996">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="description" content="Rick and Morty wiki | dvlpr1996">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="keywords" content="Rick and Morty wiki, tailwindCss, dvlpr1996, php8">
		{{-- <link rel="icon" sizes="64X64" href="{{ asset('favicon.ico') }}"> --}}
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
		<link rel="stylesheet" href="{{ asset('css/main.min.css') }}">
		<!-- [if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<![endif] -->
</head>

<body>
		{{-- <div id="loader" class="loader-container">
				<img src="{{ asset('img/portal.png') }}" alt="loader" class="portal-img h-44 w-44">
				<p class="text-center text-lg text-black">loading ...</p>
		</div> --}}

		<div class="mx-auto max-w-7xl">
				<nav class="flex items-center justify-between py-4">
						<div class="flex items-center gap-2 sm:gap-5">
								<div class="flex items-center gap-2">
										<a href="{{ route('home.index') }}">
												<img src="{{ asset('img/logo.png') }}" alt="Rick and Morty" class="logo" loading="lazy">
										</a>
										<a href="{{ route('home.index') }}" class="hidden text-base sm:block">Rick and Morty</a>
								</div>

								<div class="space-x-1 sm:space-x-3">
										<a href="{{ route('home.index') }}">home</a>
										<a href="{{ route('episodes.index') }}">Episodes</a>
										<a href="{{ route('locations.index') }}">Locations</a>
								</div>
						</div>

						<a href="{{ route('portal.index') }}" title="travel between different universes">
							<img src="{{ asset('img/portal.png') }}" class="portal-img" alt="portal"  loading="lazy">
						</a>
				</nav>

				@yield('content')

				<footer class="space-y-6 rounded-t-lg bg-slate-800 py-6 px-2 text-center">
						<a href="{{ route('home.index') }}">
								<img src="{{ asset('img/rick.png') }}" alt="rick-logo" class="mx-auto block h-16 w-16" loading="lazy">
						</a>

						<p>© <span id="year"> </span> Rick and Morty <sup>wiki</sup> . All rights reserved</p>

						<div class="space-x-4">
								<a href="https://codepen.io/dvlpr1996" title="codepen">
										<i class="fab fa-2x fa-codepen"></i>
								</a>
								<a href="https://instagram.com/nima_jahanbakhshian" title="instagram">
										<i class="fab fa-2x fa-instagram"></i>
								</a>
								<a href="https://www.linkedin.com/in/nima-jahan-bakhshian" title="linkedin">
										<i class="fab fa-2x fa-linkedin"></i>
								</a>
								<a href="https://t.me/nima96_j" title="telegram">
										<i class="fab fa-2x fa-telegram"></i>
								</a>
						</div>

				</footer>
		</div>

		<script src="{{ asset('js/app.min.js') }}" defer></script>
		<noscript>your browser does not support the javascript!!!</noscript>

</body>

</html>
