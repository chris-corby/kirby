<?php

//  Templates
$page_template = $page->intendedTemplate();
$is_home = $page->isHomepage();

//  SEO
$meta_title = $is_home ? $site->title() : $site->title() . ' | ' . $page->title();

$meta_description = $page->meta_description()->isNotEmpty() ? $page->meta_description() : $site->meta_description()->or('');

$meta_image = $page->meta_image()->isNotEmpty() ? $page->meta_image() : $site->meta_image();

$has_meta_image = $meta_image->isNotEmpty();
$meta_image_file = $meta_image->toFile();

?><!DOCTYPE html>
<html lang="en" class="no-js">
  <head>

    <?php
    //  Switch 'no-js' with 'js' on <html> if scripts are allowed
    //  http://www.paulirish.com/2009/avoiding-the-fouc-v3/
    ?>
    <script>(function(H){H.className=H.className.replace(/\bno-js\b/,'js')})(document.documentElement)</script>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <?php
    //  Title
    ?>
    <title><?= $meta_title; ?></title>

    <?php
    //  Description
    ?>
    <meta name="description" content="<?= $meta_description->escape('attr'); ?>">

    <?php
    //  Canonical
    ?>
    <link rel="canonical" href="<?= $page->url(); ?>">

    <?php
    //  Prefetch
    //  TODO
    ?>
    <!-- <link href="//www.wikipedia.org" rel="dns-prefetch"> -->

    <?php
    //  CSS
    //  Timestamp for better cache-busting
    ?>
    <?= css('assets/css/build/style.css?ver=' . filemtime('assets/css/build/style.css')); ?>

    <?php
    //  Sitemap
    ?>
    <link rel="sitemap" type="application/xml" title="Sitemap" href="<?= $site->url() ?>/sitemap.xml">

    <?php
    //  Favicons
    //  TODO
    ?>

    <?php
    //  Open Graph
    ?>
    <meta property="og:locale" content="en">
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?= $meta_title; ?>">
    <meta property="og:description" content="<?= $meta_description->escape('attr'); ?>" />
    <meta property="og:url" content="<?= $page->url(); ?>">
    <?php
    if ($has_meta_image):
    ?>
      <meta property="og:image" content="<?= $meta_image_file->url(); ?>">
      <meta property="og:image:height" content="<?= $meta_image_file->height(); ?>">
      <meta property="og:image:width" content="<?= $meta_image_file->width(); ?>">
      <meta property="og:image:type" content="<?= $meta_image_file->mime(); ?>">
    <?php
    endif;
    ?>
    <meta property="og:site_name" content="<?= $site->title()->text(); ?>">

    <?php
    //  Twitter
    ?>
    <meta name="twitter:card" content="summary">

  </head>
  <body
    data-page="<?= $page->uid(); ?>"
    data-template="<?= $page_template; ?>"
  >
