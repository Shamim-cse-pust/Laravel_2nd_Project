<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\User;
use App\Models\UserPost;
use Illuminate\Http\Request;

class FrontendContoller extends Controller
{
    public function home()
    {
        $user=User::with('nidcard')->get();
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

    public function userIndex()
    {
        $users = User::all();

        return view('home', [
            'users' => $users
        ]);
    }


    public function books()
    {
        $books = Book::with(['author', 'publisher', 'booktype'])->get();
        return $books;
    }

    public function positions()
    {
        // $books = Book::with(['author', 'publisher', 'booktype'])->get();

        // long way
        // $positions = UserPost::with('user.country')->get();
        // short way
       $positions = UserPost::with('country')->get();
       return $positions;
    }

}
