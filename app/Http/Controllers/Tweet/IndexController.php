<?php

namespace App\Http\Controllers\Tweet;

use App\Http\Controllers\Controller;
use App\Services\TweetService;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, TweetService $tweetSertvice)
    {
        $tweets = $tweetSertvice->getTweets();
        return view('tweet.index')
            ->with('tweets', $tweets);
    }
}
