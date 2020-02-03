<?php

class Calculator {
  public $num1;
  public $num2;
  public $calc;
  
  public function initCalc($number1,$number2,$calculate){
      $this->num1=$number1;
      $this->num2=$number2;
      $this->calc=$calculate;

  }

  public function calcMethod(){
      switch($this->calc){
          case 'add':
            $result = $this->num1 + $this->num2;
            break;
          case 'sub':
            $result = $this->num1 - $this->num2;
            break;
          case 'mul':
            $result = $this->num1 * $this->num2;
            break;
          case 'div':
            $result = $this->num1 / $this->num2;
            break;
          case 'default':
            $result = 'Error,no calculation method available!';
            break;
      }
      return $result;
  }

}



?>