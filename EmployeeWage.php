<?php
$IS_PART_TIME=1;
$IS_FULL_TIME=2;
$EMP_RATE_PER_HR=20;
$empChk=rand(1,3);

  if($empChk==$IS_FULL_TIME){
      $empHrs=8;
  }
  elseif($empChk==$IS_PART_TIME){
      $empHrs=4;
  }
  else{
      $empHrs=0;
  }
  $empWage=$empHrs * $EMP_RATE_PER_HR;
  echo "Employee Wage is:".$empWage;
?>