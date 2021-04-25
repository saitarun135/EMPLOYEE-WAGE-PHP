<?php
#https://stackoverflow.com/questions/21083808/php-class-notice-undefined-property-error/21083829
class EmpWageBuilderObject{
    const IS_PART_TIME=1;
    const IS_FULL_TIME=2;
    public $company;
    public $empRatePerHour;
    public $numOfWorkingDays;
    public $maxHoursPerMonth;
 
    public function __construct($company,$empRatePerHour,$numOfWorkingDays,$maxHoursPerMonth)
    {
     $this->company=$company;
     $this->empRatePerHour=$empRatePerHour;
     $this->numOfWorkingDays=$numOfWorkingDays;
     $this->maxHoursPerMonth=$maxHoursPerMonth;   
    }   

    function computeEmployeeWage(){
     $empHrs=0;
     $totalEmpHrs=0;
     $totalWorkingDays=0;
     while($totalEmpHrs<=$this->maxHoursPerMonth && $totalWorkingDays< $this->numOfWorkingDays){
        $totalWorkingDays++;
        $empChk=rand(1,3);
        switch($empChk){
            case (self::IS_PART_TIME):
                $empHrs=4;
                break;
            case (self::IS_FULL_TIME):
                $empHrs=8;
                break;
            default:
                $empHrs=0;
                break;
        }
        $totalEmpHrs+=$empHrs;
        echo "Day".$totalWorkingDays."employeehours".$empHrs."<br>";
      
     }
     $totalEmpWage=$totalEmpHrs* $this->empRatePerHour;
     return $totalEmpWage;
    }
}

$Dmart=new EmpWageBuilderObject("D-MART",18,24,100);
$Kmart=new EmpWageBuilderObject("K-MART",10,22,120);
$reliance=new EmpWageBuilderObject("RELIANCE",15,28,180);
echo "DMART-COMPANY"."<br>";
echo "Total EmployeeWage for a company".$Dmart->company."is".$Dmart->computeEmployeeWage()."<br>";
echo "KMART-COMPANY"."<br>";
echo "Total EmployeeWage for a company".$Kmart->company."is".$Kmart->computeEmployeeWage()."<br>";
echo "RELIANCE-INDUSTRIES"."<br>";
echo "Total EmployeeWage for a company".$reliance->company."is".$reliance->computeEmployeeWage();
?>