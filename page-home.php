<?php get_header();?>
<!------------------ SLIDER -------------------->

<div class="slider">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img class="d-block w-100" src="<?php echo get_template_directory_uri() . '/img/banner-2.png' ?>" alt="First slide">
            </div>
            <div class="carousel-item">
            <img class="d-block w-100" src="<?php echo get_template_directory_uri() . '/img/banner-3.png' ?>" alt="Second slide">
            </div>
            <div class="carousel-item">
            <img class="d-block w-100" src="<?php echo get_template_directory_uri() . '/img/banner-4.png' ?>" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

<!------------------ CONTENT -------------------->
<div class="content py-5">
    <div class="container">
        <h2 class="text-uppercase text-center pb-5">Lei Seca Salva! Seja um fiscal da vida!</h2>
        <div class="row">
            <div class="col-md-6"><img class="img-fluid" src="<?php echo get_template_directory_uri() . '/img/logo.png' ?>"></div>
            <div class="col-md-6">
                <p>A primeira Operação Lei Seca ocorreu em 19 de março de 2009, e, no seu início, 20% dos motoristas registravam a presença de bebida alcoólica no sangue. Em 2016, o número de motoristas pegos com traços de bebida alcoólica no sangue caiu para 7%. Já em seu primeiro mês de funcionamento, a lei mostrou que faz a diferença. Segundo dados do Ministério da Saúde, ocorreu no período uma diminuição de 24% de resgates do SAMU. Em um ano, o número de mortes em acidentes causados por motoristas embriagados caiu em 32% em comparação com o ano anterior... </p>
                <a class="text-link d-block text-right" href="<?php echo get_page_link(34); ?>">continuar lendo ></a>
            </div>
        </div>
    </div>
</div>

<div class="content-img pb-5">
    <img class="img-fluid w-100" src="<?php echo get_template_directory_uri() . '/img/content-img.jpg' ?>">
</div>

<?php get_template_part("quots")?>

<!------------------ NOTICIAS -------------------->


<div class="news pb-5">
    <div class="container position-relative">
        <div class="row">
            <?php 

                $destaque = new WP_Query("type=post&posts_per_page=1");
                
                if($destaque->have_posts()):
                    while($destaque->have_posts()):
                        $destaque->the_post();
            ?>
            <div class="col-md-8">
                <img class="noticias img-fluid d-none d-md-block" src="<?php echo get_template_directory_uri() . '/img/noticia.jpg' ?>" alt="post image">
                <?php get_template_part("destaque"); ?>
            </div>
            <?php
                    endwhile;
                    wp_reset_postdata();
                endif;
                                                   
            ?>
            <div class="col-md-4">
               <div class="row">
                    <?php 

                        $destaque2 = new WP_Query("type=post&posts_per_page=2&offset=1");

                        if($destaque2->have_posts()):
                            while($destaque2->have_posts()):
                                $destaque2->the_post();
                                get_template_part("destaque2");


                            endwhile;
                        endif;

                    ?>
                </div>
            </div>
                            
                            
        </div>
        <a class="text-link d-block text-center py-5" href="<?php echo get_page_link(43); ?>">Ver todas</a>
    </div>
</div>

<!------------------ CONTACT -------------------->


<div class="contact py-5">
    <div class="container" style="max-width:700px;">
        <h2 class="bebas-title">Fale conosco</h2>
        <p class="text-center">Mande a sua dúvida, mensagem ou conte para nós a sua história.</p>
        <form>
            <div class="row">
                <div class="col-md-6 pb-4 pb-md-0"><input class="w-100" type="text" name="name" placeholder="Nome"></div>
                <div class="col-md-6"><input class="w-100" type="email" name="email" placeholder="Email"></div>
            </div>
            <div class="row">
                <div class="col-md-12 pt-4"><textarea class="w-100" placeholder="Deixe sua mensagem"></textarea><input class="button float-right my-4 hover" type="submit" value="Enviar"></div>
            </div>
        </form>
    </div>
</div>

<?php get_footer(); ?>
