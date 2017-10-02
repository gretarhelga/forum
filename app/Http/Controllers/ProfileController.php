<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function show($id)
    {
    	$threads= [
        ["nafn" => "Grétar Helgason published",
        "um" => "Laravel controller",
        "efni" => "Hvernig býr maður til Controller í laravel"]
        ];
        return view("profiles.profiles", compact("threads"));
    }
}
