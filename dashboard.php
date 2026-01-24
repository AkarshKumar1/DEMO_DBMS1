<?php
/*
    session_start();
    if (!isset($_SESSION['user']) || $_SESSION['user']['role'] != 'user') {
        header("Location: login.php");
    }
*/
?>

<!--
<link rel="stylesheet" href="style.css">

<div class="container">
    <h2>Welcome User 👋</h2>
    <p>Name: <?php echo $_SESSION['user']['username']; ?></p>
    <p>Email: <?php echo $_SESSION['user']['email']; ?></p>
    <a href="logout.php">Logout</a>
</div>
-->
<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit;
}

if ($_SESSION['user']['role'] !== 'user') {
    header("Location: login.php");
    exit;
}
?>

<link rel="stylesheet" href="style.css">

<div class="container">
    <h2>Welcome User 👋</h2>
    <p>Name: <?php echo htmlspecialchars($_SESSION['user']['username']); ?></p>
    <p>Email: <?php echo htmlspecialchars($_SESSION['user']['email']); ?></p>
    <a href="logout.php">Logout</a>
</div>

