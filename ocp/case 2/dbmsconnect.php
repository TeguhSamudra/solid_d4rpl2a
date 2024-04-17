<?php
include_once "dbms.php";
class DBMSConnection {
    public function connect(DBMS $dbms) {
        $dbms->createConnection();
    }
}

?>
