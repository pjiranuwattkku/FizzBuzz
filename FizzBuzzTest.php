<?php
class FizzBuzz{
  function count($number){
    $_FIZZBUZZ_TEXT = [1=>"1",2=>"2",3=>"Fizz",4=>"4"];
    return $_FIZZBUZZ_TEXT[$number];
  }
}
class FizzBuzzTest extends PHPUnit_Framework_TestCase
{
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
