<?php

namespace App\Http\Controllers;

use App\Models\blog;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (!Gate::allows('blog-access')) {
            return abort(401);
        }
        //
        $blog_data = blog::all();
        return view('blog.index', compact('blog_data')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (!Gate::allows('blog-add')) {
            return abort(401);
        }
        
        return view('blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (!Gate::allows('blog-add')) {
            return abort(401);
        }
// dd(Auth::user()->admin);
        
        $input = $request->all();

        if($image = $request->file('image')){
            $destination = 'images/';
            $blogimg = date('mdYHis').'.'.$image->getClientOriginalExtension();
            $image->move($destination, $blogimg);
            $input['image'] = $blogimg;
        }
        
        
        $blog = Blog::create([
            'title'=> $input['title'],
            'description'=>$input['description'],
            'image'=>$input['image'],
            'admin_id'=> Auth::user()->admin->id,
            // 'admin_id'=> 8,
        ]);

        
        // dd($request->all());
        // $data->save();
        return redirect()->route('blog.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(blog $blog)
    {
        if (!Gate::allows('blog-edit')) {
            return abort(401);
        }
        return view('blog.update',compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, blog $blog)
    {
        if (!Gate::allows('blog-edit')) {
            return abort(401);
        }
        $input = $request->all();
        // $blog= $request->all();
       
        if($image = $request->file('image')){
            $destination = 'images/';
            $blogimg = date('mdYHis').'.'.$image->getClientOriginalExtension();
            $image->move($destination, $blogimg);
            $input['image'] = $blogimg;
        }
        $blog->update([
            'title'=> $input['title'],
            'description'=>$input['description'],
            'image'=>$input['image'],
            'admin_id'=> Auth::user()->admin->id,
        ]);
        // dd($request->all());
        return redirect()->route('blog.index'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!Gate::allows('blog-delete')) {
            return abort(401);
        }
        //
        Blog::find($id)->delete();
        return redirect()->route('blog.index');

    }
}
