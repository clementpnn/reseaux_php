<?php require '../head.php'; ?>
<?php require '../left.php'; ?>
<?php require '../data.php'; ?>

<style>
<?php include '../../public/css/style.css' ?>
</style>

<!-- SECTION : Center Container -->
<main class="container-center">

<?php require '../head.php'; ?>
<?php require '../left.php'; ?>
<?php require '../data.php'; ?>

<style>
<?php include '../../public/css/style.css' ?>
</style>

<!-- SECTION : Center Container -->
<main class="container-center">


<div class="bg">
    <img src="../../public/img/banner.jpg" alt="Banière de profil" class="bg-img img-vide">
</div>

<div class="info">
    <img src="../../public/img/pp.png" alt="Image de profil" class="pp img-vide">
    <div></div>
    <h2 class="profil">Nom du Groupe</h2>
    <a href='change-img-profil.php' class='btn-bio un visibility-none'><span class='text-bio'>Créer</span></a>
</div>


<div class="border">
<span class="title-bio">Bio</span>
<p class="text-bio"></p>

</div>

<form class="modif-profil g4" method="POST" action="export_public.php">

    <label class="custom-file-upload deux">
        <input class="modif-box" type="text" name="name_groupe" placeholder="Nom">
    </label>

    <label class="custom-file-upload un">
        <input type="submit" class="hidden"/>
        <p>Créer</p> 
    </label>
</form>

</main>

<?php require '../right.php'; ?>
<?php require '../footer.php'; ?>



<!-- <div class="bg">
    <img src="../../public/img/banner.jpg" alt="Banière de profil" class="bg-img img-vide">
</div>

<div class="info">
    <img src="../../public/img/pp.png" alt="Image de profil" class="pp img-vide">
    <div></div>
    <h2 class="profil">Nom du Groupe</h2>
    <a href='change-img-profil.php' class='btn-bio un visibility-none'><span class='text-bio'>Créer</span></a>
</div>


<div class="border">
<span class="title-bio">Bio</span>
<p class="text-bio"></p>

</div>

<form class="modif-profil g4" method="POST" action="change-img-profil.php" enctype="multipart/form-data">

    <label class="custom-file-upload deux">
        <input type="file" name="avatar" id=""/>
        <p>Profil</p> 
    </label>
    <label class="custom-file-upload deux">
        <input type="file" name="back" id=""/>
        <p>Bannière</p> 
    </label>

    <label class="custom-file-upload deux">
        <input class="modif-box" type="text" name="surname" placeholder="Nom">
    </label>

    <label class="custom-file-upload deux">
        <input class="modif-box" type="text" name="bio" placeholder="Bio">
    </label>
    <label class="custom-file-upload deux">
        <input class="modif-box" type="text" name="admins" placeholder="Admins">
    </label>
    <label class="custom-file-upload deux">
        <input class="modif-box" type="text" name="members" placeholder="Expulser">
    </label>
    <label class="custom-file-upload deux">
        <input class="modif-box btn-cursor" type="button" name="confidentiality" value="Public">
    </label>

    <label class="custom-file-upload un">
        <input type="submit" class="hidden"/>
        <p>Créer</p> 
    </label> -->
