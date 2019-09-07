<?php $title = "Modification du chapitre"; ?>

<?php ob_start(); ?>
<form action="<?= "index.php?controller=backEnd&action=changeBillet&idBillet=" . $billet->getIdBillet(); ?>" method="post">
  <label for="change_titre"><strong> Chapitre à modifier :</strong></label><br />
  <input name="change_titre" id="change_titre" class="form-control" type="text" maxlength="150" />
  <textarea id="editor" name="change_chapitre"></textarea>
  <input id="submitBillet" class="btn btn-primary" type="submit" value="Changer" />

</form>
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>