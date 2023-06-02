<?php

return [
    'production' => false,

    'baseUrl' => 'http://mojavehq.test',

    'title' => 'Mojave HQ',

    'description' => 'A digital public-benefit agency.',

    'collections' => [
        'projects' => [
            'author' => 'Steven Roland', // Default author, if not provided in a post
            'sort' => '-date',
            'path' => 'projects/{filename}',
        ],

        'categories' => [
            'path' => '/categories/{filename}',
            'posts' => function ($page, $allPosts) {
                return $allPosts->filter(function ($post) use ($page) {
                    return $post->categories ? in_array($page->getFilename(), $post->categories, true) : false;
                });
            },
        ],
    ],
];
