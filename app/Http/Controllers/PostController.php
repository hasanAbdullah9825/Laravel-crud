<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BlogPost;
use App\Http\Requests\Storepost;




class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        return view('posts.index',['Posts'=>BlogPost::withCount('comments')->get()]);
        
        
      
      

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
  

 
    public function show($id)
    {
        

        return view('posts.show',['Posts'=>BlogPost::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
  public function create(){
return view('posts.create');
  }
  public function store(Storepost $request){
       $validatedData=$request->validated();
       $blogPost= Blogpost::create($validatedData);
    
    $request->session()->flash('status','BlogPost was created!');

    return redirect()->route('posts.show',['Posts'=>$blogPost->id]);
    

  

  }

  public function edit($id){
     $post=BlogPost::findOrFail($id);
    return view('posts.edit',['post'=>$post]);
  }

  public function update(Storepost $request,$id){
   
    $post=Blogpost::findOrFail($id);
    $validatedData=$request->validated();
    $post->fill($validatedData);
    $post->save();

    $request->session()->flash('status','BlogPost was Updated!');
    return redirect()->route('posts.show',['post'=>$post->id]);
    
  }

  public function destroy(Request $request,$id){
    $post=BlogPost::findOrFail($id);
    $post->delete();
    $request->session()->flash('status','BlogPost was Deleted!');
    return redirect()->route('posts.index',);
  }
   
}
