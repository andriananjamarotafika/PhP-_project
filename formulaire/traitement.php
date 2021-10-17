<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>PHP devoir</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>
        <div class="card my-5 mx-5">
            <h5 class="card-header fs-3">Voici le r&eacute;sultat du la redir&eacute;ction du formulaire</h5>
            <div class="card-body">
                <p class="card-text text-break fs-4">
                    Bonjour  <?php echo $_POST['sexe'] ?> <?php echo $_POST['prenom'].' '.$_POST['nom']; ?>
                    Merci de m'avoir donner une opportunit&eacute; d' exploiter le langage de programmation php.
                    Pardonnez-moi de présenter quelques  connaissance &agrave; propos de vous :
                    Vous &ecirc;tes n&eacute;e le <?php echo $_POST['ddn'] ?>.V&ocirc;tre couleur pr&eacute;f&eacute;r&eacute; est 
                    le  <?php echo $_POST['couleur'] ?> traduisez en hexad&eacute;cimal.Vous habitez dans la ville de  <?php echo $_POST['ville'] ?>
                    dans le r&eacute;gion de  <?php echo $_POST['reg'] ?> 
                </p>
                <div>
                    <a href="index2.php" class="btn btn-success">Revenir dans la formulaire</a>
                    <a href="index.php" class="btn btn-primary">Testez la m&eacute;thode GET</a>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>
