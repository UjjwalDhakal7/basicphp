<?php
/*

Lexical Structure:
Set of basic rules that governs hoe you write programs in a language. It is low level syntax specifies what variable name look like, what characters are used for comments, how programs are seperated from each other.

Comments :

Comments are used to give information or provide documentation to people who read your code.

Single line comment starts with // or #. Everything until the line break is taken as comment.

Multi-line comment starts with /* and ends with */

/*

Case sensitivity :

Php doesn't care about case sensitivity of user defined classes and functions,
built-in constructs and keywords(echo, while, etc).

Statements :

Statements is a collection of code.
In php, semicolon(;) is used to seperate simple statements.
To seperate complex block of code, curly braces {} is used as in loop statements.
*/

echo"hello, world<br />";
EchO("hello, world<br />");
ECHO("hello, world<br />");

echo ("This is my first program.<br />");
/*

Whitespace & Linebreaks :

Whitespace doesn't matter in a PHP program. This can be used to make your code more readable by indenting, lining assignments.

Variables :

It holds the data that the program performs operation on when it runs. In PHP variables are denoted by $ sign followed by variable name. = is used to assign the value.

Strings :

They are sequence of characters of arbitrary length.
They are located within single '' or double quotes "".

*/

EchO("hello, world<br />");

$name = "Eden";
$roll = 1;
$address = "Kathmandu";

echo "I am from $address"."<br />"; 
echo "I am ".$name."<br />";
echo 'I am from '.$address."<br />";
echo "I am from {$address}"."<br>";

//heredocument (heredoc)
echo <<<HTMLDOC
 I am learning a new programming language called PHP. It is a dynamic language used for web programming.<br />
 HTMLDOC;

$adj = "rock";
echo "We ".$adj."ed the concert"."<br />";
echo "We {$adj}ed the concert"."<br />";

/*

Constant :
They are used to hold data which once defined cannnot be altered later.
*/

define('Name', 'Eden');
echo Name."<br />";

define('Subject', 'PHP');
echo Subject."<br />";

/*
Magic Constants in PHP:

__Line__    : defines current line number of file.
__FILE__    : defines full path and file name of file.
__DIR__     : defines the directory of the file.
__Function__: defines the function name.
__CLASS__   : defines the class name.
__METHOD__  : defines the class method name.
__NAMESPACE__: defines the name of current namespace.

*/

echo "This is line number".__LINE__."<br />";
echo "The name of file is".__FILE__."<br />";


/*

 String validation :

trim :
Syntax :  trim(string,character)

ltrim : Trims from left.
Syntax : ltrim(string,character)

rtrim : Trims from right.
Syntax :  rtrim(string,character)

strlen :
Syntax : strlen(string)

strcasecmp :
Syntax : strcasecmp(string1,string2)

strcmp :
Syntax : strcmp(string1,string2)


 */


 $test = "This is a test program   ";
 echo trim($test,'T')."<br>";

echo "test".ltrim($test)."<br>";
echo "test".rtrim($test)."concate"."<br>";


echo strlen($test)."<br>";
echo strlen('This is a random example of strlen().')."<br>";

$a = 'abc';
$b = 'abd';

echo strcasecmp($a, $b)."<br>";
echo strcasecmp('stand', 'start')."<br>";


$a = 'abc';
$b = 'ABD';

echo strcmp($a, $b),"<br>";
echo strcmp('START', 'stand')."<br>";

/*

String formatting:

printf():
Syntax : 

strtolower
Syntax : strtolower(string)

strtoupper:
Syntax : strtoupper(string)

ucwords :
Syntax : ucwords(string):

ucfirst :
Syntax : ucfirst(string):

substr :
Syntax : substr(string,start,length)
*/

echo strtolower("HELLO, I AM A PHP STUDENT")."<br>";
echo strtoupper("Hello, I am a php student")."<br>";
echo ucwords("this is a demo.")."<br>";
echo ucfirst("this is a demo.")."<br>";

$str = "PHP is a widely used programming language.";
echo substr($str, 9, 11)."<br>";
echo substr($str, -9)."<br>";
echo substr($str, -21)."is used for various purposes."."<br>";

/*
Difference between echo and print.

- print is a function like construct that takes a single parameter and has a return value (always 1).

- echo is a PHP language construct and is bit faster than print in general text output as it doesn't set a return value.

- print can be used be used as a part of more complex expression but echo cannot as it isn't implemented like a functi.


*/

  ?>
