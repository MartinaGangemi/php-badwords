<?php
// stampo il paragrafo e la sua lunghezza
$paragrafo = "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sequi quaerat aliquid harum ea culpa tenetur nobis, fuga eos minus veniam odio amet molestias quam. Quasi!";
$lunghezzaParagrafo = strlen($paragrafo);
var_dump( $paragrafo);
var_dump($lunghezzaParagrafo);
// tramite get creo una variabile con la parola da censurare
$censura = $_GET["censura"];
var_dump($censura);
// sostituisco $censura con gli asterischi
$paragrafoCensurato= str_replace("$censura", "***", $paragrafo);
var_dump($paragrafoCensurato)

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <h2>Paragrafo</h2>   
<p>
    <?php echo $paragrafo ?>
</p>
<h2>Lunghezza paragrafo</h2>
<p> 
    <?php echo $lunghezzaParagrafo ?>
</p>
<h2>Paragrafo censurato</h2>
<p> 
    <?php echo $paragrafoCensurato ?>
</p>
</body>
</html>