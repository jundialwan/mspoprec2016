<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Blog;

class PagesController extends MasterController
{    
    public function home()
    {        
        return $this->render('home', [
            'title' => 'Personal Site'
        ]);
    }
    
    public function allBlog()
    {
        $allblog = Blog::getAllBlog(); 
        
        for ($i=0; $i < count($allblog); $i++) { 
            $string = strip_tags($allblog[$i]->content);

            if (strlen($string) > 500) {

                // truncate string
                $stringCut = substr($string, 0, 500);

                // make sure it ends in a word so assassinate doesn't become ass...
                $string = substr($stringCut, 0, strrpos($stringCut, ' ')).'...'; 
            }
            
            $allblog[$i]->content = htmlspecialchars_decode($string);
        }
             
        return $this->render('allblog', [
            'title' => 'Blog',
            'allblog' => $allblog,
        ]);
    }
    
    public function getBlog($hash = '')
    {
        if ($hash == '') return redirect('/');
        
        $blog = Blog::getBlog($hash)[0];
        
        return $this->render('blog', [
            'title' => $blog->title,
            'blog' => $blog,
        ]);
    }
}
