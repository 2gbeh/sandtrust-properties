
<!DOCTYPE html>
<html lang="en-US">
<head>
  <!-- META tags -->
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="<?php echo $ctx_summary; ?>" />
  <meta name="keywords" content="<?php echo $ctx_keywords; ?>" />
  <meta name="owner" content="HWP Labs" />
  <meta name="designer" content="Tugbeh Emmanuel" />
  <meta name="copyright" content="2017" />  
  <meta name="theme-color" content="<?php echo $ctx_theme; ?>" />
  <meta name="msapplication-TileColor" content="<?php echo $ctx_theme; ?>" />
  <meta name="msapplication-TileImage" content="./img/msapplication-tile-image.png" />
  <meta name="apple-mobile-web-app-capable" content="yes" />
  <meta name="apple-mobile-web-app-status-bar-style" content="<?php echo $ctx_theme; ?>" />
  <meta name="apple-mobile-web-app-title" content="<?php echo $ctx_alias; ?>" />  

  <!-- SEO Tags -->
  <link rel="manifest" href="./manifest.json" crossorigin="use-credentials" />  
  <link rel="canonical" href="<?php echo $seo['canonical']; ?>" />
  <meta property="og:site_name" content="<?php echo $seo['site_name']; ?>" />
  <meta property="og:title" content="<?php echo $seo['title']; ?>" />
  <meta property="og:description" content="<?php echo $seo['description']; ?>" />
  <meta property="og:url" content="<?php echo $seo['url']; ?>" />    
  <meta property="og:image" content="<?php echo $seo['image']; ?>" />
  <meta property="og:image:alt" content="Social Preview" />
  <meta property="og:image:width" content="<?php echo $seo['width']; ?>" />
  <meta property="og:image:height" content="<?php echo $seo['height']; ?>" />
  <meta property="og:type" content="website" />
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:title" content="<?php echo $seo['title']; ?>" />
  <meta name="twitter:description" content="<?php echo $seo['description']; ?>" />
  <meta name="twitter:url" content="<?php echo $seo['url']; ?>" />  
  <meta name="twitter:image" content="<?php echo $seo['image']; ?>" />
  <meta name="twitter:image:src" content="<?php echo $seo['image']; ?>" />
  <meta name="twitter:image:alt" content="Social Preview" />
  <meta name="twitter:image:width" content="<?php echo $seo['width']; ?>" />
  <meta name="twitter:image:height" content="<?php echo $seo['height']; ?>" />

  <!-- CSS Library -->
  <link type="text/css" href="./css/shared.css" rel="stylesheet" />
  <link type="text/css" href="./css/layout.css" rel="stylesheet" />
  <link type="text/css" href="./css/login.css" rel="stylesheet" />
  <link type="text/css" href="./css/admin.css" rel="stylesheet" />
  <link type="text/css" href="./css/forms.css" rel="stylesheet" />
  <link type="text/css" href="./css/tables.css" rel="stylesheet" />
  <link type="text/css" href="./css/override.css" rel="stylesheet" />
  
  <!-- JS Library -->
  <script type="text/javascript" src="./lib/jrad-min/js/master.js"></script>
  <script type="text/javascript" src="./js/event-handler.js"></script>  

  <!--[if IE]><link rel="shortcut icon" href="./img/favicon.ico" /><![endif]-->
  <link rel="icon" href="./img/favicon.ico" type="image/x-icon" />
  <link rel="apple-touch-icon" href="./img/apple-touch-icon.png" type="image/png" />  
  <title><?php echo $ctx_title; ?></title>
</head>