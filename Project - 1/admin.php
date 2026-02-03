<?php
/*
session_start();
include "db.php";
if (!isset($_SESSION['user']) || $_SESSION['user']['role'] != 'admin'){
    header("Location: login.php");
}

$users = mysqli_query($conn, "SELECT * FROM users");
?>

<link rel="stylesheet" href="style.css">

<div class="container">
    <h2>Admin Panel </h2>
    <table border="1" width="100%">
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Email</th>
            <th>Role</th>
        </tr>

        <?php while ($row = mysqli_fetch_assoc($users)){ ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['username']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['role']; ?></td>
            </tr>
        <?php } ?>
    </table>
    <br>
    <a href="logout.php">Logout</a>
</div>
*/
?>

<?php
/*
session_start();
include 'db.php';

if (!isset($_SESSION['user']) || $_SESSION['user']['role'] != 'admin') {
    header("Location: login.php");
    exit();
}

$users = mysqli_query($conn, "SELECT * FROM users");
?>

<link rel="stylesheet" href="style.css">

<div class="container">
<h2>Admin Panel</h2>

<table border="1" width="100%">
<tr>
    <th>ID</th>
    <th>Username</th>
    <th>Email</th>
    <th>Role</th>
</tr>

<?php
// 🔁 FETCH EACH ROW PROPERLY
while ($row = mysqli_fetch_assoc($users)) {
?>
<tr>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['username']; ?></td>
    <td><?php echo $row['email']; ?></td>
    <td><?php echo $row['role']; ?></td>
</tr>
<?php } ?>

</table>

<br>
<a href="logout.php">Logout</a>
</div>
*/
?>

<?php
session_start();
include 'db.php';

if (!isset($_SESSION['user']) || $_SESSION['user']['role'] !== 'admin') {
    header("Location: login.php");
    exit();
}

$users = mysqli_query($conn, "SELECT id, username, email, role FROM users");
?>

<link rel="stylesheet" href="style.css">

<div class="container">
<h2>Admin Panel</h2>

<table border="1" width="100%">
<tr>
    <th>ID</th>
    <th>Username</th>
    <th>Email</th>
    <th>Role</th>
</tr>

<?php
if (mysqli_num_rows($users) > 0) {
    while ($row = mysqli_fetch_assoc($users)) {
?>
<tr>
    <td><?php echo htmlspecialchars($row['id']); ?></td>
    <td><?php echo htmlspecialchars($row['username']); ?></td>
    <td><?php echo htmlspecialchars($row['email']); ?></td>
    <td><?php echo htmlspecialchars($row['role']); ?></td>
</tr>
<?php
    }
} else {
    echo "<tr><td colspan='4'>No users found</td></tr>";
}
?>

</table>

<br>
<a href="logout.php">Logout</a>
</div>
