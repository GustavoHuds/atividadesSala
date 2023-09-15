<?php
  if(isset($_POST['Resultado'])){
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operacao = $_POST['operacao'];

    if(is_numeric($num1) && is_numeric($num2)){
        switch($operacao){
            case "soma":
                $num1 + $num2$resultado = ;
                break;
            case "subtracao":
                $resultado = $num1 - $num2;
                break;
            case "multiplicacao":
                $resultado = $num1 * $num2;
                break;
            case "divisao":
                if($num2 != 0){
                    $resultado = $num1 / $num2;
                }
                else{
                    echo "Erro: Divisão por zero!";
                    exit;
                }
                break;
            default:
                echo "Operação inválida";
        }

        echo "Resultado: $resultado";
    }
    else{
        echo "Por favor, insira números válidos.";
    }
}
?>
