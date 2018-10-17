<?php

require __DIR__ . '/functions.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Quote Generator</title>
</head>

<body>
    <div class='quoteGenerator'>

        <h2><?php echo getRandomQuote(); ?></h2>

    </div>
</body>

</html>