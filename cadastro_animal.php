<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de animal</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <form action="CadastroClientExe.php" method="post">
        <fieldset class="agrup">
            <legend>Cadastro de animal</legend>
            <div>
                <label for="nome">Nome:</label>
                <input type="text" name="nome" id="nome">
            </div>

            <div>
                <label for="especie">Espécie:</label>
                <input type="text" name="Especie" id="Especie">
            </div>
            <div>
                <label for="raca">Raça:</label>
                <input type="text" name="Raca" id="Raca">
            </div>
            <div>
                <label for="id_animal">ID do animal:</label>
                <input type="text" name="id_animal" id="id_animal">
            </div>
            <div>
                <label for="data_nascimento">Data de nascimento:</label>
                <input type="date" name="Data" id="Data">
            </div>
            <div>
                <button type="submit">Cadastrar</button>
            </div>
        </fieldset>

    </form>

    <div class="back-button">
        <button><a href="cadastro.html">Voltar para a página inicial</a></button> 
    </div>

</body>
</html>
