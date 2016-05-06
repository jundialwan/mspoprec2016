<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Blog;

class Blog extends Model
{
    protected $table = 'blogs';
    
    public static function getAllBlog()
    {
        return Blog::where([['post_status', 1]])->get();             
    }
    
    public static function getBlog($hash)
    {
        return Blog::where([['hash', $hash]])->get();
    }
    
    public static function createBlog($data)
    {
        # code...
    }
    
    public static function publishBlog($hash)
    {
        DB::table('blogs')->where('hash', $hash)->update(['post_status' => 1]);
    }
    
    public static function draftBlog($hash)
    {
        DB::table('blogs')->where('hash', $hash)->update(['post_status' => 0]);
    }
    
    public static function updateBlog($hash, $data)
    {
        # code...
    }
}
