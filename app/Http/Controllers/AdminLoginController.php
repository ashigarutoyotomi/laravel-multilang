<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Article;
use Illuminate\Support\Facades\DB;
class AdminLoginController extends Controller
{
    public function login(Request $request){
        $user = DB::table('users')->where('email', $request->email)->first();
        if($user->password==$request->password){
            $articles = Article::all();
            return view('admin-panel',['articles'=>$articles]);
        }else{
            return var_dump($user);
        }
    }
}
