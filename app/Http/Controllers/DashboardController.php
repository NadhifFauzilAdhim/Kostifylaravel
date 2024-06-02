<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Listing;
use Illuminate\Http\Request;
class DashboardController extends Controller
{
    public function index(){
        return view('dashboard.index',[
            'title'=>'Dashboard',
            'listings' => Listing::with(['user','comments'])->where('user_id',auth()->user()->id)->get(),
            // Jika User Tidak mempunyai Postingan
            'comments'=> Comment::with(['user','listing'])->where('user_id',auth()->user()->id)->get()
        ]);
    }
    
    public function overview(){
       
        return view('dashboard.posts.overview',[
            'title'=>'Dashboard',
            'listings' => Listing::where('user_id',auth()->user()->id)->get(),
          
        ]);
    }   
}
