<?php

declare(strict_types=1);

use Tools\Tools;

include_once __DIR__ . '/../../../Tools/Tools.php';

function sortWithCocktailSort(array $arr): void
{
    $swapped = true;
    $arrLength = count($arr);
    $start = 0;
    $end = $arrLength - 1;

    while ($swapped) {
        // Move from left to right
        $swapped = false;
        for ($i = $start; $i < $end; $i++) {
            if ($arr[$i] > $arr[$i + 1]) {
                Tools::swap($arr, $i, $i + 1);
                $swapped = true;
                Tools::printArr($arr);
            }
        }

        if (!$swapped) {
            break;
        }

        $end--;
        // Move from right to left
        $swapped = false;
        for ($i = $end - 1; $i >= $start; $i--) {
            if ($arr[$i] > $arr[$i + 1]) {
                Tools::swap($arr, $i, $i + 1);
                $swapped = true;
                Tools::printArr($arr);
            }
        }
        $start++;
    }
}

sortWithCocktailSort([1, 4, 3, 2, 8, 5, 7, 6]);
