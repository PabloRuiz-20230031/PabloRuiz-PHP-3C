<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $User = !empty($_POST['user']) ? $_POST['user'] : "vacio";
    $Pass = !empty($_POST['password']) ? $_POST['password'] : "vacio";
    $Edad = !empty($_POST['edad']) ? $_POST['edad'] : "vacio";

    if ($User == "vacio" || $Pass == "vacio" || $Edad == "vacio") {
        echo "Existen campos no validos";
    } else if (!is_numeric($Edad) || $Edad < 18 || $User != "luis" || $Pass != "mendoza") {
        echo "Login incorrecto";
    } else {
        echo "Login exitoso";
    }
} else {
    echo "Algo no está del todo bien " . $_SERVER['REQUEST_METHOD'];
}
?>