<?php 

    if(isset($_GET['number_of_characters'])){
        $number_of_characters= $_GET['number_of_characters'];
        
        $characters=[ 
            'lowercase_letters'=>'abcdefghijklmnopqrstuvwxyz',
            'uppercase_letters'=>'ABCDEFGHIJKLMNOPQRSTUVWXYZ',
            'simbols'=>'!?~@#-_+<>[]{}',
            'numbers'=>'1234567890',

            
        ];
           
            $num_simb= rand(1,round($number_of_characters/4));
            $num_number= rand(1, floor($number_of_characters/2));
            $num_uppercase= rand(1, (($number_of_characters-1)-($num_number+$num_simb)));
            $num_lowercase= rand (($number_of_characters -($num_number+$num_simb+$num_uppercase)), ($number_of_characters -($num_number+$num_simb+$num_uppercase)));
            $password="";
            
            for( $i=0; $i<$num_simb; $i++ ){
                $num_rand_character= rand(0, (strlen($characters['simbols'])-1));
                $password.= $characters['simbols'][$num_rand_character];
            }
            for( $i=0; $i<$num_number; $i++ ){
                $num_rand_character= rand(0, (strlen($characters['numbers'])-1));
                $password.= $characters['numbers'][$num_rand_character];
            }
            for( $i=0; $i<$num_uppercase; $i++ ){
                $num_rand_character= rand(0, (strlen($characters['uppercase_letters'])-1));
                $password.= $characters['uppercase_letters'][$num_rand_character];
            }
            for( $i=0; $i<$num_lowercase; $i++ ){
                $num_rand_character= rand(0, (strlen($characters['lowercase_letters'])-1));
                $password.= $characters['lowercase_letters'][$num_rand_character];
            }
            var_dump($password);
            var_dump(str_shuffle($password));

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