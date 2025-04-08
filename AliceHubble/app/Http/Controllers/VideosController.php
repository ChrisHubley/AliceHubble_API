<?php

namespace App\Http\Controllers;

use App\Models\Release;
use App\Models\Video;
use Illuminate\Http\Request;

class VideosController extends Controller
{
    public function all(){
        $videos = Video::with('release:id,title')->get();
        $sortedVideos = $videos->sortByDesc('date');
        return view ('videos',[
            'videos' => $sortedVideos
        ]);
    }
    public function addVideoForm(){
        $releases = Release::select('id', 'title')->get();
        return view('addVideo',
        ['releases' => $releases]
        );
    }
    public function create(Request $request){
        $newVideo = new Video();
        $request->validate([
            'title' => 'required|string',
            'date' => 'required|date',
            'link' => 'required|URL',
            'image' => 'nullable|URL'
        ]);
        $newVideo->title = $request->title;
        $newVideo->link = $request->link;
        $newVideo->image = $request->image;
        $newVideo->date = $request->date;
        $newVideo->release_id = $request->release;
    }

}
