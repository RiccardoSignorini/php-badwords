<?php

    $sentence = $_GET["sentence"];
    $word = $_GET["word"];

    $lenght = strlen($sentence);
 
    if (strpos($sentence, $word) !== false) {
        $results = str_replace($word, "***", $sentence);
    }

    $lenghtResults = strlen($results);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Censur</title>
    <!-- LINK BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- LINK FONTAWSOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
</head>
<body>

    <div class="container text-center">
        
        <h2 class="my-4">
            Risultati
            <i class="fa-solid fa-arrow-down mx-2"></i>
        </h2>
        <div class="my-2">
            <span>La tua frase è: <strong><?php echo $sentence?></strong></span>
            <i class="fa-solid fa-arrow-right mx-2"></i>
            <span>Lunghezza: <?php echo $lenght?></span>    
        </div>
        <div class="my-2">
            <span>La parola che vuoi censurare è: <strong><?php echo $word?></strong></span>    
        </div>

        <div>
            <span>Frase censurata: <strong><?php echo $results?></strong></span>
            <i class="fa-solid fa-arrow-right mx-2"></i>
            <span>Lunghezza attuale: <?php echo $lenghtResults?></span>
        </div>
            
    </div>
    

    <!-- BOOTSTRAP JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>