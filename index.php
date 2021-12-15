<?php

class SSD
{
    public function nameHardDrive()
    {
        echo "Hard Drive" . '<br>';
    }
}

class Computer
{
    protected $hardDrive;
    public function __construct($hardDrive)
    {
        $this->hardDrive = $hardDrive;
    }

    public function Specification()
    {
        $this->hardDrive->nameHardDrive();
    }
}


class Computer2
{
    protected $hardDrive;
    public function __construct($hardDrive)
    {
        $this->hardDrive = $hardDrive;
    }

    public function Specification()
    {
        $this->hardDrive->nameHardDrive();
    }
}


class Computer3
{
    protected $hardDrive;
    public function __construct($hardDrive)
    {
        $this->hardDrive = $hardDrive;
    }

    public function Specification()
    {
        $this->hardDrive->nameHardDrive();
    }
}

class Computer4
{
    protected $hardDrive;
    public function __construct($hardDrive)
    {
        $this->hardDrive = $hardDrive;
    }

    public function Specification()
    {
        $this->hardDrive->nameHardDrive();
    }
}

class Computer5
{
    protected $hardDrive;
    public function __construct($hardDrive)
    {
        $this->hardDrive = $hardDrive;
    }

    public function Specification()
    {
        $this->hardDrive->nameHardDrive();
    }
}
class Computer6
{
    protected $hardDrive;
    public function __construct($hardDrive)
    {
        $this->hardDrive = $hardDrive;
    }

    public function Specification()
    {
        $this->hardDrive->nameHardDrive();
    }
}
class Computer7
{
    protected $hardDrive;
    public function __construct($hardDrive)
    {
        $this->hardDrive = $hardDrive;
    }

    public function Specification()
    {
        $this->hardDrive->nameHardDrive();
    }
}
class Computer8
{
    protected $hardDrive;
    public function __construct($hardDrive)
    {
        $this->hardDrive = $hardDrive;
    }

    public function Specification()
    {
        $this->hardDrive->nameHardDrive();
    }
}
class Computer9
{
    protected $hardDrive;
    public function __construct($hardDrive)
    {
        $this->hardDrive = $hardDrive;
    }

    public function Specification()
    {
        $this->hardDrive->nameHardDrive();
    }
}






$ssd = new SSD;
$computer = new Computer($ssd);
$computer->Specification();

$computer2 = new Computer2($ssd);
$computer2->Specification();

$computer2 = new Computer3($ssd);
$computer2->Specification();


$computer2 = new Computer4($ssd);
$computer2->Specification();

$computer2 = new Computer5($ssd);
$computer2->Specification();

$computer2 = new Computer6($ssd);
$computer2->Specification();

$computer2 = new Computer5($ssd);
$computer2->Specification();

$computer2 = new Computer6($ssd);
$computer2->Specification();
