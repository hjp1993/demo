<?php
/**
 * Created by PhpStorm.
 * User: hjp1993
 * Date: 2018/8/26
 * Time: 11:24
 */

namespace core;

class Bootstrap
{
    public static function run()
    {
        self::parseUrl();
    }

    public static function parseUrl()
    {
        if (isset($_GET['s'])) {
            $info = explode('/', $_GET['s']);
            $class  = '\web\controller\\' . $info[0];
            $action = $info[1];
        } else {
            $class  = '\web\controller\index';
            $action = 'show';
        }
        echo (new $class)->$action();
    }
}