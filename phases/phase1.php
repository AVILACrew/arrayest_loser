<?php 
    include './datasets/dataset1.php';

    foreach ($mentors as $mentor) {
        var_dump($mentor);
    };

    for ($i = 0; $i < sizeof($mentors); $i++) {
        var_dump($mentors[$i]);
    };
    
    for ($i = 0; $i < count($mentors); $i++) {
        var_dump($mentors[$i]);
    };
    
    // ....
?>
