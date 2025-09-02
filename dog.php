<?php
include 'Animal.php';

class dog extends Animal {
    public function elaveFunksiya() {
        return $this->name . " oynayır!";
    }
}