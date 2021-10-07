<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String & Array</title>
    <style>
        *{
            font-size: 24px;
            font-family:Arial, Helvetica, sans-serif;
        }
    </style>

</head>
<body>
    <?php
    $nama = " AHAMMAD BIN ABDULLAH";
    echo $nama[3]; # M
    echo $nama[0]; # A
    echo $nama[1]; # H
    echo $nama[0]; # A
    ?>
    <hr>
     
    <?php
    $pelajar[0] = 'AHAMMAD';
    $pelajar[1] = 'BIN';
    $pelajar[2] = 'ABDULLAH';

    for ($x = 0; $x < 3; $x++) {
        echo $pelajar[$x] . ' ';

    }
    echo '<hr>';

    foreach ($pelajar as $pel) {
        echo $pel . ' ';
    }
    echo '<hr>';

    $pelajar = implode(' ', $pelajar);
    echo $pelajar;
    echo '<hr>';

    # explode()
    $ptss = 'PLITEKNIK TUANKU SYED SIRAJUDDIN';
    $kata = explode(' ', $ptss);
    echo $kata[2];
    ?>
    

    ?>
</body>
</html>