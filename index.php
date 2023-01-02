<?php
include 'persons-array.php';
include 'random-person-fn.php';
include 'parts-from-full-name-fn.php';
include 'full-name-from-parts-fn.php';
include 'short-name-fn.php';
include 'gender-from-name-fn.php';
include 'gender-description-fn.php';
include 'perfect-partner-fn.php';
include 'normalize-person-fn.php';

$person = randomPerson($example_persons_array);
$personNameParts = getPartsFromFullname($person);
$perfectPair = getPerfectPartner(
    $personNameParts['surename'],
    $personNameParts['name'],
    $personNameParts['patronymic'],
    $example_persons_array
);
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <title>Подбор_идеальной_пары</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <div class="audience">
            <?= getGenderDescription($example_persons_array) ?>
        </div>
        <div class="duo">
            <div>
                <?= $perfectPair[0] ?> + <?= $perfectPair[1] ?> =
            </div>
            <div>
                &#9825 Совместимость равна
                <span>
                    <?= round(rand(5000, 10000) / 100, 2) ?>%
                </span>
                &#9825
            </div>
        </div>
    </div>
</body>