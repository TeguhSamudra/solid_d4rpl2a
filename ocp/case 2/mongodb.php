<?php
include_once "dbms.php";
class MongoDB implements DBMS {
    public function createConnection() {
        echo "Membuat MongoDB koneksi...\n";
    }
}

?>
