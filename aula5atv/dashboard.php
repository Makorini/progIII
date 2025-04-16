<?php
session_start();
?>
<h1>Dashboard</h1>
<hr>
<p>Bem-vindo(a), <?php echo($_SESSION['nome']) ?>!</p>
<?php
    if(isset($_COOKIE['email'])){
        echo "<p>Seu e-mail é: ".$_COOKIE['email']."</p>";
    }
?>
<a href="logout.php">Logout.</a>