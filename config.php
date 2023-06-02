<?php

return [
    'production' => false,

    'baseUrl' => 'http://mojavehq.test',

    'siteName' => 'Mojave HQ',

    'siteDescription' => 'A digital public-benefit agency.',

    'siteAuthor' => 'Steven Roland',

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
