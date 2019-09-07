<?php $title = "Billet simple pour l'Alaska"; ?>

<?php ob_start(); ?>
<?php foreach ($billets as $billet) : ?>
  <h3>
    <?= $billet->getTitre(); ?>
    posté le : <?= $billet->getDateBillet(); ?>
  </h3>
  <div class="billet"><?= substr($billet->getContenu(), 0, 700); ?>... <em><a href="<?= "index.php?controller=billet&action=afficheBilletSimple&idBillet=" . $billet->getIdBillet(); ?>"><input type="button" class="btn btn-info" value="Lire plus"></a></em>
    <em><a href="<?= "index.php?controller=backEnd&action=effaceBillet&idBillet=" . $billet->getIdBillet(); ?>"><input type="button" class="btn btn-danger" value="Effacer"></a></em><em><a href="<?= "index.php?controller=backEnd&action=billetModifier&idBillet=" . $billet->getIdBillet(); ?>"><input type="button" class="btn btn-success" value="Changer"></a></em><em><a href="index.php?controller=backEnd&action=createBillet"><input type="button" class="btn btn-primary" value="Créer"></a></em></div>

<?php endforeach; ?>


<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>