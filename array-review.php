<!--Sarah Elkhart
    16 January 2018
    array-review.php-->

<?php
//Part 1

//define array
$animals = array( "panda", "alpaca", "boa");

//define function that sorts array and prints out values
function sortAndPrint($array)
{
    sort($array);

    foreach ( $array as $val )
    {
        echo "$val ";
    }

}

//function that takes a string parameter and adds it to the array
function addArrayElement($string, $array)
{
    //set to lowercase
   $string = strtolower ($string);

   //if string is in array print out error message
    if (in_array($string, $array)) {
        echo "<p>$string is already in this array</p>";
    }
    //if string is not in array, print out "adding"d and add it to array, then re-sort and re-print array
    else{
        echo"<p>adding $string... </p>";
        $array[] = $string;
        sortAndPrint($array);

    }

}

sortAndPrint($animals);
addArrayElement("boa", $animals);
addArrayElement("bunny", $animals);
//sortAndPrint($animals);

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
//After each problem, commit your code to GitHub.
// You should have a minimum of 5 commits.
// Submit a) the URL of your PHP script and
// b) the URL of your GitHub repository.
?>