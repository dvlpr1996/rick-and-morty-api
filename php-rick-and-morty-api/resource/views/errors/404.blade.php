@extends('layout.header')

@section('title', '404 Error')
<body class="flex items-center justify-center">
		<div class="flex w-max flex-col items-center gap-5 text-center">
				<h1 class="text-8xl">404</h1>
				<p class="text-xl">
						Looks like page not found or something went wrong. Please try again.
				</p>
				<a href="{{ route('home.index') }}" class="btn w-max px-3">back to home page</a>
		</div>


</body>

</html>
