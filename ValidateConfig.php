<?php

$config = [
    'a' => 'Chris',
    'b' => [
        0 => 'Ask',
        1 => '',
        2 => 'Another',
    ],
    'c' => [
        'internal_a' => 'not empty',
        'internal_b' => '',
    ],
    'd' => 'Ramsden',
];

$requiredKeyStrucutre = [
    'a',
    ['b', [0, 1, 2]],
    ['c', ['internal_a', 'internal_b']],
    'd',
];

include('ValidateConfigHasNoEmptyStrings.class.php');

$validateConfig = new ValidateConfig();
$validateConfig->validate($config, $requiredKeyStrucutre);
