@extends('layout.master')

@section('title', 'Portal')

@section('content')
		<main class="mt-8 mb-16 flex flex-col items-center justify-center space-y-5">
				<div class="space-y-5">
						<h1 class="text-center">travel between universes</h1>

						<img src="{{ asset('img/portal.png') }}" alt="portal" class="mx-auto block" id="portal">
						@if (isset($location->name))
								<p class="text-center text-xl font-semibold">you are in
										<strong class="text-white italic">{{ $location->name }}</strong>
										and type of this location is data.type in the
										<strong class="text-white italic">{{ $location->dimension }}</strong>
								</p>
						@else
								<p class="text-center text-2xl">
										push the button to travel between universes
								</p>
						@endif
				</div>

				<a href="{{ route('portal.show') }}" class="btn w-10/12 md:w-4/12" id="travel-btn">
						lets travel
				</a>

		</main>
@endsection
