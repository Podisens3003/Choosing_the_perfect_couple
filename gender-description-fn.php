<?php
function getGenderDescription($array) {
    $female = 0;
    $male = 0;
    $notDetermined = 0;
    foreach ($array as $key => $value) {
        $currentPersonGender = getGenderFromName($value['fullname']);
        if ($currentPersonGender < 0) {
            $female = $female + 1;
        } elseif ($currentPersonGender > 0) {
            $male = $male + 1;
        } elseif ($currentPersonGender === 0) {
            $notDetermined = $notDetermined + 1;
        }
    }

    $persent = 100 / count($array);
    $persentF = round($female * $persent);
    $persentM = round($male * $persent);
    $persentN = round($notDetermined * $persent);
    ?>
    <table>
        <tr>
            <th>Гендерный состав аудитории:</th>
        </tr>
        <tr>
            <td>Мужчины <?= $persentM ?>%</td>
        </tr>
        <tr>
            <td>Женщины <?= $persentF ?>%</td>
        </tr>
        <tr>
            <td>Не удалось определить <?= $persentN ?>%</td>
        </tr>
    </table>
<?php
};
?>