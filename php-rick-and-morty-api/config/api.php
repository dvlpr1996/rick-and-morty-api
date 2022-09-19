<?php

return [
	'baseUrl'=>'https://rickandmortyapi.com/api/',
	'allCharacters' => 'character/',
	'allEpisodes' => 'episode/',
	'allLocations' => 'location/',
	'singleCharacters' => 'character/',
	'searchCharacters' => 'character/?name=rick',
	'travel' => 'location/' . mt_rand(1, 126),
];
