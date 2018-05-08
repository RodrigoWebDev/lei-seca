<?php get_header();?>
<!------------------ SLIDER -------------------->
<div class="nav-button hover">
    <i class="ion-navicon-round"></i>
</div>
<div class="slider">
    <?php motoPressSlider( "home-slider" ) ?>
</div>

<!------------------ CONTENT -------------------->
<div class="content py-5">
    <div class="container">
        <h2 class="text-uppercase text-center pb-5">Lei Seca Salva! Seja um fiscal da vida!</h2>
        <div class="row">
            <div class="col-md-6"><img class="img-fluid" src="<?php echo get_template_directory_uri() . '/img/logo.png' ?>"></div>
            <div class="col-md-6">
                <p>O projeto Lei Seca Salva Vidas tem como objetivo aumentar a conscientização sobre a Lei Seca. Boa parte da população ainda vê a lei apenas como uma ação que cria mais blitzes de trânsito, quando é um projeto que salvou milhares de vidas e poupou bilhões de reais para o país nos últimos nove anos. Inclusive, as ações de fiscalização fizeram com que a lei fosse cada vez mais conhecida pela população. A cada ano, mais e mais motoristas compreendem o perigo de dirigir alcoolizados, diminuindo cada vez mais o número de acidentes nas estradas. Entre 2009 e 2016, o número de motoristas flagrados alcoolizados caiu em 43%. </p>
                <p>Antes da Lei Seca, a ingestão permitida de álcool era de até 6 decigramas... </p>
                <a class="text-link d-block text-right" href="#">continuar lendo ></a>
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
                <?php get_template_part("content","destaque"); ?>
            </div>
            <?php
                    endwhile;
                    wp_reset_postdata();
                endif;
                                                   
            ?>
            <div class="col-md-4">
                <?php 

                    $destaque2 = new WP_Query("type=post&posts_per_page=2&offset=1");

                    if($destaque2->have_posts()):
                        while($destaque2->have_posts()):
                            $destaque2->the_post();
                            get_template_part("content","destaque2");

                
                        endwhile;
                    endif;

                ?>
            </div>
                            
                            
        </div>
        <a class="text-link d-block text-center pt-3 pb-5" href="<?php echo get_page_link(5); ?>">Ver todas</a>
    </div>
</div>

<!------------------ CONTACT -------------------->


<div class="contact py-5">
    <div class="container">
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
