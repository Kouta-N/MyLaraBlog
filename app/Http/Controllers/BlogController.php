<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function showList(){
        $blogs = Blog::all();
        return view('list', compact('blogs'));
    }

    public function showContent($id){
        $blog = Blog::find($id);
        if(is_null($blog)){
            \Session::flash('msg', 'データがありません。');
            return redirect(route('list'));
        }
        return view('content',compact('blog'));
    }

    public function showEdit($id){
        $blog = Blog::find($id);
        if(is_null($blog)){
            \Session::flash('msg', 'データがありません。');
            return redirect(route('list'));
        }
        return view('edit',compact('blog'));
    }

    public function exeUpdate(){
    }

    public function showCreate()
    {
        return view('form');
    }

    public function exeCreate(){
    }

    public function exeDelete(){
    }
}