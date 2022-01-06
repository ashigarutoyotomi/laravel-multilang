<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Photo;
use App\Models\Video;
class ReaderController extends Controller
{
    public function photos(Request $request) {
        $photos = Photo::all();
        return view('photos',['photos'=>$photos]);
    }
    public function videos(Request $request) {
        $videos = Video::all();
        return view('videos',['videos'=>$videos]);
    }
}
