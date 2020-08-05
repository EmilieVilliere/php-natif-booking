<?php

$title= "Details";

ob_start(); ?>

<!-- <style>
    #img-brico { width: 400px; height: auto; margin: 0 auto; margin-top: 5px;}
    #price {font-weight: bold; font-size: 26px;}
    .txt-price {font-size: 18px; color: red; text-decoration: line-through;}
</style> -->

<div class="container">

    <div class="sec-photo">
        
        <div class="row">
            <div class="col-8" style="background-color: whitesmoke;">col-8</div>
            <div class="col-4" style="background-color: whitesmoke;">col-4</div>
        </div>
        <div class="row justify-content-end">
            <div class="col-sm-4" style="background-color: whitesmoke;">col-4 bis</div>
        </div>

    </div>


    <section>
        <h1 class="display-3"><?= $b_title; ?></h1>
        <p class="lead"> <?= $b_description ?></p>
        <hr class="my-2">
        <p><?= $b_subtitle ?></p>
        
        <!-- <div id="img-div" class="mb-4">
            <img id="img-brico" class="shadow" src="<?= './images/' . $p_image ?>" alt="Card image">
        </div> -->

        <p id="price"> <?= $b_price ?> € </p>
        <p class="mb-3"> <?= $b_surface ?></p>

        <p class="lead">
            <a class="btn btn-primary btn-lg" href="#!" role="button">Ajouter au panier</a>
        </p>
    </section>

</div>

<?php 

$content = ob_get_clean(); 

require "view/template.php"; ?>