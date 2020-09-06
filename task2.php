<?php

$alphabet = 'a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,y,z';

$arrAlphabet = explode(',', $alphabet);
$rowAlphabet = count($arrAlphabet);

$start = 12;

//looping alphabet rows
for($i = 0; $i < $rowAlphabet; $i++){

        /*looping the <b> tag through each loop starting with the 12th letter, then
        decrementing the $start variable using absolute values
        */
        foreach ($arrAlphabet as $startLetter => $letter) {
            if (abs(- $start + $i) === $startLetter) {
                echo "<b>{$letter}</b>";
            } else {

                //loop entire rows as well
                echo $letter;
            }
        }
        echo '<br>';
        /*push the next element of the loop to the end of the array
         and shift the first element in the next array loop by 1
        */
        array_push($arrAlphabet, array_shift($arrAlphabet));
}
