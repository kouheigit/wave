<!DOCTYPE html>
 <head>
  <meta charset="UTF-8">
  <link href="../css/datahyouji.css" rel="stylesheet">
 </head>
 <body>
<?php

class kanri
{
	private $a;

	public function datahyouji()
	{
		$mysqli = new mysqli("localhost","root","tfhrt318","wave");
		$mysqli->autocommit(true);
		$hyouji = $mysqli->query("select * from wave1  order by time desc");
		echo"<table>";
		echo"<tr>";
		echo"<th>投稿日時";
		echo"</th>";
		echo"<th>タイトル名";
		echo"</th>";
		echo"<th>削除ボタン";
		echo"</th>";
		echo"</tr>";
		
		while($data= mysqli_fetch_array($hyouji)){
			  echo"<tr>";
		          echo"<td>".$data[3];
                          echo"</td>";
			  echo"<td>".$data[1];
			  echo"</td>";
			  echo"<td>";
			  echo"<a href=sakujo1.php?a=$data[0]>";
                          echo"削除する";
			  echo"</a>";
			  echo"</td>";
			  echo"</tr>";
		      }
		echo"</table>";
	}


	public function sakujo($a)
	{
		$this->a =$a; 
		$mysqli = new mysqli("localhost","root","tfhrt318","wave");
                $mysqli->autocommit(true);
		$hyouji = $mysqli->query("delete from wave1 where id = '$a'");
		if($a!==null){
			echo"削除しました";
		}
	       	echo"<meta http-equiv= Refresh content= 1;URL=sakujo.php>";

	}
}
