<?php $title = "Billet simple pour l'Alaska"; ?>

<?php ob_start(); ?>

<div class="d-flex flex-column container-fluid ">
        <h6 class="align-self-center text-center">Le commentaire a été ignoré veuillez retourner aux <a href="index.php?controller=backEnd&action=checkLogin">Tableaux de bord</a></h6>
        <div class="w-50 align-self-center"><img class="img-fluid" src="public/images/validation.png" alt="Signalement de commentaire"></div>

</div>

<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>