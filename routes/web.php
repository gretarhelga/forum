<?php

Auth::routes();

Route::get("/threads", "ThreadsController@index");

Route::get("/threads/create", "ThreadsController@show");

Route::get("/threads/{id}", "ThreadsController@show");


/*Route::get("/greeting/{id}", function($id){
	$greetings = ["hola", "hello", "hallo", "hi", "hey"];
	return view("messages.greeting", ["greeting" => $greetings[$id]]);
})->where(["id" => "[0-4]"]);*/
