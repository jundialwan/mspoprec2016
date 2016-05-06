<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Jundi;

class Jundi extends Model
{
    protected $table = 'users';
    
    public function isJundi($user, $pass)
    {
        $users = Jundi::where([
            ['username', $user],
            ['pass', $pass]
        ])->get();
         
        if(count($users) > 0) return true;
        else return false;
    }
}
