<?php


namespace LuhnAlgorithm;


class NumberValidation
{
    public function validateNumber( string $cardNumber ) : bool
    {
        $sum = 0;
        $flag = false;
        for( $i = strlen( $cardNumber ) - 1; $i >= 0; $i--) {
            $temp = $cardNumber[ $i ];
            if( $flag === true ) {
                $temp *= 2;
                $temp = ( $temp > 9 ) ? $temp - 9 : $temp;
                $flag = false;
            }
            else {
                $flag = true;
            }
            $sum += $temp;
        }
        return $sum % 10 == 0;

    }
}