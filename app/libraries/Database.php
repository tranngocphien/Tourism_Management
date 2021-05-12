<?php

class Database {

    private $dbHost = "localhost";
    private $dbUser = "root";
    private $dbPassword = "";
    private $dbTable = "tourism_management";
    public $dbHandle;

    public function __construct() {
        $this->dbHandle = mysqli_connect($this->dbHost, $this->dbUser, $this->dbPassword, $this->dbTable);
        if ($this->dbHandle) {
            return 1;
        } else {
            return 0;
        }
    }

    public function query($query) {
        if ($this->dbHandle) {
            if (mysqli_query($this->dbHandle, $query)) {
                return true;
            }
        }
        return false;
    }

    public function getNumRows() {
        return mysqli_num_rows($this->_result);
    }

}
