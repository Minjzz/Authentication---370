<?php
session_start();

if(!isset($_SESSION['username'])){
    header("Location: login.php");
    exit();
}
?>

<h2>Welcome <?php echo $_SESSION['username']; ?></h2>
<p>Role: <?php echo $_SESSION['role']; ?></p>

<?php
if($_SESSION['role'] == 'admin'){
    echo "<h3>Admin Panel Access Granted</h3>";
}
?>

<a href="logout.php">Logout</a>
