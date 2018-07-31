<?php

    require "conexion.php";
    require "config.php";

    echo "BUSCAR POKEMON <br>";
    
    $data = json_decode( file_get_contents("https://pokeapi.co/api/v2/pokemon/1/"), true);


    echo "Nombre Pokemon: " . ($data['name']) . "<br>";
    echo "Habilidad: " . ($data['abilities'][0]['ability']['name']) . "<br>";
    echo "Peso: " .($data['weight']) . "<br>";
    echo "Altura: " .($data['height']) . "<br>";

    
    // GUARDAR EN LA BASE DE DATOS

    $nombre = ($data['name']);
    $habilidad = ($data['abilities'][0]['ability']['name']);
    $peso = ($data['weight']);
    $altura = ($data['height']);

    $conexion = new conexion(DB_HOST,DB_USER,DB_PASS,DB_NAME,DB_CHARSET);

    //$resultCantidad = $conexion->insertarPokemon();
        
?>