<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $data = Article::latest()->paginate(5);

        return view('article.index', compact('data'));
    }

    public function add()
    {
        $categories = [
            ["id" => 1, "name" => "Tech"],
            ["id" => 2, "name" => "News"],
            ["id" => 3, "name" => "Science"],
            ["id" => 4, "name" => "Food"],

        ];
        return view('article.add', compact('categories'));
    }

    public function create(Request $request)
    {
        // dd($request->toArray());
        $article = new Article();
        $article->title = request()->title;
        $article->body = request()->body;
        $article->category_id = request()->category_id;
        $article->save();

        return redirect()->route('article.list')->with(['created' => 'Article Create Successfully.']);
    }
    public function detail($id)
    {
        $detail = Article::find($id);
        return view('article.detail', compact('detail'));
        dd($detail->toArray());
    }
}
