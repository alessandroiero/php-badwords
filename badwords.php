<!-- si preferisce sempre inserire php all'inizio e non dentro al body -->

<?php 
    var_dump($_GET);

    $badword = $_GET['badword'];
    $text = $_GET['text-start'];
    $length_text = strlen($text);
    $text_clean = str_replace($badword, '***', $text);
    $length_text_clean = strlen($text_clean);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Badwords Elaborato</title>
</head>
<body>
    <h1>Badwords</h1>
    <p>Parola da sostituire: 
        <?php echo $badword; ?>
    </p>
    <p>Testo: 
        <?php echo $text; ?>
    </p>
    <p>Lunghezza testo: 
        <?php echo $length_text;?>
        caratteri
    </p>
    <h2>Testo ripulito</h2>
    <p>Risultato: 
        <?php echo $text_clean;?>
    </p>
    <p>Lunghezza testo risultato: 
        <?php echo $length_text_clean;?> caratteri
    </p>
</body>
</html>