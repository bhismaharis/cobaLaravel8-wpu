<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'title' => 'About',
        'name' => 'Bhisma Haris Alfitrah',
        'email' => 'bhismaharis11@gmail.com',
        'image' => 'Bhisma.jpg'
    ]);
});



Route::get('/blog', function () {
    $blog_posts = [
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

    return view('posts', [
        'title' => 'Posts',
        'posts' => $blog_posts
    ]);
});



// halaman single post
Route::get('posts/{slug}', function($slug) {
    $blog_posts = [
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

    $new_post = [];
    foreach ($blog_posts as $post) {
        if ($post['slug'] === $slug) {
            $new_post = $post;
        };
    };

    return view('post', [
        'title' => 'Single Post',
        'post' => $new_post
    ]);
});