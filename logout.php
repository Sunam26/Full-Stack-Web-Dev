<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php 
        session_start();
    ?>
</head>
<body>
    Before Logout : 
    <?php 
        echo '<pre>';
        print_r($_SESSION);
        echo '</pre>';

        session_unset();

        echo '<pre>';
        print_r($_SESSION);
        echo '</pre>';

    ?>
</body>
</html>