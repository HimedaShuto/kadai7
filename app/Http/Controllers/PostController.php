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
    
    
    /**
     * 特定のIDのpostを表示する
     * 
     * @params 0bject Post //引数の$postはid=1のPostPostインスタンス
     * @reurn Reposnse post view
     */
     
     public function show(Post $post)
     {
         return view('posts.show')->with(['post'=>$post]);
         //'post'はbladeファイルで使う変数.中身は$postはid=1のPostインスタンス
     }
}
?>