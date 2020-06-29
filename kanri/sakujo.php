<html>
 <head>
  <meta charset="UTF-8">
 </head>
 <body>
<h1>
  <a href="index.php">管理ページに戻る</a>
</h1>
 <br>
 <br> 
<?php
require"kanri.php";
$kanri = new kanri();
$datahyouji = $kanri->datahyouji();
?>
 </body>
</html>
