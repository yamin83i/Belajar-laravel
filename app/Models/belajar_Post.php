<?php

namespace App\Models;


class Post 
{
    private static  $blog_posts = [
        [
            "title" => "judul post pertama",
            "slug" => "judul-post-pertama",
            "author" => "Ash",
            "body" => " kasdjalk
            dsakjdhjksdha
            dksdhkajsdh
            sdkahdkio
            sdhiawdjilajdi
            diajwldijawildjiwljd
            duowhdiwhdih"
        ],
        [
            "title" => "judul post kedua",
            "slug" => "judul-post-kedua",
            "author" => "Yami",
            "body" => " kasdjalk
            dsakjdhjksdha
            dksdhkajsdh
            sdkahdkio
            sdhiawdjilajdi
            diajwldijawildjiwljd
            duowhdiwhdih Mengenal fitur Blade Templating Engine pada laravel 8
    
            #Laravel #Laravel8 #TutorialLaravel
            
            00:00 Intro
            01:00 Dokumentasi Blade
            03:10 Penggunaan Blade
            10:51 Layouting System
            20:31 Simulasi Blog Posts
            31:28 Single Post
            33:59 Penutup
            
            ---
            Laravel
            https://laravel.com/
            
            Laracast
            http://laracast.com/
            
            ---
            Ikuti Playlist Belajar Laravel 8 Dari Awal : 
            https://www.youtube.com/playlist?list...
            "
        ]
        ];


        public static function all(){
            return collect(self::$blog_posts);
        }

        public static function find($slug){
            $posts = static::all();
        //     $post = [];
        //     foreach($posts as $p){
        //     if($p["slug"] === $slug){
        //     $post = $p;
        //     }
        // }

        return $posts->firstWhere('slug', $slug);
        }
}
