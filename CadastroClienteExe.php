<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="styles.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Cliente</title>    
    <?php
        include('menu.php');
    ?>    
</head>
<body>
    <?php
        include('includes/conexao.php');
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $cidade = $_POST['cidade'];
        $endereco = $_POST['endereco'];
        $bairro = $_POST['bairro'];
        $cep = $_POST['cep'];


        echo "<h1>Dados do cliente</h1>";
        echo "Nome: $nome<br>";
        echo "Email: $email<br>";
        echo "cidade: $cidade<br>";
        echo "bairro: $bairro<br>";
        echo "cep: $cep<br>";

        
        $sql = "INSERT INTO pessoa
                (nome,email,id_cidade,endereco,bairro,cep)";
        $sql .= " VALUES('".$nome."','".$email."','"
             .$cidade."',".$endereco.",'".$bairro."','".$cep."')";
        echo $sql;
        // Executa comando no banco de dados
        $result = mysqli_query($con,$sql);
        if($result){
            echo "<h2>Dados cadastrados com sucesso!</h2>";
        }else{
            echo "<h2>Erro ao cadastrar!</h2>";
            echo mysqli_error($con);
        }
    ?>    
</body>
</html>