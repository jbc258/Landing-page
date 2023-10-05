<?php
session_start();
include('conexao.php');

if (isset($_SESSION['usuario']) && isset($_POST['id_pokemon_selecionado'])) {
    $usuario = $_SESSION['usuario'];
    $id_pokemon = $_POST['id_pokemon_selecionado'];

    // Verifica se o usuário já selecionou um Pokémon anteriormente
    $sqlVerifica = "SELECT id FROM pokemons_selecionados WHERE usuario_id = (SELECT id FROM usuarios WHERE email = '$usuario')";
    $resultVerifica = $mysqli->query($sqlVerifica);

    if ($resultVerifica->num_rows > 0) {
        echo "Você já selecionou um Pokémon anteriormente.";
    } else {
        // Insira o Pokémon selecionado na tabela "pokemons_selecionados"
        $sqlInserir = "INSERT INTO pokemons_selecionados (usuario_id, pokemon_id) VALUES (
            (SELECT id FROM usuarios WHERE email = '$usuario'),
            $id_pokemon
        )";

        if ($mysqli->query($sqlInserir)) {
            echo "Pokémon selecionado com sucesso!";
        } else {
            echo "Erro ao selecionar o Pokémon: " . $mysqli->error;
        }
    }
} else {
    echo "Erro: Usuário não logado ou ID do Pokémon não fornecido.";
}

$mysqli->close();
?>
