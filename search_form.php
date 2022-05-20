<?php

require_once 'database/pdo.php';

if(isset($_POST["submit"]));
    $ask = $_POST["search"];
    $ask = htmlspecialchars($ask);
    $ask = strtolower($ask);
    $reply = $pdo->prepare("SELECT * FROM `user` WHERE userName = :ask OR userSurname = :ask");

    $reply -> setFetchMode(PDO:: FETCH_OBJ);
    $reply -> execute([
        ":ask" => $ask
    ]);

    if($row = $reply->fetch())
        
    {
        ?>
        <?php $id = $row->user_id;?>

        <!-- <?php echo $row ->user_id; ?> -->
        <!-- <?php echo $row ->userName; ?> -->
        <!-- <?php echo $row ->userSurname; ?> -->
        <?php
    }
    else{
        header('Location: /reseaux_php/html_partial/accueil/accueil.php');
    }


?> 

