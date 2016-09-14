<?php
class FizzBuzz{
  function count($number){
    if($number == 1){
      return "1";
    }
    return "2";
  }
}
class FizzBuzzTest extends PHPUnit_Framework_TestCase
{
  function testFizzBuzzShouldBeTwo(){
    $fizzbuzz = new FizzBuzz();
    $this->assertEquals('2',$fizzbuzz->count(2));
  }
  function testFizzBuzzShouldBeOne(){
    $fizzbuzz = new FizzBuzz();
    $this->assertEquals('1',$fizzbuzz->count(1));
  }
}
?>
