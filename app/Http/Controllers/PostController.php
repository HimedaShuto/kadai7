<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
     public function index(Post $post)
    {
        return view('posts.index')->with(['posts'=>$post->getPaginateByLimit()]);
        //blade内で使う変数'post'と設定。'posts'の中身ぬgetを使い、インスタンス化した$postを代入
    }
    

}
?>