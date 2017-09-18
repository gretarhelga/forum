<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ThreadsController extends Controller
{
    public function index()
    {
    	$threads = DB::select("select * from threads");

    	return view("threads.index", compact("threads"));
    }

    public function create()
    {
    	$countries =["Ísland", "Ísland", "Írland", "Ísland", "Írland"];

    	return view("threads.create", compact("countries"));
    }

    public function show($id)
    {
        $thread = DB::select("select * from threads where id=" . $id);
        dd($thread);

    	return view("threads.show", compact(thread));
    }
}
