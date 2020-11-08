<?php

namespace App\Http\Controllers;

use App\TweetModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;


class MyPageController extends Controller
{
    // showページへ移動
    public function show()
    {
        $user_id = Auth::id();

        $tweets = \App\TweetModel::where('user_id',$user_id)->select('tweet', 'name', 'created_at')->latest()->get();
        // $user = Auth::user();

        // $tweets = TweetModel::all();
        return view('mypage', ['tweets' => $tweets ]);
    }
}
