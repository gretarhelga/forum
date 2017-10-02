<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Thread;

class ThreadsController extends Controller
{
    public function index()
    {
        $threads = Thread::all();

    	return view("threads.index", compact("threads"));
    }

    public function create()
    {
    	$countries =["Ísland", "Ísland", "Írland", "Ísland", "Írland"];

    	return view("threads.create");
    }

    public function show($id)
    {
        $thread = Thread::find($id);
        
    	return view("threads.show", compact("thread"));
    }
    public function store ()
    {
        dd("store method");
    }
}
