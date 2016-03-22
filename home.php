<?php include('header.php');?><br/>
<section class="content">
  <div class="container"><br/>
    <!--hot-articles-->
    <div class="row">
      <div class="col s12">
        <h3 class="center-align">HOT ARTICLES</h3><br/>
        <div class="slider">
          <ul class="slides"><?php query_posts(array('post_type'  => 'post', 'meta_key' => '_thumbnail_id', 'posts_per_page'=>5)); if(have_posts()) : while(have_posts()) : the_post(); ?>
            <li><a href="<?php the_permalink();?>">
              <!--think how to remove 'sizes' attribute to make the image keep its normal ratio even inside the slider--><?php the_post_thumbnail('post_thumbnail',array('class'=>'articles'));?>
              <div class="window-tint">
                <div class="caption left-align">
                  <h4 class="truncate"><?php the_title();?></h4>
                  <div class="divider"></div>
                  <p><?php the_excerpt();?></p>
                </div>
              </div></a>
            </li><?php endwhile; endif; wp_reset_query();?>
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
  <!--required javascript--><script type="text/javascript" src="<?php bloginfo('template_url');?>/js/jquery-2.2.0.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url');?>/js/materialize.min.js"></script>
</section><?php include('footer.php');?>
