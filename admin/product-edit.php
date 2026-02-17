
<?php
require '../includes/db.php';
require '../includes/auth.php';

$id = $_GET['id'];
$stmt = $pdo->prepare("SELECT * FROM products WHERE id=?");
$stmt->execute([$id]);
$p = $stmt->fetch();

if($_SERVER['REQUEST_METHOD'] === 'POST'){
  $name = $_POST['name'];
  $desc = $_POST['description'];
  $price = $_POST['price'];

  if($_FILES['image']['name']){
    $img = $_FILES['image']['name'];
    move_uploaded_file($_FILES['image']['tmp_name'],
                       "../public/assets/images/".$img);

    $pdo->prepare(
      "UPDATE products SET name=?,description=?,price=?,image=? WHERE id=?"
    )->execute([$name,$desc,$price,$img,$id]);

  } else {
    $pdo->prepare(
      "UPDATE products SET name=?,description=?,price=? WHERE id=?"
    )->execute([$name,$desc,$price,$id]);
  }

  header("Location: product-list.php");
  exit;
}
?>
