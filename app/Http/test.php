<?php

/**
 *  @claas
 */
class Piyush
{
    private $desc;
    private $tool;

    public function __construct($desc, $tool)
    {
        $this->desc = $desc;
        $this->tool = $tool;
    }

    public function setDesc($desc)
    {
        $this->desc = $desc;
    }

    public function getDesc($desc)
    {
        $this->desc = $desc;
    }
}
/*
* 
*/

$check = new Piyush('Piyush', 78);
$check->setDesc('kfdkfd');
var_dump($check);
