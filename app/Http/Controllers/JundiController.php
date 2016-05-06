<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Jundi;

class JundiController extends Controller
{
    public function login(Request $request)
    {
        if($request->session()->has('user586data')) return redirect('user586/dashboard');
        
        if ( Jundi::isJundi($request->input('user'), md5($request->input('pass'))) )
        {
            // set session
            $request->session()->put('user586data', $request->input('user'));
            
            // redirect to admin page
            return redirect('user586/dashboard');
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