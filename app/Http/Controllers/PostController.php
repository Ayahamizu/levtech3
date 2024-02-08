<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
<<<<<<< HEAD
   public function index(Post $post)
{
    return view('posts.index')->with(['posts' => $post->getPaginateByLimit()]);
} 
   public function show(Post $post)
{
    return view('posts.show')->with(['post' => $post]);   
 //'post'はbladeファイルで使う変数。中身は$postはid=1のPostインスタンス。
}
}


=======
    public function index(Post $post)
    {
        return view('posts.index')->with(['posts' => $post->getPaginateByLimit(1)]);  
       //blade内で使う変数'posts'と設定。'posts'の中身にgetを使い、インスタンス化した$postを代入。
    }
}
>>>>>>> f80a06f56f1dd4e5000ed1f09e05eed786001d4e
?>