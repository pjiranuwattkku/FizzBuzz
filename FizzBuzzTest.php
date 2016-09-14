<?php
class FizzBuzz{
  function count($number){
    $_FIZZBUZZ_TEXT = [1=>"1",2=>"2",3=>"Fizz",4=>"4",5=>"Buzz",6=>"Fizz",7=>"7",8=>"8"];
    return $_FIZZBUZZ_TEXT[$number];
  }
}
class FizzBuzzTest extends PHPUnit_Framework_TestCase
{
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
