<?php

include "ComparableCircle.php";
$circleOne = new ComparableCircle('circleOne', 4);
$circleTwo = new ComparableCircle('circleTwo', 5);
$circleThree = new ComparableCircle('circleThree', 6);
$test = $circleOne->compareTo($circleTwo);
echo('---Comparable: <br>');
echo $test;