<!DOCTYPE html>
<html lang ="pt-BR" class>
<head>
    <style>
        .header {
  background-color: #000000;
  color: #ffffff;
        }
        body{
    background-color: #000000;
    color: #ffffff;
        }
    </style>
    <link rel="icon" href="https://cdn-icons-png.flaticon.com/512/2927/2927547.png" type="image/png">
    <meta charset="UTF-8">
    <title>Calculadora</title>
</head>
<body>
    <header class="header">
        <h1>Calculadora</a></h1>
    </header>
    <hr/>
    <h2>Realize suas operações</h2>
<hr/>
    <p>Calculadora<p>
        <ul>
            <form action="calculadora.php" method="post">
                <li>Primeiro Número</li> : <input type="number" name="num1" placeholder="0" maxlength="255"/>
            </form>
            <form action="calculadora.php" method="post">
                <li>Segundo Número</li> : <input type="number" name="num2" placeholder="0" maxlength="255"/>
            
            <fieldset>
                <legend>Operação</legend>
                <select name="operacão">
                <option value="soma">Soma</option>
                <option value="subtracao">Subtração</option>
                <option value="multiplicacao">Multiplicação</option>
                <option value="divisao">Divisão</option><br> <br>
                </select>
                    <input type="submit" name="Resultado" value="resultado">
            </fieldset>
            </form>
        </ul>
           
 
</body>
</html>