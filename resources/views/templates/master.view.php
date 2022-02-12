
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
	<title><?= $title ?></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/master.css" />
</head>
<noscript>veillez activer le javascript</noscript>
<body class="bg-light">
<nav class="navbar navbar-expand-lg navbar-light bg-light shadow">
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
      <div class="d-flex">
    <?php if(!isset($_SESSION["userId"])){ ?>
        <a href="index.php?view=login" class="btn btn-primary">login</a>
    <?php }else{ ?>
        <a href="index.php?view=admin-upload" class="btn btn-default" >Uploader</a>
        <a href="index.php?view=login" class="btn btn-outlined-success"><?=$_SESSION["user"]["nom"]?></a>
	  </div>
    <?php } ?>
    </div>
  </div>
</nav>
	<main class="pt-2">
		<?= $view  ?>
	</main>
</body>
</html>
