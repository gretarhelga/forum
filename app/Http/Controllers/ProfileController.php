<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function show($id)
    {
    	$threads= [
        ["nafn" => "Grétar Helgason",
        "um" => "Laravel controller",
        "efni" => "Hvernig býr maður til Controller í laravel"],

        ["nafn" => "Grétar Helgason",
        "um" => "Laravel 5.5",
        "efni" => "Hver er munurinn á Laravel útgáfur 5.4 og 5.5?"]
        ];
        return view("profiles.profiles", compact("threads"));
    }
}
