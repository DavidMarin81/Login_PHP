<?php
session_start();
require 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username']); // Elimina espacios en blanco
    $password = $_POST['password'];

    // Buscar usuario en la base de datos
    $stmt = $conn->prepare("SELECT password FROM usuarios WHERE username = ?");
    if (!$stmt) {
        die("Error en la consulta: " . $conn->error);
    }

    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();
    
    if ($stmt->num_rows > 0) {
        $stmt->bind_result($hash);
        $stmt->fetch();

        // Verificar si la contraseña ingresada coincide con el hash
        if (password_verify($password, $hash)) {
            $_SESSION['usuario'] = $username;
            header("Location: index.php");
            exit();
        } else {
            header("Location: login.php?error=incorrecto");
            exit();
        }
    } else {
        header("Location: login.php?error=usuario_no_encontrado");
        exit();
    }

    $stmt->close();
}
?>
