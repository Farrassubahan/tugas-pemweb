<?php


// if (isset($_POST["email"]) && isset($_POST["password"])) {
//     $email = $_POST["email"];
//     $password = $_POST["password"];

//     if ($email == 'admin123@gmail.com' && $password == 'admin') {
//         header('Location: ./../beranda.php');
//     } else {
//         header('Location: ./../wrong.php');
//     }
// }



session_start();
require '../config/db.php';

if (isset($_POST['submit'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];

    // Query untuk mencari pengguna berdasarkan email
    $user = mysqli_query($db_connect, "SELECT * FROM users WHERE email = '$email'");

    if (mysqli_num_rows($user) > 0) {
        $data = mysqli_fetch_assoc($user);

        // Verifikasi password
        if (password_verify($password, $data['password'])) {

            // Otorisasi
            $_SESSION['name'] = $data['name'];
            $_SESSION['role'] = $data['role'];

            // Redirect berdasarkan role
            if ($_SESSION['role'] == 'admin') {
                header('Location: ../admin.php');
                exit; // Penting untuk menghentikan eksekusi setelah header
            } else {
                header('Location: ../profile.php');
                exit; // Penting untuk menghentikan eksekusi setelah header
            }
        } else {
            // Password salah
            header('Location: ./../wrong.php');
            exit;
        }
    } else {
        // Email tidak ditemukan
        header('Location: ./../wrong.php');
        exit;
    }
}
