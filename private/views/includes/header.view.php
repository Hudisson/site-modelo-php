<?php 

  $title = getUriTitle();

  /* Função para obter o título da página atravez da uri */
  function getUriTitle(){
    $url = isset($_GET['url'])?$_GET['url']: "home";
    return explode("/",filter_var(trim($url,"/")),FILTER_SANITIZE_URL);
  }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="assets/css/pc.css">
    <link rel="stylesheet" href="assets/css/mobile.css">
    <title>Home</title>
</head>
<body>
    <style>
        .div-start{width: 1200px; margin-left: 5%; border-radius: 5px;}
        @media screen and (max-width: 600px) {
          .div-start{width: 100%; margin-left: 0;}
        }
    </style>
    <div class=".div-start">

  
