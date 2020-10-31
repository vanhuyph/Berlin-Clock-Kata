<?php

require "vendor/autoload.php";
require "BerlinClock.php";

use PHPUnit\Framework\TestCase;

class BerlinClockTest extends TestCase
{

    public function test_translateSimpleMinutes_given0_shouldReturnOOOO(){
        $berlinClock = new BerlinClock();

        $actual = $berlinClock->translateSimpleMinutes(0);

        $this->assertEquals("OOOO", $actual);
    }

}
