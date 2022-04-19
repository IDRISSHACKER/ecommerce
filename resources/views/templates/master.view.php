<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <title><?= $title ?></title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/master.css" />
  <link rel="stylesheet" href="https://use.typekit.net/yig4jdx.css">
</head>
<noscript>veillez activer le javascript</noscript>

<body class="bg-light">
  <nav class="navbar navbar-expand-lg navbar-light bg-default">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <a class="navbar-brand" href="index.php">MarketPlace</a>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
          </li>
        </ul>
        <div class="second-menu">
          <?php if (!isset($_SESSION["userId"])) { ?>
            <a href="index.php?view=admin-upload" class="icon-simple size-minus">
              <img src="files/icons/card.svg" alt="" class="icon">
            </a>
            <a href="index.php?view=login" class="btn btn-default">
              Se connecter
            </a>
          <?php } else { ?>
            <a href="index.php?view=admin-upload" class="icon-simple">
              <img src="files/icons/upload.svg" alt="" class="icon">
            </a>
            <a href="index.php?view=admin-upload" class="icon-simple size-minus">
              <img src="files/icons/app.svg" alt="" class="icon">
            </a>
            <a href="index.php?view=admin-upload" class="icon-simple size-minus">
              <img src="files/icons/card.svg" alt="" class="icon">
            </a>
            <a href="index.php?view=logOut" class="icon-default">
              <img src="files/icons/user.svg" alt="" class="icon">
            </a>
        </div>
      <?php } ?>
      </div>
    </div>
  </nav>
  <main class="pt-2 mt-2 m-default">
    <?= $view  ?>
  </main>
</body>

</html>