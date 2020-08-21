<html>
    <head>
        <title>Star Wars</title>
        <!-- style -->
        <style>
            img {
                width:200px;
                }
            h1 {
                margin: 30px;
                margin-left:450px; 
               }
            nav {
                margin:10px;
                font-size: 20px;
                background-color: grey;
                padding:20px;
                }
            form {
                margin-top:-53px;
                margin-left:1000px;
                }
            div {
                margin: 20px;
                margin-right:25px;
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
    <!-- sökformulär -->
    <form action="" method="post">
          Sök:
         <input type="text" name="movie_data">
         <input type="submit" name="skicka" value="Sök">
    </form>
<!-- start php -->
<?php
//Hämtar data från starwars_data
    $file = file_get_contents("starwars_data.json");
    $data = json_decode($file, true);

//Skriver ut och visar data från json fil, (ej casesensative) och om eftersökt titel finns resultaterar det i att filmen visas
    $movie_found = false; 
        foreach($data as $item){
            if (!isset($_POST["movie_data"]) || stripos($item['Titel'], $_POST["movie_data"]) !==false){
            $movie_found = true;
    ?>
<!-- använder table, tr, td  och div för att placera objekten -->
    <table>
        <tr>
        <td>
            <div><?php echo '<img src="' . $item["picurl"] . '"><br>';?></div>
        </td>
        <td>
            <div><?php echo 'Titel: ' .$item["Titel"]."<br>";?></div>
            <div><?php echo 'Reggisör: ' .$item["Reggisör"]."<br>";?></div>
            <div><?php echo 'Skapad: ' .$item["Skapad"]."<br>";?></div>
            <div><?php echo 'Episod: ' .$item["Episod"]."<br>";?></div>
            <div><?php echo 'Karaktärer: ' .$item["Karaktärer"]."<br>";?></div>
            <div><?php echo 'Beskrivning: ' .$item["Beskrivning"]."<br>";?></div>
        </tr>
        </td>
        </table>
<?php    
    }
}
//skriver ut "felmeddelandet" om det eftersökta titeln inte finns
    if (!$movie_found){
        echo "Filmen hittades inte!"; 
    }   
?>

    </body>
</html>