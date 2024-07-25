<?php
namespace App\Helpers;
use Carbon\Carbon;
class SeasonHelper
{
    public static function getCurrentSeason()
    {
        $date = now();
        $year = $date->year;

        $yalaStart = Carbon::create($year, 3, 1);
        $yalaEnd = Carbon::create($year, 9, 30);
        $mahaStart = Carbon::create($year, 10, 1);
        $mahaEnd = Carbon::create($year + 1, 2, 28);

        if ($date->between($yalaStart, $yalaEnd)) {
            return 'Yala';
        } elseif ($date->between($mahaStart, $mahaEnd)) {
            return 'Maha';
        }

        return null;
    }
}
