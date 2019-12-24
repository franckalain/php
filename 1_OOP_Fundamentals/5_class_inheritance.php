<?php
class Cars{

    var $wheels = 4;

    function gretting()
    {
        return "hello sir";
    }
}

$bmw = new Cars();


class trucks extends Cars{
    var $wheels = 20;
}

$tacoma = new trucks();
echo $tacoma->wheels;
echo $tacoma->gretting();