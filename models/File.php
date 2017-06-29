<?php
/**
 * Created by PhpStorm.
 * User: leo
 * Date: 29.06.17
 * Time: 10:36
 */

namespace app\models;


use yii\base\Model;

class File extends Model
{

    public function getResult($file)
    {
        foreach ($file as $string_arr) {
            $numeric_arr[] = explode(' ', $string_arr);
        }
        foreach ($numeric_arr as $number) {
            $result[] = array_sum($number);
            arsort($result);
        }
        return $result;
    }
}