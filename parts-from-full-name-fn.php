<?php
function getPartsFromFullname($string) {
    $separateStrings = explode(' ', $string);
    $keysForPersonNames = array('surename', 'name', 'patronymic');
    $delayedStrings = array_combine($keysForPersonNames, $separateStrings);
    return $delayedStrings;
};
?>