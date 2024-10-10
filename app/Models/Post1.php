<?php


namespace App\Models;
// use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post1
{
    private static $blog_posts = [
        [
            "title" => "judul Post Pertama",
            "slug" => "judul-post-prtama",
            "author" => "Royandi",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur laboriosam necessitatibus tenetur doloremque! Soluta fuga delectus, veritatis excepturi aut quasi dolore eligendi quam ipsa optio illo inventore sit a! Est?"
        ],
        [
            "title" => "judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Roy",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur laboriosam necessitatibus tenetur doloremque! Soluta fuga delectus, veritatis excepturi aut quasi dolore eligendi quam ipsa optio illo inventore sit a! Est?"
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        // $post = [];
        // foreach ($posts as $p) {
        //     if ($p["slug"] === $slug) {
        //         $post = $p;
        //     }
        // }

        return $posts->firstWhere('slug', $slug);
    }
}



