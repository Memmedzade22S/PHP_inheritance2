<?php
class Olke {
    public $ad;

    public function __construct($ad) {
        $this->ad = $ad;
    }

    public function tanit() {
        return "Qardas olke " . $this->ad . "dir.";
    }
}