<?php

namespace App\Helpers;

use Illuminate\Support\Str;

class TextHelpers
{
    public static function getReadTime($content, $wpm = 200): string
    {
        $wordCount = str_word_count(strip_tags($content));

        $minutes = (int)floor($wordCount / $wpm);
        $seconds = (int)floor($wordCount % $wpm / ($wpm / 60));

        $str_minutes = ($minutes === 1) ? 'minute' : 'minutes';
        $str_seconds = ($seconds === 1) ? 'second' : 'seconds';

        if ($minutes === 0) {
            return "{$seconds} {$str_seconds}";
        } else {
            return "{$minutes} {$str_minutes}, {$seconds} {$str_seconds}";
        }
    }


    public static function getExcerpt($content, $cont = 15): string
    {
        return Str::words(strip_tags($content), $cont, '...');
    }


    public static function getDeclension($num, $form_for_1, $form_for_2, $form_for_5)
    {
        $num = abs($num) % 100;
        $num_x = $num % 10;
        if ($num > 10 && $num < 20)
            return $form_for_5;
        if ($num_x > 1 && $num_x < 5)
            return $form_for_2;
        if ($num_x == 1)
            return $form_for_1;
        return $form_for_5;
    }

    public static function getContent($html)
    {

        $text = stripslashes($html);

        preg_match_all("/<h[1-6].*?>(.*?)<\/h[1-6]>/i", $text, $items);

        if (!empty($items[1])) {
            return $items[1];
        }

        return [];
    }

    public static function addAnchors($html): string
    {
        $text = stripslashes($html);

        preg_match_all("#<h(\d)[^>]*?>(.*?)<[^>]*?/h\d>#i", $text, $items);

        if (!empty($items[0])) {
            foreach ($items[0] as $i => $row) {
                $text = str_replace($row, '<a name="heading-' . ++$i . '"></a>' . $row, $text);
            }
        }

        return $text;
    }
}
