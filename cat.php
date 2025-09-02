<?php
include 'Animal.php';

class cat extends Animal {
    public function elaveFunksiya() {
        return $this->name . " sakit dolaşır!";
    }
}