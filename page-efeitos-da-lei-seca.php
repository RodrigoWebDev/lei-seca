<?php get_header();?>

<div class="nav-button hover">
    <i class="ion-navicon-round"></i>
</div>
<!------------------ HERO IMAGE -------------------->

<div class="efeitos-hero position-relative d-flex align-items-center justify-content-center">
    <h1 class="d-none">Os efeitos da Lei seca</h1>
    <img class="img-fluid" src="<?php echo get_template_directory_uri() . '/img/efeitos-title.png'?>" alt="Os efeitos da Lei Seca">
</div>


<!------------------ EFEITOS CONTENT -------------------->
<div class="container">
    <section class="efeitos-content py-5">
        <p>Desde 2008, mais de 20 mil ações de fiscalização foram realizadas por todo o Estado do Rio de Janeiro, abordando mais de 2 milhões de motoristas. Aproximadamente 183 mil pessoas dentre estes motoristas apresentavam sinais de embriaguez e tiveram suas carteiras de habilitação recolhidas. Além disso, foram multados mais de 520 mil veículos.</p>
        <p>Perto de completar dez anos de sua implementação, a Lei Seca já salvou mais de 41 mil vidas, além de ter poupado ao país mais de R$ 550 bilhões por evitar perda de produtos e renda, de acordo com estudo realizado pelo Centro de Pesquisa e Economia do Seguro (CPES), da Escola Nacional de Seguros. </p>
        <p>O mesmo estudo aponta que a versão de 2012 da Lei Seca obteve um impacto maior que a lei original, com uma redução de acidentes quase três vezes maior que a versão anterior da lei, graças às suas penas mais duras. Só no Rio de Janeiro, os acidentes e mortes no trânsito reduziram cerca de 34% e menos 43% motoristas flagrados alcoolizados. Internações e prestação de socorro por causa de acidentes de trânsito também geram altos custos sociais e também foi um número que teve diminuição: quase 50% de internações a menos.</p>
    </section>
</div>

<!------------------ ESTATISTICAS -------------------->
<section class="stats">
    <div class="container">
        <div class="row">
            <div class="col-6 col-md-2">
                <br>
                <h2>Vidas Salvas</h2>
                <img class="img-fluid"src="<?php echo get_template_directory_uri() . '/img/stats1.png'?>" alt="Estatistica">
            </div>
            <div class="col-6 col-md-2">
                <h2>Ações de<br> Fiscalização</h2>
                <img class="img-fluid" src="<?php echo get_template_directory_uri() . '/img/stats2.png'?>" alt="Estatistica">
            </div>
        
            <div class="col-6 col-md-2">
                <h2>Motoristas <br>Abordados</h2>
                <img class="img-fluid" src="<?php echo get_template_directory_uri() . '/img/stats3.png'?>" alt="Estatistica">
            </div>
            <div class="col-6 col-md-2">
                <h2>Carteiras <br>recolhidas</h2>
                <img class="img-fluid" src="<?php echo get_template_directory_uri() . '/img/stats4.png'?>" alt="Estatistica">
            </div>
            <div class="col-6 col-md-2">
                <h2>Veiculos <br> Multados</h2>
                <img class="img-fluid" src="<?php echo get_template_directory_uri() . '/img/stats5.png'?>" alt="Estatistica">
            </div>
        </div>
    </div>
</section>

<!------------------ e mais... -------------------->
<section class="e-mais pt-5">
    <h2 class="text-center">e mais...</h2>
    <div class="row">
        <div class="col-md-4">
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <img class="img-fluid" src="<?php echo get_template_directory_uri() . '/img/icone-grafico.png'?>" alt="Grafico de economia">
                    </div>
                    <div class="col-6 d-flex align-items-center">
                        <p>Economia de R$550 milhões por evitar perda de produtos</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <img class="img-fluid" src="<?php echo get_template_directory_uri() . '/img/icone-coração.png'?>" alt="Grafico de economia">
                    </div>
                    <div class="col-6 d-flex align-items-center">
                        <p>No Rio de Janeiro, 34% de redução de acidentes</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <img class="img-fluid" src="<?php echo get_template_directory_uri() . '/img/icone-hospital.png'?>" alt="Grafico de economia">
                    </div>
                    <div class="col-6 d-flex align-items-center">
                        <p>Menos 50% de internações por acidentes</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
            
<?php get_footer(); ?>

</body>
</html>