<?php require_once(dirname($_SERVER['DOCUMENT_ROOT']).'/config/configPATH.php') ?>
<head>
  <!--== @include {Meta Tags} -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta name="description" content="<?php echo $meta_description; ?>">
  <meta name="author" content="Grand Wizard">
  <!--== @include {Cache Control} -->
  <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
  <meta http-equiv="Pragma" content="no-cache" />
  <meta http-equiv="Expires" content="0" />
  <!--== @include {Google Site Verification for admin.ir account} -->
  <meta name="google-site-verification" content="2QqNVnxuE_1NF6pVHjRLycvgZ_oMzPY2UmYHIgygHdw" />
  <!--== @include {Google Site Verification for coordinator.ir account} -->
  <meta name="google-site-verification" content="qFIxJUM_r1lZqpEuVOK70ivVzfw5CMvuV_srUoG-bDA" />
  <!--== @include {Title} -->
  <title><?php echo $page_title; ?></title>
  <!--== @include {Favicon} -->
  <link rel="shortcut icon" href="/assets/images/essentials/favicon.ico" type="image/x-icon">
  <!--== @include {Main Style} -->
  <link href="<?php echo ASSETS_URI . 'css/plugins.css' ?>" rel="stylesheet">
  <link href="<?php echo ASSETS_URI . 'css/vendor.css' ?>" rel="stylesheet">
  <link href="<?php echo ASSETS_URI . 'css/datatable.css' ?>" rel="stylesheet">
  <link href="<?php echo ASSETS_URI . 'map-resources/jqvmap.css' ?>" rel="stylesheet">
  <!--== @include {Main Style} -->
  <link href="<?php echo INFORMATION_URI . ASSETS_URI . 'css/style.css' ?>" rel="stylesheet">
  <!--== @include {Google Analytics} -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-175500191-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-175500191-1');
  </script>
</head>
