<div class="col-md-4 photo-gallery">
    <?php if ( has_post_thumbnail() ) : ?>
        <div class="blog-img">
          <a href="<?php the_permalink() ; ?>">
              <?php the_post_thumbnail('full',array(
                'class' => 'img-responsive',
            )); ?>
          </a>    
        </div> <!-- blog-post-img -->
    <?php endif ; ?> <!-- if ends here of thumbnail -->
    <div class="blog-content">
        <?php the_content() ; ?>
    </div> <!-- blog-content -->
</div>