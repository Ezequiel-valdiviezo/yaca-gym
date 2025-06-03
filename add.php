<?php
session_start();
if (!isset($_SESSION['logged_in'])) {
    header('Location: index.php');
    exit;
}

// Clientes de ejemplo
$clientes = [
    ["Juan", "Pérez", "2025-06-01", "Libre"],
    ["Pedro", "López", "2025-05-03", "8 Clases"],
    ["María", "García", "2025-06-02", "4 Clases"],
    ["Lucía", "Martínez", "2025-06-01", "Libre"],
    ["Carlos", "Sánchez", "2025-05-28", "12 Clases"],
    ["Ana", "Fernández", "2025-06-03", "Libre"],
    ["Diego", "Ramírez", "2025-05-30", "6 Clases"],
    ["Laura", "Torres", "2025-06-01", "2 Clases"],
    ["Sofía", "Flores", "2025-06-05", "Libre"],
    ["Miguel", "Ruiz", "2025-05-25", "10 Clases"],
    ["Valentina", "Ortiz", "2025-06-04", "Libre"],
    ["Julián", "Morales", "2025-05-29", "1 Clase"],
    ["Camila", "Silva", "2025-06-02", "Libre"],
    ["Franco", "Castro", "2025-05-31", "8 Clases"],
    ["Martina", "Romero", "2025-06-06", "3 Clases"],
    ["Bruno", "Alvarez", "2025-06-01", "Libre"],
    ["Agustina", "Molina", "2025-06-03", "Libre"],
    ["Nicolás", "Vega", "2025-05-27", "7 Clases"],
    ["Julieta", "Herrera", "2025-06-04", "Libre"],
    ["Tomás", "Medina", "2025-05-26", "5 Clases"],
    ["Isabella", "Navarro", "2025-06-02", "Libre"],
    ["Mateo", "Aguilar", "2025-06-03", "2 Clases"],
    ["Emilia", "Delgado", "2025-06-01", "Libre"],
    ["Benjamín", "Figueroa", "2025-05-30", "4 Clases"],
    ["Florencia", "Ibarra", "2025-06-05", "Libre"],
];

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- DataTables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
</head>
<body class="bg-gray-100 p-8">
    <div class="flex justify-between items-center mb-8">
        <h1 class="text-3xl font-bold">Clientes</h1>
        <a href="logout.php" class="bg-red-500 text-white px-4 py-2 rounded">Cerrar sesión</a>
    </div>

    <div class="text-center mb-6">
        <button class="bg-green-500 text-white px-4 py-2 rounded"><a href="./dashboard.php">Volver</a></button>
    </div>

    <!-- Formulario -->
    <div class="bg-white p-6 rounded shadow">
        <h2 class="text-xl font-semibold mb-4">Agregar Cliente</h2>
        <form>
            <div class="grid grid-cols-2 gap-4 mb-4">
                <input type="text" placeholder="Nombre" class="border px-4 py-2 rounded" required>
                <input type="text" placeholder="Apellido" class="border px-4 py-2 rounded" required>
                <input type="date" class="border px-4 py-2 rounded" required>
                <select class="border px-4 py-2 rounded" required>
                    <option value="">Seleccione plan</option>
                    <option>A</option>
                    <option>B</option>
                    <option>C</option>
                </select>
            </div>
            <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded">Guardar</button>
        </form>
    </div>

    <script>
        $(document).ready(function () {
            $('#clientes').DataTable({
                language: {
                    url: '//cdn.datatables.net/plug-ins/1.13.6/i18n/es-ES.json'
                }
            });
        });
    </script>
</body>
</html>
