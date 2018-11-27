<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Années Bissextile</title>
</head>
<body style="text-align: center">
    <h1>Années bissextiles</h1>
    <form action="" method="post" style="margin-bottom: 25px">
        <input type="number" name="year" placeholder="entrez une année" required>
        <input type="submit" name="submit" value="Verifier">
    </form>
</body>
</html>


<?php

if(isset($_POST['submit'])) {
    if(isset($_POST['year'])) {
        $year = $_POST['year'];
        $first_verif = $year%4;
        $second_verif = $year%100;
        $third_verif = $year%400;

        if($first_verif == 0) {
            if($second_verif != 0) {
                echo 'L\'année <span style="color: lime; font-weight: bold">' . $year . '</span> est une année bissextile.';
            }
            else {
                if($third_verif == 0) {
                    echo 'L\'année <span style="color: lime; font-weight: bold">' . $year . '</span> est une année bissextile.';
                }
                else {
                    echo 'L\'année <span style="color: red; font-weight: bold">' . $year . '</span> n\'est pas une année bissextile.';
                }
            }
        }
        else {
            echo 'L\'année <span style="color: red; font-weight: bold">' . $year . '</span> n\'est pas une année bissextile.';
        }

    }
}

?>  