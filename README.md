PHP
server side scripting language
case sensitive and you must put ; titik koma on the last sintaks;


first you have to install development environtment
such as, apache as a web server, php as a language and mysql as a database
but you can use XAMPP (all in one)

then dont forget to run web server 
stord your php file in htdocs folder.
htdocs folder we assume as a localhost.
htdocs folder will looking index.php or hmtl file 
if doesnt find that htdocs will display folder inside it

Code that we wrote in <?php ?> will change into html and displayed

// ============================================================
everysingle you create variableyou have to put $ symbol
for example = $variableName 
then use asign symbol = then put value for that variable

$variableName = variableValue;

% Good variable name => use lowercase, camelCase or separete with _ (underscore) 
% If your variable more that 1 word

% Data type in PHP
String :  '' or ""
Numerik ==
Int: 123
Float: 3.14


// ==================== UPDATE VARIABLE ==================
We can update value inside variable
for example : $age = 20; $age = 23;
new value will replace previous value;


<!-- String concatenation -->
You can combine string using dot notation (.)
there are 3 types string concatenation 
1. String with string 
2. String variable with string variable
3. String with string variable.

<!-- VariableSubtitution -->
Inside string with ""
You can insert a variable with put variable name inside {} we called it Variable subtitution.

If u using '' variable cannot subtitute because will be interprete as a string, even if inside parentheses {}


<!-- Control flow  -->
If, elseif, else, switch


<!-- Array -->
Array = you can stored some value at the same time,
variable that can stored more than one value.

way to write array in php
$arrayName = array(firstValue, secondValue ...);

inside of array you can access value based on their index.
index start from zero.

to access array
$arrayName[index];

to add element on last of array write this:
$arrayName[] = value;
you can also replace value in array with define same number of index.
$arrayName[1] = newValue;

<!-- Array Associative (The concept just like an object in javascript)-->
allows us to manage data set like array.
The different is rather than using index number to manage element,
we can define value as the key.


Key bisa berbentuk string, you can pair key and value with =>
$arrayAssociName = array(
    'keyName' => 'Value',
    'secondKeyName' => 14,    
    );

% How to use Array Associative
To take value from Array Associative,
We use key according to following : $arrayName[key]

You can also adding data to Array Associative
$arrayName[key] = value;


==============================================================
% Loop and iteration
for, while, do while, break, continue, forEach

BREAK statement secara paksa akan mengakhiri loop 
and used in loop statement (for, while, forEach, etc)
Break statement generally used in combination with condition statement like a IF statement.



CONTINUE statement Melewatkan kita dari loop (used at certain condition),
CONTINUE statement only pass iteration at the moment but continue loop.
CONTINUE statement also can be used at Iteratif statement such as for, while, forEach, etc.

% FOREACH on PHP such as For of or For in at Javascript
forEach loop doing iteration on Array with index or Array Associative sequentially from first value.

You can take value from array one by one such as showed.
value defined sequentially to variable after keyword %as
on first every loop.

Variable name after %as 
can be anything.

for Example :
$arrayName = array("Budiman","Sitorus");
foreach($arrayName as $newArrayName) {
    echo $newArrayName
}


HOW TO DO FOREACH
inside foreach loop, array value sequentially defined to keyVariable ($key)
and valueVariable ($value)

then code in loop will be repeatedly run.
Nomor index (for array with index)
or Key (for array associative) given to key variable.
However, pay attention that key variable optional;

 foreach($scores as $key => $value) {
      echo "{$key}: {$value} ";
    }

<!-- =============================================== -->

<!-- FUNCTION -->
Piece of code that designed for solve curtain task and return result.
some of generally function and usefull already embedded in PHP.

Embedded function in PHP we called it : Built in Function.
for example : 
strlen (returned mount of character in a string)

value inside of parentheses we called it argument, 
variable inside of parentheses we called it parameter.

USING FUNCTION
Some of built in function : 
- count (return amount of element in array)
- rand (return random number among first argument and second argument)

there are so many built in function in PHP, instead of memorize it
better you searching and learn about function that useful for certain purpose.


<!-- CREATING FUNCTION- -->
You also can create your own function.
when you group code at one place.

you can create changes to all places that used at the same time with
edit function that loads it.

this is more easier managed rather than changes many separate line of code
and almost identic.


<!-- HOW CREATE FUNCTION -->
keywordFunction functionName(firstParameter, secParameter...) {

    <!-- Body function -->

}

Invoke function : functionName(yourArgument or value of Parameter);


<!-- RETURN VALUE (FUNCTION) -->
function can return a value, and this value known as RETURN VALUE.
Like run a function and part of function run changes with value that returned;
Return value determined by keyword return.