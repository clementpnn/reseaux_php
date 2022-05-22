<?php

if ($pot[6] == "profil") {
    $blockOne = "Amis";
    $blockTwo = "Groupes";
  } else {
    $blockOne = "Admins";
    $blockTwo = "Membres";
  }
?>

<!-- SECTION : Right Container -->
<main class="container-right">

<div class="sticky">

    <div class="research align">

        <form class="search-form" method="post" action="/reseaux_php/search_form.php">
            <button class="btn-style" type="submit" name="submit"><img src="../../public/icon/search.svg" class="little-icon"></button>
            <input class="search-input" type="text" name="search" placeholder="Rechercher">
        </form>

        <!-- <a href="" class="align"> <img src="../../public/icon/search.svg" alt="Rechercher" class="little-icon"> </a>
        <input type="search" name="" class="search" placeholder="Recherche"> -->

    </div>


    <div class="block">
<?php

//     if ($pot[6] == "profil") {
//     echo "<a href='../ami/ami.php'><span class='title-block'>$blockOne</span></a>";
//   } else {
//     echo "<a href=''><span class='title-block'><Favoris</span></a>";
//   }


  
  echo '<a href="../ami/ami.php"><span class="title-block">Amis</span></a>';
 
?>
<div class="item-block">
<?php

    $reqe = $pdo->prepare('SELECT user_id, friend_id FROM friends WHERE status = 2');
    $reqe->execute();
    $datass = $reqe->fetchAll(PDO::FETCH_ASSOC);
        
        foreach($datass as $datass) {

            if($datass['user_id'] == $userId or $datass['friend_id'] == $userId) {

                if($datass['user_id'] !== $userId){

                    $reqe = $pdo->prepare('SELECT user_id, profil_pic, userName, userSurname, visibility FROM user WHERE user_id = :id');
                    $reqe->execute([':id' => $datass['user_id']]);
                    $datas = $reqe->fetch();

                    $user_ids = $datas['user_id'];
                    $user_pics = $datas['profil_pic'];
                    $user_names = $datas['userName'];
                    $user_surnames = $datas['userSurname'];
                    $user_visibilis = $datas['visibility'];
                    if ($user_visibilis == 1) {
                    echo    "<div class='favoris'>
                            <a href='profil.php?reg_err=$user_ids' class=' align'> <img src='../../public/img/$user_pics' alt='Profile' class='icon profile-picture img-vide'>$user_names $user_surnames<span class='text-fovoris'></span> </a>
                            </div>";
                    }
                } else {
                    $reqe = $pdo->prepare('SELECT user_id, profil_pic, userName, userSurname, visibility FROM user WHERE user_id = :id');
                    $reqe->execute([':id' => $datass['friend_id']]);
                    $datas = $reqe->fetch();

                    $user_ids = $datas['user_id'];
                    $user_pics = $datas['profil_pic'];
                    $user_names = $datas['userName'];
                    $user_surnames = $datas['userSurname'];
                    $user_visibilis = $datas['visibility'];
                    if ($user_visibilis == 1) {
                    echo    "<div class='favoris'>
                            <a href='profil.php?reg_err=$user_ids' class=' align'> <img src='../../public/img/$user_pics' alt='Profile' class='icon profile-picture img-vide'>$user_names $user_surnames<span class='text-fovoris'></span> </a>
                            </div>";
                    }
                }
            }
        }
?>



</div>

</div>

</div>

</main>