<?php
/**
 * Created by PhpStorm.
 * User: hanxinlong
 * Date: 2019/5/23
 * Time: 18:08
 */
namespace Getsign;

class TestPack
{

    protected $config = [];
    public function __construct($config=[])
    {
        $this->config= $config;
    }

    public function get()
    {
        return $this->config;
    }

    public function set($config=[])
    {
        $this->config = $config;
    }
}