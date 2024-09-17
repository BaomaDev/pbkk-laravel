<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog', 'posts' => [
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
        ]
    ]);
});

Route::get('/posts/{slug}', function ($slug) {
    $posts = [[
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
    ]];

    $post = Arr::first($posts, function($post) use ($slug){
        return $post['slug'] == $slug;
    });

    return view('post', ['title' => 'Post', 'post' => $post]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});