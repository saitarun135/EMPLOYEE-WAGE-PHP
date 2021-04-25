<?php
$IS_PART_TIME=1;
$IS_FULL_TIME=2;
$EMP_RATE_PER_HR=20;
$totalEmpWage=0;
$NUM_OF_WORKING_DAYS=24;
$MAX_HRS_IN_MONTH=120;
$totalEmpHrs=0;
$totalWorkingDays=0;
$empHrs=0;
    while($totalEmpHrs<=$MAX_HRS_IN_MONTH && 
        $totalWorkingDays<$NUM_OF_WORKING_DAYS){
    $totalWorkingDays++;
    $empChk=rand(1,3);
    switch($empChk){
        case $IS_PART_TIME:
                $empHrs=4;
                break;
        case $IS_FULL_TIME:
                $empHrs=8;
                break;
        default:
            $empHrs=0;
            break;
    }

    $totalEmpHrs += $empHrs;
    echo "Days:".$totalWorkingDays."Hours:".$empHrs."<br>";  
}
$totalEmpWage=$totalEmpHrs * $EMP_RATE_PER_HR;
echo "Total Empwage:".$totalEmpWage;
?>