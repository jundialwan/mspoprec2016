<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

class MasterController extends Controller
{
    public function render($page, $input = [])
    {
        $data = $input;
        
        return view($page, compact('data'));
    }    
}
