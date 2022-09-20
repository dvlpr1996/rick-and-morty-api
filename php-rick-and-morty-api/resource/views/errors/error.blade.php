@extends('layout.header')

@section('title', 'Error')

<body class="flex items-center justify-center">
		<div class="flex w-max flex-col items-center gap-5 text-center">
				<h1 class="text-8xl">Error</h1>
				<p class="text-xl">
						Oops! Something went wrong, Please try again.
				</p>
				<a href="{{ route('home.index') }}" class="btn w-max px-3">back to home page</a>
		</div>


</body>

</html>
