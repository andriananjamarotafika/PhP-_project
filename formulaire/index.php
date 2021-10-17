
<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>PHP devoir</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <h1 style="text-align: center;" class="my-3">Formulaire GET</h1>
            <form action="index.php" method="GET">
                <div class="row">
                    <div class="col-sm-4">
                    </div>
                    <div class="col-sm-4">
                        <label for="nom" class="form-label">Nom</label><input type="text" class="form-control" name="nom" id="nom" placeholder="nom=Razafindrabe" value="<?php
                            if(isset($_GET['nom']))
                                echo $_GET['nom'] ;    
                            ?>">
                        <label for="prenom" class="form-label">Prenom</label><input type="text" class="form-control" name="prenom" id="prenom" placeholder="prenom=Narindra" value="<?php
                            if(isset($_GET['prenom']))
                                echo $_GET['prenom'] ;    
                            ?>">
                        <label for="ddn" class="form-label">Date de naissance</label><input type="date" class="form-control" name="ddn" id="ddn" value="<?php
                            if(isset($_GET['ddn']))
                                echo $_GET['ddn'] ;    
                            ?>">
                        <label for="mail" class="form-label">Adresse e-mail</label><input type="email" class="form-control" name="mail" id="mail" placeholder="mail=njaratianaherivola@gmail.com" value="<?php
                            if(isset($_GET['mail']))
                                echo $_GET['mail'] ;    
                            ?>">
                        <p><strong>Sexe</strong></p>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="sexe" value="male" id="male" checked>
                            <label class="form-check-label" for="male">Male</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="sexe"  value="femelle" id="femelle" >
                            <label class="form-check-label" for="femelle">Femelle</label>
                        </div>
                        <div>
                            <button class="btn btn-primary my-3" type="submit">Envoyer</button>
                            <a href="index2.php" class="btn btn-success">Testez la m&eacute;thode POST</a>
                        </div>
                    </div>
                    <div class="col-sm-4">  
                    </div>
                </div>
            </form>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>
