<?php $title = "Billet simple pour l'Alaska"; ?>

<?php ob_start(); ?>
<?php foreach ($billets as $billet) : ?>

  <!-- Page Content -->
  <div class="container mb-5">

    <div class="row">

      <!-- Post Content Column -->
      <div class="col-lg-12">
        <!-- Title -->
        <h1 class="mt-4"><?= $billet->getTitre(); ?></h1>
        <hr>

        <!-- Date/Time -->
        <p>Posté le : <?= $billet->getDateBillet(); ?></p>

        <hr>

        <?= substr($billet->getContenu(), 0, 700); ?>...

        <hr>

        <nav class="navbar navbar-expand-lg navbar-light " style="background-color: #e3f2fd;">
          <a class="navbar-brand" href="index.php?controller=backEnd&action=checkLogin">CRUD</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbarNav" aria-label="navbarNav" aria-expanded="false">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse navbarNav">
            <!-- Menu CRUD pour la gestion des billets -->
            <ul class="navbar-nav ">
              
              <li class="nav-item">
                <a class="nav-link" href="index.php?controller=backEnd&action=createBillet">Créer</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="<?= "index.php?controller=billet&action=afficheBilletSimple&idBillet=" . $billet->getIdBillet(); ?>">Lire plus</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="<?= "index.php?controller=backEnd&action=billetModifier&idBillet=" . $billet->getIdBillet(); ?>">Changer</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" onclick="return confirm('etes-vous sur de vouloir supprimer ce billet ?')" href="<?= "index.php?controller=backEnd&action=effaceBillet&idBillet=" . $billet->getIdBillet(); ?>">Effacer</a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </div>
  </div>
<?php endforeach; ?>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>