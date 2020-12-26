# nh_ds_sl
<?php
include "connect.php";
?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>inscription</title>
    <link rel="stylesheet" type="text/css" href="css/form.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    </head>
    <body> 
        
        <div class="container col-md-5 col-md-offset-3">
        <div class="panel panel-info">
                <div class="panel-heading">
                    <h1 align="center">S'inscrire</h1>
                </div>
        <div class="panel-body">
        <form method="POST" action="insertionformulaire.php">
        <input type="button" value="< Blog" name="B1" class="btn btn-success" onclick="window.document.location.href='blog.php'"><br><br>
                <div class="form-group row">
                    
                <div class="form-group row">
                                <div class="col-sm-10">
                                    <input type="email" name="adresse" class="form-control" placeholder="Adresse Email">
                                </div>
                </div>
                <div class="form-group row">
                        <div class="col-sm-10">
                            <!--pattern c pour le contenu de zone de text il faut que le mot de passe contient que de Number Et alphabet
                        avec un longeur minimum 6 -->
                            <input type="password" name="pwd" class="form-control" placeholder="Mot De Passe" pattern=[a-z0-9]{6,}>
                        </div>
                </div>
               
                    <label class="col-sm-2"></label>
                    <input type="submit" name="btnAjout" value="S'inscrire" class="btn btn-primary">
                    <label class="col-sm-2"></label>
                    <input type="reset" name="btnAjout" value="Annuler" class="btn btn-danger">
                
        </form>
        
</div>
<input type="button" value="Crée Un Compte" name="B1" class="btn btn-success" onclick="window.document.location.href='Formulaire.php'">
</body>
</html>
