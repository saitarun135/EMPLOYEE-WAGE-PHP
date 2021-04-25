<?php
class EmpWageBuilderMultiCompany{
    const IS_PART_TIME=1;
    const IS_FULL_TIME=2;
   
function computeEmployeeWage($company,$empRatePerHour,$numOfWorkingDays,$maxHoursPerMonth){
    $empHrs=0;
    $totalEmpHrs=0;
    $totalWorkingDays=0;
    while($totalEmpHrs<=$maxHoursPerMonth && $totalWorkingDays<$numOfWorkingDays){
            $totalWorkingDays++;
            $empChk=rand(1,2);
            switch($empChk){
                case 1:
                    $empHrs=4;
                    //echo"Employee is PART-TIMER"."<br>";
                    break;
                case 2:
                    $empHrs=8;
                    //echo "Employee is FULL-TIMER"."<br>";
                    break;
                default:
                    $empHrs=0;
                    break;
            }
            $totalEmpHrs += $empHrs;
            echo "Day".$totalWorkingDays."EmployeeHours:".$totalEmpHrs.'<br>';
           
    }
    $totalEmpWage=$totalEmpHrs * $empRatePerHour;
    echo "TotalEmployeeWage for a company ".$company." is =".$totalEmpWage."<br>";
      
    }
}

$calculateWage=new EmpWageBuilderMultiCompany;
echo "EmployeeWage for DMART"."<br>";
echo $calculateWage->computeEmployeeWage("DMART",20,24,120);
echo "EmployeeWage for KMART"."<br>";
$calculateWage->computeEmployeeWage("KMART",10,20,100);
?>