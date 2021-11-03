<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index() {
        $news = News::getNews();

        return view('news.index')->with('news', $news);
    }

    public function show($id) {
        $news = News::getNewsId($id);

        return view('news.one')->with('news', $news);;
    }
}
