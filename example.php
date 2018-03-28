<?php
require "alabala.php";
#example 1 - Variables and Data types
/*
    $name1 = 'Bob';
    $name2 = 'Dylan';

    echo $name1;
    echo "<br/>";
    echo $name1." ".$name2;
    echo "<br/>";

    $myAge = 16;                // a PHP Integer - always available
    $yourAge = 15.5;            // a PHP Float - always available
    $hasHair = true;            // a PHP Boolean - always available
    $greeting = 'Hello World!';  // a PHP String - always available

    var_dump($greeting);
*/
    

#example 2 - Operators
/*
    $x = 1;
    $y = true;

    echo $x == $y;  // X and Y have equal values
    echo $x === $y; // but not equal types
    echo "<br>";
    echo (5 % 3)."<br>"; //
    echo (5 % -3)."<br>"; // prints 2
    echo (-5 % 3)."<br>"; // prints -2
    echo (-5 % -3)."<br>";
*/

#example 3 - Arrays

//Indexed array
    $arrInd = array(1,2,3);

    foreach ($arrInd as $val){
        echo $val;
    }
    echo "<br>";

//Associative array 
    $arrAssoc = array(
        "key1" => "foo",
        "key2" => "bar"
    );

    foreach ($arrAssoc as $key => $val){
        echo "$key->$val"."<br>";
    }
    
    foreach ($arrInd as $key => $val){   // Indexed arrays are also Associative arrays as key == index
        echo "$key->$val"."<br>";
    } 

    //Other way of definition
    $cars[0] = "Volvo";
    $cars[1] = "Opel";
    foreach ($cars as $val){
        echo $val."<br>";
    }



#example 4 - OOP
/*
    //set and get
    class MyClass {
        //properties and methods of the class
        public $prop = "I'm a class property!";

        public function setProperty($newVal){
            $this->prop = $newVal;
        }

        public function getProperty(){
            return $this->prop . "<br/>";
        }
    }

    $obj = new MyClass();

    var_dump($obj);

    $new = "New Value";
    $obj->setProperty($new);

    echo $obj->getProperty();

    var_dump($obj);

*/
    /*
    //Encapsulation
    class MyClass {
            public $public = 'Public';
            protected $protected = 'Protected';
            private $private = 'Private';
            function printHello() {
                echo $this->public;
                echo $this->protected;
                echo $this->private;
        }
    }

    $obj = new MyClass();
    //echo $obj->public; // Works
    //echo $obj->protected; // Fatal Error
    //echo $obj->private; // Fatal Error
    $obj->printHello();

  */  

    //Constructor and Destructor
    class Person {
            private $first_name;
            private $last_name;
            
            function __construct($first_name, $last_name) {
                $this->first_name = $first_name;
                $this->last_name = $last_name;
            }

            public function getFullName() {
                return $this->first_name.' '.$this->last_name."<br/>";
            }

            //When the end of a file is reached, PHP automatically releases all resources.
            //To explicitly trigger the destructor, you can destroy the object using the function unset() 
            //as unset($obj)
            public function __destruct(){
                echo "The class ".__CLASS__." was destroyed";
            }
    }

    $person = new Person("Kolio","Ficheto");
   

    #example 5 - Superglobals
    //var_dump($_GET);

    #example - 6 array_map
    function myfunction($v)
    {
      return($v*$v);
    }
    
    $a=array(2,4,6);
    print_r(array_map("myfunction",$a));
    var_dump(array_map("myfunction",$a));
    implode(", ", $a); 

    $colors = array(
        "roses"=> "red",
        "violets" => "blue",
    );

    $text ="
  Roses are {$colors['roses']},
  Violets are {$colors['violets']}.
  I know it is sad,
  but you have homework to do. ";

var_dump($text);


?>