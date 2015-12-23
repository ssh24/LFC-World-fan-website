<?php
/**
 * ----------------------------------------------
 * Advanced Guestbook 2.4.4 (PHP/MySQL)
 * Copyright (c) Chi Kien Uong
 * URL: http://www.proxy2.de
 * ----------------------------------------------
 */

class gbook_sql {

    var $conn_id;
    var $result;
    var $record;
    var $db = array();
    var $port;

    function gbook_sql() {
        global $GB_DB;
        $this->db = &$GB_DB;
        if(ereg(":",$this->db['host'])) {
            list($host,$port) = explode(":",$this->db['host']);
            $this->port = $port;
        } else {
            $this->port = 3306;
        }
    }

    function connect() {
        $this->conn_id = mysql_connect($this->db['host'].":".$this->port,$this->db['user'],$this->db['pass']);
        if ($this->conn_id == 0) {
            $this->sql_error("Connection Error");
        }
        if (!mysql_select_db($this->db['dbName'], $this->conn_id)) {
            $this->sql_error("Database Error");
        }
        return $this->conn_id;
    }

    function query($query_string) {
        $this->result = mysql_query($query_string,$this->conn_id);
        if (!$this->result) {
            $this->sql_error("Query Error");
        }
        return $this->result;
    }

    function fetch_array($query_id) {
        $this->record = mysql_fetch_array($query_id,MYSQL_ASSOC);
        return $this->record;
    }

    function num_rows($query_id) {
        return ($query_id) ? mysql_num_rows($query_id) : 0;
    }

    function num_fields($query_id) {
        return ($query_id) ? mysql_num_fields($query_id) : 0;
    }

    function free_result($query_id) {
        return mysql_free_result($query_id);
    }

    function affected_rows() {
        return mysql_affected_rows($this->conn_id);
    }

    function close_db() {
        if($this->conn_id) {
            return mysql_close($this->conn_id);
        } else {
            return false;
        }
    }

    function sql_error($message) {
        global $TEC_MAIL;
        $description = mysql_error();
        $number = mysql_errno();
        $error ="MySQL Error : $message\n";
        $error.="Error Number: $number $description\n";
        $error.="Date        : ".date("D, F j, Y H:i:s")."\n";
        $error.="IP          : ".getenv("REMOTE_ADDR")."\n";
        $error.="Browser     : ".getenv("HTTP_USER_AGENT")."\n";
        $error.="Referer     : ".getenv("HTTP_REFERER")."\n";
        $error.="PHP Version : ".PHP_VERSION."\n";
        $error.="OS          : ".PHP_OS."\n";
        $error.="Server      : ".getenv("SERVER_SOFTWARE")."\n";
        $error.="Server Name : ".getenv("SERVER_NAME")."\n";
        echo "<b><font size=4 face=Arial>$message</font></b><hr>";
        echo "<pre>$error</pre>";
        if (eregi("^[_a-z0-9-]+(\\.[_a-z0-9-]+)*@([0-9a-z][0-9a-z-]*[0-9a-z]\\.)+[a-z]{2,5}$", $TEC_MAIL) ) {
            $headers = "From: $TEC_MAIL\r\nX-Mailer: Advanced Guestbook 2";
            // @mail("$TEC_MAIL","Guestbook - Error","$error","$headers");
        }
        exit();
    }

}

?>