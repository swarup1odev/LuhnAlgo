<?php


namespace LuhnAlgorithm;
use http\Exception\InvalidArgumentException;

/**
 * Class CreditNumber
 * @package LuhnAlgorithm
 */

class CreditNumber

{
    public function numberGenerate( int $prefix=487, int $length=16 ): int
    {
      if ( $length <= $prefix ) {
          throw new InvalidArgumentException("Invalid Number");
      }
      $array = [];
      $prefixLength = 3;
      array_push($array,$prefix);
      for ( $i = $prefixLength-1; $i <= $length-1; $i++ ) {
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
      $lastDigit = 10 - ($sum % 10);
      array_push($array,$lastDigit);
      return implode('',$array);
    }
}