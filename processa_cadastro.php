<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recuperar os dados do formulário
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $cpf = $_POST['cpf'];
    $cep = $_POST['cep'];
    $rua = $_POST['rua'];
    $numero = $_POST['numero'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];

    // Conectar ao banco de dados
    $servername = "localhost";
    $username = "root"; // Nome de usuário do MySQL, frequentemente "root" para ambientes de desenvolvimento local.
    $password = ""; // Senha do seu banco de dados local, normalmente vazia "" ou "root".
    $dbname = "cep"; // Nome do banco de dados que você criou para armazenar os dados dos usuários.
    

    // Criar a conexão
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verificar a conexão
    if ($conn->connect_error) {
        die("Conexão falhou: " . $conn->connect_error);
    }

    // Inserir os dados na tabela de usuários
    $sql = "INSERT INTO usuarios (nome, idade, cpf, cep, rua,numero, bairro, cidade, estado)
    VALUES ('$nome', '$idade', '$cpf', '$cep', '$rua','$numero', '$bairro', '$cidade', '$estado')";

    if ($conn->query($sql) === TRUE) {
        // Redirecionar para a próxima página após o cadastro
        header("Location: detalhes_cadastro.php?id=" . $conn->insert_id);
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>