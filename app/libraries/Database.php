<?php

class Database {

    private $dbHost = "localhost";
    private $dbUser = "root";
    private $dbPassword = "";
    private $dbTable = "tourism_management";
    public $dbHandle;
    public $_result;

    public function __construct() {
        $this->dbHandle = mysqli_connect($this->dbHost, $this->dbUser, $this->dbPassword, $this->dbTable);
        if ($this->dbHandle) {
            return 1;
        } else {
            return 0;
        }
    }
    

    function query($query, $singleResult = 0) {

        $this->_result = mysqli_query($this->dbHandle, $query);

        if (preg_match("/select/i", $query)) {
            $result = array();
            $table = array();
            $field = array();
            $tempResults = array();
            $numOfFields = 0;
            while ($fieldinfo = mysqli_fetch_field($this->_result)) {
                array_push($table, $fieldinfo->table);
                array_push($field, $fieldinfo->name);
                $numOfFields++;
            }
            while ($row = mysqli_fetch_row($this->_result)) {
                for ($i = 0; $i < $numOfFields; ++$i) {
                    $table[$i] = trim(ucfirst($table[$i]), "s");
                    $tempResults[$table[$i]][$field[$i]] = $row[$i];
                }
                if ($singleResult == 1) {
                    mysqli_free_result($this->_result);
                    return $tempResults;
                }
                array_push($result, $tempResults);
            }
            mysqli_free_result($this->_result);
            return($result);
        }
    }


}
