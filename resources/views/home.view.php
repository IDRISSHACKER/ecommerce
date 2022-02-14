<div class="container">
    <div class="row">
        <?php
        foreach ($articles as $article) {
        ?>
            <div class="col-sm-12 col-md-4 col-lg-3">
                <a href="index.php?view=article&article=<?= $article['id'] ?>" class="article">
                    <div class="card card-default oc-card-shadow">
                        <div class="card-content">
                            <div class="card-header img-h" style="background: url(files/post/<?= $article['image'] ?>)">
                            </div>
                            <div class="card-body">
                                <h6 class="article-title"><?= $article['titre'] ?></h6>
                                <p class="article-price card-article-price"><?= $article['prix'] ?> FCFA</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        <?php } ?>

    </div>
</div>