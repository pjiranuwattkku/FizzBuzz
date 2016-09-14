<?php
class FizzBuzz{
  function count($number){
    $_FIZZBUZZ_TEXT = [1=>"1",2=>"2",3=>"Fizz"];
    return $_FIZZBUZZ_TEXT[$number];
  }
}
class FizzBuzzTest extends PHPUnit_Framework_TestCase
{
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
