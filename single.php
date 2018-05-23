<?php get_header();?>

    <!------------------ HERO IMAGE -------------------->

    <div class="slider-blog position-relative">
        <h1 class="text-light position-absolute">Notícias</h1>
        <div class="carousel slide">
            <div class="carousel-item active"><img class="img-fluid d-block w-100" src="<?php echo get_template_directory_uri() . '/img/bg-blog.jpg' ?>" alt="First slide"></div>
        </div>
    </div>

    <!------------------ POST CONTENT -------------------->
    <div class="container">
        <section class="post-content">
            <?php 
                if(have_posts()){
                    while(have_posts()){
                        the_post();
                        get_template_part("singlepost");
            ?>
            <div class="container py-5">
                <hr>
            </div>
            <?php
                        
                        if(comments_open() || get_comments_number()){
                            comments_template();
                        }
                    }
                    //get_template_part("pagination");
                }
            ?>
            
        </section>

    </div>
<?php get_footer(); ?>
