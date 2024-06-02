<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class CommentController extends Controller
{
    public function store(Request $request)
    {
      
        $validatedData = $request->validate([
            'comment_body'=> 'required'
       ]);

       $validatedData['user_id'] = auth()->user()->id; 
       $validatedData['listing_id'] = $request->post_id;
       Comment::create($validatedData);
       return redirect()->back()->with('message','Comment Created');

    }
    public function destroy(Comment $comment){
        Comment::destroy($comment->id);
        return redirect()->back()->with('Success','Berhasil Dihapus');
    }
}
