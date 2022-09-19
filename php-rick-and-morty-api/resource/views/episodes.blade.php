@extends('layout.master')

@section('title', 'Episodes')

@section('content')
		<main class="my-8 space-y-8">
				<div class="flex items-center justify-center gap-2 sm:justify-start">
						<img src="{{ asset('img/morty.png') }}" alt="rick-logo" class="h-16 w-16">
						<h2 id="top">episode wiki</h2>
				</div>

				<div class="card-wrapper">
						@forelse ($allEpisodes->results as $episode)
								<div class="card gap-5">
										<h3 class="card-title truncate" title="{{ $episode->name ?? 'not defined' }}">
												{{ $episode->name ?? 'not defined' }}
										</h3>
										<ul class="space-y-3 capitalize">
												<li>
														<span>episode number :</span>
														<span>{{ $episode->episode ?? 'not defined' }}</span>
												</li>
												<li>
														<span>episode date :</span>
														<span>{{ $episode->air_date ?? 'not defined' }}</span>
												</li>
												<li>
														<span>count of characters :</span>
														<span>{{ count($episode->characters) ?? 'not defined' }}</span>
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
								<a href="{{ route('episodes.pagination', ['id' => page($allEpisodes->info->prev)]) }}"
										class="btn cursor-pointer px-4 py-2">prev</a>
								<a href="{{ route('episodes.pagination', ['id' => page($allEpisodes->info->next)]) }}"
										class="btn cursor-pointer px-4 py-2">next</a>
						</div>
				</div>
		</main>
@endsection
