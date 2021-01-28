<!-- Creare una variabile con un paragrafo di testo.
Visualizzare a schermo il paragrafo con la relative lunghezza e sostituire la badword passata in GET con tre *. -->
<?php
//testo paragrafo

$testo = 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Suscipit atque hic eum placeat corporis nesciunt.';
$censura = $_GET["badword"];
$parolaCensurata = str_replace($censura, "***", $testo);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bad Words</title>
</head>
<body>
    <p><?php echo $testo ?></p>
    <p><?php echo strlen($testo) ?></p>
    <p><?php echo $parolaCensurata ?></p>

</body>
</html>