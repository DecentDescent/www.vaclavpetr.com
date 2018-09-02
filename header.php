<?php
  header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
  header("Cache-Control: post-check=0, pre-check=0", false);
  header("Pragma: no-cache");
?>
<!DOCTYPE html>
<html lang="<?php bloginfo('language'); ?>">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1, maximum-scale=1">

    <title><?php bloginfo('name'); wp_title('|'); ?></title>

    <meta name="description" content="<?php bloginfo('description'); ?>">
    <link rel="author" href="Václav Petr" />

    <link rel="canonical" href="http://www.vaclavpetr.com/" />
    <meta property="og:url" content="http://www.vaclavpetr.com/">
    <meta property="og:image" content="<?php bloginfo('template_url');?>/dist/assets/img/og_image.jpg">
    <meta property="og:description" content="<?php bloginfo('description'); ?>">
    <meta property="og:title" content="<?php bloginfo('name');?>">
    <meta property="og:site_name" content="Bach for All">
    <meta itemprop="name" content="<?php bloginfo('name'); wp_title('|'); ?>">
    <meta itemprop="description" content="<?php bloginfo('description'); ?>">
    <meta itemprop="image" content="<?php bloginfo('template_url');?>/dist/assets/img/og_image.jpg">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:url" content="<?php bloginfo('template_url');?>/dist/assets/img/og_image.jpg">
    <meta name="twitter:title" content="Bach for All">
    <meta name="twitter:description" content="<?php bloginfo('description'); ?>">
    <meta name="twitter:image" content="<?php bloginfo('template_url');?>/dist/assets/img/og_image.jpg">

    <link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_url');?>/dist/assets/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('template_url');?>/dist/assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('template_url');?>/dist/assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?php bloginfo('template_url');?>/dist/assets/favicon/site.webmanifest">
    <link rel="mask-icon" href="<?php bloginfo('template_url');?>/dist/assets/favicon/safari-pinned-tab.svg" color="#aaaaaa">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">

<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700|Saira+Extra+Condensed:700|Playfair+Display:400i&amp;subset=latin-ext" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url');?>/dist/css/slick.css"/>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url');?>/dist/css/slick-theme.css"/>
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/dist/css/vaclavpetr_com.min.css" />
    <?php wp_head(); ?>
</head>

<body>
