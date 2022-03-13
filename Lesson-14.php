<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson 14</title>
    <style>
        h1 {
          font-size: 15px;
          font-weight: 600;
           }
    </style>
</head>
<body>
  <footer>
	  <?php 
      echo "<h1> 3 task (Year In Footer) = " . date('Y') . "</h1>";
	  ?>
  </footer>
</body>
</html>

<?php 

function getCalcAdd (int|float $arg1, int|float $arg2):int|float {
  echo "<br> $arg1 + $arg2 = ";
  return $arg1 + $arg2;
};

function getCalcSubtract (int|float $arg1, int|float $arg2):int|float {
  echo "<br> $arg1 - $arg2 = ";
  return $arg1 - $arg2;
};

function getCalcMultiplication (int|float $arg1, int|float $arg2):int|float {
  echo "<br> $arg1 * $arg2 = ";
  return $arg1 * $arg2;
};

function getCalcDivision (int|float $arg1, int|float $arg2):int|float {
  echo "<br> $arg1 / $arg2 = ";
  return $arg1 / $arg2;
};

function mathOperation(int|float $arg1, int|float $arg2, string $operation):int|float {
  switch ($operation) {
    case '+': 
      echo "<br> $arg1 + $arg2 = ";
      $value = $arg1 + $arg2;
      break;
    case '-':
      echo "<br> $arg1 - $arg2 = ";
      $value = $arg1 - $arg2;
      break;
    case '*':
      echo "<br> $arg1 * $arg2 = ";
      $value = $arg1 * $arg2;
      break;
    case '/':
      echo "<br> $arg1 / $arg2 = ";
      $value = $arg1 / $arg2;
      break;
    default: 
    $value = 0;
    echo "<br> $arg1 $operation $arg2 = Считать такое не обучен ";
  };
  return $value;
}

function power(int|float $val, int $pow):int|float {
  if ($pow < 0) { 
    return 1 / power($val, -$pow);
  }
  if ($pow == 0) {
    return 1;
  }
  $result = $val * power($val, $pow-1);
  return $result;
}

function showTime () {
  $h = date("H");
  $m = date("i");
  if ($h == 1 || $h == 21) {
    $hours = " час";}
  elseif (($h >= 2 && $h <= 4) || ($h >= 22 && $h <= 24)) {
    $hours = " часа";}
  else {$hours = " часов";
  }
  
  if (($m >= 5) && ($m <= 20)) {
    $minutes = " минут.";}
  elseif ($m >= 2 && $m <= 4) {
    $minutes = " минуты.";}
  elseif ((($m % 10) >= 2) && (($m % 10) <= 4)) {
    $minutes = " минуты.";}
  elseif (($m % 10) === 1) {
    $minutes = " минута.";}
  else {
    $minutes = " минут.";
  }
  echo $h . $hours . " " . $m . $minutes;
}

echo "<h1> 1 task </h1>";
echo getCalcAdd(15,57);
echo getCalcSubtract(56,12);
echo getCalcMultiplication(5,7);
echo getCalcDivision(1024,2);

echo "<h1> 2 task </h1>";
echo mathOperation(15,57,'+');
echo mathOperation(15,57,'-');
echo mathOperation(15,57,'*');
echo mathOperation(15,57,'/');
echo mathOperation(15,57,'#');

echo "<h1> 4 task </h1>";
$a = 2;
$b = 8;
echo "$a ^ $b = " . power($a, $b) . "<br>";
$a = 2;
$b = -3;
echo "$a ^ $b = " . power($a, $b) . "<br>";

echo "<h1> 5 task </h1>";
showTime();

?>
