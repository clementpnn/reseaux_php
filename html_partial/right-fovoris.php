

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

    <?php

    if ($pot[6] == "accueil") {
        require 'accueil/tendance.php';
    }

    ?>

    <div class="block">

    <?php

        if ($pot[6] == "ami") {
            echo '<a href="ami.php"><span class="title-block">Favoris</span></a>';
        } else if($pot[6] == "ami"){
            echo '<a href="./ami/ami.php"><span class="title-block">Favoris</span></a>';
        } else {
            echo '<a href="../ami/ami.php"><span class="title-block">Favoris</span></a>';
        }
    ?>
        
        <div class="item-block">
            <div class="favoris">
                <a href="https://github.com/Cammyxalot" target="_blank" class=" align"> <img src="../../public/img/pp.jpg" alt="Profile" class="icon profile-picture img-vide"> <span class="text-fovoris">Fabien Renoir</span> </a>
            </div>
            <div class="favoris">
                <a href="" target="_blank" class=" align"> <img src="../../public/img/pp.jpg" alt="Profile" class="icon profile-picture img-vide"> <span class="text-fovoris">Martin Reboutier</span> </a>
            </div>
            <div class="favoris">
                <a href="" target="_blank" class=" align"> <img src="../../public/img/pp.jpg" alt="Profile" class="icon profile-picture img-vide"> <span class="text-fovoris">Ewan Questier</span> </a>
            </div>
            <div class="favoris">
                <a href="https://github.com/vitolinho" target="_blank" class=" align"> <img src="../../public/img/pp.jpg" alt="Profile" class="icon profile-picture img-vide"> <span class="text-fovoris">Vitomir Laces</span> </a>
            </div>
            <div class="favoris">
                <a href="https://github.com/clementpnn" target="_blank" class=" align"> <img src="../../public/img/pp.jpg" alt="Profile" class="icon profile-picture img-vide"> <span class="text-fovoris">Clément Phlipponneau</span> </a>
            </div>
            <div class="favoris">
                <a href="" target="_blank" class=" align"> <img src="../../public/img/pp.jpg" alt="Profile" class="icon profile-picture img-vide"> <span class="text-fovoris">Steven Godin</span> </a>
            </div>
            <div class="favoris">
                <a href="https://github.com/anthony-rgs" target="_blank" class=" align"> <img src="../../public/img/pp.jpg" alt="Profile" class="icon profile-picture img-vide"> <span class="text-fovoris">Anthony Ringressi</span> </a>
            </div>

        </div>

    </div>
</div>

</main>