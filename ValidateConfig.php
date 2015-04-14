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
        'internal_c' => [
            'sub_a' => '',
            'sub_b' => 'sub b',
        ],
    ],
    'd' => 'Ramsden',
];

$requiredKeyStrucutre = [
    'a',
    ['b', [0, 1, 2]],
    ['c', ['internal_a', 'internal_b', ['internal_c', ['sub_a', 'sub_b']]]],
    'd',
];

include('ValidateConfigHasNoEmptyStrings.class.php');

$validateConfig = new ValidateConfig();
$validateConfig->validate($config, $requiredKeyStrucutre);
