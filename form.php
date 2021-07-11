<?php

$inp = $_POST['ourForm__inp'];

switch ($inp) {
    case 'q':
        echo 'one';
        break;
    case 'w':
        echo 'two';
        break;
    default:
        echo 'work';
}


