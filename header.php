<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <meta name="title" content="Binary Axis - Turning Digital Complexity Into Measurable Business Value" />
  <meta name="description" content="Binary Axis delivers digital transformation through precision strategy and rapid execution. Drive measurable impact and predictable ROI for your business today." />
  <meta name="keywords" content="SaaS templates, HTML templates, Tailwind CSS templates, startup templates, web application templates, responsive design, authentication pages, pricing pages, modern UI, Binary Axis, business templates, landing page templates, React templates" />
  <meta name="author" content="Binary Axis" />
  <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
  <meta name="googlebot" content="index, follow" />
  <meta name="bingbot" content="index, follow" />

  <meta name="language" content="English" />
  <meta name="geo.region" content="US" />
  <meta name="geo.placename" content="United States" />

  <link rel="canonical" href="<?php echo esc_url(home_url('/')); ?>" />

  <meta name="rating" content="General" />
  <meta name="distribution" content="Global" />
  <meta name="revisit-after" content="7 days" />
  <meta name="expires" content="never" />

  <meta property="og:type" content="website" />
  <meta property="og:url" content="<?php echo esc_url(home_url('/')); ?>" />
  <meta property="og:title" content="Binary Axis - Turning Digital Complexity Into Measurable Business Value" />
  <meta property="og:description" content="Binary Axis delivers digital transformation through precision strategy and rapid execution." />
  <meta property="og:image" content="https://helium.marvinoka4.com/wp-content/uploads/2026/02/screenshot.png" />
  <meta property="og:image:width" content="1200" />
  <meta property="og:image:height" content="630" />
  <meta property="og:site_name" content="Binary Axis" />
  <meta property="og:locale" content="en_US" />

  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:site" content="@BinaryAxis" />
  <meta name="twitter:url" content="<?php echo esc_url(home_url('/')); ?>" />
  <meta name="twitter:title" content="Binary Axis - Turning Digital Complexity Into Measurable Business Value" />
  <meta name="twitter:description" content="Binary Axis - the ultimate collection of 35+ premium HTML templates for SaaS businesses and startups." />
  <meta name="twitter:image" content="https://helium.marvinoka4.com/wp-content/uploads/2026/02/screenshot.png" />

  <meta name="theme-color" content="#000000" />
  <meta name="mobile-web-app-capable" content="yes" />
  <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
  <meta name="apple-mobile-web-app-title" content="Binary Axis" />

  <?php $assets_uri = get_template_directory_uri(); ?>
  <link rel="icon" type="image/png" href="<?php echo $assets_uri; ?>/assets/images/favicon-96x96.png" sizes="96x96" />
  <link rel="icon" type="image/svg+xml" href="<?php echo $assets_uri; ?>/assets/images/favicon.svg" />
  <link rel="shortcut icon" href="<?php echo $assets_uri; ?>/assets/images/favicon.ico" />
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo $assets_uri; ?>/assets/images/apple-touch-icon.png" />
  <link rel="manifest" href="<?php echo $assets_uri; ?>/assets/images/site.webmanifest" />

  <link rel="profile" href="https://gmpg.org/xfn/11">

  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Inter+Tight:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet" />

  <?php wp_head(); ?>
</head>

<body <?php body_class('body bg-white dark:bg-black'); ?>>
  <?php wp_body_open(); ?>

  <?php
  get_template_part('template-parts/navigation/main-navigation');
  ?>