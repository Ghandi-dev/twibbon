<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="twibbon, tools, css, html5, css framework"/>
    <meta name="description" content="Twibbon Maker"/>
    <meta property="og:image" content="./og.png">
    <title>Idcard Generator</title>

    
    <link rel="stylesheet" type="text/css" href="css/build.css" />
    
    <link rel="stylesheet" type="text/css" href="css/custom.css" />
    <link rel="icon" href="favicon.ico" type="image/x-icon" />
    <script src="js/idcard.js"></script>
<style>
  body { margin: 0; }
</style>
      </head>

  <body>
  
<div class="l-site">
  <header id="navigation" class="p-navigation">
  <div class="p-navigation__row">
    <div class="p-navigation__banner">
      <div class="p-navigation__logo">
        <a class="p-navigation__item" href="#">
          <img class="p-navigation__image" src="banner.svg" alt="Logo" width="95">
        </a>
      </div>
      <a href="#navigation" class="p-navigation__toggle--open" title="menu"><i class="p-icon--menu"></i></a>
      <a href="#navigation-closed" class="p-navigation__toggle--close" title="close menu"><i class="p-icon--close"></i></a>
    </div>

    <nav class="p-navigation__nav" aria-label="Example main navigation">
      <ul class="p-navigation__items">
        <li class="p-navigation__item is-selected">
          <a class="p-navigation__link" href=".">Home</a>
        </li>
        <li class="p-navigation__item">
          <a class="p-navigation__link" href="about.html">About</a>
        </li>
        <li class="p-navigation__item">
          <a class="p-navigation__link" href="https://vr46.pages.dev/">Blog</a>
        </li>
        <li class="p-navigation__item">
          <a class="p-navigation__link" href="#" class="p-link--skip">Contact</a>
        </li>
      </ul>
    </nav>
  </div>
</header>

  
  <div class="u-fixed-width">
  <h1 id="Idcard">Idcard Generator</h1><hr>

  <form action="view.php" method="POST" enctype="multipart/form-data">
  <label for="Nama Bangla Anda">Nama Bangla Anda</label>
  <input type="text" id="fname" name="fname" placeholder="Nama Bangla Anda" required>
  <label for="Nama Bahasa Inggris Anda">Nama Bahasa Inggris Anda</label>
  <input type="text" id="ename" name="ename" placeholder="Nama Bahasa Inggris Anda" required>
  <label for="Nama Ayahmu">Nama Ayahmu (Bangla)</label>
  <input type="text" id="faname" name="faname" placeholder="Nama Ayahmu (Bangla)" required>
  <label for="Nama Ibumu">Nama Ibumu (Bangla)</label>
  <input type="text" id="mname" name="mname" placeholder="Nama Ibumu (Bangla)" required>
  <label for="Tanggal Lahir Anda">Tanggal Lahir Anda</label>
  <input type="date" id="dname" name="dname" placeholder="Tanggal Lahir Anda" required>
  <label for="Nomor ID Anda">Nomor ID Anda</label>
  <input type="text" id="nid" name="nid" placeholder="Nomor ID Anda" required>
  <label for="Tanda Tangan Anda">Tanda Tangan Anda</label>
  <input type="text" id="si" name="si" placeholder="Tanda Tangan Anda" required>
  <label for="InputFile">Photo</label>
  <input type="file" id="file" name="file">
  <button type="submit" name="submit">Submit</button>
</form>

  <h2>Quotes Of The Day</h2><hr>
  <blockquote class="p-pull-quote--small">
  <script language="JavaScript1.1" src="js/quotes.js">
  </script>
  </blockquote>

  <h2>Support:</h2><hr>
   <ul class="p-inline-list">
  <li class="p-inline-list__item"><a href="https://www.buymeacoffee.com/bungferry"> <img align="left" src="https://cdn.buymeacoffee.com/buttons/v2/default-yellow.png" height="23" width="100" style="border-radius:2px" alt="bungferry" /></a></li>
  <li class="p-inline-list__item"><div class="fb-like" data-href="https://www.facebook.com/bungferry.wa" data-width="100" data-layout="button_count" data-action="like" data-size="small" data-share="true"></div>
  </li>
  <li class="p-inline-list__item"></li>
   </ul>
   
  </div>
  <footer class="l-footer--sticky p-strip--light">
    <nav class="row" aria-label="Footer navigation">
      <div class="has-cookie">
        <p>© 2020 <a href="https://www.facebook.com/bungferry.wa" class="p-link--soft">Ferry Ayunda</a>.</p>
        <ul class="p-inline-list--middot">
          <li class="p-inline-list__item">
            <a href="#"><small>Legal information</small></a>
          </li>
          <li class="p-inline-list__item">
            <a href="#"><small>Report a bug on this site</small></a>
          </li>
        </ul>
        <span class="u-off-screen"><a href="#">Go to the top of the page</a></span>
      </div>
    </nav>
  </footer>
</div>

  </body>
</html>
