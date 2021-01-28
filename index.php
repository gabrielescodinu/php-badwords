<!-- Creare una variabile con un paragrafo di testo.
Visualizzare a schermo il paragrafo con la relative lunghezza e sostituire la badword passata in GET con tre *. -->

<?php
// creo la variabile che conterrà il testo
$testo = 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Suscipit atque hic eum placeat corporis nesciunt.';
// creo la variabile per censurare la parola inserita manualmente dal client
$censura = $_GET["badword"];
// inizializzo la variabile per sostituire la parola scelta dall'utente con '***'
$parolaCensurata = str_replace($censura, "***", $testo);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Kristi" rel="stylesheet">
    <title>Bad Words</title>
    <style>
        *{
            font-family: "Lato";
        }
    </style>
</head>
<body>
    <h1>Testo Originale</h1>
    <p><?php echo $testo ?></p>
    <p>La lunghezza del testo è di <?php echo strlen($testo) ?> caratteri.</p>

    <h1>Testo censurato</h1>
    <p><?php echo $parolaCensurata ?></p>
</body>
</html>