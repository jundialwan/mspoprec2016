<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Jundi;

class JundiController extends Controller
{
    public function login(Request $request)
    {
        if ( Jundi::isJundi($request->input('user'), $request->input('pass')) )
        {
            // set session
            $request->session()->put('user586data', $request->input('user'));
            
            // redirect to admin page
            return redirect('/');
        } 
        else
        {
            return redirect('/');
        }            
    }
    
    public function logout(Request $request)
    {
        // forget session
        $request->session()->forget('user586data');
        
        // redirect to homepage
        return redirect('/');
    }
}