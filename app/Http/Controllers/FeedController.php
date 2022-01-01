<?php

namespace App\Http\Controllers;

use App\Models\Feed;
use Illuminate\Http\Request;

class FeedController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
           'image' => 'required | max:10000',
            'description' => 'string | max:200'
        ]);
        $feed = new Feed();
        $feed->image = $request->file('image')->store('image');
        $feed->description = $request->description;
        if($feed->save()){
            return back();
        }else{
            return "error!";
        }
    }
}
