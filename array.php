<?php

/**
 *
 */
function task1()
{
    $daysInMonth = [
        31,
        29,
        31,
        30,
        31,
        30,
        31,
        31,
        30,
        31,
        30,
        31
    ];

    $months = [
        "January",
        "February",
        "March",
        "April",
        "May",
        "June",
        "July",
        "August",
        "September",
        "October",
        "November",
        "December"
    ];

    // первый цикл
    foreach ($daysInMonth as $value) {
        echo $value, PHP_EOL;
    }

    // второй цикл
    foreach ($months as $value) {
        echo $value, PHP_EOL;
    }

    // третий цикл
    foreach ($daysInMonth as $key => $value) {
        echo $key, PHP_EOL;
    }

    // четвёртый цикл
    foreach ($months as $key => $value) {
        echo $key, PHP_EOL;
    }

    // почему третий и четвёртый цикл выводят одинаковые числа?
}

/**
 *
 */
function task2()
{
    $year2020 = [
        "January" => 31,
        "February" => 29,
        "March" => 31,
        "April" => 30,
        "May" => 31,
        "June" => 30,
        "July" => 31,
        "August" => 31,
        "September" => 30,
        "October" => 31,
        "November" => 30,
        "December" => 31
    ];

    // перебираем все значения массива используя временную переменную
    foreach ($year2020 as $key => $value) {
        echo $value, PHP_EOL;
    }

    // перебираем все ключи массива
    foreach ($year2020 as $key => $value) {
        echo $key, PHP_EOL;
    }

    // перебираем все значения используя ключ
    foreach ($year2020 as $key => $value) {
        echo $year2020[$key], PHP_EOL;
    }

    echo $year2020["January"], PHP_EOL;
    echo $year2020["June"], PHP_EOL;
}

/**
 *
 */
function task3()
{
    $favoriteShows = [
        "Game of thrones",
        "American horror story",
        "Friends"
    ];

    // первый элемент имеет индекс 0, $favoriteShows[0] равен "Game of thrones"
    // второй элемент имеет индекс 1, $favoriteShows[1] равен "American horror story"
    // третий элемент имеет индекс 2, $favoriteShows[2] равен "Friends"

    echo "Мои любимые сериалы: "
        . $favoriteShows[0] . ", "
        . $favoriteShows[1] . ", "
        . $favoriteShows[2] . "\n";
}

// запускаем наши программы
//task1();
//task2();
task3();
