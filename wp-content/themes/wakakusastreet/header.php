<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php if(wp_title()) echo wp_title(); ?> 若草通商店街</title>
    <link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.18.1/build/cssreset/cssreset-min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>">
    <link rel="stylesheet" href="https://cdn.rawgit.com/twbs/bootstrap/v4-dev/dist/css/bootstrap.css">
    <script src="https://code.jquery.com/jquery-2.2.3.js"></script>
    <script src="https://cdn.rawgit.com/twbs/bootstrap/v4-dev/dist/js/bootstrap.js"></script>
  </head>
  <body>
    <header>
      <div id="header-content">
        <div id="header-title">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
            <h2>若草通商店街振興組合</h2>
          </a>
        </div>
        <div id="header-menu">
          <ul>
            <li><a href="<?php echo esc_url( home_url( '/shoplist' ) ); ?>">お店一覧</a></li>
            <li><a href="<?php echo esc_url( home_url( '/empty-shoplist' ) ); ?>">空き店舗一覧</a></li>
          </ul>
        </div>
      </div>
    </header>
<?php wp_head(); ?>
