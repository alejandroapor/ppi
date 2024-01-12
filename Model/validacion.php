<?php

if (!empty($_POST["btningresar"])) {
    if (!empty($_POST["usuario"]) && !empty($_POST["contrasena"])) {
        $usuario = $_POST["usuario"];
        $contrasena = $_POST["contrasena"];

        try {
            $conexion = conectarBaseDeDatos(); // Suponiendo que tienes la función conectarBaseDeDatos() definida
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $sql = "SELECT id, nombre, rol FROM usuarios WHERE nombre = :usuario AND contra = :contrasena;";
            $stmt = $conexion->prepare($sql);
            $stmt->bindParam(':usuario', $usuario);
            $stmt->bindParam(':contrasena', $contrasena);
            $stmt->execute();

            $result = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($result) {
                if ($result['id'] >= 1) {
                    $_SESSION["id"] = $result['id'];
                    $_SESSION["nombre"] = $result['nombre'];
                    $_SESSION["rol"] = $result['rol'];

                    header("Location: ../index2.php");
                    exit(); // Salir del script después de redireccionar
                } else {
                    // Mostrar el alerta de acceso denegado si el usuario está en un estado falso
                    echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>';
                    echo '<script>
                        document.addEventListener("DOMContentLoaded", function() {
                            Swal.fire({
                                icon: "error",
                                title: "Acceso no permitido",
                                text: "El acceso no está permitido en este momento.",
                            });
                        });
                    </script>';
                }
            } else {
                // Mostrar el alerta de error para credenciales incorrectas
                echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>';
                echo '<script>
                    document.addEventListener("DOMContentLoaded", function() {
                        Swal.fire({
                            icon: "error",
                            title: "Error",
                            text: "Usuario o contraseña incorrectos!",
                        });
                    });
                </script>';
            }
        } catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
        finally {
            $conexion = null; // cerrar la conexión
        }
    }
}
?>
