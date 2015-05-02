<?php get_header() ?>
<div class="row">
<?php if (have_posts()): while (have_posts()): the_post() ?>
<?php if (has_post_thumbnail()): ?>
    <div class="col-xs-12 col-md-10 col-md-offset-1">
        <?php the_post_thumbnail([1200,1200], ['class' => 'img-responsive']) ?>
    </div>
<?php endif ?>
    <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3">
        <h1><?php the_title() ?></h1>
        <div><?php the_content() ?></div>
    </div>
<?php endwhile; else: ?>

<?php endif ?>
</div>
<?php get_footer() ?>