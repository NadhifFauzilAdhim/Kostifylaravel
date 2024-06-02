<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Carbon\Carbon;

class ProfileController extends Controller
{
    public function profile(User $user){
        $daysSinceCreation = Carbon::parse($user->created_at)->diffInDays(Carbon::now());
        return view('profile',[
            'title'=>'Profile',
            'listing' => $user->listings->load('category','user'),
            'profile'=>$user,
            'datediff'=>floor($daysSinceCreation)
        ]);
    }
}
