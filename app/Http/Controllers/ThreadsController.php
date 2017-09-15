<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ThreadsController extends Controller
{
    public function index()
    {
    	$threads = [
    		["title" => "Titill A", "body" => "Lere, oðsim dolor set."],
    		["title" => "Titill b", "body" => "Þettta er b."]
    	];
    	return view("threads.index", compact("threads"));
    }

    public function create()
    {
    	return view("threads.create");
    }

    public function show($id)
    {
    	return view("threads.show");
    }
}
