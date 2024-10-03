<?php


namespace App\Models;
// use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post
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


Post::create([
    'title' => 'Judul Ke Tiga',
    'slug' => 'judul-ke-Tiga', // Tambahkan slug di sini
    'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit.',
    'body' => "<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quas cupiditate, tempore voluptas architecto dolore hic unde consequatur vero quam quisquam recusandae impedit quibusdam repellat molestias ipsa quo aliquam amet cumque.</p>
        <p>Ab nobis voluptate repellat necessitatibus optio praesentium iusto minus, neque deserunt labore sint placeat harum omnis, ut mollitia enim? Velit quaerat consectetur dignissimos sed ipsam. Commodi quidem accusantium vel ratione?</p>
        <p>Corrupti dignissimos error facilis consequatur voluptatum reiciendis numquam sapiente beatae molestias dicta? Enim minima omnis consequatur sint sunt. Consequatur harum corrupti voluptate laudantium itaque asperiores libero labore, eum eveniet officia.</p>
        <p>Pariatur consectetur nemo ipsam? Velit dolor, ex officiis delectus ratione, nihil cum blanditiis ipsa adipisci nulla deleniti doloremque, amet ab neque commodi deserunt non unde labore laboriosam necessitatibus aspernatur eaque!</p>
        <p>Natus labore id corporis vero cumque totam cupiditate, repellat quo dolor provident recusandae quae quibusdam quia. Quas debitis beatae, itaque excepturi saepe in earum, harum eaque quo magnam a provident?</p>"
]);
