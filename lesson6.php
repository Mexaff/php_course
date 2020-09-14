<?php


class Foo
{
    protected $var = 5;

    public function getVar()
    {
        return $this->var;
    }

    public function setVar($temp)
    {
        $this->var = $temp;
    }
}

class Bar extends Foo
{
    protected $var1 = 15;

    public function getVar1()
    {
        return $this->var1;
    }

    public function setVar1($temp)
    {
        $this->var1 = $temp;
    }

    public function sumVar()
    {
        //return $this->var + $this->var1;
        return $this->getVar() + $this->getVar1();
    }
}


//$foo = new Foo;
////var_dump($foo);
//echo $foo->getVar();
//
//$foo->setVar(10);
//
//echo '<br>';
////echo $foo->var;
////echo $foo->var = 100;
//echo $foo->getVar().'<br>';
//
//$foo1 = new $foo;
//echo $foo1->getVar().'<br>';



$bar = new Bar;

//echo $bar->getVar().'<br>';
//echo $bar->getVar1().'<br>';

echo $bar->sumVar().'<br>';


