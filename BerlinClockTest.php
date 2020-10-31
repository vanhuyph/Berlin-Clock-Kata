<?php

require "vendor/autoload.php";
require "BerlinClock.php";

use PHPUnit\Framework\TestCase;

class BerlinClockTest extends TestCase
{
    private $berlinClock;

    protected function setUp(): void
    {
        parent::setUp();
        $this->berlinClock = new BerlinClock();
    }

    public function test_translateSimpleMinutes_given0_shouldReturnOOOO(){
        $actual = $this->berlinClock->translateSimpleMinutes(0);

        $this->assertEquals("OOOO", $actual);
    }

    public function test_translateSimpleMinutes_given1_shouldReturnYOOO(){
        $actual = $this->berlinClock->translateSimpleMinutes(1);

        $this->assertEquals("YOOO", $actual);
    }

    public function test_translateSimpleMinutes_given2_shouldReturnYYOO(){
        $actual = $this->berlinClock->translateSimpleMinutes(2);

        $this->assertEquals("YYOO", $actual);
    }

    public function test_translateSimpleMinutes_given3_shouldReturnYYYO(){
        $actual = $this->berlinClock->translateSimpleMinutes(3);

        $this->assertEquals("YYYO", $actual);
    }

    public function test_translateSimpleMinutes_given4_shouldReturnYYYY(){
        $actual = $this->berlinClock->translateSimpleMinutes(4);

        $this->assertEquals("YYYY", $actual);
    }

}
