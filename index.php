<?php get_header() ?>
<div class="row table-row">
<?php if (have_posts()): while (have_posts()): the_post(); ?>
    <div class="col-sm-6 col-md-4 col-lg-3">
        <?php if (has_post_thumbnail()): ?>
        <?php the_post_thumbnail('large', ['class' => 'img-responsive']) ?>
        <?php endif ?>
        <h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
        <div><?php the_excerpt() ?></div>
    </div>
<?php endwhile; else: ?>
    <div class="col-md-12"><?php _e('Sorry, no posts!') ?></div>
<?php endif; ?>
</div>
<?php get_footer() ?>