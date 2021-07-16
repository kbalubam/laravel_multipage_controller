<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoreController extends Controller
{
    //
    public function index(){
        $tabStore=[(object)[
            "span1"=>"Come On In",
            "span2"=> "Come On In",
            "span3"=>"Closed",

            "li1"=>"Lundi",
            "li2"=>"Mardi",
            "li3"=>"mercredi",
            "li4"=>"Jeudi",
            "li5"=>"Vendredi",
            "li6"=>"Samedi",
            "li7"=>"DImanche",
            "horr1"=>"7:00 AM to 8:00 PM",
            "horr2"=>"7:00 AM to 5:00 PM",
            "strong"=>"1116 Orchard Street",
            "em"=>"Golden Valley, Minnesota",
            "em2"=>"Call Anytime",
            "pnum"=>"(317) 585-8468",
            "span4"=>"Strong Coffee, Strong Roots",
            "span5"=>"About Our Cafe",
            "p2"=>"Founded in 1987 by the Hernandez brothers, our establishment has been serving up rich coffee sourced from artisan farmers in various regions of South and Central America. We are dedicated to travelling the world, finding the best coffee, and bringing back to you here in our cafe.",
            "p31"=>"We guarantee that you will fall in",
            "em3"=>"lust",
            "p32"=>"with our decadent blends the moment you walk inside until you finish your last sip. Join us for your daily routine, an outing with friends, or simply just to enjoy some alone time."
        ]
        ];
            $tabHref=[(object)[
                "a1"=>"/home",
                "a2"=>"/products",
                "a3"=>"/store",
                "a4"=>"/about"
    
                ]
            ];
        
        return view('pages.Store',compact('tabStore','tabHref'));
    }
}
