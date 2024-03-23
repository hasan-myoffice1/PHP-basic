<?php 
echo "<h1> Array </h1>";

// function Example
    function myFunction() {
        echo "This text comes from a function ";
    };

    //Create Array
    $myArray = array("volvo","15", ["Apples", "banana"], "myFunction");


    $myArray[3]();
    echo "<br>";
    echo $myArray[1] . "<br>";
     

  # Array function
  echo count($myArray) ."<br>";
  var_dump($myArray) ;
  echo "<br>";

  // change value
  $myArray[0] = "BMW";
  var_dump($myArray);
  echo "<br>";

  // loop
   $arr = array("red", "blue", "green","yellow");
  foreach($arr as $x){
    echo "$x <br>";
  }
 
  # push
  array_push($arr, "orange");
  var_dump($arr);
  echo "<br>";

  # Associative Array
   $car = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
   var_dump($car);
   echo "<br>";

   //Access
   echo $car["model"];
   echo $car["brand"];
   echo $car["year"];
   echo "<br>";

   // chang value
   $car["year"] = 2024;
   var_dump($car);
   echo "<br>";

   //loop

   foreach($car as $i=>$j){
    echo "$i : $j <br>";
   }

   #---------------- create Array
    // array() function
    $c = array ("Volvo", "BMW", "SAB" ,"Toyota");
    
    // bracket []
    $c1 = ["Volvo", "BMW", "SAB" ,"Toyota"];

    //multiple line
    $c2 = [
         "Volvo", 
         "BMW",
         "SAB" ,
         "Toyota"
    ] ;

    // Array Keys
    $c2 = [
      0 =>  "Volvo", 
      1 =>  "BMW",
      2 =>  "SAB" ,
      3 =>  "Toyota"
    ] ;
    
    # Declare Empty Array

    $car1 = [];
    $car1[0] = "volvo";
    $car1[1] = "BMw";
    $car1[2] = "tata";

    //mixing Array keys
    $myArr = [];
    $myArr[0] = "apples";
    $myArr[1] = "bananas";
    $myArr["fruit"] = "cherries";


    # --------- Access Array item
    $f = array("apple", "banana", "orange");

    echo $f[0];
    echo "<br>";

    $c = array("apple" => "red", "banana" => "yellow", "orange" => "orange");
    echo $c['banana'];
    echo "<br>";

    function text(){
        echo "What's up";
    }

    $fu = array("hi", 'hello', "text");
    $fu[2]();
    echo "<br>";

    $car = ["brand" => "Ford", "model" => "Mustang" ];

    foreach($car as $i => $j){
        echo "$i : $j <br>";
    }


    // remove
    # array_splice() 
    # unset()
    # array_diff()
    # array_pop()  last item
    # array_ shift first item

//------------------------- PHP Sorting Arrays
   sort($car);
   $cleng = count($car);
   for ($x = 0; $x < $cleng; $x++) {
    echo $car[$x];
    echo "<br>";
   }

   