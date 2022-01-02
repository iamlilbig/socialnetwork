<?php

namespace App\Http\Controllers;

use App\Models\Feed;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

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
            'description' => 'max:200'
        ]);
        $image = $request->file('image')->store('feed');
        $feed = new Feed();
        $feed->image = Storage::url($image);
        $feed->description = $request->description;
        $feed->user_id = Auth::user()->id;
        if($feed->save()){
            return back();
        }else{
            return "error!";
        }
    }
}
