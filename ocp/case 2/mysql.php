<?php
include_once "dbms.php";
class MySQL implements DBMS {
    public function createConnection() {
        echo "Membuat MySQL koneksi...\n";
    }
}
?>
