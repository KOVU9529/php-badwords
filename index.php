<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
//creazione variabile paragrafo
$variabile='lorem iplor dolor alicem neminlorue puslorum ante bibli';
//creazione variabile contente la funzione del conteggio numeri del paragrafo
$variabileLength=strlen($variabile);
//Parola censurata passata tramite get
$variabileGet=$_GET['variabileGet'];
//creazione variabile contenete la funzione per modificare pezzi di una stringa
$censored=str_replace($variabileGet ,'***', $variabile);
//
$variabileLengthMin=strlen($censored);
?>
<h2>Paragrafo originale</h2>
<p><?php
echo $variabile;?></p>
<h3>Lunghezza paragrafo</h3>
<span> <?php
echo $variabileLength;?></span>
<h4>Parola cercata</h4>
<span><?php
echo $variabileGet;?></span>
<h2>Paragrafo censurato</h2>
<span>
    <?php
    echo $censored;?>
</span>
<h3>Lunghezza paragrafo</h3>
<span>
    <?php
    echo $variabileLengthMin?>
</span>
</body>
</html>