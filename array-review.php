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
echo "<p>Part 1:</p>";
sortAndPrint($animals);
addArrayElement("boa", $animals);
addArrayElement("bunny", $animals);
echo "<p>Part 2:</p>";
//sortAndPrint($animals);

//Part II

//create associative array
$cupcake = array( "grasshopper" =>  "The Grasshopper",
                  "maple"       =>  "Whiskey Maple Bacon",
                  "carrot"      =>  "Carrot Walnut",
                  "caramel"     =>  "Salted Caramel Cupcake",
                  "velvet"      =>  "Red Velvet",
                  "lemon"       =>  "Lemon Drop",
                  "tiramisu"    =>  "Tiramisu",   );

//loop through array and make into checkboxes. set each key as 'value' attribute and each value as checkbox label
foreach($cupcake as $key => $value)
{
    echo"<input type=\"checkbox\" name=\"cupcake[]\" value=\"$key\">$value<br>";
}

?>