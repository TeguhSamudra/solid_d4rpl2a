<?php
include_once "Elektronik.php";

class Saklar {
    private BarangElektronik $item;
    private bool $keaktifan = false;
    
    public function __construct(BarangElektronik $item) {
        $this->item = $item;
    }
    
    public function berhenti(): void {
        echo "berhenti berputar";
    }
    
    public function berubah(): void {
        $this->keaktifan = !$this->keaktifan;
        if ($this->keaktifan) {
            echo "Saklar diaktifkan untuk " . $this->item->getNama() . ".";
        } else {
            echo "Saklar dinonaktifkan untuk " . $this->item->getNama() . ".";
        }
    }
}
?>
