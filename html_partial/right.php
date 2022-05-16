<?php

if ($pot[6] == "profil") {
    $blockOne = "Amis";
    $blockTwo = "Groupes";
  } else if ($pot[6] == "groupe") {
    $blockOne = "Admins";
    $blockTwo = "Membres";
  }


?>

<!-- SECTION : Right Container -->
<main class="container-right">

<div class="sticky">

    <div class="research align">

        <a href="" class="align"> <img src="../../public/icon/search.svg" alt="Rechercher" class="little-icon"> </a>
        <input type="search" name="" class="search" placeholder="Recherche">

    </div>


    <div class="block">

<span class="title-block"><?php echo $blockOne ?></span>

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

    <span class="more">Voir plus</span>

</div>

</div>

<div class="block">

<span class="title-block"><?php echo $blockTwo ?></span>

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