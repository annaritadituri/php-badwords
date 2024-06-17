<?php

$paragraph = $_GET["paragraph"];
$length_p = strlen($paragraph);
$word = $_GET["word"];
$good_paragraph = str_replace($word, '***', $paragraph);
$length_g = strlen($good_paragraph);

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords Show</title>
</head>
<body>
    <p>
        Il paragrafo inviato è lungo: <?php echo $length_p ?>
    </p>
    <p>
        <?php echo $paragraph ?>
    </p>
    <p>
        Il paragrafo inviato è lungo: <?php echo $length_g ?>
    </p>
    <p>
        <?php echo $good_paragraph ?>
    </p>
</body>
</html>