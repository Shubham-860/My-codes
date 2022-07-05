<?php
$n1 = $_POST["n1"];
$n2 = $_POST["n2"];
$val = $_POST["js"];
if ($val == "+"){
    echo $n1+$n2;
}
elseif($val == "-"){
    echo $n1-$n2;
}
elseif($val == "*"){
    echo $n1*$n2;
}
else{
    echo $n1/$n2;
}
?>