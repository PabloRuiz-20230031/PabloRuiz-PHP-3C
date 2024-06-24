<?php
if ($_SERVER['REQUEST_METHOD'] == "POST")
{
        if (isset($_POST['num1']) && isset($_POST['num2']) && isset($_POST['op'])) {
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $operacion = $_POST['op'];

            function suma($nm1,$nm2){
                return $nm1+$nm2;
            }
            function resta($nm1,$nm2){
                return $nm1-$nm2;
            }
            function multiplicacion($nm1,$nm2){
                return $nm1*$nm2;
            }
            function division($nm1,$nm2){
                if($nm2==0){
                    echo"No se puede dividir entre 0";
                }
                else {
                    return $nm1/$nm2;
                }
            }
            
            if (is_numeric($num1) && is_numeric($num2)) {
                $num1 = (float)$num1;
                $num2 = (float)$num2;
        
               
                switch ($operacion) {
                    case 'suma':
                        $resultado = suma($num1, $num2);
                        break;
                    case 'resta':
                        $resultado = resta($num1, $num2);
                        break;
                    case 'multiplicacion':
                        $resultado = multiplicacion($num1, $num2);
                        break;
                    case 'division':
                        $resultado = division($num1, $num2);
                        break;
                    default:
                        $resultado = "Operación no válida";
                }
            } else {
                $resultado = "Error: Por favor ingrese números válidos";
            }
        } else {
            $resultado = "Error: Datos no recibidos";
        }
        echo "Resultado: $resultado<br>";
        echo '<a href="calculadora.html">Volver</a>';
}
else {
    echo "Algo no está del todo bien " . $_SERVER['REQUEST_METHOD'];
}
?>