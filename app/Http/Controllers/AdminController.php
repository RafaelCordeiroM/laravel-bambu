<?php

namespace App\Http\Controllers;

use App\Bambu;
use App\Product;
use App\Cachepot;
use Illuminate\Http\Request;


class AdminController extends Controller
{
    /**
     * VIEWS
     */
    //dashboard
    public function dashboard(){
        return view('admin.dashboard.index',[]);
    }
    //ecommerce
    public function products(){
        return view('admin.ecommerce.products',[
            'products' => Product::all(),
            'bambus' => Bambu::all(),
            'cachepots' => Cachepot::all(),
        ]);
    }
    public function customers(){
        return view('admin.ecommerce.customers',[]);
    }
    public function addProduct(){
        return view('admin.ecommerce.add-product',[
            'bambus' => Bambu::all(),
            'cachepots' => Cachepot::all()
        ]);
    }
    //email
    public function inbox(){
        return view('admin.email.inbox',[]);
    }
    public function orders(){
        return view('admin.ecommerce.orders',[]);
    }
    public function marketing(){
        return view('admin.email.marketing',[]);
    }
    //gallery
    public function projects(){
        return view('admin.gallery.projects-list',[]);
    }
    public function addProjects(){
        return view('admin.gallery.projects-create',[]);
    }
    public function gallery(){
        return view('admin.gallery.gallery',[]);
    }
}
