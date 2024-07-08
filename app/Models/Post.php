<?php

namespace App\Models;


class Post
{
    private static $blog_post = [
        [
            'title' => 'Judul Post Pertama',
            'slug' => 'judul-post-pertama',
            'author' => 'Bhisma Haris Alfitrah',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio ut exercitationem doloremque sunt molestiae eligendi soluta laborum quidem rerum recusandae quod voluptates vitae architecto aliquid quibusdam qui voluptatem, facilis numquam deserunt laudantium expedita corporis ipsum dolorem. Praesentium rem maxime impedit qui non sequi consequuntur neque reprehenderit, obcaecati quasi quos nostrum voluptatibus facilis. Rerum quis voluptas voluptatum eligendi? Voluptate quibusdam in ex nam aspernatur labore quos a modi perspiciatis placeat, eum ratione libero, quis porro officiis vero, quisquam fugit repellendus eligendi.'
        ],
        [
            'title' => 'Judul Post Kedua',
            'slug' => 'judul-post-kedua',
            'author' => 'Aqilah Zulfa Syawqiyyatush Sholih',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam vitae in expedita fuga libero dignissimos ipsum similique cupiditate nihil. Temporibus vero, tenetur totam eius eaque doloribus sequi esse rerum libero eum aperiam earum recusandae quaerat assumenda soluta voluptatem nulla! Quo maxime odio iusto dolorum hic expedita error delectus, veniam, unde numquam dolore tenetur reprehenderit! Totam laborum voluptate at natus consequuntur voluptas quos doloremque, inventore, magni ipsa delectus illum velit neque ea ab, consectetur nihil ipsum ducimus molestias assumenda? Amet accusamus esse, culpa saepe enim maiores eum consectetur, aliquid neque minima eius perferendis! Similique dolorem distinctio eum qui officiis beatae sint.'
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_post);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);        
    }
}
