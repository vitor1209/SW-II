<?php

   $usuarios = [
        [
            "id" => 1,
            "nome" => "Lopes",
            "email" => "lopes.gmail.com"
        ],
        [
            "id" => 2,
            "nome" => "Maria",
            "email" => "maria@gmail.com"
        ],
        [
            "id" => 3,
            "nome" => "João",
            "email" => "joao@gmail.com"
        ]
    ];

    $json = json_encode($usuarios);
    file_put_contents("usuarios.json", $json);

    $conteudo = file_get_contents("usuarios.json");
    $dados = json_decode($conteudo, true);
    
    foreach ($dados as $chave => $valor) {
        if ($dados['id'])
        echo "A chave é: $chave ==> $valor <br>";
    }

?>