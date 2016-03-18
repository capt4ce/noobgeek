<!DOCTYPE html>
<html>
    <head>
        <!--Import Google Icon Font
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">-->
        <link href="css/icon-family_materilize_googleapis" rel="stylesheet">
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
            
            nav{
                opacity: 0.9;
                filter: alpha(opacity=40); /* For IE8 and earlier */
            }
        </style>
    </head>

    <body>
        <div class="navbar-fixed">
        <nav class="teal">
            <div class="nav-wrapper" id="nav-bar">
                <a href="#" class="brand-logo left">NoobGeek</a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li class="active"><a href="#">HOME</a></li>
                    <li><a href="#">WHATS NEW</a></li>
                    <li><a href="#">BLOG</a></li>
                    <li><a href="#">SERVICES</a></li>
                    <li><a href="#">ABOUT ME</a></li>
                </ul>
            </div>
        </nav>
        </div>
                  
        <div class="slider">
            <ul class="slides">
              <li>
                <img src="images/1.jpg"> <!-- random image -->
                <div class="caption center-align">
                  <h3>This is our big Tagline!</h3>
                  <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                </div>
              </li>
              <li>
                <img src="images/2.jpg"> <!-- random image -->
                <div class="caption left-align">
                  <h3>Left Aligned Caption</h3>
                  <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                </div>
              </li>
              <li>
                <img src="images/3.jpg"> <!-- random image -->
                <div class="caption right-align">
                  <h3>Right Aligned Caption</h3>
                  <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                </div>
              </li>
              <li>
                <img src="images/4.jpg"> <!-- random image -->
                <div class="caption center-align">
                  <h3>This is our big Tagline!</h3>
                  <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                </div>
              </li>
                <li>
                    <img src="images/5.jpg"> <!-- random image -->
                    <div class="caption left-align">
                        <h3>Left Aligned Caption</h3>
                        <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                    </div>
              </li>
            </ul>
        </div>
        
        
        <br><div class="container" id="content"><br>
            <div class="row">
                <div class="col s12">
                    <h3 class="center-align">HOT ARTICLES</h3><br>
                    <div class="col s4 m4">
                      <a  href="#"><div class="card hoverable" href="#">
                        <div class="card-image">
                          <img src="images/1.jpg">
                          <span class="card-title">Card Title</span>
                        </div>
                        <div class="card-content">
                          <p class="truncate">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                        </div>
                       </div></a>
                    </div>
                    
                    <div class="col s4 m4">
                      <a  href="#"><div class="card hoverable" href="#">
                        <div class="card-image">
                          <img src="images/1.jpg">
                          <span class="card-title">Card Title</span>
                        </div>
                        <div class="card-content">
                          <p class="truncate">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                        </div>
                      </div></a>
                    </div>
                    
                    <div class="col s4 m4">
                      <a  href="#"><div class="card hoverable">
                        <div class="card-image">
                          <img src="images/1.jpg">
                          <span class="card-title">Card Title</span>
                        </div>
                        <div class="card-content">
                          <p class="truncate">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                        </div>
                      </div></a>
                    </div>
                </div>
            </div>
        
            <br><div class="divider"></div><br>
            <h3 class="center-align">LASTEST VIDEOS</h3><br>
            <div class="video-container">
                <iframe width="853" height="480" src="#" frameborder="0" allowfullscreen></iframe>
            </div>
            
            <br><div class="divider"></div><br>
            <h3 class="center-align">MY SERVICES AND PORTOFOLIO</h3><br>
            <div class="row center-align">
                <div class="col s4">
                    <h5>Service 1</h5>
                    <p>adfakdhkjhadfkjkabdkfbkjb</p>
                </div>
                <div class="col s4">
                    <h5>Service 2</h5>
                    <p>adfakdhkjhadfkjkabdkfbkjb</p>
                </div>
                <div class="col s4">
                    <h5>Service 3</h5>
                    <p>adfakdhkjhadfkjkabdkfbkjb</p>
                </div>  
            </div>
        
            <div class="carousel">
                <a class="carousel-item" href="#one!"><img src="images/1.jpg"></a>
                <a class="carousel-item" href="#one!"><img src="images/2.jpg"></a>
                <a class="carousel-item" href="#one!"><img src="images/3.jpg"></a>
                <a class="carousel-item" href="#one!"><img src="images/4.jpg"></a>
                <a class="carousel-item" href="#one!"><img src="images/5.jpg"></a>
            </div>
            
        
        </div>     
        
        <footer class="page-footer grey darken-3">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Footer Content</h5>
                <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2014 Copyright Text
            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
          </div>
        </footer>

        <!--Import jQuery before materialize.js-->
        <script type="text/javascript" src="js/jquery-2.2.0.min.js"></script>
        <script type="text/javascript" src="js/materialize.min.js"></script>
        <script>
            $('.slider').slider();
            $(".button-collapse").sideNav();
            $('.carousel').carousel();
        </script>
        
    </body>
</html>