@extends('layout.master')

@section('title', 'home')

@section('content')
		<header>

		</header>

		<main class="my-16 space-y-16">
				<div class="flex items-center justify-center gap-2 sm:justify-start">
						<img src="{{ asset('img/rick.png') }}" alt="rick-logo" class="h-16 w-16">
						<h1 id="top">Rick and Morty<sup class="hidden text-2xl sm:inline-flex">wiki</sup></h1>
				</div>

				<div class="card-wrapper">
						@forelse ($allCharacters->results as $key => $character)
								<div class="card">
										<img src="{{ $character->image ?? '...' }}" alt="{{ $character->name ?? 'not defined' }}" class="card-img"
												loading="lazy">

										<div class="card-body">
												<h2 class="card-title truncate" title="{{ $character->name ?? 'not defined' }}">
														{{ $character->name ?? 'not defined' }}
												</h2>

												<div class="flex items-center justify-between">
														<span id="gender-wrapper">
																<i class="fas mr-1" id="gender-icon"></i>
																<span id="gender">{{ $character->gender ?? 'not defined' }}</span>
														</span>

														<span id="status-wrapper">
																<i class="far mr-1" id="status-icon"></i>
																<span id="status">{{ $character->status ?? 'not defined' }}</span>
														</span>
												</div>
												<a href="{{ route('character.index', ['id' => $character->id ?? '']) }}" class="btn" id="char-btn">show
														more
														<i class="fas fa-angle-double-right align-middle"></i>
												</a>

										</div>
								</div>
						@empty
								@include('components.displayEmptyError')
						@endforelse
				</div>

				<div class="flex justify-center">
						<div class="flex items-center gap-2">
								<a href="{{ route('home.pagination', ['id' => page($allCharacters->info->prev)]) }}"
										class="btn cursor-pointer px-4 py-2">prev</a>
								<a href="{{ route('home.pagination', ['id' => page($allCharacters->info->next)]) }}"
										class="btn cursor-pointer px-4 py-2">next</a>
						</div>
				</div>
		</main>
@endsection
