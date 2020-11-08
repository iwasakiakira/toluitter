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
        // $tweets = TweetModel::latest()->where('bazz_models_id', '0')->get();
        $tweets = TweetModel::all();

        return view('timeline', [
            'tweets' => $tweets,
        ]);
    }
    public function updateshow( Request $request){
        if ($request->topic == 0 ) {
            $tweets = TweetModel::latest()->where('bazz_models_id', $request->topic)->get();
        } else {
        $tweets = TweetModel::latest()->where('bazz_models_id', $request->topic)->get();
            return view('timeline', [
            'tweets' => $tweets,
            ]);
            }
    }

    public function postTweet(Request $request)
    {
        $request->validate([
            'tweet' => 'required|max:140',
            // 'bazz_models_id' => 'required'
        ]);
        // dd($request->tweet);
        TweetModel::create([
            'user_id' => Auth::user()->id,
            'name'    => Auth::user()->name,
            'tweet'   => $request->tweet,
            'bazz_models_id' => $request->topic,
        ]);

        return back();
    }
}
