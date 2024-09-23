<?php

namespace App\Models;

class Post 
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "Author" => "Bryan Jonathan",
            "Body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugit est aspernatur vel magnam ipsum animi eos tempore laudantium amet minus consequuntur corporis saepe, facilis voluptatibus reiciendis ea dolor cupiditate distinctio corrupti molestiae labore obcaecati. Facilis exercitationem deleniti temporibus iusto animi illo sapiente eos ratione dolores laboriosam. Enim voluptatum earum ullam eum architecto adipisci illum sint unde magni corrupti dolore veniam optio, mollitia facilis assumenda sed blanditiis nostrum asperiores officiis quaerat. Aliquid magni officiis porro deleniti asperiores voluptas amet illum fuga soluta, modi laudantium. Neque totam delectus adipisci in voluptatem necessitatibus modi cupiditate animi voluptas saepe, maxime fugiat consectetur officia quasi?"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "Author" => "Richard Manuel",
            "Body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugit est aspernatur vel magnam ipsum animi eos tempore laudantium amet minus consequuntur corporis saepe, facilis voluptatibus reiciendis ea dolor cupiditate distinctio corrupti molestiae labore obcaecati. Facilis exercitationem deleniti temporibus iusto animi illo sapiente eos ratione dolores laboriosam. Enim voluptatum earum ullam eum architecto adipisci illum sint unde magni corrupti dolore veniam optio, mollitia facilis assumenda sed blanditiis nostrum asperiores officiis quaerat. Aliquid magni officiis porro deleniti asperiores voluptas amet illum fuga soluta, modi laudantium. Neque totam delectus adipisci in voluptatem necessitatibus modi cupiditate animi voluptas saepe, maxime fugiat consectetur officia quasi?"
        ],
    
        ];

        public static function all(){
            return collect(self::$blog_posts);
        }


        public static function find($slug){
            $posts = static::all();
            return $posts->firstWhere("slug", $slug);
        }
}
