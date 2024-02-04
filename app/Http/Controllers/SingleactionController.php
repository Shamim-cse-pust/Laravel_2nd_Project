<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SingleactionController extends Controller
{
    public function __invoke(Request $request)
    {
        $secreat_key="01784";
    $user_key= $request->user_key;

    $data=[
        'name'=>"shamim",
        'mobile'=>'01784766676',
        'village'=>'mouhali'
    ];

    if($user_key==$secreat_key){
    return response()->json([
                "products"=> $data,
            ],200);
        }
        else
        {
            return "Not Match";
        }

    }
}
