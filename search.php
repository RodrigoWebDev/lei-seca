<?php get_header();?>

<!------------------ HERO IMAGE -------------------->

<div class="blog-hero position-relative d-flex align-items-center justify-content-center">
    <h1 class="text-light position-absolute">Pesquisa</h1>
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
                                    get_template_part("content","search");
                                }
                                //get_template_part("pagination");
                            }
                        ?>
                </div>
            </section>
        </div>

        <?php get_sidebar(); ?>
    </div>
</div>


<?php get_footer(); ?>
