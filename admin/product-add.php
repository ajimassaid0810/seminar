
<?php
require '../includes/db.php';
require '../includes/auth.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){
  $name = trim($_POST['name']);
  $desc = trim($_POST['description']);
  $price = floatval($_POST['price']);

  $img = $_FILES['image']['name'];
  $tmp = $_FILES['image']['tmp_name'];
  $path = "../public/assets/images/".$img;

  if(move_uploaded_file($tmp, $path)){
    $stmt = $pdo->prepare(
      "INSERT INTO products(name, description, price, image) VALUES(?,?,?,?)"
    );
    $stmt->execute([$name,$desc,$price,$img]);

    header("Location: product-list.php");
    exit;
  }
}
?>

<!DOCTYPE html>
<html>
<head>
<script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex">
<?php include 'sidebar.php'; ?>

<main class="flex-1 p-8">
  <h1 class="text-xl font-bold mb-4">Tambah Produk</h1>

  <form method="POST" enctype="multipart/form-data"
        class="bg-white p-6 rounded shadow max-w-lg">

    <input type="text" name="name" placeholder="Nama Produk"
           class="border p-2 w-full mb-3" required>

    <textarea name="description" placeholder="Deskripsi"
              class="border p-2 w-full mb-3" required></textarea>

    <input type="number" name="price" step="0.01"
           placeholder="Harga" class="border p-2 w-full mb-3" required>

    <input type="file" name="image" class="mb-4" required>

    <button class="bg-blue-600 text-white px-4 py-2 rounded">
      Simpan
    </button>
  </form>
</main>
</body>
</html>
