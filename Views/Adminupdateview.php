<?php $title = "Modification du chapitre"; ?>

<?php ob_start(); ?>
<!-- Page Content -->
<div class="container">

  <div class="row">

    <!-- Post Contenu Billet -->
    <div class="col-lg-12">
      <!-- Title -->
      <h1 class="mt-4"> <?= $billet->getTitre(); ?>
      </h1>
      <hr>

      <!-- Date/Time -->
      <p>Posté le : <?= $billet->getDateBillet(); ?></p>

      <hr>

      <?php echo $billet->getContenu() ?>

    </div>
  </div>
</div>
<!--interface pour modifier le billet-->
<div class="card my-4 mr-5 ml-5">
  <h5 class="card-header">Modification du chapitre</h5>
  <div class="card-body">

    <form action="<?= "index.php?controller=backEnd&action=changeBillet&idBillet=" . $billet->getIdBillet(); ?>" method="post">
      <label for="change_titre"><strong> Titre :</strong></label><br />
      <input name="change_titre" id="change_titre" class="form-control" type="text" maxlength="150"/>
      <label class="my-3" for="change_chapitre"><strong>Texte :</strong></label>
      <textarea id="editor" name="change_chapitre"></textarea>
      <input id="change_chapitre" class="my-3  btn btn-success" type="submit" value="Changer" />

    </form>
  </div>
</div>
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>