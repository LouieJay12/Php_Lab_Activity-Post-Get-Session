<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Example hardcoded user (replace with DB lookup if needed)
    if ($username === "Louie" && $password === "123") {
        $_SESSION['user'] = [
            'id' => 1,
            'name' => "Louie Jay",
            'email' => "test@example.com"
        ];
        header("Location: profile.php");
        exit();
    } else {
        $error = "Invalid username or password.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">z
  <title>Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body { background:#f8f9fa; }
    .login-card {
      max-width:400px; margin:80px auto; padding:30px; border-radius:14px; background:#fff;
      border:3px solid #0d6efd; box-shadow:0 6px 18px rgba(0,0,0,0.15);
    }
  </style>
</head>
<body>
  <div class="login-card">
    <h2 class="mb-3 text-center">Login</h2>
    <?php if (!empty($error)) : ?>
      <div class="alert alert-danger"><?php echo $error; ?></div>
    <?php endif; ?>
    <form method="post">
      <div class="mb-3">
        <label class="form-label">Username</label>
        <input type="text" name="username" class="form-control" required>
      </div>
      <div class="mb-3">
        <label class="form-label">Password</label>
        <input type="password" name="password" class="form-control" required>
      </div>
      <button type="submit" class="btn btn-primary w-100">Login</button>
    </form>
  </div>
</body>
</html>
