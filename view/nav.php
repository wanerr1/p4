<?php 
//VAR FOR SESSION LOGIN
$signInOut = 'Se Connecter ';
$iconInOut = 'in'; 
?>

<nav class="navbar fixed-top">
    <a href="index.php"><i class="fas fa-home"></i></a>
    <a href="index.php"><?php echo $signInOut ?><i class="fas fa-sign-<?php echo $iconInOut?>-alt"></i></a>
    <!-- <i class="fas fa-sign-out-alt"></i> -->
</nav> 
