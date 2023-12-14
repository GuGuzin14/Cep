<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes do Cadastro</title>
    <style>
        body {
            background-color: #000;
            color: #fff;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            text-align: center;
        }

        h1 {
            color: #fff;
        }

        table {
            border-collapse: collapse;
            width: 80%;
            margin: 0 auto;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #fff;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #333;
            color: #fff;
        }

        tr:nth-child(even) {
            background-color: #555;
        }

        tr:hover {
            background-color: #777;
        }

        p {
            font-size: 18px;
        }

        input[type="submit"] {
            background-color: #fff;
            color: #000;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            margin-top: 20px;
            margin-bottom: 50px;
        }

        input[type="submit"]:hover {
            background-color: #ccc;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Detalhes do Cadastro</h1>

        <?php
           $servername = "localhost";
           $username = "root"; // Nome de usuário do MySQL, frequentemente "root" para ambientes de desenvolvimento local.
           $password = ""; // Senha do seu banco de dados local, normalmente vazia "" ou "root".
           $dbname = "cep"; // Nome do banco de dados que você criou para armazenar os dados dos usuários.
           
           $conn = new mysqli($servername, $username, $password, $dbname);
           
           if ($conn->connect_error) {
               die("Conexão falhou: " . $conn->connect_error);
           }
           
           $sql = "SELECT * FROM usuarios";
           $result = $conn->query($sql);
           
           if ($result->num_rows > 0) {
               echo "<table>";
               echo "<tr><th>Nome</th><th>Idade</th><th>CPF</th><th>CEP</th><th>Rua</th><th>Número</th><th>Bairro</th><th>Cidade</th><th>Estado</th></tr>";
               while ($row = $result->fetch_assoc()) {
                   echo "<tr>";
                   echo "<td>" . $row['nome'] . "</td>";
                   echo "<td>" . $row['idade'] . "</td>";
                   echo "<td>" . $row['cpf'] . "</td>";
                   echo "<td>" . $row['cep'] . "</td>";
                   echo "<td>" . $row['rua'] . "</td>";
                   echo "<td>" . $row['numero'] . "</td>";
                   echo "<td>" . $row['bairro'] . "</td>";
                   echo "<td>" . $row['cidade'] . "</td>";
                   echo "<td>" . $row['estado'] . "</td>";
                   echo "</tr>";
               }
               echo "</table>";
           } else {
               echo "Nenhum registro encontrado.";
           }
           $conn->close();
        ?>

        <a href="index.php">
            <input type="submit" value="Voltar">
        </a>
    </div>
</body>
</html>
