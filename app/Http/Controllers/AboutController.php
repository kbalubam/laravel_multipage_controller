<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    //
    public function index(){
        $tabAbout=[(object)[
            "imgA1" => "img/about.jpg",
            "spanA1" => "Strong Coffee, Strong Roots",
            "spanA2" => 'About Our Cafe',
            "pA1" => "Founded in 1987 by the Hernandez brothers, our establishment has been serving up rich coffee sourced from artisan farmers in various regions of South and Central America. We are dedicated to travelling the world, finding the best coffee, and bringing back to you here in our cafe.",
            "pA21" => "We guarantee that you will fall in",
            "emA1" => "lust",
            "pA22" => "with our decadent blends the moment you walk inside until you finish your last sip. Join us for your daily routine, an outing with friends, or simply just to enjoy some alone time.",
            ]
        ];
        $tabHref=[(object)[
            "a1"=>"/home",
            "a2"=>"/products",
            "a3"=>"/store",
            "a4"=>"/about"

            ]
        ];

        
        return view ('pages.About', compact('tabAbout', 'tabHref'));
    }
}
