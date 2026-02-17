
<?php
require '../includes/db.php';

$error = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = filter_input(INPUT_POST, 'username');
    $password = trim($_POST['password']);

    if (!$username || !$password) {
        $error = "username dan password wajib diisi.";
    } else {
        $stmt = $pdo->prepare("SELECT * FROM admins WHERE username = ? LIMIT 1");
        $stmt->execute([$username]);
        $user = $stmt->fetch();

        if ($user && password_verify($password, $user['password'])) {
            session_regenerate_id(true);

            $_SESSION['admin'] = [
                'id' => $user['id'],
                'username' => $user['username'],
            ];

            header("Location: dashboard.php");
            exit;
        } else {
            $error = "username atau password salah.";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Admin Login</title>
<script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 flex items-center justify-center min-h-screen">

<form method="POST" class="bg-white p-8 rounded-lg shadow-md w-96">
  <h2 class="text-2xl font-bold mb-6 text-center">Admin Login</h2>

  <?php if($error): ?>
    <p class="bg-red-100 text-red-600 p-3 mb-4 rounded"><?= $error ?></p>
  <?php endif; ?>

  <div class="mb-4">
    <label>username</label>
    <input type="username" name="username" class="w-full border p-2 rounded" required>
  </div>

  <div class="mb-6">
    <label>Password</label>
    <input type="password" name="password" class="w-full border p-2 rounded" required>
  </div>

  <button class="bg-blue-600 text-white w-full py-2 rounded hover:bg-blue-700">
    Login
  </button>
</form>

</body>
</html>
