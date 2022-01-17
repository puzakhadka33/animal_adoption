<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
class BlogViewController extends Controller
{
    public function viewDetails($id){
        $blog = Blog::find($id);
        $blogList = Blog::all();
        return view('frontend/blogdetails',compact('blog'))->with('blogList',$blogList);
    }
}
