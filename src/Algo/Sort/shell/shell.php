<?php

declare(strict_types=1);

include_once __DIR__ . '/../../../Tools/Tools.php';

use Tools\Tools;

function shellSort(array $arr): void
{
    $cnt = count($arr);
    $step = intdiv($cnt, 2);
    while ($step > 0) {
        for ($i = $step; $i < $cnt; $i++) {
            $j = $i;
            $delta = $j - $step;
            while ($delta >= 0 && $arr[$delta] > $arr[$j]) {
                Tools::swap($arr, $delta, $j);
                $j = $delta;
                $delta = $j - $step;
            }
        }
        $step = intdiv($step, 2);
        Tools::printArr($arr);
    }
}

shellSort([1, 4, 3, 2, 8, 5, 7, 6]);

