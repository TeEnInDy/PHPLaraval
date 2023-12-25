<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<center>

    <body>
        <div>
            <?php
    $multiplier;
    $numberOfMultiples = 24;
    ?>

            <h2>สูตรคูณแม่ <?php echo $multiplier; ?></h2>
            <ul>
                <?php
        for ($i = 1; $i <= $numberOfMultiples; $i++) {
            $result = $multiplier * $i;
            echo "$multiplier x $i = $result<br>";
        }
        ?>
            </ul>

        </div>


    </body>

</center>


</html>