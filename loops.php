<!-- 1 -->
<?php
    $nbr = 1;
    $limit = 10;
    while($nbr < $limit+1){
        echo "$nbr\n";
        $nbr++;
    }
?>

<!-- 2 -->
<?php
    for($nbr = 1; $nbr < $limit+1; $nbr++){
        echo "$nbr\n";
    }
?>

<!-- 3 -->
<?php
    $nbr = 1;
    $limit = 10;

    function echo_number($min, $max){
        while($min < $max+1){
            echo "$min\n";
            $min++;
        }
    }

    echo_number($nbr, $limit);
?>

<!-- 4 -->
<?php
    function echo_number_to_max($max){
        $nbr = 1;
        while($nbr < $max+1){
            echo "$nbr\n";
            $nbr++;
        }
    }

    echo_number_to_max(20);
?>