<?php

declare(strict_types=1);

$printArr = static function (array $arr) {
    $result = '';
    foreach ($arr as $value) {
        $result .= $value . ' ';
    };

    echo $result . PHP_EOL;
};


$sort = static function (array $arr) use ($printArr) {
    $arrLength = count($arr);
    for ($i = 1; $i < $arrLength; $i++) {
        $isSorted = true;
        for ($j = 0; $j < $arrLength - $i; $j++) {
            if ($arr[$j] > $arr[$j + 1]) {
                $tmp = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = $tmp;

                $isSorted = false;
            }
            $printArr($arr);

        }

        if ($isSorted) {
            break;
        }
    }
};

$sort([1,4,3,2,8,5,7,6]);
