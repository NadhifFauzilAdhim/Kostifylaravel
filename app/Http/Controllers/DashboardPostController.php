<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use App\Models\Category;

use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\Storage;

class DashboardPostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       return view('dashboard.posts.index',[
        'title' => "My Post",
        'listing' => Listing::where('user_id',auth()->user()->id)->get()
       ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.posts.create',[
            'title'=>'Create New Post',
            'categories' => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $validatedData = $request->validate([
            'placename' => 'required|max:255',
            'slug'=> 'required|unique:listings',
            'category_id'=>'required',
            'forgender'=>'required',
            'available'=>'required',
            'price'=>'required',
            'region'=>'required',
            'location'=>'required',
            'image' => 'image|file|max:2048',
            'facility'=>'required'
       ]);
        if($request->file('image')){     
            $validatedData['image']=$request->file('image')->store('post-image');
        }

        $validatedData['user_id'] = auth()->user()->id;
       
        Listing::create($validatedData);

        return redirect('/dashboard/posts')->with('success','Post Berhasil Dibuat');
    }

    /**
     * Display the specified resource.
     */
    public function show(Listing $post)
    {
        return view('dashboard.posts.show',[
            'title'=> 'Detail Post',
            'post'=> $post
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Listing $post)
    {
        return view('dashboard.posts.edit',[
            'title'=>'Edit Post',
            'post'=> $post,
            'categories' => Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Listing $post)
    {
        $datarules = ([
            'placename' => 'required|max:255',
            'category_id'=>'required',
            'forgender'=>'required',
            'available'=>'required',
            'price'=>'required',
            'region'=>'required',
            'location'=>'required',
            'image' => 'image|file|max:2048',
            'facility'=>'required'
       ]);

       if($request->slug != $post->slug){
            $datarules['slug'] = 'required|unique:listings';
       }

       $validatedData = $request->validate($datarules);

       if($request->file('image')){
        if($request->oldImagePoster){
            Storage::delete($request->oldImagePoster);
           
        }
        $validatedData['image']=$request->file('image')->store('post-image');
    }

       $validatedData['user_id'] = auth()->user()->id;
       Listing::where('id',$post->id)->update($validatedData);

       return redirect('/dashboard/posts')->with('success','Post Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Listing $post)
    {
        if($post->image){
            Storage::delete($post->image);
           
        }
        Listing::destroy($post->id);
        return redirect('/dashboard/posts')->with('success','Post Dihapus');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Listing::class,'slug', $request->placename);
        return response()->json(['slug'=>$slug]);
    }
}
