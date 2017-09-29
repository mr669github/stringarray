
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
      
       




}

?>
