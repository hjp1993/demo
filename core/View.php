<?php
/**
 * Created by PhpStorm.
 * User: hjp1993
 * Date: 2018/8/26
 * Time: 18:15
 */

namespace core;

class View
{
    protected $file;

    protected $vars = [];

    public function make($file)
    {
        $this->file = 'view/'.$file.'.html';
        return $this;
    }

    public function with($name,$value)
    {
        $this->vars[$name] = $value;
        return $this;
    }

    public function __toString()
    {
        extract($this->vars);
        include $this->file;
        return '';
    }
}