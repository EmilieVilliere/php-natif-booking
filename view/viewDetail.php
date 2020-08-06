<?php

$title= "Details";

ob_start(); ?>

<style>
    #house-img {
        width: 700px;
        height: 700px;
    }

    #big-img {
        position: relative;
        height: 720px;
        width: 730px;
        background-image: no-repeat center center; 
        background-size: cover;	
        background-position : bottom right;
    }
    #city {
        padding-top: 30px;
        text-transform: uppercase;
        font-size: 20px;
        font-weight: 500;
    }
    span {
        font-weight: 500;
    }
</style>

<div class="container">

    <h1 class="display-3"><?= $b_title; ?></h1>
    <p class="lead"> <?= $b_description ?></p>
    <hr class="my-2 mb-4">
    <p><?= $b_subtitle ?></p>

    <div class="row">
        
        <div class="col-8">
            <div id="house-img" class="mb-4">
                <img id="big-img" class="shadow" src="<?= 'images/' . $b_image_1 ?>" alt="image-maison" height="auto" width="700">
            </div>

            <p id="city"><?= $b_city ?></p>
            <p>Magnifique <span> <?= $b_type ?> </span> saura ravir petits et grands avec une surface agréable de : <span> <?= $b_surface ?> m2 ! </span></p>
            <p>Prix :<span id="swim"> <?= $b_price ?> </span> € / par nuits pour deux personnes </p>
            <p>Piscine :<span class="price">  <?= $b_swim == 1 ? " oui !" : "non !" ?> </span></p>

            <p class="lead mt-5">
                <a class="btn btn-success btn-lg" href="#!" role="button">Je reserve</a>
            </p>

        </div>

        <div class="col-4">
            
            <div class="mb-4 little-img">
                <img class="shadow" src="<?= 'images/' . $b_image_2 ?>" alt="image-piece-principale" height="350" width="450">
            </div>

            <div class="mb-4 little-img">
                <img class="shadow" src="<?= 'images/' . $b_image_3 ?>" alt="image-piece-secondaire" height="350" width="450">
            </div>

            <div style="width: 100%">
                <iframe width="450" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=<?= $b_city ?>(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
                <a href="https://www.maps.ie/map-my-route/">Calculez votre Itinéraire ici !</a>
            </div>
        
        </div>
    </div>

</div>

<?php 

$content = ob_get_clean(); 

require "view/template.php"; ?>