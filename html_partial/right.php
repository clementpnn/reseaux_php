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

    <form method="post" action="/reseaux_php/search.form.php">
        <input type="text" name="search" placeholder="Search..." >
        <input type="submit" name="submit">
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


    if ($pot[6] == "profil") {
        echo '<a href="ami.php"><span class="title-block">Amis</span></a>';
    } else if($pot[6] == "ami"){
        echo '<a href="./ami/ami.php"><span class="title-block">Amis</span></a>';
    } else {
        echo '<a href="../ami/ami.php"><span class="title-block">Amis</span></a>';
    }
?>


<div class="item-block">
    <div class="fovoris">
        <a href="" class=" align"> <img src="../../public/img/pp.jpg" alt="Profile" class="icon profile-picture img-vide"> <span class="text-fovoris">Fabien</span> </a>
    </div>
    <div class="fovoris">
        <a href="" class=" align"> <img src="../../public/img/pp.jpg" alt="Profile" class="icon profile-picture img-vide"> <span class="text-fovoris">Martin</span> </a>
    </div>
    <div class="fovoris">
        <a href="" class=" align"> <img src="../../public/img/pp.jpg" alt="Profile" class="icon profile-picture img-vide"> <span class="text-fovoris">Ewan</span> </a>
    </div>

</div>

</div>

<div class="block">

<?php
    if ($pot[6] == "profil") {
        echo "<a href='../list/list-g.php'><span class='title-block'>$blockTwo</span></a>";
  } else {
    echo "<a href=''><span class='title-block'><$blockTwo</span></a>";
  }
?>

<div class="item-block">
    <div class="fovoris">
        <a href="" class=" align"> <img src="../../public/img/pp.jpg" alt="Profile" class="icon profile-picture img-vide"> <span class="text-fovoris">Fabien</span> </a>
    </div>
    <div class="fovoris">
        <a href="" class=" align"> <img src="../../public/img/pp.jpg" alt="Profile" class="icon profile-picture img-vide"> <span class="text-fovoris">Martin</span> </a>
    </div>
    <div class="fovoris">
        <a href="" class=" align"> <img src="../../public/img/pp.jpg" alt="Profile" class="icon profile-picture img-vide"> <span class="text-fovoris">Ewan</span> </a>
    </div>
    <div class="fovoris">
        <a href="" class=" align"> <img src="../../public/img/pp.jpg" alt="Profile" class="icon profile-picture img-vide"> <span class="text-fovoris">Vitomir</span> </a>
    </div>
    <div class="fovoris">
        <a href="" class=" align"> <img src="../../public/img/pp.jpg" alt="Profile" class="icon profile-picture img-vide"> <span class="text-fovoris">Clément</span> </a>
    </div>
    <div class="fovoris">
        <a href="" class=" align"> <img src="../../public/img/pp.jpg" alt="Profile" class="icon profile-picture img-vide"> <span class="text-fovoris">Steven</span> </a>
    </div>
    <div class="fovoris">
        <a href="" class=" align"> <img src="../../public/img/pp.jpg" alt="Profile" class="icon profile-picture img-vide"> <span class="text-fovoris">Anthony</span> </a>
    </div>

    <span class="more">Voir plus</span>

</div>

</div>

</div>

</main>