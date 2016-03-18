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
            
            #nav-blog{
                height: auto;
            }
            


            .card .card-reveal{
                opacity: 0.4;
                filter: alpha(opacity=40); /* For IE8 and earlier */
            }
        </style>
    </head>
    <body>
        <nav class="grey darken-2" id="nav-blog">
            <div class="nav-wrapper" id="nav-bar">
                <a href="#" class="brand-logo left">NoobGeek</a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="#">HOME</a></li>
                    <li><a href="#">WHATS NEW</a></li>
                    <li><a href="#">BLOG</a></li>
                    <li><a href="#">SERVICES</a></li>
                    <li><a href="#">ABOUT ME</a></li>
                </ul>              
            </div>
        </nav><br>
        
        <div class="container" id="content">
            <h3 class="center-align">Profile</h3>
            <div class="row">
                <div class="col s4 m4">
                    <div class="card">
                        <div class="card-image">
                        <img src="images/1.jpg" class="circle responsive-img">
                        <span class="card-title">Ahmad Ali Abdilah</span>
                        </div>
                        <div class="card-content">
                            <p>Sharing is part of my self. I like sharing to people, especially knowledge. And I love making friends. Those were the initial intentions in making this website. Hopefully it would be really useful for you all and me.</p>
                        </div>
                        <div class="card-action">
                            <a href="#">This is a link</a>
                        </div>
                    </div>
                </div>
            
                <!--profil--> 
                <div class="col s8 m8">
                    <div class="card-panel" id="words">
                        <div class="card-content">
                          <p>My name is Ahmad Ali Abdilah. I am originated from a beautiful country, Indonesia. I am currently is studying in NIT Kurukshetra, India; pursuing a bachelor degree in Computer Engineering.</p><br>
                            <p>I am just a person who is really passionate about technology and demanding challenges about technology. Although, I don't like theoritical knowledge rather would prefer practical ones. 
                            </p><br>
                            <p>Not easy for me to deliver what I know, since I am more likely a technical person, not a linguist. But I am trying my best to do that.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            
            
            <!--skills-->
            <br><div class="divider"></div>
            <br>
            <h3 class="center-align">Skills</h3>         
              <ul class="collapsible" data-collapsible="extendable">
                <li>
                  <div class="collapsible-header"><i class="material-icons">filter_drama</i>Programming</div>
                  <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
                </li>
                <li>
                  <div class="collapsible-header"><i class="material-icons">place</i>Designing</div>
                  <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
                </li>
                <li>
                  <div class="collapsible-header"><i class="material-icons">whatshot</i>Other Skills</div>
                  <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
                </li>
              </ul><br>
            <div class="row center-align" >
                <a class="waves-effect waves-light btn center-align">Check Services I Offer...</a>
            </div>
        
        </div>
        
        
        <!--Import jQuery before materialize.js-->
        <script type="text/javascript" src="js/jquery-2.2.0.min.js"></script>
        <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
</html>