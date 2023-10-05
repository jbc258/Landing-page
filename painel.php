<?php
session_start();
include('conexao.php');

$usuario = isset($_SESSION['usuario']) ? $_SESSION['usuario'] : null;
$mostrarSelecao = true;

if ($usuario) {
    // Parte de consultar o SQL para pegar o ID do Pokémon selecionado pelo usuário
    $sql = "SELECT pokemon_id FROM pokemons_selecionados WHERE usuario_id = (SELECT id FROM usuarios WHERE email = '$usuario')";
    $result = $mysqli->query($sql);

    if ($result->num_rows > 0) {
        $mostrarSelecao = false; // Fica false quando já tiver um pokemon escolhido pelo usuário
        $row = $result->fetch_assoc();
        $pokemonId = $row['pokemon_id'];

        // Parte referente a consulta do SQL para saber o pokemon escolhido
        $sqlDetalhes = "SELECT nome, tipo, imagem_url FROM pokemon WHERE id = $pokemonId";
        $resultDetalhes = $mysqli->query($sqlDetalhes);

        if ($resultDetalhes->num_rows > 0) {
            $rowDetalhes = $resultDetalhes->fetch_assoc();
            $nomePokemon = $rowDetalhes['nome'];
            $tipoPokemon = $rowDetalhes['tipo'];
            $imagemPokemon = $rowDetalhes['imagem_url'];
        } else {
            echo "Pokémon não encontrado.";
        }
    }
} else {
    echo "Erro: Usuário não logado.";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel do Usuário</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #cdcaca;
            color: #333;
        }

        header {
            background-color: #333;
            padding: 20px;
        }

        nav ul {
            margin: 0;
            padding: 0;
            list-style: none;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        nav li {
            margin: 0 10px;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            font-size: 18px;
        }

        .social-logo {
            width: 30px;
            height: 30px;
        }

        main {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: 50px auto;
            max-width: 800px;
        }

        h1 {
            font-size: 2rem;
            text-align: center;
            margin-bottom: 20px;
            font-family: fantasy;
        }

        p {
            font-size: 1.2rem;
            text-align: center;
        }

        .container {
            max-width: 400px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            font-family: cursive;
            font-size: 17px;
        }

        .container h1 {
            text-align: center;
            color: #333;
        }

        .message {
            margin-bottom: 20px;
            text-align: center;
            color: #333;
        }

        .btn {
            display: block;
            width: 25%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            text-align: center;
            text-decoration: none;
            border-radius: 19px;
            cursor: pointer;
            margin-top: 4%;
        }

        .btn:hover {
            background-color: #45a049;
        }

        .subtitle {
            font-size: 20px;
            margin-top: 115px;
        }

        .escolha {
            font-family: cursive;
            position: absolute;
            font-size: 2vw;
            background-color: white;
            width: 34%;
            height: 10%;
            text-align: center;
            border-radius: 20px;
            margin-top: 11%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .imagem-container {
            display: flex;
            justify-content: space-between;
            margin-top: 30px;
        }

        .imagem-poke {
            margin-right: 10px;
        }

        .imagem-poke img {
            margin-top: 90px;
            max-width: 100%;
        }

        .bolinha {
            width: 10px;
            height: 10px;
            background-color: gray;
            border-radius: 50%;
            margin: 5px;
            cursor: pointer;
        }

        .bolinha.selecionada {
            background-color: #007BFF;
        }

        .imagem-poke.selecionada {
            border: 2px solid #007BFF;
        }

        .btn-selecionar {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #007BFF;
            color: white;
            text-align: center;
            text-decoration: none;
            border-radius: 3px;
            cursor: pointer;
            margin-top: 20px;
            font-size: 18px;
            border: none;
            transition: background-color 0.3s;
        }

        .btn-selecionar:hover {
            background-color: #0056b3;
        }

        .fundo-charmander {
         background-color: #FF4500; 
        }   

        .fundo-bulbassauro {
        background-color: #228B22; 
        }

        .fundo-squirtle {
        background-color: #87CEEB; 
        }

        
        <?php if (!$mostrarSelecao) { ?>
        .selecao {
            display: none;
        }
        <?php } ?>
    </style>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="http://localhost/Pokedex/index.php">Home</a></li>
                <li><a href="http://localhost/Pokedex/pokedex.php">Pokedex</a></li>
                <li><a href="https://www.instagram.com/julio_casablancas/" target="_blank"><img class="social-logo" src="imagens/instagram-social.png"></a></li>
                <li><a href="https://www.linkedin.com/in/julio-bonfatti-cremasco-4b0489114/" target="_blank"><img class="social-logo" src="imagens/linkedin.png"></a></li>
            </ul>
        </nav>
        
    
    </header>
    
    <main>
    <div class="container">
            Bem vindo ao Painel, <?php echo isset($_SESSION['nome']) ? $_SESSION['nome'] : 'nome'; ?>.
        </div>
    <?php if ($mostrarSelecao) { ?>
    <!-- Parte da seleção de pokemon -->
    <div class="selecao">
        <div class="imagem-container">
            <!-- Esses são os pokemons disponíveis para seleção -->
            <div class="imagem-poke">
                <img src="imagens\bulbassauro.png">
                <div class="info-pokemon">
                    <p class="nome">bulbassauro</p>
                    <p class="tipo">Grama / Venenoso</p>
                </div>
                <div class="bolinha"></div>
            </div>
        
            <div class="imagem-poke">
                <img src="imagens\charmander.png">
                <div class="info-pokemon">
                    <p class="nome">charmander</p>
                    <p class="tipo">Fogo</p>
                </div>
                <div class="bolinha"></div>
            </div>
            <div class="imagem-poke">
                <img src="imagens\squirtle.png">
                <div class="info-pokemon">
                    <p class="nome">squirtle</p>
                    <p class="tipo">Água</p>
                </div>
                <div class="bolinha"></div>
            </div>
           
        </div>
        <form id="pokemon_form" method="post" action="salvar_pokemon.php">
            <input type="hidden" id="id_pokemon_selecionado" name="id_pokemon_selecionado" value="">
            <button class="btn-selecionar" onclick="selecionarPokemon()">Selecionar Pokémon</button>
        </form>
    </div>
    <?php } else { ?>
    <!-- Parte que exibe o pokemon escolhido -->
    <div class="escolha">
        Seu Pokémon selecionado:
    </div>
    <div class="imagem-container">
        <div class="imagem-poke">
            <?php
            if (isset($imagemPokemon)) {
                echo "<img src='$imagemPokemon' alt='$nomePokemon'>";
            } else {
                echo "Nenhum Pokémon selecionado.";
            }
            ?>
        </div>
    </div>
    <?php } ?>
         
        <form id="pokemon_form" method="post" action="salvar_pokemon.php">
            <input type="hidden" id="id_pokemon_selecionado" name="id_pokemon_selecionado" value="">
        </form>
    </div>

        <a class="btn" href="index.php">Sair</a>
    </main>
   

<script>
    const bolinhas = document.querySelectorAll('.bolinha');
    const imagens = document.querySelectorAll('.imagem-poke');

    bolinhas.forEach((bolinha, index) => {
        bolinha.addEventListener('click', () => {
            bolinhas.forEach((b) => b.classList.remove('selecionada'));
            imagens.forEach((imagem) => imagem.classList.remove('selecionada'));

            bolinha.classList.add('selecionada');
            imagens[index].classList.add('selecionada');
        });
    });

    function selecionarPokemon() {
    const pokemonSelecionado = document.querySelector('.bolinha.selecionada');
    if (pokemonSelecionado !== null) {
        const index = Array.from(bolinhas).indexOf(pokemonSelecionado);
        const idPokemonSelecionado = index + 1;

        document.getElementById('id_pokemon_selecionado').value = idPokemonSelecionado;

        var xhr = new XMLHttpRequest();
        xhr.open('POST', 'salvar_pokemon.php', true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4 && xhr.status === 200) {
                alert(xhr.responseText);
            } else if (xhr.readyState === 4 && xhr.status !== 200) {
                alert('Erro ao enviar a solicitação.');
            }
        };
        xhr.send('id_pokemon_selecionado=' + idPokemonSelecionado);

        const nomesPokemons = ["bulbassauro", "charmander", "squirtle"];
        const nomePokemonSelecionado = nomesPokemons[index];

        alert('Nome do Pokémon selecionado: ' + nomePokemonSelecionado);
        
        // Define a cor de fundo do corpo com base no nome do Pokémon selecionado
        if (nomePokemonSelecionado) {
            if (nomePokemonSelecionado === "bulbassauro") {
                document.body.style.backgroundColor = '#228B22#FF4500'; // Vermelho para Charmander
            } else if (nomePokemonSelecionado === "charmander") {
                document.body.style.backgroundColor = '#FF4500'; // Verde para Bulbassauro
            } else if (nomePokemonSelecionado === "squirtle") {
                document.body.style.backgroundColor = '#87CEEB'; // Azul para Squirtle
            }
        }
    } else {
        alert('Por favor, selecione um Pokémon antes de confirmar.');
    }
}


</script>

</body>
</html>

