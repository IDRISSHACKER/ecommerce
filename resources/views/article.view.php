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
            <div class="card">
                <div class="card-body">
                    <h4 class="article-title"><?= $article['titre'] ?></h4>
                    <hr />
                    <h5 class="info"> En stock <?= $article['qte'] ?> </h5>
                    <h5 class="info"> Prix: <?= $article['prix'] ?> FCFA</h5>
                    <hr />
                </div>
                <div class="card-bottom">
                    <button class="btn btn-default btn-lg">Commander cet article</button>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <br />
        <br />
        <div class="card">
            <div class="card-body">
                <p class="info">
                    <?= $article['description'] ?> 
                </p>
            </div>
        </div>
        <br />
    </div>
</div>
