<?php 

    include __DIR__."/partials/functions.php";

    if(isset($_GET['number_of_characters'])){
        $number_of_characters= $_GET['number_of_characters'];
        
        /* creo l'array con tutti i caratteri */
        $characters=[ 
            'lowercase_letters'=>'abcdefghijklmnopqrstuvwxyz',
            'uppercase_letters'=>'ABCDEFGHIJKLMNOPQRSTUVWXYZ',
            'simbols'=>'!?~@#-_+<>[]{}',
            'numbers'=>'1234567890',
        ];
           
        /* randomicamente per ogni famiglia di simboli creo un numero casuale, quel numero casuale indichere quanti
        caratteri di quella chiave saranno presenti nella password */
            $num_simb= rand(1,round($number_of_characters/4));
            $num_number= rand(1, floor($number_of_characters/2));
            $num_uppercase= rand(1, (($number_of_characters-1)-($num_number+$num_simb)));
            $num_lowercase= rand (($number_of_characters -($num_number+$num_simb+$num_uppercase)), ($number_of_characters -($num_number+$num_simb+$num_uppercase)));
            
            /* in base al numero generato prima creiao i vari cicli che andranno a pescare tramite
            funzione randomicamente le lettere */
            $key_position='simbols'; 
            $password=pass($num_simb, $characters, $key_position);

            $key_position='numbers'; 
            $password.=pass($num_number, $characters, $key_position);

            $key_position='uppercase_letters'; 
            $password.=pass($num_uppercase, $characters, $key_position);

            $key_position='lowercase_letters'; 
            $password.=pass($num_lowercase, $characters, $key_position);

            /* mescoliamo la stringa che abbiamo ottenuto con i cicli */
            $password=str_shuffle($password);
            
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-5">
                <form action="index.php" method="GET">
                    <label for="number_of_characters">selezionare il numero di caratterri che formeranno la password</label>
                    <input type="number" min="8" value="8" name="number_of_characters" id="number_of_characters" class="form-control">
                    <button type="submit">Generate</button>
                </form>
            </div>
            <div class="col-12">
                <h2>Ecco qui la tua password: <?php echo  isset($password) ? $password :'';  ?></h2>
            </div>
        </div>
    </div>
    
</body>
</html>