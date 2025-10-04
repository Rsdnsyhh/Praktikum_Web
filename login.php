<?php
session_start();

// Jika sudah login, redirect ke dashboard
if (isset($_SESSION['username'])) {
    header("Location: dashboard.php");
    exit();
}

$error = '';
// Proses login jika form disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Kredensial login
    if ($username == 'admin' && $password == 'admin123') {
        $_SESSION['username'] = $username;
        header("Location: dashboard.php");
        exit();
    } else {
        $error = "Username atau password salah!";
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Sistem Sewa Outdoor</title>
    <link rel="stylesheet" href="style.css"> 
    <style>

        body {
            font-family: sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: var(--light-color);
        }

        .login-wrapper {
            display: flex;
            width: 900px;
            max-width: 90%;
            min-height: 500px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            border-radius: 12px;
            overflow: hidden;
        }

        .login-branding {
            background-color: var(--primary-color);
            color: var(--light-color);
            padding: 40px;
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            text-align: center;
        }

        .login-branding h1 {
            font-size: 2.5em;
            line-height: 1.2; /* Menambahkan line height agar teks tidak terlalu rapat */
            color: var(--light-color);
            margin: 0;
        }

        .login-branding p {
            font-size: 1.1em;
            margin-top: 10px;
            color: rgba(245, 245, 240, 0.8);
        }

        .login-form-container {
            background-color: #ffffff;
            padding: 40px;
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .login-form-container h2 {
            color: var(--primary-color);
            text-align: center;
            margin-bottom: 25px;
        }
        
        .form-group {
            margin-bottom: 20px;
        }

        .form-group input[type="text"],
        .form-group input[type="password"] {
            width: 100%;
            padding: 14px 12px;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 1em;
            transition: border-color 0.3s ease, box-shadow 0.3s ease;
        }

        .form-group input[type="text"]:focus,
        .form-group input[type="password"]:focus {
            outline: none;
            border-color: var(--secondary-color); /* Warna Bronze saat input aktif */
            box-shadow: 0 0 5px rgba(205, 127, 50, 0.5);
        }

        .btn-login {
            width: 100%;
            padding: 14px;
            background-color: var(--primary-color);
            color: var(--light-color);
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-weight: bold;
            font-size: 1.1em;
            transition: background-color 0.3s ease;
        }

        .btn-login:hover {
            background-color: var(--secondary-color); /* Efek hover menjadi warna Bronze */
        }
        
        .error-message {
            color: #e74c3c;
            background-color: #fdd;
            border: 1px solid #e74c3c;
            padding: 10px;
            border-radius: 5px;
            text-align: center;
            margin-bottom: 20px;
        }

        /* Responsivitas untuk mobile */
        @media (max-width: 768px) {
            .login-wrapper {
                flex-direction: column;
                min-height: auto;
            }
            .login-branding, .login-form-container {
                padding: 30px;
            }
        }
    </style>
</head>
<body>
    <div class="login-wrapper">
        <div class="login-branding">
            <h1>Sistem Sewa Alat Outdoor & Camping</h1>
            <p>Masuk untuk mengelola inventaris dan pesanan.</p>
        </div>
        <div class="login-form-container">
            <h2>Admin Login</h2>
            <?php if ($error): ?>
                <p class="error-message"><?php echo $error; ?></p>
            <?php endif; ?>
            <form action="login.php" method="POST">
                <div class="form-group">
                    <input type="text" name="username" placeholder="Username" required>
                </div>
                <div class="form-group">
                    <input type="password" name="password" placeholder="Password" required>
                </div>
                <button type="submit" class="btn-login">Login</button>
            </form>
        </div>
    </div>
</body>
</html>