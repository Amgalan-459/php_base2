<?php

class Main {

    public $var = 'var1';
    private $private = 'private';
    public $public = 'public';
    public static $ps = 'public static';

    public function __construct() {}

    public function func() : string {
        echo 'func';
        return $this->private;
    }

    public static function statFunc(int &$int) {
        ++$int;
    }
}