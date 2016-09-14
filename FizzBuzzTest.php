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

  function testIsmoduloByThreeAndFiveShouldBeFizzBuzz(){
    $fizzbuzz = new FizzBuzz();
    $this->assertEquals("FizzBuzz",$fizzbuzz->count(15));
  }

  function testIsmoduloByThreeShouldBeFizz(){
    $fizzbuzz = new FizzBuzz();
    $this->assertEquals("Fizz",$fizzbuzz->count(12));
  }

  function testIsmoduloByFiveShouldBeBuzz(){
    $fizzbuzz = new FizzBuzz();
    $this->assertEquals("Buzz",$fizzbuzz->count(5));
  }

  function testIsOtherNumber(){
    $fizzbuzz = new FizzBuzz();
    $this->assertEquals("4",$fizzbuzz->count(4));
  }

}
?>
