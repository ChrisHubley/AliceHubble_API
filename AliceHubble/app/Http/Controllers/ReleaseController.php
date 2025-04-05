<?php

namespace App\Http\Controllers;

use App\Models\Release;
use Illuminate\Http\Request;

class ReleaseController extends Controller
{
    public function all(){
               $release = Release::all();
        $sortedReleases = $release->sortBy('date');
        return view ('releases',[
            'releases' => $sortedReleases
        ]);
    }
    public function addReleaseForm(){
        return view('addRelease');
    }
    public function create(Request $request){
        // Get the data out of the form
        $newRelease = new Release(); // We create a new blank post
        $request->validate([
            'title' => 'required|string',
            'date' => 'required|date',
            'type' => 'required|string',
            'spotifyLink' => 'nullable|URL',
            'shopLink' => 'nullable|URL',
            'image' => 'URL',
            'description' => 'string|nullable'
        ]);
        // Transfer the data from the request (form) into the blank post
        $newRelease->title = $request->title;
        $newRelease->date = $request->date;
        $newRelease->type = $request->type;
        $newRelease->spotifyLink = $request->spotifyLink;
        $newRelease->shopLink = $request->shopLink;
        $newRelease->image = $request->image;
        $newRelease->description = $request->description;

        // Save the data to the posts table
        $newRelease->save();

        // Send some kind of response
        return redirect('/');
    }
}
