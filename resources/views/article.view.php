<?php
$article_id = $_GET["article"];
$article = Articles::getArticle($article_id);
?>
<div class="container">
    <div class="row">
        <div class="col-sm-8">
            <img src="files/post/<?= $article['image'] ?>" class="w-100" />
        </div>
        <div class="col-sm-4">
            <div class="card oc-elevation-0">
                <div class="card-body">
                    <h5 class="article-title"><?= $article['titre'] ?></h5>
                    <hr />
                    <h5 class="info"> En stock <?= $article['qte'] ?> </h5>
                    <h5 class="info"> Prix: <?= $article['prix'] ?> FCFA</h5>
                    <hr />
                </div>
                <div class="card-bottom">
                    <a href="index.php?view=addCard&post=<?= $article['id'] ?>" class="btn btn-default btn-lg">Commander cet article</a>
                </div>
            </div>
        </div>
    </div>
    <br />
    <div class="row">
        <div class="card oc-elevation-0">
            <div class="card-body">
                <p class="info">
                    <?= $article['description'] ?>
                </p>
            </div>
        </div>
        <br />
    </div>
</div>