<div class="post">
	<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
	<div class="post-excerpt post-excerpt-overlay">
	    <a href="<?php the_permalink(); ?>"><h2 class="text-uppercase font-weight-bold"><?php the_title(); ?></h2></a>
        <p><a href="<?php the_permalink(); ?>"><?php the_excerpt(); ?></a></p>
    </div>
</div>

