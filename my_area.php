<?php 

session_start();
if(isset($_SESSION['password'])){
   $password = $_SESSION['password'];
}
session_destroy()

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
            <div class="pass_container">
                <div>
                    <h1>Ecco qui la tua password: <?php echo  isset($password) ? $password :'NON PUOI STARE QUI';  ?></h1>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>