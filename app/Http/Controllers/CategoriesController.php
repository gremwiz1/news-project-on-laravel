<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\News;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index() {
        $categories = Categories::getCategories();

        return view('categories.index')->with('categories', $categories);
    }

    public function show($id) {
        $categories = Categories::getCategoryId($id);
        $news = News::getNewsByCategoryId($id);
        $data = ['categories' => $categories, 'news' => $news];
        return view('categories.one')->with('data', ['categories' => $categories,'news' => $news]);
    }
}
