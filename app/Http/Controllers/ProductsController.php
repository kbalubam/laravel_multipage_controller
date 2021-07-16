<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    //
    public function index(){
        $tabProducts=[(object)[
            "span1" => "Blended to Perfection",
            "span21" =>"Coffees",
            "span22" => "Teas",
            "imp1" => "img/products-01.jpg",
            "pp1" => "We take pride in our work, and it shows. Every time you order a beverage from us, we guarantee that it will be an experience worth having. Whether it's our world famous Venezuelan Cappuccino, a refreshing iced herbal tea, or something as simple as a cup of speciality sourced black coffee, you will be coming back for more.",
            "span3"=>"Delicious Treats, Good Eats",
            "span41"=>"Bakery",
            "span42" =>"Kitchen",
            "imp2"=>"img/products-02.jpg",
            "pp2" =>"Our seasonal menu features delicious snacks, baked goods, and even full meals perfect for breakfast or lunchtime. We source our ingredients from local, oragnic farms whenever possible, alongside premium vendors for specialty goods.",
            "span5"=>"From Around the World",
            "span6"=>"Bulk Speciality Blends",
            "pp3"=>"Travelling the world for the very best quality coffee is something take pride in. When you visit us, you'll always find new blends from around the world, mainly from regions in Central and South America. We sell our blends in smaller to large bulk quantities. Please visit us in person for more details.",
            ]
        ];
        $tabHref=[(object)[
            "a1"=>"/home",
            "a2"=>"/products",
            "a3"=>"/store",
            "a4"=>"/about"

            ]
        ];
        
        return view('pages.Product', compact('tabProducts','tabHref'));
    }
}
