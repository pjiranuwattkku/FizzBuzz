<?php
class FizzBuzz{
  function __construct($number){
    $this->number = $number;
  }
  function count(){
    if($this->number == 1){
      return "1";
    }
    return "2";
  }
}
class FizzBuzzTest extends PHPUnit_Framework_TestCase
{
  function testFizzBuzzShouldBeTwo(){
    $fizzbuzz = new FizzBuzz(2);
    $this->assertEquals('2',$fizzbuzz->count());
  }
  function testFizzBuzzShouldBeOne(){
    $fizzbuzz = new FizzBuzz(1);
    $this->assertEquals('1',$fizzbuzz->count());
  }
}
?>
