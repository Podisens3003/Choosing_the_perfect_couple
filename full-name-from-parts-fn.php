<?php
function getFullnameFromParts($surename, $name, $patronymic) {
    $fullname = $surename;
    $fullname .= ' ';
    $fullname .= $name;
    $fullname .= ' ';
    $fullname .= $patronymic;
    return $fullname;
};
?>