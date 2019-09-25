<!DOCTYPE html>
<html lang="zxx">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width">
  <title><?= $title ?></title>
  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="public/css/blog-post.css" rel="stylesheet">
  <link rel="icon" href="public/images/icon-2727224_960_720" />
  <script src='https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js' referrerpolicy="origin"></script>
  <script>
// on modal show, focus the editor


    tinymce.init({
      selector: '#editor',
      plugins: 'paste, image code',
      toolbar: 'undo redo | image code | bold italic | alignleft aligncenter alignright | styleselect',

      
      // without images_upload_url set, Upload tab won't show up
      images_upload_url: 'upload.php',
      

      // override default upload handler to simulate successful upload
      images_upload_handler: function(blobInfo, success, failure) {
        var xhr, formData;

        xhr = new XMLHttpRequest();
        xhr.withCredentials = false;
        xhr.open('POST', 'upload.php');

        xhr.onload = function() {
          var json;

          if (xhr.status != 200) {
            failure('HTTP Error: ' + xhr.status);
            return;
          }

          json = JSON.parse(xhr.responseText);

          if (!json || typeof json.location != 'string') {
            failure('Invalid JSON: ' + xhr.responseText);
            return;
          }

          success(json.location);
        };

        formData = new FormData();
        formData.append('file', blobInfo.blob(), blobInfo.filename());

        xhr.send(formData);
      },

    });
  </script>

</head>

<body>​




  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">

      <?php if (empty($_SESSION['pseudoAdmin'])) {
        echo '<a class="navbar-brand" href="/blog/">Blog Jean Fortoche</a>';
      } else {
        echo '<a class="navbar-brand" href="/blog/">  Bonjour ' . $_SESSION['pseudoAdmin'] . '</a>';
      } ?>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">

          <?php if (empty($_SESSION['pseudoAdmin'])) {
            echo '<li class="nav-item active"><a class="nav-link" href="/blog/">Accueil
                <span class="sr-only">(current)</span></a></li>';
          } else {
            echo '
                      <li class="nav-item active dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Tableau de gestion </a>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="index.php?controller=backEnd&action=checkLogin">Gestion des billets</a>
                          <a class="dropdown-item" href="index.php?controller=backEnd&action=getCommentReported">Commentaires signalés</a>
                        </div>
                      ';
          } ?>


          <?php if (empty($_SESSION['pseudoAdmin'])) {
            echo '<li class="nav-item"><a class="nav-link" href="index.php?controller=billet&action=accueilLogin">Connexion</a></li>';
          } else {
            $display = "none";
          } ?>
          <?php if (!empty($_SESSION['pseudoAdmin'])) {
            echo '<li class="nav-item"><a class="nav-link" href="index.php?controller=backEnd&action=logout">Logout</a></li>';
          } else {
            $display = "none";
          } ?>
        </ul>
      </div>
    </div>
  </nav>



  <?= $content ?>


  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="public/js/ErrorPostComment.js"></script>
  <script src="public/js/main.js"></script>
</body>

</html>