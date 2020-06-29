<!DOCTYPE html>
  <head>
   <meta charset="UTF-8">
<link href="css/main.css" rel="stylesheet">
  </head>
   <body>
<?php
class mains
{
	private $name1;
	private $name2;
	private $time;
	private $a;

	public function setsql($name1,$name2,$time)//データインサート用メソット
	{
		$this->name1 = $name1;
		$this->name2 = $name2;
		$this->time = $time;
		$mysqli = new mysqli("localhost","root","tfhrt318","wave");
		$mysqli->autocommit(true);
		$insert = $mysqli->query("INSERT INTO wave1(name1,name2,time) VALUES('$this->name1','$this->name2','$this->time');");
	}




	public function pchyoji()//waveサイトのメニュー欄です
	{
	
	        
		$mysqli = new mysqli("localhost","root","tfhrt318","wave");
		$mysqli->autocommit(true);
         	$hyouji = $mysqli->query("select * from wave1  order by time desc limit 10;");
	//	$bubun = $mysqli->query("SELECT name1 FROM wave1;");
		/*
		   echo" <table border='1' style= border-collapse: collapse>";*/
	   echo"<div id=myid>";
	   echo"<div class=mybox>"; 
		  while ($data = mysqli_fetch_array($hyouji)){
                     
		        echo"<br>";
			echo"<a href=news.php?a=$data[0]>".$data[1];
			echo"</a>";
			echo"<br>";
			echo"🕘". $data[3];
			echo"<br>";
			/*
                        echo "<TD>" . $data[1];
			echo "</TD>";
			echo "<TD>" . $data[2];
			echo "</TD>";
			echo "<TD>" . $data[3];
			echo "</TD>";
			 */
			
		  }     echo"<br>"; 
	                echo"<a href=news1.php?b=-300>";
	                echo"過去のお知らせ一覧";
	                echo"</a>";
			echo "</TR>";
                        echo "</TABLE>";
              echo"</div>";
             echo"</div>";
		

	}
        //newsサイトの本文欄です
	public function mainbun($a)
	{
		$this->a = $a;
	        $mysqli = new mysqli("localhost","root","tfhrt318","wave");
		$mysqli->autocommit(true);
		   if($this->a == -1){
		     $kensaku = $mysqli->query("select * from wave1  order by time desc;");
                      echo"<div id=secondid>";
                      echo"<div class=secondbox1>";
                       while ($data = mysqli_fetch_array($kensaku)){
                          echo"<h1>".$data[1];
                          echo"</h1>";
                          echo"<p>";
                          echo"🕘". $data[3];
                          echo"</p>";
                          echo"<pre>".$data[2];
			  echo"</pre>";
			  break;
                       }
		      echo"</div>";
                  }else{ 
		 $kensaku = $mysqli->query("select * from wave1 where id='$this->a';");
	         echo"<div id=secondid>";
                 echo"<div class=secondbox1>";
		while ($data = mysqli_fetch_array($kensaku)){
			echo"<h1>".$data[1];
			echo"</h1>";
			echo"<p>";
			echo"🕘". $data[3];
			echo"</p>";
			echo"<pre>".$data[2];
			echo"</pre>";
		}
	    echo"</div>";
	}
    }
             //過去のやつを表示する
	public function mainkako($b)
	{       
		session_start();
		$this->b = $b;
		$c = $_SESSION['c'];
		$_SESSION['c'] = $c + $b;
		$atai = $_SESSION['c'];
		if(0 > $atai){
			$atai=0;
			$_SESSION['c']=0;
		}
		$mysqli = new mysqli("localhost","root","tfhrt318","wave");
		$mysqli->autocommit(true);
		$max = $mysqli->query("select count(*) from wave1;");
		$max1 = mysqli_fetch_array($max);
	        if($atai>=$max1[0]){
			$atai = $max1[0]-14;
			$_SESSION['c'] = $atai;
		}
		$hyouji = $mysqli->query("select * from wave1  order by time desc limit $atai,14;");
	        
                echo"<div id=secondid>";
                echo"<div class=secondbox1>";
		while ($data = mysqli_fetch_array($hyouji)){
		        echo"<h2>";
			//echo"投稿日時".$data[3];	
                        echo"　　　　 投稿日時 $data[3]<a href=news.php?a=$data[0]>　　　　".$data[1];
			echo"</a>";
			echo"</h2>";
                        echo"<br>";

                  }     
              echo"</div>";
             echo"</div>";
	       
	}
}
?>
</body>
</html>
