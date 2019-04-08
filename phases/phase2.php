<?php 
    include './datasets/dataset2.php';

    $i = 0;
    foreach ($mentors as $key => $photos) {
        echo 'id: '. $i . PHP_EOL;
        echo 'name : '. $key . PHP_EOL;
        echo 'photo : '. $photos . PHP_EOL;        
        $i++;
    };

    // $keys = array_keys($mentors);
    // for ($i = 0; $i < count($keys); $i++) {
    //     var_dump($mentors[$keys[$i]]);
    // };

    // for ($i = 0; $i < sizeof($mentors); $i++) {
    //     var_dump(array_values($mentors)[$i]);
    // };
    
    // for ($i = 0; $i < count($mentors); $i++) {
    //     var_dump(array_values($mentors)[$i]);
    // };
    
    // ....
