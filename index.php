<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuário</title>
    <style>
        body {
            background-color: gray; /* Cor de fundo do corpo da página */
        }
        
        form {
            max-width: 500px;
            margin: 0 auto;
            background-color: #000;
            color: #fff;
            padding: 50px;
            border-radius: 10px;
            margin-top: 50px;
        }

        label, input {
            display: block;
            margin-bottom: 10px;
        }

        input {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
        }

        input[type="submit"] {
            background-color: #fff;
            color: #000;
            cursor: pointer;
            width: 104%;
        }
        H1{
            -webkit-text-stroke-width: 1px;
-webkit-text-stroke-color: #ffffff;
font-size: 3em; color: #000;
        }
    </style>
</head>
<body>
    <center><h1>CEP - BRASIL</h1></center> <!-- Adicionado o título "CEP" aqui -->
    
    <form action="processa_cadastro.php" method="post">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>
        <br><br>
        
        <label for="idade">Idade:</label>
        <input type="number" id="idade" name="idade" required>
        <br><br>

        <label for="cpf">CPF:</label>
        <input type="text" id="cpf" name="cpf" required>
        <br><br>

        <label for="cep">CEP:</label>
        <input type="text" id="cep" name="cep" required>
        <br><br>

        <label for="rua">Rua:</label>
        <input type="text" id="rua" name="rua" >
        <br><br>
        <label for="rua">Numero:</label>
        <input type="text" id="numero" name="numero" required >
        <br><br>

        <label for="bairro">Bairro:</label>
        <input type="text" id="bairro" name="bairro" >
        <br><br>

        <label for="cidade">Cidade:</label>
        <input type="text" id="cidade" name="cidade" required>
        <br><br>

        <label for="estado">Estado:</label>
        <input type="text" id="estado" name="estado" required>
        <br><br>

        <input type="submit" value="Cadastrar">
    </form>

    <script>
        document.getElementById('cep').addEventListener('blur', function() {
            const cep = this.value.replace(/\D/g, '');

            if (cep) {
                const url = `https://viacep.com.br/ws/${cep}/json/`;

                fetch(url)
                    .then(response => response.json())
                    .then(data => {
                        document.getElementById('rua').value = data.logradouro;
                        document.getElementById('bairro').value = data.bairro;
                        document.getElementById('cidade').value = data.localidade;
                        document.getElementById('estado').value = data.uf;
                    })
                    .catch(error => console.log('Erro ao buscar CEP:', error));
            }
        });
    </script>
</body>
</html>


