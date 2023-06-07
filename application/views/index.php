<!DOCTYPE html>
<html lang="vi">

<head>
  <meta charset="UTF-8" />
  <?php if (isset($index) && $index == 1) { ?>
    <meta name="robots" content="index,follow" />
  <?php } else { ?>
    <meta name="robots" content="noindex,nofollow" />
  <?php } ?>
  <title><?= isset($meta_title) ? $meta_title : '' ?></title>
  <meta content="<?= isset($meta_des) ? $meta_des : '' ?>" name="description">
  <meta content="<?= isset($meta_title) ? $meta_title : '' ?>" name="msvalidate.01">
  <meta name="keywords" content="<?= isset($meta_key) ? $meta_key : 'sic88' ?>" />
  <link rel="canonical" href="<?= (isset($canonical)) ? $canonical : "" ?>" />
  <meta property="og:locale" content="vi_VN" />
  <meta proprety="og:type" content="website" />
  <meta property="og:url" content="<?= (isset($canonical)) ? $canonical : "" ?>" />
  <meta property="og:title" content="<?= isset($meta_title) ? $meta_title : '' ?>" />
  <meta property="og:site_name" content="Sic88" />
  <meta property="og:description" content="<?= isset($meta_des) ? $meta_des : '' ?>" />
  <meta property="og:image:secure_url" content="<?= base_url() ?><?= (isset($meta_img) ? $meta_img : 'images/logo.png') ?>" />
  <meta property="og:image" content="<?= base_url() ?><?= (isset($meta_img) ? $meta_img : 'images/logo.png') ?>" />
  <meta name="twitter:card" content="summary" />
  <meta name="twitter:description" content="<?= isset($meta_des) ? $meta_des : '' ?>" />
  <meta name="twitter:title" content="<?= isset($meta_title) ? $meta_title : '' ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
  <link rel="shortcut icon" href="<?= base_url() ?>images/logo/avata.png">
  <link data-n-head="ssr" rel="icon" type="image/x-icon" href="<?= base_url() ?>images/avata.png">
  <link rel="stylesheet" href="/assets/css/font.css">
  <link rel="stylesheet" href="/assets/css/reset.css">
  <link rel="stylesheet" href="/assets/css/header.css">
  <link rel="stylesheet" href="/assets/css/footer.css">

  <?php if (isset($list_css)) {
    foreach ($list_css as $css) { ?>
      <link rel="stylesheet" href="/assets/css/<?= $css ?>">
  <?php  }
  } ?>
  <script type="text/javascript" src="/assets/js/jquery.min.js"></script><!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-TLM6YYLXM8"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-TLM6YYLXM8');
  </script>
  <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Organization",
      "name": "Sic88",
      "alternateName": "Nhà Cái Sic88",
      "url": "https://sic88.org/",
      "logo": "https://sic88.org/images/Logo_sic88.png",
      "contactPoint": {
        "@type": "ContactPoint",
        "telephone": "",
        "contactType": "",
        "areaServed": "VN",
        "availableLanguage": ["en", "Vietnamese"]
      },
      "sameAs": [
        "https://www.facebook.com/sic88org",
        "https://twitter.com/sic88org",
        "https://www.instagram.com/sic88org/",
        "https://www.youtube.com/@sic88org/about",
        "https://www.linkedin.com/in/sic88org/",
        "https://www.pinterest.com/sic88org/",
        "https://sic88org.tumblr.com/",
        "https://github.com/sic88org",
        "https://sic88.org/"
      ]
    }
  </script>
</head>

<body>
  <?php
  $this->load->view("includes/header");


  if (isset($content)) {
    $this->load->view($content);
  }

  $this->load->view("includes/footer");
  ?>
  <?php
  if (isset($list_js)) {
    foreach ($list_js as $js) { ?>
      <script type="text/javascript" src="/assets/js/<?= $js ?>"></script>
  <?php  }
  } ?>
  <script type="text/javascript" src="/assets/js/header.js"></script>
</body>

</html>