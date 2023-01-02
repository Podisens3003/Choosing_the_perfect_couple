<?php
function getGenderFromName($stringWithFullname)
{
    $splitString = getPartsFromFullname($stringWithFullname);
    $sum = 0;
    $surename = mb_strlen($splitString['surename']);
    if (mb_substr($splitString['surename'], $surename - 2) === 'ва') {
        $sum -= 1;
    }
    if (mb_substr($splitString['surename'], $surename - 1) === 'в') {
        $sum += 1;
    }

    $name = mb_strlen($splitString['name']);
    if (mb_substr($splitString['name'], $name - 1) === 'а') {
        $sum -= 1;
    }
    if (
        mb_substr($splitString['name'], $name - 1) === 'й' ||
        mb_substr($splitString['name'], $name - 1) === 'н'
    ) {
        $sum += 1;
    }

    $patronymic = mb_strlen($splitString['patronymic']);
    if (mb_substr($splitString['patronymic'], $patronymic - 3) === 'вна') {
        $sum -= 1;
    }
    if (mb_substr($splitString['patronymic'], $patronymic - 2) === 'ич') {
        $sum += 1;
    }

    if ($sum < 0) {
        $sum = -1;
    } elseif ($sum > 0) {
        $sum = 1;
    } else {
        $sum = 0;
    }

    return $sum;
};
?>