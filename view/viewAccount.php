<?php

$id_user = $_SESSION['id'];

$title= "Mon Compte";

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

    height: 600px;
    width: 500px;
    background-color: rgba(0,0,0,0.5) !important;
}

.form-group, .form-check { padding-top: 5px; padding-bottom: 5px; }
a { text-decoration: none; border: 0 none; color: white;}

header, nav, footer {display: none;}

</style>

<div class="limiter">
    <div class="card">
        <form action="<?= 'account.php?id=' . $id_user ?>" method="POST">

            <h3 class="mb-3">Mes informations</h3>

            <input type="hidden" name="id" value="<?= $id_user; ?>">

            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="u_name">Mon nom :</label>
                        <input type="text" class="form-control" id="u_name" name="u_name" value="<?= $u_name ?>">
                    </div>
                    <div class="form-group">
                        <label for="u_phone">Mon mobile :</label>
                        <input type="tel" id="u_phone" name="u_phone" class="form-control" 
                        pattern="[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}" placeholder="06-00-00-00-00" value="<?= $u_phone ?>">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="u_firstname">Mon prénom :</label>
                        <input type="text" class="form-control" id="u_firstname" name="u_firstname" value="<?= $u_firstname ?>">
                    </div>
                    <div class="form-group">
                        <label for="u_role">Mon role :</label>
                        <select name="u_role" id="u_role" class="form-control" value="<?= $u_role ?>">
                            <option value="1">Admin</option>
                            <option value="0">Utilisteur</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group">
                        <label for="u_email">Mon email :</label>
                        <input type="email" class="form-control" id="u_email" name="u_email" value="<?= $u_email ?>">
                    </div>

                    <div class="form-group">
                        <label for="u_password">Mot de passe : </label>
                        <input type="password" class="form-control" id="u_password" name="u_password" value="<?= $u_password ?>">
                    </div>

                    <div class="mt-4">
                        <button type="submit" class="btn btn-lg btn-outline-success btn-block">Enregistrer</button>
                    </div>
                </div>
            </div>
            
            <div class="form-check text-center mt-4">
                <a href="home.php">Retourner au site</a>
            </div>

        </form>
    </div>
</div>
    

<?php 

$content = ob_get_clean(); 

require "view/template.php"; ?>