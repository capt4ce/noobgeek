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
            body {
              display: flex;
              min-height: 100vh;
              flex-direction: column; }

            main {
              flex: 1 0 auto; }

            header {
              height: 400px;
              width: 100%;
              position: fixed;
              overflow: hidden;
              z-index: 3;
              background-image: url(../images/img-header.jpg);
              background-size: contain;
              background-position: top center;
              background-attachment: fixed; }

            nav {
              z-index: 101; !important
            }

            footer {
              position: fixed !important;
              bottom: 0px;
              width: 100%; }

            .content {
              background-color: white;
              position: relative;
              z-index: 100;
              margin-bottom: 400px;
              margin-top: 400px; }

            .svg-social {
              fill: #ffffff; }

            .window-tint {
              position: absolute;
              background-color: black;
              opacity: 0.8;
              top: 85%;
              left: 0px;
              width: 100%;
              height: 100%;
              transition: all 0.3s ease-in-out; }

            .caption {
              top: 0% !important;
              left: 5% !important;
              width: 80% !important; }

            .slider:hover .window-tint {
              top: 0%; }

            .periscope {
              height: 400px;
              width: 400px;
              position: relative;
              left: 30%;
              border-radius: 50%;
              background-image: url(../images/me.jpg);
              background-position: top center;
              background-repeat: no-repeat;
              background-attachment: fixed; }

            #nav-bar {
              margin: 0px 20px 0px 20px; }

        </style>
    </head>

    <body>

<nav class="teal">
    <div class="nav-wrapper" id="nav-bar">
        <a href="#" class="brand-logo center">{NoobGeek}</a>
        <ul id="nav-mobile" class="left hide-on-med-and-down">
            <li><a href="index.php">HOME</a></li>
            <li><a href="articles.php">ARTICLES</a></li>
            <li><a href="services.php">SERVICES</a></li>
            <li><a href="about.php">ABOUT</a></li>
        </ul>
        <ul id="slide-out" class="side-nav">
          <li><a href="index.php">HOME</a></li>
          <li><a href="articles.php">ARTICLES</a></li>
          <li><a href="services.php">SERVICES</a></li>
          <li><a href="about.php">ABOUT</a></li>
          <li id="linkedin"><a href="#">
              <svg width="24" height="24" viewBox="0 0 24 24 "><path class="svg-social" d="M21,21H17V14.25C17,13.19 15.81,12.31 14.75,12.31C13.69,12.31 13,13.19 13,14.25V21H9V9H13V11C13.66,9.93 15.36,9.24 16.5,9.24C19,9.24 21,11.28 21,13.75V21M7,21H3V9H7V21M5,3C6.1,3 7,3.9 7,5C7,6.1 6.1,7 5,7C3.9,7 3,6.1 3,5C3,3.9 3.9,3 5,3Z" /></svg></a>
          </li>
          <li id="facebook"><a href="#">
              <svg width="24" height="24" viewBox="0 0 24 24 "><path class="svg-social" d="M17,2V2H17V6H15C14.31,6 14,6.81 14,7.5V10H14L17,10V14H14V22H10V14H7V10H10V6A4,4 0 0,1 14,2H17Z"/></svg></a>
          </li>
          <li id="twitter"><a href="#">
              <svg width="24" height="24" viewBox="0 0 24 24 "><path class="svg-social" d="M22.46,6C21.69,6.35 20.86,6.58 20,6.69C20.88,6.16 21.56,5.32 21.88,4.31C21.05,4.81 20.13,5.16 19.16,5.36C18.37,4.5 17.26,4 16,4C13.65,4 11.73,5.92 11.73,8.29C11.73,8.63 11.77,8.96 11.84,9.27C8.28,9.09 5.11,7.38 3,4.79C2.63,5.42 2.42,6.16 2.42,6.94C2.42,8.43 3.17,9.75 4.33,10.5C3.62,10.5 2.96,10.3 2.38,10C2.38,10 2.38,10 2.38,10.03C2.38,12.11 3.86,13.85 5.82,14.24C5.46,14.34 5.08,14.39 4.69,14.39C4.42,14.39 4.15,14.36 3.89,14.31C4.43,16 6,17.26 7.89,17.29C6.43,18.45 4.58,19.13 2.56,19.13C2.22,19.13 1.88,19.11 1.54,19.07C3.44,20.29 5.7,21 8.12,21C16,21 20.33,14.46 20.33,8.79C20.33,8.6 20.33,8.42 20.32,8.23C21.16,7.63 21.88,6.87 22.46,6Z" /></svg></a>
          </li>
          <li id="youtube"><a href="#">
              <svg width="24" height="24" viewBox="0 0 24 24 "><path class="svg-social" d="M10,16.5V7.5L16,12M20,4.4C19.4,4.2 15.7,4 12,4C8.3,4 4.6,4.19 4,4.38C2.44,4.9 2,8.4 2,12C2,15.59 2.44,19.1 4,19.61C4.6,19.81 8.3,20 12,20C15.7,20 19.4,19.81 20,19.61C21.56,19.1 22,15.59 22,12C22,8.4 21.56,4.91 20,4.4Z" /></svg></a>
          </li>
        </ul>

        <ul id="social-media" class="right  hide-on-med-and-down">
            <li id="linkedin"><a href="#">
                <svg width="24" height="24" viewBox="0 0 24 24 "><path class="svg-social" d="M21,21H17V14.25C17,13.19 15.81,12.31 14.75,12.31C13.69,12.31 13,13.19 13,14.25V21H9V9H13V11C13.66,9.93 15.36,9.24 16.5,9.24C19,9.24 21,11.28 21,13.75V21M7,21H3V9H7V21M5,3C6.1,3 7,3.9 7,5C7,6.1 6.1,7 5,7C3.9,7 3,6.1 3,5C3,3.9 3.9,3 5,3Z" /></svg></a>
            </li>
            <li id="facebook"><a href="#">
                <svg width="24" height="24" viewBox="0 0 24 24 "><path class="svg-social" d="M17,2V2H17V6H15C14.31,6 14,6.81 14,7.5V10H14L17,10V14H14V22H10V14H7V10H10V6A4,4 0 0,1 14,2H17Z"/></svg></a>
            </li>
            <li id="twitter"><a href="#">
                <svg width="24" height="24" viewBox="0 0 24 24 "><path class="svg-social" d="M22.46,6C21.69,6.35 20.86,6.58 20,6.69C20.88,6.16 21.56,5.32 21.88,4.31C21.05,4.81 20.13,5.16 19.16,5.36C18.37,4.5 17.26,4 16,4C13.65,4 11.73,5.92 11.73,8.29C11.73,8.63 11.77,8.96 11.84,9.27C8.28,9.09 5.11,7.38 3,4.79C2.63,5.42 2.42,6.16 2.42,6.94C2.42,8.43 3.17,9.75 4.33,10.5C3.62,10.5 2.96,10.3 2.38,10C2.38,10 2.38,10 2.38,10.03C2.38,12.11 3.86,13.85 5.82,14.24C5.46,14.34 5.08,14.39 4.69,14.39C4.42,14.39 4.15,14.36 3.89,14.31C4.43,16 6,17.26 7.89,17.29C6.43,18.45 4.58,19.13 2.56,19.13C2.22,19.13 1.88,19.11 1.54,19.07C3.44,20.29 5.7,21 8.12,21C16,21 20.33,14.46 20.33,8.79C20.33,8.6 20.33,8.42 20.32,8.23C21.16,7.63 21.88,6.87 22.46,6Z" /></svg></a>
            </li>
            <li id="youtube"><a href="#">
                <svg width="24" height="24" viewBox="0 0 24 24 "><path class="svg-social" d="M10,16.5V7.5L16,12M20,4.4C19.4,4.2 15.7,4 12,4C8.3,4 4.6,4.19 4,4.38C2.44,4.9 2,8.4 2,12C2,15.59 2.44,19.1 4,19.61C4.6,19.81 8.3,20 12,20C15.7,20 19.4,19.81 20,19.61C21.56,19.1 22,15.59 22,12C22,8.4 21.56,4.91 20,4.4Z" /></svg></a>
            </li>
        </ul>
        <a href="#" data-activates="slide-out" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
    </div>
</nav>
<section class="content">
  <div class="container"><br/>
    <!--hot-articles-->
    <div class="row">
      <div class="col s12">
        <h3 class="center-align">HOT ARTICLES</h3><br/>
        <div class="slider">
          <ul class="slides">
            <li><a href="#"><img class="articles" src="images/1.jpg"/>
                <div class="window-tint">
                  <div class="caption left-align">
                    <h4 class="truncate">This is the first article</h4>
                    <div class="divider"></div>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                  </div>
                </div></a></li>
            <li><a href="#"><img class="articles" src="images/2.jpg"/>
                <div class="window-tint">
                  <div class="caption left-align">
                    <h4 class="truncate">This is the second article</h4>
                    <div class="divider"></div>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                  </div>
                </div></a></li>
            <li><a href="#"><img class="articles" src="images/3.jpg"/>
                <div class="window-tint">
                  <div class="caption left-align">
                    <h4 class="truncate">This is the third article</h4>
                    <div class="divider"></div>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                  </div>
                </div></a></li>
            <li><a href="#"><img class="articles" src="images/4.jpg"/>
                <div class="window-tint">
                  <div class="caption left-align">
                    <h4 class="truncate">This is the forth article</h4>
                    <div class="divider"></div>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                  </div>
                </div></a></li>
            <li><a href="#"><img class="articles" src="images/5.jpg"/>
                <div class="window-tint">
                  <div class="caption left-align">
                    <h4 class="truncate">This is the fifth article</h4>
                    <div class="divider"></div>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                  </div>
                </div></a></li>
          </ul>
        </div>
      </div>
    </div>
    <!--lastest videos--><br/>
    <div class="divider"></div><br/>
    <h3 class="center-align">LASTEST VIDEOS</h3>
    <div class="video-container">
      <iframe width="853" height="0" frameborder="0" allowfullscreen=""></iframe>
    </div>
    <!--services and portofolio--><br/>
    <div class="divider"></div><br/>
    <h3 class="center-align">OUR SERVICES AND PORTOFOLIO</h3>
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
    <!--customers--><br/>
    <div class="divider"></div><br/>
    <h3 class="center-align">OUR CUSTOMERS</h3>
    <div class="carousel"><a class="carousel-item" href="#one"><img src="images/1.jpg"/></a><a class="carousel-item" href="#two"><img src="images/2.jpg"/></a><a class="carousel-item" href="#three"><img src="images/3.jpg"/></a><a class="carousel-item" href="#four"><img src="images/4.jpg"/></a><a class="carousel-item" href="#five"><img src="images/5.jpg"/></a></div>
  </div>
  <!--required javascript-->
  <script type="text/javascript" src="js/jquery-2.2.0.min.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>
</section>
<?php include('footer.php');?>



        <!--Import jQuery before materialize.js-->
        <script type="text/javascript" src="js/jquery-2.2.0.min.js"></script>
        <script type="text/javascript" src="js/materialize.min.js"></script>
        <script>
        // Initialize collapse button
  $(".button-collapse").sideNav();
  // Initialize collapsible (uncomment the line below if you use the dropdown variation)
  //$('.collapsible').collapsible();
        </script>
    </body>
</html>
