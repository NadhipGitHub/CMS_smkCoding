<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class HomePageController extends Controller
{
    public function index(){
        
        $lastData = $this->lastData();
   

        $data = Post::where('status','publish')->where()->orderby('id','desc')->paginate(2);
        return view('components.front.home-page',compact('data'));
    }

    private function lastData(){
        $data = Post::where('status','publish')->orderby('id','desc')->latest()->first();
        return $data;
    }
}
