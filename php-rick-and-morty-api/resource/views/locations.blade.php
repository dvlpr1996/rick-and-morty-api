@extends('layout.master')

@section('title', 'locations')

@section('content')
		<main class="my-8 space-y-8">
				<div class="flex items-center justify-center gap-2 sm:justify-start">
						<img src="{{ asset('img/rick.png') }}" alt="rick-logo" class="h-16 w-16">
						<h2 id="top">location wiki</h2>
				</div>

				<div class="card-wrapper">
						@forelse ($allLocations->results as $location)
								<div class="card gap-5">
										<h3 class="card-title truncate">{{ $location->name ?? 'not defined' }}</h3>
										<ul class="space-y-3 capitalize">
											<li class="truncate">
														<span>location type :</span>
														<span title="{{ $location->type ?? 'not defined' }}">
															{{ $location->type ?? 'not defined' }}
														</span>
												</li>
												<li class="truncate">
														<span>dimension :</span>
														<span title="{{ $location->dimension ?? 'not defined' }}">
															{{ $location->dimension ?? 'not defined' }}
														</span>
												</li>
												<li>
														<span>population :</span>
														<span>
																{{ count($location->residents) ?? 'not defined' }}
														</span>
												</li>
										</ul>
								</div>
						@empty
								<div class="col-span-12 rounded-lg bg-slate-800 p-7 text-center">
										<p>sorry. there is no data to display</p>
								</div>
						@endforelse
				</div>

				<div class="flex justify-center">
						<div class="flex items-center gap-2">
								<a href="{{ route('locations.pagination', ['id' => page($allLocations->info->prev)]) }}"
										class="btn cursor-pointer px-4 py-2">prev</a>
								<a href="{{ route('locations.pagination', ['id' => page($allLocations->info->next)]) }}"
										class="btn cursor-pointer px-4 py-2">next</a>
						</div>
				</div>
		</main>
@endsection
