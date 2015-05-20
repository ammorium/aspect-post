<?php

class Aspect_Helper
{
    public static function copyrightYear($start_year)
    {
        $current_year = date('Y');

        if ($current_year > $start_year) return $start_year . '-' . $current_year;
        return $current_year;
    }
}