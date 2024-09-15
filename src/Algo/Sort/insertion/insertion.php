<?php

declare(strict_types=1);

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
        \Tools\Tools::printArr($arr);
    }
}

simpleInsertSort([1,4,3,2,8,5,7,6]);
