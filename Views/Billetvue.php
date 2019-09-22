<?php $title = "Billet simple pour l'Alaska"; ?>

<?php ob_start(); ?>


<?php foreach ($billets as $billet) : ?>
  <!-- Page Content -->
  <div class="container mb-5">

    <div class="row">

      <!-- Post Content Column -->
      <div class="col-lg-12">
        <!-- Title -->
        <h1 class="mt-4"> <?= $billet->getTitre(); ?>
        </h1>
        <hr>

        <!-- Date/Time -->
        <p>Posté le : <?= $billet->getDateBillet(); ?></p>

        <hr>

        <?= substr($billet->getContenu(), 0, 700); ?>... <a href="<?= "index.php?controller=billet&action=afficheBilletSimple&idBillet=" . $billet->getIdBillet(); ?>">Voir plus</a>

      </div>
    </div>
  </div>

<?php endforeach; ?>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>