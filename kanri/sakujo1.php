<html>
 <head>
  <meta charset="UTF-8">
 </head>
 <body>
<?php
require"kanri.php";
$a = $_GET['a'];
$kanri = new kanri();
$sakujos = $kanri->sakujo($a);
?>
 </body>
</html>
