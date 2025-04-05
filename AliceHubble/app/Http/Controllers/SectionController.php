<?php

namespace App\Http\Controllers;

use App\Models\Section;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class SectionController extends Controller
{
    public function all(){
       $section = Section::all();
        return view ('home',[
            'sections' => $section
        ]);
    }
}
