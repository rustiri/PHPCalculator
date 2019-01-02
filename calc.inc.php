<?php

class Calculator {

  public $num1;
  public $num2;
  public $calc;

  public function __construct($number1,$number2,$calculate){
    $this->num1 = $number1;
    $this->num2 = $number2;
    $this->calc = $calculate;
  }

  //method to calculate what inside the calculator
  public function calcMethod () {

    switch($this->calc) {
      case "add":
        $result = $this->num1 + $this->num2;
        break;
      case "sub":
        $result = $this->num1 - $this->num2;
        break;
      case "mul":
        $result = $this->num1 * $this->num2;
        break;
      case "divide":
        $result = $this->num1 / $this->num2;
        break;
      default:
        $result = "ERROR";
        break;
    }

    return $result; //return the result
  
  }
}
