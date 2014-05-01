<?php
  ini_set('date.timezone', 'Europe/London');
    $startYear = 2010;
  $thisYear = date('Y');
  if ($startYear == $thisYear) {
    echo $startYear;
  } else {
    echo "{$startYear}-{$thisYear}";
  }
