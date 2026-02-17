
<?php
require '../includes/db.php';
require '../includes/auth.php';

$limit = 5;
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$page = max($page,1);
$start = ($page-1)*$limit;

$search = isset($_GET['search']) ? trim($_GET['search']) : "";

if($search){
  $stmt = $pdo->prepare("SELECT * FROM products WHERE name LIKE ? ORDER BY id DESC LIMIT $start,$limit");
  $stmt->execute(["%$search%"]);
} else {
  $stmt = $pdo->query("SELECT * FROM products ORDER BY id DESC LIMIT $start,$limit");
}
$products = $stmt->fetchAll();

$total = $pdo->query("SELECT COUNT(*) FROM products")->fetchColumn();
$totalPages = ceil($total / $limit);
?>


<!DOCTYPE html>
<html>
<head>
<title>Manage Products</title>
<script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 flex">

<!-- Sidebar -->
<aside class="w-64 bg-gray-900 min-h-screen text-white p-6">
  <h2 class="text-xl font-bold mb-10">Admin Panel</h2>
  <nav class="space-y-4">
    <a href="dashboard.php" class="block hover:text-blue-400">Dashboard</a>
    <a href="product-list.php" class="block text-blue-400 font-semibold">Products</a>
    <a href="logout.php" class="block text-red-400">Logout</a>
  </nav>
</aside>

<!-- Content -->
<main class="flex-1 p-8">
  <div class="flex justify-between mb-6">
    <h1 class="text-2xl font-bold">Daftar Produk</h1>
    <a href="product-add.php" class="bg-blue-600 text-white px-4 py-2 rounded">
      + Tambah Produk
    </a>
  </div>

  <div class="bg-white shadow rounded overflow-hidden">
    <form method="GET" class="mb-4 flex gap-2">
  <input type="text" name="search" value="<?= htmlspecialchars($search); ?>"
         placeholder="Cari produk..."
         class="border p-2 rounded w-64">
  <button class="bg-blue-600 text-white px-4 rounded">Cari</button>
</form>

    <table class="w-full text-left">
      <thead class="bg-gray-200">
        <tr>
          <th class="p-3">Gambar</th>
          <th class="p-3">Nama</th>
          <th class="p-3">Harga</th>
          <th class="p-3">Tanggal</th>
          <th class="p-3">Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($products as $p): ?>
        <tr class="border-t">
          <td class="p-3">
            <img src="../public/assets/images/<?= htmlspecialchars($p['image']); ?>"
                 class="w-16 h-16 object-cover rounded">
          </td>
          <td class="p-3 font-semibold"><?= htmlspecialchars($p['name']); ?></td>
          <td class="p-3">Rp <?= number_format($p['price']); ?></td>
          <td class="p-3 text-sm text-gray-500"><?= $p['created_at']; ?></td>
          <td class="p-3 space-x-2">
            <a href="product-edit.php?id=<?= $p['id']; ?>" class="text-blue-600">Edit</a>
            <a href="product-delete.php?id=<?= $p['id']; ?>"
               onclick="return confirm('Hapus produk ini?')"
               class="text-red-600">Hapus</a>
          </td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
    <div class="mt-4 flex space-x-2">
<?php for($i=1;$i<=$totalPages;$i++): ?>
  <a href="?page=<?= $i ?>&search=<?= urlencode($search); ?>"
     class="px-3 py-1 border rounded 
     <?= $i==$page?'bg-blue-600 text-white':'' ?>">
     <?= $i ?>
  </a>
<?php endfor; ?>
</div>

  </div>
</main>
</body>
</html>
