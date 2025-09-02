<?php
include 'heyvan.php';

class cat extends heyvan {
    public function elaveFunksiya() {
        return $this->name . " sakit dolaşır!";
    }
}