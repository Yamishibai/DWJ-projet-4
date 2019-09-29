<?php $title = $billet->getTitre(); ?>


<?php ob_start(); ?>

<!-- Page Contenu -->
<div class="container">

  <div class="row">

    <!-- Post Contenu Billet-->
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


<div class="card my-4 mr-5 ml-5">
  <h5 class="card-header">Laisser un commentaire :</h5>

  <div class="card-body">

    <form action="index.php?controller=billet&action=ajouteCommentaire&amp;idBillet=<?= $billet->getIdBillet(); ?>" method="post">

      <div class="form-group">

        <div id="error_post"></div>


        <label for="pseudo">Pseudo :</label>
        <input type="text" class="form-control" id="pseudo" name="pseudo" />

        <label for="commentaire" class="mt-2">Commentaire :</label>
        <textarea class="form-control" rows="3" id="commentaire" name="commentaire" placeholder="Votre commentaire ici."></textarea>
      </div>

      <button id="submitComment" type="submit" class="btn btn-primary">Poster</button>

    </form>
  </div>

</div>


<?php foreach ($comments as $comment) : ?>


  <!-- Single Comment -->
  <div class="media mb-4 ml-5">
    <div class="media-body">
      <h5 class="mt-0"><?= htmlspecialchars($comment->getPseudo()); ?></h5>
      <?= htmlspecialchars($comment->getCommentaire()); ?>
      <br>
      <i>Posté le <?= htmlspecialchars($comment->getDateComment()); ?></i>
      <?php if ($comment->getSignalement()) {
          ?>
        <p>Ce commentaire a déjà été signalé</p>
      <?php
        } else {
          ?>
        <p><a href="<?= "index.php?controller=billet&action=commentReported&idComment=" . $comment->getIdComment(); ?>">signaler</a></p>
      <?php
        } ?>
    </div>
  </div>

<?php endforeach; ?>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>