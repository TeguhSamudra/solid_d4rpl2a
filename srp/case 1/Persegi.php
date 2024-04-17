<?php
class Persegi {
    private int $sisi;

    public function __construct(int $sisi){
        $this->sisi = $sisi;
    }
    public function getSisi() : int {
        return $this->sisi;
    }
}

?>