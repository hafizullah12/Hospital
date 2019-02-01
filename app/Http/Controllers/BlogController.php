<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $blogs = Blog::all();
         return view('admin.blog.index',['blogs'=>$blogs]);
        
    }
    public function blogs()
    {
        $blogs = Blog::all();
        return view('index',['blogs'=>$blogs]);  
    }

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function savePost($request,$imageUrl)
    {
        $blog = new Blog();
        $blog->title = $request->title;
        $blog->description = $request->description;
        $blog->feature_image = $imageUrl;
        $blog->save();
    }
    public function store(Request $request)
    {
        $featureImage = $request->file('feature_image');
        $name = $featureImage->getClientOriginalName();
        $uploadPath = 'public/feature_img/';
        $featureImage->move($uploadPath, $name);
        $imageUrl = $uploadPath . $name;
        $this->savePost($request, $imageUrl);
        return redirect()->back()->with('success', 'News Added Successfully'); 
    }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Blog::find($id);
        
        return view('admin.blog.edit',['post'=>$post]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Blog::find($id);
        $category->delete();
       return redirect()->back()->with('success', 'Post Delete Successfully');
    }
}
