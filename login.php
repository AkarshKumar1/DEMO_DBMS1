<?php
/*
    session_start();
    include "db.php";

    $error = "";

    if(isset($_POST['login'])){
        $email = $_POST['email'] ?? '';
        $pass = $_POST['password'] ?? '';

        if (empty($email) || empty($pass)) {
            $error = "Please fill all fields.";
        } else {

            $sql = "SELECT * FROM users WHERE email = '$email'";
            $result = mysqli_query($conn, $sql);
            $user = mysqli_fetch_assoc($result);

            echo "<pre>";
            print_r($user);
            echo "</pre>";

            var_dump(password_verify($pass, $user['password']));
            exit;

            if ($user && isset($user['password']) && password_verify($pass, $user['password'])) {
                $_SESSION['user'] = $user;

                if($user['role'] == 'admin'){
                    header("Location: admin.php");
                } else {
                    header("Location: dashboard.php");
                }
            } else {
                $error = "Invalid Email or Password.";
            }
        }
    }
*/
?>

<?php
/*
<link rel="stylesheet" href="style.css">
<div class="container">
    <form method="POST">
        <h2>Login</h2>
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <button name="login">Login</button>
    </form>
    <p><?php echo $error; ?></p>
</div>
*/
?>


<?php
/*
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();
include "db.php";

$error = "";

if (isset($_POST['login'])) {

    $email = $_POST['email'] ?? '';
    $pass  = $_POST['password'] ?? '';

    if (empty($email) || empty($pass)) {
        $error = "Please fill all fields";
    } else {

        // ✅ STEP 5 CODE STARTS HERE
        $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();
        $user = $result->fetch_assoc();

        if ($user && password_verify($pass, $user['password'])) {

            $_SESSION['user'] = $user;

            if ($user['role'] === 'admin') {
                header("Location: admin.php");
            } else {
                header("Location: dashboard.php");
            }
            exit;
        } else {
            $error = "Invalid Email or Password";
        }
        // ✅ STEP 5 CODE ENDS HERE
    }
}
*/
?>

<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

include "db.php";

echo "STEP 1: File loaded<br>";

$error = "";

if (isset($_POST['login'])) {

    echo "STEP 2: Login button clicked<br>";

    $email = $_POST['email'] ?? '';
    $pass  = $_POST['password'] ?? '';

    echo "STEP 3: Email & password received<br>";

    $stmt = $conn->prepare("
    SELECT 
        id AS id,
        username AS username,
        email AS email,
        password AS password,
        role AS role
    FROM users
    WHERE email = ?
");

    if (!$stmt) {
        die("Prepare failed: " . $conn->error);
    }

    echo "STEP 4: Query prepared<br>";

    $stmt->bind_param("s", $email);
    $stmt->execute();

    echo "STEP 5: Query executed<br>";

    $result = $stmt->get_result();
    if (!$result) {
        die("get_result() failed – mysqlnd missing");
    }

    $user = $result->fetch_assoc();

    echo "STEP 6: User fetched<br>";
    echo "<pre>";
    print_r($user);
    echo "</pre>";

    if ($user && password_verify($pass, $user['password'])) {
        echo "STEP 7: Password verified<br>";

        $_SESSION['user'] = $user;

        if ($user['role'] === 'admin') {
            header("Location: admin.php");
        } else {
            header("Location: dashboard.php");
        }
        exit;
    } else {
        $error = "Invalid Email or Password";
    }
}
?>

<form method="POST">
    <h2>Login</h2>
    <input type="email" name="email" required>
    <input type="password" name="password" required>
    <button name="login">Login</button>
</form>

<p><?php echo $error; ?></p>


