<?php
/**
 * Created by PhpStorm.
 * User: Kudi
 * Date: 1/28/2019
 * Time: 9:52 PM
 */

namespace App\Models\Utility;


class Helper
{

    public static function slug($text)
    {
// replace non letter or digits by -
        $text = preg_replace('~[^\pL\d]+~u', '-', $text);

        // transliterate
        $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

        // remove unwanted characters
        $text = preg_replace('~[^-\w]+~', '', $text);

        // trim
        $text = trim($text, '-');

        // remove duplicate -
        $text = preg_replace('~-+~', '-', $text);

        // lowercase
        $text = strtolower($text);

        if (empty($text)) {
            return 'n-a';
        }

        return $text;
    }

    public static function excerpt($content, $cutOffLength)
    {
        $content = strip_tags($content);
        $charAtPosition = "";
        $titleLength = strlen($content);

        do {
            $cutOffLength++;
            $charAtPosition = substr($content, $cutOffLength, 1);
        } while ($cutOffLength < $titleLength && $charAtPosition != " ");

        return substr($content, 0, $cutOffLength) . '...';
    }
}