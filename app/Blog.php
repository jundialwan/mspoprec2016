<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    public static function getAllBlog()
    {
        # code...
    }
    
    public static function getBlog($hash)
    {
        # code...
    }
    
    public static function createBlog($data)
    {
        # code...
    }
    
    public static function publishBlog($hash)
    {
        # code...
    }
    
    public static function draftBlog($hash)
    {
        # code...
    }
    
    public static function updateBlog($hash, $data)
    {
        # code...
    }
}
