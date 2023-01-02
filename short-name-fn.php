<?php
function getShortName($stringWithFullname) {
    $splitString = getPartsFromFullname($stringWithFullname);
    $shortPatronymic = mb_substr($splitString['surename'], 0, 1, "UTF-8") . '.';
    $shortName = $splitString['name'] . ' ' . $shortPatronymic;
    return $shortName;
};
?>