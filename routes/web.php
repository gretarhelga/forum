<?php

Auth::routes();

Route::get("/threads", function() {
	return view("threads.index");
});

Route::get("/threads/create", function() {
	return view("threads.create");
});

Route::get("/", function() {
	$name = "Gretar";
	return view("messages.hello", compact("name"));
});



/*Route::get("/greeting/{id}", function($id){
	$greetings = ["hola", "hello", "hallo", "hi", "hey"];
	return view("messages.greeting", ["greeting" => $greetings[$id]]);
})->where(["id" => "[0-4]"]);*/

Route::get("/", "GreetingsController@show");