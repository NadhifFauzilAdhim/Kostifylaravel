<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Registered;
use Symfony\Contracts\Service\Attribute\Required;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

class RegisterController extends Controller
{
    public function index(){
       return view('register.index',[
            'title'=>'Register'
       ]);
    }
    public function store(Request $request){
        //Validate 
      $validatedData = $request->validate([
            'name'=>'required|max:255',
            'username'=>'required|min:3|max:255|unique:users',
            'email'=>'required|email|unique:users',
            'phone'=>'required|unique:users',
            'password'=>'required|min:5|max:255',
            'is_owner'=>'required'
       ]);
        $user =  User::create($validatedData);
        event(new Registered($user));
        Auth::login($user);
        // return redirect('/login')->with('success','Pendaftaran Anda Berhasil');
        return redirect('/email/verify');
    }
    public function verifyemail(){ 
    if(auth()->user()->email_verified_at !== null){
        return redirect('/');
    }
    return view('auth.verify-email', [
        'title' => 'Verify Email'
    ]);
    }

    
    public function emailVerificationRequest(EmailVerificationRequest $request){
        $request->fulfill();
 
        return redirect('/');
    }

  
    public function verificationResend(Request $request){
        if(auth()->user()->email_verified_at !== null){
        return redirect('/');
        }
        $request->user()->sendEmailVerificationNotification();
        return back()->with('resendsuccess', ' Email Verifikasi Dikirim Ulang, silahkan cek Email Anda');
    }

   
}
