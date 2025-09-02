<?php
class Animal {
    public $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function seseVer() {
        return $this->name . " səs çıxarır!";
    }
}