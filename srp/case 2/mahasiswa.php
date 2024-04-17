<?php
class Mahasiswa{
    private string $nim;
    private string $nama;

    public function __construct(string $nim, string $nama){
        $this->nim = $nim;
        $this->nama = $nama;
    }
    public function getNim(): string{
        return $this->nim;
    }
    public function getNama(): string{
        return $this->nama;
    }
}
?>