@extends('layout.master')

@section('title', 'character')

@section('content')
		<main class="my-16">
				<div class="mx-auto flex flex-col gap-6 sm:flex-row lg:w-4/5">
						<img src="{{ $singleCharacters->image ?? '...' }}" alt="{{ $singleCharacters->name ?? 'not defined' }}"
								class="w-full transform rounded-lg border border-slate-100 object-fill object-center p-2 duration-100 ease-in hover:scale-[1.05] hover:cursor-pointer md:w-1/2"
								loading="lazy">
						<div class="w-full space-y-5 md:w-1/2">
								<ul class="space-y-8">
										<li class="text-lg capitalize">
												<span class="font-bold">name</span> :
												<span class="font-light">
														{{ $singleCharacters->name ?? 'not defined' }}
												</span>
										</li>
										<li class="text-lg capitalize">
												<span class="font-bold">status</span> :
												<span class="font-light">
														{{ $singleCharacters->status ?? 'not defined' }}
												</span>
										</li>
										<li class="text-lg capitalize">
												<span class="font-bold">species</span> :
												<span class="font-light">
														{{ $singleCharacters->species ?? 'not defined' }}
												</span>
										</li>
										<li class="text-lg capitalize">
												<span class="font-bold">gender</span> :
												<span class="font-light">
														{{ $singleCharacters->gender ?? 'not defined' }}
												</span>
										</li>
										<li class="text-lg capitalize">
												<span class="font-bold">origin</span> :
												<span class="font-light">
														{{ $singleCharacters->origin->name ?? 'not defined' }}
												</span>
										</li>
										<li class="text-lg capitalize">
												<span class="font-bold">location</span> :
												<span class="font-light">
														{{ $singleCharacters->location->name ?? 'not defined' }}
												</span>
										</li>
										<li class="text-lg capitalize">
												<span class="font-bold">number of episodes</span> :
												<span class="font-light">
														{{ count($singleCharacters->episode) ?? 'not defined' }}
												</span>
										</li>
								</ul>
						</div>
				</div>
		</main>
@endsection
