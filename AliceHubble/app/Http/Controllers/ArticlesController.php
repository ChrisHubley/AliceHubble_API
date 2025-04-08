<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Release;
use App\Models\Section;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function all() {
        $articles = Article::with('release:id,title', 'section:id,name')->get();
        $sortedArticles = $articles->sortByDesc('date');
        return view ('articles',[
            'articles' => $sortedArticles
        ]);
    }
    public function addArticleForm(){
        $releases = Release::select('id', 'title')->get();
        $sections = Section::select('id', 'name')->get();
        return view('addArticle',
            ['releases' => $releases],
            ['sections' => $sections]
        );
    }
    public function create(Request $request){
        $newArticle = new Article();
        $request->validate([
            'title' => 'required|string',
            'date' => 'required|date',
            'quote' => 'required|string',
            'link' => 'nullable|URL',
            'publication' => 'required|string',
            ]);

        $newArticle->title = $request->title;
        $newArticle->date = $request->date;
        $newArticle->quote = $request->quote;
        $newArticle->link = $request->link;
        $newArticle->publication = $request->publication;
        $newArticle->release_id = $request->release;
        $newArticle->section_id = $request->section;

        $newArticle->save();
        return redirect('/');
    }
}
