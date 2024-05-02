<?php
require_once '../../config/connection.php';

$message = ""; // Variable para almacenar el mensaje

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];
    try {
        $connect = Connection::connect();
        $sql = "DELETE FROM users WHERE id_user = :id";
        $stmt = $connect->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

        // Verificar si se eliminó algún usuario
        if ($stmt->rowCount() > 0) {
            // Usuario eliminado correctamente
            $message = "Usuario eliminado correctamente.";
        } else {
            // No se encontró el usuario para eliminar
            $message = "Usuario no encontrado.";
        }
        header("location: ../../components/users/users-start.php");
    } catch (PDOException $e) {
        // Asigna el mensaje de error
        $message = "Error al eliminar usuario: " . $e->getMessage();
    }
} else {
    // Mensaje de error de entrada no válida
    $message = "ID de usuario no válido.";
}
