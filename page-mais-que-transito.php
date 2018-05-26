<?php get_header();?>
<div class="mais-que-transito">
    <!------------------ HERO IMAGE -------------------->

    <div class="hero text-light px-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img class="img-fluid" src="<?php echo get_template_directory_uri() . '/img/placa.png' ?>" alt="Mais que transito">
                </div>
                <div style="flex-direction:column" class="col-md-6 d-flex justify-content-center">
                    <p>Muitos cidadãos ainda assimilam a Lei Seca à realização de blitzes, trânsito e multas, mas é muito além disso. Você sabia que a Lei Seca salvou mais de 41 mil vidas nos 10 anos de execução? A iniciativa não tem como prioridade punir os motoristas, mas conscientizá-los para que vidas sejam poupadas.</p>

                    <p>Diante de um acidente de trânsito, o governo gasta recursos para os prejuízos e para indenizar as famílias de possíveis vítimas e ao evitar que tais acidentes ocorram, é claro que haverá economia. Mas esse não é o ponto mais importante. O verdadeiro prejuízo pode ser ao seu bem estar e à felicidade da sua família ao perder um ente querido.</p>

                    <p>A Lei Seca está em vigor há anos para colher resultados que zelem pela vida da população, reeducar condutores sobre a direção defensiva, pensando neles, em quem está no carro e em quem passará pelo seu caminho. Ao decorrer dos anos, temos o orgulho de exibir os seguintes números e sempre desejando melhorar cada vez mais:</p>
                </div>
            </div>
        </div>

    </div>


    <!------------------ CONTENT -------------------->
    <h2 style="font-size:50px;" class="bebas-title">Reflexos da Lei Seca:</h2>
    <div class="row reflexos">
        <div class="col-md-6">
            <div class="container">
                <ul>
                    <li>Fim de ano 2017/2018</li>
                    <div>
                        <p>9.360 motoristas abordados</p>
                        <p>1.630 multas aplicadas</p>
                        <p>521 carteiras de habilitação recolhidas</p>
                        <p>272 veículos rebocados</p>
                    </div>
                    <li>Carnaval 2018</li>
                    <div>
                        <p>6.134 motoristas abordados</p>
                        <p>499 carteiras de habilitação recolhidas</p>
                        <p>Fim de ano 2016/2017</p>
                        <p>7.661 motoristas abordados</p>
                        <p>1.694 multas aplicadas</p>
                        <p>590 carteiras de habilitação recolhidas</p>
                        <p>228 veículos rebocados</p>
                    </div>
                    <li>Carnaval 2017</li>
                    <div>
                        <p>5.472 motoristas abordados</p>
                        <p>1.486 multas aplicadas</p>
                        <p>415 carteiras de habilitação recolhidas</p>
                        <p>246 veículos rebocados</p>
                    </div>
                    <li>De 2009 a 2016</li>
                    <p>-43% motoristas flagrados dirigindo sob efeito do álcool De 2009 a 2015</p>
                </ul>
            </div>
        </div>

        <div class="depois-da-lei-seca col-md-6">
            <div class="container">
                <ul>
                    <li>De 2009 a 2016</li>
                    <div>
                        <p>-28% mortos no trânsito a cada 100 mil habitantes Brasil</p>
                    </div>

                    <li>Brasil</li>
                    <div>
                        <p>4º País com mais mortes no trânsito no mundo</p>
                    </div>
                    <li>Lei Seca 9 anos</li>
                    <div>
                        <p>90% de aprovação da população</p>
                        <p>2.000 palestras realizadas em escolas, universidades e empresas</p>
                        <p>521.346 multas aplicadas</p>
                        <p>100.974 veículos rebocados</p>
                        <p>183.219 motoristas flagrados dirigindo sob efeito do álcool</p>
                        <p>174.509 carteiras de habilitação recolhidas</p>
                        <p>20.295 blitzes realizadas</p>
                        <p>2,8 milhões de motoristas fiscalizados</p>
                    </div>

                    <li>7,9% dos motoristas flagrados alcoolizados em 2009</li>
                    <div> </div>
                    <li>4,3% dos motoristas flagrados alcoolizados em 2017</li>
                    <div> </div>
                    <li>Valor da multa para quem dirigir alcoolizado R$ 2.934,70</li>
                    <div>
                    </div>
                </ul>
            </div>
        </div>
    </div>

    <?php get_template_part("quots");?>

    <div class="seja-um-fiscal container clearfix pb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="bebas-title text-left">Ajude a salvar vidas</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius expedita similique aspernatur deleniti. Facilis omnis, recusandae sunt vero ipsam officia aspernatur possimus totam dolore a vel numquam modi veritatis nulla!</p>
                    <img class="d-md-none img-fluid" src="<?php echo get_template_directory_uri() . '/img/selo.png' ?>" alt="Seja um fiscal da vida">
                    <a href="<?php echo get_permalink(28); ?>" class="blog-button hover">Tire seu certificado</a>
                </div>
                <div class="col-md-6 d-none d-md-block">
                    <img class="img-fluid" src="<?php echo get_template_directory_uri() . '/img/selo.png' ?>" alt="Seja um fiscal da vida">
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>

</html>
