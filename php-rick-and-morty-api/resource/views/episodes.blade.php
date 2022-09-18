@extends('layout.master')

@section('title', 'Episodes')

@section('content')
		<main class="my-8 space-y-8">
				<div class="flex items-center justify-center gap-2 sm:justify-start">
						<img src="{{ asset('img/morty.png') }}" alt="rick-logo" class="h-16 w-16">
						<h2 id="top">episode wiki</h2>
				</div>

				<div class="card-wrapper">
						<div class="card gap-5">
								<h3 class="card-title">#</h3>
								<ul class="space-y-3 capitalize">
										<li>
												<span>episode number :</span>
												<span>#</span>
										</li>
										<li>
												<span>episode date :</span>
												<span>#</span>
										</li>
										<li>
												<span>count of characters :</span>
												<span>#</span>
										</li>
								</ul>
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
