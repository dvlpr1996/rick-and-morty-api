<nav class="flex items-center justify-between py-4">
	<div class="flex items-center gap-2 sm:gap-5">
			<div class="flex items-center gap-2">
					<a href="{{ route('home.index') }}">
							<img src="{{ asset('img/logo.png') }}" alt="Rick and Morty" class="logo" loading="lazy">
					</a>
					<a href="{{ route('home.index') }}" class="hidden text-base sm:block">Rick and Morty</a>
			</div>

			<div class="space-x-1 sm:space-x-3">
					<a href="{{ route('home.index') }}">home</a>
					<a href="{{ route('episodes.index') }}">Episodes</a>
					<a href="{{ route('locations.index') }}">Locations</a>
			</div>
	</div>

	<a href="{{ route('portal.index') }}" title="travel between different universes">
		<img src="{{ asset('img/portal.png') }}" class="portal-img" alt="portal"  loading="lazy">
	</a>
</nav>
