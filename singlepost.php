<h1 class="py-5 text-uppercase text-center font-weight-bold"><?php the_title(); ?></h1>
<div class="post-thumb">
    <?php the_post_thumbnail(); ?>
</div>
<span class="post-info text-right"><?php echo get_the_date() ?> by <?php the_author(); ?></span>
<p><?php the_content(); ?></p>
