<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Listing;
use App\Models\Category;



class ListingController extends Controller
{
    public function index(){
      
        
        return view('home',[
            "title" => "Home",
            "listing" => Listing::latest()->filter(request(['search']))->get(),
            "category" => Category::all()
        ]);
    }
    public function detail( Listing $post){
        return view('detail',[
            "title" => "Detail",
            "selected" => $post
        ]);
    }

    public function urltodev() {
        return redirect('https://ndfproject.my.id/');
    }
}
