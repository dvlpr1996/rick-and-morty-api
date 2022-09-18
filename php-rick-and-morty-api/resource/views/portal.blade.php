@extends('layout.master')

@section('title', 'Portal')

@section('content')
		<main class="mt-8 mb-16 flex flex-col items-center justify-center space-y-5">
				<div class="space-y-5">
						<img src="{{ asset('img/portal.png') }}" alt="portal" class="mx-auto block" id="portal">
					
					
								<p class="text-center text-2xl">
										push the button to travel between universes
								</p>

				</div>

				<a href="{{ route('portal.show') }}" class="btn w-10/12 md:w-4/12" id="travel-btn">
						lets travel
				</a>

		</main>
@endsection
