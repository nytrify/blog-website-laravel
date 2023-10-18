<?php

namespace App\Models;


class Post 
{
    private static $blog_posts =  [
        [
            "title" => "You Are Gay",
            "slug" => "you-are-gay",
            "author" => "Benjamin Panggabean",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aut deserunt dicta blanditiis quasi modi distinctio accusantium amet harum veritatis. Omnis, aliquid quia! Vero obcaecati totam, cupiditate a aperiam impedit deleniti."
        ],
        [
            "title" => "I Am Indeed Gay",
            "slug" => "i-am-inded-gay",
            "author" => "Baker Mayfield",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aut deserunt dicta blanditiis quasi modi distinctio accusantium amet harum veritatis. Omnis, aliquid quia! Vero obcaecati totam, cupiditate a aperiam impedit deleniti."
        ]
    ];

    public static function all(){
        return collect(self::$blog_posts);
    }

    public static function find($slug){

        $posts = static::all();

        return $posts->firstWhere('slug', $slug);
    }

}
