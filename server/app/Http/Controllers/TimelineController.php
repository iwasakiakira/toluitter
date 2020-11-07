<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use \App\Tweet;
use App\TweetModel;

class TimelineController extends Controller
{
    public function showTimelinePage()
    {
        $tweets = TweetModel::latest()->get();

        return view('timeline', [
            'tweets' => $tweets,
        ]);
    }

    public function postTweet(Request $request)
    {
        $request->validate([
            'tweet' => 'required|max:140',
        ]);

        TweetModel::create([
            'user_id' => Auth::user()->id,
            'name'    => Auth::user()->name,
            'tweet'   => $request->tweet,
        ]);

        return back();
    }
}
