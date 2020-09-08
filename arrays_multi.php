<?php

// создаём массив с цетами
$flowers = [
    // первый элементы массива с индексом 0
    [
        'name' => 'Гвоздика Кустовая',
        'count' => 10,
        'price' => 500
    ],
    // второй элементы массива с индексом 1
    [
        'name' => 'Ирис',
        'count' => 15,
        'price' => 1050
    ],
    // третий элементы массива с индексом 2
    [
        'name' => 'Лилия',
        'count' => 3,
        'price' => 1050
    ],
    // четвёртый элементы массива с индексом 3
    [
        'name' => 'Хризантема кустовая белая',
        'count' => 5,
        'price' => 575
    ],
    // пятый элементы массива с индексом 4
    [
        'name' => 'Роза Форевер 70 см',
        'count' => 15,
        'price' => 2160
    ]
];

// первый вариант перебора
echo 'v1' . PHP_EOL;
echo $flowers[0]['name'] . ' цена ' . $flowers[0]['count'] . ' количество ' . $flowers[0]['price'] . PHP_EOL;
echo $flowers[1]['name'] . ' цена ' . $flowers[1]['count'] . ' количество ' . $flowers[1]['price'] . PHP_EOL;
echo $flowers[2]['name'] . ' цена ' . $flowers[2]['count'] . ' количество ' . $flowers[2]['price'] . PHP_EOL;
echo $flowers[3]['name'] . ' цена ' . $flowers[3]['count'] . ' количество ' . $flowers[3]['price'] . PHP_EOL;
echo $flowers[4]['name'] . ' цена ' . $flowers[4]['count'] . ' количество ' . $flowers[4]['price'] . PHP_EOL;

// второй способ
echo 'v2' . PHP_EOL;
echo sprintf('%s цена %d количество %d', $flowers[0]['name'], $flowers[0]['count'], $flowers[0]['price']) . PHP_EOL;
echo sprintf('%s цена %d количество %d', $flowers[1]['name'], $flowers[1]['count'], $flowers[1]['price']) . PHP_EOL;
echo sprintf('%s цена %d количество %d', $flowers[2]['name'], $flowers[2]['count'], $flowers[2]['price']) . PHP_EOL;
echo sprintf('%s цена %d количество %d', $flowers[3]['name'], $flowers[3]['count'], $flowers[3]['price']) . PHP_EOL;
echo sprintf('%s цена %d количество %d', $flowers[4]['name'], $flowers[4]['count'], $flowers[4]['price']) . PHP_EOL;

// третий способ в цикле по ключу
echo 'v3' . PHP_EOL;
foreach ($flowers as $key => $value) {
    echo $flowers[$key]['name'] . ' цена ' . $flowers[$key]['count'] . ' количество ' . $flowers[$key]['price'] . PHP_EOL;
}

// четвёртый способ в цикле по значению
echo 'v4' . PHP_EOL;
foreach ($flowers as $value) {
    echo $value['name'] . ' цена ' . $value['count'] . ' количество ' . $value['price'] . PHP_EOL;
}

// пятый способ в цикле по значению
echo 'v5' . PHP_EOL;
foreach ($flowers as $key => $value) {
    echo sprintf('%s цена %d количество %d', $value['name'], $value['count'], $value['price']) . PHP_EOL;
}
