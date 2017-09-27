<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function show($id)
    {
    	return view("profiles.profiles");
    }
    public function gogn()
    {
    	$threads= [
    	["nafn" => "Grétar Helgason published",
    	"um" => "Laravel controller",
    	"efni" => "Hvernig býr maður til Controller í laravel"]
    	];
    }
}
