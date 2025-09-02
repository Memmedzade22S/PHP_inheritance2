<?php
include 'Heyvan.php';

class dog extends Heyvan {
    public function elaveFunksiya() {
        return $this->ad . " oynayır!";
    }
}