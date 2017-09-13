<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GreetingsController extends Controller
{
	public function show()
	{
		$name = "Gretar";
		return view("messages.greeting", compact("name"));
	}
}
