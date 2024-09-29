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
    public function detail($id)
    {
        $detail = Article::find($id);
        return view('article.detail', compact('detail'));
        dd($detail->toArray());
    }
}
