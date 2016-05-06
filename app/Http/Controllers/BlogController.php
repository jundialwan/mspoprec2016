<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Blog;

class BlogController extends MasterController
{
    public function create()
    {
        
    }
    
    public function update(Request $request)
    {
        $input = $request->all();
        
        if ( array_key_exists('edit', $input) ) 
        {
            return $this->render('', [
                'title' => 'Edit Post'
            ]);
        } 
        else if ( array_key_exists('publish', $input) ) 
        {
            Blog::publishBlog($input['hash']);
        } 
        else if ( array_key_exists('draft', $input) ) 
        {
            Blog::draftBlog($input['hash']);
        }
    }
}
