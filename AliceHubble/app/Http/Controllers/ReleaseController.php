<?php

namespace App\Http\Controllers;

use App\Models\Release;
use Illuminate\Http\Request;

class ReleaseController extends Controller
{
    public function all(){
               $release = Release::all();
        $sortedReleases = $release->sortByDesc('date');
        return view ('releases',[
            'releases' => $sortedReleases
        ]);
    }
    public function addReleaseForm(){
        return view('addRelease');
    }
    public function create(Request $request){
        $newRelease = new Release();
        $request->validate([
            'title' => 'required|string',
            'date' => 'required|date',
            'type' => 'required|string',
            'spotifyLink' => 'nullable|URL',
            'shopLink' => 'nullable|URL',
            'image' => 'URL',
            'description' => 'string|nullable'
        ]);
        $newRelease->title = $request->title;
        $newRelease->date = $request->date;
        $newRelease->type = $request->type;
        $newRelease->spotifyLink = $request->spotifyLink;
        $newRelease->shopLink = $request->shopLink;
        $newRelease->image = $request->image;
        $newRelease->description = $request->description;


        $newRelease->save();
        return redirect('/');
    }
    public function find(Release $release)
    {
        return view('singleRelease', [
            'release' => $release
        ]);
    }
        public function delete(Release $release, Request $request){
        $request->validate(['confirm' => 'accepted']);
        $release->delete();
        return redirect('/releases');
    }
}
