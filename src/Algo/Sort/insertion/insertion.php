<?php

declare(strict_types=1);

use Tools\Tools;

include_once __DIR__ . '/../../../Tools/Tools.php';

// Сортировка простыми вставками
function simpleInsertSort(array $arr): void
{
    $arrLength = count($arr);
    for ($i = 1; $i < $arrLength; $i++) {
        $key = $arr[$i];
        $j = $i - 1;
        // Двигаем элементы слева, пока не найдем куда вставить текущий элемент
        while ($arr[$j] > $key && $j >= 0) {
            $arr[$j + 1] = $arr[$j];
            $j--;
        }
        $arr[$j + 1] = $key;
        Tools::printArr($arr);
    }
}

// Сортировка вставками, но с использованием бинарного поиска места вставки
function insertionSortWithBinarySearch(array $arr): void
{
    $arrLength = count($arr);
    for ($i = 1; $i <= $arrLength - 1; $i++) {
        $key = $arr[$i];
        $insertTo = findPlaceWithBinarySearch(array_slice($arr, 0, $i), $key);
        for ($j = $i - 1; $j >= $insertTo; $j--) {
            Tools::swap($arr, $j, $j + 1);
        }
        Tools::printArr($arr);
    }
}

function findPlaceWithBinarySearch(array $arr, int $key): int
{
    $left = -1;
    $right = count($arr);

    while ($left < $right - 1) {
        $m = (int)round(($left + $right)/2);
        if ($arr[$m] < $key) {
            $left = $m;
        } else {
            $right = $m;
        }
    }

    return $right;
}

insertionSortWithBinarySearch([1,4,3,2,8,5,7,6]);
