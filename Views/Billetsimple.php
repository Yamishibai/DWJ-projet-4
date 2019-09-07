<title> <?php echo $title = $billet->getTitre(); ?></title>

<?php ob_start(); ?>

 <!-- Page Content -->
 <div class="container">

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

    <p><?php echo $billet->getContenu() ?></p>

  </div>
  </div>
</div>



<div class="card my-4">
<h5 class="card-header">Leave a Comment:</h5>

<div class="card-body">

  <form action="index.php?controller=billet&action=ajouteCommentaire&amp;idBillet=<?= $billet->getIdBillet(); ?>" method="post">
  
  <div class="form-group">

  <p class="error-post"> Veuillez remplir le champ Pseudo et Commentaire </p>
  <p class="error-pseudo"> Veuillez remplir le champ Pseudo  </p>
  <p class="error-commentaire"> Veuillez remplir le champ Commentaire  </p>


    <label for="pseudo">Pseudo :</label>
    <input type="text" class="form-control" id="pseudo" name="pseudo" />

    <label for="commentaire">Commentaire :</label>
    <textarea class="form-control" rows="3" id="commentaire" name="commentaire" rows="6" cols="35" placeholder="Votre message ici."></textarea>
    </div>

    <button id="submitComment" type="submit" class="btn btn-primary">Poster</button>

  </form>
  </div>

</div>
 




<?php foreach ($comments as $comment) : ?>


 <!-- Single Comment -->
 <div class="media mb-4">
          <div class="media-body">
            <h5 class="mt-0"><?= htmlspecialchars($comment->getPseudo()); ?></h5>
            <?= htmlspecialchars($comment->getCommentaire());?>
            <br> 
            <i>Posté le <?= htmlspecialchars($comment->getDateComment());?></i>
            
          </div>
        </div>

<?php endforeach; ?>






<?php $content = ob_get_clean(); ?>





<?php require('template.php'); ?>