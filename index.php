<?php
    $prova = "Censura";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHPFirst</title>
    <!-- LINK BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <div class="container d-flex justify-content-center">
        <div>
            <h2 class="text-center my-4"><?php echo $prova ?></h2>    
            <div>
                <div class="my-3">
                    <label for="basic-url" class="form-label">Scrivi una frase</label>
                    <div>
                        <input type="text" placeholder="Scrivi la frase">    
                    </div>    
                </div>
                
                <div class="my-3">
                    <label for="basic-url" class="form-label">Scrivi la parola che vuoi censurare</label>
                    <div>
                        <input type="text" placeholder="Scrivi la parola">    
                    </div>    
                </div>

                <div class="text-center my-4">
                    <button>INVIA</button>    
                </div>                 
            </div>    
        </div>
        
    </div>
    

    <!-- BOOTSTRAP JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>