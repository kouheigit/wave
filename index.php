<!DOCTYPE html>
  <head>
   <meta charset="UTF-8">
   <link href="css/tokutyo.css" rel="stylesheet"> 
   <link href="css/menubar.css" rel="stylesheet">
   <link href="css/mainbody.css" rel="stylesheet"> 
   <link href="https://fonts.googleapis.com/css?family=Noto+Serif+JP&display=swap" rel="stylesheet">

   <script src="https://code.jquery.com/jquery-1.12.4.min.js" type="text/javascript"></script>
<script type="text/javascript">
function slideSwitch() {
   var $active = $('#slideshow img.active');

   if ( $active.length == 0 ) $active = $('#slideshow img:last');

   var $next =  $active.next().length ? $active.next()
      : $('#slideshow img:first');

   $active.addClass('last-active');

   $next.css({opacity: 0.0})
      .addClass('active')
      .animate({opacity: 1.0}, 1000, function() {
           $active.removeClass('active last-active');
      });
}

$(function() {
   setInterval( "slideSwitch()", 3000 );
});
</script>

 </head>
  <header>
    <div id ="menubar"> 
      <ul>
        <li><a href="index.php">メインページ</a></li>
        <li><a href="service.php">サービス</a></li>
	<li><a href="news.php?a=-1">NEWS</a></li>
        <li><a href="map.php">アクセス</a></li>
     </ul>
    <img class="img1"src="img/wave1.JPG"height="450"width="850">
   <p id="slideshow">
     <img class="img1"src="img/wave2.JPG" height="450"width="850" alt="wave2">
     <img class="img1"src="img/wave3.JPG" height="450"width="850" alt="wave3">
      <img class="img1"src="img/tsuru.JPG" height="450"width="850" alt="logos">
     <img class="img1"src="img/logos.JPG" height="450"width="850" alt="logos">
    <img class="img1"src="img/wave1.JPG"height="450"width="850">

  </p>    
  </header>
 </div>
<body>
<script>
 $('#animation').css('visibility','hidden');
 $(window).scroll(function(){
 var windowHeight = $(window).height(),
     topWindow = $(window).scrollTop();
 $('#animation').each(function(){
  var targetPosition = $(this).offset().top;
  if(topWindow > targetPosition - windowHeight + 100){
   $(this).addClass("fadeInDown");
  }
 });
});
</script>

<script>
$(function() {
  var h1 = $('h1');
  
  var txt_array = h1.text().split('');
  
  $('h1').html('');
  
  $.each(txt_array, function(index, element) {
    var new_element = $("<span/>").text(element).css({ opacity: 0 });
    h1.append(new_element);
    new_element.delay(index * 5);
    new_element.animate({opacity: 1}, 3000);
  });
});
</script>


 <h1>とことんキレイにとことんしみ抜き、キレイにするならクリーニングWAVE</h1>

<div id="anime">
 <p id="animation">WAVEの４つの特徴</p>
</div>

<div id="tokutyo">
 <div class="waku">
   <img src="img/cloth15.png" class="zukei" width="200" height="200">
    <span class="kasen">Wクリーニング無料</span>
  <!--  <div class="kasenposition">
     <span class="kasen">シミ</span>
    </div>-->
   <p>油性と水溶性の汚れ臭いをしっかりと<br>
      落として臭いをしっかりと落として　　<br>
   スッキリさっぱりと仕上げます</p>
  </div>
</div>

<div id="tokutyo1">
 <div class="waku">
   <img src="img/sagyou3.png" class="zukei" width="200" height="200">
    <span class="kasen">とことんシミ抜き</span>
  <!--  <div class="kasenposition">
     <span class="kasen">シミ</span>
    </div>-->
   <p>他店でオチなかったシミご相談下さい<br>
   シミをつけてしまったらいじらずそのままお持ち下さい<br>
   　　　　</p>
  </div>
</div>

<div id="tokutyo2">
 <div class="waku">
   <img src="img/cloth8.JPG" class="zukei" width="200" height="200">
    <span class="kasen">毛玉取り無料</span>
  <!--  <div class="kasenposition">
     <span class="kasen">シミ</span>
    </div>-->
   <p>オーバー類、セーター、カーディガン、<br>
     マフラー等のニット類 コート、ダウン、<br>
     ジャンパー等の襟 袖口のニット部分<br>
     毛布のふちなどの毛玉無料でお取りします</p>
  </div>
</div>

<div id="tokutyo3">
 <div class="waku">
   <img src="img/bara.png" class="zukei" width="200" height="200">
    <span class="kasen">溶剤がにおわない</span>
  <!--  <div class="kasenposition">
     <span class="kasen">シミ</span>
    </div>-->
   <p>パーク系溶剤は一般的に使用される石油系<br>
   に比べ強力な洗浄力があります、ですので汚れ落ちが<br>
   違います。白いものはより白く色物は鮮やかに<br>
   また嫌な臭い残りがありません。</p>
   
  </div>
</div>
</body>
<footer>
 <p>(C)2020 Tadashi Okawa.</p>
</footer>
</html>
