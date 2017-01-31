<?php

$imgnumber = rand(1,100);

echo '<p>Dit random tal er: '.$imgnumber.'</p>';

switch( $imgnumber )
{
    case $imgnumber < 70;
    echo '<img src="billede_1.jpg" alt="billede 1">';
    break;

    case $imgnumber >= 70 && $imgnumber < 90;
    echo '<img src="billede_2.jpg" alt="billede 2">';
    break;

    case $imgnumber >= 90;
    echo '<img src="billede_3.jpg" alt="billede 3">';
    break;
}

?>