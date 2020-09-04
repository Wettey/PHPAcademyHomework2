<?php

$name = 'lobel';
$alphabet = 'a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,y,z';

$arrAlphabet = explode(',', $alphabet);
$arrName = str_split($name);

$row = count($arrName);
$reverseArrName = array_reverse($arrName);

for ($i = 0; $i < $row; $i++) {
    foreach ($arrAlphabet as $byte) {
        if ($byte === $arrName[$i] && $byte === $arrName[$i] && $byte === $reverseArrName[$i]) {
            echo '<b><u>' . $byte . '</b></u>';
        } elseif ($byte === $reverseArrName[$i]) {
            echo '<u>' . $byte . '</u>';
        } elseif ($byte === $arrName[$i]) {
            echo '<b>' . $byte . '</b>';
        } else {
            echo $byte;
        }
    } echo '<br>';
}

