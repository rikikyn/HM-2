<?php
$arr = [
    '1' => 1,
    '2' => 2,
    '3' => 3,
    '4' => 4,
    '5' => 5,
    '6' => 6,
    '7' => 7,
    '8' => 8,
    '9' => 9,
    '10' => 10,
];

$arrTrees = [
    "Кокос" => 1,
    "Яблоко" => 2,
    "манго" => 3 ,
    "апельсин" => 4,
    "абрикос" => 5,
    "клубника" => 6,
    "малина" => 7,
    "еживика" => 8,
    "вишня" =>9,
    "черешня" => 10

];


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DZ</title>
</head>
<body>

<div>
    <?php foreach ($arr as $k => $n) { ?>
        <div> <?php echo "{$k} = {$n}"; ?> </div>
    <?php } ?>
    <br >
    <?php foreach ($arrTrees as $k => $n) { ?>
        <div> <?php echo "{$k} = {$n}"; ?> </div>
    <?php } ?>

</body>
</html>