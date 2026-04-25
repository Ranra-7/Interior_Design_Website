<?php
session_start();
include "./database.php";

$message = '';

if($_SERVER['REQUEST_METHOD'] === 'POST')//run the login only after the form is submitted
{
    $username = $_POST['username']??'';
    $password = $_POST['password']??'';

    if ($username === '' || $password === ''){
        $message = "Enter username and password both";
    }
    else{
        $sql = "SELECT id, username, password FROM admin WHERE username = '$username' LIMIT 1";
        $result = mysqli_query($connection, $sql);
        $admin = mysqli_fetch_assoc($result);

        if($admin && password_verify($password, $admin['password'])){
            $_SESSION['admin_logged_in'] = true;
            header('Location: admin-dashboard.php');
            exit;
        }
        else{
            $message = 'Invalid username or password';
        }



    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>Admin Login</title>
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <link rel="stylesheet" href="admin-form.css"> 
  
</head>
<body>
  <div class="login-wrap">
    <h2>Admin Login</h2>

    <?php if ($message): ?>
      <div class="msg"><?= htmlspecialchars($message) ?></div>
    <?php endif; ?>

    <form method="POST" autocomplete="off" novalidate>
      <label for="username">Username</label>
      <input id="username" name="username" type="text" required />

      <label for="password">Password</label>
      <input id="password" name="password" type="password" required />

      <button type="submit">Login</button>
    </form>

  </div>
</body>
</html>
