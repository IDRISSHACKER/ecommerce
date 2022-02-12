<div class="container">
    <div class="row">
        <div class="col-sm-6">
        <?php if(@$success){?>
            <div class="alert alert-success">Connexion reusis</div>
        <?php }?>
        <?php if(@$error){?>
        <div class="alert alert-danger"><?=@$errorMsg?></div>
        <?php }?>
        <form method="post" action="index.php?view=login">
            <div class="card">
                <div class="card-header">
                    <h4>Se connecter</h4>
                </div>
                <div class="card-body">
                    <div class="input-group">
                        <input  type="email" class="form-control" name="email", placeholder="Entrez votre adresse email" required>
                    </div>
                    <br />
                    <div class="input-group">
                        <input type="password" class="form-control" name="password", placeholder="Mot de passe"  required>
                    </div>
                </div>
                <div class="div">
                    <button name="login" class="btn btn-default" type="submmit">connexion</button>
                </div>
            </div>
        </form>
        </div>
    </div>
</div>