<?php

namespace App\Http\Controllers;

use App\ForumPost;
use Illuminate\Http\Request;

class ForumController extends Controller
{
    public function index()
    {

        $forumPosts = forumPost::all() ;
        return view('forum.index',['forumPosts'=> $forumPosts]); 

    }


    public function create()
    {
        return view ('forum.create');

    }


    public function store(Request $request)
    {
        if(Auth::check()){
            $forumPost = forumPost::create([
                'title' =>$request->input('title'),
                'body' =>$request->input('body'),
                'user_id' => Auth::user()->id

            ]);

            if($forumPost){
                return redirect()->route('forum.show',['forumPost' => $forumPost->id])
                ->with('success','forum Post Created Successfully');
            }
        }

        return back()->withInput()->with('errors','Error Creating New Company');
    }


    public function show(forumPost $forumPost)
    {
        $forumPost = forumPost::find($company->id);

        return view('forum.show',['forumPost'=>$forumPost]);
    }


    public function edit(forumPost $forumPost)
    {
        $forumPosts = forumPost::find($forumPost->id);

        return view('forum.edit',['forumPost'=>$forumPost]);

    } 


    public function update(Request $request, forumPost $forumPosts)
    {
        //save data
 
        $forumUpdate = forumPost::where('id',$forumPost->id)->update([
            'title'=>$request->input('title'),
            'body'=>$request->input('body')

        ]);
    if($forumUpdate){
        return redirect()->route('forum.show',['forumPost'=>$forumPost->id])
        ->with('success','forum Updated Successfully');
    }
        return back()->withInput();
    }


    public function destroy(forumPost $forumPost)
    {
        $findforum = forumPost::find($forumPost->id);
        if($findforum->delete()){
            return redirect()->route('forum.index')
            ->with('success','forum Post deleted Successfully');

        }
        return back()->withInput()->with('error','forum could not be deleted');
    }
}

