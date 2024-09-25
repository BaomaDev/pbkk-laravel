<?php

namespace App\Models;

use Illuminate\Support\Arr;

Class Post {
    public static function all() {
        return [
            [
                'id' => 1,
                'slug' => 'post-title-1',
                'title' => 'Post Title 1',
                'author' => 'Author 1',
                'body' => 'lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptate. Quisquam, voluptate.'
            ],
            [
                'id' => 2,
                'slug' => 'post-title-2',
                'title' => 'Post Title 2',
                'author' => 'Author 2',
                'body' => 'lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptate. Quisquam, voluptate.'
            ],
            [
                'id' => 3,
                'slug' => 'post-title-3',
                'title' => 'Post Title 3',
                'author' => 'Author 3',
                'body' => 'lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptate. Quisquam, voluptate.'
            ]
            ];
    }

    public static function find($slug) {
        // return Arr::first(static::all(), function($post) use ($slug){
        //     return $post['slug'] == $slug;
        // });
        $post = Arr::first(static::all(), fn($post) => $post['slug'] == $slug);

        if(!$post) {
            abort(404);
        }

        return $post;
    }
}