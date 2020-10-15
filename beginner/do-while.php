<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Do While</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body>

    <?php
    $i = 1;
    while ($i <= 10) {
        echo $i . "<br>";
        $i++;
    }
    echo "<hr>";
    $x = 1;
    do {
        echo $x++ . "<br>";
        $x++;
    } while ($x <= 10);
    ?>

</body>

</html>