<?php

declare(strict_types=1);

namespace Tools;
class Tools
{
    public static function printArr(array $arr): void
    {
        $result = '';
        foreach ($arr as $value) {
            $result .= $value . ' ';
        }

        echo $result . PHP_EOL;
    }

    public static function swap(array &$arr, int $leftIndex, int $rightIndex): void
    {
        $tmp = $arr[$leftIndex];
        $arr[$leftIndex] = $arr[$rightIndex];
        $arr[$rightIndex] = $tmp;
    }
}
