<?php $title = "Billet simple pour l'Alaska"; ?>

<?php ob_start(); ?>
<h2 class="ml-2">liste des Commentaires Signalé :</h2>

<?php foreach ($reportCommented as $commentReports) : ?>


  <!-- Gestionnaire de commentaire -->
  <div class="media mb-4 ml-5 mr-5 p-3">
    <div class="media-body">

      <div class="bg-secondary text-white ">
        <h5 class="mt-0 bg-danger text-white p-2">Commentaire posté par <?= htmlspecialchars($commentReports->getPseudo()); ?></h5>

        <p class="p-3"><?= htmlspecialchars($commentReports->getCommentaire()); ?>
          <br>
          <i>Posté le <?= htmlspecialchars($commentReports->getDateComment()); ?></i></p>
      </div>

      <nav class="navbar navbar-expand-lg navbar-light" style="background-color:#FF9491">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbarNavAltMarkup" aria-label="navbarNavAltMarkup" aria-expanded="false">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-item nav-link" onclick="return confirm('etes-vous sur de vouloir supprimer ce commentaire ?')" href="<?= "index.php?controller=backEnd&action=deleteCommentReported&idComment=" . $commentReports->getIdComment(); ?>">Supprimer</a>
            <a class="nav-item nav-link" href="<?= "index.php?controller=backEnd&action=commentIgnored&idComment=" . $commentReports->getIdComment(); ?>">Ignorer</a>
          </div>
        </div>
      </nav>
    </div>
  </div>
<?php endforeach; ?>
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>