<?php

$id_user = $_SESSION['id'];

$title = 'Ajout';

ob_start(); ?>

<style>

.jumbotron {
    position: relative;
    height: 850px;
    background: url(https://source.unsplash.com/s9VA7S2F_FQ/1920x1080) no-repeat center center; 
    background-size: cover;	
    background-position : bottom right;
}

h3 {font-weight: 100; text-align: center;}
.form-inline {width: 700px;}

.card {
    padding: 20px;
    margin: auto;

    height: 100%;
    font-family: 'Numans', sans-serif;
    color: white;

    position: absolute;
    top: 10%;
    left: 30%;

    height: 650px;
    width: 700px;
    background-color: rgba(0,0,0,0.5) !important;
    }
    
</style>

<div id="add">
    <div class="jumbotron">
        <div class="container">
            
            <div class="card">
                <h4 class="display-4 text-article">On ajoute une annonce ?</h4>
                <form action="booking.php" method="POST">

                    <div class="row">
                <!-- Première ligne -->
                        <div class="col-6">
                            <div class="form-group text-article">
                                <label for="b_title">Titre:</label>
                                <input type="text" class="form-control" id="b_title" name="b_title" required>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group text-article">
                                <label for="b_city">Ville :</label>
                                <input type="text" class="form-control" id="b_city" name="b_city" required>
                            </div>
                        </div>
                <!-- Deuxième ligne -->
                        <div class="col-3">
                            <div class="form-group text-article">
                                <label for="b_surface">Surface : (m2) </label>
                                <input type="text" class="form-control" id="b_surface" name="b_surface" required>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-group text-article">
                                <label for="b_price">Prix : (2 pers. / J)</label>
                                <input type="text" class="form-control" id="b_price" name="b_price" required>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-check text-article mt-3">
                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked required>
                                <label class="form-check-label" for="gridRadios1"> Appartement</label>
                            </div>
                            <div class="form-check mt-3 text-article">
                                <input class="form-check-input" type="checkbox" id="b_type" value="1" name="b_type" required>
                                <label class="form-check-label" for="b_type">Piscine ?</label>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-check text-article  mt-3">
                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" required>
                                <label class="form-check-label" for="gridRadios1"> Maison</label>
                            </div>
                        </div>
                <!-- Troisième ligne -->
                        <div class="col-12">
                            <div class="form-group text-article">
                                <label for="b_subtitle">Sous-titre : </label>
                                <input type="text" class="form-control" id="b_subtitle" name="b_subtitle" required>
                            </div>

                            <div class="form-group text-article">
                                <label for="b_description">Description : </label>
                                <textarea class="form-control" id="b_description" name="b_description" rows="3" required></textarea>
                            </div>
                        </div> 
                <!-- Quatrième ligne -->
                        <div class="col-4 mt-3">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="validatedCustomFile" required>
                                <label class="custom-file-label" for="validatedCustomFile">1er image</label>
                            </div>
                        </div>
                        <div class="col-4 mt-3">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="validatedCustomFile" required>
                                <label class="custom-file-label" for="validatedCustomFile">2e image</label>
                            </div>
                        </div>
                        <div class="col-4 mt-3">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="validatedCustomFile" required>
                                <label class="custom-file-label" for="validatedCustomFile">3e image</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mt-4 text-article">
                                <button type="submit" class="btn btn-lg btn-outline-success btn-block">Enregistrer</button>
                            </div>
                            
                        </div>
                                
                </form>

            </div>

        </div>
    </div>
</div>

<?php $articles = getArticlesFromUser($id_user); ?>

<div class="tables">
    <div class="container">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Titre</th>
                    <th scope="col">Sous-titre</th>
                    <th scope="col">Ville</th>
                    <th scope="col">Type</th>
                    <th scope="col">Surface</th>
                    <th scope="col">Piscine</th>
                </tr>
            </thead>
            <tbody>

        <?php foreach($articles as $article) : ?>

                <tr>
                    <th scope="row"><?= $article['id'] ?></th>
                    <td><?= $article['b_title'] ?></td>
                    <td><?= $article['b_subtitle'] ?></td>
                    <td><?= $article['b_city'] ?></td>
                    <td><?= $article['b_type'] ?></td>
                    <td class="text-center"><?= $article['b_surface'] ?></td>
                    <td class="text-center"><?= $article['b_swim'] ?></td>
                </tr>

        <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<?php 

$content = ob_get_clean(); 

require "view/template.php"; ?>
