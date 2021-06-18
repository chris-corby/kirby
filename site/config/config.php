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

  //  Hooks
  'hooks' => [
    //  Assign files with the blueprint specific to their type
    //  See: https://forum.getkirby.com/t/is-it-possible-to-get-the-file-type-in-blueprint/17683/8
    'file.create:after' => function ($file) {
      $type = $file->type();

      if ($type == 'image') {
        $file->update(['template' => 'image']);
      } elseif ($type == 'audio') {
        $file->update(['template' => 'audio']);
      } elseif ($type == 'video') {
        $file->update(['template' => 'video']);
      }
    }
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
