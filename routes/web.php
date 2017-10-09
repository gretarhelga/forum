<?php

Auth::routes();

Route::get("/", function() {
	return redirect("/threads");
});

Route::get("/threads", "ThreadsController@index");

Route::post("/threads", "ThreadsController@store");

Route::get("/threads/create", "ThreadsController@create")->middleware("auth");

Route::get("/threads/{id}", "ThreadsController@show");

Route::get("/profile/{id}", "ProfileController@show");



/*Route::get("/greeting/{id}", function($id){
	$greetings = ["hola", "hello", "hallo", "hi", "hey"];
	return view("messages.greeting", ["greeting" => $greetings[$id]]);
})->where(["id" => "[0-4]"]);*/
