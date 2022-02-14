<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <?php if (@$success) { ?>
                <div class="alert alert-success">Votre article à bien été publié</div>
            <?php } ?>
            <?php if (@$error) { ?>
                <div class="alert alert-danger"><?= @$msgError ?></div>
            <?php } ?>
            <form method="post" action="index.php?view=admin-upload" enctype="multipart/form-data">
                <div class="card">
                    <div class="card-header">
                        <h4>Ajouter un nouvel article</h4>
                    </div>
                    <div class="card-body">
                        <div class="input-group">
                            <input type="text" class="form-control" name="title" , placeholder="Entrez le titre de l'article" />
                        </div>
                        <br />
                        <div class="input-group">
                            <input type="number" class="form-control" name="prix" , placeholder="Entrez le prix de l'article" />
                            <input type="number" class="form-control" name="qtt" , placeholder="Entrez la quantitée" />
                        </div>
                        <br />
                        <div class="input-group">
                            <input type="file" class="form-control" name="img" accept="image/png, image/jpg, image/jpeg" />
                        </div>
                        <br />
                        <div class="input-group">
                            <span class="input-group-text">Description de l'article</span>
                            <textarea class="form-control" name="desc" rows="5"></textarea>
                        </div>
                    </div>
                    <div class="div">
                        <button name="upload" class="btn btn-default" type="submmit">mettre en ligne</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>