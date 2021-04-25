<?php
function calWage(){
    $IS_PART_TIME=1;
    $IS_FULL_TIME=2;
    $EMP_RATE_PER_HR=20;
    $empChk=rand(1,3);
    switch($empChk){
        case 1:
            $empChk==$IS_PART_TIME;
            $empHrs=4;
            break;
        case 2:
            $empChk== $IS_FULL_TIME;
            $empHrs=8;
            break;    
        default:
            $empHrs=0;
            break;
        }
        $empWage=$EMP_RATE_PER_HR*$empChk;
        echo "Employee wage:".$empWage;
}
  calWage();
?>