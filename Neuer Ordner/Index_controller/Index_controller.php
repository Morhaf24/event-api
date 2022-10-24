<?php

$print_result = true;

function add_numbers($number_one, $number_two, $number_three = 0) {
    global $print_result;
    if ($print_result) {
        echo $number_one + $number_two + $number_three;
    }

    return $number_one + $number_two + $number_three;

}

add_numbers(1, 2);
add_numbers(1, 2, 3);

if ($_GET["dark_mode"] == 1) {
    echo "<style>body { background-color: black; color: white; }</style>";
}
?>