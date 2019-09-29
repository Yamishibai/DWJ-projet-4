<?php $title = "Chapitre à créer"; ?>
<!-- interface create pour créer les billets -->
<?php ob_start(); ?>
<div class="card my-4 mr-5 ml-5 ">
  <h5 class="card-header">Création du chapitre</h5>
  <div class="card-body">
    <form action="index.php?controller=backEnd&action=ajouteBillet" method="post">


    <div id="error_create"></div>

      <label for="titre"><b> Titre :</b></label><br />
      <input name="titre" id="titre" class="form-control" type="text" maxlength="150"/>
      <label class="my-3" for="chapitre"><b> Chapitre :</b></label><br />
      <textarea id="editor" name="chapitre" ></textarea>
      <input id="chapitre" class="my-3 btn btn-primary" type="submit" value="Envoyer" />

    </form>
  </div>
</div>
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>