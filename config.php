<?php

return [
    'production' => false,

    'baseUrl' => 'http://mojavehq.test',

    'siteName' => 'Mojave HQ',

    'siteDescription' => 'A digital public-benefit agency.',

    'siteAuthor' => 'Steven Roland',

    'form_action' => 'https://fieldgoal.io/f/jMwfNf',
        
    'captcha_sitekey' => '6Lf8110mAAAAAHPWGz_j3SBiu8MH0xavIstdxjmf',

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
