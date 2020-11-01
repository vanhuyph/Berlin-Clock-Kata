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

    public function test_translateBlockOf5minutes_given20_shouldReturn2Y1R1Y7O(){
        $actual = $this->actTranslateBlockOf5minutes(20);

        $this->assertEquals("YYRYOOOOOOO", $actual);
    }

    public function test_translateBlockOf5minutes_given25_shouldReturn2Y1R2Y6O(){
        $actual = $this->actTranslateBlockOf5minutes(25);

        $this->assertEquals("YYRYYOOOOOO", $actual);
    }

    public function test_translateBlockOf5minutes_given30_shouldReturn2Y1R2Y1R5O(){
        $actual = $this->actTranslateBlockOf5minutes(30);

        $this->assertEquals("YYRYYROOOOO", $actual);
    }

    public function test_translateBlockOf5minutes_given35_shouldReturn2Y1R2Y1R1Y4O(){
        $actual = $this->actTranslateBlockOf5minutes(35);

        $this->assertEquals("YYRYYRYOOOO", $actual);
    }

    public function test_translateBlockOf5minutes_given40_shouldReturn2Y1R2Y1R2Y3O(){
        $actual = $this->actTranslateBlockOf5minutes(40);

        $this->assertEquals("YYRYYRYYOOO", $actual);
    }

    public function test_translateBlockOf5minutes_given45_shouldReturn2Y1R2Y1R2Y1R2O(){
        $actual = $this->actTranslateBlockOf5minutes(45);

        $this->assertEquals("YYRYYRYYROO", $actual);
    }

    public function test_translateBlockOf5minutes_given50_shouldReturn2Y1R2Y1R2Y1R1Y1O(){
        $actual = $this->actTranslateBlockOf5minutes(50);

        $this->assertEquals("YYRYYRYYRYO", $actual);
    }

    public function test_translateBlockOf5minutes_given55_shouldReturn2Y1R2Y1R2Y1R2Y(){
        $actual = $this->actTranslateBlockOf5minutes(55);

        $this->assertEquals("YYRYYRYYRYY", $actual);
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
