<?php 

namespace App\Models;

use Illuminate\Support\Arr;

class Post{
    public static function all()
    {
        return [
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
    }

    public static function find($slug): array {
        // return Arr::first(static::all(), function ($post) use ($slug) {
        //     return $post['slug'] == $slug;
        // });

        $post = Arr::first(static::all(), fn ($post) => $post['slug'] == $slug );

        if(! $post){
            abort(404);
        }

        return $post;
    }
}
?>