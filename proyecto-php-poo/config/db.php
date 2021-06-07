<?php

class Database {
    public static function connect() {
        $db = new sqli("192.168.64.2", "root", "", "tienda_master");
        $db->query("SET NAMES 'utf8'");

        return $db;
    }
}