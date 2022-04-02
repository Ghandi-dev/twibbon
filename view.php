<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="twibbon, tools, css, html5, css framework"/>
    <meta name="description" content="Twibbon Maker"/>
    <meta property="og:image" content="./og.png">
    <title>About Twibbon Maker</title>

    
    <link rel="stylesheet" type="text/css" href="css/build.css" />
    
    <link rel="stylesheet" type="text/css" href="css/custom.css" />
    <link rel="icon" href="favicon.ico" type="image/x-icon" />
    
<style>
  body { margin: 0; }
</style>
    <script src="//cdnjs.cloudflare.com/ajax/libs/p5.js/0.7.1/p5.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/p5.js/0.7.1/addons/p5.dom.min.js"></script>
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
          <a class="p-navigation__link" href="#main" class="p-link--skip">Contact</a>
        </li>
      </ul>
    </nav>
  </div>
</header>

<?php

session_name("jwmf"); 
session_start(); 

$title = isset($_POST['title']) ? htmlentities($_POST['title']) : "INTERNET ID CARD";

$fname = $_POST['fname'] ;
$ename = $_POST['ename'] ;
$faname = $_POST['faname'];
$mname = $_POST['mname'];
$dname = $_POST['dname'];
$nid = $_POST['nid'];
$si=$_POST['si'];
$save = 'images/'.str_replace(" ","_",$ename).'.jpg';
$_SESSION['card']=$save; 
$bgpic = imagecreatefrompng("nid.png");
$textcolor = imagecolorallocate($bgpic,255,255,255);
$infcolor = imagecolorallocate($bgpic,0,0,0);
$stscolor = imagecolorallocate($bgpic,0x00,0x55,0x00);
$ttscolor = imagecolorallocate($bgpic,255,0,0);
$font=__DIR__ ."fonts/verdana.ttf";
$f2=__DIR__ ."fonts/sm.ttf";
$f3=__DIR__ ."fonts/sign.ttf";
$f4=__DIR__ ."fonts/avro.ttf";
//imagestring($bgpic,7,30,5,$title,$textcolor);
//echo($f4);

imagettftext($bgpic,20, 0,242,150,$infcolor,$f4,$fname);
imagettftext($bgpic,18, 0,242,185,$infcolor,$font,$ename);
imagettftext($bgpic,20, 0,242,215,$infcolor,$f4,$faname);
imagettftext($bgpic,20, 0,242,245,$infcolor,$f4,$mname);
imagettftext($bgpic,18, 0,291,278,$ttscolor,$font,$dname);
imagettftext($bgpic,18, 0,254,311,$ttscolor,$font,$nid);
imagettftext($bgpic,15, 0,35,300,$infcolor,$f3,$si);

$avl = $_FILES['file']['tmp_name'];
if(trim($avl!=""))
{
  $imgi = getimagesize($avl);
  if($imgi[0]>0)
  {
      if($imgi[2]==1)
      {
        $av = imagecreatefromgif($avl);
        imagecopyresized($bgpic, $av,39,152,0,0,100,120,$imgi[0], $imgi[1]);
      }else if($imgi[2]==2)
      {
        $av = imagecreatefromjpeg($avl);
        imagecopyresized($bgpic, $av,39,152,0,0,100,120,$imgi[0], $imgi[1]);
      }else if($imgi[2]==3)
      {
        $av = imagecreatefrompng($avl);
        imagecopyresized($bgpic, $av,39,152,0,0,100,120,$imgi[0], $imgi[1]);
      }

  }
}
imagepng($bgpic,$save);
imagedestroy($bgpic);
//header("Location: ".$save); 

?>
  
  <div class="u-fixed-width">
  <h1 id="Result">Success...</h1><hr>
  
  <figure>
  <figcaption>Hasilnya...</figcaption>
  <img class="p-image--bordered" src="<?php  echo($save);  ?>"/>" alt="idcard">
  </figure>

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
