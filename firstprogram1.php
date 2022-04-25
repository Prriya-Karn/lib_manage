<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>first program</title>
</head>
<body>
	<?php

// php is a loosely typed language (no need to write datatype)language ;

// The combination of operands with an operators to produce a result is called an Expression.
 
// Operators are used perform operations on variables and values;
	
// $a = 1;
// $b = 'name';
// echo $b;
// echo '</br>';
// echo $a;

// echo "</br>";

// $num1 = 12;
// $num2 = 1;

// $sum = $num1 + $num2;
// echo $sum;

// echo "<br>";
// $firstName = "Priya Karn";
// echo "my name is $firstName";


// //Boolean(true = 1 & false = 0)
// echo "<br>";
// $One = true;
// $zero = false;
// echo $One;
// echo "<br>";

// echo $zero;


// //array

// $array = array('priya','karn',2,true,false);
// echo $array[4];


// $num1 = 3;
// $num2 = 3;

// $modulus = $num1 % $num2;

// echo "modulus of two number is $modulus";


//how to find power of any number 

// $base = 10;
// $power = 2;

// $powerOfNumber = pow($base, $power);
// echo $powerOfNumber;
 
//how to find area of rectangle 

// $length = 4;
// $breadth = 5;

// $areaOfRectangle = $length * $breadth;
// echo  "area of rectangle is $areaOfRectangle";

//how to find area of circle 

 // $radius = 5;
 // $power = 2;

 // $area = pow($radius,$power)*3.14;
 // echo "area of circle is :- $area";


//how to find area of square 

// $a = 3;
// $b = 3;

// $area = $a * $b;
// echo "area of square is :- $area";


//how to find area of triangle

// $base = 4;
// $height = 3;

// $area = $base * $height * 1/2;

// echo "area of triangle is :- $area";






// if-else statement 

// $day = "Sunday";

// if($day == "Monday"){
// echo "Today is holiday";
// }

// else{ 
// echo "Today is not holiday";
// }

//Number is divisible by 2 or not 

// $num = 400042;
// if($num % 2 == 0){
// 	echo "Number is divisible by 2";
// }

// else{
// 	echo "Number is not divisible by 2";
// }

// $age = 80;
// if($age == 5){
// echo "baby";
// }
// elseif($age<=12){
// echo "child";
// }
// elseif($age<=22){
// 	echo "teenager";
// }
// elseif($age<=40){
// 	echo "adult";
// }
// elseif($age>40){
// 	echo "elderly person";
// }
// else{
// 	echo "no age";
// }


//concatenation of two string 

// $Name = "Priya";
// $Name .= " Karn";
// echo "</br>$Name";

// $name = "Priya";
// $degree = "diploma";
// $age = 21;
// echo "</br>";
// echo 'My name is' .$name. 'I have' .$degree. 'degree I am' .$age. 'years' ;

// $num1 = 10;
// $num2 = 10;

// if ($num1 < $num2) {
// 	echo $num1. 'is less than ' .$num2;
// }

// else
// {
// 	echo $num1. ' is greater than  ' .$num2;
// }

//logical operator(or and xor) 

// $a = 5;
// $b = 5;
// $c = 50;

// if ($a == $b xor $a == $c) {
// 	echo "true";
// }
// else{
// 	echo "false";
// }

// $a = 5;

// if ($a == 5) {
// 	echo "yes";
// }
// else{
// 	echo "oops not equal";
// }

// ternary operator 

// echo ($a == 5) ? "yes is equal to $a" : "oops not equal";

// php incrementing/decrementing operator

// some rules:-
// 1. ++$a pre-increment means increments $a by one, then returns $a.
// 2. $a++ post-increment means returns $a, then increments $a by one.
// 3. --$a pre-decrement means decrements $a by one, then returns $a. 
// 4. $a-- post-decrement returns $a, then decrements $a by one.

// $a = 5;
// echo ++$a;


// $a = 8;
// echo "<br>". $a++;
// echo "</br>" .$a;


// $a = 11;
// echo "</br>" .$a--;
// echo "</br>" .$a--;

// $a = 100;
// echo "</br>" .--$a;

//pre mein koi dikkat nahi easily increment decrement ho jata hai


// $a = 4;
// $b = 3;

// $c = ++$a + $b++;

// echo $c;


// $a = 2;

// $c = ++$a + ++$a ;

// //   3    +  4   

// echo $c;


// $a = 2;

// $c = $a++ + ++$a;
 
// echo $c;


//switch statement 

// $favcolor = "Green";

// switch ($favcolor) {
// 	case 'green': echo "your favcolor is green";
		
// 		break;
// 	case 'red': echo"your favcolor is red";
// 	break;

// 	case 'black' : echo "your favcolor is Black";
// 	break;

// 	default:
// 		echo "I can't found your favcolor";
		
// }

//while loop 

// $a = 1;

// while ($a<=10) {
	
// 	echo "$a <br>";
// 	$a++;
// }                    




// $i = 9;
// $j = 1;


// while ($j<=10) {
// 	$a = $i*$j;
// 	echo "{$i} * {$j} = {$a} <br>";
// 	$j++;
// }


//for loop


// for( $i=1; $i <=5 ; $i++)
// { 
// 	for ($j=1; $j<=5 ; $j++) 
// 	{
// 		if ($j<=$i) {
// 			echo"*";
// 		}
// 		else{
// 			echo"<br>";
// 		}
// 	}
// 	}

// $i = 2;
// for ($j=1; $j <=10 ; $j++) { 
// 	$a = $i * $j;
// 	echo "$i * $j = $a <br>"; 
// }

// your challenge is to list all of the multiplies of 12 which are less than or equal to 240. You must complete this task twice, once using a for loop, while loop. 

// the multiples of 12 are 12,24,36,48 ... 240

// your answer format should be 12 *1 = 12

// for ($i=1; $i<= 10 ; $i++){
// 	echo $i. <br>;
// }

// difference between == and ===;

// $num1 = 2;
// $num2 = "2";

// if ($num1 === $num2) {
// 	echo "$num1 and $num2 are equal";
// }
// else{
// 	echo "both are not equal";
// }

// rand() function 

// $RandNumber = rand(0,10);
// echo "$RandNumber";

//fizz bizz challenge 
// for ($i=1; $i <=100 ; $i++) { 
 

//        if ($i%3==0) {
//        	echo "fizz <br>";
//        }
//        elseif ($i%5==0) {
//        	echo "bizz <br>";
//        }
//        elseif (($i%3==0) && ($i%5==0) ){
//        	    echo "fizzbuzz";
//        	       }
//        else{
//        	echo"$i <br>";
//        }

       
//  }


//php challenge heads, I win! tails you win!

// $heads=0;
// $tails=0;

// for ($i=1; $i<=5 ; $i++) {
// 	$randnumber = rand(1,2);
// echo " $randnumber";
//  if($randnumber == 1){
//  	echo "HEADS, I win <br><br>";
//  	$heads++;
//  }
//  else 
//  {
//  	echo "Tails, You win <br><br>";
// $tails++;
//  }



// }

// echo "there were {$heads} heads and ${tails} tails <br>";

// if ($heads>$tails) { 


//  //yhan hm or operator kyu nahi lagaya??...


// 	echo "head win";
// }
// elseif ($tails>$heads) {
// 	echo "tails win";
// }
// else
// {
// 	echo "draw";
// }

//find the length of words or  sentence in string 

// $data = strlen("Hello, Good morning. I want to become a great coder and web developer");

// echo "The length of the string is $data";

// count word 

// $data = "Hello, Good morning. I want to become a great coder and web developer ";

// $wordcounter = str_word_count($data);
// echo "$wordcounter";


//how to replace character/words in a string in php?

// $str_replace = str_replace("Priya", "Ankita", "Priya karn");
// echo "$str_replace";

// $str_replace = str_ireplace("kArN", "Madhu", "Priya karn");
// echo "$str_replace";

// $names = "priya|karn|thapatechnical";

// $str_replace = str_replace("|", " , ", "$names");

// echo "$str_replace";

 // $c = (f-32)*5/9;
 // $f = c*9/5+32;

// function

// function myname(){
// 	echo "my name is priya";
// }

// myname();

// function total(){
// 	$sum = 4+3;
// 	echo "sum is $sum";
// }
// total();

//parameter and argument

// function sum($a,$b){  //parameter
// 	$sum = $a + $b;
// 	echo "$sum <br>";
// }
// sum(12,12); 
// sum(2,3);  // argument
// sum(1,2);

//default argument value;

// function mul($a,$b=5){
// 	$total = $a * $b;
// 	echo "$total <br>";
// }

// mul(2,9);
// mul(3,4);
// mul(2);
// mul(3);

//find factorial of a number 
 // function factorial($a){
 // 	$Mul = 1;
 //     for ($i=$a; $i >=1 ; $i--){

 //        	$Mul = $i*$Mul;
 //        	echo "$i *";
 //        }
 //        echo " = $Mul";    

 //        }

 // factorial(6);


// $a = 5;
// $Mul = 1;

 for ($i=$a ; $i >= 1 ; $i--)

// { 
// 	$Mul = $i * $Mul;
// echo "$i *";
// }
// echo " = $Mul";


//return

// function mult($a,$b){
//       $total = $a * $b;
//       $sum = $a + $b;
//       return $total;
//       return $sum;

// }


// $output = mult(5,2);
// echo "the multiplication of two number is $output";

//array()

//if array length is 15 then what would be the last index??...

// $names = array("Vinod","Bahadur","thapa","thapatechnical");

// echo "<pre>";
// print_r($names);

// $names[4] = "subscribe";
// echo "<pre>";
// print_r($names);

// echo "$names[3]";
// //echo "$names";
// echo"<ul>";
// for ($i=0; $i <= 4 ; $i++) { 
// 	echo"<li>$names[$i] <br> </li>";
// }
// echo"</ul>";

// $countarray = count($names);
// echo "length of array is $countarray";

//foreach()

// echo "<ol>";
// $student = array("vinod","bahadur","thapa","thapatechnical");

// foreach ($student as $names) {
// 	echo " <li> $names </li>";
// }
// echo "</ol>";




// $student = array("vinod","bahadur","thapa","thapatechnical");
// echo "<ol>";
// for ($i=0; $i <=3 ; $i++) { 
// 	echo "<li> $student[$i] </li>";
// }
// echo "</ol>";

//sort() and rsort() in array 

// $student = array("vinod","bahadur","thapa","thapatechnical");

// sort($student);
// rsort($student);
// foreach ($student as $name) {
// 	echo " <br> $name";
// 	}

// pop() || shift() remove; 
// push() || unshift() add;
                  

// $student = array("vinod","bahadur","thapa","thapatechnical");

// echo "<pre>";
// print_r($student);
// echo "<br>";

//  array_pop($student);
// echo "<pre>";
// print_r($student);

// array_push($student, "youtubechannel");
// echo "<pre>";
// print_r($student);

// array_shift($student);
// echo "<pre>";
// print_r($student);

// array_unshift($student, "thapatechnical");

// echo "<pre>";
// print_r($student);


// $friends_name = array("sophia"=>"31","jacob"=>"41","william"=>"39","ramesh"=>"40");
// sort($friends_name);

// foreach ($friends_name as $name => $value) {
// 	echo "<br>$name=>$value";
// }

//what is IOT?...

// $color = array("white","green","red");

// sort($color);
// echo "<ul>";
// foreach ($color as $a) {
// 	echo " <li>$a <br></li>";
// }
// echo "</ul>";

// $ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw") ;

// asort($ceu);
// foreach ($ceu as $country => $capital)
// {
// 	echo " <br> The capital of $country is $capital";
// }


// $color = array(4 => "white", 6 =>"green", 11 => "red",);

// sort($color);
// foreach ($color as $key => $element) {
	
// }
// echo "<br>$element";


//implode and explode

// $color = array("red","blue","yellow");


// $name = implode(" ", $color);
// echo "my favourite color are $name";

// $favColor = "my name is priyakarn";

// $res = explode(" ", $favColor);
// echo "<pre>";
// print_r($res);


// foreach ($res as $a) {
// 	echo "$a";
// }


//arrays merge 

// $arr1 = array('red','yellow','black');
// $arr2 = array('blue','green','red','black');
// $merge = array_merge($arr1,$arr2);

// foreach ($merge as $res) {
// 	echo "<br>$res";
// }


// //remove duplicate

// $a = array_unique($merge);
// echo "<pre>";
// print_r($a);

//we want to all are working with the help of function

// function union($arr1,$arr2){
//     $merge = array_merge($arr1,$arr2);
//    foreach ($merge as $res) {
//    	    echo " <br> $res";
//    }
// echo "<br>";
//    $unique = array_unique($merge);
//    foreach ($unique as $a)xa {
//    	    echo " <br> $a";
//    }
// }

//$arr1 = array('red','yellow','black');
// $arr2 = array('blue','green','red','black');

// union($arr1,$arr2);


















































?> 
</body>
</html>