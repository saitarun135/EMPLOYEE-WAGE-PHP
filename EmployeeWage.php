<?php
$IS_PART_TIME=1;
$IS_FULL_TIME=2;
$EMP_RATE_PER_HR=20;
$totalEmpWage=0;
$NUM_OF_WORKING_DAYS=2;
for($day=0;$day<$NUM_OF_WORKING_DAYS;$day++){
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
        $totalEmpWage += $empWage;
       // echo "Employee wage:".$empWage."\n";
       
}
echo "Total wage :".$totalEmpWage."<br>";
echo "Employee wage:".$empWage;

?>