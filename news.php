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
<?php
$a = $_GET['a'];//クエリストリングaの値を取得する
require"mains.php";
$mains = new mains();
$syamu = $mains->pchyoji();
$syamy1 = $mains->mainbun($a);
?>
   </div>
 </body>
</html>

