<!doctype html>
<html lang="ja">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&family=Noto+Serif+JP:wght@400;700&display=swap" rel="stylesheet">
    <title><?php bloginfo( 'name' ); ?></title>
    <?php wp_head(); ?>
  </head>
  <body>
    <header>
        <nav>
            <div class="nav__left">
              <h1><a href="<?php bloginfo( 'name' ); ?>"><img src="<?php echo get_template_directory_uri() ?>/img/logo.png" class="img-fluid" alt="ロゴ画像"></h1>
            </div>
          <div class="nav__right">
            <ul>
              <li class="pc"><a href="<?php bloginfo( 'name' ); ?>">ホーム</a></li>
              <li class="pc"><a href="#service">業務内容</a></li>
              <li class="pc"><a href="https://test-sakura.ne.jp/office/">事務所紹介</a></li>
              <li class="pc"><a href="https://test-sakura.ne.jp/contact/">お問い合わせ</a></li>
              <li><img src="<?php echo get_template_directory_uri() ?>/img/cta.png" class="img-fluid" alt="cta"></li>
            </ul>
          </div>
        </nav>
      <div class="hamburger">
            <span></span>
      </div>
      <div class="sp-menu">
        <ul>
          <li><h1>司法書士法人・行政書士法人<br>佐藤法律事務所</h1></li>
          <li><a href="#">ホーム</a></li>
          <li><a href="#service">業務内容</a></li>
          <li><a href="https://test-sakura.ne.jp/office/">事務所紹介</a></li>
          <li><a href="https://test-sakura.ne.jp/contact/">お問い合わせ</a></li>
        </ul>
      </div>
    </header>