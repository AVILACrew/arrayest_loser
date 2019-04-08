<?php 
    include './datasets/dataset3.php';

    $id = $_GET['id'];
  
    echo $mentors[$id]['name'];
    echo $mentors[$id]['description'];
    echo $mentors[$id]['photo'];
    echo $mentors[$id]['weight_before'];
    echo $mentors[$id]['weight_after'];
    echo $mentors[$id]['role'];

    echo $mentors[$id]['weight_after'] - $mentors[$id]['weight_before'];
?>
