<article class="blog">
    <div class="blog-meta">
        <h2 class="blog-meta-title"><?php the_title() ; ?></h2>
        <p class="blog-meta-detail">Posted by <?php the_author_posts_link(); ?> on <?php the_time('F j, Y'); ?></p>
    </div> <!-- blog-meta -->
    <?php if ( has_post_thumbnail() ) : ?>
        <div class="blog-img">
          <?php the_post_thumbnail('full',array(
                'class' => 'img-responsive',
            )); ?>
        </div> <!-- blog-post-img -->
    <?php endif ; ?> <!-- if ends here of thumbnail -->
    <div class="blog-content">
        <?php the_content() ; ?>
    </div> <!-- blog-content -->
</article> <!-- article-->
