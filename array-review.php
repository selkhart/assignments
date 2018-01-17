<!--Sarah Elkhart
    16 January 2018
    array-review.php-->

<?php
//Part 1
//
//    Define an array called $animals, which contains panda, alpaca, and boa.
//    Write a function that sorts and prints the array, as shown below. Print $animals using your function.
//    Write a function that takes a string parameter and adds it to your array,
// unless the value is already in the array.
// The function should be case-insensitive. Test your function.
//
//Your output should look like this...
//
//alpaca boa panda
//adding goat...
//alpaca boa goat panda
//adding Boa...
//alpaca boa goat panda

//define array
$animals = array( “panda”, “alpaca”, “boa”);

//define function that sorts array and prints out values
function sortAndPrint($array)
{
    sort($array);

    foreach ( $array as $val )
    {
        echo "<p>$val </p>";
    }

}

//function that takes a string parameter and adds it to the array
function addArrayElement($string, $array)
{
   $string = strtolower ( $string );
    foreach($array as $val)
        if($val == $string)
        {
            echo"$string is already in the array";
        }
        else
        {
            $array[] = $string;
        }

}

sortAndPrint($animals);
addArrayElement("boa", $animals);
addArrayElement("bunny", $animals);

//Part II
$cupcake = array( "grasshopper" =>  "The Grasshopper",
                  "maple"       =>  "Whiskey Maple Bacon",
                  "carrot"      =>  "Carrot Walnut",
                  "caramel"     =>  "Salted Caramel Cupcake",
                  "velvet"      =>  "Red Velvet",
                  "lemon"       =>  "Lemon Drop",
                  "tiramisu"    =>  "Tiramisu",   );


//
//    Use a loop to display the cupcake options as a set of checkboxes:
//    cupcakes.png
//    Accessibility score: Low Click to improve
//
//The source code should show the key for each item (grasshopper, maple, carrot) as the value of the checkbox. For example:
//
//<input type='
//}checkbox" name="flavors[]" value="grasshopper"> The Grasshopper<br>
//
//Submission
//
//After each problem, commit your code to GitHub. You should have a minimum of 5 commits. Submit a) the URL of your PHP script and b) the URL of your GitHub repository.
?>