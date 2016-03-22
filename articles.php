<?php /* Template Name: Articles Template */ ?>
<?php include('header.php');?><br/>
<section class="content">
  <div class="container"><br/><br/>
    <h3 class="center-align">CATEGORIES</h3><br/>
    <ul class="collapsible popout" data-collapsible="accordion">
      <li>
        <div class="collapsible-header">Electronics & Arduino</div>
        <div class="collapsible-body">Lorem ipsum dolor sit amet.</div>
      </li>
      <li>
        <div class="collapsible-header">Web Development</div>
        <div class="collapsible-body">Lorem ipsum dolor sit amet.</div>
      </li>
      <li>
        <div class="collapsible-header">Programming</div>
        <div class="collapsible-body">Lorem ipsum dolor sit amet.</div>
      </li>
      <li>
        <div class="collapsible-header">Hacking</div>
        <div class="collapsible-body">Lorem ipsum dolor sit amet.</div>
      </li>
      <li>
        <div class="collapsible-header">Projects</div>
        <div class="collapsible-body">Lorem ipsum dolor sit amet.</div>
      </li>
      <li>
        <div class="collapsible-header">Others</div>
        <div class="collapsible-body">Lorem ipsum dolor sit amet.</div>
      </li>
    </ul><br/>
    <div class="divider"></div>
    <div class="row">
      <div class="col s9 m9"><br/>
        <h4 class="center-align">Articles</h4><br/><?php query_posts(array('post_type'  => 'post')); if(have_posts()) : while(have_posts()) : the_post(); ?>
        <div class="card-panel white"><span class="black-text">
            <h5 class="titles"><a href="<?php the_permalink();?>">
<?php the_title();?>
</a>
            </h5><small class="dates"><?php the_date();?><br/></small><?php the_content();?></span></div><?php endwhile; endif; wp_reset_query();?>
      </div>
      <div class="col s3 m3"><br/>
        <h4 class="center-align">Sidebar</h4><br/>
        <div class="card-panel white"></div>
      </div>
    </div>
  </div>
</section>
<!--Import jQuery before materialize.js--><script type="text/javascript" src="js/jquery-2.2.0.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
<?php include('footer.php');?>