<!DOCTYPE html><html>
<head><meta charset="<?php bloginfo( 'charset' ); ?>">
  <title>{NoobGeek}</title>
  <!--Import Google Icon Font--><link href="<?php bloginfo('template_url');?>/css/icon-family_materilize_googleapis" rel="stylesheet">
  <!--Import materialize.css--><link type="text/css" rel="stylesheet" href="<?php bloginfo('template_url');?>/css/materialize.min.css"  media="screen,projection"/>
  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--for material-icon--><link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="<?php bloginfo('template_url');?>/style.css" rel="stylesheet">
<?php wp_head();?>
</head><body>
<?php show_admin_bar( true ); ?>
<header></header>
<nav class="teal">
  <div class="nav-wrapper" id="nav-bar"><a href="#" class="brand-logo center">[NoobGeek]</a><strong><?php wp_nav_menu(array('menu_class' => 'left hide-on-med-and-down', 'container' => false));?></strong>
    <ul class="right hide-on-med-and-down" id="social-media">
      <li id="linkedin"><a href="https://www.linkedin.com/in/ahmad-ali-abdilah-32153a112"><svg width="24" height="24" viewBox="0 0 24 24 "><path class="svg-social" d="M21,21H17V14.25C17,13.19 15.81,12.31 14.75,12.31C13.69,12.31 13,13.19 13,14.25V21H9V9H13V11C13.66,9.93 15.36,9.24 16.5,9.24C19,9.24 21,11.28 21,13.75V21M7,21H3V9H7V21M5,3C6.1,3 7,3.9 7,5C7,6.1 6.1,7 5,7C3.9,7 3,6.1 3,5C3,3.9 3.9,3 5,3Z" /></svg></a></li>
      <li id="facebook"><a href="https://www.facebook.com/ahmad.a.abdilah"><svg width="24" height="24" viewBox="0 0 24 24 "><path class="svg-social" d="M17,2V2H17V6H15C14.31,6 14,6.81 14,7.5V10H14L17,10V14H14V22H10V14H7V10H10V6A4,4 0 0,1 14,2H17Z"/></svg></a></li>
      <li id="twitter"><a href="https://twitter.com/alhiee"><svg width="24" height="24" viewBox="0 0 24 24 "><path class="svg-social" d="M22.46,6C21.69,6.35 20.86,6.58 20,6.69C20.88,6.16 21.56,5.32 21.88,4.31C21.05,4.81 20.13,5.16 19.16,5.36C18.37,4.5 17.26,4 16,4C13.65,4 11.73,5.92 11.73,8.29C11.73,8.63 11.77,8.96 11.84,9.27C8.28,9.09 5.11,7.38 3,4.79C2.63,5.42 2.42,6.16 2.42,6.94C2.42,8.43 3.17,9.75 4.33,10.5C3.62,10.5 2.96,10.3 2.38,10C2.38,10 2.38,10 2.38,10.03C2.38,12.11 3.86,13.85 5.82,14.24C5.46,14.34 5.08,14.39 4.69,14.39C4.42,14.39 4.15,14.36 3.89,14.31C4.43,16 6,17.26 7.89,17.29C6.43,18.45 4.58,19.13 2.56,19.13C2.22,19.13 1.88,19.11 1.54,19.07C3.44,20.29 5.7,21 8.12,21C16,21 20.33,14.46 20.33,8.79C20.33,8.6 20.33,8.42 20.32,8.23C21.16,7.63 21.88,6.87 22.46,6Z" /></svg></a></li>
      <li id="github"><a href="https://github.com/capt4ce"><svg width="24" height="24" viewBox="0 0 24 24 "><path class="svg-social" d="M12,2C6.48,2 2,6.48 2,12C2,16.42 4.87,20.17 8.84,21.5C9.34,21.58 9.5,21.27 9.5,21C9.5,20.77 9.5,20.14 9.5,19.31C6.73,19.91 6.14,17.97 6.14,17.97C5.68,16.81 5.03,16.5 5.03,16.5C4.12,15.88 5.1,15.9 5.1,15.9C6.1,15.97 6.63,16.93 6.63,16.93C7.5,18.45 8.97,18 9.54,17.76C9.63,17.11 9.89,16.67 10.17,16.42C7.95,16.17 5.62,15.31 5.62,11.5C5.62,10.39 6,9.5 6.65,8.79C6.55,8.54 6.2,7.5 6.75,6.15C6.75,6.15 7.59,5.88 9.5,7.17C10.29,6.95 11.15,6.84 12,6.84C12.85,6.84 13.71,6.95 14.5,7.17C16.41,5.88 17.25,6.15 17.25,6.15C17.8,7.5 17.45,8.54 17.35,8.79C18,9.5 18.38,10.39 18.38,11.5C18.38,15.32 16.04,16.16 13.81,16.41C14.17,16.72 14.5,17.33 14.5,18.26C14.5,19.6 14.5,20.68 14.5,21C14.5,21.27 14.66,21.59 15.17,21.5C19.14,20.16 22,16.42 22,12C22,6.48 17.52,2 12,2Z" /></svg></a></li>
      <li id="youtube"><a href="#"><svg width="24" height="24" viewBox="0 0 24 24 "><path class="svg-social" d="M10,16.5V7.5L16,12M20,4.4C19.4,4.2 15.7,4 12,4C8.3,4 4.6,4.19 4,4.38C2.44,4.9 2,8.4 2,12C2,15.59 2.44,19.1 4,19.61C4.6,19.81 8.3,20 12,20C15.7,20 19.4,19.81 20,19.61C21.56,19.1 22,15.59 22,12C22,8.4 21.56,4.91 20,4.4Z" /></svg></a></li>
    </ul>
  </div>
</nav>