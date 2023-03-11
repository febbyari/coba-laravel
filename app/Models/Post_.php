<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post
{
    // use HasFactory;

    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Febbyari Rizki Fadilah",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Illum aliquid facilis nemo laborum accusantium laboriosam voluptates quae nostrum enim consequuntur eius distinctio, autem iure, quis cum inventore asperiores reprehenderit placeat quos. Sequi, soluta ipsum ullam provident at animi voluptatum rem iste amet recusandae atque vitae nisi quo, libero voluptates rerum quasi. Explicabo expedita consequatur aut, eos eaque enim ea dolores provident accusamus? Nesciunt est beatae ratione expedita tenetur obcaecati laborum eius quam minima culpa quisquam aliquam, sunt recusandae, debitis accusamus."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Doddy",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Illum aliquid facilis nemo laborum accusantium laboriosam voluptates quae nostrum enim consequuntur eius distinctio, autem iure, quis cum inventore asperiores reprehenderit placeat quos. Sequi, soluta ipsum ullam provident at animi voluptatum rem iste amet recusandae atque vitae nisi quo, libero voluptates rerum quasi. Explicabo expedita consequatur aut, eos eaque enim ea dolores provident accusamus? Nesciunt est beatae ratione expedita tenetur obcaecati laborum eius quam minima culpa quisquam aliquam, sunt recusandae, debitis accusamus."
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts =  static::all();

        // $post = [];
        // foreach ($posts as $p) {
        //     if ($p["slug"] === $slug) {
        //         $post = $p;
        //     }
        // }

        return $posts->firstWhere('slug', $slug);
    }
}
