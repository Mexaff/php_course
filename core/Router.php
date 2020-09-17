<?php

namespace core;


class Router
{
    protected $var = 'Class properties';

    public function getVar()
    {
        return $this->var;
    }

    public function setVar($temp)
    {
        $this->var = $temp;
    }



    public function run()
    {
        var_export($this->getVar());
    }
}