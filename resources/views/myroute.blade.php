<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
body {
    background-image: url('https://media.giphy.com/media/Qs0QEnugOy0xIsFkpD/giphy.gif');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
}

.content {
    width: 500px;
    height: 600px;
    background-color: rgba(255, 255, 255, 0.8);
    text-align: center;
    border: 5px dashed #0a1af3;
    padding-top: 10px;
    margin: 90px 25px;
    transition: 1s;
    
}

.content:hover {
    background-color: rgba(81, 233, 182, 0.733);
    box-shadow: 20px 20px #000000b7;
}

.content:hover {
    transform: scale(1.3);
}
</style>
<center>

    <body>
        <div class="content">
            <?php
    $multiplier;
    $numberOfMultiples = 24;
    ?>

            <h1>สูตรคูณแม่ <?php echo $multiplier; ?> </h1>
            <?php
        for ($i = 1; $i <= $numberOfMultiples; $i++) {
            $result = $multiplier * $i;
            echo "$multiplier x $i = $result<br>";
        }
        ?>



        </div>


    </body>

</center>


</html>