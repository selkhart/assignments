// Sarah Elkhart
// 9 january 2018
// beanCounting.js



//function that takes a random word and counts the number of capital B's.
    function countBs(randomWord)
    {
        var len = randomWord.length;
        var count = 0;

        for(var i = 0; i< len; i++) {
            if (randomWord.charAt(i) == "B") {
                count++;
            }
        }
        console.log("B showed up " + count + " times in " + randomWord +".");
    }

//function that takes a string and lets the user specify the letter to search for
 function countChar(randomWord, randomLetter)
 {
     var len = randomWord.length;
     var count = 0;

     for(var i = 0; i< len; i++) {
         if (randomWord.charAt(i) == randomLetter) {
             count++;
         }
     }
     console.log(randomLetter + " showed up " + count + " times in " + randomWord +".");
 }

 //countBs rewritten to make use of countChar function
function countBs2(randomWord)
{
    countChar(randomWord, "B");
}

