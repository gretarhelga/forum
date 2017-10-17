<?php

Auth::routes();

Route::get("/", function() {
	return redirect("/threads");
});

Route::get("/threads", "ThreadsController@index");

Route::post("/threads", "ThreadsController@store");

Route::get("/threads/create", "ThreadsController@create");

Route::get("/threads/{id}", "ThreadsController@show");

Route::post("/threads/{id}/comment", "CommentController@store");

Route::get("/threads/{id}/comment", "CommentController@show");

Route::get("/profile/{id}", "ProfileController@show");




