<?php
function normalizePerson($surename, $name, $patronymic) {
    $normalizedSurename = mb_convert_case($surename, MB_CASE_TITLE, "UTF-8");
    $normalizedName = mb_convert_case($name, MB_CASE_TITLE, "UTF-8");
    $normalizedPatronymic = mb_convert_case($patronymic, MB_CASE_TITLE, "UTF-8");

    return getFullnameFromParts($normalizedSurename, $normalizedName, $normalizedPatronymic);
};
?>