<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="styles.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Clientes</title>
    <?php
        include('menu.php');
    ?>
</head>
<body>
    <form action="CadastroClienteExe.php" method="post">
        <fieldset>
        <legend>Cadastro de Clientes</legend>
        <div>
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome">
        </div>
        <div>
            <label for="email">E-mail</label>
            <input type="text" name="email" id="email">
        </div>
        <div>
            <label for="endereco">endereço</label>
            <input type="text" name="endereco" id="endereco">

        </div>
        <div>
            <label for="bairro">bairro</label>
            <input type="text" name="bairro" id="bairro">
            
        </div>
        <div>
            <label for="cep">CEP</label>
            <input type="number" name="cep" id="cep">
            
        </div>

        <div>
            <label for="cidade">Cidade</label>
            <select name="cidade" id="cidade">
        </div>
            <?php 
                include('includes/conexao.php');
                $sql = "SELECT * FROM cidade";
                $result = mysqli_query($con,$sql);
                while($row = mysqli_fetch_array($result)){
                    echo "<option value='".$row['id']."'>"
                         .$row['nome_cidade']."/".$row['estado']
                        ."</option>";
                }
            ?>
            </select>
        </div>
        <div>
            <button type="submit">Cadastrar</button>
        </div>
        </fieldset>
    </form>
</body>
</html>