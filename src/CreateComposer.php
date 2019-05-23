<?php

namespace GetSign;

class CreateComposer {

    protected $config;

    public function __construct($config=[]) {
        $this->config = $config;
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
