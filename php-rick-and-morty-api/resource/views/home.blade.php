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
								<div class="card">
										<img src="#" alt="#" class="card-img">
										<div class="card-body">
												<h2 class="card-title">#</h2>

												<div class="flex items-center justify-between">
														<span id="gender-wrapper">
																<i class="fas mr-1" id="gender-icon"></i>
																<span id="gender">#</span>
														</span>

														<span id="status-wrapper">
																<i class="far mr-1" id="status-icon"></i>
																<span id="status">#</span>
														</span>
												</div>

												<a href="#" class="btn" id="char-btn">show more
														<i class="fas fa-angle-double-right align-middle"></i>
												</a>

										</div>
								</div>

				</div>

				<div class="flex justify-center">
						<div class="flex items-center gap-2">
								<a href="#top" class="btn cursor-pointer px-4 py-2">prev</a>
								<a href="#top" class="btn cursor-pointer px-4 py-2">next</a>
						</div>
				</div>
		</main>
@endsection
