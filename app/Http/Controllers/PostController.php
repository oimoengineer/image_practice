<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Storage;

class PostController extends Controller
{
    public function index(Post $post)
    {
        return view('index')->with(['posts' => $post->get()]);
    }
    
    public function create()
    {
        return view('create');
    }
    
    public function store(Request $request, Post $post)
    {
        //bodyの保存処理準備
        $input = $request['post'];
        
        //画像があったら以下の保存処理準備を行う
        if($request->image){
            $image = $request->file('image');
            $path = Storage::disk('s3')->putFile('imageuploadpractice', $image, 'public');
            $post->image = Storage::disk('s3')->url($path);
        }
        
        //保存処理
        $post->fill($input)->save();
        return redirect('/');
    }
    
}
