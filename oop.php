<?php
/*
To declare a class in php use the class keyword like shown below

*/

class person {
  var $name;
  var $age;
  /*


    The variables inside a class are called properties and the functions inside
    a class are called methods.


  */
  /*
  What are access modifiers?
    Access modifiers let you modify the access other things have to base classes properties and methods.
    Sometimes you would never want a property to be accessed outside of the base class

    In PHP there are 3 access modifiers:
      public: everyone can access that property and method
      protected: only base class and inherited class can access that property and method
      private: only base class can access that property and method


      (properties declared with var are public by default)
      For eg:
      var $roll_number = 6;
      is same as
      public var $roll_number = 6;

  */


  public function __construct($name){
    // This is a constructor function, this is firstly executed method when class in instantiated
      $this->name = $name;
      $this->age = 18;
  }


  public function set_name($n){

    $this->name = $n;

  }


  public function get_name(){

    return $this->name;

  }


}


//Inherit from one class to another in php with the help of extendes keyword

/*
  Inheritance allows a class to get propeerties and methods from other class
*/
class Employee extends person {
  /*
    Even if employee doesn't have set_name and get_name we can still access is because it is at person

  */

  function __construct($name){

    $this->name = $name;

  }

}


/*
  Now instantiation
*/


/*
Instantiate the class
*/
$suyogya = new person("Suyogya Khanal");

/*
Get data from the class
*/
echo "The person's full name is " . $suyogya->get_name() . " and age is " . $suyogya->age ;

/*
Inherited class
*/

$suyogya2 = new employee("Suyogya Khanal");
$suyogya2->set_name("Suyash Khanal");
echo "<br />The employee's name is ". $suyogya2->get_name();

?>
