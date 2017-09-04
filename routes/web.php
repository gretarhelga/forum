<?php

Auth::routes();

Route::get("/threads", function() {
	return view("threads.index");
});