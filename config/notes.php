<?php

return [
	'table' => 'notes',

	'model' => Grnspc\Notes\Notes::class,

	'flags' => ['primary', 'billing', 'shipping'],

	'rules' => [
		'contect' => ['required', 'string', 'max:1500'],
		'author_id' => ['nullable', 'integer'],
	],

	'authors' => [
		'table' => 'users',
		'model' => App\Models\User::class,
	],
];
