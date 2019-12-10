<?php 

class Cars
{
    function greetting()
    {

    }

    function greetting2()
    {

    }
}

$the_methods = get_class_methods('Cars');

foreach ($the_methods as $method)
{
    echo $method . '<br>';
}