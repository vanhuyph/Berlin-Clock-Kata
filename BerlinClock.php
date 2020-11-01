<?php

class BerlinClock
{

    public function translateSimpleMinutes(int $int): string
    {
        if($int === 1) return "YOOO";
        if($int === 2) return "YYOO";
        if($int === 3) return "YYYO";
        if($int === 4) return "YYYY";

        return "OOOO";
    }

    public function translateBlockOf5minutes(int $int): string
    {
        if($int === 5) return "YOOOOOOOOOO";
        if($int === 10) return "YYOOOOOOOOO";
        if($int === 15) return "YYROOOOOOOO";
        if($int === 20) return "YYRYOOOOOOO";

       return "OOOOOOOOOOO";
    }
}
