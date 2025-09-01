<?php
class Heyvan {
    public $ad;

    public function __construct($ad) {
        $this->ad = $ad;
    }

    public function seseVer() {
        return $this->ad . " səs çıxarır!";
    }
}