<?php

namespace App\Models;


class Posts 
{
    private static $blog_posts =  [

            [
                "title" => "Judul Tulisan Pertama",
                "slug" => "judul-tulisan-pertama",
                "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem, provident nemo laudantium magnam quod harum unde repellat iure. Non maiores aut quisquam dolore nulla, unde accusamus. Voluptatem impedit asperiores tempore beatae distinctio incidunt laborum recusandae dolorem sequi, aperiam repudiandae, quas voluptatum quidem enim accusamus sunt iusto? Totam veritatis, optio vel ab delectus quod facere nemo. Odit magni placeat modi soluta natus ea iste eveniet error. Voluptate cum sunt recusandae harum et, hic aliquid dolorem ipsum eum odio, sapiente quisquam ea quod similique qui! Repellat ad architecto quibusdam debitis mollitia a recusandae nisi, ut officiis aliquid laboriosam quis reiciendis labore in."
            ],
            [
                "title" => "Judul Tulisan Kedua",
                "slug" => "judul-tulisan-kedua",
                "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem, provident nemo laudantium magnam quod harum unde repellat iure. Non maiores aut quisquam dolore nulla, unde accusamus. Voluptatem impedit asperiores tempore beatae distinctio incidunt laborum recusandae dolorem sequi, aperiam repudiandae, quas voluptatum quidem enim accusamus sunt iusto? Totam veritatis, optio vel ab delectus quod facere nemo. Odit magni placeat modi soluta natus ea iste eveniet error. Voluptate cum sunt recusandae harum et, hic aliquid dolorem ipsum eum odio, sapiente quisquam ea quod similique qui! Repellat ad architecto quibusdam debitis mollitia a recusandae nisi, ut officiis aliquid laboriosam quis reiciendis labore in."
            ]    
        ];
    };

    public static function all()
    {
        return self::$blog_posts;
    }

    public static function find($slug)

    {
    $posts = static::all;
        return $posts->;firstWhere('slug',$slug);
}
