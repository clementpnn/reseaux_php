<style>
    <?php 
        include 'public/css/global.css';
        include 'public/css/index.css';
    ?>
</style>

<?php
    require 'html_partial/head.php';

    require 'database/create_db.php';

    if (isset($_POST['signUP'])) {
        include 'php_partial/sign_up_bd.php';
        echo addDB();
    }
?>

<section class="landing-title">
    <h1>maggle</h1>
    <div class="landing-sub-title">
        <p>Partagez et restez en contact avec les étudiants et les alumnis d’Hetic.</p>
    </div>
</section>

<section class="sign-up">
    <form method="post" action="./profil/profil.php">
        <div class="mail">
            <input type="text" name="username" placeholder="Mail étudiant">
        </div>
        <div class="mdp">
            <input type="password" name="mdp" placeholder="Mot de passe">
        </div>
        <div class="mdp-comfirm">
            <input type="password" name="mdp_comfirm" placeholder="Confirmation du mot de passe">
        </div> 
        <div class="create-account">
            <input type="submit" name="signUP" value="Créer un compte">
        </div>
    </form>
    <div class="sign-button">
        <p>Déjà inscrit ? <span class="underline">Connectez-vous</span></p>
    </div>
</section>

<section class="sign-in">
    <form action="SignUp/sign_in_bd.php" method="post">
        <div class="mail">
            <input type="text" name="username" placeholder="Mail étudiant">
        </div>
        <div class="mdp">
            <input type="password" name="mdp" placeholder="Mot de passe">
        </div>
        <div class="log-account">
            <input type="submit" name="insc" value="S'identifier">
        </div>
    </form>
    <div class="sign-button">
        <p>Première visite ? <span class="underline">Inscrivez-vous</span></p>
    </div>
</section>

<script type="text/javascript" src="../js/index_swap.js"></script>

<?php require 'html_partial/footer.php'; ?>

