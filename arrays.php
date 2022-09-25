<?php
// GLOBAL
    $array = array(5, 12, 10, 21, 2, 6, 8, 20, 14, 9, 12);
    $error = "This array does not only contain numeric values";

    function check_type($arr){
        $flag = true;
        foreach($arr as $value){
            if(gettype($value) != 'integer' && gettype($value) != 'double'){
                $flag = false;
                return $flag;
            }
        }
        return $flag;
    };
?>

<!-- 1 -->
<?php
    // print_r($array);

    function echo_array($arr){
        global $error;
        if(check_type($arr)){
            foreach($arr as $nbr){
                echo "$nbr\n";
            }
        }
        else{
            echo $error;
        }
    };

    echo_array($array);
?>

<!-- 2 -->
<?php
    function average($arr){
        global $error;
        if(check_type($arr)){
            echo array_sum($arr)/count($arr)."\n";
        }
        else{
            echo $error."\n";
        }
    };

    function average_index($arr){
        $index = (count($arr)-1)/2;
        $index = round($index);
        echo $arr[$index];
    };

    average($array);
    average_index($array);
?>

<!-- 3 -->
<?php
    function equal_to_ten($arr){
        global $error;
        if(check_type($arr)){
            $count = 0;
            foreach($arr as $nbr){
                if($nbr >= 10){
                    $count++;
                }
            }
            echo $count;
        }
        else{
            echo $error;
        }
    };

    equal_to_ten($array);
?>

<!-- 4 -->
<?php
    function check_value($arr, $value){
        global $error;
        if(check_type($arr)){
            $index = array_search($value, $arr);
            if($index == ""){
                echo "$value is not present.";
            }
            else{
                echo "$value is present.";
            }
        }
        else{
            echo $error;
        }
    };

    check_value($array, 20);
?>

<!-- 5 -->
<?php
    // echo max($array);

    function check_max($arr){
        global $error;
        if(check_type($arr)){
            $max = $arr[0];

            foreach($arr as $value){
                if($value > $max){
                    $max = $value;
                }
            }

            echo $max;
        }
        else{
            echo $error;
        }
    };

    check_max($array);
?>