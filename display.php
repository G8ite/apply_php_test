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
    // String to bo changed 📝 .
    $str = 'I have 2 cats and 3 fish.';
    // Regex for finding numbers 🔢 .
    $reg = '!\d+!';
    // Function that locates the regex pattern in our string and stores them in matches 🔍 .
    preg_match_all($reg, $str, $matches);
    // If our regex has been spotted 🎊 .
    if(count($matches[0]) != 0){
        // We go through our string to replace each number with an empty .
        foreach($matches[0] as $match){
            $str = str_replace($match, "", $str);
        };
        // Formate our string for avoid double spaces 🚨 .
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
    // echo $hello . " " . $number . ", " . $special . " " . $str;
?>
