
<?php
$obj = new main();
$text = "Web Development String Array";

class main
{
public function __construct()
{  
echo 'Hello I\'m an object! </br>';
echo 'My Input string is: WEB DEVELOPMENT STRING ARRAY</br>';
stringFunctions::myStringfunc();
stringFunctions::myArrayfunc();
}   
public function __destruct()
{
echo '</br> I\'m Done';
} 
}
class stringFunctions
{

static public function printThis($text)
{
print($text);
echo '</br><hr>';
}
static public function printThisarr($text)
{
print_r($text);
echo '</br><hr>';
}
static public function myStringfunc()
{    
$text="Web Development String Array";
echo '<h2>STRING LENGTH FUNCTION DEMO</h2>';
$var= strlen($text);
stringFunctions::printThis($var);

echo '<h2>REPLACE SEARCH STRING "Array" WITH "REPLACED" DEMO</h2>';
$var=str_replace("Array", "REPLACED", $text);
stringFunctions::printThis($var);

echo '<h2>RETURN SUBSTRING FUNCTION</h2>';
$var=substr($text,4,11);
stringFunctions::printThis($var);

echo '<h2>WORD COUNT FUNCTION</h2>';
$var=str_word_count($text);
stringFunctions::printThis($var);

echo '<h2>REVERSE STRING FUNCTION</h2>';
$var=strrev($text);
stringFunctions::printThis($var);

echo '<h2>STRING TO LOWER CASE FUNCTION</h2>';
$var=strtolower($text);
stringFunctions::printThis($var);

echo '<h2>STRING TO LOWER CASE FUNCTION</h2>';
$var=strtoupper($text);
stringFunctions::printThis($var);

echo '<h2>REPEAT A STRING FUNCTION</h2>';
$var=str_repeat($text,2);
stringFunctions::printThis($var);

echo '<h2>CONVERT STRING TO ARRAY FUNCTION</h2>';
$var=str_split($var);
stringFunctions::printThisarr($var);

echo '<h2>POSITION OF SUBSTRING "WEB"  FUNCTION</h2>';
$var=strpos($text,'Web');
stringFunctions::printThisarr($var);
}

static public function myArrayfunc()
{
$array=array(1,2,3,4,5,6,7);
echo '<h2>ARRAY COUNT FUNCTION</h2>';
echo 'INPUT ARRAY=A,A,B,C,D,D</br>';
$array1=array(A,A,B,C,D,D);
$var=array_count_values($array1);
stringFunctions::printThisarr($var);

  echo '<h2>ARRAY SEARCH FUNCTION</h2>';
  echo 'INPUT ARRAY=A,A,B,C,D,D</br>Search for C';
  $var=array_search('C',$array1);
  stringFunctions::printThisarr($var);

  echo '<h2>ARRAY POP FUNCTION</h2>';
  echo 'INPUT ARRAY=1,2,3,4,5,6,7</br>';
  $var=array_pop($array);
  stringFunctions::printThisarr($var);

  echo '<h2>ARRAY SLICE  FUNCTION</h2>';
  echo 'INPUT ARRAY=A,B,C,D,E</br>';
  $array2=array(A,B,C,D,E);
  $var=array_slice($array2,4);
  stringFunctions::printThisarr($var);

  echo '<h2>ARRAY REVERSE  FUNCTION</h2>';
  echo 'INPUT ARRAY=A,B,C,D,E</br>';
  $array2=array(A,B,C,D,E);
  $var=array_reverse($array2);
  stringFunctions::printThisarr($var);
  
   echo '<h2>ARRAY FLIP FUNCTION WHERE KEY VALUE PAIRS ARE FLIPPED</h2>';
   echo 'INPUT ARRAY=A,B,C,D,E</br>';
   $array2=array(A,B,C,D,E);
   $var=array_flip($array2);
   stringFunctions::printThisarr($var);

   echo '<h2>ARRAY UNIQUE FUNCTION(Removes redundant value)</h2>';
   echo 'INPUT ARRAY=A,A,B,C,D,D</br>';
   $array1=array(A,A,B,C,D,D);
   $var=array_unique($array1);
   stringFunctions::printThisarr($var);

   echo '<h2>ARRAY PRODUCT FUNCTION</h2>';
   echo 'INPUT ARRAY=1,2,3,4,5,6,7</br>';
   $var=array_product($array);
   stringFunctions::printThisarr($var);

   echo '<h2>ARRAY SUM FUNCTION</h2>';
   echo 'INPUT ARRAY=1,2,3,4,5,6,7</br>';
   $var=array_sum($array);
   stringFunctions::printThisarr($var);

   echo '<h2>ARRAY VALUES  FUNCTION</h2>';
   echo 'INPUT ARRAY: SIZE=>XL, COLOR=PINK</br>';
   $array3=array("size"=>"XL","color"=>"pink");
   $var=array_values($array3);
   stringFunctions::printThisarr($var);



}



}

?>
