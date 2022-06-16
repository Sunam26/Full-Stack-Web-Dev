<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <center>
        <h1>
            First PHP Page
        </h1>

         <!-- Embedding PHP in HTML -->
        <!-- Output from HTML -->
        <h2>
            Hello From HTML
        </h2>
        <!-- Output from php -->
        <h2>Hello from 
            <?php
                $msg = "php";
                echo $msg;
            ?>
        </h2>
        <!-- string handling -->
        <h2>
            <?php
                $msg = "My Name is Sunam";
                echo strlen($msg) . "<br>";
                echo str_word_count($msg);
            ?>
        </h2>

        <!-- php arrays -->
        <div>
            <h3>Displaying Students</h3>
            <div style="font-size:16px;">
                <?php
                    $students = [
                        'Sunam' => 26,
                        'Afrin' => 05,          //Array keys and values are represented using this format
                        'Neon'  => 70
                    ];
                    foreach($students as $name => $roll){   //Variable names of keys and value can be choosen by the user. Its not fixed
                        echo "Name : " . $name  . "     " . " Roll : " . $roll . "<br>";
                    }
                ?>
            </div>
        </div>
    </center>

   
    
</body>
</html>
