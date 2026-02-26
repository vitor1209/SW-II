<?php

    $nomes = ["eu", "tu", "nós"];

    for ($i=1; $i < count($nomes); $i++) { 
        echo $nomes[$i];
        echo "<br>";
    }
    echo "<hr>";


    foreach ($nomes as $key => $value) {
      echo $value . "<br>";
    }

?>