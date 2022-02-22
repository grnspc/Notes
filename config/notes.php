<?php

return [
	'table' => 'notes',

	'model' => Grnspc\Notes\Note::class,

	'flags' => ['primary', 'billing', 'shipping'],

	'rules' => [
		'content' => ['required', 'string', 'max:1500'],
		'author_id' => ['nullable', 'integer'],
	],

	'authors' => [
		'table' => 'users',
		'model' => App\Models\User::class,
	],
];
