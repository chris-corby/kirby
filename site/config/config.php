<?php

return [
  //  Debug
  'debug' => false,

  //  Homepage
  'home' => 'home',

  //  Routes
  'routes' => [
    //  Redirect /sitemap to the proper XML route
    //  Requires Sitemap plugin
    [
      'pattern' => 'sitemap',
      'action'  => function() {
        return go('sitemap.xml', 301);
      }
    ],
  ],

  //  Cache
  //  See: https://getkirby.com/docs/guide/cache
  'cache' => [
    'pages' => [
      'active' => true,

      //  Pages to ignore
      // 'ignore' => ['home'],
    ]
  ],

  //
  //  Thumbs
  //  Store srcsets

  'thumbs' => [
    //  E.g. <img srcset="<?= $image->srcset('Default'); />
    'srcsets' => [
      'Default' => [
        '320w' => ['width' => 320, 'quality' => 80],
        '640w' => ['width' => 640, 'quality' => 80],
        '1280w' => ['width' => 1280, 'quality' => 80],
      ],
    ]
  ],
];
