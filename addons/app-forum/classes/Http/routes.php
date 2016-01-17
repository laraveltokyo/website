<?php

Route::get('', [
	'uses' => function () {
		return addon()->view('index');
	},
]);
