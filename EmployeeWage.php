<?php
$IS_FULL_TIME=1;
$EMP_RATE_PER_HR=20;
$empChk=rand(1,2);
  if($empChk==$IS_FULL_TIME){
      $empHrs=8;
  }
  else{
      $empHrs=0;
  }
  $empWage=$empHrs * $EMP_RATE_PER_HR;
  echo "Employee Wage is:".$empWage;
?>