<?php
require './config/db.php';

// Mendapatkan ID produk dari parameter URL
$id = $_GET['id'];

// Ambil data produk berdasarkan ID
$product = mysqli_query($db_connect, "SELECT * FROM products WHERE id = $id");
$row = mysqli_fetch_assoc($product);

if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $image = $_POST['image']; // Jika ingin mengubah gambar juga

    // Update data produk
    mysqli_query($db_connect, "UPDATE products SET name='$name', price='$price', image='$image' WHERE id=$id");

    // Redirect ke halaman data produk
    header("Location: show.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Produk</title>
    <!-- Link Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .form-container {
            margin-top: 50px;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .btn {
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8 col-sm-10 form-container">
                <h1 class="text-center text-primary mb-4">Edit Produk</h1>
                <form method="post">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama Produk:</label>
                        <input type="text" class="form-control" id="name" name="name" value="<?= $row['name']; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Harga:</label>
                        <input type="text" class="form-control" id="price" name="price" value="<?= $row['price']; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Gambar URL:</label>
                        <input type="text" class="form-control" id="image" name="image" value="<?= $row['image']; ?>">
                    </div>
                    <button type="submit" name="update" class="btn btn-success w-100">Update</button>
                </form>
                <a href="show.php" class="btn btn-secondary w-100 mt-3">Kembali ke Data Produk</a>
            </div>
        </div>
    </div>
    <!-- Link Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
        