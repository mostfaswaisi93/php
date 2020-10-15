<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foreach</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body>

    <div class="form-group">
        <label for="select">المدينة</label>
        <select class="form-control" id="select">
            <?php

            $i = array('Gaza', 'Rafah', 'Nasser');
            foreach ($i as $x) {
                echo "<option>" . $x . "</option>";
            }

            ?>
            <option></option>
        </select>
    </div>

</body>

</html>