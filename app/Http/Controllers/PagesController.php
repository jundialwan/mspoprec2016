<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

class PagesController extends Controller
{
    public function render($page, $input = [])
    {
        $data = $input;
        
        return view($page, compact('data'));
    }
    
    public function home()
    {
        return $this->render('home', [
            'title' => 'Personal Site'
        ]);
    }
    
}
