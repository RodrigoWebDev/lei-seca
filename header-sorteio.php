<?php 
    $serever = "localhost";
    $user = "root";
    $pass = "";
    $db_name = "sorteio";
    $connect = mysqli_connect($serever,$user,$pass,$db_name);

    if(mysqli_connect_errno()){
        die("Falha na conexão: " . mysqli_connect_errno());

    }
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Lei seca 10 anos -  A lei da vida</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/css/flexboxgrid.min.css' ?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/css/style-sorteio.css'?>">
</head>