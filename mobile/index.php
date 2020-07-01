<html>
 <head>
   <meta charset="utf-8">
   <link href="css/mobilemain.css" rel="stylesheet">
  <!--drawer-->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.1.0/css/drawer.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/iScroll/5.1.3/iscroll.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.1.0/js/drawer.min.js"></script>
 <!--drawer--> 
 </head>
  <body class="drawer drawer--right">
  <header>
    <h1>弦巻・千歳船橋でクリーニング店を選ぶなら</h1>
    <h2>クリーニングWAVE</h2>
  </header>
   <!--drawer-->
   <script>
   $(document).ready(function() {
      $('.drawer').drawer();
      $('.drawer-menu li').on('click', function() {
      $('.drawer').drawer('close');
       });
       });
</script>
   <button type="button" class="drawer-toggle drawer-hamburger">
     <span class="sr-only">toggle navigation</span>
     <span class="drawer-hamburger-icon"></span>
   </button>
   <nav class="drawer-nav" role="navigation">
    <ul class="drawer-menu">
      <li><a class="drawer-brand" href="#">Brand</a></li>
      <li><a class="drawer-menu-item" href="#">Nav1</a></li>
      <li><a class="drawer-menu-item" href="#">Nav2</a></li>
    </ul>
  </nav>
   <!--drawer-->
 </body>
</html>

