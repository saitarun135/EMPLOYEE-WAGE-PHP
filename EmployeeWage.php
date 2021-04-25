<?php
$IS_FULL_TIME=1;
$empChk=rand(1,2);
    if($empChk==$IS_FULL_TIME){
        echo "<h2>Employee is present</h2>";
    }
    else{
        echo "Employee is Absent";
    }
?>