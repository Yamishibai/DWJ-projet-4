<?php $title = "Chapitre à créer"; ?>

<?php ob_start(); ?>

<form action="index.php?controller=backEnd&action=ajouteBillet" method="post">
  <label for="titre"><b> titre Chapitre :</b></label><br />
  <input name="titre" id="titre" class="form-control" type="text" maxlength="150" />
  <textarea id="editor" name="chapitre"></textarea>
  <input id="submitBillet" class="btn btn-primary" type="submit" value="Envoyer" />

</form>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>