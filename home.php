<?php include('header.php');?>
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
  <h3 class="center-align">OUR SERVICES AND PORTOFOLIO</h3><br/>
  <div class="row center-align">
    <div class="col s4"><i class="material-icons ico-services">create</i>
      <h5>Design Graphic</h5>
      <p class="services">As we enter the digital era, it is essential to extend your marketing accross digital edge where people are. In order to do that, you need our service to design efective way to communicate your product to audience.</p>
    </div>
    <div class="col s4"><i class="material-icons ico-services">web</i>
      <h5>Web Design</h5>
      <p class="services">Internet has been able to spread the information wider, faster, and cheaper through human history. You will need our web design service to tell larger amount of people your product or services, or even for a small thing only lke your personal/company identity.</p>
    </div>
    <div class="col s4"><i class="material-icons ico-services">code</i>
      <h5>Software Development</h5>
      <p class="services">Technology is meant for easing our works. And with coomputer your work can be done in much more efficiently. Use our Software Development service to have your very own custom software and get your works easily done more easily and efficiently.</p>
    </div>
  </div>
  <!--customers--><br/>
  <div class="divider"></div><br/>
  <h3 class="center-align">OUR CUSTOMERS</h3>
  <div class="carousel"><a class="carousel-item" href="#one"><img src="<?php bloginfo('template_url');?>/images/1.jpg"/></a><a class="carousel-item" href="#two"><img src="<?php bloginfo('template_url');?>/images/2.jpg"/></a><a class="carousel-item" href="#three"><img src="<?php bloginfo('template_url');?>/images/3.jpg"/></a><a class="carousel-item" href="#four"><img src="<?php bloginfo('template_url');?>/images/4.jpg"/></a><a class="carousel-item" href="#five"><img src="<?php bloginfo('template_url');?>/images/5.jpg"/></a></div>
</div><?php include('footer.php');?>
<?php wp_footer();?>