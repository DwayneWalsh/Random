<?php

/**
 * Random String Generator
 *
 * @since 2019-01-02
 * @version 0.1
 * @author Dwayne Walsh
 * @website https://github.com/DwayneWalsh
 *
 */

class Random
{
    
    public static function make($count = 10, $make = [
        'symbols' => [
            'letters' => [
                'uppercase' => true,
                'lowercase' => true
            ],
            'numbers' => true,
            'symbols' => false
        ],
        'options' => [
            'prefix' => false,
            'uppercaseAll' => false
        ],
        'prefix'        => '---',
        'prefix_length' => 5
    ]) 
    {
        $mk = '';
        if($make['symbols']['letters']['uppercase']) {
            $mk .= 'QWERTYUIOPASDFGHJKLZXCVBNM';
        }

        if($make['symbols']['letters']['lowercase']) {
            $mk .= 'qwertyuiopasdfghjklzxcvbnm';
        }

        if($make['symbols']['numbers']) {
            $mk .= '0123456789';
        }

        if($make['symbols']['symbols']) {
            $mk .= '-_~+[]"/.><!@#^*()';
        }

        if(!empty($mk)) {
            $return = str_shuffle($mk);
            $string = md5(uniqid());
            $string = substr(str_shuffle(md5($string)), 0, $make['prefix_length']);
            $random = substr(str_shuffle($mk), 0, $count);

            if($make['options']['prefix']) {

                $return .= $string.$make['prefix'];
            }

            $return .= $random;

            $return = substr(str_shuffle($return), 0, $count);

            return ($make['options']['uppercaseAll'] ? strtoupper($return) : $return);

        } else if(ini_get("display_errors") === true) {
            throw new \Exception(__CLASS__." ".__FUNCTION__." function Error. Neither (
                ".implode(", ", array_keys($make)).") were set to true");
        }
    }
}
