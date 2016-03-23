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
      <div class="col s9 m9"><br/><?php query_posts(array('post_type'  => 'post')); if(have_posts()) : while(have_posts()) : the_post(); ?>
        <article>
          <div class="card-panel white"><span class="black-text">
              <h5 class="titles"><a href="<?php the_permalink();?>">
<?php the_title();?>
</a>
              </h5><small class="dates"><?php the_time('F jS, Y') ?></small><br/>
              <div class="divider"></div><br/><?php the_content();?><br/>
              <div class="divider"></div><br/>
              <div id="share-buttons">
                <!--facebook--><a class="share-social" href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&amp;t=<?php the_title(); ?>" title="Share on Facebook.">Share on Facebook</a>
                <!--facebook--><a class="share-social" href="http://www.linkedin.com/shareArticle?mini=true&amp;title=<?php the_title(); ?>&amp;url=<?php the_permalink(); ?>" title="Share on LinkedIn">Share on LinkedIn</a>
                <!--gplus--><a class="share-social" href="https://plus.google.com/share?url=<?php the_permalink(); ?>" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;">Share on G+</a>
              </div></span></div>
        </article><?php endwhile; endif; wp_reset_query();?>
      </div>
      <div class="col s3 m3"><br/>
        <div class="card-panel white"><?php dynamic_sidebar('side-widgets');?></div>
      </div>
    </div>
  </div>
</section><?php include('footer.php');?>
<?php wp_footer()?>