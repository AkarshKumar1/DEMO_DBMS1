<?php
   include 'db.php';
   $message = " ";
   if(isset($_POST['register'])){
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $role = "user";

        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
         $message = "Invalid email format";
        }else{
         $password = password_hash($password, PASSWORD_DEFAULT);
        
        $check = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email'");
        if(mysqli_num_rows($check)  > 0){
           $message = "Email already registered.";
        }else{
             mysqli_query($conn, "INSERT INTO users (username, email, password, role) 
             VALUES ('$username', '$email', '$password', '$role')");
             $message = "Registration Successful. <a href='login.php'>Login Here</a>";
        }
   }
}
?>

<link rel="stylesheet" href="style.css">

<div class="container">
   <h2>Register</h2>
   <form method="POST">
      <input type="text" name="username" placeholder="Username" required><br><br>
      <input type="email" name="email" placeholder="Email" required><br><br>
      <input type="password" name="password" placeholder="Password" required><br><br>
      <button name="register">Register</button>
   </form>
   <p><?php echo $message; ?></p>
</div>
 