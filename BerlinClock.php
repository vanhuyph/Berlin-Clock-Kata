<?php

class BerlinClock
{

    public function translateSimpleMinutes(int $int): string
    {
        if($int === 1) return "YOOO";
        if($int === 2) return "YYOO";

        return "OOOO";
    }
}
