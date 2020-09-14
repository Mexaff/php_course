<?php


class homework6
{
    protected $property1 = 5;
    protected $property2 = 10;

    public function getProperty1()
    {
        return $this->property1;
    }

    public function setProperty1($temp)
    {
        $this->property1 = $temp;
    }

    public function getProperty2()
    {
        return $this->property2;
    }

    public function setProperty2($temp)
    {
        $this->property2 = $temp;
    }
}

class homework6_1 extends homework6
{
    protected $property3 = 15;

    public function getProperty3()
    {
        return $this->property3;
    }

    public function setProperty3($temp)
    {
        $this->property3 = $temp;
    }

    public function Sum()
    {
        return $this->property1 + $this->property2 + $this->property3;
    }
}
abstract class homework6_2 extends homework6
{
    protected $property3 = 15;

    public function getProperty3()
    {
        return $this->property3;
    }

    public function setProperty3($temp)
    {
        $this->property3 = $temp;
    }

    public function Sum()
    {
        return $this->property1 + $this->property2 - $this->property3;
    }

    abstract public function pow();
}
final class homework6_3 extends homework6
{
    protected $property3 = 15;

    public function getProperty3()
    {
        return $this->property3;
    }

    public function setProperty3($temp)
    {
        $this->property3 = $temp;
    }

    public function Sum()
    {
        return $this->property1 - $this->property2 - $this->property3;
    }
}

class homework6_1_1 extends homework6_1
{
    protected $property4 = 20;

    public function getProperty4()
    {
        return $this->property4;
    }

    public function setProperty4($temp)
    {
        $this->property4 = $temp;
    }

    public function first()
    {
        return $this->property4 + $this->property3;
    }
    public function second()
    {
        return $this->property4 + $this->property1 + $this->property2;
    }
}

class homework6_1_2 extends homework6_1
{
    protected $property4 = 20;

    public function getProperty4()
    {
        return $this->property4;
    }

    public function setProperty4($temp)
    {
        $this->property4 = $temp;
    }

    public function first()
    {
        return $this->property4 + $this->property3;
    }
    public function second()
    {
        return $this->property4 + $this->property1 + $this->property2;
    }
}

class homework6_2_1 extends homework6_2
{
  protected $property4 = 20;

  public function getProperty4()
    {
        return $this->property4;
    }

    public function setProperty4($temp)
    {
        $this->property4 = $temp;
    }
    public function first()
    {
        return $this->property4 + $this->property3;
    }
    public function second()
    {
        return $this->property4 + $this->property1 + $this->property2;
    }

    public function pow()
    {
        return pow($this->property4, 2);
    }
}

class homework6_2_2 extends homework6_2
{
  protected $property4 = 20;

  public function getProperty4()
    {
        return $this->property4;
    }

    public function setProperty4($temp)
    {
        $this->property4 = $temp;
    }
    public function first()
    {
        return $this->property4 + $this->property3;
    }
    public function second()
    {
        return $this->property4 + $this->property1 + $this->property2;
    }
    public function pow()
    {
        return pow($this->property4, 2);
    }
}

//$parent = new homework6();
//echo $parent->getProperty1().' '.$parent->getProperty2().'<br>';
//$parent->setProperty1(50);
//$parent->setProperty2(100);
//echo $parent->getProperty1().' '.$parent->getProperty2().'<br>';
//$son1 = new homework6_1();
//$son3 = new homework6_3();
//echo $son1->getProperty3().'<br>';
//echo $son3->getProperty3().'<br>';
//$son1->setProperty3(50);
//$son3->setProperty3(100);
//echo $son1->getProperty3().'<br>';
//echo $son3->getProperty3().'<br>';
//$grandson1 = new homework6_1_1;
//$grandson2 = new homework6_1_2;
//$grandson3 = new homework6_2_1;
//$grandson4 = new homework6_2_2();
//echo $grandson1->getProperty4().'<br>';
//echo $grandson2->getProperty4().'<br>';
//echo $grandson3->getProperty4().'<br>';
//echo $grandson4->getProperty4().'<br>';
//$grandson1->setProperty4(1);
//$grandson2->setProperty4(2);
//$grandson3->setProperty4(3);
//$grandson4->setProperty4(4);
//echo $grandson1->getProperty4().'<br>';
//echo $grandson2->getProperty4().'<br>';
//echo $grandson3->getProperty4().'<br>';
//echo $grandson4->getProperty4().'<br>';
//echo $grandson1->first().'<br>';
//echo $grandson1->second().'<br>';
//echo $grandson4->pow().'<br>';