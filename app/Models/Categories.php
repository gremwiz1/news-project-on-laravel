<?php

namespace App\Models;

use Illuminate\Support\Str;

class Categories {
    private static $categories = [
        [
            'category_id' => 1,
            'title' => 'Спорт',
            'text' => 'Тут собраны все новости о спорте'
        ],
        [
            'category_id' => 2,
            'title' => 'Политика',
            'text' => 'Тут собраны все новости о политике'
        ]
        ];
        public static function getCategories() {
            return static::$categories;
        }
        public static function getCategoryId($id) {
            foreach (static::getCategories() as $category) {
                if ($category['category_id'] == $id) {
                    return $category;
                }
            }
            return [];
        }
}
