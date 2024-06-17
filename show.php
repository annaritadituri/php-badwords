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

    <!--style-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="bg-info-subtle">

    <div class="container text-center mt-5">

        <p>
            Il paragrafo inviato è lungo: <?php echo $length_p ?>
        </p>
        <p>
            <?php echo $paragraph ?>
        </p>
        <p>
            Il paragrafo censurato è lungo: <?php echo $length_g ?>
        </p>
        <p>
            <?php echo $good_paragraph ?>
        </p>

    </div>
</body>
</html>