<?php
declare(strict_types=1);

namespace LuhnAlgorithm;



use InvalidArgumentException;

/**
 * Class CreditNumber
 * @package LuhnAlgorithm
 */

class CreditNumber

{
    public function numberGenerate( int $prefix, int $length ): string
    {
        $prefixLength = 3;
        if ( $length <= $prefixLength ) {
          throw new InvalidArgumentException("Invalid Number");
        }
        $array = str_split((string)$prefix);
        for ( $i = $prefixLength; $i <= $length-2; $i++ ) {
          array_push($array, mt_rand(0,9));
        }
        $flag = true;
        $sum = 0;
        for ( $k = count($array)-1; $k >= 0; $k-- ) {
            $temp = $array[$k];
            if ($flag === true) {
                $temp *= 2;
                $temp = $temp > 9 ? $temp - 9 : $temp;
                $flag = false;
            } else {
                $flag = true;
            }
            $sum += $temp;
        }
        $lastDigit = (10 - ($sum % 10)) % 10;
        array_push($array,$lastDigit);
        return implode('',$array);
        }
}