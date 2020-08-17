<?php

$title= "Inscription";

ob_start(); ?>

<style>

body {
    position: relative;
    height: 960px;
    background: url(https://source.unsplash.com/2ueUnL4CkV8/1920x1080) no-repeat center center; 
    background-size: cover;	
    background-position : bottom right;
}

h3 {font-weight: 100; text-align: center;}

/* Form */

 .card {
    padding: 20px;
    margin: auto;

    height: 100%;
    font-family: 'Numans', sans-serif;
    color: white;

    position: absolute;
    top: 15%;
    left: 37%;

    height: 500px;
    width: 500px;
    background-color: rgba(0,0,0,0.5) !important;
}

.form-group, .form-check { padding-top: 5px; padding-bottom: 5px; }
a { text-decoration: none; border: 0 none; color: white;}

header, nav, footer {display: none;}

</style>

<div class="limiter">
    <div class="card">
        <form action="signUp.php" method="POST">

            <h3 class="mb-3">Veuillez renseigner les champs</h3>

            <div class="form-group">
                <label for="u_name">Votre nom :</label>
                <input type="text" class="form-control" id="u_name" name="u_name">
            </div>
        
            <div class="form-group">
                <label for="u_email">Votre email :</label>
                <input type="email" class="form-control" id="u_email" name="u_email">
            </div>

            <div class="form-group">
                <label for="u_password">Mot de passe : </label>
                <input type="password" class="form-control" id="u_password" name="u_password">
            </div>

            <div class="mt-4">
                <button type="submit" class="btn btn-lg btn-outline-success btn-block">Enregistrer</button>
            </div>
            
            <div class="form-check text-center mt-4">
                <a href="index.php">Retourner à la connexion</a>
            </div>

        </form>
    </div>
</div>
    

<?php 

$content = ob_get_clean(); 

require "view/template.php"; ?>