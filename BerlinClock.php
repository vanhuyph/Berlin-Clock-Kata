<?php

class BerlinClock
{

    public function translateSimpleMinutes(int $int): string
    {
        if($int === 1) return "YOOO";
        if($int === 2) return "YYOO";
        if($int === 3) return "YYYO";

        return "OOOO";
    }
}
