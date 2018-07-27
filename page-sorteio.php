<?php get_header("sorteio");?>

<body>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h1>Lei Seca</h1>
                    <h2>10 anos a lei da vida</h2>
                    <hr class="hr">
                    <p>Sortearemos 5 exemplares autografados do livro sobre a Lei que já ajudou a conscientizar milhões de brasileiros. Cadastre-se e concorra! Botão: Concorra a um exemplar</p>
                    <a href="#" class="button hvr-bounce-in">Concorra a um exemplar</a>
                </div>

                <div class="col-sm-6 book">
                    <img src="<?php echo get_template_directory_uri() . '/img/livro.png' ?>" alt="Lei seca 10 anos, a Lei da vida">
                </div>
            </div>

        </div>
    </header>

    <section class="showcase">
        <div class="row">
            <div class="col-xs-6 col-sm-3" style="background: #2f4242;color: white">
                <img src="<?php echo get_template_directory_uri() . '/img/heart.png' ?>" alt="41 mil vidas salvas">
                <p>41 mil vidas salvas</p>
            </div>
            <div class="col-xs-6 col-sm-3" style="background: #c2ccd7">
                <img src="<?php echo get_template_directory_uri() . '/img/grafico.png' ?>" alt="R$556 milhões poupados ao país">
                <p>R$556 milhões poupados ao país</p>
            </div>
            <div class="col-xs-6 col-sm-3" style="background: #2f4242;color: white">
                <img src="<?php echo get_template_directory_uri() . '/img/carro.png' ?>" alt="34% de redução de acidentes">
                <p>34% de redução de acidentes</p>
            </div>
            <div class="col-xs-6 col-sm-3" style="background: #c2ccd7">
                <img src="<?php echo get_template_directory_uri() . '/img/escudo.png' ?>" alt="menos 50% de internações por acidentes">
                <p>Menos 50% de internações por acidentes</p>
            </div>
        </div>
    </section>

    <div class="container">


        <section class="main-content">
            <div class="row">
                <div class="col-sm-6">
                    <img src="<?php echo get_template_directory_uri() . '/img/placa-livro.png' ?>" alt="Placa">
                </div>
                <div class="col-sm-6">
                    <h2 class="content-subtitle">Sinopse</h2>
                    <hr class="hr">
                    <p>A segurança viária é um problema mundial! O cálculo da Organização Mundial de Saúde indica que, a cada ano, a violência no trânsito mata 1,2 milhão de pessoas e causa lesões em 400 milhões. No Brasil, a estatística da tragédia aponta para quase 40 mil mortes anuais. Esse número seria maior, caso o país não tivesse a sua Lei Seca: a Lei n° 11.705/2008, que estabeleceu o conceito de alcoolemia zero, punindo qualquer nível de bebida no organismo e aumentando penas para crimes no trânsito.
                    </p>
                    <p>Hugo Leal, o autor da Lei Seca e de alguns de seus aperfeiçoamentos legislativos, conta neste livro, os bastidores do seu nascimento e aprovação pelo Congresso, as disputas judiciais subsequentes, as reações da sociedade, e apresenta um panorama do problema da violência no trânsito no Brasil e no mundo, que culminou com a instituição, pela ONU (Organização das Nações Unidas), da Década de Ação para a Segurança Viária (2011/2020).
                    </p>
                    <p>O autor aponta razões para celebrar os 10 anos da Lei Seca: estudo concluído, em dezembro de 2017, pelo Centro de Pesquisa e Economia de Seguros, da Escola Nacional de Seguros, aponta que a Lei Seca salvou 41 mil vidas entre 2008 e 2016, poupando ao país R$ 558 bilhões. Mas o autor de Lei Seca, 10 anos – a Lei da Vida também mostra que essa guerra está longe de ser vencida.
                    </p>
                </div>
            </div>
        </section>

        <hr style="margin-top:60px;margin-bottom:100px">

        <section class="sec-content">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="content-subtitle">Regras</h2>
                    <hr class="hr">
                    <p>- A promoção será válida para aqueles que preencherem o formulário entre os dias (dia que a página entra no ar) (1 mês depois).
                    </p>
                    <p>- O sorteio será feito pela plataforma sorteiospt.com
                    </p>
                    <p>- Entraremos em contato com os 5 vencedores pelo endereço de e-mail do sorteado.
                    </p>
                </div>
                <div class="col-md-6" style="width: 100%">
                    <form action="" method="get">
                        <h2>Concorra a um exemplar</h2>
                        <span>*Siga as regras e preencha o formulario</span>
                        <label for="name">Nome:</label>
                        <input type="text" name="name" id="name">
                        <label for="lastname">Sobrenome:</label>
                        <input type="text" name="latsname" id="latsname">
                        <label for="tel">Telefone:</label>
                        <input class="phone_with_ddd" type="tel" name="tel" id="tel">
                        <label for="email">Email:</label>
                        <input type="email" name="email" id="email">
                        <input class="hvr-bounce-in" type="submit" value="Concorrer">
                    </form>
                </div>
            </div>
        </section>
    </div>
    
<?php get_footer("sorteio")?>