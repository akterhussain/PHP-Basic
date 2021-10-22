<?php

// Grading system
$n = 90;

if($n >= 101):
    echo 'Some think wrong...!'; 
elseif($n >= 80):
    echo 'You are Grade point A+';
elseif($n >= 70):
    echo 'You are Grade point A';
elseif($n >= 60):
    echo 'You are Grade point A-';
elseif($n >= 50):
    echo 'You are Grade point B';
elseif($n >= 40):
    echo 'You are Grade point D';
elseif($n >= 33):
    echo 'You are Grade point c';
elseif($n <= 32):
    echo 'Sorry! You are Failed.';
endif;