<?php

require"../mains.php";

$name1 = $_POST['name1'];
$name2 = $_POST['name2'];
$time =  date("Y/m/d H:i:s");
$mains = new mains();
$mains->setsql($name1,$name2,$time);
echo"投稿が完了しました";
echo"<meta http-equiv= Refresh content= 2;URL=index.php>";
?>
