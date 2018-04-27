<?php get_header();?>
<!------------------ SLIDER -------------------->

<div class="slider position-relative">
    <div class="nav-button hover">
        <i class="ion-navicon-round"></i>
    </div>
    <div class="carousel slide">
        <div class="carousel-inner">
            <div class="carousel-item active"><img class="img-fluid d-block w-100" src="<?php echo get_template_directory_uri() . '/' ?>img/slide-1.jpg" alt="First slide"></div>
        </div>
    </div>
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

<!------------------ QUOTS -------------------->

<section class="quots">
    <img class="perfil-comment img-fluid d-block mx-auto" src="<?php echo get_template_directory_uri() . '/img/comment-img.jpg' ?>" alt="comment img">
    <img class="quote1 position-absolute" src="<?php echo get_template_directory_uri() . '/img/quot1.png' ?>" alt="quote1">
    <img class="quote2 position-absolute" src="<?php echo get_template_directory_uri() . '/img/quot2.png' ?>" alt="quote2">
    <i class="hover ion-chevron-left position-absolute"></i>
    <i class="hover ion-chevron-right position-absolute"></i>
    <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
</section>

<!------------------ NOTICIAS -------------------->


<div class="news pb-5">
    <div class="container position-relative">
        <div class="row">
            <div class="col-md-8">
                <img class="noticias img-fluid d-none d-md-block" src="<?php echo get_template_directory_uri() . '/img/noticia.jpg' ?>" alt="post image">
                <div class="post hover">
                    <img src="<?php echo get_template_directory_uri() . '/img/noticia1.jpg' ?>" alt="post image" style="width:100%">
                    <div class="post-excerpt">
                        <h2 class="font-weight-bold">lorem ipsum dolor sit</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="post hover">
                    <img src="<?php echo get_template_directory_uri() . '/img/noticia2.jpg' ?>" alt="post image">
                    <div class="post-excerpt">
                        <h2 class="font-weight-bold">lorem ipsum dolor sit</h2>
                    </div>
                </div>
                <div class="post hover">
                    <img src="<?php echo get_template_directory_uri() . '/img/noticia3.jpg' ?>" alt="post image">
                    <div class="post-excerpt">
                        <h2 class="font-weight-bold">lorem ipsum dolor sit</h2>
                    </div>
                </div>
            </div>
        </div>
        <a class="text-link d-block text-center pt-3 pb-5" href="#">Ver todas</a>
    </div>
</div>

<!------------------ CONTACT -------------------->


<div class="contact py-5">
    <div class="container">
        <h2 class="text-uppercase text-center font-weight-bold">Fale conosco</h2>
        <p class="text-center">lorem ...ipsum ... dolor...</p>
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
