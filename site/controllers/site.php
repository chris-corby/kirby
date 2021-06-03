<?php

return function ($kirby, $site, $page) {
  return [
    'title' => $page->title(),
  ];
};
