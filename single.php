<?php include('header.php')?>
<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
<section class="content"><br/>
  <div class="container">
    <div class="row">
      <div class="col s9 m9">
        <article>
          <div class="card-panel white"><span class="black-text">
              <h5 class="titles"><a href="<?php the_permalink();?>">
<?php the_title();?>
</a>
              </h5><small class="dates"><?php the_time('F jS, Y'); ?><br/>
                <p>
                  Category:<?php the_category(); ?></p>
                <p>
                  Tags:<?php the_tags(); ?></p></small>
              <div class="divider"></div><br/><?php the_content();?><br/>
              <div class="divider"></div><br/>
              <div id="share-buttons">
                <!--facebook--><a class="share-social" href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&amp;t=<?php the_title(); ?>" title="Share on Facebook.">Share on Facebook</a>
                <!--facebook--><a class="share-social" href="http://www.linkedin.com/shareArticle?mini=true&amp;title=<?php the_title(); ?>&amp;url=<?php the_permalink(); ?>" title="Share on LinkedIn">Share on LinkedIn</a>
                <!--gplus--><a class="share-social" href="https://plus.google.com/share?url=<?php the_permalink(); ?>" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;">Share on G+</a>
              </div></span></div>
        </article><?php endwhile; endif; wp_reset_query();?>
      </div>
      <div class="col s3 m3">
        <aside>
          <div class="card-panel white"><?php dynamic_sidebar('side-widgets');?></div>
        </aside>
      </div>
    </div>
  </div>
</section><?php include('footer.php')?>
<?php wp_footer()?>