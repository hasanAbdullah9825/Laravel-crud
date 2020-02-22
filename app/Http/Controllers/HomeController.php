<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view('home');
    }

    public function contact(){
        return view('contact');
    }

    public function blogpost($id,$welcome=1){
        $pages=[
            1=>['title'=>" from page 1"],
            2=>['title'=>" from page 2"]
    ];
    
    $welcomes=[1=>'hello ',
    2=>'welcome to '];
    return view('blog-post',['data'=>$pages[$id]['title'],'welcome'=>$welcomes[$welcome]]); 
    }
}
