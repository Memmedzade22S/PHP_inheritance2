<?php
include 'Heyvan.php';

class cat extends Heyvan {
    public function elaveFunksiya() {
        return $this->ad . " sakit dolaşır!";
    }
}