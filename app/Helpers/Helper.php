<?php

namespace App\Helpers;

class Helper
{
    public static function removeMask($str)
    {
        $str = str_replace(".", "", $str);
        $str = str_replace(",", "", $str);
        $str = str_replace("-", "", $str);
        $str = str_replace("/", "", $str);
        $str = str_replace("(", "", $str);
        $str = str_replace(")", "", $str);
        $str = str_replace(" ", "", $str);

        return $str;
    }
    public static function removeAccents(string $string)
    {
        $cleanString = preg_replace(array(
            "/(á|à|ã|â|ä)/",
            "/(Á|À|Ã|Â|Ä)/",
            "/(é|è|ê|ë)/",
            "/(É|È|Ê|Ë)/",
            "/(í|ì|î|ï)/",
            "/(Í|Ì|Î|Ï)/",
            "/(ó|ò|õ|ô|ö)/",
            "/(Ó|Ò|Õ|Ô|Ö)/",
            "/(ú|ù|û|ü)/",
            "/(Ú|Ù|Û|Ü)/",
            "/(ñ)/",
            "/(ç|Ç)/",
            "/(Ñ)/"
        ), explode(" ", "a A e E i I o O u U n c N"), $string);

        $cleanString = str_replace(" ", "-", $cleanString);

        return strtolower(addslashes($cleanString));
    }

    public static function removeAlternativeAccents(string $string)
    {
        return preg_replace(array("/(�|�|�|�|�)/","/(�|�|�|�|�)/","/(�|�|�|�)/","/(�|�|�|�)/","/(�|�|�|�)/","/(�|�|�|�)/","/(�|�|�|�|�)/","/(�|�|�|�|�)/","/(�|�|�|�)/","/(�|�|�|�)/","/(�)/","/(�)/"),explode(" ","a A e E i I o O u U n N"),$string);
    }
}
