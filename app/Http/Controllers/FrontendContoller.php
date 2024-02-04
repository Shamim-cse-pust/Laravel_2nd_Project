<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class FrontendContoller extends Controller
{
    public function home()
    {
        $user=User::all();
        return view('home',[
            'page_name'=> 'Home Page',
            'title'=>"Home",
            "user"=> $user
        ]);
    }
    public function about()
    {
        $title="About";
        return view('about',[
            'page_name'=> 'About Page',
            'title'=>"About"

        ]);
    }
    public function contact()
    {
        $page_name= "Contact Page";
        $title="contact";
        return view('contact',compact('page_name','title'));
    }
    public function service()
    {
        $page_name="Service Page";
        $product=[
            'name'=>"shamim",
            'mobile'=>'01784766676',
            'village'=>'mouhali'
        ];
        $title="service";
    return view('service',compact('product','title'));
    }

}
