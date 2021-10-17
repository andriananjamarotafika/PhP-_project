
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
            <h1 style="text-align: center;" class="my-3">Formulaire POST</h1>
            <form  method="POST" action="traitement.php">
                <div>
                    <label for="nom" class="form-label">Nom</label>
                    <input type="text" class="form-control" name="nom" id="nom" required>
                </div>
                <div>
                    <label for="prenom" class="form-label">Prenom</label>
                    <input type="text" class="form-control" name="prenom" id="prenom" required>
                </div>
                <div>
                    <label for="ddn" class="form-label">Date de naissance</label><input type="date" class="form-control" name="ddn" id="ddn" required><br>
                </div>
                <div>
                    <p>Sexe</p>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="sexe" id="male" value="Monsieur" checked>
                        <label class="form-check-label" for="male">Male</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="sexe" value="Madame" id="femelle" >
                        <label class="form-check-label" for="femelle">Femelle</label>
                    </div>
                </div>
                <div class="mt-3">
                    <label for="exampleColorInput" class="form-label">Couleur préféré</label>
                    <input type="color" class="form-control form-control-color" name="couleur" id="exampleColorInput" value="#563d7c" title="Choose your color">
                </div>
                <div class="mt-3">
                    <label for="ville" class="form-label">Ville</label>
                    <input type="text" class="form-control" name="ville" id="ville" required>
                </div>
                <div class="mt-3">
                    <label for="reg" class="form-label">Region</label>
                    <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="reg">
                        <option value="Antananarivo" selected>Antananarivo</option>
                        <option value="Toamasina">Toamasina</option>
                        <option value="Mahajanga">Mahajanga</option>
                        <option value="Fianaratsoa">Fianaratsoa</option>
                        <option value="Toliara">Toliara</option>
                        <option value="Antsiranana">Antsiranana</option>
                        <option value="Taolagnaro">Taolagnaro</option>
                    </select>
                    <div id="reg" class="invalid-feedback">
                        SVP Entrer une region valide
                    </div>
                </div>
                <div>   
                    <button class="btn btn-primary" type="submit">Envoyer</button>
                </div> 
            </form>          
        </div>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>
