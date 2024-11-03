<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['nama' => 'Revalian Ananda', 'title' => 'About']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog', 'posts' => [
        [
            'id' => '1',
            'slug' => 'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'author' => ' Revalian Ananda',
            'body' => ' Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, porro. Praesentium quasi obcaecati deserunt reiciendis vel enim repellendus sunt minima? Culpa non obcaecati a quasi deleniti amet asperiores earum nulla!'
        ],

        [
            'id' => '2',
            'slug' => 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'author' => ' Revalian Ananda',
            'body' => ' Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat, odit in quas magnam ratione voluptates, voluptatum praesentium mollitia sequi culpa atque esse laudantium officiis reprehenderit illo facere optio architecto possimus.'
        ]
    ]]);
});

Route::get('/posts/{slug}', function ($slug) {
    $posts = [
        [
            'id' => '1',
            'slug' => 'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'author' => ' Revalian Ananda',
            'body' => ' Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, porro. Praesentium quasi obcaecati deserunt reiciendis vel enim repellendus sunt minima? Culpa non obcaecati a quasi deleniti amet asperiores earum nulla!'
        ],

        [
            'id' => '2',
            'slug' => 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'author' => ' Revalian Ananda',
            'body' => ' Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat, odit in quas magnam ratione voluptates, voluptatum praesentium mollitia sequi culpa atque esse laudantium officiis reprehenderit illo facere optio architecto possimus.'
        ]
    ];


    $post = Arr::first($posts, function ($post) use ($slug) {
        return $post['slug'] == $slug;
    });

    return view('post', ['title' => 'Single Post', 'post' => $post ]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});
