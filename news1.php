<html>
 <head>
  <meta charset="UTF-8">
  <link href="css/subbody.css" rel="stylesheet">
  <link href="css/menubar.css" rel="stylesheet">
 </head>
 <header>
   <div id ="menubar1">
      <ul>
        <li><a href="index.php">メインページ</a></li>
        <li><a href="service.php">サービス</a></li>
        <li><a href="news.php?a=-1">NEWS</a></li>
        <li><a href="map.php">アクセス</a></li>
     </ul>
   </div>
</header>
 <body id="index">
   <div id="wrap">
  <div class="buttonposition">
    <!--ｂの値を変更する -->
    <a href="news1.php?b=-14" class="button">前へ</a>　
　　<a href="news1.php?b=14" class="button">次へ</a>
  </div>　　
<?php
require"mains.php";
$b = $_GET['b'];
$mains = new mains();
$syamu = $mains->pchyoji();
$syamu1 = $mains->mainkako($b);
 ?>
   </div>
 </body>
 <footer>
 </footer>
</html>


