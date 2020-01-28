<?php
session_start()
?>
<html>
    <head>
    <title>Probeer/Vang</title>
        <body>
                <form method="POST">
                    <input type="number" id="number" name="sessie" required>
                    <input type="submit" value="Submit" size="5">
                </form>
            <?php
                function countDown($teller){
                    if ($teller > 10){
                        throw new Exception("Het getal kan niet hoger als tien!");
                    }elseif($teller <= 0){
                        throw new Exception("Het getal kan niet in de min!");
                    }elseif ($teller >= 0){
                        for ($i = $teller;$i > 0;$i--){
                            echo "$i";
                        }
                    }
                }
                if (isset($_POST["sessie"])){
                    try {
                        countDown($_POST["sessie"]);
                    }catch (Exception $error) {
                        echo 'Caught exception: ' . $error->getMessage();
                    }
                }
            ?>
        </body>
    </head>
</html>
