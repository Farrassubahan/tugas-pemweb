<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error</title>
    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8d7da; /* Light red background */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .alert-container {
            background-color: #fff;
            padding: 1.5rem;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            text-align: center;
            max-width: 400px;
            width: 100%;
            border: 1px solid #f5c2c7;
        }
        h3 {
            color: #dc3545; /* Bootstrap danger color */
            margin-bottom: 1rem;
        }
        .btn-danger {
            width: 100%;
        }
        p {
            color: #6c757d; /* Bootstrap secondary text */
        }
    </style>
</head>
<body>
    <div class="alert-container">
        <h3>Email atau Password Salah</h3>
        <p>Silakan periksa kembali email dan password Anda.</p>
        <a href="index.php" class="btn btn-danger">Kembali ke Halaman Login</a>
    </div>

    <!-- Bootstrap JS and Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
