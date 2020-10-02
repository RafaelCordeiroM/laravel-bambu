<?php

namespace App\Http\Controllers;

use App\Bambu;
use App\Cachepot;
use App\Product;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * VIEWS
     */
    //---site---//
    public function home(){
        return view('site.index',[]);
    }
    public function gallery(){
        return view('site.gallery',[]);
    }
    public function contacts(){
        return view('site.contacts',[]);
    }
    //---ecommerce---//
    public function ecommerce(){
        return view('site.ecommerce',[
            'products' => Product::all(),
            'bambus' => Bambu::all(),
            'cachepots' => Cachepot::all(),
        ]);
    }
}
