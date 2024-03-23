<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learn PHP</title>
</head>
<body>

<?php
echo phpversion() . "<br>";
echo "Finally, I open this file.";
//---------------------------------- Case Sensitivity.
echo "Hello World <br>";
ECHO "Hello World <br>";
Echo "Hello world <br>";
EcHo "Hello world <br>";
// Here echo , ECHO, Echo, EcHo are same.

$color = "Black";
echo "My Favorite Color is: " .$color . "<br>";
echo "My Favorite Color is: " .$Color . "<br>";
echo "My Favorite Color is: " .$CoLor . "<br>";
//but $color, $Color, $coLor is not same.

// phpinfo();

// ---------------------------------- Comments 

// 1 : this is a single-line Comment.
# 2 :  this is a single-line comment.
/* 3 : This is a Multi-line 
       comment.
*/       
//---------------------------------- variable
  # Variable names are case-sensitive.
  $text1 = "Sweets";
  echo "I love $text1 ! ";
  echo "I love " . $text1 . " ! ";
  
  $n1 = 4; $n2 = 5;
  echo $n1 + $n2;

// variable type
  # String
  # Integer
  # Float
  # Boolean
  # Array
  # Object
  # NULL
  # Resource
 
echo "<br>";
var_dump($n1);
var_dump($text1);
var_dump(3.1);
var_dump(true);
var_dump([2,3,4]);
var_dump(NULL);

// variable Scope
 # local # Global # static

 $x = 5 ; // Global scope

 function testF() {
    // echo "<p> Variable X inside function is $x </p>"; 
    // generate an error
 };
 testF();
 echo "<p> Variable X outside function is: $x </p>";
 
 function testF2() {
    $x = 6;  // local scope
    echo "<p> Variable X inside function is $x </p>";   
 };
 testF2();
 
 // ------------- Global keyword

 function testF3() {
    global $x;
    Echo "$x";
 } 
 testF3();
 echo "<br>";
 
 # PHP also stores all global variables in an array called $GLOBALS[index]. 
 
 $a = 5; $b = 10 ;
 function testF4(){
    $GLOBALS['b'] = $GLOBALS['a'] + $GLOBALS['b'];
 }
 testF4();
 echo $b ."<br>";

// -------------- static keyword 

 function testF5(){
    static $x = 0;
    echo $x;
    $x++;
 }
 testF5(); echo "<br>";
 testF5(); echo "<br>";
 testF5(); echo "<br>";

//------------------------------ Echo & print
    // The different are small.
       # echo has no return value while print has a return value of 1 so it can be used in expression.
       # echo can take multiple parameters while print can take one argument.
       # echo is marginally faster then print.

 echo "<h1> PHP is fun! </h1>";
 echo "Hello World ! ";
 echo "I'm about to learn PHP! <br>";
 echo "This ", "string ", "was ", "with multiple parameters.";

 $text2 = "Learn PHP";
 $text3 = "W3 School.com";
 $n3 = 3;
 $n4 = 4;

 echo "<h2>". $text2 ."</h2>";
 echo "Study PHP at " . $text3 . "<br>";
 echo $n3 * $n4;

 print "<h2> PHP is Fun! </h2>";
 print "Hello World. ";
 print "I'm about to learn PHP!";

 print "<h2>" .$text2 . "</h2>";
 print "Study PHP at " . $text3 . "<br>";
 print $n3 / $n4;

//-------------------------- Data Type
 /*
   String 
   Integer
   Float
   Boolean
   Array
   Object
   NULL
   Resource  
 */
 var_dump(122);
 var_dump(3.44);

 echo "<br>";

 # ------------ object
 class Car {
    public $color;
    public $model;
    public function __construct($color , $model){
        $this -> color = $color;
        $this -> model = $model;
    }
    public function message(){
        return "My car is a ". $this->color . " " . $this->model. "!";
    }
 }

 $myCar = new Car("red", "Volvo");
 var_dump($myCar);

 #---------- Null
   // Null is a special data type which can have only one value : NULL.

   var_dump(NULL);
    
   echo " <br>"; 
   
   # --------- Change value
   $d = 5;
   var_dump($d);
   
   echo " <br>";

   $d = (string) $d;
   var_dump($d);

// ----------------------------  String
   echo "<h1> string </h1> ";
  
   $t1 = "I'm Saimun.";

   echo "Hi, I'm $t1. "; // Double quoted strings perform action on special characters.
   echo 'hi, I am $t1 <br>'; // single quoted string does not perform such action.
  
   # ------- string length
   echo "String length: " . strlen($t1) . ", ";
   echo "Word count:" .str_word_count( $t1) . ", ";
   echo "String UpperCase: " . strtoupper($t1) . ", ";
   echo "String Lower Case: " . strtolower($t1) . "; <br> ";
   echo "String Replace: " . str_replace("Saimun", "Bashar", $t1) . ", ";
   echo "String Reverse: " . strrev($t1) . ", ";
   echo "String Remove whitespace " . trim($t1) . ", ";
   $t1A = explode(" ", $t1);
   print_r($t1A); 
   
  # ------ string Concatenation 
    // . operator is use to concatenation.
    echo ("<h3> String concatenation </h3>");

    $t2 = "Hello, ";
    $t3 = "Baroghoria. ";
    $t4 = $t2 . $t3;
    echo($t4);

    $t5 = $t2 . " " . $t3;
    echo $t5;

    $t6 = " $t2 $t3"; // better way.
    echo $t6;


    # -------- Slicing
    echo "<h3> Slicing </h3>";
    echo substr($t1, 4, 3) . "; ";
    echo substr($t1, 2) . "; ";
    echo substr($t1, -2, 4) . "; ";
    
    # -------- Escape characters
    echo "<h3> Escape characters </h3>";         
    
    $t7 = "We are the so called \"Viking\" from the north. ";
    echo $t7;

    # ----------- Number
    echo "<h3> Number </h3>";
    
    /*
    there are 3 main numeric type in PHP:
    integer
    float
    Number string 
    */
    
    # 2, 256, -256, 10358, -179567 are all integers.
    # 2.0, 256.4, 10.358, 7.64E+5, 5.56E-5 are all floats.
    
    $n1 = 10.34;
    var_dump(is_float($n1) );
    
    $n2 = 1.9e411;
    var_dump($n2);
 
    $n3 = acos(8);
    var_dump($n3);
    echo "<br>";

    $n4 = 5999;
    var_dump(is_numeric($n4));
    echo "<br>";
    
    $n5 = "5999";
    var_dump(is_numeric($n5));
    echo "<br>";
    
    $n6 = "599.9" + 100;
    var_dump(is_numeric($n6));
    echo "<br>";
    
    $n7 = "hello";
    var_dump(is_numeric($n7));
    echo "<br>";
    
    
    $n8 = 344.56;
    $int_cast = (int)$n8; echo $int_cast; 
    echo "<br>";
    
    $n8 = "344.56";
    $int_cast = (int)$n8; echo $int_cast; 
    echo "<br>";
    
    
// --------------------------- Casting 
    echo "<h3> Casting </h3>";
    #--------- Chang Data type
    /*
     (string) - Convert to date type String
     (int) - convert to date type Integer
     (float) - convert to date type Float
     (bool) - convert to date type Boolean
     (array) - convert to date type Array
     (object) - convert to date type object
     (unsent) - convert to date type NULL
    */

    $a = 5;
    $b = 4.34;
    $c = "Hello";
    $d = true;
    $e = null;
    
    
      #------------- cast to string
   $a = (string) $a;  
   $b = (string) $b;
   $c = (string) $c;
   $d = (string) $d;
   $e = (string) $e;

   // to verify to type 
   var_dump($a);
   var_dump($b);
   var_dump($c);
   var_dump($d);
   var_dump($e);
  
   # ------------ cost to Float
   $a = (int) $a;
   $b = (int) $b;
   $c = (int) $c;
   $d = (int) $d;
   $e = (int) $e;
   // to verify to type
   var_dump($a);
   var_dump($b);
   var_dump($c);
   var_dump($d);
   var_dump($e);
   echo"<br>";

   # ----------------  cast to Boolean
   $a = 5;
   $b = 4.34;
   $c = "Hello";
   $d = true;
   $e = null;
   $f = "";
   $g = -1;
   $h = 0;
   $i = 0.1;

   $a = (bool) $a;
   $b = (bool) $b;
   $c = (bool) $c;
   $d = (bool) $d;
   $e = (bool) $e;
   $f = (bool) $f;
   $g = (bool) $g;
   $h = (bool) $h;
   $i = (bool) $i; 
   // To verify the type of any object in PHP, use the var_dump() function:
   var_dump($a);
   var_dump($b);
   var_dump($c);
   var_dump($d);
   var_dump($e);
   var_dump($f);
   var_dump($g);
   var_dump($h);
   var_dump($i);
   echo"<br>";
   
   #------------- cost to Array
   $a = 5;
   $b = 4.34;
   $c = "Hello";
   $d = true;
   $e = null;
   $f = "";
   $g = -1;
   $h = 0;
   $i = 0.1;
   
   $a = (array) $a;
   $b = (array) $b;
   $c = (array) $c;
   $d = (array) $d;
   $e = (array) $e;
   $f = (array) $f;
   $g = (array) $g;
   $h = (array) $h;
   $i = (array) $i; 
   
   // To verify the type of any object in PHP, use the var_dump() function:
      var_dump($a);
      var_dump($b);
      var_dump($c);
      var_dump($d);
      var_dump($e);
      var_dump($f);
      var_dump($g);
      var_dump($h);
      var_dump($i);
      echo"<br>";
     
     class Car1 {
      public $color ;
      public $model ;
      public function __construct($color, $model){
         $this-> color = $color;
         $this-> model = $model;
      }
      public function message() {
         return "My car is  ". $this-> color . " " . $this->model . "! ";
      }
     }

     $myCar2 = new Car1 ("red", "BMW");
   //   echo $myCar2;

     $myCar2 = (array) $myCar2;
     var_dump($myCar2);
   echo "<br>";
  # ---------- cast to object
  // To verify the type of any object in PHP, use the var_dump() function:
   
   $a = 5;
   $b = 4.34;
   $c = "Hello";
   $d = true;
   $e = null;
   $f = "";
   $g = -1;
   $h = 0;
   $i = 0.1;

   $a = (object) $a;
   $b = (object) $b;
   $c = (object) $c;
   $d = (object) $d;
   $e = (object) $e;
   $f = (object) $f;
   $g = (object) $g;
   $h = (object) $h;
   $i = (object) $i; 
   

   var_dump($a);
   var_dump($b);
   var_dump($c);
   var_dump($d);
   var_dump($e);
   var_dump($f);
   var_dump($g);
   var_dump($h);
   var_dump($i);
      
   echo "<br>";
   $a = array("Volvo", "BMW", "Toyota"); // indexed array
   $b = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43"); // associative array
   
   $a = (object) $a;
   $b = (object) $b;

   var_dump($a);
   var_dump($b);


// ----------------------------- Math
   echo "<h3> Math </h3>";
   
   echo(pi());
   echo ", ";
   echo (min(4,2, 6, 45, 8, 90) . ", ");
   echo (max(4,2, 6, 45, 8, 90) . ", ");
   
   # abs() : absolute (positive) value of a number
   echo abs(-6.23) . ', ';
   
   # str() : square root of a number
   echo sqrt(64) . ', '; 

   echo rand() . ', '; // random number
   echo rand(10, 20) . ', '; // random number

// ------------------------------------ PHP Constants
echo "<h2> Constants </h2>";

  # to create a constant, use the define() function
  # define (name, value, case-insensitive);

  define("GREETING", "Welcome to w3School.com " );
  echo GREETING;

  //   define("welcome", "Welcome to w3School.com " ,true);
  //   echo WELCOME;

  # const keyword
  const myMobile = "Redme";
  echo myMobile;

  echo "<br>";

  define("cars",[
   "Alfa Romeo",
   "BMW",
   "Toyota"
  ]);

  echo cars[0];
 //Constants are automatically global and can be used across the entire script.
 echo "<br>";
 
 function test(){
   echo GREETING ; 
 }
 test();

?>

    
</body>
</html>