<?php get_header() ; ?>

        <div class="col-md-9">
            <div class="row">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <?php get_template_part('content', get_post_format()); ?>
                <?php endwhile; else : ?> <!-- while ends here of post loop and else starts -->
            </div>
        <article class="blog">
	         <p><?php _e( 'Sorry, no posts found yo can always start writing' ); ?></p>
        </article>
            <?php endif; ?>
        </div> <!-- .col-md-9 -->
    </div> <!-- .row -->
</section>

<?php get_footer() ; ?>