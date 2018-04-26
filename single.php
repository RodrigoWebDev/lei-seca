<?php get_header();?>

    <!------------------ SLIDER -------------------->

    <div class="slider-blog position-relative">
        <div class="nav-button hover">
            <i class="ion-navicon-round"></i>
        </div>
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
                    }
                    //get_template_part("pagination");
                }
            ?>
            
        </section>

    </div>

    <div class="container py-5">
        <hr>
    </div>

    <!------------------ COMMNETS -------------------->

    <div class="container">
        <div class="comments py-5">
            <h2 class="text-uppercase text-left">Deixe seu comentário</h2>
            <form>
                <div class="row">
                    <div class="col-md-6 pb-4 pb-md-0"><input class="w-100" type="text" name="name" placeholder="Nome"></div>
                    <div class="col-md-6"><input class="w-100" type="email" name="email" placeholder="Email"></div>
                </div>
                <div class="row">
                    <div class="col-md-12 pt-4"><textarea class="w-100" placeholder="Deixe sua mensagem"></textarea><button class="blog-button my-4 hover" type="submit">Enviar</button></div>
                </div>
            </form>
        </div>
    </div>

<?php get_footer(); ?>
