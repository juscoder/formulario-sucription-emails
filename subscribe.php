<?php
// Configuración de la base de datos
$servername = "localhost";  // Cambia esto si tu servidor es diferente
$username = "root";   // Cambia a tu usuario de MySQL
$password = ""; // Cambia a tu contraseña de MySQL
$dbname = "suscripciones_db";

// Conectar a la base de datos
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Procesar formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];

    // Evitar inyección SQL
    $email = $conn->real_escape_string($email);

    // Insertar en la base de datos
    $sql = "INSERT INTO suscripciones (email) VALUES ('$email')";

    if ($conn->query($sql) === TRUE) {
        // Redirigir con éxito
        header("Location: index.php?success=1");
    } else {
        // Redirigir con error
        header("Location: index.php?error=1");
    }
}

// Cerrar conexión
$conn->close();
?>
