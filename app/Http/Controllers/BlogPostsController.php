<?php

namespace App\Http\Controllers;

use App\BlogPost;
use Illuminate\Http\Request;

class BlogPostsController extends Controller
{
    public function index()
    {
    

        $blogPosts = blogPost::all();
        return view('blog.index',['blogPosts'=> $blogPosts]); 


    }


    public function create()
    {
        return view ('blog.create');

    }


    public function store(Request $request)
    {
        if(Auth::check()){
            $blogPost = blogPost::create([
                'title' =>$request->input('title'),
                'body' =>$request->input('body'),
                'user_id' => Auth::user()->id

            ]);

            if($blogPost){
                return redirect()->route('blog.show',['blogPost' => $blogPost->id])
                ->with('success','Blog Post Created Successfully');
            }
        }

        return back()->withInput()->with('errors','Error Creating New Company');
    }


    public function show(blogPost $blogPost)
    {
        $blogPost = blogPost::find($company->id);

        return view('blog.show',['blogPost'=>$blogPost]);
    }


    public function edit(blogPost $blogPost)
    {
        $blogPosts = blogPost::find($blogPost->id);

        return view('blog.edit',['blogPost'=>$blogPost]);

    } 


    public function update(Request $request, blogPost $blogPosts)
    {
        //save data
 
        $blogUpdate = blogPost::where('id',$blogPost->id)->update([
            'title'=>$request->input('title'),
            'body'=>$request->input('body')

        ]);
    if($blogUpdate){
        return redirect()->route('blog.show',['blogPost'=>$blogPost->id])
        ->with('success','Blog Updated Successfully');
    }
        return back()->withInput();
    }


    public function destroy(blogPost $blogPost)
    {
        $findblog = blogPost::find($blogPost->id);
        if($findblog->delete()){
            return redirect()->route('blog.index')
            ->with('success','Blog Post deleted Successfully');

        }
        return back()->withInput()->with('error','Blog could not be deleted');
    }
}


