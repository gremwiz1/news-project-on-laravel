<?php

namespace App\Models;

use Illuminate\Support\Str;

class News
{
    private static $news = [
      [
            'id' => 1,
            'title' => 'Новость 1',
            'text' => 'А у нас новость 1 и она очень хорошая!',
            'slug' => 'novost1',
            'category_id' => 1
        ],
        [
            'id' => 3,
            'title' => 'Новость 3',
            'text' => 'А у нас новость 3 и она очень хорошая!',
            'slug' => 'novost3',
            'category_id' => 1
        ],
        [
            'id' => 2,
            'title' => 'Новость 2',
            'text' => 'А тут плохие новости(((',
            'category_id' => 2
        ]
    ];
    public static function getNews() {
        //dump(Str::slug('Новость 1'));
        return static::$news;
    }

    public static function getNewsId($id) {
        foreach (static::getNews() as $news) {
            if ($news['id'] == $id) {
                return $news;
            }
        }
        return [];
    }
    public static function getNewsByCategoryId($id) {
        $arr = array();
        foreach (static::getNews() as $news) {
            if ($news['category_id'] == $id) {
                array_push($arr, $news);
            }
        }
        return $arr;
    }
}
