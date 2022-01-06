<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Photo;
use App\Models\Video;
class UploadController extends Controller
{
    public function storePhoto(Request $request){
        if($request->hasFile('photo')&&$request->photo->isValid()){
            $title = $request->title;
            $description = $request->description;
            $ext = $request->photo->extension();
            $path = $request->photo->storeAs('images', $title.".".$ext,'public');
            $photo = new Photo;
            $photo->description=$description;
            $photo->title=$title;
            $photo->filename= $path;
            $photo->save();
            return redirect()->back();
        }else {
            return redirect()->back()->withInput(['msg'=>'file wasnt uploaded']);
        }
    }
    public function storeVideo(Request $request){
        if($request->hasFile('video')&&$request->video->isValid()){
            $title = $request->title;
            $description = $request->description;
            $ext = $request->video->extension();
            $path = $request->video->storeAs('videos', $title.".".$ext,'public');
            $video = new Video;
            $video->description=$description;
            $video->title=$title;
            $video->filename= $path;
            $video->save();
            return redirect()->back();
        }else {
            return redirect()->back()->withInput(['msg'=>'file wasnt uploaded']);
        }
    }
}
