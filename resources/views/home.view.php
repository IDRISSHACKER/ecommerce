<div class="container">
	<div class="row">
        <?php 
            foreach($articles as $article){
        ?>
        <div class="col-sm-6 col-lg-3">
            <a href="index.php?view=article&article=<?= $article['id'] ?>" class="article">
                <div class="card card-default">
                    <div class="card-content">
                        <div class="card-header img-h" style="background: url(files/post/<?= $article['image'] ?>)">
                        </div>
                        <div class="card-body">
                            <h4 class="article-title"><?= $article['titre'] ?></h4>
                            <h6 class="article-price card-article-price"><?= $article['prix'] ?> FCFA</h6>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <?php } ?>

    </div>
</div>