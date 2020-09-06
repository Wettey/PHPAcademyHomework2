<?php

$name = 'lobel';
$alphabet = 'a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,y,z';

$arrAlphabet = explode(',', $alphabet);
$arrName = str_split($name);

$row = count($arrName);
$reverseArrName = array_reverse($arrName);

for ($i = 0; $i < $row; $i++) {
    foreach ($arrAlphabet as $letter) {
        if ($letter === $arrName[$i] && $letter === $arrName[$i] && $letter === $reverseArrName[$i]) {
            echo '<b><u>' . $letter . '</b></u>';
        } elseif ($letter === $reverseArrName[$i]) {
            echo '<u>' . $letter . '</u>';
        } elseif ($letter === $arrName[$i]) {
            echo '<b>' . $letter . '</b>';
        } else {
            echo $letter;
        }
    } echo '<br>';
}