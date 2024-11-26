<?php
require './../config/db.php';

if (isset($_POST['submit'])) {
    global $db_connect;

    $name = $_POST['name'];
    $price = $_POST['price']; 
    $image = $_FILES['image']['name'];
    $tempImage = $_FILES['image']['tmp_name'];

    // Membuat nama file yang unik
    $randomFilename = time().'-'.md5(rand()).'-'.$image;

    // Path relatif untuk menyimpan file
    $uploadPath = $_SERVER['DOCUMENT_ROOT'].'/pemweb teori/p7/upload/'.$randomFilename;  

    // Memindahkan file dari tmp ke folder upload
    $upload = move_uploaded_file($tempImage, $uploadPath);

    if ($upload) {
        // Menyimpan data ke database
        mysqli_query($db_connect, "INSERT INTO products (name, price, image)
                    VALUES ('$name', '$price', '/pemweb teori/p7/upload/$randomFilename')");  
        echo "Berhasil upload";
    } else {
        echo "Gagal upload";
    }
}
?>
