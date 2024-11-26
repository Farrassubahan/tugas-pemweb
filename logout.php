<?php
session_start();
session_destroy(); // Hancurkan semua session
header('Location: index.php'); // Arahkan kembali ke halaman login
exit;
?>
