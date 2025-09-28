<?php
session_start();
<<<<<<< HEAD

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
=======
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}
$user = $_SESSION['user'];
$id = isset($_GET['user']) ? $_GET['user'] : $user['id'];
>>>>>>> b90cdea2e6dc4a1f7326c1d09df2483f96a4230f
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
<<<<<<< HEAD
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
=======
  <title>User Profile</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body { background:#f8f9fa; }
    .profile-card {
      max-width:420px; margin:80px auto; padding:30px; border-radius:14px; background:#fff;
      text-align:center; border:3px solid #0d6efd; box-shadow:0 6px 18px rgba(0,0,0,0.15);
    }
    .profile-card img { width:100px; margin-bottom:12px; border-radius:50%; border:4px solid #e9f2ff; }
    .btn-logout { width:100%; background:#dc3545; color:#fff; font-weight:600; }
  </style>
</head>
<body>
  <div class="profile-card">
    <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png" alt="Avatar">
    <h2 class="mb-2">Welcome, <?php echo htmlspecialchars($user['name']); ?>!</h2>
    <p><strong>Email:</strong> <?php echo htmlspecialchars($user['email']); ?></p>
    <p><strong>User ID (via GET):</strong> <?php echo htmlspecialchars($id); ?></p>
    <a href="logout.php" class="btn btn-logout mt-3">Logout</a>
>>>>>>> b90cdea2e6dc4a1f7326c1d09df2483f96a4230f
  </div>
</body>
</html>
