<?php 

    if(isset($_GET['number_of_characters'])){
        $number_of_characters= $_GET['number_of_characters'];
        
        $characters=[ 
            'lowercase_letters'=>'abcdefghijklmnopqrstuvwxyz',
            'uppercase_letters'=>'ABCDEFGHIJKLMNOPQRSTUVWXYZ',
            'simbols'=>'!?~@#-_+<>[]{}',
            'numbers'=>'1234567890',

            
        ];
            /* $shuffled = str_shuffle($str); */
            $num_simb= rand(1,2);
            $num_number= rand(1,4);
            $num_uppercase= rand(1, (($number_of_characters-1)-($num_number+$num_simb)));
            $num_uppercase= rand (1, ($number_of_characters -($num_number+$num_simb+$num_uppercase)));
            $password="";
            var_dump(strlen($characters['simbols']));
            for( $i=0; $i<$num_simb; $i++ ){
                $random_character= rand(0, (strlen($characters['simbols'])-1));
                $password.= $characters['simbols'][$random_character];
            }
            var_dump($password);

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
        </div>
    </div>
    
</body>
</html>