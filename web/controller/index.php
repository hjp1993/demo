<?php
/**
 * Created by PhpStorm.
 * User: hjp1993
 * Date: 2018/8/26
 * Time: 11:04
 */

namespace web\controller;

use core\View;
use Gregwar\Captcha\CaptchaBuilder;

class Index
{
    protected $view;

    public function __construct()
    {
        $this->view = new View();
    }

    public function show()
    {
        return $this->view->make('index')->with('version','v 1.0');
    }

    public function code()
    {
        header('Content-type: image/jpeg');
        $builder = new CaptchaBuilder;
        $builder->build();
        $builder->output();
    }
}