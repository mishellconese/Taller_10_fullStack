<?php
    echo "<h2>Números Pares del 0 al 100:</h2>";
    echo "<ul>";
    
    $num = 0;
    while ($num <= 100) {
        echo "<li>$num</li>";
        $num += 2;
    }
?>