<?php
// --------------------------- Magic Constants
echo "<h1> Magic Constants</h1>";

/*

__CLASS__
__DIR__
__FILE__
__FUNCTION__
__LINE__
__METHOD__
__NAMESPACE__
__TRAIT__
ClassName::class

*/

class Fruits {
    public function myValue(){
        return __CLASS__;
    }
}
$kiwi = new Fruits();
echo $kiwi->myValue();
echo "<br>";
echo __DIR__;     echo "<br>";
echo __FILE__;     echo "<br>";

function value(){
 return  __FUNCTION__; 
};
echo value();
echo "<br>";

echo __LINE__;     echo "<br>";

class color {
    public function value(){
        return __METHOD__;
    }
}

$kiwi = new color();
echo $kiwi->value();
echo "<br>";

// namespace myArea;
// function value2(){
//     return __NAMESPACE__;
// }
// echo value2();


trait message1 {
    public function msg1() {
        echo __TRAIT__;
    }
}

class welcome{
    use message1;
}

$obj = new welcome();
$obj->msg1();

// -------------------- PHP Operators
 echo "<h1>PHP Operators</h1>";

    # Arithmetic Operator  +, -, *, /, %,
    # Assignment Operator  =, +=, -=, *=, 
    # Comparison Operator ==, ===, !=, <>, !==,  < , <,  >=,
    # Increment/Decrement operator ++, --
    # logical Operator and, or, xor, ||, &&
    # String operator . .=
    # Array operator   +, ==, ===, != <>
    # conditional assignment operator; ?:,??

  
// ------------------------ PHP if Statements
  echo "<h1>PHP if Statements</h1>";
  
   if (5> 3){
    echo "Have a good Day!";
   }

   $t = 14;
   if ($t == 14){
      echo "<br> Have a good day!";
   }

   $x = 100;
   $y = 40;

   if($x != $y) {
    echo " <br> $x is not equal to $y";
   }
   if($x <> $y) {
    echo " <br> $x is not equal to $y";
   }

   if ($t < $x && $t < $y){
    echo "<br> $t is small";
   }

   # if else
   $d = date("H");
   if ($d < "20"){
    echo " Have a good day.";
   } else {
    echo " Have a good night.";
   }


   # ---------------------------------- short hand if
   if($t < $x) $b = " hello";
   echo $b;

   # --------------------------------- short hand if else
   $b = $y > 100 ? " Hello": " Good Bye";
   echo $b;


   #----------- Nested if 
   $x = 20;
   if ($x > 10) {
    echo " Above 10";
    if($x > 50){
        echo " and also above 50";
    } else {
        echo " but not above 100";
    }
   }

   # ------------- Switch Statement
   
   echo "<br>";

   $favColor = "";

   switch($favColor){
    case "red":
        echo "Your Favorite Color is Rad";
        break;
    case "Blue":
        echo "Your Favorite Color is Blue";
        break;
    case "green":
        echo "Your favorite color is green";
        break;
    default:
        echo "your favorite color is neither rad,m blue, nor green!";
   }

// ------------------------ PHP loop
 echo "<h1>PHP Loop</h1>";

  # ----- while loop (যখন) 

  $i = 0;
  while ($i < 10){
    echo $i;
    $i++;
  }
   echo"<br>";
   $i = 1;
  while ($i < 6){
    if ($i == 4) break;  # Break statement 
    echo $i;
    $i++;
  }
  
  echo "<br>";

  $i = 0;
  while($i < 10){
    $i ++;
    if ($i == 3) continue;  # Continue statement  
    echo $i;
  }

  // ----------- Alternative Syntax
   # -------- endWhile

  $i = 1;
   while($i < 9):
     echo $i ."<br>";
     $i++;
   endwhile;

   
   $x = 0;
   while($x < 100){
    $x += 10;
    echo "$x <br>";
   }

// ------------- do .. while
  $i = 1;

  do {
    echo $i;
    $i++;
  } while ($i < 6);

  echo "<Br>";

  $i = 8;

  do {
    echo  $i;
    $i++;
   } while ($i < 6);

// ---------- for loop
echo "<Br>";

for ($i = 1; $i <=10 ; $i++){
    echo "The number is: $i <br>";
}
for ($i = 0; $i <=100 ; $i += 10){
    echo "The number is: $i <br>";
}

// ____________ for Each

$color = array("red", "green", "blue", "yellow");

foreach($color as $x){
    echo "$x <br>";
}

$member = array("musfik" => "34","sakib"=> "40", "liton"=> "49");

foreach($member as $x => $y){
  echo "$x : $y <br>";
}

class Car {
    public $color;
    public $model;
    public function __construct($color, $model){
        $this->color = $color;
        $this->model = $model;
    }
}

$newCar = new Car("red", "volvo");

foreach( $newCar as $a => $b){
    echo "$a : $b ";
}
echo "<br>";

 //-------  Foreach Byref
 $color = array("red", "green", "blue", "yellow");
 foreach ($color as $x){
    if ($x == "blue") $x = "pink";
 }

 var_dump($color);
 echo "<br>";

 $colors1 = array("red", "green", "blue", "yellow");
 foreach ($colors1 as &$x){
    if ($x == "blue") $x = "pink";
 }

 var_dump($colors1);


 # ---------- Alternative Syntax
 
 foreach($colors1 as $x):
    echo "$x <br>";
    endforeach;


// ------------------------------ PHP  break

# Break in for loop
  for ($n = 0; $n < 10; $n ++){
    if ($n == 4){
        break;
    }
    echo "the number is $n <br>";
  }

# Break in while loop
  $n = 0 ;
  while($n < 10){
    if ($n == 4){
        break;
    }
    echo "the number is $n <br> ";
    $n++;
  }
  
  # break in do ... while loop 
  $n = 0 ;
  do{
    if ($n == 4){
        break;
    }
    echo "the number is $n <br> ";
    $n++;
  } while ($n < 9);
 
  # Break in For Each Loop
    $colors = array("red", "green", "blue", "yellow");

    foreach ($colors as $x) {
    if ($x == "blue") break;
    echo "$x <br>";
    }

// ------------------------ PHP Function
echo "<h2> Function </h2>";
   # Create a function
   function FName() {
    echo "It's a function";
   } 

   # Call a function
   FName();


   # Argument
   function familyName($fName){
    echo "$fName Refsnes. <br>";
   };

   familyName("Hege");
   familyName("Kai");

   # Default Argument Value
   
   function setHight($minHight = 50){
    echo "This hight is : $minHight <br> ";
   }

   setHight(30);
   setHight();

   # returning value

   function sum($x, $y){
    $z = $x + $y ;
    return $z;
   }

   echo "5 + 10 = " . sum(5, 10) . "<br>";
   echo "8 + 20 = " . sum(8, 20) . "<br>";

   # Reference
   function add_five(&$value) {
       $value += 5;
   }

   $num = 4;
   add_five($num);
   echo $num;

   echo "<br>";

   # Variable Number of Arguments
   function sumNumbers (...$x) {
    $n = 0;
    $len = count($x);
    for ($i = 0; $i < $len; $i++) {
      $n += $x[$i];
    }
     return $n;
   }

   $a = sumNumbers(5,67, 8, 9,02, 55);
   echo $a;

   function hisFamily($lastName, ...$firstName){
    $text = "";
    $len = count($firstName);
    for ($i = 0; $i < $len; $i++){
      $text = $text. "Hi, $firstName[$i] $lastName. <br> ";
    }
     return $text;
   }

   $a = hisFamily('Korani', "Fajle", "Mannan", "labu");
   echo $a;
   echo "<br>";
   # -------------
/*
   function addNum(int $a, int $b){
    return $a + $b;
   }

   echo addNum(5, "5 days"); */
   // since strict is NOT enabled "5 days" is changed to int(5), and it will return 10
?>
<?php declare(static_types=1); // strict requirement

// function addNum(int $a, int $b){
//   return $a + $b;
//  }

//  echo addNum(5, "5 days"); Error

function add_N(float $a, float $b) : float {
   return $a + $b ;
}
function add_N2(float $a, float $b) : int {
   return $a + $b ;
}

echo add_N(3.6, 5.6);
echo "<br>";
echo add_N2(3.6, 5.6);