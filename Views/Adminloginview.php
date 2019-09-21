<?php $title = "Billet simple pour l'Alaska"; ?>

<?php ob_start(); ?>
<div class="card d-flex align-items-center border-0 mt-5">
        <div class="border border-secondary mb-3">
                <h5 class="card-header">Formulaire de connexion</h5>
                <div class="card-body">
                        <form action="index.php?controller=backEnd&action=checkLogin" method="post">
                                <label for="pseudoAdmin">Identifiant :</label> <input type="text" name="pseudoAdmin" class="form-control" id="pseudoAdmin" />
                                <label for="loginAdmin">Mot de passe :</label> <input type="password" name="loginAdmin" class="form-control" id="loginAdmin" /><br />

                                <input type="submit" value="Connexion" id="connexion" class="btn btn-primary" />
                        </form>
                </div>
        </div>
</div>


<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>