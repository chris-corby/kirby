<?php
//  ? On the live server you may need `base = dirname(__DIR__)` as suggested
//  ? by the guide.
//  ? See: https://getkirby.com/docs/guide/configuration#custom-folder-setup__public-folder-setup

include __DIR__ . '/../vendor/autoload.php';

$kirby = new Kirby([
  'roots' => [
    'index' => __DIR__,
    'base' => dirname(__DIR__) . '/public',
  ]
]);

echo $kirby->render();
