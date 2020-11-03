<?php

class BerlinClock
{

    public function translateSimpleMinutes(int $minutes): string
    {
        if($minutes%5 === 1) return "YOOO";
        if($minutes%5 === 2) return "YYOO";
        if($minutes%5 === 3) return "YYYO";
        if($minutes%5 === 4) return "YYYY";

        return "OOOO";
    }

    public function translateBlockOf5minutes(int $minutes): string
    {
        if($minutes >= 5 && $minutes <= 9) return "YOOOOOOOOOO";
        if($minutes >= 10 && $minutes <= 14) return "YYOOOOOOOOO";
        if($minutes >= 15 && $minutes <= 19) return "YYROOOOOOOO";
        if($minutes >= 20 && $minutes <= 24) return "YYRYOOOOOOO";
        if($minutes >= 25 && $minutes <= 29) return "YYRYYOOOOOO";
        if($minutes >= 30 && $minutes <= 34) return "YYRYYROOOOO";
        if($minutes >= 35 && $minutes <= 39) return "YYRYYRYOOOO";
        if($minutes >= 40 && $minutes <= 44) return "YYRYYRYYOOO";
        if($minutes >= 45 && $minutes <= 49) return "YYRYYRYYROO";
        if($minutes >= 50 && $minutes <= 54) return "YYRYYRYYRYO";
        if($minutes >= 55 && $minutes <= 59) return "YYRYYRYYRYY";

       return "OOOOOOOOOOO";
    }

    public function translateSimpleHours(int $hours): string
    {
        if($hours%5 === 1) return "ROOO";
        if($hours%5 === 2) return "RROO";
        if($hours%5 === 3) return "RRRO";
        if($hours%5 === 4) return "RRRR";

        return "OOOO";
    }

    public function translateBlockOf5hours(int $hours): string
    {
        if($hours >= 5 && $hours <= 9) return "ROOO";
        if($hours >= 10 && $hours <= 14) return "RROO";
        if($hours >= 15 && $hours <= 19) return "RRRO";
        if($hours >= 20 && $hours <= 24) return "RRRR";

        return "OOOO";
    }

    public function translateSeconds(int $seconds): string
    {
        if($seconds%2 === 1) return "O";

        return "R";
    }

    public function translateFullClock(int $hours, int $minutes, int $seconds): string
    {
        $result = "";
        $separator = "_";
        $result = $this->translateSeconds($seconds) . $separator
            .$this->translateBlockOf5hours($hours) . $separator
            .$this->translateSimpleHours($hours) . $separator
            .$this->translateBlockOf5minutes($minutes) . $separator
            .$this->translateSimpleMinutes($minutes);

        return $result;
    }

}
