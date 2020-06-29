<!DOCTYPE html>
 <head>
   <meta charset="utf-8">
   <link href="css/toukou.css" rel="stylesheet">
 </head>
 <body>
  <form method="post" action="toukou1.php">
   <div class="box12">
    <h1>タイトル</h1>
    <input type="text"class="text1"name="name1"maxlength='290'style="height:40px;" size="53"required>
    <h1>記事内容</h1><p>記事内容の枠の端では必ず改行(Enter)を押して下さい</p>
    <textarea name="name2"class="textlines"required></textarea>
    <br>
    <br>
   <input type="submit" value="投稿する"class="btn-square">
  </div>
 </form>
<?php


// create table wave1(id int auto_increment, name1 varchar(300),name2 varchar(1000), time datetime, index(id));


/*
$_POSTでパスワードとIDを受け取って違えば
また値が違えば戻る仕組みを作るメソットを作る
.htacessでできれば.htacessでやる
 */

?>
 </body>
</html>

