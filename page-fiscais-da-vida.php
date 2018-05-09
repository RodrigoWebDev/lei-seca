<?php get_header();?>
    <div class="fiscais-da-vida">
        <!------------------ HERO IMAGE -------------------->
        <div class="nav-button hover">
            <i class="ion-navicon-round"></i>
        </div>
    
        <div class="hero p-4">
            <div class="container">
                <h1 class="bebas-title text-left">Fiscais <br>da vida</h1>
            </div>
        </div>
        
        <!------------------ CONTENT -------------------->
        
        <div class="container py-4">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique saepe omnis magnam aperiam, magni excepturi perspiciatis, minima doloribus incidunt quisquam repellendus ea aliquid maxime nobis voluptates praesentium accusamus cumque nemo.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique saepe omnis magnam aperiam, magni excepturi perspiciatis, minima doloribus incidunt quisquam repellendus ea aliquid maxime nobis voluptates praesentium accusamus cumque nemo.</p>
        </div>

        <div class="middle container py-4">
            <h2 class="bebas-title text-left">Por que ser um fiscal:</h2>
            <img class="img-fluid" src="<?php echo get_template_directory_uri() . '/img/coracao.png'?>" alt="">
            <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius reprehenderit corrupti deleniti libero rem quam ipsa</p>
            <img class="img-fluid" src="<?php echo get_template_directory_uri() . '/img/mao.png'?>" alt="">
            <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius reprehenderit corrupti deleniti libero rem quam ipsa</p>
            <img class="img-fluid" src="<?php echo get_template_directory_uri() . '/img/gota.png'?>" alt="">
            <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius reprehenderit corrupti deleniti libero rem quam ipsa</p>
        </div>

        <?php get_template_part("quots");?>
        <!------------------ CONTACT -------------------->


        <div class="contact py-5">
            <div class="container">
                <h2 class="bebas-title">Seja um fiscal</h2>
                <p class="text-center">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Temporibus harum tenetur veritatis perspiciatis.</p>
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
    
    </div>
        
                    
    <?php get_footer(); ?>

    
    