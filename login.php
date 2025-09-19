<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}
$user = $_SESSION['user'];
$id = isset($_GET['user']) ? $_GET['user'] : $user['id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
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
  </div>
</body>
</html>
