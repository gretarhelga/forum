<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Thread;
use App\Comment;
use App\User;
use Validator;
use Auth;

class ThreadsController extends Controller
{
    public function __construct()
    {
        $this->middleware("auth")->only("create", "store");
    }

    public function index()
    {
        $threads = Thread::orderBy("created_at","desc")->get();

    	return view("threads.index", compact("threads"));
    }

    public function create()
    {
    	return view("threads.create");
    }

    public function show($id)
    {
        $thread = Thread::find($id);

        /*$comments = Comment::where("thread_id", "=", $id)->orderBy("created_at","desc")->get();*/

        $eigandi = User::find("id");



        
    	return view("threads.show", compact("thread", "eigandi"));
    }
    public function store(Request $request)
    {
         $validator = Validator::make($request->all(), [
            "title" => "required|max:40",
            "body" => "required|min:20"
        ]);

         if ($validator->fails()) {
            return redirect("threads/create")
                ->withInput()
                ->withErrors($validator);
         }

        $thread = new Thread;
        $thread->title = $request->title;
        $thread->body = $request->body;
        $thread->user_id = Auth::id();
        $thread->save();

        return redirect("/threads");
    }
}
