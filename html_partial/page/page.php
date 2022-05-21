<?php require '../head.php'; ?>
<?php require '../left.php'; ?>
<style>
<?php include '../../public/css/style.css' ?>
</style>

<?php 

$pos = $url;
$pos = explode("err=",$pos);


    $inserte = $pdo->prepare('SELECT page_name, page_pic, pager_banner FROM `page` WHERE page_id = :id');
    $inserte->execute([':id' => $pos[1]]);
    $dat = $inserte->fetch();
    
        $namePage = $dat['page_name'];
        $bannerpa = $dat['pager_banner'];
        $pppa = $dat['page_pic'];
    
    $inserte = $pdo->prepare('SELECT admin FROM `page_member` WHERE user_id = :id');
    $inserte->execute([':id' => $userId]);
    $adm = $inserte->fetch();
    $row = $inserte->rowCount();

    if($adm["admin"] == 1) {
        $admin = true;
    }
        
    if($row > 0) {
        $statut = true;
    }
?>

<!-- SECTION : Center Container -->
<main class="container-center">

<!-- Info page -->

<div class="bg">
    <img src="../../public/img/<?php echo $bannerpa ?>" alt="Banière de page" class="bg-img img-vide">
</div>

<div class="info">

    <img src="../../public/img/<?php echo $pppa ?>" alt="Image de page" class="pp img-vide">
    <h2 class="profil"><?php echo $namePage ?></h2>
    <?php 
    if($admin == false) {
        if($statut == true) {
            echo "<form class='' method='POST' action='del_page.php?reg_err=$pos[1]'>
            <button class='btn-bio deux text-bio'>Suivie</button>
            </form>";
            echo "<a href='' class='btn-bio deux'><span class='text-bio'> Suivie </span></a>";
        } else {
            echo "<form class='' method='POST' action='add_page.php?reg_err=$pos[1]'>
            <button class='btn-bio deux text-bio'>Suivie</button>
            </form>";
            echo "<a href='' class='btn-bio un'><span class='text-bio'> Suivre </span></a>";
        }
        
    } else {
        echo "<a href='page_modif.php?reg_err=$pos[1]' class='align'> <img src='../../public/icon/more-horiz-black.svg' alt='Image' class='mod-icon'> </a>";
    }
    ?>
</div>

<!-- Description -->
<div class="border">
<span class="title-bio">Desciption</span>
<p class="text-bio"></p>

</div>

<?php 

    if($admin == true) {
        require 'in-page.php';
    }

?>


</main>

<?php require '../right.php'; ?>
<?php require '../footer.php'; ?>