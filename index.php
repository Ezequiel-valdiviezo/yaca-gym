<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user = $_POST['username'] ?? '';
    $pass = $_POST['password'] ?? '';

    // Login fijo
    if ($user === 'admin' && $pass === '1234') {
        $_SESSION['logged_in'] = true;
        header('Location: dashboard.php');
        exit;
    } else {
        $error = "Usuario o contraseña incorrectos.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">

</head>
<body>
        <style>
        *{
        font-family: "Bebas Neue", sans-serif;
        font-weight: 400;
        font-style: normal;
        }
        h1{
            color: white;
            font-size: 2rem;
        }
    </style>
    <div class="flex items-center justify-center h-screen bg-gray-800 sm:px-6">
    <div class="w-full max-w-sm p-4 bg-gray-900 rounded-md shadow-md sm:p-6">
        <div class="flex flex-col items-center justify-center">
            <h1 class="bebas-neue-regular">YACA GYM</h1>
            <img src="./img/logo2.png" width="200px" alt="">
            <span class="text-xl font-medium text-white mt-4">Iniciar Sesión</span>
        </div>

        <?php if (!empty($error)): ?>
            <p class="text-red-500 text-sm mb-4"><?= $error ?></p>
        <?php endif; ?>
        <form method="post" class="mt-4">
            <label for="email" class="block">
                <input type="text" name="username" placeholder="Usuario"
                    class="block w-full px-3 py-2 mt-1 text-white bg-gray-700 rounded-md focus:outline-none focus:shadow-outline focus:bg-gray-800"
                    required />
            </label>
            <label for="password" class="block mt-3">
                <input type="password" name="password" placeholder="Contraseña"
                    class="block w-full px-3 py-2 mt-1 text-white bg-gray-700 rounded-md focus:outline-none focus:shadow-outline focus:bg-gray-800"
                    required />
            </label>
            <div class="mt-6">
                <button type="submit" class="w-full bg-blue-500 hover:bg-blue-600 text-white py-2 rounded">Iniciar Sesión</button>

            </div>
        </form>
    </div>
</div>
</body>
</html>
