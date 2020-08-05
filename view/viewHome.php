<?php

$title = 'Accueil';

ob_start(); ?>

<!-- Main -->
<div class="main-content mb-5">

    <!-- Home Background Image -->
    <section id="home" class="sec-main">
        <h1 class="main-heading text-white">Trouvez le logement de vos rêves.</h1>
    </section>

    <div class="container">
        <!-- First Section About me -->
        <section id="about" class="sec-about">
            <h1 class="text-center">A propos</h1>
            
            <hr/>
        
            <div class="row" id="desc-about">
                <div class="col-sm-6 col-sm-offset-3">
                    <p>Spécialiste des voyages vers les  <a href="#">Caraïbes</a> et les voyages vers <a href="#">l'Asie,</a>  nos agents de voyages vous concocteront un voyage adapté à vos désirs, 
                        vos envies et votre budget. Nous vous ferons découvrir des endroits insolites, des lieux magiques que seul la nature peut en produire. 
                        Vous vous émerveillerez des décors dans un dépaysement total. N'hésitez pas ! <a href="mailto:emilie.vllr@gmail.com">contact </a></p>
                </div>
            </div>
        </section>

        <!-- First Section About me -->
        <section id="articles">

        <?php 

            foreach($articles as $article) : ?>

                <div class="jumbotron">
                    <div class="container">
                        <h4 class="display-4 text-article"><?= $article['b_title'] ?></h4>

                        <p class="lead text-article"><?= $article['b_description'] ?></p>
                        <hr class="my-2"><p class="text-article"><?= $article['b_subtitle'] ?></p>

                        <p><a class="btn btn-success btn-lg more" href="<?='detail.php?id=' . $article['id']?>" role="button">En savoir plus</a></p>
                    </div>
                </div>

            <?php endforeach; ?>

        </section>
    </div>
</div>

<?php 

$content = ob_get_clean(); 

require "view/template.php"; ?>
