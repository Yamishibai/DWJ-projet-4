<?php $title = "Modification du chapitre"; ?>

<?php ob_start(); ?>

<!--interface pour modifier le billet-->
<div class="card my-4 mr-5 ml-5">
  <h5 class="card-header">Modification du chapitre</h5>
  <div class="card-body">

    <form action="<?= "index.php?controller=backEnd&action=changeBillet&idBillet=" . $billet->getIdBillet(); ?>" method="post">
    <div id="error_update"></div>

    
      <label for="change_titre"><strong> Titre :</strong></label><br />
      <input name="change_titre" id="change_titre" class="form-control" type="text" maxlength="150" value = "<?= $billet->getTitre(); ?>" />
      <label class="my-3" for="change_chapitre"><strong>Texte :</strong></label>
      <textarea id="editor" name="change_chapitre" ><?php echo $billet->getContenu() ?></textarea>
      <input id="change_chapitre" class="my-3  btn btn-success" type="submit" value="Changer" />

    </form>
  </div>
</div>
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>