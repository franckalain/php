<?php
class Cars{

    var $wheel_count = 4;
    var $door_count = 4;

    function car_detail()
    {
        echo "this car has " . $this->wheel_count . " wheels" . " and " . $this->door_count . " doors";
    }
}

$bmw = new Cars();
$mercedes = new Cars();

echo $bmw->wheel_count . "<br>";
// assign another value to the instance
echo $mercedes->wheel_count = 10;

echo "<br>";

echo $mercedes->car_detail();

echo "<br>";

echo $bmw->car_detail();