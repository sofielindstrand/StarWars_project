<html>
    <head>
        <title>Star Wars - Planeter</title>
        <!-- style -->
        <style>
        img{
            width:200px;
        }
        h1   {
              margin: 30px;
              margin-left:450px; 
              }
        nav {
            margin:10px;
            font-size: 20px;
            background-color: grey;
            padding:20px;
        }
        </style>
    </head>
    <meta charset="UTF8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"> 
    <body>

    <h1>Star Wars Movie Database</h1>
     <!-- navigering -->
    <nav>
         <a href ="index.php">Start</a>
         <a href ="karaktarer.php">Karaktärer</a>
         <a href ="planeter.php">Planeter</a>
    </nav> 
    <!-- "undertitel" -->
    <h2>Planeter</h2>
    <!-- start php -->
<?php
// hämtar data från planeter.json 
    $file = file_get_contents("planeter.json");
    $data = json_decode($file, true);
    $index = 0;
 //skriver ut numrerad lista 
    foreach($data as $item){
        $index++;
        echo "$index. $item <br>";
     }
?>

    </body>
</html>