
<?php
require '../includes/db.php';
require '../includes/auth.php';


$totalProducts = $pdo->query("SELECT COUNT(*) FROM products")->fetchColumn();
?>
<!DOCTYPE html>
<html>
<head>
<title>Dashboard</title>
<script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex">
<?php include 'sidebar.php'; ?>

<main class="flex-1 p-8">
  <h1 class="text-2xl font-bold mb-6">Dashboard</h1>
  <div class="grid md:grid-cols-3 gap-6">
  <div class="bg-white p-6 rounded shadow">
    <h3 class="text-gray-500">Total Produk</h3>
    <p class="text-3xl font-bold"><?= $totalProducts; ?></p>
    <a href="product-list.php" class="text-blue-600 text-sm">Lihat Produk →</a>
  </div>
</div>
</main>
</body>
</html>



