<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('login');
    }

    public function verify(Request $req){

        // $user=DB::table('users')
        //             ->where('email', $req->email)
        //             ->where('password',$req->password)
        //             ->first();

        // if($user!=null){

        //     $req->session()->put('email', $req->email);
        //     return redirect('/home');
        // }
        // else{

        //     $req->session()->flash('msg', 'invalid username/password');
    		
        //     return redirect('/login');
        // }          
        return redirect('/home');



    }
}
