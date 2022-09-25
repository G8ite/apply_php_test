<!-- 1 -->
<?php
    $hello = 'Hello world';
    echo $hello;
?>

<!-- 2 -->
<?php
    $number = 2;
    echo "$hello $number";
?>

<!-- 3 -->
<?php
    $special = 'How are you ? \o/';
    echo $special;
?>

<!-- 4 -->
<?php
    $str = 'I have 2 cats and 3 fish.';
    $reg = '!\d+!';
    preg_match_all($reg, $str, $matches);
    if(count($matches[0]) != 0){
        foreach($matches[0] as $match){
            $str = str_replace($match, "", $str);
        };
        $str = str_replace("  ", " ", $str);
        echo $str;
    }
    else{
        echo $str;
    }
?>
<!-- 5 -->
<?php
    echo "$hello $number, $special $str";
?>
