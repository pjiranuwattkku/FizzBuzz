<?php
class FizzBuzz{
  function count($number){
    if($this->isModuloBythreeAndFive($number)){
      return "FizzBuzz";
    }else if($this->isModuloByThree($number)){
      return "Fizz";
    }else if($this->isModuloByFive($number)){
      return "Buzz";
    }else{
        return $number;
    }
  }

  public function isModuloByThreeAndFive($number){
    return $number%3 == 0 && $number%5 == 0;
  }

  public function isModuloByThree($number){
    return $number%3 == 0;
  }

  public function isModuloByFive($number){
    return $number%5 == 0;
  }

}
class FizzBuzzTest extends PHPUnit_Framework_TestCase
{
  function testFizzBuzzFifteenShouldBeFifteen(){
    $fizzbuzz = new FizzBuzz();
    $this->assertEquals("FizzBuzz",$fizzbuzz->count(15));
  }

  function testFizzBuzzFourteenShouldBeFourteen(){
    $fizzbuzz = new FizzBuzz();
    $this->assertEquals("14",$fizzbuzz->count(14));
  }

  function testFizzBuzzThirteenShouldBeThirteen(){
    $fizzbuzz = new FizzBuzz();
    $this->assertEquals("13",$fizzbuzz->count(13));
  }

  function testFizzBuzzTwelveShouldBeFizz(){
    $fizzbuzz = new FizzBuzz();
    $this->assertEquals("Fizz",$fizzbuzz->count(12));
  }

  function testFizzBuzzElevenShouldBeEleven(){
    $fizzbuzz = new FizzBuzz();
    $this->assertEquals("11",$fizzbuzz->count(11));
  }

  function testFizzBuzzTenShouldBeBuzz(){
    $fizzbuzz = new FizzBuzz();
    $this->assertEquals("Buzz",$fizzbuzz->count(10));
  }

  function testFizzBuzzNineShouldBeFizz(){
    $fizzbuzz = new FizzBuzz();
    $this->assertEquals("Fizz",$fizzbuzz->count(9));
  }

  function testFizzBuzzEightShouldBeEight(){
    $fizzbuzz = new FizzBuzz();
    $this->assertEquals("8",$fizzbuzz->count(8));
  }

  function testFizzBuzzSevenShouldBeSeven(){
    $fizzbuzz = new FizzBuzz();
    $this->assertEquals("7",$fizzbuzz->count(7));
  }

  function testFizzBuzzSixShouldBeFizz(){
    $fizzbuzz = new FizzBuzz();
    $this->assertEquals("Fizz",$fizzbuzz->count(6));
  }

  function testFizzBuzzFiveShouldBeBuzz(){
    $fizzbuzz = new FizzBuzz();
    $this->assertEquals("Buzz",$fizzbuzz->count(5));
  }

  function testFizzBuzzFourShouldBeFour(){
    $fizzbuzz = new FizzBuzz();
    $this->assertEquals("4",$fizzbuzz->count(4));
  }

  function testFizzBuzzThreeShouldBeFizz(){
    $fizzbuzz = new FizzBuzz();
    $this->assertEquals("Fizz",$fizzbuzz->count(3));
  }

  function testFizzBuzzOneShouldBeTwo(){
    $fizzbuzz = new FizzBuzz();
    $this->assertEquals("2",$fizzbuzz->count(2));
  }

  function testFizzBuzzOneShouldBeOne(){
    $fizzbuzz = new FizzBuzz();
    $this->assertEquals("1",$fizzbuzz->count(1));
  }
}
?>
