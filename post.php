<div class="col-md-6">
	<div class="blog-post">
	    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
	    <h2 class="text-uppercase font-weight-bold hover"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	    <span class="post-info"><?php echo get_the_date() ?> by <?php the_author(); ?></span>
	    <p><?php the_excerpt(); ?></p>
	</div>
</div>