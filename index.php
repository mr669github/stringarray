
<?php
$obj = new main();
$text = "WEB DEVELOPMENT STRING ARRAYS";

class main
{
    public function __construct()
    {  
    echo 'Hello I\'m an object! </br>';
     echo 'My Input string is: WEB DEVELOPMENT STRING ARRAYS</br>';
    stringFunctions::myStringfunc();
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
   static public function myStringfunc()
   {    
   $text="WEB DEVELOPMENT STRING ARRAYS";
   echo '<h2>STRING LENGTH FUNCTION DEMO</h2>';
   $var= strlen($text);
   stringFunctions::printThis($var);
   
   echo '<h2>REPLACE SEARCH STRING "ARRAY" WITH "REPLACED" DEMO</h2>';
    $var=str_replace("ARRAYS", "REPLACED", $text);
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
}  




}

?>
