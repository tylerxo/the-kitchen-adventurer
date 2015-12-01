<?php if (!is_pjax()) : ?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="p:domain_verify" content="108c868ff12f2d92c2764a393fb81701"/>
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico?v=12">

  <?php wp_head(); ?>

  <!-- Styles -->
  <link rel="stylesheet" type="text/css" href="//cloud.typography.com/7528232/709982/css/fonts.css" />
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/dist/css/styles.min.css">
</head>
<?php endif; ?>
<body <?php body_class(); ?> data-color="<?php print rand(1,7); ?>">

  <div id="fb-root"></div>
  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>

  <header class="page-head container">
    <a data-pjax class="logo colorize-bg" href="/" title="The Kitchen Adventurer"><img data-pin-nopin="true" src="<?php echo get_template_directory_uri(); ?>/img/logo.png" width="58" height="31" alt="The Kitchen Adventurer"></a>

    <nav class="navigation" role="navigation">
      <ul class="primary-nav nav delta">
        <li class="nav__item primary-nav__home"><a data-pjax href="/">Recipes</a></li>
        <li class="nav__item"><a data-pjax href="/about">About</a></li>
      </ul>

      <!-- TODO: About Blurb -->

      <ul class="social-nav nav">
        <li class="nav__item nav__item--facebook">
          <a class="ss-icon" href="https://www.facebook.com/TheKitchenAdventurer" target="_blank">Facebook</a>
        </li>
        <li class="nav__item nav__item--instagram">
          <a class="ss-icon" href="https://instagram.com/thekitchenadventurer/" target="_blank">Instagram</a>
        </li>
        <li class="nav__item nav__item--pinterest">
          <a class="ss-icon" href="https://pinterest.com/thekitchenadv/" target="_blank">Pinterest</a>
        </li>
      </ul>
    </nav>
  </header>

  <!-- <a class="cookie-swap" href="http://www.fbcookieswap.com" target="_blank"><img src="http://i.imgsafe.org/b1667bc.png" border="0" alt="The Great Food Blogger Cookie Swap 2015"></a> -->

  <main id="main" class="main <?php if (!is_pjax()) { print 'is-loading'; }  ?>" role="main">
    <span id="pjax-helper" data-bc='<?php body_class(); ?>' data-title="<?php print wp_title('|', true, 'right'); ?>" style="display: none;"></span>
