<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video;
class VideoUpload extends Controller
{
    public function store(Request $request){
        if($request->file('video')->isValid()&&$request->hasFile('video')){
            $ext = $request->video->extension();
            $path = $request->video->storeAs('videos', $request->title.".".$ext,'public');
            $video = new Video;
            $video->description=$request->description;
            $video->title=$request->title;
            $video->filename= $path;
            $video->save();
            return redirect()->back();
            // return view('result',['request'=>$request]);
        }else {
            return redirect()->back()->withInput(['msg'=>'file wasnt uploaded']);
        }
    }
}
