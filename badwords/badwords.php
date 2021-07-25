<?php
    $p = "<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facilis minus, nostrum architecto, minima fuga iste earum possimus, maxime atque nulla ut debitis tempore praesentium rerum incidunt? Repellendus minima sapiente ad atque aspernatur iste asperiores vero animi id, eum iure dicta, nesciunt ratione maxime. Animi saepe dolorem consequuntur exercitationem. Deserunt, quaerat!</p>";
    $lenp = strlen($p);
    $badWord = $_GET["bw"];
    $goodword = "***";
    $newp = str_replace($badWord, $goodword, $p);
    $lennewp = strlen($newp);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bad Words</title>
</head>
<body>

    <p><?php echo $p?></p>
    <strong> Lunghezza paragrafo: <?php echo $lenp ?> </strong>

    <p><?php echo $newp?></p>
    <strong> Lunghezza paragrafo: <?php echo $lennewp ?> </strong>


</body>
</html>


<!-- Creare una variabile con un paragrafo di testo a vostra scelta. Stampare a schermo il paragrafo e la sua lunghezza. Una parola da censurare viene passata dall'utente tramite parametro GET. Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare.
 -->