<?php
 
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Busca os dados dos clientes
$sql_clientes = "SELECT * FROM clientes";
$result_clientes = $conn->query($sql_clientes);

// Busca os dados dos animais
$sql_animais = "SELECT * FROM animais";
$result_animais = $conn->query($sql_animais);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados Cadastrados</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <h1>Dados Cadastrados</h1>
    
    <h2>Clientes</h2>
    <?php
    if ($result_clientes->num_rows > 0) {
        echo "<table border='1'>";
        echo "<tr><th>ID</th><th>Nome</th><th>Email</th><th>Endereço</th><th>Bairro</th><th>ID Cidade</th></tr>";
        while($row = $result_clientes->fetch_assoc()) {
            echo "<tr>
                    <td>{$row['id']}</td>
                    <td>{$row['nome']}</td>
                    <td>{$row['email']}</td>
                    <td>{$row['endereco']}</td>
                    <td>{$row['bairro']}</td>
                    <td>{$row['id_cidade']}</td>
                  </tr>";
        }
        echo "</table>";
    } else {
        echo "<p>Não há clientes cadastrados.</p>";
    }
    ?>

    <h2>Animais</h2>
    <?php
    if ($result_animais->num_rows > 0) {
        echo "<table border='1'>";
        echo "<tr><th>ID</th><th>Nome</th><th>Espécie</th><th>Raça</th><th>ID Animal</th><th>Data de Nascimento</th></tr>";
        while($row = $result_animais->fetch_assoc()) {
            echo "<tr>
                    <td>{$row['id']}</td>
                    <td>{$row['nome']}</td>
                    <td>{$row['especie']}</td>
                    <td>{$row['raca']}</td>
                    <td>{$row['id_animal']}</td>
                    <td>{$row['data_nascimento']}</td>
                  </tr>";
        }
        echo "</table>";
    } else {
        echo "<p>Não há animais cadastrados.</p>";
    }
    ?>

    <div class="back-button">
        <button><a href="cadastro.html">Voltar para a página inicial</a></button> 
    </div>
</body>
</html>

<?php
// Fecha a conexão
$conn->close();
?>
