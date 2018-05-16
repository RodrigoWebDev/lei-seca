<!DOCTYPE html>

<head>
    <title>Lei seca</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <?php wp_head();?>
</head>

<body>
    
    <!------------------ HEADER -------------------->

    <header>
        <div class="container">
            <div class="row">
                <div class="col-3 col-md-6 d-flex align-items-center">
                    <a class="hover" href="#" target="_blank"><i class="ion-email"></i><span class="d-none d-md-inline">contato@leiseca.com.br</span></a>
                </div>
                <div class="col-9 col-md-6 text-right social">
                    <a class="hover" href="https://www.facebook.com/leisecasalvavidas/" target="_blank"><i class="ion-social-facebook"></i></a>
                    <a class="hover" href="https://www.instagram.com/leisecasalva/" target="_blank"><i class="ion-social-instagram"></i></a>
                    <a class="hover" href="https://twitter.com/leisecasalva" target="_blank"><i class="ion-social-twitter"></i></a>
                    <a class="hover" href="#" target="_blank"><i class="ion-search"></i></a>
                </div>
            </div>
        </div>
    </header>

    <!-------------------- NAV ---------------------------->

    <nav class="drop-menu">
        <i class="ion-close-round hover"></i>
        <?php wp_nav_menu(array(
            "menu_class" => "container",
            "container" => "nav",
            "container_class" => "blog-nav",
            "theme_location" => "meu-menu",
        ));?>
    </nav>

    <div class="nav-button hover">
        <i class="ion-navicon-round"></i>
    </div>
