<?php

function paintOfDigit($digit){
    $result = '';
    $digitArray  = array_map('intval', str_split($digit));
    foreach ($digitArray as $value){
        if($value == 1){
            $result .= "<span style=\"color:red\">1</span>";
        }elseif ($value == 2){
            $result .= "<span style=\"color:green\">2</span>";
        }elseif ($value == 3){
            $result .= "<span style=\"color:yellow\">3</span>";
        }elseif ($value == 3){
            $result .= "<span style=\"color:blue\">4</span>";
        }else {
            $result .= $value;
        }
    }
    return $result;
}