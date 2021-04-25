<?php
class EmpWageBuilder{
    const IS_PART_TIME=1;
    const IS_FULL_TIME=2;
    const EMP_RATE_PER_HOUR=18;
    const NO_OF_WORKING_DAYS=24;
    const MAX_HRS_IN_MONTH=120;

function computeEmployeeWage(){
    $empHrs=0;
    $totalEmpHrs=0;
    $totalWorkingDays=0;
    while($totalEmpHrs<=(self::MAX_HRS_IN_MONTH) && $totalWorkingDays<(self::NO_OF_WORKING_DAYS)){
            $totalWorkingDays++;
            $empChk=rand(1,2);
            switch($empChk){
                case 1:
                    $empHrs=4;
                    break;
                case (self::IS_FULL_TIME):
                    $empHrs=8;
                    break;
                default:
                    $empHrs=0;
                    break;
            }
            $totalEmpHrs += $empHrs;
            echo "Day".$totalWorkingDays."EmployeeHrs:".$empHrs."<br>";
           
            
    }
    $totalEmpWage=$totalEmpHrs * (self::EMP_RATE_PER_HOUR);
    echo "TotalEmployeeHours:".$totalEmpHrs.'<br>';
    echo "TotalEmployeeWage: ".$totalEmpWage."<br>";
    return $totalEmpWage;
  
    }
}

$calculateWage=new EmpWageBuilder;
$calculateWage->computeEmployeeWage();
?>