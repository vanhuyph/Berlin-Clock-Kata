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
        $actual = $this->actTranslateSimpleMinutes(0);

        $this->assertEquals("OOOO", $actual);
    }

    public function test_translateSimpleMinutes_given1_shouldReturnYOOO(){
        $actual = $this->actTranslateSimpleMinutes(1);

        $this->assertEquals("YOOO", $actual);
    }

    public function test_translateSimpleMinutes_given2_shouldReturnYYOO(){
        $actual = $this->actTranslateSimpleMinutes(2);

        $this->assertEquals("YYOO", $actual);
    }

    public function test_translateSimpleMinutes_given3_shouldReturnYYYO(){
        $actual = $this->actTranslateSimpleMinutes(3);

        $this->assertEquals("YYYO", $actual);
    }

    public function test_translateSimpleMinutes_given4_shouldReturnYYYY(){
        $actual = $this->actTranslateSimpleMinutes(4);

        $this->assertEquals("YYYY", $actual);
    }

    public function test_translateBlockOf5minutes_given0_shouldReturn11O(){
        $actual = $this->actTranslateBlockOf5minutes(0);

        $this->assertEquals("OOOOOOOOOOO", $actual);
    }

    public function test_translateBlockOf5minutes_given5_shouldReturn1Y10O(){
        $actual = $this->actTranslateBlockOf5minutes(5);

        $this->assertEquals("YOOOOOOOOOO", $actual);
    }

    public function test_translateBlockOf5minutes_given10_shouldReturn2Y9O(){
        $actual = $this->actTranslateBlockOf5minutes(10);

        $this->assertEquals("YYOOOOOOOOO", $actual);
    }

    public function test_translateBlockOf5minutes_given15_shouldReturn2Y1R8O(){
        $actual = $this->actTranslateBlockOf5minutes(15);

        $this->assertEquals("YYROOOOOOOO", $actual);
    }

    private function actTranslateSimpleMinutes(int $int): string
    {
        return $this->berlinClock->translateSimpleMinutes($int);
    }

    private function actTranslateBlockOf5minutes(int $int): string
    {
        return $this->berlinClock->translateBlockOf5minutes($int);
    }

}
