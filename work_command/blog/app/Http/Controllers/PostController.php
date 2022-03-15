<?php

namespace App\Http\Controllers;

use App\Post;
use App\Http\Requests\PostRequest;

class PostController extends Controller
{
        /**
     * Post一覧を表示する
     * 
     * @param Post Postモデル
     * @return array Postモデルリスト
     */
    public function index(Post $post)
    {
        return view('posts/index')->with(['posts' => $post->getPaginateByLimit()]); 
    }
    /**
     * 特定IDのpostを表示する
     *
     * @params Object Post // 引数の$postはid=1のPostインスタンス
     * @return Reposnse post view
     */
    public function show(Post $post)
    {
        return view('posts/show')->with(['post' => $post]);
    }
    public function create()
    {
        return view('posts/create');
    }
    public function store(Post $post, PostRequest $request)
    {
         // $request['post']を利用すると、postをキーにもつリクエストパラメータを取得することができる
         // $requestのキーは、HTMLのFormタグ内で定義した各入力項目のname属性と一致
        $input = $request['post'];
         // $post->create($input)と記載しても同じ挙動になります
         //"Post.php"でfillableを設定 
        $post->fill($input)->save();
        return redirect('/posts/' . $post->id);
    }
    public function edit(Post $post)
    {
        return view('posts/edit')->with(['post' => $post]);
    }
    public function update(PostRequest $request, Post $post)
    {
        $input_post = $request['post'];
        $post->fill($input_post)->save();
        return redirect('/posts/' . $post->id);
    }
    public function delete(Post $post)
    {
        $post->delete();
        return redirect('/');
    }
}

