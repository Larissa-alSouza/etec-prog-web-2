<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>

<?php

session_start();

    require 'menu.php';

    if (!isset($_SESSION['login'])) 
    {
       header("Location: index.php");
    }
    else
    {
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
        </head>
        <body>

        <div class="container mt-3">
            <div class="badge text-bg-primary text-wrap" style="width: 9rem; height: 5rem; display: flex; align-items: center; justify-content: center; font-size: 25px">
                Logado 👍
            </div>
        </div>
            
        </body>
        </html>

      <?php
  
    }

    ?>

