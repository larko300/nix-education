<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nix education</title>
</head>
<style>
    table {
        width: auto;
        margin: 0 auto;
        padding-top: 15%;
    }
    td, th {
        padding: 4px;
        border: 1px solid black; /* Параметры рамки */
    }
</style>
<body>
<table>
    <?php for($row = 0; $row < 2;$row++){ ?>
        <tr>
            <?php
            if($row === 0){
                $col = 1;
                $temp = 5;
            }else {
                $col = 6;
                $temp = 10;
            }
            for($col ;$col <= $temp;$col++){ ?>
                <td>
                    <?php for($i = 1;$i <= 10;$i++){
                        echo $col . " x " . $i . " = " . $i * $col . "<br>";
                    } ?>
                </td>
            <?php } ?>
        </tr>
    <?php } ?>
</table>
</body>
</html>