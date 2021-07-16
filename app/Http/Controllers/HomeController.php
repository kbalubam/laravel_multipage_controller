<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index (){
        $span1="Fresh Coffee";
        $span2="Worth Drinking";
        $p1="Every cup of our quality artisan coffee starts with locally sourced, hand picked ingredients. Once you try it, our coffee will be a blissful addition to your everyday morning routine - we guarantee it!";
        $a1="Visit Us Today!";
        $span3="Our Promise";
        $span4="To You";
        $p2="When you walk into our shop to start your day, we are dedicated to providing you with friendly service, a welcoming atmosphere, and above all else, excellent products made with the highest quality ingredients. If you are not satisfied, please let us know and we will do whatever we can to make things right!";
        $img="img/intro.jpg";
        $tabHref=[(object)[
            "a1"=>"/home",
            "a2"=>"/products",
            "a3"=>"/store",
            "a4"=>"/about"

            ]
        ];



        return view('pages.home', compact("span1", "span2", "span3", "span4", "p1", "p2", "a1","img","tabHref"));
    }
}
