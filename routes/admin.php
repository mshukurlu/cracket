<?php

Route::resource('team','Team\TeamController');


Route::resource('match','Match\MatchController');

Route::get('score/{match}/edit','Match\ScoreController@index');
