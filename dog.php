<?php
include 'heyvan.php';

class dog extends Heyvan {
    public function elaveFunksiya() {
        return $this->name . " oynayır!";
    }
}