<?php
function randomPerson($array) {
    $countIndex = count($array);
    $randomIndex = rand(0, $countIndex - 1);
    $person = $array[$randomIndex]['fullname'];
    return $person;
};
?>