<?php
    if(
    isset($_POST['destinataire']) && 
    isset($_POST['expediteur']) && 
    isset($_POST['sujet']) && 
    isset($_POST['message'])) {
        $destinataire = trim($_POST['destinataire']);
        $expediteur = trim($_POST['expediteur']);
        $sujet = trim($_POST['sujet']);
        $message = trim($_POST['message']);

        // On retravaille l'expediteur pour qu'il soit mieux accepté par les serveurs mail
        // les ':' doivent etre collés au 'From'
        $expediteur = 'From: ' . $expediteur;

        //pour envoyer des mails : fonction prédéfinie mmail()
        //mail(destinataire, sujet, message, expediteur);
        //pour aller plus loin :
        // PHPMailer : https://github.com/PHPMailer/PHPMailer
        // Symfony Mailer : https://symfony.com/doc/current/mailer.html
        mail($destinataire, $sujet, $message, $expediteur);
    }
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <header class="p-5 bg-primary">
        <h1 class="p-3 text-white text-center">Contact</h1>
    </header>
    <div class="container">
        <div class="row">
            <div class="col-sm-6 mx-auto">
                <form method="post" class="mt-5 border p-3">
                    <div class="mb-3">
                        <label for="destinataire">Destinataire</label>
                        <input type="texte" name="destinataire" id="destinataire" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="expediteur">Expéditeur</label>
                        <input type="texte" name="expediteur" id="expediteur" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="sujet">Sujet</label>
                        <input type="texte" name="sujet" id="sujet" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="message">Message</label>
                        <textarea name="message" id="message" class="form-control" rows="5"></textarea>
                    </div>
                    <button type="submit" class="btn btn-outline-primary w-100">😀 Nous contacter</button>
                </form>
            </div>
        </div>
    </div>    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>