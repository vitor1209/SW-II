<?php

   $produtos = [
        [
            "produto" => "Teclado",
            "preco" => 150,
            "quantidade" => 20
        ],
        [
            "produto" => "Mouse",
            "preco" => 80,
            "quantidade" => 35
        ],
        [
            "produto" => "Monitor",
            "preco" => 900,
            "quantidade" => 10
        ]
    ];

    $json = json_encode($produtos);
    file_put_contents("produtos.json", $json);

?>