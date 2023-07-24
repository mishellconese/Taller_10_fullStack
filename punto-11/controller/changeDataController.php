<?php
    echo "<h2>Números Pares del 0 al 100:</h2>";
    echo "<ul>";
    
    $sumaPares = 0;
    for ($num = 0; $num <= 100; $num += 2) {
        echo "<li>$num</li>";
        $sumaPares += $num;
    }
?>