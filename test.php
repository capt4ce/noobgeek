<!DOCTYPE html>
<html>
    <head>
        <!--Import Google Icon Font-->
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <style>
            #nav-bar{
                margin: 0px 20px 0px 20px;
            }
            
              body {
                display: flex;
                min-height: 100vh;
                flex-direction: column;
              }

              main {
                flex: 1 0 auto;
              }
      
        
        </style>
    </head>

    <body>
        <div class="card-panel grey lighten-5 z-depth-1">
<div class="carousel">
  <a class="carousel-item materialboxed" href="#one!"><img src="http://lorempixel.com/800/400/food/1"></a>
  <a class="carousel-item materialboxed" href="#two!"><img src="http://lorempixel.com/800/400/food/2"></a>
  <a class="carousel-item materialboxed" href="#three!"><img src="http://lorempixel.com/800/400/food/3"></a>
  <a class="carousel-item materialboxed" href="#four!"><img src="http://lorempixel.com/800/400/food/4"></a>
  </div>
  <div class="divider mt18"></div>
</div>
        

        
        <!--Import jQuery before materialize.js-->
        <script type="text/javascript" src="js/jquery-2.2.0.min.js"></script>
        <script type="text/javascript" src="js/materialize.min.js"></script>
        <script>
        $(document).ready(function() {
  $('.carousel').carousel();
});
        </script>
    </body>
</html>