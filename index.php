<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>

    <!--style-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="bg-info-subtle">

    <div class="container text-center px-5">

        <h1 class="text-info my-5">Scrivi un paragrafo da censurare</h1>

        <form action="show.php" method="GET">

            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingTextarea2" name="paragraph">
                <label for="floatingTextarea2">Paragraph</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingTextarea" name="word">
                <label for="floatingTextarea">Word to hide</label>
            </div>
            <div>
                <button type="submit" class="btn btn-info text-white p-3 px-4">Invia</button>
            </div>

        </form>

    </div>

    
    
</body>
</html>