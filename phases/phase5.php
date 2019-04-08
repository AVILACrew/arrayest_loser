<?php 
    include './datasets/dataset5.php';

    $total = 0;

    foreach ($recipes as $ingredient => $quantity) {
        foreach ($ingredients as $name => $values) {
            if ($name === $ingredient) {
                $total += $values * $quantity;
            }
        }
    }
    echo $total;

?>
