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
        <form method="post" action="" >
                <div class="form-group row">
                        <div class="col-sm-10">
                            <input type="text" name="txtnom" class="form-control" placeholder="Nom">
                        </div>

                </div>
                <div class="form-group row">
                                <div class="col-sm-10">
                                <input type="text" name="prenom" class="form-control" placeholder="prénom">
                </div>
                 </div>
                <div class="form-group row">
                                <div class="col-sm-10">
                                    <input type="email" name="Adresse" class="form-control" placeholder="Adresse">
                                </div>
                </div>
                <div class="form-group row">
                        <div class="col-sm-10">
                            <input type="password" name="txtpwd" class="form-control" placeholder="Mot De Passe">
                        </div>
                </div>
                <div class="form-group row">
                        <div class="col-sm-10">
                            Date de Naissance:
                            <input type="date" class="form-control" class="wiou">
                        </div>

                </div>
               
                    <label class="col-sm-2"></label>
                    <input type="submit" name="btnAjout" value="S'inscrire" class="btn btn-primary">
                    <label class="col-sm-2"></label>
                    <input type="reset" name="btnAjout" value="Annuler" class="btn btn-danger">
                
        </form>

</div>

</body>
</html>