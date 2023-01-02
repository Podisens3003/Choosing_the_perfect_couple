<?php
function getPerfectPartner($surename, $name, $patronymic, $array) {
    $person1 = normalizePerson($surename, $name, $patronymic);
    $gender1 = getGenderFromName($person1);

    $secondPerson = randomPerson($array);
    $secondPersonNameParts = getPartsFromFullname($secondPerson);
    $person2 = normalizePerson(
        $secondPersonNameParts['surename'],
        $secondPersonNameParts['name'],
        $secondPersonNameParts['patronymic']
    );
    $gender2 = getGenderFromName($person2);

    if ($gender1 === $gender2) {
        return getPerfectPartner($surename, $name, $patronymic, $array);
    }

    return [getShortName($person1), getShortName($person2)];
};
?>