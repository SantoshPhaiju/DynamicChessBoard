<?php


echo "Dynamic Chess Board here.";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chess Board is here</title>
    <style>
        table{
            border: 1px solid black;
            border-spacing: 0ch;
        }
        tr{
            border-spacing: 0ch;

        }
        td{
            border: 1px solid black;
            padding: 20px;
            border-spacing: 0ch;
        }
        .bg-color{
            background-color: black;
        }
    </style>
</head>

<body>
    <br>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
        <input type="number" name="num" id="num" required>
        <input type="submit" name="submit" value="GenerateChessBoard">
    </form>

    <br>

    <table>
        <?php

        if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] == "POST") {
            $num = $_POST['num'];

            for ($row = 1; $row <= $num; $row++) {
                echo "<tr>";

                for($col = 1; $col <= $num; $col++){
                    if(($row + $col) % 2 == 0){
                        echo "<td class='bg-color'> </td>";
                    }else{
                        echo "<td> </td>";
                    }
                }

                echo "</tr>";
            }
        }


        ?>


    </table>
</body>

</html>