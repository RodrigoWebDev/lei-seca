<?php get_header();?>
    
    <!------------------ HERO IMAGE -------------------->

    <div class="slider-blog position-relative">
        <div class="nav-button hover">
            <i class="ion-navicon-round"></i>
        </div>
        <h1 class="text-light position-absolute">Notícias</h1>
        <div class="carousel slide">
            <div class="carousel-inner">
                <div class="carousel-item active"><img class="img-fluid d-block w-100" src="<?php echo get_template_directory_uri() . '/img/bg-blog.jpg' ?>" alt="First slide"></div>
            </div>
        </div>
    </div>
    

    <!------------------ BLOG CONTENT -------------------->
    <div class="container">
        <div class="row py-5">
            <div class="col-md-8">
                <section class="blog-content">
                    <div class="row">
                        <?php 
                            if(have_posts()){
                                while(have_posts()){
                                    the_post();
                                    get_template_part("post");
                                }
                                //get_template_part("pagination");
                            }
                        ?>
                    </div>
                </section>
                
                <p class="text-center"><a href="#" class="text-link">Ver mais</a></p>

            </div>

            <?php get_sidebar(); ?>
        </div>
    </div>

            
<?php get_footer(); ?>
